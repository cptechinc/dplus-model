<?php

namespace Base;

use \InvAdjustmentReason as ChildInvAdjustmentReason;
use \InvAdjustmentReasonQuery as ChildInvAdjustmentReasonQuery;
use \Exception;
use \PDO;
use Map\InvAdjustmentReasonTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_iarn_code' table.
 *
 *
 *
 * @method     ChildInvAdjustmentReasonQuery orderByIntbiarncode($order = Criteria::ASC) Order by the IntbIarnCode column
 * @method     ChildInvAdjustmentReasonQuery orderByIntbiarndesc($order = Criteria::ASC) Order by the IntbIarnDesc column
 * @method     ChildInvAdjustmentReasonQuery orderByIntbiarnsysdefined($order = Criteria::ASC) Order by the IntbIarnSysDefined column
 * @method     ChildInvAdjustmentReasonQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvAdjustmentReasonQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvAdjustmentReasonQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvAdjustmentReasonQuery groupByIntbiarncode() Group by the IntbIarnCode column
 * @method     ChildInvAdjustmentReasonQuery groupByIntbiarndesc() Group by the IntbIarnDesc column
 * @method     ChildInvAdjustmentReasonQuery groupByIntbiarnsysdefined() Group by the IntbIarnSysDefined column
 * @method     ChildInvAdjustmentReasonQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvAdjustmentReasonQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvAdjustmentReasonQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvAdjustmentReasonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvAdjustmentReasonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvAdjustmentReasonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvAdjustmentReasonQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvAdjustmentReasonQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvAdjustmentReasonQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvAdjustmentReason findOne(ConnectionInterface $con = null) Return the first ChildInvAdjustmentReason matching the query
 * @method     ChildInvAdjustmentReason findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvAdjustmentReason matching the query, or a new ChildInvAdjustmentReason object populated from the query conditions when no match is found
 *
 * @method     ChildInvAdjustmentReason findOneByIntbiarncode(string $IntbIarnCode) Return the first ChildInvAdjustmentReason filtered by the IntbIarnCode column
 * @method     ChildInvAdjustmentReason findOneByIntbiarndesc(string $IntbIarnDesc) Return the first ChildInvAdjustmentReason filtered by the IntbIarnDesc column
 * @method     ChildInvAdjustmentReason findOneByIntbiarnsysdefined(string $IntbIarnSysDefined) Return the first ChildInvAdjustmentReason filtered by the IntbIarnSysDefined column
 * @method     ChildInvAdjustmentReason findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvAdjustmentReason filtered by the DateUpdtd column
 * @method     ChildInvAdjustmentReason findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvAdjustmentReason filtered by the TimeUpdtd column
 * @method     ChildInvAdjustmentReason findOneByDummy(string $dummy) Return the first ChildInvAdjustmentReason filtered by the dummy column *

 * @method     ChildInvAdjustmentReason requirePk($key, ConnectionInterface $con = null) Return the ChildInvAdjustmentReason by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAdjustmentReason requireOne(ConnectionInterface $con = null) Return the first ChildInvAdjustmentReason matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvAdjustmentReason requireOneByIntbiarncode(string $IntbIarnCode) Return the first ChildInvAdjustmentReason filtered by the IntbIarnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAdjustmentReason requireOneByIntbiarndesc(string $IntbIarnDesc) Return the first ChildInvAdjustmentReason filtered by the IntbIarnDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAdjustmentReason requireOneByIntbiarnsysdefined(string $IntbIarnSysDefined) Return the first ChildInvAdjustmentReason filtered by the IntbIarnSysDefined column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAdjustmentReason requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvAdjustmentReason filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAdjustmentReason requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvAdjustmentReason filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvAdjustmentReason requireOneByDummy(string $dummy) Return the first ChildInvAdjustmentReason filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvAdjustmentReason[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvAdjustmentReason objects based on current ModelCriteria
 * @method     ChildInvAdjustmentReason[]|ObjectCollection findByIntbiarncode(string $IntbIarnCode) Return ChildInvAdjustmentReason objects filtered by the IntbIarnCode column
 * @method     ChildInvAdjustmentReason[]|ObjectCollection findByIntbiarndesc(string $IntbIarnDesc) Return ChildInvAdjustmentReason objects filtered by the IntbIarnDesc column
 * @method     ChildInvAdjustmentReason[]|ObjectCollection findByIntbiarnsysdefined(string $IntbIarnSysDefined) Return ChildInvAdjustmentReason objects filtered by the IntbIarnSysDefined column
 * @method     ChildInvAdjustmentReason[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvAdjustmentReason objects filtered by the DateUpdtd column
 * @method     ChildInvAdjustmentReason[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvAdjustmentReason objects filtered by the TimeUpdtd column
 * @method     ChildInvAdjustmentReason[]|ObjectCollection findByDummy(string $dummy) Return ChildInvAdjustmentReason objects filtered by the dummy column
 * @method     ChildInvAdjustmentReason[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvAdjustmentReasonQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvAdjustmentReasonQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvAdjustmentReason', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvAdjustmentReasonQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvAdjustmentReasonQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvAdjustmentReasonQuery) {
            return $criteria;
        }
        $query = new ChildInvAdjustmentReasonQuery();
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
     * @return ChildInvAdjustmentReason|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvAdjustmentReasonTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvAdjustmentReasonTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvAdjustmentReason A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbIarnCode, IntbIarnDesc, IntbIarnSysDefined, DateUpdtd, TimeUpdtd, dummy FROM inv_iarn_code WHERE IntbIarnCode = :p0';
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
            /** @var ChildInvAdjustmentReason $obj */
            $obj = new ChildInvAdjustmentReason();
            $obj->hydrate($row);
            InvAdjustmentReasonTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvAdjustmentReason|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_INTBIARNCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_INTBIARNCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbIarnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbiarncode('fooValue');   // WHERE IntbIarnCode = 'fooValue'
     * $query->filterByIntbiarncode('%fooValue%', Criteria::LIKE); // WHERE IntbIarnCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbiarncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByIntbiarncode($intbiarncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbiarncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_INTBIARNCODE, $intbiarncode, $comparison);
    }

    /**
     * Filter the query on the IntbIarnDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbiarndesc('fooValue');   // WHERE IntbIarnDesc = 'fooValue'
     * $query->filterByIntbiarndesc('%fooValue%', Criteria::LIKE); // WHERE IntbIarnDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbiarndesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByIntbiarndesc($intbiarndesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbiarndesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_INTBIARNDESC, $intbiarndesc, $comparison);
    }

    /**
     * Filter the query on the IntbIarnSysDefined column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbiarnsysdefined('fooValue');   // WHERE IntbIarnSysDefined = 'fooValue'
     * $query->filterByIntbiarnsysdefined('%fooValue%', Criteria::LIKE); // WHERE IntbIarnSysDefined LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbiarnsysdefined The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByIntbiarnsysdefined($intbiarnsysdefined = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbiarnsysdefined)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_INTBIARNSYSDEFINED, $intbiarnsysdefined, $comparison);
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
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvAdjustmentReason $invAdjustmentReason Object to remove from the list of results
     *
     * @return $this|ChildInvAdjustmentReasonQuery The current query, for fluid interface
     */
    public function prune($invAdjustmentReason = null)
    {
        if ($invAdjustmentReason) {
            $this->addUsingAlias(InvAdjustmentReasonTableMap::COL_INTBIARNCODE, $invAdjustmentReason->getIntbiarncode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_iarn_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvAdjustmentReasonTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvAdjustmentReasonTableMap::clearInstancePool();
            InvAdjustmentReasonTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvAdjustmentReasonTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvAdjustmentReasonTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvAdjustmentReasonTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvAdjustmentReasonTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvAdjustmentReasonQuery
