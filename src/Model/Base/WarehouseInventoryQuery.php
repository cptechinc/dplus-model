<?php

namespace Base;

use \WarehouseInventory as ChildWarehouseInventory;
use \WarehouseInventoryQuery as ChildWarehouseInventoryQuery;
use \Exception;
use \PDO;
use Map\WarehouseInventoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_whse_mast` table.
 *
 * @method     ChildWarehouseInventoryQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildWarehouseInventoryQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWarehouseInventoryQuery orderByInwhbin($order = Criteria::ASC) Order by the InwhBin column
 * @method     ChildWarehouseInventoryQuery orderByInwhcycl($order = Criteria::ASC) Order by the InwhCycl column
 * @method     ChildWarehouseInventoryQuery orderByInwhcntdate($order = Criteria::ASC) Order by the InwhCntDate column
 * @method     ChildWarehouseInventoryQuery orderByInwhstat($order = Criteria::ASC) Order by the InwhStat column
 * @method     ChildWarehouseInventoryQuery orderByInwhabc($order = Criteria::ASC) Order by the InwhAbc column
 * @method     ChildWarehouseInventoryQuery orderByInwhordrpnt($order = Criteria::ASC) Order by the InwhOrdrPnt column
 * @method     ChildWarehouseInventoryQuery orderByInwhmax($order = Criteria::ASC) Order by the InwhMax column
 * @method     ChildWarehouseInventoryQuery orderByInwhordrqty($order = Criteria::ASC) Order by the InwhOrdrQty column
 * @method     ChildWarehouseInventoryQuery orderByInwhspecordr($order = Criteria::ASC) Order by the InwhSpecOrdr column
 * @method     ChildWarehouseInventoryQuery orderByInwhavail($order = Criteria::ASC) Order by the InwhAvail column
 * @method     ChildWarehouseInventoryQuery orderByInwh12motimessold($order = Criteria::ASC) Order by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventoryQuery orderByInwhfrtin($order = Criteria::ASC) Order by the InwhFrtIn column
 * @method     ChildWarehouseInventoryQuery orderByInwhmaxordrqty($order = Criteria::ASC) Order by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventoryQuery orderByInwhcrtedate($order = Criteria::ASC) Order by the InwhCrteDate column
 * @method     ChildWarehouseInventoryQuery orderByInwhshipbin($order = Criteria::ASC) Order by the InwhShipBin column
 * @method     ChildWarehouseInventoryQuery orderByInwhlastpurchponbr($order = Criteria::ASC) Order by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventoryQuery orderByInwhlastpurchinvnbr($order = Criteria::ASC) Order by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventoryQuery orderByInwhsupplywhse($order = Criteria::ASC) Order by the InwhSupplyWhse column
 * @method     ChildWarehouseInventoryQuery orderByInwhiisrchslct($order = Criteria::ASC) Order by the InwhIISrchSlct column
 * @method     ChildWarehouseInventoryQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarehouseInventoryQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarehouseInventoryQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWarehouseInventoryQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildWarehouseInventoryQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWarehouseInventoryQuery groupByInwhbin() Group by the InwhBin column
 * @method     ChildWarehouseInventoryQuery groupByInwhcycl() Group by the InwhCycl column
 * @method     ChildWarehouseInventoryQuery groupByInwhcntdate() Group by the InwhCntDate column
 * @method     ChildWarehouseInventoryQuery groupByInwhstat() Group by the InwhStat column
 * @method     ChildWarehouseInventoryQuery groupByInwhabc() Group by the InwhAbc column
 * @method     ChildWarehouseInventoryQuery groupByInwhordrpnt() Group by the InwhOrdrPnt column
 * @method     ChildWarehouseInventoryQuery groupByInwhmax() Group by the InwhMax column
 * @method     ChildWarehouseInventoryQuery groupByInwhordrqty() Group by the InwhOrdrQty column
 * @method     ChildWarehouseInventoryQuery groupByInwhspecordr() Group by the InwhSpecOrdr column
 * @method     ChildWarehouseInventoryQuery groupByInwhavail() Group by the InwhAvail column
 * @method     ChildWarehouseInventoryQuery groupByInwh12motimessold() Group by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventoryQuery groupByInwhfrtin() Group by the InwhFrtIn column
 * @method     ChildWarehouseInventoryQuery groupByInwhmaxordrqty() Group by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventoryQuery groupByInwhcrtedate() Group by the InwhCrteDate column
 * @method     ChildWarehouseInventoryQuery groupByInwhshipbin() Group by the InwhShipBin column
 * @method     ChildWarehouseInventoryQuery groupByInwhlastpurchponbr() Group by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventoryQuery groupByInwhlastpurchinvnbr() Group by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventoryQuery groupByInwhsupplywhse() Group by the InwhSupplyWhse column
 * @method     ChildWarehouseInventoryQuery groupByInwhiisrchslct() Group by the InwhIISrchSlct column
 * @method     ChildWarehouseInventoryQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarehouseInventoryQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarehouseInventoryQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWarehouseInventoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarehouseInventoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarehouseInventoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarehouseInventoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarehouseInventoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarehouseInventoryQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildWarehouseInventoryQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildWarehouseInventoryQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildWarehouseInventoryQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildWarehouseInventoryQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildWarehouseInventoryQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildWarehouseInventoryQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildWarehouseInventoryQuery leftJoinInvWhseItemBin($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseInventoryQuery rightJoinInvWhseItemBin($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseInventoryQuery innerJoinInvWhseItemBin($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseItemBin relation
 *
 * @method     ChildWarehouseInventoryQuery joinWithInvWhseItemBin($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseItemBin relation
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWithInvWhseItemBin() Adds a LEFT JOIN clause and with to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseInventoryQuery rightJoinWithInvWhseItemBin() Adds a RIGHT JOIN clause and with to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseInventoryQuery innerJoinWithInvWhseItemBin() Adds a INNER JOIN clause and with to the query using the InvWhseItemBin relation
 *
 * @method     \ItemMasterItemQuery|\WarehouseQuery|\InvWhseItemBinQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildWarehouseInventory|null findOne(?ConnectionInterface $con = null) Return the first ChildWarehouseInventory matching the query
 * @method     ChildWarehouseInventory findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildWarehouseInventory matching the query, or a new ChildWarehouseInventory object populated from the query conditions when no match is found
 *
 * @method     ChildWarehouseInventory|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildWarehouseInventory filtered by the InitItemNbr column
 * @method     ChildWarehouseInventory|null findOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouseInventory filtered by the IntbWhse column
 * @method     ChildWarehouseInventory|null findOneByInwhbin(string $InwhBin) Return the first ChildWarehouseInventory filtered by the InwhBin column
 * @method     ChildWarehouseInventory|null findOneByInwhcycl(string $InwhCycl) Return the first ChildWarehouseInventory filtered by the InwhCycl column
 * @method     ChildWarehouseInventory|null findOneByInwhcntdate(string $InwhCntDate) Return the first ChildWarehouseInventory filtered by the InwhCntDate column
 * @method     ChildWarehouseInventory|null findOneByInwhstat(string $InwhStat) Return the first ChildWarehouseInventory filtered by the InwhStat column
 * @method     ChildWarehouseInventory|null findOneByInwhabc(string $InwhAbc) Return the first ChildWarehouseInventory filtered by the InwhAbc column
 * @method     ChildWarehouseInventory|null findOneByInwhordrpnt(string $InwhOrdrPnt) Return the first ChildWarehouseInventory filtered by the InwhOrdrPnt column
 * @method     ChildWarehouseInventory|null findOneByInwhmax(string $InwhMax) Return the first ChildWarehouseInventory filtered by the InwhMax column
 * @method     ChildWarehouseInventory|null findOneByInwhordrqty(string $InwhOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhOrdrQty column
 * @method     ChildWarehouseInventory|null findOneByInwhspecordr(string $InwhSpecOrdr) Return the first ChildWarehouseInventory filtered by the InwhSpecOrdr column
 * @method     ChildWarehouseInventory|null findOneByInwhavail(string $InwhAvail) Return the first ChildWarehouseInventory filtered by the InwhAvail column
 * @method     ChildWarehouseInventory|null findOneByInwh12motimessold(int $Inwh12moTimesSold) Return the first ChildWarehouseInventory filtered by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventory|null findOneByInwhfrtin(string $InwhFrtIn) Return the first ChildWarehouseInventory filtered by the InwhFrtIn column
 * @method     ChildWarehouseInventory|null findOneByInwhmaxordrqty(string $InwhMaxOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventory|null findOneByInwhcrtedate(string $InwhCrteDate) Return the first ChildWarehouseInventory filtered by the InwhCrteDate column
 * @method     ChildWarehouseInventory|null findOneByInwhshipbin(string $InwhShipBin) Return the first ChildWarehouseInventory filtered by the InwhShipBin column
 * @method     ChildWarehouseInventory|null findOneByInwhlastpurchponbr(string $InwhLastPurchPoNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventory|null findOneByInwhlastpurchinvnbr(string $InwhLastPurchInvNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventory|null findOneByInwhsupplywhse(string $InwhSupplyWhse) Return the first ChildWarehouseInventory filtered by the InwhSupplyWhse column
 * @method     ChildWarehouseInventory|null findOneByInwhiisrchslct(string $InwhIISrchSlct) Return the first ChildWarehouseInventory filtered by the InwhIISrchSlct column
 * @method     ChildWarehouseInventory|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouseInventory filtered by the DateUpdtd column
 * @method     ChildWarehouseInventory|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouseInventory filtered by the TimeUpdtd column
 * @method     ChildWarehouseInventory|null findOneByDummy(string $dummy) Return the first ChildWarehouseInventory filtered by the dummy column
 *
 * @method     ChildWarehouseInventory requirePk($key, ?ConnectionInterface $con = null) Return the ChildWarehouseInventory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOne(?ConnectionInterface $con = null) Return the first ChildWarehouseInventory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouseInventory requireOneByInititemnbr(string $InitItemNbr) Return the first ChildWarehouseInventory filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouseInventory filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhbin(string $InwhBin) Return the first ChildWarehouseInventory filtered by the InwhBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhcycl(string $InwhCycl) Return the first ChildWarehouseInventory filtered by the InwhCycl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhcntdate(string $InwhCntDate) Return the first ChildWarehouseInventory filtered by the InwhCntDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhstat(string $InwhStat) Return the first ChildWarehouseInventory filtered by the InwhStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhabc(string $InwhAbc) Return the first ChildWarehouseInventory filtered by the InwhAbc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhordrpnt(string $InwhOrdrPnt) Return the first ChildWarehouseInventory filtered by the InwhOrdrPnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhmax(string $InwhMax) Return the first ChildWarehouseInventory filtered by the InwhMax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhordrqty(string $InwhOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhOrdrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhspecordr(string $InwhSpecOrdr) Return the first ChildWarehouseInventory filtered by the InwhSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhavail(string $InwhAvail) Return the first ChildWarehouseInventory filtered by the InwhAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwh12motimessold(int $Inwh12moTimesSold) Return the first ChildWarehouseInventory filtered by the Inwh12moTimesSold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhfrtin(string $InwhFrtIn) Return the first ChildWarehouseInventory filtered by the InwhFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhmaxordrqty(string $InwhMaxOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhMaxOrdrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhcrtedate(string $InwhCrteDate) Return the first ChildWarehouseInventory filtered by the InwhCrteDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhshipbin(string $InwhShipBin) Return the first ChildWarehouseInventory filtered by the InwhShipBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlastpurchponbr(string $InwhLastPurchPoNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlastpurchinvnbr(string $InwhLastPurchInvNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhsupplywhse(string $InwhSupplyWhse) Return the first ChildWarehouseInventory filtered by the InwhSupplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhiisrchslct(string $InwhIISrchSlct) Return the first ChildWarehouseInventory filtered by the InwhIISrchSlct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouseInventory filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouseInventory filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByDummy(string $dummy) Return the first ChildWarehouseInventory filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouseInventory[]|Collection find(?ConnectionInterface $con = null) Return ChildWarehouseInventory objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> find(?ConnectionInterface $con = null) Return ChildWarehouseInventory objects based on current ModelCriteria
 *
 * @method     ChildWarehouseInventory[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildWarehouseInventory objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildWarehouseInventory objects filtered by the InitItemNbr column
 * @method     ChildWarehouseInventory[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildWarehouseInventory objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByIntbwhse(string|array<string> $IntbWhse) Return ChildWarehouseInventory objects filtered by the IntbWhse column
 * @method     ChildWarehouseInventory[]|Collection findByInwhbin(string|array<string> $InwhBin) Return ChildWarehouseInventory objects filtered by the InwhBin column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhbin(string|array<string> $InwhBin) Return ChildWarehouseInventory objects filtered by the InwhBin column
 * @method     ChildWarehouseInventory[]|Collection findByInwhcycl(string|array<string> $InwhCycl) Return ChildWarehouseInventory objects filtered by the InwhCycl column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhcycl(string|array<string> $InwhCycl) Return ChildWarehouseInventory objects filtered by the InwhCycl column
 * @method     ChildWarehouseInventory[]|Collection findByInwhcntdate(string|array<string> $InwhCntDate) Return ChildWarehouseInventory objects filtered by the InwhCntDate column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhcntdate(string|array<string> $InwhCntDate) Return ChildWarehouseInventory objects filtered by the InwhCntDate column
 * @method     ChildWarehouseInventory[]|Collection findByInwhstat(string|array<string> $InwhStat) Return ChildWarehouseInventory objects filtered by the InwhStat column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhstat(string|array<string> $InwhStat) Return ChildWarehouseInventory objects filtered by the InwhStat column
 * @method     ChildWarehouseInventory[]|Collection findByInwhabc(string|array<string> $InwhAbc) Return ChildWarehouseInventory objects filtered by the InwhAbc column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhabc(string|array<string> $InwhAbc) Return ChildWarehouseInventory objects filtered by the InwhAbc column
 * @method     ChildWarehouseInventory[]|Collection findByInwhordrpnt(string|array<string> $InwhOrdrPnt) Return ChildWarehouseInventory objects filtered by the InwhOrdrPnt column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhordrpnt(string|array<string> $InwhOrdrPnt) Return ChildWarehouseInventory objects filtered by the InwhOrdrPnt column
 * @method     ChildWarehouseInventory[]|Collection findByInwhmax(string|array<string> $InwhMax) Return ChildWarehouseInventory objects filtered by the InwhMax column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhmax(string|array<string> $InwhMax) Return ChildWarehouseInventory objects filtered by the InwhMax column
 * @method     ChildWarehouseInventory[]|Collection findByInwhordrqty(string|array<string> $InwhOrdrQty) Return ChildWarehouseInventory objects filtered by the InwhOrdrQty column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhordrqty(string|array<string> $InwhOrdrQty) Return ChildWarehouseInventory objects filtered by the InwhOrdrQty column
 * @method     ChildWarehouseInventory[]|Collection findByInwhspecordr(string|array<string> $InwhSpecOrdr) Return ChildWarehouseInventory objects filtered by the InwhSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhspecordr(string|array<string> $InwhSpecOrdr) Return ChildWarehouseInventory objects filtered by the InwhSpecOrdr column
 * @method     ChildWarehouseInventory[]|Collection findByInwhavail(string|array<string> $InwhAvail) Return ChildWarehouseInventory objects filtered by the InwhAvail column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhavail(string|array<string> $InwhAvail) Return ChildWarehouseInventory objects filtered by the InwhAvail column
 * @method     ChildWarehouseInventory[]|Collection findByInwh12motimessold(int|array<int> $Inwh12moTimesSold) Return ChildWarehouseInventory objects filtered by the Inwh12moTimesSold column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwh12motimessold(int|array<int> $Inwh12moTimesSold) Return ChildWarehouseInventory objects filtered by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventory[]|Collection findByInwhfrtin(string|array<string> $InwhFrtIn) Return ChildWarehouseInventory objects filtered by the InwhFrtIn column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhfrtin(string|array<string> $InwhFrtIn) Return ChildWarehouseInventory objects filtered by the InwhFrtIn column
 * @method     ChildWarehouseInventory[]|Collection findByInwhmaxordrqty(string|array<string> $InwhMaxOrdrQty) Return ChildWarehouseInventory objects filtered by the InwhMaxOrdrQty column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhmaxordrqty(string|array<string> $InwhMaxOrdrQty) Return ChildWarehouseInventory objects filtered by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventory[]|Collection findByInwhcrtedate(string|array<string> $InwhCrteDate) Return ChildWarehouseInventory objects filtered by the InwhCrteDate column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhcrtedate(string|array<string> $InwhCrteDate) Return ChildWarehouseInventory objects filtered by the InwhCrteDate column
 * @method     ChildWarehouseInventory[]|Collection findByInwhshipbin(string|array<string> $InwhShipBin) Return ChildWarehouseInventory objects filtered by the InwhShipBin column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhshipbin(string|array<string> $InwhShipBin) Return ChildWarehouseInventory objects filtered by the InwhShipBin column
 * @method     ChildWarehouseInventory[]|Collection findByInwhlastpurchponbr(string|array<string> $InwhLastPurchPoNbr) Return ChildWarehouseInventory objects filtered by the InwhLastPurchPoNbr column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhlastpurchponbr(string|array<string> $InwhLastPurchPoNbr) Return ChildWarehouseInventory objects filtered by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventory[]|Collection findByInwhlastpurchinvnbr(string|array<string> $InwhLastPurchInvNbr) Return ChildWarehouseInventory objects filtered by the InwhLastPurchInvNbr column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhlastpurchinvnbr(string|array<string> $InwhLastPurchInvNbr) Return ChildWarehouseInventory objects filtered by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventory[]|Collection findByInwhsupplywhse(string|array<string> $InwhSupplyWhse) Return ChildWarehouseInventory objects filtered by the InwhSupplyWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhsupplywhse(string|array<string> $InwhSupplyWhse) Return ChildWarehouseInventory objects filtered by the InwhSupplyWhse column
 * @method     ChildWarehouseInventory[]|Collection findByInwhiisrchslct(string|array<string> $InwhIISrchSlct) Return ChildWarehouseInventory objects filtered by the InwhIISrchSlct column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByInwhiisrchslct(string|array<string> $InwhIISrchSlct) Return ChildWarehouseInventory objects filtered by the InwhIISrchSlct column
 * @method     ChildWarehouseInventory[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildWarehouseInventory objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildWarehouseInventory objects filtered by the DateUpdtd column
 * @method     ChildWarehouseInventory[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildWarehouseInventory objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildWarehouseInventory objects filtered by the TimeUpdtd column
 * @method     ChildWarehouseInventory[]|Collection findByDummy(string|array<string> $dummy) Return ChildWarehouseInventory objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildWarehouseInventory> findByDummy(string|array<string> $dummy) Return ChildWarehouseInventory objects filtered by the dummy column
 *
 * @method     ChildWarehouseInventory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildWarehouseInventory> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class WarehouseInventoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarehouseInventoryQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WarehouseInventory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarehouseInventoryQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarehouseInventoryQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildWarehouseInventoryQuery) {
            return $criteria;
        }
        $query = new ChildWarehouseInventoryQuery();
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
     * @param array[$InitItemNbr, $IntbWhse] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildWarehouseInventory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarehouseInventoryTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildWarehouseInventory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IntbWhse, InwhBin, InwhCycl, InwhCntDate, InwhStat, InwhAbc, InwhOrdrPnt, InwhMax, InwhOrdrQty, InwhSpecOrdr, InwhAvail, Inwh12moTimesSold, InwhFrtIn, InwhMaxOrdrQty, InwhCrteDate, InwhShipBin, InwhLastPurchPoNbr, InwhLastPurchInvNbr, InwhSupplyWhse, InwhIISrchSlct, DateUpdtd, TimeUpdtd, dummy FROM inv_whse_mast WHERE InitItemNbr = :p0 AND IntbWhse = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildWarehouseInventory $obj */
            $obj = new ChildWarehouseInventory();
            $obj->hydrate($row);
            WarehouseInventoryTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildWarehouseInventory|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(WarehouseInventoryTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(WarehouseInventoryTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

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

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

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

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhbin('fooValue');   // WHERE InwhBin = 'fooValue'
     * $query->filterByInwhbin('%fooValue%', Criteria::LIKE); // WHERE InwhBin LIKE '%fooValue%'
     * $query->filterByInwhbin(['foo', 'bar']); // WHERE InwhBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhbin($inwhbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHBIN, $inwhbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhCycl column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhcycl('fooValue');   // WHERE InwhCycl = 'fooValue'
     * $query->filterByInwhcycl('%fooValue%', Criteria::LIKE); // WHERE InwhCycl LIKE '%fooValue%'
     * $query->filterByInwhcycl(['foo', 'bar']); // WHERE InwhCycl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhcycl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhcycl($inwhcycl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhcycl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHCYCL, $inwhcycl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhCntDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhcntdate('fooValue');   // WHERE InwhCntDate = 'fooValue'
     * $query->filterByInwhcntdate('%fooValue%', Criteria::LIKE); // WHERE InwhCntDate LIKE '%fooValue%'
     * $query->filterByInwhcntdate(['foo', 'bar']); // WHERE InwhCntDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhcntdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhcntdate($inwhcntdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhcntdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHCNTDATE, $inwhcntdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhStat column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhstat('fooValue');   // WHERE InwhStat = 'fooValue'
     * $query->filterByInwhstat('%fooValue%', Criteria::LIKE); // WHERE InwhStat LIKE '%fooValue%'
     * $query->filterByInwhstat(['foo', 'bar']); // WHERE InwhStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhstat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhstat($inwhstat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhstat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSTAT, $inwhstat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhAbc column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhabc('fooValue');   // WHERE InwhAbc = 'fooValue'
     * $query->filterByInwhabc('%fooValue%', Criteria::LIKE); // WHERE InwhAbc LIKE '%fooValue%'
     * $query->filterByInwhabc(['foo', 'bar']); // WHERE InwhAbc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhabc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhabc($inwhabc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhabc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHABC, $inwhabc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhOrdrPnt column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhordrpnt(1234); // WHERE InwhOrdrPnt = 1234
     * $query->filterByInwhordrpnt(array(12, 34)); // WHERE InwhOrdrPnt IN (12, 34)
     * $query->filterByInwhordrpnt(array('min' => 12)); // WHERE InwhOrdrPnt > 12
     * </code>
     *
     * @param mixed $inwhordrpnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhordrpnt($inwhordrpnt = null, ?string $comparison = null)
    {
        if (is_array($inwhordrpnt)) {
            $useMinMax = false;
            if (isset($inwhordrpnt['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRPNT, $inwhordrpnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhordrpnt['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRPNT, $inwhordrpnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRPNT, $inwhordrpnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhMax column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhmax(1234); // WHERE InwhMax = 1234
     * $query->filterByInwhmax(array(12, 34)); // WHERE InwhMax IN (12, 34)
     * $query->filterByInwhmax(array('min' => 12)); // WHERE InwhMax > 12
     * </code>
     *
     * @param mixed $inwhmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhmax($inwhmax = null, ?string $comparison = null)
    {
        if (is_array($inwhmax)) {
            $useMinMax = false;
            if (isset($inwhmax['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAX, $inwhmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhmax['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAX, $inwhmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAX, $inwhmax, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhOrdrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhordrqty(1234); // WHERE InwhOrdrQty = 1234
     * $query->filterByInwhordrqty(array(12, 34)); // WHERE InwhOrdrQty IN (12, 34)
     * $query->filterByInwhordrqty(array('min' => 12)); // WHERE InwhOrdrQty > 12
     * </code>
     *
     * @param mixed $inwhordrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhordrqty($inwhordrqty = null, ?string $comparison = null)
    {
        if (is_array($inwhordrqty)) {
            $useMinMax = false;
            if (isset($inwhordrqty['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRQTY, $inwhordrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhordrqty['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRQTY, $inwhordrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRQTY, $inwhordrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhspecordr('fooValue');   // WHERE InwhSpecOrdr = 'fooValue'
     * $query->filterByInwhspecordr('%fooValue%', Criteria::LIKE); // WHERE InwhSpecOrdr LIKE '%fooValue%'
     * $query->filterByInwhspecordr(['foo', 'bar']); // WHERE InwhSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhspecordr($inwhspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSPECORDR, $inwhspecordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhavail(1234); // WHERE InwhAvail = 1234
     * $query->filterByInwhavail(array(12, 34)); // WHERE InwhAvail IN (12, 34)
     * $query->filterByInwhavail(array('min' => 12)); // WHERE InwhAvail > 12
     * </code>
     *
     * @param mixed $inwhavail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhavail($inwhavail = null, ?string $comparison = null)
    {
        if (is_array($inwhavail)) {
            $useMinMax = false;
            if (isset($inwhavail['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHAVAIL, $inwhavail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhavail['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHAVAIL, $inwhavail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHAVAIL, $inwhavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the Inwh12moTimesSold column
     *
     * Example usage:
     * <code>
     * $query->filterByInwh12motimessold(1234); // WHERE Inwh12moTimesSold = 1234
     * $query->filterByInwh12motimessold(array(12, 34)); // WHERE Inwh12moTimesSold IN (12, 34)
     * $query->filterByInwh12motimessold(array('min' => 12)); // WHERE Inwh12moTimesSold > 12
     * </code>
     *
     * @param mixed $inwh12motimessold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwh12motimessold($inwh12motimessold = null, ?string $comparison = null)
    {
        if (is_array($inwh12motimessold)) {
            $useMinMax = false;
            if (isset($inwh12motimessold['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $inwh12motimessold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwh12motimessold['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $inwh12motimessold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $inwh12motimessold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhfrtin(1234); // WHERE InwhFrtIn = 1234
     * $query->filterByInwhfrtin(array(12, 34)); // WHERE InwhFrtIn IN (12, 34)
     * $query->filterByInwhfrtin(array('min' => 12)); // WHERE InwhFrtIn > 12
     * </code>
     *
     * @param mixed $inwhfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhfrtin($inwhfrtin = null, ?string $comparison = null)
    {
        if (is_array($inwhfrtin)) {
            $useMinMax = false;
            if (isset($inwhfrtin['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHFRTIN, $inwhfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhfrtin['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHFRTIN, $inwhfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHFRTIN, $inwhfrtin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhMaxOrdrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhmaxordrqty(1234); // WHERE InwhMaxOrdrQty = 1234
     * $query->filterByInwhmaxordrqty(array(12, 34)); // WHERE InwhMaxOrdrQty IN (12, 34)
     * $query->filterByInwhmaxordrqty(array('min' => 12)); // WHERE InwhMaxOrdrQty > 12
     * </code>
     *
     * @param mixed $inwhmaxordrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhmaxordrqty($inwhmaxordrqty = null, ?string $comparison = null)
    {
        if (is_array($inwhmaxordrqty)) {
            $useMinMax = false;
            if (isset($inwhmaxordrqty['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $inwhmaxordrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhmaxordrqty['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $inwhmaxordrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $inwhmaxordrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhCrteDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhcrtedate('fooValue');   // WHERE InwhCrteDate = 'fooValue'
     * $query->filterByInwhcrtedate('%fooValue%', Criteria::LIKE); // WHERE InwhCrteDate LIKE '%fooValue%'
     * $query->filterByInwhcrtedate(['foo', 'bar']); // WHERE InwhCrteDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhcrtedate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhcrtedate($inwhcrtedate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhcrtedate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHCRTEDATE, $inwhcrtedate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhShipBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhshipbin('fooValue');   // WHERE InwhShipBin = 'fooValue'
     * $query->filterByInwhshipbin('%fooValue%', Criteria::LIKE); // WHERE InwhShipBin LIKE '%fooValue%'
     * $query->filterByInwhshipbin(['foo', 'bar']); // WHERE InwhShipBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhshipbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhshipbin($inwhshipbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhshipbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSHIPBIN, $inwhshipbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhLastPurchPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlastpurchponbr('fooValue');   // WHERE InwhLastPurchPoNbr = 'fooValue'
     * $query->filterByInwhlastpurchponbr('%fooValue%', Criteria::LIKE); // WHERE InwhLastPurchPoNbr LIKE '%fooValue%'
     * $query->filterByInwhlastpurchponbr(['foo', 'bar']); // WHERE InwhLastPurchPoNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhlastpurchponbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhlastpurchponbr($inwhlastpurchponbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhlastpurchponbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR, $inwhlastpurchponbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhLastPurchInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlastpurchinvnbr('fooValue');   // WHERE InwhLastPurchInvNbr = 'fooValue'
     * $query->filterByInwhlastpurchinvnbr('%fooValue%', Criteria::LIKE); // WHERE InwhLastPurchInvNbr LIKE '%fooValue%'
     * $query->filterByInwhlastpurchinvnbr(['foo', 'bar']); // WHERE InwhLastPurchInvNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhlastpurchinvnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhlastpurchinvnbr($inwhlastpurchinvnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhlastpurchinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLASTPURCHINVNBR, $inwhlastpurchinvnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhSupplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhsupplywhse('fooValue');   // WHERE InwhSupplyWhse = 'fooValue'
     * $query->filterByInwhsupplywhse('%fooValue%', Criteria::LIKE); // WHERE InwhSupplyWhse LIKE '%fooValue%'
     * $query->filterByInwhsupplywhse(['foo', 'bar']); // WHERE InwhSupplyWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhsupplywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhsupplywhse($inwhsupplywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhsupplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE, $inwhsupplywhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InwhIISrchSlct column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhiisrchslct('fooValue');   // WHERE InwhIISrchSlct = 'fooValue'
     * $query->filterByInwhiisrchslct('%fooValue%', Criteria::LIKE); // WHERE InwhIISrchSlct LIKE '%fooValue%'
     * $query->filterByInwhiisrchslct(['foo', 'bar']); // WHERE InwhIISrchSlct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inwhiisrchslct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInwhiisrchslct($inwhiisrchslct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhiisrchslct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHIISRCHSLCT, $inwhiisrchslct, $comparison);

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

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(WarehouseInventoryTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
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
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

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
     * Filter the query by a related \InvWhseItemBin object
     *
     * @param \InvWhseItemBin|ObjectCollection $invWhseItemBin the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvWhseItemBin($invWhseItemBin, ?string $comparison = null)
    {
        if ($invWhseItemBin instanceof \InvWhseItemBin) {
            $this
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $invWhseItemBin->getInititemnbr(), $comparison)
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $invWhseItemBin->getIntbwhse(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvWhseItemBin() only accepts arguments of type \InvWhseItemBin');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvWhseItemBin relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvWhseItemBin(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvWhseItemBin');

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
            $this->addJoinObject($join, 'InvWhseItemBin');
        }

        return $this;
    }

    /**
     * Use the InvWhseItemBin relation InvWhseItemBin object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvWhseItemBinQuery A secondary query class using the current class as primary query
     */
    public function useInvWhseItemBinQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvWhseItemBin($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvWhseItemBin', '\InvWhseItemBinQuery');
    }

    /**
     * Use the InvWhseItemBin relation InvWhseItemBin object
     *
     * @param callable(\InvWhseItemBinQuery):\InvWhseItemBinQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvWhseItemBinQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvWhseItemBinQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvWhseItemBin table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvWhseItemBinQuery The inner query object of the EXISTS statement
     */
    public function useInvWhseItemBinExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useExistsQuery('InvWhseItemBin', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvWhseItemBin table for a NOT EXISTS query.
     *
     * @see useInvWhseItemBinExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvWhseItemBinQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvWhseItemBinNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useExistsQuery('InvWhseItemBin', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvWhseItemBin table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvWhseItemBinQuery The inner query object of the IN statement
     */
    public function useInInvWhseItemBinQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useInQuery('InvWhseItemBin', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvWhseItemBin table for a NOT IN query.
     *
     * @see useInvWhseItemBinInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvWhseItemBinQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvWhseItemBinQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useInQuery('InvWhseItemBin', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildWarehouseInventory $warehouseInventory Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($warehouseInventory = null)
    {
        if ($warehouseInventory) {
            $this->addCond('pruneCond0', $this->getAliasedColName(WarehouseInventoryTableMap::COL_INITITEMNBR), $warehouseInventory->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(WarehouseInventoryTableMap::COL_INTBWHSE), $warehouseInventory->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_whse_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarehouseInventoryTableMap::clearInstancePool();
            WarehouseInventoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarehouseInventoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarehouseInventoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarehouseInventoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
