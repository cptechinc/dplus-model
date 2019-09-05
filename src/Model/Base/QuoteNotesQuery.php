<?php

namespace Base;

use \QuoteNotes as ChildQuoteNotes;
use \QuoteNotesQuery as ChildQuoteNotesQuery;
use \Exception;
use \PDO;
use Map\QuoteNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_qt_head_det' table.
 *
 *
 *
 * @method     ChildQuoteNotesQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildQuoteNotesQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildQuoteNotesQuery orderByQthdid($order = Criteria::ASC) Order by the QthdId column
 * @method     ChildQuoteNotesQuery orderByQtdtline($order = Criteria::ASC) Order by the QtdtLine column
 * @method     ChildQuoteNotesQuery orderByQnquotquote($order = Criteria::ASC) Order by the QnQuotQuote column
 * @method     ChildQuoteNotesQuery orderByQnquotpickticket($order = Criteria::ASC) Order by the QnQuotPickTicket column
 * @method     ChildQuoteNotesQuery orderByQnquotpackticket($order = Criteria::ASC) Order by the QnQuotPackTicket column
 * @method     ChildQuoteNotesQuery orderByQnquotinvoice($order = Criteria::ASC) Order by the QnQuotInvoice column
 * @method     ChildQuoteNotesQuery orderByQnquotacknow($order = Criteria::ASC) Order by the QnQuotAcknow column
 * @method     ChildQuoteNotesQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildQuoteNotesQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildQuoteNotesQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildQuoteNotesQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildQuoteNotesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildQuoteNotesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildQuoteNotesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildQuoteNotesQuery groupByQntype() Group by the QnType column
 * @method     ChildQuoteNotesQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildQuoteNotesQuery groupByQthdid() Group by the QthdId column
 * @method     ChildQuoteNotesQuery groupByQtdtline() Group by the QtdtLine column
 * @method     ChildQuoteNotesQuery groupByQnquotquote() Group by the QnQuotQuote column
 * @method     ChildQuoteNotesQuery groupByQnquotpickticket() Group by the QnQuotPickTicket column
 * @method     ChildQuoteNotesQuery groupByQnquotpackticket() Group by the QnQuotPackTicket column
 * @method     ChildQuoteNotesQuery groupByQnquotinvoice() Group by the QnQuotInvoice column
 * @method     ChildQuoteNotesQuery groupByQnquotacknow() Group by the QnQuotAcknow column
 * @method     ChildQuoteNotesQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildQuoteNotesQuery groupByQnnote() Group by the QnNote column
 * @method     ChildQuoteNotesQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildQuoteNotesQuery groupByQnform() Group by the QnForm column
 * @method     ChildQuoteNotesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildQuoteNotesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildQuoteNotesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildQuoteNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildQuoteNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildQuoteNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildQuoteNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildQuoteNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildQuoteNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildQuoteNotes findOne(ConnectionInterface $con = null) Return the first ChildQuoteNotes matching the query
 * @method     ChildQuoteNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildQuoteNotes matching the query, or a new ChildQuoteNotes object populated from the query conditions when no match is found
 *
 * @method     ChildQuoteNotes findOneByQntype(string $QnType) Return the first ChildQuoteNotes filtered by the QnType column
 * @method     ChildQuoteNotes findOneByQntypedesc(string $QnTypeDesc) Return the first ChildQuoteNotes filtered by the QnTypeDesc column
 * @method     ChildQuoteNotes findOneByQthdid(string $QthdId) Return the first ChildQuoteNotes filtered by the QthdId column
 * @method     ChildQuoteNotes findOneByQtdtline(int $QtdtLine) Return the first ChildQuoteNotes filtered by the QtdtLine column
 * @method     ChildQuoteNotes findOneByQnquotquote(string $QnQuotQuote) Return the first ChildQuoteNotes filtered by the QnQuotQuote column
 * @method     ChildQuoteNotes findOneByQnquotpickticket(string $QnQuotPickTicket) Return the first ChildQuoteNotes filtered by the QnQuotPickTicket column
 * @method     ChildQuoteNotes findOneByQnquotpackticket(string $QnQuotPackTicket) Return the first ChildQuoteNotes filtered by the QnQuotPackTicket column
 * @method     ChildQuoteNotes findOneByQnquotinvoice(string $QnQuotInvoice) Return the first ChildQuoteNotes filtered by the QnQuotInvoice column
 * @method     ChildQuoteNotes findOneByQnquotacknow(string $QnQuotAcknow) Return the first ChildQuoteNotes filtered by the QnQuotAcknow column
 * @method     ChildQuoteNotes findOneByQnseq(int $QnSeq) Return the first ChildQuoteNotes filtered by the QnSeq column
 * @method     ChildQuoteNotes findOneByQnnote(string $QnNote) Return the first ChildQuoteNotes filtered by the QnNote column
 * @method     ChildQuoteNotes findOneByQnkey2(string $QnKey2) Return the first ChildQuoteNotes filtered by the QnKey2 column
 * @method     ChildQuoteNotes findOneByQnform(string $QnForm) Return the first ChildQuoteNotes filtered by the QnForm column
 * @method     ChildQuoteNotes findOneByDateupdtd(string $DateUpdtd) Return the first ChildQuoteNotes filtered by the DateUpdtd column
 * @method     ChildQuoteNotes findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildQuoteNotes filtered by the TimeUpdtd column
 * @method     ChildQuoteNotes findOneByDummy(string $dummy) Return the first ChildQuoteNotes filtered by the dummy column *

 * @method     ChildQuoteNotes requirePk($key, ConnectionInterface $con = null) Return the ChildQuoteNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOne(ConnectionInterface $con = null) Return the first ChildQuoteNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuoteNotes requireOneByQntype(string $QnType) Return the first ChildQuoteNotes filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildQuoteNotes filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQthdid(string $QthdId) Return the first ChildQuoteNotes filtered by the QthdId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQtdtline(int $QtdtLine) Return the first ChildQuoteNotes filtered by the QtdtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnquotquote(string $QnQuotQuote) Return the first ChildQuoteNotes filtered by the QnQuotQuote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnquotpickticket(string $QnQuotPickTicket) Return the first ChildQuoteNotes filtered by the QnQuotPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnquotpackticket(string $QnQuotPackTicket) Return the first ChildQuoteNotes filtered by the QnQuotPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnquotinvoice(string $QnQuotInvoice) Return the first ChildQuoteNotes filtered by the QnQuotInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnquotacknow(string $QnQuotAcknow) Return the first ChildQuoteNotes filtered by the QnQuotAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnseq(int $QnSeq) Return the first ChildQuoteNotes filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnnote(string $QnNote) Return the first ChildQuoteNotes filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnkey2(string $QnKey2) Return the first ChildQuoteNotes filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByQnform(string $QnForm) Return the first ChildQuoteNotes filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByDateupdtd(string $DateUpdtd) Return the first ChildQuoteNotes filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildQuoteNotes filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildQuoteNotes requireOneByDummy(string $dummy) Return the first ChildQuoteNotes filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildQuoteNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildQuoteNotes objects based on current ModelCriteria
 * @method     ChildQuoteNotes[]|ObjectCollection findByQntype(string $QnType) Return ChildQuoteNotes objects filtered by the QnType column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildQuoteNotes objects filtered by the QnTypeDesc column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQthdid(string $QthdId) Return ChildQuoteNotes objects filtered by the QthdId column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQtdtline(int $QtdtLine) Return ChildQuoteNotes objects filtered by the QtdtLine column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnquotquote(string $QnQuotQuote) Return ChildQuoteNotes objects filtered by the QnQuotQuote column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnquotpickticket(string $QnQuotPickTicket) Return ChildQuoteNotes objects filtered by the QnQuotPickTicket column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnquotpackticket(string $QnQuotPackTicket) Return ChildQuoteNotes objects filtered by the QnQuotPackTicket column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnquotinvoice(string $QnQuotInvoice) Return ChildQuoteNotes objects filtered by the QnQuotInvoice column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnquotacknow(string $QnQuotAcknow) Return ChildQuoteNotes objects filtered by the QnQuotAcknow column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildQuoteNotes objects filtered by the QnSeq column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnnote(string $QnNote) Return ChildQuoteNotes objects filtered by the QnNote column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildQuoteNotes objects filtered by the QnKey2 column
 * @method     ChildQuoteNotes[]|ObjectCollection findByQnform(string $QnForm) Return ChildQuoteNotes objects filtered by the QnForm column
 * @method     ChildQuoteNotes[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildQuoteNotes objects filtered by the DateUpdtd column
 * @method     ChildQuoteNotes[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildQuoteNotes objects filtered by the TimeUpdtd column
 * @method     ChildQuoteNotes[]|ObjectCollection findByDummy(string $dummy) Return ChildQuoteNotes objects filtered by the dummy column
 * @method     ChildQuoteNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class QuoteNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\QuoteNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\QuoteNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildQuoteNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildQuoteNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildQuoteNotesQuery) {
            return $criteria;
        }
        $query = new ChildQuoteNotesQuery();
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
     * @return ChildQuoteNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = QuoteNotesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildQuoteNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, QthdId, QtdtLine, QnQuotQuote, QnQuotPickTicket, QnQuotPackTicket, QnQuotInvoice, QnQuotAcknow, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_qt_head_det WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildQuoteNotes $obj */
            $obj = new ChildQuoteNotes();
            $obj->hydrate($row);
            QuoteNotesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildQuoteNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(QuoteNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(QuoteNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(QuoteNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(QuoteNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(QuoteNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(QuoteNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(QuoteNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(QuoteNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
    }

    /**
     * Filter the query on the QthdId column
     *
     * Example usage:
     * <code>
     * $query->filterByQthdid('fooValue');   // WHERE QthdId = 'fooValue'
     * $query->filterByQthdid('%fooValue%', Criteria::LIKE); // WHERE QthdId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qthdid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQthdid($qthdid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qthdid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QTHDID, $qthdid, $comparison);
    }

    /**
     * Filter the query on the QtdtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByQtdtline(1234); // WHERE QtdtLine = 1234
     * $query->filterByQtdtline(array(12, 34)); // WHERE QtdtLine IN (12, 34)
     * $query->filterByQtdtline(array('min' => 12)); // WHERE QtdtLine > 12
     * </code>
     *
     * @param     mixed $qtdtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQtdtline($qtdtline = null, $comparison = null)
    {
        if (is_array($qtdtline)) {
            $useMinMax = false;
            if (isset($qtdtline['min'])) {
                $this->addUsingAlias(QuoteNotesTableMap::COL_QTDTLINE, $qtdtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtdtline['max'])) {
                $this->addUsingAlias(QuoteNotesTableMap::COL_QTDTLINE, $qtdtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QTDTLINE, $qtdtline, $comparison);
    }

    /**
     * Filter the query on the QnQuotQuote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnquotquote('fooValue');   // WHERE QnQuotQuote = 'fooValue'
     * $query->filterByQnquotquote('%fooValue%', Criteria::LIKE); // WHERE QnQuotQuote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnquotquote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnquotquote($qnquotquote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnquotquote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNQUOTQUOTE, $qnquotquote, $comparison);
    }

    /**
     * Filter the query on the QnQuotPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnquotpickticket('fooValue');   // WHERE QnQuotPickTicket = 'fooValue'
     * $query->filterByQnquotpickticket('%fooValue%', Criteria::LIKE); // WHERE QnQuotPickTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnquotpickticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnquotpickticket($qnquotpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnquotpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNQUOTPICKTICKET, $qnquotpickticket, $comparison);
    }

    /**
     * Filter the query on the QnQuotPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnquotpackticket('fooValue');   // WHERE QnQuotPackTicket = 'fooValue'
     * $query->filterByQnquotpackticket('%fooValue%', Criteria::LIKE); // WHERE QnQuotPackTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnquotpackticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnquotpackticket($qnquotpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnquotpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNQUOTPACKTICKET, $qnquotpackticket, $comparison);
    }

    /**
     * Filter the query on the QnQuotInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByQnquotinvoice('fooValue');   // WHERE QnQuotInvoice = 'fooValue'
     * $query->filterByQnquotinvoice('%fooValue%', Criteria::LIKE); // WHERE QnQuotInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnquotinvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnquotinvoice($qnquotinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnquotinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNQUOTINVOICE, $qnquotinvoice, $comparison);
    }

    /**
     * Filter the query on the QnQuotAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByQnquotacknow('fooValue');   // WHERE QnQuotAcknow = 'fooValue'
     * $query->filterByQnquotacknow('%fooValue%', Criteria::LIKE); // WHERE QnQuotAcknow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnquotacknow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnquotacknow($qnquotacknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnquotacknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNQUOTACKNOW, $qnquotacknow, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(QuoteNotesTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(QuoteNotesTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QuoteNotesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildQuoteNotes $quoteNotes Object to remove from the list of results
     *
     * @return $this|ChildQuoteNotesQuery The current query, for fluid interface
     */
    public function prune($quoteNotes = null)
    {
        if ($quoteNotes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(QuoteNotesTableMap::COL_QNTYPE), $quoteNotes->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(QuoteNotesTableMap::COL_QNSEQ), $quoteNotes->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(QuoteNotesTableMap::COL_QNKEY2), $quoteNotes->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(QuoteNotesTableMap::COL_QNFORM), $quoteNotes->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_qt_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QuoteNotesTableMap::clearInstancePool();
            QuoteNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(QuoteNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            QuoteNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            QuoteNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // QuoteNotesQuery
