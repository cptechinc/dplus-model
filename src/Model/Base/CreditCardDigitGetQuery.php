<?php

namespace Base;

use \CreditCardDigitGet as ChildCreditCardDigitGet;
use \CreditCardDigitGetQuery as ChildCreditCardDigitGetQuery;
use \Exception;
use \PDO;
use Map\CreditCardDigitGetTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_crcd' table.
 *
 *
 *
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdcode($order = Criteria::ASC) Order by the ArtbCrcdCode column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdname($order = Criteria::ASC) Order by the ArtbCrcdName column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdglacct($order = Criteria::ASC) Order by the ArtbCrcdGlAcct column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdcustid($order = Criteria::ASC) Order by the ArtbCrcdCustId column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdchrgglacct($order = Criteria::ASC) Order by the ArtbCrcdChrgGlAcct column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdchrgrate($order = Criteria::ASC) Order by the ArtbCrcdChrgRate column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdchrgtrancost($order = Criteria::ASC) Order by the ArtbCrcdChrgTranCost column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdccsurchgpct($order = Criteria::ASC) Order by the ArtbCrcdCcSurchgPct column
 * @method     ChildCreditCardDigitGetQuery orderByArtbcrcdlmccsurchgpct($order = Criteria::ASC) Order by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildCreditCardDigitGetQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCreditCardDigitGetQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCreditCardDigitGetQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdcode() Group by the ArtbCrcdCode column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdname() Group by the ArtbCrcdName column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdglacct() Group by the ArtbCrcdGlAcct column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdcustid() Group by the ArtbCrcdCustId column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdchrgglacct() Group by the ArtbCrcdChrgGlAcct column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdchrgrate() Group by the ArtbCrcdChrgRate column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdchrgtrancost() Group by the ArtbCrcdChrgTranCost column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdccsurchgpct() Group by the ArtbCrcdCcSurchgPct column
 * @method     ChildCreditCardDigitGetQuery groupByArtbcrcdlmccsurchgpct() Group by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildCreditCardDigitGetQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCreditCardDigitGetQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCreditCardDigitGetQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCreditCardDigitGetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCreditCardDigitGetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCreditCardDigitGetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCreditCardDigitGetQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCreditCardDigitGetQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCreditCardDigitGetQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCreditCardDigitGet findOne(ConnectionInterface $con = null) Return the first ChildCreditCardDigitGet matching the query
 * @method     ChildCreditCardDigitGet findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCreditCardDigitGet matching the query, or a new ChildCreditCardDigitGet object populated from the query conditions when no match is found
 *
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdcode(string $ArtbCrcdCode) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdCode column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdname(string $ArtbCrcdName) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdName column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdglacct(string $ArtbCrcdGlAcct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdGlAcct column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdcustid(string $ArtbCrcdCustId) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdCustId column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdchrgglacct(string $ArtbCrcdChrgGlAcct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdChrgGlAcct column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdchrgrate(string $ArtbCrcdChrgRate) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdChrgRate column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdchrgtrancost(string $ArtbCrcdChrgTranCost) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdChrgTranCost column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdccsurchgpct(string $ArtbCrcdCcSurchgPct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdCcSurchgPct column
 * @method     ChildCreditCardDigitGet findOneByArtbcrcdlmccsurchgpct(string $ArtbCrcdLmCcSurchgPct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildCreditCardDigitGet findOneByDateupdtd(string $DateUpdtd) Return the first ChildCreditCardDigitGet filtered by the DateUpdtd column
 * @method     ChildCreditCardDigitGet findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCreditCardDigitGet filtered by the TimeUpdtd column
 * @method     ChildCreditCardDigitGet findOneByDummy(string $dummy) Return the first ChildCreditCardDigitGet filtered by the dummy column *

 * @method     ChildCreditCardDigitGet requirePk($key, ConnectionInterface $con = null) Return the ChildCreditCardDigitGet by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOne(ConnectionInterface $con = null) Return the first ChildCreditCardDigitGet matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdcode(string $ArtbCrcdCode) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdname(string $ArtbCrcdName) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdglacct(string $ArtbCrcdGlAcct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdcustid(string $ArtbCrcdCustId) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdchrgglacct(string $ArtbCrcdChrgGlAcct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdChrgGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdchrgrate(string $ArtbCrcdChrgRate) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdChrgRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdchrgtrancost(string $ArtbCrcdChrgTranCost) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdChrgTranCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdccsurchgpct(string $ArtbCrcdCcSurchgPct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdCcSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByArtbcrcdlmccsurchgpct(string $ArtbCrcdLmCcSurchgPct) Return the first ChildCreditCardDigitGet filtered by the ArtbCrcdLmCcSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCreditCardDigitGet filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCreditCardDigitGet filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCardDigitGet requireOneByDummy(string $dummy) Return the first ChildCreditCardDigitGet filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCreditCardDigitGet[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCreditCardDigitGet objects based on current ModelCriteria
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdcode(string $ArtbCrcdCode) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdCode column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdname(string $ArtbCrcdName) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdName column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdglacct(string $ArtbCrcdGlAcct) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdGlAcct column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdcustid(string $ArtbCrcdCustId) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdCustId column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdchrgglacct(string $ArtbCrcdChrgGlAcct) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdChrgGlAcct column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdchrgrate(string $ArtbCrcdChrgRate) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdChrgRate column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdchrgtrancost(string $ArtbCrcdChrgTranCost) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdChrgTranCost column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdccsurchgpct(string $ArtbCrcdCcSurchgPct) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdCcSurchgPct column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByArtbcrcdlmccsurchgpct(string $ArtbCrcdLmCcSurchgPct) Return ChildCreditCardDigitGet objects filtered by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCreditCardDigitGet objects filtered by the DateUpdtd column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCreditCardDigitGet objects filtered by the TimeUpdtd column
 * @method     ChildCreditCardDigitGet[]|ObjectCollection findByDummy(string $dummy) Return ChildCreditCardDigitGet objects filtered by the dummy column
 * @method     ChildCreditCardDigitGet[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CreditCardDigitGetQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CreditCardDigitGetQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CreditCardDigitGet', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCreditCardDigitGetQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCreditCardDigitGetQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCreditCardDigitGetQuery) {
            return $criteria;
        }
        $query = new ChildCreditCardDigitGetQuery();
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
     * @return ChildCreditCardDigitGet|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CreditCardDigitGetTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CreditCardDigitGetTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCreditCardDigitGet A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbCrcdCode, ArtbCrcdName, ArtbCrcdGlAcct, ArtbCrcdCustId, ArtbCrcdChrgGlAcct, ArtbCrcdChrgRate, ArtbCrcdChrgTranCost, ArtbCrcdCcSurchgPct, ArtbCrcdLmCcSurchgPct, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_crcd WHERE ArtbCrcdCode = :p0';
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
            /** @var ChildCreditCardDigitGet $obj */
            $obj = new ChildCreditCardDigitGet();
            $obj->hydrate($row);
            CreditCardDigitGetTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCreditCardDigitGet|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbCrcdCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdcode('fooValue');   // WHERE ArtbCrcdCode = 'fooValue'
     * $query->filterByArtbcrcdcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcrcdcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdcode($artbcrcdcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCODE, $artbcrcdcode, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdName column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdname('fooValue');   // WHERE ArtbCrcdName = 'fooValue'
     * $query->filterByArtbcrcdname('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcrcdname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdname($artbcrcdname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDNAME, $artbcrcdname, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdglacct('fooValue');   // WHERE ArtbCrcdGlAcct = 'fooValue'
     * $query->filterByArtbcrcdglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcrcdglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdglacct($artbcrcdglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDGLACCT, $artbcrcdglacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdcustid('fooValue');   // WHERE ArtbCrcdCustId = 'fooValue'
     * $query->filterByArtbcrcdcustid('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcrcdcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdcustid($artbcrcdcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCUSTID, $artbcrcdcustid, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdChrgGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdchrgglacct('fooValue');   // WHERE ArtbCrcdChrgGlAcct = 'fooValue'
     * $query->filterByArtbcrcdchrgglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdChrgGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcrcdchrgglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdchrgglacct($artbcrcdchrgglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdchrgglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGGLACCT, $artbcrcdchrgglacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdChrgRate column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdchrgrate(1234); // WHERE ArtbCrcdChrgRate = 1234
     * $query->filterByArtbcrcdchrgrate(array(12, 34)); // WHERE ArtbCrcdChrgRate IN (12, 34)
     * $query->filterByArtbcrcdchrgrate(array('min' => 12)); // WHERE ArtbCrcdChrgRate > 12
     * </code>
     *
     * @param     mixed $artbcrcdchrgrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdchrgrate($artbcrcdchrgrate = null, $comparison = null)
    {
        if (is_array($artbcrcdchrgrate)) {
            $useMinMax = false;
            if (isset($artbcrcdchrgrate['min'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGRATE, $artbcrcdchrgrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdchrgrate['max'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGRATE, $artbcrcdchrgrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGRATE, $artbcrcdchrgrate, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdChrgTranCost column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdchrgtrancost(1234); // WHERE ArtbCrcdChrgTranCost = 1234
     * $query->filterByArtbcrcdchrgtrancost(array(12, 34)); // WHERE ArtbCrcdChrgTranCost IN (12, 34)
     * $query->filterByArtbcrcdchrgtrancost(array('min' => 12)); // WHERE ArtbCrcdChrgTranCost > 12
     * </code>
     *
     * @param     mixed $artbcrcdchrgtrancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdchrgtrancost($artbcrcdchrgtrancost = null, $comparison = null)
    {
        if (is_array($artbcrcdchrgtrancost)) {
            $useMinMax = false;
            if (isset($artbcrcdchrgtrancost['min'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGTRANCOST, $artbcrcdchrgtrancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdchrgtrancost['max'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGTRANCOST, $artbcrcdchrgtrancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCHRGTRANCOST, $artbcrcdchrgtrancost, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdCcSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdccsurchgpct(1234); // WHERE ArtbCrcdCcSurchgPct = 1234
     * $query->filterByArtbcrcdccsurchgpct(array(12, 34)); // WHERE ArtbCrcdCcSurchgPct IN (12, 34)
     * $query->filterByArtbcrcdccsurchgpct(array('min' => 12)); // WHERE ArtbCrcdCcSurchgPct > 12
     * </code>
     *
     * @param     mixed $artbcrcdccsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdccsurchgpct($artbcrcdccsurchgpct = null, $comparison = null)
    {
        if (is_array($artbcrcdccsurchgpct)) {
            $useMinMax = false;
            if (isset($artbcrcdccsurchgpct['min'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCCSURCHGPCT, $artbcrcdccsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdccsurchgpct['max'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCCSURCHGPCT, $artbcrcdccsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCCSURCHGPCT, $artbcrcdccsurchgpct, $comparison);
    }

    /**
     * Filter the query on the ArtbCrcdLmCcSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdlmccsurchgpct(1234); // WHERE ArtbCrcdLmCcSurchgPct = 1234
     * $query->filterByArtbcrcdlmccsurchgpct(array(12, 34)); // WHERE ArtbCrcdLmCcSurchgPct IN (12, 34)
     * $query->filterByArtbcrcdlmccsurchgpct(array('min' => 12)); // WHERE ArtbCrcdLmCcSurchgPct > 12
     * </code>
     *
     * @param     mixed $artbcrcdlmccsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByArtbcrcdlmccsurchgpct($artbcrcdlmccsurchgpct = null, $comparison = null)
    {
        if (is_array($artbcrcdlmccsurchgpct)) {
            $useMinMax = false;
            if (isset($artbcrcdlmccsurchgpct['min'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDLMCCSURCHGPCT, $artbcrcdlmccsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdlmccsurchgpct['max'])) {
                $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDLMCCSURCHGPCT, $artbcrcdlmccsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDLMCCSURCHGPCT, $artbcrcdlmccsurchgpct, $comparison);
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
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardDigitGetTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCreditCardDigitGet $creditCardDigitGet Object to remove from the list of results
     *
     * @return $this|ChildCreditCardDigitGetQuery The current query, for fluid interface
     */
    public function prune($creditCardDigitGet = null)
    {
        if ($creditCardDigitGet) {
            $this->addUsingAlias(CreditCardDigitGetTableMap::COL_ARTBCRCDCODE, $creditCardDigitGet->getArtbcrcdcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_crcd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditCardDigitGetTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CreditCardDigitGetTableMap::clearInstancePool();
            CreditCardDigitGetTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CreditCardDigitGetTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CreditCardDigitGetTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CreditCardDigitGetTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CreditCardDigitGetTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CreditCardDigitGetQuery
