<?php

namespace Base;

use \PoReceivingHead as ChildPoReceivingHead;
use \PoReceivingHeadQuery as ChildPoReceivingHeadQuery;
use \Exception;
use \PDO;
use Map\PoReceivingHeadTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `po_tran_head` table.
 *
 * @method     ChildPoReceivingHeadQuery orderByPothnbr($order = Criteria::ASC) Order by the PothNbr column
 * @method     ChildPoReceivingHeadQuery orderByPothstat($order = Criteria::ASC) Order by the PothStat column
 * @method     ChildPoReceivingHeadQuery orderByPothrcptdate($order = Criteria::ASC) Order by the PothRcptDate column
 * @method     ChildPoReceivingHeadQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildPoReceivingHeadQuery orderByPothglpd($order = Criteria::ASC) Order by the PothGlPd column
 * @method     ChildPoReceivingHeadQuery orderByPothairship($order = Criteria::ASC) Order by the PothAirShip column
 * @method     ChildPoReceivingHeadQuery orderByPotherinreview($order = Criteria::ASC) Order by the PothErInReview column
 * @method     ChildPoReceivingHeadQuery orderByPothexchctry($order = Criteria::ASC) Order by the PothExchCtry column
 * @method     ChildPoReceivingHeadQuery orderByPothexchrate($order = Criteria::ASC) Order by the PothExchRate column
 * @method     ChildPoReceivingHeadQuery orderByIntbwhseorig($order = Criteria::ASC) Order by the IntbWhseOrig column
 * @method     ChildPoReceivingHeadQuery orderByPothlandcost($order = Criteria::ASC) Order by the PothLandCost column
 * @method     ChildPoReceivingHeadQuery orderByPothrcptnbr($order = Criteria::ASC) Order by the PothRcptNbr column
 * @method     ChildPoReceivingHeadQuery orderByPothlandbasedon($order = Criteria::ASC) Order by the PothLandBasedOn column
 * @method     ChildPoReceivingHeadQuery orderByPothinvcnbr($order = Criteria::ASC) Order by the PothInvcNbr column
 * @method     ChildPoReceivingHeadQuery orderByPothinvcdate($order = Criteria::ASC) Order by the PothInvcDate column
 * @method     ChildPoReceivingHeadQuery orderByPothfrtamt($order = Criteria::ASC) Order by the PothFrtAmt column
 * @method     ChildPoReceivingHeadQuery orderByPothmiscamt($order = Criteria::ASC) Order by the PothMiscAmt column
 * @method     ChildPoReceivingHeadQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPoReceivingHeadQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPoReceivingHeadQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPoReceivingHeadQuery groupByPothnbr() Group by the PothNbr column
 * @method     ChildPoReceivingHeadQuery groupByPothstat() Group by the PothStat column
 * @method     ChildPoReceivingHeadQuery groupByPothrcptdate() Group by the PothRcptDate column
 * @method     ChildPoReceivingHeadQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildPoReceivingHeadQuery groupByPothglpd() Group by the PothGlPd column
 * @method     ChildPoReceivingHeadQuery groupByPothairship() Group by the PothAirShip column
 * @method     ChildPoReceivingHeadQuery groupByPotherinreview() Group by the PothErInReview column
 * @method     ChildPoReceivingHeadQuery groupByPothexchctry() Group by the PothExchCtry column
 * @method     ChildPoReceivingHeadQuery groupByPothexchrate() Group by the PothExchRate column
 * @method     ChildPoReceivingHeadQuery groupByIntbwhseorig() Group by the IntbWhseOrig column
 * @method     ChildPoReceivingHeadQuery groupByPothlandcost() Group by the PothLandCost column
 * @method     ChildPoReceivingHeadQuery groupByPothrcptnbr() Group by the PothRcptNbr column
 * @method     ChildPoReceivingHeadQuery groupByPothlandbasedon() Group by the PothLandBasedOn column
 * @method     ChildPoReceivingHeadQuery groupByPothinvcnbr() Group by the PothInvcNbr column
 * @method     ChildPoReceivingHeadQuery groupByPothinvcdate() Group by the PothInvcDate column
 * @method     ChildPoReceivingHeadQuery groupByPothfrtamt() Group by the PothFrtAmt column
 * @method     ChildPoReceivingHeadQuery groupByPothmiscamt() Group by the PothMiscAmt column
 * @method     ChildPoReceivingHeadQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPoReceivingHeadQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPoReceivingHeadQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPoReceivingHeadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPoReceivingHeadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPoReceivingHeadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPoReceivingHeadQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPoReceivingHeadQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPoReceivingHeadQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithPurchaseOrderDetailReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithPurchaseOrderDetailReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithPurchaseOrderDetailReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithPurchaseOrderDetailReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithPurchaseOrderDetailLotReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithPurchaseOrderDetailLotReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithPurchaseOrderDetailLotReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithPurchaseOrderDetailLotReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     \PurchaseOrderQuery|\WarehouseQuery|\PurchaseOrderDetailReceivingQuery|\PurchaseOrderDetailLotReceivingQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPoReceivingHead|null findOne(?ConnectionInterface $con = null) Return the first ChildPoReceivingHead matching the query
 * @method     ChildPoReceivingHead findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildPoReceivingHead matching the query, or a new ChildPoReceivingHead object populated from the query conditions when no match is found
 *
 * @method     ChildPoReceivingHead|null findOneByPothnbr(string $PothNbr) Return the first ChildPoReceivingHead filtered by the PothNbr column
 * @method     ChildPoReceivingHead|null findOneByPothstat(string $PothStat) Return the first ChildPoReceivingHead filtered by the PothStat column
 * @method     ChildPoReceivingHead|null findOneByPothrcptdate(string $PothRcptDate) Return the first ChildPoReceivingHead filtered by the PothRcptDate column
 * @method     ChildPoReceivingHead|null findOneByIntbwhse(string $IntbWhse) Return the first ChildPoReceivingHead filtered by the IntbWhse column
 * @method     ChildPoReceivingHead|null findOneByPothglpd(int $PothGlPd) Return the first ChildPoReceivingHead filtered by the PothGlPd column
 * @method     ChildPoReceivingHead|null findOneByPothairship(string $PothAirShip) Return the first ChildPoReceivingHead filtered by the PothAirShip column
 * @method     ChildPoReceivingHead|null findOneByPotherinreview(string $PothErInReview) Return the first ChildPoReceivingHead filtered by the PothErInReview column
 * @method     ChildPoReceivingHead|null findOneByPothexchctry(string $PothExchCtry) Return the first ChildPoReceivingHead filtered by the PothExchCtry column
 * @method     ChildPoReceivingHead|null findOneByPothexchrate(string $PothExchRate) Return the first ChildPoReceivingHead filtered by the PothExchRate column
 * @method     ChildPoReceivingHead|null findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildPoReceivingHead filtered by the IntbWhseOrig column
 * @method     ChildPoReceivingHead|null findOneByPothlandcost(string $PothLandCost) Return the first ChildPoReceivingHead filtered by the PothLandCost column
 * @method     ChildPoReceivingHead|null findOneByPothrcptnbr(int $PothRcptNbr) Return the first ChildPoReceivingHead filtered by the PothRcptNbr column
 * @method     ChildPoReceivingHead|null findOneByPothlandbasedon(string $PothLandBasedOn) Return the first ChildPoReceivingHead filtered by the PothLandBasedOn column
 * @method     ChildPoReceivingHead|null findOneByPothinvcnbr(string $PothInvcNbr) Return the first ChildPoReceivingHead filtered by the PothInvcNbr column
 * @method     ChildPoReceivingHead|null findOneByPothinvcdate(string $PothInvcDate) Return the first ChildPoReceivingHead filtered by the PothInvcDate column
 * @method     ChildPoReceivingHead|null findOneByPothfrtamt(string $PothFrtAmt) Return the first ChildPoReceivingHead filtered by the PothFrtAmt column
 * @method     ChildPoReceivingHead|null findOneByPothmiscamt(string $PothMiscAmt) Return the first ChildPoReceivingHead filtered by the PothMiscAmt column
 * @method     ChildPoReceivingHead|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildPoReceivingHead filtered by the DateUpdtd column
 * @method     ChildPoReceivingHead|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPoReceivingHead filtered by the TimeUpdtd column
 * @method     ChildPoReceivingHead|null findOneByDummy(string $dummy) Return the first ChildPoReceivingHead filtered by the dummy column
 *
 * @method     ChildPoReceivingHead requirePk($key, ?ConnectionInterface $con = null) Return the ChildPoReceivingHead by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOne(?ConnectionInterface $con = null) Return the first ChildPoReceivingHead matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPoReceivingHead requireOneByPothnbr(string $PothNbr) Return the first ChildPoReceivingHead filtered by the PothNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothstat(string $PothStat) Return the first ChildPoReceivingHead filtered by the PothStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothrcptdate(string $PothRcptDate) Return the first ChildPoReceivingHead filtered by the PothRcptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByIntbwhse(string $IntbWhse) Return the first ChildPoReceivingHead filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothglpd(int $PothGlPd) Return the first ChildPoReceivingHead filtered by the PothGlPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothairship(string $PothAirShip) Return the first ChildPoReceivingHead filtered by the PothAirShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPotherinreview(string $PothErInReview) Return the first ChildPoReceivingHead filtered by the PothErInReview column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothexchctry(string $PothExchCtry) Return the first ChildPoReceivingHead filtered by the PothExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothexchrate(string $PothExchRate) Return the first ChildPoReceivingHead filtered by the PothExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildPoReceivingHead filtered by the IntbWhseOrig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothlandcost(string $PothLandCost) Return the first ChildPoReceivingHead filtered by the PothLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothrcptnbr(int $PothRcptNbr) Return the first ChildPoReceivingHead filtered by the PothRcptNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothlandbasedon(string $PothLandBasedOn) Return the first ChildPoReceivingHead filtered by the PothLandBasedOn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothinvcnbr(string $PothInvcNbr) Return the first ChildPoReceivingHead filtered by the PothInvcNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothinvcdate(string $PothInvcDate) Return the first ChildPoReceivingHead filtered by the PothInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothfrtamt(string $PothFrtAmt) Return the first ChildPoReceivingHead filtered by the PothFrtAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothmiscamt(string $PothMiscAmt) Return the first ChildPoReceivingHead filtered by the PothMiscAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPoReceivingHead filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPoReceivingHead filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByDummy(string $dummy) Return the first ChildPoReceivingHead filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPoReceivingHead[]|Collection find(?ConnectionInterface $con = null) Return ChildPoReceivingHead objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> find(?ConnectionInterface $con = null) Return ChildPoReceivingHead objects based on current ModelCriteria
 *
 * @method     ChildPoReceivingHead[]|Collection findByPothnbr(string|array<string> $PothNbr) Return ChildPoReceivingHead objects filtered by the PothNbr column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothnbr(string|array<string> $PothNbr) Return ChildPoReceivingHead objects filtered by the PothNbr column
 * @method     ChildPoReceivingHead[]|Collection findByPothstat(string|array<string> $PothStat) Return ChildPoReceivingHead objects filtered by the PothStat column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothstat(string|array<string> $PothStat) Return ChildPoReceivingHead objects filtered by the PothStat column
 * @method     ChildPoReceivingHead[]|Collection findByPothrcptdate(string|array<string> $PothRcptDate) Return ChildPoReceivingHead objects filtered by the PothRcptDate column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothrcptdate(string|array<string> $PothRcptDate) Return ChildPoReceivingHead objects filtered by the PothRcptDate column
 * @method     ChildPoReceivingHead[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildPoReceivingHead objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByIntbwhse(string|array<string> $IntbWhse) Return ChildPoReceivingHead objects filtered by the IntbWhse column
 * @method     ChildPoReceivingHead[]|Collection findByPothglpd(int|array<int> $PothGlPd) Return ChildPoReceivingHead objects filtered by the PothGlPd column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothglpd(int|array<int> $PothGlPd) Return ChildPoReceivingHead objects filtered by the PothGlPd column
 * @method     ChildPoReceivingHead[]|Collection findByPothairship(string|array<string> $PothAirShip) Return ChildPoReceivingHead objects filtered by the PothAirShip column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothairship(string|array<string> $PothAirShip) Return ChildPoReceivingHead objects filtered by the PothAirShip column
 * @method     ChildPoReceivingHead[]|Collection findByPotherinreview(string|array<string> $PothErInReview) Return ChildPoReceivingHead objects filtered by the PothErInReview column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPotherinreview(string|array<string> $PothErInReview) Return ChildPoReceivingHead objects filtered by the PothErInReview column
 * @method     ChildPoReceivingHead[]|Collection findByPothexchctry(string|array<string> $PothExchCtry) Return ChildPoReceivingHead objects filtered by the PothExchCtry column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothexchctry(string|array<string> $PothExchCtry) Return ChildPoReceivingHead objects filtered by the PothExchCtry column
 * @method     ChildPoReceivingHead[]|Collection findByPothexchrate(string|array<string> $PothExchRate) Return ChildPoReceivingHead objects filtered by the PothExchRate column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothexchrate(string|array<string> $PothExchRate) Return ChildPoReceivingHead objects filtered by the PothExchRate column
 * @method     ChildPoReceivingHead[]|Collection findByIntbwhseorig(string|array<string> $IntbWhseOrig) Return ChildPoReceivingHead objects filtered by the IntbWhseOrig column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByIntbwhseorig(string|array<string> $IntbWhseOrig) Return ChildPoReceivingHead objects filtered by the IntbWhseOrig column
 * @method     ChildPoReceivingHead[]|Collection findByPothlandcost(string|array<string> $PothLandCost) Return ChildPoReceivingHead objects filtered by the PothLandCost column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothlandcost(string|array<string> $PothLandCost) Return ChildPoReceivingHead objects filtered by the PothLandCost column
 * @method     ChildPoReceivingHead[]|Collection findByPothrcptnbr(int|array<int> $PothRcptNbr) Return ChildPoReceivingHead objects filtered by the PothRcptNbr column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothrcptnbr(int|array<int> $PothRcptNbr) Return ChildPoReceivingHead objects filtered by the PothRcptNbr column
 * @method     ChildPoReceivingHead[]|Collection findByPothlandbasedon(string|array<string> $PothLandBasedOn) Return ChildPoReceivingHead objects filtered by the PothLandBasedOn column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothlandbasedon(string|array<string> $PothLandBasedOn) Return ChildPoReceivingHead objects filtered by the PothLandBasedOn column
 * @method     ChildPoReceivingHead[]|Collection findByPothinvcnbr(string|array<string> $PothInvcNbr) Return ChildPoReceivingHead objects filtered by the PothInvcNbr column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothinvcnbr(string|array<string> $PothInvcNbr) Return ChildPoReceivingHead objects filtered by the PothInvcNbr column
 * @method     ChildPoReceivingHead[]|Collection findByPothinvcdate(string|array<string> $PothInvcDate) Return ChildPoReceivingHead objects filtered by the PothInvcDate column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothinvcdate(string|array<string> $PothInvcDate) Return ChildPoReceivingHead objects filtered by the PothInvcDate column
 * @method     ChildPoReceivingHead[]|Collection findByPothfrtamt(string|array<string> $PothFrtAmt) Return ChildPoReceivingHead objects filtered by the PothFrtAmt column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothfrtamt(string|array<string> $PothFrtAmt) Return ChildPoReceivingHead objects filtered by the PothFrtAmt column
 * @method     ChildPoReceivingHead[]|Collection findByPothmiscamt(string|array<string> $PothMiscAmt) Return ChildPoReceivingHead objects filtered by the PothMiscAmt column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByPothmiscamt(string|array<string> $PothMiscAmt) Return ChildPoReceivingHead objects filtered by the PothMiscAmt column
 * @method     ChildPoReceivingHead[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPoReceivingHead objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPoReceivingHead objects filtered by the DateUpdtd column
 * @method     ChildPoReceivingHead[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPoReceivingHead objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPoReceivingHead objects filtered by the TimeUpdtd column
 * @method     ChildPoReceivingHead[]|Collection findByDummy(string|array<string> $dummy) Return ChildPoReceivingHead objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildPoReceivingHead> findByDummy(string|array<string> $dummy) Return ChildPoReceivingHead objects filtered by the dummy column
 *
 * @method     ChildPoReceivingHead[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPoReceivingHead> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class PoReceivingHeadQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PoReceivingHeadQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PoReceivingHead', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPoReceivingHeadQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPoReceivingHeadQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildPoReceivingHeadQuery) {
            return $criteria;
        }
        $query = new ChildPoReceivingHeadQuery();
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
     * @return ChildPoReceivingHead|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PoReceivingHeadTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPoReceivingHead A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PothNbr, PothStat, PothRcptDate, IntbWhse, PothGlPd, PothAirShip, PothErInReview, PothExchCtry, PothExchRate, IntbWhseOrig, PothLandCost, PothRcptNbr, PothLandBasedOn, PothInvcNbr, PothInvcDate, PothFrtAmt, PothMiscAmt, DateUpdtd, TimeUpdtd, dummy FROM po_tran_head WHERE PothNbr = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPoReceivingHead $obj */
            $obj = new ChildPoReceivingHead();
            $obj->hydrate($row);
            PoReceivingHeadTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPoReceivingHead|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $keys, Criteria::IN);

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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $pothnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPothstat('fooValue');   // WHERE PothStat = 'fooValue'
     * $query->filterByPothstat('%fooValue%', Criteria::LIKE); // WHERE PothStat LIKE '%fooValue%'
     * $query->filterByPothstat(['foo', 'bar']); // WHERE PothStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothstat($pothstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHSTAT, $pothstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothRcptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPothrcptdate('fooValue');   // WHERE PothRcptDate = 'fooValue'
     * $query->filterByPothrcptdate('%fooValue%', Criteria::LIKE); // WHERE PothRcptDate LIKE '%fooValue%'
     * $query->filterByPothrcptdate(['foo', 'bar']); // WHERE PothRcptDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothrcptdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothrcptdate($pothrcptdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothrcptdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTDATE, $pothrcptdate, $comparison);

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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothGlPd column
     *
     * Example usage:
     * <code>
     * $query->filterByPothglpd(1234); // WHERE PothGlPd = 1234
     * $query->filterByPothglpd(array(12, 34)); // WHERE PothGlPd IN (12, 34)
     * $query->filterByPothglpd(array('min' => 12)); // WHERE PothGlPd > 12
     * </code>
     *
     * @param mixed $pothglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothglpd($pothglpd = null, ?string $comparison = null)
    {
        if (is_array($pothglpd)) {
            $useMinMax = false;
            if (isset($pothglpd['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHGLPD, $pothglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothglpd['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHGLPD, $pothglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHGLPD, $pothglpd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothAirShip column
     *
     * Example usage:
     * <code>
     * $query->filterByPothairship('fooValue');   // WHERE PothAirShip = 'fooValue'
     * $query->filterByPothairship('%fooValue%', Criteria::LIKE); // WHERE PothAirShip LIKE '%fooValue%'
     * $query->filterByPothairship(['foo', 'bar']); // WHERE PothAirShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothairship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothairship($pothairship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothairship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHAIRSHIP, $pothairship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothErInReview column
     *
     * Example usage:
     * <code>
     * $query->filterByPotherinreview('fooValue');   // WHERE PothErInReview = 'fooValue'
     * $query->filterByPotherinreview('%fooValue%', Criteria::LIKE); // WHERE PothErInReview LIKE '%fooValue%'
     * $query->filterByPotherinreview(['foo', 'bar']); // WHERE PothErInReview IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $potherinreview The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPotherinreview($potherinreview = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potherinreview)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHERINREVIEW, $potherinreview, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByPothexchctry('fooValue');   // WHERE PothExchCtry = 'fooValue'
     * $query->filterByPothexchctry('%fooValue%', Criteria::LIKE); // WHERE PothExchCtry LIKE '%fooValue%'
     * $query->filterByPothexchctry(['foo', 'bar']); // WHERE PothExchCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothexchctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothexchctry($pothexchctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHCTRY, $pothexchctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByPothexchrate(1234); // WHERE PothExchRate = 1234
     * $query->filterByPothexchrate(array(12, 34)); // WHERE PothExchRate IN (12, 34)
     * $query->filterByPothexchrate(array('min' => 12)); // WHERE PothExchRate > 12
     * </code>
     *
     * @param mixed $pothexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothexchrate($pothexchrate = null, ?string $comparison = null)
    {
        if (is_array($pothexchrate)) {
            $useMinMax = false;
            if (isset($pothexchrate['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $pothexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothexchrate['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $pothexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $pothexchrate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseOrig column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseorig('fooValue');   // WHERE IntbWhseOrig = 'fooValue'
     * $query->filterByIntbwhseorig('%fooValue%', Criteria::LIKE); // WHERE IntbWhseOrig LIKE '%fooValue%'
     * $query->filterByIntbwhseorig(['foo', 'bar']); // WHERE IntbWhseOrig IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseorig The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPothlandcost(1234); // WHERE PothLandCost = 1234
     * $query->filterByPothlandcost(array(12, 34)); // WHERE PothLandCost IN (12, 34)
     * $query->filterByPothlandcost(array('min' => 12)); // WHERE PothLandCost > 12
     * </code>
     *
     * @param mixed $pothlandcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothlandcost($pothlandcost = null, ?string $comparison = null)
    {
        if (is_array($pothlandcost)) {
            $useMinMax = false;
            if (isset($pothlandcost['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDCOST, $pothlandcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothlandcost['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDCOST, $pothlandcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDCOST, $pothlandcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothRcptNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothrcptnbr(1234); // WHERE PothRcptNbr = 1234
     * $query->filterByPothrcptnbr(array(12, 34)); // WHERE PothRcptNbr IN (12, 34)
     * $query->filterByPothrcptnbr(array('min' => 12)); // WHERE PothRcptNbr > 12
     * </code>
     *
     * @param mixed $pothrcptnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothrcptnbr($pothrcptnbr = null, ?string $comparison = null)
    {
        if (is_array($pothrcptnbr)) {
            $useMinMax = false;
            if (isset($pothrcptnbr['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $pothrcptnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothrcptnbr['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $pothrcptnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $pothrcptnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothLandBasedOn column
     *
     * Example usage:
     * <code>
     * $query->filterByPothlandbasedon('fooValue');   // WHERE PothLandBasedOn = 'fooValue'
     * $query->filterByPothlandbasedon('%fooValue%', Criteria::LIKE); // WHERE PothLandBasedOn LIKE '%fooValue%'
     * $query->filterByPothlandbasedon(['foo', 'bar']); // WHERE PothLandBasedOn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothlandbasedon The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothlandbasedon($pothlandbasedon = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothlandbasedon)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDBASEDON, $pothlandbasedon, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothInvcNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothinvcnbr('fooValue');   // WHERE PothInvcNbr = 'fooValue'
     * $query->filterByPothinvcnbr('%fooValue%', Criteria::LIKE); // WHERE PothInvcNbr LIKE '%fooValue%'
     * $query->filterByPothinvcnbr(['foo', 'bar']); // WHERE PothInvcNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothinvcnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothinvcnbr($pothinvcnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothinvcnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHINVCNBR, $pothinvcnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPothinvcdate('fooValue');   // WHERE PothInvcDate = 'fooValue'
     * $query->filterByPothinvcdate('%fooValue%', Criteria::LIKE); // WHERE PothInvcDate LIKE '%fooValue%'
     * $query->filterByPothinvcdate(['foo', 'bar']); // WHERE PothInvcDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pothinvcdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothinvcdate($pothinvcdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothinvcdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHINVCDATE, $pothinvcdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothFrtAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPothfrtamt(1234); // WHERE PothFrtAmt = 1234
     * $query->filterByPothfrtamt(array(12, 34)); // WHERE PothFrtAmt IN (12, 34)
     * $query->filterByPothfrtamt(array('min' => 12)); // WHERE PothFrtAmt > 12
     * </code>
     *
     * @param mixed $pothfrtamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothfrtamt($pothfrtamt = null, ?string $comparison = null)
    {
        if (is_array($pothfrtamt)) {
            $useMinMax = false;
            if (isset($pothfrtamt['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHFRTAMT, $pothfrtamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothfrtamt['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHFRTAMT, $pothfrtamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHFRTAMT, $pothfrtamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PothMiscAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPothmiscamt(1234); // WHERE PothMiscAmt = 1234
     * $query->filterByPothmiscamt(array(12, 34)); // WHERE PothMiscAmt IN (12, 34)
     * $query->filterByPothmiscamt(array('min' => 12)); // WHERE PothMiscAmt > 12
     * </code>
     *
     * @param mixed $pothmiscamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPothmiscamt($pothmiscamt = null, ?string $comparison = null)
    {
        if (is_array($pothmiscamt)) {
            $useMinMax = false;
            if (isset($pothmiscamt['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHMISCAMT, $pothmiscamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothmiscamt['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHMISCAMT, $pothmiscamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHMISCAMT, $pothmiscamt, $comparison);

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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(PoReceivingHeadTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);

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
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouse($warehouse, ?string $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByWarehouse() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Warehouse relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouse(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Warehouse');

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
            $this->addJoinObject($join, 'Warehouse');
        }

        return $this;
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Warehouse', '\WarehouseQuery');
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @param callable(\WarehouseQuery):\WarehouseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Warehouse table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('Warehouse', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Warehouse table for a NOT EXISTS query.
     *
     * @see useWarehouseExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('Warehouse', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Warehouse table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseQuery The inner query object of the IN statement
     */
    public function useInWarehouseQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('Warehouse', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Warehouse table for a NOT IN query.
     *
     * @see useWarehouseInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('Warehouse', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrderDetailReceiving->getPothnbr(), $comparison);

            return $this;
        } elseif ($purchaseOrderDetailReceiving instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderDetailReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailReceiving->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceiving() only accepts arguments of type \PurchaseOrderDetailReceiving or Collection');
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
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrderDetailLotReceiving->getPothnbr(), $comparison);

            return $this;
        } elseif ($purchaseOrderDetailLotReceiving instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderDetailLotReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailLotReceiving->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailLotReceiving() only accepts arguments of type \PurchaseOrderDetailLotReceiving or Collection');
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
     * @param ChildPoReceivingHead $poReceivingHead Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($poReceivingHead = null)
    {
        if ($poReceivingHead) {
            $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $poReceivingHead->getPothnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_tran_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PoReceivingHeadTableMap::clearInstancePool();
            PoReceivingHeadTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PoReceivingHeadTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PoReceivingHeadTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PoReceivingHeadTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
