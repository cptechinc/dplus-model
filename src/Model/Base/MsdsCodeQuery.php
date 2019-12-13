<?php

namespace Base;

use \MsdsCode as ChildMsdsCode;
use \MsdsCodeQuery as ChildMsdsCodeQuery;
use \Exception;
use \PDO;
use Map\MsdsCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_msds_code' table.
 *
 *
 *
 * @method     ChildMsdsCodeQuery orderByIntbmsdscode($order = Criteria::ASC) Order by the IntbMsdsCode column
 * @method     ChildMsdsCodeQuery orderByIntbmsdsdesc($order = Criteria::ASC) Order by the IntbMsdsDesc column
 * @method     ChildMsdsCodeQuery orderByIntbmsdsefftdate($order = Criteria::ASC) Order by the IntbMsdsEfftDate column
 * @method     ChildMsdsCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildMsdsCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildMsdsCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildMsdsCodeQuery groupByIntbmsdscode() Group by the IntbMsdsCode column
 * @method     ChildMsdsCodeQuery groupByIntbmsdsdesc() Group by the IntbMsdsDesc column
 * @method     ChildMsdsCodeQuery groupByIntbmsdsefftdate() Group by the IntbMsdsEfftDate column
 * @method     ChildMsdsCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildMsdsCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildMsdsCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildMsdsCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildMsdsCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildMsdsCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildMsdsCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildMsdsCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildMsdsCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildMsdsCode findOne(ConnectionInterface $con = null) Return the first ChildMsdsCode matching the query
 * @method     ChildMsdsCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildMsdsCode matching the query, or a new ChildMsdsCode object populated from the query conditions when no match is found
 *
 * @method     ChildMsdsCode findOneByIntbmsdscode(string $IntbMsdsCode) Return the first ChildMsdsCode filtered by the IntbMsdsCode column
 * @method     ChildMsdsCode findOneByIntbmsdsdesc(string $IntbMsdsDesc) Return the first ChildMsdsCode filtered by the IntbMsdsDesc column
 * @method     ChildMsdsCode findOneByIntbmsdsefftdate(string $IntbMsdsEfftDate) Return the first ChildMsdsCode filtered by the IntbMsdsEfftDate column
 * @method     ChildMsdsCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildMsdsCode filtered by the DateUpdtd column
 * @method     ChildMsdsCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildMsdsCode filtered by the TimeUpdtd column
 * @method     ChildMsdsCode findOneByDummy(string $dummy) Return the first ChildMsdsCode filtered by the dummy column *

 * @method     ChildMsdsCode requirePk($key, ConnectionInterface $con = null) Return the ChildMsdsCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsdsCode requireOne(ConnectionInterface $con = null) Return the first ChildMsdsCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMsdsCode requireOneByIntbmsdscode(string $IntbMsdsCode) Return the first ChildMsdsCode filtered by the IntbMsdsCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsdsCode requireOneByIntbmsdsdesc(string $IntbMsdsDesc) Return the first ChildMsdsCode filtered by the IntbMsdsDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsdsCode requireOneByIntbmsdsefftdate(string $IntbMsdsEfftDate) Return the first ChildMsdsCode filtered by the IntbMsdsEfftDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsdsCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildMsdsCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsdsCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildMsdsCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsdsCode requireOneByDummy(string $dummy) Return the first ChildMsdsCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMsdsCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildMsdsCode objects based on current ModelCriteria
 * @method     ChildMsdsCode[]|ObjectCollection findByIntbmsdscode(string $IntbMsdsCode) Return ChildMsdsCode objects filtered by the IntbMsdsCode column
 * @method     ChildMsdsCode[]|ObjectCollection findByIntbmsdsdesc(string $IntbMsdsDesc) Return ChildMsdsCode objects filtered by the IntbMsdsDesc column
 * @method     ChildMsdsCode[]|ObjectCollection findByIntbmsdsefftdate(string $IntbMsdsEfftDate) Return ChildMsdsCode objects filtered by the IntbMsdsEfftDate column
 * @method     ChildMsdsCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildMsdsCode objects filtered by the DateUpdtd column
 * @method     ChildMsdsCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildMsdsCode objects filtered by the TimeUpdtd column
 * @method     ChildMsdsCode[]|ObjectCollection findByDummy(string $dummy) Return ChildMsdsCode objects filtered by the dummy column
 * @method     ChildMsdsCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class MsdsCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\MsdsCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\MsdsCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildMsdsCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildMsdsCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildMsdsCodeQuery) {
            return $criteria;
        }
        $query = new ChildMsdsCodeQuery();
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
     * @return ChildMsdsCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(MsdsCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = MsdsCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildMsdsCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbMsdsCode, IntbMsdsDesc, IntbMsdsEfftDate, DateUpdtd, TimeUpdtd, dummy FROM inv_msds_code WHERE IntbMsdsCode = :p0';
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
            /** @var ChildMsdsCode $obj */
            $obj = new ChildMsdsCode();
            $obj->hydrate($row);
            MsdsCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildMsdsCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MsdsCodeTableMap::COL_INTBMSDSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MsdsCodeTableMap::COL_INTBMSDSCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbMsdsCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbmsdscode('fooValue');   // WHERE IntbMsdsCode = 'fooValue'
     * $query->filterByIntbmsdscode('%fooValue%', Criteria::LIKE); // WHERE IntbMsdsCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbmsdscode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByIntbmsdscode($intbmsdscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbmsdscode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsdsCodeTableMap::COL_INTBMSDSCODE, $intbmsdscode, $comparison);
    }

    /**
     * Filter the query on the IntbMsdsDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbmsdsdesc('fooValue');   // WHERE IntbMsdsDesc = 'fooValue'
     * $query->filterByIntbmsdsdesc('%fooValue%', Criteria::LIKE); // WHERE IntbMsdsDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbmsdsdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByIntbmsdsdesc($intbmsdsdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbmsdsdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsdsCodeTableMap::COL_INTBMSDSDESC, $intbmsdsdesc, $comparison);
    }

    /**
     * Filter the query on the IntbMsdsEfftDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbmsdsefftdate('fooValue');   // WHERE IntbMsdsEfftDate = 'fooValue'
     * $query->filterByIntbmsdsefftdate('%fooValue%', Criteria::LIKE); // WHERE IntbMsdsEfftDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbmsdsefftdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByIntbmsdsefftdate($intbmsdsefftdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbmsdsefftdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsdsCodeTableMap::COL_INTBMSDSEFFTDATE, $intbmsdsefftdate, $comparison);
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
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsdsCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsdsCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsdsCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildMsdsCode $msdsCode Object to remove from the list of results
     *
     * @return $this|ChildMsdsCodeQuery The current query, for fluid interface
     */
    public function prune($msdsCode = null)
    {
        if ($msdsCode) {
            $this->addUsingAlias(MsdsCodeTableMap::COL_INTBMSDSCODE, $msdsCode->getIntbmsdscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_msds_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MsdsCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MsdsCodeTableMap::clearInstancePool();
            MsdsCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(MsdsCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(MsdsCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            MsdsCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            MsdsCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // MsdsCodeQuery
