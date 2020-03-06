<?php

namespace Base;

use \SysLoginGroup as ChildSysLoginGroup;
use \SysLoginGroupQuery as ChildSysLoginGroupQuery;
use \Exception;
use \PDO;
use Map\SysLoginGroupTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sys_login_group' table.
 *
 *
 *
 * @method     ChildSysLoginGroupQuery orderByQtbllgrpcode($order = Criteria::ASC) Order by the QtblLgrpCode column
 * @method     ChildSysLoginGroupQuery orderByQtbllgrpdesc($order = Criteria::ASC) Order by the QtblLgrpDesc column
 * @method     ChildSysLoginGroupQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSysLoginGroupQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSysLoginGroupQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSysLoginGroupQuery groupByQtbllgrpcode() Group by the QtblLgrpCode column
 * @method     ChildSysLoginGroupQuery groupByQtbllgrpdesc() Group by the QtblLgrpDesc column
 * @method     ChildSysLoginGroupQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSysLoginGroupQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSysLoginGroupQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSysLoginGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSysLoginGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSysLoginGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSysLoginGroupQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSysLoginGroupQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSysLoginGroupQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSysLoginGroup findOne(ConnectionInterface $con = null) Return the first ChildSysLoginGroup matching the query
 * @method     ChildSysLoginGroup findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSysLoginGroup matching the query, or a new ChildSysLoginGroup object populated from the query conditions when no match is found
 *
 * @method     ChildSysLoginGroup findOneByQtbllgrpcode(string $QtblLgrpCode) Return the first ChildSysLoginGroup filtered by the QtblLgrpCode column
 * @method     ChildSysLoginGroup findOneByQtbllgrpdesc(string $QtblLgrpDesc) Return the first ChildSysLoginGroup filtered by the QtblLgrpDesc column
 * @method     ChildSysLoginGroup findOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginGroup filtered by the DateUpdtd column
 * @method     ChildSysLoginGroup findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginGroup filtered by the TimeUpdtd column
 * @method     ChildSysLoginGroup findOneByDummy(string $dummy) Return the first ChildSysLoginGroup filtered by the dummy column *

 * @method     ChildSysLoginGroup requirePk($key, ConnectionInterface $con = null) Return the ChildSysLoginGroup by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOne(ConnectionInterface $con = null) Return the first ChildSysLoginGroup matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginGroup requireOneByQtbllgrpcode(string $QtblLgrpCode) Return the first ChildSysLoginGroup filtered by the QtblLgrpCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByQtbllgrpdesc(string $QtblLgrpDesc) Return the first ChildSysLoginGroup filtered by the QtblLgrpDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginGroup filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginGroup filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginGroup requireOneByDummy(string $dummy) Return the first ChildSysLoginGroup filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginGroup[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSysLoginGroup objects based on current ModelCriteria
 * @method     ChildSysLoginGroup[]|ObjectCollection findByQtbllgrpcode(string $QtblLgrpCode) Return ChildSysLoginGroup objects filtered by the QtblLgrpCode column
 * @method     ChildSysLoginGroup[]|ObjectCollection findByQtbllgrpdesc(string $QtblLgrpDesc) Return ChildSysLoginGroup objects filtered by the QtblLgrpDesc column
 * @method     ChildSysLoginGroup[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSysLoginGroup objects filtered by the DateUpdtd column
 * @method     ChildSysLoginGroup[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSysLoginGroup objects filtered by the TimeUpdtd column
 * @method     ChildSysLoginGroup[]|ObjectCollection findByDummy(string $dummy) Return ChildSysLoginGroup objects filtered by the dummy column
 * @method     ChildSysLoginGroup[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SysLoginGroupQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SysLoginGroupQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SysLoginGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSysLoginGroupQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSysLoginGroupQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSysLoginGroupQuery) {
            return $criteria;
        }
        $query = new ChildSysLoginGroupQuery();
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
     * @return ChildSysLoginGroup|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SysLoginGroupTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SysLoginGroupTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSysLoginGroup A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QtblLgrpCode, QtblLgrpDesc, DateUpdtd, TimeUpdtd, dummy FROM sys_login_group WHERE QtblLgrpCode = :p0';
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
            /** @var ChildSysLoginGroup $obj */
            $obj = new ChildSysLoginGroup();
            $obj->hydrate($row);
            SysLoginGroupTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSysLoginGroup|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the QtblLgrpCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtbllgrpcode('fooValue');   // WHERE QtblLgrpCode = 'fooValue'
     * $query->filterByQtbllgrpcode('%fooValue%', Criteria::LIKE); // WHERE QtblLgrpCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qtbllgrpcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByQtbllgrpcode($qtbllgrpcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtbllgrpcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $qtbllgrpcode, $comparison);
    }

    /**
     * Filter the query on the QtblLgrpDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQtbllgrpdesc('fooValue');   // WHERE QtblLgrpDesc = 'fooValue'
     * $query->filterByQtbllgrpdesc('%fooValue%', Criteria::LIKE); // WHERE QtblLgrpDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qtbllgrpdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByQtbllgrpdesc($qtbllgrpdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtbllgrpdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPDESC, $qtbllgrpdesc, $comparison);
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
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginGroupTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSysLoginGroup $sysLoginGroup Object to remove from the list of results
     *
     * @return $this|ChildSysLoginGroupQuery The current query, for fluid interface
     */
    public function prune($sysLoginGroup = null)
    {
        if ($sysLoginGroup) {
            $this->addUsingAlias(SysLoginGroupTableMap::COL_QTBLLGRPCODE, $sysLoginGroup->getQtbllgrpcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_login_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginGroupTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysLoginGroupTableMap::clearInstancePool();
            SysLoginGroupTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginGroupTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SysLoginGroupTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SysLoginGroupTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SysLoginGroupTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SysLoginGroupQuery
