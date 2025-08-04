<?php

namespace Base;

use \CustomerStockingCell as ChildCustomerStockingCell;
use \CustomerStockingCellQuery as ChildCustomerStockingCellQuery;
use \Exception;
use \PDO;
use Map\CustomerStockingCellTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_cell_code` table.
 *
 * @method     ChildCustomerStockingCellQuery orderByIntbcellcode($order = Criteria::ASC) Order by the IntbCellCode column
 * @method     ChildCustomerStockingCellQuery orderByIntbcelldesc($order = Criteria::ASC) Order by the IntbCellDesc column
 * @method     ChildCustomerStockingCellQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerStockingCellQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerStockingCellQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerStockingCellQuery groupByIntbcellcode() Group by the IntbCellCode column
 * @method     ChildCustomerStockingCellQuery groupByIntbcelldesc() Group by the IntbCellDesc column
 * @method     ChildCustomerStockingCellQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerStockingCellQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerStockingCellQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerStockingCellQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerStockingCellQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerStockingCellQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerStockingCellQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerStockingCellQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerStockingCellQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerStockingCell|null findOne(?ConnectionInterface $con = null) Return the first ChildCustomerStockingCell matching the query
 * @method     ChildCustomerStockingCell findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildCustomerStockingCell matching the query, or a new ChildCustomerStockingCell object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerStockingCell|null findOneByIntbcellcode(string $IntbCellCode) Return the first ChildCustomerStockingCell filtered by the IntbCellCode column
 * @method     ChildCustomerStockingCell|null findOneByIntbcelldesc(string $IntbCellDesc) Return the first ChildCustomerStockingCell filtered by the IntbCellDesc column
 * @method     ChildCustomerStockingCell|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerStockingCell filtered by the DateUpdtd column
 * @method     ChildCustomerStockingCell|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerStockingCell filtered by the TimeUpdtd column
 * @method     ChildCustomerStockingCell|null findOneByDummy(string $dummy) Return the first ChildCustomerStockingCell filtered by the dummy column
 *
 * @method     ChildCustomerStockingCell requirePk($key, ?ConnectionInterface $con = null) Return the ChildCustomerStockingCell by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerStockingCell requireOne(?ConnectionInterface $con = null) Return the first ChildCustomerStockingCell matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerStockingCell requireOneByIntbcellcode(string $IntbCellCode) Return the first ChildCustomerStockingCell filtered by the IntbCellCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerStockingCell requireOneByIntbcelldesc(string $IntbCellDesc) Return the first ChildCustomerStockingCell filtered by the IntbCellDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerStockingCell requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerStockingCell filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerStockingCell requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerStockingCell filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerStockingCell requireOneByDummy(string $dummy) Return the first ChildCustomerStockingCell filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerStockingCell[]|Collection find(?ConnectionInterface $con = null) Return ChildCustomerStockingCell objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildCustomerStockingCell> find(?ConnectionInterface $con = null) Return ChildCustomerStockingCell objects based on current ModelCriteria
 *
 * @method     ChildCustomerStockingCell[]|Collection findByIntbcellcode(string|array<string> $IntbCellCode) Return ChildCustomerStockingCell objects filtered by the IntbCellCode column
 * @psalm-method Collection&\Traversable<ChildCustomerStockingCell> findByIntbcellcode(string|array<string> $IntbCellCode) Return ChildCustomerStockingCell objects filtered by the IntbCellCode column
 * @method     ChildCustomerStockingCell[]|Collection findByIntbcelldesc(string|array<string> $IntbCellDesc) Return ChildCustomerStockingCell objects filtered by the IntbCellDesc column
 * @psalm-method Collection&\Traversable<ChildCustomerStockingCell> findByIntbcelldesc(string|array<string> $IntbCellDesc) Return ChildCustomerStockingCell objects filtered by the IntbCellDesc column
 * @method     ChildCustomerStockingCell[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildCustomerStockingCell objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildCustomerStockingCell> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildCustomerStockingCell objects filtered by the DateUpdtd column
 * @method     ChildCustomerStockingCell[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildCustomerStockingCell objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildCustomerStockingCell> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildCustomerStockingCell objects filtered by the TimeUpdtd column
 * @method     ChildCustomerStockingCell[]|Collection findByDummy(string|array<string> $dummy) Return ChildCustomerStockingCell objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildCustomerStockingCell> findByDummy(string|array<string> $dummy) Return ChildCustomerStockingCell objects filtered by the dummy column
 *
 * @method     ChildCustomerStockingCell[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildCustomerStockingCell> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class CustomerStockingCellQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerStockingCellQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerStockingCell', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerStockingCellQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerStockingCellQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildCustomerStockingCellQuery) {
            return $criteria;
        }
        $query = new ChildCustomerStockingCellQuery();
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
     * @return ChildCustomerStockingCell|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerStockingCellTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerStockingCellTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCustomerStockingCell A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbCellCode, IntbCellDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_cell_code WHERE IntbCellCode = :p0';
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
            /** @var ChildCustomerStockingCell $obj */
            $obj = new ChildCustomerStockingCell();
            $obj->hydrate($row);
            CustomerStockingCellTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildCustomerStockingCell|array|mixed the result, formatted by the current formatter
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
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_INTBCELLCODE, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_INTBCELLCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IntbCellCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcellcode('fooValue');   // WHERE IntbCellCode = 'fooValue'
     * $query->filterByIntbcellcode('%fooValue%', Criteria::LIKE); // WHERE IntbCellCode LIKE '%fooValue%'
     * $query->filterByIntbcellcode(['foo', 'bar']); // WHERE IntbCellCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcellcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcellcode($intbcellcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcellcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_INTBCELLCODE, $intbcellcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCellDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcelldesc('fooValue');   // WHERE IntbCellDesc = 'fooValue'
     * $query->filterByIntbcelldesc('%fooValue%', Criteria::LIKE); // WHERE IntbCellDesc LIKE '%fooValue%'
     * $query->filterByIntbcelldesc(['foo', 'bar']); // WHERE IntbCellDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcelldesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcelldesc($intbcelldesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcelldesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_INTBCELLDESC, $intbcelldesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerStockingCellTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildCustomerStockingCell $customerStockingCell Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($customerStockingCell = null)
    {
        if ($customerStockingCell) {
            $this->addUsingAlias(CustomerStockingCellTableMap::COL_INTBCELLCODE, $customerStockingCell->getIntbcellcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_cell_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerStockingCellTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerStockingCellTableMap::clearInstancePool();
            CustomerStockingCellTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerStockingCellTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerStockingCellTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerStockingCellTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerStockingCellTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
