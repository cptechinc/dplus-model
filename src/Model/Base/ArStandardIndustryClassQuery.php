<?php

namespace Base;

use \ArStandardIndustryClassas ChildArStandardIndustryClass;
use \ArStandardIndustryClassQuery as ChildArStandardIndustryClassQuery;
use \Exception;
use \PDO;
use Map\ArStandardIndustryClassTableMap;
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
 * @method     ChildArStandardIndustryClassQuery orderByArtbsiccode($order = Criteria::ASC) Order by the ArtbSicCode column
 * @method     ChildArStandardIndustryClassQuery orderByArtbsicdesc($order = Criteria::ASC) Order by the ArtbSicDesc column
 * @method     ChildArStandardIndustryClassQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArStandardIndustryClassQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArStandardIndustryClassQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArStandardIndustryClassQuery groupByArtbsiccode() Group by the ArtbSicCode column
 * @method     ChildArStandardIndustryClassQuery groupByArtbsicdesc() Group by the ArtbSicDesc column
 * @method     ChildArStandardIndustryClassQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArStandardIndustryClassQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArStandardIndustryClassQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArStandardIndustryClassQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArStandardIndustryClassQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArStandardIndustryClassQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArStandardIndustryClassQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArStandardIndustryClassQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArStandardIndustryClassQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArStandardIndustryClassfindOne(ConnectionInterface $con = null) Return the first ChildArStandardIndustryClassmatching the query
 * @method     ChildArStandardIndustryClassfindOneOrCreate(ConnectionInterface $con = null) Return the first ChildArStandardIndustryClassmatching the query, or a new ChildArStandardIndustryClassobject populated from the query conditions when no match is found
 *
 * @method     ChildArStandardIndustryClassfindOneByArtbsiccode(string $ArtbSicCode) Return the first ChildArStandardIndustryClassfiltered by the ArtbSicCode column
 * @method     ChildArStandardIndustryClassfindOneByArtbsicdesc(string $ArtbSicDesc) Return the first ChildArStandardIndustryClassfiltered by the ArtbSicDesc column
 * @method     ChildArStandardIndustryClassfindOneByDateupdtd(string $DateUpdtd) Return the first ChildArStandardIndustryClassfiltered by the DateUpdtd column
 * @method     ChildArStandardIndustryClassfindOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArStandardIndustryClassfiltered by the TimeUpdtd column
 * @method     ChildArStandardIndustryClassfindOneByDummy(string $dummy) Return the first ChildArStandardIndustryClassfiltered by the dummy column *

 * @method     ChildArStandardIndustryClassrequirePk($key, ConnectionInterface $con = null) Return the ChildArStandardIndustryClassby primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustryClassrequireOne(ConnectionInterface $con = null) Return the first ChildArStandardIndustryClassmatching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArStandardIndustryClassrequireOneByArtbsiccode(string $ArtbSicCode) Return the first ChildArStandardIndustryClassfiltered by the ArtbSicCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustryClassrequireOneByArtbsicdesc(string $ArtbSicDesc) Return the first ChildArStandardIndustryClassfiltered by the ArtbSicDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustryClassrequireOneByDateupdtd(string $DateUpdtd) Return the first ChildArStandardIndustryClassfiltered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustryClassrequireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArStandardIndustryClassfiltered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustryClassrequireOneByDummy(string $dummy) Return the first ChildArStandardIndustryClassfiltered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArStandardIndustryClass[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArStandardIndustryClassobjects based on current ModelCriteria
 * @method     ChildArStandardIndustryClass[]|ObjectCollection findByArtbsiccode(string $ArtbSicCode) Return ChildArStandardIndustryClassobjects filtered by the ArtbSicCode column
 * @method     ChildArStandardIndustryClass[]|ObjectCollection findByArtbsicdesc(string $ArtbSicDesc) Return ChildArStandardIndustryClassobjects filtered by the ArtbSicDesc column
 * @method     ChildArStandardIndustryClass[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArStandardIndustryClassobjects filtered by the DateUpdtd column
 * @method     ChildArStandardIndustryClass[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArStandardIndustryClassobjects filtered by the TimeUpdtd column
 * @method     ChildArStandardIndustryClass[]|ObjectCollection findByDummy(string $dummy) Return ChildArStandardIndustryClassobjects filtered by the dummy column
 * @method     ChildArStandardIndustryClass[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArStandardIndustryClassQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArStandardIndustryClassQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArStandardIndustryClass', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArStandardIndustryClassQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArStandardIndustryClassQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArStandardIndustryClassQuery) {
            return $criteria;
        }
        $query = new ChildArStandardIndustryClassQuery();
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
     * @return ChildArStandardIndustryClass|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArStandardIndustryClassTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArStandardIndustryClassTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArStandardIndustryClassA model object, or null if the key is not found
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
            /** @var ChildArStandardIndustryClass$obj */
            $obj = new ChildArStandardIndustryClass();
            $obj->hydrate($row);
            ArStandardIndustryClassTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArStandardIndustryClass|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_ARTBSICCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_ARTBSICCODE, $keys, Criteria::IN);
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
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByArtbsiccode($artbsiccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsiccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_ARTBSICCODE, $artbsiccode, $comparison);
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
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByArtbsicdesc($artbsicdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsicdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_ARTBSICDESC, $artbsicdesc, $comparison);
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
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArStandardIndustryClass$standardIndustClass Object to remove from the list of results
     *
     * @return $this|ChildArStandardIndustryClassQuery The current query, for fluid interface
     */
    public function prune($standardIndustClass = null)
    {
        if ($standardIndustClass) {
            $this->addUsingAlias(ArStandardIndustryClassTableMap::COL_ARTBSICCODE, $standardIndustClass->getArtbsiccode(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(ArStandardIndustryClassTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArStandardIndustryClassTableMap::clearInstancePool();
            ArStandardIndustryClassTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArStandardIndustryClassTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArStandardIndustryClassTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArStandardIndustryClassTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArStandardIndustryClassTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArStandardIndustryClassQuery
