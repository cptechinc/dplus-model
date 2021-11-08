<?php

namespace Base;

use \InvOptCodeNote as ChildInvOptCodeNote;
use \InvOptCodeNoteQuery as ChildInvOptCodeNoteQuery;
use \Exception;
use \PDO;
use Map\InvOptCodeNoteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_opt_code_in' table.
 *
 *
 *
 * @method     ChildInvOptCodeNoteQuery orderByQnoptsys($order = Criteria::ASC) Order by the QnOptSys column
 * @method     ChildInvOptCodeNoteQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildInvOptCodeNoteQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildInvOptCodeNoteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvOptCodeNoteQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildInvOptCodeNoteQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildInvOptCodeNoteQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildInvOptCodeNoteQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildInvOptCodeNoteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvOptCodeNoteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvOptCodeNoteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvOptCodeNoteQuery groupByQnoptsys() Group by the QnOptSys column
 * @method     ChildInvOptCodeNoteQuery groupByQntype() Group by the QnType column
 * @method     ChildInvOptCodeNoteQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildInvOptCodeNoteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvOptCodeNoteQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildInvOptCodeNoteQuery groupByQnnote() Group by the QnNote column
 * @method     ChildInvOptCodeNoteQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildInvOptCodeNoteQuery groupByQnform() Group by the QnForm column
 * @method     ChildInvOptCodeNoteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvOptCodeNoteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvOptCodeNoteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvOptCodeNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvOptCodeNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvOptCodeNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvOptCodeNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvOptCodeNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvOptCodeNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvOptCodeNoteQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvOptCodeNoteQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvOptCodeNoteQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvOptCodeNoteQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvOptCodeNoteQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvOptCodeNoteQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvOptCodeNoteQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvOptCodeNote findOne(ConnectionInterface $con = null) Return the first ChildInvOptCodeNote matching the query
 * @method     ChildInvOptCodeNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvOptCodeNote matching the query, or a new ChildInvOptCodeNote object populated from the query conditions when no match is found
 *
 * @method     ChildInvOptCodeNote findOneByQnoptsys(string $QnOptSys) Return the first ChildInvOptCodeNote filtered by the QnOptSys column
 * @method     ChildInvOptCodeNote findOneByQntype(string $QnType) Return the first ChildInvOptCodeNote filtered by the QnType column
 * @method     ChildInvOptCodeNote findOneByQntypedesc(string $QnTypeDesc) Return the first ChildInvOptCodeNote filtered by the QnTypeDesc column
 * @method     ChildInvOptCodeNote findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvOptCodeNote filtered by the InitItemNbr column
 * @method     ChildInvOptCodeNote findOneByQnseq(int $QnSeq) Return the first ChildInvOptCodeNote filtered by the QnSeq column
 * @method     ChildInvOptCodeNote findOneByQnnote(string $QnNote) Return the first ChildInvOptCodeNote filtered by the QnNote column
 * @method     ChildInvOptCodeNote findOneByQnkey2(string $QnKey2) Return the first ChildInvOptCodeNote filtered by the QnKey2 column
 * @method     ChildInvOptCodeNote findOneByQnform(string $QnForm) Return the first ChildInvOptCodeNote filtered by the QnForm column
 * @method     ChildInvOptCodeNote findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvOptCodeNote filtered by the DateUpdtd column
 * @method     ChildInvOptCodeNote findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvOptCodeNote filtered by the TimeUpdtd column
 * @method     ChildInvOptCodeNote findOneByDummy(string $dummy) Return the first ChildInvOptCodeNote filtered by the dummy column *

 * @method     ChildInvOptCodeNote requirePk($key, ConnectionInterface $con = null) Return the ChildInvOptCodeNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOne(ConnectionInterface $con = null) Return the first ChildInvOptCodeNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvOptCodeNote requireOneByQnoptsys(string $QnOptSys) Return the first ChildInvOptCodeNote filtered by the QnOptSys column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByQntype(string $QnType) Return the first ChildInvOptCodeNote filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildInvOptCodeNote filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvOptCodeNote filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByQnseq(int $QnSeq) Return the first ChildInvOptCodeNote filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByQnnote(string $QnNote) Return the first ChildInvOptCodeNote filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByQnkey2(string $QnKey2) Return the first ChildInvOptCodeNote filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByQnform(string $QnForm) Return the first ChildInvOptCodeNote filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvOptCodeNote filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvOptCodeNote filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCodeNote requireOneByDummy(string $dummy) Return the first ChildInvOptCodeNote filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvOptCodeNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvOptCodeNote objects based on current ModelCriteria
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQnoptsys(string $QnOptSys) Return ChildInvOptCodeNote objects filtered by the QnOptSys column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQntype(string $QnType) Return ChildInvOptCodeNote objects filtered by the QnType column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildInvOptCodeNote objects filtered by the QnTypeDesc column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvOptCodeNote objects filtered by the InitItemNbr column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildInvOptCodeNote objects filtered by the QnSeq column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQnnote(string $QnNote) Return ChildInvOptCodeNote objects filtered by the QnNote column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildInvOptCodeNote objects filtered by the QnKey2 column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByQnform(string $QnForm) Return ChildInvOptCodeNote objects filtered by the QnForm column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvOptCodeNote objects filtered by the DateUpdtd column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvOptCodeNote objects filtered by the TimeUpdtd column
 * @method     ChildInvOptCodeNote[]|ObjectCollection findByDummy(string $dummy) Return ChildInvOptCodeNote objects filtered by the dummy column
 * @method     ChildInvOptCodeNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvOptCodeNoteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvOptCodeNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvOptCodeNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvOptCodeNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvOptCodeNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvOptCodeNoteQuery) {
            return $criteria;
        }
        $query = new ChildInvOptCodeNoteQuery();
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
     * @param array[$QnOptSys, $QnType, $QnSeq, $QnKey2, $QnForm] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvOptCodeNote|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvOptCodeNoteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvOptCodeNoteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]))))) {
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
     * @return ChildInvOptCodeNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnOptSys, QnType, QnTypeDesc, InitItemNbr, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_opt_code_in WHERE QnOptSys = :p0 AND QnType = :p1 AND QnSeq = :p2 AND QnKey2 = :p3 AND QnForm = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvOptCodeNote $obj */
            $obj = new ChildInvOptCodeNote();
            $obj->hydrate($row);
            InvOptCodeNoteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4])]));
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
     * @return ChildInvOptCodeNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNOPTSYS, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNTYPE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNKEY2, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNFORM, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvOptCodeNoteTableMap::COL_QNOPTSYS, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvOptCodeNoteTableMap::COL_QNTYPE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvOptCodeNoteTableMap::COL_QNSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(InvOptCodeNoteTableMap::COL_QNKEY2, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(InvOptCodeNoteTableMap::COL_QNFORM, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the QnOptSys column
     *
     * Example usage:
     * <code>
     * $query->filterByQnoptsys('fooValue');   // WHERE QnOptSys = 'fooValue'
     * $query->filterByQnoptsys('%fooValue%', Criteria::LIKE); // WHERE QnOptSys LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qnoptsys The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQnoptsys($qnoptsys = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnoptsys)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNOPTSYS, $qnoptsys, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvOptCodeNoteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvOptCodeNoteTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvOptCodeNoteTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvOptCodeNote $invOptCodeNote Object to remove from the list of results
     *
     * @return $this|ChildInvOptCodeNoteQuery The current query, for fluid interface
     */
    public function prune($invOptCodeNote = null)
    {
        if ($invOptCodeNote) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvOptCodeNoteTableMap::COL_QNOPTSYS), $invOptCodeNote->getQnoptsys(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvOptCodeNoteTableMap::COL_QNTYPE), $invOptCodeNote->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvOptCodeNoteTableMap::COL_QNSEQ), $invOptCodeNote->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(InvOptCodeNoteTableMap::COL_QNKEY2), $invOptCodeNote->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(InvOptCodeNoteTableMap::COL_QNFORM), $invOptCodeNote->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_opt_code_in table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvOptCodeNoteTableMap::clearInstancePool();
            InvOptCodeNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvOptCodeNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvOptCodeNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvOptCodeNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvOptCodeNoteQuery
