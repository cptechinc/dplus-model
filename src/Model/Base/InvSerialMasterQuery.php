<?php

namespace Base;

use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \Exception;
use \PDO;
use Map\InvSerialMasterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_ser_mast' table.
 *
 *
 *
 * @method     ChildInvSerialMasterQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvSerialMasterQuery orderBySermsernbr($order = Criteria::ASC) Order by the SermSerNbr column
 * @method     ChildInvSerialMasterQuery orderBySermproddate($order = Criteria::ASC) Order by the SermProdDate column
 * @method     ChildInvSerialMasterQuery orderBySermprntcnt($order = Criteria::ASC) Order by the SermPrntCnt column
 * @method     ChildInvSerialMasterQuery orderBySermsordnbr($order = Criteria::ASC) Order by the SermSordNbr column
 * @method     ChildInvSerialMasterQuery orderBySerminvcdate($order = Criteria::ASC) Order by the SermInvcDate column
 * @method     ChildInvSerialMasterQuery orderBySermrevision($order = Criteria::ASC) Order by the SermRevision column
 * @method     ChildInvSerialMasterQuery orderBySermctry($order = Criteria::ASC) Order by the SermCtry column
 * @method     ChildInvSerialMasterQuery orderBySermacallocordr($order = Criteria::ASC) Order by the SermAcAllocOrdr column
 * @method     ChildInvSerialMasterQuery orderBySermrefsernbr($order = Criteria::ASC) Order by the SermRefSerNbr column
 * @method     ChildInvSerialMasterQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvSerialMasterQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvSerialMasterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvSerialMasterQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvSerialMasterQuery groupBySermsernbr() Group by the SermSerNbr column
 * @method     ChildInvSerialMasterQuery groupBySermproddate() Group by the SermProdDate column
 * @method     ChildInvSerialMasterQuery groupBySermprntcnt() Group by the SermPrntCnt column
 * @method     ChildInvSerialMasterQuery groupBySermsordnbr() Group by the SermSordNbr column
 * @method     ChildInvSerialMasterQuery groupBySerminvcdate() Group by the SermInvcDate column
 * @method     ChildInvSerialMasterQuery groupBySermrevision() Group by the SermRevision column
 * @method     ChildInvSerialMasterQuery groupBySermctry() Group by the SermCtry column
 * @method     ChildInvSerialMasterQuery groupBySermacallocordr() Group by the SermAcAllocOrdr column
 * @method     ChildInvSerialMasterQuery groupBySermrefsernbr() Group by the SermRefSerNbr column
 * @method     ChildInvSerialMasterQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvSerialMasterQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvSerialMasterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvSerialMasterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvSerialMasterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvSerialMasterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvSerialMasterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvSerialMasterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvSerialMasterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvSerialMasterQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialMasterQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvSerialMaster findOne(ConnectionInterface $con = null) Return the first ChildInvSerialMaster matching the query
 * @method     ChildInvSerialMaster findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvSerialMaster matching the query, or a new ChildInvSerialMaster object populated from the query conditions when no match is found
 *
 * @method     ChildInvSerialMaster findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvSerialMaster filtered by the InitItemNbr column
 * @method     ChildInvSerialMaster findOneBySermsernbr(string $SermSerNbr) Return the first ChildInvSerialMaster filtered by the SermSerNbr column
 * @method     ChildInvSerialMaster findOneBySermproddate(string $SermProdDate) Return the first ChildInvSerialMaster filtered by the SermProdDate column
 * @method     ChildInvSerialMaster findOneBySermprntcnt(int $SermPrntCnt) Return the first ChildInvSerialMaster filtered by the SermPrntCnt column
 * @method     ChildInvSerialMaster findOneBySermsordnbr(string $SermSordNbr) Return the first ChildInvSerialMaster filtered by the SermSordNbr column
 * @method     ChildInvSerialMaster findOneBySerminvcdate(string $SermInvcDate) Return the first ChildInvSerialMaster filtered by the SermInvcDate column
 * @method     ChildInvSerialMaster findOneBySermrevision(string $SermRevision) Return the first ChildInvSerialMaster filtered by the SermRevision column
 * @method     ChildInvSerialMaster findOneBySermctry(string $SermCtry) Return the first ChildInvSerialMaster filtered by the SermCtry column
 * @method     ChildInvSerialMaster findOneBySermacallocordr(string $SermAcAllocOrdr) Return the first ChildInvSerialMaster filtered by the SermAcAllocOrdr column
 * @method     ChildInvSerialMaster findOneBySermrefsernbr(string $SermRefSerNbr) Return the first ChildInvSerialMaster filtered by the SermRefSerNbr column
 * @method     ChildInvSerialMaster findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSerialMaster filtered by the DateUpdtd column
 * @method     ChildInvSerialMaster findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSerialMaster filtered by the TimeUpdtd column
 * @method     ChildInvSerialMaster findOneByDummy(string $dummy) Return the first ChildInvSerialMaster filtered by the dummy column *

 * @method     ChildInvSerialMaster requirePk($key, ConnectionInterface $con = null) Return the ChildInvSerialMaster by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOne(ConnectionInterface $con = null) Return the first ChildInvSerialMaster matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSerialMaster requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvSerialMaster filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermsernbr(string $SermSerNbr) Return the first ChildInvSerialMaster filtered by the SermSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermproddate(string $SermProdDate) Return the first ChildInvSerialMaster filtered by the SermProdDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermprntcnt(int $SermPrntCnt) Return the first ChildInvSerialMaster filtered by the SermPrntCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermsordnbr(string $SermSordNbr) Return the first ChildInvSerialMaster filtered by the SermSordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySerminvcdate(string $SermInvcDate) Return the first ChildInvSerialMaster filtered by the SermInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermrevision(string $SermRevision) Return the first ChildInvSerialMaster filtered by the SermRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermctry(string $SermCtry) Return the first ChildInvSerialMaster filtered by the SermCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermacallocordr(string $SermAcAllocOrdr) Return the first ChildInvSerialMaster filtered by the SermAcAllocOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermrefsernbr(string $SermRefSerNbr) Return the first ChildInvSerialMaster filtered by the SermRefSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSerialMaster filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSerialMaster filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneByDummy(string $dummy) Return the first ChildInvSerialMaster filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSerialMaster[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvSerialMaster objects based on current ModelCriteria
 * @method     ChildInvSerialMaster[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvSerialMaster objects filtered by the InitItemNbr column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermsernbr(string $SermSerNbr) Return ChildInvSerialMaster objects filtered by the SermSerNbr column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermproddate(string $SermProdDate) Return ChildInvSerialMaster objects filtered by the SermProdDate column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermprntcnt(int $SermPrntCnt) Return ChildInvSerialMaster objects filtered by the SermPrntCnt column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermsordnbr(string $SermSordNbr) Return ChildInvSerialMaster objects filtered by the SermSordNbr column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySerminvcdate(string $SermInvcDate) Return ChildInvSerialMaster objects filtered by the SermInvcDate column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermrevision(string $SermRevision) Return ChildInvSerialMaster objects filtered by the SermRevision column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermctry(string $SermCtry) Return ChildInvSerialMaster objects filtered by the SermCtry column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermacallocordr(string $SermAcAllocOrdr) Return ChildInvSerialMaster objects filtered by the SermAcAllocOrdr column
 * @method     ChildInvSerialMaster[]|ObjectCollection findBySermrefsernbr(string $SermRefSerNbr) Return ChildInvSerialMaster objects filtered by the SermRefSerNbr column
 * @method     ChildInvSerialMaster[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvSerialMaster objects filtered by the DateUpdtd column
 * @method     ChildInvSerialMaster[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvSerialMaster objects filtered by the TimeUpdtd column
 * @method     ChildInvSerialMaster[]|ObjectCollection findByDummy(string $dummy) Return ChildInvSerialMaster objects filtered by the dummy column
 * @method     ChildInvSerialMaster[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvSerialMasterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvSerialMasterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvSerialMaster', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvSerialMasterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvSerialMasterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvSerialMasterQuery) {
            return $criteria;
        }
        $query = new ChildInvSerialMasterQuery();
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
     * @param array[$InitItemNbr, $SermSerNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvSerialMaster|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvSerialMasterTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvSerialMaster A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, SermSerNbr, SermProdDate, SermPrntCnt, SermSordNbr, SermInvcDate, SermRevision, SermCtry, SermAcAllocOrdr, SermRefSerNbr, DateUpdtd, TimeUpdtd, dummy FROM inv_ser_mast WHERE InitItemNbr = :p0 AND SermSerNbr = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvSerialMaster $obj */
            $obj = new ChildInvSerialMaster();
            $obj->hydrate($row);
            InvSerialMasterTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvSerialMaster|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvSerialMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvSerialMasterTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the SermSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsernbr('fooValue');   // WHERE SermSerNbr = 'fooValue'
     * $query->filterBySermsernbr('%fooValue%', Criteria::LIKE); // WHERE SermSerNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermsernbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermsernbr($sermsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $sermsernbr, $comparison);
    }

    /**
     * Filter the query on the SermProdDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySermproddate('fooValue');   // WHERE SermProdDate = 'fooValue'
     * $query->filterBySermproddate('%fooValue%', Criteria::LIKE); // WHERE SermProdDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermproddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermproddate($sermproddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermproddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRODDATE, $sermproddate, $comparison);
    }

    /**
     * Filter the query on the SermPrntCnt column
     *
     * Example usage:
     * <code>
     * $query->filterBySermprntcnt(1234); // WHERE SermPrntCnt = 1234
     * $query->filterBySermprntcnt(array(12, 34)); // WHERE SermPrntCnt IN (12, 34)
     * $query->filterBySermprntcnt(array('min' => 12)); // WHERE SermPrntCnt > 12
     * </code>
     *
     * @param     mixed $sermprntcnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermprntcnt($sermprntcnt = null, $comparison = null)
    {
        if (is_array($sermprntcnt)) {
            $useMinMax = false;
            if (isset($sermprntcnt['min'])) {
                $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRNTCNT, $sermprntcnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sermprntcnt['max'])) {
                $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRNTCNT, $sermprntcnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRNTCNT, $sermprntcnt, $comparison);
    }

    /**
     * Filter the query on the SermSordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsordnbr('fooValue');   // WHERE SermSordNbr = 'fooValue'
     * $query->filterBySermsordnbr('%fooValue%', Criteria::LIKE); // WHERE SermSordNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermsordnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermsordnbr($sermsordnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMSORDNBR, $sermsordnbr, $comparison);
    }

    /**
     * Filter the query on the SermInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySerminvcdate('fooValue');   // WHERE SermInvcDate = 'fooValue'
     * $query->filterBySerminvcdate('%fooValue%', Criteria::LIKE); // WHERE SermInvcDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serminvcdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySerminvcdate($serminvcdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serminvcdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMINVCDATE, $serminvcdate, $comparison);
    }

    /**
     * Filter the query on the SermRevision column
     *
     * Example usage:
     * <code>
     * $query->filterBySermrevision('fooValue');   // WHERE SermRevision = 'fooValue'
     * $query->filterBySermrevision('%fooValue%', Criteria::LIKE); // WHERE SermRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermrevision($sermrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMREVISION, $sermrevision, $comparison);
    }

    /**
     * Filter the query on the SermCtry column
     *
     * Example usage:
     * <code>
     * $query->filterBySermctry('fooValue');   // WHERE SermCtry = 'fooValue'
     * $query->filterBySermctry('%fooValue%', Criteria::LIKE); // WHERE SermCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermctry($sermctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMCTRY, $sermctry, $comparison);
    }

    /**
     * Filter the query on the SermAcAllocOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermacallocordr('fooValue');   // WHERE SermAcAllocOrdr = 'fooValue'
     * $query->filterBySermacallocordr('%fooValue%', Criteria::LIKE); // WHERE SermAcAllocOrdr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermacallocordr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermacallocordr($sermacallocordr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermacallocordr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMACALLOCORDR, $sermacallocordr, $comparison);
    }

    /**
     * Filter the query on the SermRefSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermrefsernbr('fooValue');   // WHERE SermRefSerNbr = 'fooValue'
     * $query->filterBySermrefsernbr('%fooValue%', Criteria::LIKE); // WHERE SermRefSerNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sermrefsernbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterBySermrefsernbr($sermrefsernbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermrefsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMREFSERNBR, $sermrefsernbr, $comparison);
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
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvSerialMasterTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvSerialMaster $invSerialMaster Object to remove from the list of results
     *
     * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
     */
    public function prune($invSerialMaster = null)
    {
        if ($invSerialMaster) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvSerialMasterTableMap::COL_INITITEMNBR), $invSerialMaster->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvSerialMasterTableMap::COL_SERMSERNBR), $invSerialMaster->getSermsernbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_ser_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvSerialMasterTableMap::clearInstancePool();
            InvSerialMasterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvSerialMasterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvSerialMasterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvSerialMasterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvSerialMasterQuery
