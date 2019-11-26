<?php

namespace Base;

use \CustomerPriceCode as ChildCustomerPriceCode;
use \CustomerPriceCodeQuery as ChildCustomerPriceCodeQuery;
use \Exception;
use \PDO;
use Map\CustomerPriceCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_price' table.
 *
 *
 *
 * @method     ChildCustomerPriceCodeQuery orderByArtbpriccode($order = Criteria::ASC) Order by the ArtbPricCode column
 * @method     ChildCustomerPriceCodeQuery orderByArtbpricdesc($order = Criteria::ASC) Order by the ArtbPricDesc column
 * @method     ChildCustomerPriceCodeQuery orderByArtbpricusesurchg($order = Criteria::ASC) Order by the ArtbPricUseSurchg column
 * @method     ChildCustomerPriceCodeQuery orderByArtbpricsurchgpct($order = Criteria::ASC) Order by the ArtbPricSurchgPct column
 * @method     ChildCustomerPriceCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerPriceCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerPriceCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerPriceCodeQuery groupByArtbpriccode() Group by the ArtbPricCode column
 * @method     ChildCustomerPriceCodeQuery groupByArtbpricdesc() Group by the ArtbPricDesc column
 * @method     ChildCustomerPriceCodeQuery groupByArtbpricusesurchg() Group by the ArtbPricUseSurchg column
 * @method     ChildCustomerPriceCodeQuery groupByArtbpricsurchgpct() Group by the ArtbPricSurchgPct column
 * @method     ChildCustomerPriceCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerPriceCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerPriceCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerPriceCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerPriceCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerPriceCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerPriceCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerPriceCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerPriceCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerPriceCode findOne(ConnectionInterface $con = null) Return the first ChildCustomerPriceCode matching the query
 * @method     ChildCustomerPriceCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerPriceCode matching the query, or a new ChildCustomerPriceCode object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerPriceCode findOneByArtbpriccode(string $ArtbPricCode) Return the first ChildCustomerPriceCode filtered by the ArtbPricCode column
 * @method     ChildCustomerPriceCode findOneByArtbpricdesc(string $ArtbPricDesc) Return the first ChildCustomerPriceCode filtered by the ArtbPricDesc column
 * @method     ChildCustomerPriceCode findOneByArtbpricusesurchg(string $ArtbPricUseSurchg) Return the first ChildCustomerPriceCode filtered by the ArtbPricUseSurchg column
 * @method     ChildCustomerPriceCode findOneByArtbpricsurchgpct(string $ArtbPricSurchgPct) Return the first ChildCustomerPriceCode filtered by the ArtbPricSurchgPct column
 * @method     ChildCustomerPriceCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerPriceCode filtered by the DateUpdtd column
 * @method     ChildCustomerPriceCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerPriceCode filtered by the TimeUpdtd column
 * @method     ChildCustomerPriceCode findOneByDummy(string $dummy) Return the first ChildCustomerPriceCode filtered by the dummy column *

 * @method     ChildCustomerPriceCode requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerPriceCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOne(ConnectionInterface $con = null) Return the first ChildCustomerPriceCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerPriceCode requireOneByArtbpriccode(string $ArtbPricCode) Return the first ChildCustomerPriceCode filtered by the ArtbPricCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOneByArtbpricdesc(string $ArtbPricDesc) Return the first ChildCustomerPriceCode filtered by the ArtbPricDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOneByArtbpricusesurchg(string $ArtbPricUseSurchg) Return the first ChildCustomerPriceCode filtered by the ArtbPricUseSurchg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOneByArtbpricsurchgpct(string $ArtbPricSurchgPct) Return the first ChildCustomerPriceCode filtered by the ArtbPricSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerPriceCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerPriceCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerPriceCode requireOneByDummy(string $dummy) Return the first ChildCustomerPriceCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerPriceCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerPriceCode objects based on current ModelCriteria
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByArtbpriccode(string $ArtbPricCode) Return ChildCustomerPriceCode objects filtered by the ArtbPricCode column
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByArtbpricdesc(string $ArtbPricDesc) Return ChildCustomerPriceCode objects filtered by the ArtbPricDesc column
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByArtbpricusesurchg(string $ArtbPricUseSurchg) Return ChildCustomerPriceCode objects filtered by the ArtbPricUseSurchg column
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByArtbpricsurchgpct(string $ArtbPricSurchgPct) Return ChildCustomerPriceCode objects filtered by the ArtbPricSurchgPct column
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerPriceCode objects filtered by the DateUpdtd column
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerPriceCode objects filtered by the TimeUpdtd column
 * @method     ChildCustomerPriceCode[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerPriceCode objects filtered by the dummy column
 * @method     ChildCustomerPriceCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerPriceCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerPriceCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerPriceCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerPriceCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerPriceCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerPriceCodeQuery) {
            return $criteria;
        }
        $query = new ChildCustomerPriceCodeQuery();
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
     * @return ChildCustomerPriceCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerPriceCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerPriceCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomerPriceCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbPricCode, ArtbPricDesc, ArtbPricUseSurchg, ArtbPricSurchgPct, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_price WHERE ArtbPricCode = :p0';
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
            /** @var ChildCustomerPriceCode $obj */
            $obj = new ChildCustomerPriceCode();
            $obj->hydrate($row);
            CustomerPriceCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomerPriceCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbPricCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpriccode('fooValue');   // WHERE ArtbPricCode = 'fooValue'
     * $query->filterByArtbpriccode('%fooValue%', Criteria::LIKE); // WHERE ArtbPricCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbpriccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByArtbpriccode($artbpriccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbpriccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICCODE, $artbpriccode, $comparison);
    }

    /**
     * Filter the query on the ArtbPricDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpricdesc('fooValue');   // WHERE ArtbPricDesc = 'fooValue'
     * $query->filterByArtbpricdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbPricDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbpricdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByArtbpricdesc($artbpricdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbpricdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICDESC, $artbpricdesc, $comparison);
    }

    /**
     * Filter the query on the ArtbPricUseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpricusesurchg('fooValue');   // WHERE ArtbPricUseSurchg = 'fooValue'
     * $query->filterByArtbpricusesurchg('%fooValue%', Criteria::LIKE); // WHERE ArtbPricUseSurchg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbpricusesurchg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByArtbpricusesurchg($artbpricusesurchg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbpricusesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICUSESURCHG, $artbpricusesurchg, $comparison);
    }

    /**
     * Filter the query on the ArtbPricSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpricsurchgpct(1234); // WHERE ArtbPricSurchgPct = 1234
     * $query->filterByArtbpricsurchgpct(array(12, 34)); // WHERE ArtbPricSurchgPct IN (12, 34)
     * $query->filterByArtbpricsurchgpct(array('min' => 12)); // WHERE ArtbPricSurchgPct > 12
     * </code>
     *
     * @param     mixed $artbpricsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByArtbpricsurchgpct($artbpricsurchgpct = null, $comparison = null)
    {
        if (is_array($artbpricsurchgpct)) {
            $useMinMax = false;
            if (isset($artbpricsurchgpct['min'])) {
                $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICSURCHGPCT, $artbpricsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbpricsurchgpct['max'])) {
                $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICSURCHGPCT, $artbpricsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICSURCHGPCT, $artbpricsurchgpct, $comparison);
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
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerPriceCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerPriceCode $customerPriceCode Object to remove from the list of results
     *
     * @return $this|ChildCustomerPriceCodeQuery The current query, for fluid interface
     */
    public function prune($customerPriceCode = null)
    {
        if ($customerPriceCode) {
            $this->addUsingAlias(CustomerPriceCodeTableMap::COL_ARTBPRICCODE, $customerPriceCode->getArtbpriccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_price table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerPriceCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerPriceCodeTableMap::clearInstancePool();
            CustomerPriceCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerPriceCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerPriceCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerPriceCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerPriceCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerPriceCodeQuery
