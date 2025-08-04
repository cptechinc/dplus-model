<?php

namespace Base;

use \PurchaseOrderDetailReceipt as ChildPurchaseOrderDetailReceipt;
use \PurchaseOrderDetailReceiptQuery as ChildPurchaseOrderDetailReceiptQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailReceiptTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `po_receipt_det` table.
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPohdnbr($order = Criteria::ASC) Order by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPodtline($order = Criteria::ASC) Order by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordseq($order = Criteria::ASC) Order by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordref($order = Criteria::ASC) Order by the PordRef column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordtrandate($order = Criteria::ASC) Order by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordglpd($order = Criteria::ASC) Order by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordqtyrec($order = Criteria::ASC) Order by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordcosttot($order = Criteria::ASC) Order by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordlandunitcost($order = Criteria::ASC) Order by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordtariffcost($order = Criteria::ASC) Order by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordmpfunitcost($order = Criteria::ASC) Order by the PordMpfUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPordhmfunitcost($order = Criteria::ASC) Order by the PordHmfUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByPorddsetunitcost($order = Criteria::ASC) Order by the PordDsetUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceiptQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPohdnbr() Group by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPodtline() Group by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordseq() Group by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordref() Group by the PordRef column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordtrandate() Group by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordglpd() Group by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordqtyrec() Group by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordcosttot() Group by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordlandunitcost() Group by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordtariffcost() Group by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordmpfunitcost() Group by the PordMpfUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPordhmfunitcost() Group by the PordHmfUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByPorddsetunitcost() Group by the PordDsetUnitCost column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceiptQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinPurchaseOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinPurchaseOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinPurchaseOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery joinWithPurchaseOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinWithPurchaseOrderDetail() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinWithPurchaseOrderDetail() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinWithPurchaseOrderDetail() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildPurchaseOrderDetailReceiptQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceiptQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildPurchaseOrderDetailReceiptQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \PurchaseOrderQuery|\PurchaseOrderDetailQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPurchaseOrderDetailReceipt|null findOne(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceipt matching the query
 * @method     ChildPurchaseOrderDetailReceipt findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceipt matching the query, or a new ChildPurchaseOrderDetailReceipt object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPohdnbr(int $PohdNbr) Return the first ChildPurchaseOrderDetailReceipt filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetailReceipt filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailReceipt filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordseq(int $PordSeq) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordref(string $PordRef) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordRef column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordtrandate(string $PordTranDate) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordglpd(int $PordGlPd) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordqtyrec(string $PordQtyRec) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordcosttot(string $PordCostTot) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordlandunitcost(string $PordLandUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordtariffcost(string $PordTariffCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordmpfunitcost(string $PordMpfUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordMpfUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPordhmfunitcost(string $PordHmfUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordHmfUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByPorddsetunitcost(string $PordDsetUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordDsetUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailReceipt filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailReceipt filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceipt|null findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailReceipt filtered by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceipt requirePk($key, ?ConnectionInterface $con = null) Return the ChildPurchaseOrderDetailReceipt by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOne(?ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceipt matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPohdnbr(int $PohdNbr) Return the first ChildPurchaseOrderDetailReceipt filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetailReceipt filtered by the PodtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailReceipt filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordseq(int $PordSeq) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordref(string $PordRef) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordtrandate(string $PordTranDate) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordTranDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordglpd(int $PordGlPd) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordGlPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordqtyrec(string $PordQtyRec) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordcosttot(string $PordCostTot) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordlandunitcost(string $PordLandUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordLandUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordtariffcost(string $PordTariffCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordmpfunitcost(string $PordMpfUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordMpfUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPordhmfunitcost(string $PordHmfUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordHmfUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByPorddsetunitcost(string $PordDsetUnitCost) Return the first ChildPurchaseOrderDetailReceipt filtered by the PordDsetUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailReceipt filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailReceipt filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceipt requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailReceipt filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection find(?ConnectionInterface $con = null) Return ChildPurchaseOrderDetailReceipt objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> find(?ConnectionInterface $con = null) Return ChildPurchaseOrderDetailReceipt objects based on current ModelCriteria
 *
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPohdnbr(int|array<int> $PohdNbr) Return ChildPurchaseOrderDetailReceipt objects filtered by the PohdNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPohdnbr(int|array<int> $PohdNbr) Return ChildPurchaseOrderDetailReceipt objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPodtline(int|array<int> $PodtLine) Return ChildPurchaseOrderDetailReceipt objects filtered by the PodtLine column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPodtline(int|array<int> $PodtLine) Return ChildPurchaseOrderDetailReceipt objects filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildPurchaseOrderDetailReceipt objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildPurchaseOrderDetailReceipt objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordseq(int|array<int> $PordSeq) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordSeq column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordseq(int|array<int> $PordSeq) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordref(string|array<string> $PordRef) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordRef column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordref(string|array<string> $PordRef) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordRef column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordtrandate(string|array<string> $PordTranDate) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordTranDate column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordtrandate(string|array<string> $PordTranDate) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordglpd(int|array<int> $PordGlPd) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordGlPd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordglpd(int|array<int> $PordGlPd) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordqtyrec(string|array<string> $PordQtyRec) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordQtyRec column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordqtyrec(string|array<string> $PordQtyRec) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordcosttot(string|array<string> $PordCostTot) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordCostTot column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordcosttot(string|array<string> $PordCostTot) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordlandunitcost(string|array<string> $PordLandUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordLandUnitCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordlandunitcost(string|array<string> $PordLandUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordtariffcost(string|array<string> $PordTariffCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordTariffCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordtariffcost(string|array<string> $PordTariffCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordmpfunitcost(string|array<string> $PordMpfUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordMpfUnitCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordmpfunitcost(string|array<string> $PordMpfUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordMpfUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPordhmfunitcost(string|array<string> $PordHmfUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordHmfUnitCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPordhmfunitcost(string|array<string> $PordHmfUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordHmfUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByPorddsetunitcost(string|array<string> $PordDsetUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordDsetUnitCost column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByPorddsetunitcost(string|array<string> $PordDsetUnitCost) Return ChildPurchaseOrderDetailReceipt objects filtered by the PordDsetUnitCost column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPurchaseOrderDetailReceipt objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPurchaseOrderDetailReceipt objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPurchaseOrderDetailReceipt objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPurchaseOrderDetailReceipt objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceipt[]|Collection findByDummy(string|array<string> $dummy) Return ChildPurchaseOrderDetailReceipt objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildPurchaseOrderDetailReceipt> findByDummy(string|array<string> $dummy) Return ChildPurchaseOrderDetailReceipt objects filtered by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceipt[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPurchaseOrderDetailReceipt> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class PurchaseOrderDetailReceiptQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailReceiptQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetailReceipt', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailReceiptQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailReceiptQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildPurchaseOrderDetailReceiptQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderDetailReceiptQuery();
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
     * @param array[$PohdNbr, $PodtLine, $InitItemNbr, $PordSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPurchaseOrderDetailReceipt|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderDetailReceiptTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildPurchaseOrderDetailReceipt A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PohdNbr, PodtLine, InitItemNbr, PordSeq, PordRef, PordTranDate, PordGlPd, PordQtyRec, PordCostTot, PordLandUnitCost, PordTariffCost, PordMpfUnitCost, PordHmfUnitCost, PordDsetUnitCost, DateUpdtd, TimeUpdtd, dummy FROM po_receipt_det WHERE PohdNbr = :p0 AND PodtLine = :p1 AND InitItemNbr = :p2 AND PordSeq = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPurchaseOrderDetailReceipt $obj */
            $obj = new ChildPurchaseOrderDetailReceipt();
            $obj->hydrate($row);
            PurchaseOrderDetailReceiptTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildPurchaseOrderDetailReceipt|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $key[3], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PohdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdnbr(1234); // WHERE PohdNbr = 1234
     * $query->filterByPohdnbr(array(12, 34)); // WHERE PohdNbr IN (12, 34)
     * $query->filterByPohdnbr(array('min' => 12)); // WHERE PohdNbr > 12
     * </code>
     *
     * @see       filterByPurchaseOrder()
     *
     * @see       filterByPurchaseOrderDetail()
     *
     * @param mixed $pohdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, ?string $comparison = null)
    {
        if (is_array($pohdnbr)) {
            $useMinMax = false;
            if (isset($pohdnbr['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $pohdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pohdnbr['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $pohdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $pohdnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PodtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtline(1234); // WHERE PodtLine = 1234
     * $query->filterByPodtline(array(12, 34)); // WHERE PodtLine IN (12, 34)
     * $query->filterByPodtline(array('min' => 12)); // WHERE PodtLine > 12
     * </code>
     *
     * @see       filterByPurchaseOrderDetail()
     *
     * @param mixed $podtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPodtline($podtline = null, ?string $comparison = null)
    {
        if (is_array($podtline)) {
            $useMinMax = false;
            if (isset($podtline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $podtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $podtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $podtline, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByPordseq(1234); // WHERE PordSeq = 1234
     * $query->filterByPordseq(array(12, 34)); // WHERE PordSeq IN (12, 34)
     * $query->filterByPordseq(array('min' => 12)); // WHERE PordSeq > 12
     * </code>
     *
     * @param mixed $pordseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordseq($pordseq = null, ?string $comparison = null)
    {
        if (is_array($pordseq)) {
            $useMinMax = false;
            if (isset($pordseq['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $pordseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordseq['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $pordseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ, $pordseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPordref('fooValue');   // WHERE PordRef = 'fooValue'
     * $query->filterByPordref('%fooValue%', Criteria::LIKE); // WHERE PordRef LIKE '%fooValue%'
     * $query->filterByPordref(['foo', 'bar']); // WHERE PordRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pordref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordref($pordref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pordref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDREF, $pordref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordTranDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPordtrandate('fooValue');   // WHERE PordTranDate = 'fooValue'
     * $query->filterByPordtrandate('%fooValue%', Criteria::LIKE); // WHERE PordTranDate LIKE '%fooValue%'
     * $query->filterByPordtrandate(['foo', 'bar']); // WHERE PordTranDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pordtrandate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordtrandate($pordtrandate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pordtrandate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDTRANDATE, $pordtrandate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordGlPd column
     *
     * Example usage:
     * <code>
     * $query->filterByPordglpd(1234); // WHERE PordGlPd = 1234
     * $query->filterByPordglpd(array(12, 34)); // WHERE PordGlPd IN (12, 34)
     * $query->filterByPordglpd(array('min' => 12)); // WHERE PordGlPd > 12
     * </code>
     *
     * @param mixed $pordglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordglpd($pordglpd = null, ?string $comparison = null)
    {
        if (is_array($pordglpd)) {
            $useMinMax = false;
            if (isset($pordglpd['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD, $pordglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordglpd['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD, $pordglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDGLPD, $pordglpd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordQtyRec column
     *
     * Example usage:
     * <code>
     * $query->filterByPordqtyrec(1234); // WHERE PordQtyRec = 1234
     * $query->filterByPordqtyrec(array(12, 34)); // WHERE PordQtyRec IN (12, 34)
     * $query->filterByPordqtyrec(array('min' => 12)); // WHERE PordQtyRec > 12
     * </code>
     *
     * @param mixed $pordqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordqtyrec($pordqtyrec = null, ?string $comparison = null)
    {
        if (is_array($pordqtyrec)) {
            $useMinMax = false;
            if (isset($pordqtyrec['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC, $pordqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordqtyrec['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC, $pordqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDQTYREC, $pordqtyrec, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordCostTot column
     *
     * Example usage:
     * <code>
     * $query->filterByPordcosttot(1234); // WHERE PordCostTot = 1234
     * $query->filterByPordcosttot(array(12, 34)); // WHERE PordCostTot IN (12, 34)
     * $query->filterByPordcosttot(array('min' => 12)); // WHERE PordCostTot > 12
     * </code>
     *
     * @param mixed $pordcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordcosttot($pordcosttot = null, ?string $comparison = null)
    {
        if (is_array($pordcosttot)) {
            $useMinMax = false;
            if (isset($pordcosttot['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT, $pordcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordcosttot['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT, $pordcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDCOSTTOT, $pordcosttot, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordLandUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPordlandunitcost(1234); // WHERE PordLandUnitCost = 1234
     * $query->filterByPordlandunitcost(array(12, 34)); // WHERE PordLandUnitCost IN (12, 34)
     * $query->filterByPordlandunitcost(array('min' => 12)); // WHERE PordLandUnitCost > 12
     * </code>
     *
     * @param mixed $pordlandunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordlandunitcost($pordlandunitcost = null, ?string $comparison = null)
    {
        if (is_array($pordlandunitcost)) {
            $useMinMax = false;
            if (isset($pordlandunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST, $pordlandunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordlandunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST, $pordlandunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDLANDUNITCOST, $pordlandunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordTariffCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPordtariffcost(1234); // WHERE PordTariffCost = 1234
     * $query->filterByPordtariffcost(array(12, 34)); // WHERE PordTariffCost IN (12, 34)
     * $query->filterByPordtariffcost(array('min' => 12)); // WHERE PordTariffCost > 12
     * </code>
     *
     * @param mixed $pordtariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordtariffcost($pordtariffcost = null, ?string $comparison = null)
    {
        if (is_array($pordtariffcost)) {
            $useMinMax = false;
            if (isset($pordtariffcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST, $pordtariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordtariffcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST, $pordtariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDTARIFFCOST, $pordtariffcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordMpfUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPordmpfunitcost(1234); // WHERE PordMpfUnitCost = 1234
     * $query->filterByPordmpfunitcost(array(12, 34)); // WHERE PordMpfUnitCost IN (12, 34)
     * $query->filterByPordmpfunitcost(array('min' => 12)); // WHERE PordMpfUnitCost > 12
     * </code>
     *
     * @param mixed $pordmpfunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordmpfunitcost($pordmpfunitcost = null, ?string $comparison = null)
    {
        if (is_array($pordmpfunitcost)) {
            $useMinMax = false;
            if (isset($pordmpfunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDMPFUNITCOST, $pordmpfunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordmpfunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDMPFUNITCOST, $pordmpfunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDMPFUNITCOST, $pordmpfunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordHmfUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPordhmfunitcost(1234); // WHERE PordHmfUnitCost = 1234
     * $query->filterByPordhmfunitcost(array(12, 34)); // WHERE PordHmfUnitCost IN (12, 34)
     * $query->filterByPordhmfunitcost(array('min' => 12)); // WHERE PordHmfUnitCost > 12
     * </code>
     *
     * @param mixed $pordhmfunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPordhmfunitcost($pordhmfunitcost = null, ?string $comparison = null)
    {
        if (is_array($pordhmfunitcost)) {
            $useMinMax = false;
            if (isset($pordhmfunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDHMFUNITCOST, $pordhmfunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordhmfunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDHMFUNITCOST, $pordhmfunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDHMFUNITCOST, $pordhmfunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PordDsetUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPorddsetunitcost(1234); // WHERE PordDsetUnitCost = 1234
     * $query->filterByPorddsetunitcost(array(12, 34)); // WHERE PordDsetUnitCost IN (12, 34)
     * $query->filterByPorddsetunitcost(array('min' => 12)); // WHERE PordDsetUnitCost > 12
     * </code>
     *
     * @param mixed $porddsetunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPorddsetunitcost($porddsetunitcost = null, ?string $comparison = null)
    {
        if (is_array($porddsetunitcost)) {
            $useMinMax = false;
            if (isset($porddsetunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDDSETUNITCOST, $porddsetunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($porddsetunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDDSETUNITCOST, $porddsetunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PORDDSETUNITCOST, $porddsetunitcost, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, ?string $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrder() only accepts arguments of type \PurchaseOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the PurchaseOrder relation PurchaseOrder object
     *
     * @param callable(\PurchaseOrderQuery):\PurchaseOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useExistsQuery('PurchaseOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useExistsQuery('PurchaseOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useInQuery('PurchaseOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrder table for a NOT IN query.
     *
     * @see usePurchaseOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderQuery */
        $q = $this->useInQuery('PurchaseOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetail object
     *
     * @param \PurchaseOrderDetail $purchaseOrderDetail The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetail($purchaseOrderDetail, ?string $comparison = null)
    {
        if ($purchaseOrderDetail instanceof \PurchaseOrderDetail) {
            return $this
                ->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR, $purchaseOrderDetail->getPohdnbr(), $comparison)
                ->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE, $purchaseOrderDetail->getPodtline(), $comparison);
        } else {
            throw new PropelException('filterByPurchaseOrderDetail() only accepts arguments of type \PurchaseOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the PurchaseOrderDetail relation PurchaseOrderDetail object
     *
     * @param callable(\PurchaseOrderDetailQuery):\PurchaseOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useInQuery('PurchaseOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useInQuery('PurchaseOrderDetail', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * @param ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($purchaseOrderDetailReceipt = null)
    {
        if ($purchaseOrderDetailReceipt) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderDetailReceiptTableMap::COL_POHDNBR), $purchaseOrderDetailReceipt->getPohdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderDetailReceiptTableMap::COL_PODTLINE), $purchaseOrderDetailReceipt->getPodtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderDetailReceiptTableMap::COL_INITITEMNBR), $purchaseOrderDetailReceipt->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PurchaseOrderDetailReceiptTableMap::COL_PORDSEQ), $purchaseOrderDetailReceipt->getPordseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_receipt_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderDetailReceiptTableMap::clearInstancePool();
            PurchaseOrderDetailReceiptTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderDetailReceiptTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderDetailReceiptTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderDetailReceiptTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
