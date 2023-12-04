<?php

namespace Base;

use \CpnLoadOrder as ChildCpnLoadOrder;
use \CpnLoadOrderQuery as ChildCpnLoadOrderQuery;
use \Exception;
use \PDO;
use Map\CpnLoadOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'load_cpn_order' table.
 *
 *
 *
 * @method     ChildCpnLoadOrderQuery orderByLchdloadnbr($order = Criteria::ASC) Order by the LchdLoadNbr column
 * @method     ChildCpnLoadOrderQuery orderByLcorordrnbr($order = Criteria::ASC) Order by the LcorOrdrNbr column
 * @method     ChildCpnLoadOrderQuery orderByLcorshipid($order = Criteria::ASC) Order by the LcorShipId column
 * @method     ChildCpnLoadOrderQuery orderByLcorcustpo($order = Criteria::ASC) Order by the LcorCustPo column
 * @method     ChildCpnLoadOrderQuery orderByLcorrqstdate($order = Criteria::ASC) Order by the LcorRqstDate column
 * @method     ChildCpnLoadOrderQuery orderByLcornbrofboxes($order = Criteria::ASC) Order by the LcorNbrOfBoxes column
 * @method     ChildCpnLoadOrderQuery orderByLcortotwght($order = Criteria::ASC) Order by the LcorTotWght column
 * @method     ChildCpnLoadOrderQuery orderByLcorordrtype($order = Criteria::ASC) Order by the LcorOrdrType column
 * @method     ChildCpnLoadOrderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCpnLoadOrderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCpnLoadOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCpnLoadOrderQuery groupByLchdloadnbr() Group by the LchdLoadNbr column
 * @method     ChildCpnLoadOrderQuery groupByLcorordrnbr() Group by the LcorOrdrNbr column
 * @method     ChildCpnLoadOrderQuery groupByLcorshipid() Group by the LcorShipId column
 * @method     ChildCpnLoadOrderQuery groupByLcorcustpo() Group by the LcorCustPo column
 * @method     ChildCpnLoadOrderQuery groupByLcorrqstdate() Group by the LcorRqstDate column
 * @method     ChildCpnLoadOrderQuery groupByLcornbrofboxes() Group by the LcorNbrOfBoxes column
 * @method     ChildCpnLoadOrderQuery groupByLcortotwght() Group by the LcorTotWght column
 * @method     ChildCpnLoadOrderQuery groupByLcorordrtype() Group by the LcorOrdrType column
 * @method     ChildCpnLoadOrderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCpnLoadOrderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCpnLoadOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCpnLoadOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCpnLoadOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCpnLoadOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCpnLoadOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCpnLoadOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCpnLoadOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCpnLoadOrderQuery leftJoinCpnLoad($relationAlias = null) Adds a LEFT JOIN clause to the query using the CpnLoad relation
 * @method     ChildCpnLoadOrderQuery rightJoinCpnLoad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CpnLoad relation
 * @method     ChildCpnLoadOrderQuery innerJoinCpnLoad($relationAlias = null) Adds a INNER JOIN clause to the query using the CpnLoad relation
 *
 * @method     ChildCpnLoadOrderQuery joinWithCpnLoad($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CpnLoad relation
 *
 * @method     ChildCpnLoadOrderQuery leftJoinWithCpnLoad() Adds a LEFT JOIN clause and with to the query using the CpnLoad relation
 * @method     ChildCpnLoadOrderQuery rightJoinWithCpnLoad() Adds a RIGHT JOIN clause and with to the query using the CpnLoad relation
 * @method     ChildCpnLoadOrderQuery innerJoinWithCpnLoad() Adds a INNER JOIN clause and with to the query using the CpnLoad relation
 *
 * @method     \CpnLoadQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCpnLoadOrder findOne(ConnectionInterface $con = null) Return the first ChildCpnLoadOrder matching the query
 * @method     ChildCpnLoadOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCpnLoadOrder matching the query, or a new ChildCpnLoadOrder object populated from the query conditions when no match is found
 *
 * @method     ChildCpnLoadOrder findOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoadOrder filtered by the LchdLoadNbr column
 * @method     ChildCpnLoadOrder findOneByLcorordrnbr(int $LcorOrdrNbr) Return the first ChildCpnLoadOrder filtered by the LcorOrdrNbr column
 * @method     ChildCpnLoadOrder findOneByLcorshipid(string $LcorShipId) Return the first ChildCpnLoadOrder filtered by the LcorShipId column
 * @method     ChildCpnLoadOrder findOneByLcorcustpo(string $LcorCustPo) Return the first ChildCpnLoadOrder filtered by the LcorCustPo column
 * @method     ChildCpnLoadOrder findOneByLcorrqstdate(string $LcorRqstDate) Return the first ChildCpnLoadOrder filtered by the LcorRqstDate column
 * @method     ChildCpnLoadOrder findOneByLcornbrofboxes(int $LcorNbrOfBoxes) Return the first ChildCpnLoadOrder filtered by the LcorNbrOfBoxes column
 * @method     ChildCpnLoadOrder findOneByLcortotwght(string $LcorTotWght) Return the first ChildCpnLoadOrder filtered by the LcorTotWght column
 * @method     ChildCpnLoadOrder findOneByLcorordrtype(string $LcorOrdrType) Return the first ChildCpnLoadOrder filtered by the LcorOrdrType column
 * @method     ChildCpnLoadOrder findOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoadOrder filtered by the DateUpdtd column
 * @method     ChildCpnLoadOrder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoadOrder filtered by the TimeUpdtd column
 * @method     ChildCpnLoadOrder findOneByDummy(string $dummy) Return the first ChildCpnLoadOrder filtered by the dummy column *

 * @method     ChildCpnLoadOrder requirePk($key, ConnectionInterface $con = null) Return the ChildCpnLoadOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOne(ConnectionInterface $con = null) Return the first ChildCpnLoadOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCpnLoadOrder requireOneByLchdloadnbr(int $LchdLoadNbr) Return the first ChildCpnLoadOrder filtered by the LchdLoadNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcorordrnbr(int $LcorOrdrNbr) Return the first ChildCpnLoadOrder filtered by the LcorOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcorshipid(string $LcorShipId) Return the first ChildCpnLoadOrder filtered by the LcorShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcorcustpo(string $LcorCustPo) Return the first ChildCpnLoadOrder filtered by the LcorCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcorrqstdate(string $LcorRqstDate) Return the first ChildCpnLoadOrder filtered by the LcorRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcornbrofboxes(int $LcorNbrOfBoxes) Return the first ChildCpnLoadOrder filtered by the LcorNbrOfBoxes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcortotwght(string $LcorTotWght) Return the first ChildCpnLoadOrder filtered by the LcorTotWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByLcorordrtype(string $LcorOrdrType) Return the first ChildCpnLoadOrder filtered by the LcorOrdrType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCpnLoadOrder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCpnLoadOrder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCpnLoadOrder requireOneByDummy(string $dummy) Return the first ChildCpnLoadOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCpnLoadOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCpnLoadOrder objects based on current ModelCriteria
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLchdloadnbr(int $LchdLoadNbr) Return ChildCpnLoadOrder objects filtered by the LchdLoadNbr column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcorordrnbr(int $LcorOrdrNbr) Return ChildCpnLoadOrder objects filtered by the LcorOrdrNbr column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcorshipid(string $LcorShipId) Return ChildCpnLoadOrder objects filtered by the LcorShipId column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcorcustpo(string $LcorCustPo) Return ChildCpnLoadOrder objects filtered by the LcorCustPo column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcorrqstdate(string $LcorRqstDate) Return ChildCpnLoadOrder objects filtered by the LcorRqstDate column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcornbrofboxes(int $LcorNbrOfBoxes) Return ChildCpnLoadOrder objects filtered by the LcorNbrOfBoxes column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcortotwght(string $LcorTotWght) Return ChildCpnLoadOrder objects filtered by the LcorTotWght column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByLcorordrtype(string $LcorOrdrType) Return ChildCpnLoadOrder objects filtered by the LcorOrdrType column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCpnLoadOrder objects filtered by the DateUpdtd column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCpnLoadOrder objects filtered by the TimeUpdtd column
 * @method     ChildCpnLoadOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildCpnLoadOrder objects filtered by the dummy column
 * @method     ChildCpnLoadOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CpnLoadOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CpnLoadOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CpnLoadOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCpnLoadOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCpnLoadOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCpnLoadOrderQuery) {
            return $criteria;
        }
        $query = new ChildCpnLoadOrderQuery();
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
     * @param array[$LchdLoadNbr, $LcorOrdrNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCpnLoadOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CpnLoadOrderTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCpnLoadOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT LchdLoadNbr, LcorOrdrNbr, LcorShipId, LcorCustPo, LcorRqstDate, LcorNbrOfBoxes, LcorTotWght, LcorOrdrType, DateUpdtd, TimeUpdtd, dummy FROM load_cpn_order WHERE LchdLoadNbr = :p0 AND LcorOrdrNbr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCpnLoadOrder $obj */
            $obj = new ChildCpnLoadOrder();
            $obj->hydrate($row);
            CpnLoadOrderTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCpnLoadOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORORDRNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CpnLoadOrderTableMap::COL_LCORORDRNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the LchdLoadNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLchdloadnbr(1234); // WHERE LchdLoadNbr = 1234
     * $query->filterByLchdloadnbr(array(12, 34)); // WHERE LchdLoadNbr IN (12, 34)
     * $query->filterByLchdloadnbr(array('min' => 12)); // WHERE LchdLoadNbr > 12
     * </code>
     *
     * @see       filterByCpnLoad()
     *
     * @param     mixed $lchdloadnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLchdloadnbr($lchdloadnbr = null, $comparison = null)
    {
        if (is_array($lchdloadnbr)) {
            $useMinMax = false;
            if (isset($lchdloadnbr['min'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $lchdloadnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lchdloadnbr['max'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $lchdloadnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $lchdloadnbr, $comparison);
    }

    /**
     * Filter the query on the LcorOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLcorordrnbr(1234); // WHERE LcorOrdrNbr = 1234
     * $query->filterByLcorordrnbr(array(12, 34)); // WHERE LcorOrdrNbr IN (12, 34)
     * $query->filterByLcorordrnbr(array('min' => 12)); // WHERE LcorOrdrNbr > 12
     * </code>
     *
     * @param     mixed $lcorordrnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcorordrnbr($lcorordrnbr = null, $comparison = null)
    {
        if (is_array($lcorordrnbr)) {
            $useMinMax = false;
            if (isset($lcorordrnbr['min'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORORDRNBR, $lcorordrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcorordrnbr['max'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORORDRNBR, $lcorordrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORORDRNBR, $lcorordrnbr, $comparison);
    }

    /**
     * Filter the query on the LcorShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByLcorshipid('fooValue');   // WHERE LcorShipId = 'fooValue'
     * $query->filterByLcorshipid('%fooValue%', Criteria::LIKE); // WHERE LcorShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcorshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcorshipid($lcorshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcorshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORSHIPID, $lcorshipid, $comparison);
    }

    /**
     * Filter the query on the LcorCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByLcorcustpo('fooValue');   // WHERE LcorCustPo = 'fooValue'
     * $query->filterByLcorcustpo('%fooValue%', Criteria::LIKE); // WHERE LcorCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcorcustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcorcustpo($lcorcustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcorcustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORCUSTPO, $lcorcustpo, $comparison);
    }

    /**
     * Filter the query on the LcorRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLcorrqstdate('fooValue');   // WHERE LcorRqstDate = 'fooValue'
     * $query->filterByLcorrqstdate('%fooValue%', Criteria::LIKE); // WHERE LcorRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcorrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcorrqstdate($lcorrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcorrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORRQSTDATE, $lcorrqstdate, $comparison);
    }

    /**
     * Filter the query on the LcorNbrOfBoxes column
     *
     * Example usage:
     * <code>
     * $query->filterByLcornbrofboxes(1234); // WHERE LcorNbrOfBoxes = 1234
     * $query->filterByLcornbrofboxes(array(12, 34)); // WHERE LcorNbrOfBoxes IN (12, 34)
     * $query->filterByLcornbrofboxes(array('min' => 12)); // WHERE LcorNbrOfBoxes > 12
     * </code>
     *
     * @param     mixed $lcornbrofboxes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcornbrofboxes($lcornbrofboxes = null, $comparison = null)
    {
        if (is_array($lcornbrofboxes)) {
            $useMinMax = false;
            if (isset($lcornbrofboxes['min'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORNBROFBOXES, $lcornbrofboxes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcornbrofboxes['max'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORNBROFBOXES, $lcornbrofboxes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORNBROFBOXES, $lcornbrofboxes, $comparison);
    }

    /**
     * Filter the query on the LcorTotWght column
     *
     * Example usage:
     * <code>
     * $query->filterByLcortotwght(1234); // WHERE LcorTotWght = 1234
     * $query->filterByLcortotwght(array(12, 34)); // WHERE LcorTotWght IN (12, 34)
     * $query->filterByLcortotwght(array('min' => 12)); // WHERE LcorTotWght > 12
     * </code>
     *
     * @param     mixed $lcortotwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcortotwght($lcortotwght = null, $comparison = null)
    {
        if (is_array($lcortotwght)) {
            $useMinMax = false;
            if (isset($lcortotwght['min'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORTOTWGHT, $lcortotwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcortotwght['max'])) {
                $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORTOTWGHT, $lcortotwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORTOTWGHT, $lcortotwght, $comparison);
    }

    /**
     * Filter the query on the LcorOrdrType column
     *
     * Example usage:
     * <code>
     * $query->filterByLcorordrtype('fooValue');   // WHERE LcorOrdrType = 'fooValue'
     * $query->filterByLcorordrtype('%fooValue%', Criteria::LIKE); // WHERE LcorOrdrType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcorordrtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByLcorordrtype($lcorordrtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcorordrtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_LCORORDRTYPE, $lcorordrtype, $comparison);
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
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CpnLoadOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \CpnLoad object
     *
     * @param \CpnLoad|ObjectCollection $cpnLoad The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function filterByCpnLoad($cpnLoad, $comparison = null)
    {
        if ($cpnLoad instanceof \CpnLoad) {
            return $this
                ->addUsingAlias(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $cpnLoad->getLchdloadnbr(), $comparison);
        } elseif ($cpnLoad instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CpnLoadOrderTableMap::COL_LCHDLOADNBR, $cpnLoad->toKeyValue('PrimaryKey', 'Lchdloadnbr'), $comparison);
        } else {
            throw new PropelException('filterByCpnLoad() only accepts arguments of type \CpnLoad or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CpnLoad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function joinCpnLoad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CpnLoad');

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
            $this->addJoinObject($join, 'CpnLoad');
        }

        return $this;
    }

    /**
     * Use the CpnLoad relation CpnLoad object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CpnLoadQuery A secondary query class using the current class as primary query
     */
    public function useCpnLoadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCpnLoad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CpnLoad', '\CpnLoadQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCpnLoadOrder $cpnLoadOrder Object to remove from the list of results
     *
     * @return $this|ChildCpnLoadOrderQuery The current query, for fluid interface
     */
    public function prune($cpnLoadOrder = null)
    {
        if ($cpnLoadOrder) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CpnLoadOrderTableMap::COL_LCHDLOADNBR), $cpnLoadOrder->getLchdloadnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CpnLoadOrderTableMap::COL_LCORORDRNBR), $cpnLoadOrder->getLcorordrnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the load_cpn_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CpnLoadOrderTableMap::clearInstancePool();
            CpnLoadOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CpnLoadOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CpnLoadOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CpnLoadOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CpnLoadOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CpnLoadOrderQuery
