<?php

namespace Base;

use \CustomerTypeCode as ChildCustomerTypeCode;
use \CustomerTypeCodeQuery as ChildCustomerTypeCodeQuery;
use \Exception;
use \PDO;
use Map\CustomerTypeCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_type' table.
 *
 *
 *
 * @method     ChildCustomerTypeCodeQuery orderByArtbtypecode($order = Criteria::ASC) Order by the ArtbTypeCode column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypdesc($order = Criteria::ASC) Order by the ArtbCtypDesc column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctyparacct($order = Criteria::ASC) Order by the ArtbCtypArAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypfrtacct($order = Criteria::ASC) Order by the ArtbCtypFrtAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypmiscacct($order = Criteria::ASC) Order by the ArtbCtypMiscAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypcashacct($order = Criteria::ASC) Order by the ArtbCtypCashAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypfincacct($order = Criteria::ASC) Order by the ArtbCtypFincAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypdiscacct($order = Criteria::ASC) Order by the ArtbCtypDiscAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypsaleacct($order = Criteria::ASC) Order by the ArtbCtypSaleAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypcogsacct($order = Criteria::ASC) Order by the ArtbCtypCogsAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypcredacct($order = Criteria::ASC) Order by the ArtbCtypCredAcct column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypmail($order = Criteria::ASC) Order by the ArtbCtypMail column
 * @method     ChildCustomerTypeCodeQuery orderByArtbctypaprvneedemail($order = Criteria::ASC) Order by the ArtbCtypAprvNeedEmail column
 * @method     ChildCustomerTypeCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerTypeCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerTypeCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerTypeCodeQuery groupByArtbtypecode() Group by the ArtbTypeCode column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypdesc() Group by the ArtbCtypDesc column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctyparacct() Group by the ArtbCtypArAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypfrtacct() Group by the ArtbCtypFrtAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypmiscacct() Group by the ArtbCtypMiscAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypcashacct() Group by the ArtbCtypCashAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypfincacct() Group by the ArtbCtypFincAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypdiscacct() Group by the ArtbCtypDiscAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypsaleacct() Group by the ArtbCtypSaleAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypcogsacct() Group by the ArtbCtypCogsAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypcredacct() Group by the ArtbCtypCredAcct column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypmail() Group by the ArtbCtypMail column
 * @method     ChildCustomerTypeCodeQuery groupByArtbctypaprvneedemail() Group by the ArtbCtypAprvNeedEmail column
 * @method     ChildCustomerTypeCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerTypeCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerTypeCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerTypeCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerTypeCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerTypeCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerTypeCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerTypeCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerTypeCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerTypeCode findOne(ConnectionInterface $con = null) Return the first ChildCustomerTypeCode matching the query
 * @method     ChildCustomerTypeCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerTypeCode matching the query, or a new ChildCustomerTypeCode object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerTypeCode findOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildCustomerTypeCode filtered by the ArtbTypeCode column
 * @method     ChildCustomerTypeCode findOneByArtbctypdesc(string $ArtbCtypDesc) Return the first ChildCustomerTypeCode filtered by the ArtbCtypDesc column
 * @method     ChildCustomerTypeCode findOneByArtbctyparacct(string $ArtbCtypArAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypArAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypfrtacct(string $ArtbCtypFrtAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypFrtAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypmiscacct(string $ArtbCtypMiscAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypMiscAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypcashacct(string $ArtbCtypCashAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypCashAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypfincacct(string $ArtbCtypFincAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypFincAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypdiscacct(string $ArtbCtypDiscAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypDiscAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypsaleacct(string $ArtbCtypSaleAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypSaleAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypcogsacct(string $ArtbCtypCogsAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypCogsAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypcredacct(string $ArtbCtypCredAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypCredAcct column
 * @method     ChildCustomerTypeCode findOneByArtbctypmail(string $ArtbCtypMail) Return the first ChildCustomerTypeCode filtered by the ArtbCtypMail column
 * @method     ChildCustomerTypeCode findOneByArtbctypaprvneedemail(string $ArtbCtypAprvNeedEmail) Return the first ChildCustomerTypeCode filtered by the ArtbCtypAprvNeedEmail column
 * @method     ChildCustomerTypeCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerTypeCode filtered by the DateUpdtd column
 * @method     ChildCustomerTypeCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerTypeCode filtered by the TimeUpdtd column
 * @method     ChildCustomerTypeCode findOneByDummy(string $dummy) Return the first ChildCustomerTypeCode filtered by the dummy column *

 * @method     ChildCustomerTypeCode requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerTypeCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOne(ConnectionInterface $con = null) Return the first ChildCustomerTypeCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerTypeCode requireOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildCustomerTypeCode filtered by the ArtbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypdesc(string $ArtbCtypDesc) Return the first ChildCustomerTypeCode filtered by the ArtbCtypDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctyparacct(string $ArtbCtypArAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypArAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypfrtacct(string $ArtbCtypFrtAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypFrtAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypmiscacct(string $ArtbCtypMiscAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypMiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypcashacct(string $ArtbCtypCashAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypCashAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypfincacct(string $ArtbCtypFincAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypFincAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypdiscacct(string $ArtbCtypDiscAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypDiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypsaleacct(string $ArtbCtypSaleAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypSaleAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypcogsacct(string $ArtbCtypCogsAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypCogsAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypcredacct(string $ArtbCtypCredAcct) Return the first ChildCustomerTypeCode filtered by the ArtbCtypCredAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypmail(string $ArtbCtypMail) Return the first ChildCustomerTypeCode filtered by the ArtbCtypMail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByArtbctypaprvneedemail(string $ArtbCtypAprvNeedEmail) Return the first ChildCustomerTypeCode filtered by the ArtbCtypAprvNeedEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerTypeCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerTypeCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeCode requireOneByDummy(string $dummy) Return the first ChildCustomerTypeCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerTypeCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerTypeCode objects based on current ModelCriteria
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbtypecode(string $ArtbTypeCode) Return ChildCustomerTypeCode objects filtered by the ArtbTypeCode column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypdesc(string $ArtbCtypDesc) Return ChildCustomerTypeCode objects filtered by the ArtbCtypDesc column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctyparacct(string $ArtbCtypArAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypArAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypfrtacct(string $ArtbCtypFrtAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypFrtAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypmiscacct(string $ArtbCtypMiscAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypMiscAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypcashacct(string $ArtbCtypCashAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypCashAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypfincacct(string $ArtbCtypFincAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypFincAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypdiscacct(string $ArtbCtypDiscAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypDiscAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypsaleacct(string $ArtbCtypSaleAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypSaleAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypcogsacct(string $ArtbCtypCogsAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypCogsAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypcredacct(string $ArtbCtypCredAcct) Return ChildCustomerTypeCode objects filtered by the ArtbCtypCredAcct column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypmail(string $ArtbCtypMail) Return ChildCustomerTypeCode objects filtered by the ArtbCtypMail column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByArtbctypaprvneedemail(string $ArtbCtypAprvNeedEmail) Return ChildCustomerTypeCode objects filtered by the ArtbCtypAprvNeedEmail column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerTypeCode objects filtered by the DateUpdtd column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerTypeCode objects filtered by the TimeUpdtd column
 * @method     ChildCustomerTypeCode[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerTypeCode objects filtered by the dummy column
 * @method     ChildCustomerTypeCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerTypeCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerTypeCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerTypeCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerTypeCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerTypeCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerTypeCodeQuery) {
            return $criteria;
        }
        $query = new ChildCustomerTypeCodeQuery();
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
     * @return ChildCustomerTypeCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerTypeCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerTypeCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomerTypeCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbTypeCode, ArtbCtypDesc, ArtbCtypArAcct, ArtbCtypFrtAcct, ArtbCtypMiscAcct, ArtbCtypCashAcct, ArtbCtypFincAcct, ArtbCtypDiscAcct, ArtbCtypSaleAcct, ArtbCtypCogsAcct, ArtbCtypCredAcct, ArtbCtypMail, ArtbCtypAprvNeedEmail, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_type WHERE ArtbTypeCode = :p0';
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
            /** @var ChildCustomerTypeCode $obj */
            $obj = new ChildCustomerTypeCode();
            $obj->hydrate($row);
            CustomerTypeCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomerTypeCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBTYPECODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBTYPECODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArtbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtypecode('fooValue');   // WHERE ArtbTypeCode = 'fooValue'
     * $query->filterByArtbtypecode('%fooValue%', Criteria::LIKE); // WHERE ArtbTypeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbtypecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbtypecode($artbtypecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBTYPECODE, $artbtypecode, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypdesc('fooValue');   // WHERE ArtbCtypDesc = 'fooValue'
     * $query->filterByArtbctypdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypdesc($artbctypdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPDESC, $artbctypdesc, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypArAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctyparacct('fooValue');   // WHERE ArtbCtypArAcct = 'fooValue'
     * $query->filterByArtbctyparacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypArAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctyparacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctyparacct($artbctyparacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctyparacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPARACCT, $artbctyparacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypFrtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypfrtacct('fooValue');   // WHERE ArtbCtypFrtAcct = 'fooValue'
     * $query->filterByArtbctypfrtacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypFrtAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypfrtacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypfrtacct($artbctypfrtacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypfrtacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPFRTACCT, $artbctypfrtacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypMiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypmiscacct('fooValue');   // WHERE ArtbCtypMiscAcct = 'fooValue'
     * $query->filterByArtbctypmiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypMiscAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypmiscacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypmiscacct($artbctypmiscacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypmiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPMISCACCT, $artbctypmiscacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypcashacct('fooValue');   // WHERE ArtbCtypCashAcct = 'fooValue'
     * $query->filterByArtbctypcashacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypCashAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypcashacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypcashacct($artbctypcashacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPCASHACCT, $artbctypcashacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypFincAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypfincacct('fooValue');   // WHERE ArtbCtypFincAcct = 'fooValue'
     * $query->filterByArtbctypfincacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypFincAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypfincacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypfincacct($artbctypfincacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypfincacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPFINCACCT, $artbctypfincacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypDiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypdiscacct('fooValue');   // WHERE ArtbCtypDiscAcct = 'fooValue'
     * $query->filterByArtbctypdiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypDiscAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypdiscacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypdiscacct($artbctypdiscacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypdiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPDISCACCT, $artbctypdiscacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypSaleAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypsaleacct('fooValue');   // WHERE ArtbCtypSaleAcct = 'fooValue'
     * $query->filterByArtbctypsaleacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypSaleAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypsaleacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypsaleacct($artbctypsaleacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypsaleacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPSALEACCT, $artbctypsaleacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypCogsAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypcogsacct('fooValue');   // WHERE ArtbCtypCogsAcct = 'fooValue'
     * $query->filterByArtbctypcogsacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypCogsAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypcogsacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypcogsacct($artbctypcogsacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypcogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPCOGSACCT, $artbctypcogsacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypCredAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypcredacct('fooValue');   // WHERE ArtbCtypCredAcct = 'fooValue'
     * $query->filterByArtbctypcredacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypCredAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypcredacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypcredacct($artbctypcredacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPCREDACCT, $artbctypcredacct, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypMail column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypmail('fooValue');   // WHERE ArtbCtypMail = 'fooValue'
     * $query->filterByArtbctypmail('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypMail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypmail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypmail($artbctypmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypmail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPMAIL, $artbctypmail, $comparison);
    }

    /**
     * Filter the query on the ArtbCtypAprvNeedEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypaprvneedemail('fooValue');   // WHERE ArtbCtypAprvNeedEmail = 'fooValue'
     * $query->filterByArtbctypaprvneedemail('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypAprvNeedEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctypaprvneedemail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByArtbctypaprvneedemail($artbctypaprvneedemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypaprvneedemail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBCTYPAPRVNEEDEMAIL, $artbctypaprvneedemail, $comparison);
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
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerTypeCode $customerTypeCode Object to remove from the list of results
     *
     * @return $this|ChildCustomerTypeCodeQuery The current query, for fluid interface
     */
    public function prune($customerTypeCode = null)
    {
        if ($customerTypeCode) {
            $this->addUsingAlias(CustomerTypeCodeTableMap::COL_ARTBTYPECODE, $customerTypeCode->getArtbtypecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTypeCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerTypeCodeTableMap::clearInstancePool();
            CustomerTypeCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTypeCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerTypeCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerTypeCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerTypeCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerTypeCodeQuery
