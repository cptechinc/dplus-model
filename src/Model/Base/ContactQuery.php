<?php

namespace Base;

use \Contact as ChildContact;
use \ContactQuery as ChildContactQuery;
use \Exception;
use \PDO;
use Map\ContactTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cont_mast' table.
 *
 *
 *
 * @method     ChildContactQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildContactQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildContactQuery orderByArcpcontid($order = Criteria::ASC) Order by the ArcpContId column
 * @method     ChildContactQuery orderByArcptitl($order = Criteria::ASC) Order by the ArcpTitl column
 * @method     ChildContactQuery orderByArcparcont($order = Criteria::ASC) Order by the ArcpArCont column
 * @method     ChildContactQuery orderByArcpduncont($order = Criteria::ASC) Order by the ArcpDunCont column
 * @method     ChildContactQuery orderByArcpbuycont($order = Criteria::ASC) Order by the ArcpBuyCont column
 * @method     ChildContactQuery orderByArcpacknow($order = Criteria::ASC) Order by the ArcpAcknow column
 * @method     ChildContactQuery orderByArcpcertcont($order = Criteria::ASC) Order by the ArcpCertCont column
 * @method     ChildContactQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildContactQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildContactQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildContactQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildContactQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildContactQuery groupByArcpcontid() Group by the ArcpContId column
 * @method     ChildContactQuery groupByArcptitl() Group by the ArcpTitl column
 * @method     ChildContactQuery groupByArcparcont() Group by the ArcpArCont column
 * @method     ChildContactQuery groupByArcpduncont() Group by the ArcpDunCont column
 * @method     ChildContactQuery groupByArcpbuycont() Group by the ArcpBuyCont column
 * @method     ChildContactQuery groupByArcpacknow() Group by the ArcpAcknow column
 * @method     ChildContactQuery groupByArcpcertcont() Group by the ArcpCertCont column
 * @method     ChildContactQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildContactQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildContactQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildContactQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildContactQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildContactQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildContact findOne(ConnectionInterface $con = null) Return the first ChildContact matching the query
 * @method     ChildContact findOneOrCreate(ConnectionInterface $con = null) Return the first ChildContact matching the query, or a new ChildContact object populated from the query conditions when no match is found
 *
 * @method     ChildContact findOneByArcucustid(string $ArcuCustId) Return the first ChildContact filtered by the ArcuCustId column
 * @method     ChildContact findOneByArstshipid(string $ArstShipId) Return the first ChildContact filtered by the ArstShipId column
 * @method     ChildContact findOneByArcpcontid(string $ArcpContId) Return the first ChildContact filtered by the ArcpContId column
 * @method     ChildContact findOneByArcptitl(string $ArcpTitl) Return the first ChildContact filtered by the ArcpTitl column
 * @method     ChildContact findOneByArcparcont(string $ArcpArCont) Return the first ChildContact filtered by the ArcpArCont column
 * @method     ChildContact findOneByArcpduncont(string $ArcpDunCont) Return the first ChildContact filtered by the ArcpDunCont column
 * @method     ChildContact findOneByArcpbuycont(string $ArcpBuyCont) Return the first ChildContact filtered by the ArcpBuyCont column
 * @method     ChildContact findOneByArcpacknow(string $ArcpAcknow) Return the first ChildContact filtered by the ArcpAcknow column
 * @method     ChildContact findOneByArcpcertcont(string $ArcpCertCont) Return the first ChildContact filtered by the ArcpCertCont column
 * @method     ChildContact findOneByDateupdtd(string $DateUpdtd) Return the first ChildContact filtered by the DateUpdtd column
 * @method     ChildContact findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildContact filtered by the TimeUpdtd column
 * @method     ChildContact findOneByDummy(string $dummy) Return the first ChildContact filtered by the dummy column *

 * @method     ChildContact requirePk($key, ConnectionInterface $con = null) Return the ChildContact by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOne(ConnectionInterface $con = null) Return the first ChildContact matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildContact requireOneByArcucustid(string $ArcuCustId) Return the first ChildContact filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArstshipid(string $ArstShipId) Return the first ChildContact filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcpcontid(string $ArcpContId) Return the first ChildContact filtered by the ArcpContId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcptitl(string $ArcpTitl) Return the first ChildContact filtered by the ArcpTitl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcparcont(string $ArcpArCont) Return the first ChildContact filtered by the ArcpArCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcpduncont(string $ArcpDunCont) Return the first ChildContact filtered by the ArcpDunCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcpbuycont(string $ArcpBuyCont) Return the first ChildContact filtered by the ArcpBuyCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcpacknow(string $ArcpAcknow) Return the first ChildContact filtered by the ArcpAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByArcpcertcont(string $ArcpCertCont) Return the first ChildContact filtered by the ArcpCertCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByDateupdtd(string $DateUpdtd) Return the first ChildContact filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildContact filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByDummy(string $dummy) Return the first ChildContact filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildContact[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildContact objects based on current ModelCriteria
 * @method     ChildContact[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildContact objects filtered by the ArcuCustId column
 * @method     ChildContact[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildContact objects filtered by the ArstShipId column
 * @method     ChildContact[]|ObjectCollection findByArcpcontid(string $ArcpContId) Return ChildContact objects filtered by the ArcpContId column
 * @method     ChildContact[]|ObjectCollection findByArcptitl(string $ArcpTitl) Return ChildContact objects filtered by the ArcpTitl column
 * @method     ChildContact[]|ObjectCollection findByArcparcont(string $ArcpArCont) Return ChildContact objects filtered by the ArcpArCont column
 * @method     ChildContact[]|ObjectCollection findByArcpduncont(string $ArcpDunCont) Return ChildContact objects filtered by the ArcpDunCont column
 * @method     ChildContact[]|ObjectCollection findByArcpbuycont(string $ArcpBuyCont) Return ChildContact objects filtered by the ArcpBuyCont column
 * @method     ChildContact[]|ObjectCollection findByArcpacknow(string $ArcpAcknow) Return ChildContact objects filtered by the ArcpAcknow column
 * @method     ChildContact[]|ObjectCollection findByArcpcertcont(string $ArcpCertCont) Return ChildContact objects filtered by the ArcpCertCont column
 * @method     ChildContact[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildContact objects filtered by the DateUpdtd column
 * @method     ChildContact[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildContact objects filtered by the TimeUpdtd column
 * @method     ChildContact[]|ObjectCollection findByDummy(string $dummy) Return ChildContact objects filtered by the dummy column
 * @method     ChildContact[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ContactQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ContactQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Contact', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildContactQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildContactQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildContactQuery) {
            return $criteria;
        }
        $query = new ChildContactQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$ArcuCustId, $ArstShipId, $ArcpContId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildContact|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ContactTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ContactTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildContact A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, ArcpContId, ArcpTitl, ArcpArCont, ArcpDunCont, ArcpBuyCont, ArcpAcknow, ArcpCertCont, DateUpdtd, TimeUpdtd, dummy FROM ar_cont_mast WHERE ArcuCustId = :p0 AND ArstShipId = :p1 AND ArcpContId = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildContact $obj */
            $obj = new ChildContact();
            $obj->hydrate($row);
            ContactTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildContact|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ContactTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ContactTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ContactTableMap::COL_ARCPCONTID, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ContactTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ContactTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ContactTableMap::COL_ARCPCONTID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the ArcpContId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpcontid('fooValue');   // WHERE ArcpContId = 'fooValue'
     * $query->filterByArcpcontid('%fooValue%', Criteria::LIKE); // WHERE ArcpContId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcpcontid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcpcontid($arcpcontid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpcontid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPCONTID, $arcpcontid, $comparison);
    }

    /**
     * Filter the query on the ArcpTitl column
     *
     * Example usage:
     * <code>
     * $query->filterByArcptitl('fooValue');   // WHERE ArcpTitl = 'fooValue'
     * $query->filterByArcptitl('%fooValue%', Criteria::LIKE); // WHERE ArcpTitl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcptitl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcptitl($arcptitl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcptitl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPTITL, $arcptitl, $comparison);
    }

    /**
     * Filter the query on the ArcpArCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcparcont('fooValue');   // WHERE ArcpArCont = 'fooValue'
     * $query->filterByArcparcont('%fooValue%', Criteria::LIKE); // WHERE ArcpArCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcparcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcparcont($arcparcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcparcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPARCONT, $arcparcont, $comparison);
    }

    /**
     * Filter the query on the ArcpDunCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpduncont('fooValue');   // WHERE ArcpDunCont = 'fooValue'
     * $query->filterByArcpduncont('%fooValue%', Criteria::LIKE); // WHERE ArcpDunCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcpduncont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcpduncont($arcpduncont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpduncont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPDUNCONT, $arcpduncont, $comparison);
    }

    /**
     * Filter the query on the ArcpBuyCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpbuycont('fooValue');   // WHERE ArcpBuyCont = 'fooValue'
     * $query->filterByArcpbuycont('%fooValue%', Criteria::LIKE); // WHERE ArcpBuyCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcpbuycont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcpbuycont($arcpbuycont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpbuycont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPBUYCONT, $arcpbuycont, $comparison);
    }

    /**
     * Filter the query on the ArcpAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpacknow('fooValue');   // WHERE ArcpAcknow = 'fooValue'
     * $query->filterByArcpacknow('%fooValue%', Criteria::LIKE); // WHERE ArcpAcknow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcpacknow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcpacknow($arcpacknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpacknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPACKNOW, $arcpacknow, $comparison);
    }

    /**
     * Filter the query on the ArcpCertCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpcertcont('fooValue');   // WHERE ArcpCertCont = 'fooValue'
     * $query->filterByArcpcertcont('%fooValue%', Criteria::LIKE); // WHERE ArcpCertCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcpcertcont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByArcpcertcont($arcpcertcont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpcertcont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ARCPCERTCONT, $arcpcertcont, $comparison);
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
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildContact $contact Object to remove from the list of results
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function prune($contact = null)
    {
        if ($contact) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ContactTableMap::COL_ARCUCUSTID), $contact->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ContactTableMap::COL_ARSTSHIPID), $contact->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ContactTableMap::COL_ARCPCONTID), $contact->getArcpcontid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cont_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ContactTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ContactTableMap::clearInstancePool();
            ContactTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ContactTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ContactTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ContactTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ContactTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ContactQuery
