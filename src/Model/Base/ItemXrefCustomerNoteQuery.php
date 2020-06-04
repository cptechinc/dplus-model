<?php

namespace Base;

use \ItemXrefCustomerNote as ChildItemXrefCustomerNote;
use \ItemXrefCustomerNoteQuery as ChildItemXrefCustomerNoteQuery;
use \Exception;
use \PDO;
use Map\ItemXrefCustomerNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_item_cust_xref' table.
 *
 *
 *
 * @method     ChildItemXrefCustomerNoteQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildItemXrefCustomerNoteQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildItemXrefCustomerNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefCustomerNoteQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnicxmquote($order = Criteria::ASC) Order by the QnIcxmQuote column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnicxmpickticket($order = Criteria::ASC) Order by the QnIcxmPickTicket column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnicxmpackticket($order = Criteria::ASC) Order by the QnIcxmPackTicket column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnicxminvoice($order = Criteria::ASC) Order by the QnIcxmInvoice column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnicxmacknow($order = Criteria::ASC) Order by the QnIcxmAcknow column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildItemXrefCustomerNoteQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildItemXrefCustomerNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefCustomerNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefCustomerNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefCustomerNoteQuery groupByQntype() Group by the QnType column
 * @method     ChildItemXrefCustomerNoteQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildItemXrefCustomerNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefCustomerNoteQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnicxmquote() Group by the QnIcxmQuote column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnicxmpickticket() Group by the QnIcxmPickTicket column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnicxmpackticket() Group by the QnIcxmPackTicket column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnicxminvoice() Group by the QnIcxmInvoice column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnicxmacknow() Group by the QnIcxmAcknow column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnnote() Group by the QnNote column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildItemXrefCustomerNoteQuery groupByQnform() Group by the QnForm column
 * @method     ChildItemXrefCustomerNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefCustomerNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefCustomerNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefCustomerNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefCustomerNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefCustomerNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefCustomerNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefCustomerNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefCustomerNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefCustomerNoteQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerNoteQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerNoteQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerNoteQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerNoteQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerNoteQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerNoteQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerNoteQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildItemXrefCustomerNoteQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildItemXrefCustomerNoteQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildItemXrefCustomerNoteQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildItemXrefCustomerNoteQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemXrefCustomerNoteQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemXrefCustomerNoteQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \ItemMasterItemQuery|\CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefCustomerNote findOne(ConnectionInterface $con = null) Return the first ChildItemXrefCustomerNote matching the query
 * @method     ChildItemXrefCustomerNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemXrefCustomerNote matching the query, or a new ChildItemXrefCustomerNote object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefCustomerNote findOneByQntype(string $QnType) Return the first ChildItemXrefCustomerNote filtered by the QnType column
 * @method     ChildItemXrefCustomerNote findOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemXrefCustomerNote filtered by the QnTypeDesc column
 * @method     ChildItemXrefCustomerNote findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefCustomerNote filtered by the InitItemNbr column
 * @method     ChildItemXrefCustomerNote findOneByArcucustid(string $ArcuCustId) Return the first ChildItemXrefCustomerNote filtered by the ArcuCustId column
 * @method     ChildItemXrefCustomerNote findOneByQnicxmquote(string $QnIcxmQuote) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmQuote column
 * @method     ChildItemXrefCustomerNote findOneByQnicxmpickticket(string $QnIcxmPickTicket) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmPickTicket column
 * @method     ChildItemXrefCustomerNote findOneByQnicxmpackticket(string $QnIcxmPackTicket) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmPackTicket column
 * @method     ChildItemXrefCustomerNote findOneByQnicxminvoice(string $QnIcxmInvoice) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmInvoice column
 * @method     ChildItemXrefCustomerNote findOneByQnicxmacknow(string $QnIcxmAcknow) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmAcknow column
 * @method     ChildItemXrefCustomerNote findOneByQnseq(int $QnSeq) Return the first ChildItemXrefCustomerNote filtered by the QnSeq column
 * @method     ChildItemXrefCustomerNote findOneByQnnote(string $QnNote) Return the first ChildItemXrefCustomerNote filtered by the QnNote column
 * @method     ChildItemXrefCustomerNote findOneByQnkey2(string $QnKey2) Return the first ChildItemXrefCustomerNote filtered by the QnKey2 column
 * @method     ChildItemXrefCustomerNote findOneByQnform(string $QnForm) Return the first ChildItemXrefCustomerNote filtered by the QnForm column
 * @method     ChildItemXrefCustomerNote findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefCustomerNote filtered by the DateUpdtd column
 * @method     ChildItemXrefCustomerNote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefCustomerNote filtered by the TimeUpdtd column
 * @method     ChildItemXrefCustomerNote findOneByDummy(string $dummy) Return the first ChildItemXrefCustomerNote filtered by the dummy column *

 * @method     ChildItemXrefCustomerNote requirePk($key, ConnectionInterface $con = null) Return the ChildItemXrefCustomerNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOne(ConnectionInterface $con = null) Return the first ChildItemXrefCustomerNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefCustomerNote requireOneByQntype(string $QnType) Return the first ChildItemXrefCustomerNote filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemXrefCustomerNote filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefCustomerNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByArcucustid(string $ArcuCustId) Return the first ChildItemXrefCustomerNote filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnicxmquote(string $QnIcxmQuote) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmQuote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnicxmpickticket(string $QnIcxmPickTicket) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnicxmpackticket(string $QnIcxmPackTicket) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnicxminvoice(string $QnIcxmInvoice) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnicxmacknow(string $QnIcxmAcknow) Return the first ChildItemXrefCustomerNote filtered by the QnIcxmAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnseq(int $QnSeq) Return the first ChildItemXrefCustomerNote filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnnote(string $QnNote) Return the first ChildItemXrefCustomerNote filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnkey2(string $QnKey2) Return the first ChildItemXrefCustomerNote filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByQnform(string $QnForm) Return the first ChildItemXrefCustomerNote filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefCustomerNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefCustomerNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomerNote requireOneByDummy(string $dummy) Return the first ChildItemXrefCustomerNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemXrefCustomerNote objects based on current ModelCriteria
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQntype(string $QnType) Return ChildItemXrefCustomerNote objects filtered by the QnType column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildItemXrefCustomerNote objects filtered by the QnTypeDesc column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemXrefCustomerNote objects filtered by the InitItemNbr column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildItemXrefCustomerNote objects filtered by the ArcuCustId column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnicxmquote(string $QnIcxmQuote) Return ChildItemXrefCustomerNote objects filtered by the QnIcxmQuote column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnicxmpickticket(string $QnIcxmPickTicket) Return ChildItemXrefCustomerNote objects filtered by the QnIcxmPickTicket column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnicxmpackticket(string $QnIcxmPackTicket) Return ChildItemXrefCustomerNote objects filtered by the QnIcxmPackTicket column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnicxminvoice(string $QnIcxmInvoice) Return ChildItemXrefCustomerNote objects filtered by the QnIcxmInvoice column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnicxmacknow(string $QnIcxmAcknow) Return ChildItemXrefCustomerNote objects filtered by the QnIcxmAcknow column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildItemXrefCustomerNote objects filtered by the QnSeq column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnnote(string $QnNote) Return ChildItemXrefCustomerNote objects filtered by the QnNote column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildItemXrefCustomerNote objects filtered by the QnKey2 column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByQnform(string $QnForm) Return ChildItemXrefCustomerNote objects filtered by the QnForm column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemXrefCustomerNote objects filtered by the DateUpdtd column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemXrefCustomerNote objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefCustomerNote[]|ObjectCollection findByDummy(string $dummy) Return ChildItemXrefCustomerNote objects filtered by the dummy column
 * @method     ChildItemXrefCustomerNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemXrefCustomerNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefCustomerNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefCustomerNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefCustomerNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefCustomerNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemXrefCustomerNoteQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefCustomerNoteQuery();
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
     * @return ChildItemXrefCustomerNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefCustomerNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefCustomerNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildItemXrefCustomerNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, InitItemNbr, ArcuCustId, QnIcxmQuote, QnIcxmPickTicket, QnIcxmPackTicket, QnIcxmInvoice, QnIcxmAcknow, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_item_cust_xref WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildItemXrefCustomerNote $obj */
            $obj = new ChildItemXrefCustomerNote();
            $obj->hydrate($row);
            ItemXrefCustomerNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildItemXrefCustomerNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemXrefCustomerNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the QnIcxmQuote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnicxmquote('fooValue');   // WHERE QnIcxmQuote = 'fooValue'
     * $query->filterByQnicxmquote('%fooValue%', Criteria::LIKE); // WHERE QnIcxmQuote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnicxmquote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnicxmquote($qnicxmquote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnicxmquote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNICXMQUOTE, $qnicxmquote, $comparison);
    }

    /**
     * Filter the query on the QnIcxmPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnicxmpickticket('fooValue');   // WHERE QnIcxmPickTicket = 'fooValue'
     * $query->filterByQnicxmpickticket('%fooValue%', Criteria::LIKE); // WHERE QnIcxmPickTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnicxmpickticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnicxmpickticket($qnicxmpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnicxmpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNICXMPICKTICKET, $qnicxmpickticket, $comparison);
    }

    /**
     * Filter the query on the QnIcxmPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnicxmpackticket('fooValue');   // WHERE QnIcxmPackTicket = 'fooValue'
     * $query->filterByQnicxmpackticket('%fooValue%', Criteria::LIKE); // WHERE QnIcxmPackTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnicxmpackticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnicxmpackticket($qnicxmpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnicxmpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNICXMPACKTICKET, $qnicxmpackticket, $comparison);
    }

    /**
     * Filter the query on the QnIcxmInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByQnicxminvoice('fooValue');   // WHERE QnIcxmInvoice = 'fooValue'
     * $query->filterByQnicxminvoice('%fooValue%', Criteria::LIKE); // WHERE QnIcxmInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnicxminvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnicxminvoice($qnicxminvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnicxminvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNICXMINVOICE, $qnicxminvoice, $comparison);
    }

    /**
     * Filter the query on the QnIcxmAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByQnicxmacknow('fooValue');   // WHERE QnIcxmAcknow = 'fooValue'
     * $query->filterByQnicxmacknow('%fooValue%', Criteria::LIKE); // WHERE QnIcxmAcknow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnicxmacknow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnicxmacknow($qnicxmacknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnicxmacknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNICXMACKNOW, $qnicxmacknow, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

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
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefCustomerNoteTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildItemXrefCustomerNote $itemXrefCustomerNote Object to remove from the list of results
     *
     * @return $this|ChildItemXrefCustomerNoteQuery The current query, for fluid interface
     */
    public function prune($itemXrefCustomerNote = null)
    {
        if ($itemXrefCustomerNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefCustomerNoteTableMap::COL_QNTYPE), $itemXrefCustomerNote->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefCustomerNoteTableMap::COL_QNSEQ), $itemXrefCustomerNote->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemXrefCustomerNoteTableMap::COL_QNKEY2), $itemXrefCustomerNote->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemXrefCustomerNoteTableMap::COL_QNFORM), $itemXrefCustomerNote->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_item_cust_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefCustomerNoteTableMap::clearInstancePool();
            ItemXrefCustomerNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefCustomerNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefCustomerNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefCustomerNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemXrefCustomerNoteQuery
