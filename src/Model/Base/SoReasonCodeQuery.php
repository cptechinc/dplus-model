<?php

namespace Base;

use \SoReasonCode as ChildSoReasonCode;
use \SoReasonCodeQuery as ChildSoReasonCodeQuery;
use \Exception;
use \PDO;
use Map\SoReasonCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_reas_code` table.
 *
 * @method     ChildSoReasonCodeQuery orderByOetbreascode($order = Criteria::ASC) Order by the OetbReasCode column
 * @method     ChildSoReasonCodeQuery orderByOetbreasdesc($order = Criteria::ASC) Order by the OetbReasDesc column
 * @method     ChildSoReasonCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoReasonCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoReasonCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoReasonCodeQuery groupByOetbreascode() Group by the OetbReasCode column
 * @method     ChildSoReasonCodeQuery groupByOetbreasdesc() Group by the OetbReasDesc column
 * @method     ChildSoReasonCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoReasonCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoReasonCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoReasonCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoReasonCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoReasonCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoReasonCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoReasonCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoReasonCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoReasonCode|null findOne(?ConnectionInterface $con = null) Return the first ChildSoReasonCode matching the query
 * @method     ChildSoReasonCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSoReasonCode matching the query, or a new ChildSoReasonCode object populated from the query conditions when no match is found
 *
 * @method     ChildSoReasonCode|null findOneByOetbreascode(string $OetbReasCode) Return the first ChildSoReasonCode filtered by the OetbReasCode column
 * @method     ChildSoReasonCode|null findOneByOetbreasdesc(string $OetbReasDesc) Return the first ChildSoReasonCode filtered by the OetbReasDesc column
 * @method     ChildSoReasonCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoReasonCode filtered by the DateUpdtd column
 * @method     ChildSoReasonCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoReasonCode filtered by the TimeUpdtd column
 * @method     ChildSoReasonCode|null findOneByDummy(string $dummy) Return the first ChildSoReasonCode filtered by the dummy column
 *
 * @method     ChildSoReasonCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildSoReasonCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoReasonCode requireOne(?ConnectionInterface $con = null) Return the first ChildSoReasonCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoReasonCode requireOneByOetbreascode(string $OetbReasCode) Return the first ChildSoReasonCode filtered by the OetbReasCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoReasonCode requireOneByOetbreasdesc(string $OetbReasDesc) Return the first ChildSoReasonCode filtered by the OetbReasDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoReasonCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoReasonCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoReasonCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoReasonCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoReasonCode requireOneByDummy(string $dummy) Return the first ChildSoReasonCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoReasonCode[]|Collection find(?ConnectionInterface $con = null) Return ChildSoReasonCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSoReasonCode> find(?ConnectionInterface $con = null) Return ChildSoReasonCode objects based on current ModelCriteria
 *
 * @method     ChildSoReasonCode[]|Collection findByOetbreascode(string|array<string> $OetbReasCode) Return ChildSoReasonCode objects filtered by the OetbReasCode column
 * @psalm-method Collection&\Traversable<ChildSoReasonCode> findByOetbreascode(string|array<string> $OetbReasCode) Return ChildSoReasonCode objects filtered by the OetbReasCode column
 * @method     ChildSoReasonCode[]|Collection findByOetbreasdesc(string|array<string> $OetbReasDesc) Return ChildSoReasonCode objects filtered by the OetbReasDesc column
 * @psalm-method Collection&\Traversable<ChildSoReasonCode> findByOetbreasdesc(string|array<string> $OetbReasDesc) Return ChildSoReasonCode objects filtered by the OetbReasDesc column
 * @method     ChildSoReasonCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSoReasonCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSoReasonCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSoReasonCode objects filtered by the DateUpdtd column
 * @method     ChildSoReasonCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSoReasonCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSoReasonCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSoReasonCode objects filtered by the TimeUpdtd column
 * @method     ChildSoReasonCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildSoReasonCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSoReasonCode> findByDummy(string|array<string> $dummy) Return ChildSoReasonCode objects filtered by the dummy column
 *
 * @method     ChildSoReasonCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSoReasonCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SoReasonCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoReasonCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoReasonCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoReasonCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoReasonCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSoReasonCodeQuery) {
            return $criteria;
        }
        $query = new ChildSoReasonCodeQuery();
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
     * @return ChildSoReasonCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoReasonCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoReasonCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSoReasonCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbReasCode, OetbReasDesc, DateUpdtd, TimeUpdtd, dummy FROM so_reas_code WHERE OetbReasCode = :p0';
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
            /** @var ChildSoReasonCode $obj */
            $obj = new ChildSoReasonCode();
            $obj->hydrate($row);
            SoReasonCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSoReasonCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SoReasonCodeTableMap::COL_OETBREASCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SoReasonCodeTableMap::COL_OETBREASCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the OetbReasCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbreascode('fooValue');   // WHERE OetbReasCode = 'fooValue'
     * $query->filterByOetbreascode('%fooValue%', Criteria::LIKE); // WHERE OetbReasCode LIKE '%fooValue%'
     * $query->filterByOetbreascode(['foo', 'bar']); // WHERE OetbReasCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbreascode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbreascode($oetbreascode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbreascode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoReasonCodeTableMap::COL_OETBREASCODE, $oetbreascode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbReasDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbreasdesc('fooValue');   // WHERE OetbReasDesc = 'fooValue'
     * $query->filterByOetbreasdesc('%fooValue%', Criteria::LIKE); // WHERE OetbReasDesc LIKE '%fooValue%'
     * $query->filterByOetbreasdesc(['foo', 'bar']); // WHERE OetbReasDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbreasdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbreasdesc($oetbreasdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbreasdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoReasonCodeTableMap::COL_OETBREASDESC, $oetbreasdesc, $comparison);

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

        $this->addUsingAlias(SoReasonCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SoReasonCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SoReasonCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSoReasonCode $soReasonCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($soReasonCode = null)
    {
        if ($soReasonCode) {
            $this->addUsingAlias(SoReasonCodeTableMap::COL_OETBREASCODE, $soReasonCode->getOetbreascode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_reas_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoReasonCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoReasonCodeTableMap::clearInstancePool();
            SoReasonCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoReasonCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoReasonCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoReasonCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoReasonCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
