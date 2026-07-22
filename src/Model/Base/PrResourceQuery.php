<?php

namespace Base;

use \PrResource as ChildPrResource;
use \PrResourceQuery as ChildPrResourceQuery;
use \Exception;
use \PDO;
use Map\PrResourceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `pr_resource_cd` table.
 *
 * @method     ChildPrResourceQuery orderByPmtbrsrcid($order = Criteria::ASC) Order by the PmtbRsrcId column
 * @method     ChildPrResourceQuery orderByPmtbrsrcname($order = Criteria::ASC) Order by the PmtbRsrcName column
 * @method     ChildPrResourceQuery orderByPmtbdeptid($order = Criteria::ASC) Order by the PmtbDeptId column
 * @method     ChildPrResourceQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPrResourceQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPrResourceQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPrResourceQuery groupByPmtbrsrcid() Group by the PmtbRsrcId column
 * @method     ChildPrResourceQuery groupByPmtbrsrcname() Group by the PmtbRsrcName column
 * @method     ChildPrResourceQuery groupByPmtbdeptid() Group by the PmtbDeptId column
 * @method     ChildPrResourceQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPrResourceQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPrResourceQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPrResourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPrResourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPrResourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPrResourceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPrResourceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPrResourceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPrResourceQuery leftJoinPrWorkCenter($relationAlias = null) Adds a LEFT JOIN clause to the query using the PrWorkCenter relation
 * @method     ChildPrResourceQuery rightJoinPrWorkCenter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PrWorkCenter relation
 * @method     ChildPrResourceQuery innerJoinPrWorkCenter($relationAlias = null) Adds a INNER JOIN clause to the query using the PrWorkCenter relation
 *
 * @method     ChildPrResourceQuery joinWithPrWorkCenter($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PrWorkCenter relation
 *
 * @method     ChildPrResourceQuery leftJoinWithPrWorkCenter() Adds a LEFT JOIN clause and with to the query using the PrWorkCenter relation
 * @method     ChildPrResourceQuery rightJoinWithPrWorkCenter() Adds a RIGHT JOIN clause and with to the query using the PrWorkCenter relation
 * @method     ChildPrResourceQuery innerJoinWithPrWorkCenter() Adds a INNER JOIN clause and with to the query using the PrWorkCenter relation
 *
 * @method     \PrWorkCenterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPrResource|null findOne(?ConnectionInterface $con = null) Return the first ChildPrResource matching the query
 * @method     ChildPrResource findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildPrResource matching the query, or a new ChildPrResource object populated from the query conditions when no match is found
 *
 * @method     ChildPrResource|null findOneByPmtbrsrcid(string $PmtbRsrcId) Return the first ChildPrResource filtered by the PmtbRsrcId column
 * @method     ChildPrResource|null findOneByPmtbrsrcname(string $PmtbRsrcName) Return the first ChildPrResource filtered by the PmtbRsrcName column
 * @method     ChildPrResource|null findOneByPmtbdeptid(string $PmtbDeptId) Return the first ChildPrResource filtered by the PmtbDeptId column
 * @method     ChildPrResource|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildPrResource filtered by the DateUpdtd column
 * @method     ChildPrResource|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPrResource filtered by the TimeUpdtd column
 * @method     ChildPrResource|null findOneByDummy(string $dummy) Return the first ChildPrResource filtered by the dummy column
 *
 * @method     ChildPrResource requirePk($key, ?ConnectionInterface $con = null) Return the ChildPrResource by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrResource requireOne(?ConnectionInterface $con = null) Return the first ChildPrResource matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPrResource requireOneByPmtbrsrcid(string $PmtbRsrcId) Return the first ChildPrResource filtered by the PmtbRsrcId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrResource requireOneByPmtbrsrcname(string $PmtbRsrcName) Return the first ChildPrResource filtered by the PmtbRsrcName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrResource requireOneByPmtbdeptid(string $PmtbDeptId) Return the first ChildPrResource filtered by the PmtbDeptId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrResource requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPrResource filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrResource requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPrResource filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrResource requireOneByDummy(string $dummy) Return the first ChildPrResource filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPrResource[]|Collection find(?ConnectionInterface $con = null) Return ChildPrResource objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildPrResource> find(?ConnectionInterface $con = null) Return ChildPrResource objects based on current ModelCriteria
 *
 * @method     ChildPrResource[]|Collection findByPmtbrsrcid(string|array<string> $PmtbRsrcId) Return ChildPrResource objects filtered by the PmtbRsrcId column
 * @psalm-method Collection&\Traversable<ChildPrResource> findByPmtbrsrcid(string|array<string> $PmtbRsrcId) Return ChildPrResource objects filtered by the PmtbRsrcId column
 * @method     ChildPrResource[]|Collection findByPmtbrsrcname(string|array<string> $PmtbRsrcName) Return ChildPrResource objects filtered by the PmtbRsrcName column
 * @psalm-method Collection&\Traversable<ChildPrResource> findByPmtbrsrcname(string|array<string> $PmtbRsrcName) Return ChildPrResource objects filtered by the PmtbRsrcName column
 * @method     ChildPrResource[]|Collection findByPmtbdeptid(string|array<string> $PmtbDeptId) Return ChildPrResource objects filtered by the PmtbDeptId column
 * @psalm-method Collection&\Traversable<ChildPrResource> findByPmtbdeptid(string|array<string> $PmtbDeptId) Return ChildPrResource objects filtered by the PmtbDeptId column
 * @method     ChildPrResource[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPrResource objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildPrResource> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildPrResource objects filtered by the DateUpdtd column
 * @method     ChildPrResource[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPrResource objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildPrResource> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildPrResource objects filtered by the TimeUpdtd column
 * @method     ChildPrResource[]|Collection findByDummy(string|array<string> $dummy) Return ChildPrResource objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildPrResource> findByDummy(string|array<string> $dummy) Return ChildPrResource objects filtered by the dummy column
 *
 * @method     ChildPrResource[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPrResource> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class PrResourceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PrResourceQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PrResource', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPrResourceQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPrResourceQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildPrResourceQuery) {
            return $criteria;
        }
        $query = new ChildPrResourceQuery();
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
     * @return ChildPrResource|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PrResourceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PrResourceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPrResource A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PmtbRsrcId, PmtbRsrcName, PmtbDeptId, DateUpdtd, TimeUpdtd, dummy FROM pr_resource_cd WHERE PmtbRsrcId = :p0';
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
            /** @var ChildPrResource $obj */
            $obj = new ChildPrResource();
            $obj->hydrate($row);
            PrResourceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPrResource|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(PrResourceTableMap::COL_PMTBRSRCID, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(PrResourceTableMap::COL_PMTBRSRCID, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the PmtbRsrcId column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbrsrcid('fooValue');   // WHERE PmtbRsrcId = 'fooValue'
     * $query->filterByPmtbrsrcid('%fooValue%', Criteria::LIKE); // WHERE PmtbRsrcId LIKE '%fooValue%'
     * $query->filterByPmtbrsrcid(['foo', 'bar']); // WHERE PmtbRsrcId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbrsrcid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbrsrcid($pmtbrsrcid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbrsrcid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PrResourceTableMap::COL_PMTBRSRCID, $pmtbrsrcid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbRsrcName column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbrsrcname('fooValue');   // WHERE PmtbRsrcName = 'fooValue'
     * $query->filterByPmtbrsrcname('%fooValue%', Criteria::LIKE); // WHERE PmtbRsrcName LIKE '%fooValue%'
     * $query->filterByPmtbrsrcname(['foo', 'bar']); // WHERE PmtbRsrcName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbrsrcname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbrsrcname($pmtbrsrcname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbrsrcname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PrResourceTableMap::COL_PMTBRSRCNAME, $pmtbrsrcname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PmtbDeptId column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbdeptid('fooValue');   // WHERE PmtbDeptId = 'fooValue'
     * $query->filterByPmtbdeptid('%fooValue%', Criteria::LIKE); // WHERE PmtbDeptId LIKE '%fooValue%'
     * $query->filterByPmtbdeptid(['foo', 'bar']); // WHERE PmtbDeptId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pmtbdeptid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPmtbdeptid($pmtbdeptid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbdeptid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(PrResourceTableMap::COL_PMTBDEPTID, $pmtbdeptid, $comparison);

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

        $this->addUsingAlias(PrResourceTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(PrResourceTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(PrResourceTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \PrWorkCenter object
     *
     * @param \PrWorkCenter|ObjectCollection $prWorkCenter The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrWorkCenter($prWorkCenter, ?string $comparison = null)
    {
        if ($prWorkCenter instanceof \PrWorkCenter) {
            return $this
                ->addUsingAlias(PrResourceTableMap::COL_PMTBDEPTID, $prWorkCenter->getPmtbdeptid(), $comparison);
        } elseif ($prWorkCenter instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(PrResourceTableMap::COL_PMTBDEPTID, $prWorkCenter->toKeyValue('PrimaryKey', 'Pmtbdeptid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPrWorkCenter() only accepts arguments of type \PrWorkCenter or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PrWorkCenter relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPrWorkCenter(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PrWorkCenter');

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
            $this->addJoinObject($join, 'PrWorkCenter');
        }

        return $this;
    }

    /**
     * Use the PrWorkCenter relation PrWorkCenter object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PrWorkCenterQuery A secondary query class using the current class as primary query
     */
    public function usePrWorkCenterQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPrWorkCenter($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PrWorkCenter', '\PrWorkCenterQuery');
    }

    /**
     * Use the PrWorkCenter relation PrWorkCenter object
     *
     * @param callable(\PrWorkCenterQuery):\PrWorkCenterQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPrWorkCenterQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->usePrWorkCenterQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PrWorkCenter table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PrWorkCenterQuery The inner query object of the EXISTS statement
     */
    public function usePrWorkCenterExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PrWorkCenterQuery */
        $q = $this->useExistsQuery('PrWorkCenter', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PrWorkCenter table for a NOT EXISTS query.
     *
     * @see usePrWorkCenterExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PrWorkCenterQuery The inner query object of the NOT EXISTS statement
     */
    public function usePrWorkCenterNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PrWorkCenterQuery */
        $q = $this->useExistsQuery('PrWorkCenter', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PrWorkCenter table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PrWorkCenterQuery The inner query object of the IN statement
     */
    public function useInPrWorkCenterQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PrWorkCenterQuery */
        $q = $this->useInQuery('PrWorkCenter', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PrWorkCenter table for a NOT IN query.
     *
     * @see usePrWorkCenterInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PrWorkCenterQuery The inner query object of the NOT IN statement
     */
    public function useNotInPrWorkCenterQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PrWorkCenterQuery */
        $q = $this->useInQuery('PrWorkCenter', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildPrResource $prResource Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($prResource = null)
    {
        if ($prResource) {
            $this->addUsingAlias(PrResourceTableMap::COL_PMTBRSRCID, $prResource->getPmtbrsrcid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pr_resource_cd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PrResourceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PrResourceTableMap::clearInstancePool();
            PrResourceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PrResourceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PrResourceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PrResourceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PrResourceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
