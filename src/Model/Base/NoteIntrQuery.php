<?php

namespace Base;

use \NoteIntr as ChildNoteIntr;
use \NoteIntrQuery as ChildNoteIntrQuery;
use \Exception;
use \PDO;
use Map\NoteIntrTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_tran_head_det' table.
 *
 *
 *
 * @method     ChildNoteIntrQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildNoteIntrQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildNoteIntrQuery orderByInhdnbr($order = Criteria::ASC) Order by the InhdNbr column
 * @method     ChildNoteIntrQuery orderByIndtline($order = Criteria::ASC) Order by the IndtLine column
 * @method     ChildNoteIntrQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildNoteIntrQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildNoteIntrQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildNoteIntrQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildNoteIntrQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildNoteIntrQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildNoteIntrQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildNoteIntrQuery groupByQntype() Group by the QnType column
 * @method     ChildNoteIntrQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildNoteIntrQuery groupByInhdnbr() Group by the InhdNbr column
 * @method     ChildNoteIntrQuery groupByIndtline() Group by the IndtLine column
 * @method     ChildNoteIntrQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildNoteIntrQuery groupByQnnote() Group by the QnNote column
 * @method     ChildNoteIntrQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildNoteIntrQuery groupByQnform() Group by the QnForm column
 * @method     ChildNoteIntrQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildNoteIntrQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildNoteIntrQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildNoteIntrQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildNoteIntrQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildNoteIntrQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildNoteIntrQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildNoteIntrQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildNoteIntrQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildNoteIntr findOne(ConnectionInterface $con = null) Return the first ChildNoteIntr matching the query
 * @method     ChildNoteIntr findOneOrCreate(ConnectionInterface $con = null) Return the first ChildNoteIntr matching the query, or a new ChildNoteIntr object populated from the query conditions when no match is found
 *
 * @method     ChildNoteIntr findOneByQntype(string $QnType) Return the first ChildNoteIntr filtered by the QnType column
 * @method     ChildNoteIntr findOneByQntypedesc(string $QnTypeDesc) Return the first ChildNoteIntr filtered by the QnTypeDesc column
 * @method     ChildNoteIntr findOneByInhdnbr(string $InhdNbr) Return the first ChildNoteIntr filtered by the InhdNbr column
 * @method     ChildNoteIntr findOneByIndtline(int $IndtLine) Return the first ChildNoteIntr filtered by the IndtLine column
 * @method     ChildNoteIntr findOneByQnseq(int $QnSeq) Return the first ChildNoteIntr filtered by the QnSeq column
 * @method     ChildNoteIntr findOneByQnnote(string $QnNote) Return the first ChildNoteIntr filtered by the QnNote column
 * @method     ChildNoteIntr findOneByQnkey2(string $QnKey2) Return the first ChildNoteIntr filtered by the QnKey2 column
 * @method     ChildNoteIntr findOneByQnform(string $QnForm) Return the first ChildNoteIntr filtered by the QnForm column
 * @method     ChildNoteIntr findOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteIntr filtered by the DateUpdtd column
 * @method     ChildNoteIntr findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteIntr filtered by the TimeUpdtd column
 * @method     ChildNoteIntr findOneByDummy(string $dummy) Return the first ChildNoteIntr filtered by the dummy column *

 * @method     ChildNoteIntr requirePk($key, ConnectionInterface $con = null) Return the ChildNoteIntr by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOne(ConnectionInterface $con = null) Return the first ChildNoteIntr matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteIntr requireOneByQntype(string $QnType) Return the first ChildNoteIntr filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildNoteIntr filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByInhdnbr(string $InhdNbr) Return the first ChildNoteIntr filtered by the InhdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByIndtline(int $IndtLine) Return the first ChildNoteIntr filtered by the IndtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByQnseq(int $QnSeq) Return the first ChildNoteIntr filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByQnnote(string $QnNote) Return the first ChildNoteIntr filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByQnkey2(string $QnKey2) Return the first ChildNoteIntr filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByQnform(string $QnForm) Return the first ChildNoteIntr filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteIntr filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteIntr filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteIntr requireOneByDummy(string $dummy) Return the first ChildNoteIntr filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteIntr[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildNoteIntr objects based on current ModelCriteria
 * @method     ChildNoteIntr[]|ObjectCollection findByQntype(string $QnType) Return ChildNoteIntr objects filtered by the QnType column
 * @method     ChildNoteIntr[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildNoteIntr objects filtered by the QnTypeDesc column
 * @method     ChildNoteIntr[]|ObjectCollection findByInhdnbr(string $InhdNbr) Return ChildNoteIntr objects filtered by the InhdNbr column
 * @method     ChildNoteIntr[]|ObjectCollection findByIndtline(int $IndtLine) Return ChildNoteIntr objects filtered by the IndtLine column
 * @method     ChildNoteIntr[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildNoteIntr objects filtered by the QnSeq column
 * @method     ChildNoteIntr[]|ObjectCollection findByQnnote(string $QnNote) Return ChildNoteIntr objects filtered by the QnNote column
 * @method     ChildNoteIntr[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildNoteIntr objects filtered by the QnKey2 column
 * @method     ChildNoteIntr[]|ObjectCollection findByQnform(string $QnForm) Return ChildNoteIntr objects filtered by the QnForm column
 * @method     ChildNoteIntr[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildNoteIntr objects filtered by the DateUpdtd column
 * @method     ChildNoteIntr[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildNoteIntr objects filtered by the TimeUpdtd column
 * @method     ChildNoteIntr[]|ObjectCollection findByDummy(string $dummy) Return ChildNoteIntr objects filtered by the dummy column
 * @method     ChildNoteIntr[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class NoteIntrQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\NoteIntrQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\NoteIntr', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildNoteIntrQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildNoteIntrQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildNoteIntrQuery) {
            return $criteria;
        }
        $query = new ChildNoteIntrQuery();
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
     * @return ChildNoteIntr|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(NoteIntrTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = NoteIntrTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildNoteIntr A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, InhdNbr, IndtLine, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_tran_head_det WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildNoteIntr $obj */
            $obj = new ChildNoteIntr();
            $obj->hydrate($row);
            NoteIntrTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildNoteIntr|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(NoteIntrTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(NoteIntrTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(NoteIntrTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(NoteIntrTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(NoteIntrTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(NoteIntrTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(NoteIntrTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(NoteIntrTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
    }

    /**
     * Filter the query on the InhdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInhdnbr('fooValue');   // WHERE InhdNbr = 'fooValue'
     * $query->filterByInhdnbr('%fooValue%', Criteria::LIKE); // WHERE InhdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByInhdnbr($inhdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_INHDNBR, $inhdnbr, $comparison);
    }

    /**
     * Filter the query on the IndtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIndtline(1234); // WHERE IndtLine = 1234
     * $query->filterByIndtline(array(12, 34)); // WHERE IndtLine IN (12, 34)
     * $query->filterByIndtline(array('min' => 12)); // WHERE IndtLine > 12
     * </code>
     *
     * @param     mixed $indtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByIndtline($indtline = null, $comparison = null)
    {
        if (is_array($indtline)) {
            $useMinMax = false;
            if (isset($indtline['min'])) {
                $this->addUsingAlias(NoteIntrTableMap::COL_INDTLINE, $indtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indtline['max'])) {
                $this->addUsingAlias(NoteIntrTableMap::COL_INDTLINE, $indtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_INDTLINE, $indtline, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(NoteIntrTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(NoteIntrTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteIntrTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildNoteIntr $noteIntr Object to remove from the list of results
     *
     * @return $this|ChildNoteIntrQuery The current query, for fluid interface
     */
    public function prune($noteIntr = null)
    {
        if ($noteIntr) {
            $this->addCond('pruneCond0', $this->getAliasedColName(NoteIntrTableMap::COL_QNTYPE), $noteIntr->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(NoteIntrTableMap::COL_QNSEQ), $noteIntr->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(NoteIntrTableMap::COL_QNKEY2), $noteIntr->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(NoteIntrTableMap::COL_QNFORM), $noteIntr->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_tran_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NoteIntrTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NoteIntrTableMap::clearInstancePool();
            NoteIntrTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(NoteIntrTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(NoteIntrTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            NoteIntrTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            NoteIntrTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // NoteIntrQuery
