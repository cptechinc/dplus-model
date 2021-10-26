<?php

namespace Base;

use \ProspectSource as ChildProspectSource;
use \ProspectSourceQuery as ChildProspectSourceQuery;
use \Exception;
use \PDO;
use Map\ProspectSourceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'prosp_sorc_code' table.
 *
 *
 *
 * @method     ChildProspectSourceQuery orderByPrtbsorccode($order = Criteria::ASC) Order by the PrtbSorcCode column
 * @method     ChildProspectSourceQuery orderByPrtbsorcdesc($order = Criteria::ASC) Order by the PrtbSorcDesc column
 * @method     ChildProspectSourceQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildProspectSourceQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildProspectSourceQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildProspectSourceQuery groupByPrtbsorccode() Group by the PrtbSorcCode column
 * @method     ChildProspectSourceQuery groupByPrtbsorcdesc() Group by the PrtbSorcDesc column
 * @method     ChildProspectSourceQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildProspectSourceQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildProspectSourceQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildProspectSourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildProspectSourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildProspectSourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildProspectSourceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildProspectSourceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildProspectSourceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildProspectSource findOne(ConnectionInterface $con = null) Return the first ChildProspectSource matching the query
 * @method     ChildProspectSource findOneOrCreate(ConnectionInterface $con = null) Return the first ChildProspectSource matching the query, or a new ChildProspectSource object populated from the query conditions when no match is found
 *
 * @method     ChildProspectSource findOneByPrtbsorccode(string $PrtbSorcCode) Return the first ChildProspectSource filtered by the PrtbSorcCode column
 * @method     ChildProspectSource findOneByPrtbsorcdesc(string $PrtbSorcDesc) Return the first ChildProspectSource filtered by the PrtbSorcDesc column
 * @method     ChildProspectSource findOneByDateupdtd(string $DateUpdtd) Return the first ChildProspectSource filtered by the DateUpdtd column
 * @method     ChildProspectSource findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildProspectSource filtered by the TimeUpdtd column
 * @method     ChildProspectSource findOneByDummy(string $dummy) Return the first ChildProspectSource filtered by the dummy column *

 * @method     ChildProspectSource requirePk($key, ConnectionInterface $con = null) Return the ChildProspectSource by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProspectSource requireOne(ConnectionInterface $con = null) Return the first ChildProspectSource matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProspectSource requireOneByPrtbsorccode(string $PrtbSorcCode) Return the first ChildProspectSource filtered by the PrtbSorcCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProspectSource requireOneByPrtbsorcdesc(string $PrtbSorcDesc) Return the first ChildProspectSource filtered by the PrtbSorcDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProspectSource requireOneByDateupdtd(string $DateUpdtd) Return the first ChildProspectSource filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProspectSource requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildProspectSource filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildProspectSource requireOneByDummy(string $dummy) Return the first ChildProspectSource filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildProspectSource[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildProspectSource objects based on current ModelCriteria
 * @method     ChildProspectSource[]|ObjectCollection findByPrtbsorccode(string $PrtbSorcCode) Return ChildProspectSource objects filtered by the PrtbSorcCode column
 * @method     ChildProspectSource[]|ObjectCollection findByPrtbsorcdesc(string $PrtbSorcDesc) Return ChildProspectSource objects filtered by the PrtbSorcDesc column
 * @method     ChildProspectSource[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildProspectSource objects filtered by the DateUpdtd column
 * @method     ChildProspectSource[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildProspectSource objects filtered by the TimeUpdtd column
 * @method     ChildProspectSource[]|ObjectCollection findByDummy(string $dummy) Return ChildProspectSource objects filtered by the dummy column
 * @method     ChildProspectSource[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ProspectSourceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ProspectSourceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ProspectSource', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildProspectSourceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildProspectSourceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildProspectSourceQuery) {
            return $criteria;
        }
        $query = new ChildProspectSourceQuery();
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
     * @return ChildProspectSource|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ProspectSourceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ProspectSourceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildProspectSource A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PrtbSorcCode, PrtbSorcDesc, DateUpdtd, TimeUpdtd, dummy FROM prosp_sorc_code WHERE PrtbSorcCode = :p0';
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
            /** @var ChildProspectSource $obj */
            $obj = new ChildProspectSource();
            $obj->hydrate($row);
            ProspectSourceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildProspectSource|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProspectSourceTableMap::COL_PRTBSORCCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProspectSourceTableMap::COL_PRTBSORCCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PrtbSorcCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPrtbsorccode('fooValue');   // WHERE PrtbSorcCode = 'fooValue'
     * $query->filterByPrtbsorccode('%fooValue%', Criteria::LIKE); // WHERE PrtbSorcCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prtbsorccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByPrtbsorccode($prtbsorccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prtbsorccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProspectSourceTableMap::COL_PRTBSORCCODE, $prtbsorccode, $comparison);
    }

    /**
     * Filter the query on the PrtbSorcDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPrtbsorcdesc('fooValue');   // WHERE PrtbSorcDesc = 'fooValue'
     * $query->filterByPrtbsorcdesc('%fooValue%', Criteria::LIKE); // WHERE PrtbSorcDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prtbsorcdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByPrtbsorcdesc($prtbsorcdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prtbsorcdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProspectSourceTableMap::COL_PRTBSORCDESC, $prtbsorcdesc, $comparison);
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
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProspectSourceTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProspectSourceTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProspectSourceTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildProspectSource $prospectSource Object to remove from the list of results
     *
     * @return $this|ChildProspectSourceQuery The current query, for fluid interface
     */
    public function prune($prospectSource = null)
    {
        if ($prospectSource) {
            $this->addUsingAlias(ProspectSourceTableMap::COL_PRTBSORCCODE, $prospectSource->getPrtbsorccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the prosp_sorc_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ProspectSourceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProspectSourceTableMap::clearInstancePool();
            ProspectSourceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ProspectSourceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ProspectSourceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ProspectSourceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ProspectSourceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ProspectSourceQuery
