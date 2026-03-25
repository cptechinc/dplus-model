<?php

namespace Base;

use \RcyclReceipt as ChildRcyclReceipt;
use \RcyclReceiptQuery as ChildRcyclReceiptQuery;
use \Exception;
use \PDO;
use Map\RcyclReceiptTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'rcycl_head' table.
 *
 *
 *
 * @method     ChildRcyclReceiptQuery orderByRcyhdrcptbulk($order = Criteria::ASC) Order by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptQuery orderByRcyhdcntrlnbr($order = Criteria::ASC) Order by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildRcyclReceiptQuery orderByArtbgenrid($order = Criteria::ASC) Order by the ArtbGenrId column
 * @method     ChildRcyclReceiptQuery orderByRcyhdbolnbr($order = Criteria::ASC) Order by the RcyhdBolNbr column
 * @method     ChildRcyclReceiptQuery orderByRcyhdrcptdate($order = Criteria::ASC) Order by the RcyhdRcptDate column
 * @method     ChildRcyclReceiptQuery orderByRcyhdstatus($order = Criteria::ASC) Order by the RcyhdStatus column
 * @method     ChildRcyclReceiptQuery orderByRcyhdenteredby($order = Criteria::ASC) Order by the RcyhdEnteredBy column
 * @method     ChildRcyclReceiptQuery orderByRcyhdentereddate($order = Criteria::ASC) Order by the RcyhdEnteredDate column
 * @method     ChildRcyclReceiptQuery orderByRcyhdenteredtime($order = Criteria::ASC) Order by the RcyhdEnteredTime column
 * @method     ChildRcyclReceiptQuery orderByRcyhdclosedby($order = Criteria::ASC) Order by the RcyhdClosedBy column
 * @method     ChildRcyclReceiptQuery orderByRcyhdcloseddate($order = Criteria::ASC) Order by the RcyhdClosedDate column
 * @method     ChildRcyclReceiptQuery orderByRcyhdclosedtime($order = Criteria::ASC) Order by the RcyhdClosedTime column
 * @method     ChildRcyclReceiptQuery orderByRcyhdwhse($order = Criteria::ASC) Order by the RcyhdWhse column
 * @method     ChildRcyclReceiptQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildRcyclReceiptQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildRcyclReceiptQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildRcyclReceiptQuery groupByRcyhdrcptbulk() Group by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptQuery groupByRcyhdcntrlnbr() Group by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildRcyclReceiptQuery groupByArtbgenrid() Group by the ArtbGenrId column
 * @method     ChildRcyclReceiptQuery groupByRcyhdbolnbr() Group by the RcyhdBolNbr column
 * @method     ChildRcyclReceiptQuery groupByRcyhdrcptdate() Group by the RcyhdRcptDate column
 * @method     ChildRcyclReceiptQuery groupByRcyhdstatus() Group by the RcyhdStatus column
 * @method     ChildRcyclReceiptQuery groupByRcyhdenteredby() Group by the RcyhdEnteredBy column
 * @method     ChildRcyclReceiptQuery groupByRcyhdentereddate() Group by the RcyhdEnteredDate column
 * @method     ChildRcyclReceiptQuery groupByRcyhdenteredtime() Group by the RcyhdEnteredTime column
 * @method     ChildRcyclReceiptQuery groupByRcyhdclosedby() Group by the RcyhdClosedBy column
 * @method     ChildRcyclReceiptQuery groupByRcyhdcloseddate() Group by the RcyhdClosedDate column
 * @method     ChildRcyclReceiptQuery groupByRcyhdclosedtime() Group by the RcyhdClosedTime column
 * @method     ChildRcyclReceiptQuery groupByRcyhdwhse() Group by the RcyhdWhse column
 * @method     ChildRcyclReceiptQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildRcyclReceiptQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildRcyclReceiptQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildRcyclReceiptQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRcyclReceiptQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRcyclReceiptQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRcyclReceiptQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRcyclReceiptQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRcyclReceiptQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRcyclReceiptQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildRcyclReceiptQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildRcyclReceiptQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildRcyclReceiptQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildRcyclReceiptQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildRcyclReceiptQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildRcyclReceiptQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildRcyclReceiptQuery leftJoinRcyclGenerator($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclGenerator relation
 * @method     ChildRcyclReceiptQuery rightJoinRcyclGenerator($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclGenerator relation
 * @method     ChildRcyclReceiptQuery innerJoinRcyclGenerator($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclGenerator relation
 *
 * @method     ChildRcyclReceiptQuery joinWithRcyclGenerator($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclGenerator relation
 *
 * @method     ChildRcyclReceiptQuery leftJoinWithRcyclGenerator() Adds a LEFT JOIN clause and with to the query using the RcyclGenerator relation
 * @method     ChildRcyclReceiptQuery rightJoinWithRcyclGenerator() Adds a RIGHT JOIN clause and with to the query using the RcyclGenerator relation
 * @method     ChildRcyclReceiptQuery innerJoinWithRcyclGenerator() Adds a INNER JOIN clause and with to the query using the RcyclGenerator relation
 *
 * @method     ChildRcyclReceiptQuery leftJoinRcyclReceiptDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptQuery rightJoinRcyclReceiptDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptQuery innerJoinRcyclReceiptDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclReceiptDetail relation
 *
 * @method     ChildRcyclReceiptQuery joinWithRcyclReceiptDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclReceiptDetail relation
 *
 * @method     ChildRcyclReceiptQuery leftJoinWithRcyclReceiptDetail() Adds a LEFT JOIN clause and with to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptQuery rightJoinWithRcyclReceiptDetail() Adds a RIGHT JOIN clause and with to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptQuery innerJoinWithRcyclReceiptDetail() Adds a INNER JOIN clause and with to the query using the RcyclReceiptDetail relation
 *
 * @method     \CustomerQuery|\RcyclGeneratorQuery|\RcyclReceiptDetailQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildRcyclReceipt findOne(ConnectionInterface $con = null) Return the first ChildRcyclReceipt matching the query
 * @method     ChildRcyclReceipt findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRcyclReceipt matching the query, or a new ChildRcyclReceipt object populated from the query conditions when no match is found
 *
 * @method     ChildRcyclReceipt findOneByRcyhdrcptbulk(string $RcyhdRcptBulk) Return the first ChildRcyclReceipt filtered by the RcyhdRcptBulk column
 * @method     ChildRcyclReceipt findOneByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return the first ChildRcyclReceipt filtered by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceipt findOneByArcucustid(string $ArcuCustId) Return the first ChildRcyclReceipt filtered by the ArcuCustId column
 * @method     ChildRcyclReceipt findOneByArtbgenrid(string $ArtbGenrId) Return the first ChildRcyclReceipt filtered by the ArtbGenrId column
 * @method     ChildRcyclReceipt findOneByRcyhdbolnbr(string $RcyhdBolNbr) Return the first ChildRcyclReceipt filtered by the RcyhdBolNbr column
 * @method     ChildRcyclReceipt findOneByRcyhdrcptdate(string $RcyhdRcptDate) Return the first ChildRcyclReceipt filtered by the RcyhdRcptDate column
 * @method     ChildRcyclReceipt findOneByRcyhdstatus(string $RcyhdStatus) Return the first ChildRcyclReceipt filtered by the RcyhdStatus column
 * @method     ChildRcyclReceipt findOneByRcyhdenteredby(string $RcyhdEnteredBy) Return the first ChildRcyclReceipt filtered by the RcyhdEnteredBy column
 * @method     ChildRcyclReceipt findOneByRcyhdentereddate(string $RcyhdEnteredDate) Return the first ChildRcyclReceipt filtered by the RcyhdEnteredDate column
 * @method     ChildRcyclReceipt findOneByRcyhdenteredtime(string $RcyhdEnteredTime) Return the first ChildRcyclReceipt filtered by the RcyhdEnteredTime column
 * @method     ChildRcyclReceipt findOneByRcyhdclosedby(string $RcyhdClosedBy) Return the first ChildRcyclReceipt filtered by the RcyhdClosedBy column
 * @method     ChildRcyclReceipt findOneByRcyhdcloseddate(string $RcyhdClosedDate) Return the first ChildRcyclReceipt filtered by the RcyhdClosedDate column
 * @method     ChildRcyclReceipt findOneByRcyhdclosedtime(string $RcyhdClosedTime) Return the first ChildRcyclReceipt filtered by the RcyhdClosedTime column
 * @method     ChildRcyclReceipt findOneByRcyhdwhse(string $RcyhdWhse) Return the first ChildRcyclReceipt filtered by the RcyhdWhse column
 * @method     ChildRcyclReceipt findOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceipt filtered by the DateUpdtd column
 * @method     ChildRcyclReceipt findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceipt filtered by the TimeUpdtd column
 * @method     ChildRcyclReceipt findOneByDummy(string $dummy) Return the first ChildRcyclReceipt filtered by the dummy column *

 * @method     ChildRcyclReceipt requirePk($key, ConnectionInterface $con = null) Return the ChildRcyclReceipt by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOne(ConnectionInterface $con = null) Return the first ChildRcyclReceipt matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceipt requireOneByRcyhdrcptbulk(string $RcyhdRcptBulk) Return the first ChildRcyclReceipt filtered by the RcyhdRcptBulk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return the first ChildRcyclReceipt filtered by the RcyhdCntrlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByArcucustid(string $ArcuCustId) Return the first ChildRcyclReceipt filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByArtbgenrid(string $ArtbGenrId) Return the first ChildRcyclReceipt filtered by the ArtbGenrId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdbolnbr(string $RcyhdBolNbr) Return the first ChildRcyclReceipt filtered by the RcyhdBolNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdrcptdate(string $RcyhdRcptDate) Return the first ChildRcyclReceipt filtered by the RcyhdRcptDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdstatus(string $RcyhdStatus) Return the first ChildRcyclReceipt filtered by the RcyhdStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdenteredby(string $RcyhdEnteredBy) Return the first ChildRcyclReceipt filtered by the RcyhdEnteredBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdentereddate(string $RcyhdEnteredDate) Return the first ChildRcyclReceipt filtered by the RcyhdEnteredDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdenteredtime(string $RcyhdEnteredTime) Return the first ChildRcyclReceipt filtered by the RcyhdEnteredTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdclosedby(string $RcyhdClosedBy) Return the first ChildRcyclReceipt filtered by the RcyhdClosedBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdcloseddate(string $RcyhdClosedDate) Return the first ChildRcyclReceipt filtered by the RcyhdClosedDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdclosedtime(string $RcyhdClosedTime) Return the first ChildRcyclReceipt filtered by the RcyhdClosedTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByRcyhdwhse(string $RcyhdWhse) Return the first ChildRcyclReceipt filtered by the RcyhdWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceipt filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceipt filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceipt requireOneByDummy(string $dummy) Return the first ChildRcyclReceipt filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceipt[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildRcyclReceipt objects based on current ModelCriteria
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdrcptbulk(string $RcyhdRcptBulk) Return ChildRcyclReceipt objects filtered by the RcyhdRcptBulk column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return ChildRcyclReceipt objects filtered by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildRcyclReceipt objects filtered by the ArcuCustId column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByArtbgenrid(string $ArtbGenrId) Return ChildRcyclReceipt objects filtered by the ArtbGenrId column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdbolnbr(string $RcyhdBolNbr) Return ChildRcyclReceipt objects filtered by the RcyhdBolNbr column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdrcptdate(string $RcyhdRcptDate) Return ChildRcyclReceipt objects filtered by the RcyhdRcptDate column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdstatus(string $RcyhdStatus) Return ChildRcyclReceipt objects filtered by the RcyhdStatus column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdenteredby(string $RcyhdEnteredBy) Return ChildRcyclReceipt objects filtered by the RcyhdEnteredBy column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdentereddate(string $RcyhdEnteredDate) Return ChildRcyclReceipt objects filtered by the RcyhdEnteredDate column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdenteredtime(string $RcyhdEnteredTime) Return ChildRcyclReceipt objects filtered by the RcyhdEnteredTime column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdclosedby(string $RcyhdClosedBy) Return ChildRcyclReceipt objects filtered by the RcyhdClosedBy column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdcloseddate(string $RcyhdClosedDate) Return ChildRcyclReceipt objects filtered by the RcyhdClosedDate column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdclosedtime(string $RcyhdClosedTime) Return ChildRcyclReceipt objects filtered by the RcyhdClosedTime column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByRcyhdwhse(string $RcyhdWhse) Return ChildRcyclReceipt objects filtered by the RcyhdWhse column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildRcyclReceipt objects filtered by the DateUpdtd column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildRcyclReceipt objects filtered by the TimeUpdtd column
 * @method     ChildRcyclReceipt[]|ObjectCollection findByDummy(string $dummy) Return ChildRcyclReceipt objects filtered by the dummy column
 * @method     ChildRcyclReceipt[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RcyclReceiptQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RcyclReceiptQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\RcyclReceipt', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRcyclReceiptQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRcyclReceiptQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRcyclReceiptQuery) {
            return $criteria;
        }
        $query = new ChildRcyclReceiptQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$RcyhdRcptBulk, $RcyhdCntrlNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildRcyclReceipt|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RcyclReceiptTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildRcyclReceipt A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT RcyhdRcptBulk, RcyhdCntrlNbr, ArcuCustId, ArtbGenrId, RcyhdBolNbr, RcyhdRcptDate, RcyhdStatus, RcyhdEnteredBy, RcyhdEnteredDate, RcyhdEnteredTime, RcyhdClosedBy, RcyhdClosedDate, RcyhdClosedTime, RcyhdWhse, DateUpdtd, TimeUpdtd, dummy FROM rcycl_head WHERE RcyhdRcptBulk = :p0 AND RcyhdCntrlNbr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildRcyclReceipt $obj */
            $obj = new ChildRcyclReceipt();
            $obj->hydrate($row);
            RcyclReceiptTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildRcyclReceipt|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the RcyhdRcptBulk column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdrcptbulk('fooValue');   // WHERE RcyhdRcptBulk = 'fooValue'
     * $query->filterByRcyhdrcptbulk('%fooValue%', Criteria::LIKE); // WHERE RcyhdRcptBulk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdrcptbulk The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdrcptbulk($rcyhdrcptbulk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdrcptbulk)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $rcyhdrcptbulk, $comparison);
    }

    /**
     * Filter the query on the RcyhdCntrlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdcntrlnbr(1234); // WHERE RcyhdCntrlNbr = 1234
     * $query->filterByRcyhdcntrlnbr(array(12, 34)); // WHERE RcyhdCntrlNbr IN (12, 34)
     * $query->filterByRcyhdcntrlnbr(array('min' => 12)); // WHERE RcyhdCntrlNbr > 12
     * </code>
     *
     * @param     mixed $rcyhdcntrlnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdcntrlnbr($rcyhdcntrlnbr = null, $comparison = null)
    {
        if (is_array($rcyhdcntrlnbr)) {
            $useMinMax = false;
            if (isset($rcyhdcntrlnbr['min'])) {
                $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcyhdcntrlnbr['max'])) {
                $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr, $comparison);
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
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArtbGenrId column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbgenrid('fooValue');   // WHERE ArtbGenrId = 'fooValue'
     * $query->filterByArtbgenrid('%fooValue%', Criteria::LIKE); // WHERE ArtbGenrId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbgenrid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByArtbgenrid($artbgenrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbgenrid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_ARTBGENRID, $artbgenrid, $comparison);
    }

    /**
     * Filter the query on the RcyhdBolNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdbolnbr('fooValue');   // WHERE RcyhdBolNbr = 'fooValue'
     * $query->filterByRcyhdbolnbr('%fooValue%', Criteria::LIKE); // WHERE RcyhdBolNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdbolnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdbolnbr($rcyhdbolnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdbolnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDBOLNBR, $rcyhdbolnbr, $comparison);
    }

    /**
     * Filter the query on the RcyhdRcptDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdrcptdate('fooValue');   // WHERE RcyhdRcptDate = 'fooValue'
     * $query->filterByRcyhdrcptdate('%fooValue%', Criteria::LIKE); // WHERE RcyhdRcptDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdrcptdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdrcptdate($rcyhdrcptdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdrcptdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDRCPTDATE, $rcyhdrcptdate, $comparison);
    }

    /**
     * Filter the query on the RcyhdStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdstatus('fooValue');   // WHERE RcyhdStatus = 'fooValue'
     * $query->filterByRcyhdstatus('%fooValue%', Criteria::LIKE); // WHERE RcyhdStatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdstatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdstatus($rcyhdstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdstatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDSTATUS, $rcyhdstatus, $comparison);
    }

    /**
     * Filter the query on the RcyhdEnteredBy column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdenteredby('fooValue');   // WHERE RcyhdEnteredBy = 'fooValue'
     * $query->filterByRcyhdenteredby('%fooValue%', Criteria::LIKE); // WHERE RcyhdEnteredBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdenteredby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdenteredby($rcyhdenteredby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdenteredby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDENTEREDBY, $rcyhdenteredby, $comparison);
    }

    /**
     * Filter the query on the RcyhdEnteredDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdentereddate('fooValue');   // WHERE RcyhdEnteredDate = 'fooValue'
     * $query->filterByRcyhdentereddate('%fooValue%', Criteria::LIKE); // WHERE RcyhdEnteredDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdentereddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdentereddate($rcyhdentereddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdentereddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDENTEREDDATE, $rcyhdentereddate, $comparison);
    }

    /**
     * Filter the query on the RcyhdEnteredTime column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdenteredtime('fooValue');   // WHERE RcyhdEnteredTime = 'fooValue'
     * $query->filterByRcyhdenteredtime('%fooValue%', Criteria::LIKE); // WHERE RcyhdEnteredTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdenteredtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdenteredtime($rcyhdenteredtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdenteredtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDENTEREDTIME, $rcyhdenteredtime, $comparison);
    }

    /**
     * Filter the query on the RcyhdClosedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdclosedby('fooValue');   // WHERE RcyhdClosedBy = 'fooValue'
     * $query->filterByRcyhdclosedby('%fooValue%', Criteria::LIKE); // WHERE RcyhdClosedBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdclosedby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdclosedby($rcyhdclosedby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdclosedby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCLOSEDBY, $rcyhdclosedby, $comparison);
    }

    /**
     * Filter the query on the RcyhdClosedDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdcloseddate('fooValue');   // WHERE RcyhdClosedDate = 'fooValue'
     * $query->filterByRcyhdcloseddate('%fooValue%', Criteria::LIKE); // WHERE RcyhdClosedDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdcloseddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdcloseddate($rcyhdcloseddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdcloseddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCLOSEDDATE, $rcyhdcloseddate, $comparison);
    }

    /**
     * Filter the query on the RcyhdClosedTime column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdclosedtime('fooValue');   // WHERE RcyhdClosedTime = 'fooValue'
     * $query->filterByRcyhdclosedtime('%fooValue%', Criteria::LIKE); // WHERE RcyhdClosedTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdclosedtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdclosedtime($rcyhdclosedtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdclosedtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCLOSEDTIME, $rcyhdclosedtime, $comparison);
    }

    /**
     * Filter the query on the RcyhdWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdwhse('fooValue');   // WHERE RcyhdWhse = 'fooValue'
     * $query->filterByRcyhdwhse('%fooValue%', Criteria::LIKE); // WHERE RcyhdWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcyhdwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyhdwhse($rcyhdwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDWHSE, $rcyhdwhse, $comparison);
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
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(RcyclReceiptTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RcyclReceiptTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
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
     * Filter the query by a related \RcyclGenerator object
     *
     * @param \RcyclGenerator|ObjectCollection $rcyclGenerator The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyclGenerator($rcyclGenerator, $comparison = null)
    {
        if ($rcyclGenerator instanceof \RcyclGenerator) {
            return $this
                ->addUsingAlias(RcyclReceiptTableMap::COL_ARTBGENRID, $rcyclGenerator->getArtbgenrid(), $comparison);
        } elseif ($rcyclGenerator instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RcyclReceiptTableMap::COL_ARTBGENRID, $rcyclGenerator->toKeyValue('PrimaryKey', 'Artbgenrid'), $comparison);
        } else {
            throw new PropelException('filterByRcyclGenerator() only accepts arguments of type \RcyclGenerator or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclGenerator relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function joinRcyclGenerator($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RcyclGenerator');

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
            $this->addJoinObject($join, 'RcyclGenerator');
        }

        return $this;
    }

    /**
     * Use the RcyclGenerator relation RcyclGenerator object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RcyclGeneratorQuery A secondary query class using the current class as primary query
     */
    public function useRcyclGeneratorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRcyclGenerator($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RcyclGenerator', '\RcyclGeneratorQuery');
    }

    /**
     * Filter the query by a related \RcyclReceiptDetail object
     *
     * @param \RcyclReceiptDetail|ObjectCollection $rcyclReceiptDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function filterByRcyclReceiptDetail($rcyclReceiptDetail, $comparison = null)
    {
        if ($rcyclReceiptDetail instanceof \RcyclReceiptDetail) {
            return $this
                ->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR, $rcyclReceiptDetail->getRcyhdcntrlnbr(), $comparison)
                ->addUsingAlias(RcyclReceiptTableMap::COL_RCYHDRCPTBULK, $rcyclReceiptDetail->getRcyhdrcptbulk(), $comparison);
        } else {
            throw new PropelException('filterByRcyclReceiptDetail() only accepts arguments of type \RcyclReceiptDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceiptDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function joinRcyclReceiptDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RcyclReceiptDetail');

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
            $this->addJoinObject($join, 'RcyclReceiptDetail');
        }

        return $this;
    }

    /**
     * Use the RcyclReceiptDetail relation RcyclReceiptDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RcyclReceiptDetailQuery A secondary query class using the current class as primary query
     */
    public function useRcyclReceiptDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRcyclReceiptDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RcyclReceiptDetail', '\RcyclReceiptDetailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildRcyclReceipt $rcyclReceipt Object to remove from the list of results
     *
     * @return $this|ChildRcyclReceiptQuery The current query, for fluid interface
     */
    public function prune($rcyclReceipt = null)
    {
        if ($rcyclReceipt) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RcyclReceiptTableMap::COL_RCYHDRCPTBULK), $rcyclReceipt->getRcyhdrcptbulk(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RcyclReceiptTableMap::COL_RCYHDCNTRLNBR), $rcyclReceipt->getRcyhdcntrlnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the rcycl_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RcyclReceiptTableMap::clearInstancePool();
            RcyclReceiptTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RcyclReceiptTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RcyclReceiptTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RcyclReceiptTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RcyclReceiptQuery
