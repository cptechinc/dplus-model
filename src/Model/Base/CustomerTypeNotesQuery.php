<?php

namespace Base;

use \CustomerTypeNotes as ChildCustomerTypeNotes;
use \CustomerTypeNotesQuery as ChildCustomerTypeNotesQuery;
use \Exception;
use \PDO;
use Map\CustomerTypeNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_cust_type' table.
 *
 *
 *
 * @method     ChildCustomerTypeNotesQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildCustomerTypeNotesQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildCustomerTypeNotesQuery orderByArtbtypecode($order = Criteria::ASC) Order by the ArtbTypeCode column
 * @method     ChildCustomerTypeNotesQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildCustomerTypeNotesQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildCustomerTypeNotesQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildCustomerTypeNotesQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildCustomerTypeNotesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerTypeNotesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerTypeNotesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerTypeNotesQuery groupByQntype() Group by the QnType column
 * @method     ChildCustomerTypeNotesQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildCustomerTypeNotesQuery groupByArtbtypecode() Group by the ArtbTypeCode column
 * @method     ChildCustomerTypeNotesQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildCustomerTypeNotesQuery groupByQnnote() Group by the QnNote column
 * @method     ChildCustomerTypeNotesQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildCustomerTypeNotesQuery groupByQnform() Group by the QnForm column
 * @method     ChildCustomerTypeNotesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerTypeNotesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerTypeNotesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerTypeNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerTypeNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerTypeNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerTypeNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerTypeNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerTypeNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerTypeNotes findOne(ConnectionInterface $con = null) Return the first ChildCustomerTypeNotes matching the query
 * @method     ChildCustomerTypeNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerTypeNotes matching the query, or a new ChildCustomerTypeNotes object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerTypeNotes findOneByQntype(string $QnType) Return the first ChildCustomerTypeNotes filtered by the QnType column
 * @method     ChildCustomerTypeNotes findOneByQntypedesc(string $QnTypeDesc) Return the first ChildCustomerTypeNotes filtered by the QnTypeDesc column
 * @method     ChildCustomerTypeNotes findOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildCustomerTypeNotes filtered by the ArtbTypeCode column
 * @method     ChildCustomerTypeNotes findOneByQnseq(int $QnSeq) Return the first ChildCustomerTypeNotes filtered by the QnSeq column
 * @method     ChildCustomerTypeNotes findOneByQnnote(string $QnNote) Return the first ChildCustomerTypeNotes filtered by the QnNote column
 * @method     ChildCustomerTypeNotes findOneByQnkey2(string $QnKey2) Return the first ChildCustomerTypeNotes filtered by the QnKey2 column
 * @method     ChildCustomerTypeNotes findOneByQnform(string $QnForm) Return the first ChildCustomerTypeNotes filtered by the QnForm column
 * @method     ChildCustomerTypeNotes findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerTypeNotes filtered by the DateUpdtd column
 * @method     ChildCustomerTypeNotes findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerTypeNotes filtered by the TimeUpdtd column
 * @method     ChildCustomerTypeNotes findOneByDummy(string $dummy) Return the first ChildCustomerTypeNotes filtered by the dummy column *

 * @method     ChildCustomerTypeNotes requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerTypeNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOne(ConnectionInterface $con = null) Return the first ChildCustomerTypeNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerTypeNotes requireOneByQntype(string $QnType) Return the first ChildCustomerTypeNotes filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildCustomerTypeNotes filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildCustomerTypeNotes filtered by the ArtbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByQnseq(int $QnSeq) Return the first ChildCustomerTypeNotes filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByQnnote(string $QnNote) Return the first ChildCustomerTypeNotes filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByQnkey2(string $QnKey2) Return the first ChildCustomerTypeNotes filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByQnform(string $QnForm) Return the first ChildCustomerTypeNotes filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerTypeNotes filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerTypeNotes filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerTypeNotes requireOneByDummy(string $dummy) Return the first ChildCustomerTypeNotes filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerTypeNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerTypeNotes objects based on current ModelCriteria
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByQntype(string $QnType) Return ChildCustomerTypeNotes objects filtered by the QnType column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByQntypedesc(string $QnTypeDesc) Return ChildCustomerTypeNotes objects filtered by the QnTypeDesc column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByArtbtypecode(string $ArtbTypeCode) Return ChildCustomerTypeNotes objects filtered by the ArtbTypeCode column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByQnseq(int $QnSeq) Return ChildCustomerTypeNotes objects filtered by the QnSeq column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByQnnote(string $QnNote) Return ChildCustomerTypeNotes objects filtered by the QnNote column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByQnkey2(string $QnKey2) Return ChildCustomerTypeNotes objects filtered by the QnKey2 column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByQnform(string $QnForm) Return ChildCustomerTypeNotes objects filtered by the QnForm column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerTypeNotes objects filtered by the DateUpdtd column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerTypeNotes objects filtered by the TimeUpdtd column
 * @method     ChildCustomerTypeNotes[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerTypeNotes objects filtered by the dummy column
 * @method     ChildCustomerTypeNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerTypeNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerTypeNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerTypeNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerTypeNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerTypeNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerTypeNotesQuery) {
            return $criteria;
        }
        $query = new ChildCustomerTypeNotesQuery();
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
     * @return ChildCustomerTypeNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerTypeNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerTypeNotesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCustomerTypeNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, ArtbTypeCode, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_cust_type WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildCustomerTypeNotes $obj */
            $obj = new ChildCustomerTypeNotes();
            $obj->hydrate($row);
            CustomerTypeNotesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCustomerTypeNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CustomerTypeNotesTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CustomerTypeNotesTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CustomerTypeNotesTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CustomerTypeNotesTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNTYPE, $qntype, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);
    }

    /**
     * Filter the query on the ArtbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtypecode('fooValue');   // WHERE ArtbTypeCode = 'fooValue'
     * $query->filterByArtbtypecode('%fooValue%', Criteria::LIKE); // WHERE ArtbTypeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbtypecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByArtbtypecode($artbtypecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_ARTBTYPECODE, $artbtypecode, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNSEQ, $qnseq, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNNOTE, $qnnote, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNKEY2, $qnkey2, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_QNFORM, $qnform, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTypeNotesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomerTypeNotes $customerTypeNotes Object to remove from the list of results
     *
     * @return $this|ChildCustomerTypeNotesQuery The current query, for fluid interface
     */
    public function prune($customerTypeNotes = null)
    {
        if ($customerTypeNotes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CustomerTypeNotesTableMap::COL_QNTYPE), $customerTypeNotes->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CustomerTypeNotesTableMap::COL_QNSEQ), $customerTypeNotes->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CustomerTypeNotesTableMap::COL_QNKEY2), $customerTypeNotes->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CustomerTypeNotesTableMap::COL_QNFORM), $customerTypeNotes->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_cust_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTypeNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerTypeNotesTableMap::clearInstancePool();
            CustomerTypeNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTypeNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerTypeNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerTypeNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerTypeNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerTypeNotesQuery
