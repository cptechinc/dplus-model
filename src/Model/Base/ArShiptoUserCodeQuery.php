<?php

namespace Base;

use \ArShiptoUserCode as ChildArShiptoUserCode;
use \ArShiptoUserCodeQuery as ChildArShiptoUserCodeQuery;
use \Exception;
use \PDO;
use Map\ArShiptoUserCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_susr' table.
 *
 *
 *
 * @method     ChildArShiptoUserCodeQuery orderByArtbsusrcode($order = Criteria::ASC) Order by the ArtbSusrCode column
 * @method     ChildArShiptoUserCodeQuery orderByArtbsusrdesc($order = Criteria::ASC) Order by the ArtbSusrDesc column
 * @method     ChildArShiptoUserCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArShiptoUserCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArShiptoUserCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArShiptoUserCodeQuery groupByArtbsusrcode() Group by the ArtbSusrCode column
 * @method     ChildArShiptoUserCodeQuery groupByArtbsusrdesc() Group by the ArtbSusrDesc column
 * @method     ChildArShiptoUserCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArShiptoUserCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArShiptoUserCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArShiptoUserCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArShiptoUserCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArShiptoUserCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArShiptoUserCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArShiptoUserCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArShiptoUserCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArShiptoUserCode findOne(ConnectionInterface $con = null) Return the first ChildArShiptoUserCode matching the query
 * @method     ChildArShiptoUserCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArShiptoUserCode matching the query, or a new ChildArShiptoUserCode object populated from the query conditions when no match is found
 *
 * @method     ChildArShiptoUserCode findOneByArtbsusrcode(string $ArtbSusrCode) Return the first ChildArShiptoUserCode filtered by the ArtbSusrCode column
 * @method     ChildArShiptoUserCode findOneByArtbsusrdesc(string $ArtbSusrDesc) Return the first ChildArShiptoUserCode filtered by the ArtbSusrDesc column
 * @method     ChildArShiptoUserCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildArShiptoUserCode filtered by the DateUpdtd column
 * @method     ChildArShiptoUserCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArShiptoUserCode filtered by the TimeUpdtd column
 * @method     ChildArShiptoUserCode findOneByDummy(string $dummy) Return the first ChildArShiptoUserCode filtered by the dummy column *

 * @method     ChildArShiptoUserCode requirePk($key, ConnectionInterface $con = null) Return the ChildArShiptoUserCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShiptoUserCode requireOne(ConnectionInterface $con = null) Return the first ChildArShiptoUserCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArShiptoUserCode requireOneByArtbsusrcode(string $ArtbSusrCode) Return the first ChildArShiptoUserCode filtered by the ArtbSusrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShiptoUserCode requireOneByArtbsusrdesc(string $ArtbSusrDesc) Return the first ChildArShiptoUserCode filtered by the ArtbSusrDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShiptoUserCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArShiptoUserCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShiptoUserCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArShiptoUserCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArShiptoUserCode requireOneByDummy(string $dummy) Return the first ChildArShiptoUserCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArShiptoUserCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArShiptoUserCode objects based on current ModelCriteria
 * @method     ChildArShiptoUserCode[]|ObjectCollection findByArtbsusrcode(string $ArtbSusrCode) Return ChildArShiptoUserCode objects filtered by the ArtbSusrCode column
 * @method     ChildArShiptoUserCode[]|ObjectCollection findByArtbsusrdesc(string $ArtbSusrDesc) Return ChildArShiptoUserCode objects filtered by the ArtbSusrDesc column
 * @method     ChildArShiptoUserCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArShiptoUserCode objects filtered by the DateUpdtd column
 * @method     ChildArShiptoUserCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArShiptoUserCode objects filtered by the TimeUpdtd column
 * @method     ChildArShiptoUserCode[]|ObjectCollection findByDummy(string $dummy) Return ChildArShiptoUserCode objects filtered by the dummy column
 * @method     ChildArShiptoUserCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArShiptoUserCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArShiptoUserCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArShiptoUserCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArShiptoUserCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArShiptoUserCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArShiptoUserCodeQuery) {
            return $criteria;
        }
        $query = new ChildArShiptoUserCodeQuery();
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
     * @return ChildArShiptoUserCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArShiptoUserCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArShiptoUserCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArShiptoUserCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbSusrCode, ArtbSusrDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_susr WHERE ArtbSusrCode = :p0';
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
            /** @var ChildArShiptoUserCode $obj */
            $obj = new ChildArShiptoUserCode();
            $obj->hydrate($row);
            ArShiptoUserCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArShiptoUserCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbSusrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsusrcode('fooValue');   // WHERE ArtbSusrCode = 'fooValue'
     * $query->filterByArtbsusrcode('%fooValue%', Criteria::LIKE); // WHERE ArtbSusrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsusrcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByArtbsusrcode($artbsusrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsusrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $artbsusrcode, $comparison);
    }

    /**
     * Filter the query on the ArtbSusrDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsusrdesc('fooValue');   // WHERE ArtbSusrDesc = 'fooValue'
     * $query->filterByArtbsusrdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbSusrDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbsusrdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByArtbsusrdesc($artbsusrdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsusrdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_ARTBSUSRDESC, $artbsusrdesc, $comparison);
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
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArShiptoUserCode $shiptoUserCode Object to remove from the list of results
     *
     * @return $this|ChildArShiptoUserCodeQuery The current query, for fluid interface
     */
    public function prune($shiptoUserCode = null)
    {
        if ($shiptoUserCode) {
            $this->addUsingAlias(ArShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $shiptoUserCode->getArtbsusrcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_susr table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArShiptoUserCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArShiptoUserCodeTableMap::clearInstancePool();
            ArShiptoUserCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArShiptoUserCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArShiptoUserCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArShiptoUserCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArShiptoUserCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArShiptoUserCodeQuery
