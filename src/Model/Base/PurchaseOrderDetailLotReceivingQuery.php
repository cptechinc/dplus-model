<?php

namespace Base;

use \PurchaseOrderDetailLotReceiving as ChildPurchaseOrderDetailLotReceiving;
use \PurchaseOrderDetailLotReceivingQuery as ChildPurchaseOrderDetailLotReceivingQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailLotReceivingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `po_tran_lot_det` table.
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPothnbr($order = Criteria::ASC) Order by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotdline($order = Criteria::ASC) Order by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotdseq($order = Criteria::ASC) Order by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotslotser($order = Criteria::ASC) Order by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsbin($order = Criteria::ASC) Order by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsqtyrec($order = Criteria::ASC) Order by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsqtyallo($order = Criteria::ASC) Order by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotscases($order = Criteria::ASC) Order by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotstag($order = Criteria::ASC) Order by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsinspctlvl($order = Criteria::ASC) Order by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotslotref($order = Criteria::ASC) Order by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsputtake($order = Criteria::ASC) Order by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotslandunitcost($order = Criteria::ASC) Order by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsfabcostvari($order = Criteria::ASC) Order by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotserbatch($order = Criteria::ASC) Order by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotserbatchtime($order = Criteria::ASC) Order by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsexpiredatecd($order = Criteria::ASC) Order by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsexpiredate($order = Criteria::ASC) Order by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotstariffcost($order = Criteria::ASC) Order by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPothnbr() Group by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotdline() Group by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotdseq() Group by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotslotser() Group by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsbin() Group by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsqtyrec() Group by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsqtyallo() Group by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotscases() Group by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotstag() Group by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsinspctlvl() Group by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotslotref() Group by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsputtake() Group by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotslandunitcost() Group by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsfabcostvari() Group by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotserbatch() Group by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotserbatchtime() Group by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsexpiredatecd() Group by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsexpiredate() Group by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotstariffcost() Group by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinPoReceivingHead($relationAlias = null) Adds a LEFT JOIN clause to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinPoReceivingHead($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinPoReceivingHead($relationAlias = null) Adds a INNER JOIN clause to the query using the PoReceivingHead relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery joinWithPoReceivingHead($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PoReceivingHead relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinWithPoReceivingHead() Adds a LEFT JOIN clause and with to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinWithPoReceivingHead() Adds a RIGHT JOIN clause and with to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinWithPoReceivingHead() Adds a INNER JOIN clause and with to the query using the PoReceivingHead relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinPurchaseOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinPurchaseOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinPurchaseOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery joinWithPurchaseOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinWithPurchaseOrderDetail() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinWithPurchaseOrderDetail() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinWithPurchaseOrderDetail() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \PurchaseOrderQuery|\PoReceivingHeadQuery|\PurchaseOrderDetailQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOne(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailLotReceiving matching the query
 * @method     ChildPurchaseOrderDetailLotReceiving findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailLotReceiving matching the query, or a new ChildPurchaseOrderDetailLotReceiving object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPothnbr(string $PothNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotdline(int $PotdLine) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotdseq(int $PotdSeq) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotslotser(string $PotsLotSer) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsbin(string $PotsBin) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsqtyrec(string $PotsQtyRec) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsqtyallo(string $PotsQtyAllo) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotscases(int $PotsCases) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotstag(int $PotsTag) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsinspctlvl(string $PotsInspctLvl) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotslotref(string $PotsLotRef) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsputtake(string $PotsPutTake) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotslandunitcost(string $PotsLandUnitCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsfabcostvari(string $PotsFabCostVari) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotserbatch(string $PotsErBatch) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotserbatchtime(string $PotsErBatchTime) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsexpiredatecd(string $PotsExpireDateCd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotsexpiredate(string $PotsExpireDate) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByPotstariffcost(string $PotsTariffCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving|null findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the dummy column
 *
 * @method     ChildPurchaseOrderDetailLotReceiving requirePk($key, ?ConnectionInterface $con = null) Return the ChildPurchaseOrderDetailLotReceiving by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOne(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailLotReceiving matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPothnbr(string $PothNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PothNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotdline(int $PotdLine) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotdseq(int $PotdSeq) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotslotser(string $PotsLotSer) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsbin(string $PotsBin) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsqtyrec(string $PotsQtyRec) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsqtyallo(string $PotsQtyAllo) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotscases(int $PotsCases) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotstag(int $PotsTag) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsinspctlvl(string $PotsInspctLvl) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsInspctLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotslotref(string $PotsLotRef) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsputtake(string $PotsPutTake) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsPutTake column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotslandunitcost(string $PotsLandUnitCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLandUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsfabcostvari(string $PotsFabCostVari) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsFabCostVari column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotserbatch(string $PotsErBatch) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotserbatchtime(string $PotsErBatchTime) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatchTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsexpiredatecd(string $PotsExpireDateCd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDateCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsexpiredate(string $PotsExpireDate) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotstariffcost(string $PotsTariffCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection find(?ConnectionInterface $con = null) Return ChildPurchaseOrderDetailLotReceiving objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> find(?ConnectionInterface $con = null) Return ChildPurchaseOrderDetailLotReceiving objects based on current ModelCriteria
 *
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPothnbr(string|array<string> $PothNbr) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PothNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPothnbr(string|array<string> $PothNbr) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotdline(int|array<int> $PotdLine) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotdLine column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotdline(int|array<int> $PotdLine) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotdseq(int|array<int> $PotdSeq) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotdSeq column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotdseq(int|array<int> $PotdSeq) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotslotser(string|array<string> $PotsLotSer) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLotSer column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotslotser(string|array<string> $PotsLotSer) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsbin(string|array<string> $PotsBin) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsBin column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsbin(string|array<string> $PotsBin) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsqtyrec(string|array<string> $PotsQtyRec) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsQtyRec column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsqtyrec(string|array<string> $PotsQtyRec) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsqtyallo(string|array<string> $PotsQtyAllo) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsQtyAllo column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsqtyallo(string|array<string> $PotsQtyAllo) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotscases(int|array<int> $PotsCases) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsCases column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotscases(int|array<int> $PotsCases) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotstag(int|array<int> $PotsTag) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsTag column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotstag(int|array<int> $PotsTag) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsinspctlvl(string|array<string> $PotsInspctLvl) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsInspctLvl column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsinspctlvl(string|array<string> $PotsInspctLvl) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotslotref(string|array<string> $PotsLotRef) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLotRef column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotslotref(string|array<string> $PotsLotRef) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsputtake(string|array<string> $PotsPutTake) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsPutTake column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsputtake(string|array<string> $PotsPutTake) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotslandunitcost(string|array<string> $PotsLandUnitCost) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLandUnitCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotslandunitcost(string|array<string> $PotsLandUnitCost) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsfabcostvari(string|array<string> $PotsFabCostVari) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsFabCostVari column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsfabcostvari(string|array<string> $PotsFabCostVari) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotserbatch(string|array<string> $PotsErBatch) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsErBatch column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotserbatch(string|array<string> $PotsErBatch) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotserbatchtime(string|array<string> $PotsErBatchTime) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsErBatchTime column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotserbatchtime(string|array<string> $PotsErBatchTime) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsexpiredatecd(string|array<string> $PotsExpireDateCd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsExpireDateCd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsexpiredatecd(string|array<string> $PotsExpireDateCd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotsexpiredate(string|array<string> $PotsExpireDate) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsExpireDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotsexpiredate(string|array<string> $PotsExpireDate) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByPotstariffcost(string|array<string> $PotsTariffCost) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsTariffCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByPotstariffcost(string|array<string> $PotsTariffCost) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|Collection findByDummy(string|array<string> $dummy) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailLotReceiving> findByDummy(string|array<string> $dummy) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the dummy column
 *
 * @method     ChildPurchaseOrderDetailLotReceiving[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPurchaseOrderDetailLotReceiving> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class PurchaseOrderDetailLotReceivingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailLotReceivingQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetailLotReceiving', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailLotReceivingQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailLotReceivingQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildPurchaseOrderDetailLotReceivingQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderDetailLotReceivingQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$PothNbr, $PotdLine, $PotdSeq, $InitItemNbr, $PotsLotSer, $PotsBin] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPurchaseOrderDetailLotReceiving|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderDetailLotReceivingTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildPurchaseOrderDetailLotReceiving A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PothNbr, PotdLine, PotdSeq, InitItemNbr, PotsLotSer, PotsBin, PotsQtyRec, PotsQtyAllo, PotsCases, PotsTag, PotsInspctLvl, PotsLotRef, PotsPutTake, PotsLandUnitCost, PotsFabCostVari, PotsErBatch, PotsErBatchTime, PotsExpireDateCd, PotsExpireDate, PotsTariffCost, DateUpdtd, TimeUpdtd, dummy FROM po_tran_lot_det WHERE PothNbr = :p0 AND PotdLine = :p1 AND PotdSeq = :p2 AND InitItemNbr = :p3 AND PotsLotSer = :p4 AND PotsBin = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPurchaseOrderDetailLotReceiving $obj */
            $obj = new ChildPurchaseOrderDetailLotReceiving();
            $obj->hydrate($row);
            PurchaseOrderDetailLotReceivingTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildPurchaseOrderDetailLotReceiving|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $key[5], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PothNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothnbr('fooValue');   // WHERE PothNbr = 'fooValue'
     * $query->filterByPothnbr('%fooValue%', Criteria::LIKE); // WHERE PothNbr LIKE '%fooValue%'
     * $query->filterByPothnbr(['foo', 'bar']); // WHERE PothNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothnbr($pothnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $pothnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotdLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdline(1234); // WHERE PotdLine = 1234
     * $query->filterByPotdline(array(12, 34)); // WHERE PotdLine IN (12, 34)
     * $query->filterByPotdline(array('min' => 12)); // WHERE PotdLine > 12
     * </code>
     *
     * @see       filterByPurchaseOrderDetail()
     *
     * @param mixed $potdline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotdline($potdline = null, ?string $comparison = null)
    {
        if (is_array($potdline)) {
            $useMinMax = false;
            if (isset($potdline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $potdline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $potdline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $potdline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotdSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdseq(1234); // WHERE PotdSeq = 1234
     * $query->filterByPotdseq(array(12, 34)); // WHERE PotdSeq IN (12, 34)
     * $query->filterByPotdseq(array('min' => 12)); // WHERE PotdSeq > 12
     * </code>
     *
     * @param mixed $potdseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotdseq($potdseq = null, ?string $comparison = null)
    {
        if (is_array($potdseq)) {
            $useMinMax = false;
            if (isset($potdseq['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $potdseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdseq['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $potdseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $potdseq, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByPotslotser('fooValue');   // WHERE PotsLotSer = 'fooValue'
     * $query->filterByPotslotser('%fooValue%', Criteria::LIKE); // WHERE PotsLotSer LIKE '%fooValue%'
     * $query->filterByPotslotser(['foo', 'bar']); // WHERE PotsLotSer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potslotser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotslotser($potslotser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potslotser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $potslotser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsBin column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsbin('fooValue');   // WHERE PotsBin = 'fooValue'
     * $query->filterByPotsbin('%fooValue%', Criteria::LIKE); // WHERE PotsBin LIKE '%fooValue%'
     * $query->filterByPotsbin(['foo', 'bar']); // WHERE PotsBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potsbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsbin($potsbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $potsbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsQtyRec column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsqtyrec(1234); // WHERE PotsQtyRec = 1234
     * $query->filterByPotsqtyrec(array(12, 34)); // WHERE PotsQtyRec IN (12, 34)
     * $query->filterByPotsqtyrec(array('min' => 12)); // WHERE PotsQtyRec > 12
     * </code>
     *
     * @param mixed $potsqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsqtyrec($potsqtyrec = null, ?string $comparison = null)
    {
        if (is_array($potsqtyrec)) {
            $useMinMax = false;
            if (isset($potsqtyrec['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $potsqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potsqtyrec['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $potsqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $potsqtyrec, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsQtyAllo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsqtyallo(1234); // WHERE PotsQtyAllo = 1234
     * $query->filterByPotsqtyallo(array(12, 34)); // WHERE PotsQtyAllo IN (12, 34)
     * $query->filterByPotsqtyallo(array('min' => 12)); // WHERE PotsQtyAllo > 12
     * </code>
     *
     * @param mixed $potsqtyallo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsqtyallo($potsqtyallo = null, ?string $comparison = null)
    {
        if (is_array($potsqtyallo)) {
            $useMinMax = false;
            if (isset($potsqtyallo['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $potsqtyallo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potsqtyallo['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $potsqtyallo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $potsqtyallo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsCases column
     *
     * Example usage:
     * <code>
     * $query->filterByPotscases(1234); // WHERE PotsCases = 1234
     * $query->filterByPotscases(array(12, 34)); // WHERE PotsCases IN (12, 34)
     * $query->filterByPotscases(array('min' => 12)); // WHERE PotsCases > 12
     * </code>
     *
     * @param mixed $potscases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotscases($potscases = null, ?string $comparison = null)
    {
        if (is_array($potscases)) {
            $useMinMax = false;
            if (isset($potscases['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $potscases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potscases['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $potscases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $potscases, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsTag column
     *
     * Example usage:
     * <code>
     * $query->filterByPotstag(1234); // WHERE PotsTag = 1234
     * $query->filterByPotstag(array(12, 34)); // WHERE PotsTag IN (12, 34)
     * $query->filterByPotstag(array('min' => 12)); // WHERE PotsTag > 12
     * </code>
     *
     * @param mixed $potstag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotstag($potstag = null, ?string $comparison = null)
    {
        if (is_array($potstag)) {
            $useMinMax = false;
            if (isset($potstag['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $potstag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potstag['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $potstag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $potstag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsInspctLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsinspctlvl('fooValue');   // WHERE PotsInspctLvl = 'fooValue'
     * $query->filterByPotsinspctlvl('%fooValue%', Criteria::LIKE); // WHERE PotsInspctLvl LIKE '%fooValue%'
     * $query->filterByPotsinspctlvl(['foo', 'bar']); // WHERE PotsInspctLvl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potsinspctlvl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsinspctlvl($potsinspctlvl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsinspctlvl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL, $potsinspctlvl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPotslotref('fooValue');   // WHERE PotsLotRef = 'fooValue'
     * $query->filterByPotslotref('%fooValue%', Criteria::LIKE); // WHERE PotsLotRef LIKE '%fooValue%'
     * $query->filterByPotslotref(['foo', 'bar']); // WHERE PotsLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potslotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotslotref($potslotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potslotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF, $potslotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsPutTake column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsputtake('fooValue');   // WHERE PotsPutTake = 'fooValue'
     * $query->filterByPotsputtake('%fooValue%', Criteria::LIKE); // WHERE PotsPutTake LIKE '%fooValue%'
     * $query->filterByPotsputtake(['foo', 'bar']); // WHERE PotsPutTake IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potsputtake The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsputtake($potsputtake = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsputtake)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE, $potsputtake, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsLandUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotslandunitcost(1234); // WHERE PotsLandUnitCost = 1234
     * $query->filterByPotslandunitcost(array(12, 34)); // WHERE PotsLandUnitCost IN (12, 34)
     * $query->filterByPotslandunitcost(array('min' => 12)); // WHERE PotsLandUnitCost > 12
     * </code>
     *
     * @param mixed $potslandunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotslandunitcost($potslandunitcost = null, ?string $comparison = null)
    {
        if (is_array($potslandunitcost)) {
            $useMinMax = false;
            if (isset($potslandunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $potslandunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potslandunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $potslandunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $potslandunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsFabCostVari column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsfabcostvari(1234); // WHERE PotsFabCostVari = 1234
     * $query->filterByPotsfabcostvari(array(12, 34)); // WHERE PotsFabCostVari IN (12, 34)
     * $query->filterByPotsfabcostvari(array('min' => 12)); // WHERE PotsFabCostVari > 12
     * </code>
     *
     * @param mixed $potsfabcostvari The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsfabcostvari($potsfabcostvari = null, ?string $comparison = null)
    {
        if (is_array($potsfabcostvari)) {
            $useMinMax = false;
            if (isset($potsfabcostvari['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $potsfabcostvari['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potsfabcostvari['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $potsfabcostvari['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $potsfabcostvari, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsErBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByPotserbatch('fooValue');   // WHERE PotsErBatch = 'fooValue'
     * $query->filterByPotserbatch('%fooValue%', Criteria::LIKE); // WHERE PotsErBatch LIKE '%fooValue%'
     * $query->filterByPotserbatch(['foo', 'bar']); // WHERE PotsErBatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potserbatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotserbatch($potserbatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potserbatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH, $potserbatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsErBatchTime column
     *
     * Example usage:
     * <code>
     * $query->filterByPotserbatchtime('fooValue');   // WHERE PotsErBatchTime = 'fooValue'
     * $query->filterByPotserbatchtime('%fooValue%', Criteria::LIKE); // WHERE PotsErBatchTime LIKE '%fooValue%'
     * $query->filterByPotserbatchtime(['foo', 'bar']); // WHERE PotsErBatchTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potserbatchtime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotserbatchtime($potserbatchtime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potserbatchtime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME, $potserbatchtime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsExpireDateCd column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsexpiredatecd('fooValue');   // WHERE PotsExpireDateCd = 'fooValue'
     * $query->filterByPotsexpiredatecd('%fooValue%', Criteria::LIKE); // WHERE PotsExpireDateCd LIKE '%fooValue%'
     * $query->filterByPotsexpiredatecd(['foo', 'bar']); // WHERE PotsExpireDateCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potsexpiredatecd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsexpiredatecd($potsexpiredatecd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsexpiredatecd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD, $potsexpiredatecd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsexpiredate('fooValue');   // WHERE PotsExpireDate = 'fooValue'
     * $query->filterByPotsexpiredate('%fooValue%', Criteria::LIKE); // WHERE PotsExpireDate LIKE '%fooValue%'
     * $query->filterByPotsexpiredate(['foo', 'bar']); // WHERE PotsExpireDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potsexpiredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotsexpiredate($potsexpiredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE, $potsexpiredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PotsTariffCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotstariffcost(1234); // WHERE PotsTariffCost = 1234
     * $query->filterByPotstariffcost(array(12, 34)); // WHERE PotsTariffCost IN (12, 34)
     * $query->filterByPotstariffcost(array('min' => 12)); // WHERE PotsTariffCost > 12
     * </code>
     *
     * @param mixed $potstariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotstariffcost($potstariffcost = null, ?string $comparison = null)
    {
        if (is_array($potstariffcost)) {
            $useMinMax = false;
            if (isset($potstariffcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $potstariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potstariffcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $potstariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $potstariffcost, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);

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
     * Filter the query by a related \PoReceivingHead object
     *
     * @param \PoReceivingHead|ObjectCollection $poReceivingHead The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPoReceivingHead($poReceivingHead, ?string $comparison = null)
    {
        if ($poReceivingHead instanceof \PoReceivingHead) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $poReceivingHead->getPothnbr(), $comparison);
        } elseif ($poReceivingHead instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $poReceivingHead->toKeyValue('PrimaryKey', 'Pothnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPoReceivingHead() only accepts arguments of type \PoReceivingHead or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PoReceivingHead relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPoReceivingHead(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PoReceivingHead');

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
            $this->addJoinObject($join, 'PoReceivingHead');
        }

        return $this;
    }

    /**
     * Use the PoReceivingHead relation PoReceivingHead object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PoReceivingHeadQuery A secondary query class using the current class as primary query
     */
    public function usePoReceivingHeadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPoReceivingHead($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PoReceivingHead', '\PoReceivingHeadQuery');
    }

    /**
     * Use the PoReceivingHead relation PoReceivingHead object
     *
     * @param callable(\PoReceivingHeadQuery):\PoReceivingHeadQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPoReceivingHeadQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePoReceivingHeadQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PoReceivingHead table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PoReceivingHeadQuery The inner query object of the EXISTS statement
     */
    public function usePoReceivingHeadExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PoReceivingHeadQuery */
        $q = $this->useExistsQuery('PoReceivingHead', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PoReceivingHead table for a NOT EXISTS query.
     *
     * @see usePoReceivingHeadExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PoReceivingHeadQuery The inner query object of the NOT EXISTS statement
     */
    public function usePoReceivingHeadNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PoReceivingHeadQuery */
        $q = $this->useExistsQuery('PoReceivingHead', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PoReceivingHead table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PoReceivingHeadQuery The inner query object of the IN statement
     */
    public function useInPoReceivingHeadQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PoReceivingHeadQuery */
        $q = $this->useInQuery('PoReceivingHead', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PoReceivingHead table for a NOT IN query.
     *
     * @see usePoReceivingHeadInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PoReceivingHeadQuery The inner query object of the NOT IN statement
     */
    public function useNotInPoReceivingHeadQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PoReceivingHeadQuery */
        $q = $this->useInQuery('PoReceivingHead', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetail object
     *
     * @param \PurchaseOrderDetail $purchaseOrderDetail The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetail($purchaseOrderDetail, ?string $comparison = null)
    {
        if ($purchaseOrderDetail instanceof \PurchaseOrderDetail) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $purchaseOrderDetail->getPohdnbr(), $comparison)
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $purchaseOrderDetail->getPodtline(), $comparison);
        } else {
            throw new PropelException('filterByPurchaseOrderDetail() only accepts arguments of type \PurchaseOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetail');

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
            $this->addJoinObject($join, 'PurchaseOrderDetail');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetail relation PurchaseOrderDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetail', '\PurchaseOrderDetailQuery');
    }

    /**
     * Use the PurchaseOrderDetail relation PurchaseOrderDetail object
     *
     * @param callable(\PurchaseOrderDetailQuery):\PurchaseOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useInQuery('PurchaseOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useInQuery('PurchaseOrderDetail', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Exclude object from result
     *
     * @param ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($purchaseOrderDetailLotReceiving = null)
    {
        if ($purchaseOrderDetailLotReceiving) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR), $purchaseOrderDetailLotReceiving->getPothnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE), $purchaseOrderDetailLotReceiving->getPotdline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ), $purchaseOrderDetailLotReceiving->getPotdseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR), $purchaseOrderDetailLotReceiving->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER), $purchaseOrderDetailLotReceiving->getPotslotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN), $purchaseOrderDetailLotReceiving->getPotsbin(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_tran_lot_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderDetailLotReceivingTableMap::clearInstancePool();
            PurchaseOrderDetailLotReceivingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderDetailLotReceivingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderDetailLotReceivingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
