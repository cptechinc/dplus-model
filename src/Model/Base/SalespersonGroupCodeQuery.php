<?php

namespace Base;

use \SalespersonGroupCode as ChildSalespersonGroupCode;
use \SalespersonGroupCodeQuery as ChildSalespersonGroupCodeQuery;
use \Exception;
use \PDO;
use Map\SalespersonGroupCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_spgp' table.
 *
 *
 *
 * @method     ChildSalespersonGroupCodeQuery orderByArtbspgpcode($order = Criteria::ASC) Order by the ArtbSpgpCode column
 * @method     ChildSalespersonGroupCodeQuery orderByArtbspgpdesc($order = Criteria::ASC) Order by the ArtbSpgpDesc column
 * @method     ChildSalespersonGroupCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalespersonGroupCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalespersonGroupCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalespersonGroupCodeQuery groupByArtbspgpcode() Group by the ArtbSpgpCode column
 * @method     ChildSalespersonGroupCodeQuery groupByArtbspgpdesc() Group by the ArtbSpgpDesc column
 * @method     ChildSalespersonGroupCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalespersonGroupCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalespersonGroupCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalespersonGroupCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalespersonGroupCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalespersonGroupCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalespersonGroupCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalespersonGroupCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalespersonGroupCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalespersonGroupCode findOne(ConnectionInterface $con = null) Return the first ChildSalespersonGroupCode matching the query
 * @method     ChildSalespersonGroupCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalespersonGroupCode matching the query, or a new ChildSalespersonGroupCode object populated from the query conditions when no match is found
 *
 * @method     ChildSalespersonGroupCode findOneByArtbspgpcode(string $ArtbSpgpCode) Return the first ChildSalespersonGroupCode filtered by the ArtbSpgpCode column
 * @method     ChildSalespersonGroupCode findOneByArtbspgpdesc(string $ArtbSpgpDesc) Return the first ChildSalespersonGroupCode filtered by the ArtbSpgpDesc column
 * @method     ChildSalespersonGroupCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalespersonGroupCode filtered by the DateUpdtd column
 * @method     ChildSalespersonGroupCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalespersonGroupCode filtered by the TimeUpdtd column
 * @method     ChildSalespersonGroupCode findOneByDummy(string $dummy) Return the first ChildSalespersonGroupCode filtered by the dummy column *

 * @method     ChildSalespersonGroupCode requirePk($key, ConnectionInterface $con = null) Return the ChildSalespersonGroupCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalespersonGroupCode requireOne(ConnectionInterface $con = null) Return the first ChildSalespersonGroupCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalespersonGroupCode requireOneByArtbspgpcode(string $ArtbSpgpCode) Return the first ChildSalespersonGroupCode filtered by the ArtbSpgpCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalespersonGroupCode requireOneByArtbspgpdesc(string $ArtbSpgpDesc) Return the first ChildSalespersonGroupCode filtered by the ArtbSpgpDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalespersonGroupCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalespersonGroupCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalespersonGroupCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalespersonGroupCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalespersonGroupCode requireOneByDummy(string $dummy) Return the first ChildSalespersonGroupCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalespersonGroupCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalespersonGroupCode objects based on current ModelCriteria
 * @method     ChildSalespersonGroupCode[]|ObjectCollection findByArtbspgpcode(string $ArtbSpgpCode) Return ChildSalespersonGroupCode objects filtered by the ArtbSpgpCode column
 * @method     ChildSalespersonGroupCode[]|ObjectCollection findByArtbspgpdesc(string $ArtbSpgpDesc) Return ChildSalespersonGroupCode objects filtered by the ArtbSpgpDesc column
 * @method     ChildSalespersonGroupCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalespersonGroupCode objects filtered by the DateUpdtd column
 * @method     ChildSalespersonGroupCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalespersonGroupCode objects filtered by the TimeUpdtd column
 * @method     ChildSalespersonGroupCode[]|ObjectCollection findByDummy(string $dummy) Return ChildSalespersonGroupCode objects filtered by the dummy column
 * @method     ChildSalespersonGroupCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalespersonGroupCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalespersonGroupCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalespersonGroupCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalespersonGroupCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalespersonGroupCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalespersonGroupCodeQuery) {
            return $criteria;
        }
        $query = new ChildSalespersonGroupCodeQuery();
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
     * @return ChildSalespersonGroupCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalespersonGroupCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalespersonGroupCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSalespersonGroupCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbSpgpCode, ArtbSpgpDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_spgp WHERE ArtbSpgpCode = :p0';
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
            /** @var ChildSalespersonGroupCode $obj */
            $obj = new ChildSalespersonGroupCode();
            $obj->hydrate($row);
            SalespersonGroupCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSalespersonGroupCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_ARTBSPGPCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_ARTBSPGPCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbSpgpCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbspgpcode('fooValue');   // WHERE ArtbSpgpCode = 'fooValue'
     * $query->filterByArtbspgpcode('%fooValue%', Criteria::LIKE); // WHERE ArtbSpgpCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbspgpcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByArtbspgpcode($artbspgpcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbspgpcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_ARTBSPGPCODE, $artbspgpcode, $comparison);
    }

    /**
     * Filter the query on the ArtbSpgpDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbspgpdesc('fooValue');   // WHERE ArtbSpgpDesc = 'fooValue'
     * $query->filterByArtbspgpdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbSpgpDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbspgpdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByArtbspgpdesc($artbspgpdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbspgpdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_ARTBSPGPDESC, $artbspgpdesc, $comparison);
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
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalespersonGroupCode $salespersonGroupCode Object to remove from the list of results
     *
     * @return $this|ChildSalespersonGroupCodeQuery The current query, for fluid interface
     */
    public function prune($salespersonGroupCode = null)
    {
        if ($salespersonGroupCode) {
            $this->addUsingAlias(SalespersonGroupCodeTableMap::COL_ARTBSPGPCODE, $salespersonGroupCode->getArtbspgpcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_spgp table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalespersonGroupCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalespersonGroupCodeTableMap::clearInstancePool();
            SalespersonGroupCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalespersonGroupCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalespersonGroupCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalespersonGroupCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalespersonGroupCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalespersonGroupCodeQuery
