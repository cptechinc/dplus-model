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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_detail' table.
 *
 *
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
 * @method     \PurchaseOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPurchaseOrderDetail findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetail matching the query
 * @method     ChildPurchaseOrderDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetail matching the query, or a new ChildPurchaseOrderDetail object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetail findOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderDetail filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetail findOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetail filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetail filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetail findOneByPodtdesc1(string $PodtDesc1) Return the first ChildPurchaseOrderDetail filtered by the PodtDesc1 column
 * @method     ChildPurchaseOrderDetail findOneByPodtdesc2(string $PodtDesc2) Return the first ChildPurchaseOrderDetail filtered by the PodtDesc2 column
 * @method     ChildPurchaseOrderDetail findOneByPodtvenditemnbr(string $PodtVendItemNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtVendItemNbr column
 * @method     ChildPurchaseOrderDetail findOneByIntbwhse(string $IntbWhse) Return the first ChildPurchaseOrderDetail filtered by the IntbWhse column
 * @method     ChildPurchaseOrderDetail findOneByPodtshipdate(string $PodtShipDate) Return the first ChildPurchaseOrderDetail filtered by the PodtShipDate column
 * @method     ChildPurchaseOrderDetail findOneByPodtexptdate(string $PodtExptDate) Return the first ChildPurchaseOrderDetail filtered by the PodtExptDate column
 * @method     ChildPurchaseOrderDetail findOneByPodtcancdate(string $PodtCancDate) Return the first ChildPurchaseOrderDetail filtered by the PodtCancDate column
 * @method     ChildPurchaseOrderDetail findOneByIntbuompur(string $IntbUomPur) Return the first ChildPurchaseOrderDetail filtered by the IntbUomPur column
 * @method     ChildPurchaseOrderDetail findOneByPodtqtyord(string $PodtQtyOrd) Return the first ChildPurchaseOrderDetail filtered by the PodtQtyOrd column
 * @method     ChildPurchaseOrderDetail findOneByPodtcost(string $PodtCost) Return the first ChildPurchaseOrderDetail filtered by the PodtCost column
 * @method     ChildPurchaseOrderDetail findOneByPodtcosttot(string $PodtCostTot) Return the first ChildPurchaseOrderDetail filtered by the PodtCostTot column
 * @method     ChildPurchaseOrderDetail findOneByPodtrel(string $PodtRel) Return the first ChildPurchaseOrderDetail filtered by the PodtRel column
 * @method     ChildPurchaseOrderDetail findOneByPodtspecordr(string $PodtSpecOrdr) Return the first ChildPurchaseOrderDetail filtered by the PodtSpecOrdr column
 * @method     ChildPurchaseOrderDetail findOneByPodtglacct(string $PodtGlAcct) Return the first ChildPurchaseOrderDetail filtered by the PodtGlAcct column
 * @method     ChildPurchaseOrderDetail findOneByPodtsonbr(string $PodtSoNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtSoNbr column
 * @method     ChildPurchaseOrderDetail findOneByPodtstat(string $PodtStat) Return the first ChildPurchaseOrderDetail filtered by the PodtStat column
 * @method     ChildPurchaseOrderDetail findOneByPodtorigsoline(int $PodtOrigSoLine) Return the first ChildPurchaseOrderDetail filtered by the PodtOrigSoLine column
 * @method     ChildPurchaseOrderDetail findOneByPodtqtyduein(string $PodtQtyDueIn) Return the first ChildPurchaseOrderDetail filtered by the PodtQtyDueIn column
 * @method     ChildPurchaseOrderDetail findOneByPodttype(string $PodtType) Return the first ChildPurchaseOrderDetail filtered by the PodtType column
 * @method     ChildPurchaseOrderDetail findOneByPodtwghttot(string $PodtWghtTot) Return the first ChildPurchaseOrderDetail filtered by the PodtWghtTot column
 * @method     ChildPurchaseOrderDetail findOneByPodtforeigncost(string $PodtForeignCost) Return the first ChildPurchaseOrderDetail filtered by the PodtForeignCost column
 * @method     ChildPurchaseOrderDetail findOneByPodtforeigncosttot(string $PodtForeignCostTot) Return the first ChildPurchaseOrderDetail filtered by the PodtForeignCostTot column
 * @method     ChildPurchaseOrderDetail findOneByPodtstanunitcost(string $PodtStanUnitCost) Return the first ChildPurchaseOrderDetail filtered by the PodtStanUnitCost column
 * @method     ChildPurchaseOrderDetail findOneByPodtackdate(string $PodtAckDate) Return the first ChildPurchaseOrderDetail filtered by the PodtAckDate column
 * @method     ChildPurchaseOrderDetail findOneByPodtinvcclearflag(string $PodtInvcClearFlag) Return the first ChildPurchaseOrderDetail filtered by the PodtInvcClearFlag column
 * @method     ChildPurchaseOrderDetail findOneByPodtprtkitdet(string $PodtPrtKitDet) Return the first ChildPurchaseOrderDetail filtered by the PodtPrtKitDet column
 * @method     ChildPurchaseOrderDetail findOneByPodtdestwhse(string $PodtDestWhse) Return the first ChildPurchaseOrderDetail filtered by the PodtDestWhse column
 * @method     ChildPurchaseOrderDetail findOneByPodtrevision(string $PodtRevision) Return the first ChildPurchaseOrderDetail filtered by the PodtRevision column
 * @method     ChildPurchaseOrderDetail findOneByPodtprtpoeoru(string $PodtPrtPoEOrU) Return the first ChildPurchaseOrderDetail filtered by the PodtPrtPoEOrU column
 * @method     ChildPurchaseOrderDetail findOneByPotbcnfmcode(string $PotbCnfmCode) Return the first ChildPurchaseOrderDetail filtered by the PotbCnfmCode column
 * @method     ChildPurchaseOrderDetail findOneByPodtrcptnbr(string $PodtRcptNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtRcptNbr column
 * @method     ChildPurchaseOrderDetail findOneByPodtwipnbr(string $PodtWipNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtWipNbr column
 * @method     ChildPurchaseOrderDetail findOneByPodtordras(string $PodtOrdrAs) Return the first ChildPurchaseOrderDetail filtered by the PodtOrdrAs column
 * @method     ChildPurchaseOrderDetail findOneByPodtboldate(string $PodtBolDate) Return the first ChildPurchaseOrderDetail filtered by the PodtBolDate column
 * @method     ChildPurchaseOrderDetail findOneByPodtlistpric(string $PodtListPric) Return the first ChildPurchaseOrderDetail filtered by the PodtListPric column
 * @method     ChildPurchaseOrderDetail findOneByPodtdelivereddate(string $PodtDeliveredDate) Return the first ChildPurchaseOrderDetail filtered by the PodtDeliveredDate column
 * @method     ChildPurchaseOrderDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetail filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetail filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetail findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetail filtered by the dummy column *

 * @method     ChildPurchaseOrderDetail requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrderDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetail requireOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderDetail filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildPurchaseOrderDetail requireOneByPodtsonbr(string $PodtSoNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtSoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildPurchaseOrderDetail requireOneByPodtrcptnbr(string $PodtRcptNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtRcptNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtwipnbr(string $PodtWipNbr) Return the first ChildPurchaseOrderDetail filtered by the PodtWipNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtordras(string $PodtOrdrAs) Return the first ChildPurchaseOrderDetail filtered by the PodtOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtboldate(string $PodtBolDate) Return the first ChildPurchaseOrderDetail filtered by the PodtBolDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtlistpric(string $PodtListPric) Return the first ChildPurchaseOrderDetail filtered by the PodtListPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByPodtdelivereddate(string $PodtDeliveredDate) Return the first ChildPurchaseOrderDetail filtered by the PodtDeliveredDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetail requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrderDetail objects based on current ModelCriteria
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPohdnbr(string $PohdNbr) Return ChildPurchaseOrderDetail objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtline(int $PodtLine) Return ChildPurchaseOrderDetail objects filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildPurchaseOrderDetail objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtdesc1(string $PodtDesc1) Return ChildPurchaseOrderDetail objects filtered by the PodtDesc1 column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtdesc2(string $PodtDesc2) Return ChildPurchaseOrderDetail objects filtered by the PodtDesc2 column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtvenditemnbr(string $PodtVendItemNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtVendItemNbr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildPurchaseOrderDetail objects filtered by the IntbWhse column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtshipdate(string $PodtShipDate) Return ChildPurchaseOrderDetail objects filtered by the PodtShipDate column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtexptdate(string $PodtExptDate) Return ChildPurchaseOrderDetail objects filtered by the PodtExptDate column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtcancdate(string $PodtCancDate) Return ChildPurchaseOrderDetail objects filtered by the PodtCancDate column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByIntbuompur(string $IntbUomPur) Return ChildPurchaseOrderDetail objects filtered by the IntbUomPur column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtqtyord(string $PodtQtyOrd) Return ChildPurchaseOrderDetail objects filtered by the PodtQtyOrd column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtcost(string $PodtCost) Return ChildPurchaseOrderDetail objects filtered by the PodtCost column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtcosttot(string $PodtCostTot) Return ChildPurchaseOrderDetail objects filtered by the PodtCostTot column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtrel(string $PodtRel) Return ChildPurchaseOrderDetail objects filtered by the PodtRel column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtspecordr(string $PodtSpecOrdr) Return ChildPurchaseOrderDetail objects filtered by the PodtSpecOrdr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtglacct(string $PodtGlAcct) Return ChildPurchaseOrderDetail objects filtered by the PodtGlAcct column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtsonbr(string $PodtSoNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtSoNbr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtstat(string $PodtStat) Return ChildPurchaseOrderDetail objects filtered by the PodtStat column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtorigsoline(int $PodtOrigSoLine) Return ChildPurchaseOrderDetail objects filtered by the PodtOrigSoLine column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtqtyduein(string $PodtQtyDueIn) Return ChildPurchaseOrderDetail objects filtered by the PodtQtyDueIn column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodttype(string $PodtType) Return ChildPurchaseOrderDetail objects filtered by the PodtType column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtwghttot(string $PodtWghtTot) Return ChildPurchaseOrderDetail objects filtered by the PodtWghtTot column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtforeigncost(string $PodtForeignCost) Return ChildPurchaseOrderDetail objects filtered by the PodtForeignCost column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtforeigncosttot(string $PodtForeignCostTot) Return ChildPurchaseOrderDetail objects filtered by the PodtForeignCostTot column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtstanunitcost(string $PodtStanUnitCost) Return ChildPurchaseOrderDetail objects filtered by the PodtStanUnitCost column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtackdate(string $PodtAckDate) Return ChildPurchaseOrderDetail objects filtered by the PodtAckDate column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtinvcclearflag(string $PodtInvcClearFlag) Return ChildPurchaseOrderDetail objects filtered by the PodtInvcClearFlag column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtprtkitdet(string $PodtPrtKitDet) Return ChildPurchaseOrderDetail objects filtered by the PodtPrtKitDet column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtdestwhse(string $PodtDestWhse) Return ChildPurchaseOrderDetail objects filtered by the PodtDestWhse column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtrevision(string $PodtRevision) Return ChildPurchaseOrderDetail objects filtered by the PodtRevision column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtprtpoeoru(string $PodtPrtPoEOrU) Return ChildPurchaseOrderDetail objects filtered by the PodtPrtPoEOrU column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPotbcnfmcode(string $PotbCnfmCode) Return ChildPurchaseOrderDetail objects filtered by the PotbCnfmCode column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtrcptnbr(string $PodtRcptNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtRcptNbr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtwipnbr(string $PodtWipNbr) Return ChildPurchaseOrderDetail objects filtered by the PodtWipNbr column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtordras(string $PodtOrdrAs) Return ChildPurchaseOrderDetail objects filtered by the PodtOrdrAs column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtboldate(string $PodtBolDate) Return ChildPurchaseOrderDetail objects filtered by the PodtBolDate column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtlistpric(string $PodtListPric) Return ChildPurchaseOrderDetail objects filtered by the PodtListPric column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByPodtdelivereddate(string $PodtDeliveredDate) Return ChildPurchaseOrderDetail objects filtered by the PodtDeliveredDate column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrderDetail objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrderDetail objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrderDetail objects filtered by the dummy column
 * @method     ChildPurchaseOrderDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PohdNbr, PodtLine, InitItemNbr, PodtDesc1, PodtDesc2, PodtVendItemNbr, IntbWhse, PodtShipDate, PodtExptDate, PodtCancDate, IntbUomPur, PodtQtyOrd, PodtCost, PodtCostTot, PodtRel, PodtSpecOrdr, PodtGlAcct, PodtSoNbr, PodtStat, PodtOrigSoLine, PodtQtyDueIn, PodtType, PodtWghtTot, PodtForeignCost, PodtForeignCostTot, PodtStanUnitCost, PodtAckDate, PodtInvcClearFlag, PodtPrtKitDet, PodtDestWhse, PodtRevision, PodtPrtPoEOrU, PotbCnfmCode, PodtRcptNbr, PodtWipNbr, PodtOrdrAs, PodtBolDate, PodtListPric, PodtDeliveredDate, DateUpdtd, TimeUpdtd, dummy FROM po_detail WHERE PohdNbr = :p0 AND PodtLine = :p1';
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
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
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
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
     * $query->filterByPohdnbr('fooValue');   // WHERE PohdNbr = 'fooValue'
     * $query->filterByPohdnbr('%fooValue%', Criteria::LIKE); // WHERE PohdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $pohdnbr, $comparison);
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
     * @param     mixed $podtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtline($podtline = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLINE, $podtline, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the PodtDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdesc1('fooValue');   // WHERE PodtDesc1 = 'fooValue'
     * $query->filterByPodtdesc1('%fooValue%', Criteria::LIKE); // WHERE PodtDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtdesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtdesc1($podtdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDESC1, $podtdesc1, $comparison);
    }

    /**
     * Filter the query on the PodtDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdesc2('fooValue');   // WHERE PodtDesc2 = 'fooValue'
     * $query->filterByPodtdesc2('%fooValue%', Criteria::LIKE); // WHERE PodtDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtdesc2($podtdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDESC2, $podtdesc2, $comparison);
    }

    /**
     * Filter the query on the PodtVendItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtvenditemnbr('fooValue');   // WHERE PodtVendItemNbr = 'fooValue'
     * $query->filterByPodtvenditemnbr('%fooValue%', Criteria::LIKE); // WHERE PodtVendItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtvenditemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtvenditemnbr($podtvenditemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtvenditemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTVENDITEMNBR, $podtvenditemnbr, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the PodtShipDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtshipdate('fooValue');   // WHERE PodtShipDate = 'fooValue'
     * $query->filterByPodtshipdate('%fooValue%', Criteria::LIKE); // WHERE PodtShipDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtshipdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtshipdate($podtshipdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtshipdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSHIPDATE, $podtshipdate, $comparison);
    }

    /**
     * Filter the query on the PodtExptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtexptdate('fooValue');   // WHERE PodtExptDate = 'fooValue'
     * $query->filterByPodtexptdate('%fooValue%', Criteria::LIKE); // WHERE PodtExptDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtexptdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtexptdate($podtexptdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtexptdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTEXPTDATE, $podtexptdate, $comparison);
    }

    /**
     * Filter the query on the PodtCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtcancdate('fooValue');   // WHERE PodtCancDate = 'fooValue'
     * $query->filterByPodtcancdate('%fooValue%', Criteria::LIKE); // WHERE PodtCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtcancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtcancdate($podtcancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtcancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCANCDATE, $podtcancdate, $comparison);
    }

    /**
     * Filter the query on the IntbUomPur column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompur('fooValue');   // WHERE IntbUomPur = 'fooValue'
     * $query->filterByIntbuompur('%fooValue%', Criteria::LIKE); // WHERE IntbUomPur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbuompur The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);
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
     * @param     mixed $podtqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtqtyord($podtqtyord = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYORD, $podtqtyord, $comparison);
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
     * @param     mixed $podtcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtcost($podtcost = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOST, $podtcost, $comparison);
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
     * @param     mixed $podtcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtcosttot($podtcosttot = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTCOSTTOT, $podtcosttot, $comparison);
    }

    /**
     * Filter the query on the PodtRel column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtrel('fooValue');   // WHERE PodtRel = 'fooValue'
     * $query->filterByPodtrel('%fooValue%', Criteria::LIKE); // WHERE PodtRel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtrel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtrel($podtrel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtrel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTREL, $podtrel, $comparison);
    }

    /**
     * Filter the query on the PodtSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtspecordr('fooValue');   // WHERE PodtSpecOrdr = 'fooValue'
     * $query->filterByPodtspecordr('%fooValue%', Criteria::LIKE); // WHERE PodtSpecOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtspecordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtspecordr($podtspecordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSPECORDR, $podtspecordr, $comparison);
    }

    /**
     * Filter the query on the PodtGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtglacct('fooValue');   // WHERE PodtGlAcct = 'fooValue'
     * $query->filterByPodtglacct('%fooValue%', Criteria::LIKE); // WHERE PodtGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtglacct($podtglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTGLACCT, $podtglacct, $comparison);
    }

    /**
     * Filter the query on the PodtSoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtsonbr('fooValue');   // WHERE PodtSoNbr = 'fooValue'
     * $query->filterByPodtsonbr('%fooValue%', Criteria::LIKE); // WHERE PodtSoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtsonbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtsonbr($podtsonbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtsonbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSONBR, $podtsonbr, $comparison);
    }

    /**
     * Filter the query on the PodtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtstat('fooValue');   // WHERE PodtStat = 'fooValue'
     * $query->filterByPodtstat('%fooValue%', Criteria::LIKE); // WHERE PodtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtstat($podtstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSTAT, $podtstat, $comparison);
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
     * @param     mixed $podtorigsoline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtorigsoline($podtorigsoline = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTORIGSOLINE, $podtorigsoline, $comparison);
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
     * @param     mixed $podtqtyduein The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtqtyduein($podtqtyduein = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTQTYDUEIN, $podtqtyduein, $comparison);
    }

    /**
     * Filter the query on the PodtType column
     *
     * Example usage:
     * <code>
     * $query->filterByPodttype('fooValue');   // WHERE PodtType = 'fooValue'
     * $query->filterByPodttype('%fooValue%', Criteria::LIKE); // WHERE PodtType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodttype($podttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTTYPE, $podttype, $comparison);
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
     * @param     mixed $podtwghttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtwghttot($podtwghttot = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWGHTTOT, $podtwghttot, $comparison);
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
     * @param     mixed $podtforeigncost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtforeigncost($podtforeigncost = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOST, $podtforeigncost, $comparison);
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
     * @param     mixed $podtforeigncosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtforeigncosttot($podtforeigncosttot = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTFOREIGNCOSTTOT, $podtforeigncosttot, $comparison);
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
     * @param     mixed $podtstanunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtstanunitcost($podtstanunitcost = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTSTANUNITCOST, $podtstanunitcost, $comparison);
    }

    /**
     * Filter the query on the PodtAckDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtackdate('fooValue');   // WHERE PodtAckDate = 'fooValue'
     * $query->filterByPodtackdate('%fooValue%', Criteria::LIKE); // WHERE PodtAckDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtackdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtackdate($podtackdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtackdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTACKDATE, $podtackdate, $comparison);
    }

    /**
     * Filter the query on the PodtInvcClearFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtinvcclearflag('fooValue');   // WHERE PodtInvcClearFlag = 'fooValue'
     * $query->filterByPodtinvcclearflag('%fooValue%', Criteria::LIKE); // WHERE PodtInvcClearFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtinvcclearflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtinvcclearflag($podtinvcclearflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtinvcclearflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTINVCCLEARFLAG, $podtinvcclearflag, $comparison);
    }

    /**
     * Filter the query on the PodtPrtKitDet column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtprtkitdet('fooValue');   // WHERE PodtPrtKitDet = 'fooValue'
     * $query->filterByPodtprtkitdet('%fooValue%', Criteria::LIKE); // WHERE PodtPrtKitDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtprtkitdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtprtkitdet($podtprtkitdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtprtkitdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTPRTKITDET, $podtprtkitdet, $comparison);
    }

    /**
     * Filter the query on the PodtDestWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdestwhse('fooValue');   // WHERE PodtDestWhse = 'fooValue'
     * $query->filterByPodtdestwhse('%fooValue%', Criteria::LIKE); // WHERE PodtDestWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtdestwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtdestwhse($podtdestwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdestwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDESTWHSE, $podtdestwhse, $comparison);
    }

    /**
     * Filter the query on the PodtRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtrevision('fooValue');   // WHERE PodtRevision = 'fooValue'
     * $query->filterByPodtrevision('%fooValue%', Criteria::LIKE); // WHERE PodtRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtrevision($podtrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTREVISION, $podtrevision, $comparison);
    }

    /**
     * Filter the query on the PodtPrtPoEOrU column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtprtpoeoru('fooValue');   // WHERE PodtPrtPoEOrU = 'fooValue'
     * $query->filterByPodtprtpoeoru('%fooValue%', Criteria::LIKE); // WHERE PodtPrtPoEOrU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtprtpoeoru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtprtpoeoru($podtprtpoeoru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtprtpoeoru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTPRTPOEORU, $podtprtpoeoru, $comparison);
    }

    /**
     * Filter the query on the PotbCnfmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbcnfmcode('fooValue');   // WHERE PotbCnfmCode = 'fooValue'
     * $query->filterByPotbcnfmcode('%fooValue%', Criteria::LIKE); // WHERE PotbCnfmCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potbcnfmcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPotbcnfmcode($potbcnfmcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbcnfmcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_POTBCNFMCODE, $potbcnfmcode, $comparison);
    }

    /**
     * Filter the query on the PodtRcptNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtrcptnbr('fooValue');   // WHERE PodtRcptNbr = 'fooValue'
     * $query->filterByPodtrcptnbr('%fooValue%', Criteria::LIKE); // WHERE PodtRcptNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtrcptnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtrcptnbr($podtrcptnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtrcptnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTRCPTNBR, $podtrcptnbr, $comparison);
    }

    /**
     * Filter the query on the PodtWipNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtwipnbr('fooValue');   // WHERE PodtWipNbr = 'fooValue'
     * $query->filterByPodtwipnbr('%fooValue%', Criteria::LIKE); // WHERE PodtWipNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtwipnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtwipnbr($podtwipnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtwipnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTWIPNBR, $podtwipnbr, $comparison);
    }

    /**
     * Filter the query on the PodtOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtordras('fooValue');   // WHERE PodtOrdrAs = 'fooValue'
     * $query->filterByPodtordras('%fooValue%', Criteria::LIKE); // WHERE PodtOrdrAs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtordras The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtordras($podtordras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtordras)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTORDRAS, $podtordras, $comparison);
    }

    /**
     * Filter the query on the PodtBolDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtboldate('fooValue');   // WHERE PodtBolDate = 'fooValue'
     * $query->filterByPodtboldate('%fooValue%', Criteria::LIKE); // WHERE PodtBolDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtboldate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtboldate($podtboldate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtboldate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTBOLDATE, $podtboldate, $comparison);
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
     * @param     mixed $podtlistpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtlistpric($podtlistpric = null, $comparison = null)
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

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTLISTPRIC, $podtlistpric, $comparison);
    }

    /**
     * Filter the query on the PodtDeliveredDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtdelivereddate('fooValue');   // WHERE PodtDeliveredDate = 'fooValue'
     * $query->filterByPodtdelivereddate('%fooValue%', Criteria::LIKE); // WHERE PodtDeliveredDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $podtdelivereddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPodtdelivereddate($podtdelivereddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($podtdelivereddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_PODTDELIVEREDDATE, $podtdelivereddate, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderDetailTableMap::COL_POHDNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);
        } else {
            throw new PropelException('filterByPurchaseOrder() only accepts arguments of type \PurchaseOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
     */
    public function joinPurchaseOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildPurchaseOrderDetail $purchaseOrderDetail Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderDetailQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // PurchaseOrderDetailQuery
