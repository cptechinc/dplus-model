<?php

namespace Base;

use \ItemInspectNote as ChildItemInspectNote;
use \ItemInspectNoteQuery as ChildItemInspectNoteQuery;
use \Exception;
use \PDO;
use Map\ItemInspectNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_item_inspect' table.
 *
 *
 *
 * @method     ChildItemInspectNoteQuery orderByQcnotype($order = Criteria::ASC) Order by the QcnoType column
 * @method     ChildItemInspectNoteQuery orderByQcnotypedesc($order = Criteria::ASC) Order by the QcnoTypeDesc column
 * @method     ChildItemInspectNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemInspectNoteQuery orderByQcnodate($order = Criteria::ASC) Order by the QcnoDate column
 * @method     ChildItemInspectNoteQuery orderByQcnotime($order = Criteria::ASC) Order by the QcnoTime column
 * @method     ChildItemInspectNoteQuery orderByQcnouser($order = Criteria::ASC) Order by the QcnoUser column
 * @method     ChildItemInspectNoteQuery orderByQcnoseq($order = Criteria::ASC) Order by the QcnoSeq column
 * @method     ChildItemInspectNoteQuery orderByQcnonote($order = Criteria::ASC) Order by the QcnoNote column
 * @method     ChildItemInspectNoteQuery orderByQcnokey2($order = Criteria::ASC) Order by the QcnoKey2 column
 * @method     ChildItemInspectNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemInspectNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemInspectNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemInspectNoteQuery groupByQcnotype() Group by the QcnoType column
 * @method     ChildItemInspectNoteQuery groupByQcnotypedesc() Group by the QcnoTypeDesc column
 * @method     ChildItemInspectNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemInspectNoteQuery groupByQcnodate() Group by the QcnoDate column
 * @method     ChildItemInspectNoteQuery groupByQcnotime() Group by the QcnoTime column
 * @method     ChildItemInspectNoteQuery groupByQcnouser() Group by the QcnoUser column
 * @method     ChildItemInspectNoteQuery groupByQcnoseq() Group by the QcnoSeq column
 * @method     ChildItemInspectNoteQuery groupByQcnonote() Group by the QcnoNote column
 * @method     ChildItemInspectNoteQuery groupByQcnokey2() Group by the QcnoKey2 column
 * @method     ChildItemInspectNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemInspectNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemInspectNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemInspectNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemInspectNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemInspectNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemInspectNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemInspectNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemInspectNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemInspectNote findOne(ConnectionInterface $con = null) Return the first ChildItemInspectNote matching the query
 * @method     ChildItemInspectNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemInspectNote matching the query, or a new ChildItemInspectNote object populated from the query conditions when no match is found
 *
 * @method     ChildItemInspectNote findOneByQcnotype(string $QcnoType) Return the first ChildItemInspectNote filtered by the QcnoType column
 * @method     ChildItemInspectNote findOneByQcnotypedesc(string $QcnoTypeDesc) Return the first ChildItemInspectNote filtered by the QcnoTypeDesc column
 * @method     ChildItemInspectNote findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemInspectNote filtered by the InitItemNbr column
 * @method     ChildItemInspectNote findOneByQcnodate(string $QcnoDate) Return the first ChildItemInspectNote filtered by the QcnoDate column
 * @method     ChildItemInspectNote findOneByQcnotime(string $QcnoTime) Return the first ChildItemInspectNote filtered by the QcnoTime column
 * @method     ChildItemInspectNote findOneByQcnouser(string $QcnoUser) Return the first ChildItemInspectNote filtered by the QcnoUser column
 * @method     ChildItemInspectNote findOneByQcnoseq(int $QcnoSeq) Return the first ChildItemInspectNote filtered by the QcnoSeq column
 * @method     ChildItemInspectNote findOneByQcnonote(string $QcnoNote) Return the first ChildItemInspectNote filtered by the QcnoNote column
 * @method     ChildItemInspectNote findOneByQcnokey2(string $QcnoKey2) Return the first ChildItemInspectNote filtered by the QcnoKey2 column
 * @method     ChildItemInspectNote findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemInspectNote filtered by the DateUpdtd column
 * @method     ChildItemInspectNote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemInspectNote filtered by the TimeUpdtd column
 * @method     ChildItemInspectNote findOneByDummy(string $dummy) Return the first ChildItemInspectNote filtered by the dummy column *

 * @method     ChildItemInspectNote requirePk($key, ConnectionInterface $con = null) Return the ChildItemInspectNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOne(ConnectionInterface $con = null) Return the first ChildItemInspectNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemInspectNote requireOneByQcnotype(string $QcnoType) Return the first ChildItemInspectNote filtered by the QcnoType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnotypedesc(string $QcnoTypeDesc) Return the first ChildItemInspectNote filtered by the QcnoTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemInspectNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnodate(string $QcnoDate) Return the first ChildItemInspectNote filtered by the QcnoDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnotime(string $QcnoTime) Return the first ChildItemInspectNote filtered by the QcnoTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnouser(string $QcnoUser) Return the first ChildItemInspectNote filtered by the QcnoUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnoseq(int $QcnoSeq) Return the first ChildItemInspectNote filtered by the QcnoSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnonote(string $QcnoNote) Return the first ChildItemInspectNote filtered by the QcnoNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByQcnokey2(string $QcnoKey2) Return the first ChildItemInspectNote filtered by the QcnoKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemInspectNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemInspectNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInspectNote requireOneByDummy(string $dummy) Return the first ChildItemInspectNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemInspectNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemInspectNote objects based on current ModelCriteria
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnotype(string $QcnoType) Return ChildItemInspectNote objects filtered by the QcnoType column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnotypedesc(string $QcnoTypeDesc) Return ChildItemInspectNote objects filtered by the QcnoTypeDesc column
 * @method     ChildItemInspectNote[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemInspectNote objects filtered by the InitItemNbr column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnodate(string $QcnoDate) Return ChildItemInspectNote objects filtered by the QcnoDate column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnotime(string $QcnoTime) Return ChildItemInspectNote objects filtered by the QcnoTime column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnouser(string $QcnoUser) Return ChildItemInspectNote objects filtered by the QcnoUser column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnoseq(int $QcnoSeq) Return ChildItemInspectNote objects filtered by the QcnoSeq column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnonote(string $QcnoNote) Return ChildItemInspectNote objects filtered by the QcnoNote column
 * @method     ChildItemInspectNote[]|ObjectCollection findByQcnokey2(string $QcnoKey2) Return ChildItemInspectNote objects filtered by the QcnoKey2 column
 * @method     ChildItemInspectNote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemInspectNote objects filtered by the DateUpdtd column
 * @method     ChildItemInspectNote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemInspectNote objects filtered by the TimeUpdtd column
 * @method     ChildItemInspectNote[]|ObjectCollection findByDummy(string $dummy) Return ChildItemInspectNote objects filtered by the dummy column
 * @method     ChildItemInspectNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemInspectNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemInspectNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemInspectNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemInspectNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemInspectNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemInspectNoteQuery) {
            return $criteria;
        }
        $query = new ChildItemInspectNoteQuery();
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
     * @param array[$QcnoType, $QcnoDate, $QcnoTime, $QcnoUser, $QcnoSeq, $QcnoKey2] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemInspectNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemInspectNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildItemInspectNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QcnoType, QcnoTypeDesc, InitItemNbr, QcnoDate, QcnoTime, QcnoUser, QcnoSeq, QcnoNote, QcnoKey2, DateUpdtd, TimeUpdtd, dummy FROM notes_item_inspect WHERE QcnoType = :p0 AND QcnoDate = :p1 AND QcnoTime = :p2 AND QcnoUser = :p3 AND QcnoSeq = :p4 AND QcnoKey2 = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemInspectNote $obj */
            $obj = new ChildItemInspectNote();
            $obj->hydrate($row);
            ItemInspectNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildItemInspectNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNODATE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOTIME, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOUSER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOSEQ, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOKEY2, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemInspectNoteTableMap::COL_QCNODATE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOTIME, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOUSER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOSEQ, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ItemInspectNoteTableMap::COL_QCNOKEY2, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the QcnoType column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnotype('fooValue');   // WHERE QcnoType = 'fooValue'
     * $query->filterByQcnotype('%fooValue%', Criteria::LIKE); // WHERE QcnoType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnotype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnotype($qcnotype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnotype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOTYPE, $qcnotype, $comparison);
    }

    /**
     * Filter the query on the QcnoTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnotypedesc('fooValue');   // WHERE QcnoTypeDesc = 'fooValue'
     * $query->filterByQcnotypedesc('%fooValue%', Criteria::LIKE); // WHERE QcnoTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnotypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnotypedesc($qcnotypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnotypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOTYPEDESC, $qcnotypedesc, $comparison);
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
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the QcnoDate column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnodate('fooValue');   // WHERE QcnoDate = 'fooValue'
     * $query->filterByQcnodate('%fooValue%', Criteria::LIKE); // WHERE QcnoDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnodate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnodate($qcnodate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnodate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNODATE, $qcnodate, $comparison);
    }

    /**
     * Filter the query on the QcnoTime column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnotime('fooValue');   // WHERE QcnoTime = 'fooValue'
     * $query->filterByQcnotime('%fooValue%', Criteria::LIKE); // WHERE QcnoTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnotime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnotime($qcnotime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnotime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOTIME, $qcnotime, $comparison);
    }

    /**
     * Filter the query on the QcnoUser column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnouser('fooValue');   // WHERE QcnoUser = 'fooValue'
     * $query->filterByQcnouser('%fooValue%', Criteria::LIKE); // WHERE QcnoUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnouser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnouser($qcnouser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnouser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOUSER, $qcnouser, $comparison);
    }

    /**
     * Filter the query on the QcnoSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnoseq(1234); // WHERE QcnoSeq = 1234
     * $query->filterByQcnoseq(array(12, 34)); // WHERE QcnoSeq IN (12, 34)
     * $query->filterByQcnoseq(array('min' => 12)); // WHERE QcnoSeq > 12
     * </code>
     *
     * @param     mixed $qcnoseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnoseq($qcnoseq = null, $comparison = null)
    {
        if (is_array($qcnoseq)) {
            $useMinMax = false;
            if (isset($qcnoseq['min'])) {
                $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOSEQ, $qcnoseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qcnoseq['max'])) {
                $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOSEQ, $qcnoseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOSEQ, $qcnoseq, $comparison);
    }

    /**
     * Filter the query on the QcnoNote column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnonote('fooValue');   // WHERE QcnoNote = 'fooValue'
     * $query->filterByQcnonote('%fooValue%', Criteria::LIKE); // WHERE QcnoNote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnonote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnonote($qcnonote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnonote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNONOTE, $qcnonote, $comparison);
    }

    /**
     * Filter the query on the QcnoKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQcnokey2('fooValue');   // WHERE QcnoKey2 = 'fooValue'
     * $query->filterByQcnokey2('%fooValue%', Criteria::LIKE); // WHERE QcnoKey2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qcnokey2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByQcnokey2($qcnokey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qcnokey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_QCNOKEY2, $qcnokey2, $comparison);
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
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInspectNoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemInspectNote $itemInspectNote Object to remove from the list of results
     *
     * @return $this|ChildItemInspectNoteQuery The current query, for fluid interface
     */
    public function prune($itemInspectNote = null)
    {
        if ($itemInspectNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemInspectNoteTableMap::COL_QCNOTYPE), $itemInspectNote->getQcnotype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemInspectNoteTableMap::COL_QCNODATE), $itemInspectNote->getQcnodate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemInspectNoteTableMap::COL_QCNOTIME), $itemInspectNote->getQcnotime(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemInspectNoteTableMap::COL_QCNOUSER), $itemInspectNote->getQcnouser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ItemInspectNoteTableMap::COL_QCNOSEQ), $itemInspectNote->getQcnoseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ItemInspectNoteTableMap::COL_QCNOKEY2), $itemInspectNote->getQcnokey2(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_item_inspect table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemInspectNoteTableMap::clearInstancePool();
            ItemInspectNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInspectNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemInspectNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemInspectNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemInspectNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemInspectNoteQuery
