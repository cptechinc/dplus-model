<?php

namespace Base;

use \PurchaseOrderDetailReceiving as ChildPurchaseOrderDetailReceiving;
use \PurchaseOrderDetailReceivingQuery as ChildPurchaseOrderDetailReceivingQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailReceivingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_tran_det' table.
 *
 *
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPothnbr($order = Criteria::ASC) Order by the PothNbr column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdline($order = Criteria::ASC) Order by the PotdLine column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdseq($order = Criteria::ASC) Order by the PotdSeq column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotddesc1($order = Criteria::ASC) Order by the PotdDesc1 column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotddesc2($order = Criteria::ASC) Order by the PotdDesc2 column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdvenditemnbr($order = Criteria::ASC) Order by the PotdVendItemNbr column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByIntbuompur($order = Criteria::ASC) Order by the IntbUomPur column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdref($order = Criteria::ASC) Order by the PotdRef column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdqtyord($order = Criteria::ASC) Order by the PotdQtyOrd column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdqtyrec($order = Criteria::ASC) Order by the PotdQtyRec column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdpurchunitcost($order = Criteria::ASC) Order by the PotdPurchUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdpurchtotcost($order = Criteria::ASC) Order by the PotdPurchTotCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdglacct($order = Criteria::ASC) Order by the PotdGlAcct column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdclos($order = Criteria::ASC) Order by the PotdClos column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdshopminutes($order = Criteria::ASC) Order by the PotdShopMinutes column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdtype($order = Criteria::ASC) Order by the PotdType column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdforeigncost($order = Criteria::ASC) Order by the PotdForeignCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdforeigncosttot($order = Criteria::ASC) Order by the PotdForeignCostTot column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdspecordr($order = Criteria::ASC) Order by the PotdSpecOrdr column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdprodunitcost($order = Criteria::ASC) Order by the PotdProdUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdbaseunitcost($order = Criteria::ASC) Order by the PotdBaseUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdbin($order = Criteria::ASC) Order by the PotdBin column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdfabreturnscrap($order = Criteria::ASC) Order by the PotdFabReturnScrap column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdrfbatch($order = Criteria::ASC) Order by the PotdRfBatch column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdrevision($order = Criteria::ASC) Order by the PotdRevision column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdlandunitcost($order = Criteria::ASC) Order by the PotdLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdnbrofcases($order = Criteria::ASC) Order by the PotdNbrOfCases column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdtariffcost($order = Criteria::ASC) Order by the PotdTariffCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdshopcost($order = Criteria::ASC) Order by the PotdShopCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByPotdcasesord($order = Criteria::ASC) Order by the PotdCasesOrd column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceivingQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPothnbr() Group by the PothNbr column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdline() Group by the PotdLine column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdseq() Group by the PotdSeq column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotddesc1() Group by the PotdDesc1 column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotddesc2() Group by the PotdDesc2 column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdvenditemnbr() Group by the PotdVendItemNbr column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByIntbuompur() Group by the IntbUomPur column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdref() Group by the PotdRef column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdqtyord() Group by the PotdQtyOrd column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdqtyrec() Group by the PotdQtyRec column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdpurchunitcost() Group by the PotdPurchUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdpurchtotcost() Group by the PotdPurchTotCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdglacct() Group by the PotdGlAcct column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdclos() Group by the PotdClos column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdshopminutes() Group by the PotdShopMinutes column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdtype() Group by the PotdType column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdforeigncost() Group by the PotdForeignCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdforeigncosttot() Group by the PotdForeignCostTot column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdspecordr() Group by the PotdSpecOrdr column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdprodunitcost() Group by the PotdProdUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdbaseunitcost() Group by the PotdBaseUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdbin() Group by the PotdBin column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdfabreturnscrap() Group by the PotdFabReturnScrap column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdrfbatch() Group by the PotdRfBatch column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdrevision() Group by the PotdRevision column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdlandunitcost() Group by the PotdLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdnbrofcases() Group by the PotdNbrOfCases column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdtariffcost() Group by the PotdTariffCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdshopcost() Group by the PotdShopCost column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByPotdcasesord() Group by the PotdCasesOrd column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceivingQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinPoReceivingHead($relationAlias = null) Adds a LEFT JOIN clause to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinPoReceivingHead($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinPoReceivingHead($relationAlias = null) Adds a INNER JOIN clause to the query using the PoReceivingHead relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery joinWithPoReceivingHead($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PoReceivingHead relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinWithPoReceivingHead() Adds a LEFT JOIN clause and with to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinWithPoReceivingHead() Adds a RIGHT JOIN clause and with to the query using the PoReceivingHead relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinWithPoReceivingHead() Adds a INNER JOIN clause and with to the query using the PoReceivingHead relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinPurchaseOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinPurchaseOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinPurchaseOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery joinWithPurchaseOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinWithPurchaseOrderDetail() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinWithPurchaseOrderDetail() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinWithPurchaseOrderDetail() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinUnitofMeasureSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the UnitofMeasureSale relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinUnitofMeasureSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UnitofMeasureSale relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinUnitofMeasureSale($relationAlias = null) Adds a INNER JOIN clause to the query using the UnitofMeasureSale relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery joinWithUnitofMeasureSale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UnitofMeasureSale relation
 *
 * @method     ChildPurchaseOrderDetailReceivingQuery leftJoinWithUnitofMeasureSale() Adds a LEFT JOIN clause and with to the query using the UnitofMeasureSale relation
 * @method     ChildPurchaseOrderDetailReceivingQuery rightJoinWithUnitofMeasureSale() Adds a RIGHT JOIN clause and with to the query using the UnitofMeasureSale relation
 * @method     ChildPurchaseOrderDetailReceivingQuery innerJoinWithUnitofMeasureSale() Adds a INNER JOIN clause and with to the query using the UnitofMeasureSale relation
 *
 * @method     \PurchaseOrderQuery|\PoReceivingHeadQuery|\PurchaseOrderDetailQuery|\ItemMasterItemQuery|\UnitofMeasureSaleQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPurchaseOrderDetailReceiving findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceiving matching the query
 * @method     ChildPurchaseOrderDetailReceiving findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceiving matching the query, or a new ChildPurchaseOrderDetailReceiving object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetailReceiving findOneByPothnbr(int $PothNbr) Return the first ChildPurchaseOrderDetailReceiving filtered by the PothNbr column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdline(int $PotdLine) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdLine column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdseq(int $PotdSeq) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdSeq column
 * @method     ChildPurchaseOrderDetailReceiving findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailReceiving filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotddesc1(string $PotdDesc1) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdDesc1 column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotddesc2(string $PotdDesc2) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdDesc2 column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdvenditemnbr(string $PotdVendItemNbr) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdVendItemNbr column
 * @method     ChildPurchaseOrderDetailReceiving findOneByIntbuompur(string $IntbUomPur) Return the first ChildPurchaseOrderDetailReceiving filtered by the IntbUomPur column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdref(string $PotdRef) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdRef column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdqtyord(string $PotdQtyOrd) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdQtyOrd column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdqtyrec(string $PotdQtyRec) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdQtyRec column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdpurchunitcost(string $PotdPurchUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdPurchUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdpurchtotcost(string $PotdPurchTotCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdPurchTotCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdglacct(string $PotdGlAcct) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdGlAcct column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdclos(string $PotdClos) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdClos column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdshopminutes(int $PotdShopMinutes) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdShopMinutes column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdtype(string $PotdType) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdType column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdforeigncost(string $PotdForeignCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdForeignCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdforeigncosttot(string $PotdForeignCostTot) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdForeignCostTot column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdspecordr(string $PotdSpecOrdr) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdSpecOrdr column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdprodunitcost(string $PotdProdUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdProdUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdbaseunitcost(string $PotdBaseUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdBaseUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdbin(string $PotdBin) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdBin column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdfabreturnscrap(string $PotdFabReturnScrap) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdFabReturnScrap column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdrfbatch(string $PotdRfBatch) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdRfBatch column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdrevision(string $PotdRevision) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdRevision column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdlandunitcost(string $PotdLandUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdnbrofcases(string $PotdNbrOfCases) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdNbrOfCases column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdtariffcost(string $PotdTariffCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdTariffCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdshopcost(string $PotdShopCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdShopCost column
 * @method     ChildPurchaseOrderDetailReceiving findOneByPotdcasesord(int $PotdCasesOrd) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdCasesOrd column
 * @method     ChildPurchaseOrderDetailReceiving findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailReceiving filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceiving findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailReceiving filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceiving findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailReceiving filtered by the dummy column *

 * @method     ChildPurchaseOrderDetailReceiving requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrderDetailReceiving by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceiving matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPothnbr(int $PothNbr) Return the first ChildPurchaseOrderDetailReceiving filtered by the PothNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdline(int $PotdLine) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdseq(int $PotdSeq) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailReceiving filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotddesc1(string $PotdDesc1) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotddesc2(string $PotdDesc2) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdvenditemnbr(string $PotdVendItemNbr) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdVendItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByIntbuompur(string $IntbUomPur) Return the first ChildPurchaseOrderDetailReceiving filtered by the IntbUomPur column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdref(string $PotdRef) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdqtyord(string $PotdQtyOrd) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdQtyOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdqtyrec(string $PotdQtyRec) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdpurchunitcost(string $PotdPurchUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdPurchUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdpurchtotcost(string $PotdPurchTotCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdPurchTotCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdglacct(string $PotdGlAcct) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdclos(string $PotdClos) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdClos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdshopminutes(int $PotdShopMinutes) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdShopMinutes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdtype(string $PotdType) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdforeigncost(string $PotdForeignCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdForeignCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdforeigncosttot(string $PotdForeignCostTot) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdForeignCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdspecordr(string $PotdSpecOrdr) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdprodunitcost(string $PotdProdUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdProdUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdbaseunitcost(string $PotdBaseUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdBaseUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdbin(string $PotdBin) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdfabreturnscrap(string $PotdFabReturnScrap) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdFabReturnScrap column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdrfbatch(string $PotdRfBatch) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdRfBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdrevision(string $PotdRevision) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdlandunitcost(string $PotdLandUnitCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdLandUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdnbrofcases(string $PotdNbrOfCases) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdNbrOfCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdtariffcost(string $PotdTariffCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdshopcost(string $PotdShopCost) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdShopCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByPotdcasesord(int $PotdCasesOrd) Return the first ChildPurchaseOrderDetailReceiving filtered by the PotdCasesOrd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailReceiving filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailReceiving filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceiving requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailReceiving filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrderDetailReceiving objects based on current ModelCriteria
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPothnbr(int $PothNbr) Return ChildPurchaseOrderDetailReceiving objects filtered by the PothNbr column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdline(int $PotdLine) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdLine column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdseq(int $PotdSeq) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdSeq column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildPurchaseOrderDetailReceiving objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotddesc1(string $PotdDesc1) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdDesc1 column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotddesc2(string $PotdDesc2) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdDesc2 column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdvenditemnbr(string $PotdVendItemNbr) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdVendItemNbr column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByIntbuompur(string $IntbUomPur) Return ChildPurchaseOrderDetailReceiving objects filtered by the IntbUomPur column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdref(string $PotdRef) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdRef column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdqtyord(string $PotdQtyOrd) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdQtyOrd column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdqtyrec(string $PotdQtyRec) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdQtyRec column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdpurchunitcost(string $PotdPurchUnitCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdPurchUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdpurchtotcost(string $PotdPurchTotCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdPurchTotCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdglacct(string $PotdGlAcct) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdGlAcct column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdclos(string $PotdClos) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdClos column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdshopminutes(int $PotdShopMinutes) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdShopMinutes column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdtype(string $PotdType) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdType column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdforeigncost(string $PotdForeignCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdForeignCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdforeigncosttot(string $PotdForeignCostTot) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdForeignCostTot column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdspecordr(string $PotdSpecOrdr) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdSpecOrdr column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdprodunitcost(string $PotdProdUnitCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdProdUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdbaseunitcost(string $PotdBaseUnitCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdBaseUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdbin(string $PotdBin) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdBin column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdfabreturnscrap(string $PotdFabReturnScrap) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdFabReturnScrap column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdrfbatch(string $PotdRfBatch) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdRfBatch column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdrevision(string $PotdRevision) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdRevision column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdlandunitcost(string $PotdLandUnitCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdnbrofcases(string $PotdNbrOfCases) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdNbrOfCases column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdtariffcost(string $PotdTariffCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdTariffCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdshopcost(string $PotdShopCost) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdShopCost column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByPotdcasesord(int $PotdCasesOrd) Return ChildPurchaseOrderDetailReceiving objects filtered by the PotdCasesOrd column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrderDetailReceiving objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrderDetailReceiving objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceiving[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrderDetailReceiving objects filtered by the dummy column
 * @method     ChildPurchaseOrderDetailReceiving[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderDetailReceivingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailReceivingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetailReceiving', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailReceivingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailReceivingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPurchaseOrderDetailReceivingQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderDetailReceivingQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$PothNbr, $PotdLine, $PotdSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPurchaseOrderDetailReceiving|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderDetailReceivingTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildPurchaseOrderDetailReceiving A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PothNbr, PotdLine, PotdSeq, InitItemNbr, PotdDesc1, PotdDesc2, PotdVendItemNbr, IntbUomPur, PotdRef, PotdQtyOrd, PotdQtyRec, PotdPurchUnitCost, PotdPurchTotCost, PotdGlAcct, PotdClos, PotdShopMinutes, PotdType, PotdForeignCost, PotdForeignCostTot, PotdSpecOrdr, PotdProdUnitCost, PotdBaseUnitCost, PotdBin, PotdFabReturnScrap, PotdRfBatch, PotdRevision, PotdLandUnitCost, PotdNbrOfCases, PotdTariffCost, PotdShopCost, PotdCasesOrd, DateUpdtd, TimeUpdtd, dummy FROM po_tran_det WHERE PothNbr = :p0 AND PotdLine = :p1 AND PotdSeq = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPurchaseOrderDetailReceiving $obj */
            $obj = new ChildPurchaseOrderDetailReceiving();
            $obj->hydrate($row);
            PurchaseOrderDetailReceivingTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildPurchaseOrderDetailReceiving|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PothNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothnbr(1234); // WHERE PothNbr = 1234
     * $query->filterByPothnbr(array(12, 34)); // WHERE PothNbr IN (12, 34)
     * $query->filterByPothnbr(array('min' => 12)); // WHERE PothNbr > 12
     * </code>
     *
     * @see       filterByPurchaseOrder()
     *
     * @see       filterByPoReceivingHead()
     *
     * @see       filterByPurchaseOrderDetail()
     *
     * @param     mixed $pothnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPothnbr($pothnbr = null, $comparison = null)
    {
        if (is_array($pothnbr)) {
            $useMinMax = false;
            if (isset($pothnbr['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $pothnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothnbr['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $pothnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $pothnbr, $comparison);
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
     * @param     mixed $potdline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdline($potdline = null, $comparison = null)
    {
        if (is_array($potdline)) {
            $useMinMax = false;
            if (isset($potdline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $potdline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $potdline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $potdline, $comparison);
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
     * @param     mixed $potdseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdseq($potdseq = null, $comparison = null)
    {
        if (is_array($potdseq)) {
            $useMinMax = false;
            if (isset($potdseq['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $potdseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdseq['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $potdseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ, $potdseq, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the PotdDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPotddesc1('fooValue');   // WHERE PotdDesc1 = 'fooValue'
     * $query->filterByPotddesc1('%fooValue%', Criteria::LIKE); // WHERE PotdDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potddesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotddesc1($potddesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potddesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC1, $potddesc1, $comparison);
    }

    /**
     * Filter the query on the PotdDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPotddesc2('fooValue');   // WHERE PotdDesc2 = 'fooValue'
     * $query->filterByPotddesc2('%fooValue%', Criteria::LIKE); // WHERE PotdDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potddesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotddesc2($potddesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potddesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDDESC2, $potddesc2, $comparison);
    }

    /**
     * Filter the query on the PotdVendItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdvenditemnbr('fooValue');   // WHERE PotdVendItemNbr = 'fooValue'
     * $query->filterByPotdvenditemnbr('%fooValue%', Criteria::LIKE); // WHERE PotdVendItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdvenditemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdvenditemnbr($potdvenditemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdvenditemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDVENDITEMNBR, $potdvenditemnbr, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);
    }

    /**
     * Filter the query on the PotdRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdref('fooValue');   // WHERE PotdRef = 'fooValue'
     * $query->filterByPotdref('%fooValue%', Criteria::LIKE); // WHERE PotdRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdref($potdref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDREF, $potdref, $comparison);
    }

    /**
     * Filter the query on the PotdQtyOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdqtyord(1234); // WHERE PotdQtyOrd = 1234
     * $query->filterByPotdqtyord(array(12, 34)); // WHERE PotdQtyOrd IN (12, 34)
     * $query->filterByPotdqtyord(array('min' => 12)); // WHERE PotdQtyOrd > 12
     * </code>
     *
     * @param     mixed $potdqtyord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdqtyord($potdqtyord = null, $comparison = null)
    {
        if (is_array($potdqtyord)) {
            $useMinMax = false;
            if (isset($potdqtyord['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD, $potdqtyord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdqtyord['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD, $potdqtyord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYORD, $potdqtyord, $comparison);
    }

    /**
     * Filter the query on the PotdQtyRec column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdqtyrec(1234); // WHERE PotdQtyRec = 1234
     * $query->filterByPotdqtyrec(array(12, 34)); // WHERE PotdQtyRec IN (12, 34)
     * $query->filterByPotdqtyrec(array('min' => 12)); // WHERE PotdQtyRec > 12
     * </code>
     *
     * @param     mixed $potdqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdqtyrec($potdqtyrec = null, $comparison = null)
    {
        if (is_array($potdqtyrec)) {
            $useMinMax = false;
            if (isset($potdqtyrec['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC, $potdqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdqtyrec['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC, $potdqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDQTYREC, $potdqtyrec, $comparison);
    }

    /**
     * Filter the query on the PotdPurchUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdpurchunitcost(1234); // WHERE PotdPurchUnitCost = 1234
     * $query->filterByPotdpurchunitcost(array(12, 34)); // WHERE PotdPurchUnitCost IN (12, 34)
     * $query->filterByPotdpurchunitcost(array('min' => 12)); // WHERE PotdPurchUnitCost > 12
     * </code>
     *
     * @param     mixed $potdpurchunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdpurchunitcost($potdpurchunitcost = null, $comparison = null)
    {
        if (is_array($potdpurchunitcost)) {
            $useMinMax = false;
            if (isset($potdpurchunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST, $potdpurchunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdpurchunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST, $potdpurchunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHUNITCOST, $potdpurchunitcost, $comparison);
    }

    /**
     * Filter the query on the PotdPurchTotCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdpurchtotcost(1234); // WHERE PotdPurchTotCost = 1234
     * $query->filterByPotdpurchtotcost(array(12, 34)); // WHERE PotdPurchTotCost IN (12, 34)
     * $query->filterByPotdpurchtotcost(array('min' => 12)); // WHERE PotdPurchTotCost > 12
     * </code>
     *
     * @param     mixed $potdpurchtotcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdpurchtotcost($potdpurchtotcost = null, $comparison = null)
    {
        if (is_array($potdpurchtotcost)) {
            $useMinMax = false;
            if (isset($potdpurchtotcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST, $potdpurchtotcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdpurchtotcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST, $potdpurchtotcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPURCHTOTCOST, $potdpurchtotcost, $comparison);
    }

    /**
     * Filter the query on the PotdGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdglacct('fooValue');   // WHERE PotdGlAcct = 'fooValue'
     * $query->filterByPotdglacct('%fooValue%', Criteria::LIKE); // WHERE PotdGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdglacct($potdglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDGLACCT, $potdglacct, $comparison);
    }

    /**
     * Filter the query on the PotdClos column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdclos('fooValue');   // WHERE PotdClos = 'fooValue'
     * $query->filterByPotdclos('%fooValue%', Criteria::LIKE); // WHERE PotdClos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdclos The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdclos($potdclos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdclos)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDCLOS, $potdclos, $comparison);
    }

    /**
     * Filter the query on the PotdShopMinutes column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdshopminutes(1234); // WHERE PotdShopMinutes = 1234
     * $query->filterByPotdshopminutes(array(12, 34)); // WHERE PotdShopMinutes IN (12, 34)
     * $query->filterByPotdshopminutes(array('min' => 12)); // WHERE PotdShopMinutes > 12
     * </code>
     *
     * @param     mixed $potdshopminutes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdshopminutes($potdshopminutes = null, $comparison = null)
    {
        if (is_array($potdshopminutes)) {
            $useMinMax = false;
            if (isset($potdshopminutes['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES, $potdshopminutes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdshopminutes['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES, $potdshopminutes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPMINUTES, $potdshopminutes, $comparison);
    }

    /**
     * Filter the query on the PotdType column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdtype('fooValue');   // WHERE PotdType = 'fooValue'
     * $query->filterByPotdtype('%fooValue%', Criteria::LIKE); // WHERE PotdType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdtype($potdtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDTYPE, $potdtype, $comparison);
    }

    /**
     * Filter the query on the PotdForeignCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdforeigncost(1234); // WHERE PotdForeignCost = 1234
     * $query->filterByPotdforeigncost(array(12, 34)); // WHERE PotdForeignCost IN (12, 34)
     * $query->filterByPotdforeigncost(array('min' => 12)); // WHERE PotdForeignCost > 12
     * </code>
     *
     * @param     mixed $potdforeigncost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdforeigncost($potdforeigncost = null, $comparison = null)
    {
        if (is_array($potdforeigncost)) {
            $useMinMax = false;
            if (isset($potdforeigncost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST, $potdforeigncost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdforeigncost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST, $potdforeigncost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOST, $potdforeigncost, $comparison);
    }

    /**
     * Filter the query on the PotdForeignCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdforeigncosttot(1234); // WHERE PotdForeignCostTot = 1234
     * $query->filterByPotdforeigncosttot(array(12, 34)); // WHERE PotdForeignCostTot IN (12, 34)
     * $query->filterByPotdforeigncosttot(array('min' => 12)); // WHERE PotdForeignCostTot > 12
     * </code>
     *
     * @param     mixed $potdforeigncosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdforeigncosttot($potdforeigncosttot = null, $comparison = null)
    {
        if (is_array($potdforeigncosttot)) {
            $useMinMax = false;
            if (isset($potdforeigncosttot['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT, $potdforeigncosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdforeigncosttot['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT, $potdforeigncosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFOREIGNCOSTTOT, $potdforeigncosttot, $comparison);
    }

    /**
     * Filter the query on the PotdSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdspecordr('fooValue');   // WHERE PotdSpecOrdr = 'fooValue'
     * $query->filterByPotdspecordr('%fooValue%', Criteria::LIKE); // WHERE PotdSpecOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdspecordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdspecordr($potdspecordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSPECORDR, $potdspecordr, $comparison);
    }

    /**
     * Filter the query on the PotdProdUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdprodunitcost(1234); // WHERE PotdProdUnitCost = 1234
     * $query->filterByPotdprodunitcost(array(12, 34)); // WHERE PotdProdUnitCost IN (12, 34)
     * $query->filterByPotdprodunitcost(array('min' => 12)); // WHERE PotdProdUnitCost > 12
     * </code>
     *
     * @param     mixed $potdprodunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdprodunitcost($potdprodunitcost = null, $comparison = null)
    {
        if (is_array($potdprodunitcost)) {
            $useMinMax = false;
            if (isset($potdprodunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST, $potdprodunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdprodunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST, $potdprodunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDPRODUNITCOST, $potdprodunitcost, $comparison);
    }

    /**
     * Filter the query on the PotdBaseUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdbaseunitcost(1234); // WHERE PotdBaseUnitCost = 1234
     * $query->filterByPotdbaseunitcost(array(12, 34)); // WHERE PotdBaseUnitCost IN (12, 34)
     * $query->filterByPotdbaseunitcost(array('min' => 12)); // WHERE PotdBaseUnitCost > 12
     * </code>
     *
     * @param     mixed $potdbaseunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdbaseunitcost($potdbaseunitcost = null, $comparison = null)
    {
        if (is_array($potdbaseunitcost)) {
            $useMinMax = false;
            if (isset($potdbaseunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST, $potdbaseunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdbaseunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST, $potdbaseunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDBASEUNITCOST, $potdbaseunitcost, $comparison);
    }

    /**
     * Filter the query on the PotdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdbin('fooValue');   // WHERE PotdBin = 'fooValue'
     * $query->filterByPotdbin('%fooValue%', Criteria::LIKE); // WHERE PotdBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdbin($potdbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDBIN, $potdbin, $comparison);
    }

    /**
     * Filter the query on the PotdFabReturnScrap column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdfabreturnscrap('fooValue');   // WHERE PotdFabReturnScrap = 'fooValue'
     * $query->filterByPotdfabreturnscrap('%fooValue%', Criteria::LIKE); // WHERE PotdFabReturnScrap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdfabreturnscrap The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdfabreturnscrap($potdfabreturnscrap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdfabreturnscrap)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDFABRETURNSCRAP, $potdfabreturnscrap, $comparison);
    }

    /**
     * Filter the query on the PotdRfBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdrfbatch('fooValue');   // WHERE PotdRfBatch = 'fooValue'
     * $query->filterByPotdrfbatch('%fooValue%', Criteria::LIKE); // WHERE PotdRfBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdrfbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdrfbatch($potdrfbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdrfbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDRFBATCH, $potdrfbatch, $comparison);
    }

    /**
     * Filter the query on the PotdRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdrevision('fooValue');   // WHERE PotdRevision = 'fooValue'
     * $query->filterByPotdrevision('%fooValue%', Criteria::LIKE); // WHERE PotdRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potdrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdrevision($potdrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potdrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDREVISION, $potdrevision, $comparison);
    }

    /**
     * Filter the query on the PotdLandUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdlandunitcost(1234); // WHERE PotdLandUnitCost = 1234
     * $query->filterByPotdlandunitcost(array(12, 34)); // WHERE PotdLandUnitCost IN (12, 34)
     * $query->filterByPotdlandunitcost(array('min' => 12)); // WHERE PotdLandUnitCost > 12
     * </code>
     *
     * @param     mixed $potdlandunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdlandunitcost($potdlandunitcost = null, $comparison = null)
    {
        if (is_array($potdlandunitcost)) {
            $useMinMax = false;
            if (isset($potdlandunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST, $potdlandunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdlandunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST, $potdlandunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLANDUNITCOST, $potdlandunitcost, $comparison);
    }

    /**
     * Filter the query on the PotdNbrOfCases column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdnbrofcases(1234); // WHERE PotdNbrOfCases = 1234
     * $query->filterByPotdnbrofcases(array(12, 34)); // WHERE PotdNbrOfCases IN (12, 34)
     * $query->filterByPotdnbrofcases(array('min' => 12)); // WHERE PotdNbrOfCases > 12
     * </code>
     *
     * @param     mixed $potdnbrofcases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdnbrofcases($potdnbrofcases = null, $comparison = null)
    {
        if (is_array($potdnbrofcases)) {
            $useMinMax = false;
            if (isset($potdnbrofcases['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES, $potdnbrofcases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdnbrofcases['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES, $potdnbrofcases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDNBROFCASES, $potdnbrofcases, $comparison);
    }

    /**
     * Filter the query on the PotdTariffCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdtariffcost(1234); // WHERE PotdTariffCost = 1234
     * $query->filterByPotdtariffcost(array(12, 34)); // WHERE PotdTariffCost IN (12, 34)
     * $query->filterByPotdtariffcost(array('min' => 12)); // WHERE PotdTariffCost > 12
     * </code>
     *
     * @param     mixed $potdtariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdtariffcost($potdtariffcost = null, $comparison = null)
    {
        if (is_array($potdtariffcost)) {
            $useMinMax = false;
            if (isset($potdtariffcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST, $potdtariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdtariffcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST, $potdtariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDTARIFFCOST, $potdtariffcost, $comparison);
    }

    /**
     * Filter the query on the PotdShopCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdshopcost(1234); // WHERE PotdShopCost = 1234
     * $query->filterByPotdshopcost(array(12, 34)); // WHERE PotdShopCost IN (12, 34)
     * $query->filterByPotdshopcost(array('min' => 12)); // WHERE PotdShopCost > 12
     * </code>
     *
     * @param     mixed $potdshopcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdshopcost($potdshopcost = null, $comparison = null)
    {
        if (is_array($potdshopcost)) {
            $useMinMax = false;
            if (isset($potdshopcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST, $potdshopcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdshopcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST, $potdshopcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDSHOPCOST, $potdshopcost, $comparison);
    }

    /**
     * Filter the query on the PotdCasesOrd column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdcasesord(1234); // WHERE PotdCasesOrd = 1234
     * $query->filterByPotdcasesord(array(12, 34)); // WHERE PotdCasesOrd IN (12, 34)
     * $query->filterByPotdcasesord(array('min' => 12)); // WHERE PotdCasesOrd > 12
     * </code>
     *
     * @param     mixed $potdcasesord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdcasesord($potdcasesord = null, $comparison = null)
    {
        if (is_array($potdcasesord)) {
            $useMinMax = false;
            if (isset($potdcasesord['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDCASESORD, $potdcasesord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdcasesord['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDCASESORD, $potdcasesord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDCASESORD, $potdcasesord, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
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
     * Filter the query by a related \PoReceivingHead object
     *
     * @param \PoReceivingHead|ObjectCollection $poReceivingHead The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPoReceivingHead($poReceivingHead, $comparison = null)
    {
        if ($poReceivingHead instanceof \PoReceivingHead) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $poReceivingHead->getPothnbr(), $comparison);
        } elseif ($poReceivingHead instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $poReceivingHead->toKeyValue('PrimaryKey', 'Pothnbr'), $comparison);
        } else {
            throw new PropelException('filterByPoReceivingHead() only accepts arguments of type \PoReceivingHead or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PoReceivingHead relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function joinPoReceivingHead($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \PurchaseOrderDetail object
     *
     * @param \PurchaseOrderDetail $purchaseOrderDetail The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetail($purchaseOrderDetail, $comparison = null)
    {
        if ($purchaseOrderDetail instanceof \PurchaseOrderDetail) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR, $purchaseOrderDetail->getPohdnbr(), $comparison)
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE, $purchaseOrderDetail->getPodtline(), $comparison);
        } else {
            throw new PropelException('filterByPurchaseOrderDetail() only accepts arguments of type \PurchaseOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function joinPurchaseOrderDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
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
     * Filter the query by a related \UnitofMeasureSale object
     *
     * @param \UnitofMeasureSale|ObjectCollection $unitofMeasureSale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function filterByUnitofMeasureSale($unitofMeasureSale, $comparison = null)
    {
        if ($unitofMeasureSale instanceof \UnitofMeasureSale) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR, $unitofMeasureSale->getIntbuomsale(), $comparison);
        } elseif ($unitofMeasureSale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PurchaseOrderDetailReceivingTableMap::COL_INTBUOMPUR, $unitofMeasureSale->toKeyValue('PrimaryKey', 'Intbuomsale'), $comparison);
        } else {
            throw new PropelException('filterByUnitofMeasureSale() only accepts arguments of type \UnitofMeasureSale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasureSale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function joinUnitofMeasureSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UnitofMeasureSale');

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
            $this->addJoinObject($join, 'UnitofMeasureSale');
        }

        return $this;
    }

    /**
     * Use the UnitofMeasureSale relation UnitofMeasureSale object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UnitofMeasureSaleQuery A secondary query class using the current class as primary query
     */
    public function useUnitofMeasureSaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUnitofMeasureSale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UnitofMeasureSale', '\UnitofMeasureSaleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderDetailReceivingQuery The current query, for fluid interface
     */
    public function prune($purchaseOrderDetailReceiving = null)
    {
        if ($purchaseOrderDetailReceiving) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderDetailReceivingTableMap::COL_POTHNBR), $purchaseOrderDetailReceiving->getPothnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderDetailReceivingTableMap::COL_POTDLINE), $purchaseOrderDetailReceiving->getPotdline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderDetailReceivingTableMap::COL_POTDSEQ), $purchaseOrderDetailReceiving->getPotdseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_tran_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderDetailReceivingTableMap::clearInstancePool();
            PurchaseOrderDetailReceivingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderDetailReceivingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderDetailReceivingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderDetailReceivingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PurchaseOrderDetailReceivingQuery
