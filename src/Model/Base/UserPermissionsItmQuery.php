<?php

namespace Base;

use \UserPermissionsItm as ChildUserPermissionsItm;
use \UserPermissionsItmQuery as ChildUserPermissionsItmQuery;
use \Exception;
use \PDO;
use Map\UserPermissionsItmTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_itm_perm` table.
 *
 * @method     ChildUserPermissionsItmQuery orderByItmpuserid($order = Criteria::ASC) Order by the ItmpUserId column
 * @method     ChildUserPermissionsItmQuery orderByItmpwhse($order = Criteria::ASC) Order by the ItmpWhse column
 * @method     ChildUserPermissionsItmQuery orderByItmpprices($order = Criteria::ASC) Order by the ItmpPrices column
 * @method     ChildUserPermissionsItmQuery orderByItmpcosts($order = Criteria::ASC) Order by the ItmpCosts column
 * @method     ChildUserPermissionsItmQuery orderByItmpxrefs($order = Criteria::ASC) Order by the ItmpXrefs column
 * @method     ChildUserPermissionsItmQuery orderByItmpmisc($order = Criteria::ASC) Order by the ItmpMisc column
 * @method     ChildUserPermissionsItmQuery orderByItmppkg($order = Criteria::ASC) Order by the ItmpPkg column
 * @method     ChildUserPermissionsItmQuery orderByItmpoptions($order = Criteria::ASC) Order by the ItmpOptions column
 * @method     ChildUserPermissionsItmQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildUserPermissionsItmQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildUserPermissionsItmQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildUserPermissionsItmQuery groupByItmpuserid() Group by the ItmpUserId column
 * @method     ChildUserPermissionsItmQuery groupByItmpwhse() Group by the ItmpWhse column
 * @method     ChildUserPermissionsItmQuery groupByItmpprices() Group by the ItmpPrices column
 * @method     ChildUserPermissionsItmQuery groupByItmpcosts() Group by the ItmpCosts column
 * @method     ChildUserPermissionsItmQuery groupByItmpxrefs() Group by the ItmpXrefs column
 * @method     ChildUserPermissionsItmQuery groupByItmpmisc() Group by the ItmpMisc column
 * @method     ChildUserPermissionsItmQuery groupByItmppkg() Group by the ItmpPkg column
 * @method     ChildUserPermissionsItmQuery groupByItmpoptions() Group by the ItmpOptions column
 * @method     ChildUserPermissionsItmQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildUserPermissionsItmQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildUserPermissionsItmQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildUserPermissionsItmQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUserPermissionsItmQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUserPermissionsItmQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUserPermissionsItmQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildUserPermissionsItmQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildUserPermissionsItmQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildUserPermissionsItmQuery leftJoinDplusUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DplusUser relation
 * @method     ChildUserPermissionsItmQuery rightJoinDplusUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DplusUser relation
 * @method     ChildUserPermissionsItmQuery innerJoinDplusUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DplusUser relation
 *
 * @method     ChildUserPermissionsItmQuery joinWithDplusUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DplusUser relation
 *
 * @method     ChildUserPermissionsItmQuery leftJoinWithDplusUser() Adds a LEFT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildUserPermissionsItmQuery rightJoinWithDplusUser() Adds a RIGHT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildUserPermissionsItmQuery innerJoinWithDplusUser() Adds a INNER JOIN clause and with to the query using the DplusUser relation
 *
 * @method     \DplusUserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildUserPermissionsItm|null findOne(?ConnectionInterface $con = null) Return the first ChildUserPermissionsItm matching the query
 * @method     ChildUserPermissionsItm findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildUserPermissionsItm matching the query, or a new ChildUserPermissionsItm object populated from the query conditions when no match is found
 *
 * @method     ChildUserPermissionsItm|null findOneByItmpuserid(string $ItmpUserId) Return the first ChildUserPermissionsItm filtered by the ItmpUserId column
 * @method     ChildUserPermissionsItm|null findOneByItmpwhse(string $ItmpWhse) Return the first ChildUserPermissionsItm filtered by the ItmpWhse column
 * @method     ChildUserPermissionsItm|null findOneByItmpprices(string $ItmpPrices) Return the first ChildUserPermissionsItm filtered by the ItmpPrices column
 * @method     ChildUserPermissionsItm|null findOneByItmpcosts(string $ItmpCosts) Return the first ChildUserPermissionsItm filtered by the ItmpCosts column
 * @method     ChildUserPermissionsItm|null findOneByItmpxrefs(string $ItmpXrefs) Return the first ChildUserPermissionsItm filtered by the ItmpXrefs column
 * @method     ChildUserPermissionsItm|null findOneByItmpmisc(string $ItmpMisc) Return the first ChildUserPermissionsItm filtered by the ItmpMisc column
 * @method     ChildUserPermissionsItm|null findOneByItmppkg(string $ItmpPkg) Return the first ChildUserPermissionsItm filtered by the ItmpPkg column
 * @method     ChildUserPermissionsItm|null findOneByItmpoptions(string $ItmpOptions) Return the first ChildUserPermissionsItm filtered by the ItmpOptions column
 * @method     ChildUserPermissionsItm|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildUserPermissionsItm filtered by the DateUpdtd column
 * @method     ChildUserPermissionsItm|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUserPermissionsItm filtered by the TimeUpdtd column
 * @method     ChildUserPermissionsItm|null findOneByDummy(string $dummy) Return the first ChildUserPermissionsItm filtered by the dummy column
 *
 * @method     ChildUserPermissionsItm requirePk($key, ?ConnectionInterface $con = null) Return the ChildUserPermissionsItm by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOne(?ConnectionInterface $con = null) Return the first ChildUserPermissionsItm matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUserPermissionsItm requireOneByItmpuserid(string $ItmpUserId) Return the first ChildUserPermissionsItm filtered by the ItmpUserId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmpwhse(string $ItmpWhse) Return the first ChildUserPermissionsItm filtered by the ItmpWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmpprices(string $ItmpPrices) Return the first ChildUserPermissionsItm filtered by the ItmpPrices column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmpcosts(string $ItmpCosts) Return the first ChildUserPermissionsItm filtered by the ItmpCosts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmpxrefs(string $ItmpXrefs) Return the first ChildUserPermissionsItm filtered by the ItmpXrefs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmpmisc(string $ItmpMisc) Return the first ChildUserPermissionsItm filtered by the ItmpMisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmppkg(string $ItmpPkg) Return the first ChildUserPermissionsItm filtered by the ItmpPkg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByItmpoptions(string $ItmpOptions) Return the first ChildUserPermissionsItm filtered by the ItmpOptions column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByDateupdtd(string $DateUpdtd) Return the first ChildUserPermissionsItm filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUserPermissionsItm filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOneByDummy(string $dummy) Return the first ChildUserPermissionsItm filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUserPermissionsItm[]|Collection find(?ConnectionInterface $con = null) Return ChildUserPermissionsItm objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> find(?ConnectionInterface $con = null) Return ChildUserPermissionsItm objects based on current ModelCriteria
 *
 * @method     ChildUserPermissionsItm[]|Collection findByItmpuserid(string|array<string> $ItmpUserId) Return ChildUserPermissionsItm objects filtered by the ItmpUserId column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpuserid(string|array<string> $ItmpUserId) Return ChildUserPermissionsItm objects filtered by the ItmpUserId column
 * @method     ChildUserPermissionsItm[]|Collection findByItmpwhse(string|array<string> $ItmpWhse) Return ChildUserPermissionsItm objects filtered by the ItmpWhse column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpwhse(string|array<string> $ItmpWhse) Return ChildUserPermissionsItm objects filtered by the ItmpWhse column
 * @method     ChildUserPermissionsItm[]|Collection findByItmpprices(string|array<string> $ItmpPrices) Return ChildUserPermissionsItm objects filtered by the ItmpPrices column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpprices(string|array<string> $ItmpPrices) Return ChildUserPermissionsItm objects filtered by the ItmpPrices column
 * @method     ChildUserPermissionsItm[]|Collection findByItmpcosts(string|array<string> $ItmpCosts) Return ChildUserPermissionsItm objects filtered by the ItmpCosts column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpcosts(string|array<string> $ItmpCosts) Return ChildUserPermissionsItm objects filtered by the ItmpCosts column
 * @method     ChildUserPermissionsItm[]|Collection findByItmpxrefs(string|array<string> $ItmpXrefs) Return ChildUserPermissionsItm objects filtered by the ItmpXrefs column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpxrefs(string|array<string> $ItmpXrefs) Return ChildUserPermissionsItm objects filtered by the ItmpXrefs column
 * @method     ChildUserPermissionsItm[]|Collection findByItmpmisc(string|array<string> $ItmpMisc) Return ChildUserPermissionsItm objects filtered by the ItmpMisc column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpmisc(string|array<string> $ItmpMisc) Return ChildUserPermissionsItm objects filtered by the ItmpMisc column
 * @method     ChildUserPermissionsItm[]|Collection findByItmppkg(string|array<string> $ItmpPkg) Return ChildUserPermissionsItm objects filtered by the ItmpPkg column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmppkg(string|array<string> $ItmpPkg) Return ChildUserPermissionsItm objects filtered by the ItmpPkg column
 * @method     ChildUserPermissionsItm[]|Collection findByItmpoptions(string|array<string> $ItmpOptions) Return ChildUserPermissionsItm objects filtered by the ItmpOptions column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByItmpoptions(string|array<string> $ItmpOptions) Return ChildUserPermissionsItm objects filtered by the ItmpOptions column
 * @method     ChildUserPermissionsItm[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildUserPermissionsItm objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildUserPermissionsItm objects filtered by the DateUpdtd column
 * @method     ChildUserPermissionsItm[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildUserPermissionsItm objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildUserPermissionsItm objects filtered by the TimeUpdtd column
 * @method     ChildUserPermissionsItm[]|Collection findByDummy(string|array<string> $dummy) Return ChildUserPermissionsItm objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildUserPermissionsItm> findByDummy(string|array<string> $dummy) Return ChildUserPermissionsItm objects filtered by the dummy column
 *
 * @method     ChildUserPermissionsItm[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildUserPermissionsItm> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class UserPermissionsItmQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\UserPermissionsItmQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\UserPermissionsItm', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUserPermissionsItmQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUserPermissionsItmQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildUserPermissionsItmQuery) {
            return $criteria;
        }
        $query = new ChildUserPermissionsItmQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildUserPermissionsItm|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = UserPermissionsItmTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildUserPermissionsItm A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ItmpUserId, ItmpWhse, ItmpPrices, ItmpCosts, ItmpXrefs, ItmpMisc, ItmpPkg, ItmpOptions, DateUpdtd, TimeUpdtd, dummy FROM inv_itm_perm WHERE ItmpUserId = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildUserPermissionsItm $obj */
            $obj = new ChildUserPermissionsItm();
            $obj->hydrate($row);
            UserPermissionsItmTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildUserPermissionsItm|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ItmpUserId column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpuserid('fooValue');   // WHERE ItmpUserId = 'fooValue'
     * $query->filterByItmpuserid('%fooValue%', Criteria::LIKE); // WHERE ItmpUserId LIKE '%fooValue%'
     * $query->filterByItmpuserid(['foo', 'bar']); // WHERE ItmpUserId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpuserid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpuserid($itmpuserid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpuserid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $itmpuserid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpwhse('fooValue');   // WHERE ItmpWhse = 'fooValue'
     * $query->filterByItmpwhse('%fooValue%', Criteria::LIKE); // WHERE ItmpWhse LIKE '%fooValue%'
     * $query->filterByItmpwhse(['foo', 'bar']); // WHERE ItmpWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpwhse($itmpwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPWHSE, $itmpwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpPrices column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpprices('fooValue');   // WHERE ItmpPrices = 'fooValue'
     * $query->filterByItmpprices('%fooValue%', Criteria::LIKE); // WHERE ItmpPrices LIKE '%fooValue%'
     * $query->filterByItmpprices(['foo', 'bar']); // WHERE ItmpPrices IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpprices The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpprices($itmpprices = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpprices)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPPRICES, $itmpprices, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpCosts column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpcosts('fooValue');   // WHERE ItmpCosts = 'fooValue'
     * $query->filterByItmpcosts('%fooValue%', Criteria::LIKE); // WHERE ItmpCosts LIKE '%fooValue%'
     * $query->filterByItmpcosts(['foo', 'bar']); // WHERE ItmpCosts IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpcosts The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpcosts($itmpcosts = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpcosts)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPCOSTS, $itmpcosts, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpXrefs column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpxrefs('fooValue');   // WHERE ItmpXrefs = 'fooValue'
     * $query->filterByItmpxrefs('%fooValue%', Criteria::LIKE); // WHERE ItmpXrefs LIKE '%fooValue%'
     * $query->filterByItmpxrefs(['foo', 'bar']); // WHERE ItmpXrefs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpxrefs The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpxrefs($itmpxrefs = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpxrefs)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPXREFS, $itmpxrefs, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpMisc column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpmisc('fooValue');   // WHERE ItmpMisc = 'fooValue'
     * $query->filterByItmpmisc('%fooValue%', Criteria::LIKE); // WHERE ItmpMisc LIKE '%fooValue%'
     * $query->filterByItmpmisc(['foo', 'bar']); // WHERE ItmpMisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpmisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpmisc($itmpmisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpmisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPMISC, $itmpmisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpPkg column
     *
     * Example usage:
     * <code>
     * $query->filterByItmppkg('fooValue');   // WHERE ItmpPkg = 'fooValue'
     * $query->filterByItmppkg('%fooValue%', Criteria::LIKE); // WHERE ItmpPkg LIKE '%fooValue%'
     * $query->filterByItmppkg(['foo', 'bar']); // WHERE ItmpPkg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmppkg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmppkg($itmppkg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmppkg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPPKG, $itmppkg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ItmpOptions column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpoptions('fooValue');   // WHERE ItmpOptions = 'fooValue'
     * $query->filterByItmpoptions('%fooValue%', Criteria::LIKE); // WHERE ItmpOptions LIKE '%fooValue%'
     * $query->filterByItmpoptions(['foo', 'bar']); // WHERE ItmpOptions IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $itmpoptions The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmpoptions($itmpoptions = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpoptions)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPOPTIONS, $itmpoptions, $comparison);

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

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(UserPermissionsItmTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \DplusUser object
     *
     * @param \DplusUser|ObjectCollection $dplusUser The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDplusUser($dplusUser, ?string $comparison = null)
    {
        if ($dplusUser instanceof \DplusUser) {
            return $this
                ->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $dplusUser->getUsrcid(), $comparison);
        } elseif ($dplusUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $dplusUser->toKeyValue('PrimaryKey', 'Usrcid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByDplusUser() only accepts arguments of type \DplusUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DplusUser relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinDplusUser(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DplusUser');

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
            $this->addJoinObject($join, 'DplusUser');
        }

        return $this;
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DplusUserQuery A secondary query class using the current class as primary query
     */
    public function useDplusUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDplusUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DplusUser', '\DplusUserQuery');
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @param callable(\DplusUserQuery):\DplusUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDplusUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useDplusUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to DplusUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \DplusUserQuery The inner query object of the EXISTS statement
     */
    public function useDplusUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useExistsQuery('DplusUser', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to DplusUser table for a NOT EXISTS query.
     *
     * @see useDplusUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \DplusUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useDplusUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useExistsQuery('DplusUser', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to DplusUser table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \DplusUserQuery The inner query object of the IN statement
     */
    public function useInDplusUserQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useInQuery('DplusUser', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to DplusUser table for a NOT IN query.
     *
     * @see useDplusUserInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \DplusUserQuery The inner query object of the NOT IN statement
     */
    public function useNotInDplusUserQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useInQuery('DplusUser', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildUserPermissionsItm $userPermissionsItm Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($userPermissionsItm = null)
    {
        if ($userPermissionsItm) {
            $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $userPermissionsItm->getItmpuserid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_itm_perm table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UserPermissionsItmTableMap::clearInstancePool();
            UserPermissionsItmTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(UserPermissionsItmTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UserPermissionsItmTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            UserPermissionsItmTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            UserPermissionsItmTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
