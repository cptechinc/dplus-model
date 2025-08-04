<?php

namespace Base;

use \ArTermsGroup as ChildArTermsGroup;
use \ArTermsGroupQuery as ChildArTermsGroupQuery;
use \Exception;
use \PDO;
use Map\ArTermsGroupTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_terms_grp` table.
 *
 * @method     ChildArTermsGroupQuery orderByArtggrup($order = Criteria::ASC) Order by the ArtgGrup column
 * @method     ChildArTermsGroupQuery orderByArtgdesc($order = Criteria::ASC) Order by the ArtgDesc column
 * @method     ChildArTermsGroupQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArTermsGroupQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArTermsGroupQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArTermsGroupQuery groupByArtggrup() Group by the ArtgGrup column
 * @method     ChildArTermsGroupQuery groupByArtgdesc() Group by the ArtgDesc column
 * @method     ChildArTermsGroupQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArTermsGroupQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArTermsGroupQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArTermsGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArTermsGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArTermsGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArTermsGroupQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArTermsGroupQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArTermsGroupQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArTermsGroup|null findOne(?ConnectionInterface $con = null) Return the first ChildArTermsGroup matching the query
 * @method     ChildArTermsGroup findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArTermsGroup matching the query, or a new ChildArTermsGroup object populated from the query conditions when no match is found
 *
 * @method     ChildArTermsGroup|null findOneByArtggrup(string $ArtgGrup) Return the first ChildArTermsGroup filtered by the ArtgGrup column
 * @method     ChildArTermsGroup|null findOneByArtgdesc(string $ArtgDesc) Return the first ChildArTermsGroup filtered by the ArtgDesc column
 * @method     ChildArTermsGroup|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArTermsGroup filtered by the DateUpdtd column
 * @method     ChildArTermsGroup|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArTermsGroup filtered by the TimeUpdtd column
 * @method     ChildArTermsGroup|null findOneByDummy(string $dummy) Return the first ChildArTermsGroup filtered by the dummy column
 *
 * @method     ChildArTermsGroup requirePk($key, ?ConnectionInterface $con = null) Return the ChildArTermsGroup by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsGroup requireOne(?ConnectionInterface $con = null) Return the first ChildArTermsGroup matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArTermsGroup requireOneByArtggrup(string $ArtgGrup) Return the first ChildArTermsGroup filtered by the ArtgGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsGroup requireOneByArtgdesc(string $ArtgDesc) Return the first ChildArTermsGroup filtered by the ArtgDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsGroup requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArTermsGroup filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsGroup requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArTermsGroup filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTermsGroup requireOneByDummy(string $dummy) Return the first ChildArTermsGroup filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArTermsGroup[]|Collection find(?ConnectionInterface $con = null) Return ChildArTermsGroup objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArTermsGroup> find(?ConnectionInterface $con = null) Return ChildArTermsGroup objects based on current ModelCriteria
 *
 * @method     ChildArTermsGroup[]|Collection findByArtggrup(string|array<string> $ArtgGrup) Return ChildArTermsGroup objects filtered by the ArtgGrup column
 * @psalm-method Collection&\Traversable<ChildArTermsGroup> findByArtggrup(string|array<string> $ArtgGrup) Return ChildArTermsGroup objects filtered by the ArtgGrup column
 * @method     ChildArTermsGroup[]|Collection findByArtgdesc(string|array<string> $ArtgDesc) Return ChildArTermsGroup objects filtered by the ArtgDesc column
 * @psalm-method Collection&\Traversable<ChildArTermsGroup> findByArtgdesc(string|array<string> $ArtgDesc) Return ChildArTermsGroup objects filtered by the ArtgDesc column
 * @method     ChildArTermsGroup[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArTermsGroup objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArTermsGroup> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArTermsGroup objects filtered by the DateUpdtd column
 * @method     ChildArTermsGroup[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArTermsGroup objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArTermsGroup> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArTermsGroup objects filtered by the TimeUpdtd column
 * @method     ChildArTermsGroup[]|Collection findByDummy(string|array<string> $dummy) Return ChildArTermsGroup objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArTermsGroup> findByDummy(string|array<string> $dummy) Return ChildArTermsGroup objects filtered by the dummy column
 *
 * @method     ChildArTermsGroup[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArTermsGroup> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArTermsGroupQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArTermsGroupQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArTermsGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArTermsGroupQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArTermsGroupQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArTermsGroupQuery) {
            return $criteria;
        }
        $query = new ChildArTermsGroupQuery();
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
     * @return ChildArTermsGroup|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArTermsGroupTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArTermsGroupTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArTermsGroup A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtgGrup, ArtgDesc, DateUpdtd, TimeUpdtd, dummy FROM ar_terms_grp WHERE ArtgGrup = :p0';
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
            /** @var ChildArTermsGroup $obj */
            $obj = new ChildArTermsGroup();
            $obj->hydrate($row);
            ArTermsGroupTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArTermsGroup|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArTermsGroupTableMap::COL_ARTGGRUP, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArTermsGroupTableMap::COL_ARTGGRUP, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtgGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByArtggrup('fooValue');   // WHERE ArtgGrup = 'fooValue'
     * $query->filterByArtggrup('%fooValue%', Criteria::LIKE); // WHERE ArtgGrup LIKE '%fooValue%'
     * $query->filterByArtggrup(['foo', 'bar']); // WHERE ArtgGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artggrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtggrup($artggrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artggrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTermsGroupTableMap::COL_ARTGGRUP, $artggrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtgDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtgdesc('fooValue');   // WHERE ArtgDesc = 'fooValue'
     * $query->filterByArtgdesc('%fooValue%', Criteria::LIKE); // WHERE ArtgDesc LIKE '%fooValue%'
     * $query->filterByArtgdesc(['foo', 'bar']); // WHERE ArtgDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artgdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtgdesc($artgdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artgdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTermsGroupTableMap::COL_ARTGDESC, $artgdesc, $comparison);

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

        $this->addUsingAlias(ArTermsGroupTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArTermsGroupTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArTermsGroupTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArTermsGroup $arTermsGroup Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arTermsGroup = null)
    {
        if ($arTermsGroup) {
            $this->addUsingAlias(ArTermsGroupTableMap::COL_ARTGGRUP, $arTermsGroup->getArtggrup(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_terms_grp table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArTermsGroupTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArTermsGroupTableMap::clearInstancePool();
            ArTermsGroupTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArTermsGroupTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArTermsGroupTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArTermsGroupTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArTermsGroupTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
