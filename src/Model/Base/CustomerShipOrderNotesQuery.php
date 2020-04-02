<?php

namespace Base;

use \CustomerShipOrderNotes as ChildCustomerShipOrderNotes;
use \CustomerShipOrderNotesQuery as ChildCustomerShipOrderNotesQuery;
use \Exception;
use \PDO;
use Map\CustomerShipOrderNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_cust_ship_order' table.
 *
 *
 *
 * @method     ChildCustomerShipOrderNotesQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildCustomerShipOrderNotesQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildCustomerShipOrderNotesQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCustomerShipOrderNotesQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildCustomerShipOrderNotesQuery orderByQncustpickticket($order = Criteria::ASC) Order by the QnCustPickTicket column
 * @method     ChildCustomerShipOrderNotesQuery orderByQncustpackticket($order = Criteria::ASC) Order by the QnCustPackTicket column
 * @method     ChildCustomerShipOrderNotesQuery orderByQncustinvoice($order = Criteria::ASC) Order by the QnCustInvoice column
 * @method     ChildCustomerShipOrderNotesQuery orderByQncustacknow($order = Criteria::ASC) Order by the QnCustAcknow column
 * @method     ChildCustomerShipOrderNotesQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildCustomerShipOrderNotesQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildCustomerShipOrderNotesQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildCustomerShipOrderNotesQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildCustomerShipOrderNotesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerShipOrderNotesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerShipOrderNotesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerShipOrderNotesQuery groupByQntype() Group by the QnType column
 * @method     ChildCustomerShipOrderNotesQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildCustomerShipOrderNotesQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCustomerShipOrderNotesQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildCustomerShipOrderNotesQuery groupByQncustpickticket() Group by the QnCustPickTicket column
 * @method     ChildCustomerShipOrderNotesQuery groupByQncustpackticket() Group by the QnCustPackTicket column
 * @method     ChildCustomerShipOrderNotesQuery groupByQncustinvoice() Group by the QnCustInvoice column
 * @method     ChildCustomerShipOrderNotesQuery groupByQncustacknow() Group by the QnCustAcknow column
 * @method     ChildCustomerShipOrderNotesQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildCustomerShipOrderNotesQuery groupByQnnote() Group by the QnNote column
 * @method     ChildCustomerShipOrderNotesQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildCustomerShipOrderNotesQuery groupByQnform() Group by the QnForm column
 * @method     ChildCustomerShipOrderNotesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerShipOrderNotesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerShipOrderNotesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerShipOrderNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerShipOrderNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerShipOrderNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerShipOrderNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerShipOrderNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerShipOrderNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerShipOrderNotes findOne(ConnectionInterface $con = null) Return the first ChildCustomerShipOrderNotes matching the query
 * @method     ChildCustomerShipOrderNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerShipOrderNotes matching the query, or a new ChildCustomerShipOrderNotes object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerShipOrderNotes findOneByQntype(string $QnType) Return the first ChildCustomerShipOrderNotes filtered by the QnType column
 * @method     ChildCustomerShipOrderNotes findOneByQntypedesc(string $QnTypeDesc) Return the first ChildCustomerShipOrderNotes filtered by the QnTypeDesc column
 * @method     ChildCustomerShipOrderNotes findOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerShipOrderNotes filtered by the ArcuCustId column
 * @method     ChildCustomerShipOrderNotes findOneByArstshipid(string $ArstShipId) Return the first ChildCustomerShipOrderNotes filtered by the ArstShipId column
 * @method     ChildCustomerShipOrderNotes findOneByQncustpickticket(string $QnCustPickTicket) Return the first ChildCustomerShipOrderNotes filtered by the QnCustPickTicket column
 * @method     ChildCustomerShipOrderNotes findOneByQncustpackticket(string $QnCustPackTicket) Return the first ChildCustomerShipOrderNotes filtered by the QnCustPackTicket column
 * @method     ChildCustomerShipOrderNotes findOneByQncustinvoice(string $QnCustInvoice) Return the first ChildCustomerShipOrderNotes filtered by the QnCustInvoice column
 * @method     ChildCustomerShipOrderNotes findOneByQncustacknow(string $QnCustAcknow) Return the first ChildCustomerShipOrderNotes filtered by the QnCustAcknow column
 * @method     ChildCustomerShipOrderNotes findOneByQnseq(int $QnSeq) Return the first ChildCustomerShipOrderNotes filtered by the QnSeq column
 * @method     ChildCustomerShipOrderNotes findOneByQnnote(string $QnNote) Return the first ChildCustomerShipOrderNotes filtered by the QnNote column
 * @method     ChildCustomerShipOrderNotes findOneByQnkey2(string $QnKey2) Return the first ChildCustomerShipOrderNotes filtered by the QnKey2 column
 * @method     ChildCustomerShipOrderNotes findOneByQnform(string $QnForm) Return the first ChildCustomerShipOrderNotes filtered by the QnForm column
 * @method     ChildCustomerShipOrderNotes findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerShipOrderNotes filtered by the DateUpdtd column
 * @method     ChildCustomerShipOrderNotes findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerShipOrderNotes filtered by the TimeUpdtd column
 * @method     ChildCustomerShipOrderNotes findOneByDummy(string $dummy) Return the first ChildCustomerShipOrderNotes filtered by the dummy column *

 * @method     ChildCustomerShipOrderNotes requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerShipOrderNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOne(ConnectionInterface $con = null) Return the first ChildCustomerShipOrderNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerShipOrderNotes requireOneByQntype(string $QnType) Return the first ChildCustomerShipOrderNotes filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildCustomerShipOrderNotes filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerShipOrderNotes filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByArstshipid(string $ArstShipId) Return the first ChildCustomerShipOrderNotes filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQncustpickticket(string $QnCustPickTicket) Return the first ChildCustomerShipOrderNotes filtered by the QnCustPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQncustpackticket(string $QnCustPackTicket) Return the first ChildCustomerShipOrderNotes filtered by the QnCustPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQncustinvoice(string $QnCustInvoice) Return the first ChildCustomerShipOrderNotes filtered by the QnCustInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQncustacknow(string $QnCustAcknow) Return the first ChildCustomerShipOrderNotes filtered by the QnCustAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQnseq(int $QnSeq) Return the first ChildCustomerShipOrderNotes filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQnnote(string $QnNote) Return the first ChildCustomerShipOrderNotes filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQnkey2(string $QnKey2) Return the first ChildCustomerShipOrderNotes filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByQnform(string $QnForm) Return the first ChildCustomerShipOrderNotes filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerShipOrderNotes filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerShipOrderNotes filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipOrderNotes requireOneByDummy(string $dummy) Return the first ChildCustomerShipOrderNotes filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerShipOrderNotes objects based on current ModelCriteria
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQntype(string $QnType) Return ChildCustomerShipOrderNotes objects filtered by the QnType column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildCustomerShipOrderNotes objects filtered by the QnTypeDesc column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCustomerShipOrderNotes objects filtered by the ArcuCustId column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildCustomerShipOrderNotes objects filtered by the ArstShipId column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQncustpickticket(string $QnCustPickTicket) Return ChildCustomerShipOrderNotes objects filtered by the QnCustPickTicket column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQncustpackticket(string $QnCustPackTicket) Return ChildCustomerShipOrderNotes objects filtered by the QnCustPackTicket column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQncustinvoice(string $QnCustInvoice) Return ChildCustomerShipOrderNotes objects filtered by the QnCustInvoice column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQncustacknow(string $QnCustAcknow) Return ChildCustomerShipOrderNotes objects filtered by the QnCustAcknow column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildCustomerShipOrderNotes objects filtered by the QnSeq column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQnnote(string $QnNote) Return ChildCustomerShipOrderNotes objects filtered by the QnNote column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildCustomerShipOrderNotes objects filtered by the QnKey2 column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByQnform(string $QnForm) Return ChildCustomerShipOrderNotes objects filtered by the QnForm column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerShipOrderNotes objects filtered by the DateUpdtd column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerShipOrderNotes objects filtered by the TimeUpdtd column
 * @method     ChildCustomerShipOrderNotes[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerShipOrderNotes objects filtered by the dummy column
 * @method     ChildCustomerShipOrderNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerShipOrderNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerShipOrderNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerShipOrderNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerShipOrderNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerShipOrderNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerShipOrderNotesQuery) {
            return $criteria;
        }
        $query = new ChildCustomerShipOrderNotesQuery();
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
     * @return ChildCustomerShipOrderNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerShipOrderNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerShipOrderNotesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCustomerShipOrderNotes A model object, or null if the key is not found
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
            /** @var ChildCustomerShipOrderNotes $obj */
            $obj = new ChildCustomerShipOrderNotes();
            $obj->hydrate($row);
            CustomerShipOrderNotesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCustomerShipOrderNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CustomerShipOrderNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CustomerShipOrderNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CustomerShipOrderNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CustomerShipOrderNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQncustpickticket($qncustpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNCUSTPICKTICKET, $qncustpickticket, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQncustpackticket($qncustpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNCUSTPACKTICKET, $qncustpackticket, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQncustinvoice($qncustinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNCUSTINVOICE, $qncustinvoice, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQncustacknow($qncustacknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustacknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNCUSTACKNOW, $qncustacknow, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShipOrderNotesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerShipOrderNotes $customerShipOrderNotes Object to remove from the list of results
     *
     * @return $this|ChildCustomerShipOrderNotesQuery The current query, for fluid interface
     */
    public function prune($customerShipOrderNotes = null)
    {
        if ($customerShipOrderNotes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CustomerShipOrderNotesTableMap::COL_QNTYPE), $customerShipOrderNotes->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CustomerShipOrderNotesTableMap::COL_QNSEQ), $customerShipOrderNotes->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CustomerShipOrderNotesTableMap::COL_QNKEY2), $customerShipOrderNotes->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CustomerShipOrderNotesTableMap::COL_QNFORM), $customerShipOrderNotes->getQnform(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShipOrderNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerShipOrderNotesTableMap::clearInstancePool();
            CustomerShipOrderNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShipOrderNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerShipOrderNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerShipOrderNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerShipOrderNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerShipOrderNotesQuery
