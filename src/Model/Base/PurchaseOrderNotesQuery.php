<?php

namespace Base;

use \PurchaseOrderNotes as ChildPurchaseOrderNotes;
use \PurchaseOrderNotesQuery as ChildPurchaseOrderNotesQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_po_head_det' table.
 *
 *
 *
 * @method     ChildPurchaseOrderNotesQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildPurchaseOrderNotesQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildPurchaseOrderNotesQuery orderByPohdnbr($order = Criteria::ASC) Order by the PohdNbr column
 * @method     ChildPurchaseOrderNotesQuery orderByPodtline($order = Criteria::ASC) Order by the PodtLine column
 * @method     ChildPurchaseOrderNotesQuery orderByPontpordeditorview($order = Criteria::ASC) Order by the PontPordEditOrView column
 * @method     ChildPurchaseOrderNotesQuery orderByPontform($order = Criteria::ASC) Order by the PontForm column
 * @method     ChildPurchaseOrderNotesQuery orderByPontseq($order = Criteria::ASC) Order by the PontSeq column
 * @method     ChildPurchaseOrderNotesQuery orderByPontnote($order = Criteria::ASC) Order by the PontNote column
 * @method     ChildPurchaseOrderNotesQuery orderByPontkey2($order = Criteria::ASC) Order by the PontKey2 column
 * @method     ChildPurchaseOrderNotesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderNotesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderNotesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderNotesQuery groupByPonttype() Group by the PontType column
 * @method     ChildPurchaseOrderNotesQuery groupByPonttypedesc() Group by the PontTypeDesc column
 * @method     ChildPurchaseOrderNotesQuery groupByPohdnbr() Group by the PohdNbr column
 * @method     ChildPurchaseOrderNotesQuery groupByPodtline() Group by the PodtLine column
 * @method     ChildPurchaseOrderNotesQuery groupByPontpordeditorview() Group by the PontPordEditOrView column
 * @method     ChildPurchaseOrderNotesQuery groupByPontform() Group by the PontForm column
 * @method     ChildPurchaseOrderNotesQuery groupByPontseq() Group by the PontSeq column
 * @method     ChildPurchaseOrderNotesQuery groupByPontnote() Group by the PontNote column
 * @method     ChildPurchaseOrderNotesQuery groupByPontkey2() Group by the PontKey2 column
 * @method     ChildPurchaseOrderNotesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderNotesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderNotesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderNotes findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderNotes matching the query
 * @method     ChildPurchaseOrderNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrderNotes matching the query, or a new ChildPurchaseOrderNotes object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderNotes findOneByPonttype(string $PontType) Return the first ChildPurchaseOrderNotes filtered by the PontType column
 * @method     ChildPurchaseOrderNotes findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildPurchaseOrderNotes filtered by the PontTypeDesc column
 * @method     ChildPurchaseOrderNotes findOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderNotes filtered by the PohdNbr column
 * @method     ChildPurchaseOrderNotes findOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderNotes filtered by the PodtLine column
 * @method     ChildPurchaseOrderNotes findOneByPontpordeditorview(string $PontPordEditOrView) Return the first ChildPurchaseOrderNotes filtered by the PontPordEditOrView column
 * @method     ChildPurchaseOrderNotes findOneByPontform(string $PontForm) Return the first ChildPurchaseOrderNotes filtered by the PontForm column
 * @method     ChildPurchaseOrderNotes findOneByPontseq(int $PontSeq) Return the first ChildPurchaseOrderNotes filtered by the PontSeq column
 * @method     ChildPurchaseOrderNotes findOneByPontnote(string $PontNote) Return the first ChildPurchaseOrderNotes filtered by the PontNote column
 * @method     ChildPurchaseOrderNotes findOneByPontkey2(string $PontKey2) Return the first ChildPurchaseOrderNotes filtered by the PontKey2 column
 * @method     ChildPurchaseOrderNotes findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderNotes filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderNotes findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderNotes filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderNotes findOneByDummy(string $dummy) Return the first ChildPurchaseOrderNotes filtered by the dummy column *

 * @method     ChildPurchaseOrderNotes requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrderNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderNotes requireOneByPonttype(string $PontType) Return the first ChildPurchaseOrderNotes filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildPurchaseOrderNotes filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderNotes filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderNotes filtered by the PodtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPontpordeditorview(string $PontPordEditOrView) Return the first ChildPurchaseOrderNotes filtered by the PontPordEditOrView column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPontform(string $PontForm) Return the first ChildPurchaseOrderNotes filtered by the PontForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPontseq(int $PontSeq) Return the first ChildPurchaseOrderNotes filtered by the PontSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPontnote(string $PontNote) Return the first ChildPurchaseOrderNotes filtered by the PontNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByPontkey2(string $PontKey2) Return the first ChildPurchaseOrderNotes filtered by the PontKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderNotes filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderNotes filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNotes requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderNotes filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrderNotes objects based on current ModelCriteria
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPonttype(string $PontType) Return ChildPurchaseOrderNotes objects filtered by the PontType column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPonttypedesc(string $PontTypeDesc) Return ChildPurchaseOrderNotes objects filtered by the PontTypeDesc column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPohdnbr(string $PohdNbr) Return ChildPurchaseOrderNotes objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPodtline(int $PodtLine) Return ChildPurchaseOrderNotes objects filtered by the PodtLine column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPontpordeditorview(string $PontPordEditOrView) Return ChildPurchaseOrderNotes objects filtered by the PontPordEditOrView column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPontform(string $PontForm) Return ChildPurchaseOrderNotes objects filtered by the PontForm column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPontseq(int $PontSeq) Return ChildPurchaseOrderNotes objects filtered by the PontSeq column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPontnote(string $PontNote) Return ChildPurchaseOrderNotes objects filtered by the PontNote column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByPontkey2(string $PontKey2) Return ChildPurchaseOrderNotes objects filtered by the PontKey2 column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrderNotes objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrderNotes objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderNotes[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrderNotes objects filtered by the dummy column
 * @method     ChildPurchaseOrderNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPurchaseOrderNotesQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderNotesQuery();
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
     * @param array[$PontType, $PontForm, $PontSeq, $PontKey2] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPurchaseOrderNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderNotesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildPurchaseOrderNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, PohdNbr, PodtLine, PontPordEditOrView, PontForm, PontSeq, PontNote, PontKey2, DateUpdtd, TimeUpdtd, dummy FROM notes_po_head_det WHERE PontType = :p0 AND PontForm = :p1 AND PontSeq = :p2 AND PontKey2 = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPurchaseOrderNotes $obj */
            $obj = new ChildPurchaseOrderNotes();
            $obj->hydrate($row);
            PurchaseOrderNotesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildPurchaseOrderNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PurchaseOrderNotesTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderNotesTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderNotesTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PurchaseOrderNotesTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPonttype($ponttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTTYPE, $ponttype, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPonttypedesc($ponttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);
    }

    /**
     * Filter the query on the PohdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPohdnbr('fooValue');   // WHERE PohdNbr = 'fooValue'
     * $query->filterByPohdnbr('%fooValue%', Criteria::LIKE); // WHERE PohdNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pohdnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_POHDNBR, $pohdnbr, $comparison);
    }

    /**
     * Filter the query on the PodtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPodtline(1234); // WHERE PodtLine = 1234
     * $query->filterByPodtline(array(12, 34)); // WHERE PodtLine IN (12, 34)
     * $query->filterByPodtline(array('min' => 12)); // WHERE PodtLine > 12
     * </code>
     *
     * @param     mixed $podtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPodtline($podtline = null, $comparison = null)
    {
        if (is_array($podtline)) {
            $useMinMax = false;
            if (isset($podtline['min'])) {
                $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PODTLINE, $podtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtline['max'])) {
                $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PODTLINE, $podtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PODTLINE, $podtline, $comparison);
    }

    /**
     * Filter the query on the PontPordEditOrView column
     *
     * Example usage:
     * <code>
     * $query->filterByPontpordeditorview('fooValue');   // WHERE PontPordEditOrView = 'fooValue'
     * $query->filterByPontpordeditorview('%fooValue%', Criteria::LIKE); // WHERE PontPordEditOrView LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontpordeditorview The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPontpordeditorview($pontpordeditorview = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontpordeditorview)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTPORDEDITORVIEW, $pontpordeditorview, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPontform($pontform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTFORM, $pontform, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPontseq($pontseq = null, $comparison = null)
    {
        if (is_array($pontseq)) {
            $useMinMax = false;
            if (isset($pontseq['min'])) {
                $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTSEQ, $pontseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pontseq['max'])) {
                $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTSEQ, $pontseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTSEQ, $pontseq, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPontnote($pontnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTNOTE, $pontnote, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPontkey2($pontkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_PONTKEY2, $pontkey2, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNotesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPurchaseOrderNotes $purchaseOrderNotes Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderNotesQuery The current query, for fluid interface
     */
    public function prune($purchaseOrderNotes = null)
    {
        if ($purchaseOrderNotes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderNotesTableMap::COL_PONTTYPE), $purchaseOrderNotes->getPonttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderNotesTableMap::COL_PONTFORM), $purchaseOrderNotes->getPontform(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderNotesTableMap::COL_PONTSEQ), $purchaseOrderNotes->getPontseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PurchaseOrderNotesTableMap::COL_PONTKEY2), $purchaseOrderNotes->getPontkey2(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_po_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderNotesTableMap::clearInstancePool();
            PurchaseOrderNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PurchaseOrderNotesQuery
