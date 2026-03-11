<?php

namespace Base;

use \RcyclGenerator as ChildRcyclGenerator;
use \RcyclGeneratorQuery as ChildRcyclGeneratorQuery;
use \Exception;
use \PDO;
use Map\RcyclGeneratorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'rcycl_generator' table.
 *
 *
 *
 * @method     ChildRcyclGeneratorQuery orderByArtbgenrid($order = Criteria::ASC) Order by the ArtbGenrId column
 * @method     ChildRcyclGeneratorQuery orderByArtbgenrname($order = Criteria::ASC) Order by the ArtbGenrName column
 * @method     ChildRcyclGeneratorQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildRcyclGeneratorQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildRcyclGeneratorQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildRcyclGeneratorQuery groupByArtbgenrid() Group by the ArtbGenrId column
 * @method     ChildRcyclGeneratorQuery groupByArtbgenrname() Group by the ArtbGenrName column
 * @method     ChildRcyclGeneratorQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildRcyclGeneratorQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildRcyclGeneratorQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildRcyclGeneratorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRcyclGeneratorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRcyclGeneratorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRcyclGeneratorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRcyclGeneratorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRcyclGeneratorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRcyclGeneratorQuery leftJoinRcyclReceipt($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclReceipt relation
 * @method     ChildRcyclGeneratorQuery rightJoinRcyclReceipt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclReceipt relation
 * @method     ChildRcyclGeneratorQuery innerJoinRcyclReceipt($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclGeneratorQuery joinWithRcyclReceipt($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclGeneratorQuery leftJoinWithRcyclReceipt() Adds a LEFT JOIN clause and with to the query using the RcyclReceipt relation
 * @method     ChildRcyclGeneratorQuery rightJoinWithRcyclReceipt() Adds a RIGHT JOIN clause and with to the query using the RcyclReceipt relation
 * @method     ChildRcyclGeneratorQuery innerJoinWithRcyclReceipt() Adds a INNER JOIN clause and with to the query using the RcyclReceipt relation
 *
 * @method     \RcyclReceiptQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildRcyclGenerator findOne(ConnectionInterface $con = null) Return the first ChildRcyclGenerator matching the query
 * @method     ChildRcyclGenerator findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRcyclGenerator matching the query, or a new ChildRcyclGenerator object populated from the query conditions when no match is found
 *
 * @method     ChildRcyclGenerator findOneByArtbgenrid(string $ArtbGenrId) Return the first ChildRcyclGenerator filtered by the ArtbGenrId column
 * @method     ChildRcyclGenerator findOneByArtbgenrname(string $ArtbGenrName) Return the first ChildRcyclGenerator filtered by the ArtbGenrName column
 * @method     ChildRcyclGenerator findOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclGenerator filtered by the DateUpdtd column
 * @method     ChildRcyclGenerator findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclGenerator filtered by the TimeUpdtd column
 * @method     ChildRcyclGenerator findOneByDummy(string $dummy) Return the first ChildRcyclGenerator filtered by the dummy column *

 * @method     ChildRcyclGenerator requirePk($key, ConnectionInterface $con = null) Return the ChildRcyclGenerator by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclGenerator requireOne(ConnectionInterface $con = null) Return the first ChildRcyclGenerator matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclGenerator requireOneByArtbgenrid(string $ArtbGenrId) Return the first ChildRcyclGenerator filtered by the ArtbGenrId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclGenerator requireOneByArtbgenrname(string $ArtbGenrName) Return the first ChildRcyclGenerator filtered by the ArtbGenrName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclGenerator requireOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclGenerator filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclGenerator requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclGenerator filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclGenerator requireOneByDummy(string $dummy) Return the first ChildRcyclGenerator filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclGenerator[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildRcyclGenerator objects based on current ModelCriteria
 * @method     ChildRcyclGenerator[]|ObjectCollection findByArtbgenrid(string $ArtbGenrId) Return ChildRcyclGenerator objects filtered by the ArtbGenrId column
 * @method     ChildRcyclGenerator[]|ObjectCollection findByArtbgenrname(string $ArtbGenrName) Return ChildRcyclGenerator objects filtered by the ArtbGenrName column
 * @method     ChildRcyclGenerator[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildRcyclGenerator objects filtered by the DateUpdtd column
 * @method     ChildRcyclGenerator[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildRcyclGenerator objects filtered by the TimeUpdtd column
 * @method     ChildRcyclGenerator[]|ObjectCollection findByDummy(string $dummy) Return ChildRcyclGenerator objects filtered by the dummy column
 * @method     ChildRcyclGenerator[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RcyclGeneratorQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RcyclGeneratorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\RcyclGenerator', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRcyclGeneratorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRcyclGeneratorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRcyclGeneratorQuery) {
            return $criteria;
        }
        $query = new ChildRcyclGeneratorQuery();
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
     * @return ChildRcyclGenerator|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RcyclGeneratorTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RcyclGeneratorTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildRcyclGenerator A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbGenrId, ArtbGenrName, DateUpdtd, TimeUpdtd, dummy FROM rcycl_generator WHERE ArtbGenrId = :p0';
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
            /** @var ChildRcyclGenerator $obj */
            $obj = new ChildRcyclGenerator();
            $obj->hydrate($row);
            RcyclGeneratorTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildRcyclGenerator|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_ARTBGENRID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_ARTBGENRID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbGenrId column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbgenrid('fooValue');   // WHERE ArtbGenrId = 'fooValue'
     * $query->filterByArtbgenrid('%fooValue%', Criteria::LIKE); // WHERE ArtbGenrId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbgenrid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByArtbgenrid($artbgenrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbgenrid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_ARTBGENRID, $artbgenrid, $comparison);
    }

    /**
     * Filter the query on the ArtbGenrName column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbgenrname('fooValue');   // WHERE ArtbGenrName = 'fooValue'
     * $query->filterByArtbgenrname('%fooValue%', Criteria::LIKE); // WHERE ArtbGenrName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbgenrname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByArtbgenrname($artbgenrname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbgenrname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_ARTBGENRNAME, $artbgenrname, $comparison);
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
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclGeneratorTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \RcyclReceipt object
     *
     * @param \RcyclReceipt|ObjectCollection $rcyclReceipt the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function filterByRcyclReceipt($rcyclReceipt, $comparison = null)
    {
        if ($rcyclReceipt instanceof \RcyclReceipt) {
            return $this
                ->addUsingAlias(RcyclGeneratorTableMap::COL_ARTBGENRID, $rcyclReceipt->getArtbgenrid(), $comparison);
        } elseif ($rcyclReceipt instanceof ObjectCollection) {
            return $this
                ->useRcyclReceiptQuery()
                ->filterByPrimaryKeys($rcyclReceipt->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRcyclReceipt() only accepts arguments of type \RcyclReceipt or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceipt relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function joinRcyclReceipt($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RcyclReceipt');

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
            $this->addJoinObject($join, 'RcyclReceipt');
        }

        return $this;
    }

    /**
     * Use the RcyclReceipt relation RcyclReceipt object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RcyclReceiptQuery A secondary query class using the current class as primary query
     */
    public function useRcyclReceiptQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRcyclReceipt($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RcyclReceipt', '\RcyclReceiptQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildRcyclGenerator $rcyclGenerator Object to remove from the list of results
     *
     * @return $this|ChildRcyclGeneratorQuery The current query, for fluid interface
     */
    public function prune($rcyclGenerator = null)
    {
        if ($rcyclGenerator) {
            $this->addUsingAlias(RcyclGeneratorTableMap::COL_ARTBGENRID, $rcyclGenerator->getArtbgenrid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the rcycl_generator table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclGeneratorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RcyclGeneratorTableMap::clearInstancePool();
            RcyclGeneratorTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclGeneratorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RcyclGeneratorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RcyclGeneratorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RcyclGeneratorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RcyclGeneratorQuery
