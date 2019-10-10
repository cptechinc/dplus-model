<?php

namespace Base;

use \PurchaseOrderDetailReceived as ChildPurchaseOrderDetailReceived;
use \PurchaseOrderDetailReceivedQuery as ChildPurchaseOrderDetailReceivedQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailReceivedTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_receipt_det' table.
 *
 *
 *
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPohdnbr($order = Criteria::ASC) Order by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPodtline($order = Criteria::ASC) Order by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordseq($order = Criteria::ASC) Order by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordref($order = Criteria::ASC) Order by the PordRef column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordtrandate($order = Criteria::ASC) Order by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordglpd($order = Criteria::ASC) Order by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordqtyrec($order = Criteria::ASC) Order by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordcosttot($order = Criteria::ASC) Order by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordlandunitcost($order = Criteria::ASC) Order by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByPordtariffcost($order = Criteria::ASC) Order by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceivedQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPohdnbr() Group by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPodtline() Group by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordseq() Group by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordref() Group by the PordRef column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordtrandate() Group by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordglpd() Group by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordqtyrec() Group by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordcosttot() Group by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordlandunitcost() Group by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByPordtariffcost() Group by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceivedQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderDetailReceivedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailReceivedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailReceivedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderDetailReceivedQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailReceivedQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailReceivedQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderDetailReceived findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceived matching the query
 * @method     ChildPurchaseOrderDetailReceived findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceived matching the query, or a new ChildPurchaseOrderDetailReceived object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetailReceived findOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderDetailReceived filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceived findOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetailReceived filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceived findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailReceived filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordseq(int $PordSeq) Return the first ChildPurchaseOrderDetailReceived filtered by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordref(string $PordRef) Return the first ChildPurchaseOrderDetailReceived filtered by the PordRef column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordtrandate(string $PordTranDate) Return the first ChildPurchaseOrderDetailReceived filtered by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordglpd(int $PordGlPd) Return the first ChildPurchaseOrderDetailReceived filtered by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordqtyrec(string $PordQtyRec) Return the first ChildPurchaseOrderDetailReceived filtered by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordcosttot(string $PordCostTot) Return the first ChildPurchaseOrderDetailReceived filtered by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordlandunitcost(string $PordLandUnitCost) Return the first ChildPurchaseOrderDetailReceived filtered by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceived findOneByPordtariffcost(string $PordTariffCost) Return the first ChildPurchaseOrderDetailReceived filtered by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceived findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailReceived filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceived findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailReceived filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceived findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailReceived filtered by the dummy column *

 * @method     ChildPurchaseOrderDetailReceived requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrderDetailReceived by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailReceived matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailReceived requireOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderDetailReceived filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderDetailReceived filtered by the PodtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailReceived filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordseq(int $PordSeq) Return the first ChildPurchaseOrderDetailReceived filtered by the PordSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordref(string $PordRef) Return the first ChildPurchaseOrderDetailReceived filtered by the PordRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordtrandate(string $PordTranDate) Return the first ChildPurchaseOrderDetailReceived filtered by the PordTranDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordglpd(int $PordGlPd) Return the first ChildPurchaseOrderDetailReceived filtered by the PordGlPd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordqtyrec(string $PordQtyRec) Return the first ChildPurchaseOrderDetailReceived filtered by the PordQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordcosttot(string $PordCostTot) Return the first ChildPurchaseOrderDetailReceived filtered by the PordCostTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordlandunitcost(string $PordLandUnitCost) Return the first ChildPurchaseOrderDetailReceived filtered by the PordLandUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByPordtariffcost(string $PordTariffCost) Return the first ChildPurchaseOrderDetailReceived filtered by the PordTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailReceived filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailReceived filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailReceived requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailReceived filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrderDetailReceived objects based on current ModelCriteria
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPohdnbr(string $PohdNbr) Return ChildPurchaseOrderDetailReceived objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPodtline(int $PodtLine) Return ChildPurchaseOrderDetailReceived objects filtered by the PodtLine column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildPurchaseOrderDetailReceived objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordseq(int $PordSeq) Return ChildPurchaseOrderDetailReceived objects filtered by the PordSeq column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordref(string $PordRef) Return ChildPurchaseOrderDetailReceived objects filtered by the PordRef column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordtrandate(string $PordTranDate) Return ChildPurchaseOrderDetailReceived objects filtered by the PordTranDate column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordglpd(int $PordGlPd) Return ChildPurchaseOrderDetailReceived objects filtered by the PordGlPd column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordqtyrec(string $PordQtyRec) Return ChildPurchaseOrderDetailReceived objects filtered by the PordQtyRec column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordcosttot(string $PordCostTot) Return ChildPurchaseOrderDetailReceived objects filtered by the PordCostTot column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordlandunitcost(string $PordLandUnitCost) Return ChildPurchaseOrderDetailReceived objects filtered by the PordLandUnitCost column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByPordtariffcost(string $PordTariffCost) Return ChildPurchaseOrderDetailReceived objects filtered by the PordTariffCost column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrderDetailReceived objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrderDetailReceived objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailReceived[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrderDetailReceived objects filtered by the dummy column
 * @method     ChildPurchaseOrderDetailReceived[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderDetailReceivedQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailReceivedQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetailReceived', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailReceivedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailReceivedQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPurchaseOrderDetailReceivedQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderDetailReceivedQuery();
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
     * @return ChildPurchaseOrderDetailReceived|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailReceivedTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderDetailReceivedTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildPurchaseOrderDetailReceived A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PohdNbr, PodtLine, InitItemNbr, PordSeq, PordRef, PordTranDate, PordGlPd, PordQtyRec, PordCostTot, PordLandUnitCost, PordTariffCost, DateUpdtd, TimeUpdtd, dummy FROM po_receipt_det WHERE PohdNbr = :p0 AND PodtLine = :p1 AND InitItemNbr = :p2 AND PordSeq = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
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
            /** @var ChildPurchaseOrderDetailReceived $obj */
            $obj = new ChildPurchaseOrderDetailReceived();
            $obj->hydrate($row);
            PurchaseOrderDetailReceivedTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildPurchaseOrderDetailReceived|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_POHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PODTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDSEQ, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PurchaseOrderDetailReceivedTableMap::COL_POHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderDetailReceivedTableMap::COL_PODTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderDetailReceivedTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PurchaseOrderDetailReceivedTableMap::COL_PORDSEQ, $key[3], Criteria::EQUAL);
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
     * $query->filterByPohdnbr('fooValue');   // WHERE PohdNbr = 'fooValue'
     * $query->filterByPohdnbr('%fooValue%', Criteria::LIKE); // WHERE PohdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_POHDNBR, $pohdnbr, $comparison);
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
     * @param     mixed $podtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPodtline($podtline = null, $comparison = null)
    {
        if (is_array($podtline)) {
            $useMinMax = false;
            if (isset($podtline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PODTLINE, $podtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PODTLINE, $podtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PODTLINE, $podtline, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @param     mixed $pordseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordseq($pordseq = null, $comparison = null)
    {
        if (is_array($pordseq)) {
            $useMinMax = false;
            if (isset($pordseq['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDSEQ, $pordseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordseq['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDSEQ, $pordseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDSEQ, $pordseq, $comparison);
    }

    /**
     * Filter the query on the PordRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPordref('fooValue');   // WHERE PordRef = 'fooValue'
     * $query->filterByPordref('%fooValue%', Criteria::LIKE); // WHERE PordRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pordref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordref($pordref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pordref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDREF, $pordref, $comparison);
    }

    /**
     * Filter the query on the PordTranDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPordtrandate('fooValue');   // WHERE PordTranDate = 'fooValue'
     * $query->filterByPordtrandate('%fooValue%', Criteria::LIKE); // WHERE PordTranDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pordtrandate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordtrandate($pordtrandate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pordtrandate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDTRANDATE, $pordtrandate, $comparison);
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
     * @param     mixed $pordglpd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordglpd($pordglpd = null, $comparison = null)
    {
        if (is_array($pordglpd)) {
            $useMinMax = false;
            if (isset($pordglpd['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDGLPD, $pordglpd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordglpd['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDGLPD, $pordglpd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDGLPD, $pordglpd, $comparison);
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
     * @param     mixed $pordqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordqtyrec($pordqtyrec = null, $comparison = null)
    {
        if (is_array($pordqtyrec)) {
            $useMinMax = false;
            if (isset($pordqtyrec['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDQTYREC, $pordqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordqtyrec['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDQTYREC, $pordqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDQTYREC, $pordqtyrec, $comparison);
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
     * @param     mixed $pordcosttot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordcosttot($pordcosttot = null, $comparison = null)
    {
        if (is_array($pordcosttot)) {
            $useMinMax = false;
            if (isset($pordcosttot['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDCOSTTOT, $pordcosttot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordcosttot['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDCOSTTOT, $pordcosttot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDCOSTTOT, $pordcosttot, $comparison);
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
     * @param     mixed $pordlandunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordlandunitcost($pordlandunitcost = null, $comparison = null)
    {
        if (is_array($pordlandunitcost)) {
            $useMinMax = false;
            if (isset($pordlandunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDLANDUNITCOST, $pordlandunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordlandunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDLANDUNITCOST, $pordlandunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDLANDUNITCOST, $pordlandunitcost, $comparison);
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
     * @param     mixed $pordtariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByPordtariffcost($pordtariffcost = null, $comparison = null)
    {
        if (is_array($pordtariffcost)) {
            $useMinMax = false;
            if (isset($pordtariffcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDTARIFFCOST, $pordtariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pordtariffcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDTARIFFCOST, $pordtariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_PORDTARIFFCOST, $pordtariffcost, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailReceivedTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPurchaseOrderDetailReceived $purchaseOrderDetailReceived Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderDetailReceivedQuery The current query, for fluid interface
     */
    public function prune($purchaseOrderDetailReceived = null)
    {
        if ($purchaseOrderDetailReceived) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderDetailReceivedTableMap::COL_POHDNBR), $purchaseOrderDetailReceived->getPohdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderDetailReceivedTableMap::COL_PODTLINE), $purchaseOrderDetailReceived->getPodtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderDetailReceivedTableMap::COL_INITITEMNBR), $purchaseOrderDetailReceived->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PurchaseOrderDetailReceivedTableMap::COL_PORDSEQ), $purchaseOrderDetailReceived->getPordseq(), Criteria::NOT_EQUAL);
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
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivedTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderDetailReceivedTableMap::clearInstancePool();
            PurchaseOrderDetailReceivedTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailReceivedTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderDetailReceivedTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderDetailReceivedTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderDetailReceivedTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PurchaseOrderDetailReceivedQuery
