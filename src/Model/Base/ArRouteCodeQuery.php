<?php

namespace Base;

use \ArRouteCode as ChildArRouteCode;
use \ArRouteCodeQuery as ChildArRouteCodeQuery;
use \Exception;
use \PDO;
use Map\ArRouteCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_rout' table.
 *
 *
 *
 * @method     ChildArRouteCodeQuery orderByArtbroute($order = Criteria::ASC) Order by the ArtbRoute column
 * @method     ChildArRouteCodeQuery orderByArtbroutedesc($order = Criteria::ASC) Order by the ArtbRouteDesc column
 * @method     ChildArRouteCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArRouteCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArRouteCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArRouteCodeQuery groupByArtbroute() Group by the ArtbRoute column
 * @method     ChildArRouteCodeQuery groupByArtbroutedesc() Group by the ArtbRouteDesc column
 * @method     ChildArRouteCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArRouteCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArRouteCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArRouteCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArRouteCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArRouteCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArRouteCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArRouteCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArRouteCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArRouteCode findOne(ConnectionInterface $con = null) Return the first ChildArRouteCode matching the query
 * @method     ChildArRouteCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArRouteCode matching the query, or a new ChildArRouteCode object populated from the query conditions when no match is found
 *
 * @method     ChildArRouteCode findOneByArtbroute(string $ArtbRoute) Return the first ChildArRouteCode filtered by the ArtbRoute column
 * @method     ChildArRouteCode findOneByArtbroutedesc(string $ArtbRouteDesc) Return the first ChildArRouteCode filtered by the ArtbRouteDesc column
 * @method     ChildArRouteCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildArRouteCode filtered by the DateUpdtd column
 * @method     ChildArRouteCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArRouteCode filtered by the TimeUpdtd column
 * @method     ChildArRouteCode findOneByDummy(string $dummy) Return the first ChildArRouteCode filtered by the dummy column *

 * @method     ChildArRouteCode requirePk($key, ConnectionInterface $con = null) Return the ChildArRouteCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArRouteCode requireOne(ConnectionInterface $con = null) Return the first ChildArRouteCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArRouteCode requireOneByArtbroute(string $ArtbRoute) Return the first ChildArRouteCode filtered by the ArtbRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArRouteCode requireOneByArtbroutedesc(string $ArtbRouteDesc) Return the first ChildArRouteCode filtered by the ArtbRouteDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArRouteCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArRouteCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArRouteCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArRouteCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArRouteCode requireOneByDummy(string $dummy) Return the first ChildArRouteCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArRouteCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArRouteCode objects based on current ModelCriteria
 * @method     ChildArRouteCode[]|ObjectCollection findByArtbroute(string $ArtbRoute) Return ChildArRouteCode objects filtered by the ArtbRoute column
 * @method     ChildArRouteCode[]|ObjectCollection findByArtbroutedesc(string $ArtbRouteDesc) Return ChildArRouteCode objects filtered by the ArtbRouteDesc column
 * @method     ChildArRouteCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArRouteCode objects filtered by the DateUpdtd column
 * @method     ChildArRouteCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArRouteCode objects filtered by the TimeUpdtd column
 * @method     ChildArRouteCode[]|ObjectCollection findByDummy(string $dummy) Return ChildArRouteCode objects filtered by the dummy column
 * @method     ChildArRouteCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArRouteCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArRouteCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArRouteCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArRouteCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArRouteCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArRouteCodeQuery) {
            return $criteria;
        }
        $query = new ChildArRouteCodeQuery();
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
     * @return ChildArRouteCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArRouteCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArRouteCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArRouteCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbRoute, ArtbRouteDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_rout WHERE ArtbRoute = :p0';
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
            /** @var ChildArRouteCode $obj */
            $obj = new ChildArRouteCode();
            $obj->hydrate($row);
            ArRouteCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArRouteCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_ARTBROUTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_ARTBROUTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroute('fooValue');   // WHERE ArtbRoute = 'fooValue'
     * $query->filterByArtbroute('%fooValue%', Criteria::LIKE); // WHERE ArtbRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByArtbroute($artbroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_ARTBROUTE, $artbroute, $comparison);
    }

    /**
     * Filter the query on the ArtbRouteDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroutedesc('fooValue');   // WHERE ArtbRouteDesc = 'fooValue'
     * $query->filterByArtbroutedesc('%fooValue%', Criteria::LIKE); // WHERE ArtbRouteDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroutedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByArtbroutedesc($artbroutedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroutedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_ARTBROUTEDESC, $artbroutedesc, $comparison);
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
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArRouteCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArRouteCode $customerRouteCode Object to remove from the list of results
     *
     * @return $this|ChildArRouteCodeQuery The current query, for fluid interface
     */
    public function prune($customerRouteCode = null)
    {
        if ($customerRouteCode) {
            $this->addUsingAlias(ArRouteCodeTableMap::COL_ARTBROUTE, $customerRouteCode->getArtbroute(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_rout table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArRouteCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArRouteCodeTableMap::clearInstancePool();
            ArRouteCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArRouteCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArRouteCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArRouteCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArRouteCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArRouteCodeQuery
