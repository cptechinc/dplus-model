<?php

namespace Base;

use \SoPickedLotserial as ChildSoPickedLotserial;
use \SoPickedLotserialQuery as ChildSoPickedLotserialQuery;
use \Exception;
use \PDO;
use Map\SoPickedLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_pulled` table.
 *
 * @method     ChildSoPickedLotserialQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSoPickedLotserialQuery orderByOedtline($order = Criteria::ASC) Order by the OedtLine column
 * @method     ChildSoPickedLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSoPickedLotserialQuery orderByOepdlotser($order = Criteria::ASC) Order by the OepdLotSer column
 * @method     ChildSoPickedLotserialQuery orderByOepdbin($order = Criteria::ASC) Order by the OepdBin column
 * @method     ChildSoPickedLotserialQuery orderByOepdplltnbr($order = Criteria::ASC) Order by the OepdPlltNbr column
 * @method     ChildSoPickedLotserialQuery orderByOepdcrtnnbr($order = Criteria::ASC) Order by the OepdCrtnNbr column
 * @method     ChildSoPickedLotserialQuery orderByOepdqtyship($order = Criteria::ASC) Order by the OepdQtyShip column
 * @method     ChildSoPickedLotserialQuery orderByOepdlotref($order = Criteria::ASC) Order by the OepdLotRef column
 * @method     ChildSoPickedLotserialQuery orderByOepdcntrqty($order = Criteria::ASC) Order by the OepdCntrQty column
 * @method     ChildSoPickedLotserialQuery orderByOepdbatch($order = Criteria::ASC) Order by the OepdBatch column
 * @method     ChildSoPickedLotserialQuery orderByOepdcuredate($order = Criteria::ASC) Order by the OepdCureDate column
 * @method     ChildSoPickedLotserialQuery orderByOepdpllttype($order = Criteria::ASC) Order by the OepdPlltType column
 * @method     ChildSoPickedLotserialQuery orderByOepdlblprtd($order = Criteria::ASC) Order by the OepdLblPrtd column
 * @method     ChildSoPickedLotserialQuery orderByOepdorigbin($order = Criteria::ASC) Order by the OepdOrigBin column
 * @method     ChildSoPickedLotserialQuery orderByOepdplltid($order = Criteria::ASC) Order by the OepdPlltID column
 * @method     ChildSoPickedLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoPickedLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoPickedLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoPickedLotserialQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSoPickedLotserialQuery groupByOedtline() Group by the OedtLine column
 * @method     ChildSoPickedLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSoPickedLotserialQuery groupByOepdlotser() Group by the OepdLotSer column
 * @method     ChildSoPickedLotserialQuery groupByOepdbin() Group by the OepdBin column
 * @method     ChildSoPickedLotserialQuery groupByOepdplltnbr() Group by the OepdPlltNbr column
 * @method     ChildSoPickedLotserialQuery groupByOepdcrtnnbr() Group by the OepdCrtnNbr column
 * @method     ChildSoPickedLotserialQuery groupByOepdqtyship() Group by the OepdQtyShip column
 * @method     ChildSoPickedLotserialQuery groupByOepdlotref() Group by the OepdLotRef column
 * @method     ChildSoPickedLotserialQuery groupByOepdcntrqty() Group by the OepdCntrQty column
 * @method     ChildSoPickedLotserialQuery groupByOepdbatch() Group by the OepdBatch column
 * @method     ChildSoPickedLotserialQuery groupByOepdcuredate() Group by the OepdCureDate column
 * @method     ChildSoPickedLotserialQuery groupByOepdpllttype() Group by the OepdPlltType column
 * @method     ChildSoPickedLotserialQuery groupByOepdlblprtd() Group by the OepdLblPrtd column
 * @method     ChildSoPickedLotserialQuery groupByOepdorigbin() Group by the OepdOrigBin column
 * @method     ChildSoPickedLotserialQuery groupByOepdplltid() Group by the OepdPlltID column
 * @method     ChildSoPickedLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoPickedLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoPickedLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoPickedLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoPickedLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoPickedLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoPickedLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoPickedLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoPickedLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoPickedLotserialQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSoPickedLotserialQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSoPickedLotserialQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildSoPickedLotserialQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSoPickedLotserialQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSoPickedLotserialQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinSalesOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSoPickedLotserialQuery rightJoinSalesOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSoPickedLotserialQuery innerJoinSalesOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderDetail relation
 *
 * @method     ChildSoPickedLotserialQuery joinWithSalesOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinWithSalesOrderDetail() Adds a LEFT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSoPickedLotserialQuery rightJoinWithSalesOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSoPickedLotserialQuery innerJoinWithSalesOrderDetail() Adds a INNER JOIN clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSoPickedLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSoPickedLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSoPickedLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSoPickedLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSoPickedLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildSoPickedLotserialQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildSoPickedLotserialQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildSoPickedLotserialQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildSoPickedLotserialQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildSoPickedLotserialQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildSoPickedLotserialQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     \SalesOrderQuery|\SalesOrderDetailQuery|\ItemMasterItemQuery|\InvLotMasterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSoPickedLotserial|null findOne(?ConnectionInterface $con = null) Return the first ChildSoPickedLotserial matching the query
 * @method     ChildSoPickedLotserial findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSoPickedLotserial matching the query, or a new ChildSoPickedLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildSoPickedLotserial|null findOneByOehdnbr(int $OehdNbr) Return the first ChildSoPickedLotserial filtered by the OehdNbr column
 * @method     ChildSoPickedLotserial|null findOneByOedtline(int $OedtLine) Return the first ChildSoPickedLotserial filtered by the OedtLine column
 * @method     ChildSoPickedLotserial|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildSoPickedLotserial filtered by the InitItemNbr column
 * @method     ChildSoPickedLotserial|null findOneByOepdlotser(string $OepdLotSer) Return the first ChildSoPickedLotserial filtered by the OepdLotSer column
 * @method     ChildSoPickedLotserial|null findOneByOepdbin(string $OepdBin) Return the first ChildSoPickedLotserial filtered by the OepdBin column
 * @method     ChildSoPickedLotserial|null findOneByOepdplltnbr(int $OepdPlltNbr) Return the first ChildSoPickedLotserial filtered by the OepdPlltNbr column
 * @method     ChildSoPickedLotserial|null findOneByOepdcrtnnbr(int $OepdCrtnNbr) Return the first ChildSoPickedLotserial filtered by the OepdCrtnNbr column
 * @method     ChildSoPickedLotserial|null findOneByOepdqtyship(string $OepdQtyShip) Return the first ChildSoPickedLotserial filtered by the OepdQtyShip column
 * @method     ChildSoPickedLotserial|null findOneByOepdlotref(string $OepdLotRef) Return the first ChildSoPickedLotserial filtered by the OepdLotRef column
 * @method     ChildSoPickedLotserial|null findOneByOepdcntrqty(string $OepdCntrQty) Return the first ChildSoPickedLotserial filtered by the OepdCntrQty column
 * @method     ChildSoPickedLotserial|null findOneByOepdbatch(string $OepdBatch) Return the first ChildSoPickedLotserial filtered by the OepdBatch column
 * @method     ChildSoPickedLotserial|null findOneByOepdcuredate(string $OepdCureDate) Return the first ChildSoPickedLotserial filtered by the OepdCureDate column
 * @method     ChildSoPickedLotserial|null findOneByOepdpllttype(string $OepdPlltType) Return the first ChildSoPickedLotserial filtered by the OepdPlltType column
 * @method     ChildSoPickedLotserial|null findOneByOepdlblprtd(string $OepdLblPrtd) Return the first ChildSoPickedLotserial filtered by the OepdLblPrtd column
 * @method     ChildSoPickedLotserial|null findOneByOepdorigbin(string $OepdOrigBin) Return the first ChildSoPickedLotserial filtered by the OepdOrigBin column
 * @method     ChildSoPickedLotserial|null findOneByOepdplltid(string $OepdPlltID) Return the first ChildSoPickedLotserial filtered by the OepdPlltID column
 * @method     ChildSoPickedLotserial|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoPickedLotserial filtered by the DateUpdtd column
 * @method     ChildSoPickedLotserial|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoPickedLotserial filtered by the TimeUpdtd column
 * @method     ChildSoPickedLotserial|null findOneByDummy(string $dummy) Return the first ChildSoPickedLotserial filtered by the dummy column
 *
 * @method     ChildSoPickedLotserial requirePk($key, ?ConnectionInterface $con = null) Return the ChildSoPickedLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOne(?ConnectionInterface $con = null) Return the first ChildSoPickedLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoPickedLotserial requireOneByOehdnbr(int $OehdNbr) Return the first ChildSoPickedLotserial filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOedtline(int $OedtLine) Return the first ChildSoPickedLotserial filtered by the OedtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSoPickedLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdlotser(string $OepdLotSer) Return the first ChildSoPickedLotserial filtered by the OepdLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdbin(string $OepdBin) Return the first ChildSoPickedLotserial filtered by the OepdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdplltnbr(int $OepdPlltNbr) Return the first ChildSoPickedLotserial filtered by the OepdPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdcrtnnbr(int $OepdCrtnNbr) Return the first ChildSoPickedLotserial filtered by the OepdCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdqtyship(string $OepdQtyShip) Return the first ChildSoPickedLotserial filtered by the OepdQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdlotref(string $OepdLotRef) Return the first ChildSoPickedLotserial filtered by the OepdLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdcntrqty(string $OepdCntrQty) Return the first ChildSoPickedLotserial filtered by the OepdCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdbatch(string $OepdBatch) Return the first ChildSoPickedLotserial filtered by the OepdBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdcuredate(string $OepdCureDate) Return the first ChildSoPickedLotserial filtered by the OepdCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdpllttype(string $OepdPlltType) Return the first ChildSoPickedLotserial filtered by the OepdPlltType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdlblprtd(string $OepdLblPrtd) Return the first ChildSoPickedLotserial filtered by the OepdLblPrtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdorigbin(string $OepdOrigBin) Return the first ChildSoPickedLotserial filtered by the OepdOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByOepdplltid(string $OepdPlltID) Return the first ChildSoPickedLotserial filtered by the OepdPlltID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoPickedLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoPickedLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoPickedLotserial requireOneByDummy(string $dummy) Return the first ChildSoPickedLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoPickedLotserial[]|Collection find(?ConnectionInterface $con = null) Return ChildSoPickedLotserial objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> find(?ConnectionInterface $con = null) Return ChildSoPickedLotserial objects based on current ModelCriteria
 *
 * @method     ChildSoPickedLotserial[]|Collection findByOehdnbr(int|array<int> $OehdNbr) Return ChildSoPickedLotserial objects filtered by the OehdNbr column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOehdnbr(int|array<int> $OehdNbr) Return ChildSoPickedLotserial objects filtered by the OehdNbr column
 * @method     ChildSoPickedLotserial[]|Collection findByOedtline(int|array<int> $OedtLine) Return ChildSoPickedLotserial objects filtered by the OedtLine column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOedtline(int|array<int> $OedtLine) Return ChildSoPickedLotserial objects filtered by the OedtLine column
 * @method     ChildSoPickedLotserial[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSoPickedLotserial objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSoPickedLotserial objects filtered by the InitItemNbr column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdlotser(string|array<string> $OepdLotSer) Return ChildSoPickedLotserial objects filtered by the OepdLotSer column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdlotser(string|array<string> $OepdLotSer) Return ChildSoPickedLotserial objects filtered by the OepdLotSer column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdbin(string|array<string> $OepdBin) Return ChildSoPickedLotserial objects filtered by the OepdBin column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdbin(string|array<string> $OepdBin) Return ChildSoPickedLotserial objects filtered by the OepdBin column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdplltnbr(int|array<int> $OepdPlltNbr) Return ChildSoPickedLotserial objects filtered by the OepdPlltNbr column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdplltnbr(int|array<int> $OepdPlltNbr) Return ChildSoPickedLotserial objects filtered by the OepdPlltNbr column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdcrtnnbr(int|array<int> $OepdCrtnNbr) Return ChildSoPickedLotserial objects filtered by the OepdCrtnNbr column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdcrtnnbr(int|array<int> $OepdCrtnNbr) Return ChildSoPickedLotserial objects filtered by the OepdCrtnNbr column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdqtyship(string|array<string> $OepdQtyShip) Return ChildSoPickedLotserial objects filtered by the OepdQtyShip column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdqtyship(string|array<string> $OepdQtyShip) Return ChildSoPickedLotserial objects filtered by the OepdQtyShip column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdlotref(string|array<string> $OepdLotRef) Return ChildSoPickedLotserial objects filtered by the OepdLotRef column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdlotref(string|array<string> $OepdLotRef) Return ChildSoPickedLotserial objects filtered by the OepdLotRef column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdcntrqty(string|array<string> $OepdCntrQty) Return ChildSoPickedLotserial objects filtered by the OepdCntrQty column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdcntrqty(string|array<string> $OepdCntrQty) Return ChildSoPickedLotserial objects filtered by the OepdCntrQty column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdbatch(string|array<string> $OepdBatch) Return ChildSoPickedLotserial objects filtered by the OepdBatch column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdbatch(string|array<string> $OepdBatch) Return ChildSoPickedLotserial objects filtered by the OepdBatch column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdcuredate(string|array<string> $OepdCureDate) Return ChildSoPickedLotserial objects filtered by the OepdCureDate column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdcuredate(string|array<string> $OepdCureDate) Return ChildSoPickedLotserial objects filtered by the OepdCureDate column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdpllttype(string|array<string> $OepdPlltType) Return ChildSoPickedLotserial objects filtered by the OepdPlltType column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdpllttype(string|array<string> $OepdPlltType) Return ChildSoPickedLotserial objects filtered by the OepdPlltType column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdlblprtd(string|array<string> $OepdLblPrtd) Return ChildSoPickedLotserial objects filtered by the OepdLblPrtd column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdlblprtd(string|array<string> $OepdLblPrtd) Return ChildSoPickedLotserial objects filtered by the OepdLblPrtd column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdorigbin(string|array<string> $OepdOrigBin) Return ChildSoPickedLotserial objects filtered by the OepdOrigBin column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdorigbin(string|array<string> $OepdOrigBin) Return ChildSoPickedLotserial objects filtered by the OepdOrigBin column
 * @method     ChildSoPickedLotserial[]|Collection findByOepdplltid(string|array<string> $OepdPlltID) Return ChildSoPickedLotserial objects filtered by the OepdPlltID column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByOepdplltid(string|array<string> $OepdPlltID) Return ChildSoPickedLotserial objects filtered by the OepdPlltID column
 * @method     ChildSoPickedLotserial[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSoPickedLotserial objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSoPickedLotserial objects filtered by the DateUpdtd column
 * @method     ChildSoPickedLotserial[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSoPickedLotserial objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSoPickedLotserial objects filtered by the TimeUpdtd column
 * @method     ChildSoPickedLotserial[]|Collection findByDummy(string|array<string> $dummy) Return ChildSoPickedLotserial objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSoPickedLotserial> findByDummy(string|array<string> $dummy) Return ChildSoPickedLotserial objects filtered by the dummy column
 *
 * @method     ChildSoPickedLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSoPickedLotserial> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SoPickedLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoPickedLotserialQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoPickedLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoPickedLotserialQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoPickedLotserialQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSoPickedLotserialQuery) {
            return $criteria;
        }
        $query = new ChildSoPickedLotserialQuery();
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
     * @param array[$OehdNbr, $OedtLine, $InitItemNbr, $OepdLotSer, $OepdBin, $OepdPlltNbr, $OepdCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSoPickedLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoPickedLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoPickedLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildSoPickedLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OedtLine, InitItemNbr, OepdLotSer, OepdBin, OepdPlltNbr, OepdCrtnNbr, OepdQtyShip, OepdLotRef, OepdCntrQty, OepdBatch, OepdCureDate, OepdPlltType, OepdLblPrtd, OepdOrigBin, OepdPlltID, DateUpdtd, TimeUpdtd, dummy FROM so_pulled WHERE OehdNbr = :p0 AND OedtLine = :p1 AND InitItemNbr = :p2 AND OepdLotSer = :p3 AND OepdBin = :p4 AND OepdPlltNbr = :p5 AND OepdCrtnNbr = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSoPickedLotserial $obj */
            $obj = new ChildSoPickedLotserial();
            $obj->hydrate($row);
            SoPickedLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildSoPickedLotserial|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDLOTSER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDBIN, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDPLLTNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCRTNNBR, $key[6], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDLOTSER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDBIN, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDPLLTNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(SoPickedLotserialTableMap::COL_OEPDCRTNNBR, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr(1234); // WHERE OehdNbr = 1234
     * $query->filterByOehdnbr(array(12, 34)); // WHERE OehdNbr IN (12, 34)
     * $query->filterByOehdnbr(array('min' => 12)); // WHERE OehdNbr > 12
     * </code>
     *
     * @see       filterBySalesOrder()
     *
     * @see       filterBySalesOrderDetail()
     *
     * @param mixed $oehdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, ?string $comparison = null)
    {
        if (is_array($oehdnbr)) {
            $useMinMax = false;
            if (isset($oehdnbr['min'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $oehdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnbr['max'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $oehdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $oehdnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtline(1234); // WHERE OedtLine = 1234
     * $query->filterByOedtline(array(12, 34)); // WHERE OedtLine IN (12, 34)
     * $query->filterByOedtline(array('min' => 12)); // WHERE OedtLine > 12
     * </code>
     *
     * @see       filterBySalesOrderDetail()
     *
     * @param mixed $oedtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedtline($oedtline = null, ?string $comparison = null)
    {
        if (is_array($oedtline)) {
            $useMinMax = false;
            if (isset($oedtline['min'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEDTLINE, $oedtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtline['max'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEDTLINE, $oedtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEDTLINE, $oedtline, $comparison);

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

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdlotser('fooValue');   // WHERE OepdLotSer = 'fooValue'
     * $query->filterByOepdlotser('%fooValue%', Criteria::LIKE); // WHERE OepdLotSer LIKE '%fooValue%'
     * $query->filterByOepdlotser(['foo', 'bar']); // WHERE OepdLotSer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdlotser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdlotser($oepdlotser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdlotser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDLOTSER, $oepdlotser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdbin('fooValue');   // WHERE OepdBin = 'fooValue'
     * $query->filterByOepdbin('%fooValue%', Criteria::LIKE); // WHERE OepdBin LIKE '%fooValue%'
     * $query->filterByOepdbin(['foo', 'bar']); // WHERE OepdBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdbin($oepdbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDBIN, $oepdbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdplltnbr(1234); // WHERE OepdPlltNbr = 1234
     * $query->filterByOepdplltnbr(array(12, 34)); // WHERE OepdPlltNbr IN (12, 34)
     * $query->filterByOepdplltnbr(array('min' => 12)); // WHERE OepdPlltNbr > 12
     * </code>
     *
     * @param mixed $oepdplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdplltnbr($oepdplltnbr = null, ?string $comparison = null)
    {
        if (is_array($oepdplltnbr)) {
            $useMinMax = false;
            if (isset($oepdplltnbr['min'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDPLLTNBR, $oepdplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepdplltnbr['max'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDPLLTNBR, $oepdplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDPLLTNBR, $oepdplltnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdcrtnnbr(1234); // WHERE OepdCrtnNbr = 1234
     * $query->filterByOepdcrtnnbr(array(12, 34)); // WHERE OepdCrtnNbr IN (12, 34)
     * $query->filterByOepdcrtnnbr(array('min' => 12)); // WHERE OepdCrtnNbr > 12
     * </code>
     *
     * @param mixed $oepdcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdcrtnnbr($oepdcrtnnbr = null, ?string $comparison = null)
    {
        if (is_array($oepdcrtnnbr)) {
            $useMinMax = false;
            if (isset($oepdcrtnnbr['min'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCRTNNBR, $oepdcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepdcrtnnbr['max'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCRTNNBR, $oepdcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCRTNNBR, $oepdcrtnnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdqtyship(1234); // WHERE OepdQtyShip = 1234
     * $query->filterByOepdqtyship(array(12, 34)); // WHERE OepdQtyShip IN (12, 34)
     * $query->filterByOepdqtyship(array('min' => 12)); // WHERE OepdQtyShip > 12
     * </code>
     *
     * @param mixed $oepdqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdqtyship($oepdqtyship = null, ?string $comparison = null)
    {
        if (is_array($oepdqtyship)) {
            $useMinMax = false;
            if (isset($oepdqtyship['min'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDQTYSHIP, $oepdqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepdqtyship['max'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDQTYSHIP, $oepdqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDQTYSHIP, $oepdqtyship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdlotref('fooValue');   // WHERE OepdLotRef = 'fooValue'
     * $query->filterByOepdlotref('%fooValue%', Criteria::LIKE); // WHERE OepdLotRef LIKE '%fooValue%'
     * $query->filterByOepdlotref(['foo', 'bar']); // WHERE OepdLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdlotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdlotref($oepdlotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdlotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDLOTREF, $oepdlotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdcntrqty(1234); // WHERE OepdCntrQty = 1234
     * $query->filterByOepdcntrqty(array(12, 34)); // WHERE OepdCntrQty IN (12, 34)
     * $query->filterByOepdcntrqty(array('min' => 12)); // WHERE OepdCntrQty > 12
     * </code>
     *
     * @param mixed $oepdcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdcntrqty($oepdcntrqty = null, ?string $comparison = null)
    {
        if (is_array($oepdcntrqty)) {
            $useMinMax = false;
            if (isset($oepdcntrqty['min'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCNTRQTY, $oepdcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oepdcntrqty['max'])) {
                $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCNTRQTY, $oepdcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCNTRQTY, $oepdcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdbatch('fooValue');   // WHERE OepdBatch = 'fooValue'
     * $query->filterByOepdbatch('%fooValue%', Criteria::LIKE); // WHERE OepdBatch LIKE '%fooValue%'
     * $query->filterByOepdbatch(['foo', 'bar']); // WHERE OepdBatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdbatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdbatch($oepdbatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdbatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDBATCH, $oepdbatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdcuredate('fooValue');   // WHERE OepdCureDate = 'fooValue'
     * $query->filterByOepdcuredate('%fooValue%', Criteria::LIKE); // WHERE OepdCureDate LIKE '%fooValue%'
     * $query->filterByOepdcuredate(['foo', 'bar']); // WHERE OepdCureDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdcuredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdcuredate($oepdcuredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDCUREDATE, $oepdcuredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdPlltType column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdpllttype('fooValue');   // WHERE OepdPlltType = 'fooValue'
     * $query->filterByOepdpllttype('%fooValue%', Criteria::LIKE); // WHERE OepdPlltType LIKE '%fooValue%'
     * $query->filterByOepdpllttype(['foo', 'bar']); // WHERE OepdPlltType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdpllttype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdpllttype($oepdpllttype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdpllttype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDPLLTTYPE, $oepdpllttype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdLblPrtd column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdlblprtd('fooValue');   // WHERE OepdLblPrtd = 'fooValue'
     * $query->filterByOepdlblprtd('%fooValue%', Criteria::LIKE); // WHERE OepdLblPrtd LIKE '%fooValue%'
     * $query->filterByOepdlblprtd(['foo', 'bar']); // WHERE OepdLblPrtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdlblprtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdlblprtd($oepdlblprtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdlblprtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDLBLPRTD, $oepdlblprtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdorigbin('fooValue');   // WHERE OepdOrigBin = 'fooValue'
     * $query->filterByOepdorigbin('%fooValue%', Criteria::LIKE); // WHERE OepdOrigBin LIKE '%fooValue%'
     * $query->filterByOepdorigbin(['foo', 'bar']); // WHERE OepdOrigBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdorigbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdorigbin($oepdorigbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDORIGBIN, $oepdorigbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OepdPlltID column
     *
     * Example usage:
     * <code>
     * $query->filterByOepdplltid('fooValue');   // WHERE OepdPlltID = 'fooValue'
     * $query->filterByOepdplltid('%fooValue%', Criteria::LIKE); // WHERE OepdPlltID LIKE '%fooValue%'
     * $query->filterByOepdplltid(['foo', 'bar']); // WHERE OepdPlltID IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oepdplltid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOepdplltid($oepdplltid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oepdplltid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDPLLTID, $oepdplltid, $comparison);

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

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SoPickedLotserialTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \SalesOrder object
     *
     * @param \SalesOrder|ObjectCollection $salesOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, ?string $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            return $this
                ->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $salesOrder->getOehdnbr(), $comparison);
        } elseif ($salesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $salesOrder->toKeyValue('PrimaryKey', 'Oehdnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrder');

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
            $this->addJoinObject($join, 'SalesOrder');
        }

        return $this;
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrder', '\SalesOrderQuery');
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @param callable(\SalesOrderQuery):\SalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT EXISTS query.
     *
     * @see useSalesOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderQuery The inner query object of the IN statement
     */
    public function useInSalesOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT IN query.
     *
     * @see useSalesOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesOrderDetail object
     *
     * @param \SalesOrderDetail $salesOrderDetail The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrderDetail($salesOrderDetail, ?string $comparison = null)
    {
        if ($salesOrderDetail instanceof \SalesOrderDetail) {
            return $this
                ->addUsingAlias(SoPickedLotserialTableMap::COL_OEHDNBR, $salesOrderDetail->getOehdnbr(), $comparison)
                ->addUsingAlias(SoPickedLotserialTableMap::COL_OEDTLINE, $salesOrderDetail->getOedtline(), $comparison);
        } else {
            throw new PropelException('filterBySalesOrderDetail() only accepts arguments of type \SalesOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderDetail');

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
            $this->addJoinObject($join, 'SalesOrderDetail');
        }

        return $this;
    }

    /**
     * Use the SalesOrderDetail relation SalesOrderDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderDetail', '\SalesOrderDetailQuery');
    }

    /**
     * Use the SalesOrderDetail relation SalesOrderDetail object
     *
     * @param callable(\SalesOrderDetailQuery):\SalesOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useExistsQuery('SalesOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrderDetail table for a NOT EXISTS query.
     *
     * @see useSalesOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useExistsQuery('SalesOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderDetailQuery The inner query object of the IN statement
     */
    public function useInSalesOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useInQuery('SalesOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrderDetail table for a NOT IN query.
     *
     * @see useSalesOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useInQuery('SalesOrderDetail', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(SoPickedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SoPickedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
                ->addUsingAlias(SoPickedLotserialTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(SoPickedLotserialTableMap::COL_OEPDLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
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
     * @param ChildSoPickedLotserial $soPickedLotserial Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($soPickedLotserial = null)
    {
        if ($soPickedLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SoPickedLotserialTableMap::COL_OEHDNBR), $soPickedLotserial->getOehdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SoPickedLotserialTableMap::COL_OEDTLINE), $soPickedLotserial->getOedtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SoPickedLotserialTableMap::COL_INITITEMNBR), $soPickedLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SoPickedLotserialTableMap::COL_OEPDLOTSER), $soPickedLotserial->getOepdlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(SoPickedLotserialTableMap::COL_OEPDBIN), $soPickedLotserial->getOepdbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(SoPickedLotserialTableMap::COL_OEPDPLLTNBR), $soPickedLotserial->getOepdplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(SoPickedLotserialTableMap::COL_OEPDCRTNNBR), $soPickedLotserial->getOepdcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_pulled table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoPickedLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoPickedLotserialTableMap::clearInstancePool();
            SoPickedLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoPickedLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoPickedLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoPickedLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoPickedLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
