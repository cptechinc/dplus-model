<?php

namespace Base;

use \PurchaseOrderNoteInternal as ChildPurchaseOrderNoteInternal;
use \PurchaseOrderNoteInternalQuery as ChildPurchaseOrderNoteInternalQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderNoteInternalTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_po_internal' table.
 *
 *
 *
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPohdnbr($order = Criteria::ASC) Order by the PohdNbr column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPodtline($order = Criteria::ASC) Order by the PodtLine column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontintldate($order = Criteria::ASC) Order by the PontIntlDate column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontintltime($order = Criteria::ASC) Order by the PontIntlTime column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontintluser($order = Criteria::ASC) Order by the PontIntlUser column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontform($order = Criteria::ASC) Order by the PontForm column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontseq($order = Criteria::ASC) Order by the PontSeq column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontnote($order = Criteria::ASC) Order by the PontNote column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByPontkey2($order = Criteria::ASC) Order by the PontKey2 column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderNoteInternalQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPonttype() Group by the PontType column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPonttypedesc() Group by the PontTypeDesc column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPohdnbr() Group by the PohdNbr column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPodtline() Group by the PodtLine column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontintldate() Group by the PontIntlDate column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontintltime() Group by the PontIntlTime column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontintluser() Group by the PontIntlUser column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontform() Group by the PontForm column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontseq() Group by the PontSeq column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontnote() Group by the PontNote column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByPontkey2() Group by the PontKey2 column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderNoteInternalQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderNoteInternalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderNoteInternalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderNoteInternalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderNoteInternalQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderNoteInternalQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderNoteInternalQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderNoteInternal findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderNoteInternal matching the query
 * @method     ChildPurchaseOrderNoteInternal findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrderNoteInternal matching the query, or a new ChildPurchaseOrderNoteInternal object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderNoteInternal findOneByPonttype(string $PontType) Return the first ChildPurchaseOrderNoteInternal filtered by the PontType column
 * @method     ChildPurchaseOrderNoteInternal findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildPurchaseOrderNoteInternal filtered by the PontTypeDesc column
 * @method     ChildPurchaseOrderNoteInternal findOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderNoteInternal filtered by the PohdNbr column
 * @method     ChildPurchaseOrderNoteInternal findOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderNoteInternal filtered by the PodtLine column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontintldate(string $PontIntlDate) Return the first ChildPurchaseOrderNoteInternal filtered by the PontIntlDate column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontintltime(string $PontIntlTime) Return the first ChildPurchaseOrderNoteInternal filtered by the PontIntlTime column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontintluser(string $PontIntlUser) Return the first ChildPurchaseOrderNoteInternal filtered by the PontIntlUser column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontform(string $PontForm) Return the first ChildPurchaseOrderNoteInternal filtered by the PontForm column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontseq(int $PontSeq) Return the first ChildPurchaseOrderNoteInternal filtered by the PontSeq column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontnote(string $PontNote) Return the first ChildPurchaseOrderNoteInternal filtered by the PontNote column
 * @method     ChildPurchaseOrderNoteInternal findOneByPontkey2(string $PontKey2) Return the first ChildPurchaseOrderNoteInternal filtered by the PontKey2 column
 * @method     ChildPurchaseOrderNoteInternal findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderNoteInternal filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderNoteInternal findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderNoteInternal filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderNoteInternal findOneByDummy(string $dummy) Return the first ChildPurchaseOrderNoteInternal filtered by the dummy column *

 * @method     ChildPurchaseOrderNoteInternal requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrderNoteInternal by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderNoteInternal matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderNoteInternal requireOneByPonttype(string $PontType) Return the first ChildPurchaseOrderNoteInternal filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildPurchaseOrderNoteInternal filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPohdnbr(string $PohdNbr) Return the first ChildPurchaseOrderNoteInternal filtered by the PohdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPodtline(int $PodtLine) Return the first ChildPurchaseOrderNoteInternal filtered by the PodtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontintldate(string $PontIntlDate) Return the first ChildPurchaseOrderNoteInternal filtered by the PontIntlDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontintltime(string $PontIntlTime) Return the first ChildPurchaseOrderNoteInternal filtered by the PontIntlTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontintluser(string $PontIntlUser) Return the first ChildPurchaseOrderNoteInternal filtered by the PontIntlUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontform(string $PontForm) Return the first ChildPurchaseOrderNoteInternal filtered by the PontForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontseq(int $PontSeq) Return the first ChildPurchaseOrderNoteInternal filtered by the PontSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontnote(string $PontNote) Return the first ChildPurchaseOrderNoteInternal filtered by the PontNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByPontkey2(string $PontKey2) Return the first ChildPurchaseOrderNoteInternal filtered by the PontKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderNoteInternal filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderNoteInternal filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderNoteInternal requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderNoteInternal filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrderNoteInternal objects based on current ModelCriteria
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPonttype(string $PontType) Return ChildPurchaseOrderNoteInternal objects filtered by the PontType column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPonttypedesc(string $PontTypeDesc) Return ChildPurchaseOrderNoteInternal objects filtered by the PontTypeDesc column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPohdnbr(string $PohdNbr) Return ChildPurchaseOrderNoteInternal objects filtered by the PohdNbr column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPodtline(int $PodtLine) Return ChildPurchaseOrderNoteInternal objects filtered by the PodtLine column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontintldate(string $PontIntlDate) Return ChildPurchaseOrderNoteInternal objects filtered by the PontIntlDate column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontintltime(string $PontIntlTime) Return ChildPurchaseOrderNoteInternal objects filtered by the PontIntlTime column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontintluser(string $PontIntlUser) Return ChildPurchaseOrderNoteInternal objects filtered by the PontIntlUser column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontform(string $PontForm) Return ChildPurchaseOrderNoteInternal objects filtered by the PontForm column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontseq(int $PontSeq) Return ChildPurchaseOrderNoteInternal objects filtered by the PontSeq column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontnote(string $PontNote) Return ChildPurchaseOrderNoteInternal objects filtered by the PontNote column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByPontkey2(string $PontKey2) Return ChildPurchaseOrderNoteInternal objects filtered by the PontKey2 column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrderNoteInternal objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrderNoteInternal objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderNoteInternal[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrderNoteInternal objects filtered by the dummy column
 * @method     ChildPurchaseOrderNoteInternal[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderNoteInternalQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderNoteInternalQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderNoteInternal', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderNoteInternalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderNoteInternalQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPurchaseOrderNoteInternalQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderNoteInternalQuery();
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
     * @return ChildPurchaseOrderNoteInternal|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderNoteInternalTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildPurchaseOrderNoteInternal A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, PohdNbr, PodtLine, PontIntlDate, PontIntlTime, PontIntlUser, PontForm, PontSeq, PontNote, PontKey2, DateUpdtd, TimeUpdtd, dummy FROM notes_po_internal WHERE PontType = :p0 AND PontForm = :p1 AND PontSeq = :p2 AND PontKey2 = :p3';
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
            /** @var ChildPurchaseOrderNoteInternal $obj */
            $obj = new ChildPurchaseOrderNoteInternal();
            $obj->hydrate($row);
            PurchaseOrderNoteInternalTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildPurchaseOrderNoteInternal|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PurchaseOrderNoteInternalTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPonttype($ponttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE, $ponttype, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPonttypedesc($ponttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPohdnbr($pohdnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pohdnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_POHDNBR, $pohdnbr, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPodtline($podtline = null, $comparison = null)
    {
        if (is_array($podtline)) {
            $useMinMax = false;
            if (isset($podtline['min'])) {
                $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PODTLINE, $podtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($podtline['max'])) {
                $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PODTLINE, $podtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PODTLINE, $podtline, $comparison);
    }

    /**
     * Filter the query on the PontIntlDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintldate('fooValue');   // WHERE PontIntlDate = 'fooValue'
     * $query->filterByPontintldate('%fooValue%', Criteria::LIKE); // WHERE PontIntlDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintldate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintldate($pontintldate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintldate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTINTLDATE, $pontintldate, $comparison);
    }

    /**
     * Filter the query on the PontIntlTime column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintltime('fooValue');   // WHERE PontIntlTime = 'fooValue'
     * $query->filterByPontintltime('%fooValue%', Criteria::LIKE); // WHERE PontIntlTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintltime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintltime($pontintltime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintltime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTINTLTIME, $pontintltime, $comparison);
    }

    /**
     * Filter the query on the PontIntlUser column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintluser('fooValue');   // WHERE PontIntlUser = 'fooValue'
     * $query->filterByPontintluser('%fooValue%', Criteria::LIKE); // WHERE PontIntlUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintluser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintluser($pontintluser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintluser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTINTLUSER, $pontintluser, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontform($pontform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTFORM, $pontform, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontseq($pontseq = null, $comparison = null)
    {
        if (is_array($pontseq)) {
            $useMinMax = false;
            if (isset($pontseq['min'])) {
                $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, $pontseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pontseq['max'])) {
                $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, $pontseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ, $pontseq, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontnote($pontnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTNOTE, $pontnote, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontkey2($pontkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_PONTKEY2, $pontkey2, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderNoteInternalTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPurchaseOrderNoteInternal $purchaseOrderNoteInternal Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderNoteInternalQuery The current query, for fluid interface
     */
    public function prune($purchaseOrderNoteInternal = null)
    {
        if ($purchaseOrderNoteInternal) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderNoteInternalTableMap::COL_PONTTYPE), $purchaseOrderNoteInternal->getPonttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderNoteInternalTableMap::COL_PONTFORM), $purchaseOrderNoteInternal->getPontform(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderNoteInternalTableMap::COL_PONTSEQ), $purchaseOrderNoteInternal->getPontseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PurchaseOrderNoteInternalTableMap::COL_PONTKEY2), $purchaseOrderNoteInternal->getPontkey2(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_po_internal table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderNoteInternalTableMap::clearInstancePool();
            PurchaseOrderNoteInternalTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderNoteInternalTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderNoteInternalTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderNoteInternalTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PurchaseOrderNoteInternalQuery
