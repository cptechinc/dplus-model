<?php

namespace Base;

use \BookingDayCustomer as ChildBookingDayCustomer;
use \BookingDayCustomerQuery as ChildBookingDayCustomerQuery;
use \Exception;
use \PDO;
use Map\BookingDayCustomerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_book_by_day_cust' table.
 *
 *
 *
 * @method     ChildBookingDayCustomerQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildBookingDayCustomerQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildBookingDayCustomerQuery orderByBkgcdate($order = Criteria::ASC) Order by the BkgcDate column
 * @method     ChildBookingDayCustomerQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildBookingDayCustomerQuery orderByBkgcnetamt($order = Criteria::ASC) Order by the BkgcNetAmt column
 * @method     ChildBookingDayCustomerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBookingDayCustomerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBookingDayCustomerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBookingDayCustomerQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildBookingDayCustomerQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildBookingDayCustomerQuery groupByBkgcdate() Group by the BkgcDate column
 * @method     ChildBookingDayCustomerQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildBookingDayCustomerQuery groupByBkgcnetamt() Group by the BkgcNetAmt column
 * @method     ChildBookingDayCustomerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBookingDayCustomerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBookingDayCustomerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBookingDayCustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookingDayCustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookingDayCustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookingDayCustomerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookingDayCustomerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookingDayCustomerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBookingDayCustomerQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildBookingDayCustomerQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildBookingDayCustomerQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildBookingDayCustomerQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildBookingDayCustomerQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildBookingDayCustomerQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildBookingDayCustomerQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildBookingDayCustomerQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildBookingDayCustomerQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildBookingDayCustomerQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildBookingDayCustomerQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildBookingDayCustomerQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildBookingDayCustomerQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildBookingDayCustomerQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildBookingDayCustomerQuery leftJoinSalesPerson($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingDayCustomerQuery rightJoinSalesPerson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingDayCustomerQuery innerJoinSalesPerson($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesPerson relation
 *
 * @method     ChildBookingDayCustomerQuery joinWithSalesPerson($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesPerson relation
 *
 * @method     ChildBookingDayCustomerQuery leftJoinWithSalesPerson() Adds a LEFT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingDayCustomerQuery rightJoinWithSalesPerson() Adds a RIGHT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingDayCustomerQuery innerJoinWithSalesPerson() Adds a INNER JOIN clause and with to the query using the SalesPerson relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\SalesPersonQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBookingDayCustomer findOne(ConnectionInterface $con = null) Return the first ChildBookingDayCustomer matching the query
 * @method     ChildBookingDayCustomer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBookingDayCustomer matching the query, or a new ChildBookingDayCustomer object populated from the query conditions when no match is found
 *
 * @method     ChildBookingDayCustomer findOneByArcucustid(string $ArcuCustId) Return the first ChildBookingDayCustomer filtered by the ArcuCustId column
 * @method     ChildBookingDayCustomer findOneByArstshipid(string $ArstShipId) Return the first ChildBookingDayCustomer filtered by the ArstShipId column
 * @method     ChildBookingDayCustomer findOneByBkgcdate(string $BkgcDate) Return the first ChildBookingDayCustomer filtered by the BkgcDate column
 * @method     ChildBookingDayCustomer findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingDayCustomer filtered by the ArspSalePer1 column
 * @method     ChildBookingDayCustomer findOneByBkgcnetamt(string $BkgcNetAmt) Return the first ChildBookingDayCustomer filtered by the BkgcNetAmt column
 * @method     ChildBookingDayCustomer findOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDayCustomer filtered by the DateUpdtd column
 * @method     ChildBookingDayCustomer findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDayCustomer filtered by the TimeUpdtd column
 * @method     ChildBookingDayCustomer findOneByDummy(string $dummy) Return the first ChildBookingDayCustomer filtered by the dummy column *

 * @method     ChildBookingDayCustomer requirePk($key, ConnectionInterface $con = null) Return the ChildBookingDayCustomer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOne(ConnectionInterface $con = null) Return the first ChildBookingDayCustomer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDayCustomer requireOneByArcucustid(string $ArcuCustId) Return the first ChildBookingDayCustomer filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByArstshipid(string $ArstShipId) Return the first ChildBookingDayCustomer filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByBkgcdate(string $BkgcDate) Return the first ChildBookingDayCustomer filtered by the BkgcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingDayCustomer filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByBkgcnetamt(string $BkgcNetAmt) Return the first ChildBookingDayCustomer filtered by the BkgcNetAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDayCustomer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDayCustomer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayCustomer requireOneByDummy(string $dummy) Return the first ChildBookingDayCustomer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDayCustomer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBookingDayCustomer objects based on current ModelCriteria
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildBookingDayCustomer objects filtered by the ArcuCustId column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildBookingDayCustomer objects filtered by the ArstShipId column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByBkgcdate(string $BkgcDate) Return ChildBookingDayCustomer objects filtered by the BkgcDate column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildBookingDayCustomer objects filtered by the ArspSalePer1 column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByBkgcnetamt(string $BkgcNetAmt) Return ChildBookingDayCustomer objects filtered by the BkgcNetAmt column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildBookingDayCustomer objects filtered by the DateUpdtd column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildBookingDayCustomer objects filtered by the TimeUpdtd column
 * @method     ChildBookingDayCustomer[]|ObjectCollection findByDummy(string $dummy) Return ChildBookingDayCustomer objects filtered by the dummy column
 * @method     ChildBookingDayCustomer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BookingDayCustomerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BookingDayCustomerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BookingDayCustomer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookingDayCustomerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookingDayCustomerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBookingDayCustomerQuery) {
            return $criteria;
        }
        $query = new ChildBookingDayCustomerQuery();
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
     * @param array[$ArcuCustId, $ArstShipId, $BkgcDate, $ArspSalePer1] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBookingDayCustomer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookingDayCustomerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookingDayCustomerTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildBookingDayCustomer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, BkgcDate, ArspSalePer1, BkgcNetAmt, DateUpdtd, TimeUpdtd, dummy FROM so_book_by_day_cust WHERE ArcuCustId = :p0 AND ArstShipId = :p1 AND BkgcDate = :p2 AND ArspSalePer1 = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildBookingDayCustomer $obj */
            $obj = new ChildBookingDayCustomer();
            $obj->hydrate($row);
            BookingDayCustomerTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildBookingDayCustomer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BookingDayCustomerTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayCustomerTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayCustomerTableMap::COL_BKGCDATE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayCustomerTableMap::COL_ARSPSALEPER1, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BookingDayCustomerTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BookingDayCustomerTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(BookingDayCustomerTableMap::COL_BKGCDATE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(BookingDayCustomerTableMap::COL_ARSPSALEPER1, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the BkgcDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgcdate('fooValue');   // WHERE BkgcDate = 'fooValue'
     * $query->filterByBkgcdate('%fooValue%', Criteria::LIKE); // WHERE BkgcDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkgcdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByBkgcdate($bkgcdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgcdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_BKGCDATE, $bkgcdate, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the BkgcNetAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgcnetamt(1234); // WHERE BkgcNetAmt = 1234
     * $query->filterByBkgcnetamt(array(12, 34)); // WHERE BkgcNetAmt IN (12, 34)
     * $query->filterByBkgcnetamt(array('min' => 12)); // WHERE BkgcNetAmt > 12
     * </code>
     *
     * @param     mixed $bkgcnetamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByBkgcnetamt($bkgcnetamt = null, $comparison = null)
    {
        if (is_array($bkgcnetamt)) {
            $useMinMax = false;
            if (isset($bkgcnetamt['min'])) {
                $this->addUsingAlias(BookingDayCustomerTableMap::COL_BKGCNETAMT, $bkgcnetamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgcnetamt['max'])) {
                $this->addUsingAlias(BookingDayCustomerTableMap::COL_BKGCNETAMT, $bkgcnetamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_BKGCNETAMT, $bkgcnetamt, $comparison);
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
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayCustomerTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(BookingDayCustomerTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingDayCustomerTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
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
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(BookingDayCustomerTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(BookingDayCustomerTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

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
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Filter the query by a related \SalesPerson object
     *
     * @param \SalesPerson|ObjectCollection $salesPerson The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function filterBySalesPerson($salesPerson, $comparison = null)
    {
        if ($salesPerson instanceof \SalesPerson) {
            return $this
                ->addUsingAlias(BookingDayCustomerTableMap::COL_ARSPSALEPER1, $salesPerson->getArspsaleper1(), $comparison);
        } elseif ($salesPerson instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingDayCustomerTableMap::COL_ARSPSALEPER1, $salesPerson->toKeyValue('PrimaryKey', 'Arspsaleper1'), $comparison);
        } else {
            throw new PropelException('filterBySalesPerson() only accepts arguments of type \SalesPerson or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesPerson relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function joinSalesPerson($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesPerson');

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
            $this->addJoinObject($join, 'SalesPerson');
        }

        return $this;
    }

    /**
     * Use the SalesPerson relation SalesPerson object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesPersonQuery A secondary query class using the current class as primary query
     */
    public function useSalesPersonQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesPerson($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesPerson', '\SalesPersonQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBookingDayCustomer $bookingDayCustomer Object to remove from the list of results
     *
     * @return $this|ChildBookingDayCustomerQuery The current query, for fluid interface
     */
    public function prune($bookingDayCustomer = null)
    {
        if ($bookingDayCustomer) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BookingDayCustomerTableMap::COL_ARCUCUSTID), $bookingDayCustomer->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BookingDayCustomerTableMap::COL_ARSTSHIPID), $bookingDayCustomer->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(BookingDayCustomerTableMap::COL_BKGCDATE), $bookingDayCustomer->getBkgcdate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(BookingDayCustomerTableMap::COL_ARSPSALEPER1), $bookingDayCustomer->getArspsaleper1(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_book_by_day_cust table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayCustomerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookingDayCustomerTableMap::clearInstancePool();
            BookingDayCustomerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayCustomerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookingDayCustomerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookingDayCustomerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookingDayCustomerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BookingDayCustomerQuery
