<?php

namespace Base;

use \ArWriteOffCode as ChildArWriteOffCode;
use \ArWriteOffCodeQuery as ChildArWriteOffCodeQuery;
use \Exception;
use \PDO;
use Map\ArWriteOffCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_woff' table.
 *
 *
 *
 * @method     ChildArWriteOffCodeQuery orderByArtbwoffcode($order = Criteria::ASC) Order by the ArtbWoffCode column
 * @method     ChildArWriteOffCodeQuery orderByArtbwoffdesc($order = Criteria::ASC) Order by the ArtbWoffDesc column
 * @method     ChildArWriteOffCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArWriteOffCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArWriteOffCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArWriteOffCodeQuery groupByArtbwoffcode() Group by the ArtbWoffCode column
 * @method     ChildArWriteOffCodeQuery groupByArtbwoffdesc() Group by the ArtbWoffDesc column
 * @method     ChildArWriteOffCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArWriteOffCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArWriteOffCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArWriteOffCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArWriteOffCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArWriteOffCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArWriteOffCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArWriteOffCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArWriteOffCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArWriteOffCode findOne(ConnectionInterface $con = null) Return the first ChildArWriteOffCode matching the query
 * @method     ChildArWriteOffCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArWriteOffCode matching the query, or a new ChildArWriteOffCode object populated from the query conditions when no match is found
 *
 * @method     ChildArWriteOffCode findOneByArtbwoffcode(string $ArtbWoffCode) Return the first ChildArWriteOffCode filtered by the ArtbWoffCode column
 * @method     ChildArWriteOffCode findOneByArtbwoffdesc(string $ArtbWoffDesc) Return the first ChildArWriteOffCode filtered by the ArtbWoffDesc column
 * @method     ChildArWriteOffCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildArWriteOffCode filtered by the DateUpdtd column
 * @method     ChildArWriteOffCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArWriteOffCode filtered by the TimeUpdtd column
 * @method     ChildArWriteOffCode findOneByDummy(string $dummy) Return the first ChildArWriteOffCode filtered by the dummy column *

 * @method     ChildArWriteOffCode requirePk($key, ConnectionInterface $con = null) Return the ChildArWriteOffCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArWriteOffCode requireOne(ConnectionInterface $con = null) Return the first ChildArWriteOffCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArWriteOffCode requireOneByArtbwoffcode(string $ArtbWoffCode) Return the first ChildArWriteOffCode filtered by the ArtbWoffCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArWriteOffCode requireOneByArtbwoffdesc(string $ArtbWoffDesc) Return the first ChildArWriteOffCode filtered by the ArtbWoffDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArWriteOffCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArWriteOffCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArWriteOffCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArWriteOffCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArWriteOffCode requireOneByDummy(string $dummy) Return the first ChildArWriteOffCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArWriteOffCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArWriteOffCode objects based on current ModelCriteria
 * @method     ChildArWriteOffCode[]|ObjectCollection findByArtbwoffcode(string $ArtbWoffCode) Return ChildArWriteOffCode objects filtered by the ArtbWoffCode column
 * @method     ChildArWriteOffCode[]|ObjectCollection findByArtbwoffdesc(string $ArtbWoffDesc) Return ChildArWriteOffCode objects filtered by the ArtbWoffDesc column
 * @method     ChildArWriteOffCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArWriteOffCode objects filtered by the DateUpdtd column
 * @method     ChildArWriteOffCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArWriteOffCode objects filtered by the TimeUpdtd column
 * @method     ChildArWriteOffCode[]|ObjectCollection findByDummy(string $dummy) Return ChildArWriteOffCode objects filtered by the dummy column
 * @method     ChildArWriteOffCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArWriteOffCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArWriteOffCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArWriteOffCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArWriteOffCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArWriteOffCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArWriteOffCodeQuery) {
            return $criteria;
        }
        $query = new ChildArWriteOffCodeQuery();
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
     * @return ChildArWriteOffCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArWriteOffCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArWriteOffCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArWriteOffCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbWoffCode, ArtbWoffDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_woff WHERE ArtbWoffCode = :p0';
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
            /** @var ChildArWriteOffCode $obj */
            $obj = new ChildArWriteOffCode();
            $obj->hydrate($row);
            ArWriteOffCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArWriteOffCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_ARTBWOFFCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_ARTBWOFFCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbWoffCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbwoffcode('fooValue');   // WHERE ArtbWoffCode = 'fooValue'
     * $query->filterByArtbwoffcode('%fooValue%', Criteria::LIKE); // WHERE ArtbWoffCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbwoffcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByArtbwoffcode($artbwoffcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbwoffcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_ARTBWOFFCODE, $artbwoffcode, $comparison);
    }

    /**
     * Filter the query on the ArtbWoffDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbwoffdesc('fooValue');   // WHERE ArtbWoffDesc = 'fooValue'
     * $query->filterByArtbwoffdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbWoffDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbwoffdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByArtbwoffdesc($artbwoffdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbwoffdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_ARTBWOFFDESC, $artbwoffdesc, $comparison);
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
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArWriteOffCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArWriteOffCode $arWriteOffCode Object to remove from the list of results
     *
     * @return $this|ChildArWriteOffCodeQuery The current query, for fluid interface
     */
    public function prune($arWriteOffCode = null)
    {
        if ($arWriteOffCode) {
            $this->addUsingAlias(ArWriteOffCodeTableMap::COL_ARTBWOFFCODE, $arWriteOffCode->getArtbwoffcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_woff table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArWriteOffCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArWriteOffCodeTableMap::clearInstancePool();
            ArWriteOffCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArWriteOffCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArWriteOffCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArWriteOffCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArWriteOffCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArWriteOffCodeQuery
