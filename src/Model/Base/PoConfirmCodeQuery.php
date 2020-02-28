<?php

namespace Base;

use \PoConfirmCode as ChildPoConfirmCode;
use \PoConfirmCodeQuery as ChildPoConfirmCodeQuery;
use \Exception;
use \PDO;
use Map\PoConfirmCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_confirm_code' table.
 *
 *
 *
 * @method     ChildPoConfirmCodeQuery orderByPotbcnfmcode($order = Criteria::ASC) Order by the PotbCnfmCode column
 * @method     ChildPoConfirmCodeQuery orderByPotbcnfmdesc($order = Criteria::ASC) Order by the PotbCnfmDesc column
 * @method     ChildPoConfirmCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPoConfirmCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPoConfirmCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPoConfirmCodeQuery groupByPotbcnfmcode() Group by the PotbCnfmCode column
 * @method     ChildPoConfirmCodeQuery groupByPotbcnfmdesc() Group by the PotbCnfmDesc column
 * @method     ChildPoConfirmCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPoConfirmCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPoConfirmCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPoConfirmCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPoConfirmCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPoConfirmCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPoConfirmCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPoConfirmCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPoConfirmCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPoConfirmCode findOne(ConnectionInterface $con = null) Return the first ChildPoConfirmCode matching the query
 * @method     ChildPoConfirmCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPoConfirmCode matching the query, or a new ChildPoConfirmCode object populated from the query conditions when no match is found
 *
 * @method     ChildPoConfirmCode findOneByPotbcnfmcode(string $PotbCnfmCode) Return the first ChildPoConfirmCode filtered by the PotbCnfmCode column
 * @method     ChildPoConfirmCode findOneByPotbcnfmdesc(string $PotbCnfmDesc) Return the first ChildPoConfirmCode filtered by the PotbCnfmDesc column
 * @method     ChildPoConfirmCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildPoConfirmCode filtered by the DateUpdtd column
 * @method     ChildPoConfirmCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPoConfirmCode filtered by the TimeUpdtd column
 * @method     ChildPoConfirmCode findOneByDummy(string $dummy) Return the first ChildPoConfirmCode filtered by the dummy column *

 * @method     ChildPoConfirmCode requirePk($key, ConnectionInterface $con = null) Return the ChildPoConfirmCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoConfirmCode requireOne(ConnectionInterface $con = null) Return the first ChildPoConfirmCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPoConfirmCode requireOneByPotbcnfmcode(string $PotbCnfmCode) Return the first ChildPoConfirmCode filtered by the PotbCnfmCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoConfirmCode requireOneByPotbcnfmdesc(string $PotbCnfmDesc) Return the first ChildPoConfirmCode filtered by the PotbCnfmDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoConfirmCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPoConfirmCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoConfirmCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPoConfirmCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPoConfirmCode requireOneByDummy(string $dummy) Return the first ChildPoConfirmCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPoConfirmCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPoConfirmCode objects based on current ModelCriteria
 * @method     ChildPoConfirmCode[]|ObjectCollection findByPotbcnfmcode(string $PotbCnfmCode) Return ChildPoConfirmCode objects filtered by the PotbCnfmCode column
 * @method     ChildPoConfirmCode[]|ObjectCollection findByPotbcnfmdesc(string $PotbCnfmDesc) Return ChildPoConfirmCode objects filtered by the PotbCnfmDesc column
 * @method     ChildPoConfirmCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPoConfirmCode objects filtered by the DateUpdtd column
 * @method     ChildPoConfirmCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPoConfirmCode objects filtered by the TimeUpdtd column
 * @method     ChildPoConfirmCode[]|ObjectCollection findByDummy(string $dummy) Return ChildPoConfirmCode objects filtered by the dummy column
 * @method     ChildPoConfirmCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PoConfirmCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PoConfirmCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PoConfirmCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPoConfirmCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPoConfirmCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPoConfirmCodeQuery) {
            return $criteria;
        }
        $query = new ChildPoConfirmCodeQuery();
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
     * @return ChildPoConfirmCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PoConfirmCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PoConfirmCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPoConfirmCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PotbCnfmCode, PotbCnfmDesc, DateUpdtd, TimeUpdtd, dummy FROM po_confirm_code WHERE PotbCnfmCode = :p0';
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
            /** @var ChildPoConfirmCode $obj */
            $obj = new ChildPoConfirmCode();
            $obj->hydrate($row);
            PoConfirmCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPoConfirmCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_POTBCNFMCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_POTBCNFMCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PotbCnfmCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbcnfmcode('fooValue');   // WHERE PotbCnfmCode = 'fooValue'
     * $query->filterByPotbcnfmcode('%fooValue%', Criteria::LIKE); // WHERE PotbCnfmCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potbcnfmcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByPotbcnfmcode($potbcnfmcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbcnfmcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_POTBCNFMCODE, $potbcnfmcode, $comparison);
    }

    /**
     * Filter the query on the PotbCnfmDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPotbcnfmdesc('fooValue');   // WHERE PotbCnfmDesc = 'fooValue'
     * $query->filterByPotbcnfmdesc('%fooValue%', Criteria::LIKE); // WHERE PotbCnfmDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potbcnfmdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByPotbcnfmdesc($potbcnfmdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potbcnfmdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_POTBCNFMDESC, $potbcnfmdesc, $comparison);
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
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoConfirmCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPoConfirmCode $poConfirmCode Object to remove from the list of results
     *
     * @return $this|ChildPoConfirmCodeQuery The current query, for fluid interface
     */
    public function prune($poConfirmCode = null)
    {
        if ($poConfirmCode) {
            $this->addUsingAlias(PoConfirmCodeTableMap::COL_POTBCNFMCODE, $poConfirmCode->getPotbcnfmcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_confirm_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PoConfirmCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PoConfirmCodeTableMap::clearInstancePool();
            PoConfirmCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PoConfirmCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PoConfirmCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PoConfirmCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PoConfirmCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PoConfirmCodeQuery
