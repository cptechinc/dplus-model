<?php

namespace Base;

use \SysLoginRole as ChildSysLoginRole;
use \SysLoginRoleQuery as ChildSysLoginRoleQuery;
use \Exception;
use \PDO;
use Map\SysLoginRoleTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `sys_login_role` table.
 *
 * @method     ChildSysLoginRoleQuery orderByQtblrolecode($order = Criteria::ASC) Order by the QtblRoleCode column
 * @method     ChildSysLoginRoleQuery orderByQtblroledesc($order = Criteria::ASC) Order by the QtblRoleDesc column
 * @method     ChildSysLoginRoleQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSysLoginRoleQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSysLoginRoleQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSysLoginRoleQuery groupByQtblrolecode() Group by the QtblRoleCode column
 * @method     ChildSysLoginRoleQuery groupByQtblroledesc() Group by the QtblRoleDesc column
 * @method     ChildSysLoginRoleQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSysLoginRoleQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSysLoginRoleQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSysLoginRoleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSysLoginRoleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSysLoginRoleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSysLoginRoleQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSysLoginRoleQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSysLoginRoleQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSysLoginRoleQuery leftJoinDplusUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery rightJoinDplusUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery innerJoinDplusUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DplusUser relation
 *
 * @method     ChildSysLoginRoleQuery joinWithDplusUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DplusUser relation
 *
 * @method     ChildSysLoginRoleQuery leftJoinWithDplusUser() Adds a LEFT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery rightJoinWithDplusUser() Adds a RIGHT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery innerJoinWithDplusUser() Adds a INNER JOIN clause and with to the query using the DplusUser relation
 *
 * @method     \DplusUserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSysLoginRole|null findOne(?ConnectionInterface $con = null) Return the first ChildSysLoginRole matching the query
 * @method     ChildSysLoginRole findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSysLoginRole matching the query, or a new ChildSysLoginRole object populated from the query conditions when no match is found
 *
 * @method     ChildSysLoginRole|null findOneByQtblrolecode(string $QtblRoleCode) Return the first ChildSysLoginRole filtered by the QtblRoleCode column
 * @method     ChildSysLoginRole|null findOneByQtblroledesc(string $QtblRoleDesc) Return the first ChildSysLoginRole filtered by the QtblRoleDesc column
 * @method     ChildSysLoginRole|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginRole filtered by the DateUpdtd column
 * @method     ChildSysLoginRole|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginRole filtered by the TimeUpdtd column
 * @method     ChildSysLoginRole|null findOneByDummy(string $dummy) Return the first ChildSysLoginRole filtered by the dummy column
 *
 * @method     ChildSysLoginRole requirePk($key, ?ConnectionInterface $con = null) Return the ChildSysLoginRole by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOne(?ConnectionInterface $con = null) Return the first ChildSysLoginRole matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginRole requireOneByQtblrolecode(string $QtblRoleCode) Return the first ChildSysLoginRole filtered by the QtblRoleCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByQtblroledesc(string $QtblRoleDesc) Return the first ChildSysLoginRole filtered by the QtblRoleDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginRole filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginRole filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByDummy(string $dummy) Return the first ChildSysLoginRole filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginRole[]|Collection find(?ConnectionInterface $con = null) Return ChildSysLoginRole objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSysLoginRole> find(?ConnectionInterface $con = null) Return ChildSysLoginRole objects based on current ModelCriteria
 *
 * @method     ChildSysLoginRole[]|Collection findByQtblrolecode(string|array<string> $QtblRoleCode) Return ChildSysLoginRole objects filtered by the QtblRoleCode column
 * @psalm-method Collection&\Traversable<ChildSysLoginRole> findByQtblrolecode(string|array<string> $QtblRoleCode) Return ChildSysLoginRole objects filtered by the QtblRoleCode column
 * @method     ChildSysLoginRole[]|Collection findByQtblroledesc(string|array<string> $QtblRoleDesc) Return ChildSysLoginRole objects filtered by the QtblRoleDesc column
 * @psalm-method Collection&\Traversable<ChildSysLoginRole> findByQtblroledesc(string|array<string> $QtblRoleDesc) Return ChildSysLoginRole objects filtered by the QtblRoleDesc column
 * @method     ChildSysLoginRole[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSysLoginRole objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSysLoginRole> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSysLoginRole objects filtered by the DateUpdtd column
 * @method     ChildSysLoginRole[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSysLoginRole objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSysLoginRole> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSysLoginRole objects filtered by the TimeUpdtd column
 * @method     ChildSysLoginRole[]|Collection findByDummy(string|array<string> $dummy) Return ChildSysLoginRole objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSysLoginRole> findByDummy(string|array<string> $dummy) Return ChildSysLoginRole objects filtered by the dummy column
 *
 * @method     ChildSysLoginRole[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSysLoginRole> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SysLoginRoleQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SysLoginRoleQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SysLoginRole', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSysLoginRoleQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSysLoginRoleQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSysLoginRoleQuery) {
            return $criteria;
        }
        $query = new ChildSysLoginRoleQuery();
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
     * @return ChildSysLoginRole|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SysLoginRoleTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SysLoginRoleTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSysLoginRole A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QtblRoleCode, QtblRoleDesc, DateUpdtd, TimeUpdtd, dummy FROM sys_login_role WHERE QtblRoleCode = :p0';
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
            /** @var ChildSysLoginRole $obj */
            $obj = new ChildSysLoginRole();
            $obj->hydrate($row);
            SysLoginRoleTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSysLoginRole|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the QtblRoleCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtblrolecode('fooValue');   // WHERE QtblRoleCode = 'fooValue'
     * $query->filterByQtblrolecode('%fooValue%', Criteria::LIKE); // WHERE QtblRoleCode LIKE '%fooValue%'
     * $query->filterByQtblrolecode(['foo', 'bar']); // WHERE QtblRoleCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtblrolecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtblrolecode($qtblrolecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtblrolecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $qtblrolecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QtblRoleDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQtblroledesc('fooValue');   // WHERE QtblRoleDesc = 'fooValue'
     * $query->filterByQtblroledesc('%fooValue%', Criteria::LIKE); // WHERE QtblRoleDesc LIKE '%fooValue%'
     * $query->filterByQtblroledesc(['foo', 'bar']); // WHERE QtblRoleDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qtblroledesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQtblroledesc($qtblroledesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtblroledesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLEDESC, $qtblroledesc, $comparison);

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

        $this->addUsingAlias(SysLoginRoleTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SysLoginRoleTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SysLoginRoleTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $dplusUser->getUsrcloginrole(), $comparison);

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
     * @param ChildSysLoginRole $sysLoginRole Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($sysLoginRole = null)
    {
        if ($sysLoginRole) {
            $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $sysLoginRole->getQtblrolecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_login_role table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginRoleTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysLoginRoleTableMap::clearInstancePool();
            SysLoginRoleTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginRoleTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SysLoginRoleTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SysLoginRoleTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SysLoginRoleTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
