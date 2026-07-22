<?php

namespace Base;

use \Warehouse as ChildWarehouse;
use \WarehouseQuery as ChildWarehouseQuery;
use \Exception;
use \PDO;
use Map\WarehouseTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_whse_code` table.
 *
 * @method     ChildWarehouseQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWarehouseQuery orderByIntbwhsename($order = Criteria::ASC) Order by the IntbWhseName column
 * @method     ChildWarehouseQuery orderByIntbwhseadr1($order = Criteria::ASC) Order by the IntbWhseAdr1 column
 * @method     ChildWarehouseQuery orderByIntbwhseadr2($order = Criteria::ASC) Order by the IntbWhseAdr2 column
 * @method     ChildWarehouseQuery orderByIntbwhsecity($order = Criteria::ASC) Order by the IntbWhseCity column
 * @method     ChildWarehouseQuery orderByIntbwhsestat($order = Criteria::ASC) Order by the IntbWhseStat column
 * @method     ChildWarehouseQuery orderByIntbwhsezipcode($order = Criteria::ASC) Order by the IntbWhseZipCode column
 * @method     ChildWarehouseQuery orderByIntbwhsectry($order = Criteria::ASC) Order by the IntbWhseCtry column
 * @method     ChildWarehouseQuery orderByIntbwhseusehandheld($order = Criteria::ASC) Order by the IntbWhseUseHandheld column
 * @method     ChildWarehouseQuery orderByIntbwhsecashcust($order = Criteria::ASC) Order by the IntbWhseCashCust column
 * @method     ChildWarehouseQuery orderByIntbwhsepickdtl($order = Criteria::ASC) Order by the IntbWhsePickDtl column
 * @method     ChildWarehouseQuery orderByIntbwhseprodbin($order = Criteria::ASC) Order by the IntbWhseProdBin column
 * @method     ChildWarehouseQuery orderByIntbwhsepharea($order = Criteria::ASC) Order by the IntbWhsePhArea column
 * @method     ChildWarehouseQuery orderByIntbwhsephfrst3($order = Criteria::ASC) Order by the IntbWhsePhFrst3 column
 * @method     ChildWarehouseQuery orderByIntbwhsephlast4($order = Criteria::ASC) Order by the IntbWhsePhLast4 column
 * @method     ChildWarehouseQuery orderByIntbwhsephext($order = Criteria::ASC) Order by the IntbWhsePhExt column
 * @method     ChildWarehouseQuery orderByIntbwhsefaxarea($order = Criteria::ASC) Order by the IntbWhseFaxArea column
 * @method     ChildWarehouseQuery orderByIntbwhsefaxfrst3($order = Criteria::ASC) Order by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouseQuery orderByIntbwhsefaxlast4($order = Criteria::ASC) Order by the IntbWhseFaxLast4 column
 * @method     ChildWarehouseQuery orderByIntbwhseemailadr($order = Criteria::ASC) Order by the IntbWhseEmailAdr column
 * @method     ChildWarehouseQuery orderByIntbwhseqcrgabin($order = Criteria::ASC) Order by the IntbWhseQcRgaBin column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter1($order = Criteria::ASC) Order by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter2($order = Criteria::ASC) Order by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter3($order = Criteria::ASC) Order by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter4($order = Criteria::ASC) Order by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouseQuery orderByIntbwhserfprinter5($order = Criteria::ASC) Order by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouseQuery orderByIntbwhseprofwhse($order = Criteria::ASC) Order by the IntbWhseProfWhse column
 * @method     ChildWarehouseQuery orderByIntbwhseasetwhse($order = Criteria::ASC) Order by the IntbWhseAsetWhse column
 * @method     ChildWarehouseQuery orderByIntbwhseconsignwhse($order = Criteria::ASC) Order by the IntbWhseConsignWhse column
 * @method     ChildWarehouseQuery orderByIntbwhsebinrangelist($order = Criteria::ASC) Order by the IntbWhseBinRangeList column
 * @method     ChildWarehouseQuery orderByIntbwhsesupplywhse($order = Criteria::ASC) Order by the IntbWhseSupplyWhse column
 * @method     ChildWarehouseQuery orderByIntbwhseareasplit($order = Criteria::ASC) Order by the IntbWhseAreaSplit column
 * @method     ChildWarehouseQuery orderByIntbwhsercvbincode($order = Criteria::ASC) Order by the IntbWhseRcvBinCode column
 * @method     ChildWarehouseQuery orderByIntbwhsercvbin($order = Criteria::ASC) Order by the IntbWhseRcvBin column
 * @method     ChildWarehouseQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarehouseQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarehouseQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWarehouseQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWarehouseQuery groupByIntbwhsename() Group by the IntbWhseName column
 * @method     ChildWarehouseQuery groupByIntbwhseadr1() Group by the IntbWhseAdr1 column
 * @method     ChildWarehouseQuery groupByIntbwhseadr2() Group by the IntbWhseAdr2 column
 * @method     ChildWarehouseQuery groupByIntbwhsecity() Group by the IntbWhseCity column
 * @method     ChildWarehouseQuery groupByIntbwhsestat() Group by the IntbWhseStat column
 * @method     ChildWarehouseQuery groupByIntbwhsezipcode() Group by the IntbWhseZipCode column
 * @method     ChildWarehouseQuery groupByIntbwhsectry() Group by the IntbWhseCtry column
 * @method     ChildWarehouseQuery groupByIntbwhseusehandheld() Group by the IntbWhseUseHandheld column
 * @method     ChildWarehouseQuery groupByIntbwhsecashcust() Group by the IntbWhseCashCust column
 * @method     ChildWarehouseQuery groupByIntbwhsepickdtl() Group by the IntbWhsePickDtl column
 * @method     ChildWarehouseQuery groupByIntbwhseprodbin() Group by the IntbWhseProdBin column
 * @method     ChildWarehouseQuery groupByIntbwhsepharea() Group by the IntbWhsePhArea column
 * @method     ChildWarehouseQuery groupByIntbwhsephfrst3() Group by the IntbWhsePhFrst3 column
 * @method     ChildWarehouseQuery groupByIntbwhsephlast4() Group by the IntbWhsePhLast4 column
 * @method     ChildWarehouseQuery groupByIntbwhsephext() Group by the IntbWhsePhExt column
 * @method     ChildWarehouseQuery groupByIntbwhsefaxarea() Group by the IntbWhseFaxArea column
 * @method     ChildWarehouseQuery groupByIntbwhsefaxfrst3() Group by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouseQuery groupByIntbwhsefaxlast4() Group by the IntbWhseFaxLast4 column
 * @method     ChildWarehouseQuery groupByIntbwhseemailadr() Group by the IntbWhseEmailAdr column
 * @method     ChildWarehouseQuery groupByIntbwhseqcrgabin() Group by the IntbWhseQcRgaBin column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter1() Group by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter2() Group by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter3() Group by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter4() Group by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouseQuery groupByIntbwhserfprinter5() Group by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouseQuery groupByIntbwhseprofwhse() Group by the IntbWhseProfWhse column
 * @method     ChildWarehouseQuery groupByIntbwhseasetwhse() Group by the IntbWhseAsetWhse column
 * @method     ChildWarehouseQuery groupByIntbwhseconsignwhse() Group by the IntbWhseConsignWhse column
 * @method     ChildWarehouseQuery groupByIntbwhsebinrangelist() Group by the IntbWhseBinRangeList column
 * @method     ChildWarehouseQuery groupByIntbwhsesupplywhse() Group by the IntbWhseSupplyWhse column
 * @method     ChildWarehouseQuery groupByIntbwhseareasplit() Group by the IntbWhseAreaSplit column
 * @method     ChildWarehouseQuery groupByIntbwhsercvbincode() Group by the IntbWhseRcvBinCode column
 * @method     ChildWarehouseQuery groupByIntbwhsercvbin() Group by the IntbWhseRcvBin column
 * @method     ChildWarehouseQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarehouseQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarehouseQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWarehouseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarehouseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarehouseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarehouseQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarehouseQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarehouseQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarehouseQuery leftJoinInvWhseItemBin($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseQuery rightJoinInvWhseItemBin($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseQuery innerJoinInvWhseItemBin($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseItemBin relation
 *
 * @method     ChildWarehouseQuery joinWithInvWhseItemBin($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseItemBin relation
 *
 * @method     ChildWarehouseQuery leftJoinWithInvWhseItemBin() Adds a LEFT JOIN clause and with to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseQuery rightJoinWithInvWhseItemBin() Adds a RIGHT JOIN clause and with to the query using the InvWhseItemBin relation
 * @method     ChildWarehouseQuery innerJoinWithInvWhseItemBin() Adds a INNER JOIN clause and with to the query using the InvWhseItemBin relation
 *
 * @method     ChildWarehouseQuery leftJoinWarehouseBin($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseBin relation
 * @method     ChildWarehouseQuery rightJoinWarehouseBin($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseBin relation
 * @method     ChildWarehouseQuery innerJoinWarehouseBin($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseBin relation
 *
 * @method     ChildWarehouseQuery joinWithWarehouseBin($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseBin relation
 *
 * @method     ChildWarehouseQuery leftJoinWithWarehouseBin() Adds a LEFT JOIN clause and with to the query using the WarehouseBin relation
 * @method     ChildWarehouseQuery rightJoinWithWarehouseBin() Adds a RIGHT JOIN clause and with to the query using the WarehouseBin relation
 * @method     ChildWarehouseQuery innerJoinWithWarehouseBin() Adds a INNER JOIN clause and with to the query using the WarehouseBin relation
 *
 * @method     ChildWarehouseQuery leftJoinInvWhseLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildWarehouseQuery rightJoinInvWhseLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildWarehouseQuery innerJoinInvWhseLot($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseLot relation
 *
 * @method     ChildWarehouseQuery joinWithInvWhseLot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildWarehouseQuery leftJoinWithInvWhseLot() Adds a LEFT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildWarehouseQuery rightJoinWithInvWhseLot() Adds a RIGHT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildWarehouseQuery innerJoinWithInvWhseLot() Adds a INNER JOIN clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildWarehouseQuery leftJoinInvLotTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotTag relation
 * @method     ChildWarehouseQuery rightJoinInvLotTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotTag relation
 * @method     ChildWarehouseQuery innerJoinInvLotTag($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotTag relation
 *
 * @method     ChildWarehouseQuery joinWithInvLotTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotTag relation
 *
 * @method     ChildWarehouseQuery leftJoinWithInvLotTag() Adds a LEFT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildWarehouseQuery rightJoinWithInvLotTag() Adds a RIGHT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildWarehouseQuery innerJoinWithInvLotTag() Adds a INNER JOIN clause and with to the query using the InvLotTag relation
 *
 * @method     ChildWarehouseQuery leftJoinInvTransferOrderRelatedByIntbwhsefrom($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 * @method     ChildWarehouseQuery rightJoinInvTransferOrderRelatedByIntbwhsefrom($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 * @method     ChildWarehouseQuery innerJoinInvTransferOrderRelatedByIntbwhsefrom($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 *
 * @method     ChildWarehouseQuery joinWithInvTransferOrderRelatedByIntbwhsefrom($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 *
 * @method     ChildWarehouseQuery leftJoinWithInvTransferOrderRelatedByIntbwhsefrom() Adds a LEFT JOIN clause and with to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 * @method     ChildWarehouseQuery rightJoinWithInvTransferOrderRelatedByIntbwhsefrom() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 * @method     ChildWarehouseQuery innerJoinWithInvTransferOrderRelatedByIntbwhsefrom() Adds a INNER JOIN clause and with to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
 *
 * @method     ChildWarehouseQuery leftJoinInvTransferOrderRelatedByIntbwhseto($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrderRelatedByIntbwhseto relation
 * @method     ChildWarehouseQuery rightJoinInvTransferOrderRelatedByIntbwhseto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrderRelatedByIntbwhseto relation
 * @method     ChildWarehouseQuery innerJoinInvTransferOrderRelatedByIntbwhseto($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrderRelatedByIntbwhseto relation
 *
 * @method     ChildWarehouseQuery joinWithInvTransferOrderRelatedByIntbwhseto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrderRelatedByIntbwhseto relation
 *
 * @method     ChildWarehouseQuery leftJoinWithInvTransferOrderRelatedByIntbwhseto() Adds a LEFT JOIN clause and with to the query using the InvTransferOrderRelatedByIntbwhseto relation
 * @method     ChildWarehouseQuery rightJoinWithInvTransferOrderRelatedByIntbwhseto() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrderRelatedByIntbwhseto relation
 * @method     ChildWarehouseQuery innerJoinWithInvTransferOrderRelatedByIntbwhseto() Adds a INNER JOIN clause and with to the query using the InvTransferOrderRelatedByIntbwhseto relation
 *
 * @method     ChildWarehouseQuery leftJoinWarehouseInventory($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseInventory relation
 * @method     ChildWarehouseQuery rightJoinWarehouseInventory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseInventory relation
 * @method     ChildWarehouseQuery innerJoinWarehouseInventory($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseInventory relation
 *
 * @method     ChildWarehouseQuery joinWithWarehouseInventory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseInventory relation
 *
 * @method     ChildWarehouseQuery leftJoinWithWarehouseInventory() Adds a LEFT JOIN clause and with to the query using the WarehouseInventory relation
 * @method     ChildWarehouseQuery rightJoinWithWarehouseInventory() Adds a RIGHT JOIN clause and with to the query using the WarehouseInventory relation
 * @method     ChildWarehouseQuery innerJoinWithWarehouseInventory() Adds a INNER JOIN clause and with to the query using the WarehouseInventory relation
 *
 * @method     ChildWarehouseQuery leftJoinWarehouseNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery rightJoinWarehouseNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery innerJoinWarehouseNote($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseNote relation
 *
 * @method     ChildWarehouseQuery joinWithWarehouseNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseNote relation
 *
 * @method     ChildWarehouseQuery leftJoinWithWarehouseNote() Adds a LEFT JOIN clause and with to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery rightJoinWithWarehouseNote() Adds a RIGHT JOIN clause and with to the query using the WarehouseNote relation
 * @method     ChildWarehouseQuery innerJoinWithWarehouseNote() Adds a INNER JOIN clause and with to the query using the WarehouseNote relation
 *
 * @method     ChildWarehouseQuery leftJoinPoReceivingHead($relationAlias = null) Adds a LEFT JOIN clause to the query using the PoReceivingHead relation
 * @method     ChildWarehouseQuery rightJoinPoReceivingHead($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PoReceivingHead relation
 * @method     ChildWarehouseQuery innerJoinPoReceivingHead($relationAlias = null) Adds a INNER JOIN clause to the query using the PoReceivingHead relation
 *
 * @method     ChildWarehouseQuery joinWithPoReceivingHead($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PoReceivingHead relation
 *
 * @method     ChildWarehouseQuery leftJoinWithPoReceivingHead() Adds a LEFT JOIN clause and with to the query using the PoReceivingHead relation
 * @method     ChildWarehouseQuery rightJoinWithPoReceivingHead() Adds a RIGHT JOIN clause and with to the query using the PoReceivingHead relation
 * @method     ChildWarehouseQuery innerJoinWithPoReceivingHead() Adds a INNER JOIN clause and with to the query using the PoReceivingHead relation
 *
 * @method     \InvWhseItemBinQuery|\WarehouseBinQuery|\InvWhseLotQuery|\InvLotTagQuery|\InvTransferOrderQuery|\InvTransferOrderQuery|\WarehouseInventoryQuery|\WarehouseNoteQuery|\PoReceivingHeadQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildWarehouse|null findOne(?ConnectionInterface $con = null) Return the first ChildWarehouse matching the query
 * @method     ChildWarehouse findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildWarehouse matching the query, or a new ChildWarehouse object populated from the query conditions when no match is found
 *
 * @method     ChildWarehouse|null findOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouse filtered by the IntbWhse column
 * @method     ChildWarehouse|null findOneByIntbwhsename(string $IntbWhseName) Return the first ChildWarehouse filtered by the IntbWhseName column
 * @method     ChildWarehouse|null findOneByIntbwhseadr1(string $IntbWhseAdr1) Return the first ChildWarehouse filtered by the IntbWhseAdr1 column
 * @method     ChildWarehouse|null findOneByIntbwhseadr2(string $IntbWhseAdr2) Return the first ChildWarehouse filtered by the IntbWhseAdr2 column
 * @method     ChildWarehouse|null findOneByIntbwhsecity(string $IntbWhseCity) Return the first ChildWarehouse filtered by the IntbWhseCity column
 * @method     ChildWarehouse|null findOneByIntbwhsestat(string $IntbWhseStat) Return the first ChildWarehouse filtered by the IntbWhseStat column
 * @method     ChildWarehouse|null findOneByIntbwhsezipcode(string $IntbWhseZipCode) Return the first ChildWarehouse filtered by the IntbWhseZipCode column
 * @method     ChildWarehouse|null findOneByIntbwhsectry(string $IntbWhseCtry) Return the first ChildWarehouse filtered by the IntbWhseCtry column
 * @method     ChildWarehouse|null findOneByIntbwhseusehandheld(string $IntbWhseUseHandheld) Return the first ChildWarehouse filtered by the IntbWhseUseHandheld column
 * @method     ChildWarehouse|null findOneByIntbwhsecashcust(string $IntbWhseCashCust) Return the first ChildWarehouse filtered by the IntbWhseCashCust column
 * @method     ChildWarehouse|null findOneByIntbwhsepickdtl(string $IntbWhsePickDtl) Return the first ChildWarehouse filtered by the IntbWhsePickDtl column
 * @method     ChildWarehouse|null findOneByIntbwhseprodbin(string $IntbWhseProdBin) Return the first ChildWarehouse filtered by the IntbWhseProdBin column
 * @method     ChildWarehouse|null findOneByIntbwhsepharea(string $IntbWhsePhArea) Return the first ChildWarehouse filtered by the IntbWhsePhArea column
 * @method     ChildWarehouse|null findOneByIntbwhsephfrst3(string $IntbWhsePhFrst3) Return the first ChildWarehouse filtered by the IntbWhsePhFrst3 column
 * @method     ChildWarehouse|null findOneByIntbwhsephlast4(string $IntbWhsePhLast4) Return the first ChildWarehouse filtered by the IntbWhsePhLast4 column
 * @method     ChildWarehouse|null findOneByIntbwhsephext(string $IntbWhsePhExt) Return the first ChildWarehouse filtered by the IntbWhsePhExt column
 * @method     ChildWarehouse|null findOneByIntbwhsefaxarea(string $IntbWhseFaxArea) Return the first ChildWarehouse filtered by the IntbWhseFaxArea column
 * @method     ChildWarehouse|null findOneByIntbwhsefaxfrst3(string $IntbWhseFaxFrst3) Return the first ChildWarehouse filtered by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouse|null findOneByIntbwhsefaxlast4(string $IntbWhseFaxLast4) Return the first ChildWarehouse filtered by the IntbWhseFaxLast4 column
 * @method     ChildWarehouse|null findOneByIntbwhseemailadr(string $IntbWhseEmailAdr) Return the first ChildWarehouse filtered by the IntbWhseEmailAdr column
 * @method     ChildWarehouse|null findOneByIntbwhseqcrgabin(string $IntbWhseQcRgaBin) Return the first ChildWarehouse filtered by the IntbWhseQcRgaBin column
 * @method     ChildWarehouse|null findOneByIntbwhserfprinter1(string $IntbWhseRfPrinter1) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouse|null findOneByIntbwhserfprinter2(string $IntbWhseRfPrinter2) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouse|null findOneByIntbwhserfprinter3(string $IntbWhseRfPrinter3) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouse|null findOneByIntbwhserfprinter4(string $IntbWhseRfPrinter4) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouse|null findOneByIntbwhserfprinter5(string $IntbWhseRfPrinter5) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouse|null findOneByIntbwhseprofwhse(string $IntbWhseProfWhse) Return the first ChildWarehouse filtered by the IntbWhseProfWhse column
 * @method     ChildWarehouse|null findOneByIntbwhseasetwhse(string $IntbWhseAsetWhse) Return the first ChildWarehouse filtered by the IntbWhseAsetWhse column
 * @method     ChildWarehouse|null findOneByIntbwhseconsignwhse(string $IntbWhseConsignWhse) Return the first ChildWarehouse filtered by the IntbWhseConsignWhse column
 * @method     ChildWarehouse|null findOneByIntbwhsebinrangelist(string $IntbWhseBinRangeList) Return the first ChildWarehouse filtered by the IntbWhseBinRangeList column
 * @method     ChildWarehouse|null findOneByIntbwhsesupplywhse(string $IntbWhseSupplyWhse) Return the first ChildWarehouse filtered by the IntbWhseSupplyWhse column
 * @method     ChildWarehouse|null findOneByIntbwhseareasplit(string $IntbWhseAreaSplit) Return the first ChildWarehouse filtered by the IntbWhseAreaSplit column
 * @method     ChildWarehouse|null findOneByIntbwhsercvbincode(string $IntbWhseRcvBinCode) Return the first ChildWarehouse filtered by the IntbWhseRcvBinCode column
 * @method     ChildWarehouse|null findOneByIntbwhsercvbin(string $IntbWhseRcvBin) Return the first ChildWarehouse filtered by the IntbWhseRcvBin column
 * @method     ChildWarehouse|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouse filtered by the DateUpdtd column
 * @method     ChildWarehouse|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouse filtered by the TimeUpdtd column
 * @method     ChildWarehouse|null findOneByDummy(string $dummy) Return the first ChildWarehouse filtered by the dummy column
 *
 * @method     ChildWarehouse requirePk($key, ?ConnectionInterface $con = null) Return the ChildWarehouse by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOne(?ConnectionInterface $con = null) Return the first ChildWarehouse matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouse requireOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouse filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsename(string $IntbWhseName) Return the first ChildWarehouse filtered by the IntbWhseName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseadr1(string $IntbWhseAdr1) Return the first ChildWarehouse filtered by the IntbWhseAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseadr2(string $IntbWhseAdr2) Return the first ChildWarehouse filtered by the IntbWhseAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsecity(string $IntbWhseCity) Return the first ChildWarehouse filtered by the IntbWhseCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsestat(string $IntbWhseStat) Return the first ChildWarehouse filtered by the IntbWhseStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsezipcode(string $IntbWhseZipCode) Return the first ChildWarehouse filtered by the IntbWhseZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsectry(string $IntbWhseCtry) Return the first ChildWarehouse filtered by the IntbWhseCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseusehandheld(string $IntbWhseUseHandheld) Return the first ChildWarehouse filtered by the IntbWhseUseHandheld column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsecashcust(string $IntbWhseCashCust) Return the first ChildWarehouse filtered by the IntbWhseCashCust column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsepickdtl(string $IntbWhsePickDtl) Return the first ChildWarehouse filtered by the IntbWhsePickDtl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseprodbin(string $IntbWhseProdBin) Return the first ChildWarehouse filtered by the IntbWhseProdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsepharea(string $IntbWhsePhArea) Return the first ChildWarehouse filtered by the IntbWhsePhArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsephfrst3(string $IntbWhsePhFrst3) Return the first ChildWarehouse filtered by the IntbWhsePhFrst3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsephlast4(string $IntbWhsePhLast4) Return the first ChildWarehouse filtered by the IntbWhsePhLast4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsephext(string $IntbWhsePhExt) Return the first ChildWarehouse filtered by the IntbWhsePhExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsefaxarea(string $IntbWhseFaxArea) Return the first ChildWarehouse filtered by the IntbWhseFaxArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsefaxfrst3(string $IntbWhseFaxFrst3) Return the first ChildWarehouse filtered by the IntbWhseFaxFrst3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsefaxlast4(string $IntbWhseFaxLast4) Return the first ChildWarehouse filtered by the IntbWhseFaxLast4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseemailadr(string $IntbWhseEmailAdr) Return the first ChildWarehouse filtered by the IntbWhseEmailAdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseqcrgabin(string $IntbWhseQcRgaBin) Return the first ChildWarehouse filtered by the IntbWhseQcRgaBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter1(string $IntbWhseRfPrinter1) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter2(string $IntbWhseRfPrinter2) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter3(string $IntbWhseRfPrinter3) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter4(string $IntbWhseRfPrinter4) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhserfprinter5(string $IntbWhseRfPrinter5) Return the first ChildWarehouse filtered by the IntbWhseRfPrinter5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseprofwhse(string $IntbWhseProfWhse) Return the first ChildWarehouse filtered by the IntbWhseProfWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseasetwhse(string $IntbWhseAsetWhse) Return the first ChildWarehouse filtered by the IntbWhseAsetWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseconsignwhse(string $IntbWhseConsignWhse) Return the first ChildWarehouse filtered by the IntbWhseConsignWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsebinrangelist(string $IntbWhseBinRangeList) Return the first ChildWarehouse filtered by the IntbWhseBinRangeList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsesupplywhse(string $IntbWhseSupplyWhse) Return the first ChildWarehouse filtered by the IntbWhseSupplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhseareasplit(string $IntbWhseAreaSplit) Return the first ChildWarehouse filtered by the IntbWhseAreaSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsercvbincode(string $IntbWhseRcvBinCode) Return the first ChildWarehouse filtered by the IntbWhseRcvBinCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByIntbwhsercvbin(string $IntbWhseRcvBin) Return the first ChildWarehouse filtered by the IntbWhseRcvBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouse filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouse filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouse requireOneByDummy(string $dummy) Return the first ChildWarehouse filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouse[]|Collection find(?ConnectionInterface $con = null) Return ChildWarehouse objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildWarehouse> find(?ConnectionInterface $con = null) Return ChildWarehouse objects based on current ModelCriteria
 *
 * @method     ChildWarehouse[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildWarehouse objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhse(string|array<string> $IntbWhse) Return ChildWarehouse objects filtered by the IntbWhse column
 * @method     ChildWarehouse[]|Collection findByIntbwhsename(string|array<string> $IntbWhseName) Return ChildWarehouse objects filtered by the IntbWhseName column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsename(string|array<string> $IntbWhseName) Return ChildWarehouse objects filtered by the IntbWhseName column
 * @method     ChildWarehouse[]|Collection findByIntbwhseadr1(string|array<string> $IntbWhseAdr1) Return ChildWarehouse objects filtered by the IntbWhseAdr1 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseadr1(string|array<string> $IntbWhseAdr1) Return ChildWarehouse objects filtered by the IntbWhseAdr1 column
 * @method     ChildWarehouse[]|Collection findByIntbwhseadr2(string|array<string> $IntbWhseAdr2) Return ChildWarehouse objects filtered by the IntbWhseAdr2 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseadr2(string|array<string> $IntbWhseAdr2) Return ChildWarehouse objects filtered by the IntbWhseAdr2 column
 * @method     ChildWarehouse[]|Collection findByIntbwhsecity(string|array<string> $IntbWhseCity) Return ChildWarehouse objects filtered by the IntbWhseCity column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsecity(string|array<string> $IntbWhseCity) Return ChildWarehouse objects filtered by the IntbWhseCity column
 * @method     ChildWarehouse[]|Collection findByIntbwhsestat(string|array<string> $IntbWhseStat) Return ChildWarehouse objects filtered by the IntbWhseStat column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsestat(string|array<string> $IntbWhseStat) Return ChildWarehouse objects filtered by the IntbWhseStat column
 * @method     ChildWarehouse[]|Collection findByIntbwhsezipcode(string|array<string> $IntbWhseZipCode) Return ChildWarehouse objects filtered by the IntbWhseZipCode column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsezipcode(string|array<string> $IntbWhseZipCode) Return ChildWarehouse objects filtered by the IntbWhseZipCode column
 * @method     ChildWarehouse[]|Collection findByIntbwhsectry(string|array<string> $IntbWhseCtry) Return ChildWarehouse objects filtered by the IntbWhseCtry column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsectry(string|array<string> $IntbWhseCtry) Return ChildWarehouse objects filtered by the IntbWhseCtry column
 * @method     ChildWarehouse[]|Collection findByIntbwhseusehandheld(string|array<string> $IntbWhseUseHandheld) Return ChildWarehouse objects filtered by the IntbWhseUseHandheld column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseusehandheld(string|array<string> $IntbWhseUseHandheld) Return ChildWarehouse objects filtered by the IntbWhseUseHandheld column
 * @method     ChildWarehouse[]|Collection findByIntbwhsecashcust(string|array<string> $IntbWhseCashCust) Return ChildWarehouse objects filtered by the IntbWhseCashCust column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsecashcust(string|array<string> $IntbWhseCashCust) Return ChildWarehouse objects filtered by the IntbWhseCashCust column
 * @method     ChildWarehouse[]|Collection findByIntbwhsepickdtl(string|array<string> $IntbWhsePickDtl) Return ChildWarehouse objects filtered by the IntbWhsePickDtl column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsepickdtl(string|array<string> $IntbWhsePickDtl) Return ChildWarehouse objects filtered by the IntbWhsePickDtl column
 * @method     ChildWarehouse[]|Collection findByIntbwhseprodbin(string|array<string> $IntbWhseProdBin) Return ChildWarehouse objects filtered by the IntbWhseProdBin column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseprodbin(string|array<string> $IntbWhseProdBin) Return ChildWarehouse objects filtered by the IntbWhseProdBin column
 * @method     ChildWarehouse[]|Collection findByIntbwhsepharea(string|array<string> $IntbWhsePhArea) Return ChildWarehouse objects filtered by the IntbWhsePhArea column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsepharea(string|array<string> $IntbWhsePhArea) Return ChildWarehouse objects filtered by the IntbWhsePhArea column
 * @method     ChildWarehouse[]|Collection findByIntbwhsephfrst3(string|array<string> $IntbWhsePhFrst3) Return ChildWarehouse objects filtered by the IntbWhsePhFrst3 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsephfrst3(string|array<string> $IntbWhsePhFrst3) Return ChildWarehouse objects filtered by the IntbWhsePhFrst3 column
 * @method     ChildWarehouse[]|Collection findByIntbwhsephlast4(string|array<string> $IntbWhsePhLast4) Return ChildWarehouse objects filtered by the IntbWhsePhLast4 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsephlast4(string|array<string> $IntbWhsePhLast4) Return ChildWarehouse objects filtered by the IntbWhsePhLast4 column
 * @method     ChildWarehouse[]|Collection findByIntbwhsephext(string|array<string> $IntbWhsePhExt) Return ChildWarehouse objects filtered by the IntbWhsePhExt column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsephext(string|array<string> $IntbWhsePhExt) Return ChildWarehouse objects filtered by the IntbWhsePhExt column
 * @method     ChildWarehouse[]|Collection findByIntbwhsefaxarea(string|array<string> $IntbWhseFaxArea) Return ChildWarehouse objects filtered by the IntbWhseFaxArea column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsefaxarea(string|array<string> $IntbWhseFaxArea) Return ChildWarehouse objects filtered by the IntbWhseFaxArea column
 * @method     ChildWarehouse[]|Collection findByIntbwhsefaxfrst3(string|array<string> $IntbWhseFaxFrst3) Return ChildWarehouse objects filtered by the IntbWhseFaxFrst3 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsefaxfrst3(string|array<string> $IntbWhseFaxFrst3) Return ChildWarehouse objects filtered by the IntbWhseFaxFrst3 column
 * @method     ChildWarehouse[]|Collection findByIntbwhsefaxlast4(string|array<string> $IntbWhseFaxLast4) Return ChildWarehouse objects filtered by the IntbWhseFaxLast4 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsefaxlast4(string|array<string> $IntbWhseFaxLast4) Return ChildWarehouse objects filtered by the IntbWhseFaxLast4 column
 * @method     ChildWarehouse[]|Collection findByIntbwhseemailadr(string|array<string> $IntbWhseEmailAdr) Return ChildWarehouse objects filtered by the IntbWhseEmailAdr column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseemailadr(string|array<string> $IntbWhseEmailAdr) Return ChildWarehouse objects filtered by the IntbWhseEmailAdr column
 * @method     ChildWarehouse[]|Collection findByIntbwhseqcrgabin(string|array<string> $IntbWhseQcRgaBin) Return ChildWarehouse objects filtered by the IntbWhseQcRgaBin column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseqcrgabin(string|array<string> $IntbWhseQcRgaBin) Return ChildWarehouse objects filtered by the IntbWhseQcRgaBin column
 * @method     ChildWarehouse[]|Collection findByIntbwhserfprinter1(string|array<string> $IntbWhseRfPrinter1) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter1 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhserfprinter1(string|array<string> $IntbWhseRfPrinter1) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter1 column
 * @method     ChildWarehouse[]|Collection findByIntbwhserfprinter2(string|array<string> $IntbWhseRfPrinter2) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter2 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhserfprinter2(string|array<string> $IntbWhseRfPrinter2) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter2 column
 * @method     ChildWarehouse[]|Collection findByIntbwhserfprinter3(string|array<string> $IntbWhseRfPrinter3) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter3 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhserfprinter3(string|array<string> $IntbWhseRfPrinter3) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter3 column
 * @method     ChildWarehouse[]|Collection findByIntbwhserfprinter4(string|array<string> $IntbWhseRfPrinter4) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter4 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhserfprinter4(string|array<string> $IntbWhseRfPrinter4) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter4 column
 * @method     ChildWarehouse[]|Collection findByIntbwhserfprinter5(string|array<string> $IntbWhseRfPrinter5) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter5 column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhserfprinter5(string|array<string> $IntbWhseRfPrinter5) Return ChildWarehouse objects filtered by the IntbWhseRfPrinter5 column
 * @method     ChildWarehouse[]|Collection findByIntbwhseprofwhse(string|array<string> $IntbWhseProfWhse) Return ChildWarehouse objects filtered by the IntbWhseProfWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseprofwhse(string|array<string> $IntbWhseProfWhse) Return ChildWarehouse objects filtered by the IntbWhseProfWhse column
 * @method     ChildWarehouse[]|Collection findByIntbwhseasetwhse(string|array<string> $IntbWhseAsetWhse) Return ChildWarehouse objects filtered by the IntbWhseAsetWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseasetwhse(string|array<string> $IntbWhseAsetWhse) Return ChildWarehouse objects filtered by the IntbWhseAsetWhse column
 * @method     ChildWarehouse[]|Collection findByIntbwhseconsignwhse(string|array<string> $IntbWhseConsignWhse) Return ChildWarehouse objects filtered by the IntbWhseConsignWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseconsignwhse(string|array<string> $IntbWhseConsignWhse) Return ChildWarehouse objects filtered by the IntbWhseConsignWhse column
 * @method     ChildWarehouse[]|Collection findByIntbwhsebinrangelist(string|array<string> $IntbWhseBinRangeList) Return ChildWarehouse objects filtered by the IntbWhseBinRangeList column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsebinrangelist(string|array<string> $IntbWhseBinRangeList) Return ChildWarehouse objects filtered by the IntbWhseBinRangeList column
 * @method     ChildWarehouse[]|Collection findByIntbwhsesupplywhse(string|array<string> $IntbWhseSupplyWhse) Return ChildWarehouse objects filtered by the IntbWhseSupplyWhse column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsesupplywhse(string|array<string> $IntbWhseSupplyWhse) Return ChildWarehouse objects filtered by the IntbWhseSupplyWhse column
 * @method     ChildWarehouse[]|Collection findByIntbwhseareasplit(string|array<string> $IntbWhseAreaSplit) Return ChildWarehouse objects filtered by the IntbWhseAreaSplit column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhseareasplit(string|array<string> $IntbWhseAreaSplit) Return ChildWarehouse objects filtered by the IntbWhseAreaSplit column
 * @method     ChildWarehouse[]|Collection findByIntbwhsercvbincode(string|array<string> $IntbWhseRcvBinCode) Return ChildWarehouse objects filtered by the IntbWhseRcvBinCode column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsercvbincode(string|array<string> $IntbWhseRcvBinCode) Return ChildWarehouse objects filtered by the IntbWhseRcvBinCode column
 * @method     ChildWarehouse[]|Collection findByIntbwhsercvbin(string|array<string> $IntbWhseRcvBin) Return ChildWarehouse objects filtered by the IntbWhseRcvBin column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByIntbwhsercvbin(string|array<string> $IntbWhseRcvBin) Return ChildWarehouse objects filtered by the IntbWhseRcvBin column
 * @method     ChildWarehouse[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildWarehouse objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildWarehouse objects filtered by the DateUpdtd column
 * @method     ChildWarehouse[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildWarehouse objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildWarehouse objects filtered by the TimeUpdtd column
 * @method     ChildWarehouse[]|Collection findByDummy(string|array<string> $dummy) Return ChildWarehouse objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildWarehouse> findByDummy(string|array<string> $dummy) Return ChildWarehouse objects filtered by the dummy column
 *
 * @method     ChildWarehouse[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildWarehouse> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class WarehouseQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarehouseQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Warehouse', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarehouseQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarehouseQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildWarehouseQuery) {
            return $criteria;
        }
        $query = new ChildWarehouseQuery();
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
     * @return ChildWarehouse|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarehouseTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildWarehouse A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbWhse, IntbWhseName, IntbWhseAdr1, IntbWhseAdr2, IntbWhseCity, IntbWhseStat, IntbWhseZipCode, IntbWhseCtry, IntbWhseUseHandheld, IntbWhseCashCust, IntbWhsePickDtl, IntbWhseProdBin, IntbWhsePhArea, IntbWhsePhFrst3, IntbWhsePhLast4, IntbWhsePhExt, IntbWhseFaxArea, IntbWhseFaxFrst3, IntbWhseFaxLast4, IntbWhseEmailAdr, IntbWhseQcRgaBin, IntbWhseRfPrinter1, IntbWhseRfPrinter2, IntbWhseRfPrinter3, IntbWhseRfPrinter4, IntbWhseRfPrinter5, IntbWhseProfWhse, IntbWhseAsetWhse, IntbWhseConsignWhse, IntbWhseBinRangeList, IntbWhseSupplyWhse, IntbWhseAreaSplit, IntbWhseRcvBinCode, IntbWhseRcvBin, DateUpdtd, TimeUpdtd, dummy FROM inv_whse_code WHERE IntbWhse = :p0';
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
            /** @var ChildWarehouse $obj */
            $obj = new ChildWarehouse();
            $obj->hydrate($row);
            WarehouseTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildWarehouse|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $keys, Criteria::IN);

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

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseName column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsename('fooValue');   // WHERE IntbWhseName = 'fooValue'
     * $query->filterByIntbwhsename('%fooValue%', Criteria::LIKE); // WHERE IntbWhseName LIKE '%fooValue%'
     * $query->filterByIntbwhsename(['foo', 'bar']); // WHERE IntbWhseName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsename The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsename($intbwhsename = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsename)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSENAME, $intbwhsename, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseadr1('fooValue');   // WHERE IntbWhseAdr1 = 'fooValue'
     * $query->filterByIntbwhseadr1('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAdr1 LIKE '%fooValue%'
     * $query->filterByIntbwhseadr1(['foo', 'bar']); // WHERE IntbWhseAdr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseadr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseadr1($intbwhseadr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseadr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEADR1, $intbwhseadr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseadr2('fooValue');   // WHERE IntbWhseAdr2 = 'fooValue'
     * $query->filterByIntbwhseadr2('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAdr2 LIKE '%fooValue%'
     * $query->filterByIntbwhseadr2(['foo', 'bar']); // WHERE IntbWhseAdr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseadr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseadr2($intbwhseadr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseadr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEADR2, $intbwhseadr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseCity column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsecity('fooValue');   // WHERE IntbWhseCity = 'fooValue'
     * $query->filterByIntbwhsecity('%fooValue%', Criteria::LIKE); // WHERE IntbWhseCity LIKE '%fooValue%'
     * $query->filterByIntbwhsecity(['foo', 'bar']); // WHERE IntbWhseCity IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsecity The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsecity($intbwhsecity = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsecity)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECITY, $intbwhsecity, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseStat column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsestat('fooValue');   // WHERE IntbWhseStat = 'fooValue'
     * $query->filterByIntbwhsestat('%fooValue%', Criteria::LIKE); // WHERE IntbWhseStat LIKE '%fooValue%'
     * $query->filterByIntbwhsestat(['foo', 'bar']); // WHERE IntbWhseStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsestat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsestat($intbwhsestat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsestat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSESTAT, $intbwhsestat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsezipcode('fooValue');   // WHERE IntbWhseZipCode = 'fooValue'
     * $query->filterByIntbwhsezipcode('%fooValue%', Criteria::LIKE); // WHERE IntbWhseZipCode LIKE '%fooValue%'
     * $query->filterByIntbwhsezipcode(['foo', 'bar']); // WHERE IntbWhseZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsezipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsezipcode($intbwhsezipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsezipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEZIPCODE, $intbwhsezipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsectry('fooValue');   // WHERE IntbWhseCtry = 'fooValue'
     * $query->filterByIntbwhsectry('%fooValue%', Criteria::LIKE); // WHERE IntbWhseCtry LIKE '%fooValue%'
     * $query->filterByIntbwhsectry(['foo', 'bar']); // WHERE IntbWhseCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsectry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsectry($intbwhsectry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsectry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECTRY, $intbwhsectry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseUseHandheld column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseusehandheld('fooValue');   // WHERE IntbWhseUseHandheld = 'fooValue'
     * $query->filterByIntbwhseusehandheld('%fooValue%', Criteria::LIKE); // WHERE IntbWhseUseHandheld LIKE '%fooValue%'
     * $query->filterByIntbwhseusehandheld(['foo', 'bar']); // WHERE IntbWhseUseHandheld IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseusehandheld The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseusehandheld($intbwhseusehandheld = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseusehandheld)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEUSEHANDHELD, $intbwhseusehandheld, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseCashCust column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsecashcust('fooValue');   // WHERE IntbWhseCashCust = 'fooValue'
     * $query->filterByIntbwhsecashcust('%fooValue%', Criteria::LIKE); // WHERE IntbWhseCashCust LIKE '%fooValue%'
     * $query->filterByIntbwhsecashcust(['foo', 'bar']); // WHERE IntbWhseCashCust IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsecashcust The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsecashcust($intbwhsecashcust = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsecashcust)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECASHCUST, $intbwhsecashcust, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhsePickDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsepickdtl('fooValue');   // WHERE IntbWhsePickDtl = 'fooValue'
     * $query->filterByIntbwhsepickdtl('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePickDtl LIKE '%fooValue%'
     * $query->filterByIntbwhsepickdtl(['foo', 'bar']); // WHERE IntbWhsePickDtl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsepickdtl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsepickdtl($intbwhsepickdtl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsepickdtl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPICKDTL, $intbwhsepickdtl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseProdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseprodbin('fooValue');   // WHERE IntbWhseProdBin = 'fooValue'
     * $query->filterByIntbwhseprodbin('%fooValue%', Criteria::LIKE); // WHERE IntbWhseProdBin LIKE '%fooValue%'
     * $query->filterByIntbwhseprodbin(['foo', 'bar']); // WHERE IntbWhseProdBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseprodbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseprodbin($intbwhseprodbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseprodbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPRODBIN, $intbwhseprodbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhsePhArea column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsepharea('fooValue');   // WHERE IntbWhsePhArea = 'fooValue'
     * $query->filterByIntbwhsepharea('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhArea LIKE '%fooValue%'
     * $query->filterByIntbwhsepharea(['foo', 'bar']); // WHERE IntbWhsePhArea IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsepharea The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsepharea($intbwhsepharea = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsepharea)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHAREA, $intbwhsepharea, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhsePhFrst3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsephfrst3('fooValue');   // WHERE IntbWhsePhFrst3 = 'fooValue'
     * $query->filterByIntbwhsephfrst3('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhFrst3 LIKE '%fooValue%'
     * $query->filterByIntbwhsephfrst3(['foo', 'bar']); // WHERE IntbWhsePhFrst3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsephfrst3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsephfrst3($intbwhsephfrst3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsephfrst3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHFRST3, $intbwhsephfrst3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhsePhLast4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsephlast4('fooValue');   // WHERE IntbWhsePhLast4 = 'fooValue'
     * $query->filterByIntbwhsephlast4('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhLast4 LIKE '%fooValue%'
     * $query->filterByIntbwhsephlast4(['foo', 'bar']); // WHERE IntbWhsePhLast4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsephlast4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsephlast4($intbwhsephlast4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsephlast4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHLAST4, $intbwhsephlast4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhsePhExt column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsephext('fooValue');   // WHERE IntbWhsePhExt = 'fooValue'
     * $query->filterByIntbwhsephext('%fooValue%', Criteria::LIKE); // WHERE IntbWhsePhExt LIKE '%fooValue%'
     * $query->filterByIntbwhsephext(['foo', 'bar']); // WHERE IntbWhsePhExt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsephext The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsephext($intbwhsephext = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsephext)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPHEXT, $intbwhsephext, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseFaxArea column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefaxarea('fooValue');   // WHERE IntbWhseFaxArea = 'fooValue'
     * $query->filterByIntbwhsefaxarea('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFaxArea LIKE '%fooValue%'
     * $query->filterByIntbwhsefaxarea(['foo', 'bar']); // WHERE IntbWhseFaxArea IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsefaxarea The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsefaxarea($intbwhsefaxarea = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefaxarea)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEFAXAREA, $intbwhsefaxarea, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseFaxFrst3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefaxfrst3('fooValue');   // WHERE IntbWhseFaxFrst3 = 'fooValue'
     * $query->filterByIntbwhsefaxfrst3('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFaxFrst3 LIKE '%fooValue%'
     * $query->filterByIntbwhsefaxfrst3(['foo', 'bar']); // WHERE IntbWhseFaxFrst3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsefaxfrst3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsefaxfrst3($intbwhsefaxfrst3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefaxfrst3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEFAXFRST3, $intbwhsefaxfrst3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseFaxLast4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsefaxlast4('fooValue');   // WHERE IntbWhseFaxLast4 = 'fooValue'
     * $query->filterByIntbwhsefaxlast4('%fooValue%', Criteria::LIKE); // WHERE IntbWhseFaxLast4 LIKE '%fooValue%'
     * $query->filterByIntbwhsefaxlast4(['foo', 'bar']); // WHERE IntbWhseFaxLast4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsefaxlast4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsefaxlast4($intbwhsefaxlast4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsefaxlast4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEFAXLAST4, $intbwhsefaxlast4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseEmailAdr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseemailadr('fooValue');   // WHERE IntbWhseEmailAdr = 'fooValue'
     * $query->filterByIntbwhseemailadr('%fooValue%', Criteria::LIKE); // WHERE IntbWhseEmailAdr LIKE '%fooValue%'
     * $query->filterByIntbwhseemailadr(['foo', 'bar']); // WHERE IntbWhseEmailAdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseemailadr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseemailadr($intbwhseemailadr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseemailadr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEEMAILADR, $intbwhseemailadr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseQcRgaBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseqcrgabin('fooValue');   // WHERE IntbWhseQcRgaBin = 'fooValue'
     * $query->filterByIntbwhseqcrgabin('%fooValue%', Criteria::LIKE); // WHERE IntbWhseQcRgaBin LIKE '%fooValue%'
     * $query->filterByIntbwhseqcrgabin(['foo', 'bar']); // WHERE IntbWhseQcRgaBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseqcrgabin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseqcrgabin($intbwhseqcrgabin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseqcrgabin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEQCRGABIN, $intbwhseqcrgabin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRfPrinter1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter1('fooValue');   // WHERE IntbWhseRfPrinter1 = 'fooValue'
     * $query->filterByIntbwhserfprinter1('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter1 LIKE '%fooValue%'
     * $query->filterByIntbwhserfprinter1(['foo', 'bar']); // WHERE IntbWhseRfPrinter1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhserfprinter1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter1($intbwhserfprinter1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER1, $intbwhserfprinter1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRfPrinter2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter2('fooValue');   // WHERE IntbWhseRfPrinter2 = 'fooValue'
     * $query->filterByIntbwhserfprinter2('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter2 LIKE '%fooValue%'
     * $query->filterByIntbwhserfprinter2(['foo', 'bar']); // WHERE IntbWhseRfPrinter2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhserfprinter2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter2($intbwhserfprinter2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER2, $intbwhserfprinter2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRfPrinter3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter3('fooValue');   // WHERE IntbWhseRfPrinter3 = 'fooValue'
     * $query->filterByIntbwhserfprinter3('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter3 LIKE '%fooValue%'
     * $query->filterByIntbwhserfprinter3(['foo', 'bar']); // WHERE IntbWhseRfPrinter3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhserfprinter3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter3($intbwhserfprinter3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER3, $intbwhserfprinter3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRfPrinter4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter4('fooValue');   // WHERE IntbWhseRfPrinter4 = 'fooValue'
     * $query->filterByIntbwhserfprinter4('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter4 LIKE '%fooValue%'
     * $query->filterByIntbwhserfprinter4(['foo', 'bar']); // WHERE IntbWhseRfPrinter4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhserfprinter4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter4($intbwhserfprinter4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER4, $intbwhserfprinter4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRfPrinter5 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhserfprinter5('fooValue');   // WHERE IntbWhseRfPrinter5 = 'fooValue'
     * $query->filterByIntbwhserfprinter5('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRfPrinter5 LIKE '%fooValue%'
     * $query->filterByIntbwhserfprinter5(['foo', 'bar']); // WHERE IntbWhseRfPrinter5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhserfprinter5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhserfprinter5($intbwhserfprinter5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhserfprinter5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERFPRINTER5, $intbwhserfprinter5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseProfWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseprofwhse('fooValue');   // WHERE IntbWhseProfWhse = 'fooValue'
     * $query->filterByIntbwhseprofwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseProfWhse LIKE '%fooValue%'
     * $query->filterByIntbwhseprofwhse(['foo', 'bar']); // WHERE IntbWhseProfWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseprofwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseprofwhse($intbwhseprofwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseprofwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEPROFWHSE, $intbwhseprofwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseAsetWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseasetwhse('fooValue');   // WHERE IntbWhseAsetWhse = 'fooValue'
     * $query->filterByIntbwhseasetwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAsetWhse LIKE '%fooValue%'
     * $query->filterByIntbwhseasetwhse(['foo', 'bar']); // WHERE IntbWhseAsetWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseasetwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseasetwhse($intbwhseasetwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseasetwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEASETWHSE, $intbwhseasetwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseConsignWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseconsignwhse('fooValue');   // WHERE IntbWhseConsignWhse = 'fooValue'
     * $query->filterByIntbwhseconsignwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseConsignWhse LIKE '%fooValue%'
     * $query->filterByIntbwhseconsignwhse(['foo', 'bar']); // WHERE IntbWhseConsignWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseconsignwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseconsignwhse($intbwhseconsignwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseconsignwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSECONSIGNWHSE, $intbwhseconsignwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseBinRangeList column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsebinrangelist('fooValue');   // WHERE IntbWhseBinRangeList = 'fooValue'
     * $query->filterByIntbwhsebinrangelist('%fooValue%', Criteria::LIKE); // WHERE IntbWhseBinRangeList LIKE '%fooValue%'
     * $query->filterByIntbwhsebinrangelist(['foo', 'bar']); // WHERE IntbWhseBinRangeList IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsebinrangelist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsebinrangelist($intbwhsebinrangelist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsebinrangelist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEBINRANGELIST, $intbwhsebinrangelist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseSupplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsesupplywhse('fooValue');   // WHERE IntbWhseSupplyWhse = 'fooValue'
     * $query->filterByIntbwhsesupplywhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhseSupplyWhse LIKE '%fooValue%'
     * $query->filterByIntbwhsesupplywhse(['foo', 'bar']); // WHERE IntbWhseSupplyWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsesupplywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsesupplywhse($intbwhsesupplywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsesupplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSESUPPLYWHSE, $intbwhsesupplywhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseAreaSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseareasplit('fooValue');   // WHERE IntbWhseAreaSplit = 'fooValue'
     * $query->filterByIntbwhseareasplit('%fooValue%', Criteria::LIKE); // WHERE IntbWhseAreaSplit LIKE '%fooValue%'
     * $query->filterByIntbwhseareasplit(['foo', 'bar']); // WHERE IntbWhseAreaSplit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhseareasplit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhseareasplit($intbwhseareasplit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseareasplit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSEAREASPLIT, $intbwhseareasplit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRcvBinCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsercvbincode('fooValue');   // WHERE IntbWhseRcvBinCode = 'fooValue'
     * $query->filterByIntbwhsercvbincode('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRcvBinCode LIKE '%fooValue%'
     * $query->filterByIntbwhsercvbincode(['foo', 'bar']); // WHERE IntbWhseRcvBinCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsercvbincode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsercvbincode($intbwhsercvbincode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsercvbincode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERCVBINCODE, $intbwhsercvbincode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhseRcvBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhsercvbin('fooValue');   // WHERE IntbWhseRcvBin = 'fooValue'
     * $query->filterByIntbwhsercvbin('%fooValue%', Criteria::LIKE); // WHERE IntbWhseRcvBin LIKE '%fooValue%'
     * $query->filterByIntbwhsercvbin(['foo', 'bar']); // WHERE IntbWhseRcvBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhsercvbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhsercvbin($intbwhsercvbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhsercvbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSERCVBIN, $intbwhsercvbin, $comparison);

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

        $this->addUsingAlias(WarehouseTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(WarehouseTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(WarehouseTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
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
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $invWhseItemBin->getIntbwhse(), $comparison);

            return $this;
        } elseif ($invWhseItemBin instanceof ObjectCollection) {
            $this
                ->useInvWhseItemBinQuery()
                ->filterByPrimaryKeys($invWhseItemBin->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvWhseItemBin() only accepts arguments of type \InvWhseItemBin or Collection');
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
     * Filter the query by a related \WarehouseBin object
     *
     * @param \WarehouseBin|ObjectCollection $warehouseBin the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseBin($warehouseBin, ?string $comparison = null)
    {
        if ($warehouseBin instanceof \WarehouseBin) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $warehouseBin->getIntbwhse(), $comparison);

            return $this;
        } elseif ($warehouseBin instanceof ObjectCollection) {
            $this
                ->useWarehouseBinQuery()
                ->filterByPrimaryKeys($warehouseBin->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByWarehouseBin() only accepts arguments of type \WarehouseBin or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseBin relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseBin(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseBin');

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
            $this->addJoinObject($join, 'WarehouseBin');
        }

        return $this;
    }

    /**
     * Use the WarehouseBin relation WarehouseBin object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseBinQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseBinQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouseBin($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseBin', '\WarehouseBinQuery');
    }

    /**
     * Use the WarehouseBin relation WarehouseBin object
     *
     * @param callable(\WarehouseBinQuery):\WarehouseBinQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseBinQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseBinQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to WarehouseBin table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseBinQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseBinExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseBinQuery */
        $q = $this->useExistsQuery('WarehouseBin', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to WarehouseBin table for a NOT EXISTS query.
     *
     * @see useWarehouseBinExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseBinQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseBinNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseBinQuery */
        $q = $this->useExistsQuery('WarehouseBin', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to WarehouseBin table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseBinQuery The inner query object of the IN statement
     */
    public function useInWarehouseBinQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseBinQuery */
        $q = $this->useInQuery('WarehouseBin', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to WarehouseBin table for a NOT IN query.
     *
     * @see useWarehouseBinInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseBinQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseBinQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseBinQuery */
        $q = $this->useInQuery('WarehouseBin', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvWhseLot object
     *
     * @param \InvWhseLot|ObjectCollection $invWhseLot the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvWhseLot($invWhseLot, ?string $comparison = null)
    {
        if ($invWhseLot instanceof \InvWhseLot) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $invWhseLot->getIntbwhse(), $comparison);

            return $this;
        } elseif ($invWhseLot instanceof ObjectCollection) {
            $this
                ->useInvWhseLotQuery()
                ->filterByPrimaryKeys($invWhseLot->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvWhseLot() only accepts arguments of type \InvWhseLot or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvWhseLot relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvWhseLot(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvWhseLot');

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
            $this->addJoinObject($join, 'InvWhseLot');
        }

        return $this;
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvWhseLotQuery A secondary query class using the current class as primary query
     */
    public function useInvWhseLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvWhseLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvWhseLot', '\InvWhseLotQuery');
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @param callable(\InvWhseLotQuery):\InvWhseLotQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvWhseLotQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvWhseLotQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvWhseLot table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvWhseLotQuery The inner query object of the EXISTS statement
     */
    public function useInvWhseLotExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useExistsQuery('InvWhseLot', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for a NOT EXISTS query.
     *
     * @see useInvWhseLotExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvWhseLotQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvWhseLotNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useExistsQuery('InvWhseLot', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvWhseLotQuery The inner query object of the IN statement
     */
    public function useInInvWhseLotQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useInQuery('InvWhseLot', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for a NOT IN query.
     *
     * @see useInvWhseLotInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvWhseLotQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvWhseLotQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useInQuery('InvWhseLot', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvLotTag object
     *
     * @param \InvLotTag|ObjectCollection $invLotTag the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotTag($invLotTag, ?string $comparison = null)
    {
        if ($invLotTag instanceof \InvLotTag) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $invLotTag->getIntbwhse(), $comparison);

            return $this;
        } elseif ($invLotTag instanceof ObjectCollection) {
            $this
                ->useInvLotTagQuery()
                ->filterByPrimaryKeys($invLotTag->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvLotTag() only accepts arguments of type \InvLotTag or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotTag relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotTag(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotTag');

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
            $this->addJoinObject($join, 'InvLotTag');
        }

        return $this;
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotTagQuery A secondary query class using the current class as primary query
     */
    public function useInvLotTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotTag', '\InvLotTagQuery');
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @param callable(\InvLotTagQuery):\InvLotTagQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotTagQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotTagQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotTag table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotTagQuery The inner query object of the EXISTS statement
     */
    public function useInvLotTagExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT EXISTS query.
     *
     * @see useInvLotTagExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotTagNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotTagQuery The inner query object of the IN statement
     */
    public function useInInvLotTagQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT IN query.
     *
     * @see useInvLotTagInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotTagQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferOrder object
     *
     * @param \InvTransferOrder|ObjectCollection $invTransferOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferOrderRelatedByIntbwhsefrom($invTransferOrder, ?string $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $invTransferOrder->getIntbwhsefrom(), $comparison);

            return $this;
        } elseif ($invTransferOrder instanceof ObjectCollection) {
            $this
                ->useInvTransferOrderRelatedByIntbwhsefromQuery()
                ->filterByPrimaryKeys($invTransferOrder->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferOrderRelatedByIntbwhsefrom() only accepts arguments of type \InvTransferOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferOrderRelatedByIntbwhsefrom relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferOrderRelatedByIntbwhsefrom(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferOrderRelatedByIntbwhsefrom');

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
            $this->addJoinObject($join, 'InvTransferOrderRelatedByIntbwhsefrom');
        }

        return $this;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhsefrom relation InvTransferOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferOrderQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferOrderRelatedByIntbwhsefromQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferOrderRelatedByIntbwhsefrom($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferOrderRelatedByIntbwhsefrom', '\InvTransferOrderQuery');
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhsefrom relation InvTransferOrder object
     *
     * @param callable(\InvTransferOrderQuery):\InvTransferOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferOrderRelatedByIntbwhsefromQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferOrderRelatedByIntbwhsefromQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhsefrom relation to the InvTransferOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferOrderQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferOrderRelatedByIntbwhsefromExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useExistsQuery('InvTransferOrderRelatedByIntbwhsefrom', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhsefrom relation to the InvTransferOrder table for a NOT EXISTS query.
     *
     * @see useInvTransferOrderRelatedByIntbwhsefromExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferOrderRelatedByIntbwhsefromNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useExistsQuery('InvTransferOrderRelatedByIntbwhsefrom', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhsefrom relation to the InvTransferOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferOrderQuery The inner query object of the IN statement
     */
    public function useInInvTransferOrderRelatedByIntbwhsefromQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useInQuery('InvTransferOrderRelatedByIntbwhsefrom', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhsefrom relation to the InvTransferOrder table for a NOT IN query.
     *
     * @see useInvTransferOrderRelatedByIntbwhsefromInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferOrderRelatedByIntbwhsefromQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useInQuery('InvTransferOrderRelatedByIntbwhsefrom', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferOrder object
     *
     * @param \InvTransferOrder|ObjectCollection $invTransferOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferOrderRelatedByIntbwhseto($invTransferOrder, ?string $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $invTransferOrder->getIntbwhseto(), $comparison);

            return $this;
        } elseif ($invTransferOrder instanceof ObjectCollection) {
            $this
                ->useInvTransferOrderRelatedByIntbwhsetoQuery()
                ->filterByPrimaryKeys($invTransferOrder->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferOrderRelatedByIntbwhseto() only accepts arguments of type \InvTransferOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferOrderRelatedByIntbwhseto relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferOrderRelatedByIntbwhseto(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferOrderRelatedByIntbwhseto');

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
            $this->addJoinObject($join, 'InvTransferOrderRelatedByIntbwhseto');
        }

        return $this;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhseto relation InvTransferOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferOrderQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferOrderRelatedByIntbwhsetoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferOrderRelatedByIntbwhseto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferOrderRelatedByIntbwhseto', '\InvTransferOrderQuery');
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhseto relation InvTransferOrder object
     *
     * @param callable(\InvTransferOrderQuery):\InvTransferOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferOrderRelatedByIntbwhsetoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferOrderRelatedByIntbwhsetoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhseto relation to the InvTransferOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferOrderQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferOrderRelatedByIntbwhsetoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useExistsQuery('InvTransferOrderRelatedByIntbwhseto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhseto relation to the InvTransferOrder table for a NOT EXISTS query.
     *
     * @see useInvTransferOrderRelatedByIntbwhsetoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferOrderRelatedByIntbwhsetoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useExistsQuery('InvTransferOrderRelatedByIntbwhseto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhseto relation to the InvTransferOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferOrderQuery The inner query object of the IN statement
     */
    public function useInInvTransferOrderRelatedByIntbwhsetoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useInQuery('InvTransferOrderRelatedByIntbwhseto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the InvTransferOrderRelatedByIntbwhseto relation to the InvTransferOrder table for a NOT IN query.
     *
     * @see useInvTransferOrderRelatedByIntbwhsetoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferOrderRelatedByIntbwhsetoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useInQuery('InvTransferOrderRelatedByIntbwhseto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \WarehouseInventory object
     *
     * @param \WarehouseInventory|ObjectCollection $warehouseInventory the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseInventory($warehouseInventory, ?string $comparison = null)
    {
        if ($warehouseInventory instanceof \WarehouseInventory) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $warehouseInventory->getIntbwhse(), $comparison);

            return $this;
        } elseif ($warehouseInventory instanceof ObjectCollection) {
            $this
                ->useWarehouseInventoryQuery()
                ->filterByPrimaryKeys($warehouseInventory->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByWarehouseInventory() only accepts arguments of type \WarehouseInventory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseInventory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseInventory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseInventory');

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
            $this->addJoinObject($join, 'WarehouseInventory');
        }

        return $this;
    }

    /**
     * Use the WarehouseInventory relation WarehouseInventory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseInventoryQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseInventoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouseInventory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseInventory', '\WarehouseInventoryQuery');
    }

    /**
     * Use the WarehouseInventory relation WarehouseInventory object
     *
     * @param callable(\WarehouseInventoryQuery):\WarehouseInventoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseInventoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseInventoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to WarehouseInventory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseInventoryQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseInventoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useExistsQuery('WarehouseInventory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for a NOT EXISTS query.
     *
     * @see useWarehouseInventoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseInventoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseInventoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useExistsQuery('WarehouseInventory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseInventoryQuery The inner query object of the IN statement
     */
    public function useInWarehouseInventoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useInQuery('WarehouseInventory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for a NOT IN query.
     *
     * @see useWarehouseInventoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseInventoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseInventoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useInQuery('WarehouseInventory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \WarehouseNote object
     *
     * @param \WarehouseNote|ObjectCollection $warehouseNote the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseNote($warehouseNote, ?string $comparison = null)
    {
        if ($warehouseNote instanceof \WarehouseNote) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $warehouseNote->getIntbwhse(), $comparison);

            return $this;
        } elseif ($warehouseNote instanceof ObjectCollection) {
            $this
                ->useWarehouseNoteQuery()
                ->filterByPrimaryKeys($warehouseNote->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByWarehouseNote() only accepts arguments of type \WarehouseNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseNote relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseNote(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseNote');

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
            $this->addJoinObject($join, 'WarehouseNote');
        }

        return $this;
    }

    /**
     * Use the WarehouseNote relation WarehouseNote object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseNoteQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseNoteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinWarehouseNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseNote', '\WarehouseNoteQuery');
    }

    /**
     * Use the WarehouseNote relation WarehouseNote object
     *
     * @param callable(\WarehouseNoteQuery):\WarehouseNoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseNoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useWarehouseNoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to WarehouseNote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseNoteQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseNoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseNoteQuery */
        $q = $this->useExistsQuery('WarehouseNote', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to WarehouseNote table for a NOT EXISTS query.
     *
     * @see useWarehouseNoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseNoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseNoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseNoteQuery */
        $q = $this->useExistsQuery('WarehouseNote', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to WarehouseNote table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseNoteQuery The inner query object of the IN statement
     */
    public function useInWarehouseNoteQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseNoteQuery */
        $q = $this->useInQuery('WarehouseNote', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to WarehouseNote table for a NOT IN query.
     *
     * @see useWarehouseNoteInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseNoteQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseNoteQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseNoteQuery */
        $q = $this->useInQuery('WarehouseNote', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PoReceivingHead object
     *
     * @param \PoReceivingHead|ObjectCollection $poReceivingHead the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPoReceivingHead($poReceivingHead, ?string $comparison = null)
    {
        if ($poReceivingHead instanceof \PoReceivingHead) {
            $this
                ->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $poReceivingHead->getIntbwhse(), $comparison);

            return $this;
        } elseif ($poReceivingHead instanceof ObjectCollection) {
            $this
                ->usePoReceivingHeadQuery()
                ->filterByPrimaryKeys($poReceivingHead->getPrimaryKeys())
                ->endUse();

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
     * Exclude object from result
     *
     * @param ChildWarehouse $warehouse Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($warehouse = null)
    {
        if ($warehouse) {
            $this->addUsingAlias(WarehouseTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_whse_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarehouseTableMap::clearInstancePool();
            WarehouseTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarehouseTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarehouseTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarehouseTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
