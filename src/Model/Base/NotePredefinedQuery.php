<?php

namespace Base;

use \NotePredefined as ChildNotePredefined;
use \NotePredefinedQuery as ChildNotePredefinedQuery;
use \Exception;
use \PDO;
use Map\NotePredefinedTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `notes_pre_defined` table.
 *
 * @method     ChildNotePredefinedQuery orderByQntype($order = Criteria::ASC) Order by the QnType column
 * @method     ChildNotePredefinedQuery orderByQntypedesc($order = Criteria::ASC) Order by the QnTypeDesc column
 * @method     ChildNotePredefinedQuery orderByQnpdntcode($order = Criteria::ASC) Order by the QnPdntCode column
 * @method     ChildNotePredefinedQuery orderByQnseq($order = Criteria::ASC) Order by the QnSeq column
 * @method     ChildNotePredefinedQuery orderByQnnote($order = Criteria::ASC) Order by the QnNote column
 * @method     ChildNotePredefinedQuery orderByQnkey2($order = Criteria::ASC) Order by the QnKey2 column
 * @method     ChildNotePredefinedQuery orderByQnform($order = Criteria::ASC) Order by the QnForm column
 * @method     ChildNotePredefinedQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildNotePredefinedQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildNotePredefinedQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildNotePredefinedQuery groupByQntype() Group by the QnType column
 * @method     ChildNotePredefinedQuery groupByQntypedesc() Group by the QnTypeDesc column
 * @method     ChildNotePredefinedQuery groupByQnpdntcode() Group by the QnPdntCode column
 * @method     ChildNotePredefinedQuery groupByQnseq() Group by the QnSeq column
 * @method     ChildNotePredefinedQuery groupByQnnote() Group by the QnNote column
 * @method     ChildNotePredefinedQuery groupByQnkey2() Group by the QnKey2 column
 * @method     ChildNotePredefinedQuery groupByQnform() Group by the QnForm column
 * @method     ChildNotePredefinedQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildNotePredefinedQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildNotePredefinedQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildNotePredefinedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildNotePredefinedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildNotePredefinedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildNotePredefinedQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildNotePredefinedQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildNotePredefinedQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildNotePredefined|null findOne(?ConnectionInterface $con = null) Return the first ChildNotePredefined matching the query
 * @method     ChildNotePredefined findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildNotePredefined matching the query, or a new ChildNotePredefined object populated from the query conditions when no match is found
 *
 * @method     ChildNotePredefined|null findOneByQntype(string $QnType) Return the first ChildNotePredefined filtered by the QnType column
 * @method     ChildNotePredefined|null findOneByQntypedesc(string $QnTypeDesc) Return the first ChildNotePredefined filtered by the QnTypeDesc column
 * @method     ChildNotePredefined|null findOneByQnpdntcode(string $QnPdntCode) Return the first ChildNotePredefined filtered by the QnPdntCode column
 * @method     ChildNotePredefined|null findOneByQnseq(int $QnSeq) Return the first ChildNotePredefined filtered by the QnSeq column
 * @method     ChildNotePredefined|null findOneByQnnote(string $QnNote) Return the first ChildNotePredefined filtered by the QnNote column
 * @method     ChildNotePredefined|null findOneByQnkey2(string $QnKey2) Return the first ChildNotePredefined filtered by the QnKey2 column
 * @method     ChildNotePredefined|null findOneByQnform(string $QnForm) Return the first ChildNotePredefined filtered by the QnForm column
 * @method     ChildNotePredefined|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildNotePredefined filtered by the DateUpdtd column
 * @method     ChildNotePredefined|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNotePredefined filtered by the TimeUpdtd column
 * @method     ChildNotePredefined|null findOneByDummy(string $dummy) Return the first ChildNotePredefined filtered by the dummy column
 *
 * @method     ChildNotePredefined requirePk($key, ?ConnectionInterface $con = null) Return the ChildNotePredefined by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOne(?ConnectionInterface $con = null) Return the first ChildNotePredefined matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNotePredefined requireOneByQntype(string $QnType) Return the first ChildNotePredefined filtered by the QnType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByQntypedesc(string $QnTypeDesc) Return the first ChildNotePredefined filtered by the QnTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByQnpdntcode(string $QnPdntCode) Return the first ChildNotePredefined filtered by the QnPdntCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByQnseq(int $QnSeq) Return the first ChildNotePredefined filtered by the QnSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByQnnote(string $QnNote) Return the first ChildNotePredefined filtered by the QnNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByQnkey2(string $QnKey2) Return the first ChildNotePredefined filtered by the QnKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByQnform(string $QnForm) Return the first ChildNotePredefined filtered by the QnForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByDateupdtd(string $DateUpdtd) Return the first ChildNotePredefined filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNotePredefined filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNotePredefined requireOneByDummy(string $dummy) Return the first ChildNotePredefined filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNotePredefined[]|Collection find(?ConnectionInterface $con = null) Return ChildNotePredefined objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildNotePredefined> find(?ConnectionInterface $con = null) Return ChildNotePredefined objects based on current ModelCriteria
 *
 * @method     ChildNotePredefined[]|Collection findByQntype(string|array<string> $QnType) Return ChildNotePredefined objects filtered by the QnType column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQntype(string|array<string> $QnType) Return ChildNotePredefined objects filtered by the QnType column
 * @method     ChildNotePredefined[]|Collection findByQntypedesc(string|array<string> $QnTypeDesc) Return ChildNotePredefined objects filtered by the QnTypeDesc column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQntypedesc(string|array<string> $QnTypeDesc) Return ChildNotePredefined objects filtered by the QnTypeDesc column
 * @method     ChildNotePredefined[]|Collection findByQnpdntcode(string|array<string> $QnPdntCode) Return ChildNotePredefined objects filtered by the QnPdntCode column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQnpdntcode(string|array<string> $QnPdntCode) Return ChildNotePredefined objects filtered by the QnPdntCode column
 * @method     ChildNotePredefined[]|Collection findByQnseq(int|array<int> $QnSeq) Return ChildNotePredefined objects filtered by the QnSeq column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQnseq(int|array<int> $QnSeq) Return ChildNotePredefined objects filtered by the QnSeq column
 * @method     ChildNotePredefined[]|Collection findByQnnote(string|array<string> $QnNote) Return ChildNotePredefined objects filtered by the QnNote column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQnnote(string|array<string> $QnNote) Return ChildNotePredefined objects filtered by the QnNote column
 * @method     ChildNotePredefined[]|Collection findByQnkey2(string|array<string> $QnKey2) Return ChildNotePredefined objects filtered by the QnKey2 column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQnkey2(string|array<string> $QnKey2) Return ChildNotePredefined objects filtered by the QnKey2 column
 * @method     ChildNotePredefined[]|Collection findByQnform(string|array<string> $QnForm) Return ChildNotePredefined objects filtered by the QnForm column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByQnform(string|array<string> $QnForm) Return ChildNotePredefined objects filtered by the QnForm column
 * @method     ChildNotePredefined[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildNotePredefined objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildNotePredefined objects filtered by the DateUpdtd column
 * @method     ChildNotePredefined[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildNotePredefined objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildNotePredefined objects filtered by the TimeUpdtd column
 * @method     ChildNotePredefined[]|Collection findByDummy(string|array<string> $dummy) Return ChildNotePredefined objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildNotePredefined> findByDummy(string|array<string> $dummy) Return ChildNotePredefined objects filtered by the dummy column
 *
 * @method     ChildNotePredefined[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildNotePredefined> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class NotePredefinedQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\NotePredefinedQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\NotePredefined', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildNotePredefinedQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildNotePredefinedQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildNotePredefinedQuery) {
            return $criteria;
        }
        $query = new ChildNotePredefinedQuery();
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
     * @return ChildNotePredefined|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(NotePredefinedTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = NotePredefinedTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildNotePredefined A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT QnType, QnTypeDesc, QnPdntCode, QnSeq, QnNote, QnKey2, QnForm, DateUpdtd, TimeUpdtd, dummy FROM notes_pre_defined WHERE QnType = :p0 AND QnSeq = :p1 AND QnKey2 = :p2 AND QnForm = :p3';
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
            /** @var ChildNotePredefined $obj */
            $obj = new ChildNotePredefined();
            $obj->hydrate($row);
            NotePredefinedTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildNotePredefined|array|mixed the result, formatted by the current formatter
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
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(NotePredefinedTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(NotePredefinedTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(NotePredefinedTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(NotePredefinedTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(NotePredefinedTableMap::COL_QNTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(NotePredefinedTableMap::COL_QNSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(NotePredefinedTableMap::COL_QNKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(NotePredefinedTableMap::COL_QNFORM, $key[3], Criteria::EQUAL);
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
     * $query->filterByQntype(['foo', 'bar']); // WHERE QnType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qntype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQntype($qntype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNTYPE, $qntype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByQntypedesc('fooValue');   // WHERE QnTypeDesc = 'fooValue'
     * $query->filterByQntypedesc('%fooValue%', Criteria::LIKE); // WHERE QnTypeDesc LIKE '%fooValue%'
     * $query->filterByQntypedesc(['foo', 'bar']); // WHERE QnTypeDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qntypedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQntypedesc($qntypedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qntypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNTYPEDESC, $qntypedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnPdntCode column
     *
     * Example usage:
     * <code>
     * $query->filterByQnpdntcode('fooValue');   // WHERE QnPdntCode = 'fooValue'
     * $query->filterByQnpdntcode('%fooValue%', Criteria::LIKE); // WHERE QnPdntCode LIKE '%fooValue%'
     * $query->filterByQnpdntcode(['foo', 'bar']); // WHERE QnPdntCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnpdntcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnpdntcode($qnpdntcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnpdntcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNPDNTCODE, $qnpdntcode, $comparison);

        return $this;
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
     * @param mixed $qnseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnseq($qnseq = null, ?string $comparison = null)
    {
        if (is_array($qnseq)) {
            $useMinMax = false;
            if (isset($qnseq['min'])) {
                $this->addUsingAlias(NotePredefinedTableMap::COL_QNSEQ, $qnseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qnseq['max'])) {
                $this->addUsingAlias(NotePredefinedTableMap::COL_QNSEQ, $qnseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNSEQ, $qnseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnNote column
     *
     * Example usage:
     * <code>
     * $query->filterByQnnote('fooValue');   // WHERE QnNote = 'fooValue'
     * $query->filterByQnnote('%fooValue%', Criteria::LIKE); // WHERE QnNote LIKE '%fooValue%'
     * $query->filterByQnnote(['foo', 'bar']); // WHERE QnNote IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnnote The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnnote($qnnote = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnnote)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNNOTE, $qnnote, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByQnkey2('fooValue');   // WHERE QnKey2 = 'fooValue'
     * $query->filterByQnkey2('%fooValue%', Criteria::LIKE); // WHERE QnKey2 LIKE '%fooValue%'
     * $query->filterByQnkey2(['foo', 'bar']); // WHERE QnKey2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnkey2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnkey2($qnkey2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnkey2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNKEY2, $qnkey2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the QnForm column
     *
     * Example usage:
     * <code>
     * $query->filterByQnform('fooValue');   // WHERE QnForm = 'fooValue'
     * $query->filterByQnform('%fooValue%', Criteria::LIKE); // WHERE QnForm LIKE '%fooValue%'
     * $query->filterByQnform(['foo', 'bar']); // WHERE QnForm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $qnform The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQnform($qnform = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qnform)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_QNFORM, $qnform, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(NotePredefinedTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildNotePredefined $notePredefined Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($notePredefined = null)
    {
        if ($notePredefined) {
            $this->addCond('pruneCond0', $this->getAliasedColName(NotePredefinedTableMap::COL_QNTYPE), $notePredefined->getQntype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(NotePredefinedTableMap::COL_QNSEQ), $notePredefined->getQnseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(NotePredefinedTableMap::COL_QNKEY2), $notePredefined->getQnkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(NotePredefinedTableMap::COL_QNFORM), $notePredefined->getQnform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_pre_defined table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NotePredefinedTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NotePredefinedTableMap::clearInstancePool();
            NotePredefinedTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NotePredefinedTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(NotePredefinedTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            NotePredefinedTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            NotePredefinedTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
