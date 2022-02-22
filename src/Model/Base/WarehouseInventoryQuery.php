<?php

namespace Base;

use \WarehouseInventory as ChildWarehouseInventory;
use \WarehouseInventoryQuery as ChildWarehouseInventoryQuery;
use \Exception;
use \PDO;
use Map\WarehouseInventoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_whse_mast' table.
 *
 *
 *
 * @method     ChildWarehouseInventoryQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildWarehouseInventoryQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWarehouseInventoryQuery orderByInwhbin($order = Criteria::ASC) Order by the InwhBin column
 * @method     ChildWarehouseInventoryQuery orderByInwhcycl($order = Criteria::ASC) Order by the InwhCycl column
 * @method     ChildWarehouseInventoryQuery orderByInwhcntdate($order = Criteria::ASC) Order by the InwhCntDate column
 * @method     ChildWarehouseInventoryQuery orderByInwhstat($order = Criteria::ASC) Order by the InwhStat column
 * @method     ChildWarehouseInventoryQuery orderByInwhabc($order = Criteria::ASC) Order by the InwhAbc column
 * @method     ChildWarehouseInventoryQuery orderByInwhordrpnt($order = Criteria::ASC) Order by the InwhOrdrPnt column
 * @method     ChildWarehouseInventoryQuery orderByInwhmax($order = Criteria::ASC) Order by the InwhMax column
 * @method     ChildWarehouseInventoryQuery orderByInwhordrqty($order = Criteria::ASC) Order by the InwhOrdrQty column
 * @method     ChildWarehouseInventoryQuery orderByInwhspecordr($order = Criteria::ASC) Order by the InwhSpecOrdr column
 * @method     ChildWarehouseInventoryQuery orderByInwhavail($order = Criteria::ASC) Order by the InwhAvail column
 * @method     ChildWarehouseInventoryQuery orderByInwh12motimessold($order = Criteria::ASC) Order by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventoryQuery orderByInwhfrtin($order = Criteria::ASC) Order by the InwhFrtIn column
 * @method     ChildWarehouseInventoryQuery orderByInwhmaxordrqty($order = Criteria::ASC) Order by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventoryQuery orderByInwhcrtedate($order = Criteria::ASC) Order by the InwhCrteDate column
 * @method     ChildWarehouseInventoryQuery orderByInwhshipbin($order = Criteria::ASC) Order by the InwhShipBin column
 * @method     ChildWarehouseInventoryQuery orderByInwhlastpurchponbr($order = Criteria::ASC) Order by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventoryQuery orderByInwhlastpurchinvnbr($order = Criteria::ASC) Order by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventoryQuery orderByInwhsupplywhse($order = Criteria::ASC) Order by the InwhSupplyWhse column
 * @method     ChildWarehouseInventoryQuery orderByInwhiisrchslct($order = Criteria::ASC) Order by the InwhIISrchSlct column
 * @method     ChildWarehouseInventoryQuery orderByInwhlmoldpoexptdate($order = Criteria::ASC) Order by the InwhLmOldPoExptDate column
 * @method     ChildWarehouseInventoryQuery orderByInwhlmoldporeplcost($order = Criteria::ASC) Order by the InwhLmOldPoReplCost column
 * @method     ChildWarehouseInventoryQuery orderByInwhlmnewpoordrdate($order = Criteria::ASC) Order by the InwhLmNewPoOrdrDate column
 * @method     ChildWarehouseInventoryQuery orderByInwhlmnewporeplcost($order = Criteria::ASC) Order by the InwhLmNewPoReplCost column
 * @method     ChildWarehouseInventoryQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarehouseInventoryQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarehouseInventoryQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWarehouseInventoryQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildWarehouseInventoryQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWarehouseInventoryQuery groupByInwhbin() Group by the InwhBin column
 * @method     ChildWarehouseInventoryQuery groupByInwhcycl() Group by the InwhCycl column
 * @method     ChildWarehouseInventoryQuery groupByInwhcntdate() Group by the InwhCntDate column
 * @method     ChildWarehouseInventoryQuery groupByInwhstat() Group by the InwhStat column
 * @method     ChildWarehouseInventoryQuery groupByInwhabc() Group by the InwhAbc column
 * @method     ChildWarehouseInventoryQuery groupByInwhordrpnt() Group by the InwhOrdrPnt column
 * @method     ChildWarehouseInventoryQuery groupByInwhmax() Group by the InwhMax column
 * @method     ChildWarehouseInventoryQuery groupByInwhordrqty() Group by the InwhOrdrQty column
 * @method     ChildWarehouseInventoryQuery groupByInwhspecordr() Group by the InwhSpecOrdr column
 * @method     ChildWarehouseInventoryQuery groupByInwhavail() Group by the InwhAvail column
 * @method     ChildWarehouseInventoryQuery groupByInwh12motimessold() Group by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventoryQuery groupByInwhfrtin() Group by the InwhFrtIn column
 * @method     ChildWarehouseInventoryQuery groupByInwhmaxordrqty() Group by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventoryQuery groupByInwhcrtedate() Group by the InwhCrteDate column
 * @method     ChildWarehouseInventoryQuery groupByInwhshipbin() Group by the InwhShipBin column
 * @method     ChildWarehouseInventoryQuery groupByInwhlastpurchponbr() Group by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventoryQuery groupByInwhlastpurchinvnbr() Group by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventoryQuery groupByInwhsupplywhse() Group by the InwhSupplyWhse column
 * @method     ChildWarehouseInventoryQuery groupByInwhiisrchslct() Group by the InwhIISrchSlct column
 * @method     ChildWarehouseInventoryQuery groupByInwhlmoldpoexptdate() Group by the InwhLmOldPoExptDate column
 * @method     ChildWarehouseInventoryQuery groupByInwhlmoldporeplcost() Group by the InwhLmOldPoReplCost column
 * @method     ChildWarehouseInventoryQuery groupByInwhlmnewpoordrdate() Group by the InwhLmNewPoOrdrDate column
 * @method     ChildWarehouseInventoryQuery groupByInwhlmnewporeplcost() Group by the InwhLmNewPoReplCost column
 * @method     ChildWarehouseInventoryQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarehouseInventoryQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarehouseInventoryQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWarehouseInventoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarehouseInventoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarehouseInventoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarehouseInventoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarehouseInventoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarehouseInventoryQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildWarehouseInventoryQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildWarehouseInventoryQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildWarehouseInventoryQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildWarehouseInventory findOne(ConnectionInterface $con = null) Return the first ChildWarehouseInventory matching the query
 * @method     ChildWarehouseInventory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWarehouseInventory matching the query, or a new ChildWarehouseInventory object populated from the query conditions when no match is found
 *
 * @method     ChildWarehouseInventory findOneByInititemnbr(string $InitItemNbr) Return the first ChildWarehouseInventory filtered by the InitItemNbr column
 * @method     ChildWarehouseInventory findOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouseInventory filtered by the IntbWhse column
 * @method     ChildWarehouseInventory findOneByInwhbin(string $InwhBin) Return the first ChildWarehouseInventory filtered by the InwhBin column
 * @method     ChildWarehouseInventory findOneByInwhcycl(string $InwhCycl) Return the first ChildWarehouseInventory filtered by the InwhCycl column
 * @method     ChildWarehouseInventory findOneByInwhcntdate(string $InwhCntDate) Return the first ChildWarehouseInventory filtered by the InwhCntDate column
 * @method     ChildWarehouseInventory findOneByInwhstat(string $InwhStat) Return the first ChildWarehouseInventory filtered by the InwhStat column
 * @method     ChildWarehouseInventory findOneByInwhabc(string $InwhAbc) Return the first ChildWarehouseInventory filtered by the InwhAbc column
 * @method     ChildWarehouseInventory findOneByInwhordrpnt(string $InwhOrdrPnt) Return the first ChildWarehouseInventory filtered by the InwhOrdrPnt column
 * @method     ChildWarehouseInventory findOneByInwhmax(string $InwhMax) Return the first ChildWarehouseInventory filtered by the InwhMax column
 * @method     ChildWarehouseInventory findOneByInwhordrqty(string $InwhOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhOrdrQty column
 * @method     ChildWarehouseInventory findOneByInwhspecordr(string $InwhSpecOrdr) Return the first ChildWarehouseInventory filtered by the InwhSpecOrdr column
 * @method     ChildWarehouseInventory findOneByInwhavail(string $InwhAvail) Return the first ChildWarehouseInventory filtered by the InwhAvail column
 * @method     ChildWarehouseInventory findOneByInwh12motimessold(int $Inwh12moTimesSold) Return the first ChildWarehouseInventory filtered by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventory findOneByInwhfrtin(string $InwhFrtIn) Return the first ChildWarehouseInventory filtered by the InwhFrtIn column
 * @method     ChildWarehouseInventory findOneByInwhmaxordrqty(string $InwhMaxOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventory findOneByInwhcrtedate(string $InwhCrteDate) Return the first ChildWarehouseInventory filtered by the InwhCrteDate column
 * @method     ChildWarehouseInventory findOneByInwhshipbin(string $InwhShipBin) Return the first ChildWarehouseInventory filtered by the InwhShipBin column
 * @method     ChildWarehouseInventory findOneByInwhlastpurchponbr(string $InwhLastPurchPoNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventory findOneByInwhlastpurchinvnbr(string $InwhLastPurchInvNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventory findOneByInwhsupplywhse(string $InwhSupplyWhse) Return the first ChildWarehouseInventory filtered by the InwhSupplyWhse column
 * @method     ChildWarehouseInventory findOneByInwhiisrchslct(string $InwhIISrchSlct) Return the first ChildWarehouseInventory filtered by the InwhIISrchSlct column
 * @method     ChildWarehouseInventory findOneByInwhlmoldpoexptdate(string $InwhLmOldPoExptDate) Return the first ChildWarehouseInventory filtered by the InwhLmOldPoExptDate column
 * @method     ChildWarehouseInventory findOneByInwhlmoldporeplcost(string $InwhLmOldPoReplCost) Return the first ChildWarehouseInventory filtered by the InwhLmOldPoReplCost column
 * @method     ChildWarehouseInventory findOneByInwhlmnewpoordrdate(string $InwhLmNewPoOrdrDate) Return the first ChildWarehouseInventory filtered by the InwhLmNewPoOrdrDate column
 * @method     ChildWarehouseInventory findOneByInwhlmnewporeplcost(string $InwhLmNewPoReplCost) Return the first ChildWarehouseInventory filtered by the InwhLmNewPoReplCost column
 * @method     ChildWarehouseInventory findOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouseInventory filtered by the DateUpdtd column
 * @method     ChildWarehouseInventory findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouseInventory filtered by the TimeUpdtd column
 * @method     ChildWarehouseInventory findOneByDummy(string $dummy) Return the first ChildWarehouseInventory filtered by the dummy column *

 * @method     ChildWarehouseInventory requirePk($key, ConnectionInterface $con = null) Return the ChildWarehouseInventory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOne(ConnectionInterface $con = null) Return the first ChildWarehouseInventory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouseInventory requireOneByInititemnbr(string $InitItemNbr) Return the first ChildWarehouseInventory filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouseInventory filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhbin(string $InwhBin) Return the first ChildWarehouseInventory filtered by the InwhBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhcycl(string $InwhCycl) Return the first ChildWarehouseInventory filtered by the InwhCycl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhcntdate(string $InwhCntDate) Return the first ChildWarehouseInventory filtered by the InwhCntDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhstat(string $InwhStat) Return the first ChildWarehouseInventory filtered by the InwhStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhabc(string $InwhAbc) Return the first ChildWarehouseInventory filtered by the InwhAbc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhordrpnt(string $InwhOrdrPnt) Return the first ChildWarehouseInventory filtered by the InwhOrdrPnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhmax(string $InwhMax) Return the first ChildWarehouseInventory filtered by the InwhMax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhordrqty(string $InwhOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhOrdrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhspecordr(string $InwhSpecOrdr) Return the first ChildWarehouseInventory filtered by the InwhSpecOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhavail(string $InwhAvail) Return the first ChildWarehouseInventory filtered by the InwhAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwh12motimessold(int $Inwh12moTimesSold) Return the first ChildWarehouseInventory filtered by the Inwh12moTimesSold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhfrtin(string $InwhFrtIn) Return the first ChildWarehouseInventory filtered by the InwhFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhmaxordrqty(string $InwhMaxOrdrQty) Return the first ChildWarehouseInventory filtered by the InwhMaxOrdrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhcrtedate(string $InwhCrteDate) Return the first ChildWarehouseInventory filtered by the InwhCrteDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhshipbin(string $InwhShipBin) Return the first ChildWarehouseInventory filtered by the InwhShipBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlastpurchponbr(string $InwhLastPurchPoNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlastpurchinvnbr(string $InwhLastPurchInvNbr) Return the first ChildWarehouseInventory filtered by the InwhLastPurchInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhsupplywhse(string $InwhSupplyWhse) Return the first ChildWarehouseInventory filtered by the InwhSupplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhiisrchslct(string $InwhIISrchSlct) Return the first ChildWarehouseInventory filtered by the InwhIISrchSlct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlmoldpoexptdate(string $InwhLmOldPoExptDate) Return the first ChildWarehouseInventory filtered by the InwhLmOldPoExptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlmoldporeplcost(string $InwhLmOldPoReplCost) Return the first ChildWarehouseInventory filtered by the InwhLmOldPoReplCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlmnewpoordrdate(string $InwhLmNewPoOrdrDate) Return the first ChildWarehouseInventory filtered by the InwhLmNewPoOrdrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByInwhlmnewporeplcost(string $InwhLmNewPoReplCost) Return the first ChildWarehouseInventory filtered by the InwhLmNewPoReplCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouseInventory filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouseInventory filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseInventory requireOneByDummy(string $dummy) Return the first ChildWarehouseInventory filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouseInventory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWarehouseInventory objects based on current ModelCriteria
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildWarehouseInventory objects filtered by the InitItemNbr column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildWarehouseInventory objects filtered by the IntbWhse column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhbin(string $InwhBin) Return ChildWarehouseInventory objects filtered by the InwhBin column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhcycl(string $InwhCycl) Return ChildWarehouseInventory objects filtered by the InwhCycl column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhcntdate(string $InwhCntDate) Return ChildWarehouseInventory objects filtered by the InwhCntDate column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhstat(string $InwhStat) Return ChildWarehouseInventory objects filtered by the InwhStat column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhabc(string $InwhAbc) Return ChildWarehouseInventory objects filtered by the InwhAbc column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhordrpnt(string $InwhOrdrPnt) Return ChildWarehouseInventory objects filtered by the InwhOrdrPnt column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhmax(string $InwhMax) Return ChildWarehouseInventory objects filtered by the InwhMax column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhordrqty(string $InwhOrdrQty) Return ChildWarehouseInventory objects filtered by the InwhOrdrQty column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhspecordr(string $InwhSpecOrdr) Return ChildWarehouseInventory objects filtered by the InwhSpecOrdr column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhavail(string $InwhAvail) Return ChildWarehouseInventory objects filtered by the InwhAvail column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwh12motimessold(int $Inwh12moTimesSold) Return ChildWarehouseInventory objects filtered by the Inwh12moTimesSold column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhfrtin(string $InwhFrtIn) Return ChildWarehouseInventory objects filtered by the InwhFrtIn column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhmaxordrqty(string $InwhMaxOrdrQty) Return ChildWarehouseInventory objects filtered by the InwhMaxOrdrQty column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhcrtedate(string $InwhCrteDate) Return ChildWarehouseInventory objects filtered by the InwhCrteDate column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhshipbin(string $InwhShipBin) Return ChildWarehouseInventory objects filtered by the InwhShipBin column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhlastpurchponbr(string $InwhLastPurchPoNbr) Return ChildWarehouseInventory objects filtered by the InwhLastPurchPoNbr column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhlastpurchinvnbr(string $InwhLastPurchInvNbr) Return ChildWarehouseInventory objects filtered by the InwhLastPurchInvNbr column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhsupplywhse(string $InwhSupplyWhse) Return ChildWarehouseInventory objects filtered by the InwhSupplyWhse column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhiisrchslct(string $InwhIISrchSlct) Return ChildWarehouseInventory objects filtered by the InwhIISrchSlct column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhlmoldpoexptdate(string $InwhLmOldPoExptDate) Return ChildWarehouseInventory objects filtered by the InwhLmOldPoExptDate column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhlmoldporeplcost(string $InwhLmOldPoReplCost) Return ChildWarehouseInventory objects filtered by the InwhLmOldPoReplCost column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhlmnewpoordrdate(string $InwhLmNewPoOrdrDate) Return ChildWarehouseInventory objects filtered by the InwhLmNewPoOrdrDate column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByInwhlmnewporeplcost(string $InwhLmNewPoReplCost) Return ChildWarehouseInventory objects filtered by the InwhLmNewPoReplCost column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildWarehouseInventory objects filtered by the DateUpdtd column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildWarehouseInventory objects filtered by the TimeUpdtd column
 * @method     ChildWarehouseInventory[]|ObjectCollection findByDummy(string $dummy) Return ChildWarehouseInventory objects filtered by the dummy column
 * @method     ChildWarehouseInventory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WarehouseInventoryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarehouseInventoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WarehouseInventory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarehouseInventoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarehouseInventoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWarehouseInventoryQuery) {
            return $criteria;
        }
        $query = new ChildWarehouseInventoryQuery();
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
     * @param array[$InitItemNbr, $IntbWhse] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildWarehouseInventory|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarehouseInventoryTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildWarehouseInventory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IntbWhse, InwhBin, InwhCycl, InwhCntDate, InwhStat, InwhAbc, InwhOrdrPnt, InwhMax, InwhOrdrQty, InwhSpecOrdr, InwhAvail, Inwh12moTimesSold, InwhFrtIn, InwhMaxOrdrQty, InwhCrteDate, InwhShipBin, InwhLastPurchPoNbr, InwhLastPurchInvNbr, InwhSupplyWhse, InwhIISrchSlct, InwhLmOldPoExptDate, InwhLmOldPoReplCost, InwhLmNewPoOrdrDate, InwhLmNewPoReplCost, DateUpdtd, TimeUpdtd, dummy FROM inv_whse_mast WHERE InitItemNbr = :p0 AND IntbWhse = :p1';
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
            /** @var ChildWarehouseInventory $obj */
            $obj = new ChildWarehouseInventory();
            $obj->hydrate($row);
            WarehouseInventoryTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildWarehouseInventory|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(WarehouseInventoryTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(WarehouseInventoryTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the InwhBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhbin('fooValue');   // WHERE InwhBin = 'fooValue'
     * $query->filterByInwhbin('%fooValue%', Criteria::LIKE); // WHERE InwhBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhbin($inwhbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHBIN, $inwhbin, $comparison);
    }

    /**
     * Filter the query on the InwhCycl column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhcycl('fooValue');   // WHERE InwhCycl = 'fooValue'
     * $query->filterByInwhcycl('%fooValue%', Criteria::LIKE); // WHERE InwhCycl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhcycl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhcycl($inwhcycl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhcycl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHCYCL, $inwhcycl, $comparison);
    }

    /**
     * Filter the query on the InwhCntDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhcntdate('fooValue');   // WHERE InwhCntDate = 'fooValue'
     * $query->filterByInwhcntdate('%fooValue%', Criteria::LIKE); // WHERE InwhCntDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhcntdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhcntdate($inwhcntdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhcntdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHCNTDATE, $inwhcntdate, $comparison);
    }

    /**
     * Filter the query on the InwhStat column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhstat('fooValue');   // WHERE InwhStat = 'fooValue'
     * $query->filterByInwhstat('%fooValue%', Criteria::LIKE); // WHERE InwhStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhstat($inwhstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSTAT, $inwhstat, $comparison);
    }

    /**
     * Filter the query on the InwhAbc column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhabc('fooValue');   // WHERE InwhAbc = 'fooValue'
     * $query->filterByInwhabc('%fooValue%', Criteria::LIKE); // WHERE InwhAbc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhabc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhabc($inwhabc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhabc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHABC, $inwhabc, $comparison);
    }

    /**
     * Filter the query on the InwhOrdrPnt column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhordrpnt(1234); // WHERE InwhOrdrPnt = 1234
     * $query->filterByInwhordrpnt(array(12, 34)); // WHERE InwhOrdrPnt IN (12, 34)
     * $query->filterByInwhordrpnt(array('min' => 12)); // WHERE InwhOrdrPnt > 12
     * </code>
     *
     * @param     mixed $inwhordrpnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhordrpnt($inwhordrpnt = null, $comparison = null)
    {
        if (is_array($inwhordrpnt)) {
            $useMinMax = false;
            if (isset($inwhordrpnt['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRPNT, $inwhordrpnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhordrpnt['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRPNT, $inwhordrpnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRPNT, $inwhordrpnt, $comparison);
    }

    /**
     * Filter the query on the InwhMax column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhmax(1234); // WHERE InwhMax = 1234
     * $query->filterByInwhmax(array(12, 34)); // WHERE InwhMax IN (12, 34)
     * $query->filterByInwhmax(array('min' => 12)); // WHERE InwhMax > 12
     * </code>
     *
     * @param     mixed $inwhmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhmax($inwhmax = null, $comparison = null)
    {
        if (is_array($inwhmax)) {
            $useMinMax = false;
            if (isset($inwhmax['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAX, $inwhmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhmax['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAX, $inwhmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAX, $inwhmax, $comparison);
    }

    /**
     * Filter the query on the InwhOrdrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhordrqty(1234); // WHERE InwhOrdrQty = 1234
     * $query->filterByInwhordrqty(array(12, 34)); // WHERE InwhOrdrQty IN (12, 34)
     * $query->filterByInwhordrqty(array('min' => 12)); // WHERE InwhOrdrQty > 12
     * </code>
     *
     * @param     mixed $inwhordrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhordrqty($inwhordrqty = null, $comparison = null)
    {
        if (is_array($inwhordrqty)) {
            $useMinMax = false;
            if (isset($inwhordrqty['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRQTY, $inwhordrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhordrqty['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRQTY, $inwhordrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHORDRQTY, $inwhordrqty, $comparison);
    }

    /**
     * Filter the query on the InwhSpecOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhspecordr('fooValue');   // WHERE InwhSpecOrdr = 'fooValue'
     * $query->filterByInwhspecordr('%fooValue%', Criteria::LIKE); // WHERE InwhSpecOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhspecordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhspecordr($inwhspecordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhspecordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSPECORDR, $inwhspecordr, $comparison);
    }

    /**
     * Filter the query on the InwhAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhavail(1234); // WHERE InwhAvail = 1234
     * $query->filterByInwhavail(array(12, 34)); // WHERE InwhAvail IN (12, 34)
     * $query->filterByInwhavail(array('min' => 12)); // WHERE InwhAvail > 12
     * </code>
     *
     * @param     mixed $inwhavail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhavail($inwhavail = null, $comparison = null)
    {
        if (is_array($inwhavail)) {
            $useMinMax = false;
            if (isset($inwhavail['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHAVAIL, $inwhavail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhavail['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHAVAIL, $inwhavail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHAVAIL, $inwhavail, $comparison);
    }

    /**
     * Filter the query on the Inwh12moTimesSold column
     *
     * Example usage:
     * <code>
     * $query->filterByInwh12motimessold(1234); // WHERE Inwh12moTimesSold = 1234
     * $query->filterByInwh12motimessold(array(12, 34)); // WHERE Inwh12moTimesSold IN (12, 34)
     * $query->filterByInwh12motimessold(array('min' => 12)); // WHERE Inwh12moTimesSold > 12
     * </code>
     *
     * @param     mixed $inwh12motimessold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwh12motimessold($inwh12motimessold = null, $comparison = null)
    {
        if (is_array($inwh12motimessold)) {
            $useMinMax = false;
            if (isset($inwh12motimessold['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $inwh12motimessold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwh12motimessold['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $inwh12motimessold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWH12MOTIMESSOLD, $inwh12motimessold, $comparison);
    }

    /**
     * Filter the query on the InwhFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhfrtin(1234); // WHERE InwhFrtIn = 1234
     * $query->filterByInwhfrtin(array(12, 34)); // WHERE InwhFrtIn IN (12, 34)
     * $query->filterByInwhfrtin(array('min' => 12)); // WHERE InwhFrtIn > 12
     * </code>
     *
     * @param     mixed $inwhfrtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhfrtin($inwhfrtin = null, $comparison = null)
    {
        if (is_array($inwhfrtin)) {
            $useMinMax = false;
            if (isset($inwhfrtin['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHFRTIN, $inwhfrtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhfrtin['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHFRTIN, $inwhfrtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHFRTIN, $inwhfrtin, $comparison);
    }

    /**
     * Filter the query on the InwhMaxOrdrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhmaxordrqty(1234); // WHERE InwhMaxOrdrQty = 1234
     * $query->filterByInwhmaxordrqty(array(12, 34)); // WHERE InwhMaxOrdrQty IN (12, 34)
     * $query->filterByInwhmaxordrqty(array('min' => 12)); // WHERE InwhMaxOrdrQty > 12
     * </code>
     *
     * @param     mixed $inwhmaxordrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhmaxordrqty($inwhmaxordrqty = null, $comparison = null)
    {
        if (is_array($inwhmaxordrqty)) {
            $useMinMax = false;
            if (isset($inwhmaxordrqty['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $inwhmaxordrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhmaxordrqty['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $inwhmaxordrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHMAXORDRQTY, $inwhmaxordrqty, $comparison);
    }

    /**
     * Filter the query on the InwhCrteDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhcrtedate('fooValue');   // WHERE InwhCrteDate = 'fooValue'
     * $query->filterByInwhcrtedate('%fooValue%', Criteria::LIKE); // WHERE InwhCrteDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhcrtedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhcrtedate($inwhcrtedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhcrtedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHCRTEDATE, $inwhcrtedate, $comparison);
    }

    /**
     * Filter the query on the InwhShipBin column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhshipbin('fooValue');   // WHERE InwhShipBin = 'fooValue'
     * $query->filterByInwhshipbin('%fooValue%', Criteria::LIKE); // WHERE InwhShipBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhshipbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhshipbin($inwhshipbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhshipbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSHIPBIN, $inwhshipbin, $comparison);
    }

    /**
     * Filter the query on the InwhLastPurchPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlastpurchponbr('fooValue');   // WHERE InwhLastPurchPoNbr = 'fooValue'
     * $query->filterByInwhlastpurchponbr('%fooValue%', Criteria::LIKE); // WHERE InwhLastPurchPoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhlastpurchponbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhlastpurchponbr($inwhlastpurchponbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhlastpurchponbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLASTPURCHPONBR, $inwhlastpurchponbr, $comparison);
    }

    /**
     * Filter the query on the InwhLastPurchInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlastpurchinvnbr('fooValue');   // WHERE InwhLastPurchInvNbr = 'fooValue'
     * $query->filterByInwhlastpurchinvnbr('%fooValue%', Criteria::LIKE); // WHERE InwhLastPurchInvNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhlastpurchinvnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhlastpurchinvnbr($inwhlastpurchinvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhlastpurchinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLASTPURCHINVNBR, $inwhlastpurchinvnbr, $comparison);
    }

    /**
     * Filter the query on the InwhSupplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhsupplywhse('fooValue');   // WHERE InwhSupplyWhse = 'fooValue'
     * $query->filterByInwhsupplywhse('%fooValue%', Criteria::LIKE); // WHERE InwhSupplyWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhsupplywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhsupplywhse($inwhsupplywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhsupplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHSUPPLYWHSE, $inwhsupplywhse, $comparison);
    }

    /**
     * Filter the query on the InwhIISrchSlct column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhiisrchslct('fooValue');   // WHERE InwhIISrchSlct = 'fooValue'
     * $query->filterByInwhiisrchslct('%fooValue%', Criteria::LIKE); // WHERE InwhIISrchSlct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhiisrchslct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhiisrchslct($inwhiisrchslct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhiisrchslct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHIISRCHSLCT, $inwhiisrchslct, $comparison);
    }

    /**
     * Filter the query on the InwhLmOldPoExptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlmoldpoexptdate('fooValue');   // WHERE InwhLmOldPoExptDate = 'fooValue'
     * $query->filterByInwhlmoldpoexptdate('%fooValue%', Criteria::LIKE); // WHERE InwhLmOldPoExptDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhlmoldpoexptdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhlmoldpoexptdate($inwhlmoldpoexptdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhlmoldpoexptdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMOLDPOEXPTDATE, $inwhlmoldpoexptdate, $comparison);
    }

    /**
     * Filter the query on the InwhLmOldPoReplCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlmoldporeplcost(1234); // WHERE InwhLmOldPoReplCost = 1234
     * $query->filterByInwhlmoldporeplcost(array(12, 34)); // WHERE InwhLmOldPoReplCost IN (12, 34)
     * $query->filterByInwhlmoldporeplcost(array('min' => 12)); // WHERE InwhLmOldPoReplCost > 12
     * </code>
     *
     * @param     mixed $inwhlmoldporeplcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhlmoldporeplcost($inwhlmoldporeplcost = null, $comparison = null)
    {
        if (is_array($inwhlmoldporeplcost)) {
            $useMinMax = false;
            if (isset($inwhlmoldporeplcost['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMOLDPOREPLCOST, $inwhlmoldporeplcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhlmoldporeplcost['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMOLDPOREPLCOST, $inwhlmoldporeplcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMOLDPOREPLCOST, $inwhlmoldporeplcost, $comparison);
    }

    /**
     * Filter the query on the InwhLmNewPoOrdrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlmnewpoordrdate('fooValue');   // WHERE InwhLmNewPoOrdrDate = 'fooValue'
     * $query->filterByInwhlmnewpoordrdate('%fooValue%', Criteria::LIKE); // WHERE InwhLmNewPoOrdrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inwhlmnewpoordrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhlmnewpoordrdate($inwhlmnewpoordrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inwhlmnewpoordrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMNEWPOORDRDATE, $inwhlmnewpoordrdate, $comparison);
    }

    /**
     * Filter the query on the InwhLmNewPoReplCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInwhlmnewporeplcost(1234); // WHERE InwhLmNewPoReplCost = 1234
     * $query->filterByInwhlmnewporeplcost(array(12, 34)); // WHERE InwhLmNewPoReplCost IN (12, 34)
     * $query->filterByInwhlmnewporeplcost(array('min' => 12)); // WHERE InwhLmNewPoReplCost > 12
     * </code>
     *
     * @param     mixed $inwhlmnewporeplcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByInwhlmnewporeplcost($inwhlmnewporeplcost = null, $comparison = null)
    {
        if (is_array($inwhlmnewporeplcost)) {
            $useMinMax = false;
            if (isset($inwhlmnewporeplcost['min'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMNEWPOREPLCOST, $inwhlmnewporeplcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inwhlmnewporeplcost['max'])) {
                $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMNEWPOREPLCOST, $inwhlmnewporeplcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_INWHLMNEWPOREPLCOST, $inwhlmnewporeplcost, $comparison);
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseInventoryTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(WarehouseInventoryTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
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
     * @param   ChildWarehouseInventory $warehouseInventory Object to remove from the list of results
     *
     * @return $this|ChildWarehouseInventoryQuery The current query, for fluid interface
     */
    public function prune($warehouseInventory = null)
    {
        if ($warehouseInventory) {
            $this->addCond('pruneCond0', $this->getAliasedColName(WarehouseInventoryTableMap::COL_INITITEMNBR), $warehouseInventory->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(WarehouseInventoryTableMap::COL_INTBWHSE), $warehouseInventory->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_whse_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarehouseInventoryTableMap::clearInstancePool();
            WarehouseInventoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseInventoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarehouseInventoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarehouseInventoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarehouseInventoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WarehouseInventoryQuery
