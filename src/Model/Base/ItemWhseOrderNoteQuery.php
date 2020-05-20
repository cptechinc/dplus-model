<?php

namespace Base;

use \ItemWhseOrderNote as ChildItemWhseOrderNote;
use \ItemWhseOrderNoteQuery as ChildItemWhseOrderNoteQuery;
use \Exception;
use \PDO;
use Map\ItemWhseOrderNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_item_wh_order' table.
 *
 *
 *
 * @method     ChildItemWhseOrderNoteQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildItemWhseOrderNoteQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildItemWhseOrderNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemWhseOrderNoteQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordrpickticket($order = Criteria::ASC) Order by the QnOrdrPickTicket column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordrpackticket($order = Criteria::ASC) Order by the QnOrdrPackTicket column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordrinvoice($order = Criteria::ASC) Order by the QnOrdrInvoice column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordracknow($order = Criteria::ASC) Order by the QnOrdrAcknow column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordrquote($order = Criteria::ASC) Order by the QnOrdrQuote column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordrpurchordr($order = Criteria::ASC) Order by the QnOrdrPurchOrdr column
 * @method     ChildItemWhseOrderNoteQuery orderByQnordrtransfer($order = Criteria::ASC) Order by the QnOrdrTransfer column
 * @method     ChildItemWhseOrderNoteQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildItemWhseOrderNoteQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildItemWhseOrderNoteQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildItemWhseOrderNoteQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildItemWhseOrderNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemWhseOrderNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemWhseOrderNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemWhseOrderNoteQuery groupByQntype() Group by the QnType column
 * @method     ChildItemWhseOrderNoteQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildItemWhseOrderNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemWhseOrderNoteQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordrpickticket() Group by the QnOrdrPickTicket column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordrpackticket() Group by the QnOrdrPackTicket column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordrinvoice() Group by the QnOrdrInvoice column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordracknow() Group by the QnOrdrAcknow column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordrquote() Group by the QnOrdrQuote column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordrpurchordr() Group by the QnOrdrPurchOrdr column
 * @method     ChildItemWhseOrderNoteQuery groupByQnordrtransfer() Group by the QnOrdrTransfer column
 * @method     ChildItemWhseOrderNoteQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildItemWhseOrderNoteQuery groupByQnnote() Group by the QnNote column
 * @method     ChildItemWhseOrderNoteQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildItemWhseOrderNoteQuery groupByQnform() Group by the QnForm column
 * @method     ChildItemWhseOrderNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemWhseOrderNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemWhseOrderNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemWhseOrderNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemWhseOrderNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemWhseOrderNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemWhseOrderNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemWhseOrderNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemWhseOrderNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemWhseOrderNote findOne(ConnectionInterface $con = null) Return the first ChildItemWhseOrderNote matching the query
 * @method     ChildItemWhseOrderNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemWhseOrderNote matching the query, or a new ChildItemWhseOrderNote object populated from the query conditions when no match is found
 *
 * @method     ChildItemWhseOrderNote findOneByQntype(string $QnType) Return the first ChildItemWhseOrderNote filtered by the QnType column
 * @method     ChildItemWhseOrderNote findOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemWhseOrderNote filtered by the QnTypeDesc column
 * @method     ChildItemWhseOrderNote findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemWhseOrderNote filtered by the InitItemNbr column
 * @method     ChildItemWhseOrderNote findOneByIntbwhse(string $IntbWhse) Return the first ChildItemWhseOrderNote filtered by the IntbWhse column
 * @method     ChildItemWhseOrderNote findOneByQnordrpickticket(string $QnOrdrPickTicket) Return the first ChildItemWhseOrderNote filtered by the QnOrdrPickTicket column
 * @method     ChildItemWhseOrderNote findOneByQnordrpackticket(string $QnOrdrPackTicket) Return the first ChildItemWhseOrderNote filtered by the QnOrdrPackTicket column
 * @method     ChildItemWhseOrderNote findOneByQnordrinvoice(string $QnOrdrInvoice) Return the first ChildItemWhseOrderNote filtered by the QnOrdrInvoice column
 * @method     ChildItemWhseOrderNote findOneByQnordracknow(string $QnOrdrAcknow) Return the first ChildItemWhseOrderNote filtered by the QnOrdrAcknow column
 * @method     ChildItemWhseOrderNote findOneByQnordrquote(string $QnOrdrQuote) Return the first ChildItemWhseOrderNote filtered by the QnOrdrQuote column
 * @method     ChildItemWhseOrderNote findOneByQnordrpurchordr(string $QnOrdrPurchOrdr) Return the first ChildItemWhseOrderNote filtered by the QnOrdrPurchOrdr column
 * @method     ChildItemWhseOrderNote findOneByQnordrtransfer(string $QnOrdrTransfer) Return the first ChildItemWhseOrderNote filtered by the QnOrdrTransfer column
 * @method     ChildItemWhseOrderNote findOneByQnseq(int $QnSeq) Return the first ChildItemWhseOrderNote filtered by the QnSeq column
 * @method     ChildItemWhseOrderNote findOneByQnnote(string $QnNote) Return the first ChildItemWhseOrderNote filtered by the QnNote column
 * @method     ChildItemWhseOrderNote findOneByQnkey2(string $QnKey2) Return the first ChildItemWhseOrderNote filtered by the QnKey2 column
 * @method     ChildItemWhseOrderNote findOneByQnform(string $QnForm) Return the first ChildItemWhseOrderNote filtered by the QnForm column
 * @method     ChildItemWhseOrderNote findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemWhseOrderNote filtered by the DateUpdtd column
 * @method     ChildItemWhseOrderNote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemWhseOrderNote filtered by the TimeUpdtd column
 * @method     ChildItemWhseOrderNote findOneByDummy(string $dummy) Return the first ChildItemWhseOrderNote filtered by the dummy column *

 * @method     ChildItemWhseOrderNote requirePk($key, ConnectionInterface $con = null) Return the ChildItemWhseOrderNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOne(ConnectionInterface $con = null) Return the first ChildItemWhseOrderNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemWhseOrderNote requireOneByQntype(string $QnType) Return the first ChildItemWhseOrderNote filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemWhseOrderNote filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemWhseOrderNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByIntbwhse(string $IntbWhse) Return the first ChildItemWhseOrderNote filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordrpickticket(string $QnOrdrPickTicket) Return the first ChildItemWhseOrderNote filtered by the QnOrdrPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordrpackticket(string $QnOrdrPackTicket) Return the first ChildItemWhseOrderNote filtered by the QnOrdrPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordrinvoice(string $QnOrdrInvoice) Return the first ChildItemWhseOrderNote filtered by the QnOrdrInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordracknow(string $QnOrdrAcknow) Return the first ChildItemWhseOrderNote filtered by the QnOrdrAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordrquote(string $QnOrdrQuote) Return the first ChildItemWhseOrderNote filtered by the QnOrdrQuote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordrpurchordr(string $QnOrdrPurchOrdr) Return the first ChildItemWhseOrderNote filtered by the QnOrdrPurchOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnordrtransfer(string $QnOrdrTransfer) Return the first ChildItemWhseOrderNote filtered by the QnOrdrTransfer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnseq(int $QnSeq) Return the first ChildItemWhseOrderNote filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnnote(string $QnNote) Return the first ChildItemWhseOrderNote filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnkey2(string $QnKey2) Return the first ChildItemWhseOrderNote filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByQnform(string $QnForm) Return the first ChildItemWhseOrderNote filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemWhseOrderNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemWhseOrderNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemWhseOrderNote requireOneByDummy(string $dummy) Return the first ChildItemWhseOrderNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemWhseOrderNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemWhseOrderNote objects based on current ModelCriteria
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQntype(string $QnType) Return ChildItemWhseOrderNote objects filtered by the QnType column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildItemWhseOrderNote objects filtered by the QnTypeDesc column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemWhseOrderNote objects filtered by the InitItemNbr column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildItemWhseOrderNote objects filtered by the IntbWhse column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordrpickticket(string $QnOrdrPickTicket) Return ChildItemWhseOrderNote objects filtered by the QnOrdrPickTicket column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordrpackticket(string $QnOrdrPackTicket) Return ChildItemWhseOrderNote objects filtered by the QnOrdrPackTicket column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordrinvoice(string $QnOrdrInvoice) Return ChildItemWhseOrderNote objects filtered by the QnOrdrInvoice column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordracknow(string $QnOrdrAcknow) Return ChildItemWhseOrderNote objects filtered by the QnOrdrAcknow column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordrquote(string $QnOrdrQuote) Return ChildItemWhseOrderNote objects filtered by the QnOrdrQuote column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordrpurchordr(string $QnOrdrPurchOrdr) Return ChildItemWhseOrderNote objects filtered by the QnOrdrPurchOrdr column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnordrtransfer(string $QnOrdrTransfer) Return ChildItemWhseOrderNote objects filtered by the QnOrdrTransfer column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildItemWhseOrderNote objects filtered by the QnSeq column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnnote(string $QnNote) Return ChildItemWhseOrderNote objects filtered by the QnNote column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildItemWhseOrderNote objects filtered by the QnKey2 column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByQnform(string $QnForm) Return ChildItemWhseOrderNote objects filtered by the QnForm column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemWhseOrderNote objects filtered by the DateUpdtd column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemWhseOrderNote objects filtered by the TimeUpdtd column
 * @method     ChildItemWhseOrderNote[]|ObjectCollection findByDummy(string $dummy) Return ChildItemWhseOrderNote objects filtered by the dummy column
 * @method     ChildItemWhseOrderNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemWhseOrderNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemWhseOrderNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemWhseOrderNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemWhseOrderNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemWhseOrderNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemWhseOrderNoteQuery) {
            return $criteria;
        }
        $query = new ChildItemWhseOrderNoteQuery();
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
     * @return ChildItemWhseOrderNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemWhseOrderNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemWhseOrderNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildItemWhseOrderNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, InitItemNbr, IntbWhse, QnOrdrPickTicket, QnOrdrPackTicket, QnOrdrInvoice, QnOrdrAcknow, QnOrdrQuote, QnOrdrPurchOrdr, QnOrdrTransfer, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_item_wh_order WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildItemWhseOrderNote $obj */
            $obj = new ChildItemWhseOrderNote();
            $obj->hydrate($row);
            ItemWhseOrderNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildItemWhseOrderNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemWhseOrderNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_INTBWHSE, $intbwhse, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordrpickticket($qnordrpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRPICKTICKET, $qnordrpickticket, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordrpackticket($qnordrpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRPACKTICKET, $qnordrpackticket, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordrinvoice($qnordrinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRINVOICE, $qnordrinvoice, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordracknow($qnordracknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordracknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRACKNOW, $qnordracknow, $comparison);
    }

    /**
     * Filter the query on the QnOrdrQuote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrquote('fooValue');   // WHERE QnOrdrQuote = 'fooValue'
     * $query->filterByQnordrquote('%fooValue%', Criteria::LIKE); // WHERE QnOrdrQuote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrquote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordrquote($qnordrquote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrquote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRQUOTE, $qnordrquote, $comparison);
    }

    /**
     * Filter the query on the QnOrdrPurchOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrpurchordr('fooValue');   // WHERE QnOrdrPurchOrdr = 'fooValue'
     * $query->filterByQnordrpurchordr('%fooValue%', Criteria::LIKE); // WHERE QnOrdrPurchOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrpurchordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordrpurchordr($qnordrpurchordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpurchordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRPURCHORDR, $qnordrpurchordr, $comparison);
    }

    /**
     * Filter the query on the QnOrdrTransfer column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrtransfer('fooValue');   // WHERE QnOrdrTransfer = 'fooValue'
     * $query->filterByQnordrtransfer('%fooValue%', Criteria::LIKE); // WHERE QnOrdrTransfer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnordrtransfer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnordrtransfer($qnordrtransfer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrtransfer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNORDRTRANSFER, $qnordrtransfer, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemWhseOrderNoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemWhseOrderNote $itemWhseOrderNote Object to remove from the list of results
     *
     * @return $this|ChildItemWhseOrderNoteQuery The current query, for fluid interface
     */
    public function prune($itemWhseOrderNote = null)
    {
        if ($itemWhseOrderNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemWhseOrderNoteTableMap::COL_QNTYPE), $itemWhseOrderNote->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemWhseOrderNoteTableMap::COL_QNSEQ), $itemWhseOrderNote->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemWhseOrderNoteTableMap::COL_QNKEY2), $itemWhseOrderNote->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemWhseOrderNoteTableMap::COL_QNFORM), $itemWhseOrderNote->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_item_wh_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemWhseOrderNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemWhseOrderNoteTableMap::clearInstancePool();
            ItemWhseOrderNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemWhseOrderNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemWhseOrderNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemWhseOrderNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemWhseOrderNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemWhseOrderNoteQuery
