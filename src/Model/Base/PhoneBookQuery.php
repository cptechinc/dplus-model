<?php

namespace Base;

use \PhoneBook as ChildPhoneBook;
use \PhoneBookQuery as ChildPhoneBookQuery;
use \Exception;
use \PDO;
use Map\PhoneBookTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'phoneadr' table.
 *
 *
 *
 * @method     ChildPhoneBookQuery orderByPhadtype($order = Criteria::ASC) Order by the PhadType column
 * @method     ChildPhoneBookQuery orderByPhadid($order = Criteria::ASC) Order by the PhadId column
 * @method     ChildPhoneBookQuery orderByPhadsubid($order = Criteria::ASC) Order by the PhadSubId column
 * @method     ChildPhoneBookQuery orderByPhadsubidseq($order = Criteria::ASC) Order by the PhadSubIdSeq column
 * @method     ChildPhoneBookQuery orderByPhadcont($order = Criteria::ASC) Order by the PhadCont column
 * @method     ChildPhoneBookQuery orderByPhadintl($order = Criteria::ASC) Order by the PhadIntl column
 * @method     ChildPhoneBookQuery orderByPhadtelenbr($order = Criteria::ASC) Order by the PhadTeleNbr column
 * @method     ChildPhoneBookQuery orderByPhadteleext($order = Criteria::ASC) Order by the PhadTeleExt column
 * @method     ChildPhoneBookQuery orderByPhadintlnbr($order = Criteria::ASC) Order by the PhadIntlNbr column
 * @method     ChildPhoneBookQuery orderByPhadintlext($order = Criteria::ASC) Order by the PhadIntlExt column
 * @method     ChildPhoneBookQuery orderByPhadfaxnbr($order = Criteria::ASC) Order by the PhadFaxNbr column
 * @method     ChildPhoneBookQuery orderByPhadifaxnbr($order = Criteria::ASC) Order by the PhadIfaxNbr column
 * @method     ChildPhoneBookQuery orderByPhadcellnbr($order = Criteria::ASC) Order by the PhadCellNbr column
 * @method     ChildPhoneBookQuery orderByPhadicellnbr($order = Criteria::ASC) Order by the PhadIcellNbr column
 * @method     ChildPhoneBookQuery orderByPhadhomenbr($order = Criteria::ASC) Order by the PhadHomeNbr column
 * @method     ChildPhoneBookQuery orderByPhadihomenbr($order = Criteria::ASC) Order by the PhadIhomeNbr column
 * @method     ChildPhoneBookQuery orderByPhadwebaddr($order = Criteria::ASC) Order by the PhadWebAddr column
 * @method     ChildPhoneBookQuery orderByPhademailaddr($order = Criteria::ASC) Order by the PhadEmailAddr column
 * @method     ChildPhoneBookQuery orderByPhadname($order = Criteria::ASC) Order by the PhadName column
 * @method     ChildPhoneBookQuery orderByPhadcontname($order = Criteria::ASC) Order by the PhadContName column
 * @method     ChildPhoneBookQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPhoneBookQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPhoneBookQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPhoneBookQuery groupByPhadtype() Group by the PhadType column
 * @method     ChildPhoneBookQuery groupByPhadid() Group by the PhadId column
 * @method     ChildPhoneBookQuery groupByPhadsubid() Group by the PhadSubId column
 * @method     ChildPhoneBookQuery groupByPhadsubidseq() Group by the PhadSubIdSeq column
 * @method     ChildPhoneBookQuery groupByPhadcont() Group by the PhadCont column
 * @method     ChildPhoneBookQuery groupByPhadintl() Group by the PhadIntl column
 * @method     ChildPhoneBookQuery groupByPhadtelenbr() Group by the PhadTeleNbr column
 * @method     ChildPhoneBookQuery groupByPhadteleext() Group by the PhadTeleExt column
 * @method     ChildPhoneBookQuery groupByPhadintlnbr() Group by the PhadIntlNbr column
 * @method     ChildPhoneBookQuery groupByPhadintlext() Group by the PhadIntlExt column
 * @method     ChildPhoneBookQuery groupByPhadfaxnbr() Group by the PhadFaxNbr column
 * @method     ChildPhoneBookQuery groupByPhadifaxnbr() Group by the PhadIfaxNbr column
 * @method     ChildPhoneBookQuery groupByPhadcellnbr() Group by the PhadCellNbr column
 * @method     ChildPhoneBookQuery groupByPhadicellnbr() Group by the PhadIcellNbr column
 * @method     ChildPhoneBookQuery groupByPhadhomenbr() Group by the PhadHomeNbr column
 * @method     ChildPhoneBookQuery groupByPhadihomenbr() Group by the PhadIhomeNbr column
 * @method     ChildPhoneBookQuery groupByPhadwebaddr() Group by the PhadWebAddr column
 * @method     ChildPhoneBookQuery groupByPhademailaddr() Group by the PhadEmailAddr column
 * @method     ChildPhoneBookQuery groupByPhadname() Group by the PhadName column
 * @method     ChildPhoneBookQuery groupByPhadcontname() Group by the PhadContName column
 * @method     ChildPhoneBookQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPhoneBookQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPhoneBookQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPhoneBookQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPhoneBookQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPhoneBookQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPhoneBookQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPhoneBookQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPhoneBookQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPhoneBook findOne(ConnectionInterface $con = null) Return the first ChildPhoneBook matching the query
 * @method     ChildPhoneBook findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPhoneBook matching the query, or a new ChildPhoneBook object populated from the query conditions when no match is found
 *
 * @method     ChildPhoneBook findOneByPhadtype(string $PhadType) Return the first ChildPhoneBook filtered by the PhadType column
 * @method     ChildPhoneBook findOneByPhadid(string $PhadId) Return the first ChildPhoneBook filtered by the PhadId column
 * @method     ChildPhoneBook findOneByPhadsubid(string $PhadSubId) Return the first ChildPhoneBook filtered by the PhadSubId column
 * @method     ChildPhoneBook findOneByPhadsubidseq(int $PhadSubIdSeq) Return the first ChildPhoneBook filtered by the PhadSubIdSeq column
 * @method     ChildPhoneBook findOneByPhadcont(string $PhadCont) Return the first ChildPhoneBook filtered by the PhadCont column
 * @method     ChildPhoneBook findOneByPhadintl(string $PhadIntl) Return the first ChildPhoneBook filtered by the PhadIntl column
 * @method     ChildPhoneBook findOneByPhadtelenbr(string $PhadTeleNbr) Return the first ChildPhoneBook filtered by the PhadTeleNbr column
 * @method     ChildPhoneBook findOneByPhadteleext(string $PhadTeleExt) Return the first ChildPhoneBook filtered by the PhadTeleExt column
 * @method     ChildPhoneBook findOneByPhadintlnbr(string $PhadIntlNbr) Return the first ChildPhoneBook filtered by the PhadIntlNbr column
 * @method     ChildPhoneBook findOneByPhadintlext(string $PhadIntlExt) Return the first ChildPhoneBook filtered by the PhadIntlExt column
 * @method     ChildPhoneBook findOneByPhadfaxnbr(string $PhadFaxNbr) Return the first ChildPhoneBook filtered by the PhadFaxNbr column
 * @method     ChildPhoneBook findOneByPhadifaxnbr(string $PhadIfaxNbr) Return the first ChildPhoneBook filtered by the PhadIfaxNbr column
 * @method     ChildPhoneBook findOneByPhadcellnbr(string $PhadCellNbr) Return the first ChildPhoneBook filtered by the PhadCellNbr column
 * @method     ChildPhoneBook findOneByPhadicellnbr(string $PhadIcellNbr) Return the first ChildPhoneBook filtered by the PhadIcellNbr column
 * @method     ChildPhoneBook findOneByPhadhomenbr(string $PhadHomeNbr) Return the first ChildPhoneBook filtered by the PhadHomeNbr column
 * @method     ChildPhoneBook findOneByPhadihomenbr(string $PhadIhomeNbr) Return the first ChildPhoneBook filtered by the PhadIhomeNbr column
 * @method     ChildPhoneBook findOneByPhadwebaddr(string $PhadWebAddr) Return the first ChildPhoneBook filtered by the PhadWebAddr column
 * @method     ChildPhoneBook findOneByPhademailaddr(string $PhadEmailAddr) Return the first ChildPhoneBook filtered by the PhadEmailAddr column
 * @method     ChildPhoneBook findOneByPhadname(string $PhadName) Return the first ChildPhoneBook filtered by the PhadName column
 * @method     ChildPhoneBook findOneByPhadcontname(string $PhadContName) Return the first ChildPhoneBook filtered by the PhadContName column
 * @method     ChildPhoneBook findOneByDateupdtd(string $DateUpdtd) Return the first ChildPhoneBook filtered by the DateUpdtd column
 * @method     ChildPhoneBook findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPhoneBook filtered by the TimeUpdtd column
 * @method     ChildPhoneBook findOneByDummy(string $dummy) Return the first ChildPhoneBook filtered by the dummy column *

 * @method     ChildPhoneBook requirePk($key, ConnectionInterface $con = null) Return the ChildPhoneBook by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOne(ConnectionInterface $con = null) Return the first ChildPhoneBook matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPhoneBook requireOneByPhadtype(string $PhadType) Return the first ChildPhoneBook filtered by the PhadType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadid(string $PhadId) Return the first ChildPhoneBook filtered by the PhadId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadsubid(string $PhadSubId) Return the first ChildPhoneBook filtered by the PhadSubId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadsubidseq(int $PhadSubIdSeq) Return the first ChildPhoneBook filtered by the PhadSubIdSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadcont(string $PhadCont) Return the first ChildPhoneBook filtered by the PhadCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadintl(string $PhadIntl) Return the first ChildPhoneBook filtered by the PhadIntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadtelenbr(string $PhadTeleNbr) Return the first ChildPhoneBook filtered by the PhadTeleNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadteleext(string $PhadTeleExt) Return the first ChildPhoneBook filtered by the PhadTeleExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadintlnbr(string $PhadIntlNbr) Return the first ChildPhoneBook filtered by the PhadIntlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadintlext(string $PhadIntlExt) Return the first ChildPhoneBook filtered by the PhadIntlExt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadfaxnbr(string $PhadFaxNbr) Return the first ChildPhoneBook filtered by the PhadFaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadifaxnbr(string $PhadIfaxNbr) Return the first ChildPhoneBook filtered by the PhadIfaxNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadcellnbr(string $PhadCellNbr) Return the first ChildPhoneBook filtered by the PhadCellNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadicellnbr(string $PhadIcellNbr) Return the first ChildPhoneBook filtered by the PhadIcellNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadhomenbr(string $PhadHomeNbr) Return the first ChildPhoneBook filtered by the PhadHomeNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadihomenbr(string $PhadIhomeNbr) Return the first ChildPhoneBook filtered by the PhadIhomeNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadwebaddr(string $PhadWebAddr) Return the first ChildPhoneBook filtered by the PhadWebAddr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhademailaddr(string $PhadEmailAddr) Return the first ChildPhoneBook filtered by the PhadEmailAddr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadname(string $PhadName) Return the first ChildPhoneBook filtered by the PhadName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByPhadcontname(string $PhadContName) Return the first ChildPhoneBook filtered by the PhadContName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPhoneBook filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPhoneBook filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPhoneBook requireOneByDummy(string $dummy) Return the first ChildPhoneBook filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPhoneBook[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPhoneBook objects based on current ModelCriteria
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadtype(string $PhadType) Return ChildPhoneBook objects filtered by the PhadType column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadid(string $PhadId) Return ChildPhoneBook objects filtered by the PhadId column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadsubid(string $PhadSubId) Return ChildPhoneBook objects filtered by the PhadSubId column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadsubidseq(int $PhadSubIdSeq) Return ChildPhoneBook objects filtered by the PhadSubIdSeq column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadcont(string $PhadCont) Return ChildPhoneBook objects filtered by the PhadCont column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadintl(string $PhadIntl) Return ChildPhoneBook objects filtered by the PhadIntl column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadtelenbr(string $PhadTeleNbr) Return ChildPhoneBook objects filtered by the PhadTeleNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadteleext(string $PhadTeleExt) Return ChildPhoneBook objects filtered by the PhadTeleExt column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadintlnbr(string $PhadIntlNbr) Return ChildPhoneBook objects filtered by the PhadIntlNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadintlext(string $PhadIntlExt) Return ChildPhoneBook objects filtered by the PhadIntlExt column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadfaxnbr(string $PhadFaxNbr) Return ChildPhoneBook objects filtered by the PhadFaxNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadifaxnbr(string $PhadIfaxNbr) Return ChildPhoneBook objects filtered by the PhadIfaxNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadcellnbr(string $PhadCellNbr) Return ChildPhoneBook objects filtered by the PhadCellNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadicellnbr(string $PhadIcellNbr) Return ChildPhoneBook objects filtered by the PhadIcellNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadhomenbr(string $PhadHomeNbr) Return ChildPhoneBook objects filtered by the PhadHomeNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadihomenbr(string $PhadIhomeNbr) Return ChildPhoneBook objects filtered by the PhadIhomeNbr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadwebaddr(string $PhadWebAddr) Return ChildPhoneBook objects filtered by the PhadWebAddr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhademailaddr(string $PhadEmailAddr) Return ChildPhoneBook objects filtered by the PhadEmailAddr column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadname(string $PhadName) Return ChildPhoneBook objects filtered by the PhadName column
 * @method     ChildPhoneBook[]|ObjectCollection findByPhadcontname(string $PhadContName) Return ChildPhoneBook objects filtered by the PhadContName column
 * @method     ChildPhoneBook[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPhoneBook objects filtered by the DateUpdtd column
 * @method     ChildPhoneBook[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPhoneBook objects filtered by the TimeUpdtd column
 * @method     ChildPhoneBook[]|ObjectCollection findByDummy(string $dummy) Return ChildPhoneBook objects filtered by the dummy column
 * @method     ChildPhoneBook[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PhoneBookQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PhoneBookQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PhoneBook', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPhoneBookQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPhoneBookQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPhoneBookQuery) {
            return $criteria;
        }
        $query = new ChildPhoneBookQuery();
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
     * @param array[$PhadType, $PhadId, $PhadSubId, $PhadSubIdSeq, $PhadCont] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPhoneBook|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PhoneBookTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]))))) {
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
     * @return ChildPhoneBook A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PhadType, PhadId, PhadSubId, PhadSubIdSeq, PhadCont, PhadIntl, PhadTeleNbr, PhadTeleExt, PhadIntlNbr, PhadIntlExt, PhadFaxNbr, PhadIfaxNbr, PhadCellNbr, PhadIcellNbr, PhadHomeNbr, PhadIhomeNbr, PhadWebAddr, PhadEmailAddr, PhadName, PhadContName, DateUpdtd, TimeUpdtd, dummy FROM phoneadr WHERE PhadType = :p0 AND PhadId = :p1 AND PhadSubId = :p2 AND PhadSubIdSeq = :p3 AND PhadCont = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPhoneBook $obj */
            $obj = new ChildPhoneBook();
            $obj->hydrate($row);
            PhoneBookTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]));
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
     * @return ChildPhoneBook|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PhoneBookTableMap::COL_PHADTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PhoneBookTableMap::COL_PHADID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PhoneBookTableMap::COL_PHADSUBID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PhoneBookTableMap::COL_PHADSUBIDSEQ, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(PhoneBookTableMap::COL_PHADCONT, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PhoneBookTableMap::COL_PHADTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PhoneBookTableMap::COL_PHADID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PhoneBookTableMap::COL_PHADSUBID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PhoneBookTableMap::COL_PHADSUBIDSEQ, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(PhoneBookTableMap::COL_PHADCONT, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PhadType column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadtype('fooValue');   // WHERE PhadType = 'fooValue'
     * $query->filterByPhadtype('%fooValue%', Criteria::LIKE); // WHERE PhadType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadtype($phadtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADTYPE, $phadtype, $comparison);
    }

    /**
     * Filter the query on the PhadId column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadid('fooValue');   // WHERE PhadId = 'fooValue'
     * $query->filterByPhadid('%fooValue%', Criteria::LIKE); // WHERE PhadId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadid($phadid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADID, $phadid, $comparison);
    }

    /**
     * Filter the query on the PhadSubId column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadsubid('fooValue');   // WHERE PhadSubId = 'fooValue'
     * $query->filterByPhadsubid('%fooValue%', Criteria::LIKE); // WHERE PhadSubId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadsubid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadsubid($phadsubid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadsubid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADSUBID, $phadsubid, $comparison);
    }

    /**
     * Filter the query on the PhadSubIdSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadsubidseq(1234); // WHERE PhadSubIdSeq = 1234
     * $query->filterByPhadsubidseq(array(12, 34)); // WHERE PhadSubIdSeq IN (12, 34)
     * $query->filterByPhadsubidseq(array('min' => 12)); // WHERE PhadSubIdSeq > 12
     * </code>
     *
     * @param     mixed $phadsubidseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadsubidseq($phadsubidseq = null, $comparison = null)
    {
        if (is_array($phadsubidseq)) {
            $useMinMax = false;
            if (isset($phadsubidseq['min'])) {
                $this->addUsingAlias(PhoneBookTableMap::COL_PHADSUBIDSEQ, $phadsubidseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phadsubidseq['max'])) {
                $this->addUsingAlias(PhoneBookTableMap::COL_PHADSUBIDSEQ, $phadsubidseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADSUBIDSEQ, $phadsubidseq, $comparison);
    }

    /**
     * Filter the query on the PhadCont column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadcont('fooValue');   // WHERE PhadCont = 'fooValue'
     * $query->filterByPhadcont('%fooValue%', Criteria::LIKE); // WHERE PhadCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadcont($phadcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADCONT, $phadcont, $comparison);
    }

    /**
     * Filter the query on the PhadIntl column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadintl('fooValue');   // WHERE PhadIntl = 'fooValue'
     * $query->filterByPhadintl('%fooValue%', Criteria::LIKE); // WHERE PhadIntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadintl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadintl($phadintl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadintl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADINTL, $phadintl, $comparison);
    }

    /**
     * Filter the query on the PhadTeleNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadtelenbr('fooValue');   // WHERE PhadTeleNbr = 'fooValue'
     * $query->filterByPhadtelenbr('%fooValue%', Criteria::LIKE); // WHERE PhadTeleNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadtelenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadtelenbr($phadtelenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadtelenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADTELENBR, $phadtelenbr, $comparison);
    }

    /**
     * Filter the query on the PhadTeleExt column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadteleext('fooValue');   // WHERE PhadTeleExt = 'fooValue'
     * $query->filterByPhadteleext('%fooValue%', Criteria::LIKE); // WHERE PhadTeleExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadteleext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadteleext($phadteleext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadteleext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADTELEEXT, $phadteleext, $comparison);
    }

    /**
     * Filter the query on the PhadIntlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadintlnbr('fooValue');   // WHERE PhadIntlNbr = 'fooValue'
     * $query->filterByPhadintlnbr('%fooValue%', Criteria::LIKE); // WHERE PhadIntlNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadintlnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadintlnbr($phadintlnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadintlnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADINTLNBR, $phadintlnbr, $comparison);
    }

    /**
     * Filter the query on the PhadIntlExt column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadintlext('fooValue');   // WHERE PhadIntlExt = 'fooValue'
     * $query->filterByPhadintlext('%fooValue%', Criteria::LIKE); // WHERE PhadIntlExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadintlext The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadintlext($phadintlext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadintlext)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADINTLEXT, $phadintlext, $comparison);
    }

    /**
     * Filter the query on the PhadFaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadfaxnbr('fooValue');   // WHERE PhadFaxNbr = 'fooValue'
     * $query->filterByPhadfaxnbr('%fooValue%', Criteria::LIKE); // WHERE PhadFaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadfaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadfaxnbr($phadfaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadfaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADFAXNBR, $phadfaxnbr, $comparison);
    }

    /**
     * Filter the query on the PhadIfaxNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadifaxnbr('fooValue');   // WHERE PhadIfaxNbr = 'fooValue'
     * $query->filterByPhadifaxnbr('%fooValue%', Criteria::LIKE); // WHERE PhadIfaxNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadifaxnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadifaxnbr($phadifaxnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadifaxnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADIFAXNBR, $phadifaxnbr, $comparison);
    }

    /**
     * Filter the query on the PhadCellNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadcellnbr('fooValue');   // WHERE PhadCellNbr = 'fooValue'
     * $query->filterByPhadcellnbr('%fooValue%', Criteria::LIKE); // WHERE PhadCellNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadcellnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadcellnbr($phadcellnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadcellnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADCELLNBR, $phadcellnbr, $comparison);
    }

    /**
     * Filter the query on the PhadIcellNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadicellnbr('fooValue');   // WHERE PhadIcellNbr = 'fooValue'
     * $query->filterByPhadicellnbr('%fooValue%', Criteria::LIKE); // WHERE PhadIcellNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadicellnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadicellnbr($phadicellnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadicellnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADICELLNBR, $phadicellnbr, $comparison);
    }

    /**
     * Filter the query on the PhadHomeNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadhomenbr('fooValue');   // WHERE PhadHomeNbr = 'fooValue'
     * $query->filterByPhadhomenbr('%fooValue%', Criteria::LIKE); // WHERE PhadHomeNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadhomenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadhomenbr($phadhomenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadhomenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADHOMENBR, $phadhomenbr, $comparison);
    }

    /**
     * Filter the query on the PhadIhomeNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadihomenbr('fooValue');   // WHERE PhadIhomeNbr = 'fooValue'
     * $query->filterByPhadihomenbr('%fooValue%', Criteria::LIKE); // WHERE PhadIhomeNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadihomenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadihomenbr($phadihomenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadihomenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADIHOMENBR, $phadihomenbr, $comparison);
    }

    /**
     * Filter the query on the PhadWebAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadwebaddr('fooValue');   // WHERE PhadWebAddr = 'fooValue'
     * $query->filterByPhadwebaddr('%fooValue%', Criteria::LIKE); // WHERE PhadWebAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadwebaddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadwebaddr($phadwebaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadwebaddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADWEBADDR, $phadwebaddr, $comparison);
    }

    /**
     * Filter the query on the PhadEmailAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByPhademailaddr('fooValue');   // WHERE PhadEmailAddr = 'fooValue'
     * $query->filterByPhademailaddr('%fooValue%', Criteria::LIKE); // WHERE PhadEmailAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phademailaddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhademailaddr($phademailaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phademailaddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADEMAILADDR, $phademailaddr, $comparison);
    }

    /**
     * Filter the query on the PhadName column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadname('fooValue');   // WHERE PhadName = 'fooValue'
     * $query->filterByPhadname('%fooValue%', Criteria::LIKE); // WHERE PhadName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadname($phadname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADNAME, $phadname, $comparison);
    }

    /**
     * Filter the query on the PhadContName column
     *
     * Example usage:
     * <code>
     * $query->filterByPhadcontname('fooValue');   // WHERE PhadContName = 'fooValue'
     * $query->filterByPhadcontname('%fooValue%', Criteria::LIKE); // WHERE PhadContName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phadcontname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByPhadcontname($phadcontname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phadcontname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_PHADCONTNAME, $phadcontname, $comparison);
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
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PhoneBookTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPhoneBook $phoneBook Object to remove from the list of results
     *
     * @return $this|ChildPhoneBookQuery The current query, for fluid interface
     */
    public function prune($phoneBook = null)
    {
        if ($phoneBook) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PhoneBookTableMap::COL_PHADTYPE), $phoneBook->getPhadtype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PhoneBookTableMap::COL_PHADID), $phoneBook->getPhadid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PhoneBookTableMap::COL_PHADSUBID), $phoneBook->getPhadsubid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PhoneBookTableMap::COL_PHADSUBIDSEQ), $phoneBook->getPhadsubidseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(PhoneBookTableMap::COL_PHADCONT), $phoneBook->getPhadcont(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the phoneadr table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PhoneBookTableMap::clearInstancePool();
            PhoneBookTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PhoneBookTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PhoneBookTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PhoneBookTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PhoneBookTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PhoneBookQuery
