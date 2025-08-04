<?php

namespace Base;

use \ArCommissionCode as ChildArCommissionCode;
use \ArCommissionCodeQuery as ChildArCommissionCodeQuery;
use \Exception;
use \PDO;
use Map\ArCommissionCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_comm` table.
 *
 * @method     ChildArCommissionCodeQuery orderByArtbcommcode($order = Criteria::ASC) Order by the ArtbCommCode column
 * @method     ChildArCommissionCodeQuery orderByArtbcommdesc($order = Criteria::ASC) Order by the ArtbCommDesc column
 * @method     ChildArCommissionCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCommissionCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCommissionCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCommissionCodeQuery groupByArtbcommcode() Group by the ArtbCommCode column
 * @method     ChildArCommissionCodeQuery groupByArtbcommdesc() Group by the ArtbCommDesc column
 * @method     ChildArCommissionCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCommissionCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCommissionCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCommissionCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCommissionCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCommissionCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCommissionCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCommissionCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCommissionCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCommissionCodeQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildArCommissionCodeQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildArCommissionCodeQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildArCommissionCodeQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildArCommissionCodeQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCommissionCodeQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCommissionCodeQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildArCommissionCode|null findOne(?ConnectionInterface $con = null) Return the first ChildArCommissionCode matching the query
 * @method     ChildArCommissionCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArCommissionCode matching the query, or a new ChildArCommissionCode object populated from the query conditions when no match is found
 *
 * @method     ChildArCommissionCode|null findOneByArtbcommcode(string $ArtbCommCode) Return the first ChildArCommissionCode filtered by the ArtbCommCode column
 * @method     ChildArCommissionCode|null findOneByArtbcommdesc(string $ArtbCommDesc) Return the first ChildArCommissionCode filtered by the ArtbCommDesc column
 * @method     ChildArCommissionCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCommissionCode filtered by the DateUpdtd column
 * @method     ChildArCommissionCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCommissionCode filtered by the TimeUpdtd column
 * @method     ChildArCommissionCode|null findOneByDummy(string $dummy) Return the first ChildArCommissionCode filtered by the dummy column
 *
 * @method     ChildArCommissionCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildArCommissionCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCommissionCode requireOne(?ConnectionInterface $con = null) Return the first ChildArCommissionCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCommissionCode requireOneByArtbcommcode(string $ArtbCommCode) Return the first ChildArCommissionCode filtered by the ArtbCommCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCommissionCode requireOneByArtbcommdesc(string $ArtbCommDesc) Return the first ChildArCommissionCode filtered by the ArtbCommDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCommissionCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCommissionCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCommissionCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCommissionCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCommissionCode requireOneByDummy(string $dummy) Return the first ChildArCommissionCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCommissionCode[]|Collection find(?ConnectionInterface $con = null) Return ChildArCommissionCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArCommissionCode> find(?ConnectionInterface $con = null) Return ChildArCommissionCode objects based on current ModelCriteria
 *
 * @method     ChildArCommissionCode[]|Collection findByArtbcommcode(string|array<string> $ArtbCommCode) Return ChildArCommissionCode objects filtered by the ArtbCommCode column
 * @psalm-method Collection&\Traversable<ChildArCommissionCode> findByArtbcommcode(string|array<string> $ArtbCommCode) Return ChildArCommissionCode objects filtered by the ArtbCommCode column
 * @method     ChildArCommissionCode[]|Collection findByArtbcommdesc(string|array<string> $ArtbCommDesc) Return ChildArCommissionCode objects filtered by the ArtbCommDesc column
 * @psalm-method Collection&\Traversable<ChildArCommissionCode> findByArtbcommdesc(string|array<string> $ArtbCommDesc) Return ChildArCommissionCode objects filtered by the ArtbCommDesc column
 * @method     ChildArCommissionCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCommissionCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCommissionCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCommissionCode objects filtered by the DateUpdtd column
 * @method     ChildArCommissionCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCommissionCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCommissionCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCommissionCode objects filtered by the TimeUpdtd column
 * @method     ChildArCommissionCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildArCommissionCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArCommissionCode> findByDummy(string|array<string> $dummy) Return ChildArCommissionCode objects filtered by the dummy column
 *
 * @method     ChildArCommissionCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArCommissionCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArCommissionCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCommissionCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCommissionCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCommissionCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCommissionCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArCommissionCodeQuery) {
            return $criteria;
        }
        $query = new ChildArCommissionCodeQuery();
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
     * @return ChildArCommissionCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCommissionCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCommissionCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArCommissionCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbCommCode, ArtbCommDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_comm WHERE ArtbCommCode = :p0';
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
            /** @var ChildArCommissionCode $obj */
            $obj = new ChildArCommissionCode();
            $obj->hydrate($row);
            ArCommissionCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArCommissionCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_ARTBCOMMCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_ARTBCOMMCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcommcode('fooValue');   // WHERE ArtbCommCode = 'fooValue'
     * $query->filterByArtbcommcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCommCode LIKE '%fooValue%'
     * $query->filterByArtbcommcode(['foo', 'bar']); // WHERE ArtbCommCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcommcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcommcode($artbcommcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcommcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_ARTBCOMMCODE, $artbcommcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCommDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcommdesc('fooValue');   // WHERE ArtbCommDesc = 'fooValue'
     * $query->filterByArtbcommdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbCommDesc LIKE '%fooValue%'
     * $query->filterByArtbcommdesc(['foo', 'bar']); // WHERE ArtbCommDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcommdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcommdesc($artbcommdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcommdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_ARTBCOMMDESC, $artbcommdesc, $comparison);

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

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArCommissionCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            $this
                ->addUsingAlias(ArCommissionCodeTableMap::COL_ARTBCOMMCODE, $customer->getArtbcommcode(), $comparison);

            return $this;
        } elseif ($customer instanceof ObjectCollection) {
            $this
                ->useCustomerQuery()
                ->filterByPrimaryKeys($customer->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArCommissionCode $arCommissionCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arCommissionCode = null)
    {
        if ($arCommissionCode) {
            $this->addUsingAlias(ArCommissionCodeTableMap::COL_ARTBCOMMCODE, $arCommissionCode->getArtbcommcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_comm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCommissionCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCommissionCodeTableMap::clearInstancePool();
            ArCommissionCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCommissionCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCommissionCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCommissionCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCommissionCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
