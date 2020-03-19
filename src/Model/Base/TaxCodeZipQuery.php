<?php

namespace Base;

use \TaxCodeZip as ChildTaxCodeZip;
use \TaxCodeZipQuery as ChildTaxCodeZipQuery;
use \Exception;
use \PDO;
use Map\TaxCodeZipTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_txzp' table.
 *
 *
 *
 * @method     ChildTaxCodeZipQuery orderByArtbzipcode($order = Criteria::ASC) Order by the ArtbZipCode column
 * @method     ChildTaxCodeZipQuery orderByArtbtxzptaxcode($order = Criteria::ASC) Order by the ArtbTxzpTaxCode column
 * @method     ChildTaxCodeZipQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildTaxCodeZipQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildTaxCodeZipQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildTaxCodeZipQuery groupByArtbzipcode() Group by the ArtbZipCode column
 * @method     ChildTaxCodeZipQuery groupByArtbtxzptaxcode() Group by the ArtbTxzpTaxCode column
 * @method     ChildTaxCodeZipQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildTaxCodeZipQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildTaxCodeZipQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildTaxCodeZipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTaxCodeZipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTaxCodeZipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTaxCodeZipQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTaxCodeZipQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTaxCodeZipQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTaxCodeZip findOne(ConnectionInterface $con = null) Return the first ChildTaxCodeZip matching the query
 * @method     ChildTaxCodeZip findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTaxCodeZip matching the query, or a new ChildTaxCodeZip object populated from the query conditions when no match is found
 *
 * @method     ChildTaxCodeZip findOneByArtbzipcode(string $ArtbZipCode) Return the first ChildTaxCodeZip filtered by the ArtbZipCode column
 * @method     ChildTaxCodeZip findOneByArtbtxzptaxcode(string $ArtbTxzpTaxCode) Return the first ChildTaxCodeZip filtered by the ArtbTxzpTaxCode column
 * @method     ChildTaxCodeZip findOneByDateupdtd(string $DateUpdtd) Return the first ChildTaxCodeZip filtered by the DateUpdtd column
 * @method     ChildTaxCodeZip findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTaxCodeZip filtered by the TimeUpdtd column
 * @method     ChildTaxCodeZip findOneByDummy(string $dummy) Return the first ChildTaxCodeZip filtered by the dummy column *

 * @method     ChildTaxCodeZip requirePk($key, ConnectionInterface $con = null) Return the ChildTaxCodeZip by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeZip requireOne(ConnectionInterface $con = null) Return the first ChildTaxCodeZip matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTaxCodeZip requireOneByArtbzipcode(string $ArtbZipCode) Return the first ChildTaxCodeZip filtered by the ArtbZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeZip requireOneByArtbtxzptaxcode(string $ArtbTxzpTaxCode) Return the first ChildTaxCodeZip filtered by the ArtbTxzpTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeZip requireOneByDateupdtd(string $DateUpdtd) Return the first ChildTaxCodeZip filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeZip requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTaxCodeZip filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeZip requireOneByDummy(string $dummy) Return the first ChildTaxCodeZip filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTaxCodeZip[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTaxCodeZip objects based on current ModelCriteria
 * @method     ChildTaxCodeZip[]|ObjectCollection findByArtbzipcode(string $ArtbZipCode) Return ChildTaxCodeZip objects filtered by the ArtbZipCode column
 * @method     ChildTaxCodeZip[]|ObjectCollection findByArtbtxzptaxcode(string $ArtbTxzpTaxCode) Return ChildTaxCodeZip objects filtered by the ArtbTxzpTaxCode column
 * @method     ChildTaxCodeZip[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildTaxCodeZip objects filtered by the DateUpdtd column
 * @method     ChildTaxCodeZip[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildTaxCodeZip objects filtered by the TimeUpdtd column
 * @method     ChildTaxCodeZip[]|ObjectCollection findByDummy(string $dummy) Return ChildTaxCodeZip objects filtered by the dummy column
 * @method     ChildTaxCodeZip[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TaxCodeZipQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TaxCodeZipQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\TaxCodeZip', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTaxCodeZipQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTaxCodeZipQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTaxCodeZipQuery) {
            return $criteria;
        }
        $query = new ChildTaxCodeZipQuery();
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
     * @return ChildTaxCodeZip|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TaxCodeZipTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TaxCodeZipTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTaxCodeZip A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbZipCode, ArtbTxzpTaxCode, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_txzp WHERE ArtbZipCode = :p0';
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
            /** @var ChildTaxCodeZip $obj */
            $obj = new ChildTaxCodeZip();
            $obj->hydrate($row);
            TaxCodeZipTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTaxCodeZip|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_ARTBZIPCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_ARTBZIPCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbzipcode('fooValue');   // WHERE ArtbZipCode = 'fooValue'
     * $query->filterByArtbzipcode('%fooValue%', Criteria::LIKE); // WHERE ArtbZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByArtbzipcode($artbzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_ARTBZIPCODE, $artbzipcode, $comparison);
    }

    /**
     * Filter the query on the ArtbTxzpTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtxzptaxcode('fooValue');   // WHERE ArtbTxzpTaxCode = 'fooValue'
     * $query->filterByArtbtxzptaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbTxzpTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbtxzptaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByArtbtxzptaxcode($artbtxzptaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtxzptaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_ARTBTXZPTAXCODE, $artbtxzptaxcode, $comparison);
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
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeZipTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTaxCodeZip $taxCodeZip Object to remove from the list of results
     *
     * @return $this|ChildTaxCodeZipQuery The current query, for fluid interface
     */
    public function prune($taxCodeZip = null)
    {
        if ($taxCodeZip) {
            $this->addUsingAlias(TaxCodeZipTableMap::COL_ARTBZIPCODE, $taxCodeZip->getArtbzipcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_txzp table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeZipTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TaxCodeZipTableMap::clearInstancePool();
            TaxCodeZipTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeZipTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TaxCodeZipTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TaxCodeZipTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TaxCodeZipTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TaxCodeZipQuery
