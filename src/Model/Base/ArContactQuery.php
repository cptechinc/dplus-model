<?php

namespace Base;

use \ArContact as ChildArContact;
use \ArContactQuery as ChildArContactQuery;
use \Exception;
use \PDO;
use Map\ArContactTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cont_mast` table.
 *
 * @method     ChildArContactQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildArContactQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildArContactQuery orderByArcpcontid($order = Criteria::ASC) Order by the ArcpContId column
 * @method     ChildArContactQuery orderByArcptitl($order = Criteria::ASC) Order by the ArcpTitl column
 * @method     ChildArContactQuery orderByArcparcont($order = Criteria::ASC) Order by the ArcpArCont column
 * @method     ChildArContactQuery orderByArcpduncont($order = Criteria::ASC) Order by the ArcpDunCont column
 * @method     ChildArContactQuery orderByArcpbuycont($order = Criteria::ASC) Order by the ArcpBuyCont column
 * @method     ChildArContactQuery orderByArcpacknow($order = Criteria::ASC) Order by the ArcpAcknow column
 * @method     ChildArContactQuery orderByArcpcertcont($order = Criteria::ASC) Order by the ArcpCertCont column
 * @method     ChildArContactQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArContactQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArContactQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArContactQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildArContactQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildArContactQuery groupByArcpcontid() Group by the ArcpContId column
 * @method     ChildArContactQuery groupByArcptitl() Group by the ArcpTitl column
 * @method     ChildArContactQuery groupByArcparcont() Group by the ArcpArCont column
 * @method     ChildArContactQuery groupByArcpduncont() Group by the ArcpDunCont column
 * @method     ChildArContactQuery groupByArcpbuycont() Group by the ArcpBuyCont column
 * @method     ChildArContactQuery groupByArcpacknow() Group by the ArcpAcknow column
 * @method     ChildArContactQuery groupByArcpcertcont() Group by the ArcpCertCont column
 * @method     ChildArContactQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArContactQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArContactQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArContactQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArContactQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArContactQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArContactQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildArContactQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildArContactQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildArContactQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildArContactQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildArContactQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildArContactQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildArContactQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildArContactQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildArContactQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildArContactQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildArContactQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildArContactQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildArContactQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildArContact|null findOne(?ConnectionInterface $con = null) Return the first ChildArContact matching the query
 * @method     ChildArContact findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArContact matching the query, or a new ChildArContact object populated from the query conditions when no match is found
 *
 * @method     ChildArContact|null findOneByArcucustid(string $ArcuCustId) Return the first ChildArContact filtered by the ArcuCustId column
 * @method     ChildArContact|null findOneByArstshipid(string $ArstShipId) Return the first ChildArContact filtered by the ArstShipId column
 * @method     ChildArContact|null findOneByArcpcontid(string $ArcpContId) Return the first ChildArContact filtered by the ArcpContId column
 * @method     ChildArContact|null findOneByArcptitl(string $ArcpTitl) Return the first ChildArContact filtered by the ArcpTitl column
 * @method     ChildArContact|null findOneByArcparcont(string $ArcpArCont) Return the first ChildArContact filtered by the ArcpArCont column
 * @method     ChildArContact|null findOneByArcpduncont(string $ArcpDunCont) Return the first ChildArContact filtered by the ArcpDunCont column
 * @method     ChildArContact|null findOneByArcpbuycont(string $ArcpBuyCont) Return the first ChildArContact filtered by the ArcpBuyCont column
 * @method     ChildArContact|null findOneByArcpacknow(string $ArcpAcknow) Return the first ChildArContact filtered by the ArcpAcknow column
 * @method     ChildArContact|null findOneByArcpcertcont(string $ArcpCertCont) Return the first ChildArContact filtered by the ArcpCertCont column
 * @method     ChildArContact|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArContact filtered by the DateUpdtd column
 * @method     ChildArContact|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArContact filtered by the TimeUpdtd column
 * @method     ChildArContact|null findOneByDummy(string $dummy) Return the first ChildArContact filtered by the dummy column
 *
 * @method     ChildArContact requirePk($key, ?ConnectionInterface $con = null) Return the ChildArContact by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOne(?ConnectionInterface $con = null) Return the first ChildArContact matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArContact requireOneByArcucustid(string $ArcuCustId) Return the first ChildArContact filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArstshipid(string $ArstShipId) Return the first ChildArContact filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcpcontid(string $ArcpContId) Return the first ChildArContact filtered by the ArcpContId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcptitl(string $ArcpTitl) Return the first ChildArContact filtered by the ArcpTitl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcparcont(string $ArcpArCont) Return the first ChildArContact filtered by the ArcpArCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcpduncont(string $ArcpDunCont) Return the first ChildArContact filtered by the ArcpDunCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcpbuycont(string $ArcpBuyCont) Return the first ChildArContact filtered by the ArcpBuyCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcpacknow(string $ArcpAcknow) Return the first ChildArContact filtered by the ArcpAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByArcpcertcont(string $ArcpCertCont) Return the first ChildArContact filtered by the ArcpCertCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArContact filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArContact filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArContact requireOneByDummy(string $dummy) Return the first ChildArContact filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArContact[]|Collection find(?ConnectionInterface $con = null) Return ChildArContact objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArContact> find(?ConnectionInterface $con = null) Return ChildArContact objects based on current ModelCriteria
 *
 * @method     ChildArContact[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildArContact objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcucustid(string|array<string> $ArcuCustId) Return ChildArContact objects filtered by the ArcuCustId column
 * @method     ChildArContact[]|Collection findByArstshipid(string|array<string> $ArstShipId) Return ChildArContact objects filtered by the ArstShipId column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArstshipid(string|array<string> $ArstShipId) Return ChildArContact objects filtered by the ArstShipId column
 * @method     ChildArContact[]|Collection findByArcpcontid(string|array<string> $ArcpContId) Return ChildArContact objects filtered by the ArcpContId column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcpcontid(string|array<string> $ArcpContId) Return ChildArContact objects filtered by the ArcpContId column
 * @method     ChildArContact[]|Collection findByArcptitl(string|array<string> $ArcpTitl) Return ChildArContact objects filtered by the ArcpTitl column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcptitl(string|array<string> $ArcpTitl) Return ChildArContact objects filtered by the ArcpTitl column
 * @method     ChildArContact[]|Collection findByArcparcont(string|array<string> $ArcpArCont) Return ChildArContact objects filtered by the ArcpArCont column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcparcont(string|array<string> $ArcpArCont) Return ChildArContact objects filtered by the ArcpArCont column
 * @method     ChildArContact[]|Collection findByArcpduncont(string|array<string> $ArcpDunCont) Return ChildArContact objects filtered by the ArcpDunCont column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcpduncont(string|array<string> $ArcpDunCont) Return ChildArContact objects filtered by the ArcpDunCont column
 * @method     ChildArContact[]|Collection findByArcpbuycont(string|array<string> $ArcpBuyCont) Return ChildArContact objects filtered by the ArcpBuyCont column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcpbuycont(string|array<string> $ArcpBuyCont) Return ChildArContact objects filtered by the ArcpBuyCont column
 * @method     ChildArContact[]|Collection findByArcpacknow(string|array<string> $ArcpAcknow) Return ChildArContact objects filtered by the ArcpAcknow column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcpacknow(string|array<string> $ArcpAcknow) Return ChildArContact objects filtered by the ArcpAcknow column
 * @method     ChildArContact[]|Collection findByArcpcertcont(string|array<string> $ArcpCertCont) Return ChildArContact objects filtered by the ArcpCertCont column
 * @psalm-method Collection&\Traversable<ChildArContact> findByArcpcertcont(string|array<string> $ArcpCertCont) Return ChildArContact objects filtered by the ArcpCertCont column
 * @method     ChildArContact[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArContact objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArContact> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArContact objects filtered by the DateUpdtd column
 * @method     ChildArContact[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArContact objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArContact> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArContact objects filtered by the TimeUpdtd column
 * @method     ChildArContact[]|Collection findByDummy(string|array<string> $dummy) Return ChildArContact objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArContact> findByDummy(string|array<string> $dummy) Return ChildArContact objects filtered by the dummy column
 *
 * @method     ChildArContact[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArContact> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArContactQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArContactQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArContact', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArContactQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArContactQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArContactQuery) {
            return $criteria;
        }
        $query = new ChildArContactQuery();
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
     * @return ChildArContact|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArContactTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArContactTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildArContact A model object, or null if the key is not found
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
            /** @var ChildArContact $obj */
            $obj = new ChildArContact();
            $obj->hydrate($row);
            ArContactTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildArContact|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ArContactTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArContactTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ArContactTableMap::COL_ARCPCONTID, $key[2], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ArContactTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArContactTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ArContactTableMap::COL_ARCPCONTID, $key[2], Criteria::EQUAL);
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
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * $query->filterByArstshipid(['foo', 'bar']); // WHERE ArstShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpContId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpcontid('fooValue');   // WHERE ArcpContId = 'fooValue'
     * $query->filterByArcpcontid('%fooValue%', Criteria::LIKE); // WHERE ArcpContId LIKE '%fooValue%'
     * $query->filterByArcpcontid(['foo', 'bar']); // WHERE ArcpContId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcpcontid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcpcontid($arcpcontid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpcontid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPCONTID, $arcpcontid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpTitl column
     *
     * Example usage:
     * <code>
     * $query->filterByArcptitl('fooValue');   // WHERE ArcpTitl = 'fooValue'
     * $query->filterByArcptitl('%fooValue%', Criteria::LIKE); // WHERE ArcpTitl LIKE '%fooValue%'
     * $query->filterByArcptitl(['foo', 'bar']); // WHERE ArcpTitl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcptitl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcptitl($arcptitl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcptitl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPTITL, $arcptitl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpArCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcparcont('fooValue');   // WHERE ArcpArCont = 'fooValue'
     * $query->filterByArcparcont('%fooValue%', Criteria::LIKE); // WHERE ArcpArCont LIKE '%fooValue%'
     * $query->filterByArcparcont(['foo', 'bar']); // WHERE ArcpArCont IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcparcont The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcparcont($arcparcont = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcparcont)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPARCONT, $arcparcont, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpDunCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpduncont('fooValue');   // WHERE ArcpDunCont = 'fooValue'
     * $query->filterByArcpduncont('%fooValue%', Criteria::LIKE); // WHERE ArcpDunCont LIKE '%fooValue%'
     * $query->filterByArcpduncont(['foo', 'bar']); // WHERE ArcpDunCont IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcpduncont The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcpduncont($arcpduncont = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpduncont)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPDUNCONT, $arcpduncont, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpBuyCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpbuycont('fooValue');   // WHERE ArcpBuyCont = 'fooValue'
     * $query->filterByArcpbuycont('%fooValue%', Criteria::LIKE); // WHERE ArcpBuyCont LIKE '%fooValue%'
     * $query->filterByArcpbuycont(['foo', 'bar']); // WHERE ArcpBuyCont IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcpbuycont The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcpbuycont($arcpbuycont = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpbuycont)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPBUYCONT, $arcpbuycont, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpacknow('fooValue');   // WHERE ArcpAcknow = 'fooValue'
     * $query->filterByArcpacknow('%fooValue%', Criteria::LIKE); // WHERE ArcpAcknow LIKE '%fooValue%'
     * $query->filterByArcpacknow(['foo', 'bar']); // WHERE ArcpAcknow IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcpacknow The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcpacknow($arcpacknow = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpacknow)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPACKNOW, $arcpacknow, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcpCertCont column
     *
     * Example usage:
     * <code>
     * $query->filterByArcpcertcont('fooValue');   // WHERE ArcpCertCont = 'fooValue'
     * $query->filterByArcpcertcont('%fooValue%', Criteria::LIKE); // WHERE ArcpCertCont LIKE '%fooValue%'
     * $query->filterByArcpcertcont(['foo', 'bar']); // WHERE ArcpCertCont IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcpcertcont The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcpcertcont($arcpcertcont = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcpcertcont)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArContactTableMap::COL_ARCPCERTCONT, $arcpcertcont, $comparison);

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

        $this->addUsingAlias(ArContactTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArContactTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArContactTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ArContactTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ArContactTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

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
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, ?string $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(ArContactTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(ArContactTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomerShipto(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

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
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @param callable(\CustomerShiptoQuery):\CustomerShiptoQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerShiptoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerShiptoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CustomerShipto table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerShiptoQuery The inner query object of the EXISTS statement
     */
    public function useCustomerShiptoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT EXISTS query.
     *
     * @see useCustomerShiptoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerShiptoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerShiptoQuery The inner query object of the IN statement
     */
    public function useInCustomerShiptoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT IN query.
     *
     * @see useCustomerShiptoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerShiptoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArContact $arContact Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arContact = null)
    {
        if ($arContact) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArContactTableMap::COL_ARCUCUSTID), $arContact->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArContactTableMap::COL_ARSTSHIPID), $arContact->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ArContactTableMap::COL_ARCPCONTID), $arContact->getArcpcontid(), Criteria::NOT_EQUAL);
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArContactTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArContactTableMap::clearInstancePool();
            ArContactTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArContactTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArContactTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArContactTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArContactTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
