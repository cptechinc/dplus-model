<?php

namespace Base;

use \InvSpecialCode as ChildInvSpecialCode;
use \InvSpecialCodeQuery as ChildInvSpecialCodeQuery;
use \Exception;
use \PDO;
use Map\InvSpecialCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_spit_code' table.
 *
 *
 *
 * @method     ChildInvSpecialCodeQuery orderByIntbspitcode($order = Criteria::ASC) Order by the IntbSpitCode column
 * @method     ChildInvSpecialCodeQuery orderByIntbspitdesc($order = Criteria::ASC) Order by the IntbSpitDesc column
 * @method     ChildInvSpecialCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvSpecialCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvSpecialCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvSpecialCodeQuery groupByIntbspitcode() Group by the IntbSpitCode column
 * @method     ChildInvSpecialCodeQuery groupByIntbspitdesc() Group by the IntbSpitDesc column
 * @method     ChildInvSpecialCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvSpecialCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvSpecialCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvSpecialCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvSpecialCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvSpecialCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvSpecialCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvSpecialCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvSpecialCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvSpecialCode findOne(ConnectionInterface $con = null) Return the first ChildInvSpecialCode matching the query
 * @method     ChildInvSpecialCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvSpecialCode matching the query, or a new ChildInvSpecialCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvSpecialCode findOneByIntbspitcode(string $IntbSpitCode) Return the first ChildInvSpecialCode filtered by the IntbSpitCode column
 * @method     ChildInvSpecialCode findOneByIntbspitdesc(string $IntbSpitDesc) Return the first ChildInvSpecialCode filtered by the IntbSpitDesc column
 * @method     ChildInvSpecialCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSpecialCode filtered by the DateUpdtd column
 * @method     ChildInvSpecialCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSpecialCode filtered by the TimeUpdtd column
 * @method     ChildInvSpecialCode findOneByDummy(string $dummy) Return the first ChildInvSpecialCode filtered by the dummy column *

 * @method     ChildInvSpecialCode requirePk($key, ConnectionInterface $con = null) Return the ChildInvSpecialCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSpecialCode requireOne(ConnectionInterface $con = null) Return the first ChildInvSpecialCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSpecialCode requireOneByIntbspitcode(string $IntbSpitCode) Return the first ChildInvSpecialCode filtered by the IntbSpitCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSpecialCode requireOneByIntbspitdesc(string $IntbSpitDesc) Return the first ChildInvSpecialCode filtered by the IntbSpitDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSpecialCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSpecialCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSpecialCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSpecialCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSpecialCode requireOneByDummy(string $dummy) Return the first ChildInvSpecialCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSpecialCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvSpecialCode objects based on current ModelCriteria
 * @method     ChildInvSpecialCode[]|ObjectCollection findByIntbspitcode(string $IntbSpitCode) Return ChildInvSpecialCode objects filtered by the IntbSpitCode column
 * @method     ChildInvSpecialCode[]|ObjectCollection findByIntbspitdesc(string $IntbSpitDesc) Return ChildInvSpecialCode objects filtered by the IntbSpitDesc column
 * @method     ChildInvSpecialCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvSpecialCode objects filtered by the DateUpdtd column
 * @method     ChildInvSpecialCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvSpecialCode objects filtered by the TimeUpdtd column
 * @method     ChildInvSpecialCode[]|ObjectCollection findByDummy(string $dummy) Return ChildInvSpecialCode objects filtered by the dummy column
 * @method     ChildInvSpecialCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvSpecialCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvSpecialCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvSpecialCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvSpecialCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvSpecialCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvSpecialCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvSpecialCodeQuery();
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
     * @return ChildInvSpecialCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvSpecialCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvSpecialCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvSpecialCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbSpitCode, IntbSpitDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_spit_code WHERE IntbSpitCode = :p0';
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
            /** @var ChildInvSpecialCode $obj */
            $obj = new ChildInvSpecialCode();
            $obj->hydrate($row);
            InvSpecialCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvSpecialCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_INTBSPITCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_INTBSPITCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbSpitCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbspitcode('fooValue');   // WHERE IntbSpitCode = 'fooValue'
     * $query->filterByIntbspitcode('%fooValue%', Criteria::LIKE); // WHERE IntbSpitCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbspitcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByIntbspitcode($intbspitcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbspitcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_INTBSPITCODE, $intbspitcode, $comparison);
    }

    /**
     * Filter the query on the IntbSpitDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbspitdesc('fooValue');   // WHERE IntbSpitDesc = 'fooValue'
     * $query->filterByIntbspitdesc('%fooValue%', Criteria::LIKE); // WHERE IntbSpitDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbspitdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByIntbspitdesc($intbspitdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbspitdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_INTBSPITDESC, $intbspitdesc, $comparison);
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
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSpecialCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvSpecialCode $invSpecialCode Object to remove from the list of results
     *
     * @return $this|ChildInvSpecialCodeQuery The current query, for fluid interface
     */
    public function prune($invSpecialCode = null)
    {
        if ($invSpecialCode) {
            $this->addUsingAlias(InvSpecialCodeTableMap::COL_INTBSPITCODE, $invSpecialCode->getIntbspitcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_spit_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSpecialCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvSpecialCodeTableMap::clearInstancePool();
            InvSpecialCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSpecialCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvSpecialCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvSpecialCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvSpecialCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvSpecialCodeQuery
