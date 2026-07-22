<?php

namespace Base;

use \InvProductLineCode as ChildInvProductLineCode;
use \InvProductLineCodeQuery as ChildInvProductLineCodeQuery;
use \Exception;
use \PDO;
use Map\InvProductLineCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_plne_code` table.
 *
 * @method     ChildInvProductLineCodeQuery orderByIntbplnecode($order = Criteria::ASC) Order by the IntbPlneCode column
 * @method     ChildInvProductLineCodeQuery orderByIntbplnedesc($order = Criteria::ASC) Order by the IntbPlneDesc column
 * @method     ChildInvProductLineCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvProductLineCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvProductLineCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvProductLineCodeQuery groupByIntbplnecode() Group by the IntbPlneCode column
 * @method     ChildInvProductLineCodeQuery groupByIntbplnedesc() Group by the IntbPlneDesc column
 * @method     ChildInvProductLineCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvProductLineCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvProductLineCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvProductLineCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvProductLineCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvProductLineCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvProductLineCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvProductLineCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvProductLineCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvProductLineCode|null findOne(?ConnectionInterface $con = null) Return the first ChildInvProductLineCode matching the query
 * @method     ChildInvProductLineCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvProductLineCode matching the query, or a new ChildInvProductLineCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvProductLineCode|null findOneByIntbplnecode(string $IntbPlneCode) Return the first ChildInvProductLineCode filtered by the IntbPlneCode column
 * @method     ChildInvProductLineCode|null findOneByIntbplnedesc(string $IntbPlneDesc) Return the first ChildInvProductLineCode filtered by the IntbPlneDesc column
 * @method     ChildInvProductLineCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvProductLineCode filtered by the DateUpdtd column
 * @method     ChildInvProductLineCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvProductLineCode filtered by the TimeUpdtd column
 * @method     ChildInvProductLineCode|null findOneByDummy(string $dummy) Return the first ChildInvProductLineCode filtered by the dummy column
 *
 * @method     ChildInvProductLineCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvProductLineCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvProductLineCode requireOne(?ConnectionInterface $con = null) Return the first ChildInvProductLineCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvProductLineCode requireOneByIntbplnecode(string $IntbPlneCode) Return the first ChildInvProductLineCode filtered by the IntbPlneCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvProductLineCode requireOneByIntbplnedesc(string $IntbPlneDesc) Return the first ChildInvProductLineCode filtered by the IntbPlneDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvProductLineCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvProductLineCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvProductLineCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvProductLineCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvProductLineCode requireOneByDummy(string $dummy) Return the first ChildInvProductLineCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvProductLineCode[]|Collection find(?ConnectionInterface $con = null) Return ChildInvProductLineCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvProductLineCode> find(?ConnectionInterface $con = null) Return ChildInvProductLineCode objects based on current ModelCriteria
 *
 * @method     ChildInvProductLineCode[]|Collection findByIntbplnecode(string|array<string> $IntbPlneCode) Return ChildInvProductLineCode objects filtered by the IntbPlneCode column
 * @psalm-method Collection&\Traversable<ChildInvProductLineCode> findByIntbplnecode(string|array<string> $IntbPlneCode) Return ChildInvProductLineCode objects filtered by the IntbPlneCode column
 * @method     ChildInvProductLineCode[]|Collection findByIntbplnedesc(string|array<string> $IntbPlneDesc) Return ChildInvProductLineCode objects filtered by the IntbPlneDesc column
 * @psalm-method Collection&\Traversable<ChildInvProductLineCode> findByIntbplnedesc(string|array<string> $IntbPlneDesc) Return ChildInvProductLineCode objects filtered by the IntbPlneDesc column
 * @method     ChildInvProductLineCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvProductLineCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvProductLineCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvProductLineCode objects filtered by the DateUpdtd column
 * @method     ChildInvProductLineCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvProductLineCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvProductLineCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvProductLineCode objects filtered by the TimeUpdtd column
 * @method     ChildInvProductLineCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvProductLineCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvProductLineCode> findByDummy(string|array<string> $dummy) Return ChildInvProductLineCode objects filtered by the dummy column
 *
 * @method     ChildInvProductLineCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvProductLineCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvProductLineCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvProductLineCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvProductLineCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvProductLineCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvProductLineCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvProductLineCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvProductLineCodeQuery();
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
     * @return ChildInvProductLineCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvProductLineCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvProductLineCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvProductLineCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbPlneCode, IntbPlneDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_plne_code WHERE IntbPlneCode = :p0';
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
            /** @var ChildInvProductLineCode $obj */
            $obj = new ChildInvProductLineCode();
            $obj->hydrate($row);
            InvProductLineCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvProductLineCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_INTBPLNECODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_INTBPLNECODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IntbPlneCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbplnecode('fooValue');   // WHERE IntbPlneCode = 'fooValue'
     * $query->filterByIntbplnecode('%fooValue%', Criteria::LIKE); // WHERE IntbPlneCode LIKE '%fooValue%'
     * $query->filterByIntbplnecode(['foo', 'bar']); // WHERE IntbPlneCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbplnecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbplnecode($intbplnecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbplnecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_INTBPLNECODE, $intbplnecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbPlneDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbplnedesc('fooValue');   // WHERE IntbPlneDesc = 'fooValue'
     * $query->filterByIntbplnedesc('%fooValue%', Criteria::LIKE); // WHERE IntbPlneDesc LIKE '%fooValue%'
     * $query->filterByIntbplnedesc(['foo', 'bar']); // WHERE IntbPlneDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbplnedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbplnedesc($intbplnedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbplnedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_INTBPLNEDESC, $intbplnedesc, $comparison);

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

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvProductLineCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvProductLineCode $invProductLineCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invProductLineCode = null)
    {
        if ($invProductLineCode) {
            $this->addUsingAlias(InvProductLineCodeTableMap::COL_INTBPLNECODE, $invProductLineCode->getIntbplnecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_plne_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvProductLineCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvProductLineCodeTableMap::clearInstancePool();
            InvProductLineCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvProductLineCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvProductLineCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvProductLineCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvProductLineCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
