<?php

namespace Base;

use \InvOptCode as ChildInvOptCode;
use \InvOptCodeQuery as ChildInvOptCodeQuery;
use \Exception;
use \PDO;
use Map\InvOptCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_opt_code' table.
 *
 *
 *
 * @method     ChildInvOptCodeQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvOptCodeQuery orderByInoptcode($order = Criteria::ASC) Order by the InoptCode column
 * @method     ChildInvOptCodeQuery orderByInoptcodedesc($order = Criteria::ASC) Order by the InoptCodeDesc column
 * @method     ChildInvOptCodeQuery orderByInoptvalue($order = Criteria::ASC) Order by the InoptValue column
 * @method     ChildInvOptCodeQuery orderByInoptvaluedesc($order = Criteria::ASC) Order by the InoptValueDesc column
 * @method     ChildInvOptCodeQuery orderByInoptvaluedesc2($order = Criteria::ASC) Order by the InoptValueDesc2 column
 * @method     ChildInvOptCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvOptCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvOptCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvOptCodeQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvOptCodeQuery groupByInoptcode() Group by the InoptCode column
 * @method     ChildInvOptCodeQuery groupByInoptcodedesc() Group by the InoptCodeDesc column
 * @method     ChildInvOptCodeQuery groupByInoptvalue() Group by the InoptValue column
 * @method     ChildInvOptCodeQuery groupByInoptvaluedesc() Group by the InoptValueDesc column
 * @method     ChildInvOptCodeQuery groupByInoptvaluedesc2() Group by the InoptValueDesc2 column
 * @method     ChildInvOptCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvOptCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvOptCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvOptCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvOptCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvOptCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvOptCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvOptCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvOptCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvOptCode findOne(ConnectionInterface $con = null) Return the first ChildInvOptCode matching the query
 * @method     ChildInvOptCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvOptCode matching the query, or a new ChildInvOptCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvOptCode findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvOptCode filtered by the InitItemNbr column
 * @method     ChildInvOptCode findOneByInoptcode(string $InoptCode) Return the first ChildInvOptCode filtered by the InoptCode column
 * @method     ChildInvOptCode findOneByInoptcodedesc(string $InoptCodeDesc) Return the first ChildInvOptCode filtered by the InoptCodeDesc column
 * @method     ChildInvOptCode findOneByInoptvalue(string $InoptValue) Return the first ChildInvOptCode filtered by the InoptValue column
 * @method     ChildInvOptCode findOneByInoptvaluedesc(string $InoptValueDesc) Return the first ChildInvOptCode filtered by the InoptValueDesc column
 * @method     ChildInvOptCode findOneByInoptvaluedesc2(string $InoptValueDesc2) Return the first ChildInvOptCode filtered by the InoptValueDesc2 column
 * @method     ChildInvOptCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvOptCode filtered by the DateUpdtd column
 * @method     ChildInvOptCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvOptCode filtered by the TimeUpdtd column
 * @method     ChildInvOptCode findOneByDummy(string $dummy) Return the first ChildInvOptCode filtered by the dummy column *

 * @method     ChildInvOptCode requirePk($key, ConnectionInterface $con = null) Return the ChildInvOptCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOne(ConnectionInterface $con = null) Return the first ChildInvOptCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvOptCode requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvOptCode filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptcode(string $InoptCode) Return the first ChildInvOptCode filtered by the InoptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptcodedesc(string $InoptCodeDesc) Return the first ChildInvOptCode filtered by the InoptCodeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptvalue(string $InoptValue) Return the first ChildInvOptCode filtered by the InoptValue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptvaluedesc(string $InoptValueDesc) Return the first ChildInvOptCode filtered by the InoptValueDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptvaluedesc2(string $InoptValueDesc2) Return the first ChildInvOptCode filtered by the InoptValueDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvOptCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvOptCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByDummy(string $dummy) Return the first ChildInvOptCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvOptCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvOptCode objects based on current ModelCriteria
 * @method     ChildInvOptCode[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvOptCode objects filtered by the InitItemNbr column
 * @method     ChildInvOptCode[]|ObjectCollection findByInoptcode(string $InoptCode) Return ChildInvOptCode objects filtered by the InoptCode column
 * @method     ChildInvOptCode[]|ObjectCollection findByInoptcodedesc(string $InoptCodeDesc) Return ChildInvOptCode objects filtered by the InoptCodeDesc column
 * @method     ChildInvOptCode[]|ObjectCollection findByInoptvalue(string $InoptValue) Return ChildInvOptCode objects filtered by the InoptValue column
 * @method     ChildInvOptCode[]|ObjectCollection findByInoptvaluedesc(string $InoptValueDesc) Return ChildInvOptCode objects filtered by the InoptValueDesc column
 * @method     ChildInvOptCode[]|ObjectCollection findByInoptvaluedesc2(string $InoptValueDesc2) Return ChildInvOptCode objects filtered by the InoptValueDesc2 column
 * @method     ChildInvOptCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvOptCode objects filtered by the DateUpdtd column
 * @method     ChildInvOptCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvOptCode objects filtered by the TimeUpdtd column
 * @method     ChildInvOptCode[]|ObjectCollection findByDummy(string $dummy) Return ChildInvOptCode objects filtered by the dummy column
 * @method     ChildInvOptCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvOptCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvOptCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvOptCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvOptCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvOptCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvOptCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvOptCodeQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $InoptCode] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvOptCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvOptCodeTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvOptCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InoptCode, InoptCodeDesc, InoptValue, InoptValueDesc, InoptValueDesc2, DateUpdtd, TimeUpdtd, dummy FROM inv_opt_code WHERE InitItemNbr = :p0 AND InoptCode = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvOptCode $obj */
            $obj = new ChildInvOptCode();
            $obj->hydrate($row);
            InvOptCodeTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvOptCode|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvOptCodeTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvOptCodeTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvOptCodeTableMap::COL_INOPTCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr= null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InoptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptcode('fooValue');   // WHERE InoptCode = 'fooValue'
     * $query->filterByInoptcode('%fooValue%', Criteria::LIKE); // WHERE InoptCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inoptcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByInoptcode($inoptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTCODE, $inoptcode, $comparison);
    }

    /**
     * Filter the query on the InoptCodeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptcodedesc('fooValue');   // WHERE InoptCodeDesc = 'fooValue'
     * $query->filterByInoptcodedesc('%fooValue%', Criteria::LIKE); // WHERE InoptCodeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inoptcodedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByInoptcodedesc($inoptcodedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptcodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTCODEDESC, $inoptcodedesc, $comparison);
    }

    /**
     * Filter the query on the InoptValue column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptvalue('fooValue');   // WHERE InoptValue = 'fooValue'
     * $query->filterByInoptvalue('%fooValue%', Criteria::LIKE); // WHERE InoptValue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inoptvalue The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByInoptvalue($inoptvalue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptvalue)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTVALUE, $inoptvalue, $comparison);
    }

    /**
     * Filter the query on the InoptValueDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptvaluedesc('fooValue');   // WHERE InoptValueDesc = 'fooValue'
     * $query->filterByInoptvaluedesc('%fooValue%', Criteria::LIKE); // WHERE InoptValueDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inoptvaluedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByInoptvaluedesc($inoptvaluedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptvaluedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTVALUEDESC, $inoptvaluedesc, $comparison);
    }

    /**
     * Filter the query on the InoptValueDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptvaluedesc2('fooValue');   // WHERE InoptValueDesc2 = 'fooValue'
     * $query->filterByInoptvaluedesc2('%fooValue%', Criteria::LIKE); // WHERE InoptValueDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inoptvaluedesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByInoptvaluedesc2($inoptvaluedesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptvaluedesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTVALUEDESC2, $inoptvaluedesc2, $comparison);
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
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvOptCode $invOptCode Object to remove from the list of results
     *
     * @return $this|ChildInvOptCodeQuery The current query, for fluid interface
     */
    public function prune($invOptCode = null)
    {
        if ($invOptCode) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvOptCodeTableMap::COL_INITITEMNBR), $invOptCode->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvOptCodeTableMap::COL_INOPTCODE), $invOptCode->getInoptcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_opt_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvOptCodeTableMap::clearInstancePool();
            InvOptCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvOptCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvOptCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvOptCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvOptCodeQuery
