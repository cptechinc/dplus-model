<?php

namespace Base;

use \PurchaseOrderDetail as ChildPurchaseOrderDetail;
use \PurchaseOrderDetailQuery as ChildPurchaseOrderDetailQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `po_detail` table.
 *
 * @method     ChildPurchaseOrderDetailQuery orderByPohdnbr($order = Criteria::ASC) Order by the PohdNbr column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtline($order = Criteria::ASC) Order by the PodtLine column
 * @method     ChildPurchaseOrderDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtdesc1($order = Criteria::ASC) Order by the PodtDesc1 column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtdesc2($order = Criteria::ASC) Order by the PodtDesc2 column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtvenditemnbr($order = Criteria::ASC) Order by the PodtVendItemNbr column
 * @method     ChildPurchaseOrderDetailQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtshipdate($order = Criteria::ASC) Order by the PodtShipDate column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtexptdate($order = Criteria::ASC) Order by the PodtExptDate column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtcancdate($order = Criteria::ASC) Order by the PodtCancDate column
 * @method     ChildPurchaseOrderDetailQuery orderByIntbuompur($order = Criteria::ASC) Order by the IntbUomPur column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtqtyord($order = Criteria::ASC) Order by the PodtQtyOrd column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtcost($order = Criteria::ASC) Order by the PodtCost column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtcosttot($order = Criteria::ASC) Order by the PodtCostTot column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtrel($order = Criteria::ASC) Order by the PodtRel column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtspecordr($order = Criteria::ASC) Order by the PodtSpecOrdr column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtglacct($order = Criteria::ASC) Order by the PodtGlAcct column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtsonbr($order = Criteria::ASC) Order by the PodtSoNbr column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtstat($order = Criteria::ASC) Order by the PodtStat column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtorigsoline($order = Criteria::ASC) Order by the PodtOrigSoLine column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtqtyduein($order = Criteria::ASC) Order by the PodtQtyDueIn column
 * @method     ChildPurchaseOrderDetailQuery orderByPodttype($order = Criteria::ASC) Order by the PodtType column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtwghttot($order = Criteria::ASC) Order by the PodtWghtTot column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtforeigncost($order = Criteria::ASC) Order by the PodtForeignCost column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtforeigncosttot($order = Criteria::ASC) Order by the PodtForeignCostTot column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtstanunitcost($order = Criteria::ASC) Order by the PodtStanUnitCost column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtackdate($order = Criteria::ASC) Order by the PodtAckDate column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtinvcclearflag($order = Criteria::ASC) Order by the PodtInvcClearFlag column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtprtkitdet($order = Criteria::ASC) Order by the PodtPrtKitDet column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtdestwhse($order = Criteria::ASC) Order by the PodtDestWhse column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtrevision($order = Criteria::ASC) Order by the PodtRevision column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtprtpoeoru($order = Criteria::ASC) Order by the PodtPrtPoEOrU column
 * @method     ChildPurchaseOrderDetailQuery orderByPotbcnfmcode($order = Criteria::ASC) Order by the PotbCnfmCode column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtrcptnbr($order = Criteria::ASC) Order by the PodtRcptNbr column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtwipnbr($order = Criteria::ASC) Order by the PodtWipNbr column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtordras($order = Criteria::ASC) Order by the PodtOrdrAs column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtboldate($order = Criteria::ASC) Order by the PodtBolDate column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtlistpric($order = Criteria::ASC) Order by the PodtListPric column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtdelivereddate($order = Criteria::ASC) Order by the PodtDeliveredDate column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtlandcost($order = Criteria::ASC) Order by the PodtLandCost column
 * @method     ChildPurchaseOrderDetailQuery orderByPodtcasesord($order = Criteria::ASC) Order by the PodtCasesOrd column
 * @method     ChildPurchaseOrderDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderDetailQuery groupByPohdnbr() Group by the PohdNbr column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtline() Group by the PodtLine column
 * @method     ChildPurchaseOrderDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtdesc1() Group by the PodtDesc1 column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtdesc2() Group by the PodtDesc2 column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtvenditemnbr() Group by the PodtVendItemNbr column
 * @method     ChildPurchaseOrderDetailQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtshipdate() Group by the PodtShipDate column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtexptdate() Group by the PodtExptDate column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtcancdate() Group by the PodtCancDate column
 * @method     ChildPurchaseOrderDetailQuery groupByIntbuompur() Group by the IntbUomPur column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtqtyord() Group by the PodtQtyOrd column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtcost() Group by the PodtCost column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtcosttot() Group by the PodtCostTot column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtrel() Group by the PodtRel column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtspecordr() Group by the PodtSpecOrdr column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtglacct() Group by the PodtGlAcct column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtsonbr() Group by the PodtSoNbr column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtstat() Group by the PodtStat column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtorigsoline() Group by the PodtOrigSoLine column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtqtyduein() Group by the PodtQtyDueIn column
 * @method     ChildPurchaseOrderDetailQuery groupByPodttype() Group by the PodtType column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtwghttot() Group by the PodtWghtTot column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtforeigncost() Group by the PodtForeignCost column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtforeigncosttot() Group by the PodtForeignCostTot column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtstanunitcost() Group by the PodtStanUnitCost column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtackdate() Group by the PodtAckDate column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtinvcclearflag() Group by the PodtInvcClearFlag column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtprtkitdet() Group by the PodtPrtKitDet column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtdestwhse() Group by the PodtDestWhse column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtrevision() Group by the PodtRevision column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtprtpoeoru() Group by the PodtPrtPoEOrU column
 * @method     ChildPurchaseOrderDetailQuery groupByPotbcnfmcode() Group by the PotbCnfmCode column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtrcptnbr() Group by the PodtRcptNbr column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtwipnbr() Group by the PodtWipNbr column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtordras() Group by the PodtOrdrAs column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtboldate() Group by the PodtBolDate column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtlistpric() Group by the PodtListPric column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtdelivereddate() Group by the PodtDeliveredDate column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtlandcost() Group by the PodtLandCost column
 * @method     ChildPurchaseOrderDetailQuery groupByPodtcasesord() Group by the PodtCasesOrd column
 * @method     ChildPurchaseOrderDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinPurchaseOrderDetailReceipt($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinPurchaseOrderDetailReceipt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinPurchaseOrderDetailReceipt($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceipt relation
 *
 * @method     ChildPurchaseOrderDetailQuery joinWithPurchaseOrderDetailReceipt($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceipt relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinWithPurchaseOrderDetailReceipt() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinWithPurchaseOrderDetailReceipt() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinWithPurchaseOrderDetailReceipt() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceipt relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPurchaseOrderDetailQuery joinWithPurchaseOrderDetailReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinWithPurchaseOrderDetailReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinWithPurchaseOrderDetailReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinWithPurchaseOrderDetailReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildPurchaseOrderDetailQuery joinWithPurchaseOrderDetailLotReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildPurchaseOrderDetailQuery leftJoinWithPurchaseOrderDetailLotReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPurchaseOrderDetailQuery rightJoinWithPurchaseOrderDetailLotReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPurchaseOrderDetailQuery innerJoinWithPurchaseOrderDetailLotReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     \PurchaseOrderQuery|\ItemMasterItemQuery|\PurchaseOrderDetailReceiptQuery|\PurchaseOrderDetailReceivingQuery|\PurchaseOrderDetailLotReceivingQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPurchaseOrderDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetail matching the query
 * @method     ChildPurchaseOrderDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetail matching the query, or a new ChildPurchaseOrderDetail object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetail|null findOneByPohdnbr(int $PohdNbr) Return the first ChildPurchaseOrderDetail filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetail filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetail filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtdesc1(string $PodtDesc1) Return the first ChildPurchaseOrderDetail filtered by the PodtDesc1 column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtdesc2(string $PodtDesc2) Return the first ChildPurchaseOrderDetail filtered by the PodtDesc2 column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtvenditemnbr(string $PodtVendItemNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtVendItemNbr column
 * @method     ChildPurchaseOrderDetail|null findOneByIntbwhse(string $IntbWhse) Return the first ChildPurchaseOrderDetail filtered by the IntbWhse column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtshipdate(string $PodtShipDate) Return the first ChildPurchaseOrderDetail filtered by the PodtShipDate column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtexptdate(string $PodtExptDate) Return the first ChildPurchaseOrderDetail filtered by the PodtExptDate column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtcancdate(string $PodtCancDate) Return the first ChildPurchaseOrderDetail filtered by the PodtCancDate column
 * @method     ChildPurchaseOrderDetail|null findOneByIntbuompur(string $IntbUomPur) Return the first ChildPurchaseOrderDetail filtered by the IntbUomPur column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtqtyord(string $PodtQtyOrd) Return the first ChildPurchaseOrderDetail filtered by the PodtQtyOrd column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtcost(string $PodtCost) Return the first ChildPurchaseOrderDetail filtered by the PodtCost column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtcosttot(string $PodtCostTot) Return the first ChildPurchaseOrderDetail filtered by the PodtCostTot column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtrel(string $PodtRel) Return the first ChildPurchaseOrderDetail filtered by the PodtRel column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtspecordr(string $PodtSpecOrdr) Return the first ChildPurchaseOrderDetail filtered by the PodtSpecOrdr column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtglacct(string $PodtGlAcct) Return the first ChildPurchaseOrderDetail filtered by the PodtGlAcct column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtsonbr(int $PodtSoNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtSoNbr column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtstat(string $PodtStat) Return the first ChildPurchaseOrderDetail filtered by the PodtStat column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtorigsoline(int $PodtOrigSoLine) Return the first ChildPurchaseOrderDetail filtered by the PodtOrigSoLine column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtqtyduein(string $PodtQtyDueIn) Return the first ChildPurchaseOrderDetail filtered by the PodtQtyDueIn column
 * @method     ChildPurchaseOrderDetail|null findOneByPodttype(string $PodtType) Return the first ChildPurchaseOrderDetail filtered by the PodtType column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtwghttot(string $PodtWghtTot) Return the first ChildPurchaseOrderDetail filtered by the PodtWghtTot column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtforeigncost(string $PodtForeignCost) Return the first ChildPurchaseOrderDetail filtered by the PodtForeignCost column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtforeigncosttot(string $PodtForeignCostTot) Return the first ChildPurchaseOrderDetail filtered by the PodtForeignCostTot column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtstanunitcost(string $PodtStanUnitCost) Return the first ChildPurchaseOrderDetail filtered by the PodtStanUnitCost column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtackdate(string $PodtAckDate) Return the first ChildPurchaseOrderDetail filtered by the PodtAckDate column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtinvcclearflag(string $PodtInvcClearFlag) Return the first ChildPurchaseOrderDetail filtered by the PodtInvcClearFlag column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtprtkitdet(string $PodtPrtKitDet) Return the first ChildPurchaseOrderDetail filtered by the PodtPrtKitDet column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtdestwhse(string $PodtDestWhse) Return the first ChildPurchaseOrderDetail filtered by the PodtDestWhse column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtrevision(string $PodtRevision) Return the first ChildPurchaseOrderDetail filtered by the PodtRevision column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtprtpoeoru(string $PodtPrtPoEOrU) Return the first ChildPurchaseOrderDetail filtered by the PodtPrtPoEOrU column
 * @method     ChildPurchaseOrderDetail|null findOneByPotbcnfmcode(string $PotbCnfmCode) Return the first ChildPurchaseOrderDetail filtered by the PotbCnfmCode column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtrcptnbr(int $PodtRcptNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtRcptNbr column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtwipnbr(int $PodtWipNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtWipNbr column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtordras(string $PodtOrdrAs) Return the first ChildPurchaseOrderDetail filtered by the PodtOrdrAs column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtboldate(string $PodtBolDate) Return the first ChildPurchaseOrderDetail filtered by the PodtBolDate column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtlistpric(string $PodtListPric) Return the first ChildPurchaseOrderDetail filtered by the PodtListPric column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtdelivereddate(string $PodtDeliveredDate) Return the first ChildPurchaseOrderDetail filtered by the PodtDeliveredDate column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtlandcost(string $PodtLandCost) Return the first ChildPurchaseOrderDetail filtered by the PodtLandCost column
 * @method     ChildPurchaseOrderDetail|null findOneByPodtcasesord(int $PodtCasesOrd) Return the first ChildPurchaseOrderDetail filtered by the PodtCasesOrd column
 * @method     ChildPurchaseOrderDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetail filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetail filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetail|null findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetail filtered by the dummy column
 *
 * @method     ChildPurchaseOrderDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildPurchaseOrderDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOne(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetail requireOneByPohdnbr(int $PohdNbr) Return the first ChildPurchaseOrderDetail filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetail filtered by the PodtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtdesc1(string $PodtDesc1) Return the first ChildPurchaseOrderDetail filtered by the PodtDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtdesc2(string $PodtDesc2) Return the first ChildPurchaseOrderDetail filtered by the PodtDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtvenditemnbr(string $PodtVendItemNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtVendItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByIntbwhse(string $IntbWhse) Return the first ChildPurchaseOrderDetail filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtshipdate(string $PodtShipDate) Return the first ChildPurchaseOrderDetail filtered by the PodtShipDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtexptdate(string $PodtExptDate) Return the first ChildPurchaseOrderDetail filtered by the PodtExptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtcancdate(string $PodtCancDate) Return the first ChildPurchaseOrderDetail filtered by the PodtCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByIntbuompur(string $IntbUomPur) Return the first ChildPurchaseOrderDetail filtered by the IntbUomPur column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtqtyord(string $PodtQtyOrd) Return the first ChildPurchaseOrderDetail filtered by the PodtQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtcost(string $PodtCost) Return the first ChildPurchaseOrderDetail filtered by the PodtCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtcosttot(string $PodtCostTot) Return the first ChildPurchaseOrderDetail filtered by the PodtCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtrel(string $PodtRel) Return the first ChildPurchaseOrderDetail filtered by the PodtRel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtspecordr(string $PodtSpecOrdr) Return the first ChildPurchaseOrderDetail filtered by the PodtSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtglacct(string $PodtGlAcct) Return the first ChildPurchaseOrderDetail filtered by the PodtGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtsonbr(int $PodtSoNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtSoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtstat(string $PodtStat) Return the first ChildPurchaseOrderDetail filtered by the PodtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtorigsoline(int $PodtOrigSoLine) Return the first ChildPurchaseOrderDetail filtered by the PodtOrigSoLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtqtyduein(string $PodtQtyDueIn) Return the first ChildPurchaseOrderDetail filtered by the PodtQtyDueIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodttype(string $PodtType) Return the first ChildPurchaseOrderDetail filtered by the PodtType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtwghttot(string $PodtWghtTot) Return the first ChildPurchaseOrderDetail filtered by the PodtWghtTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtforeigncost(string $PodtForeignCost) Return the first ChildPurchaseOrderDetail filtered by the PodtForeignCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtforeigncosttot(string $PodtForeignCostTot) Return the first ChildPurchaseOrderDetail filtered by the PodtForeignCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtstanunitcost(string $PodtStanUnitCost) Return the first ChildPurchaseOrderDetail filtered by the PodtStanUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtackdate(string $PodtAckDate) Return the first ChildPurchaseOrderDetail filtered by the PodtAckDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtinvcclearflag(string $PodtInvcClearFlag) Return the first ChildPurchaseOrderDetail filtered by the PodtInvcClearFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtprtkitdet(string $PodtPrtKitDet) Return the first ChildPurchaseOrderDetail filtered by the PodtPrtKitDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtdestwhse(string $PodtDestWhse) Return the first ChildPurchaseOrderDetail filtered by the PodtDestWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtrevision(string $PodtRevision) Return the first ChildPurchaseOrderDetail filtered by the PodtRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtprtpoeoru(string $PodtPrtPoEOrU) Return the first ChildPurchaseOrderDetail filtered by the PodtPrtPoEOrU column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPotbcnfmcode(string $PotbCnfmCode) Return the first ChildPurchaseOrderDetail filtered by the PotbCnfmCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtrcptnbr(int $PodtRcptNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtRcptNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtwipnbr(int $PodtWipNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtWipNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtordras(string $PodtOrdrAs) Return the first ChildPurchaseOrderDetail filtered by the PodtOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtboldate(string $PodtBolDate) Return the first ChildPurchaseOrderDetail filtered by the PodtBolDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtlistpric(string $PodtListPric) Return the first ChildPurchaseOrderDetail filtered by the PodtListPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtdelivereddate(string $PodtDeliveredDate) Return the first ChildPurchaseOrderDetail filtered by the PodtDeliveredDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtlandcost(string $PodtLandCost) Return the first ChildPurchaseOrderDetail filtered by the PodtLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtcasesord(int $PodtCasesOrd) Return the first ChildPurchaseOrderDetail filtered by the PodtCasesOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildPurchaseOrderDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> find(?ConnectionInterface $con = null) Return ChildPurchaseOrderDetail objects based on current ModelCriteria
 *
 * @method     ChildPurchaseOrderDetail[]|Collection findByPohdnbr(int|array<int> $PohdNbr) Return ChildPurchaseOrderDetail objects filtered by the PohdNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPohdnbr(int|array<int> $PohdNbr) Return ChildPurchaseOrderDetail objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtline(int|array<int> $PodtLine) Return ChildPurchaseOrderDetail objects filtered by the PodtLine column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtline(int|array<int> $PodtLine) Return ChildPurchaseOrderDetail objects filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildPurchaseOrderDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildPurchaseOrderDetail objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtdesc1(string|array<string> $PodtDesc1) Return ChildPurchaseOrderDetail objects filtered by the PodtDesc1 column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtdesc1(string|array<string> $PodtDesc1) Return ChildPurchaseOrderDetail objects filtered by the PodtDesc1 column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtdesc2(string|array<string> $PodtDesc2) Return ChildPurchaseOrderDetail objects filtered by the PodtDesc2 column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtdesc2(string|array<string> $PodtDesc2) Return ChildPurchaseOrderDetail objects filtered by the PodtDesc2 column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtvenditemnbr(string|array<string> $PodtVendItemNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtVendItemNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtvenditemnbr(string|array<string> $PodtVendItemNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtVendItemNbr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildPurchaseOrderDetail objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByIntbwhse(string|array<string> $IntbWhse) Return ChildPurchaseOrderDetail objects filtered by the IntbWhse column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtshipdate(string|array<string> $PodtShipDate) Return ChildPurchaseOrderDetail objects filtered by the PodtShipDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtshipdate(string|array<string> $PodtShipDate) Return ChildPurchaseOrderDetail objects filtered by the PodtShipDate column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtexptdate(string|array<string> $PodtExptDate) Return ChildPurchaseOrderDetail objects filtered by the PodtExptDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtexptdate(string|array<string> $PodtExptDate) Return ChildPurchaseOrderDetail objects filtered by the PodtExptDate column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtcancdate(string|array<string> $PodtCancDate) Return ChildPurchaseOrderDetail objects filtered by the PodtCancDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtcancdate(string|array<string> $PodtCancDate) Return ChildPurchaseOrderDetail objects filtered by the PodtCancDate column
 * @method     ChildPurchaseOrderDetail[]|Collection findByIntbuompur(string|array<string> $IntbUomPur) Return ChildPurchaseOrderDetail objects filtered by the IntbUomPur column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByIntbuompur(string|array<string> $IntbUomPur) Return ChildPurchaseOrderDetail objects filtered by the IntbUomPur column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtqtyord(string|array<string> $PodtQtyOrd) Return ChildPurchaseOrderDetail objects filtered by the PodtQtyOrd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtqtyord(string|array<string> $PodtQtyOrd) Return ChildPurchaseOrderDetail objects filtered by the PodtQtyOrd column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtcost(string|array<string> $PodtCost) Return ChildPurchaseOrderDetail objects filtered by the PodtCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtcost(string|array<string> $PodtCost) Return ChildPurchaseOrderDetail objects filtered by the PodtCost column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtcosttot(string|array<string> $PodtCostTot) Return ChildPurchaseOrderDetail objects filtered by the PodtCostTot column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtcosttot(string|array<string> $PodtCostTot) Return ChildPurchaseOrderDetail objects filtered by the PodtCostTot column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtrel(string|array<string> $PodtRel) Return ChildPurchaseOrderDetail objects filtered by the PodtRel column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtrel(string|array<string> $PodtRel) Return ChildPurchaseOrderDetail objects filtered by the PodtRel column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtspecordr(string|array<string> $PodtSpecOrdr) Return ChildPurchaseOrderDetail objects filtered by the PodtSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtspecordr(string|array<string> $PodtSpecOrdr) Return ChildPurchaseOrderDetail objects filtered by the PodtSpecOrdr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtglacct(string|array<string> $PodtGlAcct) Return ChildPurchaseOrderDetail objects filtered by the PodtGlAcct column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtglacct(string|array<string> $PodtGlAcct) Return ChildPurchaseOrderDetail objects filtered by the PodtGlAcct column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtsonbr(int|array<int> $PodtSoNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtSoNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtsonbr(int|array<int> $PodtSoNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtSoNbr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtstat(string|array<string> $PodtStat) Return ChildPurchaseOrderDetail objects filtered by the PodtStat column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtstat(string|array<string> $PodtStat) Return ChildPurchaseOrderDetail objects filtered by the PodtStat column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtorigsoline(int|array<int> $PodtOrigSoLine) Return ChildPurchaseOrderDetail objects filtered by the PodtOrigSoLine column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtorigsoline(int|array<int> $PodtOrigSoLine) Return ChildPurchaseOrderDetail objects filtered by the PodtOrigSoLine column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtqtyduein(string|array<string> $PodtQtyDueIn) Return ChildPurchaseOrderDetail objects filtered by the PodtQtyDueIn column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtqtyduein(string|array<string> $PodtQtyDueIn) Return ChildPurchaseOrderDetail objects filtered by the PodtQtyDueIn column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodttype(string|array<string> $PodtType) Return ChildPurchaseOrderDetail objects filtered by the PodtType column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodttype(string|array<string> $PodtType) Return ChildPurchaseOrderDetail objects filtered by the PodtType column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtwghttot(string|array<string> $PodtWghtTot) Return ChildPurchaseOrderDetail objects filtered by the PodtWghtTot column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtwghttot(string|array<string> $PodtWghtTot) Return ChildPurchaseOrderDetail objects filtered by the PodtWghtTot column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtforeigncost(string|array<string> $PodtForeignCost) Return ChildPurchaseOrderDetail objects filtered by the PodtForeignCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtforeigncost(string|array<string> $PodtForeignCost) Return ChildPurchaseOrderDetail objects filtered by the PodtForeignCost column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtforeigncosttot(string|array<string> $PodtForeignCostTot) Return ChildPurchaseOrderDetail objects filtered by the PodtForeignCostTot column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtforeigncosttot(string|array<string> $PodtForeignCostTot) Return ChildPurchaseOrderDetail objects filtered by the PodtForeignCostTot column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtstanunitcost(string|array<string> $PodtStanUnitCost) Return ChildPurchaseOrderDetail objects filtered by the PodtStanUnitCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtstanunitcost(string|array<string> $PodtStanUnitCost) Return ChildPurchaseOrderDetail objects filtered by the PodtStanUnitCost column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtackdate(string|array<string> $PodtAckDate) Return ChildPurchaseOrderDetail objects filtered by the PodtAckDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtackdate(string|array<string> $PodtAckDate) Return ChildPurchaseOrderDetail objects filtered by the PodtAckDate column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtinvcclearflag(string|array<string> $PodtInvcClearFlag) Return ChildPurchaseOrderDetail objects filtered by the PodtInvcClearFlag column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtinvcclearflag(string|array<string> $PodtInvcClearFlag) Return ChildPurchaseOrderDetail objects filtered by the PodtInvcClearFlag column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtprtkitdet(string|array<string> $PodtPrtKitDet) Return ChildPurchaseOrderDetail objects filtered by the PodtPrtKitDet column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtprtkitdet(string|array<string> $PodtPrtKitDet) Return ChildPurchaseOrderDetail objects filtered by the PodtPrtKitDet column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtdestwhse(string|array<string> $PodtDestWhse) Return ChildPurchaseOrderDetail objects filtered by the PodtDestWhse column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtdestwhse(string|array<string> $PodtDestWhse) Return ChildPurchaseOrderDetail objects filtered by the PodtDestWhse column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtrevision(string|array<string> $PodtRevision) Return ChildPurchaseOrderDetail objects filtered by the PodtRevision column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtrevision(string|array<string> $PodtRevision) Return ChildPurchaseOrderDetail objects filtered by the PodtRevision column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtprtpoeoru(string|array<string> $PodtPrtPoEOrU) Return ChildPurchaseOrderDetail objects filtered by the PodtPrtPoEOrU column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtprtpoeoru(string|array<string> $PodtPrtPoEOrU) Return ChildPurchaseOrderDetail objects filtered by the PodtPrtPoEOrU column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPotbcnfmcode(string|array<string> $PotbCnfmCode) Return ChildPurchaseOrderDetail objects filtered by the PotbCnfmCode column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPotbcnfmcode(string|array<string> $PotbCnfmCode) Return ChildPurchaseOrderDetail objects filtered by the PotbCnfmCode column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtrcptnbr(int|array<int> $PodtRcptNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtRcptNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtrcptnbr(int|array<int> $PodtRcptNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtRcptNbr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtwipnbr(int|array<int> $PodtWipNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtWipNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtwipnbr(int|array<int> $PodtWipNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtWipNbr column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtordras(string|array<string> $PodtOrdrAs) Return ChildPurchaseOrderDetail objects filtered by the PodtOrdrAs column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtordras(string|array<string> $PodtOrdrAs) Return ChildPurchaseOrderDetail objects filtered by the PodtOrdrAs column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtboldate(string|array<string> $PodtBolDate) Return ChildPurchaseOrderDetail objects filtered by the PodtBolDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtboldate(string|array<string> $PodtBolDate) Return ChildPurchaseOrderDetail objects filtered by the PodtBolDate column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtlistpric(string|array<string> $PodtListPric) Return ChildPurchaseOrderDetail objects filtered by the PodtListPric column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtlistpric(string|array<string> $PodtListPric) Return ChildPurchaseOrderDetail objects filtered by the PodtListPric column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtdelivereddate(string|array<string> $PodtDeliveredDate) Return ChildPurchaseOrderDetail objects filtered by the PodtDeliveredDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtdelivereddate(string|array<string> $PodtDeliveredDate) Return ChildPurchaseOrderDetail objects filtered by the PodtDeliveredDate column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtlandcost(string|array<string> $PodtLandCost) Return ChildPurchaseOrderDetail objects filtered by the PodtLandCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtlandcost(string|array<string> $PodtLandCost) Return ChildPurchaseOrderDetail objects filtered by the PodtLandCost column
 * @method     ChildPurchaseOrderDetail[]|Collection findByPodtcasesord(int|array<int> $PodtCasesOrd) Return ChildPurchaseOrderDetail objects filtered by the PodtCasesOrd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByPodtcasesord(int|array<int> $PodtCasesOrd) Return ChildPurchaseOrderDetail objects filtered by the PodtCasesOrd column
 * @method     ChildPurchaseOrderDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPurchaseOrderDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPurchaseOrderDetail objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPurchaseOrderDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPurchaseOrderDetail objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildPurchaseOrderDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetail> findByDummy(string|array<string> $dummy) Return ChildPurchaseOrderDetail objects filtered by the dummy column
 *
 * @method     ChildPurchaseOrderDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPurchaseOrderDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class PurchaseOrderDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildPurchaseOrderDetailQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderDetailQuery();
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
     * @param array[$PohdNbr, $PodtLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPurchaseOrderDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildPurchaseOrderDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PohdNbr, PodtLine, InitItemNbr, PodtDesc1, PodtDesc2, PodtVendItemNbr, IntbWhse, PodtShipDate, PodtExptDate, PodtCancDate, IntbUomPur, PodtQtyOrd, PodtCost, PodtCostTot, PodtRel, PodtSpecOrdr, PodtGlAcct, PodtSoNbr, PodtStat, PodtOrigSoLine, PodtQtyDueIn, PodtType, PodtWghtTot, PodtForeignCost, PodtForeignCostTot, PodtStanUnitCost, PodtAckDate, PodtInvcClearFlag, PodtPrtKitDet, PodtDestWhse, PodtRevision, PodtPrtPoEOrU, PotbCnfmCode, PodtRcptNbr, PodtWipNbr, PodtOrdrAs, PodtBolDate, PodtListPric, PodtDeliveredDate, PodtLandCost, PodtCasesOrd, DateUpdtd, TimeUpdtd, dummy FROM po_detail WHERE PohdNbr = :p0 AND PodtLine = :p1';
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
            /** @var ChildPurchaseOrderDetail $obj */
            $obj = new ChildPurchaseOrderDetail();
            $obj->hydrate($row);
            PurchaseOrderDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildPurchaseOrderDetail|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(PurchaseOrderDetailTableMap::COL_POHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderDetailTableMap::COL_PODTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PohdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdnbr(1234); // WHERE PohdNbr = 1234
     * $query->filterByPohdnbr(array(12, 34)); // WHERE PohdNbr IN (12, 34)
     * $query->filterByPohdnbr(array('min' => 12)); // WHERE PohdNbr > 12
     * </code>
     *
     * @see       filterByPurchaseOrder()
     *
     * @param mixed $pohdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, ?string $comparison = null)
    {
        if (is_array($pohdnbr)) {
            $useMinMax = false;
            if (isset($pohdnbr['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $pohdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pohdnbr['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $pohdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $pohdnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtline(1234); // WHERE PodtLine = 1234
     * $query->filterByPodtline(array(12, 34)); // WHERE PodtLine IN (12, 34)
     * $query->filterByPodtline(array('min' => 12)); // WHERE PodtLine > 12
     * </code>
     *
     * @param mixed $podtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtline($podtline = null, ?string $comparison = null)
    {
        if (is_array($podtline)) {
            $useMinMax = false;
            if (isset($podtline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $podtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $podtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $podtline, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdesc1('fooValue');   // WHERE PodtDesc1 = 'fooValue'
     * $query->filterByPodtdesc1('%fooValue%', Criteria::LIKE); // WHERE PodtDesc1 LIKE '%fooValue%'
     * $query->filterByPodtdesc1(['foo', 'bar']); // WHERE PodtDesc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtdesc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtdesc1($podtdesc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDESC1, $podtdesc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdesc2('fooValue');   // WHERE PodtDesc2 = 'fooValue'
     * $query->filterByPodtdesc2('%fooValue%', Criteria::LIKE); // WHERE PodtDesc2 LIKE '%fooValue%'
     * $query->filterByPodtdesc2(['foo', 'bar']); // WHERE PodtDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtdesc2($podtdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDESC2, $podtdesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtVendItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtvenditemnbr('fooValue');   // WHERE PodtVendItemNbr = 'fooValue'
     * $query->filterByPodtvenditemnbr('%fooValue%', Criteria::LIKE); // WHERE PodtVendItemNbr LIKE '%fooValue%'
     * $query->filterByPodtvenditemnbr(['foo', 'bar']); // WHERE PodtVendItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtvenditemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtvenditemnbr($podtvenditemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtvenditemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR, $podtvenditemnbr, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtshipdate('fooValue');   // WHERE PodtShipDate = 'fooValue'
     * $query->filterByPodtshipdate('%fooValue%', Criteria::LIKE); // WHERE PodtShipDate LIKE '%fooValue%'
     * $query->filterByPodtshipdate(['foo', 'bar']); // WHERE PodtShipDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtshipdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtshipdate($podtshipdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSHIPDATE, $podtshipdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtExptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtexptdate('fooValue');   // WHERE PodtExptDate = 'fooValue'
     * $query->filterByPodtexptdate('%fooValue%', Criteria::LIKE); // WHERE PodtExptDate LIKE '%fooValue%'
     * $query->filterByPodtexptdate(['foo', 'bar']); // WHERE PodtExptDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtexptdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtexptdate($podtexptdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtexptdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTEXPTDATE, $podtexptdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtcancdate('fooValue');   // WHERE PodtCancDate = 'fooValue'
     * $query->filterByPodtcancdate('%fooValue%', Criteria::LIKE); // WHERE PodtCancDate LIKE '%fooValue%'
     * $query->filterByPodtcancdate(['foo', 'bar']); // WHERE PodtCancDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtcancdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtcancdate($podtcancdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCANCDATE, $podtcancdate, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtQtyOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtqtyord(1234); // WHERE PodtQtyOrd = 1234
     * $query->filterByPodtqtyord(array(12, 34)); // WHERE PodtQtyOrd IN (12, 34)
     * $query->filterByPodtqtyord(array('min' => 12)); // WHERE PodtQtyOrd > 12
     * </code>
     *
     * @param mixed $podtqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtqtyord($podtqtyord = null, ?string $comparison = null)
    {
        if (is_array($podtqtyord)) {
            $useMinMax = false;
            if (isset($podtqtyord['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYORD, $podtqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtqtyord['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYORD, $podtqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYORD, $podtqtyord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtcost(1234); // WHERE PodtCost = 1234
     * $query->filterByPodtcost(array(12, 34)); // WHERE PodtCost IN (12, 34)
     * $query->filterByPodtcost(array('min' => 12)); // WHERE PodtCost > 12
     * </code>
     *
     * @param mixed $podtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtcost($podtcost = null, ?string $comparison = null)
    {
        if (is_array($podtcost)) {
            $useMinMax = false;
            if (isset($podtcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOST, $podtcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOST, $podtcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOST, $podtcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtcosttot(1234); // WHERE PodtCostTot = 1234
     * $query->filterByPodtcosttot(array(12, 34)); // WHERE PodtCostTot IN (12, 34)
     * $query->filterByPodtcosttot(array('min' => 12)); // WHERE PodtCostTot > 12
     * </code>
     *
     * @param mixed $podtcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtcosttot($podtcosttot = null, ?string $comparison = null)
    {
        if (is_array($podtcosttot)) {
            $useMinMax = false;
            if (isset($podtcosttot['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT, $podtcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtcosttot['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT, $podtcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT, $podtcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtRel column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtrel('fooValue');   // WHERE PodtRel = 'fooValue'
     * $query->filterByPodtrel('%fooValue%', Criteria::LIKE); // WHERE PodtRel LIKE '%fooValue%'
     * $query->filterByPodtrel(['foo', 'bar']); // WHERE PodtRel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtrel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtrel($podtrel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtrel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTREL, $podtrel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtspecordr('fooValue');   // WHERE PodtSpecOrdr = 'fooValue'
     * $query->filterByPodtspecordr('%fooValue%', Criteria::LIKE); // WHERE PodtSpecOrdr LIKE '%fooValue%'
     * $query->filterByPodtspecordr(['foo', 'bar']); // WHERE PodtSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtspecordr($podtspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSPECORDR, $podtspecordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtglacct('fooValue');   // WHERE PodtGlAcct = 'fooValue'
     * $query->filterByPodtglacct('%fooValue%', Criteria::LIKE); // WHERE PodtGlAcct LIKE '%fooValue%'
     * $query->filterByPodtglacct(['foo', 'bar']); // WHERE PodtGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtglacct($podtglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTGLACCT, $podtglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtSoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtsonbr(1234); // WHERE PodtSoNbr = 1234
     * $query->filterByPodtsonbr(array(12, 34)); // WHERE PodtSoNbr IN (12, 34)
     * $query->filterByPodtsonbr(array('min' => 12)); // WHERE PodtSoNbr > 12
     * </code>
     *
     * @param mixed $podtsonbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtsonbr($podtsonbr = null, ?string $comparison = null)
    {
        if (is_array($podtsonbr)) {
            $useMinMax = false;
            if (isset($podtsonbr['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSONBR, $podtsonbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtsonbr['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSONBR, $podtsonbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSONBR, $podtsonbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtstat('fooValue');   // WHERE PodtStat = 'fooValue'
     * $query->filterByPodtstat('%fooValue%', Criteria::LIKE); // WHERE PodtStat LIKE '%fooValue%'
     * $query->filterByPodtstat(['foo', 'bar']); // WHERE PodtStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtstat($podtstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSTAT, $podtstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtOrigSoLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtorigsoline(1234); // WHERE PodtOrigSoLine = 1234
     * $query->filterByPodtorigsoline(array(12, 34)); // WHERE PodtOrigSoLine IN (12, 34)
     * $query->filterByPodtorigsoline(array('min' => 12)); // WHERE PodtOrigSoLine > 12
     * </code>
     *
     * @param mixed $podtorigsoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtorigsoline($podtorigsoline = null, ?string $comparison = null)
    {
        if (is_array($podtorigsoline)) {
            $useMinMax = false;
            if (isset($podtorigsoline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE, $podtorigsoline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtorigsoline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE, $podtorigsoline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE, $podtorigsoline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtQtyDueIn column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtqtyduein(1234); // WHERE PodtQtyDueIn = 1234
     * $query->filterByPodtqtyduein(array(12, 34)); // WHERE PodtQtyDueIn IN (12, 34)
     * $query->filterByPodtqtyduein(array('min' => 12)); // WHERE PodtQtyDueIn > 12
     * </code>
     *
     * @param mixed $podtqtyduein The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtqtyduein($podtqtyduein = null, ?string $comparison = null)
    {
        if (is_array($podtqtyduein)) {
            $useMinMax = false;
            if (isset($podtqtyduein['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN, $podtqtyduein['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtqtyduein['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN, $podtqtyduein['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN, $podtqtyduein, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtType column
     *
     * Example usage:
     * <code>
     * $query->filterByPodttype('fooValue');   // WHERE PodtType = 'fooValue'
     * $query->filterByPodttype('%fooValue%', Criteria::LIKE); // WHERE PodtType LIKE '%fooValue%'
     * $query->filterByPodttype(['foo', 'bar']); // WHERE PodtType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podttype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodttype($podttype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podttype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTTYPE, $podttype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtWghtTot column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtwghttot(1234); // WHERE PodtWghtTot = 1234
     * $query->filterByPodtwghttot(array(12, 34)); // WHERE PodtWghtTot IN (12, 34)
     * $query->filterByPodtwghttot(array('min' => 12)); // WHERE PodtWghtTot > 12
     * </code>
     *
     * @param mixed $podtwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtwghttot($podtwghttot = null, ?string $comparison = null)
    {
        if (is_array($podtwghttot)) {
            $useMinMax = false;
            if (isset($podtwghttot['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT, $podtwghttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtwghttot['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT, $podtwghttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT, $podtwghttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtForeignCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtforeigncost(1234); // WHERE PodtForeignCost = 1234
     * $query->filterByPodtforeigncost(array(12, 34)); // WHERE PodtForeignCost IN (12, 34)
     * $query->filterByPodtforeigncost(array('min' => 12)); // WHERE PodtForeignCost > 12
     * </code>
     *
     * @param mixed $podtforeigncost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtforeigncost($podtforeigncost = null, ?string $comparison = null)
    {
        if (is_array($podtforeigncost)) {
            $useMinMax = false;
            if (isset($podtforeigncost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST, $podtforeigncost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtforeigncost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST, $podtforeigncost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST, $podtforeigncost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtForeignCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtforeigncosttot(1234); // WHERE PodtForeignCostTot = 1234
     * $query->filterByPodtforeigncosttot(array(12, 34)); // WHERE PodtForeignCostTot IN (12, 34)
     * $query->filterByPodtforeigncosttot(array('min' => 12)); // WHERE PodtForeignCostTot > 12
     * </code>
     *
     * @param mixed $podtforeigncosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtforeigncosttot($podtforeigncosttot = null, ?string $comparison = null)
    {
        if (is_array($podtforeigncosttot)) {
            $useMinMax = false;
            if (isset($podtforeigncosttot['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT, $podtforeigncosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtforeigncosttot['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT, $podtforeigncosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT, $podtforeigncosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtStanUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtstanunitcost(1234); // WHERE PodtStanUnitCost = 1234
     * $query->filterByPodtstanunitcost(array(12, 34)); // WHERE PodtStanUnitCost IN (12, 34)
     * $query->filterByPodtstanunitcost(array('min' => 12)); // WHERE PodtStanUnitCost > 12
     * </code>
     *
     * @param mixed $podtstanunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtstanunitcost($podtstanunitcost = null, ?string $comparison = null)
    {
        if (is_array($podtstanunitcost)) {
            $useMinMax = false;
            if (isset($podtstanunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST, $podtstanunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtstanunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST, $podtstanunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST, $podtstanunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtAckDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtackdate('fooValue');   // WHERE PodtAckDate = 'fooValue'
     * $query->filterByPodtackdate('%fooValue%', Criteria::LIKE); // WHERE PodtAckDate LIKE '%fooValue%'
     * $query->filterByPodtackdate(['foo', 'bar']); // WHERE PodtAckDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtackdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtackdate($podtackdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtackdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTACKDATE, $podtackdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtInvcClearFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtinvcclearflag('fooValue');   // WHERE PodtInvcClearFlag = 'fooValue'
     * $query->filterByPodtinvcclearflag('%fooValue%', Criteria::LIKE); // WHERE PodtInvcClearFlag LIKE '%fooValue%'
     * $query->filterByPodtinvcclearflag(['foo', 'bar']); // WHERE PodtInvcClearFlag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtinvcclearflag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtinvcclearflag($podtinvcclearflag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtinvcclearflag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG, $podtinvcclearflag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtPrtKitDet column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtprtkitdet('fooValue');   // WHERE PodtPrtKitDet = 'fooValue'
     * $query->filterByPodtprtkitdet('%fooValue%', Criteria::LIKE); // WHERE PodtPrtKitDet LIKE '%fooValue%'
     * $query->filterByPodtprtkitdet(['foo', 'bar']); // WHERE PodtPrtKitDet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtprtkitdet The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtprtkitdet($podtprtkitdet = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtprtkitdet)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTPRTKITDET, $podtprtkitdet, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtDestWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdestwhse('fooValue');   // WHERE PodtDestWhse = 'fooValue'
     * $query->filterByPodtdestwhse('%fooValue%', Criteria::LIKE); // WHERE PodtDestWhse LIKE '%fooValue%'
     * $query->filterByPodtdestwhse(['foo', 'bar']); // WHERE PodtDestWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtdestwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtdestwhse($podtdestwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdestwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDESTWHSE, $podtdestwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtrevision('fooValue');   // WHERE PodtRevision = 'fooValue'
     * $query->filterByPodtrevision('%fooValue%', Criteria::LIKE); // WHERE PodtRevision LIKE '%fooValue%'
     * $query->filterByPodtrevision(['foo', 'bar']); // WHERE PodtRevision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtrevision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtrevision($podtrevision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtrevision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTREVISION, $podtrevision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtPrtPoEOrU column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtprtpoeoru('fooValue');   // WHERE PodtPrtPoEOrU = 'fooValue'
     * $query->filterByPodtprtpoeoru('%fooValue%', Criteria::LIKE); // WHERE PodtPrtPoEOrU LIKE '%fooValue%'
     * $query->filterByPodtprtpoeoru(['foo', 'bar']); // WHERE PodtPrtPoEOrU IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtprtpoeoru The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtprtpoeoru($podtprtpoeoru = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtprtpoeoru)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU, $podtprtpoeoru, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotbCnfmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbcnfmcode('fooValue');   // WHERE PotbCnfmCode = 'fooValue'
     * $query->filterByPotbcnfmcode('%fooValue%', Criteria::LIKE); // WHERE PotbCnfmCode LIKE '%fooValue%'
     * $query->filterByPotbcnfmcode(['foo', 'bar']); // WHERE PotbCnfmCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potbcnfmcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotbcnfmcode($potbcnfmcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbcnfmcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POTBCNFMCODE, $potbcnfmcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtRcptNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtrcptnbr(1234); // WHERE PodtRcptNbr = 1234
     * $query->filterByPodtrcptnbr(array(12, 34)); // WHERE PodtRcptNbr IN (12, 34)
     * $query->filterByPodtrcptnbr(array('min' => 12)); // WHERE PodtRcptNbr > 12
     * </code>
     *
     * @param mixed $podtrcptnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtrcptnbr($podtrcptnbr = null, ?string $comparison = null)
    {
        if (is_array($podtrcptnbr)) {
            $useMinMax = false;
            if (isset($podtrcptnbr['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR, $podtrcptnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtrcptnbr['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR, $podtrcptnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR, $podtrcptnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtwipnbr(1234); // WHERE PodtWipNbr = 1234
     * $query->filterByPodtwipnbr(array(12, 34)); // WHERE PodtWipNbr IN (12, 34)
     * $query->filterByPodtwipnbr(array('min' => 12)); // WHERE PodtWipNbr > 12
     * </code>
     *
     * @param mixed $podtwipnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtwipnbr($podtwipnbr = null, ?string $comparison = null)
    {
        if (is_array($podtwipnbr)) {
            $useMinMax = false;
            if (isset($podtwipnbr['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWIPNBR, $podtwipnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtwipnbr['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWIPNBR, $podtwipnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWIPNBR, $podtwipnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtordras('fooValue');   // WHERE PodtOrdrAs = 'fooValue'
     * $query->filterByPodtordras('%fooValue%', Criteria::LIKE); // WHERE PodtOrdrAs LIKE '%fooValue%'
     * $query->filterByPodtordras(['foo', 'bar']); // WHERE PodtOrdrAs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtordras The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtordras($podtordras = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtordras)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTORDRAS, $podtordras, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtBolDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtboldate('fooValue');   // WHERE PodtBolDate = 'fooValue'
     * $query->filterByPodtboldate('%fooValue%', Criteria::LIKE); // WHERE PodtBolDate LIKE '%fooValue%'
     * $query->filterByPodtboldate(['foo', 'bar']); // WHERE PodtBolDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtboldate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtboldate($podtboldate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtboldate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTBOLDATE, $podtboldate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtListPric column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtlistpric(1234); // WHERE PodtListPric = 1234
     * $query->filterByPodtlistpric(array(12, 34)); // WHERE PodtListPric IN (12, 34)
     * $query->filterByPodtlistpric(array('min' => 12)); // WHERE PodtListPric > 12
     * </code>
     *
     * @param mixed $podtlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtlistpric($podtlistpric = null, ?string $comparison = null)
    {
        if (is_array($podtlistpric)) {
            $useMinMax = false;
            if (isset($podtlistpric['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC, $podtlistpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtlistpric['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC, $podtlistpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC, $podtlistpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtDeliveredDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdelivereddate('fooValue');   // WHERE PodtDeliveredDate = 'fooValue'
     * $query->filterByPodtdelivereddate('%fooValue%', Criteria::LIKE); // WHERE PodtDeliveredDate LIKE '%fooValue%'
     * $query->filterByPodtdelivereddate(['foo', 'bar']); // WHERE PodtDeliveredDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $podtdelivereddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtdelivereddate($podtdelivereddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdelivereddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE, $podtdelivereddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtlandcost(1234); // WHERE PodtLandCost = 1234
     * $query->filterByPodtlandcost(array(12, 34)); // WHERE PodtLandCost IN (12, 34)
     * $query->filterByPodtlandcost(array('min' => 12)); // WHERE PodtLandCost > 12
     * </code>
     *
     * @param mixed $podtlandcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtlandcost($podtlandcost = null, ?string $comparison = null)
    {
        if (is_array($podtlandcost)) {
            $useMinMax = false;
            if (isset($podtlandcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLANDCOST, $podtlandcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtlandcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLANDCOST, $podtlandcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLANDCOST, $podtlandcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtCasesOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtcasesord(1234); // WHERE PodtCasesOrd = 1234
     * $query->filterByPodtcasesord(array(12, 34)); // WHERE PodtCasesOrd IN (12, 34)
     * $query->filterByPodtcasesord(array('min' => 12)); // WHERE PodtCasesOrd > 12
     * </code>
     *
     * @param mixed $podtcasesord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtcasesord($podtcasesord = null, ?string $comparison = null)
    {
        if (is_array($podtcasesord)) {
            $useMinMax = false;
            if (isset($podtcasesord['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCASESORD, $podtcasesord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtcasesord['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCASESORD, $podtcasesord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCASESORD, $podtcasesord, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, ?string $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrder() only accepts arguments of type \PurchaseOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrder');

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
            $this->addJoinObject($join, 'PurchaseOrder');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrder relation PurchaseOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrder', '\PurchaseOrderQuery');
    }

    /**
     * Use the PurchaseOrder relation PurchaseOrder object
     *
     * @param callable(\PurchaseOrderQuery):\PurchaseOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useExistsQuery('PurchaseOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useExistsQuery('PurchaseOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useInQuery('PurchaseOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for a NOT IN query.
     *
     * @see usePurchaseOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useInQuery('PurchaseOrder', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Filter the query by a related \PurchaseOrderDetailReceipt object
     *
     * @param \PurchaseOrderDetailReceipt|ObjectCollection $purchaseOrderDetailReceipt the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailReceipt($purchaseOrderDetailReceipt, ?string $comparison = null)
    {
        if ($purchaseOrderDetailReceipt instanceof \PurchaseOrderDetailReceipt) {
            $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrderDetailReceipt->getPohdnbr(), $comparison)
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $purchaseOrderDetailReceipt->getPodtline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceipt() only accepts arguments of type \PurchaseOrderDetailReceipt');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailReceipt relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailReceipt(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailReceipt');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailReceipt');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailReceipt relation PurchaseOrderDetailReceipt object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailReceiptQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailReceiptQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailReceipt($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailReceipt', '\PurchaseOrderDetailReceiptQuery');
    }

    /**
     * Use the PurchaseOrderDetailReceipt relation PurchaseOrderDetailReceipt object
     *
     * @param callable(\PurchaseOrderDetailReceiptQuery):\PurchaseOrderDetailReceiptQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailReceiptQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailReceiptQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailReceiptExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailReceiptExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailReceiptNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailReceiptQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailReceiptInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailReceiptQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailReceiving object
     *
     * @param \PurchaseOrderDetailReceiving|ObjectCollection $purchaseOrderDetailReceiving the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving, ?string $comparison = null)
    {
        if ($purchaseOrderDetailReceiving instanceof \PurchaseOrderDetailReceiving) {
            $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrderDetailReceiving->getPothnbr(), $comparison)
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $purchaseOrderDetailReceiving->getPotdline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceiving() only accepts arguments of type \PurchaseOrderDetailReceiving');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailReceiving relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailReceiving(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailReceiving relation PurchaseOrderDetailReceiving object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailReceivingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailReceiving', '\PurchaseOrderDetailReceivingQuery');
    }

    /**
     * Use the PurchaseOrderDetailReceiving relation PurchaseOrderDetailReceiving object
     *
     * @param callable(\PurchaseOrderDetailReceivingQuery):\PurchaseOrderDetailReceivingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailReceivingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailReceivingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailReceivingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailReceivingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailReceivingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailReceivingQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailReceivingInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailReceivingQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailLotReceiving object
     *
     * @param \PurchaseOrderDetailLotReceiving|ObjectCollection $purchaseOrderDetailLotReceiving the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailLotReceiving($purchaseOrderDetailLotReceiving, ?string $comparison = null)
    {
        if ($purchaseOrderDetailLotReceiving instanceof \PurchaseOrderDetailLotReceiving) {
            $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrderDetailLotReceiving->getPothnbr(), $comparison)
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $purchaseOrderDetailLotReceiving->getPotdline(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailLotReceiving() only accepts arguments of type \PurchaseOrderDetailLotReceiving');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailLotReceiving(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailLotReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailLotReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailLotReceiving relation PurchaseOrderDetailLotReceiving object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailLotReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailLotReceivingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailLotReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailLotReceiving', '\PurchaseOrderDetailLotReceivingQuery');
    }

    /**
     * Use the PurchaseOrderDetailLotReceiving relation PurchaseOrderDetailLotReceiving object
     *
     * @param callable(\PurchaseOrderDetailLotReceivingQuery):\PurchaseOrderDetailLotReceivingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailLotReceivingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailLotReceivingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailLotReceivingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailLotReceivingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailLotReceivingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailLotReceivingQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailLotReceivingInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailLotReceivingQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildPurchaseOrderDetail $purchaseOrderDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($purchaseOrderDetail = null)
    {
        if ($purchaseOrderDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderDetailTableMap::COL_POHDNBR), $purchaseOrderDetail->getPohdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderDetailTableMap::COL_PODTLINE), $purchaseOrderDetail->getPodtline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderDetailTableMap::clearInstancePool();
            PurchaseOrderDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
