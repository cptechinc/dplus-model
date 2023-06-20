<?php

namespace Base;

use \NoteCustOrder as ChildNoteCustOrder;
use \NoteCustOrderQuery as ChildNoteCustOrderQuery;
use \Exception;
use \PDO;
use Map\NoteCustOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_cust_ship_order' table.
 *
 *
 *
 * @method     ChildNoteCustOrderQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildNoteCustOrderQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildNoteCustOrderQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildNoteCustOrderQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildNoteCustOrderQuery orderByQncustpickticket($order = Criteria::ASC) Order by the QnCustPickTicket column
 * @method     ChildNoteCustOrderQuery orderByQncustpackticket($order = Criteria::ASC) Order by the QnCustPackTicket column
 * @method     ChildNoteCustOrderQuery orderByQncustinvoice($order = Criteria::ASC) Order by the QnCustInvoice column
 * @method     ChildNoteCustOrderQuery orderByQncustacknow($order = Criteria::ASC) Order by the QnCustAcknow column
 * @method     ChildNoteCustOrderQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildNoteCustOrderQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildNoteCustOrderQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildNoteCustOrderQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildNoteCustOrderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildNoteCustOrderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildNoteCustOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildNoteCustOrderQuery groupByQntype() Group by the QnType column
 * @method     ChildNoteCustOrderQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildNoteCustOrderQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildNoteCustOrderQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildNoteCustOrderQuery groupByQncustpickticket() Group by the QnCustPickTicket column
 * @method     ChildNoteCustOrderQuery groupByQncustpackticket() Group by the QnCustPackTicket column
 * @method     ChildNoteCustOrderQuery groupByQncustinvoice() Group by the QnCustInvoice column
 * @method     ChildNoteCustOrderQuery groupByQncustacknow() Group by the QnCustAcknow column
 * @method     ChildNoteCustOrderQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildNoteCustOrderQuery groupByQnnote() Group by the QnNote column
 * @method     ChildNoteCustOrderQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildNoteCustOrderQuery groupByQnform() Group by the QnForm column
 * @method     ChildNoteCustOrderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildNoteCustOrderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildNoteCustOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildNoteCustOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildNoteCustOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildNoteCustOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildNoteCustOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildNoteCustOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildNoteCustOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildNoteCustOrderQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildNoteCustOrderQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildNoteCustOrderQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildNoteCustOrderQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildNoteCustOrderQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildNoteCustOrderQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildNoteCustOrderQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildNoteCustOrderQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildNoteCustOrderQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildNoteCustOrderQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildNoteCustOrderQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildNoteCustOrderQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildNoteCustOrderQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildNoteCustOrderQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildNoteCustOrder findOne(ConnectionInterface $con = null) Return the first ChildNoteCustOrder matching the query
 * @method     ChildNoteCustOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildNoteCustOrder matching the query, or a new ChildNoteCustOrder object populated from the query conditions when no match is found
 *
 * @method     ChildNoteCustOrder findOneByQntype(string $QnType) Return the first ChildNoteCustOrder filtered by the QnType column
 * @method     ChildNoteCustOrder findOneByQntypedesc(string $QnTypeDesc) Return the first ChildNoteCustOrder filtered by the QnTypeDesc column
 * @method     ChildNoteCustOrder findOneByArcucustid(string $ArcuCustId) Return the first ChildNoteCustOrder filtered by the ArcuCustId column
 * @method     ChildNoteCustOrder findOneByArstshipid(string $ArstShipId) Return the first ChildNoteCustOrder filtered by the ArstShipId column
 * @method     ChildNoteCustOrder findOneByQncustpickticket(string $QnCustPickTicket) Return the first ChildNoteCustOrder filtered by the QnCustPickTicket column
 * @method     ChildNoteCustOrder findOneByQncustpackticket(string $QnCustPackTicket) Return the first ChildNoteCustOrder filtered by the QnCustPackTicket column
 * @method     ChildNoteCustOrder findOneByQncustinvoice(string $QnCustInvoice) Return the first ChildNoteCustOrder filtered by the QnCustInvoice column
 * @method     ChildNoteCustOrder findOneByQncustacknow(string $QnCustAcknow) Return the first ChildNoteCustOrder filtered by the QnCustAcknow column
 * @method     ChildNoteCustOrder findOneByQnseq(int $QnSeq) Return the first ChildNoteCustOrder filtered by the QnSeq column
 * @method     ChildNoteCustOrder findOneByQnnote(string $QnNote) Return the first ChildNoteCustOrder filtered by the QnNote column
 * @method     ChildNoteCustOrder findOneByQnkey2(string $QnKey2) Return the first ChildNoteCustOrder filtered by the QnKey2 column
 * @method     ChildNoteCustOrder findOneByQnform(string $QnForm) Return the first ChildNoteCustOrder filtered by the QnForm column
 * @method     ChildNoteCustOrder findOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteCustOrder filtered by the DateUpdtd column
 * @method     ChildNoteCustOrder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteCustOrder filtered by the TimeUpdtd column
 * @method     ChildNoteCustOrder findOneByDummy(string $dummy) Return the first ChildNoteCustOrder filtered by the dummy column *

 * @method     ChildNoteCustOrder requirePk($key, ConnectionInterface $con = null) Return the ChildNoteCustOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOne(ConnectionInterface $con = null) Return the first ChildNoteCustOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteCustOrder requireOneByQntype(string $QnType) Return the first ChildNoteCustOrder filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildNoteCustOrder filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByArcucustid(string $ArcuCustId) Return the first ChildNoteCustOrder filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByArstshipid(string $ArstShipId) Return the first ChildNoteCustOrder filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQncustpickticket(string $QnCustPickTicket) Return the first ChildNoteCustOrder filtered by the QnCustPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQncustpackticket(string $QnCustPackTicket) Return the first ChildNoteCustOrder filtered by the QnCustPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQncustinvoice(string $QnCustInvoice) Return the first ChildNoteCustOrder filtered by the QnCustInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQncustacknow(string $QnCustAcknow) Return the first ChildNoteCustOrder filtered by the QnCustAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQnseq(int $QnSeq) Return the first ChildNoteCustOrder filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQnnote(string $QnNote) Return the first ChildNoteCustOrder filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQnkey2(string $QnKey2) Return the first ChildNoteCustOrder filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByQnform(string $QnForm) Return the first ChildNoteCustOrder filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteCustOrder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteCustOrder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOneByDummy(string $dummy) Return the first ChildNoteCustOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteCustOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildNoteCustOrder objects based on current ModelCriteria
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQntype(string $QnType) Return ChildNoteCustOrder objects filtered by the QnType column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildNoteCustOrder objects filtered by the QnTypeDesc column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildNoteCustOrder objects filtered by the ArcuCustId column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildNoteCustOrder objects filtered by the ArstShipId column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQncustpickticket(string $QnCustPickTicket) Return ChildNoteCustOrder objects filtered by the QnCustPickTicket column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQncustpackticket(string $QnCustPackTicket) Return ChildNoteCustOrder objects filtered by the QnCustPackTicket column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQncustinvoice(string $QnCustInvoice) Return ChildNoteCustOrder objects filtered by the QnCustInvoice column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQncustacknow(string $QnCustAcknow) Return ChildNoteCustOrder objects filtered by the QnCustAcknow column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildNoteCustOrder objects filtered by the QnSeq column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQnnote(string $QnNote) Return ChildNoteCustOrder objects filtered by the QnNote column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildNoteCustOrder objects filtered by the QnKey2 column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByQnform(string $QnForm) Return ChildNoteCustOrder objects filtered by the QnForm column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildNoteCustOrder objects filtered by the DateUpdtd column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildNoteCustOrder objects filtered by the TimeUpdtd column
 * @method     ChildNoteCustOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildNoteCustOrder objects filtered by the dummy column
 * @method     ChildNoteCustOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class NoteCustOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\NoteCustOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\NoteCustOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildNoteCustOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildNoteCustOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildNoteCustOrderQuery) {
            return $criteria;
        }
        $query = new ChildNoteCustOrderQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$QnType, $QnSeq, $QnKey2, $QnForm] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildNoteCustOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(NoteCustOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = NoteCustOrderTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildNoteCustOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, ArcuCustId, ArstShipId, QnCustPickTicket, QnCustPackTicket, QnCustInvoice, QnCustAcknow, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_cust_ship_order WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildNoteCustOrder $obj */
            $obj = new ChildNoteCustOrder();
            $obj->hydrate($row);
            NoteCustOrderTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildNoteCustOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(NoteCustOrderTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(NoteCustOrderTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(NoteCustOrderTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(NoteCustOrderTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the QnType column
     *
     * Example usage:
     * <code>
     * $query->filterByQntype('fooValue');   // WHERE QnType = 'fooValue'
     * $query->filterByQntype('%fooValue%', Criteria::LIKE); // WHERE QnType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qntype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNTYPE, $qntype, $comparison);
    }

    /**
     * Filter the query on the QnTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQntypedesc('fooValue');   // WHERE QnTypeDesc = 'fooValue'
     * $query->filterByQntypedesc('%fooValue%', Criteria::LIKE); // WHERE QnTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qntypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the QnCustPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustpickticket('fooValue');   // WHERE QnCustPickTicket = 'fooValue'
     * $query->filterByQncustpickticket('%fooValue%', Criteria::LIKE); // WHERE QnCustPickTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qncustpickticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQncustpickticket($qncustpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTPICKTICKET, $qncustpickticket, $comparison);
    }

    /**
     * Filter the query on the QnCustPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustpackticket('fooValue');   // WHERE QnCustPackTicket = 'fooValue'
     * $query->filterByQncustpackticket('%fooValue%', Criteria::LIKE); // WHERE QnCustPackTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qncustpackticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQncustpackticket($qncustpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTPACKTICKET, $qncustpackticket, $comparison);
    }

    /**
     * Filter the query on the QnCustInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustinvoice('fooValue');   // WHERE QnCustInvoice = 'fooValue'
     * $query->filterByQncustinvoice('%fooValue%', Criteria::LIKE); // WHERE QnCustInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qncustinvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQncustinvoice($qncustinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTINVOICE, $qncustinvoice, $comparison);
    }

    /**
     * Filter the query on the QnCustAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustacknow('fooValue');   // WHERE QnCustAcknow = 'fooValue'
     * $query->filterByQncustacknow('%fooValue%', Criteria::LIKE); // WHERE QnCustAcknow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qncustacknow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQncustacknow($qncustacknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustacknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTACKNOW, $qncustacknow, $comparison);
    }

    /**
     * Filter the query on the QnSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByQnseq(1234); // WHERE QnSeq = 1234
     * $query->filterByQnseq(array(12, 34)); // WHERE QnSeq IN (12, 34)
     * $query->filterByQnseq(array('min' => 12)); // WHERE QnSeq > 12
     * </code>
     *
     * @param     mixed $qnseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(NoteCustOrderTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(NoteCustOrderTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNSEQ, $qnseq, $comparison);
    }

    /**
     * Filter the query on the QnNote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnnote('fooValue');   // WHERE QnNote = 'fooValue'
     * $query->filterByQnnote('%fooValue%', Criteria::LIKE); // WHERE QnNote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnnote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNNOTE, $qnnote, $comparison);
    }

    /**
     * Filter the query on the QnKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQnkey2('fooValue');   // WHERE QnKey2 = 'fooValue'
     * $query->filterByQnkey2('%fooValue%', Criteria::LIKE); // WHERE QnKey2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnkey2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNKEY2, $qnkey2, $comparison);
    }

    /**
     * Filter the query on the QnForm column
     *
     * Example usage:
     * <code>
     * $query->filterByQnform('fooValue');   // WHERE QnForm = 'fooValue'
     * $query->filterByQnform('%fooValue%', Criteria::LIKE); // WHERE QnForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteCustOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(NoteCustOrderTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
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
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildNoteCustOrder $noteCustOrder Object to remove from the list of results
     *
     * @return $this|ChildNoteCustOrderQuery The current query, for fluid interface
     */
    public function prune($noteCustOrder = null)
    {
        if ($noteCustOrder) {
            $this->addCond('pruneCond0', $this->getAliasedColName(NoteCustOrderTableMap::COL_QNTYPE), $noteCustOrder->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(NoteCustOrderTableMap::COL_QNSEQ), $noteCustOrder->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(NoteCustOrderTableMap::COL_QNKEY2), $noteCustOrder->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(NoteCustOrderTableMap::COL_QNFORM), $noteCustOrder->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_cust_ship_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NoteCustOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NoteCustOrderTableMap::clearInstancePool();
            NoteCustOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(NoteCustOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(NoteCustOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            NoteCustOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            NoteCustOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // NoteCustOrderQuery
