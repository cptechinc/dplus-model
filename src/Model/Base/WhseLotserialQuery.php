<?php

namespace Base;

use \WhseLotserial as ChildWhseLotserial;
use \WhseLotserialQuery as ChildWhseLotserialQuery;
use \Exception;
use \PDO;
use Map\WhseLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_inv_lot' table.
 *
 *
 *
 * @method     ChildWhseLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildWhseLotserialQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWhseLotserialQuery orderByInltlotser($order = Criteria::ASC) Order by the InltLotSer column
 * @method     ChildWhseLotserialQuery orderByInltbin($order = Criteria::ASC) Order by the InltBin column
 * @method     ChildWhseLotserialQuery orderByInltdate($order = Criteria::ASC) Order by the InltDate column
 * @method     ChildWhseLotserialQuery orderByInltdatewrit($order = Criteria::ASC) Order by the InltDateWrit column
 * @method     ChildWhseLotserialQuery orderByInltcost($order = Criteria::ASC) Order by the InltCost column
 * @method     ChildWhseLotserialQuery orderByInltonhand($order = Criteria::ASC) Order by the InltOnHand column
 * @method     ChildWhseLotserialQuery orderByInltresv($order = Criteria::ASC) Order by the InltResv column
 * @method     ChildWhseLotserialQuery orderByInltship($order = Criteria::ASC) Order by the InltShip column
 * @method     ChildWhseLotserialQuery orderByInltallo($order = Criteria::ASC) Order by the InltAllo column
 * @method     ChildWhseLotserialQuery orderByInltfaballo($order = Criteria::ASC) Order by the InltFabAllo column
 * @method     ChildWhseLotserialQuery orderByInltintran($order = Criteria::ASC) Order by the InltInTran column
 * @method     ChildWhseLotserialQuery orderByInltinship($order = Criteria::ASC) Order by the InltInShip column
 * @method     ChildWhseLotserialQuery orderByInltlotref($order = Criteria::ASC) Order by the InltLotRef column
 * @method     ChildWhseLotserialQuery orderByInltbatch($order = Criteria::ASC) Order by the InltBatch column
 * @method     ChildWhseLotserialQuery orderByInltlandcost1($order = Criteria::ASC) Order by the InltLandCost1 column
 * @method     ChildWhseLotserialQuery orderByInltlandcost2($order = Criteria::ASC) Order by the InltLandCost2 column
 * @method     ChildWhseLotserialQuery orderByInltlandcost3($order = Criteria::ASC) Order by the InltLandCost3 column
 * @method     ChildWhseLotserialQuery orderByInltlandcost4($order = Criteria::ASC) Order by the InltLandCost4 column
 * @method     ChildWhseLotserialQuery orderByInltlandcost5($order = Criteria::ASC) Order by the InltLandCost5 column
 * @method     ChildWhseLotserialQuery orderByInlttariffcost($order = Criteria::ASC) Order by the InltTariffCost column
 * @method     ChildWhseLotserialQuery orderByInltshopcost($order = Criteria::ASC) Order by the InltShopCost column
 * @method     ChildWhseLotserialQuery orderByInltisscodfsqty($order = Criteria::ASC) Order by the InltIsscoDfsQty column
 * @method     ChildWhseLotserialQuery orderByInltheadmark($order = Criteria::ASC) Order by the InltHeadMark column
 * @method     ChildWhseLotserialQuery orderByInltctry($order = Criteria::ASC) Order by the InltCtry column
 * @method     ChildWhseLotserialQuery orderByInltrvalorigcost($order = Criteria::ASC) Order by the InltRvalOrigCost column
 * @method     ChildWhseLotserialQuery orderByInltrvalpct($order = Criteria::ASC) Order by the InltRvalPct column
 * @method     ChildWhseLotserialQuery orderByInltunitwght($order = Criteria::ASC) Order by the InltUnitWght column
 * @method     ChildWhseLotserialQuery orderByInltdestwhse($order = Criteria::ASC) Order by the InltDestWhse column
 * @method     ChildWhseLotserialQuery orderByInltcntrqty($order = Criteria::ASC) Order by the InltCntrQty column
 * @method     ChildWhseLotserialQuery orderByInltqtyperroll($order = Criteria::ASC) Order by the InltQtyPerRoll column
 * @method     ChildWhseLotserialQuery orderByInlttarewght($order = Criteria::ASC) Order by the InltTareWght column
 * @method     ChildWhseLotserialQuery orderByInltqcreasoncd($order = Criteria::ASC) Order by the InltQcReasonCd column
 * @method     ChildWhseLotserialQuery orderByInltcert($order = Criteria::ASC) Order by the InltCert column
 * @method     ChildWhseLotserialQuery orderByInltcuredate($order = Criteria::ASC) Order by the InltCureDate column
 * @method     ChildWhseLotserialQuery orderByInltexpiredatecd($order = Criteria::ASC) Order by the InltExpireDateCd column
 * @method     ChildWhseLotserialQuery orderByInltexpiredate($order = Criteria::ASC) Order by the InltExpireDate column
 * @method     ChildWhseLotserialQuery orderByInltorigbin($order = Criteria::ASC) Order by the InltOrigBin column
 * @method     ChildWhseLotserialQuery orderByInltshopitem($order = Criteria::ASC) Order by the InltShopItem column
 * @method     ChildWhseLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWhseLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWhseLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWhseLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildWhseLotserialQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWhseLotserialQuery groupByInltlotser() Group by the InltLotSer column
 * @method     ChildWhseLotserialQuery groupByInltbin() Group by the InltBin column
 * @method     ChildWhseLotserialQuery groupByInltdate() Group by the InltDate column
 * @method     ChildWhseLotserialQuery groupByInltdatewrit() Group by the InltDateWrit column
 * @method     ChildWhseLotserialQuery groupByInltcost() Group by the InltCost column
 * @method     ChildWhseLotserialQuery groupByInltonhand() Group by the InltOnHand column
 * @method     ChildWhseLotserialQuery groupByInltresv() Group by the InltResv column
 * @method     ChildWhseLotserialQuery groupByInltship() Group by the InltShip column
 * @method     ChildWhseLotserialQuery groupByInltallo() Group by the InltAllo column
 * @method     ChildWhseLotserialQuery groupByInltfaballo() Group by the InltFabAllo column
 * @method     ChildWhseLotserialQuery groupByInltintran() Group by the InltInTran column
 * @method     ChildWhseLotserialQuery groupByInltinship() Group by the InltInShip column
 * @method     ChildWhseLotserialQuery groupByInltlotref() Group by the InltLotRef column
 * @method     ChildWhseLotserialQuery groupByInltbatch() Group by the InltBatch column
 * @method     ChildWhseLotserialQuery groupByInltlandcost1() Group by the InltLandCost1 column
 * @method     ChildWhseLotserialQuery groupByInltlandcost2() Group by the InltLandCost2 column
 * @method     ChildWhseLotserialQuery groupByInltlandcost3() Group by the InltLandCost3 column
 * @method     ChildWhseLotserialQuery groupByInltlandcost4() Group by the InltLandCost4 column
 * @method     ChildWhseLotserialQuery groupByInltlandcost5() Group by the InltLandCost5 column
 * @method     ChildWhseLotserialQuery groupByInlttariffcost() Group by the InltTariffCost column
 * @method     ChildWhseLotserialQuery groupByInltshopcost() Group by the InltShopCost column
 * @method     ChildWhseLotserialQuery groupByInltisscodfsqty() Group by the InltIsscoDfsQty column
 * @method     ChildWhseLotserialQuery groupByInltheadmark() Group by the InltHeadMark column
 * @method     ChildWhseLotserialQuery groupByInltctry() Group by the InltCtry column
 * @method     ChildWhseLotserialQuery groupByInltrvalorigcost() Group by the InltRvalOrigCost column
 * @method     ChildWhseLotserialQuery groupByInltrvalpct() Group by the InltRvalPct column
 * @method     ChildWhseLotserialQuery groupByInltunitwght() Group by the InltUnitWght column
 * @method     ChildWhseLotserialQuery groupByInltdestwhse() Group by the InltDestWhse column
 * @method     ChildWhseLotserialQuery groupByInltcntrqty() Group by the InltCntrQty column
 * @method     ChildWhseLotserialQuery groupByInltqtyperroll() Group by the InltQtyPerRoll column
 * @method     ChildWhseLotserialQuery groupByInlttarewght() Group by the InltTareWght column
 * @method     ChildWhseLotserialQuery groupByInltqcreasoncd() Group by the InltQcReasonCd column
 * @method     ChildWhseLotserialQuery groupByInltcert() Group by the InltCert column
 * @method     ChildWhseLotserialQuery groupByInltcuredate() Group by the InltCureDate column
 * @method     ChildWhseLotserialQuery groupByInltexpiredatecd() Group by the InltExpireDateCd column
 * @method     ChildWhseLotserialQuery groupByInltexpiredate() Group by the InltExpireDate column
 * @method     ChildWhseLotserialQuery groupByInltorigbin() Group by the InltOrigBin column
 * @method     ChildWhseLotserialQuery groupByInltshopitem() Group by the InltShopItem column
 * @method     ChildWhseLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWhseLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWhseLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWhseLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWhseLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWhseLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWhseLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWhseLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWhseLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWhseLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildWhseLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildWhseLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildWhseLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildWhseLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildWhseLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildWhseLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildWhseLotserial findOne(ConnectionInterface $con = null) Return the first ChildWhseLotserial matching the query
 * @method     ChildWhseLotserial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWhseLotserial matching the query, or a new ChildWhseLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildWhseLotserial findOneByInititemnbr(string $InitItemNbr) Return the first ChildWhseLotserial filtered by the InitItemNbr column
 * @method     ChildWhseLotserial findOneByIntbwhse(string $IntbWhse) Return the first ChildWhseLotserial filtered by the IntbWhse column
 * @method     ChildWhseLotserial findOneByInltlotser(string $InltLotSer) Return the first ChildWhseLotserial filtered by the InltLotSer column
 * @method     ChildWhseLotserial findOneByInltbin(string $InltBin) Return the first ChildWhseLotserial filtered by the InltBin column
 * @method     ChildWhseLotserial findOneByInltdate(string $InltDate) Return the first ChildWhseLotserial filtered by the InltDate column
 * @method     ChildWhseLotserial findOneByInltdatewrit(string $InltDateWrit) Return the first ChildWhseLotserial filtered by the InltDateWrit column
 * @method     ChildWhseLotserial findOneByInltcost(string $InltCost) Return the first ChildWhseLotserial filtered by the InltCost column
 * @method     ChildWhseLotserial findOneByInltonhand(string $InltOnHand) Return the first ChildWhseLotserial filtered by the InltOnHand column
 * @method     ChildWhseLotserial findOneByInltresv(string $InltResv) Return the first ChildWhseLotserial filtered by the InltResv column
 * @method     ChildWhseLotserial findOneByInltship(string $InltShip) Return the first ChildWhseLotserial filtered by the InltShip column
 * @method     ChildWhseLotserial findOneByInltallo(string $InltAllo) Return the first ChildWhseLotserial filtered by the InltAllo column
 * @method     ChildWhseLotserial findOneByInltfaballo(string $InltFabAllo) Return the first ChildWhseLotserial filtered by the InltFabAllo column
 * @method     ChildWhseLotserial findOneByInltintran(string $InltInTran) Return the first ChildWhseLotserial filtered by the InltInTran column
 * @method     ChildWhseLotserial findOneByInltinship(string $InltInShip) Return the first ChildWhseLotserial filtered by the InltInShip column
 * @method     ChildWhseLotserial findOneByInltlotref(string $InltLotRef) Return the first ChildWhseLotserial filtered by the InltLotRef column
 * @method     ChildWhseLotserial findOneByInltbatch(string $InltBatch) Return the first ChildWhseLotserial filtered by the InltBatch column
 * @method     ChildWhseLotserial findOneByInltlandcost1(string $InltLandCost1) Return the first ChildWhseLotserial filtered by the InltLandCost1 column
 * @method     ChildWhseLotserial findOneByInltlandcost2(string $InltLandCost2) Return the first ChildWhseLotserial filtered by the InltLandCost2 column
 * @method     ChildWhseLotserial findOneByInltlandcost3(string $InltLandCost3) Return the first ChildWhseLotserial filtered by the InltLandCost3 column
 * @method     ChildWhseLotserial findOneByInltlandcost4(string $InltLandCost4) Return the first ChildWhseLotserial filtered by the InltLandCost4 column
 * @method     ChildWhseLotserial findOneByInltlandcost5(string $InltLandCost5) Return the first ChildWhseLotserial filtered by the InltLandCost5 column
 * @method     ChildWhseLotserial findOneByInlttariffcost(string $InltTariffCost) Return the first ChildWhseLotserial filtered by the InltTariffCost column
 * @method     ChildWhseLotserial findOneByInltshopcost(string $InltShopCost) Return the first ChildWhseLotserial filtered by the InltShopCost column
 * @method     ChildWhseLotserial findOneByInltisscodfsqty(string $InltIsscoDfsQty) Return the first ChildWhseLotserial filtered by the InltIsscoDfsQty column
 * @method     ChildWhseLotserial findOneByInltheadmark(string $InltHeadMark) Return the first ChildWhseLotserial filtered by the InltHeadMark column
 * @method     ChildWhseLotserial findOneByInltctry(string $InltCtry) Return the first ChildWhseLotserial filtered by the InltCtry column
 * @method     ChildWhseLotserial findOneByInltrvalorigcost(string $InltRvalOrigCost) Return the first ChildWhseLotserial filtered by the InltRvalOrigCost column
 * @method     ChildWhseLotserial findOneByInltrvalpct(string $InltRvalPct) Return the first ChildWhseLotserial filtered by the InltRvalPct column
 * @method     ChildWhseLotserial findOneByInltunitwght(string $InltUnitWght) Return the first ChildWhseLotserial filtered by the InltUnitWght column
 * @method     ChildWhseLotserial findOneByInltdestwhse(string $InltDestWhse) Return the first ChildWhseLotserial filtered by the InltDestWhse column
 * @method     ChildWhseLotserial findOneByInltcntrqty(string $InltCntrQty) Return the first ChildWhseLotserial filtered by the InltCntrQty column
 * @method     ChildWhseLotserial findOneByInltqtyperroll(string $InltQtyPerRoll) Return the first ChildWhseLotserial filtered by the InltQtyPerRoll column
 * @method     ChildWhseLotserial findOneByInlttarewght(string $InltTareWght) Return the first ChildWhseLotserial filtered by the InltTareWght column
 * @method     ChildWhseLotserial findOneByInltqcreasoncd(string $InltQcReasonCd) Return the first ChildWhseLotserial filtered by the InltQcReasonCd column
 * @method     ChildWhseLotserial findOneByInltcert(string $InltCert) Return the first ChildWhseLotserial filtered by the InltCert column
 * @method     ChildWhseLotserial findOneByInltcuredate(string $InltCureDate) Return the first ChildWhseLotserial filtered by the InltCureDate column
 * @method     ChildWhseLotserial findOneByInltexpiredatecd(string $InltExpireDateCd) Return the first ChildWhseLotserial filtered by the InltExpireDateCd column
 * @method     ChildWhseLotserial findOneByInltexpiredate(string $InltExpireDate) Return the first ChildWhseLotserial filtered by the InltExpireDate column
 * @method     ChildWhseLotserial findOneByInltorigbin(string $InltOrigBin) Return the first ChildWhseLotserial filtered by the InltOrigBin column
 * @method     ChildWhseLotserial findOneByInltshopitem(string $InltShopItem) Return the first ChildWhseLotserial filtered by the InltShopItem column
 * @method     ChildWhseLotserial findOneByDateupdtd(string $DateUpdtd) Return the first ChildWhseLotserial filtered by the DateUpdtd column
 * @method     ChildWhseLotserial findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWhseLotserial filtered by the TimeUpdtd column
 * @method     ChildWhseLotserial findOneByDummy(string $dummy) Return the first ChildWhseLotserial filtered by the dummy column *

 * @method     ChildWhseLotserial requirePk($key, ConnectionInterface $con = null) Return the ChildWhseLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOne(ConnectionInterface $con = null) Return the first ChildWhseLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWhseLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildWhseLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByIntbwhse(string $IntbWhse) Return the first ChildWhseLotserial filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlotser(string $InltLotSer) Return the first ChildWhseLotserial filtered by the InltLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltbin(string $InltBin) Return the first ChildWhseLotserial filtered by the InltBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltdate(string $InltDate) Return the first ChildWhseLotserial filtered by the InltDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltdatewrit(string $InltDateWrit) Return the first ChildWhseLotserial filtered by the InltDateWrit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltcost(string $InltCost) Return the first ChildWhseLotserial filtered by the InltCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltonhand(string $InltOnHand) Return the first ChildWhseLotserial filtered by the InltOnHand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltresv(string $InltResv) Return the first ChildWhseLotserial filtered by the InltResv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltship(string $InltShip) Return the first ChildWhseLotserial filtered by the InltShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltallo(string $InltAllo) Return the first ChildWhseLotserial filtered by the InltAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltfaballo(string $InltFabAllo) Return the first ChildWhseLotserial filtered by the InltFabAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltintran(string $InltInTran) Return the first ChildWhseLotserial filtered by the InltInTran column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltinship(string $InltInShip) Return the first ChildWhseLotserial filtered by the InltInShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlotref(string $InltLotRef) Return the first ChildWhseLotserial filtered by the InltLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltbatch(string $InltBatch) Return the first ChildWhseLotserial filtered by the InltBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlandcost1(string $InltLandCost1) Return the first ChildWhseLotserial filtered by the InltLandCost1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlandcost2(string $InltLandCost2) Return the first ChildWhseLotserial filtered by the InltLandCost2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlandcost3(string $InltLandCost3) Return the first ChildWhseLotserial filtered by the InltLandCost3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlandcost4(string $InltLandCost4) Return the first ChildWhseLotserial filtered by the InltLandCost4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltlandcost5(string $InltLandCost5) Return the first ChildWhseLotserial filtered by the InltLandCost5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInlttariffcost(string $InltTariffCost) Return the first ChildWhseLotserial filtered by the InltTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltshopcost(string $InltShopCost) Return the first ChildWhseLotserial filtered by the InltShopCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltisscodfsqty(string $InltIsscoDfsQty) Return the first ChildWhseLotserial filtered by the InltIsscoDfsQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltheadmark(string $InltHeadMark) Return the first ChildWhseLotserial filtered by the InltHeadMark column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltctry(string $InltCtry) Return the first ChildWhseLotserial filtered by the InltCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltrvalorigcost(string $InltRvalOrigCost) Return the first ChildWhseLotserial filtered by the InltRvalOrigCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltrvalpct(string $InltRvalPct) Return the first ChildWhseLotserial filtered by the InltRvalPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltunitwght(string $InltUnitWght) Return the first ChildWhseLotserial filtered by the InltUnitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltdestwhse(string $InltDestWhse) Return the first ChildWhseLotserial filtered by the InltDestWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltcntrqty(string $InltCntrQty) Return the first ChildWhseLotserial filtered by the InltCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltqtyperroll(string $InltQtyPerRoll) Return the first ChildWhseLotserial filtered by the InltQtyPerRoll column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInlttarewght(string $InltTareWght) Return the first ChildWhseLotserial filtered by the InltTareWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltqcreasoncd(string $InltQcReasonCd) Return the first ChildWhseLotserial filtered by the InltQcReasonCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltcert(string $InltCert) Return the first ChildWhseLotserial filtered by the InltCert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltcuredate(string $InltCureDate) Return the first ChildWhseLotserial filtered by the InltCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltexpiredatecd(string $InltExpireDateCd) Return the first ChildWhseLotserial filtered by the InltExpireDateCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltexpiredate(string $InltExpireDate) Return the first ChildWhseLotserial filtered by the InltExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltorigbin(string $InltOrigBin) Return the first ChildWhseLotserial filtered by the InltOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByInltshopitem(string $InltShopItem) Return the first ChildWhseLotserial filtered by the InltShopItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildWhseLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWhseLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWhseLotserial requireOneByDummy(string $dummy) Return the first ChildWhseLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWhseLotserial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWhseLotserial objects based on current ModelCriteria
 * @method     ChildWhseLotserial[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildWhseLotserial objects filtered by the InitItemNbr column
 * @method     ChildWhseLotserial[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildWhseLotserial objects filtered by the IntbWhse column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlotser(string $InltLotSer) Return ChildWhseLotserial objects filtered by the InltLotSer column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltbin(string $InltBin) Return ChildWhseLotserial objects filtered by the InltBin column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltdate(string $InltDate) Return ChildWhseLotserial objects filtered by the InltDate column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltdatewrit(string $InltDateWrit) Return ChildWhseLotserial objects filtered by the InltDateWrit column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltcost(string $InltCost) Return ChildWhseLotserial objects filtered by the InltCost column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltonhand(string $InltOnHand) Return ChildWhseLotserial objects filtered by the InltOnHand column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltresv(string $InltResv) Return ChildWhseLotserial objects filtered by the InltResv column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltship(string $InltShip) Return ChildWhseLotserial objects filtered by the InltShip column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltallo(string $InltAllo) Return ChildWhseLotserial objects filtered by the InltAllo column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltfaballo(string $InltFabAllo) Return ChildWhseLotserial objects filtered by the InltFabAllo column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltintran(string $InltInTran) Return ChildWhseLotserial objects filtered by the InltInTran column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltinship(string $InltInShip) Return ChildWhseLotserial objects filtered by the InltInShip column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlotref(string $InltLotRef) Return ChildWhseLotserial objects filtered by the InltLotRef column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltbatch(string $InltBatch) Return ChildWhseLotserial objects filtered by the InltBatch column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlandcost1(string $InltLandCost1) Return ChildWhseLotserial objects filtered by the InltLandCost1 column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlandcost2(string $InltLandCost2) Return ChildWhseLotserial objects filtered by the InltLandCost2 column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlandcost3(string $InltLandCost3) Return ChildWhseLotserial objects filtered by the InltLandCost3 column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlandcost4(string $InltLandCost4) Return ChildWhseLotserial objects filtered by the InltLandCost4 column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltlandcost5(string $InltLandCost5) Return ChildWhseLotserial objects filtered by the InltLandCost5 column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInlttariffcost(string $InltTariffCost) Return ChildWhseLotserial objects filtered by the InltTariffCost column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltshopcost(string $InltShopCost) Return ChildWhseLotserial objects filtered by the InltShopCost column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltisscodfsqty(string $InltIsscoDfsQty) Return ChildWhseLotserial objects filtered by the InltIsscoDfsQty column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltheadmark(string $InltHeadMark) Return ChildWhseLotserial objects filtered by the InltHeadMark column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltctry(string $InltCtry) Return ChildWhseLotserial objects filtered by the InltCtry column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltrvalorigcost(string $InltRvalOrigCost) Return ChildWhseLotserial objects filtered by the InltRvalOrigCost column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltrvalpct(string $InltRvalPct) Return ChildWhseLotserial objects filtered by the InltRvalPct column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltunitwght(string $InltUnitWght) Return ChildWhseLotserial objects filtered by the InltUnitWght column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltdestwhse(string $InltDestWhse) Return ChildWhseLotserial objects filtered by the InltDestWhse column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltcntrqty(string $InltCntrQty) Return ChildWhseLotserial objects filtered by the InltCntrQty column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltqtyperroll(string $InltQtyPerRoll) Return ChildWhseLotserial objects filtered by the InltQtyPerRoll column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInlttarewght(string $InltTareWght) Return ChildWhseLotserial objects filtered by the InltTareWght column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltqcreasoncd(string $InltQcReasonCd) Return ChildWhseLotserial objects filtered by the InltQcReasonCd column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltcert(string $InltCert) Return ChildWhseLotserial objects filtered by the InltCert column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltcuredate(string $InltCureDate) Return ChildWhseLotserial objects filtered by the InltCureDate column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltexpiredatecd(string $InltExpireDateCd) Return ChildWhseLotserial objects filtered by the InltExpireDateCd column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltexpiredate(string $InltExpireDate) Return ChildWhseLotserial objects filtered by the InltExpireDate column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltorigbin(string $InltOrigBin) Return ChildWhseLotserial objects filtered by the InltOrigBin column
 * @method     ChildWhseLotserial[]|ObjectCollection findByInltshopitem(string $InltShopItem) Return ChildWhseLotserial objects filtered by the InltShopItem column
 * @method     ChildWhseLotserial[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildWhseLotserial objects filtered by the DateUpdtd column
 * @method     ChildWhseLotserial[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildWhseLotserial objects filtered by the TimeUpdtd column
 * @method     ChildWhseLotserial[]|ObjectCollection findByDummy(string $dummy) Return ChildWhseLotserial objects filtered by the dummy column
 * @method     ChildWhseLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WhseLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WhseLotserialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WhseLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWhseLotserialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWhseLotserialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWhseLotserialQuery) {
            return $criteria;
        }
        $query = new ChildWhseLotserialQuery();
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
     * @return ChildWhseLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WhseLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WhseLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildWhseLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IntbWhse, InltLotSer, InltBin, InltDate, InltDateWrit, InltCost, InltOnHand, InltResv, InltShip, InltAllo, InltFabAllo, InltInTran, InltInShip, InltLotRef, InltBatch, InltLandCost1, InltLandCost2, InltLandCost3, InltLandCost4, InltLandCost5, InltTariffCost, InltShopCost, InltIsscoDfsQty, InltHeadMark, InltCtry, InltRvalOrigCost, InltRvalPct, InltUnitWght, InltDestWhse, InltCntrQty, InltQtyPerRoll, InltTareWght, InltQcReasonCd, InltCert, InltCureDate, InltExpireDateCd, InltExpireDate, InltOrigBin, InltShopItem, DateUpdtd, TimeUpdtd, dummy FROM inv_inv_lot WHERE InitItemNbr = :p0 AND IntbWhse = :p1 AND InltLotSer = :p2 AND InltBin = :p3';
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
            /** @var ChildWhseLotserial $obj */
            $obj = new ChildWhseLotserial();
            $obj->hydrate($row);
            WhseLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildWhseLotserial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(WhseLotserialTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(WhseLotserialTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLOTSER, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(WhseLotserialTableMap::COL_INLTBIN, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(WhseLotserialTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(WhseLotserialTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(WhseLotserialTableMap::COL_INLTLOTSER, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(WhseLotserialTableMap::COL_INLTBIN, $key[3], Criteria::EQUAL);
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
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the InltLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlotser('fooValue');   // WHERE InltLotSer = 'fooValue'
     * $query->filterByInltlotser('%fooValue%', Criteria::LIKE); // WHERE InltLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlotser($inltlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLOTSER, $inltlotser, $comparison);
    }

    /**
     * Filter the query on the InltBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInltbin('fooValue');   // WHERE InltBin = 'fooValue'
     * $query->filterByInltbin('%fooValue%', Criteria::LIKE); // WHERE InltBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltbin($inltbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTBIN, $inltbin, $comparison);
    }

    /**
     * Filter the query on the InltDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdate('fooValue');   // WHERE InltDate = 'fooValue'
     * $query->filterByInltdate('%fooValue%', Criteria::LIKE); // WHERE InltDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltdate($inltdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTDATE, $inltdate, $comparison);
    }

    /**
     * Filter the query on the InltDateWrit column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdatewrit('fooValue');   // WHERE InltDateWrit = 'fooValue'
     * $query->filterByInltdatewrit('%fooValue%', Criteria::LIKE); // WHERE InltDateWrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltdatewrit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltdatewrit($inltdatewrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdatewrit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTDATEWRIT, $inltdatewrit, $comparison);
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
     * @param     mixed $inltcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltcost($inltcost = null, $comparison = null)
    {
        if (is_array($inltcost)) {
            $useMinMax = false;
            if (isset($inltcost['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCOST, $inltcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltcost['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCOST, $inltcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCOST, $inltcost, $comparison);
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
     * @param     mixed $inltonhand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltonhand($inltonhand = null, $comparison = null)
    {
        if (is_array($inltonhand)) {
            $useMinMax = false;
            if (isset($inltonhand['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTONHAND, $inltonhand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltonhand['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTONHAND, $inltonhand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTONHAND, $inltonhand, $comparison);
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
     * @param     mixed $inltresv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltresv($inltresv = null, $comparison = null)
    {
        if (is_array($inltresv)) {
            $useMinMax = false;
            if (isset($inltresv['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRESV, $inltresv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltresv['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRESV, $inltresv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRESV, $inltresv, $comparison);
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
     * @param     mixed $inltship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltship($inltship = null, $comparison = null)
    {
        if (is_array($inltship)) {
            $useMinMax = false;
            if (isset($inltship['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHIP, $inltship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltship['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHIP, $inltship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHIP, $inltship, $comparison);
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
     * @param     mixed $inltallo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltallo($inltallo = null, $comparison = null)
    {
        if (is_array($inltallo)) {
            $useMinMax = false;
            if (isset($inltallo['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTALLO, $inltallo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltallo['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTALLO, $inltallo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTALLO, $inltallo, $comparison);
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
     * @param     mixed $inltfaballo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltfaballo($inltfaballo = null, $comparison = null)
    {
        if (is_array($inltfaballo)) {
            $useMinMax = false;
            if (isset($inltfaballo['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTFABALLO, $inltfaballo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltfaballo['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTFABALLO, $inltfaballo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTFABALLO, $inltfaballo, $comparison);
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
     * @param     mixed $inltintran The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltintran($inltintran = null, $comparison = null)
    {
        if (is_array($inltintran)) {
            $useMinMax = false;
            if (isset($inltintran['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTINTRAN, $inltintran['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltintran['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTINTRAN, $inltintran['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTINTRAN, $inltintran, $comparison);
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
     * @param     mixed $inltinship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltinship($inltinship = null, $comparison = null)
    {
        if (is_array($inltinship)) {
            $useMinMax = false;
            if (isset($inltinship['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTINSHIP, $inltinship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltinship['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTINSHIP, $inltinship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTINSHIP, $inltinship, $comparison);
    }

    /**
     * Filter the query on the InltLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlotref('fooValue');   // WHERE InltLotRef = 'fooValue'
     * $query->filterByInltlotref('%fooValue%', Criteria::LIKE); // WHERE InltLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlotref($inltlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLOTREF, $inltlotref, $comparison);
    }

    /**
     * Filter the query on the InltBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByInltbatch('fooValue');   // WHERE InltBatch = 'fooValue'
     * $query->filterByInltbatch('%fooValue%', Criteria::LIKE); // WHERE InltBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltbatch($inltbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTBATCH, $inltbatch, $comparison);
    }

    /**
     * Filter the query on the InltLandCost1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost1(1234); // WHERE InltLandCost1 = 1234
     * $query->filterByInltlandcost1(array(12, 34)); // WHERE InltLandCost1 IN (12, 34)
     * $query->filterByInltlandcost1(array('min' => 12)); // WHERE InltLandCost1 > 12
     * </code>
     *
     * @param     mixed $inltlandcost1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlandcost1($inltlandcost1 = null, $comparison = null)
    {
        if (is_array($inltlandcost1)) {
            $useMinMax = false;
            if (isset($inltlandcost1['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST1, $inltlandcost1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost1['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST1, $inltlandcost1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST1, $inltlandcost1, $comparison);
    }

    /**
     * Filter the query on the InltLandCost2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost2(1234); // WHERE InltLandCost2 = 1234
     * $query->filterByInltlandcost2(array(12, 34)); // WHERE InltLandCost2 IN (12, 34)
     * $query->filterByInltlandcost2(array('min' => 12)); // WHERE InltLandCost2 > 12
     * </code>
     *
     * @param     mixed $inltlandcost2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlandcost2($inltlandcost2 = null, $comparison = null)
    {
        if (is_array($inltlandcost2)) {
            $useMinMax = false;
            if (isset($inltlandcost2['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST2, $inltlandcost2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost2['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST2, $inltlandcost2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST2, $inltlandcost2, $comparison);
    }

    /**
     * Filter the query on the InltLandCost3 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost3(1234); // WHERE InltLandCost3 = 1234
     * $query->filterByInltlandcost3(array(12, 34)); // WHERE InltLandCost3 IN (12, 34)
     * $query->filterByInltlandcost3(array('min' => 12)); // WHERE InltLandCost3 > 12
     * </code>
     *
     * @param     mixed $inltlandcost3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlandcost3($inltlandcost3 = null, $comparison = null)
    {
        if (is_array($inltlandcost3)) {
            $useMinMax = false;
            if (isset($inltlandcost3['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST3, $inltlandcost3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost3['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST3, $inltlandcost3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST3, $inltlandcost3, $comparison);
    }

    /**
     * Filter the query on the InltLandCost4 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost4(1234); // WHERE InltLandCost4 = 1234
     * $query->filterByInltlandcost4(array(12, 34)); // WHERE InltLandCost4 IN (12, 34)
     * $query->filterByInltlandcost4(array('min' => 12)); // WHERE InltLandCost4 > 12
     * </code>
     *
     * @param     mixed $inltlandcost4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlandcost4($inltlandcost4 = null, $comparison = null)
    {
        if (is_array($inltlandcost4)) {
            $useMinMax = false;
            if (isset($inltlandcost4['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST4, $inltlandcost4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost4['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST4, $inltlandcost4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST4, $inltlandcost4, $comparison);
    }

    /**
     * Filter the query on the InltLandCost5 column
     *
     * Example usage:
     * <code>
     * $query->filterByInltlandcost5(1234); // WHERE InltLandCost5 = 1234
     * $query->filterByInltlandcost5(array(12, 34)); // WHERE InltLandCost5 IN (12, 34)
     * $query->filterByInltlandcost5(array('min' => 12)); // WHERE InltLandCost5 > 12
     * </code>
     *
     * @param     mixed $inltlandcost5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltlandcost5($inltlandcost5 = null, $comparison = null)
    {
        if (is_array($inltlandcost5)) {
            $useMinMax = false;
            if (isset($inltlandcost5['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST5, $inltlandcost5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltlandcost5['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST5, $inltlandcost5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTLANDCOST5, $inltlandcost5, $comparison);
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
     * @param     mixed $inlttariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInlttariffcost($inlttariffcost = null, $comparison = null)
    {
        if (is_array($inlttariffcost)) {
            $useMinMax = false;
            if (isset($inlttariffcost['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTTARIFFCOST, $inlttariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inlttariffcost['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTTARIFFCOST, $inlttariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTTARIFFCOST, $inlttariffcost, $comparison);
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
     * @param     mixed $inltshopcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltshopcost($inltshopcost = null, $comparison = null)
    {
        if (is_array($inltshopcost)) {
            $useMinMax = false;
            if (isset($inltshopcost['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHOPCOST, $inltshopcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltshopcost['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHOPCOST, $inltshopcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHOPCOST, $inltshopcost, $comparison);
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
     * @param     mixed $inltisscodfsqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltisscodfsqty($inltisscodfsqty = null, $comparison = null)
    {
        if (is_array($inltisscodfsqty)) {
            $useMinMax = false;
            if (isset($inltisscodfsqty['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTISSCODFSQTY, $inltisscodfsqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltisscodfsqty['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTISSCODFSQTY, $inltisscodfsqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTISSCODFSQTY, $inltisscodfsqty, $comparison);
    }

    /**
     * Filter the query on the InltHeadMark column
     *
     * Example usage:
     * <code>
     * $query->filterByInltheadmark('fooValue');   // WHERE InltHeadMark = 'fooValue'
     * $query->filterByInltheadmark('%fooValue%', Criteria::LIKE); // WHERE InltHeadMark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltheadmark The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltheadmark($inltheadmark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltheadmark)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTHEADMARK, $inltheadmark, $comparison);
    }

    /**
     * Filter the query on the InltCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByInltctry('fooValue');   // WHERE InltCtry = 'fooValue'
     * $query->filterByInltctry('%fooValue%', Criteria::LIKE); // WHERE InltCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltctry($inltctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCTRY, $inltctry, $comparison);
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
     * @param     mixed $inltrvalorigcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltrvalorigcost($inltrvalorigcost = null, $comparison = null)
    {
        if (is_array($inltrvalorigcost)) {
            $useMinMax = false;
            if (isset($inltrvalorigcost['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltrvalorigcost['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRVALORIGCOST, $inltrvalorigcost, $comparison);
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
     * @param     mixed $inltrvalpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltrvalpct($inltrvalpct = null, $comparison = null)
    {
        if (is_array($inltrvalpct)) {
            $useMinMax = false;
            if (isset($inltrvalpct['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRVALPCT, $inltrvalpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltrvalpct['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRVALPCT, $inltrvalpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTRVALPCT, $inltrvalpct, $comparison);
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
     * @param     mixed $inltunitwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltunitwght($inltunitwght = null, $comparison = null)
    {
        if (is_array($inltunitwght)) {
            $useMinMax = false;
            if (isset($inltunitwght['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTUNITWGHT, $inltunitwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltunitwght['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTUNITWGHT, $inltunitwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTUNITWGHT, $inltunitwght, $comparison);
    }

    /**
     * Filter the query on the InltDestWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByInltdestwhse('fooValue');   // WHERE InltDestWhse = 'fooValue'
     * $query->filterByInltdestwhse('%fooValue%', Criteria::LIKE); // WHERE InltDestWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltdestwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltdestwhse($inltdestwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltdestwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTDESTWHSE, $inltdestwhse, $comparison);
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
     * @param     mixed $inltcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltcntrqty($inltcntrqty = null, $comparison = null)
    {
        if (is_array($inltcntrqty)) {
            $useMinMax = false;
            if (isset($inltcntrqty['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCNTRQTY, $inltcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltcntrqty['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCNTRQTY, $inltcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCNTRQTY, $inltcntrqty, $comparison);
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
     * @param     mixed $inltqtyperroll The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltqtyperroll($inltqtyperroll = null, $comparison = null)
    {
        if (is_array($inltqtyperroll)) {
            $useMinMax = false;
            if (isset($inltqtyperroll['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTQTYPERROLL, $inltqtyperroll['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inltqtyperroll['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTQTYPERROLL, $inltqtyperroll['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTQTYPERROLL, $inltqtyperroll, $comparison);
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
     * @param     mixed $inlttarewght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInlttarewght($inlttarewght = null, $comparison = null)
    {
        if (is_array($inlttarewght)) {
            $useMinMax = false;
            if (isset($inlttarewght['min'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTTAREWGHT, $inlttarewght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inlttarewght['max'])) {
                $this->addUsingAlias(WhseLotserialTableMap::COL_INLTTAREWGHT, $inlttarewght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTTAREWGHT, $inlttarewght, $comparison);
    }

    /**
     * Filter the query on the InltQcReasonCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInltqcreasoncd('fooValue');   // WHERE InltQcReasonCd = 'fooValue'
     * $query->filterByInltqcreasoncd('%fooValue%', Criteria::LIKE); // WHERE InltQcReasonCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltqcreasoncd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltqcreasoncd($inltqcreasoncd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltqcreasoncd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTQCREASONCD, $inltqcreasoncd, $comparison);
    }

    /**
     * Filter the query on the InltCert column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcert('fooValue');   // WHERE InltCert = 'fooValue'
     * $query->filterByInltcert('%fooValue%', Criteria::LIKE); // WHERE InltCert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltcert The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltcert($inltcert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltcert)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCERT, $inltcert, $comparison);
    }

    /**
     * Filter the query on the InltCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltcuredate('fooValue');   // WHERE InltCureDate = 'fooValue'
     * $query->filterByInltcuredate('%fooValue%', Criteria::LIKE); // WHERE InltCureDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltcuredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltcuredate($inltcuredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTCUREDATE, $inltcuredate, $comparison);
    }

    /**
     * Filter the query on the InltExpireDateCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInltexpiredatecd('fooValue');   // WHERE InltExpireDateCd = 'fooValue'
     * $query->filterByInltexpiredatecd('%fooValue%', Criteria::LIKE); // WHERE InltExpireDateCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltexpiredatecd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltexpiredatecd($inltexpiredatecd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltexpiredatecd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTEXPIREDATECD, $inltexpiredatecd, $comparison);
    }

    /**
     * Filter the query on the InltExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInltexpiredate('fooValue');   // WHERE InltExpireDate = 'fooValue'
     * $query->filterByInltexpiredate('%fooValue%', Criteria::LIKE); // WHERE InltExpireDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltexpiredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltexpiredate($inltexpiredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTEXPIREDATE, $inltexpiredate, $comparison);
    }

    /**
     * Filter the query on the InltOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInltorigbin('fooValue');   // WHERE InltOrigBin = 'fooValue'
     * $query->filterByInltorigbin('%fooValue%', Criteria::LIKE); // WHERE InltOrigBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltorigbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltorigbin($inltorigbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTORIGBIN, $inltorigbin, $comparison);
    }

    /**
     * Filter the query on the InltShopItem column
     *
     * Example usage:
     * <code>
     * $query->filterByInltshopitem('fooValue');   // WHERE InltShopItem = 'fooValue'
     * $query->filterByInltshopitem('%fooValue%', Criteria::LIKE); // WHERE InltShopItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inltshopitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByInltshopitem($inltshopitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inltshopitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_INLTSHOPITEM, $inltshopitem, $comparison);
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
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WhseLotserialTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(WhseLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(WhseLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildWhseLotserial $whseInvLot Object to remove from the list of results
     *
     * @return $this|ChildWhseLotserialQuery The current query, for fluid interface
     */
    public function prune($whseInvLot = null)
    {
        if ($whseInvLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(WhseLotserialTableMap::COL_INITITEMNBR), $whseInvLot->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(WhseLotserialTableMap::COL_INTBWHSE), $whseInvLot->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(WhseLotserialTableMap::COL_INLTLOTSER), $whseInvLot->getInltlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(WhseLotserialTableMap::COL_INLTBIN), $whseInvLot->getInltbin(), Criteria::NOT_EQUAL);
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
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WhseLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WhseLotserialTableMap::clearInstancePool();
            WhseLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WhseLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WhseLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WhseLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WhseLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WhseLotserialQuery
