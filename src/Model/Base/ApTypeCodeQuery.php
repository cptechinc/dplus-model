<?php

namespace Base;

use \ApTypeCode as ChildApTypeCode;
use \ApTypeCodeQuery as ChildApTypeCodeQuery;
use \Exception;
use \PDO;
use Map\ApTypeCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ap_type_code` table.
 *
 * @method     ChildApTypeCodeQuery orderByAptbtypecode($order = Criteria::ASC) Order by the AptbTypeCode column
 * @method     ChildApTypeCodeQuery orderByAptbtypedesc($order = Criteria::ASC) Order by the AptbTypeDesc column
 * @method     ChildApTypeCodeQuery orderByAptbtypefab($order = Criteria::ASC) Order by the AptbTypeFab column
 * @method     ChildApTypeCodeQuery orderByAptbtypeprod($order = Criteria::ASC) Order by the AptbTypeProd column
 * @method     ChildApTypeCodeQuery orderByAptbtypecomp($order = Criteria::ASC) Order by the AptbTypeComp column
 * @method     ChildApTypeCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApTypeCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApTypeCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApTypeCodeQuery groupByAptbtypecode() Group by the AptbTypeCode column
 * @method     ChildApTypeCodeQuery groupByAptbtypedesc() Group by the AptbTypeDesc column
 * @method     ChildApTypeCodeQuery groupByAptbtypefab() Group by the AptbTypeFab column
 * @method     ChildApTypeCodeQuery groupByAptbtypeprod() Group by the AptbTypeProd column
 * @method     ChildApTypeCodeQuery groupByAptbtypecomp() Group by the AptbTypeComp column
 * @method     ChildApTypeCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApTypeCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApTypeCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApTypeCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApTypeCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApTypeCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApTypeCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApTypeCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApTypeCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApTypeCodeQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApTypeCodeQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApTypeCodeQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApTypeCode|null findOne(?ConnectionInterface $con = null) Return the first ChildApTypeCode matching the query
 * @method     ChildApTypeCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildApTypeCode matching the query, or a new ChildApTypeCode object populated from the query conditions when no match is found
 *
 * @method     ChildApTypeCode|null findOneByAptbtypecode(string $AptbTypeCode) Return the first ChildApTypeCode filtered by the AptbTypeCode column
 * @method     ChildApTypeCode|null findOneByAptbtypedesc(string $AptbTypeDesc) Return the first ChildApTypeCode filtered by the AptbTypeDesc column
 * @method     ChildApTypeCode|null findOneByAptbtypefab(string $AptbTypeFab) Return the first ChildApTypeCode filtered by the AptbTypeFab column
 * @method     ChildApTypeCode|null findOneByAptbtypeprod(string $AptbTypeProd) Return the first ChildApTypeCode filtered by the AptbTypeProd column
 * @method     ChildApTypeCode|null findOneByAptbtypecomp(string $AptbTypeComp) Return the first ChildApTypeCode filtered by the AptbTypeComp column
 * @method     ChildApTypeCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildApTypeCode filtered by the DateUpdtd column
 * @method     ChildApTypeCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApTypeCode filtered by the TimeUpdtd column
 * @method     ChildApTypeCode|null findOneByDummy(string $dummy) Return the first ChildApTypeCode filtered by the dummy column
 *
 * @method     ChildApTypeCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildApTypeCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOne(?ConnectionInterface $con = null) Return the first ChildApTypeCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApTypeCode requireOneByAptbtypecode(string $AptbTypeCode) Return the first ChildApTypeCode filtered by the AptbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypedesc(string $AptbTypeDesc) Return the first ChildApTypeCode filtered by the AptbTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypefab(string $AptbTypeFab) Return the first ChildApTypeCode filtered by the AptbTypeFab column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypeprod(string $AptbTypeProd) Return the first ChildApTypeCode filtered by the AptbTypeProd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypecomp(string $AptbTypeComp) Return the first ChildApTypeCode filtered by the AptbTypeComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApTypeCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApTypeCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByDummy(string $dummy) Return the first ChildApTypeCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApTypeCode[]|Collection find(?ConnectionInterface $con = null) Return ChildApTypeCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildApTypeCode> find(?ConnectionInterface $con = null) Return ChildApTypeCode objects based on current ModelCriteria
 *
 * @method     ChildApTypeCode[]|Collection findByAptbtypecode(string|array<string> $AptbTypeCode) Return ChildApTypeCode objects filtered by the AptbTypeCode column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByAptbtypecode(string|array<string> $AptbTypeCode) Return ChildApTypeCode objects filtered by the AptbTypeCode column
 * @method     ChildApTypeCode[]|Collection findByAptbtypedesc(string|array<string> $AptbTypeDesc) Return ChildApTypeCode objects filtered by the AptbTypeDesc column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByAptbtypedesc(string|array<string> $AptbTypeDesc) Return ChildApTypeCode objects filtered by the AptbTypeDesc column
 * @method     ChildApTypeCode[]|Collection findByAptbtypefab(string|array<string> $AptbTypeFab) Return ChildApTypeCode objects filtered by the AptbTypeFab column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByAptbtypefab(string|array<string> $AptbTypeFab) Return ChildApTypeCode objects filtered by the AptbTypeFab column
 * @method     ChildApTypeCode[]|Collection findByAptbtypeprod(string|array<string> $AptbTypeProd) Return ChildApTypeCode objects filtered by the AptbTypeProd column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByAptbtypeprod(string|array<string> $AptbTypeProd) Return ChildApTypeCode objects filtered by the AptbTypeProd column
 * @method     ChildApTypeCode[]|Collection findByAptbtypecomp(string|array<string> $AptbTypeComp) Return ChildApTypeCode objects filtered by the AptbTypeComp column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByAptbtypecomp(string|array<string> $AptbTypeComp) Return ChildApTypeCode objects filtered by the AptbTypeComp column
 * @method     ChildApTypeCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApTypeCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildApTypeCode objects filtered by the DateUpdtd column
 * @method     ChildApTypeCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApTypeCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildApTypeCode objects filtered by the TimeUpdtd column
 * @method     ChildApTypeCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildApTypeCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildApTypeCode> findByDummy(string|array<string> $dummy) Return ChildApTypeCode objects filtered by the dummy column
 *
 * @method     ChildApTypeCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildApTypeCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ApTypeCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApTypeCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApTypeCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApTypeCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApTypeCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildApTypeCodeQuery) {
            return $criteria;
        }
        $query = new ChildApTypeCodeQuery();
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
     * @return ChildApTypeCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApTypeCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApTypeCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildApTypeCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT AptbTypeCode, AptbTypeDesc, AptbTypeFab, AptbTypeProd, AptbTypeComp, DateUpdtd, TimeUpdtd, dummy FROM ap_type_code WHERE AptbTypeCode = :p0';
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
            /** @var ChildApTypeCode $obj */
            $obj = new ChildApTypeCode();
            $obj->hydrate($row);
            ApTypeCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildApTypeCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the AptbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypecode('fooValue');   // WHERE AptbTypeCode = 'fooValue'
     * $query->filterByAptbtypecode('%fooValue%', Criteria::LIKE); // WHERE AptbTypeCode LIKE '%fooValue%'
     * $query->filterByAptbtypecode(['foo', 'bar']); // WHERE AptbTypeCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbtypecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbtypecode($aptbtypecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $aptbtypecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypedesc('fooValue');   // WHERE AptbTypeDesc = 'fooValue'
     * $query->filterByAptbtypedesc('%fooValue%', Criteria::LIKE); // WHERE AptbTypeDesc LIKE '%fooValue%'
     * $query->filterByAptbtypedesc(['foo', 'bar']); // WHERE AptbTypeDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbtypedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbtypedesc($aptbtypedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPEDESC, $aptbtypedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbTypeFab column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypefab('fooValue');   // WHERE AptbTypeFab = 'fooValue'
     * $query->filterByAptbtypefab('%fooValue%', Criteria::LIKE); // WHERE AptbTypeFab LIKE '%fooValue%'
     * $query->filterByAptbtypefab(['foo', 'bar']); // WHERE AptbTypeFab IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbtypefab The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbtypefab($aptbtypefab = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypefab)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPEFAB, $aptbtypefab, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbTypeProd column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypeprod('fooValue');   // WHERE AptbTypeProd = 'fooValue'
     * $query->filterByAptbtypeprod('%fooValue%', Criteria::LIKE); // WHERE AptbTypeProd LIKE '%fooValue%'
     * $query->filterByAptbtypeprod(['foo', 'bar']); // WHERE AptbTypeProd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbtypeprod The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbtypeprod($aptbtypeprod = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypeprod)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPEPROD, $aptbtypeprod, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbTypeComp column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypecomp('fooValue');   // WHERE AptbTypeComp = 'fooValue'
     * $query->filterByAptbtypecomp('%fooValue%', Criteria::LIKE); // WHERE AptbTypeComp LIKE '%fooValue%'
     * $query->filterByAptbtypecomp(['foo', 'bar']); // WHERE AptbTypeComp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbtypecomp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbtypecomp($aptbtypecomp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypecomp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECOMP, $aptbtypecomp, $comparison);

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

        $this->addUsingAlias(ApTypeCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ApTypeCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ApTypeCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendor($vendor, ?string $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            $this
                ->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $vendor->getAptbtypecode(), $comparison);

            return $this;
        } elseif ($vendor instanceof ObjectCollection) {
            $this
                ->useVendorQuery()
                ->filterByPrimaryKeys($vendor->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinVendor(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @param callable(\VendorQuery):\VendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Vendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \VendorQuery The inner query object of the EXISTS statement
     */
    public function useVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT EXISTS query.
     *
     * @see useVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Vendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \VendorQuery The inner query object of the IN statement
     */
    public function useInVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT IN query.
     *
     * @see useVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildApTypeCode $apTypeCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($apTypeCode = null)
    {
        if ($apTypeCode) {
            $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $apTypeCode->getAptbtypecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_type_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApTypeCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApTypeCodeTableMap::clearInstancePool();
            ApTypeCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApTypeCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApTypeCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApTypeCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApTypeCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
