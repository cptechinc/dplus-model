<?php

namespace Base;

use \BookingDayRep as ChildBookingDayRep;
use \BookingDayRepQuery as ChildBookingDayRepQuery;
use \Exception;
use \PDO;
use Map\BookingDayRepTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_book_by_day_rep' table.
 *
 *
 *
 * @method     ChildBookingDayRepQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildBookingDayRepQuery orderByBkgrdate($order = Criteria::ASC) Order by the BkgrDate column
 * @method     ChildBookingDayRepQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildBookingDayRepQuery orderByBkgrnetamt($order = Criteria::ASC) Order by the BkgrNetAmt column
 * @method     ChildBookingDayRepQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBookingDayRepQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBookingDayRepQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBookingDayRepQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildBookingDayRepQuery groupByBkgrdate() Group by the BkgrDate column
 * @method     ChildBookingDayRepQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildBookingDayRepQuery groupByBkgrnetamt() Group by the BkgrNetAmt column
 * @method     ChildBookingDayRepQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBookingDayRepQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBookingDayRepQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBookingDayRepQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookingDayRepQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookingDayRepQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookingDayRepQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookingDayRepQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookingDayRepQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBookingDayRepQuery leftJoinSalesPerson($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingDayRepQuery rightJoinSalesPerson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingDayRepQuery innerJoinSalesPerson($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesPerson relation
 *
 * @method     ChildBookingDayRepQuery joinWithSalesPerson($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesPerson relation
 *
 * @method     ChildBookingDayRepQuery leftJoinWithSalesPerson() Adds a LEFT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingDayRepQuery rightJoinWithSalesPerson() Adds a RIGHT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingDayRepQuery innerJoinWithSalesPerson() Adds a INNER JOIN clause and with to the query using the SalesPerson relation
 *
 * @method     \SalesPersonQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBookingDayRep findOne(ConnectionInterface $con = null) Return the first ChildBookingDayRep matching the query
 * @method     ChildBookingDayRep findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBookingDayRep matching the query, or a new ChildBookingDayRep object populated from the query conditions when no match is found
 *
 * @method     ChildBookingDayRep findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingDayRep filtered by the ArspSalePer1 column
 * @method     ChildBookingDayRep findOneByBkgrdate(string $BkgrDate) Return the first ChildBookingDayRep filtered by the BkgrDate column
 * @method     ChildBookingDayRep findOneByIntbwhse(string $IntbWhse) Return the first ChildBookingDayRep filtered by the IntbWhse column
 * @method     ChildBookingDayRep findOneByBkgrnetamt(string $BkgrNetAmt) Return the first ChildBookingDayRep filtered by the BkgrNetAmt column
 * @method     ChildBookingDayRep findOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDayRep filtered by the DateUpdtd column
 * @method     ChildBookingDayRep findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDayRep filtered by the TimeUpdtd column
 * @method     ChildBookingDayRep findOneByDummy(string $dummy) Return the first ChildBookingDayRep filtered by the dummy column *

 * @method     ChildBookingDayRep requirePk($key, ConnectionInterface $con = null) Return the ChildBookingDayRep by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOne(ConnectionInterface $con = null) Return the first ChildBookingDayRep matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDayRep requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingDayRep filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOneByBkgrdate(string $BkgrDate) Return the first ChildBookingDayRep filtered by the BkgrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOneByIntbwhse(string $IntbWhse) Return the first ChildBookingDayRep filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOneByBkgrnetamt(string $BkgrNetAmt) Return the first ChildBookingDayRep filtered by the BkgrNetAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDayRep filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDayRep filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayRep requireOneByDummy(string $dummy) Return the first ChildBookingDayRep filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDayRep[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBookingDayRep objects based on current ModelCriteria
 * @method     ChildBookingDayRep[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildBookingDayRep objects filtered by the ArspSalePer1 column
 * @method     ChildBookingDayRep[]|ObjectCollection findByBkgrdate(string $BkgrDate) Return ChildBookingDayRep objects filtered by the BkgrDate column
 * @method     ChildBookingDayRep[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildBookingDayRep objects filtered by the IntbWhse column
 * @method     ChildBookingDayRep[]|ObjectCollection findByBkgrnetamt(string $BkgrNetAmt) Return ChildBookingDayRep objects filtered by the BkgrNetAmt column
 * @method     ChildBookingDayRep[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildBookingDayRep objects filtered by the DateUpdtd column
 * @method     ChildBookingDayRep[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildBookingDayRep objects filtered by the TimeUpdtd column
 * @method     ChildBookingDayRep[]|ObjectCollection findByDummy(string $dummy) Return ChildBookingDayRep objects filtered by the dummy column
 * @method     ChildBookingDayRep[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BookingDayRepQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BookingDayRepQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BookingDayRep', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookingDayRepQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookingDayRepQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBookingDayRepQuery) {
            return $criteria;
        }
        $query = new ChildBookingDayRepQuery();
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
     * @param array[$ArspSalePer1, $BkgrDate] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBookingDayRep|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookingDayRepTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookingDayRepTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildBookingDayRep A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArspSalePer1, BkgrDate, IntbWhse, BkgrNetAmt, DateUpdtd, TimeUpdtd, dummy FROM so_book_by_day_rep WHERE ArspSalePer1 = :p0 AND BkgrDate = :p1';
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
            /** @var ChildBookingDayRep $obj */
            $obj = new ChildBookingDayRep();
            $obj->hydrate($row);
            BookingDayRepTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildBookingDayRep|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BookingDayRepTableMap::COL_ARSPSALEPER1, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayRepTableMap::COL_BKGRDATE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BookingDayRepTableMap::COL_ARSPSALEPER1, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BookingDayRepTableMap::COL_BKGRDATE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the BkgrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgrdate('fooValue');   // WHERE BkgrDate = 'fooValue'
     * $query->filterByBkgrdate('%fooValue%', Criteria::LIKE); // WHERE BkgrDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkgrdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByBkgrdate($bkgrdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgrdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_BKGRDATE, $bkgrdate, $comparison);
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the BkgrNetAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgrnetamt(1234); // WHERE BkgrNetAmt = 1234
     * $query->filterByBkgrnetamt(array(12, 34)); // WHERE BkgrNetAmt IN (12, 34)
     * $query->filterByBkgrnetamt(array('min' => 12)); // WHERE BkgrNetAmt > 12
     * </code>
     *
     * @param     mixed $bkgrnetamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByBkgrnetamt($bkgrnetamt = null, $comparison = null)
    {
        if (is_array($bkgrnetamt)) {
            $useMinMax = false;
            if (isset($bkgrnetamt['min'])) {
                $this->addUsingAlias(BookingDayRepTableMap::COL_BKGRNETAMT, $bkgrnetamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgrnetamt['max'])) {
                $this->addUsingAlias(BookingDayRepTableMap::COL_BKGRNETAMT, $bkgrnetamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_BKGRNETAMT, $bkgrnetamt, $comparison);
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDayRepTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \SalesPerson object
     *
     * @param \SalesPerson|ObjectCollection $salesPerson The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function filterBySalesPerson($salesPerson, $comparison = null)
    {
        if ($salesPerson instanceof \SalesPerson) {
            return $this
                ->addUsingAlias(BookingDayRepTableMap::COL_ARSPSALEPER1, $salesPerson->getArspsaleper1(), $comparison);
        } elseif ($salesPerson instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingDayRepTableMap::COL_ARSPSALEPER1, $salesPerson->toKeyValue('PrimaryKey', 'Arspsaleper1'), $comparison);
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
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
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
     * @param   ChildBookingDayRep $bookingDayRep Object to remove from the list of results
     *
     * @return $this|ChildBookingDayRepQuery The current query, for fluid interface
     */
    public function prune($bookingDayRep = null)
    {
        if ($bookingDayRep) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BookingDayRepTableMap::COL_ARSPSALEPER1), $bookingDayRep->getArspsaleper1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BookingDayRepTableMap::COL_BKGRDATE), $bookingDayRep->getBkgrdate(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_book_by_day_rep table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayRepTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookingDayRepTableMap::clearInstancePool();
            BookingDayRepTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayRepTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookingDayRepTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookingDayRepTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookingDayRepTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BookingDayRepQuery
