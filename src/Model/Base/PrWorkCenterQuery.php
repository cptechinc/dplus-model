<?php

namespace Base;

use \PrWorkCenter as ChildPrWorkCenter;
use \PrWorkCenterQuery as ChildPrWorkCenterQuery;
use \Exception;
use \PDO;
use Map\PrWorkCenterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'pr_work_center_cd' table.
 *
 *
 *
 * @method     ChildPrWorkCenterQuery orderByPmtbdeptid($order = Criteria::ASC) Order by the PmtbDeptId column
 * @method     ChildPrWorkCenterQuery orderByPmtbdeptdesc($order = Criteria::ASC) Order by the PmtbDeptDesc column
 * @method     ChildPrWorkCenterQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPrWorkCenterQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPrWorkCenterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPrWorkCenterQuery groupByPmtbdeptid() Group by the PmtbDeptId column
 * @method     ChildPrWorkCenterQuery groupByPmtbdeptdesc() Group by the PmtbDeptDesc column
 * @method     ChildPrWorkCenterQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPrWorkCenterQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPrWorkCenterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPrWorkCenterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPrWorkCenterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPrWorkCenterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPrWorkCenterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPrWorkCenterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPrWorkCenterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPrWorkCenterQuery leftJoinPrResource($relationAlias = null) Adds a LEFT JOIN clause to the query using the PrResource relation
 * @method     ChildPrWorkCenterQuery rightJoinPrResource($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PrResource relation
 * @method     ChildPrWorkCenterQuery innerJoinPrResource($relationAlias = null) Adds a INNER JOIN clause to the query using the PrResource relation
 *
 * @method     ChildPrWorkCenterQuery joinWithPrResource($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PrResource relation
 *
 * @method     ChildPrWorkCenterQuery leftJoinWithPrResource() Adds a LEFT JOIN clause and with to the query using the PrResource relation
 * @method     ChildPrWorkCenterQuery rightJoinWithPrResource() Adds a RIGHT JOIN clause and with to the query using the PrResource relation
 * @method     ChildPrWorkCenterQuery innerJoinWithPrResource() Adds a INNER JOIN clause and with to the query using the PrResource relation
 *
 * @method     \PrResourceQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildPrWorkCenter findOne(ConnectionInterface $con = null) Return the first ChildPrWorkCenter matching the query
 * @method     ChildPrWorkCenter findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPrWorkCenter matching the query, or a new ChildPrWorkCenter object populated from the query conditions when no match is found
 *
 * @method     ChildPrWorkCenter findOneByPmtbdeptid(string $PmtbDeptId) Return the first ChildPrWorkCenter filtered by the PmtbDeptId column
 * @method     ChildPrWorkCenter findOneByPmtbdeptdesc(string $PmtbDeptDesc) Return the first ChildPrWorkCenter filtered by the PmtbDeptDesc column
 * @method     ChildPrWorkCenter findOneByDateupdtd(string $DateUpdtd) Return the first ChildPrWorkCenter filtered by the DateUpdtd column
 * @method     ChildPrWorkCenter findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPrWorkCenter filtered by the TimeUpdtd column
 * @method     ChildPrWorkCenter findOneByDummy(string $dummy) Return the first ChildPrWorkCenter filtered by the dummy column *

 * @method     ChildPrWorkCenter requirePk($key, ConnectionInterface $con = null) Return the ChildPrWorkCenter by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrWorkCenter requireOne(ConnectionInterface $con = null) Return the first ChildPrWorkCenter matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPrWorkCenter requireOneByPmtbdeptid(string $PmtbDeptId) Return the first ChildPrWorkCenter filtered by the PmtbDeptId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrWorkCenter requireOneByPmtbdeptdesc(string $PmtbDeptDesc) Return the first ChildPrWorkCenter filtered by the PmtbDeptDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrWorkCenter requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPrWorkCenter filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrWorkCenter requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPrWorkCenter filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrWorkCenter requireOneByDummy(string $dummy) Return the first ChildPrWorkCenter filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPrWorkCenter[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPrWorkCenter objects based on current ModelCriteria
 * @method     ChildPrWorkCenter[]|ObjectCollection findByPmtbdeptid(string $PmtbDeptId) Return ChildPrWorkCenter objects filtered by the PmtbDeptId column
 * @method     ChildPrWorkCenter[]|ObjectCollection findByPmtbdeptdesc(string $PmtbDeptDesc) Return ChildPrWorkCenter objects filtered by the PmtbDeptDesc column
 * @method     ChildPrWorkCenter[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPrWorkCenter objects filtered by the DateUpdtd column
 * @method     ChildPrWorkCenter[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPrWorkCenter objects filtered by the TimeUpdtd column
 * @method     ChildPrWorkCenter[]|ObjectCollection findByDummy(string $dummy) Return ChildPrWorkCenter objects filtered by the dummy column
 * @method     ChildPrWorkCenter[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PrWorkCenterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PrWorkCenterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PrWorkCenter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPrWorkCenterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPrWorkCenterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPrWorkCenterQuery) {
            return $criteria;
        }
        $query = new ChildPrWorkCenterQuery();
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
     * @return ChildPrWorkCenter|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PrWorkCenterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PrWorkCenterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPrWorkCenter A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PmtbDeptId, PmtbDeptDesc, DateUpdtd, TimeUpdtd, dummy FROM pr_work_center_cd WHERE PmtbDeptId = :p0';
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
            /** @var ChildPrWorkCenter $obj */
            $obj = new ChildPrWorkCenter();
            $obj->hydrate($row);
            PrWorkCenterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPrWorkCenter|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_PMTBDEPTID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_PMTBDEPTID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PmtbDeptId column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbdeptid('fooValue');   // WHERE PmtbDeptId = 'fooValue'
     * $query->filterByPmtbdeptid('%fooValue%', Criteria::LIKE); // WHERE PmtbDeptId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbdeptid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByPmtbdeptid($pmtbdeptid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbdeptid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_PMTBDEPTID, $pmtbdeptid, $comparison);
    }

    /**
     * Filter the query on the PmtbDeptDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPmtbdeptdesc('fooValue');   // WHERE PmtbDeptDesc = 'fooValue'
     * $query->filterByPmtbdeptdesc('%fooValue%', Criteria::LIKE); // WHERE PmtbDeptDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pmtbdeptdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByPmtbdeptdesc($pmtbdeptdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pmtbdeptdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_PMTBDEPTDESC, $pmtbdeptdesc, $comparison);
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
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrWorkCenterTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \PrResource object
     *
     * @param \PrResource|ObjectCollection $prResource the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function filterByPrResource($prResource, $comparison = null)
    {
        if ($prResource instanceof \PrResource) {
            return $this
                ->addUsingAlias(PrWorkCenterTableMap::COL_PMTBDEPTID, $prResource->getPmtbdeptid(), $comparison);
        } elseif ($prResource instanceof ObjectCollection) {
            return $this
                ->usePrResourceQuery()
                ->filterByPrimaryKeys($prResource->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPrResource() only accepts arguments of type \PrResource or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PrResource relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function joinPrResource($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PrResource');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'PrResource');
        }

        return $this;
    }

    /**
     * Use the PrResource relation PrResource object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PrResourceQuery A secondary query class using the current class as primary query
     */
    public function usePrResourceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPrResource($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PrResource', '\PrResourceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPrWorkCenter $prWorkCenter Object to remove from the list of results
     *
     * @return $this|ChildPrWorkCenterQuery The current query, for fluid interface
     */
    public function prune($prWorkCenter = null)
    {
        if ($prWorkCenter) {
            $this->addUsingAlias(PrWorkCenterTableMap::COL_PMTBDEPTID, $prWorkCenter->getPmtbdeptid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pr_work_center_cd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PrWorkCenterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PrWorkCenterTableMap::clearInstancePool();
            PrWorkCenterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PrWorkCenterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PrWorkCenterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PrWorkCenterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PrWorkCenterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PrWorkCenterQuery
