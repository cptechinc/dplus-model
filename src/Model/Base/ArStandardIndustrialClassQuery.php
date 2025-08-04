<?php

namespace Base;

use \ArStandardIndustrialClass as ChildArStandardIndustrialClass;
use \ArStandardIndustrialClassQuery as ChildArStandardIndustrialClassQuery;
use \Exception;
use \PDO;
use Map\ArStandardIndustrialClassTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_sic` table.
 *
 * @method     ChildArStandardIndustrialClassQuery orderByArtbsiccode($order = Criteria::ASC) Order by the ArtbSicCode column
 * @method     ChildArStandardIndustrialClassQuery orderByArtbsicdesc($order = Criteria::ASC) Order by the ArtbSicDesc column
 * @method     ChildArStandardIndustrialClassQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArStandardIndustrialClassQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArStandardIndustrialClassQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArStandardIndustrialClassQuery groupByArtbsiccode() Group by the ArtbSicCode column
 * @method     ChildArStandardIndustrialClassQuery groupByArtbsicdesc() Group by the ArtbSicDesc column
 * @method     ChildArStandardIndustrialClassQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArStandardIndustrialClassQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArStandardIndustrialClassQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArStandardIndustrialClassQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArStandardIndustrialClassQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArStandardIndustrialClassQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArStandardIndustrialClassQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArStandardIndustrialClassQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArStandardIndustrialClassQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArStandardIndustrialClass|null findOne(?ConnectionInterface $con = null) Return the first ChildArStandardIndustrialClass matching the query
 * @method     ChildArStandardIndustrialClass findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArStandardIndustrialClass matching the query, or a new ChildArStandardIndustrialClass object populated from the query conditions when no match is found
 *
 * @method     ChildArStandardIndustrialClass|null findOneByArtbsiccode(string $ArtbSicCode) Return the first ChildArStandardIndustrialClass filtered by the ArtbSicCode column
 * @method     ChildArStandardIndustrialClass|null findOneByArtbsicdesc(string $ArtbSicDesc) Return the first ChildArStandardIndustrialClass filtered by the ArtbSicDesc column
 * @method     ChildArStandardIndustrialClass|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArStandardIndustrialClass filtered by the DateUpdtd column
 * @method     ChildArStandardIndustrialClass|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArStandardIndustrialClass filtered by the TimeUpdtd column
 * @method     ChildArStandardIndustrialClass|null findOneByDummy(string $dummy) Return the first ChildArStandardIndustrialClass filtered by the dummy column
 *
 * @method     ChildArStandardIndustrialClass requirePk($key, ?ConnectionInterface $con = null) Return the ChildArStandardIndustrialClass by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustrialClass requireOne(?ConnectionInterface $con = null) Return the first ChildArStandardIndustrialClass matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArStandardIndustrialClass requireOneByArtbsiccode(string $ArtbSicCode) Return the first ChildArStandardIndustrialClass filtered by the ArtbSicCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustrialClass requireOneByArtbsicdesc(string $ArtbSicDesc) Return the first ChildArStandardIndustrialClass filtered by the ArtbSicDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustrialClass requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArStandardIndustrialClass filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustrialClass requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArStandardIndustrialClass filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArStandardIndustrialClass requireOneByDummy(string $dummy) Return the first ChildArStandardIndustrialClass filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArStandardIndustrialClass[]|Collection find(?ConnectionInterface $con = null) Return ChildArStandardIndustrialClass objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArStandardIndustrialClass> find(?ConnectionInterface $con = null) Return ChildArStandardIndustrialClass objects based on current ModelCriteria
 *
 * @method     ChildArStandardIndustrialClass[]|Collection findByArtbsiccode(string|array<string> $ArtbSicCode) Return ChildArStandardIndustrialClass objects filtered by the ArtbSicCode column
 * @psalm-method Collection&\Traversable<ChildArStandardIndustrialClass> findByArtbsiccode(string|array<string> $ArtbSicCode) Return ChildArStandardIndustrialClass objects filtered by the ArtbSicCode column
 * @method     ChildArStandardIndustrialClass[]|Collection findByArtbsicdesc(string|array<string> $ArtbSicDesc) Return ChildArStandardIndustrialClass objects filtered by the ArtbSicDesc column
 * @psalm-method Collection&\Traversable<ChildArStandardIndustrialClass> findByArtbsicdesc(string|array<string> $ArtbSicDesc) Return ChildArStandardIndustrialClass objects filtered by the ArtbSicDesc column
 * @method     ChildArStandardIndustrialClass[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArStandardIndustrialClass objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArStandardIndustrialClass> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArStandardIndustrialClass objects filtered by the DateUpdtd column
 * @method     ChildArStandardIndustrialClass[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArStandardIndustrialClass objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArStandardIndustrialClass> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArStandardIndustrialClass objects filtered by the TimeUpdtd column
 * @method     ChildArStandardIndustrialClass[]|Collection findByDummy(string|array<string> $dummy) Return ChildArStandardIndustrialClass objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArStandardIndustrialClass> findByDummy(string|array<string> $dummy) Return ChildArStandardIndustrialClass objects filtered by the dummy column
 *
 * @method     ChildArStandardIndustrialClass[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArStandardIndustrialClass> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArStandardIndustrialClassQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArStandardIndustrialClassQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArStandardIndustrialClass', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArStandardIndustrialClassQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArStandardIndustrialClassQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArStandardIndustrialClassQuery) {
            return $criteria;
        }
        $query = new ChildArStandardIndustrialClassQuery();
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
     * @return ChildArStandardIndustrialClass|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArStandardIndustrialClassTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArStandardIndustrialClassTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArStandardIndustrialClass A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbSicCode, ArtbSicDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_sic WHERE ArtbSicCode = :p0';
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
            /** @var ChildArStandardIndustrialClass $obj */
            $obj = new ChildArStandardIndustrialClass();
            $obj->hydrate($row);
            ArStandardIndustrialClassTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArStandardIndustrialClass|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_ARTBSICCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_ARTBSICCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbSicCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsiccode('fooValue');   // WHERE ArtbSicCode = 'fooValue'
     * $query->filterByArtbsiccode('%fooValue%', Criteria::LIKE); // WHERE ArtbSicCode LIKE '%fooValue%'
     * $query->filterByArtbsiccode(['foo', 'bar']); // WHERE ArtbSicCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsiccode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsiccode($artbsiccode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsiccode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_ARTBSICCODE, $artbsiccode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbSicDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbsicdesc('fooValue');   // WHERE ArtbSicDesc = 'fooValue'
     * $query->filterByArtbsicdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbSicDesc LIKE '%fooValue%'
     * $query->filterByArtbsicdesc(['foo', 'bar']); // WHERE ArtbSicDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbsicdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbsicdesc($artbsicdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbsicdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_ARTBSICDESC, $artbsicdesc, $comparison);

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

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArStandardIndustrialClass $arStandardIndustrialClass Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arStandardIndustrialClass = null)
    {
        if ($arStandardIndustrialClass) {
            $this->addUsingAlias(ArStandardIndustrialClassTableMap::COL_ARTBSICCODE, $arStandardIndustrialClass->getArtbsiccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_sic table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArStandardIndustrialClassTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArStandardIndustrialClassTableMap::clearInstancePool();
            ArStandardIndustrialClassTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArStandardIndustrialClassTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArStandardIndustrialClassTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArStandardIndustrialClassTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArStandardIndustrialClassTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
