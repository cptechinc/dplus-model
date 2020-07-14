<?php

namespace Base;

use \CustomerExternalRef as ChildCustomerExternalRef;
use \CustomerExternalRefQuery as ChildCustomerExternalRefQuery;
use \Exception;
use \PDO;
use Map\CustomerExternalRefTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'cust_ship_link' table.
 *
 *
 *
 * @method     ChildCustomerExternalRefQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCustomerExternalRefQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildCustomerExternalRefQuery orderByCslklinkcustid($order = Criteria::ASC) Order by the CslkLinkCustId column
 * @method     ChildCustomerExternalRefQuery orderByCslklinkshipid($order = Criteria::ASC) Order by the CslkLinkShipId column
 * @method     ChildCustomerExternalRefQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerExternalRefQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerExternalRefQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerExternalRefQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCustomerExternalRefQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildCustomerExternalRefQuery groupByCslklinkcustid() Group by the CslkLinkCustId column
 * @method     ChildCustomerExternalRefQuery groupByCslklinkshipid() Group by the CslkLinkShipId column
 * @method     ChildCustomerExternalRefQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerExternalRefQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerExternalRefQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerExternalRefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerExternalRefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerExternalRefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerExternalRefQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerExternalRefQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerExternalRefQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerExternalRef findOne(ConnectionInterface $con = null) Return the first ChildCustomerExternalRef matching the query
 * @method     ChildCustomerExternalRef findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerExternalRef matching the query, or a new ChildCustomerExternalRef object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerExternalRef findOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerExternalRef filtered by the ArcuCustId column
 * @method     ChildCustomerExternalRef findOneByArstshipid(string $ArstShipId) Return the first ChildCustomerExternalRef filtered by the ArstShipId column
 * @method     ChildCustomerExternalRef findOneByCslklinkcustid(string $CslkLinkCustId) Return the first ChildCustomerExternalRef filtered by the CslkLinkCustId column
 * @method     ChildCustomerExternalRef findOneByCslklinkshipid(string $CslkLinkShipId) Return the first ChildCustomerExternalRef filtered by the CslkLinkShipId column
 * @method     ChildCustomerExternalRef findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerExternalRef filtered by the DateUpdtd column
 * @method     ChildCustomerExternalRef findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerExternalRef filtered by the TimeUpdtd column
 * @method     ChildCustomerExternalRef findOneByDummy(string $dummy) Return the first ChildCustomerExternalRef filtered by the dummy column *

 * @method     ChildCustomerExternalRef requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerExternalRef by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOne(ConnectionInterface $con = null) Return the first ChildCustomerExternalRef matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerExternalRef requireOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerExternalRef filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOneByArstshipid(string $ArstShipId) Return the first ChildCustomerExternalRef filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOneByCslklinkcustid(string $CslkLinkCustId) Return the first ChildCustomerExternalRef filtered by the CslkLinkCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOneByCslklinkshipid(string $CslkLinkShipId) Return the first ChildCustomerExternalRef filtered by the CslkLinkShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerExternalRef filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerExternalRef filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerExternalRef requireOneByDummy(string $dummy) Return the first ChildCustomerExternalRef filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerExternalRef[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerExternalRef objects based on current ModelCriteria
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCustomerExternalRef objects filtered by the ArcuCustId column
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildCustomerExternalRef objects filtered by the ArstShipId column
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByCslklinkcustid(string $CslkLinkCustId) Return ChildCustomerExternalRef objects filtered by the CslkLinkCustId column
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByCslklinkshipid(string $CslkLinkShipId) Return ChildCustomerExternalRef objects filtered by the CslkLinkShipId column
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerExternalRef objects filtered by the DateUpdtd column
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerExternalRef objects filtered by the TimeUpdtd column
 * @method     ChildCustomerExternalRef[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerExternalRef objects filtered by the dummy column
 * @method     ChildCustomerExternalRef[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerExternalRefQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerExternalRefQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerExternalRef', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerExternalRefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerExternalRefQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerExternalRefQuery) {
            return $criteria;
        }
        $query = new ChildCustomerExternalRefQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$ArcuCustId, $ArstShipId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCustomerExternalRef|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerExternalRefTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerExternalRefTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCustomerExternalRef A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, CslkLinkCustId, CslkLinkShipId, DateUpdtd, TimeUpdtd, dummy FROM cust_ship_link WHERE ArcuCustId = :p0 AND ArstShipId = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCustomerExternalRef $obj */
            $obj = new ChildCustomerExternalRef();
            $obj->hydrate($row);
            CustomerExternalRefTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCustomerExternalRef|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CustomerExternalRefTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CustomerExternalRefTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CustomerExternalRefTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CustomerExternalRefTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the CslkLinkCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByCslklinkcustid('fooValue');   // WHERE CslkLinkCustId = 'fooValue'
     * $query->filterByCslklinkcustid('%fooValue%', Criteria::LIKE); // WHERE CslkLinkCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cslklinkcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByCslklinkcustid($cslklinkcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cslklinkcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_CSLKLINKCUSTID, $cslklinkcustid, $comparison);
    }

    /**
     * Filter the query on the CslkLinkShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByCslklinkshipid('fooValue');   // WHERE CslkLinkShipId = 'fooValue'
     * $query->filterByCslklinkshipid('%fooValue%', Criteria::LIKE); // WHERE CslkLinkShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cslklinkshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByCslklinkshipid($cslklinkshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cslklinkshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_CSLKLINKSHIPID, $cslklinkshipid, $comparison);
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
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerExternalRefTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerExternalRef $customerExternalRef Object to remove from the list of results
     *
     * @return $this|ChildCustomerExternalRefQuery The current query, for fluid interface
     */
    public function prune($customerExternalRef = null)
    {
        if ($customerExternalRef) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CustomerExternalRefTableMap::COL_ARCUCUSTID), $customerExternalRef->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CustomerExternalRefTableMap::COL_ARSTSHIPID), $customerExternalRef->getArstshipid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the cust_ship_link table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerExternalRefTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerExternalRefTableMap::clearInstancePool();
            CustomerExternalRefTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerExternalRefTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerExternalRefTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerExternalRefTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerExternalRefTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerExternalRefQuery
