<?php

namespace Base;

use \ApBuyer as ChildApBuyer;
use \ApBuyerQuery as ChildApBuyerQuery;
use \Exception;
use \PDO;
use Map\ApBuyerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_buyr_code' table.
 *
 *
 *
 * @method     ChildApBuyerQuery orderByAptbbuyrcode($order = Criteria::ASC) Order by the AptbBuyrCode column
 * @method     ChildApBuyerQuery orderByAptbbuyrdesc($order = Criteria::ASC) Order by the AptbBuyrDesc column
 * @method     ChildApBuyerQuery orderByAptbbuyremail($order = Criteria::ASC) Order by the AptbBuyrEmail column
 * @method     ChildApBuyerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApBuyerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApBuyerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApBuyerQuery groupByAptbbuyrcode() Group by the AptbBuyrCode column
 * @method     ChildApBuyerQuery groupByAptbbuyrdesc() Group by the AptbBuyrDesc column
 * @method     ChildApBuyerQuery groupByAptbbuyremail() Group by the AptbBuyrEmail column
 * @method     ChildApBuyerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApBuyerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApBuyerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApBuyerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApBuyerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApBuyerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApBuyerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApBuyerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApBuyerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApBuyerQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApBuyerQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApBuyerQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApBuyerQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApBuyerQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApBuyerQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApBuyerQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApBuyer findOne(ConnectionInterface $con = null) Return the first ChildApBuyer matching the query
 * @method     ChildApBuyer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildApBuyer matching the query, or a new ChildApBuyer object populated from the query conditions when no match is found
 *
 * @method     ChildApBuyer findOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildApBuyer filtered by the AptbBuyrCode column
 * @method     ChildApBuyer findOneByAptbbuyrdesc(string $AptbBuyrDesc) Return the first ChildApBuyer filtered by the AptbBuyrDesc column
 * @method     ChildApBuyer findOneByAptbbuyremail(string $AptbBuyrEmail) Return the first ChildApBuyer filtered by the AptbBuyrEmail column
 * @method     ChildApBuyer findOneByDateupdtd(string $DateUpdtd) Return the first ChildApBuyer filtered by the DateUpdtd column
 * @method     ChildApBuyer findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApBuyer filtered by the TimeUpdtd column
 * @method     ChildApBuyer findOneByDummy(string $dummy) Return the first ChildApBuyer filtered by the dummy column *

 * @method     ChildApBuyer requirePk($key, ConnectionInterface $con = null) Return the ChildApBuyer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApBuyer requireOne(ConnectionInterface $con = null) Return the first ChildApBuyer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApBuyer requireOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildApBuyer filtered by the AptbBuyrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApBuyer requireOneByAptbbuyrdesc(string $AptbBuyrDesc) Return the first ChildApBuyer filtered by the AptbBuyrDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApBuyer requireOneByAptbbuyremail(string $AptbBuyrEmail) Return the first ChildApBuyer filtered by the AptbBuyrEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApBuyer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApBuyer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApBuyer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApBuyer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApBuyer requireOneByDummy(string $dummy) Return the first ChildApBuyer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApBuyer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildApBuyer objects based on current ModelCriteria
 * @method     ChildApBuyer[]|ObjectCollection findByAptbbuyrcode(string $AptbBuyrCode) Return ChildApBuyer objects filtered by the AptbBuyrCode column
 * @method     ChildApBuyer[]|ObjectCollection findByAptbbuyrdesc(string $AptbBuyrDesc) Return ChildApBuyer objects filtered by the AptbBuyrDesc column
 * @method     ChildApBuyer[]|ObjectCollection findByAptbbuyremail(string $AptbBuyrEmail) Return ChildApBuyer objects filtered by the AptbBuyrEmail column
 * @method     ChildApBuyer[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildApBuyer objects filtered by the DateUpdtd column
 * @method     ChildApBuyer[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildApBuyer objects filtered by the TimeUpdtd column
 * @method     ChildApBuyer[]|ObjectCollection findByDummy(string $dummy) Return ChildApBuyer objects filtered by the dummy column
 * @method     ChildApBuyer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ApBuyerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApBuyerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApBuyer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApBuyerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApBuyerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildApBuyerQuery) {
            return $criteria;
        }
        $query = new ChildApBuyerQuery();
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
     * @return ChildApBuyer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApBuyerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApBuyerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildApBuyer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT AptbBuyrCode, AptbBuyrDesc, AptbBuyrEmail, DateUpdtd, TimeUpdtd, dummy FROM ap_buyr_code WHERE AptbBuyrCode = :p0';
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
            /** @var ChildApBuyer $obj */
            $obj = new ChildApBuyer();
            $obj->hydrate($row);
            ApBuyerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildApBuyer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ApBuyerTableMap::COL_APTBBUYRCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ApBuyerTableMap::COL_APTBBUYRCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AptbBuyrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbbuyrcode('fooValue');   // WHERE AptbBuyrCode = 'fooValue'
     * $query->filterByAptbbuyrcode('%fooValue%', Criteria::LIKE); // WHERE AptbBuyrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbbuyrcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByAptbbuyrcode($aptbbuyrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbbuyrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApBuyerTableMap::COL_APTBBUYRCODE, $aptbbuyrcode, $comparison);
    }

    /**
     * Filter the query on the AptbBuyrDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbbuyrdesc('fooValue');   // WHERE AptbBuyrDesc = 'fooValue'
     * $query->filterByAptbbuyrdesc('%fooValue%', Criteria::LIKE); // WHERE AptbBuyrDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbbuyrdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByAptbbuyrdesc($aptbbuyrdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbbuyrdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApBuyerTableMap::COL_APTBBUYRDESC, $aptbbuyrdesc, $comparison);
    }

    /**
     * Filter the query on the AptbBuyrEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbbuyremail('fooValue');   // WHERE AptbBuyrEmail = 'fooValue'
     * $query->filterByAptbbuyremail('%fooValue%', Criteria::LIKE); // WHERE AptbBuyrEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbbuyremail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByAptbbuyremail($aptbbuyremail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbbuyremail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApBuyerTableMap::COL_APTBBUYREMAIL, $aptbbuyremail, $comparison);
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
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApBuyerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApBuyerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApBuyerTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildApBuyerQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ApBuyerTableMap::COL_APTBBUYRCODE, $vendor->getApvebuyrcode1(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            return $this
                ->useVendorQuery()
                ->filterByPrimaryKeys($vendor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildApBuyer $apBuyer Object to remove from the list of results
     *
     * @return $this|ChildApBuyerQuery The current query, for fluid interface
     */
    public function prune($apBuyer = null)
    {
        if ($apBuyer) {
            $this->addUsingAlias(ApBuyerTableMap::COL_APTBBUYRCODE, $apBuyer->getAptbbuyrcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_buyr_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApBuyerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApBuyerTableMap::clearInstancePool();
            ApBuyerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApBuyerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApBuyerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApBuyerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApBuyerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ApBuyerQuery
