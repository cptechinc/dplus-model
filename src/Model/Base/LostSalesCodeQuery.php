<?php

namespace Base;

use \LostSalesCode as ChildLostSalesCode;
use \LostSalesCodeQuery as ChildLostSalesCodeQuery;
use \Exception;
use \PDO;
use Map\LostSalesCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_lssl_code` table.
 *
 * @method     ChildLostSalesCodeQuery orderByOetblsslcode($order = Criteria::ASC) Order by the OetbLsslCode column
 * @method     ChildLostSalesCodeQuery orderByOetblsslreasondesc($order = Criteria::ASC) Order by the OetbLsslReasonDesc column
 * @method     ChildLostSalesCodeQuery orderByOetblssliwupdate($order = Criteria::ASC) Order by the OetbLsslIwUpdate column
 * @method     ChildLostSalesCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildLostSalesCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildLostSalesCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildLostSalesCodeQuery groupByOetblsslcode() Group by the OetbLsslCode column
 * @method     ChildLostSalesCodeQuery groupByOetblsslreasondesc() Group by the OetbLsslReasonDesc column
 * @method     ChildLostSalesCodeQuery groupByOetblssliwupdate() Group by the OetbLsslIwUpdate column
 * @method     ChildLostSalesCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildLostSalesCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildLostSalesCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildLostSalesCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildLostSalesCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildLostSalesCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildLostSalesCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildLostSalesCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildLostSalesCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildLostSalesCode|null findOne(?ConnectionInterface $con = null) Return the first ChildLostSalesCode matching the query
 * @method     ChildLostSalesCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildLostSalesCode matching the query, or a new ChildLostSalesCode object populated from the query conditions when no match is found
 *
 * @method     ChildLostSalesCode|null findOneByOetblsslcode(string $OetbLsslCode) Return the first ChildLostSalesCode filtered by the OetbLsslCode column
 * @method     ChildLostSalesCode|null findOneByOetblsslreasondesc(string $OetbLsslReasonDesc) Return the first ChildLostSalesCode filtered by the OetbLsslReasonDesc column
 * @method     ChildLostSalesCode|null findOneByOetblssliwupdate(string $OetbLsslIwUpdate) Return the first ChildLostSalesCode filtered by the OetbLsslIwUpdate column
 * @method     ChildLostSalesCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildLostSalesCode filtered by the DateUpdtd column
 * @method     ChildLostSalesCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildLostSalesCode filtered by the TimeUpdtd column
 * @method     ChildLostSalesCode|null findOneByDummy(string $dummy) Return the first ChildLostSalesCode filtered by the dummy column
 *
 * @method     ChildLostSalesCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildLostSalesCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLostSalesCode requireOne(?ConnectionInterface $con = null) Return the first ChildLostSalesCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildLostSalesCode requireOneByOetblsslcode(string $OetbLsslCode) Return the first ChildLostSalesCode filtered by the OetbLsslCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLostSalesCode requireOneByOetblsslreasondesc(string $OetbLsslReasonDesc) Return the first ChildLostSalesCode filtered by the OetbLsslReasonDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLostSalesCode requireOneByOetblssliwupdate(string $OetbLsslIwUpdate) Return the first ChildLostSalesCode filtered by the OetbLsslIwUpdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLostSalesCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildLostSalesCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLostSalesCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildLostSalesCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildLostSalesCode requireOneByDummy(string $dummy) Return the first ChildLostSalesCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildLostSalesCode[]|Collection find(?ConnectionInterface $con = null) Return ChildLostSalesCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> find(?ConnectionInterface $con = null) Return ChildLostSalesCode objects based on current ModelCriteria
 *
 * @method     ChildLostSalesCode[]|Collection findByOetblsslcode(string|array<string> $OetbLsslCode) Return ChildLostSalesCode objects filtered by the OetbLsslCode column
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> findByOetblsslcode(string|array<string> $OetbLsslCode) Return ChildLostSalesCode objects filtered by the OetbLsslCode column
 * @method     ChildLostSalesCode[]|Collection findByOetblsslreasondesc(string|array<string> $OetbLsslReasonDesc) Return ChildLostSalesCode objects filtered by the OetbLsslReasonDesc column
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> findByOetblsslreasondesc(string|array<string> $OetbLsslReasonDesc) Return ChildLostSalesCode objects filtered by the OetbLsslReasonDesc column
 * @method     ChildLostSalesCode[]|Collection findByOetblssliwupdate(string|array<string> $OetbLsslIwUpdate) Return ChildLostSalesCode objects filtered by the OetbLsslIwUpdate column
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> findByOetblssliwupdate(string|array<string> $OetbLsslIwUpdate) Return ChildLostSalesCode objects filtered by the OetbLsslIwUpdate column
 * @method     ChildLostSalesCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildLostSalesCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildLostSalesCode objects filtered by the DateUpdtd column
 * @method     ChildLostSalesCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildLostSalesCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildLostSalesCode objects filtered by the TimeUpdtd column
 * @method     ChildLostSalesCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildLostSalesCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildLostSalesCode> findByDummy(string|array<string> $dummy) Return ChildLostSalesCode objects filtered by the dummy column
 *
 * @method     ChildLostSalesCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildLostSalesCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class LostSalesCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\LostSalesCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\LostSalesCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildLostSalesCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildLostSalesCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildLostSalesCodeQuery) {
            return $criteria;
        }
        $query = new ChildLostSalesCodeQuery();
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
     * @return ChildLostSalesCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(LostSalesCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = LostSalesCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildLostSalesCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbLsslCode, OetbLsslReasonDesc, OetbLsslIwUpdate, DateUpdtd, TimeUpdtd, dummy FROM so_lssl_code WHERE OetbLsslCode = :p0';
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
            /** @var ChildLostSalesCode $obj */
            $obj = new ChildLostSalesCode();
            $obj->hydrate($row);
            LostSalesCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildLostSalesCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(LostSalesCodeTableMap::COL_OETBLSSLCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(LostSalesCodeTableMap::COL_OETBLSSLCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the OetbLsslCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetblsslcode('fooValue');   // WHERE OetbLsslCode = 'fooValue'
     * $query->filterByOetblsslcode('%fooValue%', Criteria::LIKE); // WHERE OetbLsslCode LIKE '%fooValue%'
     * $query->filterByOetblsslcode(['foo', 'bar']); // WHERE OetbLsslCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetblsslcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetblsslcode($oetblsslcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetblsslcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(LostSalesCodeTableMap::COL_OETBLSSLCODE, $oetblsslcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbLsslReasonDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetblsslreasondesc('fooValue');   // WHERE OetbLsslReasonDesc = 'fooValue'
     * $query->filterByOetblsslreasondesc('%fooValue%', Criteria::LIKE); // WHERE OetbLsslReasonDesc LIKE '%fooValue%'
     * $query->filterByOetblsslreasondesc(['foo', 'bar']); // WHERE OetbLsslReasonDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetblsslreasondesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetblsslreasondesc($oetblsslreasondesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetblsslreasondesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(LostSalesCodeTableMap::COL_OETBLSSLREASONDESC, $oetblsslreasondesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbLsslIwUpdate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetblssliwupdate('fooValue');   // WHERE OetbLsslIwUpdate = 'fooValue'
     * $query->filterByOetblssliwupdate('%fooValue%', Criteria::LIKE); // WHERE OetbLsslIwUpdate LIKE '%fooValue%'
     * $query->filterByOetblssliwupdate(['foo', 'bar']); // WHERE OetbLsslIwUpdate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetblssliwupdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetblssliwupdate($oetblssliwupdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetblssliwupdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(LostSalesCodeTableMap::COL_OETBLSSLIWUPDATE, $oetblssliwupdate, $comparison);

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

        $this->addUsingAlias(LostSalesCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(LostSalesCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(LostSalesCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildLostSalesCode $lostSalesCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($lostSalesCode = null)
    {
        if ($lostSalesCode) {
            $this->addUsingAlias(LostSalesCodeTableMap::COL_OETBLSSLCODE, $lostSalesCode->getOetblsslcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_lssl_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(LostSalesCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LostSalesCodeTableMap::clearInstancePool();
            LostSalesCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(LostSalesCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(LostSalesCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            LostSalesCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            LostSalesCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
