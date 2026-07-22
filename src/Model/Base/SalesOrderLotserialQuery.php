<?php

namespace Base;

use \SalesOrderLotserial as ChildSalesOrderLotserial;
use \SalesOrderLotserialQuery as ChildSalesOrderLotserialQuery;
use \Exception;
use \PDO;
use Map\SalesOrderLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_lot_ser` table.
 *
 * @method     ChildSalesOrderLotserialQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSalesOrderLotserialQuery orderByOedtline($order = Criteria::ASC) Order by the OedtLine column
 * @method     ChildSalesOrderLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSalesOrderLotserialQuery orderByOesdtag($order = Criteria::ASC) Order by the OesdTag column
 * @method     ChildSalesOrderLotserialQuery orderByOesdlotser($order = Criteria::ASC) Order by the OesdLotSer column
 * @method     ChildSalesOrderLotserialQuery orderByOesdbin($order = Criteria::ASC) Order by the OesdBin column
 * @method     ChildSalesOrderLotserialQuery orderByOesdplltnbr($order = Criteria::ASC) Order by the OesdPlltNbr column
 * @method     ChildSalesOrderLotserialQuery orderByOesdcrtnnbr($order = Criteria::ASC) Order by the OesdCrtnNbr column
 * @method     ChildSalesOrderLotserialQuery orderByOesdqtyship($order = Criteria::ASC) Order by the OesdQtyShip column
 * @method     ChildSalesOrderLotserialQuery orderByOesdcntrqty($order = Criteria::ASC) Order by the OesdCntrQty column
 * @method     ChildSalesOrderLotserialQuery orderByOesdspecordr($order = Criteria::ASC) Order by the OesdSpecOrdr column
 * @method     ChildSalesOrderLotserialQuery orderByOesdlotref($order = Criteria::ASC) Order by the OesdLotRef column
 * @method     ChildSalesOrderLotserialQuery orderByOesdbatch($order = Criteria::ASC) Order by the OesdBatch column
 * @method     ChildSalesOrderLotserialQuery orderByOesdcuredate($order = Criteria::ASC) Order by the OesdCureDate column
 * @method     ChildSalesOrderLotserialQuery orderByOesdacstatus($order = Criteria::ASC) Order by the OesdAcStatus column
 * @method     ChildSalesOrderLotserialQuery orderByOesdtestlot($order = Criteria::ASC) Order by the OesdTestLot column
 * @method     ChildSalesOrderLotserialQuery orderByOesdpllttype($order = Criteria::ASC) Order by the OesdPlltType column
 * @method     ChildSalesOrderLotserialQuery orderByOesdtarewght($order = Criteria::ASC) Order by the OesdTareWght column
 * @method     ChildSalesOrderLotserialQuery orderByOesduseup($order = Criteria::ASC) Order by the OesdUseUp column
 * @method     ChildSalesOrderLotserialQuery orderByOesdlblprtd($order = Criteria::ASC) Order by the OesdLblPrtd column
 * @method     ChildSalesOrderLotserialQuery orderByOesdorigbin($order = Criteria::ASC) Order by the OesdOrigBin column
 * @method     ChildSalesOrderLotserialQuery orderByOesdactvdate($order = Criteria::ASC) Order by the OesdActvDate column
 * @method     ChildSalesOrderLotserialQuery orderByOesdplltid($order = Criteria::ASC) Order by the OesdPlltID column
 * @method     ChildSalesOrderLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesOrderLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesOrderLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderLotserialQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSalesOrderLotserialQuery groupByOedtline() Group by the OedtLine column
 * @method     ChildSalesOrderLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSalesOrderLotserialQuery groupByOesdtag() Group by the OesdTag column
 * @method     ChildSalesOrderLotserialQuery groupByOesdlotser() Group by the OesdLotSer column
 * @method     ChildSalesOrderLotserialQuery groupByOesdbin() Group by the OesdBin column
 * @method     ChildSalesOrderLotserialQuery groupByOesdplltnbr() Group by the OesdPlltNbr column
 * @method     ChildSalesOrderLotserialQuery groupByOesdcrtnnbr() Group by the OesdCrtnNbr column
 * @method     ChildSalesOrderLotserialQuery groupByOesdqtyship() Group by the OesdQtyShip column
 * @method     ChildSalesOrderLotserialQuery groupByOesdcntrqty() Group by the OesdCntrQty column
 * @method     ChildSalesOrderLotserialQuery groupByOesdspecordr() Group by the OesdSpecOrdr column
 * @method     ChildSalesOrderLotserialQuery groupByOesdlotref() Group by the OesdLotRef column
 * @method     ChildSalesOrderLotserialQuery groupByOesdbatch() Group by the OesdBatch column
 * @method     ChildSalesOrderLotserialQuery groupByOesdcuredate() Group by the OesdCureDate column
 * @method     ChildSalesOrderLotserialQuery groupByOesdacstatus() Group by the OesdAcStatus column
 * @method     ChildSalesOrderLotserialQuery groupByOesdtestlot() Group by the OesdTestLot column
 * @method     ChildSalesOrderLotserialQuery groupByOesdpllttype() Group by the OesdPlltType column
 * @method     ChildSalesOrderLotserialQuery groupByOesdtarewght() Group by the OesdTareWght column
 * @method     ChildSalesOrderLotserialQuery groupByOesduseup() Group by the OesdUseUp column
 * @method     ChildSalesOrderLotserialQuery groupByOesdlblprtd() Group by the OesdLblPrtd column
 * @method     ChildSalesOrderLotserialQuery groupByOesdorigbin() Group by the OesdOrigBin column
 * @method     ChildSalesOrderLotserialQuery groupByOesdactvdate() Group by the OesdActvDate column
 * @method     ChildSalesOrderLotserialQuery groupByOesdplltid() Group by the OesdPlltID column
 * @method     ChildSalesOrderLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesOrderLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesOrderLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSalesOrderLotserialQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSalesOrderLotserialQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderLotserialQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSalesOrderLotserialQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSalesOrderLotserialQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinSalesOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderLotserialQuery rightJoinSalesOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderLotserialQuery innerJoinSalesOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderDetail relation
 *
 * @method     ChildSalesOrderLotserialQuery joinWithSalesOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinWithSalesOrderDetail() Adds a LEFT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderLotserialQuery rightJoinWithSalesOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSalesOrderLotserialQuery innerJoinWithSalesOrderDetail() Adds a INNER JOIN clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesOrderLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesOrderLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesOrderLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \SalesOrderQuery|\SalesOrderDetailQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesOrderLotserial|null findOne(?ConnectionInterface $con = null) Return the first ChildSalesOrderLotserial matching the query
 * @method     ChildSalesOrderLotserial findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSalesOrderLotserial matching the query, or a new ChildSalesOrderLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderLotserial|null findOneByOehdnbr(int $OehdNbr) Return the first ChildSalesOrderLotserial filtered by the OehdNbr column
 * @method     ChildSalesOrderLotserial|null findOneByOedtline(int $OedtLine) Return the first ChildSalesOrderLotserial filtered by the OedtLine column
 * @method     ChildSalesOrderLotserial|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesOrderLotserial filtered by the InitItemNbr column
 * @method     ChildSalesOrderLotserial|null findOneByOesdtag(string $OesdTag) Return the first ChildSalesOrderLotserial filtered by the OesdTag column
 * @method     ChildSalesOrderLotserial|null findOneByOesdlotser(string $OesdLotSer) Return the first ChildSalesOrderLotserial filtered by the OesdLotSer column
 * @method     ChildSalesOrderLotserial|null findOneByOesdbin(string $OesdBin) Return the first ChildSalesOrderLotserial filtered by the OesdBin column
 * @method     ChildSalesOrderLotserial|null findOneByOesdplltnbr(int $OesdPlltNbr) Return the first ChildSalesOrderLotserial filtered by the OesdPlltNbr column
 * @method     ChildSalesOrderLotserial|null findOneByOesdcrtnnbr(int $OesdCrtnNbr) Return the first ChildSalesOrderLotserial filtered by the OesdCrtnNbr column
 * @method     ChildSalesOrderLotserial|null findOneByOesdqtyship(string $OesdQtyShip) Return the first ChildSalesOrderLotserial filtered by the OesdQtyShip column
 * @method     ChildSalesOrderLotserial|null findOneByOesdcntrqty(string $OesdCntrQty) Return the first ChildSalesOrderLotserial filtered by the OesdCntrQty column
 * @method     ChildSalesOrderLotserial|null findOneByOesdspecordr(string $OesdSpecOrdr) Return the first ChildSalesOrderLotserial filtered by the OesdSpecOrdr column
 * @method     ChildSalesOrderLotserial|null findOneByOesdlotref(string $OesdLotRef) Return the first ChildSalesOrderLotserial filtered by the OesdLotRef column
 * @method     ChildSalesOrderLotserial|null findOneByOesdbatch(string $OesdBatch) Return the first ChildSalesOrderLotserial filtered by the OesdBatch column
 * @method     ChildSalesOrderLotserial|null findOneByOesdcuredate(string $OesdCureDate) Return the first ChildSalesOrderLotserial filtered by the OesdCureDate column
 * @method     ChildSalesOrderLotserial|null findOneByOesdacstatus(string $OesdAcStatus) Return the first ChildSalesOrderLotserial filtered by the OesdAcStatus column
 * @method     ChildSalesOrderLotserial|null findOneByOesdtestlot(string $OesdTestLot) Return the first ChildSalesOrderLotserial filtered by the OesdTestLot column
 * @method     ChildSalesOrderLotserial|null findOneByOesdpllttype(string $OesdPlltType) Return the first ChildSalesOrderLotserial filtered by the OesdPlltType column
 * @method     ChildSalesOrderLotserial|null findOneByOesdtarewght(string $OesdTareWght) Return the first ChildSalesOrderLotserial filtered by the OesdTareWght column
 * @method     ChildSalesOrderLotserial|null findOneByOesduseup(string $OesdUseUp) Return the first ChildSalesOrderLotserial filtered by the OesdUseUp column
 * @method     ChildSalesOrderLotserial|null findOneByOesdlblprtd(string $OesdLblPrtd) Return the first ChildSalesOrderLotserial filtered by the OesdLblPrtd column
 * @method     ChildSalesOrderLotserial|null findOneByOesdorigbin(string $OesdOrigBin) Return the first ChildSalesOrderLotserial filtered by the OesdOrigBin column
 * @method     ChildSalesOrderLotserial|null findOneByOesdactvdate(string $OesdActvDate) Return the first ChildSalesOrderLotserial filtered by the OesdActvDate column
 * @method     ChildSalesOrderLotserial|null findOneByOesdplltid(string $OesdPlltID) Return the first ChildSalesOrderLotserial filtered by the OesdPlltID column
 * @method     ChildSalesOrderLotserial|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderLotserial filtered by the DateUpdtd column
 * @method     ChildSalesOrderLotserial|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderLotserial filtered by the TimeUpdtd column
 * @method     ChildSalesOrderLotserial|null findOneByDummy(string $dummy) Return the first ChildSalesOrderLotserial filtered by the dummy column
 *
 * @method     ChildSalesOrderLotserial requirePk($key, ?ConnectionInterface $con = null) Return the ChildSalesOrderLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOne(?ConnectionInterface $con = null) Return the first ChildSalesOrderLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderLotserial requireOneByOehdnbr(int $OehdNbr) Return the first ChildSalesOrderLotserial filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOedtline(int $OedtLine) Return the first ChildSalesOrderLotserial filtered by the OedtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesOrderLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdtag(string $OesdTag) Return the first ChildSalesOrderLotserial filtered by the OesdTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdlotser(string $OesdLotSer) Return the first ChildSalesOrderLotserial filtered by the OesdLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdbin(string $OesdBin) Return the first ChildSalesOrderLotserial filtered by the OesdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdplltnbr(int $OesdPlltNbr) Return the first ChildSalesOrderLotserial filtered by the OesdPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdcrtnnbr(int $OesdCrtnNbr) Return the first ChildSalesOrderLotserial filtered by the OesdCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdqtyship(string $OesdQtyShip) Return the first ChildSalesOrderLotserial filtered by the OesdQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdcntrqty(string $OesdCntrQty) Return the first ChildSalesOrderLotserial filtered by the OesdCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdspecordr(string $OesdSpecOrdr) Return the first ChildSalesOrderLotserial filtered by the OesdSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdlotref(string $OesdLotRef) Return the first ChildSalesOrderLotserial filtered by the OesdLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdbatch(string $OesdBatch) Return the first ChildSalesOrderLotserial filtered by the OesdBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdcuredate(string $OesdCureDate) Return the first ChildSalesOrderLotserial filtered by the OesdCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdacstatus(string $OesdAcStatus) Return the first ChildSalesOrderLotserial filtered by the OesdAcStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdtestlot(string $OesdTestLot) Return the first ChildSalesOrderLotserial filtered by the OesdTestLot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdpllttype(string $OesdPlltType) Return the first ChildSalesOrderLotserial filtered by the OesdPlltType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdtarewght(string $OesdTareWght) Return the first ChildSalesOrderLotserial filtered by the OesdTareWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesduseup(string $OesdUseUp) Return the first ChildSalesOrderLotserial filtered by the OesdUseUp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdlblprtd(string $OesdLblPrtd) Return the first ChildSalesOrderLotserial filtered by the OesdLblPrtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdorigbin(string $OesdOrigBin) Return the first ChildSalesOrderLotserial filtered by the OesdOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdactvdate(string $OesdActvDate) Return the first ChildSalesOrderLotserial filtered by the OesdActvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByOesdplltid(string $OesdPlltID) Return the first ChildSalesOrderLotserial filtered by the OesdPlltID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderLotserial requireOneByDummy(string $dummy) Return the first ChildSalesOrderLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderLotserial[]|Collection find(?ConnectionInterface $con = null) Return ChildSalesOrderLotserial objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> find(?ConnectionInterface $con = null) Return ChildSalesOrderLotserial objects based on current ModelCriteria
 *
 * @method     ChildSalesOrderLotserial[]|Collection findByOehdnbr(int|array<int> $OehdNbr) Return ChildSalesOrderLotserial objects filtered by the OehdNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOehdnbr(int|array<int> $OehdNbr) Return ChildSalesOrderLotserial objects filtered by the OehdNbr column
 * @method     ChildSalesOrderLotserial[]|Collection findByOedtline(int|array<int> $OedtLine) Return ChildSalesOrderLotserial objects filtered by the OedtLine column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOedtline(int|array<int> $OedtLine) Return ChildSalesOrderLotserial objects filtered by the OedtLine column
 * @method     ChildSalesOrderLotserial[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesOrderLotserial objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesOrderLotserial objects filtered by the InitItemNbr column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdtag(string|array<string> $OesdTag) Return ChildSalesOrderLotserial objects filtered by the OesdTag column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdtag(string|array<string> $OesdTag) Return ChildSalesOrderLotserial objects filtered by the OesdTag column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdlotser(string|array<string> $OesdLotSer) Return ChildSalesOrderLotserial objects filtered by the OesdLotSer column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdlotser(string|array<string> $OesdLotSer) Return ChildSalesOrderLotserial objects filtered by the OesdLotSer column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdbin(string|array<string> $OesdBin) Return ChildSalesOrderLotserial objects filtered by the OesdBin column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdbin(string|array<string> $OesdBin) Return ChildSalesOrderLotserial objects filtered by the OesdBin column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdplltnbr(int|array<int> $OesdPlltNbr) Return ChildSalesOrderLotserial objects filtered by the OesdPlltNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdplltnbr(int|array<int> $OesdPlltNbr) Return ChildSalesOrderLotserial objects filtered by the OesdPlltNbr column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdcrtnnbr(int|array<int> $OesdCrtnNbr) Return ChildSalesOrderLotserial objects filtered by the OesdCrtnNbr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdcrtnnbr(int|array<int> $OesdCrtnNbr) Return ChildSalesOrderLotserial objects filtered by the OesdCrtnNbr column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdqtyship(string|array<string> $OesdQtyShip) Return ChildSalesOrderLotserial objects filtered by the OesdQtyShip column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdqtyship(string|array<string> $OesdQtyShip) Return ChildSalesOrderLotserial objects filtered by the OesdQtyShip column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdcntrqty(string|array<string> $OesdCntrQty) Return ChildSalesOrderLotserial objects filtered by the OesdCntrQty column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdcntrqty(string|array<string> $OesdCntrQty) Return ChildSalesOrderLotserial objects filtered by the OesdCntrQty column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdspecordr(string|array<string> $OesdSpecOrdr) Return ChildSalesOrderLotserial objects filtered by the OesdSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdspecordr(string|array<string> $OesdSpecOrdr) Return ChildSalesOrderLotserial objects filtered by the OesdSpecOrdr column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdlotref(string|array<string> $OesdLotRef) Return ChildSalesOrderLotserial objects filtered by the OesdLotRef column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdlotref(string|array<string> $OesdLotRef) Return ChildSalesOrderLotserial objects filtered by the OesdLotRef column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdbatch(string|array<string> $OesdBatch) Return ChildSalesOrderLotserial objects filtered by the OesdBatch column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdbatch(string|array<string> $OesdBatch) Return ChildSalesOrderLotserial objects filtered by the OesdBatch column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdcuredate(string|array<string> $OesdCureDate) Return ChildSalesOrderLotserial objects filtered by the OesdCureDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdcuredate(string|array<string> $OesdCureDate) Return ChildSalesOrderLotserial objects filtered by the OesdCureDate column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdacstatus(string|array<string> $OesdAcStatus) Return ChildSalesOrderLotserial objects filtered by the OesdAcStatus column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdacstatus(string|array<string> $OesdAcStatus) Return ChildSalesOrderLotserial objects filtered by the OesdAcStatus column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdtestlot(string|array<string> $OesdTestLot) Return ChildSalesOrderLotserial objects filtered by the OesdTestLot column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdtestlot(string|array<string> $OesdTestLot) Return ChildSalesOrderLotserial objects filtered by the OesdTestLot column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdpllttype(string|array<string> $OesdPlltType) Return ChildSalesOrderLotserial objects filtered by the OesdPlltType column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdpllttype(string|array<string> $OesdPlltType) Return ChildSalesOrderLotserial objects filtered by the OesdPlltType column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdtarewght(string|array<string> $OesdTareWght) Return ChildSalesOrderLotserial objects filtered by the OesdTareWght column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdtarewght(string|array<string> $OesdTareWght) Return ChildSalesOrderLotserial objects filtered by the OesdTareWght column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesduseup(string|array<string> $OesdUseUp) Return ChildSalesOrderLotserial objects filtered by the OesdUseUp column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesduseup(string|array<string> $OesdUseUp) Return ChildSalesOrderLotserial objects filtered by the OesdUseUp column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdlblprtd(string|array<string> $OesdLblPrtd) Return ChildSalesOrderLotserial objects filtered by the OesdLblPrtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdlblprtd(string|array<string> $OesdLblPrtd) Return ChildSalesOrderLotserial objects filtered by the OesdLblPrtd column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdorigbin(string|array<string> $OesdOrigBin) Return ChildSalesOrderLotserial objects filtered by the OesdOrigBin column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdorigbin(string|array<string> $OesdOrigBin) Return ChildSalesOrderLotserial objects filtered by the OesdOrigBin column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdactvdate(string|array<string> $OesdActvDate) Return ChildSalesOrderLotserial objects filtered by the OesdActvDate column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdactvdate(string|array<string> $OesdActvDate) Return ChildSalesOrderLotserial objects filtered by the OesdActvDate column
 * @method     ChildSalesOrderLotserial[]|Collection findByOesdplltid(string|array<string> $OesdPlltID) Return ChildSalesOrderLotserial objects filtered by the OesdPlltID column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByOesdplltid(string|array<string> $OesdPlltID) Return ChildSalesOrderLotserial objects filtered by the OesdPlltID column
 * @method     ChildSalesOrderLotserial[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesOrderLotserial objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesOrderLotserial objects filtered by the DateUpdtd column
 * @method     ChildSalesOrderLotserial[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesOrderLotserial objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesOrderLotserial objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrderLotserial[]|Collection findByDummy(string|array<string> $dummy) Return ChildSalesOrderLotserial objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSalesOrderLotserial> findByDummy(string|array<string> $dummy) Return ChildSalesOrderLotserial objects filtered by the dummy column
 *
 * @method     ChildSalesOrderLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSalesOrderLotserial> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SalesOrderLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderLotserialQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderLotserialQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderLotserialQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSalesOrderLotserialQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderLotserialQuery();
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
     * @param array[$OehdNbr, $OedtLine, $InitItemNbr, $OesdTag, $OesdLotSer, $OesdBin, $OesdPlltNbr, $OesdCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesOrderLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6]), (null === $key[7] || is_scalar($key[7]) || is_callable([$key[7], '__toString']) ? (string) $key[7] : $key[7])]))))) {
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
     * @return ChildSalesOrderLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OedtLine, InitItemNbr, OesdTag, OesdLotSer, OesdBin, OesdPlltNbr, OesdCrtnNbr, OesdQtyShip, OesdCntrQty, OesdSpecOrdr, OesdLotRef, OesdBatch, OesdCureDate, OesdAcStatus, OesdTestLot, OesdPlltType, OesdTareWght, OesdUseUp, OesdLblPrtd, OesdOrigBin, OesdActvDate, OesdPlltID, DateUpdtd, TimeUpdtd, dummy FROM so_lot_ser WHERE OehdNbr = :p0 AND OedtLine = :p1 AND InitItemNbr = :p2 AND OesdTag = :p3 AND OesdLotSer = :p4 AND OesdBin = :p5 AND OesdPlltNbr = :p6 AND OesdCrtnNbr = :p7';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_INT);
            $stmt->bindValue(':p7', $key[7], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesOrderLotserial $obj */
            $obj = new ChildSalesOrderLotserial();
            $obj->hydrate($row);
            SalesOrderLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6]), (null === $key[7] || is_scalar($key[7]) || is_callable([$key[7], '__toString']) ? (string) $key[7] : $key[7])]));
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
     * @return ChildSalesOrderLotserial|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDTAG, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDLOTSER, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDBIN, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $key[6], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $key[7], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDTAG, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDLOTSER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDBIN, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $cton7 = $this->getNewCriterion(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $key[7], Criteria::EQUAL);
            $cton0->addAnd($cton7);
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
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $oehdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnbr['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $oehdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $oehdnbr, $comparison);

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
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEDTLINE, $oedtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtline['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEDTLINE, $oedtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OEDTLINE, $oedtline, $comparison);

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

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdTag column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdtag('fooValue');   // WHERE OesdTag = 'fooValue'
     * $query->filterByOesdtag('%fooValue%', Criteria::LIKE); // WHERE OesdTag LIKE '%fooValue%'
     * $query->filterByOesdtag(['foo', 'bar']); // WHERE OesdTag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdtag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdtag($oesdtag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdtag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDTAG, $oesdtag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdlotser('fooValue');   // WHERE OesdLotSer = 'fooValue'
     * $query->filterByOesdlotser('%fooValue%', Criteria::LIKE); // WHERE OesdLotSer LIKE '%fooValue%'
     * $query->filterByOesdlotser(['foo', 'bar']); // WHERE OesdLotSer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdlotser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdlotser($oesdlotser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdlotser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDLOTSER, $oesdlotser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdbin('fooValue');   // WHERE OesdBin = 'fooValue'
     * $query->filterByOesdbin('%fooValue%', Criteria::LIKE); // WHERE OesdBin LIKE '%fooValue%'
     * $query->filterByOesdbin(['foo', 'bar']); // WHERE OesdBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdbin($oesdbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDBIN, $oesdbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdplltnbr(1234); // WHERE OesdPlltNbr = 1234
     * $query->filterByOesdplltnbr(array(12, 34)); // WHERE OesdPlltNbr IN (12, 34)
     * $query->filterByOesdplltnbr(array('min' => 12)); // WHERE OesdPlltNbr > 12
     * </code>
     *
     * @param mixed $oesdplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdplltnbr($oesdplltnbr = null, ?string $comparison = null)
    {
        if (is_array($oesdplltnbr)) {
            $useMinMax = false;
            if (isset($oesdplltnbr['min'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $oesdplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oesdplltnbr['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $oesdplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDPLLTNBR, $oesdplltnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdcrtnnbr(1234); // WHERE OesdCrtnNbr = 1234
     * $query->filterByOesdcrtnnbr(array(12, 34)); // WHERE OesdCrtnNbr IN (12, 34)
     * $query->filterByOesdcrtnnbr(array('min' => 12)); // WHERE OesdCrtnNbr > 12
     * </code>
     *
     * @param mixed $oesdcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdcrtnnbr($oesdcrtnnbr = null, ?string $comparison = null)
    {
        if (is_array($oesdcrtnnbr)) {
            $useMinMax = false;
            if (isset($oesdcrtnnbr['min'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $oesdcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oesdcrtnnbr['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $oesdcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCRTNNBR, $oesdcrtnnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdqtyship(1234); // WHERE OesdQtyShip = 1234
     * $query->filterByOesdqtyship(array(12, 34)); // WHERE OesdQtyShip IN (12, 34)
     * $query->filterByOesdqtyship(array('min' => 12)); // WHERE OesdQtyShip > 12
     * </code>
     *
     * @param mixed $oesdqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdqtyship($oesdqtyship = null, ?string $comparison = null)
    {
        if (is_array($oesdqtyship)) {
            $useMinMax = false;
            if (isset($oesdqtyship['min'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDQTYSHIP, $oesdqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oesdqtyship['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDQTYSHIP, $oesdqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDQTYSHIP, $oesdqtyship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdcntrqty(1234); // WHERE OesdCntrQty = 1234
     * $query->filterByOesdcntrqty(array(12, 34)); // WHERE OesdCntrQty IN (12, 34)
     * $query->filterByOesdcntrqty(array('min' => 12)); // WHERE OesdCntrQty > 12
     * </code>
     *
     * @param mixed $oesdcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdcntrqty($oesdcntrqty = null, ?string $comparison = null)
    {
        if (is_array($oesdcntrqty)) {
            $useMinMax = false;
            if (isset($oesdcntrqty['min'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCNTRQTY, $oesdcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oesdcntrqty['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCNTRQTY, $oesdcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCNTRQTY, $oesdcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdspecordr('fooValue');   // WHERE OesdSpecOrdr = 'fooValue'
     * $query->filterByOesdspecordr('%fooValue%', Criteria::LIKE); // WHERE OesdSpecOrdr LIKE '%fooValue%'
     * $query->filterByOesdspecordr(['foo', 'bar']); // WHERE OesdSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdspecordr($oesdspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDSPECORDR, $oesdspecordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdlotref('fooValue');   // WHERE OesdLotRef = 'fooValue'
     * $query->filterByOesdlotref('%fooValue%', Criteria::LIKE); // WHERE OesdLotRef LIKE '%fooValue%'
     * $query->filterByOesdlotref(['foo', 'bar']); // WHERE OesdLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdlotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdlotref($oesdlotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdlotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDLOTREF, $oesdlotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdbatch('fooValue');   // WHERE OesdBatch = 'fooValue'
     * $query->filterByOesdbatch('%fooValue%', Criteria::LIKE); // WHERE OesdBatch LIKE '%fooValue%'
     * $query->filterByOesdbatch(['foo', 'bar']); // WHERE OesdBatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdbatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdbatch($oesdbatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdbatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDBATCH, $oesdbatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdcuredate('fooValue');   // WHERE OesdCureDate = 'fooValue'
     * $query->filterByOesdcuredate('%fooValue%', Criteria::LIKE); // WHERE OesdCureDate LIKE '%fooValue%'
     * $query->filterByOesdcuredate(['foo', 'bar']); // WHERE OesdCureDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdcuredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdcuredate($oesdcuredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDCUREDATE, $oesdcuredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdAcStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdacstatus('fooValue');   // WHERE OesdAcStatus = 'fooValue'
     * $query->filterByOesdacstatus('%fooValue%', Criteria::LIKE); // WHERE OesdAcStatus LIKE '%fooValue%'
     * $query->filterByOesdacstatus(['foo', 'bar']); // WHERE OesdAcStatus IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdacstatus The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdacstatus($oesdacstatus = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdacstatus)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDACSTATUS, $oesdacstatus, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdTestLot column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdtestlot('fooValue');   // WHERE OesdTestLot = 'fooValue'
     * $query->filterByOesdtestlot('%fooValue%', Criteria::LIKE); // WHERE OesdTestLot LIKE '%fooValue%'
     * $query->filterByOesdtestlot(['foo', 'bar']); // WHERE OesdTestLot IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdtestlot The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdtestlot($oesdtestlot = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdtestlot)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDTESTLOT, $oesdtestlot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdPlltType column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdpllttype('fooValue');   // WHERE OesdPlltType = 'fooValue'
     * $query->filterByOesdpllttype('%fooValue%', Criteria::LIKE); // WHERE OesdPlltType LIKE '%fooValue%'
     * $query->filterByOesdpllttype(['foo', 'bar']); // WHERE OesdPlltType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdpllttype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdpllttype($oesdpllttype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdpllttype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDPLLTTYPE, $oesdpllttype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdTareWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdtarewght(1234); // WHERE OesdTareWght = 1234
     * $query->filterByOesdtarewght(array(12, 34)); // WHERE OesdTareWght IN (12, 34)
     * $query->filterByOesdtarewght(array('min' => 12)); // WHERE OesdTareWght > 12
     * </code>
     *
     * @param mixed $oesdtarewght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdtarewght($oesdtarewght = null, ?string $comparison = null)
    {
        if (is_array($oesdtarewght)) {
            $useMinMax = false;
            if (isset($oesdtarewght['min'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDTAREWGHT, $oesdtarewght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oesdtarewght['max'])) {
                $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDTAREWGHT, $oesdtarewght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDTAREWGHT, $oesdtarewght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdUseUp column
     *
     * Example usage:
     * <code>
     * $query->filterByOesduseup('fooValue');   // WHERE OesdUseUp = 'fooValue'
     * $query->filterByOesduseup('%fooValue%', Criteria::LIKE); // WHERE OesdUseUp LIKE '%fooValue%'
     * $query->filterByOesduseup(['foo', 'bar']); // WHERE OesdUseUp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesduseup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesduseup($oesduseup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesduseup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDUSEUP, $oesduseup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdLblPrtd column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdlblprtd('fooValue');   // WHERE OesdLblPrtd = 'fooValue'
     * $query->filterByOesdlblprtd('%fooValue%', Criteria::LIKE); // WHERE OesdLblPrtd LIKE '%fooValue%'
     * $query->filterByOesdlblprtd(['foo', 'bar']); // WHERE OesdLblPrtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdlblprtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdlblprtd($oesdlblprtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdlblprtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDLBLPRTD, $oesdlblprtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdorigbin('fooValue');   // WHERE OesdOrigBin = 'fooValue'
     * $query->filterByOesdorigbin('%fooValue%', Criteria::LIKE); // WHERE OesdOrigBin LIKE '%fooValue%'
     * $query->filterByOesdorigbin(['foo', 'bar']); // WHERE OesdOrigBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdorigbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdorigbin($oesdorigbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDORIGBIN, $oesdorigbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdActvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdactvdate('fooValue');   // WHERE OesdActvDate = 'fooValue'
     * $query->filterByOesdactvdate('%fooValue%', Criteria::LIKE); // WHERE OesdActvDate LIKE '%fooValue%'
     * $query->filterByOesdactvdate(['foo', 'bar']); // WHERE OesdActvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdactvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdactvdate($oesdactvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdactvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDACTVDATE, $oesdactvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OesdPlltID column
     *
     * Example usage:
     * <code>
     * $query->filterByOesdplltid('fooValue');   // WHERE OesdPlltID = 'fooValue'
     * $query->filterByOesdplltid('%fooValue%', Criteria::LIKE); // WHERE OesdPlltID LIKE '%fooValue%'
     * $query->filterByOesdplltid(['foo', 'bar']); // WHERE OesdPlltID IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oesdplltid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOesdplltid($oesdplltid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oesdplltid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_OESDPLLTID, $oesdplltid, $comparison);

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

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SalesOrderLotserialTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $salesOrder->getOehdnbr(), $comparison);
        } elseif ($salesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $salesOrder->toKeyValue('PrimaryKey', 'Oehdnbr'), $comparison);

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
                ->addUsingAlias(SalesOrderLotserialTableMap::COL_OEHDNBR, $salesOrderDetail->getOehdnbr(), $comparison)
                ->addUsingAlias(SalesOrderLotserialTableMap::COL_OEDTLINE, $salesOrderDetail->getOedtline(), $comparison);
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
                ->addUsingAlias(SalesOrderLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesOrderLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Exclude object from result
     *
     * @param ChildSalesOrderLotserial $salesOrderLotserial Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($salesOrderLotserial = null)
    {
        if ($salesOrderLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OEHDNBR), $salesOrderLotserial->getOehdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OEDTLINE), $salesOrderLotserial->getOedtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_INITITEMNBR), $salesOrderLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OESDTAG), $salesOrderLotserial->getOesdtag(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OESDLOTSER), $salesOrderLotserial->getOesdlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OESDBIN), $salesOrderLotserial->getOesdbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OESDPLLTNBR), $salesOrderLotserial->getOesdplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond7', $this->getAliasedColName(SalesOrderLotserialTableMap::COL_OESDCRTNNBR), $salesOrderLotserial->getOesdcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6', 'pruneCond7'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_lot_ser table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderLotserialTableMap::clearInstancePool();
            SalesOrderLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
