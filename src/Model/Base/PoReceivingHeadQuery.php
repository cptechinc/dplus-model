<?php

namespace Base;

use \PoReceivingHead as ChildPoReceivingHead;
use \PoReceivingHeadQuery as ChildPoReceivingHeadQuery;
use \Exception;
use \PDO;
use Map\PoReceivingHeadTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_tran_head' table.
 *
 *
 *
 * @method     ChildPoReceivingHeadQuery orderByPothnbr($order = Criteria::ASC) Order by the PothNbr column
 * @method     ChildPoReceivingHeadQuery orderByPothstat($order = Criteria::ASC) Order by the PothStat column
 * @method     ChildPoReceivingHeadQuery orderByPothrcptdate($order = Criteria::ASC) Order by the PothRcptDate column
 * @method     ChildPoReceivingHeadQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildPoReceivingHeadQuery orderByPothglpd($order = Criteria::ASC) Order by the PothGlPd column
 * @method     ChildPoReceivingHeadQuery orderByPothairship($order = Criteria::ASC) Order by the PothAirShip column
 * @method     ChildPoReceivingHeadQuery orderByPotherinreview($order = Criteria::ASC) Order by the PothErInReview column
 * @method     ChildPoReceivingHeadQuery orderByPothexchctry($order = Criteria::ASC) Order by the PothExchCtry column
 * @method     ChildPoReceivingHeadQuery orderByPothexchrate($order = Criteria::ASC) Order by the PothExchRate column
 * @method     ChildPoReceivingHeadQuery orderByIntbwhseorig($order = Criteria::ASC) Order by the IntbWhseOrig column
 * @method     ChildPoReceivingHeadQuery orderByPothlandcost($order = Criteria::ASC) Order by the PothLandCost column
 * @method     ChildPoReceivingHeadQuery orderByPothrcptnbr($order = Criteria::ASC) Order by the PothRcptNbr column
 * @method     ChildPoReceivingHeadQuery orderByPothlandbasedon($order = Criteria::ASC) Order by the PothLandBasedOn column
 * @method     ChildPoReceivingHeadQuery orderByPothinvcnbr($order = Criteria::ASC) Order by the PothInvcNbr column
 * @method     ChildPoReceivingHeadQuery orderByPothinvcdate($order = Criteria::ASC) Order by the PothInvcDate column
 * @method     ChildPoReceivingHeadQuery orderByPothfrtamt($order = Criteria::ASC) Order by the PothFrtAmt column
 * @method     ChildPoReceivingHeadQuery orderByPothmiscamt($order = Criteria::ASC) Order by the PothMiscAmt column
 * @method     ChildPoReceivingHeadQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPoReceivingHeadQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPoReceivingHeadQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPoReceivingHeadQuery groupByPothnbr() Group by the PothNbr column
 * @method     ChildPoReceivingHeadQuery groupByPothstat() Group by the PothStat column
 * @method     ChildPoReceivingHeadQuery groupByPothrcptdate() Group by the PothRcptDate column
 * @method     ChildPoReceivingHeadQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildPoReceivingHeadQuery groupByPothglpd() Group by the PothGlPd column
 * @method     ChildPoReceivingHeadQuery groupByPothairship() Group by the PothAirShip column
 * @method     ChildPoReceivingHeadQuery groupByPotherinreview() Group by the PothErInReview column
 * @method     ChildPoReceivingHeadQuery groupByPothexchctry() Group by the PothExchCtry column
 * @method     ChildPoReceivingHeadQuery groupByPothexchrate() Group by the PothExchRate column
 * @method     ChildPoReceivingHeadQuery groupByIntbwhseorig() Group by the IntbWhseOrig column
 * @method     ChildPoReceivingHeadQuery groupByPothlandcost() Group by the PothLandCost column
 * @method     ChildPoReceivingHeadQuery groupByPothrcptnbr() Group by the PothRcptNbr column
 * @method     ChildPoReceivingHeadQuery groupByPothlandbasedon() Group by the PothLandBasedOn column
 * @method     ChildPoReceivingHeadQuery groupByPothinvcnbr() Group by the PothInvcNbr column
 * @method     ChildPoReceivingHeadQuery groupByPothinvcdate() Group by the PothInvcDate column
 * @method     ChildPoReceivingHeadQuery groupByPothfrtamt() Group by the PothFrtAmt column
 * @method     ChildPoReceivingHeadQuery groupByPothmiscamt() Group by the PothMiscAmt column
 * @method     ChildPoReceivingHeadQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPoReceivingHeadQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPoReceivingHeadQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPoReceivingHeadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPoReceivingHeadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPoReceivingHeadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPoReceivingHeadQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPoReceivingHeadQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPoReceivingHeadQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithPurchaseOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithPurchaseOrder() Adds a LEFT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithPurchaseOrder() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrder relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithPurchaseOrder() Adds a INNER JOIN clause and with to the query using the PurchaseOrder relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithPurchaseOrderDetailReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithPurchaseOrderDetailReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithPurchaseOrderDetailReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithPurchaseOrderDetailReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery joinWithPurchaseOrderDetailLotReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildPoReceivingHeadQuery leftJoinWithPurchaseOrderDetailLotReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery rightJoinWithPurchaseOrderDetailLotReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildPoReceivingHeadQuery innerJoinWithPurchaseOrderDetailLotReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     \PurchaseOrderQuery|\WarehouseQuery|\PurchaseOrderDetailReceivingQuery|\PurchaseOrderDetailLotReceivingQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPoReceivingHead findOne(ConnectionInterface $con = null) Return the first ChildPoReceivingHead matching the query
 * @method     ChildPoReceivingHead findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPoReceivingHead matching the query, or a new ChildPoReceivingHead object populated from the query conditions when no match is found
 *
 * @method     ChildPoReceivingHead findOneByPothnbr(string $PothNbr) Return the first ChildPoReceivingHead filtered by the PothNbr column
 * @method     ChildPoReceivingHead findOneByPothstat(string $PothStat) Return the first ChildPoReceivingHead filtered by the PothStat column
 * @method     ChildPoReceivingHead findOneByPothrcptdate(string $PothRcptDate) Return the first ChildPoReceivingHead filtered by the PothRcptDate column
 * @method     ChildPoReceivingHead findOneByIntbwhse(string $IntbWhse) Return the first ChildPoReceivingHead filtered by the IntbWhse column
 * @method     ChildPoReceivingHead findOneByPothglpd(int $PothGlPd) Return the first ChildPoReceivingHead filtered by the PothGlPd column
 * @method     ChildPoReceivingHead findOneByPothairship(string $PothAirShip) Return the first ChildPoReceivingHead filtered by the PothAirShip column
 * @method     ChildPoReceivingHead findOneByPotherinreview(string $PothErInReview) Return the first ChildPoReceivingHead filtered by the PothErInReview column
 * @method     ChildPoReceivingHead findOneByPothexchctry(string $PothExchCtry) Return the first ChildPoReceivingHead filtered by the PothExchCtry column
 * @method     ChildPoReceivingHead findOneByPothexchrate(string $PothExchRate) Return the first ChildPoReceivingHead filtered by the PothExchRate column
 * @method     ChildPoReceivingHead findOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildPoReceivingHead filtered by the IntbWhseOrig column
 * @method     ChildPoReceivingHead findOneByPothlandcost(string $PothLandCost) Return the first ChildPoReceivingHead filtered by the PothLandCost column
 * @method     ChildPoReceivingHead findOneByPothrcptnbr(int $PothRcptNbr) Return the first ChildPoReceivingHead filtered by the PothRcptNbr column
 * @method     ChildPoReceivingHead findOneByPothlandbasedon(string $PothLandBasedOn) Return the first ChildPoReceivingHead filtered by the PothLandBasedOn column
 * @method     ChildPoReceivingHead findOneByPothinvcnbr(string $PothInvcNbr) Return the first ChildPoReceivingHead filtered by the PothInvcNbr column
 * @method     ChildPoReceivingHead findOneByPothinvcdate(string $PothInvcDate) Return the first ChildPoReceivingHead filtered by the PothInvcDate column
 * @method     ChildPoReceivingHead findOneByPothfrtamt(string $PothFrtAmt) Return the first ChildPoReceivingHead filtered by the PothFrtAmt column
 * @method     ChildPoReceivingHead findOneByPothmiscamt(string $PothMiscAmt) Return the first ChildPoReceivingHead filtered by the PothMiscAmt column
 * @method     ChildPoReceivingHead findOneByDateupdtd(string $DateUpdtd) Return the first ChildPoReceivingHead filtered by the DateUpdtd column
 * @method     ChildPoReceivingHead findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPoReceivingHead filtered by the TimeUpdtd column
 * @method     ChildPoReceivingHead findOneByDummy(string $dummy) Return the first ChildPoReceivingHead filtered by the dummy column *

 * @method     ChildPoReceivingHead requirePk($key, ConnectionInterface $con = null) Return the ChildPoReceivingHead by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOne(ConnectionInterface $con = null) Return the first ChildPoReceivingHead matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPoReceivingHead requireOneByPothnbr(string $PothNbr) Return the first ChildPoReceivingHead filtered by the PothNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothstat(string $PothStat) Return the first ChildPoReceivingHead filtered by the PothStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothrcptdate(string $PothRcptDate) Return the first ChildPoReceivingHead filtered by the PothRcptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByIntbwhse(string $IntbWhse) Return the first ChildPoReceivingHead filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothglpd(int $PothGlPd) Return the first ChildPoReceivingHead filtered by the PothGlPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothairship(string $PothAirShip) Return the first ChildPoReceivingHead filtered by the PothAirShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPotherinreview(string $PothErInReview) Return the first ChildPoReceivingHead filtered by the PothErInReview column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothexchctry(string $PothExchCtry) Return the first ChildPoReceivingHead filtered by the PothExchCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothexchrate(string $PothExchRate) Return the first ChildPoReceivingHead filtered by the PothExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByIntbwhseorig(string $IntbWhseOrig) Return the first ChildPoReceivingHead filtered by the IntbWhseOrig column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothlandcost(string $PothLandCost) Return the first ChildPoReceivingHead filtered by the PothLandCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothrcptnbr(int $PothRcptNbr) Return the first ChildPoReceivingHead filtered by the PothRcptNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothlandbasedon(string $PothLandBasedOn) Return the first ChildPoReceivingHead filtered by the PothLandBasedOn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothinvcnbr(string $PothInvcNbr) Return the first ChildPoReceivingHead filtered by the PothInvcNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothinvcdate(string $PothInvcDate) Return the first ChildPoReceivingHead filtered by the PothInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothfrtamt(string $PothFrtAmt) Return the first ChildPoReceivingHead filtered by the PothFrtAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByPothmiscamt(string $PothMiscAmt) Return the first ChildPoReceivingHead filtered by the PothMiscAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPoReceivingHead filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPoReceivingHead filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoReceivingHead requireOneByDummy(string $dummy) Return the first ChildPoReceivingHead filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPoReceivingHead[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPoReceivingHead objects based on current ModelCriteria
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothnbr(string $PothNbr) Return ChildPoReceivingHead objects filtered by the PothNbr column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothstat(string $PothStat) Return ChildPoReceivingHead objects filtered by the PothStat column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothrcptdate(string $PothRcptDate) Return ChildPoReceivingHead objects filtered by the PothRcptDate column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildPoReceivingHead objects filtered by the IntbWhse column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothglpd(int $PothGlPd) Return ChildPoReceivingHead objects filtered by the PothGlPd column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothairship(string $PothAirShip) Return ChildPoReceivingHead objects filtered by the PothAirShip column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPotherinreview(string $PothErInReview) Return ChildPoReceivingHead objects filtered by the PothErInReview column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothexchctry(string $PothExchCtry) Return ChildPoReceivingHead objects filtered by the PothExchCtry column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothexchrate(string $PothExchRate) Return ChildPoReceivingHead objects filtered by the PothExchRate column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByIntbwhseorig(string $IntbWhseOrig) Return ChildPoReceivingHead objects filtered by the IntbWhseOrig column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothlandcost(string $PothLandCost) Return ChildPoReceivingHead objects filtered by the PothLandCost column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothrcptnbr(int $PothRcptNbr) Return ChildPoReceivingHead objects filtered by the PothRcptNbr column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothlandbasedon(string $PothLandBasedOn) Return ChildPoReceivingHead objects filtered by the PothLandBasedOn column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothinvcnbr(string $PothInvcNbr) Return ChildPoReceivingHead objects filtered by the PothInvcNbr column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothinvcdate(string $PothInvcDate) Return ChildPoReceivingHead objects filtered by the PothInvcDate column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothfrtamt(string $PothFrtAmt) Return ChildPoReceivingHead objects filtered by the PothFrtAmt column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByPothmiscamt(string $PothMiscAmt) Return ChildPoReceivingHead objects filtered by the PothMiscAmt column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPoReceivingHead objects filtered by the DateUpdtd column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPoReceivingHead objects filtered by the TimeUpdtd column
 * @method     ChildPoReceivingHead[]|ObjectCollection findByDummy(string $dummy) Return ChildPoReceivingHead objects filtered by the dummy column
 * @method     ChildPoReceivingHead[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PoReceivingHeadQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PoReceivingHeadQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PoReceivingHead', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPoReceivingHeadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPoReceivingHeadQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPoReceivingHeadQuery) {
            return $criteria;
        }
        $query = new ChildPoReceivingHeadQuery();
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
     * @return ChildPoReceivingHead|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PoReceivingHeadTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPoReceivingHead A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PothNbr, PothStat, PothRcptDate, IntbWhse, PothGlPd, PothAirShip, PothErInReview, PothExchCtry, PothExchRate, IntbWhseOrig, PothLandCost, PothRcptNbr, PothLandBasedOn, PothInvcNbr, PothInvcDate, PothFrtAmt, PothMiscAmt, DateUpdtd, TimeUpdtd, dummy FROM po_tran_head WHERE PothNbr = :p0';
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
            /** @var ChildPoReceivingHead $obj */
            $obj = new ChildPoReceivingHead();
            $obj->hydrate($row);
            PoReceivingHeadTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPoReceivingHead|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PothNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothnbr('fooValue');   // WHERE PothNbr = 'fooValue'
     * $query->filterByPothnbr('%fooValue%', Criteria::LIKE); // WHERE PothNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothnbr($pothnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $pothnbr, $comparison);
    }

    /**
     * Filter the query on the PothStat column
     *
     * Example usage:
     * <code>
     * $query->filterByPothstat('fooValue');   // WHERE PothStat = 'fooValue'
     * $query->filterByPothstat('%fooValue%', Criteria::LIKE); // WHERE PothStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothstat($pothstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHSTAT, $pothstat, $comparison);
    }

    /**
     * Filter the query on the PothRcptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPothrcptdate('fooValue');   // WHERE PothRcptDate = 'fooValue'
     * $query->filterByPothrcptdate('%fooValue%', Criteria::LIKE); // WHERE PothRcptDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothrcptdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothrcptdate($pothrcptdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothrcptdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTDATE, $pothrcptdate, $comparison);
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
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the PothGlPd column
     *
     * Example usage:
     * <code>
     * $query->filterByPothglpd(1234); // WHERE PothGlPd = 1234
     * $query->filterByPothglpd(array(12, 34)); // WHERE PothGlPd IN (12, 34)
     * $query->filterByPothglpd(array('min' => 12)); // WHERE PothGlPd > 12
     * </code>
     *
     * @param     mixed $pothglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothglpd($pothglpd = null, $comparison = null)
    {
        if (is_array($pothglpd)) {
            $useMinMax = false;
            if (isset($pothglpd['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHGLPD, $pothglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothglpd['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHGLPD, $pothglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHGLPD, $pothglpd, $comparison);
    }

    /**
     * Filter the query on the PothAirShip column
     *
     * Example usage:
     * <code>
     * $query->filterByPothairship('fooValue');   // WHERE PothAirShip = 'fooValue'
     * $query->filterByPothairship('%fooValue%', Criteria::LIKE); // WHERE PothAirShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothairship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothairship($pothairship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothairship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHAIRSHIP, $pothairship, $comparison);
    }

    /**
     * Filter the query on the PothErInReview column
     *
     * Example usage:
     * <code>
     * $query->filterByPotherinreview('fooValue');   // WHERE PothErInReview = 'fooValue'
     * $query->filterByPotherinreview('%fooValue%', Criteria::LIKE); // WHERE PothErInReview LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potherinreview The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPotherinreview($potherinreview = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potherinreview)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHERINREVIEW, $potherinreview, $comparison);
    }

    /**
     * Filter the query on the PothExchCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByPothexchctry('fooValue');   // WHERE PothExchCtry = 'fooValue'
     * $query->filterByPothexchctry('%fooValue%', Criteria::LIKE); // WHERE PothExchCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothexchctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothexchctry($pothexchctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothexchctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHCTRY, $pothexchctry, $comparison);
    }

    /**
     * Filter the query on the PothExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByPothexchrate(1234); // WHERE PothExchRate = 1234
     * $query->filterByPothexchrate(array(12, 34)); // WHERE PothExchRate IN (12, 34)
     * $query->filterByPothexchrate(array('min' => 12)); // WHERE PothExchRate > 12
     * </code>
     *
     * @param     mixed $pothexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothexchrate($pothexchrate = null, $comparison = null)
    {
        if (is_array($pothexchrate)) {
            $useMinMax = false;
            if (isset($pothexchrate['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $pothexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothexchrate['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $pothexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHEXCHRATE, $pothexchrate, $comparison);
    }

    /**
     * Filter the query on the IntbWhseOrig column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhseorig('fooValue');   // WHERE IntbWhseOrig = 'fooValue'
     * $query->filterByIntbwhseorig('%fooValue%', Criteria::LIKE); // WHERE IntbWhseOrig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhseorig The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByIntbwhseorig($intbwhseorig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhseorig)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSEORIG, $intbwhseorig, $comparison);
    }

    /**
     * Filter the query on the PothLandCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPothlandcost(1234); // WHERE PothLandCost = 1234
     * $query->filterByPothlandcost(array(12, 34)); // WHERE PothLandCost IN (12, 34)
     * $query->filterByPothlandcost(array('min' => 12)); // WHERE PothLandCost > 12
     * </code>
     *
     * @param     mixed $pothlandcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothlandcost($pothlandcost = null, $comparison = null)
    {
        if (is_array($pothlandcost)) {
            $useMinMax = false;
            if (isset($pothlandcost['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDCOST, $pothlandcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothlandcost['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDCOST, $pothlandcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDCOST, $pothlandcost, $comparison);
    }

    /**
     * Filter the query on the PothRcptNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothrcptnbr(1234); // WHERE PothRcptNbr = 1234
     * $query->filterByPothrcptnbr(array(12, 34)); // WHERE PothRcptNbr IN (12, 34)
     * $query->filterByPothrcptnbr(array('min' => 12)); // WHERE PothRcptNbr > 12
     * </code>
     *
     * @param     mixed $pothrcptnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothrcptnbr($pothrcptnbr = null, $comparison = null)
    {
        if (is_array($pothrcptnbr)) {
            $useMinMax = false;
            if (isset($pothrcptnbr['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $pothrcptnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothrcptnbr['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $pothrcptnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHRCPTNBR, $pothrcptnbr, $comparison);
    }

    /**
     * Filter the query on the PothLandBasedOn column
     *
     * Example usage:
     * <code>
     * $query->filterByPothlandbasedon('fooValue');   // WHERE PothLandBasedOn = 'fooValue'
     * $query->filterByPothlandbasedon('%fooValue%', Criteria::LIKE); // WHERE PothLandBasedOn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothlandbasedon The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothlandbasedon($pothlandbasedon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothlandbasedon)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHLANDBASEDON, $pothlandbasedon, $comparison);
    }

    /**
     * Filter the query on the PothInvcNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothinvcnbr('fooValue');   // WHERE PothInvcNbr = 'fooValue'
     * $query->filterByPothinvcnbr('%fooValue%', Criteria::LIKE); // WHERE PothInvcNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothinvcnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothinvcnbr($pothinvcnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothinvcnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHINVCNBR, $pothinvcnbr, $comparison);
    }

    /**
     * Filter the query on the PothInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPothinvcdate('fooValue');   // WHERE PothInvcDate = 'fooValue'
     * $query->filterByPothinvcdate('%fooValue%', Criteria::LIKE); // WHERE PothInvcDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothinvcdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothinvcdate($pothinvcdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothinvcdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHINVCDATE, $pothinvcdate, $comparison);
    }

    /**
     * Filter the query on the PothFrtAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPothfrtamt(1234); // WHERE PothFrtAmt = 1234
     * $query->filterByPothfrtamt(array(12, 34)); // WHERE PothFrtAmt IN (12, 34)
     * $query->filterByPothfrtamt(array('min' => 12)); // WHERE PothFrtAmt > 12
     * </code>
     *
     * @param     mixed $pothfrtamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothfrtamt($pothfrtamt = null, $comparison = null)
    {
        if (is_array($pothfrtamt)) {
            $useMinMax = false;
            if (isset($pothfrtamt['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHFRTAMT, $pothfrtamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothfrtamt['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHFRTAMT, $pothfrtamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHFRTAMT, $pothfrtamt, $comparison);
    }

    /**
     * Filter the query on the PothMiscAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPothmiscamt(1234); // WHERE PothMiscAmt = 1234
     * $query->filterByPothmiscamt(array(12, 34)); // WHERE PothMiscAmt IN (12, 34)
     * $query->filterByPothmiscamt(array('min' => 12)); // WHERE PothMiscAmt > 12
     * </code>
     *
     * @param     mixed $pothmiscamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPothmiscamt($pothmiscamt = null, $comparison = null)
    {
        if (is_array($pothmiscamt)) {
            $useMinMax = false;
            if (isset($pothmiscamt['min'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHMISCAMT, $pothmiscamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pothmiscamt['max'])) {
                $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHMISCAMT, $pothmiscamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHMISCAMT, $pothmiscamt, $comparison);
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
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoReceivingHeadTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \PurchaseOrder object
     *
     * @param \PurchaseOrder|ObjectCollection $purchaseOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
    {
        if ($purchaseOrder instanceof \PurchaseOrder) {
            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrder->getPohdnbr(), $comparison);
        } elseif ($purchaseOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrder->toKeyValue('PrimaryKey', 'Pohdnbr'), $comparison);
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
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
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
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByWarehouse($warehouse, $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);
        } else {
            throw new PropelException('filterByWarehouse() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Warehouse relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function joinWarehouse($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Warehouse');

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
            $this->addJoinObject($join, 'Warehouse');
        }

        return $this;
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Warehouse', '\WarehouseQuery');
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailReceiving object
     *
     * @param \PurchaseOrderDetailReceiving|ObjectCollection $purchaseOrderDetailReceiving the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving, $comparison = null)
    {
        if ($purchaseOrderDetailReceiving instanceof \PurchaseOrderDetailReceiving) {
            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrderDetailReceiving->getPothnbr(), $comparison);
        } elseif ($purchaseOrderDetailReceiving instanceof ObjectCollection) {
            return $this
                ->usePurchaseOrderDetailReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailReceiving->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceiving() only accepts arguments of type \PurchaseOrderDetailReceiving or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailReceiving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailReceiving($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailReceiving relation PurchaseOrderDetailReceiving object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailReceivingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailReceiving', '\PurchaseOrderDetailReceivingQuery');
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailLotReceiving object
     *
     * @param \PurchaseOrderDetailLotReceiving|ObjectCollection $purchaseOrderDetailLotReceiving the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailLotReceiving($purchaseOrderDetailLotReceiving, $comparison = null)
    {
        if ($purchaseOrderDetailLotReceiving instanceof \PurchaseOrderDetailLotReceiving) {
            return $this
                ->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $purchaseOrderDetailLotReceiving->getPothnbr(), $comparison);
        } elseif ($purchaseOrderDetailLotReceiving instanceof ObjectCollection) {
            return $this
                ->usePurchaseOrderDetailLotReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailLotReceiving->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPurchaseOrderDetailLotReceiving() only accepts arguments of type \PurchaseOrderDetailLotReceiving or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailLotReceiving($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailLotReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailLotReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailLotReceiving relation PurchaseOrderDetailLotReceiving object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailLotReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailLotReceivingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailLotReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailLotReceiving', '\PurchaseOrderDetailLotReceivingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPoReceivingHead $poReceivingHead Object to remove from the list of results
     *
     * @return $this|ChildPoReceivingHeadQuery The current query, for fluid interface
     */
    public function prune($poReceivingHead = null)
    {
        if ($poReceivingHead) {
            $this->addUsingAlias(PoReceivingHeadTableMap::COL_POTHNBR, $poReceivingHead->getPothnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_tran_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PoReceivingHeadTableMap::clearInstancePool();
            PoReceivingHeadTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PoReceivingHeadTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PoReceivingHeadTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PoReceivingHeadTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PoReceivingHeadTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PoReceivingHeadQuery
