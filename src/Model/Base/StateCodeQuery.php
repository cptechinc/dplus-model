<?php

namespace Base;

use \StateCode as ChildStateCode;
use \StateCodeQuery as ChildStateCodeQuery;
use \Exception;
use \PDO;
use Map\StateCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `state_codes` table.
 *
 * @method     ChildStateCodeQuery orderByStatid($order = Criteria::ASC) Order by the StatId column
 * @method     ChildStateCodeQuery orderByStatname($order = Criteria::ASC) Order by the StatName column
 * @method     ChildStateCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildStateCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildStateCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildStateCodeQuery groupByStatid() Group by the StatId column
 * @method     ChildStateCodeQuery groupByStatname() Group by the StatName column
 * @method     ChildStateCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildStateCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildStateCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildStateCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStateCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStateCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStateCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildStateCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildStateCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildStateCode|null findOne(?ConnectionInterface $con = null) Return the first ChildStateCode matching the query
 * @method     ChildStateCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildStateCode matching the query, or a new ChildStateCode object populated from the query conditions when no match is found
 *
 * @method     ChildStateCode|null findOneByStatid(string $StatId) Return the first ChildStateCode filtered by the StatId column
 * @method     ChildStateCode|null findOneByStatname(string $StatName) Return the first ChildStateCode filtered by the StatName column
 * @method     ChildStateCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildStateCode filtered by the DateUpdtd column
 * @method     ChildStateCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildStateCode filtered by the TimeUpdtd column
 * @method     ChildStateCode|null findOneByDummy(string $dummy) Return the first ChildStateCode filtered by the dummy column
 *
 * @method     ChildStateCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildStateCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStateCode requireOne(?ConnectionInterface $con = null) Return the first ChildStateCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStateCode requireOneByStatid(string $StatId) Return the first ChildStateCode filtered by the StatId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStateCode requireOneByStatname(string $StatName) Return the first ChildStateCode filtered by the StatName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStateCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildStateCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStateCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildStateCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStateCode requireOneByDummy(string $dummy) Return the first ChildStateCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStateCode[]|Collection find(?ConnectionInterface $con = null) Return ChildStateCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildStateCode> find(?ConnectionInterface $con = null) Return ChildStateCode objects based on current ModelCriteria
 *
 * @method     ChildStateCode[]|Collection findByStatid(string|array<string> $StatId) Return ChildStateCode objects filtered by the StatId column
 * @psalm-method Collection&\Traversable<ChildStateCode> findByStatid(string|array<string> $StatId) Return ChildStateCode objects filtered by the StatId column
 * @method     ChildStateCode[]|Collection findByStatname(string|array<string> $StatName) Return ChildStateCode objects filtered by the StatName column
 * @psalm-method Collection&\Traversable<ChildStateCode> findByStatname(string|array<string> $StatName) Return ChildStateCode objects filtered by the StatName column
 * @method     ChildStateCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildStateCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildStateCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildStateCode objects filtered by the DateUpdtd column
 * @method     ChildStateCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildStateCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildStateCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildStateCode objects filtered by the TimeUpdtd column
 * @method     ChildStateCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildStateCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildStateCode> findByDummy(string|array<string> $dummy) Return ChildStateCode objects filtered by the dummy column
 *
 * @method     ChildStateCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildStateCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class StateCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\StateCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\StateCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStateCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStateCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildStateCodeQuery) {
            return $criteria;
        }
        $query = new ChildStateCodeQuery();
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
     * @return ChildStateCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(StateCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = StateCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildStateCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT StatId, StatName, DateUpdtd, TimeUpdtd, dummy FROM state_codes WHERE StatId = :p0';
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
            /** @var ChildStateCode $obj */
            $obj = new ChildStateCode();
            $obj->hydrate($row);
            StateCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildStateCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(StateCodeTableMap::COL_STATID, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(StateCodeTableMap::COL_STATID, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the StatId column
     *
     * Example usage:
     * <code>
     * $query->filterByStatid('fooValue');   // WHERE StatId = 'fooValue'
     * $query->filterByStatid('%fooValue%', Criteria::LIKE); // WHERE StatId LIKE '%fooValue%'
     * $query->filterByStatid(['foo', 'bar']); // WHERE StatId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $statid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatid($statid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StateCodeTableMap::COL_STATID, $statid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the StatName column
     *
     * Example usage:
     * <code>
     * $query->filterByStatname('fooValue');   // WHERE StatName = 'fooValue'
     * $query->filterByStatname('%fooValue%', Criteria::LIKE); // WHERE StatName LIKE '%fooValue%'
     * $query->filterByStatname(['foo', 'bar']); // WHERE StatName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $statname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatname($statname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(StateCodeTableMap::COL_STATNAME, $statname, $comparison);

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

        $this->addUsingAlias(StateCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(StateCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(StateCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildStateCode $stateCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($stateCode = null)
    {
        if ($stateCode) {
            $this->addUsingAlias(StateCodeTableMap::COL_STATID, $stateCode->getStatid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the state_codes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StateCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StateCodeTableMap::clearInstancePool();
            StateCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(StateCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StateCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StateCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StateCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
