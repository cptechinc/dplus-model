<?php

namespace Base;

use \InvWhseLot as ChildInvWhseLot;
use \InvWhseLotQuery as ChildInvWhseLotQuery;
use \Exception;
use \PDO;
use Map\InvWhseLotTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_inv_lot` table.
 *
 * @method     ChildInvWhseLotQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvWhseLotQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildInvWhseLotQuery orderByInltlotser($order = Criteria::ASC) Order by the InltLotSer column
 * @method     ChildInvWhseLotQuery orderByInltbin($order = Criteria::ASC) Order by the InltBin column
 * @method     ChildInvWhseLotQuery orderByInltdate($order = Criteria::ASC) Order by the InltDate column
 * @method     ChildInvWhseLotQuery orderByInltdatewrit($order = Criteria::ASC) Order by the InltDateWrit column
 * @method     ChildInvWhseLotQuery orderByInltcost($order = Criteria::ASC) Order by the InltCost column
 * @method     ChildInvWhseLotQuery orderByInltonhand($order = Criteria::ASC) Order by the InltOnHand column
 * @method     ChildInvWhseLotQuery orderByInltresv($order = Criteria::ASC) Order by the InltResv column
 * @method     ChildInvWhseLotQuery orderByInltship($order = Criteria::ASC) Order by the InltShip column
 * @method     ChildInvWhseLotQuery orderByInltallo($order = Criteria::ASC) Order by the InltAllo column
 * @method     ChildInvWhseLotQuery orderByInltfaballo($order = Criteria::ASC) Order by the InltFabAllo column
 * @method     ChildInvWhseLotQuery orderByInltintran($order = Criteria::ASC) Order by the InltInTran column
 * @method     ChildInvWhseLotQuery orderByInltinship($order = Criteria::ASC) Order by the InltInShip column
 * @method     ChildInvWhseLotQuery orderByInltlotref($order = Criteria::ASC) Order by the InltLotRef column
 * @method     ChildInvWhseLotQuery orderByInltbatch($order = Criteria::ASC) Order by the InltBatch column
 * @method     ChildInvWhseLotQuery orderByInltlandcost($order = Criteria::ASC) Order by the InltLandCost column
 * @method     ChildInvWhseLotQuery orderByInltmpfunitcost($order = Criteria::ASC) Order by the InltMpfUnitCost column
 * @method     ChildInvWhseLotQuery orderByInlthmfunitcost($order = Criteria::ASC) Order by the InltHmfUnitCost column
 * @method     ChildInvWhseLotQuery orderByInltdsetunitcost($order = Criteria::ASC) Order by the InltDsetUnitCost column
 * @method     ChildInvWhseLotQuery orderByInltnumericfiller($order = Criteria::ASC) Order by the InltNumericFiller column
 * @method     ChildInvWhseLotQuery orderByInlttariffcost($order = Criteria::ASC) Order by the InltTariffCost column
 * @method     ChildInvWhseLotQuery orderByInltshopcost($order = Criteria::ASC) Order by the InltShopCost column
 * @method     ChildInvWhseLotQuery orderByInltisscodfsqty($order = Criteria::ASC) Order by the InltIsscoDfsQty column
 * @method     ChildInvWhseLotQuery orderByInltheadmark($order = Criteria::ASC) Order by the InltHeadMark column
 * @method     ChildInvWhseLotQuery orderByInltctry($order = Criteria::ASC) Order by the InltCtry column
 * @method     ChildInvWhseLotQuery orderByInltrvalorigcost($order = Criteria::ASC) Order by the InltRvalOrigCost column
 * @method     ChildInvWhseLotQuery orderByInltrvalpct($order = Criteria::ASC) Order by the InltRvalPct column
 * @method     ChildInvWhseLotQuery orderByInltunitwght($order = Criteria::ASC) Order by the InltUnitWght column
 * @method     ChildInvWhseLotQuery orderByInltdestwhse($order = Criteria::ASC) Order by the InltDestWhse column
 * @method     ChildInvWhseLotQuery orderByInltcntrqty($order = Criteria::ASC) Order by the InltCntrQty column
 * @method     ChildInvWhseLotQuery orderByInltqtyperroll($order = Criteria::ASC) Order by the InltQtyPerRoll column
 * @method     ChildInvWhseLotQuery orderByInlttarewght($order = Criteria::ASC) Order by the InltTareWght column
 * @method     ChildInvWhseLotQuery orderByInltqcreasoncd($order = Criteria::ASC) Order by the InltQcReasonCd column
 * @method     ChildInvWhseLotQuery orderByInltcert($order = Criteria::ASC) Order by the InltCert column
 * @method     ChildInvWhseLotQuery orderByInltcuredate($order = Criteria::ASC) Order by the InltCureDate column
 * @method     ChildInvWhseLotQuery orderByInltexpiredatecd($order = Criteria::ASC) Order by the InltExpireDateCd column
 * @method     ChildInvWhseLotQuery orderByInltexpiredate($order = Criteria::ASC) Order by the InltExpireDate column
 * @method     ChildInvWhseLotQuery orderByInltorigbin($order = Criteria::ASC) Order by the InltOrigBin column
 * @method     ChildInvWhseLotQuery orderByInltshopitem($order = Criteria::ASC) Order by the InltShopItem column
 * @method     ChildInvWhseLotQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvWhseLotQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvWhseLotQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvWhseLotQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvWhseLotQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildInvWhseLotQuery groupByInltlotser() Group by the InltLotSer column
 * @method     ChildInvWhseLotQuery groupByInltbin() Group by the InltBin column
 * @method     ChildInvWhseLotQuery groupByInltdate() Group by the InltDate column
 * @method     ChildInvWhseLotQuery groupByInltdatewrit() Group by the InltDateWrit column
 * @method     ChildInvWhseLotQuery groupByInltcost() Group by the InltCost column
 * @method     ChildInvWhseLotQuery groupByInltonhand() Group by the InltOnHand column
 * @method     ChildInvWhseLotQuery groupByInltresv() Group by the InltResv column
 * @method     ChildInvWhseLotQuery groupByInltship() Group by the InltShip column
 * @method     ChildInvWhseLotQuery groupByInltallo() Group by the InltAllo column
 * @method     ChildInvWhseLotQuery groupByInltfaballo() Group by the InltFabAllo column
 * @method     ChildInvWhseLotQuery groupByInltintran() Group by the InltInTran column
 * @method     ChildInvWhseLotQuery groupByInltinship() Group by the InltInShip column
 * @method     ChildInvWhseLotQuery groupByInltlotref() Group by the InltLotRef column
 * @method     ChildInvWhseLotQuery groupByInltbatch() Group by the InltBatch column
 * @method     ChildInvWhseLotQuery groupByInltlandcost() Group by the InltLandCost column
 * @method     ChildInvWhseLotQuery groupByInltmpfunitcost() Group by the InltMpfUnitCost column
 * @method     ChildInvWhseLotQuery groupByInlthmfunitcost() Group by the InltHmfUnitCost column
 * @method     ChildInvWhseLotQuery groupByInltdsetunitcost() Group by the InltDsetUnitCost column
 * @method     ChildInvWhseLotQuery groupByInltnumericfiller() Group by the InltNumericFiller column
 * @method     ChildInvWhseLotQuery groupByInlttariffcost() Group by the InltTariffCost column
 * @method     ChildInvWhseLotQuery groupByInltshopcost() Group by the InltShopCost column
 * @method     ChildInvWhseLotQuery groupByInltisscodfsqty() Group by the InltIsscoDfsQty column
 * @method     ChildInvWhseLotQuery groupByInltheadmark() Group by the InltHeadMark column
 * @method     ChildInvWhseLotQuery groupByInltctry() Group by the InltCtry column
 * @method     ChildInvWhseLotQuery groupByInltrvalorigcost() Group by the InltRvalOrigCost column
 * @method     ChildInvWhseLotQuery groupByInltrvalpct() Group by the InltRvalPct column
 * @method     ChildInvWhseLotQuery groupByInltunitwght() Group by the InltUnitWght column
 * @method     ChildInvWhseLotQuery groupByInltdestwhse() Group by the InltDestWhse column
 * @method     ChildInvWhseLotQuery groupByInltcntrqty() Group by the InltCntrQty column
 * @method     ChildInvWhseLotQuery groupByInltqtyperroll() Group by the InltQtyPerRoll column
 * @method     ChildInvWhseLotQuery groupByInlttarewght() Group by the InltTareWght column
 * @method     ChildInvWhseLotQuery groupByInltqcreasoncd() Group by the InltQcReasonCd column
 * @method     ChildInvWhseLotQuery groupByInltcert() Group by the InltCert column
 * @method     ChildInvWhseLotQuery groupByInltcuredate() Group by the InltCureDate column
 * @method     ChildInvWhseLotQuery groupByInltexpiredatecd() Group by the InltExpireDateCd column
 * @method     ChildInvWhseLotQuery groupByInltexpiredate() Group by the InltExpireDate column
 * @method     ChildInvWhseLotQuery groupByInltorigbin() Group by the InltOrigBin column
 * @method     ChildInvWhseLotQuery groupByInltshopitem() Group by the InltShopItem column
 * @method     ChildInvWhseLotQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvWhseLotQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvWhseLotQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvWhseLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvWhseLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvWhseLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvWhseLotQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvWhseLotQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvWhseLotQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvWhseLotQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvWhseLotQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvWhseLotQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvWhseLotQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvWhseLotQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvWhseLotQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvWhseLotQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvWhseLotQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildInvWhseLotQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildInvWhseLotQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildInvWhseLotQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildInvWhseLotQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildInvWhseLotQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildInvWhseLotQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildInvWhseLotQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvWhseLotQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvWhseLotQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildInvWhseLotQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvWhseLotQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvWhseLotQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvWhseLotQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     \ItemMasterItemQuery|\WarehouseQuery|\InvLotMasterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvWhseLot|null findOne(?ConnectionInterface $con = null) Return the first ChildInvWhseLot matching the query
 * @method     ChildInvWhseLot findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvWhseLot matching the query, or a new ChildInvWhseLot object populated from the query conditions when no match is found
 *
 * @method     ChildInvWhseLot|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvWhseLot filtered by the InitItemNbr column
 * @method     ChildInvWhseLot|null findOneByIntbwhse(string $IntbWhse) Return the first ChildInvWhseLot filtered by the IntbWhse column
 * @method     ChildInvWhseLot|null findOneByInltlotser(string $InltLotSer) Return the first ChildInvWhseLot filtered by the InltLotSer column
 * @method     ChildInvWhseLot|null findOneByInltbin(string $InltBin) Return the first ChildInvWhseLot filtered by the InltBin column
 * @method     ChildInvWhseLot|null findOneByInltdate(string $InltDate) Return the first ChildInvWhseLot filtered by the InltDate column
 * @method     ChildInvWhseLot|null findOneByInltdatewrit(string $InltDateWrit) Return the first ChildInvWhseLot filtered by the InltDateWrit column
 * @method     ChildInvWhseLot|null findOneByInltcost(string $InltCost) Return the first ChildInvWhseLot filtered by the InltCost column
 * @method     ChildInvWhseLot|null findOneByInltonhand(string $InltOnHand) Return the first ChildInvWhseLot filtered by the InltOnHand column
 * @method     ChildInvWhseLot|null findOneByInltresv(string $InltResv) Return the first ChildInvWhseLot filtered by the InltResv column
 * @method     ChildInvWhseLot|null findOneByInltship(string $InltShip) Return the first ChildInvWhseLot filtered by the InltShip column
 * @method     ChildInvWhseLot|null findOneByInltallo(string $InltAllo) Return the first ChildInvWhseLot filtered by the InltAllo column
 * @method     ChildInvWhseLot|null findOneByInltfaballo(string $InltFabAllo) Return the first ChildInvWhseLot filtered by the InltFabAllo column
 * @method     ChildInvWhseLot|null findOneByInltintran(string $InltInTran) Return the first ChildInvWhseLot filtered by the InltInTran column
 * @method     ChildInvWhseLot|null findOneByInltinship(string $InltInShip) Return the first ChildInvWhseLot filtered by the InltInShip column
 * @method     ChildInvWhseLot|null findOneByInltlotref(string $InltLotRef) Return the first ChildInvWhseLot filtered by the InltLotRef column
 * @method     ChildInvWhseLot|null findOneByInltbatch(string $InltBatch) Return the first ChildInvWhseLot filtered by the InltBatch column
 * @method     ChildInvWhseLot|null findOneByInltlandcost(string $InltLandCost) Return the first ChildInvWhseLot filtered by the InltLandCost column
 * @method     ChildInvWhseLot|null findOneByInltmpfunitcost(string $InltMpfUnitCost) Return the first ChildInvWhseLot filtered by the InltMpfUnitCost column
 * @method     ChildInvWhseLot|null findOneByInlthmfunitcost(string $InltHmfUnitCost) Return the first ChildInvWhseLot filtered by the InltHmfUnitCost column
 * @method     ChildInvWhseLot|null findOneByInltdsetunitcost(string $InltDsetUnitCost) Return the first ChildInvWhseLot filtered by the InltDsetUnitCost column
 * @method     ChildInvWhseLot|null findOneByInltnumericfiller(string $InltNumericFiller) Return the first ChildInvWhseLot filtered by the InltNumericFiller column
 * @method     ChildInvWhseLot|null findOneByInlttariffcost(string $InltTariffCost) Return the first ChildInvWhseLot filtered by the InltTariffCost column
 * @method     ChildInvWhseLot|null findOneByInltshopcost(string $InltShopCost) Return the first ChildInvWhseLot filtered by the InltShopCost column
 * @method     ChildInvWhseLot|null findOneByInltisscodfsqty(string $InltIsscoDfsQty) Return the first ChildInvWhseLot filtered by the InltIsscoDfsQty column
 * @method     ChildInvWhseLot|null findOneByInltheadmark(string $InltHeadMark) Return the first ChildInvWhseLot filtered by the InltHeadMark column
 * @method     ChildInvWhseLot|null findOneByInltctry(string $InltCtry) Return the first ChildInvWhseLot filtered by the InltCtry column
 * @method     ChildInvWhseLot|null findOneByInltrvalorigcost(string $InltRvalOrigCost) Return the first ChildInvWhseLot filtered by the InltRvalOrigCost column
 * @method     ChildInvWhseLot|null findOneByInltrvalpct(string $InltRvalPct) Return the first ChildInvWhseLot filtered by the InltRvalPct column
 * @method     ChildInvWhseLot|null findOneByInltunitwght(string $InltUnitWght) Return the first ChildInvWhseLot filtered by the InltUnitWght column
 * @method     ChildInvWhseLot|null findOneByInltdestwhse(string $InltDestWhse) Return the first ChildInvWhseLot filtered by the InltDestWhse column
 * @method     ChildInvWhseLot|null findOneByInltcntrqty(string $InltCntrQty) Return the first ChildInvWhseLot filtered by the InltCntrQty column
 * @method     ChildInvWhseLot|null findOneByInltqtyperroll(string $InltQtyPerRoll) Return the first ChildInvWhseLot filtered by the InltQtyPerRoll column
 * @method     ChildInvWhseLot|null findOneByInlttarewght(string $InltTareWght) Return the first ChildInvWhseLot filtered by the InltTareWght column
 * @method     ChildInvWhseLot|null findOneByInltqcreasoncd(string $InltQcReasonCd) Return the first ChildInvWhseLot filtered by the InltQcReasonCd column
 * @method     ChildInvWhseLot|null findOneByInltcert(string $InltCert) Return the first ChildInvWhseLot filtered by the InltCert column
 * @method     ChildInvWhseLot|null findOneByInltcuredate(string $InltCureDate) Return the first ChildInvWhseLot filtered by the InltCureDate column
 * @method     ChildInvWhseLot|null findOneByInltexpiredatecd(string $InltExpireDateCd) Return the first ChildInvWhseLot filtered by the InltExpireDateCd column
 * @method     ChildInvWhseLot|null findOneByInltexpiredate(string $InltExpireDate) Return the first ChildInvWhseLot filtered by the InltExpireDate column
 * @method     ChildInvWhseLot|null findOneByInltorigbin(string $InltOrigBin) Return the first ChildInvWhseLot filtered by the InltOrigBin column
 * @method     ChildInvWhseLot|null findOneByInltshopitem(string $InltShopItem) Return the first ChildInvWhseLot filtered by the InltShopItem column
 * @method     ChildInvWhseLot|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvWhseLot filtered by the DateUpdtd column
 * @method     ChildInvWhseLot|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvWhseLot filtered by the TimeUpdtd column
 * @method     ChildInvWhseLot|null findOneByDummy(string $dummy) Return the first ChildInvWhseLot filtered by the dummy column
 *
 * @method     ChildInvWhseLot requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvWhseLot by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOne(?ConnectionInterface $con = null) Return the first ChildInvWhseLot matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvWhseLot requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvWhseLot filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByIntbwhse(string $IntbWhse) Return the first ChildInvWhseLot filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltlotser(string $InltLotSer) Return the first ChildInvWhseLot filtered by the InltLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltbin(string $InltBin) Return the first ChildInvWhseLot filtered by the InltBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltdate(string $InltDate) Return the first ChildInvWhseLot filtered by the InltDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltdatewrit(string $InltDateWrit) Return the first ChildInvWhseLot filtered by the InltDateWrit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltcost(string $InltCost) Return the first ChildInvWhseLot filtered by the InltCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltonhand(string $InltOnHand) Return the first ChildInvWhseLot filtered by the InltOnHand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltresv(string $InltResv) Return the first ChildInvWhseLot filtered by the InltResv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltship(string $InltShip) Return the first ChildInvWhseLot filtered by the InltShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltallo(string $InltAllo) Return the first ChildInvWhseLot filtered by the InltAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltfaballo(string $InltFabAllo) Return the first ChildInvWhseLot filtered by the InltFabAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltintran(string $InltInTran) Return the first ChildInvWhseLot filtered by the InltInTran column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltinship(string $InltInShip) Return the first ChildInvWhseLot filtered by the InltInShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltlotref(string $InltLotRef) Return the first ChildInvWhseLot filtered by the InltLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltbatch(string $InltBatch) Return the first ChildInvWhseLot filtered by the InltBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltlandcost(string $InltLandCost) Return the first ChildInvWhseLot filtered by the InltLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltmpfunitcost(string $InltMpfUnitCost) Return the first ChildInvWhseLot filtered by the InltMpfUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInlthmfunitcost(string $InltHmfUnitCost) Return the first ChildInvWhseLot filtered by the InltHmfUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltdsetunitcost(string $InltDsetUnitCost) Return the first ChildInvWhseLot filtered by the InltDsetUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltnumericfiller(string $InltNumericFiller) Return the first ChildInvWhseLot filtered by the InltNumericFiller column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInlttariffcost(string $InltTariffCost) Return the first ChildInvWhseLot filtered by the InltTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltshopcost(string $InltShopCost) Return the first ChildInvWhseLot filtered by the InltShopCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltisscodfsqty(string $InltIsscoDfsQty) Return the first ChildInvWhseLot filtered by the InltIsscoDfsQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltheadmark(string $InltHeadMark) Return the first ChildInvWhseLot filtered by the InltHeadMark column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltctry(string $InltCtry) Return the first ChildInvWhseLot filtered by the InltCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltrvalorigcost(string $InltRvalOrigCost) Return the first ChildInvWhseLot filtered by the InltRvalOrigCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltrvalpct(string $InltRvalPct) Return the first ChildInvWhseLot filtered by the InltRvalPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltunitwght(string $InltUnitWght) Return the first ChildInvWhseLot filtered by the InltUnitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltdestwhse(string $InltDestWhse) Return the first ChildInvWhseLot filtered by the InltDestWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltcntrqty(string $InltCntrQty) Return the first ChildInvWhseLot filtered by the InltCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltqtyperroll(string $InltQtyPerRoll) Return the first ChildInvWhseLot filtered by the InltQtyPerRoll column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInlttarewght(string $InltTareWght) Return the first ChildInvWhseLot filtered by the InltTareWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltqcreasoncd(string $InltQcReasonCd) Return the first ChildInvWhseLot filtered by the InltQcReasonCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltcert(string $InltCert) Return the first ChildInvWhseLot filtered by the InltCert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltcuredate(string $InltCureDate) Return the first ChildInvWhseLot filtered by the InltCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltexpiredatecd(string $InltExpireDateCd) Return the first ChildInvWhseLot filtered by the InltExpireDateCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltexpiredate(string $InltExpireDate) Return the first ChildInvWhseLot filtered by the InltExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltorigbin(string $InltOrigBin) Return the first ChildInvWhseLot filtered by the InltOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByInltshopitem(string $InltShopItem) Return the first ChildInvWhseLot filtered by the InltShopItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvWhseLot filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvWhseLot filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseLot requireOneByDummy(string $dummy) Return the first ChildInvWhseLot filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvWhseLot[]|Collection find(?ConnectionInterface $con = null) Return ChildInvWhseLot objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> find(?ConnectionInterface $con = null) Return ChildInvWhseLot objects based on current ModelCriteria
 *
 * @method     ChildInvWhseLot[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvWhseLot objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvWhseLot objects filtered by the InitItemNbr column
 * @method     ChildInvWhseLot[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildInvWhseLot objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByIntbwhse(string|array<string> $IntbWhse) Return ChildInvWhseLot objects filtered by the IntbWhse column
 * @method     ChildInvWhseLot[]|Collection findByInltlotser(string|array<string> $InltLotSer) Return ChildInvWhseLot objects filtered by the InltLotSer column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltlotser(string|array<string> $InltLotSer) Return ChildInvWhseLot objects filtered by the InltLotSer column
 * @method     ChildInvWhseLot[]|Collection findByInltbin(string|array<string> $InltBin) Return ChildInvWhseLot objects filtered by the InltBin column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltbin(string|array<string> $InltBin) Return ChildInvWhseLot objects filtered by the InltBin column
 * @method     ChildInvWhseLot[]|Collection findByInltdate(string|array<string> $InltDate) Return ChildInvWhseLot objects filtered by the InltDate column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltdate(string|array<string> $InltDate) Return ChildInvWhseLot objects filtered by the InltDate column
 * @method     ChildInvWhseLot[]|Collection findByInltdatewrit(string|array<string> $InltDateWrit) Return ChildInvWhseLot objects filtered by the InltDateWrit column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltdatewrit(string|array<string> $InltDateWrit) Return ChildInvWhseLot objects filtered by the InltDateWrit column
 * @method     ChildInvWhseLot[]|Collection findByInltcost(string|array<string> $InltCost) Return ChildInvWhseLot objects filtered by the InltCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltcost(string|array<string> $InltCost) Return ChildInvWhseLot objects filtered by the InltCost column
 * @method     ChildInvWhseLot[]|Collection findByInltonhand(string|array<string> $InltOnHand) Return ChildInvWhseLot objects filtered by the InltOnHand column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltonhand(string|array<string> $InltOnHand) Return ChildInvWhseLot objects filtered by the InltOnHand column
 * @method     ChildInvWhseLot[]|Collection findByInltresv(string|array<string> $InltResv) Return ChildInvWhseLot objects filtered by the InltResv column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltresv(string|array<string> $InltResv) Return ChildInvWhseLot objects filtered by the InltResv column
 * @method     ChildInvWhseLot[]|Collection findByInltship(string|array<string> $InltShip) Return ChildInvWhseLot objects filtered by the InltShip column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltship(string|array<string> $InltShip) Return ChildInvWhseLot objects filtered by the InltShip column
 * @method     ChildInvWhseLot[]|Collection findByInltallo(string|array<string> $InltAllo) Return ChildInvWhseLot objects filtered by the InltAllo column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltallo(string|array<string> $InltAllo) Return ChildInvWhseLot objects filtered by the InltAllo column
 * @method     ChildInvWhseLot[]|Collection findByInltfaballo(string|array<string> $InltFabAllo) Return ChildInvWhseLot objects filtered by the InltFabAllo column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltfaballo(string|array<string> $InltFabAllo) Return ChildInvWhseLot objects filtered by the InltFabAllo column
 * @method     ChildInvWhseLot[]|Collection findByInltintran(string|array<string> $InltInTran) Return ChildInvWhseLot objects filtered by the InltInTran column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltintran(string|array<string> $InltInTran) Return ChildInvWhseLot objects filtered by the InltInTran column
 * @method     ChildInvWhseLot[]|Collection findByInltinship(string|array<string> $InltInShip) Return ChildInvWhseLot objects filtered by the InltInShip column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltinship(string|array<string> $InltInShip) Return ChildInvWhseLot objects filtered by the InltInShip column
 * @method     ChildInvWhseLot[]|Collection findByInltlotref(string|array<string> $InltLotRef) Return ChildInvWhseLot objects filtered by the InltLotRef column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltlotref(string|array<string> $InltLotRef) Return ChildInvWhseLot objects filtered by the InltLotRef column
 * @method     ChildInvWhseLot[]|Collection findByInltbatch(string|array<string> $InltBatch) Return ChildInvWhseLot objects filtered by the InltBatch column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltbatch(string|array<string> $InltBatch) Return ChildInvWhseLot objects filtered by the InltBatch column
 * @method     ChildInvWhseLot[]|Collection findByInltlandcost(string|array<string> $InltLandCost) Return ChildInvWhseLot objects filtered by the InltLandCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltlandcost(string|array<string> $InltLandCost) Return ChildInvWhseLot objects filtered by the InltLandCost column
 * @method     ChildInvWhseLot[]|Collection findByInltmpfunitcost(string|array<string> $InltMpfUnitCost) Return ChildInvWhseLot objects filtered by the InltMpfUnitCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltmpfunitcost(string|array<string> $InltMpfUnitCost) Return ChildInvWhseLot objects filtered by the InltMpfUnitCost column
 * @method     ChildInvWhseLot[]|Collection findByInlthmfunitcost(string|array<string> $InltHmfUnitCost) Return ChildInvWhseLot objects filtered by the InltHmfUnitCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInlthmfunitcost(string|array<string> $InltHmfUnitCost) Return ChildInvWhseLot objects filtered by the InltHmfUnitCost column
 * @method     ChildInvWhseLot[]|Collection findByInltdsetunitcost(string|array<string> $InltDsetUnitCost) Return ChildInvWhseLot objects filtered by the InltDsetUnitCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltdsetunitcost(string|array<string> $InltDsetUnitCost) Return ChildInvWhseLot objects filtered by the InltDsetUnitCost column
 * @method     ChildInvWhseLot[]|Collection findByInltnumericfiller(string|array<string> $InltNumericFiller) Return ChildInvWhseLot objects filtered by the InltNumericFiller column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltnumericfiller(string|array<string> $InltNumericFiller) Return ChildInvWhseLot objects filtered by the InltNumericFiller column
 * @method     ChildInvWhseLot[]|Collection findByInlttariffcost(string|array<string> $InltTariffCost) Return ChildInvWhseLot objects filtered by the InltTariffCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInlttariffcost(string|array<string> $InltTariffCost) Return ChildInvWhseLot objects filtered by the InltTariffCost column
 * @method     ChildInvWhseLot[]|Collection findByInltshopcost(string|array<string> $InltShopCost) Return ChildInvWhseLot objects filtered by the InltShopCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltshopcost(string|array<string> $InltShopCost) Return ChildInvWhseLot objects filtered by the InltShopCost column
 * @method     ChildInvWhseLot[]|Collection findByInltisscodfsqty(string|array<string> $InltIsscoDfsQty) Return ChildInvWhseLot objects filtered by the InltIsscoDfsQty column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltisscodfsqty(string|array<string> $InltIsscoDfsQty) Return ChildInvWhseLot objects filtered by the InltIsscoDfsQty column
 * @method     ChildInvWhseLot[]|Collection findByInltheadmark(string|array<string> $InltHeadMark) Return ChildInvWhseLot objects filtered by the InltHeadMark column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltheadmark(string|array<string> $InltHeadMark) Return ChildInvWhseLot objects filtered by the InltHeadMark column
 * @method     ChildInvWhseLot[]|Collection findByInltctry(string|array<string> $InltCtry) Return ChildInvWhseLot objects filtered by the InltCtry column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltctry(string|array<string> $InltCtry) Return ChildInvWhseLot objects filtered by the InltCtry column
 * @method     ChildInvWhseLot[]|Collection findByInltrvalorigcost(string|array<string> $InltRvalOrigCost) Return ChildInvWhseLot objects filtered by the InltRvalOrigCost column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltrvalorigcost(string|array<string> $InltRvalOrigCost) Return ChildInvWhseLot objects filtered by the InltRvalOrigCost column
 * @method     ChildInvWhseLot[]|Collection findByInltrvalpct(string|array<string> $InltRvalPct) Return ChildInvWhseLot objects filtered by the InltRvalPct column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltrvalpct(string|array<string> $InltRvalPct) Return ChildInvWhseLot objects filtered by the InltRvalPct column
 * @method     ChildInvWhseLot[]|Collection findByInltunitwght(string|array<string> $InltUnitWght) Return ChildInvWhseLot objects filtered by the InltUnitWght column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltunitwght(string|array<string> $InltUnitWght) Return ChildInvWhseLot objects filtered by the InltUnitWght column
 * @method     ChildInvWhseLot[]|Collection findByInltdestwhse(string|array<string> $InltDestWhse) Return ChildInvWhseLot objects filtered by the InltDestWhse column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltdestwhse(string|array<string> $InltDestWhse) Return ChildInvWhseLot objects filtered by the InltDestWhse column
 * @method     ChildInvWhseLot[]|Collection findByInltcntrqty(string|array<string> $InltCntrQty) Return ChildInvWhseLot objects filtered by the InltCntrQty column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltcntrqty(string|array<string> $InltCntrQty) Return ChildInvWhseLot objects filtered by the InltCntrQty column
 * @method     ChildInvWhseLot[]|Collection findByInltqtyperroll(string|array<string> $InltQtyPerRoll) Return ChildInvWhseLot objects filtered by the InltQtyPerRoll column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltqtyperroll(string|array<string> $InltQtyPerRoll) Return ChildInvWhseLot objects filtered by the InltQtyPerRoll column
 * @method     ChildInvWhseLot[]|Collection findByInlttarewght(string|array<string> $InltTareWght) Return ChildInvWhseLot objects filtered by the InltTareWght column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInlttarewght(string|array<string> $InltTareWght) Return ChildInvWhseLot objects filtered by the InltTareWght column
 * @method     ChildInvWhseLot[]|Collection findByInltqcreasoncd(string|array<string> $InltQcReasonCd) Return ChildInvWhseLot objects filtered by the InltQcReasonCd column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltqcreasoncd(string|array<string> $InltQcReasonCd) Return ChildInvWhseLot objects filtered by the InltQcReasonCd column
 * @method     ChildInvWhseLot[]|Collection findByInltcert(string|array<string> $InltCert) Return ChildInvWhseLot objects filtered by the InltCert column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltcert(string|array<string> $InltCert) Return ChildInvWhseLot objects filtered by the InltCert column
 * @method     ChildInvWhseLot[]|Collection findByInltcuredate(string|array<string> $InltCureDate) Return ChildInvWhseLot objects filtered by the InltCureDate column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltcuredate(string|array<string> $InltCureDate) Return ChildInvWhseLot objects filtered by the InltCureDate column
 * @method     ChildInvWhseLot[]|Collection findByInltexpiredatecd(string|array<string> $InltExpireDateCd) Return ChildInvWhseLot objects filtered by the InltExpireDateCd column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltexpiredatecd(string|array<string> $InltExpireDateCd) Return ChildInvWhseLot objects filtered by the InltExpireDateCd column
 * @method     ChildInvWhseLot[]|Collection findByInltexpiredate(string|array<string> $InltExpireDate) Return ChildInvWhseLot objects filtered by the InltExpireDate column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltexpiredate(string|array<string> $InltExpireDate) Return ChildInvWhseLot objects filtered by the InltExpireDate column
 * @method     ChildInvWhseLot[]|Collection findByInltorigbin(string|array<string> $InltOrigBin) Return ChildInvWhseLot objects filtered by the InltOrigBin column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltorigbin(string|array<string> $InltOrigBin) Return ChildInvWhseLot objects filtered by the InltOrigBin column
 * @method     ChildInvWhseLot[]|Collection findByInltshopitem(string|array<string> $InltShopItem) Return ChildInvWhseLot objects filtered by the InltShopItem column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByInltshopitem(string|array<string> $InltShopItem) Return ChildInvWhseLot objects filtered by the InltShopItem column
 * @method     ChildInvWhseLot[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvWhseLot objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvWhseLot objects filtered by the DateUpdtd column
 * @method     ChildInvWhseLot[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvWhseLot objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvWhseLot objects filtered by the TimeUpdtd column
 * @method     ChildInvWhseLot[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvWhseLot objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvWhseLot> findByDummy(string|array<string> $dummy) Return ChildInvWhseLot objects filtered by the dummy column
 *
 * @method     ChildInvWhseLot[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvWhseLot> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvWhseLotQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvWhseLotQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvWhseLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvWhseLotQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvWhseLotQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvWhseLotQuery) {
            return $criteria;
        }
        $query = new ChildInvWhseLotQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $IntbWhse, $InltLotSer, $InltBin] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvWhseLot|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvWhseLotTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildInvWhseLot A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IntbWhse, InltLotSer, InltBin, InltDate, InltDateWrit, InltCost, InltOnHand, InltResv, InltShip, InltAllo, InltFabAllo, InltInTran, InltInShip, InltLotRef, InltBatch, InltLandCost, InltMpfUnitCost, InltHmfUnitCost, InltDsetUnitCost, InltNumericFiller, InltTariffCost, InltShopCost, InltIsscoDfsQty, InltHeadMark, InltCtry, InltRvalOrigCost, InltRvalPct, InltUnitWght, InltDestWhse, InltCntrQty, InltQtyPerRoll, InltTareWght, InltQcReasonCd, InltCert, InltCureDate, InltExpireDateCd, InltExpireDate, InltOrigBin, InltShopItem, DateUpdtd, TimeUpdtd, dummy FROM inv_inv_lot WHERE InitItemNbr = :p0 AND IntbWhse = :p1 AND InltLotSer = :p2 AND InltBin = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvWhseLot $obj */
            $obj = new ChildInvWhseLot();
            $obj->hydrate($row);
            InvWhseLotTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildInvWhseLot|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(InvWhseLotTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvWhseLotTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTLOTSER, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTBIN, $key[3], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(InvWhseLotTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvWhseLotTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvWhseLotTableMap::COL_INLTLOTSER, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(InvWhseLotTableMap::COL_INLTBIN, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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

        $this->addUsingAlias(InvWhseLotTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

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

        $this->addUsingAlias(InvWhseLotTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlotser('fooValue');   // WHERE InltLotSer = 'fooValue'
     * $query->filterByInltlotser('%fooValue%', Criteria::LIKE); // WHERE InltLotSer LIKE '%fooValue%'
     * $query->filterByInltlotser(['foo', 'bar']); // WHERE InltLotSer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltlotser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltlotser($inltlotser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltlotser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTLOTSER, $inltlotser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInltbin('fooValue');   // WHERE InltBin = 'fooValue'
     * $query->filterByInltbin('%fooValue%', Criteria::LIKE); // WHERE InltBin LIKE '%fooValue%'
     * $query->filterByInltbin(['foo', 'bar']); // WHERE InltBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltbin($inltbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTBIN, $inltbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdate('fooValue');   // WHERE InltDate = 'fooValue'
     * $query->filterByInltdate('%fooValue%', Criteria::LIKE); // WHERE InltDate LIKE '%fooValue%'
     * $query->filterByInltdate(['foo', 'bar']); // WHERE InltDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltdate($inltdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTDATE, $inltdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltDateWrit column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdatewrit('fooValue');   // WHERE InltDateWrit = 'fooValue'
     * $query->filterByInltdatewrit('%fooValue%', Criteria::LIKE); // WHERE InltDateWrit LIKE '%fooValue%'
     * $query->filterByInltdatewrit(['foo', 'bar']); // WHERE InltDateWrit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltdatewrit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltdatewrit($inltdatewrit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdatewrit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTDATEWRIT, $inltdatewrit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcost(1234); // WHERE InltCost = 1234
     * $query->filterByInltcost(array(12, 34)); // WHERE InltCost IN (12, 34)
     * $query->filterByInltcost(array('min' => 12)); // WHERE InltCost > 12
     * </code>
     *
     * @param mixed $inltcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltcost($inltcost = null, ?string $comparison = null)
    {
        if (is_array($inltcost)) {
            $useMinMax = false;
            if (isset($inltcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCOST, $inltcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCOST, $inltcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCOST, $inltcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltOnHand column
     *
     * Example usage:
     * <code>
     * $query->filterByInltonhand(1234); // WHERE InltOnHand = 1234
     * $query->filterByInltonhand(array(12, 34)); // WHERE InltOnHand IN (12, 34)
     * $query->filterByInltonhand(array('min' => 12)); // WHERE InltOnHand > 12
     * </code>
     *
     * @param mixed $inltonhand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltonhand($inltonhand = null, ?string $comparison = null)
    {
        if (is_array($inltonhand)) {
            $useMinMax = false;
            if (isset($inltonhand['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTONHAND, $inltonhand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltonhand['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTONHAND, $inltonhand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTONHAND, $inltonhand, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltResv column
     *
     * Example usage:
     * <code>
     * $query->filterByInltresv(1234); // WHERE InltResv = 1234
     * $query->filterByInltresv(array(12, 34)); // WHERE InltResv IN (12, 34)
     * $query->filterByInltresv(array('min' => 12)); // WHERE InltResv > 12
     * </code>
     *
     * @param mixed $inltresv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltresv($inltresv = null, ?string $comparison = null)
    {
        if (is_array($inltresv)) {
            $useMinMax = false;
            if (isset($inltresv['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRESV, $inltresv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltresv['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRESV, $inltresv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRESV, $inltresv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInltship(1234); // WHERE InltShip = 1234
     * $query->filterByInltship(array(12, 34)); // WHERE InltShip IN (12, 34)
     * $query->filterByInltship(array('min' => 12)); // WHERE InltShip > 12
     * </code>
     *
     * @param mixed $inltship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltship($inltship = null, ?string $comparison = null)
    {
        if (is_array($inltship)) {
            $useMinMax = false;
            if (isset($inltship['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHIP, $inltship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltship['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHIP, $inltship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHIP, $inltship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltAllo column
     *
     * Example usage:
     * <code>
     * $query->filterByInltallo(1234); // WHERE InltAllo = 1234
     * $query->filterByInltallo(array(12, 34)); // WHERE InltAllo IN (12, 34)
     * $query->filterByInltallo(array('min' => 12)); // WHERE InltAllo > 12
     * </code>
     *
     * @param mixed $inltallo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltallo($inltallo = null, ?string $comparison = null)
    {
        if (is_array($inltallo)) {
            $useMinMax = false;
            if (isset($inltallo['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTALLO, $inltallo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltallo['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTALLO, $inltallo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTALLO, $inltallo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltFabAllo column
     *
     * Example usage:
     * <code>
     * $query->filterByInltfaballo(1234); // WHERE InltFabAllo = 1234
     * $query->filterByInltfaballo(array(12, 34)); // WHERE InltFabAllo IN (12, 34)
     * $query->filterByInltfaballo(array('min' => 12)); // WHERE InltFabAllo > 12
     * </code>
     *
     * @param mixed $inltfaballo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltfaballo($inltfaballo = null, ?string $comparison = null)
    {
        if (is_array($inltfaballo)) {
            $useMinMax = false;
            if (isset($inltfaballo['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTFABALLO, $inltfaballo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltfaballo['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTFABALLO, $inltfaballo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTFABALLO, $inltfaballo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltInTran column
     *
     * Example usage:
     * <code>
     * $query->filterByInltintran(1234); // WHERE InltInTran = 1234
     * $query->filterByInltintran(array(12, 34)); // WHERE InltInTran IN (12, 34)
     * $query->filterByInltintran(array('min' => 12)); // WHERE InltInTran > 12
     * </code>
     *
     * @param mixed $inltintran The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltintran($inltintran = null, ?string $comparison = null)
    {
        if (is_array($inltintran)) {
            $useMinMax = false;
            if (isset($inltintran['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTINTRAN, $inltintran['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltintran['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTINTRAN, $inltintran['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTINTRAN, $inltintran, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltInShip column
     *
     * Example usage:
     * <code>
     * $query->filterByInltinship(1234); // WHERE InltInShip = 1234
     * $query->filterByInltinship(array(12, 34)); // WHERE InltInShip IN (12, 34)
     * $query->filterByInltinship(array('min' => 12)); // WHERE InltInShip > 12
     * </code>
     *
     * @param mixed $inltinship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltinship($inltinship = null, ?string $comparison = null)
    {
        if (is_array($inltinship)) {
            $useMinMax = false;
            if (isset($inltinship['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTINSHIP, $inltinship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltinship['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTINSHIP, $inltinship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTINSHIP, $inltinship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlotref('fooValue');   // WHERE InltLotRef = 'fooValue'
     * $query->filterByInltlotref('%fooValue%', Criteria::LIKE); // WHERE InltLotRef LIKE '%fooValue%'
     * $query->filterByInltlotref(['foo', 'bar']); // WHERE InltLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltlotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltlotref($inltlotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltlotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTLOTREF, $inltlotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByInltbatch('fooValue');   // WHERE InltBatch = 'fooValue'
     * $query->filterByInltbatch('%fooValue%', Criteria::LIKE); // WHERE InltBatch LIKE '%fooValue%'
     * $query->filterByInltbatch(['foo', 'bar']); // WHERE InltBatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltbatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltbatch($inltbatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltbatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTBATCH, $inltbatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost(1234); // WHERE InltLandCost = 1234
     * $query->filterByInltlandcost(array(12, 34)); // WHERE InltLandCost IN (12, 34)
     * $query->filterByInltlandcost(array('min' => 12)); // WHERE InltLandCost > 12
     * </code>
     *
     * @param mixed $inltlandcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltlandcost($inltlandcost = null, ?string $comparison = null)
    {
        if (is_array($inltlandcost)) {
            $useMinMax = false;
            if (isset($inltlandcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTLANDCOST, $inltlandcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTLANDCOST, $inltlandcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTLANDCOST, $inltlandcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltMpfUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltmpfunitcost(1234); // WHERE InltMpfUnitCost = 1234
     * $query->filterByInltmpfunitcost(array(12, 34)); // WHERE InltMpfUnitCost IN (12, 34)
     * $query->filterByInltmpfunitcost(array('min' => 12)); // WHERE InltMpfUnitCost > 12
     * </code>
     *
     * @param mixed $inltmpfunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltmpfunitcost($inltmpfunitcost = null, ?string $comparison = null)
    {
        if (is_array($inltmpfunitcost)) {
            $useMinMax = false;
            if (isset($inltmpfunitcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTMPFUNITCOST, $inltmpfunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltmpfunitcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTMPFUNITCOST, $inltmpfunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTMPFUNITCOST, $inltmpfunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltHmfUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInlthmfunitcost(1234); // WHERE InltHmfUnitCost = 1234
     * $query->filterByInlthmfunitcost(array(12, 34)); // WHERE InltHmfUnitCost IN (12, 34)
     * $query->filterByInlthmfunitcost(array('min' => 12)); // WHERE InltHmfUnitCost > 12
     * </code>
     *
     * @param mixed $inlthmfunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInlthmfunitcost($inlthmfunitcost = null, ?string $comparison = null)
    {
        if (is_array($inlthmfunitcost)) {
            $useMinMax = false;
            if (isset($inlthmfunitcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTHMFUNITCOST, $inlthmfunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inlthmfunitcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTHMFUNITCOST, $inlthmfunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTHMFUNITCOST, $inlthmfunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltDsetUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdsetunitcost(1234); // WHERE InltDsetUnitCost = 1234
     * $query->filterByInltdsetunitcost(array(12, 34)); // WHERE InltDsetUnitCost IN (12, 34)
     * $query->filterByInltdsetunitcost(array('min' => 12)); // WHERE InltDsetUnitCost > 12
     * </code>
     *
     * @param mixed $inltdsetunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltdsetunitcost($inltdsetunitcost = null, ?string $comparison = null)
    {
        if (is_array($inltdsetunitcost)) {
            $useMinMax = false;
            if (isset($inltdsetunitcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTDSETUNITCOST, $inltdsetunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltdsetunitcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTDSETUNITCOST, $inltdsetunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTDSETUNITCOST, $inltdsetunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltNumericFiller column
     *
     * Example usage:
     * <code>
     * $query->filterByInltnumericfiller(1234); // WHERE InltNumericFiller = 1234
     * $query->filterByInltnumericfiller(array(12, 34)); // WHERE InltNumericFiller IN (12, 34)
     * $query->filterByInltnumericfiller(array('min' => 12)); // WHERE InltNumericFiller > 12
     * </code>
     *
     * @param mixed $inltnumericfiller The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltnumericfiller($inltnumericfiller = null, ?string $comparison = null)
    {
        if (is_array($inltnumericfiller)) {
            $useMinMax = false;
            if (isset($inltnumericfiller['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTNUMERICFILLER, $inltnumericfiller['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltnumericfiller['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTNUMERICFILLER, $inltnumericfiller['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTNUMERICFILLER, $inltnumericfiller, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltTariffCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInlttariffcost(1234); // WHERE InltTariffCost = 1234
     * $query->filterByInlttariffcost(array(12, 34)); // WHERE InltTariffCost IN (12, 34)
     * $query->filterByInlttariffcost(array('min' => 12)); // WHERE InltTariffCost > 12
     * </code>
     *
     * @param mixed $inlttariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInlttariffcost($inlttariffcost = null, ?string $comparison = null)
    {
        if (is_array($inlttariffcost)) {
            $useMinMax = false;
            if (isset($inlttariffcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTTARIFFCOST, $inlttariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inlttariffcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTTARIFFCOST, $inlttariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTTARIFFCOST, $inlttariffcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltShopCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltshopcost(1234); // WHERE InltShopCost = 1234
     * $query->filterByInltshopcost(array(12, 34)); // WHERE InltShopCost IN (12, 34)
     * $query->filterByInltshopcost(array('min' => 12)); // WHERE InltShopCost > 12
     * </code>
     *
     * @param mixed $inltshopcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltshopcost($inltshopcost = null, ?string $comparison = null)
    {
        if (is_array($inltshopcost)) {
            $useMinMax = false;
            if (isset($inltshopcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHOPCOST, $inltshopcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltshopcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHOPCOST, $inltshopcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHOPCOST, $inltshopcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltIsscoDfsQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInltisscodfsqty(1234); // WHERE InltIsscoDfsQty = 1234
     * $query->filterByInltisscodfsqty(array(12, 34)); // WHERE InltIsscoDfsQty IN (12, 34)
     * $query->filterByInltisscodfsqty(array('min' => 12)); // WHERE InltIsscoDfsQty > 12
     * </code>
     *
     * @param mixed $inltisscodfsqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltisscodfsqty($inltisscodfsqty = null, ?string $comparison = null)
    {
        if (is_array($inltisscodfsqty)) {
            $useMinMax = false;
            if (isset($inltisscodfsqty['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTISSCODFSQTY, $inltisscodfsqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltisscodfsqty['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTISSCODFSQTY, $inltisscodfsqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTISSCODFSQTY, $inltisscodfsqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltHeadMark column
     *
     * Example usage:
     * <code>
     * $query->filterByInltheadmark('fooValue');   // WHERE InltHeadMark = 'fooValue'
     * $query->filterByInltheadmark('%fooValue%', Criteria::LIKE); // WHERE InltHeadMark LIKE '%fooValue%'
     * $query->filterByInltheadmark(['foo', 'bar']); // WHERE InltHeadMark IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltheadmark The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltheadmark($inltheadmark = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltheadmark)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTHEADMARK, $inltheadmark, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByInltctry('fooValue');   // WHERE InltCtry = 'fooValue'
     * $query->filterByInltctry('%fooValue%', Criteria::LIKE); // WHERE InltCtry LIKE '%fooValue%'
     * $query->filterByInltctry(['foo', 'bar']); // WHERE InltCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltctry($inltctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCTRY, $inltctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltRvalOrigCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInltrvalorigcost(1234); // WHERE InltRvalOrigCost = 1234
     * $query->filterByInltrvalorigcost(array(12, 34)); // WHERE InltRvalOrigCost IN (12, 34)
     * $query->filterByInltrvalorigcost(array('min' => 12)); // WHERE InltRvalOrigCost > 12
     * </code>
     *
     * @param mixed $inltrvalorigcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltrvalorigcost($inltrvalorigcost = null, ?string $comparison = null)
    {
        if (is_array($inltrvalorigcost)) {
            $useMinMax = false;
            if (isset($inltrvalorigcost['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltrvalorigcost['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltRvalPct column
     *
     * Example usage:
     * <code>
     * $query->filterByInltrvalpct(1234); // WHERE InltRvalPct = 1234
     * $query->filterByInltrvalpct(array(12, 34)); // WHERE InltRvalPct IN (12, 34)
     * $query->filterByInltrvalpct(array('min' => 12)); // WHERE InltRvalPct > 12
     * </code>
     *
     * @param mixed $inltrvalpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltrvalpct($inltrvalpct = null, ?string $comparison = null)
    {
        if (is_array($inltrvalpct)) {
            $useMinMax = false;
            if (isset($inltrvalpct['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRVALPCT, $inltrvalpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltrvalpct['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRVALPCT, $inltrvalpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTRVALPCT, $inltrvalpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltUnitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByInltunitwght(1234); // WHERE InltUnitWght = 1234
     * $query->filterByInltunitwght(array(12, 34)); // WHERE InltUnitWght IN (12, 34)
     * $query->filterByInltunitwght(array('min' => 12)); // WHERE InltUnitWght > 12
     * </code>
     *
     * @param mixed $inltunitwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltunitwght($inltunitwght = null, ?string $comparison = null)
    {
        if (is_array($inltunitwght)) {
            $useMinMax = false;
            if (isset($inltunitwght['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTUNITWGHT, $inltunitwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltunitwght['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTUNITWGHT, $inltunitwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTUNITWGHT, $inltunitwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltDestWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdestwhse('fooValue');   // WHERE InltDestWhse = 'fooValue'
     * $query->filterByInltdestwhse('%fooValue%', Criteria::LIKE); // WHERE InltDestWhse LIKE '%fooValue%'
     * $query->filterByInltdestwhse(['foo', 'bar']); // WHERE InltDestWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltdestwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltdestwhse($inltdestwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdestwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTDESTWHSE, $inltdestwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcntrqty(1234); // WHERE InltCntrQty = 1234
     * $query->filterByInltcntrqty(array(12, 34)); // WHERE InltCntrQty IN (12, 34)
     * $query->filterByInltcntrqty(array('min' => 12)); // WHERE InltCntrQty > 12
     * </code>
     *
     * @param mixed $inltcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltcntrqty($inltcntrqty = null, ?string $comparison = null)
    {
        if (is_array($inltcntrqty)) {
            $useMinMax = false;
            if (isset($inltcntrqty['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCNTRQTY, $inltcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltcntrqty['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCNTRQTY, $inltcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCNTRQTY, $inltcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltQtyPerRoll column
     *
     * Example usage:
     * <code>
     * $query->filterByInltqtyperroll(1234); // WHERE InltQtyPerRoll = 1234
     * $query->filterByInltqtyperroll(array(12, 34)); // WHERE InltQtyPerRoll IN (12, 34)
     * $query->filterByInltqtyperroll(array('min' => 12)); // WHERE InltQtyPerRoll > 12
     * </code>
     *
     * @param mixed $inltqtyperroll The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltqtyperroll($inltqtyperroll = null, ?string $comparison = null)
    {
        if (is_array($inltqtyperroll)) {
            $useMinMax = false;
            if (isset($inltqtyperroll['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTQTYPERROLL, $inltqtyperroll['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltqtyperroll['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTQTYPERROLL, $inltqtyperroll['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTQTYPERROLL, $inltqtyperroll, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltTareWght column
     *
     * Example usage:
     * <code>
     * $query->filterByInlttarewght(1234); // WHERE InltTareWght = 1234
     * $query->filterByInlttarewght(array(12, 34)); // WHERE InltTareWght IN (12, 34)
     * $query->filterByInlttarewght(array('min' => 12)); // WHERE InltTareWght > 12
     * </code>
     *
     * @param mixed $inlttarewght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInlttarewght($inlttarewght = null, ?string $comparison = null)
    {
        if (is_array($inlttarewght)) {
            $useMinMax = false;
            if (isset($inlttarewght['min'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTTAREWGHT, $inlttarewght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inlttarewght['max'])) {
                $this->addUsingAlias(InvWhseLotTableMap::COL_INLTTAREWGHT, $inlttarewght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTTAREWGHT, $inlttarewght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltQcReasonCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInltqcreasoncd('fooValue');   // WHERE InltQcReasonCd = 'fooValue'
     * $query->filterByInltqcreasoncd('%fooValue%', Criteria::LIKE); // WHERE InltQcReasonCd LIKE '%fooValue%'
     * $query->filterByInltqcreasoncd(['foo', 'bar']); // WHERE InltQcReasonCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltqcreasoncd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltqcreasoncd($inltqcreasoncd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltqcreasoncd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTQCREASONCD, $inltqcreasoncd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltCert column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcert('fooValue');   // WHERE InltCert = 'fooValue'
     * $query->filterByInltcert('%fooValue%', Criteria::LIKE); // WHERE InltCert LIKE '%fooValue%'
     * $query->filterByInltcert(['foo', 'bar']); // WHERE InltCert IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltcert The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltcert($inltcert = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltcert)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCERT, $inltcert, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcuredate('fooValue');   // WHERE InltCureDate = 'fooValue'
     * $query->filterByInltcuredate('%fooValue%', Criteria::LIKE); // WHERE InltCureDate LIKE '%fooValue%'
     * $query->filterByInltcuredate(['foo', 'bar']); // WHERE InltCureDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltcuredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltcuredate($inltcuredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTCUREDATE, $inltcuredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltExpireDateCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInltexpiredatecd('fooValue');   // WHERE InltExpireDateCd = 'fooValue'
     * $query->filterByInltexpiredatecd('%fooValue%', Criteria::LIKE); // WHERE InltExpireDateCd LIKE '%fooValue%'
     * $query->filterByInltexpiredatecd(['foo', 'bar']); // WHERE InltExpireDateCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltexpiredatecd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltexpiredatecd($inltexpiredatecd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltexpiredatecd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTEXPIREDATECD, $inltexpiredatecd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltexpiredate('fooValue');   // WHERE InltExpireDate = 'fooValue'
     * $query->filterByInltexpiredate('%fooValue%', Criteria::LIKE); // WHERE InltExpireDate LIKE '%fooValue%'
     * $query->filterByInltexpiredate(['foo', 'bar']); // WHERE InltExpireDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltexpiredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltexpiredate($inltexpiredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTEXPIREDATE, $inltexpiredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInltorigbin('fooValue');   // WHERE InltOrigBin = 'fooValue'
     * $query->filterByInltorigbin('%fooValue%', Criteria::LIKE); // WHERE InltOrigBin LIKE '%fooValue%'
     * $query->filterByInltorigbin(['foo', 'bar']); // WHERE InltOrigBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltorigbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltorigbin($inltorigbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTORIGBIN, $inltorigbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InltShopItem column
     *
     * Example usage:
     * <code>
     * $query->filterByInltshopitem('fooValue');   // WHERE InltShopItem = 'fooValue'
     * $query->filterByInltshopitem('%fooValue%', Criteria::LIKE); // WHERE InltShopItem LIKE '%fooValue%'
     * $query->filterByInltshopitem(['foo', 'bar']); // WHERE InltShopItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inltshopitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInltshopitem($inltshopitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltshopitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseLotTableMap::COL_INLTSHOPITEM, $inltshopitem, $comparison);

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

        $this->addUsingAlias(InvWhseLotTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvWhseLotTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvWhseLotTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(InvWhseLotTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvWhseLotTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
                ->addUsingAlias(InvWhseLotTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvWhseLotTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

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
     * Filter the query by a related \InvLotMaster object
     *
     * @param \InvLotMaster $invLotMaster The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, ?string $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            return $this
                ->addUsingAlias(InvWhseLotTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvWhseLotTableMap::COL_INLTLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
        } else {
            throw new PropelException('filterByInvLotMaster() only accepts arguments of type \InvLotMaster');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotMaster relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotMaster(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotMaster');

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
            $this->addJoinObject($join, 'InvLotMaster');
        }

        return $this;
    }

    /**
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvLotMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotMaster', '\InvLotMasterQuery');
    }

    /**
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @param callable(\InvLotMasterQuery):\InvLotMasterQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotMasterQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotMasterQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotMaster table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotMasterQuery The inner query object of the EXISTS statement
     */
    public function useInvLotMasterExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useExistsQuery('InvLotMaster', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for a NOT EXISTS query.
     *
     * @see useInvLotMasterExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotMasterQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotMasterNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useExistsQuery('InvLotMaster', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotMasterQuery The inner query object of the IN statement
     */
    public function useInInvLotMasterQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useInQuery('InvLotMaster', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for a NOT IN query.
     *
     * @see useInvLotMasterInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotMasterQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotMasterQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useInQuery('InvLotMaster', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvWhseLot $invWhseLot Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invWhseLot = null)
    {
        if ($invWhseLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvWhseLotTableMap::COL_INITITEMNBR), $invWhseLot->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvWhseLotTableMap::COL_INTBWHSE), $invWhseLot->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvWhseLotTableMap::COL_INLTLOTSER), $invWhseLot->getInltlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(InvWhseLotTableMap::COL_INLTBIN), $invWhseLot->getInltbin(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_inv_lot table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvWhseLotTableMap::clearInstancePool();
            InvWhseLotTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseLotTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvWhseLotTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvWhseLotTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvWhseLotTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
