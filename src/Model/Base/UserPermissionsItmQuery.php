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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_itm_perm' table.
 *
 *
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
 * @method     ChildUserPermissionsItm findOne(ConnectionInterface $con = null) Return the first ChildUserPermissionsItm matching the query
 * @method     ChildUserPermissionsItm findOneOrCreate(ConnectionInterface $con = null) Return the first ChildUserPermissionsItm matching the query, or a new ChildUserPermissionsItm object populated from the query conditions when no match is found
 *
 * @method     ChildUserPermissionsItm findOneByItmpuserid(string $ItmpUserId) Return the first ChildUserPermissionsItm filtered by the ItmpUserId column
 * @method     ChildUserPermissionsItm findOneByItmpwhse(string $ItmpWhse) Return the first ChildUserPermissionsItm filtered by the ItmpWhse column
 * @method     ChildUserPermissionsItm findOneByItmpprices(string $ItmpPrices) Return the first ChildUserPermissionsItm filtered by the ItmpPrices column
 * @method     ChildUserPermissionsItm findOneByItmpcosts(string $ItmpCosts) Return the first ChildUserPermissionsItm filtered by the ItmpCosts column
 * @method     ChildUserPermissionsItm findOneByItmpxrefs(string $ItmpXrefs) Return the first ChildUserPermissionsItm filtered by the ItmpXrefs column
 * @method     ChildUserPermissionsItm findOneByItmpmisc(string $ItmpMisc) Return the first ChildUserPermissionsItm filtered by the ItmpMisc column
 * @method     ChildUserPermissionsItm findOneByItmppkg(string $ItmpPkg) Return the first ChildUserPermissionsItm filtered by the ItmpPkg column
 * @method     ChildUserPermissionsItm findOneByItmpoptions(string $ItmpOptions) Return the first ChildUserPermissionsItm filtered by the ItmpOptions column
 * @method     ChildUserPermissionsItm findOneByDateupdtd(string $DateUpdtd) Return the first ChildUserPermissionsItm filtered by the DateUpdtd column
 * @method     ChildUserPermissionsItm findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUserPermissionsItm filtered by the TimeUpdtd column
 * @method     ChildUserPermissionsItm findOneByDummy(string $dummy) Return the first ChildUserPermissionsItm filtered by the dummy column *

 * @method     ChildUserPermissionsItm requirePk($key, ConnectionInterface $con = null) Return the ChildUserPermissionsItm by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserPermissionsItm requireOne(ConnectionInterface $con = null) Return the first ChildUserPermissionsItm matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildUserPermissionsItm[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildUserPermissionsItm objects based on current ModelCriteria
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpuserid(string $ItmpUserId) Return ChildUserPermissionsItm objects filtered by the ItmpUserId column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpwhse(string $ItmpWhse) Return ChildUserPermissionsItm objects filtered by the ItmpWhse column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpprices(string $ItmpPrices) Return ChildUserPermissionsItm objects filtered by the ItmpPrices column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpcosts(string $ItmpCosts) Return ChildUserPermissionsItm objects filtered by the ItmpCosts column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpxrefs(string $ItmpXrefs) Return ChildUserPermissionsItm objects filtered by the ItmpXrefs column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpmisc(string $ItmpMisc) Return ChildUserPermissionsItm objects filtered by the ItmpMisc column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmppkg(string $ItmpPkg) Return ChildUserPermissionsItm objects filtered by the ItmpPkg column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByItmpoptions(string $ItmpOptions) Return ChildUserPermissionsItm objects filtered by the ItmpOptions column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildUserPermissionsItm objects filtered by the DateUpdtd column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildUserPermissionsItm objects filtered by the TimeUpdtd column
 * @method     ChildUserPermissionsItm[]|ObjectCollection findByDummy(string $dummy) Return ChildUserPermissionsItm objects filtered by the dummy column
 * @method     ChildUserPermissionsItm[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class UserPermissionsItmQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\UserPermissionsItmQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\UserPermissionsItm', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUserPermissionsItmQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUserPermissionsItmQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ItmpUserId column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpuserid('fooValue');   // WHERE ItmpUserId = 'fooValue'
     * $query->filterByItmpuserid('%fooValue%', Criteria::LIKE); // WHERE ItmpUserId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpuserid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpuserid($itmpuserid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpuserid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $itmpuserid, $comparison);
    }

    /**
     * Filter the query on the ItmpWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpwhse('fooValue');   // WHERE ItmpWhse = 'fooValue'
     * $query->filterByItmpwhse('%fooValue%', Criteria::LIKE); // WHERE ItmpWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpwhse($itmpwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPWHSE, $itmpwhse, $comparison);
    }

    /**
     * Filter the query on the ItmpPrices column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpprices('fooValue');   // WHERE ItmpPrices = 'fooValue'
     * $query->filterByItmpprices('%fooValue%', Criteria::LIKE); // WHERE ItmpPrices LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpprices The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpprices($itmpprices = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpprices)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPPRICES, $itmpprices, $comparison);
    }

    /**
     * Filter the query on the ItmpCosts column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpcosts('fooValue');   // WHERE ItmpCosts = 'fooValue'
     * $query->filterByItmpcosts('%fooValue%', Criteria::LIKE); // WHERE ItmpCosts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpcosts The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpcosts($itmpcosts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpcosts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPCOSTS, $itmpcosts, $comparison);
    }

    /**
     * Filter the query on the ItmpXrefs column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpxrefs('fooValue');   // WHERE ItmpXrefs = 'fooValue'
     * $query->filterByItmpxrefs('%fooValue%', Criteria::LIKE); // WHERE ItmpXrefs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpxrefs The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpxrefs($itmpxrefs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpxrefs)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPXREFS, $itmpxrefs, $comparison);
    }

    /**
     * Filter the query on the ItmpMisc column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpmisc('fooValue');   // WHERE ItmpMisc = 'fooValue'
     * $query->filterByItmpmisc('%fooValue%', Criteria::LIKE); // WHERE ItmpMisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpmisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpmisc($itmpmisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpmisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPMISC, $itmpmisc, $comparison);
    }

    /**
     * Filter the query on the ItmpPkg column
     *
     * Example usage:
     * <code>
     * $query->filterByItmppkg('fooValue');   // WHERE ItmpPkg = 'fooValue'
     * $query->filterByItmppkg('%fooValue%', Criteria::LIKE); // WHERE ItmpPkg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmppkg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmppkg($itmppkg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmppkg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPPKG, $itmppkg, $comparison);
    }

    /**
     * Filter the query on the ItmpOptions column
     *
     * Example usage:
     * <code>
     * $query->filterByItmpoptions('fooValue');   // WHERE ItmpOptions = 'fooValue'
     * $query->filterByItmpoptions('%fooValue%', Criteria::LIKE); // WHERE ItmpOptions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itmpoptions The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByItmpoptions($itmpoptions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itmpoptions)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPOPTIONS, $itmpoptions, $comparison);
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
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPermissionsItmTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \DplusUser object
     *
     * @param \DplusUser|ObjectCollection $dplusUser The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function filterByDplusUser($dplusUser, $comparison = null)
    {
        if ($dplusUser instanceof \DplusUser) {
            return $this
                ->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $dplusUser->getUsrcid(), $comparison);
        } elseif ($dplusUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserPermissionsItmTableMap::COL_ITMPUSERID, $dplusUser->toKeyValue('PrimaryKey', 'Usrcid'), $comparison);
        } else {
            throw new PropelException('filterByDplusUser() only accepts arguments of type \DplusUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DplusUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
     */
    public function joinDplusUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildUserPermissionsItm $userPermissionsItm Object to remove from the list of results
     *
     * @return $this|ChildUserPermissionsItmQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // UserPermissionsItmQuery
