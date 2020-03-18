<?php

namespace Base;

use \ShiptoUserCode as ChildShiptoUserCode;
use \ShiptoUserCodeQuery as ChildShiptoUserCodeQuery;
use \Exception;
use \PDO;
use Map\ShiptoUserCodeTableMap;
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
 * @method     ChildShiptoUserCodeQuery orderByArtbsusrcode($order = Criteria::ASC) Order by the ArtbSusrCode column
 * @method     ChildShiptoUserCodeQuery orderByArtbsusrdesc($order = Criteria::ASC) Order by the ArtbSusrDesc column
 * @method     ChildShiptoUserCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildShiptoUserCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildShiptoUserCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildShiptoUserCodeQuery groupByArtbsusrcode() Group by the ArtbSusrCode column
 * @method     ChildShiptoUserCodeQuery groupByArtbsusrdesc() Group by the ArtbSusrDesc column
 * @method     ChildShiptoUserCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildShiptoUserCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildShiptoUserCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildShiptoUserCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildShiptoUserCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildShiptoUserCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildShiptoUserCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildShiptoUserCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildShiptoUserCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildShiptoUserCode findOne(ConnectionInterface $con = null) Return the first ChildShiptoUserCode matching the query
 * @method     ChildShiptoUserCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildShiptoUserCode matching the query, or a new ChildShiptoUserCode object populated from the query conditions when no match is found
 *
 * @method     ChildShiptoUserCode findOneByArtbsusrcode(string $ArtbSusrCode) Return the first ChildShiptoUserCode filtered by the ArtbSusrCode column
 * @method     ChildShiptoUserCode findOneByArtbsusrdesc(string $ArtbSusrDesc) Return the first ChildShiptoUserCode filtered by the ArtbSusrDesc column
 * @method     ChildShiptoUserCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildShiptoUserCode filtered by the DateUpdtd column
 * @method     ChildShiptoUserCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildShiptoUserCode filtered by the TimeUpdtd column
 * @method     ChildShiptoUserCode findOneByDummy(string $dummy) Return the first ChildShiptoUserCode filtered by the dummy column *

 * @method     ChildShiptoUserCode requirePk($key, ConnectionInterface $con = null) Return the ChildShiptoUserCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShiptoUserCode requireOne(ConnectionInterface $con = null) Return the first ChildShiptoUserCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildShiptoUserCode requireOneByArtbsusrcode(string $ArtbSusrCode) Return the first ChildShiptoUserCode filtered by the ArtbSusrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShiptoUserCode requireOneByArtbsusrdesc(string $ArtbSusrDesc) Return the first ChildShiptoUserCode filtered by the ArtbSusrDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShiptoUserCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildShiptoUserCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShiptoUserCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildShiptoUserCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildShiptoUserCode requireOneByDummy(string $dummy) Return the first ChildShiptoUserCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildShiptoUserCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildShiptoUserCode objects based on current ModelCriteria
 * @method     ChildShiptoUserCode[]|ObjectCollection findByArtbsusrcode(string $ArtbSusrCode) Return ChildShiptoUserCode objects filtered by the ArtbSusrCode column
 * @method     ChildShiptoUserCode[]|ObjectCollection findByArtbsusrdesc(string $ArtbSusrDesc) Return ChildShiptoUserCode objects filtered by the ArtbSusrDesc column
 * @method     ChildShiptoUserCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildShiptoUserCode objects filtered by the DateUpdtd column
 * @method     ChildShiptoUserCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildShiptoUserCode objects filtered by the TimeUpdtd column
 * @method     ChildShiptoUserCode[]|ObjectCollection findByDummy(string $dummy) Return ChildShiptoUserCode objects filtered by the dummy column
 * @method     ChildShiptoUserCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ShiptoUserCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ShiptoUserCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ShiptoUserCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildShiptoUserCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildShiptoUserCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildShiptoUserCodeQuery) {
            return $criteria;
        }
        $query = new ChildShiptoUserCodeQuery();
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
     * @return ChildShiptoUserCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ShiptoUserCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ShiptoUserCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildShiptoUserCode A model object, or null if the key is not found
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
            /** @var ChildShiptoUserCode $obj */
            $obj = new ChildShiptoUserCode();
            $obj->hydrate($row);
            ShiptoUserCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildShiptoUserCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $keys, Criteria::IN);
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
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByArtbsusrcode($artbsusrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsusrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $artbsusrcode, $comparison);
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
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByArtbsusrdesc($artbsusrdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsusrdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_ARTBSUSRDESC, $artbsusrdesc, $comparison);
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
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ShiptoUserCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildShiptoUserCode $shiptoUserCode Object to remove from the list of results
     *
     * @return $this|ChildShiptoUserCodeQuery The current query, for fluid interface
     */
    public function prune($shiptoUserCode = null)
    {
        if ($shiptoUserCode) {
            $this->addUsingAlias(ShiptoUserCodeTableMap::COL_ARTBSUSRCODE, $shiptoUserCode->getArtbsusrcode(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(ShiptoUserCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ShiptoUserCodeTableMap::clearInstancePool();
            ShiptoUserCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ShiptoUserCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ShiptoUserCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ShiptoUserCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ShiptoUserCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ShiptoUserCodeQuery
