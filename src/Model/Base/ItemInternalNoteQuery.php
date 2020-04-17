<?php

namespace Base;

use \ItemInternalNote as ChildItemInternalNote;
use \ItemInternalNoteQuery as ChildItemInternalNoteQuery;
use \Exception;
use \PDO;
use Map\ItemInternalNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_item_internal' table.
 *
 *
 *
 * @method     ChildItemInternalNoteQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildItemInternalNoteQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildItemInternalNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemInternalNoteQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildItemInternalNoteQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildItemInternalNoteQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildItemInternalNoteQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildItemInternalNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemInternalNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemInternalNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemInternalNoteQuery groupByQntype() Group by the QnType column
 * @method     ChildItemInternalNoteQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildItemInternalNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemInternalNoteQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildItemInternalNoteQuery groupByQnnote() Group by the QnNote column
 * @method     ChildItemInternalNoteQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildItemInternalNoteQuery groupByQnform() Group by the QnForm column
 * @method     ChildItemInternalNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemInternalNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemInternalNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemInternalNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemInternalNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemInternalNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemInternalNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemInternalNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemInternalNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemInternalNote findOne(ConnectionInterface $con = null) Return the first ChildItemInternalNote matching the query
 * @method     ChildItemInternalNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemInternalNote matching the query, or a new ChildItemInternalNote object populated from the query conditions when no match is found
 *
 * @method     ChildItemInternalNote findOneByQntype(string $QnType) Return the first ChildItemInternalNote filtered by the QnType column
 * @method     ChildItemInternalNote findOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemInternalNote filtered by the QnTypeDesc column
 * @method     ChildItemInternalNote findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemInternalNote filtered by the InitItemNbr column
 * @method     ChildItemInternalNote findOneByQnseq(int $QnSeq) Return the first ChildItemInternalNote filtered by the QnSeq column
 * @method     ChildItemInternalNote findOneByQnnote(string $QnNote) Return the first ChildItemInternalNote filtered by the QnNote column
 * @method     ChildItemInternalNote findOneByQnkey2(string $QnKey2) Return the first ChildItemInternalNote filtered by the QnKey2 column
 * @method     ChildItemInternalNote findOneByQnform(string $QnForm) Return the first ChildItemInternalNote filtered by the QnForm column
 * @method     ChildItemInternalNote findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemInternalNote filtered by the DateUpdtd column
 * @method     ChildItemInternalNote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemInternalNote filtered by the TimeUpdtd column
 * @method     ChildItemInternalNote findOneByDummy(string $dummy) Return the first ChildItemInternalNote filtered by the dummy column *

 * @method     ChildItemInternalNote requirePk($key, ConnectionInterface $con = null) Return the ChildItemInternalNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOne(ConnectionInterface $con = null) Return the first ChildItemInternalNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemInternalNote requireOneByQntype(string $QnType) Return the first ChildItemInternalNote filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildItemInternalNote filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemInternalNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByQnseq(int $QnSeq) Return the first ChildItemInternalNote filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByQnnote(string $QnNote) Return the first ChildItemInternalNote filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByQnkey2(string $QnKey2) Return the first ChildItemInternalNote filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByQnform(string $QnForm) Return the first ChildItemInternalNote filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemInternalNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemInternalNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemInternalNote requireOneByDummy(string $dummy) Return the first ChildItemInternalNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemInternalNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemInternalNote objects based on current ModelCriteria
 * @method     ChildItemInternalNote[]|ObjectCollection findByQntype(string $QnType) Return ChildItemInternalNote objects filtered by the QnType column
 * @method     ChildItemInternalNote[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildItemInternalNote objects filtered by the QnTypeDesc column
 * @method     ChildItemInternalNote[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemInternalNote objects filtered by the InitItemNbr column
 * @method     ChildItemInternalNote[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildItemInternalNote objects filtered by the QnSeq column
 * @method     ChildItemInternalNote[]|ObjectCollection findByQnnote(string $QnNote) Return ChildItemInternalNote objects filtered by the QnNote column
 * @method     ChildItemInternalNote[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildItemInternalNote objects filtered by the QnKey2 column
 * @method     ChildItemInternalNote[]|ObjectCollection findByQnform(string $QnForm) Return ChildItemInternalNote objects filtered by the QnForm column
 * @method     ChildItemInternalNote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemInternalNote objects filtered by the DateUpdtd column
 * @method     ChildItemInternalNote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemInternalNote objects filtered by the TimeUpdtd column
 * @method     ChildItemInternalNote[]|ObjectCollection findByDummy(string $dummy) Return ChildItemInternalNote objects filtered by the dummy column
 * @method     ChildItemInternalNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemInternalNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemInternalNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemInternalNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemInternalNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemInternalNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemInternalNoteQuery) {
            return $criteria;
        }
        $query = new ChildItemInternalNoteQuery();
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
     * @return ChildItemInternalNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemInternalNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemInternalNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildItemInternalNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, InitItemNbr, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_item_internal WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildItemInternalNote $obj */
            $obj = new ChildItemInternalNote();
            $obj->hydrate($row);
            ItemInternalNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildItemInternalNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemInternalNoteTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemInternalNoteTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemInternalNoteTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemInternalNoteTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemInternalNoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemInternalNote $itemInternalNote Object to remove from the list of results
     *
     * @return $this|ChildItemInternalNoteQuery The current query, for fluid interface
     */
    public function prune($itemInternalNote = null)
    {
        if ($itemInternalNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemInternalNoteTableMap::COL_QNTYPE), $itemInternalNote->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemInternalNoteTableMap::COL_QNSEQ), $itemInternalNote->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemInternalNoteTableMap::COL_QNKEY2), $itemInternalNote->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemInternalNoteTableMap::COL_QNFORM), $itemInternalNote->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_item_internal table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInternalNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemInternalNoteTableMap::clearInstancePool();
            ItemInternalNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemInternalNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemInternalNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemInternalNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemInternalNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemInternalNoteQuery
