<?php

namespace Base;

use \ArCashHead as ChildArCashHead;
use \ArCashHeadQuery as ChildArCashHeadQuery;
use \Exception;
use \PDO;
use Map\ArCashHeadTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cash_head' table.
 *
 *
 *
 * @method     ChildArCashHeadQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArCashHeadQuery orderByArchamtrec($order = Criteria::ASC) Order by the ArchAmtRec column
 * @method     ChildArCashHeadQuery orderByArchclerkid($order = Criteria::ASC) Order by the ArchClerkId column
 * @method     ChildArCashHeadQuery orderByArchpostflag($order = Criteria::ASC) Order by the ArchPostFlag column
 * @method     ChildArCashHeadQuery orderByArchorigwhse($order = Criteria::ASC) Order by the ArchOrigWhse column
 * @method     ChildArCashHeadQuery orderByArchccnbr($order = Criteria::ASC) Order by the ArchCcNbr column
 * @method     ChildArCashHeadQuery orderByArchccexpdate($order = Criteria::ASC) Order by the ArchCcExpDate column
 * @method     ChildArCashHeadQuery orderByArchccvalidcode($order = Criteria::ASC) Order by the ArchCcValidCode column
 * @method     ChildArCashHeadQuery orderByArchccaprv($order = Criteria::ASC) Order by the ArchCcAprv column
 * @method     ChildArCashHeadQuery orderByArchccinfo($order = Criteria::ASC) Order by the ArchCcInfo column
 * @method     ChildArCashHeadQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCashHeadQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCashHeadQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCashHeadQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArCashHeadQuery groupByArchamtrec() Group by the ArchAmtRec column
 * @method     ChildArCashHeadQuery groupByArchclerkid() Group by the ArchClerkId column
 * @method     ChildArCashHeadQuery groupByArchpostflag() Group by the ArchPostFlag column
 * @method     ChildArCashHeadQuery groupByArchorigwhse() Group by the ArchOrigWhse column
 * @method     ChildArCashHeadQuery groupByArchccnbr() Group by the ArchCcNbr column
 * @method     ChildArCashHeadQuery groupByArchccexpdate() Group by the ArchCcExpDate column
 * @method     ChildArCashHeadQuery groupByArchccvalidcode() Group by the ArchCcValidCode column
 * @method     ChildArCashHeadQuery groupByArchccaprv() Group by the ArchCcAprv column
 * @method     ChildArCashHeadQuery groupByArchccinfo() Group by the ArchCcInfo column
 * @method     ChildArCashHeadQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCashHeadQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCashHeadQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCashHeadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCashHeadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCashHeadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCashHeadQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCashHeadQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCashHeadQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCashHeadQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildArCashHeadQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildArCashHeadQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildArCashHeadQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildArCashHeadQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCashHeadQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildArCashHeadQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildArCashHeadQuery leftJoinArPaymentPending($relationAlias = null) Adds a LEFT JOIN clause to the query using the ArPaymentPending relation
 * @method     ChildArCashHeadQuery rightJoinArPaymentPending($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ArPaymentPending relation
 * @method     ChildArCashHeadQuery innerJoinArPaymentPending($relationAlias = null) Adds a INNER JOIN clause to the query using the ArPaymentPending relation
 *
 * @method     ChildArCashHeadQuery joinWithArPaymentPending($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ArPaymentPending relation
 *
 * @method     ChildArCashHeadQuery leftJoinWithArPaymentPending() Adds a LEFT JOIN clause and with to the query using the ArPaymentPending relation
 * @method     ChildArCashHeadQuery rightJoinWithArPaymentPending() Adds a RIGHT JOIN clause and with to the query using the ArPaymentPending relation
 * @method     ChildArCashHeadQuery innerJoinWithArPaymentPending() Adds a INNER JOIN clause and with to the query using the ArPaymentPending relation
 *
 * @method     \CustomerQuery|\ArPaymentPendingQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildArCashHead findOne(ConnectionInterface $con = null) Return the first ChildArCashHead matching the query
 * @method     ChildArCashHead findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArCashHead matching the query, or a new ChildArCashHead object populated from the query conditions when no match is found
 *
 * @method     ChildArCashHead findOneByArcucustid(string $ArcuCustId) Return the first ChildArCashHead filtered by the ArcuCustId column
 * @method     ChildArCashHead findOneByArchamtrec(string $ArchAmtRec) Return the first ChildArCashHead filtered by the ArchAmtRec column
 * @method     ChildArCashHead findOneByArchclerkid(string $ArchClerkId) Return the first ChildArCashHead filtered by the ArchClerkId column
 * @method     ChildArCashHead findOneByArchpostflag(string $ArchPostFlag) Return the first ChildArCashHead filtered by the ArchPostFlag column
 * @method     ChildArCashHead findOneByArchorigwhse(string $ArchOrigWhse) Return the first ChildArCashHead filtered by the ArchOrigWhse column
 * @method     ChildArCashHead findOneByArchccnbr(string $ArchCcNbr) Return the first ChildArCashHead filtered by the ArchCcNbr column
 * @method     ChildArCashHead findOneByArchccexpdate(string $ArchCcExpDate) Return the first ChildArCashHead filtered by the ArchCcExpDate column
 * @method     ChildArCashHead findOneByArchccvalidcode(string $ArchCcValidCode) Return the first ChildArCashHead filtered by the ArchCcValidCode column
 * @method     ChildArCashHead findOneByArchccaprv(string $ArchCcAprv) Return the first ChildArCashHead filtered by the ArchCcAprv column
 * @method     ChildArCashHead findOneByArchccinfo(string $ArchCcInfo) Return the first ChildArCashHead filtered by the ArchCcInfo column
 * @method     ChildArCashHead findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCashHead filtered by the DateUpdtd column
 * @method     ChildArCashHead findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCashHead filtered by the TimeUpdtd column
 * @method     ChildArCashHead findOneByDummy(string $dummy) Return the first ChildArCashHead filtered by the dummy column *

 * @method     ChildArCashHead requirePk($key, ConnectionInterface $con = null) Return the ChildArCashHead by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOne(ConnectionInterface $con = null) Return the first ChildArCashHead matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCashHead requireOneByArcucustid(string $ArcuCustId) Return the first ChildArCashHead filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchamtrec(string $ArchAmtRec) Return the first ChildArCashHead filtered by the ArchAmtRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchclerkid(string $ArchClerkId) Return the first ChildArCashHead filtered by the ArchClerkId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchpostflag(string $ArchPostFlag) Return the first ChildArCashHead filtered by the ArchPostFlag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchorigwhse(string $ArchOrigWhse) Return the first ChildArCashHead filtered by the ArchOrigWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchccnbr(string $ArchCcNbr) Return the first ChildArCashHead filtered by the ArchCcNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchccexpdate(string $ArchCcExpDate) Return the first ChildArCashHead filtered by the ArchCcExpDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchccvalidcode(string $ArchCcValidCode) Return the first ChildArCashHead filtered by the ArchCcValidCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchccaprv(string $ArchCcAprv) Return the first ChildArCashHead filtered by the ArchCcAprv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByArchccinfo(string $ArchCcInfo) Return the first ChildArCashHead filtered by the ArchCcInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCashHead filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCashHead filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCashHead requireOneByDummy(string $dummy) Return the first ChildArCashHead filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCashHead[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArCashHead objects based on current ModelCriteria
 * @method     ChildArCashHead[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildArCashHead objects filtered by the ArcuCustId column
 * @method     ChildArCashHead[]|ObjectCollection findByArchamtrec(string $ArchAmtRec) Return ChildArCashHead objects filtered by the ArchAmtRec column
 * @method     ChildArCashHead[]|ObjectCollection findByArchclerkid(string $ArchClerkId) Return ChildArCashHead objects filtered by the ArchClerkId column
 * @method     ChildArCashHead[]|ObjectCollection findByArchpostflag(string $ArchPostFlag) Return ChildArCashHead objects filtered by the ArchPostFlag column
 * @method     ChildArCashHead[]|ObjectCollection findByArchorigwhse(string $ArchOrigWhse) Return ChildArCashHead objects filtered by the ArchOrigWhse column
 * @method     ChildArCashHead[]|ObjectCollection findByArchccnbr(string $ArchCcNbr) Return ChildArCashHead objects filtered by the ArchCcNbr column
 * @method     ChildArCashHead[]|ObjectCollection findByArchccexpdate(string $ArchCcExpDate) Return ChildArCashHead objects filtered by the ArchCcExpDate column
 * @method     ChildArCashHead[]|ObjectCollection findByArchccvalidcode(string $ArchCcValidCode) Return ChildArCashHead objects filtered by the ArchCcValidCode column
 * @method     ChildArCashHead[]|ObjectCollection findByArchccaprv(string $ArchCcAprv) Return ChildArCashHead objects filtered by the ArchCcAprv column
 * @method     ChildArCashHead[]|ObjectCollection findByArchccinfo(string $ArchCcInfo) Return ChildArCashHead objects filtered by the ArchCcInfo column
 * @method     ChildArCashHead[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArCashHead objects filtered by the DateUpdtd column
 * @method     ChildArCashHead[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArCashHead objects filtered by the TimeUpdtd column
 * @method     ChildArCashHead[]|ObjectCollection findByDummy(string $dummy) Return ChildArCashHead objects filtered by the dummy column
 * @method     ChildArCashHead[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArCashHeadQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCashHeadQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCashHead', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCashHeadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCashHeadQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArCashHeadQuery) {
            return $criteria;
        }
        $query = new ChildArCashHeadQuery();
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
     * @return ChildArCashHead|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCashHeadTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArCashHead A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArchAmtRec, ArchClerkId, ArchPostFlag, ArchOrigWhse, ArchCcNbr, ArchCcExpDate, ArchCcValidCode, ArchCcAprv, ArchCcInfo, DateUpdtd, TimeUpdtd, dummy FROM ar_cash_head WHERE ArcuCustId = :p0';
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
            /** @var ChildArCashHead $obj */
            $obj = new ChildArCashHead();
            $obj->hydrate($row);
            ArCashHeadTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArCashHead|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArchAmtRec column
     *
     * Example usage:
     * <code>
     * $query->filterByArchamtrec(1234); // WHERE ArchAmtRec = 1234
     * $query->filterByArchamtrec(array(12, 34)); // WHERE ArchAmtRec IN (12, 34)
     * $query->filterByArchamtrec(array('min' => 12)); // WHERE ArchAmtRec > 12
     * </code>
     *
     * @param     mixed $archamtrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchamtrec($archamtrec = null, $comparison = null)
    {
        if (is_array($archamtrec)) {
            $useMinMax = false;
            if (isset($archamtrec['min'])) {
                $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHAMTREC, $archamtrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archamtrec['max'])) {
                $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHAMTREC, $archamtrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHAMTREC, $archamtrec, $comparison);
    }

    /**
     * Filter the query on the ArchClerkId column
     *
     * Example usage:
     * <code>
     * $query->filterByArchclerkid('fooValue');   // WHERE ArchClerkId = 'fooValue'
     * $query->filterByArchclerkid('%fooValue%', Criteria::LIKE); // WHERE ArchClerkId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archclerkid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchclerkid($archclerkid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archclerkid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHCLERKID, $archclerkid, $comparison);
    }

    /**
     * Filter the query on the ArchPostFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByArchpostflag('fooValue');   // WHERE ArchPostFlag = 'fooValue'
     * $query->filterByArchpostflag('%fooValue%', Criteria::LIKE); // WHERE ArchPostFlag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archpostflag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchpostflag($archpostflag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archpostflag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHPOSTFLAG, $archpostflag, $comparison);
    }

    /**
     * Filter the query on the ArchOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArchorigwhse('fooValue');   // WHERE ArchOrigWhse = 'fooValue'
     * $query->filterByArchorigwhse('%fooValue%', Criteria::LIKE); // WHERE ArchOrigWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archorigwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchorigwhse($archorigwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHORIGWHSE, $archorigwhse, $comparison);
    }

    /**
     * Filter the query on the ArchCcNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArchccnbr('fooValue');   // WHERE ArchCcNbr = 'fooValue'
     * $query->filterByArchccnbr('%fooValue%', Criteria::LIKE); // WHERE ArchCcNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archccnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchccnbr($archccnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archccnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHCCNBR, $archccnbr, $comparison);
    }

    /**
     * Filter the query on the ArchCcExpDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArchccexpdate('fooValue');   // WHERE ArchCcExpDate = 'fooValue'
     * $query->filterByArchccexpdate('%fooValue%', Criteria::LIKE); // WHERE ArchCcExpDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archccexpdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchccexpdate($archccexpdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archccexpdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHCCEXPDATE, $archccexpdate, $comparison);
    }

    /**
     * Filter the query on the ArchCcValidCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArchccvalidcode('fooValue');   // WHERE ArchCcValidCode = 'fooValue'
     * $query->filterByArchccvalidcode('%fooValue%', Criteria::LIKE); // WHERE ArchCcValidCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archccvalidcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchccvalidcode($archccvalidcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archccvalidcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHCCVALIDCODE, $archccvalidcode, $comparison);
    }

    /**
     * Filter the query on the ArchCcAprv column
     *
     * Example usage:
     * <code>
     * $query->filterByArchccaprv('fooValue');   // WHERE ArchCcAprv = 'fooValue'
     * $query->filterByArchccaprv('%fooValue%', Criteria::LIKE); // WHERE ArchCcAprv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archccaprv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchccaprv($archccaprv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archccaprv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHCCAPRV, $archccaprv, $comparison);
    }

    /**
     * Filter the query on the ArchCcInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByArchccinfo('fooValue');   // WHERE ArchCcInfo = 'fooValue'
     * $query->filterByArchccinfo('%fooValue%', Criteria::LIKE); // WHERE ArchCcInfo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $archccinfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArchccinfo($archccinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($archccinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_ARCHCCINFO, $archccinfo, $comparison);
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
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArCashHeadTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Filter the query by a related \ArPaymentPending object
     *
     * @param \ArPaymentPending|ObjectCollection $arPaymentPending the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildArCashHeadQuery The current query, for fluid interface
     */
    public function filterByArPaymentPending($arPaymentPending, $comparison = null)
    {
        if ($arPaymentPending instanceof \ArPaymentPending) {
            return $this
                ->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $arPaymentPending->getArcucustid(), $comparison);
        } elseif ($arPaymentPending instanceof ObjectCollection) {
            return $this
                ->useArPaymentPendingQuery()
                ->filterByPrimaryKeys($arPaymentPending->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByArPaymentPending() only accepts arguments of type \ArPaymentPending or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ArPaymentPending relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function joinArPaymentPending($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ArPaymentPending');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ArPaymentPending');
        }

        return $this;
    }

    /**
     * Use the ArPaymentPending relation ArPaymentPending object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ArPaymentPendingQuery A secondary query class using the current class as primary query
     */
    public function useArPaymentPendingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArPaymentPending($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ArPaymentPending', '\ArPaymentPendingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArCashHead $arCashHead Object to remove from the list of results
     *
     * @return $this|ChildArCashHeadQuery The current query, for fluid interface
     */
    public function prune($arCashHead = null)
    {
        if ($arCashHead) {
            $this->addUsingAlias(ArCashHeadTableMap::COL_ARCUCUSTID, $arCashHead->getArcucustid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cash_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCashHeadTableMap::clearInstancePool();
            ArCashHeadTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCashHeadTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCashHeadTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCashHeadTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCashHeadTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArCashHeadQuery
