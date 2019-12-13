<?php

namespace Base;

use \InvStockCode as ChildInvStockCode;
use \InvStockCodeQuery as ChildInvStockCodeQuery;
use \Exception;
use \PDO;
use Map\InvStockCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_stck_code' table.
 *
 *
 *
 * @method     ChildInvStockCodeQuery orderByIntbstckcode($order = Criteria::ASC) Order by the IntbStckCode column
 * @method     ChildInvStockCodeQuery orderByIntbstckdesc($order = Criteria::ASC) Order by the IntbStckDesc column
 * @method     ChildInvStockCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvStockCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvStockCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvStockCodeQuery groupByIntbstckcode() Group by the IntbStckCode column
 * @method     ChildInvStockCodeQuery groupByIntbstckdesc() Group by the IntbStckDesc column
 * @method     ChildInvStockCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvStockCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvStockCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvStockCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvStockCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvStockCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvStockCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvStockCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvStockCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvStockCode findOne(ConnectionInterface $con = null) Return the first ChildInvStockCode matching the query
 * @method     ChildInvStockCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvStockCode matching the query, or a new ChildInvStockCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvStockCode findOneByIntbstckcode(string $IntbStckCode) Return the first ChildInvStockCode filtered by the IntbStckCode column
 * @method     ChildInvStockCode findOneByIntbstckdesc(string $IntbStckDesc) Return the first ChildInvStockCode filtered by the IntbStckDesc column
 * @method     ChildInvStockCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvStockCode filtered by the DateUpdtd column
 * @method     ChildInvStockCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvStockCode filtered by the TimeUpdtd column
 * @method     ChildInvStockCode findOneByDummy(string $dummy) Return the first ChildInvStockCode filtered by the dummy column *

 * @method     ChildInvStockCode requirePk($key, ConnectionInterface $con = null) Return the ChildInvStockCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvStockCode requireOne(ConnectionInterface $con = null) Return the first ChildInvStockCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvStockCode requireOneByIntbstckcode(string $IntbStckCode) Return the first ChildInvStockCode filtered by the IntbStckCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvStockCode requireOneByIntbstckdesc(string $IntbStckDesc) Return the first ChildInvStockCode filtered by the IntbStckDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvStockCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvStockCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvStockCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvStockCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvStockCode requireOneByDummy(string $dummy) Return the first ChildInvStockCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvStockCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvStockCode objects based on current ModelCriteria
 * @method     ChildInvStockCode[]|ObjectCollection findByIntbstckcode(string $IntbStckCode) Return ChildInvStockCode objects filtered by the IntbStckCode column
 * @method     ChildInvStockCode[]|ObjectCollection findByIntbstckdesc(string $IntbStckDesc) Return ChildInvStockCode objects filtered by the IntbStckDesc column
 * @method     ChildInvStockCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvStockCode objects filtered by the DateUpdtd column
 * @method     ChildInvStockCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvStockCode objects filtered by the TimeUpdtd column
 * @method     ChildInvStockCode[]|ObjectCollection findByDummy(string $dummy) Return ChildInvStockCode objects filtered by the dummy column
 * @method     ChildInvStockCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvStockCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvStockCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvStockCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvStockCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvStockCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvStockCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvStockCodeQuery();
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
     * @return ChildInvStockCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvStockCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvStockCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvStockCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbStckCode, IntbStckDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_stck_code WHERE IntbStckCode = :p0';
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
            /** @var ChildInvStockCode $obj */
            $obj = new ChildInvStockCode();
            $obj->hydrate($row);
            InvStockCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvStockCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvStockCodeTableMap::COL_INTBSTCKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvStockCodeTableMap::COL_INTBSTCKCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbStckCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbstckcode('fooValue');   // WHERE IntbStckCode = 'fooValue'
     * $query->filterByIntbstckcode('%fooValue%', Criteria::LIKE); // WHERE IntbStckCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbstckcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByIntbstckcode($intbstckcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbstckcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvStockCodeTableMap::COL_INTBSTCKCODE, $intbstckcode, $comparison);
    }

    /**
     * Filter the query on the IntbStckDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbstckdesc('fooValue');   // WHERE IntbStckDesc = 'fooValue'
     * $query->filterByIntbstckdesc('%fooValue%', Criteria::LIKE); // WHERE IntbStckDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbstckdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByIntbstckdesc($intbstckdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbstckdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvStockCodeTableMap::COL_INTBSTCKDESC, $intbstckdesc, $comparison);
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
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvStockCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvStockCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvStockCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvStockCode $invStockCode Object to remove from the list of results
     *
     * @return $this|ChildInvStockCodeQuery The current query, for fluid interface
     */
    public function prune($invStockCode = null)
    {
        if ($invStockCode) {
            $this->addUsingAlias(InvStockCodeTableMap::COL_INTBSTCKCODE, $invStockCode->getIntbstckcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_stck_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvStockCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvStockCodeTableMap::clearInstancePool();
            InvStockCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvStockCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvStockCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvStockCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvStockCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvStockCodeQuery
