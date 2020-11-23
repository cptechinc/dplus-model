<?php

namespace Base;

use \ConfigKt as ChildConfigKt;
use \ConfigKtQuery as ChildConfigKtQuery;
use \Exception;
use \PDO;
use Map\ConfigKtTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'kt_config' table.
 *
 *
 *
 * @method     ChildConfigKtQuery orderByKttbconfkey($order = Criteria::ASC) Order by the KttbConfKey column
 * @method     ChildConfigKtQuery orderByKttbconfeditso($order = Criteria::ASC) Order by the KttbConfEditSo column
 * @method     ChildConfigKtQuery orderByKttbconfvalu($order = Criteria::ASC) Order by the KttbConfValu column
 * @method     ChildConfigKtQuery orderByKttbconfentrydecpos($order = Criteria::ASC) Order by the KttbConfEntryDecPos column
 * @method     ChildConfigKtQuery orderByKttbconfallowkitinkit($order = Criteria::ASC) Order by the KttbConfAllowKitInKit column
 * @method     ChildConfigKtQuery orderByKttbconfbackordrkitcomp($order = Criteria::ASC) Order by the KttbConfBackordrKitComp column
 * @method     ChildConfigKtQuery orderByKttbconffreeortag($order = Criteria::ASC) Order by the KttbConfFreeOrTag column
 * @method     ChildConfigKtQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigKtQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigKtQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigKtQuery groupByKttbconfkey() Group by the KttbConfKey column
 * @method     ChildConfigKtQuery groupByKttbconfeditso() Group by the KttbConfEditSo column
 * @method     ChildConfigKtQuery groupByKttbconfvalu() Group by the KttbConfValu column
 * @method     ChildConfigKtQuery groupByKttbconfentrydecpos() Group by the KttbConfEntryDecPos column
 * @method     ChildConfigKtQuery groupByKttbconfallowkitinkit() Group by the KttbConfAllowKitInKit column
 * @method     ChildConfigKtQuery groupByKttbconfbackordrkitcomp() Group by the KttbConfBackordrKitComp column
 * @method     ChildConfigKtQuery groupByKttbconffreeortag() Group by the KttbConfFreeOrTag column
 * @method     ChildConfigKtQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigKtQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigKtQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigKtQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigKtQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigKtQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigKtQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigKtQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigKtQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigKt findOne(ConnectionInterface $con = null) Return the first ChildConfigKt matching the query
 * @method     ChildConfigKt findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigKt matching the query, or a new ChildConfigKt object populated from the query conditions when no match is found
 *
 * @method     ChildConfigKt findOneByKttbconfkey(int $KttbConfKey) Return the first ChildConfigKt filtered by the KttbConfKey column
 * @method     ChildConfigKt findOneByKttbconfeditso(string $KttbConfEditSo) Return the first ChildConfigKt filtered by the KttbConfEditSo column
 * @method     ChildConfigKt findOneByKttbconfvalu(string $KttbConfValu) Return the first ChildConfigKt filtered by the KttbConfValu column
 * @method     ChildConfigKt findOneByKttbconfentrydecpos(int $KttbConfEntryDecPos) Return the first ChildConfigKt filtered by the KttbConfEntryDecPos column
 * @method     ChildConfigKt findOneByKttbconfallowkitinkit(string $KttbConfAllowKitInKit) Return the first ChildConfigKt filtered by the KttbConfAllowKitInKit column
 * @method     ChildConfigKt findOneByKttbconfbackordrkitcomp(string $KttbConfBackordrKitComp) Return the first ChildConfigKt filtered by the KttbConfBackordrKitComp column
 * @method     ChildConfigKt findOneByKttbconffreeortag(string $KttbConfFreeOrTag) Return the first ChildConfigKt filtered by the KttbConfFreeOrTag column
 * @method     ChildConfigKt findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigKt filtered by the DateUpdtd column
 * @method     ChildConfigKt findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigKt filtered by the TimeUpdtd column
 * @method     ChildConfigKt findOneByDummy(string $dummy) Return the first ChildConfigKt filtered by the dummy column *

 * @method     ChildConfigKt requirePk($key, ConnectionInterface $con = null) Return the ChildConfigKt by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOne(ConnectionInterface $con = null) Return the first ChildConfigKt matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigKt requireOneByKttbconfkey(int $KttbConfKey) Return the first ChildConfigKt filtered by the KttbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByKttbconfeditso(string $KttbConfEditSo) Return the first ChildConfigKt filtered by the KttbConfEditSo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByKttbconfvalu(string $KttbConfValu) Return the first ChildConfigKt filtered by the KttbConfValu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByKttbconfentrydecpos(int $KttbConfEntryDecPos) Return the first ChildConfigKt filtered by the KttbConfEntryDecPos column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByKttbconfallowkitinkit(string $KttbConfAllowKitInKit) Return the first ChildConfigKt filtered by the KttbConfAllowKitInKit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByKttbconfbackordrkitcomp(string $KttbConfBackordrKitComp) Return the first ChildConfigKt filtered by the KttbConfBackordrKitComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByKttbconffreeortag(string $KttbConfFreeOrTag) Return the first ChildConfigKt filtered by the KttbConfFreeOrTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigKt filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigKt filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigKt requireOneByDummy(string $dummy) Return the first ChildConfigKt filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigKt[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigKt objects based on current ModelCriteria
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconfkey(int $KttbConfKey) Return ChildConfigKt objects filtered by the KttbConfKey column
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconfeditso(string $KttbConfEditSo) Return ChildConfigKt objects filtered by the KttbConfEditSo column
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconfvalu(string $KttbConfValu) Return ChildConfigKt objects filtered by the KttbConfValu column
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconfentrydecpos(int $KttbConfEntryDecPos) Return ChildConfigKt objects filtered by the KttbConfEntryDecPos column
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconfallowkitinkit(string $KttbConfAllowKitInKit) Return ChildConfigKt objects filtered by the KttbConfAllowKitInKit column
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconfbackordrkitcomp(string $KttbConfBackordrKitComp) Return ChildConfigKt objects filtered by the KttbConfBackordrKitComp column
 * @method     ChildConfigKt[]|ObjectCollection findByKttbconffreeortag(string $KttbConfFreeOrTag) Return ChildConfigKt objects filtered by the KttbConfFreeOrTag column
 * @method     ChildConfigKt[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigKt objects filtered by the DateUpdtd column
 * @method     ChildConfigKt[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigKt objects filtered by the TimeUpdtd column
 * @method     ChildConfigKt[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigKt objects filtered by the dummy column
 * @method     ChildConfigKt[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigKtQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigKtQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigKt', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigKtQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigKtQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigKtQuery) {
            return $criteria;
        }
        $query = new ChildConfigKtQuery();
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
     * @return ChildConfigKt|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigKtTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigKtTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigKt A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT KttbConfKey, KttbConfEditSo, KttbConfValu, KttbConfEntryDecPos, KttbConfAllowKitInKit, KttbConfBackordrKitComp, KttbConfFreeOrTag, DateUpdtd, TimeUpdtd, dummy FROM kt_config WHERE KttbConfKey = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildConfigKt $obj */
            $obj = new ChildConfigKt();
            $obj->hydrate($row);
            ConfigKtTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigKt|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the KttbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconfkey(1234); // WHERE KttbConfKey = 1234
     * $query->filterByKttbconfkey(array(12, 34)); // WHERE KttbConfKey IN (12, 34)
     * $query->filterByKttbconfkey(array('min' => 12)); // WHERE KttbConfKey > 12
     * </code>
     *
     * @param     mixed $kttbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconfkey($kttbconfkey = null, $comparison = null)
    {
        if (is_array($kttbconfkey)) {
            $useMinMax = false;
            if (isset($kttbconfkey['min'])) {
                $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFKEY, $kttbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kttbconfkey['max'])) {
                $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFKEY, $kttbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFKEY, $kttbconfkey, $comparison);
    }

    /**
     * Filter the query on the KttbConfEditSo column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconfeditso('fooValue');   // WHERE KttbConfEditSo = 'fooValue'
     * $query->filterByKttbconfeditso('%fooValue%', Criteria::LIKE); // WHERE KttbConfEditSo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kttbconfeditso The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconfeditso($kttbconfeditso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kttbconfeditso)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFEDITSO, $kttbconfeditso, $comparison);
    }

    /**
     * Filter the query on the KttbConfValu column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconfvalu('fooValue');   // WHERE KttbConfValu = 'fooValue'
     * $query->filterByKttbconfvalu('%fooValue%', Criteria::LIKE); // WHERE KttbConfValu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kttbconfvalu The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconfvalu($kttbconfvalu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kttbconfvalu)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFVALU, $kttbconfvalu, $comparison);
    }

    /**
     * Filter the query on the KttbConfEntryDecPos column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconfentrydecpos(1234); // WHERE KttbConfEntryDecPos = 1234
     * $query->filterByKttbconfentrydecpos(array(12, 34)); // WHERE KttbConfEntryDecPos IN (12, 34)
     * $query->filterByKttbconfentrydecpos(array('min' => 12)); // WHERE KttbConfEntryDecPos > 12
     * </code>
     *
     * @param     mixed $kttbconfentrydecpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconfentrydecpos($kttbconfentrydecpos = null, $comparison = null)
    {
        if (is_array($kttbconfentrydecpos)) {
            $useMinMax = false;
            if (isset($kttbconfentrydecpos['min'])) {
                $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFENTRYDECPOS, $kttbconfentrydecpos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kttbconfentrydecpos['max'])) {
                $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFENTRYDECPOS, $kttbconfentrydecpos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFENTRYDECPOS, $kttbconfentrydecpos, $comparison);
    }

    /**
     * Filter the query on the KttbConfAllowKitInKit column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconfallowkitinkit('fooValue');   // WHERE KttbConfAllowKitInKit = 'fooValue'
     * $query->filterByKttbconfallowkitinkit('%fooValue%', Criteria::LIKE); // WHERE KttbConfAllowKitInKit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kttbconfallowkitinkit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconfallowkitinkit($kttbconfallowkitinkit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kttbconfallowkitinkit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFALLOWKITINKIT, $kttbconfallowkitinkit, $comparison);
    }

    /**
     * Filter the query on the KttbConfBackordrKitComp column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconfbackordrkitcomp('fooValue');   // WHERE KttbConfBackordrKitComp = 'fooValue'
     * $query->filterByKttbconfbackordrkitcomp('%fooValue%', Criteria::LIKE); // WHERE KttbConfBackordrKitComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kttbconfbackordrkitcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconfbackordrkitcomp($kttbconfbackordrkitcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kttbconfbackordrkitcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFBACKORDRKITCOMP, $kttbconfbackordrkitcomp, $comparison);
    }

    /**
     * Filter the query on the KttbConfFreeOrTag column
     *
     * Example usage:
     * <code>
     * $query->filterByKttbconffreeortag('fooValue');   // WHERE KttbConfFreeOrTag = 'fooValue'
     * $query->filterByKttbconffreeortag('%fooValue%', Criteria::LIKE); // WHERE KttbConfFreeOrTag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kttbconffreeortag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByKttbconffreeortag($kttbconffreeortag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kttbconffreeortag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFFREEORTAG, $kttbconffreeortag, $comparison);
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
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigKtTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigKt $configKt Object to remove from the list of results
     *
     * @return $this|ChildConfigKtQuery The current query, for fluid interface
     */
    public function prune($configKt = null)
    {
        if ($configKt) {
            $this->addUsingAlias(ConfigKtTableMap::COL_KTTBCONFKEY, $configKt->getKttbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the kt_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigKtTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigKtTableMap::clearInstancePool();
            ConfigKtTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigKtTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigKtTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigKtTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigKtTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigKtQuery
