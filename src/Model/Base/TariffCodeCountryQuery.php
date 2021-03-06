<?php

namespace Base;

use \TariffCodeCountry as ChildTariffCodeCountry;
use \TariffCodeCountryQuery as ChildTariffCodeCountryQuery;
use \Exception;
use \PDO;
use Map\TariffCodeCountryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_trco_code' table.
 *
 *
 *
 * @method     ChildTariffCodeCountryQuery orderByIntbtaricode($order = Criteria::ASC) Order by the IntbTariCode column
 * @method     ChildTariffCodeCountryQuery orderByIntbtrcoctry($order = Criteria::ASC) Order by the IntbTrcoCtry column
 * @method     ChildTariffCodeCountryQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildTariffCodeCountryQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildTariffCodeCountryQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildTariffCodeCountryQuery groupByIntbtaricode() Group by the IntbTariCode column
 * @method     ChildTariffCodeCountryQuery groupByIntbtrcoctry() Group by the IntbTrcoCtry column
 * @method     ChildTariffCodeCountryQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildTariffCodeCountryQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildTariffCodeCountryQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildTariffCodeCountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTariffCodeCountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTariffCodeCountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTariffCodeCountryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTariffCodeCountryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTariffCodeCountryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTariffCodeCountry findOne(ConnectionInterface $con = null) Return the first ChildTariffCodeCountry matching the query
 * @method     ChildTariffCodeCountry findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTariffCodeCountry matching the query, or a new ChildTariffCodeCountry object populated from the query conditions when no match is found
 *
 * @method     ChildTariffCodeCountry findOneByIntbtaricode(string $IntbTariCode) Return the first ChildTariffCodeCountry filtered by the IntbTariCode column
 * @method     ChildTariffCodeCountry findOneByIntbtrcoctry(string $IntbTrcoCtry) Return the first ChildTariffCodeCountry filtered by the IntbTrcoCtry column
 * @method     ChildTariffCodeCountry findOneByDateupdtd(string $DateUpdtd) Return the first ChildTariffCodeCountry filtered by the DateUpdtd column
 * @method     ChildTariffCodeCountry findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTariffCodeCountry filtered by the TimeUpdtd column
 * @method     ChildTariffCodeCountry findOneByDummy(string $dummy) Return the first ChildTariffCodeCountry filtered by the dummy column *

 * @method     ChildTariffCodeCountry requirePk($key, ConnectionInterface $con = null) Return the ChildTariffCodeCountry by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCodeCountry requireOne(ConnectionInterface $con = null) Return the first ChildTariffCodeCountry matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTariffCodeCountry requireOneByIntbtaricode(string $IntbTariCode) Return the first ChildTariffCodeCountry filtered by the IntbTariCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCodeCountry requireOneByIntbtrcoctry(string $IntbTrcoCtry) Return the first ChildTariffCodeCountry filtered by the IntbTrcoCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCodeCountry requireOneByDateupdtd(string $DateUpdtd) Return the first ChildTariffCodeCountry filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCodeCountry requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTariffCodeCountry filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTariffCodeCountry requireOneByDummy(string $dummy) Return the first ChildTariffCodeCountry filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTariffCodeCountry[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTariffCodeCountry objects based on current ModelCriteria
 * @method     ChildTariffCodeCountry[]|ObjectCollection findByIntbtaricode(string $IntbTariCode) Return ChildTariffCodeCountry objects filtered by the IntbTariCode column
 * @method     ChildTariffCodeCountry[]|ObjectCollection findByIntbtrcoctry(string $IntbTrcoCtry) Return ChildTariffCodeCountry objects filtered by the IntbTrcoCtry column
 * @method     ChildTariffCodeCountry[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildTariffCodeCountry objects filtered by the DateUpdtd column
 * @method     ChildTariffCodeCountry[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildTariffCodeCountry objects filtered by the TimeUpdtd column
 * @method     ChildTariffCodeCountry[]|ObjectCollection findByDummy(string $dummy) Return ChildTariffCodeCountry objects filtered by the dummy column
 * @method     ChildTariffCodeCountry[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TariffCodeCountryQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TariffCodeCountryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\TariffCodeCountry', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTariffCodeCountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTariffCodeCountryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTariffCodeCountryQuery) {
            return $criteria;
        }
        $query = new ChildTariffCodeCountryQuery();
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
     * @param array[$IntbTariCode, $IntbTrcoCtry] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildTariffCodeCountry|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TariffCodeCountryTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TariffCodeCountryTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildTariffCodeCountry A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbTariCode, IntbTrcoCtry, DateUpdtd, TimeUpdtd, dummy FROM inv_trco_code WHERE IntbTariCode = :p0 AND IntbTrcoCtry = :p1';
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
            /** @var ChildTariffCodeCountry $obj */
            $obj = new ChildTariffCodeCountry();
            $obj->hydrate($row);
            TariffCodeCountryTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildTariffCodeCountry|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TariffCodeCountryTableMap::COL_INTBTARICODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TariffCodeCountryTableMap::COL_INTBTRCOCTRY, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TariffCodeCountryTableMap::COL_INTBTARICODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TariffCodeCountryTableMap::COL_INTBTRCOCTRY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByIntbtaricode($intbtaricode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtaricode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeCountryTableMap::COL_INTBTARICODE, $intbtaricode, $comparison);
    }

    /**
     * Filter the query on the IntbTrcoCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtrcoctry('fooValue');   // WHERE IntbTrcoCtry = 'fooValue'
     * $query->filterByIntbtrcoctry('%fooValue%', Criteria::LIKE); // WHERE IntbTrcoCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbtrcoctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByIntbtrcoctry($intbtrcoctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtrcoctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeCountryTableMap::COL_INTBTRCOCTRY, $intbtrcoctry, $comparison);
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
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeCountryTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeCountryTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TariffCodeCountryTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTariffCodeCountry $tariffCodeCountry Object to remove from the list of results
     *
     * @return $this|ChildTariffCodeCountryQuery The current query, for fluid interface
     */
    public function prune($tariffCodeCountry = null)
    {
        if ($tariffCodeCountry) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TariffCodeCountryTableMap::COL_INTBTARICODE), $tariffCodeCountry->getIntbtaricode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TariffCodeCountryTableMap::COL_INTBTRCOCTRY), $tariffCodeCountry->getIntbtrcoctry(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_trco_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeCountryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TariffCodeCountryTableMap::clearInstancePool();
            TariffCodeCountryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TariffCodeCountryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TariffCodeCountryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TariffCodeCountryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TariffCodeCountryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TariffCodeCountryQuery
