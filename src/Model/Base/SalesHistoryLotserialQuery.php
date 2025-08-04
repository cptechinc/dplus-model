<?php

namespace Base;

use \SalesHistoryLotserial as ChildSalesHistoryLotserial;
use \SalesHistoryLotserialQuery as ChildSalesHistoryLotserialQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_lot_ser_hist` table.
 *
 * @method     ChildSalesHistoryLotserialQuery orderByOehhnbr($order = Criteria::ASC) Order by the OehhNbr column
 * @method     ChildSalesHistoryLotserialQuery orderByOedhline($order = Criteria::ASC) Order by the OedhLine column
 * @method     ChildSalesHistoryLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshtag($order = Criteria::ASC) Order by the OeshTag column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshlotser($order = Criteria::ASC) Order by the OeshLotSer column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshbin($order = Criteria::ASC) Order by the OeshBin column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshplltnbr($order = Criteria::ASC) Order by the OeshPlltNbr column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshcrtnnbr($order = Criteria::ASC) Order by the OeshCrtnNbr column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshyear($order = Criteria::ASC) Order by the OeshYear column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshqtyship($order = Criteria::ASC) Order by the OeshQtyShip column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshcntrqty($order = Criteria::ASC) Order by the OeshCntrQty column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshspecordr($order = Criteria::ASC) Order by the OeshSpecOrdr column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshlotref($order = Criteria::ASC) Order by the OeshLotRef column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshbatch($order = Criteria::ASC) Order by the OeshBatch column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshcuredate($order = Criteria::ASC) Order by the OeshCureDate column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshacstatus($order = Criteria::ASC) Order by the OeshAcStatus column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshtestlot($order = Criteria::ASC) Order by the OeshTestLot column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshpllttype($order = Criteria::ASC) Order by the OeshPlltType column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshtarewght($order = Criteria::ASC) Order by the OeshTareWght column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshuseup($order = Criteria::ASC) Order by the OeshUseUp column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshlblprtd($order = Criteria::ASC) Order by the OeshLblPrtd column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshorigbin($order = Criteria::ASC) Order by the OeshOrigBin column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshactvdate($order = Criteria::ASC) Order by the OeshActvDate column
 * @method     ChildSalesHistoryLotserialQuery orderByOeshplltid($order = Criteria::ASC) Order by the OeshPlltID column
 * @method     ChildSalesHistoryLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesHistoryLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesHistoryLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesHistoryLotserialQuery groupByOehhnbr() Group by the OehhNbr column
 * @method     ChildSalesHistoryLotserialQuery groupByOedhline() Group by the OedhLine column
 * @method     ChildSalesHistoryLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshtag() Group by the OeshTag column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshlotser() Group by the OeshLotSer column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshbin() Group by the OeshBin column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshplltnbr() Group by the OeshPlltNbr column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshcrtnnbr() Group by the OeshCrtnNbr column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshyear() Group by the OeshYear column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshqtyship() Group by the OeshQtyShip column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshcntrqty() Group by the OeshCntrQty column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshspecordr() Group by the OeshSpecOrdr column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshlotref() Group by the OeshLotRef column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshbatch() Group by the OeshBatch column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshcuredate() Group by the OeshCureDate column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshacstatus() Group by the OeshAcStatus column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshtestlot() Group by the OeshTestLot column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshpllttype() Group by the OeshPlltType column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshtarewght() Group by the OeshTareWght column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshuseup() Group by the OeshUseUp column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshlblprtd() Group by the OeshLblPrtd column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshorigbin() Group by the OeshOrigBin column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshactvdate() Group by the OeshActvDate column
 * @method     ChildSalesHistoryLotserialQuery groupByOeshplltid() Group by the OeshPlltID column
 * @method     ChildSalesHistoryLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesHistoryLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesHistoryLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesHistoryLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesHistoryLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesHistoryLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesHistoryLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinSalesHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistory relation
 * @method     ChildSalesHistoryLotserialQuery rightJoinSalesHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistory relation
 * @method     ChildSalesHistoryLotserialQuery innerJoinSalesHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistory relation
 *
 * @method     ChildSalesHistoryLotserialQuery joinWithSalesHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistory relation
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinWithSalesHistory() Adds a LEFT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildSalesHistoryLotserialQuery rightJoinWithSalesHistory() Adds a RIGHT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildSalesHistoryLotserialQuery innerJoinWithSalesHistory() Adds a INNER JOIN clause and with to the query using the SalesHistory relation
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinSalesHistoryDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryLotserialQuery rightJoinSalesHistoryDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryLotserialQuery innerJoinSalesHistoryDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistoryDetail relation
 *
 * @method     ChildSalesHistoryLotserialQuery joinWithSalesHistoryDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistoryDetail relation
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinWithSalesHistoryDetail() Adds a LEFT JOIN clause and with to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryLotserialQuery rightJoinWithSalesHistoryDetail() Adds a RIGHT JOIN clause and with to the query using the SalesHistoryDetail relation
 * @method     ChildSalesHistoryLotserialQuery innerJoinWithSalesHistoryDetail() Adds a INNER JOIN clause and with to the query using the SalesHistoryDetail relation
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesHistoryLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSalesHistoryLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSalesHistoryLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \SalesHistoryQuery|\SalesHistoryDetailQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesHistoryLotserial|null findOne(?ConnectionInterface $con = null) Return the first ChildSalesHistoryLotserial matching the query
 * @method     ChildSalesHistoryLotserial findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSalesHistoryLotserial matching the query, or a new ChildSalesHistoryLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildSalesHistoryLotserial|null findOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistoryLotserial filtered by the OehhNbr column
 * @method     ChildSalesHistoryLotserial|null findOneByOedhline(int $OedhLine) Return the first ChildSalesHistoryLotserial filtered by the OedhLine column
 * @method     ChildSalesHistoryLotserial|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesHistoryLotserial filtered by the InitItemNbr column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshtag(string $OeshTag) Return the first ChildSalesHistoryLotserial filtered by the OeshTag column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshlotser(string $OeshLotSer) Return the first ChildSalesHistoryLotserial filtered by the OeshLotSer column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshbin(string $OeshBin) Return the first ChildSalesHistoryLotserial filtered by the OeshBin column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshplltnbr(int $OeshPlltNbr) Return the first ChildSalesHistoryLotserial filtered by the OeshPlltNbr column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshcrtnnbr(int $OeshCrtnNbr) Return the first ChildSalesHistoryLotserial filtered by the OeshCrtnNbr column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshyear(string $OeshYear) Return the first ChildSalesHistoryLotserial filtered by the OeshYear column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshqtyship(string $OeshQtyShip) Return the first ChildSalesHistoryLotserial filtered by the OeshQtyShip column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshcntrqty(string $OeshCntrQty) Return the first ChildSalesHistoryLotserial filtered by the OeshCntrQty column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshspecordr(string $OeshSpecOrdr) Return the first ChildSalesHistoryLotserial filtered by the OeshSpecOrdr column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshlotref(string $OeshLotRef) Return the first ChildSalesHistoryLotserial filtered by the OeshLotRef column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshbatch(string $OeshBatch) Return the first ChildSalesHistoryLotserial filtered by the OeshBatch column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshcuredate(string $OeshCureDate) Return the first ChildSalesHistoryLotserial filtered by the OeshCureDate column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshacstatus(string $OeshAcStatus) Return the first ChildSalesHistoryLotserial filtered by the OeshAcStatus column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshtestlot(string $OeshTestLot) Return the first ChildSalesHistoryLotserial filtered by the OeshTestLot column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshpllttype(string $OeshPlltType) Return the first ChildSalesHistoryLotserial filtered by the OeshPlltType column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshtarewght(string $OeshTareWght) Return the first ChildSalesHistoryLotserial filtered by the OeshTareWght column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshuseup(string $OeshUseUp) Return the first ChildSalesHistoryLotserial filtered by the OeshUseUp column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshlblprtd(string $OeshLblPrtd) Return the first ChildSalesHistoryLotserial filtered by the OeshLblPrtd column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshorigbin(string $OeshOrigBin) Return the first ChildSalesHistoryLotserial filtered by the OeshOrigBin column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshactvdate(string $OeshActvDate) Return the first ChildSalesHistoryLotserial filtered by the OeshActvDate column
 * @method     ChildSalesHistoryLotserial|null findOneByOeshplltid(string $OeshPlltID) Return the first ChildSalesHistoryLotserial filtered by the OeshPlltID column
 * @method     ChildSalesHistoryLotserial|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistoryLotserial filtered by the DateUpdtd column
 * @method     ChildSalesHistoryLotserial|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistoryLotserial filtered by the TimeUpdtd column
 * @method     ChildSalesHistoryLotserial|null findOneByDummy(string $dummy) Return the first ChildSalesHistoryLotserial filtered by the dummy column
 *
 * @method     ChildSalesHistoryLotserial requirePk($key, ?ConnectionInterface $con = null) Return the ChildSalesHistoryLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOne(?ConnectionInterface $con = null) Return the first ChildSalesHistoryLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistoryLotserial requireOneByOehhnbr(int $OehhNbr) Return the first ChildSalesHistoryLotserial filtered by the OehhNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOedhline(int $OedhLine) Return the first ChildSalesHistoryLotserial filtered by the OedhLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSalesHistoryLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshtag(string $OeshTag) Return the first ChildSalesHistoryLotserial filtered by the OeshTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshlotser(string $OeshLotSer) Return the first ChildSalesHistoryLotserial filtered by the OeshLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshbin(string $OeshBin) Return the first ChildSalesHistoryLotserial filtered by the OeshBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshplltnbr(int $OeshPlltNbr) Return the first ChildSalesHistoryLotserial filtered by the OeshPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshcrtnnbr(int $OeshCrtnNbr) Return the first ChildSalesHistoryLotserial filtered by the OeshCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshyear(string $OeshYear) Return the first ChildSalesHistoryLotserial filtered by the OeshYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshqtyship(string $OeshQtyShip) Return the first ChildSalesHistoryLotserial filtered by the OeshQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshcntrqty(string $OeshCntrQty) Return the first ChildSalesHistoryLotserial filtered by the OeshCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshspecordr(string $OeshSpecOrdr) Return the first ChildSalesHistoryLotserial filtered by the OeshSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshlotref(string $OeshLotRef) Return the first ChildSalesHistoryLotserial filtered by the OeshLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshbatch(string $OeshBatch) Return the first ChildSalesHistoryLotserial filtered by the OeshBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshcuredate(string $OeshCureDate) Return the first ChildSalesHistoryLotserial filtered by the OeshCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshacstatus(string $OeshAcStatus) Return the first ChildSalesHistoryLotserial filtered by the OeshAcStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshtestlot(string $OeshTestLot) Return the first ChildSalesHistoryLotserial filtered by the OeshTestLot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshpllttype(string $OeshPlltType) Return the first ChildSalesHistoryLotserial filtered by the OeshPlltType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshtarewght(string $OeshTareWght) Return the first ChildSalesHistoryLotserial filtered by the OeshTareWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshuseup(string $OeshUseUp) Return the first ChildSalesHistoryLotserial filtered by the OeshUseUp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshlblprtd(string $OeshLblPrtd) Return the first ChildSalesHistoryLotserial filtered by the OeshLblPrtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshorigbin(string $OeshOrigBin) Return the first ChildSalesHistoryLotserial filtered by the OeshOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshactvdate(string $OeshActvDate) Return the first ChildSalesHistoryLotserial filtered by the OeshActvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByOeshplltid(string $OeshPlltID) Return the first ChildSalesHistoryLotserial filtered by the OeshPlltID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesHistoryLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesHistoryLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesHistoryLotserial requireOneByDummy(string $dummy) Return the first ChildSalesHistoryLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesHistoryLotserial[]|Collection find(?ConnectionInterface $con = null) Return ChildSalesHistoryLotserial objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> find(?ConnectionInterface $con = null) Return ChildSalesHistoryLotserial objects based on current ModelCriteria
 *
 * @method     ChildSalesHistoryLotserial[]|Collection findByOehhnbr(int|array<int> $OehhNbr) Return ChildSalesHistoryLotserial objects filtered by the OehhNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOehhnbr(int|array<int> $OehhNbr) Return ChildSalesHistoryLotserial objects filtered by the OehhNbr column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOedhline(int|array<int> $OedhLine) Return ChildSalesHistoryLotserial objects filtered by the OedhLine column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOedhline(int|array<int> $OedhLine) Return ChildSalesHistoryLotserial objects filtered by the OedhLine column
 * @method     ChildSalesHistoryLotserial[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesHistoryLotserial objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildSalesHistoryLotserial objects filtered by the InitItemNbr column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshtag(string|array<string> $OeshTag) Return ChildSalesHistoryLotserial objects filtered by the OeshTag column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshtag(string|array<string> $OeshTag) Return ChildSalesHistoryLotserial objects filtered by the OeshTag column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshlotser(string|array<string> $OeshLotSer) Return ChildSalesHistoryLotserial objects filtered by the OeshLotSer column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshlotser(string|array<string> $OeshLotSer) Return ChildSalesHistoryLotserial objects filtered by the OeshLotSer column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshbin(string|array<string> $OeshBin) Return ChildSalesHistoryLotserial objects filtered by the OeshBin column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshbin(string|array<string> $OeshBin) Return ChildSalesHistoryLotserial objects filtered by the OeshBin column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshplltnbr(int|array<int> $OeshPlltNbr) Return ChildSalesHistoryLotserial objects filtered by the OeshPlltNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshplltnbr(int|array<int> $OeshPlltNbr) Return ChildSalesHistoryLotserial objects filtered by the OeshPlltNbr column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshcrtnnbr(int|array<int> $OeshCrtnNbr) Return ChildSalesHistoryLotserial objects filtered by the OeshCrtnNbr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshcrtnnbr(int|array<int> $OeshCrtnNbr) Return ChildSalesHistoryLotserial objects filtered by the OeshCrtnNbr column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshyear(string|array<string> $OeshYear) Return ChildSalesHistoryLotserial objects filtered by the OeshYear column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshyear(string|array<string> $OeshYear) Return ChildSalesHistoryLotserial objects filtered by the OeshYear column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshqtyship(string|array<string> $OeshQtyShip) Return ChildSalesHistoryLotserial objects filtered by the OeshQtyShip column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshqtyship(string|array<string> $OeshQtyShip) Return ChildSalesHistoryLotserial objects filtered by the OeshQtyShip column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshcntrqty(string|array<string> $OeshCntrQty) Return ChildSalesHistoryLotserial objects filtered by the OeshCntrQty column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshcntrqty(string|array<string> $OeshCntrQty) Return ChildSalesHistoryLotserial objects filtered by the OeshCntrQty column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshspecordr(string|array<string> $OeshSpecOrdr) Return ChildSalesHistoryLotserial objects filtered by the OeshSpecOrdr column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshspecordr(string|array<string> $OeshSpecOrdr) Return ChildSalesHistoryLotserial objects filtered by the OeshSpecOrdr column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshlotref(string|array<string> $OeshLotRef) Return ChildSalesHistoryLotserial objects filtered by the OeshLotRef column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshlotref(string|array<string> $OeshLotRef) Return ChildSalesHistoryLotserial objects filtered by the OeshLotRef column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshbatch(string|array<string> $OeshBatch) Return ChildSalesHistoryLotserial objects filtered by the OeshBatch column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshbatch(string|array<string> $OeshBatch) Return ChildSalesHistoryLotserial objects filtered by the OeshBatch column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshcuredate(string|array<string> $OeshCureDate) Return ChildSalesHistoryLotserial objects filtered by the OeshCureDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshcuredate(string|array<string> $OeshCureDate) Return ChildSalesHistoryLotserial objects filtered by the OeshCureDate column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshacstatus(string|array<string> $OeshAcStatus) Return ChildSalesHistoryLotserial objects filtered by the OeshAcStatus column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshacstatus(string|array<string> $OeshAcStatus) Return ChildSalesHistoryLotserial objects filtered by the OeshAcStatus column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshtestlot(string|array<string> $OeshTestLot) Return ChildSalesHistoryLotserial objects filtered by the OeshTestLot column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshtestlot(string|array<string> $OeshTestLot) Return ChildSalesHistoryLotserial objects filtered by the OeshTestLot column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshpllttype(string|array<string> $OeshPlltType) Return ChildSalesHistoryLotserial objects filtered by the OeshPlltType column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshpllttype(string|array<string> $OeshPlltType) Return ChildSalesHistoryLotserial objects filtered by the OeshPlltType column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshtarewght(string|array<string> $OeshTareWght) Return ChildSalesHistoryLotserial objects filtered by the OeshTareWght column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshtarewght(string|array<string> $OeshTareWght) Return ChildSalesHistoryLotserial objects filtered by the OeshTareWght column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshuseup(string|array<string> $OeshUseUp) Return ChildSalesHistoryLotserial objects filtered by the OeshUseUp column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshuseup(string|array<string> $OeshUseUp) Return ChildSalesHistoryLotserial objects filtered by the OeshUseUp column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshlblprtd(string|array<string> $OeshLblPrtd) Return ChildSalesHistoryLotserial objects filtered by the OeshLblPrtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshlblprtd(string|array<string> $OeshLblPrtd) Return ChildSalesHistoryLotserial objects filtered by the OeshLblPrtd column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshorigbin(string|array<string> $OeshOrigBin) Return ChildSalesHistoryLotserial objects filtered by the OeshOrigBin column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshorigbin(string|array<string> $OeshOrigBin) Return ChildSalesHistoryLotserial objects filtered by the OeshOrigBin column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshactvdate(string|array<string> $OeshActvDate) Return ChildSalesHistoryLotserial objects filtered by the OeshActvDate column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshactvdate(string|array<string> $OeshActvDate) Return ChildSalesHistoryLotserial objects filtered by the OeshActvDate column
 * @method     ChildSalesHistoryLotserial[]|Collection findByOeshplltid(string|array<string> $OeshPlltID) Return ChildSalesHistoryLotserial objects filtered by the OeshPlltID column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByOeshplltid(string|array<string> $OeshPlltID) Return ChildSalesHistoryLotserial objects filtered by the OeshPlltID column
 * @method     ChildSalesHistoryLotserial[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesHistoryLotserial objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSalesHistoryLotserial objects filtered by the DateUpdtd column
 * @method     ChildSalesHistoryLotserial[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesHistoryLotserial objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSalesHistoryLotserial objects filtered by the TimeUpdtd column
 * @method     ChildSalesHistoryLotserial[]|Collection findByDummy(string|array<string> $dummy) Return ChildSalesHistoryLotserial objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSalesHistoryLotserial> findByDummy(string|array<string> $dummy) Return ChildSalesHistoryLotserial objects filtered by the dummy column
 *
 * @method     ChildSalesHistoryLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSalesHistoryLotserial> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SalesHistoryLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesHistoryLotserialQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesHistoryLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesHistoryLotserialQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesHistoryLotserialQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSalesHistoryLotserialQuery) {
            return $criteria;
        }
        $query = new ChildSalesHistoryLotserialQuery();
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
     * @param array[$OehhNbr, $OedhLine, $InitItemNbr, $OeshTag, $OeshLotSer, $OeshBin, $OeshPlltNbr, $OeshCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesHistoryLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesHistoryLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6]), (null === $key[7] || is_scalar($key[7]) || is_callable([$key[7], '__toString']) ? (string) $key[7] : $key[7])]))))) {
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
     * @return ChildSalesHistoryLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehhNbr, OedhLine, InitItemNbr, OeshTag, OeshLotSer, OeshBin, OeshPlltNbr, OeshCrtnNbr, OeshYear, OeshQtyShip, OeshCntrQty, OeshSpecOrdr, OeshLotRef, OeshBatch, OeshCureDate, OeshAcStatus, OeshTestLot, OeshPlltType, OeshTareWght, OeshUseUp, OeshLblPrtd, OeshOrigBin, OeshActvDate, OeshPlltID, DateUpdtd, TimeUpdtd, dummy FROM so_lot_ser_hist WHERE OehhNbr = :p0 AND OedhLine = :p1 AND InitItemNbr = :p2 AND OeshTag = :p3 AND OeshLotSer = :p4 AND OeshBin = :p5 AND OeshPlltNbr = :p6 AND OeshCrtnNbr = :p7';
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
            /** @var ChildSalesHistoryLotserial $obj */
            $obj = new ChildSalesHistoryLotserial();
            $obj->hydrate($row);
            SalesHistoryLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6]), (null === $key[7] || is_scalar($key[7]) || is_callable([$key[7], '__toString']) ? (string) $key[7] : $key[7])]));
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
     * @return ChildSalesHistoryLotserial|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEDHLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHTAG, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHLOTSER, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHBIN, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $key[6], Criteria::EQUAL);
        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $key[7], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OEHHNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OEDHLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHTAG, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHLOTSER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHBIN, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $cton7 = $this->getNewCriterion(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $key[7], Criteria::EQUAL);
            $cton0->addAnd($cton7);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OehhNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhnbr(1234); // WHERE OehhNbr = 1234
     * $query->filterByOehhnbr(array(12, 34)); // WHERE OehhNbr IN (12, 34)
     * $query->filterByOehhnbr(array('min' => 12)); // WHERE OehhNbr > 12
     * </code>
     *
     * @see       filterBySalesHistory()
     *
     * @see       filterBySalesHistoryDetail()
     *
     * @param mixed $oehhnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, ?string $comparison = null)
    {
        if (is_array($oehhnbr)) {
            $useMinMax = false;
            if (isset($oehhnbr['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $oehhnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehhnbr['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $oehhnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $oehhnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OedhLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhline(1234); // WHERE OedhLine = 1234
     * $query->filterByOedhline(array(12, 34)); // WHERE OedhLine IN (12, 34)
     * $query->filterByOedhline(array('min' => 12)); // WHERE OedhLine > 12
     * </code>
     *
     * @see       filterBySalesHistoryDetail()
     *
     * @param mixed $oedhline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOedhline($oedhline = null, ?string $comparison = null)
    {
        if (is_array($oedhline)) {
            $useMinMax = false;
            if (isset($oedhline['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEDHLINE, $oedhline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhline['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEDHLINE, $oedhline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEDHLINE, $oedhline, $comparison);

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

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshTag column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshtag('fooValue');   // WHERE OeshTag = 'fooValue'
     * $query->filterByOeshtag('%fooValue%', Criteria::LIKE); // WHERE OeshTag LIKE '%fooValue%'
     * $query->filterByOeshtag(['foo', 'bar']); // WHERE OeshTag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshtag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshtag($oeshtag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshtag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHTAG, $oeshtag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshlotser('fooValue');   // WHERE OeshLotSer = 'fooValue'
     * $query->filterByOeshlotser('%fooValue%', Criteria::LIKE); // WHERE OeshLotSer LIKE '%fooValue%'
     * $query->filterByOeshlotser(['foo', 'bar']); // WHERE OeshLotSer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshlotser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshlotser($oeshlotser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshlotser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHLOTSER, $oeshlotser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshbin('fooValue');   // WHERE OeshBin = 'fooValue'
     * $query->filterByOeshbin('%fooValue%', Criteria::LIKE); // WHERE OeshBin LIKE '%fooValue%'
     * $query->filterByOeshbin(['foo', 'bar']); // WHERE OeshBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshbin($oeshbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHBIN, $oeshbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshplltnbr(1234); // WHERE OeshPlltNbr = 1234
     * $query->filterByOeshplltnbr(array(12, 34)); // WHERE OeshPlltNbr IN (12, 34)
     * $query->filterByOeshplltnbr(array('min' => 12)); // WHERE OeshPlltNbr > 12
     * </code>
     *
     * @param mixed $oeshplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshplltnbr($oeshplltnbr = null, ?string $comparison = null)
    {
        if (is_array($oeshplltnbr)) {
            $useMinMax = false;
            if (isset($oeshplltnbr['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $oeshplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeshplltnbr['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $oeshplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR, $oeshplltnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshcrtnnbr(1234); // WHERE OeshCrtnNbr = 1234
     * $query->filterByOeshcrtnnbr(array(12, 34)); // WHERE OeshCrtnNbr IN (12, 34)
     * $query->filterByOeshcrtnnbr(array('min' => 12)); // WHERE OeshCrtnNbr > 12
     * </code>
     *
     * @param mixed $oeshcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshcrtnnbr($oeshcrtnnbr = null, ?string $comparison = null)
    {
        if (is_array($oeshcrtnnbr)) {
            $useMinMax = false;
            if (isset($oeshcrtnnbr['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $oeshcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeshcrtnnbr['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $oeshcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR, $oeshcrtnnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshYear column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshyear('fooValue');   // WHERE OeshYear = 'fooValue'
     * $query->filterByOeshyear('%fooValue%', Criteria::LIKE); // WHERE OeshYear LIKE '%fooValue%'
     * $query->filterByOeshyear(['foo', 'bar']); // WHERE OeshYear IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshyear The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshyear($oeshyear = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshyear)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHYEAR, $oeshyear, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshqtyship(1234); // WHERE OeshQtyShip = 1234
     * $query->filterByOeshqtyship(array(12, 34)); // WHERE OeshQtyShip IN (12, 34)
     * $query->filterByOeshqtyship(array('min' => 12)); // WHERE OeshQtyShip > 12
     * </code>
     *
     * @param mixed $oeshqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshqtyship($oeshqtyship = null, ?string $comparison = null)
    {
        if (is_array($oeshqtyship)) {
            $useMinMax = false;
            if (isset($oeshqtyship['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP, $oeshqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeshqtyship['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP, $oeshqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHQTYSHIP, $oeshqtyship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshcntrqty(1234); // WHERE OeshCntrQty = 1234
     * $query->filterByOeshcntrqty(array(12, 34)); // WHERE OeshCntrQty IN (12, 34)
     * $query->filterByOeshcntrqty(array('min' => 12)); // WHERE OeshCntrQty > 12
     * </code>
     *
     * @param mixed $oeshcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshcntrqty($oeshcntrqty = null, ?string $comparison = null)
    {
        if (is_array($oeshcntrqty)) {
            $useMinMax = false;
            if (isset($oeshcntrqty['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY, $oeshcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeshcntrqty['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY, $oeshcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCNTRQTY, $oeshcntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshspecordr('fooValue');   // WHERE OeshSpecOrdr = 'fooValue'
     * $query->filterByOeshspecordr('%fooValue%', Criteria::LIKE); // WHERE OeshSpecOrdr LIKE '%fooValue%'
     * $query->filterByOeshspecordr(['foo', 'bar']); // WHERE OeshSpecOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshspecordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshspecordr($oeshspecordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHSPECORDR, $oeshspecordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshlotref('fooValue');   // WHERE OeshLotRef = 'fooValue'
     * $query->filterByOeshlotref('%fooValue%', Criteria::LIKE); // WHERE OeshLotRef LIKE '%fooValue%'
     * $query->filterByOeshlotref(['foo', 'bar']); // WHERE OeshLotRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshlotref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshlotref($oeshlotref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshlotref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHLOTREF, $oeshlotref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshbatch('fooValue');   // WHERE OeshBatch = 'fooValue'
     * $query->filterByOeshbatch('%fooValue%', Criteria::LIKE); // WHERE OeshBatch LIKE '%fooValue%'
     * $query->filterByOeshbatch(['foo', 'bar']); // WHERE OeshBatch IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshbatch The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshbatch($oeshbatch = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshbatch)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHBATCH, $oeshbatch, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshcuredate('fooValue');   // WHERE OeshCureDate = 'fooValue'
     * $query->filterByOeshcuredate('%fooValue%', Criteria::LIKE); // WHERE OeshCureDate LIKE '%fooValue%'
     * $query->filterByOeshcuredate(['foo', 'bar']); // WHERE OeshCureDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshcuredate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshcuredate($oeshcuredate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHCUREDATE, $oeshcuredate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshAcStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshacstatus('fooValue');   // WHERE OeshAcStatus = 'fooValue'
     * $query->filterByOeshacstatus('%fooValue%', Criteria::LIKE); // WHERE OeshAcStatus LIKE '%fooValue%'
     * $query->filterByOeshacstatus(['foo', 'bar']); // WHERE OeshAcStatus IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshacstatus The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshacstatus($oeshacstatus = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshacstatus)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHACSTATUS, $oeshacstatus, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshTestLot column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshtestlot('fooValue');   // WHERE OeshTestLot = 'fooValue'
     * $query->filterByOeshtestlot('%fooValue%', Criteria::LIKE); // WHERE OeshTestLot LIKE '%fooValue%'
     * $query->filterByOeshtestlot(['foo', 'bar']); // WHERE OeshTestLot IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshtestlot The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshtestlot($oeshtestlot = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshtestlot)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHTESTLOT, $oeshtestlot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshPlltType column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshpllttype('fooValue');   // WHERE OeshPlltType = 'fooValue'
     * $query->filterByOeshpllttype('%fooValue%', Criteria::LIKE); // WHERE OeshPlltType LIKE '%fooValue%'
     * $query->filterByOeshpllttype(['foo', 'bar']); // WHERE OeshPlltType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshpllttype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshpllttype($oeshpllttype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshpllttype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHPLLTTYPE, $oeshpllttype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshTareWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshtarewght(1234); // WHERE OeshTareWght = 1234
     * $query->filterByOeshtarewght(array(12, 34)); // WHERE OeshTareWght IN (12, 34)
     * $query->filterByOeshtarewght(array('min' => 12)); // WHERE OeshTareWght > 12
     * </code>
     *
     * @param mixed $oeshtarewght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshtarewght($oeshtarewght = null, ?string $comparison = null)
    {
        if (is_array($oeshtarewght)) {
            $useMinMax = false;
            if (isset($oeshtarewght['min'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT, $oeshtarewght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeshtarewght['max'])) {
                $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT, $oeshtarewght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHTAREWGHT, $oeshtarewght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshUseUp column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshuseup('fooValue');   // WHERE OeshUseUp = 'fooValue'
     * $query->filterByOeshuseup('%fooValue%', Criteria::LIKE); // WHERE OeshUseUp LIKE '%fooValue%'
     * $query->filterByOeshuseup(['foo', 'bar']); // WHERE OeshUseUp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshuseup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshuseup($oeshuseup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshuseup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHUSEUP, $oeshuseup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshLblPrtd column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshlblprtd('fooValue');   // WHERE OeshLblPrtd = 'fooValue'
     * $query->filterByOeshlblprtd('%fooValue%', Criteria::LIKE); // WHERE OeshLblPrtd LIKE '%fooValue%'
     * $query->filterByOeshlblprtd(['foo', 'bar']); // WHERE OeshLblPrtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshlblprtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshlblprtd($oeshlblprtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshlblprtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHLBLPRTD, $oeshlblprtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshorigbin('fooValue');   // WHERE OeshOrigBin = 'fooValue'
     * $query->filterByOeshorigbin('%fooValue%', Criteria::LIKE); // WHERE OeshOrigBin LIKE '%fooValue%'
     * $query->filterByOeshorigbin(['foo', 'bar']); // WHERE OeshOrigBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshorigbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshorigbin($oeshorigbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHORIGBIN, $oeshorigbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshActvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshactvdate('fooValue');   // WHERE OeshActvDate = 'fooValue'
     * $query->filterByOeshactvdate('%fooValue%', Criteria::LIKE); // WHERE OeshActvDate LIKE '%fooValue%'
     * $query->filterByOeshactvdate(['foo', 'bar']); // WHERE OeshActvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshactvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshactvdate($oeshactvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshactvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHACTVDATE, $oeshactvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OeshPlltID column
     *
     * Example usage:
     * <code>
     * $query->filterByOeshplltid('fooValue');   // WHERE OeshPlltID = 'fooValue'
     * $query->filterByOeshplltid('%fooValue%', Criteria::LIKE); // WHERE OeshPlltID LIKE '%fooValue%'
     * $query->filterByOeshplltid(['foo', 'bar']); // WHERE OeshPlltID IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oeshplltid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOeshplltid($oeshplltid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeshplltid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_OESHPLLTID, $oeshplltid, $comparison);

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

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SalesHistoryLotserialTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \SalesHistory object
     *
     * @param \SalesHistory|ObjectCollection $salesHistory The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, ?string $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            return $this
                ->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $salesHistory->getOehhnbr(), $comparison);
        } elseif ($salesHistory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $salesHistory->toKeyValue('PrimaryKey', 'Oehhnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistory');

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
            $this->addJoinObject($join, 'SalesHistory');
        }

        return $this;
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistory', '\SalesHistoryQuery');
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @param callable(\SalesHistoryQuery):\SalesHistoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT EXISTS query.
     *
     * @see useSalesHistoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT IN query.
     *
     * @see useSalesHistoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistoryDetail object
     *
     * @param \SalesHistoryDetail $salesHistoryDetail The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistoryDetail($salesHistoryDetail, ?string $comparison = null)
    {
        if ($salesHistoryDetail instanceof \SalesHistoryDetail) {
            return $this
                ->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEHHNBR, $salesHistoryDetail->getOehhnbr(), $comparison)
                ->addUsingAlias(SalesHistoryLotserialTableMap::COL_OEDHLINE, $salesHistoryDetail->getOedhline(), $comparison);
        } else {
            throw new PropelException('filterBySalesHistoryDetail() only accepts arguments of type \SalesHistoryDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistoryDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistoryDetail');

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
            $this->addJoinObject($join, 'SalesHistoryDetail');
        }

        return $this;
    }

    /**
     * Use the SalesHistoryDetail relation SalesHistoryDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistoryDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistoryDetail', '\SalesHistoryDetailQuery');
    }

    /**
     * Use the SalesHistoryDetail relation SalesHistoryDetail object
     *
     * @param callable(\SalesHistoryDetailQuery):\SalesHistoryDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistoryDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryDetailQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useExistsQuery('SalesHistoryDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for a NOT EXISTS query.
     *
     * @see useSalesHistoryDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useExistsQuery('SalesHistoryDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryDetailQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useInQuery('SalesHistoryDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for a NOT IN query.
     *
     * @see useSalesHistoryDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useInQuery('SalesHistoryDetail', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SalesHistoryLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * @param ChildSalesHistoryLotserial $salesHistoryLotserial Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($salesHistoryLotserial = null)
    {
        if ($salesHistoryLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OEHHNBR), $salesHistoryLotserial->getOehhnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OEDHLINE), $salesHistoryLotserial->getOedhline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_INITITEMNBR), $salesHistoryLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OESHTAG), $salesHistoryLotserial->getOeshtag(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OESHLOTSER), $salesHistoryLotserial->getOeshlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OESHBIN), $salesHistoryLotserial->getOeshbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OESHPLLTNBR), $salesHistoryLotserial->getOeshplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond7', $this->getAliasedColName(SalesHistoryLotserialTableMap::COL_OESHCRTNNBR), $salesHistoryLotserial->getOeshcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6', 'pruneCond7'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_lot_ser_hist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesHistoryLotserialTableMap::clearInstancePool();
            SalesHistoryLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesHistoryLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesHistoryLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesHistoryLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
