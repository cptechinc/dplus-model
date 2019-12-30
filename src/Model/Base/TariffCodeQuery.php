<?php

namespace Base;

use \TariffCode as ChildTariffCode;
use \TariffCodeQuery as ChildTariffCodeQuery;
use \Exception;
use \PDO;
use Map\TariffCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_tari_code' table.
 *
 *
 *
 * @method     ChildTariffCodeQuery orderByIntbtaricode($order = Criteria::ASC) Order by the IntbTariCode column
 * @method     ChildTariffCodeQuery orderByIntbtarinbr($order = Criteria::ASC) Order by the IntbTariNbr column
 * @method     ChildTariffCodeQuery orderByIntbtaridesc($order = Criteria::ASC) Order by the IntbTariDesc column
 * @method     ChildTariffCodeQuery orderByIntbtaridutyratepct($order = Criteria::ASC) Order by the IntbTariDutyRatePct column
 * @method     ChildTariffCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildTariffCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildTariffCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildTariffCodeQuery groupByIntbtaricode() Group by the IntbTariCode column
 * @method     ChildTariffCodeQuery groupByIntbtarinbr() Group by the IntbTariNbr column
 * @method     ChildTariffCodeQuery groupByIntbtaridesc() Group by the IntbTariDesc column
 * @method     ChildTariffCodeQuery groupByIntbtaridutyratepct() Group by the IntbTariDutyRatePct column
 * @method     ChildTariffCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildTariffCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildTariffCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildTariffCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTariffCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTariffCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTariffCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTariffCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTariffCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTariffCode findOne(ConnectionInterface $con = null) Return the first ChildTariffCode matching the query
 * @method     ChildTariffCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTariffCode matching the query, or a new ChildTariffCode object populated from the query conditions when no match is found
 *
 * @method     ChildTariffCode findOneByIntbtaricode(string $IntbTariCode) Return the first ChildTariffCode filtered by the IntbTariCode column
 * @method     ChildTariffCode findOneByIntbtarinbr(string $IntbTariNbr) Return the first ChildTariffCode filtered by the IntbTariNbr column
 * @method     ChildTariffCode findOneByIntbtaridesc(string $IntbTariDesc) Return the first ChildTariffCode filtered by the IntbTariDesc column
 * @method     ChildTariffCode findOneByIntbtaridutyratepct(string $IntbTariDutyRatePct) Return the first ChildTariffCode filtered by the IntbTariDutyRatePct column
 * @method     ChildTariffCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildTariffCode filtered by the DateUpdtd column
 * @method     ChildTariffCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTariffCode filtered by the TimeUpdtd column
 * @method     ChildTariffCode findOneByDummy(string $dummy) Return the first ChildTariffCode filtered by the dummy column *

 * @method     ChildTariffCode requirePk($key, ConnectionInterface $con = null) Return the ChildTariffCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOne(ConnectionInterface $con = null) Return the first ChildTariffCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTariffCode requireOneByIntbtaricode(string $IntbTariCode) Return the first ChildTariffCode filtered by the IntbTariCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOneByIntbtarinbr(string $IntbTariNbr) Return the first ChildTariffCode filtered by the IntbTariNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOneByIntbtaridesc(string $IntbTariDesc) Return the first ChildTariffCode filtered by the IntbTariDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOneByIntbtaridutyratepct(string $IntbTariDutyRatePct) Return the first ChildTariffCode filtered by the IntbTariDutyRatePct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildTariffCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTariffCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCode requireOneByDummy(string $dummy) Return the first ChildTariffCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTariffCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTariffCode objects based on current ModelCriteria
 * @method     ChildTariffCode[]|ObjectCollection findByIntbtaricode(string $IntbTariCode) Return ChildTariffCode objects filtered by the IntbTariCode column
 * @method     ChildTariffCode[]|ObjectCollection findByIntbtarinbr(string $IntbTariNbr) Return ChildTariffCode objects filtered by the IntbTariNbr column
 * @method     ChildTariffCode[]|ObjectCollection findByIntbtaridesc(string $IntbTariDesc) Return ChildTariffCode objects filtered by the IntbTariDesc column
 * @method     ChildTariffCode[]|ObjectCollection findByIntbtaridutyratepct(string $IntbTariDutyRatePct) Return ChildTariffCode objects filtered by the IntbTariDutyRatePct column
 * @method     ChildTariffCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildTariffCode objects filtered by the DateUpdtd column
 * @method     ChildTariffCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildTariffCode objects filtered by the TimeUpdtd column
 * @method     ChildTariffCode[]|ObjectCollection findByDummy(string $dummy) Return ChildTariffCode objects filtered by the dummy column
 * @method     ChildTariffCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TariffCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TariffCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\TariffCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTariffCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTariffCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTariffCodeQuery) {
            return $criteria;
        }
        $query = new ChildTariffCodeQuery();
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
     * @return ChildTariffCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TariffCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTariffCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbTariCode, IntbTariNbr, IntbTariDesc, IntbTariDutyRatePct, DateUpdtd, TimeUpdtd, dummy FROM inv_tari_code WHERE IntbTariCode = :p0';
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
            /** @var ChildTariffCode $obj */
            $obj = new ChildTariffCode();
            $obj->hydrate($row);
            TariffCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTariffCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARICODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARICODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbTariCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtaricode('fooValue');   // WHERE IntbTariCode = 'fooValue'
     * $query->filterByIntbtaricode('%fooValue%', Criteria::LIKE); // WHERE IntbTariCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbtaricode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByIntbtaricode($intbtaricode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtaricode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARICODE, $intbtaricode, $comparison);
    }

    /**
     * Filter the query on the IntbTariNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtarinbr('fooValue');   // WHERE IntbTariNbr = 'fooValue'
     * $query->filterByIntbtarinbr('%fooValue%', Criteria::LIKE); // WHERE IntbTariNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbtarinbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByIntbtarinbr($intbtarinbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtarinbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARINBR, $intbtarinbr, $comparison);
    }

    /**
     * Filter the query on the IntbTariDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtaridesc('fooValue');   // WHERE IntbTariDesc = 'fooValue'
     * $query->filterByIntbtaridesc('%fooValue%', Criteria::LIKE); // WHERE IntbTariDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbtaridesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByIntbtaridesc($intbtaridesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtaridesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARIDESC, $intbtaridesc, $comparison);
    }

    /**
     * Filter the query on the IntbTariDutyRatePct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtaridutyratepct(1234); // WHERE IntbTariDutyRatePct = 1234
     * $query->filterByIntbtaridutyratepct(array(12, 34)); // WHERE IntbTariDutyRatePct IN (12, 34)
     * $query->filterByIntbtaridutyratepct(array('min' => 12)); // WHERE IntbTariDutyRatePct > 12
     * </code>
     *
     * @param     mixed $intbtaridutyratepct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByIntbtaridutyratepct($intbtaridutyratepct = null, $comparison = null)
    {
        if (is_array($intbtaridutyratepct)) {
            $useMinMax = false;
            if (isset($intbtaridutyratepct['min'])) {
                $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT, $intbtaridutyratepct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbtaridutyratepct['max'])) {
                $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT, $intbtaridutyratepct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARIDUTYRATEPCT, $intbtaridutyratepct, $comparison);
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
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTariffCode $tariffCode Object to remove from the list of results
     *
     * @return $this|ChildTariffCodeQuery The current query, for fluid interface
     */
    public function prune($tariffCode = null)
    {
        if ($tariffCode) {
            $this->addUsingAlias(TariffCodeTableMap::COL_INTBTARICODE, $tariffCode->getIntbtaricode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_tari_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TariffCodeTableMap::clearInstancePool();
            TariffCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TariffCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TariffCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TariffCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TariffCodeQuery
