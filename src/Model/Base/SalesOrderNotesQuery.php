<?php

namespace Base;

use \SalesOrderNotes as ChildSalesOrderNotes;
use \SalesOrderNotesQuery as ChildSalesOrderNotesQuery;
use \Exception;
use \PDO;
use Map\SalesOrderNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_so_head_det' table.
 *
 *
 *
 * @method     ChildSalesOrderNotesQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildSalesOrderNotesQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildSalesOrderNotesQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSalesOrderNotesQuery orderByOedtline($order = Criteria::ASC) Order by the OedtLine column
 * @method     ChildSalesOrderNotesQuery orderByQnordrlotser($order = Criteria::ASC) Order by the QnOrdrLotSer column
 * @method     ChildSalesOrderNotesQuery orderByQnordrpickticket($order = Criteria::ASC) Order by the QnOrdrPickTicket column
 * @method     ChildSalesOrderNotesQuery orderByQnordrpackticket($order = Criteria::ASC) Order by the QnOrdrPackTicket column
 * @method     ChildSalesOrderNotesQuery orderByQnordrinvoice($order = Criteria::ASC) Order by the QnOrdrInvoice column
 * @method     ChildSalesOrderNotesQuery orderByQnordracknow($order = Criteria::ASC) Order by the QnOrdrAcknow column
 * @method     ChildSalesOrderNotesQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildSalesOrderNotesQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildSalesOrderNotesQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildSalesOrderNotesQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildSalesOrderNotesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesOrderNotesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesOrderNotesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderNotesQuery groupByQntype() Group by the QnType column
 * @method     ChildSalesOrderNotesQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildSalesOrderNotesQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSalesOrderNotesQuery groupByOedtline() Group by the OedtLine column
 * @method     ChildSalesOrderNotesQuery groupByQnordrlotser() Group by the QnOrdrLotSer column
 * @method     ChildSalesOrderNotesQuery groupByQnordrpickticket() Group by the QnOrdrPickTicket column
 * @method     ChildSalesOrderNotesQuery groupByQnordrpackticket() Group by the QnOrdrPackTicket column
 * @method     ChildSalesOrderNotesQuery groupByQnordrinvoice() Group by the QnOrdrInvoice column
 * @method     ChildSalesOrderNotesQuery groupByQnordracknow() Group by the QnOrdrAcknow column
 * @method     ChildSalesOrderNotesQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildSalesOrderNotesQuery groupByQnnote() Group by the QnNote column
 * @method     ChildSalesOrderNotesQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildSalesOrderNotesQuery groupByQnform() Group by the QnForm column
 * @method     ChildSalesOrderNotesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesOrderNotesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesOrderNotesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderNotes findOne(ConnectionInterface $con = null) Return the first ChildSalesOrderNotes matching the query
 * @method     ChildSalesOrderNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesOrderNotes matching the query, or a new ChildSalesOrderNotes object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderNotes findOneByQntype(string $QnType) Return the first ChildSalesOrderNotes filtered by the QnType column
 * @method     ChildSalesOrderNotes findOneByQntypedesc(string $QnTypeDesc) Return the first ChildSalesOrderNotes filtered by the QnTypeDesc column
 * @method     ChildSalesOrderNotes findOneByOehdnbr(string $OehdNbr) Return the first ChildSalesOrderNotes filtered by the OehdNbr column
 * @method     ChildSalesOrderNotes findOneByOedtline(int $OedtLine) Return the first ChildSalesOrderNotes filtered by the OedtLine column
 * @method     ChildSalesOrderNotes findOneByQnordrlotser(string $QnOrdrLotSer) Return the first ChildSalesOrderNotes filtered by the QnOrdrLotSer column
 * @method     ChildSalesOrderNotes findOneByQnordrpickticket(string $QnOrdrPickTicket) Return the first ChildSalesOrderNotes filtered by the QnOrdrPickTicket column
 * @method     ChildSalesOrderNotes findOneByQnordrpackticket(string $QnOrdrPackTicket) Return the first ChildSalesOrderNotes filtered by the QnOrdrPackTicket column
 * @method     ChildSalesOrderNotes findOneByQnordrinvoice(string $QnOrdrInvoice) Return the first ChildSalesOrderNotes filtered by the QnOrdrInvoice column
 * @method     ChildSalesOrderNotes findOneByQnordracknow(string $QnOrdrAcknow) Return the first ChildSalesOrderNotes filtered by the QnOrdrAcknow column
 * @method     ChildSalesOrderNotes findOneByQnseq(int $QnSeq) Return the first ChildSalesOrderNotes filtered by the QnSeq column
 * @method     ChildSalesOrderNotes findOneByQnnote(string $QnNote) Return the first ChildSalesOrderNotes filtered by the QnNote column
 * @method     ChildSalesOrderNotes findOneByQnkey2(string $QnKey2) Return the first ChildSalesOrderNotes filtered by the QnKey2 column
 * @method     ChildSalesOrderNotes findOneByQnform(string $QnForm) Return the first ChildSalesOrderNotes filtered by the QnForm column
 * @method     ChildSalesOrderNotes findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderNotes filtered by the DateUpdtd column
 * @method     ChildSalesOrderNotes findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderNotes filtered by the TimeUpdtd column
 * @method     ChildSalesOrderNotes findOneByDummy(string $dummy) Return the first ChildSalesOrderNotes filtered by the dummy column *

 * @method     ChildSalesOrderNotes requirePk($key, ConnectionInterface $con = null) Return the ChildSalesOrderNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOne(ConnectionInterface $con = null) Return the first ChildSalesOrderNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderNotes requireOneByQntype(string $QnType) Return the first ChildSalesOrderNotes filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildSalesOrderNotes filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByOehdnbr(string $OehdNbr) Return the first ChildSalesOrderNotes filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByOedtline(int $OedtLine) Return the first ChildSalesOrderNotes filtered by the OedtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnordrlotser(string $QnOrdrLotSer) Return the first ChildSalesOrderNotes filtered by the QnOrdrLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnordrpickticket(string $QnOrdrPickTicket) Return the first ChildSalesOrderNotes filtered by the QnOrdrPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnordrpackticket(string $QnOrdrPackTicket) Return the first ChildSalesOrderNotes filtered by the QnOrdrPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnordrinvoice(string $QnOrdrInvoice) Return the first ChildSalesOrderNotes filtered by the QnOrdrInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnordracknow(string $QnOrdrAcknow) Return the first ChildSalesOrderNotes filtered by the QnOrdrAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnseq(int $QnSeq) Return the first ChildSalesOrderNotes filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnnote(string $QnNote) Return the first ChildSalesOrderNotes filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnkey2(string $QnKey2) Return the first ChildSalesOrderNotes filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByQnform(string $QnForm) Return the first ChildSalesOrderNotes filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderNotes filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderNotes filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByDummy(string $dummy) Return the first ChildSalesOrderNotes filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesOrderNotes objects based on current ModelCriteria
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQntype(string $QnType) Return ChildSalesOrderNotes objects filtered by the QnType column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildSalesOrderNotes objects filtered by the QnTypeDesc column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByOehdnbr(string $OehdNbr) Return ChildSalesOrderNotes objects filtered by the OehdNbr column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByOedtline(int $OedtLine) Return ChildSalesOrderNotes objects filtered by the OedtLine column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnordrlotser(string $QnOrdrLotSer) Return ChildSalesOrderNotes objects filtered by the QnOrdrLotSer column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnordrpickticket(string $QnOrdrPickTicket) Return ChildSalesOrderNotes objects filtered by the QnOrdrPickTicket column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnordrpackticket(string $QnOrdrPackTicket) Return ChildSalesOrderNotes objects filtered by the QnOrdrPackTicket column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnordrinvoice(string $QnOrdrInvoice) Return ChildSalesOrderNotes objects filtered by the QnOrdrInvoice column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnordracknow(string $QnOrdrAcknow) Return ChildSalesOrderNotes objects filtered by the QnOrdrAcknow column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildSalesOrderNotes objects filtered by the QnSeq column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnnote(string $QnNote) Return ChildSalesOrderNotes objects filtered by the QnNote column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildSalesOrderNotes objects filtered by the QnKey2 column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByQnform(string $QnForm) Return ChildSalesOrderNotes objects filtered by the QnForm column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesOrderNotes objects filtered by the DateUpdtd column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesOrderNotes objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesOrderNotes objects filtered by the dummy column
 * @method     ChildSalesOrderNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesOrderNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesOrderNotesQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderNotesQuery();
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
     * @return ChildSalesOrderNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderNotesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildSalesOrderNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, OehdNbr, OedtLine, QnOrdrLotSer, QnOrdrPickTicket, QnOrdrPackTicket, QnOrdrInvoice, QnOrdrAcknow, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_so_head_det WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildSalesOrderNotes $obj */
            $obj = new ChildSalesOrderNotes();
            $obj->hydrate($row);
            SalesOrderNotesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildSalesOrderNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr('fooValue');   // WHERE OehdNbr = 'fooValue'
     * $query->filterByOehdnbr('%fooValue%', Criteria::LIKE); // WHERE OehdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEHDNBR, $oehdnbr, $comparison);
    }

    /**
     * Filter the query on the OedtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtline(1234); // WHERE OedtLine = 1234
     * $query->filterByOedtline(array(12, 34)); // WHERE OedtLine IN (12, 34)
     * $query->filterByOedtline(array('min' => 12)); // WHERE OedtLine > 12
     * </code>
     *
     * @param     mixed $oedtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByOedtline($oedtline = null, $comparison = null)
    {
        if (is_array($oedtline)) {
            $useMinMax = false;
            if (isset($oedtline['min'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEDTLINE, $oedtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtline['max'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEDTLINE, $oedtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEDTLINE, $oedtline, $comparison);
    }

    /**
     * Filter the query on the QnOrdrLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrlotser('fooValue');   // WHERE QnOrdrLotSer = 'fooValue'
     * $query->filterByQnordrlotser('%fooValue%', Criteria::LIKE); // WHERE QnOrdrLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnordrlotser($qnordrlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNORDRLOTSER, $qnordrlotser, $comparison);
    }

    /**
     * Filter the query on the QnOrdrPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrpickticket('fooValue');   // WHERE QnOrdrPickTicket = 'fooValue'
     * $query->filterByQnordrpickticket('%fooValue%', Criteria::LIKE); // WHERE QnOrdrPickTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrpickticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnordrpickticket($qnordrpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNORDRPICKTICKET, $qnordrpickticket, $comparison);
    }

    /**
     * Filter the query on the QnOrdrPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrpackticket('fooValue');   // WHERE QnOrdrPackTicket = 'fooValue'
     * $query->filterByQnordrpackticket('%fooValue%', Criteria::LIKE); // WHERE QnOrdrPackTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrpackticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnordrpackticket($qnordrpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNORDRPACKTICKET, $qnordrpackticket, $comparison);
    }

    /**
     * Filter the query on the QnOrdrInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrinvoice('fooValue');   // WHERE QnOrdrInvoice = 'fooValue'
     * $query->filterByQnordrinvoice('%fooValue%', Criteria::LIKE); // WHERE QnOrdrInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrinvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnordrinvoice($qnordrinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNORDRINVOICE, $qnordrinvoice, $comparison);
    }

    /**
     * Filter the query on the QnOrdrAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordracknow('fooValue');   // WHERE QnOrdrAcknow = 'fooValue'
     * $query->filterByQnordracknow('%fooValue%', Criteria::LIKE); // WHERE QnOrdrAcknow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordracknow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnordracknow($qnordracknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordracknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNORDRACKNOW, $qnordracknow, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesOrderNotes $salesOrderNotes Object to remove from the list of results
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function prune($salesOrderNotes = null)
    {
        if ($salesOrderNotes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesOrderNotesTableMap::COL_QNTYPE), $salesOrderNotes->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesOrderNotesTableMap::COL_QNSEQ), $salesOrderNotes->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SalesOrderNotesTableMap::COL_QNKEY2), $salesOrderNotes->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SalesOrderNotesTableMap::COL_QNFORM), $salesOrderNotes->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_so_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderNotesTableMap::clearInstancePool();
            SalesOrderNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesOrderNotesQuery
