<?php

namespace Base;

use \CstkHead as ChildCstkHead;
use \CstkHeadQuery as ChildCstkHeadQuery;
use \Exception;
use \PDO;
use Map\CstkHeadTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'cust_stock_head' table.
 *
 *
 *
 * @method     ChildCstkHeadQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCstkHeadQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildCstkHeadQuery orderByCskhcell($order = Criteria::ASC) Order by the CskhCell column
 * @method     ChildCstkHeadQuery orderByCskhenterdate($order = Criteria::ASC) Order by the CskhEnterDate column
 * @method     ChildCstkHeadQuery orderByCskhconsign($order = Criteria::ASC) Order by the CskhConsign column
 * @method     ChildCstkHeadQuery orderByCskhreplcnt($order = Criteria::ASC) Order by the CskhReplCnt column
 * @method     ChildCstkHeadQuery orderByCskhlabelformat($order = Criteria::ASC) Order by the CskhLabelFormat column
 * @method     ChildCstkHeadQuery orderByCskhwhse($order = Criteria::ASC) Order by the CskhWhse column
 * @method     ChildCstkHeadQuery orderByCskhapproved($order = Criteria::ASC) Order by the CskhApproved column
 * @method     ChildCstkHeadQuery orderByCskhconsignbinwhse($order = Criteria::ASC) Order by the CskhConsignBinWhse column
 * @method     ChildCstkHeadQuery orderByCskhconsignbincust($order = Criteria::ASC) Order by the CskhConsignBinCust column
 * @method     ChildCstkHeadQuery orderByCskhparkcustname($order = Criteria::ASC) Order by the CskhParkCustName column
 * @method     ChildCstkHeadQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCstkHeadQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCstkHeadQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCstkHeadQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCstkHeadQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildCstkHeadQuery groupByCskhcell() Group by the CskhCell column
 * @method     ChildCstkHeadQuery groupByCskhenterdate() Group by the CskhEnterDate column
 * @method     ChildCstkHeadQuery groupByCskhconsign() Group by the CskhConsign column
 * @method     ChildCstkHeadQuery groupByCskhreplcnt() Group by the CskhReplCnt column
 * @method     ChildCstkHeadQuery groupByCskhlabelformat() Group by the CskhLabelFormat column
 * @method     ChildCstkHeadQuery groupByCskhwhse() Group by the CskhWhse column
 * @method     ChildCstkHeadQuery groupByCskhapproved() Group by the CskhApproved column
 * @method     ChildCstkHeadQuery groupByCskhconsignbinwhse() Group by the CskhConsignBinWhse column
 * @method     ChildCstkHeadQuery groupByCskhconsignbincust() Group by the CskhConsignBinCust column
 * @method     ChildCstkHeadQuery groupByCskhparkcustname() Group by the CskhParkCustName column
 * @method     ChildCstkHeadQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCstkHeadQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCstkHeadQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCstkHeadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCstkHeadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCstkHeadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCstkHeadQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCstkHeadQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCstkHeadQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCstkHeadQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildCstkHeadQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildCstkHeadQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildCstkHeadQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildCstkHeadQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildCstkHeadQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildCstkHeadQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildCstkHeadQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildCstkHeadQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildCstkHeadQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildCstkHeadQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildCstkHeadQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildCstkHeadQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildCstkHeadQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildCstkHeadQuery leftJoinCstkItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the CstkItem relation
 * @method     ChildCstkHeadQuery rightJoinCstkItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CstkItem relation
 * @method     ChildCstkHeadQuery innerJoinCstkItem($relationAlias = null) Adds a INNER JOIN clause to the query using the CstkItem relation
 *
 * @method     ChildCstkHeadQuery joinWithCstkItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CstkItem relation
 *
 * @method     ChildCstkHeadQuery leftJoinWithCstkItem() Adds a LEFT JOIN clause and with to the query using the CstkItem relation
 * @method     ChildCstkHeadQuery rightJoinWithCstkItem() Adds a RIGHT JOIN clause and with to the query using the CstkItem relation
 * @method     ChildCstkHeadQuery innerJoinWithCstkItem() Adds a INNER JOIN clause and with to the query using the CstkItem relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\CstkItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCstkHead findOne(ConnectionInterface $con = null) Return the first ChildCstkHead matching the query
 * @method     ChildCstkHead findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCstkHead matching the query, or a new ChildCstkHead object populated from the query conditions when no match is found
 *
 * @method     ChildCstkHead findOneByArcucustid(string $ArcuCustId) Return the first ChildCstkHead filtered by the ArcuCustId column
 * @method     ChildCstkHead findOneByArstshipid(string $ArstShipId) Return the first ChildCstkHead filtered by the ArstShipId column
 * @method     ChildCstkHead findOneByCskhcell(string $CskhCell) Return the first ChildCstkHead filtered by the CskhCell column
 * @method     ChildCstkHead findOneByCskhenterdate(string $CskhEnterDate) Return the first ChildCstkHead filtered by the CskhEnterDate column
 * @method     ChildCstkHead findOneByCskhconsign(string $CskhConsign) Return the first ChildCstkHead filtered by the CskhConsign column
 * @method     ChildCstkHead findOneByCskhreplcnt(string $CskhReplCnt) Return the first ChildCstkHead filtered by the CskhReplCnt column
 * @method     ChildCstkHead findOneByCskhlabelformat(string $CskhLabelFormat) Return the first ChildCstkHead filtered by the CskhLabelFormat column
 * @method     ChildCstkHead findOneByCskhwhse(string $CskhWhse) Return the first ChildCstkHead filtered by the CskhWhse column
 * @method     ChildCstkHead findOneByCskhapproved(string $CskhApproved) Return the first ChildCstkHead filtered by the CskhApproved column
 * @method     ChildCstkHead findOneByCskhconsignbinwhse(string $CskhConsignBinWhse) Return the first ChildCstkHead filtered by the CskhConsignBinWhse column
 * @method     ChildCstkHead findOneByCskhconsignbincust(string $CskhConsignBinCust) Return the first ChildCstkHead filtered by the CskhConsignBinCust column
 * @method     ChildCstkHead findOneByCskhparkcustname(string $CskhParkCustName) Return the first ChildCstkHead filtered by the CskhParkCustName column
 * @method     ChildCstkHead findOneByDateupdtd(string $DateUpdtd) Return the first ChildCstkHead filtered by the DateUpdtd column
 * @method     ChildCstkHead findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCstkHead filtered by the TimeUpdtd column
 * @method     ChildCstkHead findOneByDummy(string $dummy) Return the first ChildCstkHead filtered by the dummy column *

 * @method     ChildCstkHead requirePk($key, ConnectionInterface $con = null) Return the ChildCstkHead by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOne(ConnectionInterface $con = null) Return the first ChildCstkHead matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCstkHead requireOneByArcucustid(string $ArcuCustId) Return the first ChildCstkHead filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByArstshipid(string $ArstShipId) Return the first ChildCstkHead filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhcell(string $CskhCell) Return the first ChildCstkHead filtered by the CskhCell column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhenterdate(string $CskhEnterDate) Return the first ChildCstkHead filtered by the CskhEnterDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhconsign(string $CskhConsign) Return the first ChildCstkHead filtered by the CskhConsign column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhreplcnt(string $CskhReplCnt) Return the first ChildCstkHead filtered by the CskhReplCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhlabelformat(string $CskhLabelFormat) Return the first ChildCstkHead filtered by the CskhLabelFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhwhse(string $CskhWhse) Return the first ChildCstkHead filtered by the CskhWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhapproved(string $CskhApproved) Return the first ChildCstkHead filtered by the CskhApproved column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhconsignbinwhse(string $CskhConsignBinWhse) Return the first ChildCstkHead filtered by the CskhConsignBinWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhconsignbincust(string $CskhConsignBinCust) Return the first ChildCstkHead filtered by the CskhConsignBinCust column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByCskhparkcustname(string $CskhParkCustName) Return the first ChildCstkHead filtered by the CskhParkCustName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCstkHead filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCstkHead filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkHead requireOneByDummy(string $dummy) Return the first ChildCstkHead filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCstkHead[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCstkHead objects based on current ModelCriteria
 * @method     ChildCstkHead[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCstkHead objects filtered by the ArcuCustId column
 * @method     ChildCstkHead[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildCstkHead objects filtered by the ArstShipId column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhcell(string $CskhCell) Return ChildCstkHead objects filtered by the CskhCell column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhenterdate(string $CskhEnterDate) Return ChildCstkHead objects filtered by the CskhEnterDate column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhconsign(string $CskhConsign) Return ChildCstkHead objects filtered by the CskhConsign column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhreplcnt(string $CskhReplCnt) Return ChildCstkHead objects filtered by the CskhReplCnt column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhlabelformat(string $CskhLabelFormat) Return ChildCstkHead objects filtered by the CskhLabelFormat column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhwhse(string $CskhWhse) Return ChildCstkHead objects filtered by the CskhWhse column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhapproved(string $CskhApproved) Return ChildCstkHead objects filtered by the CskhApproved column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhconsignbinwhse(string $CskhConsignBinWhse) Return ChildCstkHead objects filtered by the CskhConsignBinWhse column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhconsignbincust(string $CskhConsignBinCust) Return ChildCstkHead objects filtered by the CskhConsignBinCust column
 * @method     ChildCstkHead[]|ObjectCollection findByCskhparkcustname(string $CskhParkCustName) Return ChildCstkHead objects filtered by the CskhParkCustName column
 * @method     ChildCstkHead[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCstkHead objects filtered by the DateUpdtd column
 * @method     ChildCstkHead[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCstkHead objects filtered by the TimeUpdtd column
 * @method     ChildCstkHead[]|ObjectCollection findByDummy(string $dummy) Return ChildCstkHead objects filtered by the dummy column
 * @method     ChildCstkHead[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CstkHeadQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CstkHeadQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CstkHead', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCstkHeadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCstkHeadQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCstkHeadQuery) {
            return $criteria;
        }
        $query = new ChildCstkHeadQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$ArcuCustId, $ArstShipId, $CskhCell] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCstkHead|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CstkHeadTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildCstkHead A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, CskhCell, CskhEnterDate, CskhConsign, CskhReplCnt, CskhLabelFormat, CskhWhse, CskhApproved, CskhConsignBinWhse, CskhConsignBinCust, CskhParkCustName, DateUpdtd, TimeUpdtd, dummy FROM cust_stock_head WHERE ArcuCustId = :p0 AND ArstShipId = :p1 AND CskhCell = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCstkHead $obj */
            $obj = new ChildCstkHead();
            $obj->hydrate($row);
            CstkHeadTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildCstkHead|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CstkHeadTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CstkHeadTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CstkHeadTableMap::COL_CSKHCELL, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CstkHeadTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CstkHeadTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CstkHeadTableMap::COL_CSKHCELL, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the CskhCell column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhcell('fooValue');   // WHERE CskhCell = 'fooValue'
     * $query->filterByCskhcell('%fooValue%', Criteria::LIKE); // WHERE CskhCell LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhcell The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhcell($cskhcell = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhcell)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHCELL, $cskhcell, $comparison);
    }

    /**
     * Filter the query on the CskhEnterDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhenterdate('fooValue');   // WHERE CskhEnterDate = 'fooValue'
     * $query->filterByCskhenterdate('%fooValue%', Criteria::LIKE); // WHERE CskhEnterDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhenterdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhenterdate($cskhenterdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhenterdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHENTERDATE, $cskhenterdate, $comparison);
    }

    /**
     * Filter the query on the CskhConsign column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhconsign('fooValue');   // WHERE CskhConsign = 'fooValue'
     * $query->filterByCskhconsign('%fooValue%', Criteria::LIKE); // WHERE CskhConsign LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhconsign The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhconsign($cskhconsign = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhconsign)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHCONSIGN, $cskhconsign, $comparison);
    }

    /**
     * Filter the query on the CskhReplCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhreplcnt('fooValue');   // WHERE CskhReplCnt = 'fooValue'
     * $query->filterByCskhreplcnt('%fooValue%', Criteria::LIKE); // WHERE CskhReplCnt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhreplcnt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhreplcnt($cskhreplcnt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhreplcnt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHREPLCNT, $cskhreplcnt, $comparison);
    }

    /**
     * Filter the query on the CskhLabelFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhlabelformat('fooValue');   // WHERE CskhLabelFormat = 'fooValue'
     * $query->filterByCskhlabelformat('%fooValue%', Criteria::LIKE); // WHERE CskhLabelFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhlabelformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhlabelformat($cskhlabelformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhlabelformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHLABELFORMAT, $cskhlabelformat, $comparison);
    }

    /**
     * Filter the query on the CskhWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhwhse('fooValue');   // WHERE CskhWhse = 'fooValue'
     * $query->filterByCskhwhse('%fooValue%', Criteria::LIKE); // WHERE CskhWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhwhse($cskhwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHWHSE, $cskhwhse, $comparison);
    }

    /**
     * Filter the query on the CskhApproved column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhapproved('fooValue');   // WHERE CskhApproved = 'fooValue'
     * $query->filterByCskhapproved('%fooValue%', Criteria::LIKE); // WHERE CskhApproved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhapproved The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhapproved($cskhapproved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhapproved)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHAPPROVED, $cskhapproved, $comparison);
    }

    /**
     * Filter the query on the CskhConsignBinWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhconsignbinwhse('fooValue');   // WHERE CskhConsignBinWhse = 'fooValue'
     * $query->filterByCskhconsignbinwhse('%fooValue%', Criteria::LIKE); // WHERE CskhConsignBinWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhconsignbinwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhconsignbinwhse($cskhconsignbinwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhconsignbinwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHCONSIGNBINWHSE, $cskhconsignbinwhse, $comparison);
    }

    /**
     * Filter the query on the CskhConsignBinCust column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhconsignbincust('fooValue');   // WHERE CskhConsignBinCust = 'fooValue'
     * $query->filterByCskhconsignbincust('%fooValue%', Criteria::LIKE); // WHERE CskhConsignBinCust LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhconsignbincust The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhconsignbincust($cskhconsignbincust = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhconsignbincust)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHCONSIGNBINCUST, $cskhconsignbincust, $comparison);
    }

    /**
     * Filter the query on the CskhParkCustName column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhparkcustname('fooValue');   // WHERE CskhParkCustName = 'fooValue'
     * $query->filterByCskhparkcustname('%fooValue%', Criteria::LIKE); // WHERE CskhParkCustName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhparkcustname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCskhparkcustname($cskhparkcustname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhparkcustname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_CSKHPARKCUSTNAME, $cskhparkcustname, $comparison);
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
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkHeadTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(CstkHeadTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CstkHeadTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
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
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(CstkHeadTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(CstkHeadTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

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
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Filter the query by a related \CstkItem object
     *
     * @param \CstkItem|ObjectCollection $cstkItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCstkHeadQuery The current query, for fluid interface
     */
    public function filterByCstkItem($cstkItem, $comparison = null)
    {
        if ($cstkItem instanceof \CstkItem) {
            return $this
                ->addUsingAlias(CstkHeadTableMap::COL_ARCUCUSTID, $cstkItem->getArcucustid(), $comparison)
                ->addUsingAlias(CstkHeadTableMap::COL_ARSTSHIPID, $cstkItem->getArstshipid(), $comparison)
                ->addUsingAlias(CstkHeadTableMap::COL_CSKHCELL, $cstkItem->getCskhcell(), $comparison);
        } else {
            throw new PropelException('filterByCstkItem() only accepts arguments of type \CstkItem');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CstkItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function joinCstkItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CstkItem');

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
            $this->addJoinObject($join, 'CstkItem');
        }

        return $this;
    }

    /**
     * Use the CstkItem relation CstkItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CstkItemQuery A secondary query class using the current class as primary query
     */
    public function useCstkItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCstkItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CstkItem', '\CstkItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCstkHead $cstkHead Object to remove from the list of results
     *
     * @return $this|ChildCstkHeadQuery The current query, for fluid interface
     */
    public function prune($cstkHead = null)
    {
        if ($cstkHead) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CstkHeadTableMap::COL_ARCUCUSTID), $cstkHead->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CstkHeadTableMap::COL_ARSTSHIPID), $cstkHead->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CstkHeadTableMap::COL_CSKHCELL), $cstkHead->getCskhcell(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the cust_stock_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CstkHeadTableMap::clearInstancePool();
            CstkHeadTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CstkHeadTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CstkHeadTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CstkHeadTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CstkHeadTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CstkHeadQuery
