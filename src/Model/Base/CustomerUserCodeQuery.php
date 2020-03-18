<?php

namespace Base;

use \CustomerUserCode as ChildCustomerUserCode;
use \CustomerUserCodeQuery as ChildCustomerUserCodeQuery;
use \Exception;
use \PDO;
use Map\CustomerUserCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_cusr' table.
 *
 *
 *
 * @method     ChildCustomerUserCodeQuery orderByArtbcusrcode($order = Criteria::ASC) Order by the ArtbCusrCode column
 * @method     ChildCustomerUserCodeQuery orderByArtbcusrdesc($order = Criteria::ASC) Order by the ArtbCusrDesc column
 * @method     ChildCustomerUserCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerUserCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerUserCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerUserCodeQuery groupByArtbcusrcode() Group by the ArtbCusrCode column
 * @method     ChildCustomerUserCodeQuery groupByArtbcusrdesc() Group by the ArtbCusrDesc column
 * @method     ChildCustomerUserCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerUserCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerUserCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerUserCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerUserCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerUserCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerUserCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerUserCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerUserCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerUserCode findOne(ConnectionInterface $con = null) Return the first ChildCustomerUserCode matching the query
 * @method     ChildCustomerUserCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerUserCode matching the query, or a new ChildCustomerUserCode object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerUserCode findOneByArtbcusrcode(string $ArtbCusrCode) Return the first ChildCustomerUserCode filtered by the ArtbCusrCode column
 * @method     ChildCustomerUserCode findOneByArtbcusrdesc(string $ArtbCusrDesc) Return the first ChildCustomerUserCode filtered by the ArtbCusrDesc column
 * @method     ChildCustomerUserCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerUserCode filtered by the DateUpdtd column
 * @method     ChildCustomerUserCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerUserCode filtered by the TimeUpdtd column
 * @method     ChildCustomerUserCode findOneByDummy(string $dummy) Return the first ChildCustomerUserCode filtered by the dummy column *

 * @method     ChildCustomerUserCode requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerUserCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerUserCode requireOne(ConnectionInterface $con = null) Return the first ChildCustomerUserCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerUserCode requireOneByArtbcusrcode(string $ArtbCusrCode) Return the first ChildCustomerUserCode filtered by the ArtbCusrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerUserCode requireOneByArtbcusrdesc(string $ArtbCusrDesc) Return the first ChildCustomerUserCode filtered by the ArtbCusrDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerUserCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerUserCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerUserCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerUserCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerUserCode requireOneByDummy(string $dummy) Return the first ChildCustomerUserCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerUserCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerUserCode objects based on current ModelCriteria
 * @method     ChildCustomerUserCode[]|ObjectCollection findByArtbcusrcode(string $ArtbCusrCode) Return ChildCustomerUserCode objects filtered by the ArtbCusrCode column
 * @method     ChildCustomerUserCode[]|ObjectCollection findByArtbcusrdesc(string $ArtbCusrDesc) Return ChildCustomerUserCode objects filtered by the ArtbCusrDesc column
 * @method     ChildCustomerUserCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerUserCode objects filtered by the DateUpdtd column
 * @method     ChildCustomerUserCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerUserCode objects filtered by the TimeUpdtd column
 * @method     ChildCustomerUserCode[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerUserCode objects filtered by the dummy column
 * @method     ChildCustomerUserCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerUserCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerUserCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerUserCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerUserCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerUserCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerUserCodeQuery) {
            return $criteria;
        }
        $query = new ChildCustomerUserCodeQuery();
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
     * @return ChildCustomerUserCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerUserCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerUserCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomerUserCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbCusrCode, ArtbCusrDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_cusr WHERE ArtbCusrCode = :p0';
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
            /** @var ChildCustomerUserCode $obj */
            $obj = new ChildCustomerUserCode();
            $obj->hydrate($row);
            CustomerUserCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomerUserCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_ARTBCUSRCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_ARTBCUSRCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbCusrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcusrcode('fooValue');   // WHERE ArtbCusrCode = 'fooValue'
     * $query->filterByArtbcusrcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCusrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcusrcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByArtbcusrcode($artbcusrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcusrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_ARTBCUSRCODE, $artbcusrcode, $comparison);
    }

    /**
     * Filter the query on the ArtbCusrDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcusrdesc('fooValue');   // WHERE ArtbCusrDesc = 'fooValue'
     * $query->filterByArtbcusrdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbCusrDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcusrdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByArtbcusrdesc($artbcusrdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcusrdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_ARTBCUSRDESC, $artbcusrdesc, $comparison);
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
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerUserCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerUserCode $customerUserCode Object to remove from the list of results
     *
     * @return $this|ChildCustomerUserCodeQuery The current query, for fluid interface
     */
    public function prune($customerUserCode = null)
    {
        if ($customerUserCode) {
            $this->addUsingAlias(CustomerUserCodeTableMap::COL_ARTBCUSRCODE, $customerUserCode->getArtbcusrcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_cusr table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerUserCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerUserCodeTableMap::clearInstancePool();
            CustomerUserCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerUserCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerUserCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerUserCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerUserCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerUserCodeQuery
