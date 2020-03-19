<?php

namespace Base;

use \TaxCodeState as ChildTaxCodeState;
use \TaxCodeStateQuery as ChildTaxCodeStateQuery;
use \Exception;
use \PDO;
use Map\TaxCodeStateTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_txst' table.
 *
 *
 *
 * @method     ChildTaxCodeStateQuery orderByArtbstate($order = Criteria::ASC) Order by the ArtbState column
 * @method     ChildTaxCodeStateQuery orderByArtbtxsttaxcode($order = Criteria::ASC) Order by the ArtbTxstTaxCode column
 * @method     ChildTaxCodeStateQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildTaxCodeStateQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildTaxCodeStateQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildTaxCodeStateQuery groupByArtbstate() Group by the ArtbState column
 * @method     ChildTaxCodeStateQuery groupByArtbtxsttaxcode() Group by the ArtbTxstTaxCode column
 * @method     ChildTaxCodeStateQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildTaxCodeStateQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildTaxCodeStateQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildTaxCodeStateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTaxCodeStateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTaxCodeStateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTaxCodeStateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTaxCodeStateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTaxCodeStateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTaxCodeState findOne(ConnectionInterface $con = null) Return the first ChildTaxCodeState matching the query
 * @method     ChildTaxCodeState findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTaxCodeState matching the query, or a new ChildTaxCodeState object populated from the query conditions when no match is found
 *
 * @method     ChildTaxCodeState findOneByArtbstate(string $ArtbState) Return the first ChildTaxCodeState filtered by the ArtbState column
 * @method     ChildTaxCodeState findOneByArtbtxsttaxcode(string $ArtbTxstTaxCode) Return the first ChildTaxCodeState filtered by the ArtbTxstTaxCode column
 * @method     ChildTaxCodeState findOneByDateupdtd(string $DateUpdtd) Return the first ChildTaxCodeState filtered by the DateUpdtd column
 * @method     ChildTaxCodeState findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTaxCodeState filtered by the TimeUpdtd column
 * @method     ChildTaxCodeState findOneByDummy(string $dummy) Return the first ChildTaxCodeState filtered by the dummy column *

 * @method     ChildTaxCodeState requirePk($key, ConnectionInterface $con = null) Return the ChildTaxCodeState by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeState requireOne(ConnectionInterface $con = null) Return the first ChildTaxCodeState matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTaxCodeState requireOneByArtbstate(string $ArtbState) Return the first ChildTaxCodeState filtered by the ArtbState column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeState requireOneByArtbtxsttaxcode(string $ArtbTxstTaxCode) Return the first ChildTaxCodeState filtered by the ArtbTxstTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeState requireOneByDateupdtd(string $DateUpdtd) Return the first ChildTaxCodeState filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeState requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTaxCodeState filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeState requireOneByDummy(string $dummy) Return the first ChildTaxCodeState filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTaxCodeState[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTaxCodeState objects based on current ModelCriteria
 * @method     ChildTaxCodeState[]|ObjectCollection findByArtbstate(string $ArtbState) Return ChildTaxCodeState objects filtered by the ArtbState column
 * @method     ChildTaxCodeState[]|ObjectCollection findByArtbtxsttaxcode(string $ArtbTxstTaxCode) Return ChildTaxCodeState objects filtered by the ArtbTxstTaxCode column
 * @method     ChildTaxCodeState[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildTaxCodeState objects filtered by the DateUpdtd column
 * @method     ChildTaxCodeState[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildTaxCodeState objects filtered by the TimeUpdtd column
 * @method     ChildTaxCodeState[]|ObjectCollection findByDummy(string $dummy) Return ChildTaxCodeState objects filtered by the dummy column
 * @method     ChildTaxCodeState[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TaxCodeStateQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TaxCodeStateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\TaxCodeState', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTaxCodeStateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTaxCodeStateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTaxCodeStateQuery) {
            return $criteria;
        }
        $query = new ChildTaxCodeStateQuery();
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
     * @return ChildTaxCodeState|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TaxCodeStateTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TaxCodeStateTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTaxCodeState A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbState, ArtbTxstTaxCode, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_txst WHERE ArtbState = :p0';
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
            /** @var ChildTaxCodeState $obj */
            $obj = new ChildTaxCodeState();
            $obj->hydrate($row);
            TaxCodeStateTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTaxCodeState|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_ARTBSTATE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_ARTBSTATE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbState column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbstate('fooValue');   // WHERE ArtbState = 'fooValue'
     * $query->filterByArtbstate('%fooValue%', Criteria::LIKE); // WHERE ArtbState LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbstate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByArtbstate($artbstate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbstate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_ARTBSTATE, $artbstate, $comparison);
    }

    /**
     * Filter the query on the ArtbTxstTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtxsttaxcode('fooValue');   // WHERE ArtbTxstTaxCode = 'fooValue'
     * $query->filterByArtbtxsttaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbTxstTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbtxsttaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByArtbtxsttaxcode($artbtxsttaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtxsttaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_ARTBTXSTTAXCODE, $artbtxsttaxcode, $comparison);
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
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeStateTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTaxCodeState $taxCodeState Object to remove from the list of results
     *
     * @return $this|ChildTaxCodeStateQuery The current query, for fluid interface
     */
    public function prune($taxCodeState = null)
    {
        if ($taxCodeState) {
            $this->addUsingAlias(TaxCodeStateTableMap::COL_ARTBSTATE, $taxCodeState->getArtbstate(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_txst table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeStateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TaxCodeStateTableMap::clearInstancePool();
            TaxCodeStateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeStateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TaxCodeStateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TaxCodeStateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TaxCodeStateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TaxCodeStateQuery
