<?php

namespace Base;

use \ItemXrefCustomer as ChildItemXrefCustomer;
use \ItemXrefCustomerQuery as ChildItemXrefCustomerQuery;
use \Exception;
use \PDO;
use Map\ItemXrefCustomerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `cust_item_xref` table.
 *
 * @method     ChildItemXrefCustomerQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustitemnbr($order = Criteria::ASC) Order by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomerQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefCustomerQuery orderByOexrretprice($order = Criteria::ASC) Order by the OexrRetPrice column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustprice($order = Criteria::ASC) Order by the OexrCustPrice column
 * @method     ChildItemXrefCustomerQuery orderByOexrqtypercase($order = Criteria::ASC) Order by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomerQuery orderByOexrinnerpackqty($order = Criteria::ASC) Order by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrouterpackqty($order = Criteria::ASC) Order by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrrounding($order = Criteria::ASC) Order by the OexrRounding column
 * @method     ChildItemXrefCustomerQuery orderByOexrshiptareqty($order = Criteria::ASC) Order by the OexrShipTareQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustitemdesc($order = Criteria::ASC) Order by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomerQuery orderByOexrconvert($order = Criteria::ASC) Order by the OexrConvert column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustitemdesc2($order = Criteria::ASC) Order by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomerQuery orderByOexrrevision($order = Criteria::ASC) Order by the OexrRevision column
 * @method     ChildItemXrefCustomerQuery orderByOexrpurchqty($order = Criteria::ASC) Order by the OexrPurchQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustpricuom($order = Criteria::ASC) Order by the OexrCustPricUom column
 * @method     ChildItemXrefCustomerQuery orderByOexrlabel1prtfmt($order = Criteria::ASC) Order by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomerQuery orderByOexrlabel2prtfmt($order = Criteria::ASC) Order by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomerQuery orderByOexrwght($order = Criteria::ASC) Order by the OexrWght column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustuom($order = Criteria::ASC) Order by the OexrCustUom column
 * @method     ChildItemXrefCustomerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefCustomerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefCustomerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefCustomerQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustitemnbr() Group by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomerQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefCustomerQuery groupByOexrretprice() Group by the OexrRetPrice column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustprice() Group by the OexrCustPrice column
 * @method     ChildItemXrefCustomerQuery groupByOexrqtypercase() Group by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomerQuery groupByOexrinnerpackqty() Group by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrouterpackqty() Group by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrrounding() Group by the OexrRounding column
 * @method     ChildItemXrefCustomerQuery groupByOexrshiptareqty() Group by the OexrShipTareQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustitemdesc() Group by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomerQuery groupByOexrconvert() Group by the OexrConvert column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustitemdesc2() Group by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomerQuery groupByOexrrevision() Group by the OexrRevision column
 * @method     ChildItemXrefCustomerQuery groupByOexrpurchqty() Group by the OexrPurchQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustpricuom() Group by the OexrCustPricUom column
 * @method     ChildItemXrefCustomerQuery groupByOexrlabel1prtfmt() Group by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomerQuery groupByOexrlabel2prtfmt() Group by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomerQuery groupByOexrwght() Group by the OexrWght column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustuom() Group by the OexrCustUom column
 * @method     ChildItemXrefCustomerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefCustomerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefCustomerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefCustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefCustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefCustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefCustomerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefCustomerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefCustomerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefCustomerQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefCustomer|null findOne(?ConnectionInterface $con = null) Return the first ChildItemXrefCustomer matching the query
 * @method     ChildItemXrefCustomer findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemXrefCustomer matching the query, or a new ChildItemXrefCustomer object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefCustomer|null findOneByArcucustid(string $ArcuCustId) Return the first ChildItemXrefCustomer filtered by the ArcuCustId column
 * @method     ChildItemXrefCustomer|null findOneByOexrcustitemnbr(string $OexrCustItemNbr) Return the first ChildItemXrefCustomer filtered by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomer|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefCustomer filtered by the InitItemNbr column
 * @method     ChildItemXrefCustomer|null findOneByOexrretprice(string $OexrRetPrice) Return the first ChildItemXrefCustomer filtered by the OexrRetPrice column
 * @method     ChildItemXrefCustomer|null findOneByOexrcustprice(string $OexrCustPrice) Return the first ChildItemXrefCustomer filtered by the OexrCustPrice column
 * @method     ChildItemXrefCustomer|null findOneByOexrqtypercase(int $OexrQtyPerCase) Return the first ChildItemXrefCustomer filtered by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomer|null findOneByOexrinnerpackqty(int $OexrInnerPackQty) Return the first ChildItemXrefCustomer filtered by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomer|null findOneByOexrouterpackqty(int $OexrOuterPackQty) Return the first ChildItemXrefCustomer filtered by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomer|null findOneByOexrrounding(string $OexrRounding) Return the first ChildItemXrefCustomer filtered by the OexrRounding column
 * @method     ChildItemXrefCustomer|null findOneByOexrshiptareqty(int $OexrShipTareQty) Return the first ChildItemXrefCustomer filtered by the OexrShipTareQty column
 * @method     ChildItemXrefCustomer|null findOneByOexrcustitemdesc(string $OexrCustItemDesc) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomer|null findOneByOexrconvert(string $OexrConvert) Return the first ChildItemXrefCustomer filtered by the OexrConvert column
 * @method     ChildItemXrefCustomer|null findOneByOexrcustitemdesc2(string $OexrCustItemDesc2) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomer|null findOneByOexrrevision(string $OexrRevision) Return the first ChildItemXrefCustomer filtered by the OexrRevision column
 * @method     ChildItemXrefCustomer|null findOneByOexrpurchqty(int $OexrPurchQty) Return the first ChildItemXrefCustomer filtered by the OexrPurchQty column
 * @method     ChildItemXrefCustomer|null findOneByOexrcustpricuom(string $OexrCustPricUom) Return the first ChildItemXrefCustomer filtered by the OexrCustPricUom column
 * @method     ChildItemXrefCustomer|null findOneByOexrlabel1prtfmt(string $OexrLabel1PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomer|null findOneByOexrlabel2prtfmt(string $OexrLabel2PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomer|null findOneByOexrwght(string $OexrWght) Return the first ChildItemXrefCustomer filtered by the OexrWght column
 * @method     ChildItemXrefCustomer|null findOneByOexrcustuom(string $OexrCustUom) Return the first ChildItemXrefCustomer filtered by the OexrCustUom column
 * @method     ChildItemXrefCustomer|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefCustomer filtered by the DateUpdtd column
 * @method     ChildItemXrefCustomer|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefCustomer filtered by the TimeUpdtd column
 * @method     ChildItemXrefCustomer|null findOneByDummy(string $dummy) Return the first ChildItemXrefCustomer filtered by the dummy column
 *
 * @method     ChildItemXrefCustomer requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemXrefCustomer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOne(?ConnectionInterface $con = null) Return the first ChildItemXrefCustomer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefCustomer requireOneByArcucustid(string $ArcuCustId) Return the first ChildItemXrefCustomer filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustitemnbr(string $OexrCustItemNbr) Return the first ChildItemXrefCustomer filtered by the OexrCustItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefCustomer filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrretprice(string $OexrRetPrice) Return the first ChildItemXrefCustomer filtered by the OexrRetPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustprice(string $OexrCustPrice) Return the first ChildItemXrefCustomer filtered by the OexrCustPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrqtypercase(int $OexrQtyPerCase) Return the first ChildItemXrefCustomer filtered by the OexrQtyPerCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrinnerpackqty(int $OexrInnerPackQty) Return the first ChildItemXrefCustomer filtered by the OexrInnerPackQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrouterpackqty(int $OexrOuterPackQty) Return the first ChildItemXrefCustomer filtered by the OexrOuterPackQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrrounding(string $OexrRounding) Return the first ChildItemXrefCustomer filtered by the OexrRounding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrshiptareqty(int $OexrShipTareQty) Return the first ChildItemXrefCustomer filtered by the OexrShipTareQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustitemdesc(string $OexrCustItemDesc) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrconvert(string $OexrConvert) Return the first ChildItemXrefCustomer filtered by the OexrConvert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustitemdesc2(string $OexrCustItemDesc2) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrrevision(string $OexrRevision) Return the first ChildItemXrefCustomer filtered by the OexrRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrpurchqty(int $OexrPurchQty) Return the first ChildItemXrefCustomer filtered by the OexrPurchQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustpricuom(string $OexrCustPricUom) Return the first ChildItemXrefCustomer filtered by the OexrCustPricUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrlabel1prtfmt(string $OexrLabel1PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel1PrtFmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrlabel2prtfmt(string $OexrLabel2PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel2PrtFmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrwght(string $OexrWght) Return the first ChildItemXrefCustomer filtered by the OexrWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustuom(string $OexrCustUom) Return the first ChildItemXrefCustomer filtered by the OexrCustUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefCustomer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefCustomer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByDummy(string $dummy) Return the first ChildItemXrefCustomer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefCustomer[]|Collection find(?ConnectionInterface $con = null) Return ChildItemXrefCustomer objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> find(?ConnectionInterface $con = null) Return ChildItemXrefCustomer objects based on current ModelCriteria
 *
 * @method     ChildItemXrefCustomer[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildItemXrefCustomer objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByArcucustid(string|array<string> $ArcuCustId) Return ChildItemXrefCustomer objects filtered by the ArcuCustId column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrcustitemnbr(string|array<string> $OexrCustItemNbr) Return ChildItemXrefCustomer objects filtered by the OexrCustItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrcustitemnbr(string|array<string> $OexrCustItemNbr) Return ChildItemXrefCustomer objects filtered by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomer[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemXrefCustomer objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemXrefCustomer objects filtered by the InitItemNbr column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrretprice(string|array<string> $OexrRetPrice) Return ChildItemXrefCustomer objects filtered by the OexrRetPrice column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrretprice(string|array<string> $OexrRetPrice) Return ChildItemXrefCustomer objects filtered by the OexrRetPrice column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrcustprice(string|array<string> $OexrCustPrice) Return ChildItemXrefCustomer objects filtered by the OexrCustPrice column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrcustprice(string|array<string> $OexrCustPrice) Return ChildItemXrefCustomer objects filtered by the OexrCustPrice column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrqtypercase(int|array<int> $OexrQtyPerCase) Return ChildItemXrefCustomer objects filtered by the OexrQtyPerCase column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrqtypercase(int|array<int> $OexrQtyPerCase) Return ChildItemXrefCustomer objects filtered by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrinnerpackqty(int|array<int> $OexrInnerPackQty) Return ChildItemXrefCustomer objects filtered by the OexrInnerPackQty column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrinnerpackqty(int|array<int> $OexrInnerPackQty) Return ChildItemXrefCustomer objects filtered by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrouterpackqty(int|array<int> $OexrOuterPackQty) Return ChildItemXrefCustomer objects filtered by the OexrOuterPackQty column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrouterpackqty(int|array<int> $OexrOuterPackQty) Return ChildItemXrefCustomer objects filtered by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrrounding(string|array<string> $OexrRounding) Return ChildItemXrefCustomer objects filtered by the OexrRounding column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrrounding(string|array<string> $OexrRounding) Return ChildItemXrefCustomer objects filtered by the OexrRounding column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrshiptareqty(int|array<int> $OexrShipTareQty) Return ChildItemXrefCustomer objects filtered by the OexrShipTareQty column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrshiptareqty(int|array<int> $OexrShipTareQty) Return ChildItemXrefCustomer objects filtered by the OexrShipTareQty column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrcustitemdesc(string|array<string> $OexrCustItemDesc) Return ChildItemXrefCustomer objects filtered by the OexrCustItemDesc column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrcustitemdesc(string|array<string> $OexrCustItemDesc) Return ChildItemXrefCustomer objects filtered by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrconvert(string|array<string> $OexrConvert) Return ChildItemXrefCustomer objects filtered by the OexrConvert column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrconvert(string|array<string> $OexrConvert) Return ChildItemXrefCustomer objects filtered by the OexrConvert column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrcustitemdesc2(string|array<string> $OexrCustItemDesc2) Return ChildItemXrefCustomer objects filtered by the OexrCustItemDesc2 column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrcustitemdesc2(string|array<string> $OexrCustItemDesc2) Return ChildItemXrefCustomer objects filtered by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrrevision(string|array<string> $OexrRevision) Return ChildItemXrefCustomer objects filtered by the OexrRevision column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrrevision(string|array<string> $OexrRevision) Return ChildItemXrefCustomer objects filtered by the OexrRevision column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrpurchqty(int|array<int> $OexrPurchQty) Return ChildItemXrefCustomer objects filtered by the OexrPurchQty column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrpurchqty(int|array<int> $OexrPurchQty) Return ChildItemXrefCustomer objects filtered by the OexrPurchQty column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrcustpricuom(string|array<string> $OexrCustPricUom) Return ChildItemXrefCustomer objects filtered by the OexrCustPricUom column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrcustpricuom(string|array<string> $OexrCustPricUom) Return ChildItemXrefCustomer objects filtered by the OexrCustPricUom column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrlabel1prtfmt(string|array<string> $OexrLabel1PrtFmt) Return ChildItemXrefCustomer objects filtered by the OexrLabel1PrtFmt column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrlabel1prtfmt(string|array<string> $OexrLabel1PrtFmt) Return ChildItemXrefCustomer objects filtered by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrlabel2prtfmt(string|array<string> $OexrLabel2PrtFmt) Return ChildItemXrefCustomer objects filtered by the OexrLabel2PrtFmt column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrlabel2prtfmt(string|array<string> $OexrLabel2PrtFmt) Return ChildItemXrefCustomer objects filtered by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrwght(string|array<string> $OexrWght) Return ChildItemXrefCustomer objects filtered by the OexrWght column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrwght(string|array<string> $OexrWght) Return ChildItemXrefCustomer objects filtered by the OexrWght column
 * @method     ChildItemXrefCustomer[]|Collection findByOexrcustuom(string|array<string> $OexrCustUom) Return ChildItemXrefCustomer objects filtered by the OexrCustUom column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByOexrcustuom(string|array<string> $OexrCustUom) Return ChildItemXrefCustomer objects filtered by the OexrCustUom column
 * @method     ChildItemXrefCustomer[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefCustomer objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefCustomer objects filtered by the DateUpdtd column
 * @method     ChildItemXrefCustomer[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefCustomer objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefCustomer objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefCustomer[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemXrefCustomer objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemXrefCustomer> findByDummy(string|array<string> $dummy) Return ChildItemXrefCustomer objects filtered by the dummy column
 *
 * @method     ChildItemXrefCustomer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemXrefCustomer> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemXrefCustomerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefCustomerQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefCustomer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefCustomerQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefCustomerQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildItemXrefCustomerQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefCustomerQuery();
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
     * @param array[$ArcuCustId, $OexrCustItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefCustomer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefCustomerTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildItemXrefCustomer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, OexrCustItemNbr, InitItemNbr, OexrRetPrice, OexrCustPrice, OexrQtyPerCase, OexrInnerPackQty, OexrOuterPackQty, OexrRounding, OexrShipTareQty, OexrCustItemDesc, OexrConvert, OexrCustItemDesc2, OexrRevision, OexrPurchQty, OexrCustPricUom, OexrLabel1PrtFmt, OexrLabel2PrtFmt, OexrWght, OexrCustUom, DateUpdtd, TimeUpdtd, dummy FROM cust_item_xref WHERE ArcuCustId = :p0 AND OexrCustItemNbr = :p1';
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
            /** @var ChildItemXrefCustomer $obj */
            $obj = new ChildItemXrefCustomer();
            $obj->hydrate($row);
            ItemXrefCustomerTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildItemXrefCustomer|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrCustItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustitemnbr('fooValue');   // WHERE OexrCustItemNbr = 'fooValue'
     * $query->filterByOexrcustitemnbr('%fooValue%', Criteria::LIKE); // WHERE OexrCustItemNbr LIKE '%fooValue%'
     * $query->filterByOexrcustitemnbr(['foo', 'bar']); // WHERE OexrCustItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrcustitemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrcustitemnbr($oexrcustitemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustitemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $oexrcustitemnbr, $comparison);

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

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrRetPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrretprice(1234); // WHERE OexrRetPrice = 1234
     * $query->filterByOexrretprice(array(12, 34)); // WHERE OexrRetPrice IN (12, 34)
     * $query->filterByOexrretprice(array('min' => 12)); // WHERE OexrRetPrice > 12
     * </code>
     *
     * @param mixed $oexrretprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrretprice($oexrretprice = null, ?string $comparison = null)
    {
        if (is_array($oexrretprice)) {
            $useMinMax = false;
            if (isset($oexrretprice['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $oexrretprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrretprice['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $oexrretprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $oexrretprice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrCustPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustprice(1234); // WHERE OexrCustPrice = 1234
     * $query->filterByOexrcustprice(array(12, 34)); // WHERE OexrCustPrice IN (12, 34)
     * $query->filterByOexrcustprice(array('min' => 12)); // WHERE OexrCustPrice > 12
     * </code>
     *
     * @param mixed $oexrcustprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrcustprice($oexrcustprice = null, ?string $comparison = null)
    {
        if (is_array($oexrcustprice)) {
            $useMinMax = false;
            if (isset($oexrcustprice['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $oexrcustprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrcustprice['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $oexrcustprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $oexrcustprice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrQtyPerCase column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrqtypercase(1234); // WHERE OexrQtyPerCase = 1234
     * $query->filterByOexrqtypercase(array(12, 34)); // WHERE OexrQtyPerCase IN (12, 34)
     * $query->filterByOexrqtypercase(array('min' => 12)); // WHERE OexrQtyPerCase > 12
     * </code>
     *
     * @param mixed $oexrqtypercase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrqtypercase($oexrqtypercase = null, ?string $comparison = null)
    {
        if (is_array($oexrqtypercase)) {
            $useMinMax = false;
            if (isset($oexrqtypercase['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $oexrqtypercase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrqtypercase['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $oexrqtypercase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $oexrqtypercase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrInnerPackQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrinnerpackqty(1234); // WHERE OexrInnerPackQty = 1234
     * $query->filterByOexrinnerpackqty(array(12, 34)); // WHERE OexrInnerPackQty IN (12, 34)
     * $query->filterByOexrinnerpackqty(array('min' => 12)); // WHERE OexrInnerPackQty > 12
     * </code>
     *
     * @param mixed $oexrinnerpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrinnerpackqty($oexrinnerpackqty = null, ?string $comparison = null)
    {
        if (is_array($oexrinnerpackqty)) {
            $useMinMax = false;
            if (isset($oexrinnerpackqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $oexrinnerpackqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrinnerpackqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $oexrinnerpackqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $oexrinnerpackqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrOuterPackQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrouterpackqty(1234); // WHERE OexrOuterPackQty = 1234
     * $query->filterByOexrouterpackqty(array(12, 34)); // WHERE OexrOuterPackQty IN (12, 34)
     * $query->filterByOexrouterpackqty(array('min' => 12)); // WHERE OexrOuterPackQty > 12
     * </code>
     *
     * @param mixed $oexrouterpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrouterpackqty($oexrouterpackqty = null, ?string $comparison = null)
    {
        if (is_array($oexrouterpackqty)) {
            $useMinMax = false;
            if (isset($oexrouterpackqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $oexrouterpackqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrouterpackqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $oexrouterpackqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $oexrouterpackqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrRounding column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrrounding('fooValue');   // WHERE OexrRounding = 'fooValue'
     * $query->filterByOexrrounding('%fooValue%', Criteria::LIKE); // WHERE OexrRounding LIKE '%fooValue%'
     * $query->filterByOexrrounding(['foo', 'bar']); // WHERE OexrRounding IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrrounding The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrrounding($oexrrounding = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrrounding)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRROUNDING, $oexrrounding, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrShipTareQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrshiptareqty(1234); // WHERE OexrShipTareQty = 1234
     * $query->filterByOexrshiptareqty(array(12, 34)); // WHERE OexrShipTareQty IN (12, 34)
     * $query->filterByOexrshiptareqty(array('min' => 12)); // WHERE OexrShipTareQty > 12
     * </code>
     *
     * @param mixed $oexrshiptareqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrshiptareqty($oexrshiptareqty = null, ?string $comparison = null)
    {
        if (is_array($oexrshiptareqty)) {
            $useMinMax = false;
            if (isset($oexrshiptareqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $oexrshiptareqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrshiptareqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $oexrshiptareqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $oexrshiptareqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrCustItemDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustitemdesc('fooValue');   // WHERE OexrCustItemDesc = 'fooValue'
     * $query->filterByOexrcustitemdesc('%fooValue%', Criteria::LIKE); // WHERE OexrCustItemDesc LIKE '%fooValue%'
     * $query->filterByOexrcustitemdesc(['foo', 'bar']); // WHERE OexrCustItemDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrcustitemdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrcustitemdesc($oexrcustitemdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustitemdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC, $oexrcustitemdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrConvert column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrconvert(1234); // WHERE OexrConvert = 1234
     * $query->filterByOexrconvert(array(12, 34)); // WHERE OexrConvert IN (12, 34)
     * $query->filterByOexrconvert(array('min' => 12)); // WHERE OexrConvert > 12
     * </code>
     *
     * @param mixed $oexrconvert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrconvert($oexrconvert = null, ?string $comparison = null)
    {
        if (is_array($oexrconvert)) {
            $useMinMax = false;
            if (isset($oexrconvert['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $oexrconvert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrconvert['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $oexrconvert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $oexrconvert, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrCustItemDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustitemdesc2('fooValue');   // WHERE OexrCustItemDesc2 = 'fooValue'
     * $query->filterByOexrcustitemdesc2('%fooValue%', Criteria::LIKE); // WHERE OexrCustItemDesc2 LIKE '%fooValue%'
     * $query->filterByOexrcustitemdesc2(['foo', 'bar']); // WHERE OexrCustItemDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrcustitemdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrcustitemdesc2($oexrcustitemdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustitemdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2, $oexrcustitemdesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrrevision('fooValue');   // WHERE OexrRevision = 'fooValue'
     * $query->filterByOexrrevision('%fooValue%', Criteria::LIKE); // WHERE OexrRevision LIKE '%fooValue%'
     * $query->filterByOexrrevision(['foo', 'bar']); // WHERE OexrRevision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrrevision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrrevision($oexrrevision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrrevision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRREVISION, $oexrrevision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrPurchQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrpurchqty(1234); // WHERE OexrPurchQty = 1234
     * $query->filterByOexrpurchqty(array(12, 34)); // WHERE OexrPurchQty IN (12, 34)
     * $query->filterByOexrpurchqty(array('min' => 12)); // WHERE OexrPurchQty > 12
     * </code>
     *
     * @param mixed $oexrpurchqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrpurchqty($oexrpurchqty = null, ?string $comparison = null)
    {
        if (is_array($oexrpurchqty)) {
            $useMinMax = false;
            if (isset($oexrpurchqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $oexrpurchqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrpurchqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $oexrpurchqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $oexrpurchqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrCustPricUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustpricuom('fooValue');   // WHERE OexrCustPricUom = 'fooValue'
     * $query->filterByOexrcustpricuom('%fooValue%', Criteria::LIKE); // WHERE OexrCustPricUom LIKE '%fooValue%'
     * $query->filterByOexrcustpricuom(['foo', 'bar']); // WHERE OexrCustPricUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrcustpricuom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrcustpricuom($oexrcustpricuom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustpricuom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM, $oexrcustpricuom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrLabel1PrtFmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrlabel1prtfmt('fooValue');   // WHERE OexrLabel1PrtFmt = 'fooValue'
     * $query->filterByOexrlabel1prtfmt('%fooValue%', Criteria::LIKE); // WHERE OexrLabel1PrtFmt LIKE '%fooValue%'
     * $query->filterByOexrlabel1prtfmt(['foo', 'bar']); // WHERE OexrLabel1PrtFmt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrlabel1prtfmt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrlabel1prtfmt($oexrlabel1prtfmt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrlabel1prtfmt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT, $oexrlabel1prtfmt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrLabel2PrtFmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrlabel2prtfmt('fooValue');   // WHERE OexrLabel2PrtFmt = 'fooValue'
     * $query->filterByOexrlabel2prtfmt('%fooValue%', Criteria::LIKE); // WHERE OexrLabel2PrtFmt LIKE '%fooValue%'
     * $query->filterByOexrlabel2prtfmt(['foo', 'bar']); // WHERE OexrLabel2PrtFmt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrlabel2prtfmt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrlabel2prtfmt($oexrlabel2prtfmt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrlabel2prtfmt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT, $oexrlabel2prtfmt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrwght(1234); // WHERE OexrWght = 1234
     * $query->filterByOexrwght(array(12, 34)); // WHERE OexrWght IN (12, 34)
     * $query->filterByOexrwght(array('min' => 12)); // WHERE OexrWght > 12
     * </code>
     *
     * @param mixed $oexrwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrwght($oexrwght = null, ?string $comparison = null)
    {
        if (is_array($oexrwght)) {
            $useMinMax = false;
            if (isset($oexrwght['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRWGHT, $oexrwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrwght['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRWGHT, $oexrwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRWGHT, $oexrwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OexrCustUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustuom('fooValue');   // WHERE OexrCustUom = 'fooValue'
     * $query->filterByOexrcustuom('%fooValue%', Criteria::LIKE); // WHERE OexrCustUom LIKE '%fooValue%'
     * $query->filterByOexrcustuom(['foo', 'bar']); // WHERE OexrCustUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oexrcustuom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOexrcustuom($oexrcustuom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustuom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTUOM, $oexrcustuom, $comparison);

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

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(ItemXrefCustomerTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefCustomerTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
        ?string $joinType = Criteria::LEFT_JOIN
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
     * @param ChildItemXrefCustomer $itemXrefCustomer Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($itemXrefCustomer = null)
    {
        if ($itemXrefCustomer) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefCustomerTableMap::COL_ARCUCUSTID), $itemXrefCustomer->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR), $itemXrefCustomer->getOexrcustitemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the cust_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefCustomerTableMap::clearInstancePool();
            ItemXrefCustomerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefCustomerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefCustomerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefCustomerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
