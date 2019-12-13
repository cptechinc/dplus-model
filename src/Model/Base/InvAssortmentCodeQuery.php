<?php

namespace Base;

use \InvAssortmentCode as ChildInvAssortmentCode;
use \InvAssortmentCodeQuery as ChildInvAssortmentCodeQuery;
use \Exception;
use \PDO;
use Map\InvAssortmentCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_asst_code' table.
 *
 *
 *
 * @method     ChildInvAssortmentCodeQuery orderByIntbasstcode($order = Criteria::ASC) Order by the IntbAsstCode column
 * @method     ChildInvAssortmentCodeQuery orderByIntbasstdesc($order = Criteria::ASC) Order by the IntbAsstDesc column
 * @method     ChildInvAssortmentCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvAssortmentCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvAssortmentCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvAssortmentCodeQuery groupByIntbasstcode() Group by the IntbAsstCode column
 * @method     ChildInvAssortmentCodeQuery groupByIntbasstdesc() Group by the IntbAsstDesc column
 * @method     ChildInvAssortmentCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvAssortmentCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvAssortmentCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvAssortmentCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvAssortmentCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvAssortmentCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvAssortmentCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvAssortmentCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvAssortmentCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvAssortmentCode findOne(ConnectionInterface $con = null) Return the first ChildInvAssortmentCode matching the query
 * @method     ChildInvAssortmentCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvAssortmentCode matching the query, or a new ChildInvAssortmentCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvAssortmentCode findOneByIntbasstcode(string $IntbAsstCode) Return the first ChildInvAssortmentCode filtered by the IntbAsstCode column
 * @method     ChildInvAssortmentCode findOneByIntbasstdesc(string $IntbAsstDesc) Return the first ChildInvAssortmentCode filtered by the IntbAsstDesc column
 * @method     ChildInvAssortmentCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvAssortmentCode filtered by the DateUpdtd column
 * @method     ChildInvAssortmentCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvAssortmentCode filtered by the TimeUpdtd column
 * @method     ChildInvAssortmentCode findOneByDummy(string $dummy) Return the first ChildInvAssortmentCode filtered by the dummy column *

 * @method     ChildInvAssortmentCode requirePk($key, ConnectionInterface $con = null) Return the ChildInvAssortmentCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAssortmentCode requireOne(ConnectionInterface $con = null) Return the first ChildInvAssortmentCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvAssortmentCode requireOneByIntbasstcode(string $IntbAsstCode) Return the first ChildInvAssortmentCode filtered by the IntbAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAssortmentCode requireOneByIntbasstdesc(string $IntbAsstDesc) Return the first ChildInvAssortmentCode filtered by the IntbAsstDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAssortmentCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvAssortmentCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAssortmentCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvAssortmentCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAssortmentCode requireOneByDummy(string $dummy) Return the first ChildInvAssortmentCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvAssortmentCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvAssortmentCode objects based on current ModelCriteria
 * @method     ChildInvAssortmentCode[]|ObjectCollection findByIntbasstcode(string $IntbAsstCode) Return ChildInvAssortmentCode objects filtered by the IntbAsstCode column
 * @method     ChildInvAssortmentCode[]|ObjectCollection findByIntbasstdesc(string $IntbAsstDesc) Return ChildInvAssortmentCode objects filtered by the IntbAsstDesc column
 * @method     ChildInvAssortmentCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvAssortmentCode objects filtered by the DateUpdtd column
 * @method     ChildInvAssortmentCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvAssortmentCode objects filtered by the TimeUpdtd column
 * @method     ChildInvAssortmentCode[]|ObjectCollection findByDummy(string $dummy) Return ChildInvAssortmentCode objects filtered by the dummy column
 * @method     ChildInvAssortmentCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvAssortmentCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvAssortmentCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvAssortmentCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvAssortmentCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvAssortmentCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvAssortmentCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvAssortmentCodeQuery();
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
     * @return ChildInvAssortmentCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvAssortmentCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvAssortmentCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvAssortmentCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbAsstCode, IntbAsstDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_asst_code WHERE IntbAsstCode = :p0';
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
            /** @var ChildInvAssortmentCode $obj */
            $obj = new ChildInvAssortmentCode();
            $obj->hydrate($row);
            InvAssortmentCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvAssortmentCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_INTBASSTCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_INTBASSTCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbasstcode('fooValue');   // WHERE IntbAsstCode = 'fooValue'
     * $query->filterByIntbasstcode('%fooValue%', Criteria::LIKE); // WHERE IntbAsstCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbasstcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByIntbasstcode($intbasstcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_INTBASSTCODE, $intbasstcode, $comparison);
    }

    /**
     * Filter the query on the IntbAsstDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbasstdesc('fooValue');   // WHERE IntbAsstDesc = 'fooValue'
     * $query->filterByIntbasstdesc('%fooValue%', Criteria::LIKE); // WHERE IntbAsstDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbasstdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByIntbasstdesc($intbasstdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbasstdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_INTBASSTDESC, $intbasstdesc, $comparison);
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
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAssortmentCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvAssortmentCode $invAssortmentCode Object to remove from the list of results
     *
     * @return $this|ChildInvAssortmentCodeQuery The current query, for fluid interface
     */
    public function prune($invAssortmentCode = null)
    {
        if ($invAssortmentCode) {
            $this->addUsingAlias(InvAssortmentCodeTableMap::COL_INTBASSTCODE, $invAssortmentCode->getIntbasstcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_asst_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvAssortmentCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvAssortmentCodeTableMap::clearInstancePool();
            InvAssortmentCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvAssortmentCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvAssortmentCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvAssortmentCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvAssortmentCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvAssortmentCodeQuery
