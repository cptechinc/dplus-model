<?php

namespace Base;

use \StandardIndustClass as ChildStandardIndustClass;
use \StandardIndustClassQuery as ChildStandardIndustClassQuery;
use \Exception;
use \PDO;
use Map\StandardIndustClassTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_sic' table.
 *
 *
 *
 * @method     ChildStandardIndustClassQuery orderByArtbsiccode($order = Criteria::ASC) Order by the ArtbSicCode column
 * @method     ChildStandardIndustClassQuery orderByArtbsicdesc($order = Criteria::ASC) Order by the ArtbSicDesc column
 * @method     ChildStandardIndustClassQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildStandardIndustClassQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildStandardIndustClassQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildStandardIndustClassQuery groupByArtbsiccode() Group by the ArtbSicCode column
 * @method     ChildStandardIndustClassQuery groupByArtbsicdesc() Group by the ArtbSicDesc column
 * @method     ChildStandardIndustClassQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildStandardIndustClassQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildStandardIndustClassQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildStandardIndustClassQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStandardIndustClassQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStandardIndustClassQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStandardIndustClassQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildStandardIndustClassQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildStandardIndustClassQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildStandardIndustClass findOne(ConnectionInterface $con = null) Return the first ChildStandardIndustClass matching the query
 * @method     ChildStandardIndustClass findOneOrCreate(ConnectionInterface $con = null) Return the first ChildStandardIndustClass matching the query, or a new ChildStandardIndustClass object populated from the query conditions when no match is found
 *
 * @method     ChildStandardIndustClass findOneByArtbsiccode(string $ArtbSicCode) Return the first ChildStandardIndustClass filtered by the ArtbSicCode column
 * @method     ChildStandardIndustClass findOneByArtbsicdesc(string $ArtbSicDesc) Return the first ChildStandardIndustClass filtered by the ArtbSicDesc column
 * @method     ChildStandardIndustClass findOneByDateupdtd(string $DateUpdtd) Return the first ChildStandardIndustClass filtered by the DateUpdtd column
 * @method     ChildStandardIndustClass findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildStandardIndustClass filtered by the TimeUpdtd column
 * @method     ChildStandardIndustClass findOneByDummy(string $dummy) Return the first ChildStandardIndustClass filtered by the dummy column *

 * @method     ChildStandardIndustClass requirePk($key, ConnectionInterface $con = null) Return the ChildStandardIndustClass by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStandardIndustClass requireOne(ConnectionInterface $con = null) Return the first ChildStandardIndustClass matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStandardIndustClass requireOneByArtbsiccode(string $ArtbSicCode) Return the first ChildStandardIndustClass filtered by the ArtbSicCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStandardIndustClass requireOneByArtbsicdesc(string $ArtbSicDesc) Return the first ChildStandardIndustClass filtered by the ArtbSicDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStandardIndustClass requireOneByDateupdtd(string $DateUpdtd) Return the first ChildStandardIndustClass filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStandardIndustClass requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildStandardIndustClass filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStandardIndustClass requireOneByDummy(string $dummy) Return the first ChildStandardIndustClass filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStandardIndustClass[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildStandardIndustClass objects based on current ModelCriteria
 * @method     ChildStandardIndustClass[]|ObjectCollection findByArtbsiccode(string $ArtbSicCode) Return ChildStandardIndustClass objects filtered by the ArtbSicCode column
 * @method     ChildStandardIndustClass[]|ObjectCollection findByArtbsicdesc(string $ArtbSicDesc) Return ChildStandardIndustClass objects filtered by the ArtbSicDesc column
 * @method     ChildStandardIndustClass[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildStandardIndustClass objects filtered by the DateUpdtd column
 * @method     ChildStandardIndustClass[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildStandardIndustClass objects filtered by the TimeUpdtd column
 * @method     ChildStandardIndustClass[]|ObjectCollection findByDummy(string $dummy) Return ChildStandardIndustClass objects filtered by the dummy column
 * @method     ChildStandardIndustClass[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class StandardIndustClassQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\StandardIndustClassQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\StandardIndustClass', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStandardIndustClassQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStandardIndustClassQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildStandardIndustClassQuery) {
            return $criteria;
        }
        $query = new ChildStandardIndustClassQuery();
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
     * @return ChildStandardIndustClass|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(StandardIndustClassTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = StandardIndustClassTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildStandardIndustClass A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbSicCode, ArtbSicDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_sic WHERE ArtbSicCode = :p0';
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
            /** @var ChildStandardIndustClass $obj */
            $obj = new ChildStandardIndustClass();
            $obj->hydrate($row);
            StandardIndustClassTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildStandardIndustClass|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_ARTBSICCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_ARTBSICCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbSicCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsiccode('fooValue');   // WHERE ArtbSicCode = 'fooValue'
     * $query->filterByArtbsiccode('%fooValue%', Criteria::LIKE); // WHERE ArtbSicCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsiccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByArtbsiccode($artbsiccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsiccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_ARTBSICCODE, $artbsiccode, $comparison);
    }

    /**
     * Filter the query on the ArtbSicDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsicdesc('fooValue');   // WHERE ArtbSicDesc = 'fooValue'
     * $query->filterByArtbsicdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbSicDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsicdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByArtbsicdesc($artbsicdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsicdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_ARTBSICDESC, $artbsicdesc, $comparison);
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
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StandardIndustClassTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildStandardIndustClass $standardIndustClass Object to remove from the list of results
     *
     * @return $this|ChildStandardIndustClassQuery The current query, for fluid interface
     */
    public function prune($standardIndustClass = null)
    {
        if ($standardIndustClass) {
            $this->addUsingAlias(StandardIndustClassTableMap::COL_ARTBSICCODE, $standardIndustClass->getArtbsiccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_sic table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StandardIndustClassTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StandardIndustClassTableMap::clearInstancePool();
            StandardIndustClassTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(StandardIndustClassTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StandardIndustClassTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StandardIndustClassTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StandardIndustClassTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // StandardIndustClassQuery
