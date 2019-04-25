<?php

namespace Base;

use \ArInvoice as ChildArInvoice;
use \ArInvoiceQuery as ChildArInvoiceQuery;
use \Exception;
use \PDO;
use Map\ArInvoiceTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_inv' table.
 *
 *
 *
 * @method     ChildArInvoiceQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArInvoiceQuery orderByArininvnbr($order = Criteria::ASC) Order by the ArinInvNbr column
 * @method     ChildArInvoiceQuery orderByArininvseq($order = Criteria::ASC) Order by the ArinInvSeq column
 * @method     ChildArInvoiceQuery orderByArintype($order = Criteria::ASC) Order by the ArinType column
 * @method     ChildArInvoiceQuery orderByArinseq($order = Criteria::ASC) Order by the ArinSeq column
 * @method     ChildArInvoiceQuery orderByArinhold($order = Criteria::ASC) Order by the ArinHold column
 * @method     ChildArInvoiceQuery orderByArininvdate($order = Criteria::ASC) Order by the ArinInvDate column
 * @method     ChildArInvoiceQuery orderByArindiscdate($order = Criteria::ASC) Order by the ArinDiscDate column
 * @method     ChildArInvoiceQuery orderByArinduedate($order = Criteria::ASC) Order by the ArinDueDate column
 * @method     ChildArInvoiceQuery orderByArintotamt($order = Criteria::ASC) Order by the ArinTotAmt column
 * @method     ChildArInvoiceQuery orderByArindiscamt($order = Criteria::ASC) Order by the ArinDiscAmt column
 * @method     ChildArInvoiceQuery orderByArinchknbr($order = Criteria::ASC) Order by the ArinChkNbr column
 * @method     ChildArInvoiceQuery orderByArincustpo($order = Criteria::ASC) Order by the ArinCustPo column
 * @method     ChildArInvoiceQuery orderByArintermcode($order = Criteria::ASC) Order by the ArinTermCode column
 * @method     ChildArInvoiceQuery orderByArinfrtallow($order = Criteria::ASC) Order by the ArinFrtAllow column
 * @method     ChildArInvoiceQuery orderByArinordrnbr($order = Criteria::ASC) Order by the ArinOrdrNbr column
 * @method     ChildArInvoiceQuery orderByArincomrate($order = Criteria::ASC) Order by the ArinComRate column
 * @method     ChildArInvoiceQuery orderByArinsalesamt($order = Criteria::ASC) Order by the ArinSalesAmt column
 * @method     ChildArInvoiceQuery orderByArinorigwhse($order = Criteria::ASC) Order by the ArinOrigWhse column
 * @method     ChildArInvoiceQuery orderByArinwriteoffdate($order = Criteria::ASC) Order by the ArinWriteOffDate column
 * @method     ChildArInvoiceQuery orderByArinwriteoffamt($order = Criteria::ASC) Order by the ArinWriteOffAmt column
 * @method     ChildArInvoiceQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArInvoiceQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArInvoiceQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArInvoiceQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArInvoiceQuery groupByArininvnbr() Group by the ArinInvNbr column
 * @method     ChildArInvoiceQuery groupByArininvseq() Group by the ArinInvSeq column
 * @method     ChildArInvoiceQuery groupByArintype() Group by the ArinType column
 * @method     ChildArInvoiceQuery groupByArinseq() Group by the ArinSeq column
 * @method     ChildArInvoiceQuery groupByArinhold() Group by the ArinHold column
 * @method     ChildArInvoiceQuery groupByArininvdate() Group by the ArinInvDate column
 * @method     ChildArInvoiceQuery groupByArindiscdate() Group by the ArinDiscDate column
 * @method     ChildArInvoiceQuery groupByArinduedate() Group by the ArinDueDate column
 * @method     ChildArInvoiceQuery groupByArintotamt() Group by the ArinTotAmt column
 * @method     ChildArInvoiceQuery groupByArindiscamt() Group by the ArinDiscAmt column
 * @method     ChildArInvoiceQuery groupByArinchknbr() Group by the ArinChkNbr column
 * @method     ChildArInvoiceQuery groupByArincustpo() Group by the ArinCustPo column
 * @method     ChildArInvoiceQuery groupByArintermcode() Group by the ArinTermCode column
 * @method     ChildArInvoiceQuery groupByArinfrtallow() Group by the ArinFrtAllow column
 * @method     ChildArInvoiceQuery groupByArinordrnbr() Group by the ArinOrdrNbr column
 * @method     ChildArInvoiceQuery groupByArincomrate() Group by the ArinComRate column
 * @method     ChildArInvoiceQuery groupByArinsalesamt() Group by the ArinSalesAmt column
 * @method     ChildArInvoiceQuery groupByArinorigwhse() Group by the ArinOrigWhse column
 * @method     ChildArInvoiceQuery groupByArinwriteoffdate() Group by the ArinWriteOffDate column
 * @method     ChildArInvoiceQuery groupByArinwriteoffamt() Group by the ArinWriteOffAmt column
 * @method     ChildArInvoiceQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArInvoiceQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArInvoiceQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArInvoiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArInvoiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArInvoiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArInvoiceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArInvoiceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArInvoiceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArInvoice findOne(ConnectionInterface $con = null) Return the first ChildArInvoice matching the query
 * @method     ChildArInvoice findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArInvoice matching the query, or a new ChildArInvoice object populated from the query conditions when no match is found
 *
 * @method     ChildArInvoice findOneByArcucustid(string $ArcuCustId) Return the first ChildArInvoice filtered by the ArcuCustId column
 * @method     ChildArInvoice findOneByArininvnbr(string $ArinInvNbr) Return the first ChildArInvoice filtered by the ArinInvNbr column
 * @method     ChildArInvoice findOneByArininvseq(int $ArinInvSeq) Return the first ChildArInvoice filtered by the ArinInvSeq column
 * @method     ChildArInvoice findOneByArintype(string $ArinType) Return the first ChildArInvoice filtered by the ArinType column
 * @method     ChildArInvoice findOneByArinseq(int $ArinSeq) Return the first ChildArInvoice filtered by the ArinSeq column
 * @method     ChildArInvoice findOneByArinhold(string $ArinHold) Return the first ChildArInvoice filtered by the ArinHold column
 * @method     ChildArInvoice findOneByArininvdate(string $ArinInvDate) Return the first ChildArInvoice filtered by the ArinInvDate column
 * @method     ChildArInvoice findOneByArindiscdate(string $ArinDiscDate) Return the first ChildArInvoice filtered by the ArinDiscDate column
 * @method     ChildArInvoice findOneByArinduedate(string $ArinDueDate) Return the first ChildArInvoice filtered by the ArinDueDate column
 * @method     ChildArInvoice findOneByArintotamt(string $ArinTotAmt) Return the first ChildArInvoice filtered by the ArinTotAmt column
 * @method     ChildArInvoice findOneByArindiscamt(string $ArinDiscAmt) Return the first ChildArInvoice filtered by the ArinDiscAmt column
 * @method     ChildArInvoice findOneByArinchknbr(string $ArinChkNbr) Return the first ChildArInvoice filtered by the ArinChkNbr column
 * @method     ChildArInvoice findOneByArincustpo(string $ArinCustPo) Return the first ChildArInvoice filtered by the ArinCustPo column
 * @method     ChildArInvoice findOneByArintermcode(string $ArinTermCode) Return the first ChildArInvoice filtered by the ArinTermCode column
 * @method     ChildArInvoice findOneByArinfrtallow(string $ArinFrtAllow) Return the first ChildArInvoice filtered by the ArinFrtAllow column
 * @method     ChildArInvoice findOneByArinordrnbr(string $ArinOrdrNbr) Return the first ChildArInvoice filtered by the ArinOrdrNbr column
 * @method     ChildArInvoice findOneByArincomrate(string $ArinComRate) Return the first ChildArInvoice filtered by the ArinComRate column
 * @method     ChildArInvoice findOneByArinsalesamt(string $ArinSalesAmt) Return the first ChildArInvoice filtered by the ArinSalesAmt column
 * @method     ChildArInvoice findOneByArinorigwhse(string $ArinOrigWhse) Return the first ChildArInvoice filtered by the ArinOrigWhse column
 * @method     ChildArInvoice findOneByArinwriteoffdate(string $ArinWriteOffDate) Return the first ChildArInvoice filtered by the ArinWriteOffDate column
 * @method     ChildArInvoice findOneByArinwriteoffamt(string $ArinWriteOffAmt) Return the first ChildArInvoice filtered by the ArinWriteOffAmt column
 * @method     ChildArInvoice findOneByDateupdtd(string $DateUpdtd) Return the first ChildArInvoice filtered by the DateUpdtd column
 * @method     ChildArInvoice findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArInvoice filtered by the TimeUpdtd column
 * @method     ChildArInvoice findOneByDummy(string $dummy) Return the first ChildArInvoice filtered by the dummy column *

 * @method     ChildArInvoice requirePk($key, ConnectionInterface $con = null) Return the ChildArInvoice by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOne(ConnectionInterface $con = null) Return the first ChildArInvoice matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArInvoice requireOneByArcucustid(string $ArcuCustId) Return the first ChildArInvoice filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArininvnbr(string $ArinInvNbr) Return the first ChildArInvoice filtered by the ArinInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArininvseq(int $ArinInvSeq) Return the first ChildArInvoice filtered by the ArinInvSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArintype(string $ArinType) Return the first ChildArInvoice filtered by the ArinType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinseq(int $ArinSeq) Return the first ChildArInvoice filtered by the ArinSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinhold(string $ArinHold) Return the first ChildArInvoice filtered by the ArinHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArininvdate(string $ArinInvDate) Return the first ChildArInvoice filtered by the ArinInvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArindiscdate(string $ArinDiscDate) Return the first ChildArInvoice filtered by the ArinDiscDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinduedate(string $ArinDueDate) Return the first ChildArInvoice filtered by the ArinDueDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArintotamt(string $ArinTotAmt) Return the first ChildArInvoice filtered by the ArinTotAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArindiscamt(string $ArinDiscAmt) Return the first ChildArInvoice filtered by the ArinDiscAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinchknbr(string $ArinChkNbr) Return the first ChildArInvoice filtered by the ArinChkNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArincustpo(string $ArinCustPo) Return the first ChildArInvoice filtered by the ArinCustPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArintermcode(string $ArinTermCode) Return the first ChildArInvoice filtered by the ArinTermCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinfrtallow(string $ArinFrtAllow) Return the first ChildArInvoice filtered by the ArinFrtAllow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinordrnbr(string $ArinOrdrNbr) Return the first ChildArInvoice filtered by the ArinOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArincomrate(string $ArinComRate) Return the first ChildArInvoice filtered by the ArinComRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinsalesamt(string $ArinSalesAmt) Return the first ChildArInvoice filtered by the ArinSalesAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinorigwhse(string $ArinOrigWhse) Return the first ChildArInvoice filtered by the ArinOrigWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinwriteoffdate(string $ArinWriteOffDate) Return the first ChildArInvoice filtered by the ArinWriteOffDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByArinwriteoffamt(string $ArinWriteOffAmt) Return the first ChildArInvoice filtered by the ArinWriteOffAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArInvoice filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArInvoice filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArInvoice requireOneByDummy(string $dummy) Return the first ChildArInvoice filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArInvoice[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArInvoice objects based on current ModelCriteria
 * @method     ChildArInvoice[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildArInvoice objects filtered by the ArcuCustId column
 * @method     ChildArInvoice[]|ObjectCollection findByArininvnbr(string $ArinInvNbr) Return ChildArInvoice objects filtered by the ArinInvNbr column
 * @method     ChildArInvoice[]|ObjectCollection findByArininvseq(int $ArinInvSeq) Return ChildArInvoice objects filtered by the ArinInvSeq column
 * @method     ChildArInvoice[]|ObjectCollection findByArintype(string $ArinType) Return ChildArInvoice objects filtered by the ArinType column
 * @method     ChildArInvoice[]|ObjectCollection findByArinseq(int $ArinSeq) Return ChildArInvoice objects filtered by the ArinSeq column
 * @method     ChildArInvoice[]|ObjectCollection findByArinhold(string $ArinHold) Return ChildArInvoice objects filtered by the ArinHold column
 * @method     ChildArInvoice[]|ObjectCollection findByArininvdate(string $ArinInvDate) Return ChildArInvoice objects filtered by the ArinInvDate column
 * @method     ChildArInvoice[]|ObjectCollection findByArindiscdate(string $ArinDiscDate) Return ChildArInvoice objects filtered by the ArinDiscDate column
 * @method     ChildArInvoice[]|ObjectCollection findByArinduedate(string $ArinDueDate) Return ChildArInvoice objects filtered by the ArinDueDate column
 * @method     ChildArInvoice[]|ObjectCollection findByArintotamt(string $ArinTotAmt) Return ChildArInvoice objects filtered by the ArinTotAmt column
 * @method     ChildArInvoice[]|ObjectCollection findByArindiscamt(string $ArinDiscAmt) Return ChildArInvoice objects filtered by the ArinDiscAmt column
 * @method     ChildArInvoice[]|ObjectCollection findByArinchknbr(string $ArinChkNbr) Return ChildArInvoice objects filtered by the ArinChkNbr column
 * @method     ChildArInvoice[]|ObjectCollection findByArincustpo(string $ArinCustPo) Return ChildArInvoice objects filtered by the ArinCustPo column
 * @method     ChildArInvoice[]|ObjectCollection findByArintermcode(string $ArinTermCode) Return ChildArInvoice objects filtered by the ArinTermCode column
 * @method     ChildArInvoice[]|ObjectCollection findByArinfrtallow(string $ArinFrtAllow) Return ChildArInvoice objects filtered by the ArinFrtAllow column
 * @method     ChildArInvoice[]|ObjectCollection findByArinordrnbr(string $ArinOrdrNbr) Return ChildArInvoice objects filtered by the ArinOrdrNbr column
 * @method     ChildArInvoice[]|ObjectCollection findByArincomrate(string $ArinComRate) Return ChildArInvoice objects filtered by the ArinComRate column
 * @method     ChildArInvoice[]|ObjectCollection findByArinsalesamt(string $ArinSalesAmt) Return ChildArInvoice objects filtered by the ArinSalesAmt column
 * @method     ChildArInvoice[]|ObjectCollection findByArinorigwhse(string $ArinOrigWhse) Return ChildArInvoice objects filtered by the ArinOrigWhse column
 * @method     ChildArInvoice[]|ObjectCollection findByArinwriteoffdate(string $ArinWriteOffDate) Return ChildArInvoice objects filtered by the ArinWriteOffDate column
 * @method     ChildArInvoice[]|ObjectCollection findByArinwriteoffamt(string $ArinWriteOffAmt) Return ChildArInvoice objects filtered by the ArinWriteOffAmt column
 * @method     ChildArInvoice[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildArInvoice objects filtered by the DateUpdtd column
 * @method     ChildArInvoice[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildArInvoice objects filtered by the TimeUpdtd column
 * @method     ChildArInvoice[]|ObjectCollection findByDummy(string $dummy) Return ChildArInvoice objects filtered by the dummy column
 * @method     ChildArInvoice[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArInvoiceQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArInvoiceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArInvoice', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArInvoiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArInvoiceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArInvoiceQuery) {
            return $criteria;
        }
        $query = new ChildArInvoiceQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$ArcuCustId, $ArinInvNbr, $ArinInvSeq, $ArinType, $ArinSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArInvoice|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArInvoiceTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]))))) {
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
     * @return ChildArInvoice A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArinInvNbr, ArinInvSeq, ArinType, ArinSeq, ArinHold, ArinInvDate, ArinDiscDate, ArinDueDate, ArinTotAmt, ArinDiscAmt, ArinChkNbr, ArinCustPo, ArinTermCode, ArinFrtAllow, ArinOrdrNbr, ArinComRate, ArinSalesAmt, ArinOrigWhse, ArinWriteOffDate, ArinWriteOffAmt, DateUpdtd, TimeUpdtd, dummy FROM ar_inv WHERE ArcuCustId = :p0 AND ArinInvNbr = :p1 AND ArinInvSeq = :p2 AND ArinType = :p3 AND ArinSeq = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildArInvoice $obj */
            $obj = new ChildArInvoice();
            $obj->hydrate($row);
            ArInvoiceTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]));
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
     * @return ChildArInvoice|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ArInvoiceTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ArInvoiceTableMap::COL_ARINTYPE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSEQ, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ArInvoiceTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArInvoiceTableMap::COL_ARININVNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ArInvoiceTableMap::COL_ARININVSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ArInvoiceTableMap::COL_ARINTYPE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ArInvoiceTableMap::COL_ARINSEQ, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
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
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArinInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArininvnbr('fooValue');   // WHERE ArinInvNbr = 'fooValue'
     * $query->filterByArininvnbr('%fooValue%', Criteria::LIKE); // WHERE ArinInvNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arininvnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArininvnbr($arininvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVNBR, $arininvnbr, $comparison);
    }

    /**
     * Filter the query on the ArinInvSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArininvseq(1234); // WHERE ArinInvSeq = 1234
     * $query->filterByArininvseq(array(12, 34)); // WHERE ArinInvSeq IN (12, 34)
     * $query->filterByArininvseq(array('min' => 12)); // WHERE ArinInvSeq > 12
     * </code>
     *
     * @param     mixed $arininvseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArininvseq($arininvseq = null, $comparison = null)
    {
        if (is_array($arininvseq)) {
            $useMinMax = false;
            if (isset($arininvseq['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVSEQ, $arininvseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arininvseq['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVSEQ, $arininvseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVSEQ, $arininvseq, $comparison);
    }

    /**
     * Filter the query on the ArinType column
     *
     * Example usage:
     * <code>
     * $query->filterByArintype('fooValue');   // WHERE ArinType = 'fooValue'
     * $query->filterByArintype('%fooValue%', Criteria::LIKE); // WHERE ArinType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arintype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArintype($arintype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arintype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINTYPE, $arintype, $comparison);
    }

    /**
     * Filter the query on the ArinSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByArinseq(1234); // WHERE ArinSeq = 1234
     * $query->filterByArinseq(array(12, 34)); // WHERE ArinSeq IN (12, 34)
     * $query->filterByArinseq(array('min' => 12)); // WHERE ArinSeq > 12
     * </code>
     *
     * @param     mixed $arinseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinseq($arinseq = null, $comparison = null)
    {
        if (is_array($arinseq)) {
            $useMinMax = false;
            if (isset($arinseq['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSEQ, $arinseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arinseq['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSEQ, $arinseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSEQ, $arinseq, $comparison);
    }

    /**
     * Filter the query on the ArinHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArinhold('fooValue');   // WHERE ArinHold = 'fooValue'
     * $query->filterByArinhold('%fooValue%', Criteria::LIKE); // WHERE ArinHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arinhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinhold($arinhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arinhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINHOLD, $arinhold, $comparison);
    }

    /**
     * Filter the query on the ArinInvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArininvdate('fooValue');   // WHERE ArinInvDate = 'fooValue'
     * $query->filterByArininvdate('%fooValue%', Criteria::LIKE); // WHERE ArinInvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arininvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArininvdate($arininvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arininvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARININVDATE, $arininvdate, $comparison);
    }

    /**
     * Filter the query on the ArinDiscDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArindiscdate('fooValue');   // WHERE ArinDiscDate = 'fooValue'
     * $query->filterByArindiscdate('%fooValue%', Criteria::LIKE); // WHERE ArinDiscDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arindiscdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArindiscdate($arindiscdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arindiscdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINDISCDATE, $arindiscdate, $comparison);
    }

    /**
     * Filter the query on the ArinDueDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArinduedate('fooValue');   // WHERE ArinDueDate = 'fooValue'
     * $query->filterByArinduedate('%fooValue%', Criteria::LIKE); // WHERE ArinDueDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arinduedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinduedate($arinduedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arinduedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINDUEDATE, $arinduedate, $comparison);
    }

    /**
     * Filter the query on the ArinTotAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArintotamt(1234); // WHERE ArinTotAmt = 1234
     * $query->filterByArintotamt(array(12, 34)); // WHERE ArinTotAmt IN (12, 34)
     * $query->filterByArintotamt(array('min' => 12)); // WHERE ArinTotAmt > 12
     * </code>
     *
     * @param     mixed $arintotamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArintotamt($arintotamt = null, $comparison = null)
    {
        if (is_array($arintotamt)) {
            $useMinMax = false;
            if (isset($arintotamt['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINTOTAMT, $arintotamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arintotamt['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINTOTAMT, $arintotamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINTOTAMT, $arintotamt, $comparison);
    }

    /**
     * Filter the query on the ArinDiscAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArindiscamt(1234); // WHERE ArinDiscAmt = 1234
     * $query->filterByArindiscamt(array(12, 34)); // WHERE ArinDiscAmt IN (12, 34)
     * $query->filterByArindiscamt(array('min' => 12)); // WHERE ArinDiscAmt > 12
     * </code>
     *
     * @param     mixed $arindiscamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArindiscamt($arindiscamt = null, $comparison = null)
    {
        if (is_array($arindiscamt)) {
            $useMinMax = false;
            if (isset($arindiscamt['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINDISCAMT, $arindiscamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arindiscamt['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINDISCAMT, $arindiscamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINDISCAMT, $arindiscamt, $comparison);
    }

    /**
     * Filter the query on the ArinChkNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArinchknbr('fooValue');   // WHERE ArinChkNbr = 'fooValue'
     * $query->filterByArinchknbr('%fooValue%', Criteria::LIKE); // WHERE ArinChkNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arinchknbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinchknbr($arinchknbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arinchknbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINCHKNBR, $arinchknbr, $comparison);
    }

    /**
     * Filter the query on the ArinCustPo column
     *
     * Example usage:
     * <code>
     * $query->filterByArincustpo('fooValue');   // WHERE ArinCustPo = 'fooValue'
     * $query->filterByArincustpo('%fooValue%', Criteria::LIKE); // WHERE ArinCustPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arincustpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArincustpo($arincustpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arincustpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINCUSTPO, $arincustpo, $comparison);
    }

    /**
     * Filter the query on the ArinTermCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArintermcode('fooValue');   // WHERE ArinTermCode = 'fooValue'
     * $query->filterByArintermcode('%fooValue%', Criteria::LIKE); // WHERE ArinTermCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arintermcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArintermcode($arintermcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arintermcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINTERMCODE, $arintermcode, $comparison);
    }

    /**
     * Filter the query on the ArinFrtAllow column
     *
     * Example usage:
     * <code>
     * $query->filterByArinfrtallow(1234); // WHERE ArinFrtAllow = 1234
     * $query->filterByArinfrtallow(array(12, 34)); // WHERE ArinFrtAllow IN (12, 34)
     * $query->filterByArinfrtallow(array('min' => 12)); // WHERE ArinFrtAllow > 12
     * </code>
     *
     * @param     mixed $arinfrtallow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinfrtallow($arinfrtallow = null, $comparison = null)
    {
        if (is_array($arinfrtallow)) {
            $useMinMax = false;
            if (isset($arinfrtallow['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINFRTALLOW, $arinfrtallow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arinfrtallow['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINFRTALLOW, $arinfrtallow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINFRTALLOW, $arinfrtallow, $comparison);
    }

    /**
     * Filter the query on the ArinOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArinordrnbr('fooValue');   // WHERE ArinOrdrNbr = 'fooValue'
     * $query->filterByArinordrnbr('%fooValue%', Criteria::LIKE); // WHERE ArinOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arinordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinordrnbr($arinordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arinordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINORDRNBR, $arinordrnbr, $comparison);
    }

    /**
     * Filter the query on the ArinComRate column
     *
     * Example usage:
     * <code>
     * $query->filterByArincomrate(1234); // WHERE ArinComRate = 1234
     * $query->filterByArincomrate(array(12, 34)); // WHERE ArinComRate IN (12, 34)
     * $query->filterByArincomrate(array('min' => 12)); // WHERE ArinComRate > 12
     * </code>
     *
     * @param     mixed $arincomrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArincomrate($arincomrate = null, $comparison = null)
    {
        if (is_array($arincomrate)) {
            $useMinMax = false;
            if (isset($arincomrate['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINCOMRATE, $arincomrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arincomrate['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINCOMRATE, $arincomrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINCOMRATE, $arincomrate, $comparison);
    }

    /**
     * Filter the query on the ArinSalesAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArinsalesamt(1234); // WHERE ArinSalesAmt = 1234
     * $query->filterByArinsalesamt(array(12, 34)); // WHERE ArinSalesAmt IN (12, 34)
     * $query->filterByArinsalesamt(array('min' => 12)); // WHERE ArinSalesAmt > 12
     * </code>
     *
     * @param     mixed $arinsalesamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinsalesamt($arinsalesamt = null, $comparison = null)
    {
        if (is_array($arinsalesamt)) {
            $useMinMax = false;
            if (isset($arinsalesamt['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSALESAMT, $arinsalesamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arinsalesamt['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSALESAMT, $arinsalesamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINSALESAMT, $arinsalesamt, $comparison);
    }

    /**
     * Filter the query on the ArinOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArinorigwhse('fooValue');   // WHERE ArinOrigWhse = 'fooValue'
     * $query->filterByArinorigwhse('%fooValue%', Criteria::LIKE); // WHERE ArinOrigWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arinorigwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinorigwhse($arinorigwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arinorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINORIGWHSE, $arinorigwhse, $comparison);
    }

    /**
     * Filter the query on the ArinWriteOffDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArinwriteoffdate('fooValue');   // WHERE ArinWriteOffDate = 'fooValue'
     * $query->filterByArinwriteoffdate('%fooValue%', Criteria::LIKE); // WHERE ArinWriteOffDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arinwriteoffdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinwriteoffdate($arinwriteoffdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arinwriteoffdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINWRITEOFFDATE, $arinwriteoffdate, $comparison);
    }

    /**
     * Filter the query on the ArinWriteOffAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArinwriteoffamt(1234); // WHERE ArinWriteOffAmt = 1234
     * $query->filterByArinwriteoffamt(array(12, 34)); // WHERE ArinWriteOffAmt IN (12, 34)
     * $query->filterByArinwriteoffamt(array('min' => 12)); // WHERE ArinWriteOffAmt > 12
     * </code>
     *
     * @param     mixed $arinwriteoffamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByArinwriteoffamt($arinwriteoffamt = null, $comparison = null)
    {
        if (is_array($arinwriteoffamt)) {
            $useMinMax = false;
            if (isset($arinwriteoffamt['min'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINWRITEOFFAMT, $arinwriteoffamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arinwriteoffamt['max'])) {
                $this->addUsingAlias(ArInvoiceTableMap::COL_ARINWRITEOFFAMT, $arinwriteoffamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_ARINWRITEOFFAMT, $arinwriteoffamt, $comparison);
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
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArInvoiceTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArInvoice $arInvoice Object to remove from the list of results
     *
     * @return $this|ChildArInvoiceQuery The current query, for fluid interface
     */
    public function prune($arInvoice = null)
    {
        if ($arInvoice) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArInvoiceTableMap::COL_ARCUCUSTID), $arInvoice->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArInvoiceTableMap::COL_ARININVNBR), $arInvoice->getArininvnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ArInvoiceTableMap::COL_ARININVSEQ), $arInvoice->getArininvseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ArInvoiceTableMap::COL_ARINTYPE), $arInvoice->getArintype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ArInvoiceTableMap::COL_ARINSEQ), $arInvoice->getArinseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_inv table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArInvoiceTableMap::clearInstancePool();
            ArInvoiceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArInvoiceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArInvoiceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArInvoiceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArInvoiceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArInvoiceQuery
