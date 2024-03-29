<?php

namespace Base;

use \InvBinAreaCode as ChildInvBinAreaCode;
use \InvBinAreaCodeQuery as ChildInvBinAreaCodeQuery;
use \Exception;
use \PDO;
use Map\InvBinAreaCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_bina_code' table.
 *
 *
 *
 * @method     ChildInvBinAreaCodeQuery orderByIntbbinacode($order = Criteria::ASC) Order by the IntbBinaCode column
 * @method     ChildInvBinAreaCodeQuery orderByIntbbinadesc($order = Criteria::ASC) Order by the IntbBinaDesc column
 * @method     ChildInvBinAreaCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvBinAreaCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvBinAreaCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvBinAreaCodeQuery groupByIntbbinacode() Group by the IntbBinaCode column
 * @method     ChildInvBinAreaCodeQuery groupByIntbbinadesc() Group by the IntbBinaDesc column
 * @method     ChildInvBinAreaCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvBinAreaCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvBinAreaCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvBinAreaCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvBinAreaCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvBinAreaCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvBinAreaCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvBinAreaCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvBinAreaCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvBinAreaCodeQuery leftJoinWarehouseBin($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseBin relation
 * @method     ChildInvBinAreaCodeQuery rightJoinWarehouseBin($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseBin relation
 * @method     ChildInvBinAreaCodeQuery innerJoinWarehouseBin($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseBin relation
 *
 * @method     ChildInvBinAreaCodeQuery joinWithWarehouseBin($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseBin relation
 *
 * @method     ChildInvBinAreaCodeQuery leftJoinWithWarehouseBin() Adds a LEFT JOIN clause and with to the query using the WarehouseBin relation
 * @method     ChildInvBinAreaCodeQuery rightJoinWithWarehouseBin() Adds a RIGHT JOIN clause and with to the query using the WarehouseBin relation
 * @method     ChildInvBinAreaCodeQuery innerJoinWithWarehouseBin() Adds a INNER JOIN clause and with to the query using the WarehouseBin relation
 *
 * @method     \WarehouseBinQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvBinAreaCode findOne(ConnectionInterface $con = null) Return the first ChildInvBinAreaCode matching the query
 * @method     ChildInvBinAreaCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvBinAreaCode matching the query, or a new ChildInvBinAreaCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvBinAreaCode findOneByIntbbinacode(string $IntbBinaCode) Return the first ChildInvBinAreaCode filtered by the IntbBinaCode column
 * @method     ChildInvBinAreaCode findOneByIntbbinadesc(string $IntbBinaDesc) Return the first ChildInvBinAreaCode filtered by the IntbBinaDesc column
 * @method     ChildInvBinAreaCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvBinAreaCode filtered by the DateUpdtd column
 * @method     ChildInvBinAreaCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvBinAreaCode filtered by the TimeUpdtd column
 * @method     ChildInvBinAreaCode findOneByDummy(string $dummy) Return the first ChildInvBinAreaCode filtered by the dummy column *

 * @method     ChildInvBinAreaCode requirePk($key, ConnectionInterface $con = null) Return the ChildInvBinAreaCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvBinAreaCode requireOne(ConnectionInterface $con = null) Return the first ChildInvBinAreaCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvBinAreaCode requireOneByIntbbinacode(string $IntbBinaCode) Return the first ChildInvBinAreaCode filtered by the IntbBinaCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvBinAreaCode requireOneByIntbbinadesc(string $IntbBinaDesc) Return the first ChildInvBinAreaCode filtered by the IntbBinaDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvBinAreaCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvBinAreaCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvBinAreaCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvBinAreaCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvBinAreaCode requireOneByDummy(string $dummy) Return the first ChildInvBinAreaCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvBinAreaCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvBinAreaCode objects based on current ModelCriteria
 * @method     ChildInvBinAreaCode[]|ObjectCollection findByIntbbinacode(string $IntbBinaCode) Return ChildInvBinAreaCode objects filtered by the IntbBinaCode column
 * @method     ChildInvBinAreaCode[]|ObjectCollection findByIntbbinadesc(string $IntbBinaDesc) Return ChildInvBinAreaCode objects filtered by the IntbBinaDesc column
 * @method     ChildInvBinAreaCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvBinAreaCode objects filtered by the DateUpdtd column
 * @method     ChildInvBinAreaCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvBinAreaCode objects filtered by the TimeUpdtd column
 * @method     ChildInvBinAreaCode[]|ObjectCollection findByDummy(string $dummy) Return ChildInvBinAreaCode objects filtered by the dummy column
 * @method     ChildInvBinAreaCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvBinAreaCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvBinAreaCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvBinAreaCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvBinAreaCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvBinAreaCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvBinAreaCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvBinAreaCodeQuery();
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
     * @return ChildInvBinAreaCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvBinAreaCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvBinAreaCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvBinAreaCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbBinaCode, IntbBinaDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_bina_code WHERE IntbBinaCode = :p0';
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
            /** @var ChildInvBinAreaCode $obj */
            $obj = new ChildInvBinAreaCode();
            $obj->hydrate($row);
            InvBinAreaCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvBinAreaCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_INTBBINACODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_INTBBINACODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbBinaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbbinacode('fooValue');   // WHERE IntbBinaCode = 'fooValue'
     * $query->filterByIntbbinacode('%fooValue%', Criteria::LIKE); // WHERE IntbBinaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbbinacode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByIntbbinacode($intbbinacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbbinacode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_INTBBINACODE, $intbbinacode, $comparison);
    }

    /**
     * Filter the query on the IntbBinaDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbbinadesc('fooValue');   // WHERE IntbBinaDesc = 'fooValue'
     * $query->filterByIntbbinadesc('%fooValue%', Criteria::LIKE); // WHERE IntbBinaDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbbinadesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByIntbbinadesc($intbbinadesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbbinadesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_INTBBINADESC, $intbbinadesc, $comparison);
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
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvBinAreaCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \WarehouseBin object
     *
     * @param \WarehouseBin|ObjectCollection $warehouseBin the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function filterByWarehouseBin($warehouseBin, $comparison = null)
    {
        if ($warehouseBin instanceof \WarehouseBin) {
            return $this
                ->addUsingAlias(InvBinAreaCodeTableMap::COL_INTBBINACODE, $warehouseBin->getBnctbinarea(), $comparison);
        } elseif ($warehouseBin instanceof ObjectCollection) {
            return $this
                ->useWarehouseBinQuery()
                ->filterByPrimaryKeys($warehouseBin->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByWarehouseBin() only accepts arguments of type \WarehouseBin or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseBin relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function joinWarehouseBin($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseBin');

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
            $this->addJoinObject($join, 'WarehouseBin');
        }

        return $this;
    }

    /**
     * Use the WarehouseBin relation WarehouseBin object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseBinQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseBinQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinWarehouseBin($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseBin', '\WarehouseBinQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvBinAreaCode $invBinAreaCode Object to remove from the list of results
     *
     * @return $this|ChildInvBinAreaCodeQuery The current query, for fluid interface
     */
    public function prune($invBinAreaCode = null)
    {
        if ($invBinAreaCode) {
            $this->addUsingAlias(InvBinAreaCodeTableMap::COL_INTBBINACODE, $invBinAreaCode->getIntbbinacode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_bina_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvBinAreaCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvBinAreaCodeTableMap::clearInstancePool();
            InvBinAreaCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvBinAreaCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvBinAreaCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvBinAreaCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvBinAreaCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvBinAreaCodeQuery
