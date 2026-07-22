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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `notes_cust_ship_order` table.
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
 * @method     ChildNoteCustOrder|null findOne(?ConnectionInterface $con = null) Return the first ChildNoteCustOrder matching the query
 * @method     ChildNoteCustOrder findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildNoteCustOrder matching the query, or a new ChildNoteCustOrder object populated from the query conditions when no match is found
 *
 * @method     ChildNoteCustOrder|null findOneByQntype(string $QnType) Return the first ChildNoteCustOrder filtered by the QnType column
 * @method     ChildNoteCustOrder|null findOneByQntypedesc(string $QnTypeDesc) Return the first ChildNoteCustOrder filtered by the QnTypeDesc column
 * @method     ChildNoteCustOrder|null findOneByArcucustid(string $ArcuCustId) Return the first ChildNoteCustOrder filtered by the ArcuCustId column
 * @method     ChildNoteCustOrder|null findOneByArstshipid(string $ArstShipId) Return the first ChildNoteCustOrder filtered by the ArstShipId column
 * @method     ChildNoteCustOrder|null findOneByQncustpickticket(string $QnCustPickTicket) Return the first ChildNoteCustOrder filtered by the QnCustPickTicket column
 * @method     ChildNoteCustOrder|null findOneByQncustpackticket(string $QnCustPackTicket) Return the first ChildNoteCustOrder filtered by the QnCustPackTicket column
 * @method     ChildNoteCustOrder|null findOneByQncustinvoice(string $QnCustInvoice) Return the first ChildNoteCustOrder filtered by the QnCustInvoice column
 * @method     ChildNoteCustOrder|null findOneByQncustacknow(string $QnCustAcknow) Return the first ChildNoteCustOrder filtered by the QnCustAcknow column
 * @method     ChildNoteCustOrder|null findOneByQnseq(int $QnSeq) Return the first ChildNoteCustOrder filtered by the QnSeq column
 * @method     ChildNoteCustOrder|null findOneByQnnote(string $QnNote) Return the first ChildNoteCustOrder filtered by the QnNote column
 * @method     ChildNoteCustOrder|null findOneByQnkey2(string $QnKey2) Return the first ChildNoteCustOrder filtered by the QnKey2 column
 * @method     ChildNoteCustOrder|null findOneByQnform(string $QnForm) Return the first ChildNoteCustOrder filtered by the QnForm column
 * @method     ChildNoteCustOrder|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteCustOrder filtered by the DateUpdtd column
 * @method     ChildNoteCustOrder|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteCustOrder filtered by the TimeUpdtd column
 * @method     ChildNoteCustOrder|null findOneByDummy(string $dummy) Return the first ChildNoteCustOrder filtered by the dummy column
 *
 * @method     ChildNoteCustOrder requirePk($key, ?ConnectionInterface $con = null) Return the ChildNoteCustOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteCustOrder requireOne(?ConnectionInterface $con = null) Return the first ChildNoteCustOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildNoteCustOrder[]|Collection find(?ConnectionInterface $con = null) Return ChildNoteCustOrder objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> find(?ConnectionInterface $con = null) Return ChildNoteCustOrder objects based on current ModelCriteria
 *
 * @method     ChildNoteCustOrder[]|Collection findByQntype(string|array<string> $QnType) Return ChildNoteCustOrder objects filtered by the QnType column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQntype(string|array<string> $QnType) Return ChildNoteCustOrder objects filtered by the QnType column
 * @method     ChildNoteCustOrder[]|Collection findByQntypedesc(string|array<string> $QnTypeDesc) Return ChildNoteCustOrder objects filtered by the QnTypeDesc column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQntypedesc(string|array<string> $QnTypeDesc) Return ChildNoteCustOrder objects filtered by the QnTypeDesc column
 * @method     ChildNoteCustOrder[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildNoteCustOrder objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByArcucustid(string|array<string> $ArcuCustId) Return ChildNoteCustOrder objects filtered by the ArcuCustId column
 * @method     ChildNoteCustOrder[]|Collection findByArstshipid(string|array<string> $ArstShipId) Return ChildNoteCustOrder objects filtered by the ArstShipId column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByArstshipid(string|array<string> $ArstShipId) Return ChildNoteCustOrder objects filtered by the ArstShipId column
 * @method     ChildNoteCustOrder[]|Collection findByQncustpickticket(string|array<string> $QnCustPickTicket) Return ChildNoteCustOrder objects filtered by the QnCustPickTicket column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQncustpickticket(string|array<string> $QnCustPickTicket) Return ChildNoteCustOrder objects filtered by the QnCustPickTicket column
 * @method     ChildNoteCustOrder[]|Collection findByQncustpackticket(string|array<string> $QnCustPackTicket) Return ChildNoteCustOrder objects filtered by the QnCustPackTicket column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQncustpackticket(string|array<string> $QnCustPackTicket) Return ChildNoteCustOrder objects filtered by the QnCustPackTicket column
 * @method     ChildNoteCustOrder[]|Collection findByQncustinvoice(string|array<string> $QnCustInvoice) Return ChildNoteCustOrder objects filtered by the QnCustInvoice column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQncustinvoice(string|array<string> $QnCustInvoice) Return ChildNoteCustOrder objects filtered by the QnCustInvoice column
 * @method     ChildNoteCustOrder[]|Collection findByQncustacknow(string|array<string> $QnCustAcknow) Return ChildNoteCustOrder objects filtered by the QnCustAcknow column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQncustacknow(string|array<string> $QnCustAcknow) Return ChildNoteCustOrder objects filtered by the QnCustAcknow column
 * @method     ChildNoteCustOrder[]|Collection findByQnseq(int|array<int> $QnSeq) Return ChildNoteCustOrder objects filtered by the QnSeq column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQnseq(int|array<int> $QnSeq) Return ChildNoteCustOrder objects filtered by the QnSeq column
 * @method     ChildNoteCustOrder[]|Collection findByQnnote(string|array<string> $QnNote) Return ChildNoteCustOrder objects filtered by the QnNote column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQnnote(string|array<string> $QnNote) Return ChildNoteCustOrder objects filtered by the QnNote column
 * @method     ChildNoteCustOrder[]|Collection findByQnkey2(string|array<string> $QnKey2) Return ChildNoteCustOrder objects filtered by the QnKey2 column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQnkey2(string|array<string> $QnKey2) Return ChildNoteCustOrder objects filtered by the QnKey2 column
 * @method     ChildNoteCustOrder[]|Collection findByQnform(string|array<string> $QnForm) Return ChildNoteCustOrder objects filtered by the QnForm column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByQnform(string|array<string> $QnForm) Return ChildNoteCustOrder objects filtered by the QnForm column
 * @method     ChildNoteCustOrder[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildNoteCustOrder objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildNoteCustOrder objects filtered by the DateUpdtd column
 * @method     ChildNoteCustOrder[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildNoteCustOrder objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildNoteCustOrder objects filtered by the TimeUpdtd column
 * @method     ChildNoteCustOrder[]|Collection findByDummy(string|array<string> $dummy) Return ChildNoteCustOrder objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildNoteCustOrder> findByDummy(string|array<string> $dummy) Return ChildNoteCustOrder objects filtered by the dummy column
 *
 * @method     ChildNoteCustOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildNoteCustOrder> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class NoteCustOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\NoteCustOrderQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\NoteCustOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildNoteCustOrderQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildNoteCustOrderQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNTYPE, $qntype, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * $query->filterByArstshipid(['foo', 'bar']); // WHERE ArstShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NoteCustOrderTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnCustPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustpickticket('fooValue');   // WHERE QnCustPickTicket = 'fooValue'
     * $query->filterByQncustpickticket('%fooValue%', Criteria::LIKE); // WHERE QnCustPickTicket LIKE '%fooValue%'
     * $query->filterByQncustpickticket(['foo', 'bar']); // WHERE QnCustPickTicket IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qncustpickticket The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQncustpickticket($qncustpickticket = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTPICKTICKET, $qncustpickticket, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnCustPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustpackticket('fooValue');   // WHERE QnCustPackTicket = 'fooValue'
     * $query->filterByQncustpackticket('%fooValue%', Criteria::LIKE); // WHERE QnCustPackTicket LIKE '%fooValue%'
     * $query->filterByQncustpackticket(['foo', 'bar']); // WHERE QnCustPackTicket IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qncustpackticket The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQncustpackticket($qncustpackticket = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTPACKTICKET, $qncustpackticket, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnCustInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustinvoice('fooValue');   // WHERE QnCustInvoice = 'fooValue'
     * $query->filterByQncustinvoice('%fooValue%', Criteria::LIKE); // WHERE QnCustInvoice LIKE '%fooValue%'
     * $query->filterByQncustinvoice(['foo', 'bar']); // WHERE QnCustInvoice IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qncustinvoice The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQncustinvoice($qncustinvoice = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTINVOICE, $qncustinvoice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnCustAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByQncustacknow('fooValue');   // WHERE QnCustAcknow = 'fooValue'
     * $query->filterByQncustacknow('%fooValue%', Criteria::LIKE); // WHERE QnCustAcknow LIKE '%fooValue%'
     * $query->filterByQncustacknow(['foo', 'bar']); // WHERE QnCustAcknow IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qncustacknow The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQncustacknow($qncustacknow = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qncustacknow)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNCUSTACKNOW, $qncustacknow, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNSEQ, $qnseq, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNNOTE, $qnnote, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNKEY2, $qnkey2, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_QNFORM, $qnform, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(NoteCustOrderTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(NoteCustOrderTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, ?string $comparison = null)
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
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomerShipto(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @param callable(\CustomerShiptoQuery):\CustomerShiptoQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerShiptoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useCustomerShiptoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CustomerShipto table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerShiptoQuery The inner query object of the EXISTS statement
     */
    public function useCustomerShiptoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT EXISTS query.
     *
     * @see useCustomerShiptoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerShiptoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerShiptoQuery The inner query object of the IN statement
     */
    public function useInCustomerShiptoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT IN query.
     *
     * @see useCustomerShiptoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerShiptoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildNoteCustOrder $noteCustOrder Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
