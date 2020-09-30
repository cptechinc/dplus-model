<?php

namespace Base;

use \ItemPricingDiscount as ChildItemPricingDiscount;
use \ItemPricingDiscountQuery as ChildItemPricingDiscountQuery;
use \Exception;
use \PDO;
use Map\ItemPricingDiscountTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_price_discount' table.
 *
 *
 *
 * @method     ChildItemPricingDiscountQuery orderByOepctype($order = Criteria::ASC) Order by the OepcType column
 * @method     ChildItemPricingDiscountQuery orderByOepctbltype($order = Criteria::ASC) Order by the OepcTblType column
 * @method     ChildItemPricingDiscountQuery orderByOepcstrtdate($order = Criteria::ASC) Order by the OepcStrtDate column
 * @method     ChildItemPricingDiscountQuery orderByOepccustid($order = Criteria::ASC) Order by the OepcCustId column
 * @method     ChildItemPricingDiscountQuery orderByOepccustcode($order = Criteria::ASC) Order by the OepcCustCode column
 * @method     ChildItemPricingDiscountQuery orderByOepcitemnbr($order = Criteria::ASC) Order by the OepcItemNbr column
 * @method     ChildItemPricingDiscountQuery orderByOepcitemgrup($order = Criteria::ASC) Order by the OepcItemGrup column
 * @method     ChildItemPricingDiscountQuery orderByOepcsp($order = Criteria::ASC) Order by the OepcSp column
 * @method     ChildItemPricingDiscountQuery orderByOepcmeth($order = Criteria::ASC) Order by the OepcMeth column
 * @method     ChildItemPricingDiscountQuery orderByOepccode($order = Criteria::ASC) Order by the OepcCode column
 * @method     ChildItemPricingDiscountQuery orderByOepcpcnt($order = Criteria::ASC) Order by the OepcPcnt column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricbase($order = Criteria::ASC) Order by the OepcPricBase column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricunit1($order = Criteria::ASC) Order by the OepcPricUnit1 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricpric1($order = Criteria::ASC) Order by the OepcPricPric1 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricuom1($order = Criteria::ASC) Order by the OepcPricUom1 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricunit2($order = Criteria::ASC) Order by the OepcPricUnit2 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricpric2($order = Criteria::ASC) Order by the OepcPricPric2 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricuom2($order = Criteria::ASC) Order by the OepcPricUom2 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricunit3($order = Criteria::ASC) Order by the OepcPricUnit3 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricpric3($order = Criteria::ASC) Order by the OepcPricPric3 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricuom3($order = Criteria::ASC) Order by the OepcPricUom3 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricunit4($order = Criteria::ASC) Order by the OepcPricUnit4 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricpric4($order = Criteria::ASC) Order by the OepcPricPric4 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricuom4($order = Criteria::ASC) Order by the OepcPricUom4 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricunit5($order = Criteria::ASC) Order by the OepcPricUnit5 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricpric5($order = Criteria::ASC) Order by the OepcPricPric5 column
 * @method     ChildItemPricingDiscountQuery orderByOepcpricuom5($order = Criteria::ASC) Order by the OepcPricUom5 column
 * @method     ChildItemPricingDiscountQuery orderByOepcstancost($order = Criteria::ASC) Order by the OepcStanCost column
 * @method     ChildItemPricingDiscountQuery orderByOepcenddate($order = Criteria::ASC) Order by the OepcEndDate column
 * @method     ChildItemPricingDiscountQuery orderByOepcqtybrk($order = Criteria::ASC) Order by the OepcQtyBrk column
 * @method     ChildItemPricingDiscountQuery orderByOepccontcost($order = Criteria::ASC) Order by the OepcContCost column
 * @method     ChildItemPricingDiscountQuery orderByOepclastchgdate($order = Criteria::ASC) Order by the OepcLastChgDate column
 * @method     ChildItemPricingDiscountQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemPricingDiscountQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemPricingDiscountQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemPricingDiscountQuery groupByOepctype() Group by the OepcType column
 * @method     ChildItemPricingDiscountQuery groupByOepctbltype() Group by the OepcTblType column
 * @method     ChildItemPricingDiscountQuery groupByOepcstrtdate() Group by the OepcStrtDate column
 * @method     ChildItemPricingDiscountQuery groupByOepccustid() Group by the OepcCustId column
 * @method     ChildItemPricingDiscountQuery groupByOepccustcode() Group by the OepcCustCode column
 * @method     ChildItemPricingDiscountQuery groupByOepcitemnbr() Group by the OepcItemNbr column
 * @method     ChildItemPricingDiscountQuery groupByOepcitemgrup() Group by the OepcItemGrup column
 * @method     ChildItemPricingDiscountQuery groupByOepcsp() Group by the OepcSp column
 * @method     ChildItemPricingDiscountQuery groupByOepcmeth() Group by the OepcMeth column
 * @method     ChildItemPricingDiscountQuery groupByOepccode() Group by the OepcCode column
 * @method     ChildItemPricingDiscountQuery groupByOepcpcnt() Group by the OepcPcnt column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricbase() Group by the OepcPricBase column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricunit1() Group by the OepcPricUnit1 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricpric1() Group by the OepcPricPric1 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricuom1() Group by the OepcPricUom1 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricunit2() Group by the OepcPricUnit2 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricpric2() Group by the OepcPricPric2 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricuom2() Group by the OepcPricUom2 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricunit3() Group by the OepcPricUnit3 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricpric3() Group by the OepcPricPric3 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricuom3() Group by the OepcPricUom3 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricunit4() Group by the OepcPricUnit4 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricpric4() Group by the OepcPricPric4 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricuom4() Group by the OepcPricUom4 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricunit5() Group by the OepcPricUnit5 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricpric5() Group by the OepcPricPric5 column
 * @method     ChildItemPricingDiscountQuery groupByOepcpricuom5() Group by the OepcPricUom5 column
 * @method     ChildItemPricingDiscountQuery groupByOepcstancost() Group by the OepcStanCost column
 * @method     ChildItemPricingDiscountQuery groupByOepcenddate() Group by the OepcEndDate column
 * @method     ChildItemPricingDiscountQuery groupByOepcqtybrk() Group by the OepcQtyBrk column
 * @method     ChildItemPricingDiscountQuery groupByOepccontcost() Group by the OepcContCost column
 * @method     ChildItemPricingDiscountQuery groupByOepclastchgdate() Group by the OepcLastChgDate column
 * @method     ChildItemPricingDiscountQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemPricingDiscountQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemPricingDiscountQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemPricingDiscountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemPricingDiscountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemPricingDiscountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemPricingDiscountQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemPricingDiscountQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemPricingDiscountQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemPricingDiscountQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemPricingDiscountQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemPricingDiscountQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemPricingDiscountQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemPricingDiscountQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemPricingDiscountQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemPricingDiscountQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemPricingDiscountQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildItemPricingDiscountQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildItemPricingDiscountQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildItemPricingDiscountQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildItemPricingDiscountQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemPricingDiscountQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemPricingDiscountQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \ItemMasterItemQuery|\CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemPricingDiscount findOne(ConnectionInterface $con = null) Return the first ChildItemPricingDiscount matching the query
 * @method     ChildItemPricingDiscount findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemPricingDiscount matching the query, or a new ChildItemPricingDiscount object populated from the query conditions when no match is found
 *
 * @method     ChildItemPricingDiscount findOneByOepctype(string $OepcType) Return the first ChildItemPricingDiscount filtered by the OepcType column
 * @method     ChildItemPricingDiscount findOneByOepctbltype(int $OepcTblType) Return the first ChildItemPricingDiscount filtered by the OepcTblType column
 * @method     ChildItemPricingDiscount findOneByOepcstrtdate(int $OepcStrtDate) Return the first ChildItemPricingDiscount filtered by the OepcStrtDate column
 * @method     ChildItemPricingDiscount findOneByOepccustid(string $OepcCustId) Return the first ChildItemPricingDiscount filtered by the OepcCustId column
 * @method     ChildItemPricingDiscount findOneByOepccustcode(string $OepcCustCode) Return the first ChildItemPricingDiscount filtered by the OepcCustCode column
 * @method     ChildItemPricingDiscount findOneByOepcitemnbr(string $OepcItemNbr) Return the first ChildItemPricingDiscount filtered by the OepcItemNbr column
 * @method     ChildItemPricingDiscount findOneByOepcitemgrup(string $OepcItemGrup) Return the first ChildItemPricingDiscount filtered by the OepcItemGrup column
 * @method     ChildItemPricingDiscount findOneByOepcsp(string $OepcSp) Return the first ChildItemPricingDiscount filtered by the OepcSp column
 * @method     ChildItemPricingDiscount findOneByOepcmeth(string $OepcMeth) Return the first ChildItemPricingDiscount filtered by the OepcMeth column
 * @method     ChildItemPricingDiscount findOneByOepccode(string $OepcCode) Return the first ChildItemPricingDiscount filtered by the OepcCode column
 * @method     ChildItemPricingDiscount findOneByOepcpcnt(string $OepcPcnt) Return the first ChildItemPricingDiscount filtered by the OepcPcnt column
 * @method     ChildItemPricingDiscount findOneByOepcpricbase(string $OepcPricBase) Return the first ChildItemPricingDiscount filtered by the OepcPricBase column
 * @method     ChildItemPricingDiscount findOneByOepcpricunit1(int $OepcPricUnit1) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit1 column
 * @method     ChildItemPricingDiscount findOneByOepcpricpric1(string $OepcPricPric1) Return the first ChildItemPricingDiscount filtered by the OepcPricPric1 column
 * @method     ChildItemPricingDiscount findOneByOepcpricuom1(string $OepcPricUom1) Return the first ChildItemPricingDiscount filtered by the OepcPricUom1 column
 * @method     ChildItemPricingDiscount findOneByOepcpricunit2(int $OepcPricUnit2) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit2 column
 * @method     ChildItemPricingDiscount findOneByOepcpricpric2(string $OepcPricPric2) Return the first ChildItemPricingDiscount filtered by the OepcPricPric2 column
 * @method     ChildItemPricingDiscount findOneByOepcpricuom2(string $OepcPricUom2) Return the first ChildItemPricingDiscount filtered by the OepcPricUom2 column
 * @method     ChildItemPricingDiscount findOneByOepcpricunit3(int $OepcPricUnit3) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit3 column
 * @method     ChildItemPricingDiscount findOneByOepcpricpric3(string $OepcPricPric3) Return the first ChildItemPricingDiscount filtered by the OepcPricPric3 column
 * @method     ChildItemPricingDiscount findOneByOepcpricuom3(string $OepcPricUom3) Return the first ChildItemPricingDiscount filtered by the OepcPricUom3 column
 * @method     ChildItemPricingDiscount findOneByOepcpricunit4(int $OepcPricUnit4) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit4 column
 * @method     ChildItemPricingDiscount findOneByOepcpricpric4(string $OepcPricPric4) Return the first ChildItemPricingDiscount filtered by the OepcPricPric4 column
 * @method     ChildItemPricingDiscount findOneByOepcpricuom4(string $OepcPricUom4) Return the first ChildItemPricingDiscount filtered by the OepcPricUom4 column
 * @method     ChildItemPricingDiscount findOneByOepcpricunit5(int $OepcPricUnit5) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit5 column
 * @method     ChildItemPricingDiscount findOneByOepcpricpric5(string $OepcPricPric5) Return the first ChildItemPricingDiscount filtered by the OepcPricPric5 column
 * @method     ChildItemPricingDiscount findOneByOepcpricuom5(string $OepcPricUom5) Return the first ChildItemPricingDiscount filtered by the OepcPricUom5 column
 * @method     ChildItemPricingDiscount findOneByOepcstancost(string $OepcStanCost) Return the first ChildItemPricingDiscount filtered by the OepcStanCost column
 * @method     ChildItemPricingDiscount findOneByOepcenddate(string $OepcEndDate) Return the first ChildItemPricingDiscount filtered by the OepcEndDate column
 * @method     ChildItemPricingDiscount findOneByOepcqtybrk(string $OepcQtyBrk) Return the first ChildItemPricingDiscount filtered by the OepcQtyBrk column
 * @method     ChildItemPricingDiscount findOneByOepccontcost(string $OepcContCost) Return the first ChildItemPricingDiscount filtered by the OepcContCost column
 * @method     ChildItemPricingDiscount findOneByOepclastchgdate(string $OepcLastChgDate) Return the first ChildItemPricingDiscount filtered by the OepcLastChgDate column
 * @method     ChildItemPricingDiscount findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemPricingDiscount filtered by the DateUpdtd column
 * @method     ChildItemPricingDiscount findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemPricingDiscount filtered by the TimeUpdtd column
 * @method     ChildItemPricingDiscount findOneByDummy(string $dummy) Return the first ChildItemPricingDiscount filtered by the dummy column *

 * @method     ChildItemPricingDiscount requirePk($key, ConnectionInterface $con = null) Return the ChildItemPricingDiscount by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOne(ConnectionInterface $con = null) Return the first ChildItemPricingDiscount matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemPricingDiscount requireOneByOepctype(string $OepcType) Return the first ChildItemPricingDiscount filtered by the OepcType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepctbltype(int $OepcTblType) Return the first ChildItemPricingDiscount filtered by the OepcTblType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcstrtdate(int $OepcStrtDate) Return the first ChildItemPricingDiscount filtered by the OepcStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepccustid(string $OepcCustId) Return the first ChildItemPricingDiscount filtered by the OepcCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepccustcode(string $OepcCustCode) Return the first ChildItemPricingDiscount filtered by the OepcCustCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcitemnbr(string $OepcItemNbr) Return the first ChildItemPricingDiscount filtered by the OepcItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcitemgrup(string $OepcItemGrup) Return the first ChildItemPricingDiscount filtered by the OepcItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcsp(string $OepcSp) Return the first ChildItemPricingDiscount filtered by the OepcSp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcmeth(string $OepcMeth) Return the first ChildItemPricingDiscount filtered by the OepcMeth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepccode(string $OepcCode) Return the first ChildItemPricingDiscount filtered by the OepcCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpcnt(string $OepcPcnt) Return the first ChildItemPricingDiscount filtered by the OepcPcnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricbase(string $OepcPricBase) Return the first ChildItemPricingDiscount filtered by the OepcPricBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricunit1(int $OepcPricUnit1) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricpric1(string $OepcPricPric1) Return the first ChildItemPricingDiscount filtered by the OepcPricPric1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricuom1(string $OepcPricUom1) Return the first ChildItemPricingDiscount filtered by the OepcPricUom1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricunit2(int $OepcPricUnit2) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricpric2(string $OepcPricPric2) Return the first ChildItemPricingDiscount filtered by the OepcPricPric2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricuom2(string $OepcPricUom2) Return the first ChildItemPricingDiscount filtered by the OepcPricUom2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricunit3(int $OepcPricUnit3) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricpric3(string $OepcPricPric3) Return the first ChildItemPricingDiscount filtered by the OepcPricPric3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricuom3(string $OepcPricUom3) Return the first ChildItemPricingDiscount filtered by the OepcPricUom3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricunit4(int $OepcPricUnit4) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricpric4(string $OepcPricPric4) Return the first ChildItemPricingDiscount filtered by the OepcPricPric4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricuom4(string $OepcPricUom4) Return the first ChildItemPricingDiscount filtered by the OepcPricUom4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricunit5(int $OepcPricUnit5) Return the first ChildItemPricingDiscount filtered by the OepcPricUnit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricpric5(string $OepcPricPric5) Return the first ChildItemPricingDiscount filtered by the OepcPricPric5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcpricuom5(string $OepcPricUom5) Return the first ChildItemPricingDiscount filtered by the OepcPricUom5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcstancost(string $OepcStanCost) Return the first ChildItemPricingDiscount filtered by the OepcStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcenddate(string $OepcEndDate) Return the first ChildItemPricingDiscount filtered by the OepcEndDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepcqtybrk(string $OepcQtyBrk) Return the first ChildItemPricingDiscount filtered by the OepcQtyBrk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepccontcost(string $OepcContCost) Return the first ChildItemPricingDiscount filtered by the OepcContCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByOepclastchgdate(string $OepcLastChgDate) Return the first ChildItemPricingDiscount filtered by the OepcLastChgDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemPricingDiscount filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemPricingDiscount filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricingDiscount requireOneByDummy(string $dummy) Return the first ChildItemPricingDiscount filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemPricingDiscount[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemPricingDiscount objects based on current ModelCriteria
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepctype(string $OepcType) Return ChildItemPricingDiscount objects filtered by the OepcType column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepctbltype(int $OepcTblType) Return ChildItemPricingDiscount objects filtered by the OepcTblType column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcstrtdate(int $OepcStrtDate) Return ChildItemPricingDiscount objects filtered by the OepcStrtDate column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepccustid(string $OepcCustId) Return ChildItemPricingDiscount objects filtered by the OepcCustId column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepccustcode(string $OepcCustCode) Return ChildItemPricingDiscount objects filtered by the OepcCustCode column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcitemnbr(string $OepcItemNbr) Return ChildItemPricingDiscount objects filtered by the OepcItemNbr column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcitemgrup(string $OepcItemGrup) Return ChildItemPricingDiscount objects filtered by the OepcItemGrup column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcsp(string $OepcSp) Return ChildItemPricingDiscount objects filtered by the OepcSp column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcmeth(string $OepcMeth) Return ChildItemPricingDiscount objects filtered by the OepcMeth column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepccode(string $OepcCode) Return ChildItemPricingDiscount objects filtered by the OepcCode column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpcnt(string $OepcPcnt) Return ChildItemPricingDiscount objects filtered by the OepcPcnt column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricbase(string $OepcPricBase) Return ChildItemPricingDiscount objects filtered by the OepcPricBase column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricunit1(int $OepcPricUnit1) Return ChildItemPricingDiscount objects filtered by the OepcPricUnit1 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricpric1(string $OepcPricPric1) Return ChildItemPricingDiscount objects filtered by the OepcPricPric1 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricuom1(string $OepcPricUom1) Return ChildItemPricingDiscount objects filtered by the OepcPricUom1 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricunit2(int $OepcPricUnit2) Return ChildItemPricingDiscount objects filtered by the OepcPricUnit2 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricpric2(string $OepcPricPric2) Return ChildItemPricingDiscount objects filtered by the OepcPricPric2 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricuom2(string $OepcPricUom2) Return ChildItemPricingDiscount objects filtered by the OepcPricUom2 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricunit3(int $OepcPricUnit3) Return ChildItemPricingDiscount objects filtered by the OepcPricUnit3 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricpric3(string $OepcPricPric3) Return ChildItemPricingDiscount objects filtered by the OepcPricPric3 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricuom3(string $OepcPricUom3) Return ChildItemPricingDiscount objects filtered by the OepcPricUom3 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricunit4(int $OepcPricUnit4) Return ChildItemPricingDiscount objects filtered by the OepcPricUnit4 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricpric4(string $OepcPricPric4) Return ChildItemPricingDiscount objects filtered by the OepcPricPric4 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricuom4(string $OepcPricUom4) Return ChildItemPricingDiscount objects filtered by the OepcPricUom4 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricunit5(int $OepcPricUnit5) Return ChildItemPricingDiscount objects filtered by the OepcPricUnit5 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricpric5(string $OepcPricPric5) Return ChildItemPricingDiscount objects filtered by the OepcPricPric5 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcpricuom5(string $OepcPricUom5) Return ChildItemPricingDiscount objects filtered by the OepcPricUom5 column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcstancost(string $OepcStanCost) Return ChildItemPricingDiscount objects filtered by the OepcStanCost column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcenddate(string $OepcEndDate) Return ChildItemPricingDiscount objects filtered by the OepcEndDate column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepcqtybrk(string $OepcQtyBrk) Return ChildItemPricingDiscount objects filtered by the OepcQtyBrk column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepccontcost(string $OepcContCost) Return ChildItemPricingDiscount objects filtered by the OepcContCost column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByOepclastchgdate(string $OepcLastChgDate) Return ChildItemPricingDiscount objects filtered by the OepcLastChgDate column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemPricingDiscount objects filtered by the DateUpdtd column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemPricingDiscount objects filtered by the TimeUpdtd column
 * @method     ChildItemPricingDiscount[]|ObjectCollection findByDummy(string $dummy) Return ChildItemPricingDiscount objects filtered by the dummy column
 * @method     ChildItemPricingDiscount[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemPricingDiscountQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemPricingDiscountQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemPricingDiscount', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemPricingDiscountQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemPricingDiscountQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemPricingDiscountQuery) {
            return $criteria;
        }
        $query = new ChildItemPricingDiscountQuery();
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
     * @param array[$OepcType, $OepcTblType, $OepcStrtDate, $OepcCustId, $OepcCustCode, $OepcItemNbr, $OepcItemGrup, $OepcSp] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemPricingDiscount|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemPricingDiscountTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6]), (null === $key[7] || is_scalar($key[7]) || is_callable([$key[7], '__toString']) ? (string) $key[7] : $key[7])]))))) {
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
     * @return ChildItemPricingDiscount A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OepcType, OepcTblType, OepcStrtDate, OepcCustId, OepcCustCode, OepcItemNbr, OepcItemGrup, OepcSp, OepcMeth, OepcCode, OepcPcnt, OepcPricBase, OepcPricUnit1, OepcPricPric1, OepcPricUom1, OepcPricUnit2, OepcPricPric2, OepcPricUom2, OepcPricUnit3, OepcPricPric3, OepcPricUom3, OepcPricUnit4, OepcPricPric4, OepcPricUom4, OepcPricUnit5, OepcPricPric5, OepcPricUom5, OepcStanCost, OepcEndDate, OepcQtyBrk, OepcContCost, OepcLastChgDate, DateUpdtd, TimeUpdtd, dummy FROM so_price_discount WHERE OepcType = :p0 AND OepcTblType = :p1 AND OepcStrtDate = :p2 AND OepcCustId = :p3 AND OepcCustCode = :p4 AND OepcItemNbr = :p5 AND OepcItemGrup = :p6 AND OepcSp = :p7';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->bindValue(':p7', $key[7], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemPricingDiscount $obj */
            $obj = new ChildItemPricingDiscount();
            $obj->hydrate($row);
            ItemPricingDiscountTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6]), (null === $key[7] || is_scalar($key[7]) || is_callable([$key[7], '__toString']) ? (string) $key[7] : $key[7])]));
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
     * @return ChildItemPricingDiscount|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, $key[6], Criteria::EQUAL);
        $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSP, $key[7], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $cton7 = $this->getNewCriterion(ItemPricingDiscountTableMap::COL_OEPCSP, $key[7], Criteria::EQUAL);
            $cton0->addAnd($cton7);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OepcType column
     *
     * Example usage:
     * <code>
     * $query->filterByOepctype('fooValue');   // WHERE OepcType = 'fooValue'
     * $query->filterByOepctype('%fooValue%', Criteria::LIKE); // WHERE OepcType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepctype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepctype($oepctype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepctype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCTYPE, $oepctype, $comparison);
    }

    /**
     * Filter the query on the OepcTblType column
     *
     * Example usage:
     * <code>
     * $query->filterByOepctbltype(1234); // WHERE OepcTblType = 1234
     * $query->filterByOepctbltype(array(12, 34)); // WHERE OepcTblType IN (12, 34)
     * $query->filterByOepctbltype(array('min' => 12)); // WHERE OepcTblType > 12
     * </code>
     *
     * @param     mixed $oepctbltype The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepctbltype($oepctbltype = null, $comparison = null)
    {
        if (is_array($oepctbltype)) {
            $useMinMax = false;
            if (isset($oepctbltype['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $oepctbltype['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepctbltype['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $oepctbltype['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE, $oepctbltype, $comparison);
    }

    /**
     * Filter the query on the OepcStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcstrtdate(1234); // WHERE OepcStrtDate = 1234
     * $query->filterByOepcstrtdate(array(12, 34)); // WHERE OepcStrtDate IN (12, 34)
     * $query->filterByOepcstrtdate(array('min' => 12)); // WHERE OepcStrtDate > 12
     * </code>
     *
     * @param     mixed $oepcstrtdate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcstrtdate($oepcstrtdate = null, $comparison = null)
    {
        if (is_array($oepcstrtdate)) {
            $useMinMax = false;
            if (isset($oepcstrtdate['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $oepcstrtdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcstrtdate['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $oepcstrtdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE, $oepcstrtdate, $comparison);
    }

    /**
     * Filter the query on the OepcCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByOepccustid('fooValue');   // WHERE OepcCustId = 'fooValue'
     * $query->filterByOepccustid('%fooValue%', Criteria::LIKE); // WHERE OepcCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepccustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepccustid($oepccustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepccustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $oepccustid, $comparison);
    }

    /**
     * Filter the query on the OepcCustCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOepccustcode('fooValue');   // WHERE OepcCustCode = 'fooValue'
     * $query->filterByOepccustcode('%fooValue%', Criteria::LIKE); // WHERE OepcCustCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepccustcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepccustcode($oepccustcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepccustcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE, $oepccustcode, $comparison);
    }

    /**
     * Filter the query on the OepcItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcitemnbr('fooValue');   // WHERE OepcItemNbr = 'fooValue'
     * $query->filterByOepcitemnbr('%fooValue%', Criteria::LIKE); // WHERE OepcItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcitemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcitemnbr($oepcitemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcitemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $oepcitemnbr, $comparison);
    }

    /**
     * Filter the query on the OepcItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcitemgrup('fooValue');   // WHERE OepcItemGrup = 'fooValue'
     * $query->filterByOepcitemgrup('%fooValue%', Criteria::LIKE); // WHERE OepcItemGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcitemgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcitemgrup($oepcitemgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP, $oepcitemgrup, $comparison);
    }

    /**
     * Filter the query on the OepcSp column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcsp('fooValue');   // WHERE OepcSp = 'fooValue'
     * $query->filterByOepcsp('%fooValue%', Criteria::LIKE); // WHERE OepcSp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcsp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcsp($oepcsp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcsp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSP, $oepcsp, $comparison);
    }

    /**
     * Filter the query on the OepcMeth column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcmeth('fooValue');   // WHERE OepcMeth = 'fooValue'
     * $query->filterByOepcmeth('%fooValue%', Criteria::LIKE); // WHERE OepcMeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcmeth The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcmeth($oepcmeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcmeth)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCMETH, $oepcmeth, $comparison);
    }

    /**
     * Filter the query on the OepcCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOepccode('fooValue');   // WHERE OepcCode = 'fooValue'
     * $query->filterByOepccode('%fooValue%', Criteria::LIKE); // WHERE OepcCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepccode($oepccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCODE, $oepccode, $comparison);
    }

    /**
     * Filter the query on the OepcPcnt column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpcnt(1234); // WHERE OepcPcnt = 1234
     * $query->filterByOepcpcnt(array(12, 34)); // WHERE OepcPcnt IN (12, 34)
     * $query->filterByOepcpcnt(array('min' => 12)); // WHERE OepcPcnt > 12
     * </code>
     *
     * @param     mixed $oepcpcnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpcnt($oepcpcnt = null, $comparison = null)
    {
        if (is_array($oepcpcnt)) {
            $useMinMax = false;
            if (isset($oepcpcnt['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPCNT, $oepcpcnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpcnt['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPCNT, $oepcpcnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPCNT, $oepcpcnt, $comparison);
    }

    /**
     * Filter the query on the OepcPricBase column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricbase(1234); // WHERE OepcPricBase = 1234
     * $query->filterByOepcpricbase(array(12, 34)); // WHERE OepcPricBase IN (12, 34)
     * $query->filterByOepcpricbase(array('min' => 12)); // WHERE OepcPricBase > 12
     * </code>
     *
     * @param     mixed $oepcpricbase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricbase($oepcpricbase = null, $comparison = null)
    {
        if (is_array($oepcpricbase)) {
            $useMinMax = false;
            if (isset($oepcpricbase['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICBASE, $oepcpricbase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricbase['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICBASE, $oepcpricbase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICBASE, $oepcpricbase, $comparison);
    }

    /**
     * Filter the query on the OepcPricUnit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricunit1(1234); // WHERE OepcPricUnit1 = 1234
     * $query->filterByOepcpricunit1(array(12, 34)); // WHERE OepcPricUnit1 IN (12, 34)
     * $query->filterByOepcpricunit1(array('min' => 12)); // WHERE OepcPricUnit1 > 12
     * </code>
     *
     * @param     mixed $oepcpricunit1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricunit1($oepcpricunit1 = null, $comparison = null)
    {
        if (is_array($oepcpricunit1)) {
            $useMinMax = false;
            if (isset($oepcpricunit1['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1, $oepcpricunit1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricunit1['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1, $oepcpricunit1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT1, $oepcpricunit1, $comparison);
    }

    /**
     * Filter the query on the OepcPricPric1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricpric1(1234); // WHERE OepcPricPric1 = 1234
     * $query->filterByOepcpricpric1(array(12, 34)); // WHERE OepcPricPric1 IN (12, 34)
     * $query->filterByOepcpricpric1(array('min' => 12)); // WHERE OepcPricPric1 > 12
     * </code>
     *
     * @param     mixed $oepcpricpric1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricpric1($oepcpricpric1 = null, $comparison = null)
    {
        if (is_array($oepcpricpric1)) {
            $useMinMax = false;
            if (isset($oepcpricpric1['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1, $oepcpricpric1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricpric1['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1, $oepcpricpric1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC1, $oepcpricpric1, $comparison);
    }

    /**
     * Filter the query on the OepcPricUom1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricuom1('fooValue');   // WHERE OepcPricUom1 = 'fooValue'
     * $query->filterByOepcpricuom1('%fooValue%', Criteria::LIKE); // WHERE OepcPricUom1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcpricuom1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricuom1($oepcpricuom1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcpricuom1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUOM1, $oepcpricuom1, $comparison);
    }

    /**
     * Filter the query on the OepcPricUnit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricunit2(1234); // WHERE OepcPricUnit2 = 1234
     * $query->filterByOepcpricunit2(array(12, 34)); // WHERE OepcPricUnit2 IN (12, 34)
     * $query->filterByOepcpricunit2(array('min' => 12)); // WHERE OepcPricUnit2 > 12
     * </code>
     *
     * @param     mixed $oepcpricunit2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricunit2($oepcpricunit2 = null, $comparison = null)
    {
        if (is_array($oepcpricunit2)) {
            $useMinMax = false;
            if (isset($oepcpricunit2['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2, $oepcpricunit2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricunit2['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2, $oepcpricunit2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT2, $oepcpricunit2, $comparison);
    }

    /**
     * Filter the query on the OepcPricPric2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricpric2(1234); // WHERE OepcPricPric2 = 1234
     * $query->filterByOepcpricpric2(array(12, 34)); // WHERE OepcPricPric2 IN (12, 34)
     * $query->filterByOepcpricpric2(array('min' => 12)); // WHERE OepcPricPric2 > 12
     * </code>
     *
     * @param     mixed $oepcpricpric2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricpric2($oepcpricpric2 = null, $comparison = null)
    {
        if (is_array($oepcpricpric2)) {
            $useMinMax = false;
            if (isset($oepcpricpric2['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2, $oepcpricpric2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricpric2['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2, $oepcpricpric2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC2, $oepcpricpric2, $comparison);
    }

    /**
     * Filter the query on the OepcPricUom2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricuom2('fooValue');   // WHERE OepcPricUom2 = 'fooValue'
     * $query->filterByOepcpricuom2('%fooValue%', Criteria::LIKE); // WHERE OepcPricUom2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcpricuom2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricuom2($oepcpricuom2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcpricuom2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUOM2, $oepcpricuom2, $comparison);
    }

    /**
     * Filter the query on the OepcPricUnit3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricunit3(1234); // WHERE OepcPricUnit3 = 1234
     * $query->filterByOepcpricunit3(array(12, 34)); // WHERE OepcPricUnit3 IN (12, 34)
     * $query->filterByOepcpricunit3(array('min' => 12)); // WHERE OepcPricUnit3 > 12
     * </code>
     *
     * @param     mixed $oepcpricunit3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricunit3($oepcpricunit3 = null, $comparison = null)
    {
        if (is_array($oepcpricunit3)) {
            $useMinMax = false;
            if (isset($oepcpricunit3['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3, $oepcpricunit3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricunit3['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3, $oepcpricunit3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT3, $oepcpricunit3, $comparison);
    }

    /**
     * Filter the query on the OepcPricPric3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricpric3(1234); // WHERE OepcPricPric3 = 1234
     * $query->filterByOepcpricpric3(array(12, 34)); // WHERE OepcPricPric3 IN (12, 34)
     * $query->filterByOepcpricpric3(array('min' => 12)); // WHERE OepcPricPric3 > 12
     * </code>
     *
     * @param     mixed $oepcpricpric3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricpric3($oepcpricpric3 = null, $comparison = null)
    {
        if (is_array($oepcpricpric3)) {
            $useMinMax = false;
            if (isset($oepcpricpric3['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3, $oepcpricpric3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricpric3['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3, $oepcpricpric3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC3, $oepcpricpric3, $comparison);
    }

    /**
     * Filter the query on the OepcPricUom3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricuom3('fooValue');   // WHERE OepcPricUom3 = 'fooValue'
     * $query->filterByOepcpricuom3('%fooValue%', Criteria::LIKE); // WHERE OepcPricUom3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcpricuom3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricuom3($oepcpricuom3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcpricuom3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUOM3, $oepcpricuom3, $comparison);
    }

    /**
     * Filter the query on the OepcPricUnit4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricunit4(1234); // WHERE OepcPricUnit4 = 1234
     * $query->filterByOepcpricunit4(array(12, 34)); // WHERE OepcPricUnit4 IN (12, 34)
     * $query->filterByOepcpricunit4(array('min' => 12)); // WHERE OepcPricUnit4 > 12
     * </code>
     *
     * @param     mixed $oepcpricunit4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricunit4($oepcpricunit4 = null, $comparison = null)
    {
        if (is_array($oepcpricunit4)) {
            $useMinMax = false;
            if (isset($oepcpricunit4['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4, $oepcpricunit4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricunit4['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4, $oepcpricunit4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT4, $oepcpricunit4, $comparison);
    }

    /**
     * Filter the query on the OepcPricPric4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricpric4(1234); // WHERE OepcPricPric4 = 1234
     * $query->filterByOepcpricpric4(array(12, 34)); // WHERE OepcPricPric4 IN (12, 34)
     * $query->filterByOepcpricpric4(array('min' => 12)); // WHERE OepcPricPric4 > 12
     * </code>
     *
     * @param     mixed $oepcpricpric4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricpric4($oepcpricpric4 = null, $comparison = null)
    {
        if (is_array($oepcpricpric4)) {
            $useMinMax = false;
            if (isset($oepcpricpric4['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4, $oepcpricpric4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricpric4['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4, $oepcpricpric4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC4, $oepcpricpric4, $comparison);
    }

    /**
     * Filter the query on the OepcPricUom4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricuom4('fooValue');   // WHERE OepcPricUom4 = 'fooValue'
     * $query->filterByOepcpricuom4('%fooValue%', Criteria::LIKE); // WHERE OepcPricUom4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcpricuom4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricuom4($oepcpricuom4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcpricuom4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUOM4, $oepcpricuom4, $comparison);
    }

    /**
     * Filter the query on the OepcPricUnit5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricunit5(1234); // WHERE OepcPricUnit5 = 1234
     * $query->filterByOepcpricunit5(array(12, 34)); // WHERE OepcPricUnit5 IN (12, 34)
     * $query->filterByOepcpricunit5(array('min' => 12)); // WHERE OepcPricUnit5 > 12
     * </code>
     *
     * @param     mixed $oepcpricunit5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricunit5($oepcpricunit5 = null, $comparison = null)
    {
        if (is_array($oepcpricunit5)) {
            $useMinMax = false;
            if (isset($oepcpricunit5['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5, $oepcpricunit5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricunit5['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5, $oepcpricunit5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUNIT5, $oepcpricunit5, $comparison);
    }

    /**
     * Filter the query on the OepcPricPric5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricpric5(1234); // WHERE OepcPricPric5 = 1234
     * $query->filterByOepcpricpric5(array(12, 34)); // WHERE OepcPricPric5 IN (12, 34)
     * $query->filterByOepcpricpric5(array('min' => 12)); // WHERE OepcPricPric5 > 12
     * </code>
     *
     * @param     mixed $oepcpricpric5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricpric5($oepcpricpric5 = null, $comparison = null)
    {
        if (is_array($oepcpricpric5)) {
            $useMinMax = false;
            if (isset($oepcpricpric5['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5, $oepcpricpric5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcpricpric5['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5, $oepcpricpric5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICPRIC5, $oepcpricpric5, $comparison);
    }

    /**
     * Filter the query on the OepcPricUom5 column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcpricuom5('fooValue');   // WHERE OepcPricUom5 = 'fooValue'
     * $query->filterByOepcpricuom5('%fooValue%', Criteria::LIKE); // WHERE OepcPricUom5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcpricuom5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcpricuom5($oepcpricuom5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcpricuom5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCPRICUOM5, $oepcpricuom5, $comparison);
    }

    /**
     * Filter the query on the OepcStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcstancost(1234); // WHERE OepcStanCost = 1234
     * $query->filterByOepcstancost(array(12, 34)); // WHERE OepcStanCost IN (12, 34)
     * $query->filterByOepcstancost(array('min' => 12)); // WHERE OepcStanCost > 12
     * </code>
     *
     * @param     mixed $oepcstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcstancost($oepcstancost = null, $comparison = null)
    {
        if (is_array($oepcstancost)) {
            $useMinMax = false;
            if (isset($oepcstancost['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTANCOST, $oepcstancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepcstancost['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTANCOST, $oepcstancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCSTANCOST, $oepcstancost, $comparison);
    }

    /**
     * Filter the query on the OepcEndDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcenddate('fooValue');   // WHERE OepcEndDate = 'fooValue'
     * $query->filterByOepcenddate('%fooValue%', Criteria::LIKE); // WHERE OepcEndDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcenddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcenddate($oepcenddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcenddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCENDDATE, $oepcenddate, $comparison);
    }

    /**
     * Filter the query on the OepcQtyBrk column
     *
     * Example usage:
     * <code>
     * $query->filterByOepcqtybrk('fooValue');   // WHERE OepcQtyBrk = 'fooValue'
     * $query->filterByOepcqtybrk('%fooValue%', Criteria::LIKE); // WHERE OepcQtyBrk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepcqtybrk The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepcqtybrk($oepcqtybrk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepcqtybrk)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCQTYBRK, $oepcqtybrk, $comparison);
    }

    /**
     * Filter the query on the OepcContCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOepccontcost(1234); // WHERE OepcContCost = 1234
     * $query->filterByOepccontcost(array(12, 34)); // WHERE OepcContCost IN (12, 34)
     * $query->filterByOepccontcost(array('min' => 12)); // WHERE OepcContCost > 12
     * </code>
     *
     * @param     mixed $oepccontcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepccontcost($oepccontcost = null, $comparison = null)
    {
        if (is_array($oepccontcost)) {
            $useMinMax = false;
            if (isset($oepccontcost['min'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCONTCOST, $oepccontcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepccontcost['max'])) {
                $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCONTCOST, $oepccontcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCONTCOST, $oepccontcost, $comparison);
    }

    /**
     * Filter the query on the OepcLastChgDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOepclastchgdate('fooValue');   // WHERE OepcLastChgDate = 'fooValue'
     * $query->filterByOepclastchgdate('%fooValue%', Criteria::LIKE); // WHERE OepcLastChgDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oepclastchgdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByOepclastchgdate($oepclastchgdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepclastchgdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCLASTCHGDATE, $oepclastchgdate, $comparison);
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
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingDiscountTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
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
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemPricingDiscountTableMap::COL_OEPCCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

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
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemPricingDiscount $itemPricingDiscount Object to remove from the list of results
     *
     * @return $this|ChildItemPricingDiscountQuery The current query, for fluid interface
     */
    public function prune($itemPricingDiscount = null)
    {
        if ($itemPricingDiscount) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCTYPE), $itemPricingDiscount->getOepctype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCTBLTYPE), $itemPricingDiscount->getOepctbltype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCSTRTDATE), $itemPricingDiscount->getOepcstrtdate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCCUSTID), $itemPricingDiscount->getOepccustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCCUSTCODE), $itemPricingDiscount->getOepccustcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCITEMNBR), $itemPricingDiscount->getOepcitemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCITEMGRUP), $itemPricingDiscount->getOepcitemgrup(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond7', $this->getAliasedColName(ItemPricingDiscountTableMap::COL_OEPCSP), $itemPricingDiscount->getOepcsp(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6', 'pruneCond7'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_price_discount table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemPricingDiscountTableMap::clearInstancePool();
            ItemPricingDiscountTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingDiscountTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemPricingDiscountTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemPricingDiscountTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemPricingDiscountTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemPricingDiscountQuery
