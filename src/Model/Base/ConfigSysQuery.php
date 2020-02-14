<?php

namespace Base;

use \ConfigSys as ChildConfigSys;
use \ConfigSysQuery as ChildConfigSysQuery;
use \Exception;
use \PDO;
use Map\ConfigSysTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sys_config' table.
 *
 *
 *
 * @method     ChildConfigSysQuery orderByScfgkey($order = Criteria::ASC) Order by the ScfgKey column
 * @method     ChildConfigSysQuery orderByScfgcustid($order = Criteria::ASC) Order by the ScfgCustId column
 * @method     ChildConfigSysQuery orderByScfgedipostinv($order = Criteria::ASC) Order by the ScfgEdiPostInv column
 * @method     ChildConfigSysQuery orderByScfgedishipasn($order = Criteria::ASC) Order by the ScfgEdiShipAsn column
 * @method     ChildConfigSysQuery orderByScfgbellbopicseq($order = Criteria::ASC) Order by the ScfgBellboPicSeq column
 * @method     ChildConfigSysQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigSysQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigSysQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigSysQuery groupByScfgkey() Group by the ScfgKey column
 * @method     ChildConfigSysQuery groupByScfgcustid() Group by the ScfgCustId column
 * @method     ChildConfigSysQuery groupByScfgedipostinv() Group by the ScfgEdiPostInv column
 * @method     ChildConfigSysQuery groupByScfgedishipasn() Group by the ScfgEdiShipAsn column
 * @method     ChildConfigSysQuery groupByScfgbellbopicseq() Group by the ScfgBellboPicSeq column
 * @method     ChildConfigSysQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigSysQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigSysQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigSysQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigSysQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigSysQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigSysQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigSysQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigSysQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigSys findOne(ConnectionInterface $con = null) Return the first ChildConfigSys matching the query
 * @method     ChildConfigSys findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigSys matching the query, or a new ChildConfigSys object populated from the query conditions when no match is found
 *
 * @method     ChildConfigSys findOneByScfgkey(int $ScfgKey) Return the first ChildConfigSys filtered by the ScfgKey column
 * @method     ChildConfigSys findOneByScfgcustid(string $ScfgCustId) Return the first ChildConfigSys filtered by the ScfgCustId column
 * @method     ChildConfigSys findOneByScfgedipostinv(string $ScfgEdiPostInv) Return the first ChildConfigSys filtered by the ScfgEdiPostInv column
 * @method     ChildConfigSys findOneByScfgedishipasn(string $ScfgEdiShipAsn) Return the first ChildConfigSys filtered by the ScfgEdiShipAsn column
 * @method     ChildConfigSys findOneByScfgbellbopicseq(string $ScfgBellboPicSeq) Return the first ChildConfigSys filtered by the ScfgBellboPicSeq column
 * @method     ChildConfigSys findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSys filtered by the DateUpdtd column
 * @method     ChildConfigSys findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSys filtered by the TimeUpdtd column
 * @method     ChildConfigSys findOneByDummy(string $dummy) Return the first ChildConfigSys filtered by the dummy column *

 * @method     ChildConfigSys requirePk($key, ConnectionInterface $con = null) Return the ChildConfigSys by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOne(ConnectionInterface $con = null) Return the first ChildConfigSys matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSys requireOneByScfgkey(int $ScfgKey) Return the first ChildConfigSys filtered by the ScfgKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByScfgcustid(string $ScfgCustId) Return the first ChildConfigSys filtered by the ScfgCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByScfgedipostinv(string $ScfgEdiPostInv) Return the first ChildConfigSys filtered by the ScfgEdiPostInv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByScfgedishipasn(string $ScfgEdiShipAsn) Return the first ChildConfigSys filtered by the ScfgEdiShipAsn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByScfgbellbopicseq(string $ScfgBellboPicSeq) Return the first ChildConfigSys filtered by the ScfgBellboPicSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSys filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSys filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSys requireOneByDummy(string $dummy) Return the first ChildConfigSys filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSys[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigSys objects based on current ModelCriteria
 * @method     ChildConfigSys[]|ObjectCollection findByScfgkey(int $ScfgKey) Return ChildConfigSys objects filtered by the ScfgKey column
 * @method     ChildConfigSys[]|ObjectCollection findByScfgcustid(string $ScfgCustId) Return ChildConfigSys objects filtered by the ScfgCustId column
 * @method     ChildConfigSys[]|ObjectCollection findByScfgedipostinv(string $ScfgEdiPostInv) Return ChildConfigSys objects filtered by the ScfgEdiPostInv column
 * @method     ChildConfigSys[]|ObjectCollection findByScfgedishipasn(string $ScfgEdiShipAsn) Return ChildConfigSys objects filtered by the ScfgEdiShipAsn column
 * @method     ChildConfigSys[]|ObjectCollection findByScfgbellbopicseq(string $ScfgBellboPicSeq) Return ChildConfigSys objects filtered by the ScfgBellboPicSeq column
 * @method     ChildConfigSys[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigSys objects filtered by the DateUpdtd column
 * @method     ChildConfigSys[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigSys objects filtered by the TimeUpdtd column
 * @method     ChildConfigSys[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigSys objects filtered by the dummy column
 * @method     ChildConfigSys[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigSysQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigSysQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigSys', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigSysQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigSysQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigSysQuery) {
            return $criteria;
        }
        $query = new ChildConfigSysQuery();
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
     * @return ChildConfigSys|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSysTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigSysTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigSys A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ScfgKey, ScfgCustId, ScfgEdiPostInv, ScfgEdiShipAsn, ScfgBellboPicSeq, DateUpdtd, TimeUpdtd, dummy FROM sys_config WHERE ScfgKey = :p0';
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
            /** @var ChildConfigSys $obj */
            $obj = new ChildConfigSys();
            $obj->hydrate($row);
            ConfigSysTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigSys|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ScfgKey column
     *
     * Example usage:
     * <code>
     * $query->filterByScfgkey(1234); // WHERE ScfgKey = 1234
     * $query->filterByScfgkey(array(12, 34)); // WHERE ScfgKey IN (12, 34)
     * $query->filterByScfgkey(array('min' => 12)); // WHERE ScfgKey > 12
     * </code>
     *
     * @param     mixed $scfgkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByScfgkey($scfgkey = null, $comparison = null)
    {
        if (is_array($scfgkey)) {
            $useMinMax = false;
            if (isset($scfgkey['min'])) {
                $this->addUsingAlias(ConfigSysTableMap::COL_SCFGKEY, $scfgkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scfgkey['max'])) {
                $this->addUsingAlias(ConfigSysTableMap::COL_SCFGKEY, $scfgkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGKEY, $scfgkey, $comparison);
    }

    /**
     * Filter the query on the ScfgCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByScfgcustid('fooValue');   // WHERE ScfgCustId = 'fooValue'
     * $query->filterByScfgcustid('%fooValue%', Criteria::LIKE); // WHERE ScfgCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scfgcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByScfgcustid($scfgcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scfgcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGCUSTID, $scfgcustid, $comparison);
    }

    /**
     * Filter the query on the ScfgEdiPostInv column
     *
     * Example usage:
     * <code>
     * $query->filterByScfgedipostinv('fooValue');   // WHERE ScfgEdiPostInv = 'fooValue'
     * $query->filterByScfgedipostinv('%fooValue%', Criteria::LIKE); // WHERE ScfgEdiPostInv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scfgedipostinv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByScfgedipostinv($scfgedipostinv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scfgedipostinv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGEDIPOSTINV, $scfgedipostinv, $comparison);
    }

    /**
     * Filter the query on the ScfgEdiShipAsn column
     *
     * Example usage:
     * <code>
     * $query->filterByScfgedishipasn('fooValue');   // WHERE ScfgEdiShipAsn = 'fooValue'
     * $query->filterByScfgedishipasn('%fooValue%', Criteria::LIKE); // WHERE ScfgEdiShipAsn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scfgedishipasn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByScfgedishipasn($scfgedishipasn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scfgedishipasn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGEDISHIPASN, $scfgedishipasn, $comparison);
    }

    /**
     * Filter the query on the ScfgBellboPicSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByScfgbellbopicseq('fooValue');   // WHERE ScfgBellboPicSeq = 'fooValue'
     * $query->filterByScfgbellbopicseq('%fooValue%', Criteria::LIKE); // WHERE ScfgBellboPicSeq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scfgbellbopicseq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByScfgbellbopicseq($scfgbellbopicseq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scfgbellbopicseq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_SCFGBELLBOPICSEQ, $scfgbellbopicseq, $comparison);
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
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSysTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigSys $configSys Object to remove from the list of results
     *
     * @return $this|ChildConfigSysQuery The current query, for fluid interface
     */
    public function prune($configSys = null)
    {
        if ($configSys) {
            $this->addUsingAlias(ConfigSysTableMap::COL_SCFGKEY, $configSys->getScfgkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigSysTableMap::clearInstancePool();
            ConfigSysTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSysTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigSysTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigSysTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigSysTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigSysQuery
