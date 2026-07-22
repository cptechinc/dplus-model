<?php

namespace Base;

use \SoRgaCode as ChildSoRgaCode;
use \SoRgaCodeQuery as ChildSoRgaCodeQuery;
use \Exception;
use \PDO;
use Map\SoRgaCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_rgas_code` table.
 *
 * @method     ChildSoRgaCodeQuery orderByOetbrgascode($order = Criteria::ASC) Order by the OetbRgasCode column
 * @method     ChildSoRgaCodeQuery orderByOetbrgasdesc($order = Criteria::ASC) Order by the OetbRgasDesc column
 * @method     ChildSoRgaCodeQuery orderByOetbrgaswhse($order = Criteria::ASC) Order by the OetbRgasWhse column
 * @method     ChildSoRgaCodeQuery orderByOetbrgasshipacctnbr($order = Criteria::ASC) Order by the OetbRgasShipAcctNbr column
 * @method     ChildSoRgaCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoRgaCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoRgaCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoRgaCodeQuery groupByOetbrgascode() Group by the OetbRgasCode column
 * @method     ChildSoRgaCodeQuery groupByOetbrgasdesc() Group by the OetbRgasDesc column
 * @method     ChildSoRgaCodeQuery groupByOetbrgaswhse() Group by the OetbRgasWhse column
 * @method     ChildSoRgaCodeQuery groupByOetbrgasshipacctnbr() Group by the OetbRgasShipAcctNbr column
 * @method     ChildSoRgaCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoRgaCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoRgaCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoRgaCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoRgaCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoRgaCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoRgaCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoRgaCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoRgaCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoRgaCode|null findOne(?ConnectionInterface $con = null) Return the first ChildSoRgaCode matching the query
 * @method     ChildSoRgaCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSoRgaCode matching the query, or a new ChildSoRgaCode object populated from the query conditions when no match is found
 *
 * @method     ChildSoRgaCode|null findOneByOetbrgascode(string $OetbRgasCode) Return the first ChildSoRgaCode filtered by the OetbRgasCode column
 * @method     ChildSoRgaCode|null findOneByOetbrgasdesc(string $OetbRgasDesc) Return the first ChildSoRgaCode filtered by the OetbRgasDesc column
 * @method     ChildSoRgaCode|null findOneByOetbrgaswhse(string $OetbRgasWhse) Return the first ChildSoRgaCode filtered by the OetbRgasWhse column
 * @method     ChildSoRgaCode|null findOneByOetbrgasshipacctnbr(string $OetbRgasShipAcctNbr) Return the first ChildSoRgaCode filtered by the OetbRgasShipAcctNbr column
 * @method     ChildSoRgaCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoRgaCode filtered by the DateUpdtd column
 * @method     ChildSoRgaCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoRgaCode filtered by the TimeUpdtd column
 * @method     ChildSoRgaCode|null findOneByDummy(string $dummy) Return the first ChildSoRgaCode filtered by the dummy column
 *
 * @method     ChildSoRgaCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildSoRgaCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOne(?ConnectionInterface $con = null) Return the first ChildSoRgaCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoRgaCode requireOneByOetbrgascode(string $OetbRgasCode) Return the first ChildSoRgaCode filtered by the OetbRgasCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOneByOetbrgasdesc(string $OetbRgasDesc) Return the first ChildSoRgaCode filtered by the OetbRgasDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOneByOetbrgaswhse(string $OetbRgasWhse) Return the first ChildSoRgaCode filtered by the OetbRgasWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOneByOetbrgasshipacctnbr(string $OetbRgasShipAcctNbr) Return the first ChildSoRgaCode filtered by the OetbRgasShipAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoRgaCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoRgaCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoRgaCode requireOneByDummy(string $dummy) Return the first ChildSoRgaCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoRgaCode[]|Collection find(?ConnectionInterface $con = null) Return ChildSoRgaCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> find(?ConnectionInterface $con = null) Return ChildSoRgaCode objects based on current ModelCriteria
 *
 * @method     ChildSoRgaCode[]|Collection findByOetbrgascode(string|array<string> $OetbRgasCode) Return ChildSoRgaCode objects filtered by the OetbRgasCode column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByOetbrgascode(string|array<string> $OetbRgasCode) Return ChildSoRgaCode objects filtered by the OetbRgasCode column
 * @method     ChildSoRgaCode[]|Collection findByOetbrgasdesc(string|array<string> $OetbRgasDesc) Return ChildSoRgaCode objects filtered by the OetbRgasDesc column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByOetbrgasdesc(string|array<string> $OetbRgasDesc) Return ChildSoRgaCode objects filtered by the OetbRgasDesc column
 * @method     ChildSoRgaCode[]|Collection findByOetbrgaswhse(string|array<string> $OetbRgasWhse) Return ChildSoRgaCode objects filtered by the OetbRgasWhse column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByOetbrgaswhse(string|array<string> $OetbRgasWhse) Return ChildSoRgaCode objects filtered by the OetbRgasWhse column
 * @method     ChildSoRgaCode[]|Collection findByOetbrgasshipacctnbr(string|array<string> $OetbRgasShipAcctNbr) Return ChildSoRgaCode objects filtered by the OetbRgasShipAcctNbr column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByOetbrgasshipacctnbr(string|array<string> $OetbRgasShipAcctNbr) Return ChildSoRgaCode objects filtered by the OetbRgasShipAcctNbr column
 * @method     ChildSoRgaCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSoRgaCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSoRgaCode objects filtered by the DateUpdtd column
 * @method     ChildSoRgaCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSoRgaCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSoRgaCode objects filtered by the TimeUpdtd column
 * @method     ChildSoRgaCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildSoRgaCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSoRgaCode> findByDummy(string|array<string> $dummy) Return ChildSoRgaCode objects filtered by the dummy column
 *
 * @method     ChildSoRgaCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSoRgaCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SoRgaCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoRgaCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoRgaCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoRgaCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoRgaCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSoRgaCodeQuery) {
            return $criteria;
        }
        $query = new ChildSoRgaCodeQuery();
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
     * @return ChildSoRgaCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoRgaCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoRgaCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSoRgaCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbRgasCode, OetbRgasDesc, OetbRgasWhse, OetbRgasShipAcctNbr, DateUpdtd, TimeUpdtd, dummy FROM so_rgas_code WHERE OetbRgasCode = :p0';
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
            /** @var ChildSoRgaCode $obj */
            $obj = new ChildSoRgaCode();
            $obj->hydrate($row);
            SoRgaCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSoRgaCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the OetbRgasCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbrgascode('fooValue');   // WHERE OetbRgasCode = 'fooValue'
     * $query->filterByOetbrgascode('%fooValue%', Criteria::LIKE); // WHERE OetbRgasCode LIKE '%fooValue%'
     * $query->filterByOetbrgascode(['foo', 'bar']); // WHERE OetbRgasCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbrgascode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbrgascode($oetbrgascode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbrgascode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASCODE, $oetbrgascode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbRgasDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbrgasdesc('fooValue');   // WHERE OetbRgasDesc = 'fooValue'
     * $query->filterByOetbrgasdesc('%fooValue%', Criteria::LIKE); // WHERE OetbRgasDesc LIKE '%fooValue%'
     * $query->filterByOetbrgasdesc(['foo', 'bar']); // WHERE OetbRgasDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbrgasdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbrgasdesc($oetbrgasdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbrgasdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASDESC, $oetbrgasdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbRgasWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbrgaswhse('fooValue');   // WHERE OetbRgasWhse = 'fooValue'
     * $query->filterByOetbrgaswhse('%fooValue%', Criteria::LIKE); // WHERE OetbRgasWhse LIKE '%fooValue%'
     * $query->filterByOetbrgaswhse(['foo', 'bar']); // WHERE OetbRgasWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbrgaswhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbrgaswhse($oetbrgaswhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbrgaswhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASWHSE, $oetbrgaswhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbRgasShipAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbrgasshipacctnbr('fooValue');   // WHERE OetbRgasShipAcctNbr = 'fooValue'
     * $query->filterByOetbrgasshipacctnbr('%fooValue%', Criteria::LIKE); // WHERE OetbRgasShipAcctNbr LIKE '%fooValue%'
     * $query->filterByOetbrgasshipacctnbr(['foo', 'bar']); // WHERE OetbRgasShipAcctNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbrgasshipacctnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbrgasshipacctnbr($oetbrgasshipacctnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbrgasshipacctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASSHIPACCTNBR, $oetbrgasshipacctnbr, $comparison);

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

        $this->addUsingAlias(SoRgaCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SoRgaCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SoRgaCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSoRgaCode $soRgaCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($soRgaCode = null)
    {
        if ($soRgaCode) {
            $this->addUsingAlias(SoRgaCodeTableMap::COL_OETBRGASCODE, $soRgaCode->getOetbrgascode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_rgas_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoRgaCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoRgaCodeTableMap::clearInstancePool();
            SoRgaCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoRgaCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoRgaCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoRgaCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoRgaCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
