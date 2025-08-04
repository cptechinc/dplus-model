<?php

namespace Base;

use \ItemOrderNote as ChildItemOrderNote;
use \ItemOrderNoteQuery as ChildItemOrderNoteQuery;
use \Exception;
use \PDO;
use Map\ItemOrderNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `notes_item_order` table.
 *
 * @method     ChildItemOrderNoteQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildItemOrderNoteQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildItemOrderNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemOrderNoteQuery orderByQnordrpickticket($order = Criteria::ASC) Order by the QnOrdrPickTicket column
 * @method     ChildItemOrderNoteQuery orderByQnordrpackticket($order = Criteria::ASC) Order by the QnOrdrPackTicket column
 * @method     ChildItemOrderNoteQuery orderByQnordrinvoice($order = Criteria::ASC) Order by the QnOrdrInvoice column
 * @method     ChildItemOrderNoteQuery orderByQnordracknow($order = Criteria::ASC) Order by the QnOrdrAcknow column
 * @method     ChildItemOrderNoteQuery orderByQnordrquote($order = Criteria::ASC) Order by the QnOrdrQuote column
 * @method     ChildItemOrderNoteQuery orderByQnordrpurchordr($order = Criteria::ASC) Order by the QnOrdrPurchOrdr column
 * @method     ChildItemOrderNoteQuery orderByQnordrtransfer($order = Criteria::ASC) Order by the QnOrdrTransfer column
 * @method     ChildItemOrderNoteQuery orderByQnordrfabpo($order = Criteria::ASC) Order by the QnOrdrFabPo column
 * @method     ChildItemOrderNoteQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildItemOrderNoteQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildItemOrderNoteQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildItemOrderNoteQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildItemOrderNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemOrderNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemOrderNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemOrderNoteQuery groupByQntype() Group by the QnType column
 * @method     ChildItemOrderNoteQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildItemOrderNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemOrderNoteQuery groupByQnordrpickticket() Group by the QnOrdrPickTicket column
 * @method     ChildItemOrderNoteQuery groupByQnordrpackticket() Group by the QnOrdrPackTicket column
 * @method     ChildItemOrderNoteQuery groupByQnordrinvoice() Group by the QnOrdrInvoice column
 * @method     ChildItemOrderNoteQuery groupByQnordracknow() Group by the QnOrdrAcknow column
 * @method     ChildItemOrderNoteQuery groupByQnordrquote() Group by the QnOrdrQuote column
 * @method     ChildItemOrderNoteQuery groupByQnordrpurchordr() Group by the QnOrdrPurchOrdr column
 * @method     ChildItemOrderNoteQuery groupByQnordrtransfer() Group by the QnOrdrTransfer column
 * @method     ChildItemOrderNoteQuery groupByQnordrfabpo() Group by the QnOrdrFabPo column
 * @method     ChildItemOrderNoteQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildItemOrderNoteQuery groupByQnnote() Group by the QnNote column
 * @method     ChildItemOrderNoteQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildItemOrderNoteQuery groupByQnform() Group by the QnForm column
 * @method     ChildItemOrderNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemOrderNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemOrderNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemOrderNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemOrderNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemOrderNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemOrderNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemOrderNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemOrderNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemOrderNote|null findOne(?ConnectionInterface $con = null) Return the first ChildItemOrderNote matching the query
 * @method     ChildItemOrderNote findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemOrderNote matching the query, or a new ChildItemOrderNote object populated from the query conditions when no match is found
 *
 * @method     ChildItemOrderNote|null findOneByQntype(string $QnType) Return the first ChildItemOrderNote filtered by the QnType column
 * @method     ChildItemOrderNote|null findOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemOrderNote filtered by the QnTypeDesc column
 * @method     ChildItemOrderNote|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemOrderNote filtered by the InitItemNbr column
 * @method     ChildItemOrderNote|null findOneByQnordrpickticket(string $QnOrdrPickTicket) Return the first ChildItemOrderNote filtered by the QnOrdrPickTicket column
 * @method     ChildItemOrderNote|null findOneByQnordrpackticket(string $QnOrdrPackTicket) Return the first ChildItemOrderNote filtered by the QnOrdrPackTicket column
 * @method     ChildItemOrderNote|null findOneByQnordrinvoice(string $QnOrdrInvoice) Return the first ChildItemOrderNote filtered by the QnOrdrInvoice column
 * @method     ChildItemOrderNote|null findOneByQnordracknow(string $QnOrdrAcknow) Return the first ChildItemOrderNote filtered by the QnOrdrAcknow column
 * @method     ChildItemOrderNote|null findOneByQnordrquote(string $QnOrdrQuote) Return the first ChildItemOrderNote filtered by the QnOrdrQuote column
 * @method     ChildItemOrderNote|null findOneByQnordrpurchordr(string $QnOrdrPurchOrdr) Return the first ChildItemOrderNote filtered by the QnOrdrPurchOrdr column
 * @method     ChildItemOrderNote|null findOneByQnordrtransfer(string $QnOrdrTransfer) Return the first ChildItemOrderNote filtered by the QnOrdrTransfer column
 * @method     ChildItemOrderNote|null findOneByQnordrfabpo(string $QnOrdrFabPo) Return the first ChildItemOrderNote filtered by the QnOrdrFabPo column
 * @method     ChildItemOrderNote|null findOneByQnseq(int $QnSeq) Return the first ChildItemOrderNote filtered by the QnSeq column
 * @method     ChildItemOrderNote|null findOneByQnnote(string $QnNote) Return the first ChildItemOrderNote filtered by the QnNote column
 * @method     ChildItemOrderNote|null findOneByQnkey2(string $QnKey2) Return the first ChildItemOrderNote filtered by the QnKey2 column
 * @method     ChildItemOrderNote|null findOneByQnform(string $QnForm) Return the first ChildItemOrderNote filtered by the QnForm column
 * @method     ChildItemOrderNote|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemOrderNote filtered by the DateUpdtd column
 * @method     ChildItemOrderNote|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemOrderNote filtered by the TimeUpdtd column
 * @method     ChildItemOrderNote|null findOneByDummy(string $dummy) Return the first ChildItemOrderNote filtered by the dummy column
 *
 * @method     ChildItemOrderNote requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemOrderNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOne(?ConnectionInterface $con = null) Return the first ChildItemOrderNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemOrderNote requireOneByQntype(string $QnType) Return the first ChildItemOrderNote filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemOrderNote filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemOrderNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrpickticket(string $QnOrdrPickTicket) Return the first ChildItemOrderNote filtered by the QnOrdrPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrpackticket(string $QnOrdrPackTicket) Return the first ChildItemOrderNote filtered by the QnOrdrPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrinvoice(string $QnOrdrInvoice) Return the first ChildItemOrderNote filtered by the QnOrdrInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordracknow(string $QnOrdrAcknow) Return the first ChildItemOrderNote filtered by the QnOrdrAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrquote(string $QnOrdrQuote) Return the first ChildItemOrderNote filtered by the QnOrdrQuote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrpurchordr(string $QnOrdrPurchOrdr) Return the first ChildItemOrderNote filtered by the QnOrdrPurchOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrtransfer(string $QnOrdrTransfer) Return the first ChildItemOrderNote filtered by the QnOrdrTransfer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnordrfabpo(string $QnOrdrFabPo) Return the first ChildItemOrderNote filtered by the QnOrdrFabPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnseq(int $QnSeq) Return the first ChildItemOrderNote filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnnote(string $QnNote) Return the first ChildItemOrderNote filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnkey2(string $QnKey2) Return the first ChildItemOrderNote filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByQnform(string $QnForm) Return the first ChildItemOrderNote filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemOrderNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemOrderNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemOrderNote requireOneByDummy(string $dummy) Return the first ChildItemOrderNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemOrderNote[]|Collection find(?ConnectionInterface $con = null) Return ChildItemOrderNote objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> find(?ConnectionInterface $con = null) Return ChildItemOrderNote objects based on current ModelCriteria
 *
 * @method     ChildItemOrderNote[]|Collection findByQntype(string|array<string> $QnType) Return ChildItemOrderNote objects filtered by the QnType column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQntype(string|array<string> $QnType) Return ChildItemOrderNote objects filtered by the QnType column
 * @method     ChildItemOrderNote[]|Collection findByQntypedesc(string|array<string> $QnTypeDesc) Return ChildItemOrderNote objects filtered by the QnTypeDesc column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQntypedesc(string|array<string> $QnTypeDesc) Return ChildItemOrderNote objects filtered by the QnTypeDesc column
 * @method     ChildItemOrderNote[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemOrderNote objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemOrderNote objects filtered by the InitItemNbr column
 * @method     ChildItemOrderNote[]|Collection findByQnordrpickticket(string|array<string> $QnOrdrPickTicket) Return ChildItemOrderNote objects filtered by the QnOrdrPickTicket column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrpickticket(string|array<string> $QnOrdrPickTicket) Return ChildItemOrderNote objects filtered by the QnOrdrPickTicket column
 * @method     ChildItemOrderNote[]|Collection findByQnordrpackticket(string|array<string> $QnOrdrPackTicket) Return ChildItemOrderNote objects filtered by the QnOrdrPackTicket column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrpackticket(string|array<string> $QnOrdrPackTicket) Return ChildItemOrderNote objects filtered by the QnOrdrPackTicket column
 * @method     ChildItemOrderNote[]|Collection findByQnordrinvoice(string|array<string> $QnOrdrInvoice) Return ChildItemOrderNote objects filtered by the QnOrdrInvoice column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrinvoice(string|array<string> $QnOrdrInvoice) Return ChildItemOrderNote objects filtered by the QnOrdrInvoice column
 * @method     ChildItemOrderNote[]|Collection findByQnordracknow(string|array<string> $QnOrdrAcknow) Return ChildItemOrderNote objects filtered by the QnOrdrAcknow column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordracknow(string|array<string> $QnOrdrAcknow) Return ChildItemOrderNote objects filtered by the QnOrdrAcknow column
 * @method     ChildItemOrderNote[]|Collection findByQnordrquote(string|array<string> $QnOrdrQuote) Return ChildItemOrderNote objects filtered by the QnOrdrQuote column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrquote(string|array<string> $QnOrdrQuote) Return ChildItemOrderNote objects filtered by the QnOrdrQuote column
 * @method     ChildItemOrderNote[]|Collection findByQnordrpurchordr(string|array<string> $QnOrdrPurchOrdr) Return ChildItemOrderNote objects filtered by the QnOrdrPurchOrdr column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrpurchordr(string|array<string> $QnOrdrPurchOrdr) Return ChildItemOrderNote objects filtered by the QnOrdrPurchOrdr column
 * @method     ChildItemOrderNote[]|Collection findByQnordrtransfer(string|array<string> $QnOrdrTransfer) Return ChildItemOrderNote objects filtered by the QnOrdrTransfer column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrtransfer(string|array<string> $QnOrdrTransfer) Return ChildItemOrderNote objects filtered by the QnOrdrTransfer column
 * @method     ChildItemOrderNote[]|Collection findByQnordrfabpo(string|array<string> $QnOrdrFabPo) Return ChildItemOrderNote objects filtered by the QnOrdrFabPo column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnordrfabpo(string|array<string> $QnOrdrFabPo) Return ChildItemOrderNote objects filtered by the QnOrdrFabPo column
 * @method     ChildItemOrderNote[]|Collection findByQnseq(int|array<int> $QnSeq) Return ChildItemOrderNote objects filtered by the QnSeq column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnseq(int|array<int> $QnSeq) Return ChildItemOrderNote objects filtered by the QnSeq column
 * @method     ChildItemOrderNote[]|Collection findByQnnote(string|array<string> $QnNote) Return ChildItemOrderNote objects filtered by the QnNote column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnnote(string|array<string> $QnNote) Return ChildItemOrderNote objects filtered by the QnNote column
 * @method     ChildItemOrderNote[]|Collection findByQnkey2(string|array<string> $QnKey2) Return ChildItemOrderNote objects filtered by the QnKey2 column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnkey2(string|array<string> $QnKey2) Return ChildItemOrderNote objects filtered by the QnKey2 column
 * @method     ChildItemOrderNote[]|Collection findByQnform(string|array<string> $QnForm) Return ChildItemOrderNote objects filtered by the QnForm column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByQnform(string|array<string> $QnForm) Return ChildItemOrderNote objects filtered by the QnForm column
 * @method     ChildItemOrderNote[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemOrderNote objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemOrderNote objects filtered by the DateUpdtd column
 * @method     ChildItemOrderNote[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemOrderNote objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemOrderNote objects filtered by the TimeUpdtd column
 * @method     ChildItemOrderNote[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemOrderNote objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemOrderNote> findByDummy(string|array<string> $dummy) Return ChildItemOrderNote objects filtered by the dummy column
 *
 * @method     ChildItemOrderNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemOrderNote> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemOrderNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemOrderNoteQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemOrderNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemOrderNoteQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemOrderNoteQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildItemOrderNoteQuery) {
            return $criteria;
        }
        $query = new ChildItemOrderNoteQuery();
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
     * @return ChildItemOrderNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemOrderNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemOrderNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemOrderNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, InitItemNbr, QnOrdrPickTicket, QnOrdrPackTicket, QnOrdrInvoice, QnOrdrAcknow, QnOrdrQuote, QnOrdrPurchOrdr, QnOrdrTransfer, QnOrdrFabPo, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_item_order WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildItemOrderNote $obj */
            $obj = new ChildItemOrderNote();
            $obj->hydrate($row);
            ItemOrderNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildItemOrderNote|array|mixed the result, formatted by the current formatter
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
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemOrderNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemOrderNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemOrderNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemOrderNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * $query->filterByQntype(['foo', 'bar']); // WHERE QnType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qntype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNTYPE, $qntype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQntypedesc('fooValue');   // WHERE QnTypeDesc = 'fooValue'
     * $query->filterByQntypedesc('%fooValue%', Criteria::LIKE); // WHERE QnTypeDesc LIKE '%fooValue%'
     * $query->filterByQntypedesc(['foo', 'bar']); // WHERE QnTypeDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qntypedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrpickticket('fooValue');   // WHERE QnOrdrPickTicket = 'fooValue'
     * $query->filterByQnordrpickticket('%fooValue%', Criteria::LIKE); // WHERE QnOrdrPickTicket LIKE '%fooValue%'
     * $query->filterByQnordrpickticket(['foo', 'bar']); // WHERE QnOrdrPickTicket IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrpickticket The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrpickticket($qnordrpickticket = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRPICKTICKET, $qnordrpickticket, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrpackticket('fooValue');   // WHERE QnOrdrPackTicket = 'fooValue'
     * $query->filterByQnordrpackticket('%fooValue%', Criteria::LIKE); // WHERE QnOrdrPackTicket LIKE '%fooValue%'
     * $query->filterByQnordrpackticket(['foo', 'bar']); // WHERE QnOrdrPackTicket IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrpackticket The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrpackticket($qnordrpackticket = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRPACKTICKET, $qnordrpackticket, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrinvoice('fooValue');   // WHERE QnOrdrInvoice = 'fooValue'
     * $query->filterByQnordrinvoice('%fooValue%', Criteria::LIKE); // WHERE QnOrdrInvoice LIKE '%fooValue%'
     * $query->filterByQnordrinvoice(['foo', 'bar']); // WHERE QnOrdrInvoice IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrinvoice The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrinvoice($qnordrinvoice = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRINVOICE, $qnordrinvoice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordracknow('fooValue');   // WHERE QnOrdrAcknow = 'fooValue'
     * $query->filterByQnordracknow('%fooValue%', Criteria::LIKE); // WHERE QnOrdrAcknow LIKE '%fooValue%'
     * $query->filterByQnordracknow(['foo', 'bar']); // WHERE QnOrdrAcknow IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordracknow The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordracknow($qnordracknow = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordracknow)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRACKNOW, $qnordracknow, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrQuote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrquote('fooValue');   // WHERE QnOrdrQuote = 'fooValue'
     * $query->filterByQnordrquote('%fooValue%', Criteria::LIKE); // WHERE QnOrdrQuote LIKE '%fooValue%'
     * $query->filterByQnordrquote(['foo', 'bar']); // WHERE QnOrdrQuote IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrquote The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrquote($qnordrquote = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrquote)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRQUOTE, $qnordrquote, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrPurchOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrpurchordr('fooValue');   // WHERE QnOrdrPurchOrdr = 'fooValue'
     * $query->filterByQnordrpurchordr('%fooValue%', Criteria::LIKE); // WHERE QnOrdrPurchOrdr LIKE '%fooValue%'
     * $query->filterByQnordrpurchordr(['foo', 'bar']); // WHERE QnOrdrPurchOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrpurchordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrpurchordr($qnordrpurchordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrpurchordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRPURCHORDR, $qnordrpurchordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrTransfer column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrtransfer('fooValue');   // WHERE QnOrdrTransfer = 'fooValue'
     * $query->filterByQnordrtransfer('%fooValue%', Criteria::LIKE); // WHERE QnOrdrTransfer LIKE '%fooValue%'
     * $query->filterByQnordrtransfer(['foo', 'bar']); // WHERE QnOrdrTransfer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrtransfer The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrtransfer($qnordrtransfer = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrtransfer)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRTRANSFER, $qnordrtransfer, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnOrdrFabPo column
     *
     * Example usage:
     * <code>
     * $query->filterByQnordrfabpo('fooValue');   // WHERE QnOrdrFabPo = 'fooValue'
     * $query->filterByQnordrfabpo('%fooValue%', Criteria::LIKE); // WHERE QnOrdrFabPo LIKE '%fooValue%'
     * $query->filterByQnordrfabpo(['foo', 'bar']); // WHERE QnOrdrFabPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnordrfabpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnordrfabpo($qnordrfabpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnordrfabpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNORDRFABPO, $qnordrfabpo, $comparison);

        return $this;
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
     * @param mixed $qnseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, ?string $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNSEQ, $qnseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnNote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnnote('fooValue');   // WHERE QnNote = 'fooValue'
     * $query->filterByQnnote('%fooValue%', Criteria::LIKE); // WHERE QnNote LIKE '%fooValue%'
     * $query->filterByQnnote(['foo', 'bar']); // WHERE QnNote IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnnote The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNNOTE, $qnnote, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQnkey2('fooValue');   // WHERE QnKey2 = 'fooValue'
     * $query->filterByQnkey2('%fooValue%', Criteria::LIKE); // WHERE QnKey2 LIKE '%fooValue%'
     * $query->filterByQnkey2(['foo', 'bar']); // WHERE QnKey2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnkey2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNKEY2, $qnkey2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnForm column
     *
     * Example usage:
     * <code>
     * $query->filterByQnform('fooValue');   // WHERE QnForm = 'fooValue'
     * $query->filterByQnform('%fooValue%', Criteria::LIKE); // WHERE QnForm LIKE '%fooValue%'
     * $query->filterByQnform(['foo', 'bar']); // WHERE QnForm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnform The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_QNFORM, $qnform, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemOrderNoteTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildItemOrderNote $itemOrderNote Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($itemOrderNote = null)
    {
        if ($itemOrderNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemOrderNoteTableMap::COL_QNTYPE), $itemOrderNote->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemOrderNoteTableMap::COL_QNSEQ), $itemOrderNote->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemOrderNoteTableMap::COL_QNKEY2), $itemOrderNote->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemOrderNoteTableMap::COL_QNFORM), $itemOrderNote->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_item_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemOrderNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemOrderNoteTableMap::clearInstancePool();
            ItemOrderNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemOrderNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemOrderNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemOrderNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemOrderNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
