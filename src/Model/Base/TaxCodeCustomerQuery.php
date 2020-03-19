<?php

namespace Base;

use \TaxCodeCustomer as ChildTaxCodeCustomer;
use \TaxCodeCustomerQuery as ChildTaxCodeCustomerQuery;
use \Exception;
use \PDO;
use Map\TaxCodeCustomerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_ctax' table.
 *
 *
 *
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode($order = Criteria::ASC) Order by the ArtbCtaxCode column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxdesc($order = Criteria::ASC) Order by the ArtbCtaxDesc column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode1($order = Criteria::ASC) Order by the ArtbCtaxCode1 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode2($order = Criteria::ASC) Order by the ArtbCtaxCode2 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode3($order = Criteria::ASC) Order by the ArtbCtaxCode3 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode4($order = Criteria::ASC) Order by the ArtbCtaxCode4 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode5($order = Criteria::ASC) Order by the ArtbCtaxCode5 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode6($order = Criteria::ASC) Order by the ArtbCtaxCode6 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode7($order = Criteria::ASC) Order by the ArtbCtaxCode7 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode8($order = Criteria::ASC) Order by the ArtbCtaxCode8 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode9($order = Criteria::ASC) Order by the ArtbCtaxCode9 column
 * @method     ChildTaxCodeCustomerQuery orderByArtbctaxcode10($order = Criteria::ASC) Order by the ArtbCtaxCode10 column
 * @method     ChildTaxCodeCustomerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildTaxCodeCustomerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildTaxCodeCustomerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode() Group by the ArtbCtaxCode column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxdesc() Group by the ArtbCtaxDesc column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode1() Group by the ArtbCtaxCode1 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode2() Group by the ArtbCtaxCode2 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode3() Group by the ArtbCtaxCode3 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode4() Group by the ArtbCtaxCode4 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode5() Group by the ArtbCtaxCode5 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode6() Group by the ArtbCtaxCode6 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode7() Group by the ArtbCtaxCode7 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode8() Group by the ArtbCtaxCode8 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode9() Group by the ArtbCtaxCode9 column
 * @method     ChildTaxCodeCustomerQuery groupByArtbctaxcode10() Group by the ArtbCtaxCode10 column
 * @method     ChildTaxCodeCustomerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildTaxCodeCustomerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildTaxCodeCustomerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildTaxCodeCustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTaxCodeCustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTaxCodeCustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTaxCodeCustomerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTaxCodeCustomerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTaxCodeCustomerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTaxCodeCustomer findOne(ConnectionInterface $con = null) Return the first ChildTaxCodeCustomer matching the query
 * @method     ChildTaxCodeCustomer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTaxCodeCustomer matching the query, or a new ChildTaxCodeCustomer object populated from the query conditions when no match is found
 *
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxdesc(string $ArtbCtaxDesc) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxDesc column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode1(string $ArtbCtaxCode1) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode1 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode2(string $ArtbCtaxCode2) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode2 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode3(string $ArtbCtaxCode3) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode3 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode4(string $ArtbCtaxCode4) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode4 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode5(string $ArtbCtaxCode5) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode5 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode6(string $ArtbCtaxCode6) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode6 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode7(string $ArtbCtaxCode7) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode7 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode8(string $ArtbCtaxCode8) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode8 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode9(string $ArtbCtaxCode9) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode9 column
 * @method     ChildTaxCodeCustomer findOneByArtbctaxcode10(string $ArtbCtaxCode10) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode10 column
 * @method     ChildTaxCodeCustomer findOneByDateupdtd(string $DateUpdtd) Return the first ChildTaxCodeCustomer filtered by the DateUpdtd column
 * @method     ChildTaxCodeCustomer findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTaxCodeCustomer filtered by the TimeUpdtd column
 * @method     ChildTaxCodeCustomer findOneByDummy(string $dummy) Return the first ChildTaxCodeCustomer filtered by the dummy column *

 * @method     ChildTaxCodeCustomer requirePk($key, ConnectionInterface $con = null) Return the ChildTaxCodeCustomer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOne(ConnectionInterface $con = null) Return the first ChildTaxCodeCustomer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxdesc(string $ArtbCtaxDesc) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode1(string $ArtbCtaxCode1) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode2(string $ArtbCtaxCode2) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode3(string $ArtbCtaxCode3) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode4(string $ArtbCtaxCode4) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode5(string $ArtbCtaxCode5) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode6(string $ArtbCtaxCode6) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode7(string $ArtbCtaxCode7) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode8(string $ArtbCtaxCode8) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode9(string $ArtbCtaxCode9) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByArtbctaxcode10(string $ArtbCtaxCode10) Return the first ChildTaxCodeCustomer filtered by the ArtbCtaxCode10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildTaxCodeCustomer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildTaxCodeCustomer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTaxCodeCustomer requireOneByDummy(string $dummy) Return the first ChildTaxCodeCustomer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTaxCodeCustomer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTaxCodeCustomer objects based on current ModelCriteria
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode(string $ArtbCtaxCode) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxdesc(string $ArtbCtaxDesc) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxDesc column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode1(string $ArtbCtaxCode1) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode1 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode2(string $ArtbCtaxCode2) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode2 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode3(string $ArtbCtaxCode3) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode3 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode4(string $ArtbCtaxCode4) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode4 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode5(string $ArtbCtaxCode5) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode5 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode6(string $ArtbCtaxCode6) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode6 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode7(string $ArtbCtaxCode7) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode7 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode8(string $ArtbCtaxCode8) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode8 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode9(string $ArtbCtaxCode9) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode9 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByArtbctaxcode10(string $ArtbCtaxCode10) Return ChildTaxCodeCustomer objects filtered by the ArtbCtaxCode10 column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildTaxCodeCustomer objects filtered by the DateUpdtd column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildTaxCodeCustomer objects filtered by the TimeUpdtd column
 * @method     ChildTaxCodeCustomer[]|ObjectCollection findByDummy(string $dummy) Return ChildTaxCodeCustomer objects filtered by the dummy column
 * @method     ChildTaxCodeCustomer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TaxCodeCustomerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TaxCodeCustomerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\TaxCodeCustomer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTaxCodeCustomerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTaxCodeCustomerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTaxCodeCustomerQuery) {
            return $criteria;
        }
        $query = new ChildTaxCodeCustomerQuery();
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
     * @return ChildTaxCodeCustomer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TaxCodeCustomerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TaxCodeCustomerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildTaxCodeCustomer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbCtaxCode, ArtbCtaxDesc, ArtbCtaxCode1, ArtbCtaxCode2, ArtbCtaxCode3, ArtbCtaxCode4, ArtbCtaxCode5, ArtbCtaxCode6, ArtbCtaxCode7, ArtbCtaxCode8, ArtbCtaxCode9, ArtbCtaxCode10, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_ctax WHERE ArtbCtaxCode = :p0';
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
            /** @var ChildTaxCodeCustomer $obj */
            $obj = new ChildTaxCodeCustomer();
            $obj->hydrate($row);
            TaxCodeCustomerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildTaxCodeCustomer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbCtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode('fooValue');   // WHERE ArtbCtaxCode = 'fooValue'
     * $query->filterByArtbctaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode($artbctaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxdesc('fooValue');   // WHERE ArtbCtaxDesc = 'fooValue'
     * $query->filterByArtbctaxdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxdesc($artbctaxdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXDESC, $artbctaxdesc, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode1('fooValue');   // WHERE ArtbCtaxCode1 = 'fooValue'
     * $query->filterByArtbctaxcode1('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode1($artbctaxcode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE1, $artbctaxcode1, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode2('fooValue');   // WHERE ArtbCtaxCode2 = 'fooValue'
     * $query->filterByArtbctaxcode2('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode2($artbctaxcode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE2, $artbctaxcode2, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode3('fooValue');   // WHERE ArtbCtaxCode3 = 'fooValue'
     * $query->filterByArtbctaxcode3('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode3($artbctaxcode3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE3, $artbctaxcode3, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode4('fooValue');   // WHERE ArtbCtaxCode4 = 'fooValue'
     * $query->filterByArtbctaxcode4('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode4($artbctaxcode4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE4, $artbctaxcode4, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode5('fooValue');   // WHERE ArtbCtaxCode5 = 'fooValue'
     * $query->filterByArtbctaxcode5('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode5 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode5($artbctaxcode5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE5, $artbctaxcode5, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode6('fooValue');   // WHERE ArtbCtaxCode6 = 'fooValue'
     * $query->filterByArtbctaxcode6('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode6 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode6 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode6($artbctaxcode6 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE6, $artbctaxcode6, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode7('fooValue');   // WHERE ArtbCtaxCode7 = 'fooValue'
     * $query->filterByArtbctaxcode7('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode7 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode7($artbctaxcode7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE7, $artbctaxcode7, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode8('fooValue');   // WHERE ArtbCtaxCode8 = 'fooValue'
     * $query->filterByArtbctaxcode8('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode8 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode8 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode8($artbctaxcode8 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE8, $artbctaxcode8, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode9('fooValue');   // WHERE ArtbCtaxCode9 = 'fooValue'
     * $query->filterByArtbctaxcode9('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode9 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode9 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode9($artbctaxcode9 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE9, $artbctaxcode9, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode10('fooValue');   // WHERE ArtbCtaxCode10 = 'fooValue'
     * $query->filterByArtbctaxcode10('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode10($artbctaxcode10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE10, $artbctaxcode10, $comparison);
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
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TaxCodeCustomerTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTaxCodeCustomer $taxCodeCustomer Object to remove from the list of results
     *
     * @return $this|ChildTaxCodeCustomerQuery The current query, for fluid interface
     */
    public function prune($taxCodeCustomer = null)
    {
        if ($taxCodeCustomer) {
            $this->addUsingAlias(TaxCodeCustomerTableMap::COL_ARTBCTAXCODE, $taxCodeCustomer->getArtbctaxcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_ctax table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeCustomerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TaxCodeCustomerTableMap::clearInstancePool();
            TaxCodeCustomerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(TaxCodeCustomerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TaxCodeCustomerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TaxCodeCustomerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TaxCodeCustomerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TaxCodeCustomerQuery
