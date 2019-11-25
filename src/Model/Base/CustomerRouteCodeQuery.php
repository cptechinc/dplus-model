<?php

namespace Base;

use \CustomerRouteCode as ChildCustomerRouteCode;
use \CustomerRouteCodeQuery as ChildCustomerRouteCodeQuery;
use \Exception;
use \PDO;
use Map\CustomerRouteCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_rout' table.
 *
 *
 *
 * @method     ChildCustomerRouteCodeQuery orderByArtbroute($order = Criteria::ASC) Order by the ArtbRoute column
 * @method     ChildCustomerRouteCodeQuery orderByArtbroutedesc($order = Criteria::ASC) Order by the ArtbRouteDesc column
 * @method     ChildCustomerRouteCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerRouteCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerRouteCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerRouteCodeQuery groupByArtbroute() Group by the ArtbRoute column
 * @method     ChildCustomerRouteCodeQuery groupByArtbroutedesc() Group by the ArtbRouteDesc column
 * @method     ChildCustomerRouteCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerRouteCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerRouteCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerRouteCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerRouteCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerRouteCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerRouteCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerRouteCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerRouteCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerRouteCode findOne(ConnectionInterface $con = null) Return the first ChildCustomerRouteCode matching the query
 * @method     ChildCustomerRouteCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerRouteCode matching the query, or a new ChildCustomerRouteCode object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerRouteCode findOneByArtbroute(string $ArtbRoute) Return the first ChildCustomerRouteCode filtered by the ArtbRoute column
 * @method     ChildCustomerRouteCode findOneByArtbroutedesc(string $ArtbRouteDesc) Return the first ChildCustomerRouteCode filtered by the ArtbRouteDesc column
 * @method     ChildCustomerRouteCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerRouteCode filtered by the DateUpdtd column
 * @method     ChildCustomerRouteCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerRouteCode filtered by the TimeUpdtd column
 * @method     ChildCustomerRouteCode findOneByDummy(string $dummy) Return the first ChildCustomerRouteCode filtered by the dummy column *

 * @method     ChildCustomerRouteCode requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerRouteCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerRouteCode requireOne(ConnectionInterface $con = null) Return the first ChildCustomerRouteCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerRouteCode requireOneByArtbroute(string $ArtbRoute) Return the first ChildCustomerRouteCode filtered by the ArtbRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerRouteCode requireOneByArtbroutedesc(string $ArtbRouteDesc) Return the first ChildCustomerRouteCode filtered by the ArtbRouteDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerRouteCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerRouteCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerRouteCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerRouteCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerRouteCode requireOneByDummy(string $dummy) Return the first ChildCustomerRouteCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerRouteCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerRouteCode objects based on current ModelCriteria
 * @method     ChildCustomerRouteCode[]|ObjectCollection findByArtbroute(string $ArtbRoute) Return ChildCustomerRouteCode objects filtered by the ArtbRoute column
 * @method     ChildCustomerRouteCode[]|ObjectCollection findByArtbroutedesc(string $ArtbRouteDesc) Return ChildCustomerRouteCode objects filtered by the ArtbRouteDesc column
 * @method     ChildCustomerRouteCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerRouteCode objects filtered by the DateUpdtd column
 * @method     ChildCustomerRouteCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerRouteCode objects filtered by the TimeUpdtd column
 * @method     ChildCustomerRouteCode[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerRouteCode objects filtered by the dummy column
 * @method     ChildCustomerRouteCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerRouteCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerRouteCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerRouteCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerRouteCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerRouteCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerRouteCodeQuery) {
            return $criteria;
        }
        $query = new ChildCustomerRouteCodeQuery();
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
     * @return ChildCustomerRouteCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerRouteCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerRouteCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomerRouteCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbRoute, ArtbRouteDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_rout WHERE ArtbRoute = :p0';
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
            /** @var ChildCustomerRouteCode $obj */
            $obj = new ChildCustomerRouteCode();
            $obj->hydrate($row);
            CustomerRouteCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomerRouteCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_ARTBROUTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_ARTBROUTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroute('fooValue');   // WHERE ArtbRoute = 'fooValue'
     * $query->filterByArtbroute('%fooValue%', Criteria::LIKE); // WHERE ArtbRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByArtbroute($artbroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_ARTBROUTE, $artbroute, $comparison);
    }

    /**
     * Filter the query on the ArtbRouteDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroutedesc('fooValue');   // WHERE ArtbRouteDesc = 'fooValue'
     * $query->filterByArtbroutedesc('%fooValue%', Criteria::LIKE); // WHERE ArtbRouteDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroutedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByArtbroutedesc($artbroutedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroutedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_ARTBROUTEDESC, $artbroutedesc, $comparison);
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
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerRouteCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerRouteCode $customerRouteCode Object to remove from the list of results
     *
     * @return $this|ChildCustomerRouteCodeQuery The current query, for fluid interface
     */
    public function prune($customerRouteCode = null)
    {
        if ($customerRouteCode) {
            $this->addUsingAlias(CustomerRouteCodeTableMap::COL_ARTBROUTE, $customerRouteCode->getArtbroute(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_rout table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerRouteCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerRouteCodeTableMap::clearInstancePool();
            CustomerRouteCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerRouteCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerRouteCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerRouteCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerRouteCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerRouteCodeQuery
