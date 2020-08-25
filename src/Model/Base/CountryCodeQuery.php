<?php

namespace Base;

use \CountryCode as ChildCountryCode;
use \CountryCodeQuery as ChildCountryCodeQuery;
use \Exception;
use \PDO;
use Map\CountryCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'country_codes' table.
 *
 *
 *
 * @method     ChildCountryCodeQuery orderByCtryisoalpha3($order = Criteria::ASC) Order by the CtryIsoAlpha3 column
 * @method     ChildCountryCodeQuery orderByCtrydesc($order = Criteria::ASC) Order by the CtryDesc column
 * @method     ChildCountryCodeQuery orderByCtryisoalpha2($order = Criteria::ASC) Order by the CtryIsoAlpha2 column
 * @method     ChildCountryCodeQuery orderByCtryisonumeric($order = Criteria::ASC) Order by the CtryIsoNumeric column
 * @method     ChildCountryCodeQuery orderByCtrycustomcode($order = Criteria::ASC) Order by the CtryCustomCode column
 * @method     ChildCountryCodeQuery orderByCtryexchrate($order = Criteria::ASC) Order by the CtryExchRate column
 * @method     ChildCountryCodeQuery orderByCtrydate($order = Criteria::ASC) Order by the CtryDate column
 * @method     ChildCountryCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCountryCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCountryCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCountryCodeQuery groupByCtryisoalpha3() Group by the CtryIsoAlpha3 column
 * @method     ChildCountryCodeQuery groupByCtrydesc() Group by the CtryDesc column
 * @method     ChildCountryCodeQuery groupByCtryisoalpha2() Group by the CtryIsoAlpha2 column
 * @method     ChildCountryCodeQuery groupByCtryisonumeric() Group by the CtryIsoNumeric column
 * @method     ChildCountryCodeQuery groupByCtrycustomcode() Group by the CtryCustomCode column
 * @method     ChildCountryCodeQuery groupByCtryexchrate() Group by the CtryExchRate column
 * @method     ChildCountryCodeQuery groupByCtrydate() Group by the CtryDate column
 * @method     ChildCountryCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCountryCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCountryCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCountryCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCountryCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCountryCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCountryCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCountryCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCountryCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCountryCode findOne(ConnectionInterface $con = null) Return the first ChildCountryCode matching the query
 * @method     ChildCountryCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCountryCode matching the query, or a new ChildCountryCode object populated from the query conditions when no match is found
 *
 * @method     ChildCountryCode findOneByCtryisoalpha3(string $CtryIsoAlpha3) Return the first ChildCountryCode filtered by the CtryIsoAlpha3 column
 * @method     ChildCountryCode findOneByCtrydesc(string $CtryDesc) Return the first ChildCountryCode filtered by the CtryDesc column
 * @method     ChildCountryCode findOneByCtryisoalpha2(string $CtryIsoAlpha2) Return the first ChildCountryCode filtered by the CtryIsoAlpha2 column
 * @method     ChildCountryCode findOneByCtryisonumeric(int $CtryIsoNumeric) Return the first ChildCountryCode filtered by the CtryIsoNumeric column
 * @method     ChildCountryCode findOneByCtrycustomcode(string $CtryCustomCode) Return the first ChildCountryCode filtered by the CtryCustomCode column
 * @method     ChildCountryCode findOneByCtryexchrate(string $CtryExchRate) Return the first ChildCountryCode filtered by the CtryExchRate column
 * @method     ChildCountryCode findOneByCtrydate(string $CtryDate) Return the first ChildCountryCode filtered by the CtryDate column
 * @method     ChildCountryCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildCountryCode filtered by the DateUpdtd column
 * @method     ChildCountryCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCountryCode filtered by the TimeUpdtd column
 * @method     ChildCountryCode findOneByDummy(string $dummy) Return the first ChildCountryCode filtered by the dummy column *

 * @method     ChildCountryCode requirePk($key, ConnectionInterface $con = null) Return the ChildCountryCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOne(ConnectionInterface $con = null) Return the first ChildCountryCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCountryCode requireOneByCtryisoalpha3(string $CtryIsoAlpha3) Return the first ChildCountryCode filtered by the CtryIsoAlpha3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByCtrydesc(string $CtryDesc) Return the first ChildCountryCode filtered by the CtryDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByCtryisoalpha2(string $CtryIsoAlpha2) Return the first ChildCountryCode filtered by the CtryIsoAlpha2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByCtryisonumeric(int $CtryIsoNumeric) Return the first ChildCountryCode filtered by the CtryIsoNumeric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByCtrycustomcode(string $CtryCustomCode) Return the first ChildCountryCode filtered by the CtryCustomCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByCtryexchrate(string $CtryExchRate) Return the first ChildCountryCode filtered by the CtryExchRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByCtrydate(string $CtryDate) Return the first ChildCountryCode filtered by the CtryDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCountryCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCountryCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCountryCode requireOneByDummy(string $dummy) Return the first ChildCountryCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCountryCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCountryCode objects based on current ModelCriteria
 * @method     ChildCountryCode[]|ObjectCollection findByCtryisoalpha3(string $CtryIsoAlpha3) Return ChildCountryCode objects filtered by the CtryIsoAlpha3 column
 * @method     ChildCountryCode[]|ObjectCollection findByCtrydesc(string $CtryDesc) Return ChildCountryCode objects filtered by the CtryDesc column
 * @method     ChildCountryCode[]|ObjectCollection findByCtryisoalpha2(string $CtryIsoAlpha2) Return ChildCountryCode objects filtered by the CtryIsoAlpha2 column
 * @method     ChildCountryCode[]|ObjectCollection findByCtryisonumeric(int $CtryIsoNumeric) Return ChildCountryCode objects filtered by the CtryIsoNumeric column
 * @method     ChildCountryCode[]|ObjectCollection findByCtrycustomcode(string $CtryCustomCode) Return ChildCountryCode objects filtered by the CtryCustomCode column
 * @method     ChildCountryCode[]|ObjectCollection findByCtryexchrate(string $CtryExchRate) Return ChildCountryCode objects filtered by the CtryExchRate column
 * @method     ChildCountryCode[]|ObjectCollection findByCtrydate(string $CtryDate) Return ChildCountryCode objects filtered by the CtryDate column
 * @method     ChildCountryCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCountryCode objects filtered by the DateUpdtd column
 * @method     ChildCountryCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCountryCode objects filtered by the TimeUpdtd column
 * @method     ChildCountryCode[]|ObjectCollection findByDummy(string $dummy) Return ChildCountryCode objects filtered by the dummy column
 * @method     ChildCountryCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CountryCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CountryCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CountryCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCountryCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCountryCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCountryCodeQuery) {
            return $criteria;
        }
        $query = new ChildCountryCodeQuery();
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
     * @return ChildCountryCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CountryCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CountryCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCountryCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT CtryIsoAlpha3, CtryDesc, CtryIsoAlpha2, CtryIsoNumeric, CtryCustomCode, CtryExchRate, CtryDate, DateUpdtd, TimeUpdtd, dummy FROM country_codes WHERE CtryIsoAlpha3 = :p0';
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
            /** @var ChildCountryCode $obj */
            $obj = new ChildCountryCode();
            $obj->hydrate($row);
            CountryCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCountryCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISOALPHA3, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISOALPHA3, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the CtryIsoAlpha3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCtryisoalpha3('fooValue');   // WHERE CtryIsoAlpha3 = 'fooValue'
     * $query->filterByCtryisoalpha3('%fooValue%', Criteria::LIKE); // WHERE CtryIsoAlpha3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctryisoalpha3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtryisoalpha3($ctryisoalpha3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctryisoalpha3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISOALPHA3, $ctryisoalpha3, $comparison);
    }

    /**
     * Filter the query on the CtryDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByCtrydesc('fooValue');   // WHERE CtryDesc = 'fooValue'
     * $query->filterByCtrydesc('%fooValue%', Criteria::LIKE); // WHERE CtryDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctrydesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtrydesc($ctrydesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctrydesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYDESC, $ctrydesc, $comparison);
    }

    /**
     * Filter the query on the CtryIsoAlpha2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCtryisoalpha2('fooValue');   // WHERE CtryIsoAlpha2 = 'fooValue'
     * $query->filterByCtryisoalpha2('%fooValue%', Criteria::LIKE); // WHERE CtryIsoAlpha2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctryisoalpha2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtryisoalpha2($ctryisoalpha2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctryisoalpha2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISOALPHA2, $ctryisoalpha2, $comparison);
    }

    /**
     * Filter the query on the CtryIsoNumeric column
     *
     * Example usage:
     * <code>
     * $query->filterByCtryisonumeric(1234); // WHERE CtryIsoNumeric = 1234
     * $query->filterByCtryisonumeric(array(12, 34)); // WHERE CtryIsoNumeric IN (12, 34)
     * $query->filterByCtryisonumeric(array('min' => 12)); // WHERE CtryIsoNumeric > 12
     * </code>
     *
     * @param     mixed $ctryisonumeric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtryisonumeric($ctryisonumeric = null, $comparison = null)
    {
        if (is_array($ctryisonumeric)) {
            $useMinMax = false;
            if (isset($ctryisonumeric['min'])) {
                $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISONUMERIC, $ctryisonumeric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctryisonumeric['max'])) {
                $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISONUMERIC, $ctryisonumeric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISONUMERIC, $ctryisonumeric, $comparison);
    }

    /**
     * Filter the query on the CtryCustomCode column
     *
     * Example usage:
     * <code>
     * $query->filterByCtrycustomcode('fooValue');   // WHERE CtryCustomCode = 'fooValue'
     * $query->filterByCtrycustomcode('%fooValue%', Criteria::LIKE); // WHERE CtryCustomCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctrycustomcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtrycustomcode($ctrycustomcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctrycustomcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYCUSTOMCODE, $ctrycustomcode, $comparison);
    }

    /**
     * Filter the query on the CtryExchRate column
     *
     * Example usage:
     * <code>
     * $query->filterByCtryexchrate(1234); // WHERE CtryExchRate = 1234
     * $query->filterByCtryexchrate(array(12, 34)); // WHERE CtryExchRate IN (12, 34)
     * $query->filterByCtryexchrate(array('min' => 12)); // WHERE CtryExchRate > 12
     * </code>
     *
     * @param     mixed $ctryexchrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtryexchrate($ctryexchrate = null, $comparison = null)
    {
        if (is_array($ctryexchrate)) {
            $useMinMax = false;
            if (isset($ctryexchrate['min'])) {
                $this->addUsingAlias(CountryCodeTableMap::COL_CTRYEXCHRATE, $ctryexchrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctryexchrate['max'])) {
                $this->addUsingAlias(CountryCodeTableMap::COL_CTRYEXCHRATE, $ctryexchrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYEXCHRATE, $ctryexchrate, $comparison);
    }

    /**
     * Filter the query on the CtryDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCtrydate('fooValue');   // WHERE CtryDate = 'fooValue'
     * $query->filterByCtrydate('%fooValue%', Criteria::LIKE); // WHERE CtryDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctrydate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByCtrydate($ctrydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctrydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_CTRYDATE, $ctrydate, $comparison);
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
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCountryCode $countryCode Object to remove from the list of results
     *
     * @return $this|ChildCountryCodeQuery The current query, for fluid interface
     */
    public function prune($countryCode = null)
    {
        if ($countryCode) {
            $this->addUsingAlias(CountryCodeTableMap::COL_CTRYISOALPHA3, $countryCode->getCtryisoalpha3(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the country_codes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CountryCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CountryCodeTableMap::clearInstancePool();
            CountryCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CountryCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CountryCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CountryCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CountryCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CountryCodeQuery
