<?php

namespace Base;

use \SysLoginRole as ChildSysLoginRole;
use \SysLoginRoleQuery as ChildSysLoginRoleQuery;
use \Exception;
use \PDO;
use Map\SysLoginRoleTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sys_login_role' table.
 *
 *
 *
 * @method     ChildSysLoginRoleQuery orderByQtblrolecode($order = Criteria::ASC) Order by the QtblRoleCode column
 * @method     ChildSysLoginRoleQuery orderByQtblroledesc($order = Criteria::ASC) Order by the QtblRoleDesc column
 * @method     ChildSysLoginRoleQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSysLoginRoleQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSysLoginRoleQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSysLoginRoleQuery groupByQtblrolecode() Group by the QtblRoleCode column
 * @method     ChildSysLoginRoleQuery groupByQtblroledesc() Group by the QtblRoleDesc column
 * @method     ChildSysLoginRoleQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSysLoginRoleQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSysLoginRoleQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSysLoginRoleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSysLoginRoleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSysLoginRoleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSysLoginRoleQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSysLoginRoleQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSysLoginRoleQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSysLoginRoleQuery leftJoinDplusUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery rightJoinDplusUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery innerJoinDplusUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DplusUser relation
 *
 * @method     ChildSysLoginRoleQuery joinWithDplusUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DplusUser relation
 *
 * @method     ChildSysLoginRoleQuery leftJoinWithDplusUser() Adds a LEFT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery rightJoinWithDplusUser() Adds a RIGHT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildSysLoginRoleQuery innerJoinWithDplusUser() Adds a INNER JOIN clause and with to the query using the DplusUser relation
 *
 * @method     \DplusUserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSysLoginRole findOne(ConnectionInterface $con = null) Return the first ChildSysLoginRole matching the query
 * @method     ChildSysLoginRole findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSysLoginRole matching the query, or a new ChildSysLoginRole object populated from the query conditions when no match is found
 *
 * @method     ChildSysLoginRole findOneByQtblrolecode(string $QtblRoleCode) Return the first ChildSysLoginRole filtered by the QtblRoleCode column
 * @method     ChildSysLoginRole findOneByQtblroledesc(string $QtblRoleDesc) Return the first ChildSysLoginRole filtered by the QtblRoleDesc column
 * @method     ChildSysLoginRole findOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginRole filtered by the DateUpdtd column
 * @method     ChildSysLoginRole findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginRole filtered by the TimeUpdtd column
 * @method     ChildSysLoginRole findOneByDummy(string $dummy) Return the first ChildSysLoginRole filtered by the dummy column *

 * @method     ChildSysLoginRole requirePk($key, ConnectionInterface $con = null) Return the ChildSysLoginRole by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOne(ConnectionInterface $con = null) Return the first ChildSysLoginRole matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginRole requireOneByQtblrolecode(string $QtblRoleCode) Return the first ChildSysLoginRole filtered by the QtblRoleCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByQtblroledesc(string $QtblRoleDesc) Return the first ChildSysLoginRole filtered by the QtblRoleDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSysLoginRole filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysLoginRole filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysLoginRole requireOneByDummy(string $dummy) Return the first ChildSysLoginRole filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysLoginRole[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSysLoginRole objects based on current ModelCriteria
 * @method     ChildSysLoginRole[]|ObjectCollection findByQtblrolecode(string $QtblRoleCode) Return ChildSysLoginRole objects filtered by the QtblRoleCode column
 * @method     ChildSysLoginRole[]|ObjectCollection findByQtblroledesc(string $QtblRoleDesc) Return ChildSysLoginRole objects filtered by the QtblRoleDesc column
 * @method     ChildSysLoginRole[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSysLoginRole objects filtered by the DateUpdtd column
 * @method     ChildSysLoginRole[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSysLoginRole objects filtered by the TimeUpdtd column
 * @method     ChildSysLoginRole[]|ObjectCollection findByDummy(string $dummy) Return ChildSysLoginRole objects filtered by the dummy column
 * @method     ChildSysLoginRole[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SysLoginRoleQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SysLoginRoleQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SysLoginRole', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSysLoginRoleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSysLoginRoleQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSysLoginRoleQuery) {
            return $criteria;
        }
        $query = new ChildSysLoginRoleQuery();
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
     * @return ChildSysLoginRole|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SysLoginRoleTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SysLoginRoleTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSysLoginRole A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QtblRoleCode, QtblRoleDesc, DateUpdtd, TimeUpdtd, dummy FROM sys_login_role WHERE QtblRoleCode = :p0';
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
            /** @var ChildSysLoginRole $obj */
            $obj = new ChildSysLoginRole();
            $obj->hydrate($row);
            SysLoginRoleTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSysLoginRole|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the QtblRoleCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQtblrolecode('fooValue');   // WHERE QtblRoleCode = 'fooValue'
     * $query->filterByQtblrolecode('%fooValue%', Criteria::LIKE); // WHERE QtblRoleCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qtblrolecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByQtblrolecode($qtblrolecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtblrolecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $qtblrolecode, $comparison);
    }

    /**
     * Filter the query on the QtblRoleDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQtblroledesc('fooValue');   // WHERE QtblRoleDesc = 'fooValue'
     * $query->filterByQtblroledesc('%fooValue%', Criteria::LIKE); // WHERE QtblRoleDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qtblroledesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByQtblroledesc($qtblroledesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qtblroledesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLEDESC, $qtblroledesc, $comparison);
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
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SysLoginRoleTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \DplusUser object
     *
     * @param \DplusUser|ObjectCollection $dplusUser the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function filterByDplusUser($dplusUser, $comparison = null)
    {
        if ($dplusUser instanceof \DplusUser) {
            return $this
                ->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $dplusUser->getUsrcloginrole(), $comparison);
        } elseif ($dplusUser instanceof ObjectCollection) {
            return $this
                ->useDplusUserQuery()
                ->filterByPrimaryKeys($dplusUser->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDplusUser() only accepts arguments of type \DplusUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DplusUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function joinDplusUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DplusUser');

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
            $this->addJoinObject($join, 'DplusUser');
        }

        return $this;
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DplusUserQuery A secondary query class using the current class as primary query
     */
    public function useDplusUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDplusUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DplusUser', '\DplusUserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSysLoginRole $sysLoginRole Object to remove from the list of results
     *
     * @return $this|ChildSysLoginRoleQuery The current query, for fluid interface
     */
    public function prune($sysLoginRole = null)
    {
        if ($sysLoginRole) {
            $this->addUsingAlias(SysLoginRoleTableMap::COL_QTBLROLECODE, $sysLoginRole->getQtblrolecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_login_role table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginRoleTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysLoginRoleTableMap::clearInstancePool();
            SysLoginRoleTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SysLoginRoleTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SysLoginRoleTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SysLoginRoleTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SysLoginRoleTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SysLoginRoleQuery
