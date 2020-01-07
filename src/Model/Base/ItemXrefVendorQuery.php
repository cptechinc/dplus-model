<?php

namespace Base;

use \ItemXrefVendor as ChildItemXrefVendor;
use \ItemXrefVendorQuery as ChildItemXrefVendorQuery;
use \Exception;
use \PDO;
use Map\ItemXrefVendorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'vend_item_xref' table.
 *
 *
 *
 * @method     ChildItemXrefVendorQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildItemXrefVendorQuery orderByVexrvenditemnbr($order = Criteria::ASC) Order by the VexrVendItemNbr column
 * @method     ChildItemXrefVendorQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefVendorQuery orderByVexrpoordercode($order = Criteria::ASC) Order by the VexrPoOrderCode column
 * @method     ChildItemXrefVendorQuery orderByVexroption1($order = Criteria::ASC) Order by the VexrOption1 column
 * @method     ChildItemXrefVendorQuery orderByIntbuompur($order = Criteria::ASC) Order by the IntbUomPur column
 * @method     ChildItemXrefVendorQuery orderByVexrcaseqty($order = Criteria::ASC) Order by the VexrCaseQty column
 * @method     ChildItemXrefVendorQuery orderByVexrprtkitdet($order = Criteria::ASC) Order by the VexrPrtKitDet column
 * @method     ChildItemXrefVendorQuery orderByVexrlistprice($order = Criteria::ASC) Order by the VexrListPrice column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost($order = Criteria::ASC) Order by the VexrUnitCost column
 * @method     ChildItemXrefVendorQuery orderByVexrforeigncost($order = Criteria::ASC) Order by the VexrForeignCost column
 * @method     ChildItemXrefVendorQuery orderByVexrcostlastdate($order = Criteria::ASC) Order by the VexrCostLastDate column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit1($order = Criteria::ASC) Order by the VexrUnitUnit1 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost1($order = Criteria::ASC) Order by the VexrUnitCost1 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit2($order = Criteria::ASC) Order by the VexrUnitUnit2 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost2($order = Criteria::ASC) Order by the VexrUnitCost2 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit3($order = Criteria::ASC) Order by the VexrUnitUnit3 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost3($order = Criteria::ASC) Order by the VexrUnitCost3 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit4($order = Criteria::ASC) Order by the VexrUnitUnit4 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost4($order = Criteria::ASC) Order by the VexrUnitCost4 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit5($order = Criteria::ASC) Order by the VexrUnitUnit5 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost5($order = Criteria::ASC) Order by the VexrUnitCost5 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit6($order = Criteria::ASC) Order by the VexrUnitUnit6 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost6($order = Criteria::ASC) Order by the VexrUnitCost6 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit7($order = Criteria::ASC) Order by the VexrUnitUnit7 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost7($order = Criteria::ASC) Order by the VexrUnitCost7 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit8($order = Criteria::ASC) Order by the VexrUnitUnit8 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost8($order = Criteria::ASC) Order by the VexrUnitCost8 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit9($order = Criteria::ASC) Order by the VexrUnitUnit9 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost9($order = Criteria::ASC) Order by the VexrUnitCost9 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitunit10($order = Criteria::ASC) Order by the VexrUnitUnit10 column
 * @method     ChildItemXrefVendorQuery orderByVexrunitcost10($order = Criteria::ASC) Order by the VexrUnitCost10 column
 * @method     ChildItemXrefVendorQuery orderByVexraprvcode($order = Criteria::ASC) Order by the VexrAprvCode column
 * @method     ChildItemXrefVendorQuery orderByVexrvenditemdesc($order = Criteria::ASC) Order by the VexrVendItemDesc column
 * @method     ChildItemXrefVendorQuery orderByVexrminbuyqty($order = Criteria::ASC) Order by the VexrMinBuyQty column
 * @method     ChildItemXrefVendorQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefVendorQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefVendorQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefVendorQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildItemXrefVendorQuery groupByVexrvenditemnbr() Group by the VexrVendItemNbr column
 * @method     ChildItemXrefVendorQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefVendorQuery groupByVexrpoordercode() Group by the VexrPoOrderCode column
 * @method     ChildItemXrefVendorQuery groupByVexroption1() Group by the VexrOption1 column
 * @method     ChildItemXrefVendorQuery groupByIntbuompur() Group by the IntbUomPur column
 * @method     ChildItemXrefVendorQuery groupByVexrcaseqty() Group by the VexrCaseQty column
 * @method     ChildItemXrefVendorQuery groupByVexrprtkitdet() Group by the VexrPrtKitDet column
 * @method     ChildItemXrefVendorQuery groupByVexrlistprice() Group by the VexrListPrice column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost() Group by the VexrUnitCost column
 * @method     ChildItemXrefVendorQuery groupByVexrforeigncost() Group by the VexrForeignCost column
 * @method     ChildItemXrefVendorQuery groupByVexrcostlastdate() Group by the VexrCostLastDate column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit1() Group by the VexrUnitUnit1 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost1() Group by the VexrUnitCost1 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit2() Group by the VexrUnitUnit2 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost2() Group by the VexrUnitCost2 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit3() Group by the VexrUnitUnit3 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost3() Group by the VexrUnitCost3 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit4() Group by the VexrUnitUnit4 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost4() Group by the VexrUnitCost4 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit5() Group by the VexrUnitUnit5 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost5() Group by the VexrUnitCost5 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit6() Group by the VexrUnitUnit6 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost6() Group by the VexrUnitCost6 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit7() Group by the VexrUnitUnit7 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost7() Group by the VexrUnitCost7 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit8() Group by the VexrUnitUnit8 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost8() Group by the VexrUnitCost8 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit9() Group by the VexrUnitUnit9 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost9() Group by the VexrUnitCost9 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitunit10() Group by the VexrUnitUnit10 column
 * @method     ChildItemXrefVendorQuery groupByVexrunitcost10() Group by the VexrUnitCost10 column
 * @method     ChildItemXrefVendorQuery groupByVexraprvcode() Group by the VexrAprvCode column
 * @method     ChildItemXrefVendorQuery groupByVexrvenditemdesc() Group by the VexrVendItemDesc column
 * @method     ChildItemXrefVendorQuery groupByVexrminbuyqty() Group by the VexrMinBuyQty column
 * @method     ChildItemXrefVendorQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefVendorQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefVendorQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefVendorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefVendorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefVendorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefVendorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefVendorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefVendorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefVendorQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefVendorQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefVendorQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefVendorQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefVendorQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefVendor findOne(ConnectionInterface $con = null) Return the first ChildItemXrefVendor matching the query
 * @method     ChildItemXrefVendor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemXrefVendor matching the query, or a new ChildItemXrefVendor object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefVendor findOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendor filtered by the ApveVendId column
 * @method     ChildItemXrefVendor findOneByVexrvenditemnbr(string $VexrVendItemNbr) Return the first ChildItemXrefVendor filtered by the VexrVendItemNbr column
 * @method     ChildItemXrefVendor findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefVendor filtered by the InitItemNbr column
 * @method     ChildItemXrefVendor findOneByVexrpoordercode(string $VexrPoOrderCode) Return the first ChildItemXrefVendor filtered by the VexrPoOrderCode column
 * @method     ChildItemXrefVendor findOneByVexroption1(string $VexrOption1) Return the first ChildItemXrefVendor filtered by the VexrOption1 column
 * @method     ChildItemXrefVendor findOneByIntbuompur(string $IntbUomPur) Return the first ChildItemXrefVendor filtered by the IntbUomPur column
 * @method     ChildItemXrefVendor findOneByVexrcaseqty(string $VexrCaseQty) Return the first ChildItemXrefVendor filtered by the VexrCaseQty column
 * @method     ChildItemXrefVendor findOneByVexrprtkitdet(string $VexrPrtKitDet) Return the first ChildItemXrefVendor filtered by the VexrPrtKitDet column
 * @method     ChildItemXrefVendor findOneByVexrlistprice(string $VexrListPrice) Return the first ChildItemXrefVendor filtered by the VexrListPrice column
 * @method     ChildItemXrefVendor findOneByVexrunitcost(string $VexrUnitCost) Return the first ChildItemXrefVendor filtered by the VexrUnitCost column
 * @method     ChildItemXrefVendor findOneByVexrforeigncost(string $VexrForeignCost) Return the first ChildItemXrefVendor filtered by the VexrForeignCost column
 * @method     ChildItemXrefVendor findOneByVexrcostlastdate(string $VexrCostLastDate) Return the first ChildItemXrefVendor filtered by the VexrCostLastDate column
 * @method     ChildItemXrefVendor findOneByVexrunitunit1(int $VexrUnitUnit1) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit1 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost1(string $VexrUnitCost1) Return the first ChildItemXrefVendor filtered by the VexrUnitCost1 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit2(int $VexrUnitUnit2) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit2 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost2(string $VexrUnitCost2) Return the first ChildItemXrefVendor filtered by the VexrUnitCost2 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit3(int $VexrUnitUnit3) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit3 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost3(string $VexrUnitCost3) Return the first ChildItemXrefVendor filtered by the VexrUnitCost3 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit4(int $VexrUnitUnit4) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit4 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost4(string $VexrUnitCost4) Return the first ChildItemXrefVendor filtered by the VexrUnitCost4 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit5(int $VexrUnitUnit5) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit5 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost5(string $VexrUnitCost5) Return the first ChildItemXrefVendor filtered by the VexrUnitCost5 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit6(int $VexrUnitUnit6) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit6 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost6(string $VexrUnitCost6) Return the first ChildItemXrefVendor filtered by the VexrUnitCost6 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit7(int $VexrUnitUnit7) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit7 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost7(string $VexrUnitCost7) Return the first ChildItemXrefVendor filtered by the VexrUnitCost7 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit8(int $VexrUnitUnit8) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit8 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost8(string $VexrUnitCost8) Return the first ChildItemXrefVendor filtered by the VexrUnitCost8 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit9(int $VexrUnitUnit9) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit9 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost9(string $VexrUnitCost9) Return the first ChildItemXrefVendor filtered by the VexrUnitCost9 column
 * @method     ChildItemXrefVendor findOneByVexrunitunit10(int $VexrUnitUnit10) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit10 column
 * @method     ChildItemXrefVendor findOneByVexrunitcost10(string $VexrUnitCost10) Return the first ChildItemXrefVendor filtered by the VexrUnitCost10 column
 * @method     ChildItemXrefVendor findOneByVexraprvcode(string $VexrAprvCode) Return the first ChildItemXrefVendor filtered by the VexrAprvCode column
 * @method     ChildItemXrefVendor findOneByVexrvenditemdesc(string $VexrVendItemDesc) Return the first ChildItemXrefVendor filtered by the VexrVendItemDesc column
 * @method     ChildItemXrefVendor findOneByVexrminbuyqty(int $VexrMinBuyQty) Return the first ChildItemXrefVendor filtered by the VexrMinBuyQty column
 * @method     ChildItemXrefVendor findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendor filtered by the DateUpdtd column
 * @method     ChildItemXrefVendor findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendor filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendor findOneByDummy(string $dummy) Return the first ChildItemXrefVendor filtered by the dummy column *

 * @method     ChildItemXrefVendor requirePk($key, ConnectionInterface $con = null) Return the ChildItemXrefVendor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOne(ConnectionInterface $con = null) Return the first ChildItemXrefVendor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendor requireOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendor filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrvenditemnbr(string $VexrVendItemNbr) Return the first ChildItemXrefVendor filtered by the VexrVendItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefVendor filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrpoordercode(string $VexrPoOrderCode) Return the first ChildItemXrefVendor filtered by the VexrPoOrderCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexroption1(string $VexrOption1) Return the first ChildItemXrefVendor filtered by the VexrOption1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByIntbuompur(string $IntbUomPur) Return the first ChildItemXrefVendor filtered by the IntbUomPur column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrcaseqty(string $VexrCaseQty) Return the first ChildItemXrefVendor filtered by the VexrCaseQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrprtkitdet(string $VexrPrtKitDet) Return the first ChildItemXrefVendor filtered by the VexrPrtKitDet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrlistprice(string $VexrListPrice) Return the first ChildItemXrefVendor filtered by the VexrListPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost(string $VexrUnitCost) Return the first ChildItemXrefVendor filtered by the VexrUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrforeigncost(string $VexrForeignCost) Return the first ChildItemXrefVendor filtered by the VexrForeignCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrcostlastdate(string $VexrCostLastDate) Return the first ChildItemXrefVendor filtered by the VexrCostLastDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit1(int $VexrUnitUnit1) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost1(string $VexrUnitCost1) Return the first ChildItemXrefVendor filtered by the VexrUnitCost1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit2(int $VexrUnitUnit2) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost2(string $VexrUnitCost2) Return the first ChildItemXrefVendor filtered by the VexrUnitCost2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit3(int $VexrUnitUnit3) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost3(string $VexrUnitCost3) Return the first ChildItemXrefVendor filtered by the VexrUnitCost3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit4(int $VexrUnitUnit4) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost4(string $VexrUnitCost4) Return the first ChildItemXrefVendor filtered by the VexrUnitCost4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit5(int $VexrUnitUnit5) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost5(string $VexrUnitCost5) Return the first ChildItemXrefVendor filtered by the VexrUnitCost5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit6(int $VexrUnitUnit6) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost6(string $VexrUnitCost6) Return the first ChildItemXrefVendor filtered by the VexrUnitCost6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit7(int $VexrUnitUnit7) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost7(string $VexrUnitCost7) Return the first ChildItemXrefVendor filtered by the VexrUnitCost7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit8(int $VexrUnitUnit8) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost8(string $VexrUnitCost8) Return the first ChildItemXrefVendor filtered by the VexrUnitCost8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit9(int $VexrUnitUnit9) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost9(string $VexrUnitCost9) Return the first ChildItemXrefVendor filtered by the VexrUnitCost9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitunit10(int $VexrUnitUnit10) Return the first ChildItemXrefVendor filtered by the VexrUnitUnit10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrunitcost10(string $VexrUnitCost10) Return the first ChildItemXrefVendor filtered by the VexrUnitCost10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexraprvcode(string $VexrAprvCode) Return the first ChildItemXrefVendor filtered by the VexrAprvCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrvenditemdesc(string $VexrVendItemDesc) Return the first ChildItemXrefVendor filtered by the VexrVendItemDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByVexrminbuyqty(int $VexrMinBuyQty) Return the first ChildItemXrefVendor filtered by the VexrMinBuyQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendor filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendor filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendor requireOneByDummy(string $dummy) Return the first ChildItemXrefVendor filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemXrefVendor objects based on current ModelCriteria
 * @method     ChildItemXrefVendor[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildItemXrefVendor objects filtered by the ApveVendId column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrvenditemnbr(string $VexrVendItemNbr) Return ChildItemXrefVendor objects filtered by the VexrVendItemNbr column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemXrefVendor objects filtered by the InitItemNbr column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrpoordercode(string $VexrPoOrderCode) Return ChildItemXrefVendor objects filtered by the VexrPoOrderCode column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexroption1(string $VexrOption1) Return ChildItemXrefVendor objects filtered by the VexrOption1 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByIntbuompur(string $IntbUomPur) Return ChildItemXrefVendor objects filtered by the IntbUomPur column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrcaseqty(string $VexrCaseQty) Return ChildItemXrefVendor objects filtered by the VexrCaseQty column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrprtkitdet(string $VexrPrtKitDet) Return ChildItemXrefVendor objects filtered by the VexrPrtKitDet column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrlistprice(string $VexrListPrice) Return ChildItemXrefVendor objects filtered by the VexrListPrice column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost(string $VexrUnitCost) Return ChildItemXrefVendor objects filtered by the VexrUnitCost column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrforeigncost(string $VexrForeignCost) Return ChildItemXrefVendor objects filtered by the VexrForeignCost column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrcostlastdate(string $VexrCostLastDate) Return ChildItemXrefVendor objects filtered by the VexrCostLastDate column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit1(int $VexrUnitUnit1) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit1 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost1(string $VexrUnitCost1) Return ChildItemXrefVendor objects filtered by the VexrUnitCost1 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit2(int $VexrUnitUnit2) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit2 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost2(string $VexrUnitCost2) Return ChildItemXrefVendor objects filtered by the VexrUnitCost2 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit3(int $VexrUnitUnit3) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit3 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost3(string $VexrUnitCost3) Return ChildItemXrefVendor objects filtered by the VexrUnitCost3 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit4(int $VexrUnitUnit4) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit4 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost4(string $VexrUnitCost4) Return ChildItemXrefVendor objects filtered by the VexrUnitCost4 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit5(int $VexrUnitUnit5) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit5 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost5(string $VexrUnitCost5) Return ChildItemXrefVendor objects filtered by the VexrUnitCost5 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit6(int $VexrUnitUnit6) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit6 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost6(string $VexrUnitCost6) Return ChildItemXrefVendor objects filtered by the VexrUnitCost6 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit7(int $VexrUnitUnit7) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit7 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost7(string $VexrUnitCost7) Return ChildItemXrefVendor objects filtered by the VexrUnitCost7 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit8(int $VexrUnitUnit8) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit8 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost8(string $VexrUnitCost8) Return ChildItemXrefVendor objects filtered by the VexrUnitCost8 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit9(int $VexrUnitUnit9) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit9 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost9(string $VexrUnitCost9) Return ChildItemXrefVendor objects filtered by the VexrUnitCost9 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitunit10(int $VexrUnitUnit10) Return ChildItemXrefVendor objects filtered by the VexrUnitUnit10 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrunitcost10(string $VexrUnitCost10) Return ChildItemXrefVendor objects filtered by the VexrUnitCost10 column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexraprvcode(string $VexrAprvCode) Return ChildItemXrefVendor objects filtered by the VexrAprvCode column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrvenditemdesc(string $VexrVendItemDesc) Return ChildItemXrefVendor objects filtered by the VexrVendItemDesc column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByVexrminbuyqty(int $VexrMinBuyQty) Return ChildItemXrefVendor objects filtered by the VexrMinBuyQty column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemXrefVendor objects filtered by the DateUpdtd column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemXrefVendor objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendor[]|ObjectCollection findByDummy(string $dummy) Return ChildItemXrefVendor objects filtered by the dummy column
 * @method     ChildItemXrefVendor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemXrefVendorQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefVendorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefVendor', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefVendorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefVendorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemXrefVendorQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefVendorQuery();
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
     * @param array[$ApveVendId, $VexrVendItemNbr, $InitItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefVendor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefVendorTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildItemXrefVendor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, VexrVendItemNbr, InitItemNbr, VexrPoOrderCode, VexrOption1, IntbUomPur, VexrCaseQty, VexrPrtKitDet, VexrListPrice, VexrUnitCost, VexrForeignCost, VexrCostLastDate, VexrUnitUnit1, VexrUnitCost1, VexrUnitUnit2, VexrUnitCost2, VexrUnitUnit3, VexrUnitCost3, VexrUnitUnit4, VexrUnitCost4, VexrUnitUnit5, VexrUnitCost5, VexrUnitUnit6, VexrUnitCost6, VexrUnitUnit7, VexrUnitCost7, VexrUnitUnit8, VexrUnitCost8, VexrUnitUnit9, VexrUnitCost9, VexrUnitUnit10, VexrUnitCost10, VexrAprvCode, VexrVendItemDesc, VexrMinBuyQty, DateUpdtd, TimeUpdtd, dummy FROM vend_item_xref WHERE ApveVendId = :p0 AND VexrVendItemNbr = :p1 AND InitItemNbr = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemXrefVendor $obj */
            $obj = new ChildItemXrefVendor();
            $obj->hydrate($row);
            ItemXrefVendorTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildItemXrefVendor|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemXrefVendorTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemXrefVendorTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemXrefVendorTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the VexrVendItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrvenditemnbr('fooValue');   // WHERE VexrVendItemNbr = 'fooValue'
     * $query->filterByVexrvenditemnbr('%fooValue%', Criteria::LIKE); // WHERE VexrVendItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexrvenditemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrvenditemnbr($vexrvenditemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexrvenditemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR, $vexrvenditemnbr, $comparison);
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
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the VexrPoOrderCode column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrpoordercode('fooValue');   // WHERE VexrPoOrderCode = 'fooValue'
     * $query->filterByVexrpoordercode('%fooValue%', Criteria::LIKE); // WHERE VexrPoOrderCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexrpoordercode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrpoordercode($vexrpoordercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexrpoordercode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRPOORDERCODE, $vexrpoordercode, $comparison);
    }

    /**
     * Filter the query on the VexrOption1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexroption1('fooValue');   // WHERE VexrOption1 = 'fooValue'
     * $query->filterByVexroption1('%fooValue%', Criteria::LIKE); // WHERE VexrOption1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexroption1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexroption1($vexroption1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexroption1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXROPTION1, $vexroption1, $comparison);
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
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);
    }

    /**
     * Filter the query on the VexrCaseQty column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrcaseqty(1234); // WHERE VexrCaseQty = 1234
     * $query->filterByVexrcaseqty(array(12, 34)); // WHERE VexrCaseQty IN (12, 34)
     * $query->filterByVexrcaseqty(array('min' => 12)); // WHERE VexrCaseQty > 12
     * </code>
     *
     * @param     mixed $vexrcaseqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrcaseqty($vexrcaseqty = null, $comparison = null)
    {
        if (is_array($vexrcaseqty)) {
            $useMinMax = false;
            if (isset($vexrcaseqty['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRCASEQTY, $vexrcaseqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrcaseqty['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRCASEQTY, $vexrcaseqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRCASEQTY, $vexrcaseqty, $comparison);
    }

    /**
     * Filter the query on the VexrPrtKitDet column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrprtkitdet('fooValue');   // WHERE VexrPrtKitDet = 'fooValue'
     * $query->filterByVexrprtkitdet('%fooValue%', Criteria::LIKE); // WHERE VexrPrtKitDet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexrprtkitdet The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrprtkitdet($vexrprtkitdet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexrprtkitdet)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRPRTKITDET, $vexrprtkitdet, $comparison);
    }

    /**
     * Filter the query on the VexrListPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrlistprice(1234); // WHERE VexrListPrice = 1234
     * $query->filterByVexrlistprice(array(12, 34)); // WHERE VexrListPrice IN (12, 34)
     * $query->filterByVexrlistprice(array('min' => 12)); // WHERE VexrListPrice > 12
     * </code>
     *
     * @param     mixed $vexrlistprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrlistprice($vexrlistprice = null, $comparison = null)
    {
        if (is_array($vexrlistprice)) {
            $useMinMax = false;
            if (isset($vexrlistprice['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRLISTPRICE, $vexrlistprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrlistprice['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRLISTPRICE, $vexrlistprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRLISTPRICE, $vexrlistprice, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost(1234); // WHERE VexrUnitCost = 1234
     * $query->filterByVexrunitcost(array(12, 34)); // WHERE VexrUnitCost IN (12, 34)
     * $query->filterByVexrunitcost(array('min' => 12)); // WHERE VexrUnitCost > 12
     * </code>
     *
     * @param     mixed $vexrunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost($vexrunitcost = null, $comparison = null)
    {
        if (is_array($vexrunitcost)) {
            $useMinMax = false;
            if (isset($vexrunitcost['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST, $vexrunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST, $vexrunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST, $vexrunitcost, $comparison);
    }

    /**
     * Filter the query on the VexrForeignCost column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrforeigncost(1234); // WHERE VexrForeignCost = 1234
     * $query->filterByVexrforeigncost(array(12, 34)); // WHERE VexrForeignCost IN (12, 34)
     * $query->filterByVexrforeigncost(array('min' => 12)); // WHERE VexrForeignCost > 12
     * </code>
     *
     * @param     mixed $vexrforeigncost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrforeigncost($vexrforeigncost = null, $comparison = null)
    {
        if (is_array($vexrforeigncost)) {
            $useMinMax = false;
            if (isset($vexrforeigncost['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST, $vexrforeigncost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrforeigncost['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST, $vexrforeigncost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRFOREIGNCOST, $vexrforeigncost, $comparison);
    }

    /**
     * Filter the query on the VexrCostLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrcostlastdate('fooValue');   // WHERE VexrCostLastDate = 'fooValue'
     * $query->filterByVexrcostlastdate('%fooValue%', Criteria::LIKE); // WHERE VexrCostLastDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexrcostlastdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrcostlastdate($vexrcostlastdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexrcostlastdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRCOSTLASTDATE, $vexrcostlastdate, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit1(1234); // WHERE VexrUnitUnit1 = 1234
     * $query->filterByVexrunitunit1(array(12, 34)); // WHERE VexrUnitUnit1 IN (12, 34)
     * $query->filterByVexrunitunit1(array('min' => 12)); // WHERE VexrUnitUnit1 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit1($vexrunitunit1 = null, $comparison = null)
    {
        if (is_array($vexrunitunit1)) {
            $useMinMax = false;
            if (isset($vexrunitunit1['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1, $vexrunitunit1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit1['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1, $vexrunitunit1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT1, $vexrunitunit1, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost1(1234); // WHERE VexrUnitCost1 = 1234
     * $query->filterByVexrunitcost1(array(12, 34)); // WHERE VexrUnitCost1 IN (12, 34)
     * $query->filterByVexrunitcost1(array('min' => 12)); // WHERE VexrUnitCost1 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost1($vexrunitcost1 = null, $comparison = null)
    {
        if (is_array($vexrunitcost1)) {
            $useMinMax = false;
            if (isset($vexrunitcost1['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST1, $vexrunitcost1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost1['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST1, $vexrunitcost1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST1, $vexrunitcost1, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit2(1234); // WHERE VexrUnitUnit2 = 1234
     * $query->filterByVexrunitunit2(array(12, 34)); // WHERE VexrUnitUnit2 IN (12, 34)
     * $query->filterByVexrunitunit2(array('min' => 12)); // WHERE VexrUnitUnit2 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit2($vexrunitunit2 = null, $comparison = null)
    {
        if (is_array($vexrunitunit2)) {
            $useMinMax = false;
            if (isset($vexrunitunit2['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2, $vexrunitunit2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit2['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2, $vexrunitunit2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT2, $vexrunitunit2, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost2(1234); // WHERE VexrUnitCost2 = 1234
     * $query->filterByVexrunitcost2(array(12, 34)); // WHERE VexrUnitCost2 IN (12, 34)
     * $query->filterByVexrunitcost2(array('min' => 12)); // WHERE VexrUnitCost2 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost2($vexrunitcost2 = null, $comparison = null)
    {
        if (is_array($vexrunitcost2)) {
            $useMinMax = false;
            if (isset($vexrunitcost2['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST2, $vexrunitcost2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost2['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST2, $vexrunitcost2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST2, $vexrunitcost2, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit3(1234); // WHERE VexrUnitUnit3 = 1234
     * $query->filterByVexrunitunit3(array(12, 34)); // WHERE VexrUnitUnit3 IN (12, 34)
     * $query->filterByVexrunitunit3(array('min' => 12)); // WHERE VexrUnitUnit3 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit3($vexrunitunit3 = null, $comparison = null)
    {
        if (is_array($vexrunitunit3)) {
            $useMinMax = false;
            if (isset($vexrunitunit3['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3, $vexrunitunit3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit3['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3, $vexrunitunit3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT3, $vexrunitunit3, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost3(1234); // WHERE VexrUnitCost3 = 1234
     * $query->filterByVexrunitcost3(array(12, 34)); // WHERE VexrUnitCost3 IN (12, 34)
     * $query->filterByVexrunitcost3(array('min' => 12)); // WHERE VexrUnitCost3 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost3($vexrunitcost3 = null, $comparison = null)
    {
        if (is_array($vexrunitcost3)) {
            $useMinMax = false;
            if (isset($vexrunitcost3['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST3, $vexrunitcost3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost3['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST3, $vexrunitcost3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST3, $vexrunitcost3, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit4(1234); // WHERE VexrUnitUnit4 = 1234
     * $query->filterByVexrunitunit4(array(12, 34)); // WHERE VexrUnitUnit4 IN (12, 34)
     * $query->filterByVexrunitunit4(array('min' => 12)); // WHERE VexrUnitUnit4 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit4($vexrunitunit4 = null, $comparison = null)
    {
        if (is_array($vexrunitunit4)) {
            $useMinMax = false;
            if (isset($vexrunitunit4['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4, $vexrunitunit4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit4['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4, $vexrunitunit4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT4, $vexrunitunit4, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost4(1234); // WHERE VexrUnitCost4 = 1234
     * $query->filterByVexrunitcost4(array(12, 34)); // WHERE VexrUnitCost4 IN (12, 34)
     * $query->filterByVexrunitcost4(array('min' => 12)); // WHERE VexrUnitCost4 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost4($vexrunitcost4 = null, $comparison = null)
    {
        if (is_array($vexrunitcost4)) {
            $useMinMax = false;
            if (isset($vexrunitcost4['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST4, $vexrunitcost4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost4['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST4, $vexrunitcost4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST4, $vexrunitcost4, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit5 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit5(1234); // WHERE VexrUnitUnit5 = 1234
     * $query->filterByVexrunitunit5(array(12, 34)); // WHERE VexrUnitUnit5 IN (12, 34)
     * $query->filterByVexrunitunit5(array('min' => 12)); // WHERE VexrUnitUnit5 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit5($vexrunitunit5 = null, $comparison = null)
    {
        if (is_array($vexrunitunit5)) {
            $useMinMax = false;
            if (isset($vexrunitunit5['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5, $vexrunitunit5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit5['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5, $vexrunitunit5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT5, $vexrunitunit5, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost5 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost5(1234); // WHERE VexrUnitCost5 = 1234
     * $query->filterByVexrunitcost5(array(12, 34)); // WHERE VexrUnitCost5 IN (12, 34)
     * $query->filterByVexrunitcost5(array('min' => 12)); // WHERE VexrUnitCost5 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost5($vexrunitcost5 = null, $comparison = null)
    {
        if (is_array($vexrunitcost5)) {
            $useMinMax = false;
            if (isset($vexrunitcost5['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST5, $vexrunitcost5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost5['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST5, $vexrunitcost5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST5, $vexrunitcost5, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit6 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit6(1234); // WHERE VexrUnitUnit6 = 1234
     * $query->filterByVexrunitunit6(array(12, 34)); // WHERE VexrUnitUnit6 IN (12, 34)
     * $query->filterByVexrunitunit6(array('min' => 12)); // WHERE VexrUnitUnit6 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit6($vexrunitunit6 = null, $comparison = null)
    {
        if (is_array($vexrunitunit6)) {
            $useMinMax = false;
            if (isset($vexrunitunit6['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6, $vexrunitunit6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit6['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6, $vexrunitunit6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT6, $vexrunitunit6, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost6 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost6(1234); // WHERE VexrUnitCost6 = 1234
     * $query->filterByVexrunitcost6(array(12, 34)); // WHERE VexrUnitCost6 IN (12, 34)
     * $query->filterByVexrunitcost6(array('min' => 12)); // WHERE VexrUnitCost6 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost6($vexrunitcost6 = null, $comparison = null)
    {
        if (is_array($vexrunitcost6)) {
            $useMinMax = false;
            if (isset($vexrunitcost6['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST6, $vexrunitcost6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost6['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST6, $vexrunitcost6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST6, $vexrunitcost6, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit7 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit7(1234); // WHERE VexrUnitUnit7 = 1234
     * $query->filterByVexrunitunit7(array(12, 34)); // WHERE VexrUnitUnit7 IN (12, 34)
     * $query->filterByVexrunitunit7(array('min' => 12)); // WHERE VexrUnitUnit7 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit7($vexrunitunit7 = null, $comparison = null)
    {
        if (is_array($vexrunitunit7)) {
            $useMinMax = false;
            if (isset($vexrunitunit7['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7, $vexrunitunit7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit7['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7, $vexrunitunit7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT7, $vexrunitunit7, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost7 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost7(1234); // WHERE VexrUnitCost7 = 1234
     * $query->filterByVexrunitcost7(array(12, 34)); // WHERE VexrUnitCost7 IN (12, 34)
     * $query->filterByVexrunitcost7(array('min' => 12)); // WHERE VexrUnitCost7 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost7($vexrunitcost7 = null, $comparison = null)
    {
        if (is_array($vexrunitcost7)) {
            $useMinMax = false;
            if (isset($vexrunitcost7['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST7, $vexrunitcost7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost7['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST7, $vexrunitcost7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST7, $vexrunitcost7, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit8 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit8(1234); // WHERE VexrUnitUnit8 = 1234
     * $query->filterByVexrunitunit8(array(12, 34)); // WHERE VexrUnitUnit8 IN (12, 34)
     * $query->filterByVexrunitunit8(array('min' => 12)); // WHERE VexrUnitUnit8 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit8($vexrunitunit8 = null, $comparison = null)
    {
        if (is_array($vexrunitunit8)) {
            $useMinMax = false;
            if (isset($vexrunitunit8['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8, $vexrunitunit8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit8['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8, $vexrunitunit8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT8, $vexrunitunit8, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost8 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost8(1234); // WHERE VexrUnitCost8 = 1234
     * $query->filterByVexrunitcost8(array(12, 34)); // WHERE VexrUnitCost8 IN (12, 34)
     * $query->filterByVexrunitcost8(array('min' => 12)); // WHERE VexrUnitCost8 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost8($vexrunitcost8 = null, $comparison = null)
    {
        if (is_array($vexrunitcost8)) {
            $useMinMax = false;
            if (isset($vexrunitcost8['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST8, $vexrunitcost8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost8['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST8, $vexrunitcost8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST8, $vexrunitcost8, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit9 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit9(1234); // WHERE VexrUnitUnit9 = 1234
     * $query->filterByVexrunitunit9(array(12, 34)); // WHERE VexrUnitUnit9 IN (12, 34)
     * $query->filterByVexrunitunit9(array('min' => 12)); // WHERE VexrUnitUnit9 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit9($vexrunitunit9 = null, $comparison = null)
    {
        if (is_array($vexrunitunit9)) {
            $useMinMax = false;
            if (isset($vexrunitunit9['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9, $vexrunitunit9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit9['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9, $vexrunitunit9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT9, $vexrunitunit9, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost9 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost9(1234); // WHERE VexrUnitCost9 = 1234
     * $query->filterByVexrunitcost9(array(12, 34)); // WHERE VexrUnitCost9 IN (12, 34)
     * $query->filterByVexrunitcost9(array('min' => 12)); // WHERE VexrUnitCost9 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost9($vexrunitcost9 = null, $comparison = null)
    {
        if (is_array($vexrunitcost9)) {
            $useMinMax = false;
            if (isset($vexrunitcost9['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST9, $vexrunitcost9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost9['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST9, $vexrunitcost9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST9, $vexrunitcost9, $comparison);
    }

    /**
     * Filter the query on the VexrUnitUnit10 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitunit10(1234); // WHERE VexrUnitUnit10 = 1234
     * $query->filterByVexrunitunit10(array(12, 34)); // WHERE VexrUnitUnit10 IN (12, 34)
     * $query->filterByVexrunitunit10(array('min' => 12)); // WHERE VexrUnitUnit10 > 12
     * </code>
     *
     * @param     mixed $vexrunitunit10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitunit10($vexrunitunit10 = null, $comparison = null)
    {
        if (is_array($vexrunitunit10)) {
            $useMinMax = false;
            if (isset($vexrunitunit10['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10, $vexrunitunit10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitunit10['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10, $vexrunitunit10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITUNIT10, $vexrunitunit10, $comparison);
    }

    /**
     * Filter the query on the VexrUnitCost10 column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrunitcost10(1234); // WHERE VexrUnitCost10 = 1234
     * $query->filterByVexrunitcost10(array(12, 34)); // WHERE VexrUnitCost10 IN (12, 34)
     * $query->filterByVexrunitcost10(array('min' => 12)); // WHERE VexrUnitCost10 > 12
     * </code>
     *
     * @param     mixed $vexrunitcost10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrunitcost10($vexrunitcost10 = null, $comparison = null)
    {
        if (is_array($vexrunitcost10)) {
            $useMinMax = false;
            if (isset($vexrunitcost10['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST10, $vexrunitcost10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrunitcost10['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST10, $vexrunitcost10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRUNITCOST10, $vexrunitcost10, $comparison);
    }

    /**
     * Filter the query on the VexrAprvCode column
     *
     * Example usage:
     * <code>
     * $query->filterByVexraprvcode('fooValue');   // WHERE VexrAprvCode = 'fooValue'
     * $query->filterByVexraprvcode('%fooValue%', Criteria::LIKE); // WHERE VexrAprvCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexraprvcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexraprvcode($vexraprvcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexraprvcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRAPRVCODE, $vexraprvcode, $comparison);
    }

    /**
     * Filter the query on the VexrVendItemDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrvenditemdesc('fooValue');   // WHERE VexrVendItemDesc = 'fooValue'
     * $query->filterByVexrvenditemdesc('%fooValue%', Criteria::LIKE); // WHERE VexrVendItemDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vexrvenditemdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrvenditemdesc($vexrvenditemdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vexrvenditemdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRVENDITEMDESC, $vexrvenditemdesc, $comparison);
    }

    /**
     * Filter the query on the VexrMinBuyQty column
     *
     * Example usage:
     * <code>
     * $query->filterByVexrminbuyqty(1234); // WHERE VexrMinBuyQty = 1234
     * $query->filterByVexrminbuyqty(array(12, 34)); // WHERE VexrMinBuyQty IN (12, 34)
     * $query->filterByVexrminbuyqty(array('min' => 12)); // WHERE VexrMinBuyQty > 12
     * </code>
     *
     * @param     mixed $vexrminbuyqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVexrminbuyqty($vexrminbuyqty = null, $comparison = null)
    {
        if (is_array($vexrminbuyqty)) {
            $useMinMax = false;
            if (isset($vexrminbuyqty['min'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY, $vexrminbuyqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vexrminbuyqty['max'])) {
                $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY, $vexrminbuyqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_VEXRMINBUYQTY, $vexrminbuyqty, $comparison);
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
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ItemXrefVendorTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefVendorTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemXrefVendor $itemXrefVendor Object to remove from the list of results
     *
     * @return $this|ChildItemXrefVendorQuery The current query, for fluid interface
     */
    public function prune($itemXrefVendor = null)
    {
        if ($itemXrefVendor) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefVendorTableMap::COL_APVEVENDID), $itemXrefVendor->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefVendorTableMap::COL_VEXRVENDITEMNBR), $itemXrefVendor->getVexrvenditemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemXrefVendorTableMap::COL_INITITEMNBR), $itemXrefVendor->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the vend_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefVendorTableMap::clearInstancePool();
            ItemXrefVendorTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefVendorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefVendorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefVendorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemXrefVendorQuery
