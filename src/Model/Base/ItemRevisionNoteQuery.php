<?php

namespace Base;

use \ItemRevisionNote as ChildItemRevisionNote;
use \ItemRevisionNoteQuery as ChildItemRevisionNoteQuery;
use \Exception;
use \PDO;
use Map\ItemRevisionNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_item_revision' table.
 *
 *
 *
 * @method     ChildItemRevisionNoteQuery orderByItemnotetype($order = Criteria::ASC) Order by the ItemNoteType column
 * @method     ChildItemRevisionNoteQuery orderByItemnotetypedesc($order = Criteria::ASC) Order by the ItemNoteTypeDesc column
 * @method     ChildItemRevisionNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemRevisionNoteQuery orderByItemnotedate($order = Criteria::ASC) Order by the ItemNoteDate column
 * @method     ChildItemRevisionNoteQuery orderByItemnotetime($order = Criteria::ASC) Order by the ItemNoteTime column
 * @method     ChildItemRevisionNoteQuery orderByItemnoterevision($order = Criteria::ASC) Order by the ItemNoteRevision column
 * @method     ChildItemRevisionNoteQuery orderByItemnoteseq($order = Criteria::ASC) Order by the ItemNoteSeq column
 * @method     ChildItemRevisionNoteQuery orderByItemnotenote($order = Criteria::ASC) Order by the ItemNoteNote column
 * @method     ChildItemRevisionNoteQuery orderByItemnoteuser($order = Criteria::ASC) Order by the ItemNoteUser column
 * @method     ChildItemRevisionNoteQuery orderByItemnotekey2($order = Criteria::ASC) Order by the ItemNoteKey2 column
 * @method     ChildItemRevisionNoteQuery orderByItemnoteform($order = Criteria::ASC) Order by the ItemNoteForm column
 * @method     ChildItemRevisionNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemRevisionNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemRevisionNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemRevisionNoteQuery groupByItemnotetype() Group by the ItemNoteType column
 * @method     ChildItemRevisionNoteQuery groupByItemnotetypedesc() Group by the ItemNoteTypeDesc column
 * @method     ChildItemRevisionNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemRevisionNoteQuery groupByItemnotedate() Group by the ItemNoteDate column
 * @method     ChildItemRevisionNoteQuery groupByItemnotetime() Group by the ItemNoteTime column
 * @method     ChildItemRevisionNoteQuery groupByItemnoterevision() Group by the ItemNoteRevision column
 * @method     ChildItemRevisionNoteQuery groupByItemnoteseq() Group by the ItemNoteSeq column
 * @method     ChildItemRevisionNoteQuery groupByItemnotenote() Group by the ItemNoteNote column
 * @method     ChildItemRevisionNoteQuery groupByItemnoteuser() Group by the ItemNoteUser column
 * @method     ChildItemRevisionNoteQuery groupByItemnotekey2() Group by the ItemNoteKey2 column
 * @method     ChildItemRevisionNoteQuery groupByItemnoteform() Group by the ItemNoteForm column
 * @method     ChildItemRevisionNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemRevisionNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemRevisionNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemRevisionNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemRevisionNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemRevisionNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemRevisionNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemRevisionNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemRevisionNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemRevisionNote findOne(ConnectionInterface $con = null) Return the first ChildItemRevisionNote matching the query
 * @method     ChildItemRevisionNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemRevisionNote matching the query, or a new ChildItemRevisionNote object populated from the query conditions when no match is found
 *
 * @method     ChildItemRevisionNote findOneByItemnotetype(string $ItemNoteType) Return the first ChildItemRevisionNote filtered by the ItemNoteType column
 * @method     ChildItemRevisionNote findOneByItemnotetypedesc(string $ItemNoteTypeDesc) Return the first ChildItemRevisionNote filtered by the ItemNoteTypeDesc column
 * @method     ChildItemRevisionNote findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemRevisionNote filtered by the InitItemNbr column
 * @method     ChildItemRevisionNote findOneByItemnotedate(string $ItemNoteDate) Return the first ChildItemRevisionNote filtered by the ItemNoteDate column
 * @method     ChildItemRevisionNote findOneByItemnotetime(string $ItemNoteTime) Return the first ChildItemRevisionNote filtered by the ItemNoteTime column
 * @method     ChildItemRevisionNote findOneByItemnoterevision(string $ItemNoteRevision) Return the first ChildItemRevisionNote filtered by the ItemNoteRevision column
 * @method     ChildItemRevisionNote findOneByItemnoteseq(int $ItemNoteSeq) Return the first ChildItemRevisionNote filtered by the ItemNoteSeq column
 * @method     ChildItemRevisionNote findOneByItemnotenote(string $ItemNoteNote) Return the first ChildItemRevisionNote filtered by the ItemNoteNote column
 * @method     ChildItemRevisionNote findOneByItemnoteuser(string $ItemNoteUser) Return the first ChildItemRevisionNote filtered by the ItemNoteUser column
 * @method     ChildItemRevisionNote findOneByItemnotekey2(string $ItemNoteKey2) Return the first ChildItemRevisionNote filtered by the ItemNoteKey2 column
 * @method     ChildItemRevisionNote findOneByItemnoteform(string $ItemNoteForm) Return the first ChildItemRevisionNote filtered by the ItemNoteForm column
 * @method     ChildItemRevisionNote findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemRevisionNote filtered by the DateUpdtd column
 * @method     ChildItemRevisionNote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemRevisionNote filtered by the TimeUpdtd column
 * @method     ChildItemRevisionNote findOneByDummy(string $dummy) Return the first ChildItemRevisionNote filtered by the dummy column *

 * @method     ChildItemRevisionNote requirePk($key, ConnectionInterface $con = null) Return the ChildItemRevisionNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOne(ConnectionInterface $con = null) Return the first ChildItemRevisionNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemRevisionNote requireOneByItemnotetype(string $ItemNoteType) Return the first ChildItemRevisionNote filtered by the ItemNoteType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnotetypedesc(string $ItemNoteTypeDesc) Return the first ChildItemRevisionNote filtered by the ItemNoteTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemRevisionNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnotedate(string $ItemNoteDate) Return the first ChildItemRevisionNote filtered by the ItemNoteDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnotetime(string $ItemNoteTime) Return the first ChildItemRevisionNote filtered by the ItemNoteTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnoterevision(string $ItemNoteRevision) Return the first ChildItemRevisionNote filtered by the ItemNoteRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnoteseq(int $ItemNoteSeq) Return the first ChildItemRevisionNote filtered by the ItemNoteSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnotenote(string $ItemNoteNote) Return the first ChildItemRevisionNote filtered by the ItemNoteNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnoteuser(string $ItemNoteUser) Return the first ChildItemRevisionNote filtered by the ItemNoteUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnotekey2(string $ItemNoteKey2) Return the first ChildItemRevisionNote filtered by the ItemNoteKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByItemnoteform(string $ItemNoteForm) Return the first ChildItemRevisionNote filtered by the ItemNoteForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemRevisionNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemRevisionNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemRevisionNote requireOneByDummy(string $dummy) Return the first ChildItemRevisionNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemRevisionNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemRevisionNote objects based on current ModelCriteria
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnotetype(string $ItemNoteType) Return ChildItemRevisionNote objects filtered by the ItemNoteType column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnotetypedesc(string $ItemNoteTypeDesc) Return ChildItemRevisionNote objects filtered by the ItemNoteTypeDesc column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemRevisionNote objects filtered by the InitItemNbr column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnotedate(string $ItemNoteDate) Return ChildItemRevisionNote objects filtered by the ItemNoteDate column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnotetime(string $ItemNoteTime) Return ChildItemRevisionNote objects filtered by the ItemNoteTime column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnoterevision(string $ItemNoteRevision) Return ChildItemRevisionNote objects filtered by the ItemNoteRevision column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnoteseq(int $ItemNoteSeq) Return ChildItemRevisionNote objects filtered by the ItemNoteSeq column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnotenote(string $ItemNoteNote) Return ChildItemRevisionNote objects filtered by the ItemNoteNote column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnoteuser(string $ItemNoteUser) Return ChildItemRevisionNote objects filtered by the ItemNoteUser column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnotekey2(string $ItemNoteKey2) Return ChildItemRevisionNote objects filtered by the ItemNoteKey2 column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByItemnoteform(string $ItemNoteForm) Return ChildItemRevisionNote objects filtered by the ItemNoteForm column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemRevisionNote objects filtered by the DateUpdtd column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemRevisionNote objects filtered by the TimeUpdtd column
 * @method     ChildItemRevisionNote[]|ObjectCollection findByDummy(string $dummy) Return ChildItemRevisionNote objects filtered by the dummy column
 * @method     ChildItemRevisionNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemRevisionNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemRevisionNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemRevisionNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemRevisionNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemRevisionNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemRevisionNoteQuery) {
            return $criteria;
        }
        $query = new ChildItemRevisionNoteQuery();
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
     * @param array[$ItemNoteType, $ItemNoteSeq, $ItemNoteUser, $ItemNoteKey2, $ItemNoteForm] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemRevisionNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemRevisionNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemRevisionNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]))))) {
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
     * @return ChildItemRevisionNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ItemNoteType, ItemNoteTypeDesc, InitItemNbr, ItemNoteDate, ItemNoteTime, ItemNoteRevision, ItemNoteSeq, ItemNoteNote, ItemNoteUser, ItemNoteKey2, ItemNoteForm, DateUpdtd, TimeUpdtd, dummy FROM notes_item_revision WHERE ItemNoteType = :p0 AND ItemNoteSeq = :p1 AND ItemNoteUser = :p2 AND ItemNoteKey2 = :p3 AND ItemNoteForm = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemRevisionNote $obj */
            $obj = new ChildItemRevisionNote();
            $obj->hydrate($row);
            ItemRevisionNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]));
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
     * @return ChildItemRevisionNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEUSER, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEFORM, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTEUSER, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ItemRevisionNoteTableMap::COL_ITEMNOTEFORM, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ItemNoteType column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnotetype('fooValue');   // WHERE ItemNoteType = 'fooValue'
     * $query->filterByItemnotetype('%fooValue%', Criteria::LIKE); // WHERE ItemNoteType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnotetype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnotetype($itemnotetype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnotetype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE, $itemnotetype, $comparison);
    }

    /**
     * Filter the query on the ItemNoteTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnotetypedesc('fooValue');   // WHERE ItemNoteTypeDesc = 'fooValue'
     * $query->filterByItemnotetypedesc('%fooValue%', Criteria::LIKE); // WHERE ItemNoteTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnotetypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnotetypedesc($itemnotetypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnotetypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTETYPEDESC, $itemnotetypedesc, $comparison);
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
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the ItemNoteDate column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnotedate('fooValue');   // WHERE ItemNoteDate = 'fooValue'
     * $query->filterByItemnotedate('%fooValue%', Criteria::LIKE); // WHERE ItemNoteDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnotedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnotedate($itemnotedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnotedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEDATE, $itemnotedate, $comparison);
    }

    /**
     * Filter the query on the ItemNoteTime column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnotetime('fooValue');   // WHERE ItemNoteTime = 'fooValue'
     * $query->filterByItemnotetime('%fooValue%', Criteria::LIKE); // WHERE ItemNoteTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnotetime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnotetime($itemnotetime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnotetime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTETIME, $itemnotetime, $comparison);
    }

    /**
     * Filter the query on the ItemNoteRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnoterevision('fooValue');   // WHERE ItemNoteRevision = 'fooValue'
     * $query->filterByItemnoterevision('%fooValue%', Criteria::LIKE); // WHERE ItemNoteRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnoterevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnoterevision($itemnoterevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnoterevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEREVISION, $itemnoterevision, $comparison);
    }

    /**
     * Filter the query on the ItemNoteSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnoteseq(1234); // WHERE ItemNoteSeq = 1234
     * $query->filterByItemnoteseq(array(12, 34)); // WHERE ItemNoteSeq IN (12, 34)
     * $query->filterByItemnoteseq(array('min' => 12)); // WHERE ItemNoteSeq > 12
     * </code>
     *
     * @param     mixed $itemnoteseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnoteseq($itemnoteseq = null, $comparison = null)
    {
        if (is_array($itemnoteseq)) {
            $useMinMax = false;
            if (isset($itemnoteseq['min'])) {
                $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, $itemnoteseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnoteseq['max'])) {
                $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, $itemnoteseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ, $itemnoteseq, $comparison);
    }

    /**
     * Filter the query on the ItemNoteNote column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnotenote('fooValue');   // WHERE ItemNoteNote = 'fooValue'
     * $query->filterByItemnotenote('%fooValue%', Criteria::LIKE); // WHERE ItemNoteNote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnotenote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnotenote($itemnotenote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnotenote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTENOTE, $itemnotenote, $comparison);
    }

    /**
     * Filter the query on the ItemNoteUser column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnoteuser('fooValue');   // WHERE ItemNoteUser = 'fooValue'
     * $query->filterByItemnoteuser('%fooValue%', Criteria::LIKE); // WHERE ItemNoteUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnoteuser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnoteuser($itemnoteuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnoteuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEUSER, $itemnoteuser, $comparison);
    }

    /**
     * Filter the query on the ItemNoteKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnotekey2('fooValue');   // WHERE ItemNoteKey2 = 'fooValue'
     * $query->filterByItemnotekey2('%fooValue%', Criteria::LIKE); // WHERE ItemNoteKey2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnotekey2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnotekey2($itemnotekey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnotekey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2, $itemnotekey2, $comparison);
    }

    /**
     * Filter the query on the ItemNoteForm column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnoteform('fooValue');   // WHERE ItemNoteForm = 'fooValue'
     * $query->filterByItemnoteform('%fooValue%', Criteria::LIKE); // WHERE ItemNoteForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemnoteform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByItemnoteform($itemnoteform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemnoteform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_ITEMNOTEFORM, $itemnoteform, $comparison);
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
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemRevisionNoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemRevisionNote $itemRevisionNote Object to remove from the list of results
     *
     * @return $this|ChildItemRevisionNoteQuery The current query, for fluid interface
     */
    public function prune($itemRevisionNote = null)
    {
        if ($itemRevisionNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemRevisionNoteTableMap::COL_ITEMNOTETYPE), $itemRevisionNote->getItemnotetype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemRevisionNoteTableMap::COL_ITEMNOTESEQ), $itemRevisionNote->getItemnoteseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemRevisionNoteTableMap::COL_ITEMNOTEUSER), $itemRevisionNote->getItemnoteuser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemRevisionNoteTableMap::COL_ITEMNOTEKEY2), $itemRevisionNote->getItemnotekey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ItemRevisionNoteTableMap::COL_ITEMNOTEFORM), $itemRevisionNote->getItemnoteform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_item_revision table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemRevisionNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemRevisionNoteTableMap::clearInstancePool();
            ItemRevisionNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemRevisionNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemRevisionNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemRevisionNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemRevisionNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemRevisionNoteQuery
