<?php

namespace Base;

use \SysLoginGroup as ChildSysLoginGroup;
use \SysLoginGroupQuery as ChildSysLoginGroupQuery;
use \Exception;
use \PDO;
use Map\SysLoginGroupTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `sys_login_group` table.
 *
 * @method     ChildSysLoginGroupQuery orderByQtbllgrpcode($order = Criteria::ASC) Order by the QtblLgrpCode column
 * @method     ChildSysLoginGroupQuery orderByQtbllgrpdesc($order = Criteria::ASC) Order by the QtblLgrpDesc column
 * @method     ChildSysLoginGroupQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSysLoginGroupQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSysLoginGroupQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSysLoginGroupQuery groupByQtbllgrpcode() Group by the QtblLgrpCode column
 * @method     ChildSysLoginGroupQuery groupByQtbllgrpdesc() Group by the QtblLgrpDesc column
 * @method     ChildSysLoginGroupQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSysLoginGroupQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSysLoginGroupQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSysLoginGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSysLoginGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSysLoginGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSysLoginGroupQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSysLoginGroupQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSysLoginGroupQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSysLoginGroupQuery leftJoinDplusUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DplusUser relation
 * @method     ChildSysLoginGroupQuery rightJoinDplusUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DplusUser relation
 * @method     ChildSysLoginGroupQuery innerJoinDplusUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DplusUser relation
 *
 * @method     ChildSysLoginGroupQuery joinWithDplusUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DplusUser relation
 *
 * @method     ChildSysLoginGroupQuery leftJoinWithDplusUser() Adds a LEFT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildSysLoginGroupQuery rightJoinWithDplusUser() Adds a RIGHT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildSysLoginGroupQuery innerJoinWithDplusUser() Adds a INNER JOIN clause and with to the query using the DplusUser relation
 *
 * @method     \DplusUserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSysLoginGroup|null findOne(?ConnectionInterface $con = null) Return the first ChildSysLoginGroup matching the query
 * @method     ChildSysLoginGroup findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSysLoginGroup matching the query, or a new ChildSysLoginGroup object populated from the query conditions when no match is found
 *
 * @method     ChildSysLoginGroup|null findOneByQtbllgrpcode(string $QtblLgrpCode) Return the first ChildSysLoginGroup filtered by the QtblLgrpCode column
 * @method     ChildSysLoginGroup|null findOneByQtbllgrpdesc(string $QtblLgrpDesc) Return the first ChildSysLoginGroup filtered by the QtblLgrpDesc column
 * @method     ChildSysLoginGroup|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginGroup filtered by the DateUpdtd column
 * @method     ChildSysLoginGroup|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginGroup filtered by the TimeUpdtd column
 * @method     ChildSysLoginGroup|null findOneByDummy(string $dummy) Return the first ChildSysLoginGroup filtered by the dummy column
 *
 * @method     ChildSysLoginGroup requirePk($key, ?ConnectionInterface $con = null) Return the ChildSysLoginGroup by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOne(?ConnectionInterface $con = null) Return the first ChildSysLoginGroup matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginGroup requireOneByQtbllgrpcode(string $QtblLgrpCode) Return the first ChildSysLoginGroup filtered by the QtblLgrpCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByQtbllgrpdesc(string $QtblLgrpDesc) Return the first ChildSysLoginGroup filtered by the QtblLgrpDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginGroup filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginGroup filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByDummy(string $dummy) Return the first ChildSysLoginGroup filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginGroup[]|Collection find(?ConnectionInterface $con = null) Return ChildSysLoginGroup objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSysLoginGroup> find(?ConnectionInterface $con = null) Return ChildSysLoginGroup objects based on current ModelCriteria
 *
 * @method     ChildSysLoginGroup[]|Collection findByQtbllgrpcode(string|array<string> $QtblLgrpCode) Return ChildSysLoginGroup objects filtered by the QtblLgrpCode column
 * @psalm-method Collection&\Traversable<ChildSysLoginGroup> findByQtbllgrpcode(string|array<string> $QtblLgrpCode) Return ChildSysLoginGroup objects filtered by the QtblLgrpCode column
 * @method     ChildSysLoginGroup[]|Collection findByQtbllgrpdesc(string|array<string> $QtblLgrpDesc) Return ChildSysLoginGroup objects filtered by the QtblLgrpDesc column
 * @psalm-method Collection&\Traversable<ChildSysLoginGroup> findByQtbllgrpdesc(string|array<string> $QtblLgrpDesc) Return ChildSysLoginGroup objects filtered by the QtblLgrpDesc column
 * @method     ChildSysLoginGroup[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSysLoginGroup objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSysLoginGroup> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSysLoginGroup objects filtered by the DateUpdtd column
 * @method     ChildSysLoginGroup[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSysLoginGroup objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSysLoginGroup> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSysLoginGroup objects filtered by the TimeUpdtd column
 * @method     ChildSysLoginGroup[]|Collection findByDummy(string|array<string> $dummy) Return ChildSysLoginGroup objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSysLoginGroup> findByDummy(string|array<string> $dummy) Return ChildSysLoginGroup objects filtered by the dummy column
 *
 * @method     ChildSysLoginGroup[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSysLoginGroup> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SysLoginGroupQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SysLoginGroupQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SysLoginGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSysLoginGroupQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSysLoginGroupQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSysLoginGroupQuery) {
            return $criteria;
        }
        $query = new ChildSysLoginGroupQuery();
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
     * @return ChildSysLoginGroup|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SysLoginGroupTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SysLoginGroupTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSysLoginGroup A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QtblLgrpCode, QtblLgrpDesc, DateUpdtd, TimeUpdtd, dummy FROM sys_login_group WHERE QtblLgrpCode = :p0';
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
            /** @var ChildSysLoginGroup $obj */
            $obj = new ChildSysLoginGroup();
            $obj->hydrate($row);
            SysLoginGroupTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSysLoginGroup|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the QtblLgrpCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtbllgrpcode('fooValue');   // WHERE QtblLgrpCode = 'fooValue'
     * $query->filterByQtbllgrpcode('%fooValue%', Criteria::LIKE); // WHERE QtblLgrpCode LIKE '%fooValue%'
     * $query->filterByQtbllgrpcode(['foo', 'bar']); // WHERE QtblLgrpCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtbllgrpcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtbllgrpcode($qtbllgrpcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtbllgrpcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $qtbllgrpcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtblLgrpDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQtbllgrpdesc('fooValue');   // WHERE QtblLgrpDesc = 'fooValue'
     * $query->filterByQtbllgrpdesc('%fooValue%', Criteria::LIKE); // WHERE QtblLgrpDesc LIKE '%fooValue%'
     * $query->filterByQtbllgrpdesc(['foo', 'bar']); // WHERE QtblLgrpDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtbllgrpdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtbllgrpdesc($qtbllgrpdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtbllgrpdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPDESC, $qtbllgrpdesc, $comparison);

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

        $this->addUsingAlias(SysLoginGroupTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SysLoginGroupTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SysLoginGroupTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \DplusUser object
     *
     * @param \DplusUser|ObjectCollection $dplusUser the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDplusUser($dplusUser, ?string $comparison = null)
    {
        if ($dplusUser instanceof \DplusUser) {
            $this
                ->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $dplusUser->getUsrclogingroup(), $comparison);

            return $this;
        } elseif ($dplusUser instanceof ObjectCollection) {
            $this
                ->useDplusUserQuery()
                ->filterByPrimaryKeys($dplusUser->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByDplusUser() only accepts arguments of type \DplusUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DplusUser relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinDplusUser(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DplusUser');

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
            $this->addJoinObject($join, 'DplusUser');
        }

        return $this;
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DplusUserQuery A secondary query class using the current class as primary query
     */
    public function useDplusUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDplusUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DplusUser', '\DplusUserQuery');
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @param callable(\DplusUserQuery):\DplusUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDplusUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useDplusUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to DplusUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \DplusUserQuery The inner query object of the EXISTS statement
     */
    public function useDplusUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useExistsQuery('DplusUser', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to DplusUser table for a NOT EXISTS query.
     *
     * @see useDplusUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \DplusUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useDplusUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useExistsQuery('DplusUser', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to DplusUser table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \DplusUserQuery The inner query object of the IN statement
     */
    public function useInDplusUserQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useInQuery('DplusUser', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to DplusUser table for a NOT IN query.
     *
     * @see useDplusUserInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \DplusUserQuery The inner query object of the NOT IN statement
     */
    public function useNotInDplusUserQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useInQuery('DplusUser', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSysLoginGroup $sysLoginGroup Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($sysLoginGroup = null)
    {
        if ($sysLoginGroup) {
            $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $sysLoginGroup->getQtbllgrpcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_login_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginGroupTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysLoginGroupTableMap::clearInstancePool();
            SysLoginGroupTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginGroupTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SysLoginGroupTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SysLoginGroupTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SysLoginGroupTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
