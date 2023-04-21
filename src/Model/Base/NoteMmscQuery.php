<?php

namespace Base;

use \NoteMmsc as ChildNoteMmsc;
use \NoteMmscQuery as ChildNoteMmscQuery;
use \Exception;
use \PDO;
use Map\NoteMmscTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_mnfr_misc_det' table.
 *
 *
 *
 * @method     ChildNoteMmscQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildNoteMmscQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildNoteMmscQuery orderByMnfrid($order = Criteria::ASC) Order by the MnfrId column
 * @method     ChildNoteMmscQuery orderByPontmmsctheiritem($order = Criteria::ASC) Order by the PontMmscTheirItem column
 * @method     ChildNoteMmscQuery orderByPontseq($order = Criteria::ASC) Order by the PontSeq column
 * @method     ChildNoteMmscQuery orderByPontnote($order = Criteria::ASC) Order by the PontNote column
 * @method     ChildNoteMmscQuery orderByPontkey2($order = Criteria::ASC) Order by the PontKey2 column
 * @method     ChildNoteMmscQuery orderByPontform($order = Criteria::ASC) Order by the PontForm column
 * @method     ChildNoteMmscQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildNoteMmscQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildNoteMmscQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildNoteMmscQuery groupByPonttype() Group by the PontType column
 * @method     ChildNoteMmscQuery groupByPonttypedesc() Group by the PontTypeDesc column
 * @method     ChildNoteMmscQuery groupByMnfrid() Group by the MnfrId column
 * @method     ChildNoteMmscQuery groupByPontmmsctheiritem() Group by the PontMmscTheirItem column
 * @method     ChildNoteMmscQuery groupByPontseq() Group by the PontSeq column
 * @method     ChildNoteMmscQuery groupByPontnote() Group by the PontNote column
 * @method     ChildNoteMmscQuery groupByPontkey2() Group by the PontKey2 column
 * @method     ChildNoteMmscQuery groupByPontform() Group by the PontForm column
 * @method     ChildNoteMmscQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildNoteMmscQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildNoteMmscQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildNoteMmscQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildNoteMmscQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildNoteMmscQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildNoteMmscQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildNoteMmscQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildNoteMmscQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildNoteMmsc findOne(ConnectionInterface $con = null) Return the first ChildNoteMmsc matching the query
 * @method     ChildNoteMmsc findOneOrCreate(ConnectionInterface $con = null) Return the first ChildNoteMmsc matching the query, or a new ChildNoteMmsc object populated from the query conditions when no match is found
 *
 * @method     ChildNoteMmsc findOneByPonttype(string $PontType) Return the first ChildNoteMmsc filtered by the PontType column
 * @method     ChildNoteMmsc findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildNoteMmsc filtered by the PontTypeDesc column
 * @method     ChildNoteMmsc findOneByMnfrid(string $MnfrId) Return the first ChildNoteMmsc filtered by the MnfrId column
 * @method     ChildNoteMmsc findOneByPontmmsctheiritem(string $PontMmscTheirItem) Return the first ChildNoteMmsc filtered by the PontMmscTheirItem column
 * @method     ChildNoteMmsc findOneByPontseq(int $PontSeq) Return the first ChildNoteMmsc filtered by the PontSeq column
 * @method     ChildNoteMmsc findOneByPontnote(string $PontNote) Return the first ChildNoteMmsc filtered by the PontNote column
 * @method     ChildNoteMmsc findOneByPontkey2(string $PontKey2) Return the first ChildNoteMmsc filtered by the PontKey2 column
 * @method     ChildNoteMmsc findOneByPontform(string $PontForm) Return the first ChildNoteMmsc filtered by the PontForm column
 * @method     ChildNoteMmsc findOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteMmsc filtered by the DateUpdtd column
 * @method     ChildNoteMmsc findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteMmsc filtered by the TimeUpdtd column
 * @method     ChildNoteMmsc findOneByDummy(string $dummy) Return the first ChildNoteMmsc filtered by the dummy column *

 * @method     ChildNoteMmsc requirePk($key, ConnectionInterface $con = null) Return the ChildNoteMmsc by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOne(ConnectionInterface $con = null) Return the first ChildNoteMmsc matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteMmsc requireOneByPonttype(string $PontType) Return the first ChildNoteMmsc filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildNoteMmsc filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByMnfrid(string $MnfrId) Return the first ChildNoteMmsc filtered by the MnfrId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByPontmmsctheiritem(string $PontMmscTheirItem) Return the first ChildNoteMmsc filtered by the PontMmscTheirItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByPontseq(int $PontSeq) Return the first ChildNoteMmsc filtered by the PontSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByPontnote(string $PontNote) Return the first ChildNoteMmsc filtered by the PontNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByPontkey2(string $PontKey2) Return the first ChildNoteMmsc filtered by the PontKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByPontform(string $PontForm) Return the first ChildNoteMmsc filtered by the PontForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteMmsc filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteMmsc filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMmsc requireOneByDummy(string $dummy) Return the first ChildNoteMmsc filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteMmsc[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildNoteMmsc objects based on current ModelCriteria
 * @method     ChildNoteMmsc[]|ObjectCollection findByPonttype(string $PontType) Return ChildNoteMmsc objects filtered by the PontType column
 * @method     ChildNoteMmsc[]|ObjectCollection findByPonttypedesc(string $PontTypeDesc) Return ChildNoteMmsc objects filtered by the PontTypeDesc column
 * @method     ChildNoteMmsc[]|ObjectCollection findByMnfrid(string $MnfrId) Return ChildNoteMmsc objects filtered by the MnfrId column
 * @method     ChildNoteMmsc[]|ObjectCollection findByPontmmsctheiritem(string $PontMmscTheirItem) Return ChildNoteMmsc objects filtered by the PontMmscTheirItem column
 * @method     ChildNoteMmsc[]|ObjectCollection findByPontseq(int $PontSeq) Return ChildNoteMmsc objects filtered by the PontSeq column
 * @method     ChildNoteMmsc[]|ObjectCollection findByPontnote(string $PontNote) Return ChildNoteMmsc objects filtered by the PontNote column
 * @method     ChildNoteMmsc[]|ObjectCollection findByPontkey2(string $PontKey2) Return ChildNoteMmsc objects filtered by the PontKey2 column
 * @method     ChildNoteMmsc[]|ObjectCollection findByPontform(string $PontForm) Return ChildNoteMmsc objects filtered by the PontForm column
 * @method     ChildNoteMmsc[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildNoteMmsc objects filtered by the DateUpdtd column
 * @method     ChildNoteMmsc[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildNoteMmsc objects filtered by the TimeUpdtd column
 * @method     ChildNoteMmsc[]|ObjectCollection findByDummy(string $dummy) Return ChildNoteMmsc objects filtered by the dummy column
 * @method     ChildNoteMmsc[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class NoteMmscQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\NoteMmscQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\NoteMmsc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildNoteMmscQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildNoteMmscQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildNoteMmscQuery) {
            return $criteria;
        }
        $query = new ChildNoteMmscQuery();
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
     * @param array[$PontType, $PontSeq, $PontKey2, $PontForm] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildNoteMmsc|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(NoteMmscTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = NoteMmscTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildNoteMmsc A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, MnfrId, PontMmscTheirItem, PontSeq, PontNote, PontKey2, PontForm, DateUpdtd, TimeUpdtd, dummy FROM notes_mnfr_misc_det WHERE PontType = :p0 AND PontSeq = :p1 AND PontKey2 = :p2 AND PontForm = :p3';
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
            /** @var ChildNoteMmsc $obj */
            $obj = new ChildNoteMmsc();
            $obj->hydrate($row);
            NoteMmscTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildNoteMmsc|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(NoteMmscTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(NoteMmscTableMap::COL_PONTSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(NoteMmscTableMap::COL_PONTKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(NoteMmscTableMap::COL_PONTFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(NoteMmscTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(NoteMmscTableMap::COL_PONTSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(NoteMmscTableMap::COL_PONTKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(NoteMmscTableMap::COL_PONTFORM, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PontType column
     *
     * Example usage:
     * <code>
     * $query->filterByPonttype('fooValue');   // WHERE PontType = 'fooValue'
     * $query->filterByPonttype('%fooValue%', Criteria::LIKE); // WHERE PontType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ponttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPonttype($ponttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTTYPE, $ponttype, $comparison);
    }

    /**
     * Filter the query on the PontTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPonttypedesc('fooValue');   // WHERE PontTypeDesc = 'fooValue'
     * $query->filterByPonttypedesc('%fooValue%', Criteria::LIKE); // WHERE PontTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ponttypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPonttypedesc($ponttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);
    }

    /**
     * Filter the query on the MnfrId column
     *
     * Example usage:
     * <code>
     * $query->filterByMnfrid('fooValue');   // WHERE MnfrId = 'fooValue'
     * $query->filterByMnfrid('%fooValue%', Criteria::LIKE); // WHERE MnfrId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mnfrid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByMnfrid($mnfrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnfrid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_MNFRID, $mnfrid, $comparison);
    }

    /**
     * Filter the query on the PontMmscTheirItem column
     *
     * Example usage:
     * <code>
     * $query->filterByPontmmsctheiritem('fooValue');   // WHERE PontMmscTheirItem = 'fooValue'
     * $query->filterByPontmmsctheiritem('%fooValue%', Criteria::LIKE); // WHERE PontMmscTheirItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontmmsctheiritem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPontmmsctheiritem($pontmmsctheiritem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontmmsctheiritem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTMMSCTHEIRITEM, $pontmmsctheiritem, $comparison);
    }

    /**
     * Filter the query on the PontSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByPontseq(1234); // WHERE PontSeq = 1234
     * $query->filterByPontseq(array(12, 34)); // WHERE PontSeq IN (12, 34)
     * $query->filterByPontseq(array('min' => 12)); // WHERE PontSeq > 12
     * </code>
     *
     * @param     mixed $pontseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPontseq($pontseq = null, $comparison = null)
    {
        if (is_array($pontseq)) {
            $useMinMax = false;
            if (isset($pontseq['min'])) {
                $this->addUsingAlias(NoteMmscTableMap::COL_PONTSEQ, $pontseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pontseq['max'])) {
                $this->addUsingAlias(NoteMmscTableMap::COL_PONTSEQ, $pontseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTSEQ, $pontseq, $comparison);
    }

    /**
     * Filter the query on the PontNote column
     *
     * Example usage:
     * <code>
     * $query->filterByPontnote('fooValue');   // WHERE PontNote = 'fooValue'
     * $query->filterByPontnote('%fooValue%', Criteria::LIKE); // WHERE PontNote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontnote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPontnote($pontnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTNOTE, $pontnote, $comparison);
    }

    /**
     * Filter the query on the PontKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPontkey2('fooValue');   // WHERE PontKey2 = 'fooValue'
     * $query->filterByPontkey2('%fooValue%', Criteria::LIKE); // WHERE PontKey2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontkey2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPontkey2($pontkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTKEY2, $pontkey2, $comparison);
    }

    /**
     * Filter the query on the PontForm column
     *
     * Example usage:
     * <code>
     * $query->filterByPontform('fooValue');   // WHERE PontForm = 'fooValue'
     * $query->filterByPontform('%fooValue%', Criteria::LIKE); // WHERE PontForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByPontform($pontform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_PONTFORM, $pontform, $comparison);
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
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMmscTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildNoteMmsc $noteMmsc Object to remove from the list of results
     *
     * @return $this|ChildNoteMmscQuery The current query, for fluid interface
     */
    public function prune($noteMmsc = null)
    {
        if ($noteMmsc) {
            $this->addCond('pruneCond0', $this->getAliasedColName(NoteMmscTableMap::COL_PONTTYPE), $noteMmsc->getPonttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(NoteMmscTableMap::COL_PONTSEQ), $noteMmsc->getPontseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(NoteMmscTableMap::COL_PONTKEY2), $noteMmsc->getPontkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(NoteMmscTableMap::COL_PONTFORM), $noteMmsc->getPontform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_mnfr_misc_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NoteMmscTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NoteMmscTableMap::clearInstancePool();
            NoteMmscTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(NoteMmscTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(NoteMmscTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            NoteMmscTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            NoteMmscTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // NoteMmscQuery
