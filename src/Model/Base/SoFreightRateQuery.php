<?php

namespace Base;

use \SoFreightRate as ChildSoFreightRate;
use \SoFreightRateQuery as ChildSoFreightRateQuery;
use \Exception;
use \PDO;
use Map\SoFreightRateTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_frtrate' table.
 *
 *
 *
 * @method     ChildSoFreightRateQuery orderBySfrtratecode($order = Criteria::ASC) Order by the SfrtRateCode column
 * @method     ChildSoFreightRateQuery orderBySfrtratedesc($order = Criteria::ASC) Order by the SfrtRateDesc column
 * @method     ChildSoFreightRateQuery orderBySfrtaddon($order = Criteria::ASC) Order by the SfrtAddOn column
 * @method     ChildSoFreightRateQuery orderBySfrttripchrg($order = Criteria::ASC) Order by the SfrtTripChrg column
 * @method     ChildSoFreightRateQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoFreightRateQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoFreightRateQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoFreightRateQuery groupBySfrtratecode() Group by the SfrtRateCode column
 * @method     ChildSoFreightRateQuery groupBySfrtratedesc() Group by the SfrtRateDesc column
 * @method     ChildSoFreightRateQuery groupBySfrtaddon() Group by the SfrtAddOn column
 * @method     ChildSoFreightRateQuery groupBySfrttripchrg() Group by the SfrtTripChrg column
 * @method     ChildSoFreightRateQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoFreightRateQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoFreightRateQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoFreightRateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoFreightRateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoFreightRateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoFreightRateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoFreightRateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoFreightRateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoFreightRateQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildSoFreightRateQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildSoFreightRateQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildSoFreightRateQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildSoFreightRateQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildSoFreightRateQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildSoFreightRateQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSoFreightRate findOne(ConnectionInterface $con = null) Return the first ChildSoFreightRate matching the query
 * @method     ChildSoFreightRate findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoFreightRate matching the query, or a new ChildSoFreightRate object populated from the query conditions when no match is found
 *
 * @method     ChildSoFreightRate findOneBySfrtratecode(string $SfrtRateCode) Return the first ChildSoFreightRate filtered by the SfrtRateCode column
 * @method     ChildSoFreightRate findOneBySfrtratedesc(string $SfrtRateDesc) Return the first ChildSoFreightRate filtered by the SfrtRateDesc column
 * @method     ChildSoFreightRate findOneBySfrtaddon(string $SfrtAddOn) Return the first ChildSoFreightRate filtered by the SfrtAddOn column
 * @method     ChildSoFreightRate findOneBySfrttripchrg(string $SfrtTripChrg) Return the first ChildSoFreightRate filtered by the SfrtTripChrg column
 * @method     ChildSoFreightRate findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoFreightRate filtered by the DateUpdtd column
 * @method     ChildSoFreightRate findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoFreightRate filtered by the TimeUpdtd column
 * @method     ChildSoFreightRate findOneByDummy(string $dummy) Return the first ChildSoFreightRate filtered by the dummy column *

 * @method     ChildSoFreightRate requirePk($key, ConnectionInterface $con = null) Return the ChildSoFreightRate by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOne(ConnectionInterface $con = null) Return the first ChildSoFreightRate matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoFreightRate requireOneBySfrtratecode(string $SfrtRateCode) Return the first ChildSoFreightRate filtered by the SfrtRateCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOneBySfrtratedesc(string $SfrtRateDesc) Return the first ChildSoFreightRate filtered by the SfrtRateDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOneBySfrtaddon(string $SfrtAddOn) Return the first ChildSoFreightRate filtered by the SfrtAddOn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOneBySfrttripchrg(string $SfrtTripChrg) Return the first ChildSoFreightRate filtered by the SfrtTripChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoFreightRate filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoFreightRate filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoFreightRate requireOneByDummy(string $dummy) Return the first ChildSoFreightRate filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoFreightRate[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoFreightRate objects based on current ModelCriteria
 * @method     ChildSoFreightRate[]|ObjectCollection findBySfrtratecode(string $SfrtRateCode) Return ChildSoFreightRate objects filtered by the SfrtRateCode column
 * @method     ChildSoFreightRate[]|ObjectCollection findBySfrtratedesc(string $SfrtRateDesc) Return ChildSoFreightRate objects filtered by the SfrtRateDesc column
 * @method     ChildSoFreightRate[]|ObjectCollection findBySfrtaddon(string $SfrtAddOn) Return ChildSoFreightRate objects filtered by the SfrtAddOn column
 * @method     ChildSoFreightRate[]|ObjectCollection findBySfrttripchrg(string $SfrtTripChrg) Return ChildSoFreightRate objects filtered by the SfrtTripChrg column
 * @method     ChildSoFreightRate[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoFreightRate objects filtered by the DateUpdtd column
 * @method     ChildSoFreightRate[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoFreightRate objects filtered by the TimeUpdtd column
 * @method     ChildSoFreightRate[]|ObjectCollection findByDummy(string $dummy) Return ChildSoFreightRate objects filtered by the dummy column
 * @method     ChildSoFreightRate[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoFreightRateQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoFreightRateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoFreightRate', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoFreightRateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoFreightRateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoFreightRateQuery) {
            return $criteria;
        }
        $query = new ChildSoFreightRateQuery();
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
     * @return ChildSoFreightRate|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoFreightRateTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoFreightRateTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSoFreightRate A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT SfrtRateCode, SfrtRateDesc, SfrtAddOn, SfrtTripChrg, DateUpdtd, TimeUpdtd, dummy FROM so_frtrate WHERE SfrtRateCode = :p0';
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
            /** @var ChildSoFreightRate $obj */
            $obj = new ChildSoFreightRate();
            $obj->hydrate($row);
            SoFreightRateTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSoFreightRate|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTRATECODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTRATECODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SfrtRateCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySfrtratecode('fooValue');   // WHERE SfrtRateCode = 'fooValue'
     * $query->filterBySfrtratecode('%fooValue%', Criteria::LIKE); // WHERE SfrtRateCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sfrtratecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterBySfrtratecode($sfrtratecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sfrtratecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTRATECODE, $sfrtratecode, $comparison);
    }

    /**
     * Filter the query on the SfrtRateDesc column
     *
     * Example usage:
     * <code>
     * $query->filterBySfrtratedesc('fooValue');   // WHERE SfrtRateDesc = 'fooValue'
     * $query->filterBySfrtratedesc('%fooValue%', Criteria::LIKE); // WHERE SfrtRateDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sfrtratedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterBySfrtratedesc($sfrtratedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sfrtratedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTRATEDESC, $sfrtratedesc, $comparison);
    }

    /**
     * Filter the query on the SfrtAddOn column
     *
     * Example usage:
     * <code>
     * $query->filterBySfrtaddon(1234); // WHERE SfrtAddOn = 1234
     * $query->filterBySfrtaddon(array(12, 34)); // WHERE SfrtAddOn IN (12, 34)
     * $query->filterBySfrtaddon(array('min' => 12)); // WHERE SfrtAddOn > 12
     * </code>
     *
     * @param     mixed $sfrtaddon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterBySfrtaddon($sfrtaddon = null, $comparison = null)
    {
        if (is_array($sfrtaddon)) {
            $useMinMax = false;
            if (isset($sfrtaddon['min'])) {
                $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTADDON, $sfrtaddon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sfrtaddon['max'])) {
                $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTADDON, $sfrtaddon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTADDON, $sfrtaddon, $comparison);
    }

    /**
     * Filter the query on the SfrtTripChrg column
     *
     * Example usage:
     * <code>
     * $query->filterBySfrttripchrg(1234); // WHERE SfrtTripChrg = 1234
     * $query->filterBySfrttripchrg(array(12, 34)); // WHERE SfrtTripChrg IN (12, 34)
     * $query->filterBySfrttripchrg(array('min' => 12)); // WHERE SfrtTripChrg > 12
     * </code>
     *
     * @param     mixed $sfrttripchrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterBySfrttripchrg($sfrttripchrg = null, $comparison = null)
    {
        if (is_array($sfrttripchrg)) {
            $useMinMax = false;
            if (isset($sfrttripchrg['min'])) {
                $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTTRIPCHRG, $sfrttripchrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sfrttripchrg['max'])) {
                $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTTRIPCHRG, $sfrttripchrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTTRIPCHRG, $sfrttripchrg, $comparison);
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
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoFreightRateTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(SoFreightRateTableMap::COL_SFRTRATECODE, $customer->getArcuchrgfrt(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            return $this
                ->useCustomerQuery()
                ->filterByPrimaryKeys($customer->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSoFreightRate $soFreightRate Object to remove from the list of results
     *
     * @return $this|ChildSoFreightRateQuery The current query, for fluid interface
     */
    public function prune($soFreightRate = null)
    {
        if ($soFreightRate) {
            $this->addUsingAlias(SoFreightRateTableMap::COL_SFRTRATECODE, $soFreightRate->getSfrtratecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_frtrate table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoFreightRateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoFreightRateTableMap::clearInstancePool();
            SoFreightRateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoFreightRateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoFreightRateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoFreightRateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoFreightRateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoFreightRateQuery
