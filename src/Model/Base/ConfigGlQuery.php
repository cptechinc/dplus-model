<?php

namespace Base;

use \ConfigGl as ChildConfigGl;
use \ConfigGlQuery as ChildConfigGlQuery;
use \Exception;
use \PDO;
use Map\ConfigGlTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'gl_config' table.
 *
 *
 *
 * @method     ChildConfigGlQuery orderByGltbconfkey($order = Criteria::ASC) Order by the GltbConfKey column
 * @method     ChildConfigGlQuery orderByGltbcoid($order = Criteria::ASC) Order by the GltbCoId column
 * @method     ChildConfigGlQuery orderByGltbyearend($order = Criteria::ASC) Order by the GltbYearEnd column
 * @method     ChildConfigGlQuery orderByGltbusebudanninc($order = Criteria::ASC) Order by the GltbUseBudAnnInc column
 * @method     ChildConfigGlQuery orderByGltbtraceon($order = Criteria::ASC) Order by the GltbTraceOn column
 * @method     ChildConfigGlQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigGlQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigGlQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigGlQuery groupByGltbconfkey() Group by the GltbConfKey column
 * @method     ChildConfigGlQuery groupByGltbcoid() Group by the GltbCoId column
 * @method     ChildConfigGlQuery groupByGltbyearend() Group by the GltbYearEnd column
 * @method     ChildConfigGlQuery groupByGltbusebudanninc() Group by the GltbUseBudAnnInc column
 * @method     ChildConfigGlQuery groupByGltbtraceon() Group by the GltbTraceOn column
 * @method     ChildConfigGlQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigGlQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigGlQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigGlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigGlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigGlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigGlQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigGlQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigGlQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigGl findOne(ConnectionInterface $con = null) Return the first ChildConfigGl matching the query
 * @method     ChildConfigGl findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigGl matching the query, or a new ChildConfigGl object populated from the query conditions when no match is found
 *
 * @method     ChildConfigGl findOneByGltbconfkey(int $GltbConfKey) Return the first ChildConfigGl filtered by the GltbConfKey column
 * @method     ChildConfigGl findOneByGltbcoid(string $GltbCoId) Return the first ChildConfigGl filtered by the GltbCoId column
 * @method     ChildConfigGl findOneByGltbyearend(string $GltbYearEnd) Return the first ChildConfigGl filtered by the GltbYearEnd column
 * @method     ChildConfigGl findOneByGltbusebudanninc(string $GltbUseBudAnnInc) Return the first ChildConfigGl filtered by the GltbUseBudAnnInc column
 * @method     ChildConfigGl findOneByGltbtraceon(string $GltbTraceOn) Return the first ChildConfigGl filtered by the GltbTraceOn column
 * @method     ChildConfigGl findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigGl filtered by the DateUpdtd column
 * @method     ChildConfigGl findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigGl filtered by the TimeUpdtd column
 * @method     ChildConfigGl findOneByDummy(string $dummy) Return the first ChildConfigGl filtered by the dummy column *

 * @method     ChildConfigGl requirePk($key, ConnectionInterface $con = null) Return the ChildConfigGl by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOne(ConnectionInterface $con = null) Return the first ChildConfigGl matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigGl requireOneByGltbconfkey(int $GltbConfKey) Return the first ChildConfigGl filtered by the GltbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByGltbcoid(string $GltbCoId) Return the first ChildConfigGl filtered by the GltbCoId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByGltbyearend(string $GltbYearEnd) Return the first ChildConfigGl filtered by the GltbYearEnd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByGltbusebudanninc(string $GltbUseBudAnnInc) Return the first ChildConfigGl filtered by the GltbUseBudAnnInc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByGltbtraceon(string $GltbTraceOn) Return the first ChildConfigGl filtered by the GltbTraceOn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigGl filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigGl filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigGl requireOneByDummy(string $dummy) Return the first ChildConfigGl filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigGl[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigGl objects based on current ModelCriteria
 * @method     ChildConfigGl[]|ObjectCollection findByGltbconfkey(int $GltbConfKey) Return ChildConfigGl objects filtered by the GltbConfKey column
 * @method     ChildConfigGl[]|ObjectCollection findByGltbcoid(string $GltbCoId) Return ChildConfigGl objects filtered by the GltbCoId column
 * @method     ChildConfigGl[]|ObjectCollection findByGltbyearend(string $GltbYearEnd) Return ChildConfigGl objects filtered by the GltbYearEnd column
 * @method     ChildConfigGl[]|ObjectCollection findByGltbusebudanninc(string $GltbUseBudAnnInc) Return ChildConfigGl objects filtered by the GltbUseBudAnnInc column
 * @method     ChildConfigGl[]|ObjectCollection findByGltbtraceon(string $GltbTraceOn) Return ChildConfigGl objects filtered by the GltbTraceOn column
 * @method     ChildConfigGl[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigGl objects filtered by the DateUpdtd column
 * @method     ChildConfigGl[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigGl objects filtered by the TimeUpdtd column
 * @method     ChildConfigGl[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigGl objects filtered by the dummy column
 * @method     ChildConfigGl[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigGlQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigGlQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigGl', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigGlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigGlQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigGlQuery) {
            return $criteria;
        }
        $query = new ChildConfigGlQuery();
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
     * @return ChildConfigGl|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigGlTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigGlTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigGl A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT GltbConfKey, GltbCoId, GltbYearEnd, GltbUseBudAnnInc, GltbTraceOn, DateUpdtd, TimeUpdtd, dummy FROM gl_config WHERE GltbConfKey = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildConfigGl $obj */
            $obj = new ChildConfigGl();
            $obj->hydrate($row);
            ConfigGlTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigGl|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GltbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbconfkey(1234); // WHERE GltbConfKey = 1234
     * $query->filterByGltbconfkey(array(12, 34)); // WHERE GltbConfKey IN (12, 34)
     * $query->filterByGltbconfkey(array('min' => 12)); // WHERE GltbConfKey > 12
     * </code>
     *
     * @param     mixed $gltbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByGltbconfkey($gltbconfkey = null, $comparison = null)
    {
        if (is_array($gltbconfkey)) {
            $useMinMax = false;
            if (isset($gltbconfkey['min'])) {
                $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCONFKEY, $gltbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gltbconfkey['max'])) {
                $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCONFKEY, $gltbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCONFKEY, $gltbconfkey, $comparison);
    }

    /**
     * Filter the query on the GltbCoId column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbcoid('fooValue');   // WHERE GltbCoId = 'fooValue'
     * $query->filterByGltbcoid('%fooValue%', Criteria::LIKE); // WHERE GltbCoId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbcoid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByGltbcoid($gltbcoid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbcoid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCOID, $gltbcoid, $comparison);
    }

    /**
     * Filter the query on the GltbYearEnd column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbyearend('fooValue');   // WHERE GltbYearEnd = 'fooValue'
     * $query->filterByGltbyearend('%fooValue%', Criteria::LIKE); // WHERE GltbYearEnd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbyearend The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByGltbyearend($gltbyearend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbyearend)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBYEAREND, $gltbyearend, $comparison);
    }

    /**
     * Filter the query on the GltbUseBudAnnInc column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbusebudanninc('fooValue');   // WHERE GltbUseBudAnnInc = 'fooValue'
     * $query->filterByGltbusebudanninc('%fooValue%', Criteria::LIKE); // WHERE GltbUseBudAnnInc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbusebudanninc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByGltbusebudanninc($gltbusebudanninc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbusebudanninc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBUSEBUDANNINC, $gltbusebudanninc, $comparison);
    }

    /**
     * Filter the query on the GltbTraceOn column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbtraceon('fooValue');   // WHERE GltbTraceOn = 'fooValue'
     * $query->filterByGltbtraceon('%fooValue%', Criteria::LIKE); // WHERE GltbTraceOn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbtraceon The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByGltbtraceon($gltbtraceon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbtraceon)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_GLTBTRACEON, $gltbtraceon, $comparison);
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
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigGlTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigGl $configGl Object to remove from the list of results
     *
     * @return $this|ChildConfigGlQuery The current query, for fluid interface
     */
    public function prune($configGl = null)
    {
        if ($configGl) {
            $this->addUsingAlias(ConfigGlTableMap::COL_GLTBCONFKEY, $configGl->getGltbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the gl_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigGlTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigGlTableMap::clearInstancePool();
            ConfigGlTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigGlTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigGlTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigGlTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigGlTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigGlQuery
