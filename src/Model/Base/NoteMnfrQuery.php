<?php

namespace Base;

use \NoteMnfr as ChildNoteMnfr;
use \NoteMnfrQuery as ChildNoteMnfrQuery;
use \Exception;
use \PDO;
use Map\NoteMnfrTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_mnfr_det' table.
 *
 *
 *
 * @method     ChildNoteMnfrQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildNoteMnfrQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildNoteMnfrQuery orderByMnfrid($order = Criteria::ASC) Order by the MnfrId column
 * @method     ChildNoteMnfrQuery orderByPontmnfritem($order = Criteria::ASC) Order by the PontMnfrItem column
 * @method     ChildNoteMnfrQuery orderByPontseq($order = Criteria::ASC) Order by the PontSeq column
 * @method     ChildNoteMnfrQuery orderByPontnote($order = Criteria::ASC) Order by the PontNote column
 * @method     ChildNoteMnfrQuery orderByPontkey2($order = Criteria::ASC) Order by the PontKey2 column
 * @method     ChildNoteMnfrQuery orderByPontform($order = Criteria::ASC) Order by the PontForm column
 * @method     ChildNoteMnfrQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildNoteMnfrQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildNoteMnfrQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildNoteMnfrQuery groupByPonttype() Group by the PontType column
 * @method     ChildNoteMnfrQuery groupByPonttypedesc() Group by the PontTypeDesc column
 * @method     ChildNoteMnfrQuery groupByMnfrid() Group by the MnfrId column
 * @method     ChildNoteMnfrQuery groupByPontmnfritem() Group by the PontMnfrItem column
 * @method     ChildNoteMnfrQuery groupByPontseq() Group by the PontSeq column
 * @method     ChildNoteMnfrQuery groupByPontnote() Group by the PontNote column
 * @method     ChildNoteMnfrQuery groupByPontkey2() Group by the PontKey2 column
 * @method     ChildNoteMnfrQuery groupByPontform() Group by the PontForm column
 * @method     ChildNoteMnfrQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildNoteMnfrQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildNoteMnfrQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildNoteMnfrQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildNoteMnfrQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildNoteMnfrQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildNoteMnfrQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildNoteMnfrQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildNoteMnfrQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildNoteMnfr findOne(ConnectionInterface $con = null) Return the first ChildNoteMnfr matching the query
 * @method     ChildNoteMnfr findOneOrCreate(ConnectionInterface $con = null) Return the first ChildNoteMnfr matching the query, or a new ChildNoteMnfr object populated from the query conditions when no match is found
 *
 * @method     ChildNoteMnfr findOneByPonttype(string $PontType) Return the first ChildNoteMnfr filtered by the PontType column
 * @method     ChildNoteMnfr findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildNoteMnfr filtered by the PontTypeDesc column
 * @method     ChildNoteMnfr findOneByMnfrid(string $MnfrId) Return the first ChildNoteMnfr filtered by the MnfrId column
 * @method     ChildNoteMnfr findOneByPontmnfritem(string $PontMnfrItem) Return the first ChildNoteMnfr filtered by the PontMnfrItem column
 * @method     ChildNoteMnfr findOneByPontseq(int $PontSeq) Return the first ChildNoteMnfr filtered by the PontSeq column
 * @method     ChildNoteMnfr findOneByPontnote(string $PontNote) Return the first ChildNoteMnfr filtered by the PontNote column
 * @method     ChildNoteMnfr findOneByPontkey2(string $PontKey2) Return the first ChildNoteMnfr filtered by the PontKey2 column
 * @method     ChildNoteMnfr findOneByPontform(string $PontForm) Return the first ChildNoteMnfr filtered by the PontForm column
 * @method     ChildNoteMnfr findOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteMnfr filtered by the DateUpdtd column
 * @method     ChildNoteMnfr findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteMnfr filtered by the TimeUpdtd column
 * @method     ChildNoteMnfr findOneByDummy(string $dummy) Return the first ChildNoteMnfr filtered by the dummy column *

 * @method     ChildNoteMnfr requirePk($key, ConnectionInterface $con = null) Return the ChildNoteMnfr by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOne(ConnectionInterface $con = null) Return the first ChildNoteMnfr matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteMnfr requireOneByPonttype(string $PontType) Return the first ChildNoteMnfr filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildNoteMnfr filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByMnfrid(string $MnfrId) Return the first ChildNoteMnfr filtered by the MnfrId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByPontmnfritem(string $PontMnfrItem) Return the first ChildNoteMnfr filtered by the PontMnfrItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByPontseq(int $PontSeq) Return the first ChildNoteMnfr filtered by the PontSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByPontnote(string $PontNote) Return the first ChildNoteMnfr filtered by the PontNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByPontkey2(string $PontKey2) Return the first ChildNoteMnfr filtered by the PontKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByPontform(string $PontForm) Return the first ChildNoteMnfr filtered by the PontForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByDateupdtd(string $DateUpdtd) Return the first ChildNoteMnfr filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildNoteMnfr filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildNoteMnfr requireOneByDummy(string $dummy) Return the first ChildNoteMnfr filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildNoteMnfr[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildNoteMnfr objects based on current ModelCriteria
 * @method     ChildNoteMnfr[]|ObjectCollection findByPonttype(string $PontType) Return ChildNoteMnfr objects filtered by the PontType column
 * @method     ChildNoteMnfr[]|ObjectCollection findByPonttypedesc(string $PontTypeDesc) Return ChildNoteMnfr objects filtered by the PontTypeDesc column
 * @method     ChildNoteMnfr[]|ObjectCollection findByMnfrid(string $MnfrId) Return ChildNoteMnfr objects filtered by the MnfrId column
 * @method     ChildNoteMnfr[]|ObjectCollection findByPontmnfritem(string $PontMnfrItem) Return ChildNoteMnfr objects filtered by the PontMnfrItem column
 * @method     ChildNoteMnfr[]|ObjectCollection findByPontseq(int $PontSeq) Return ChildNoteMnfr objects filtered by the PontSeq column
 * @method     ChildNoteMnfr[]|ObjectCollection findByPontnote(string $PontNote) Return ChildNoteMnfr objects filtered by the PontNote column
 * @method     ChildNoteMnfr[]|ObjectCollection findByPontkey2(string $PontKey2) Return ChildNoteMnfr objects filtered by the PontKey2 column
 * @method     ChildNoteMnfr[]|ObjectCollection findByPontform(string $PontForm) Return ChildNoteMnfr objects filtered by the PontForm column
 * @method     ChildNoteMnfr[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildNoteMnfr objects filtered by the DateUpdtd column
 * @method     ChildNoteMnfr[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildNoteMnfr objects filtered by the TimeUpdtd column
 * @method     ChildNoteMnfr[]|ObjectCollection findByDummy(string $dummy) Return ChildNoteMnfr objects filtered by the dummy column
 * @method     ChildNoteMnfr[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class NoteMnfrQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\NoteMnfrQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\NoteMnfr', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildNoteMnfrQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildNoteMnfrQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildNoteMnfrQuery) {
            return $criteria;
        }
        $query = new ChildNoteMnfrQuery();
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
     * @return ChildNoteMnfr|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(NoteMnfrTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = NoteMnfrTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildNoteMnfr A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, MnfrId, PontMnfrItem, PontSeq, PontNote, PontKey2, PontForm, DateUpdtd, TimeUpdtd, dummy FROM notes_mnfr_det WHERE PontType = :p0 AND PontSeq = :p1 AND PontKey2 = :p2 AND PontForm = :p3';
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
            /** @var ChildNoteMnfr $obj */
            $obj = new ChildNoteMnfr();
            $obj->hydrate($row);
            NoteMnfrTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildNoteMnfr|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(NoteMnfrTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(NoteMnfrTableMap::COL_PONTSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(NoteMnfrTableMap::COL_PONTKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(NoteMnfrTableMap::COL_PONTFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(NoteMnfrTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(NoteMnfrTableMap::COL_PONTSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(NoteMnfrTableMap::COL_PONTKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(NoteMnfrTableMap::COL_PONTFORM, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPonttype($ponttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTTYPE, $ponttype, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPonttypedesc($ponttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByMnfrid($mnfrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnfrid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_MNFRID, $mnfrid, $comparison);
    }

    /**
     * Filter the query on the PontMnfrItem column
     *
     * Example usage:
     * <code>
     * $query->filterByPontmnfritem('fooValue');   // WHERE PontMnfrItem = 'fooValue'
     * $query->filterByPontmnfritem('%fooValue%', Criteria::LIKE); // WHERE PontMnfrItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontmnfritem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPontmnfritem($pontmnfritem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontmnfritem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTMNFRITEM, $pontmnfritem, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPontseq($pontseq = null, $comparison = null)
    {
        if (is_array($pontseq)) {
            $useMinMax = false;
            if (isset($pontseq['min'])) {
                $this->addUsingAlias(NoteMnfrTableMap::COL_PONTSEQ, $pontseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pontseq['max'])) {
                $this->addUsingAlias(NoteMnfrTableMap::COL_PONTSEQ, $pontseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTSEQ, $pontseq, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPontnote($pontnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTNOTE, $pontnote, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPontkey2($pontkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTKEY2, $pontkey2, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByPontform($pontform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_PONTFORM, $pontform, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NoteMnfrTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildNoteMnfr $noteMnfr Object to remove from the list of results
     *
     * @return $this|ChildNoteMnfrQuery The current query, for fluid interface
     */
    public function prune($noteMnfr = null)
    {
        if ($noteMnfr) {
            $this->addCond('pruneCond0', $this->getAliasedColName(NoteMnfrTableMap::COL_PONTTYPE), $noteMnfr->getPonttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(NoteMnfrTableMap::COL_PONTSEQ), $noteMnfr->getPontseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(NoteMnfrTableMap::COL_PONTKEY2), $noteMnfr->getPontkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(NoteMnfrTableMap::COL_PONTFORM), $noteMnfr->getPontform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_mnfr_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(NoteMnfrTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NoteMnfrTableMap::clearInstancePool();
            NoteMnfrTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(NoteMnfrTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(NoteMnfrTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            NoteMnfrTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            NoteMnfrTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // NoteMnfrQuery
