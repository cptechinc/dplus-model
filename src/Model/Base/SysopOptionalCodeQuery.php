<?php

namespace Base;

use \SysopOptionalCode as ChildSysopOptionalCode;
use \SysopOptionalCodeQuery as ChildSysopOptionalCodeQuery;
use \Exception;
use \PDO;
use Map\SysopOptionalCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `sys_opt_optcode` table.
 *
 * @method     ChildSysopOptionalCodeQuery orderByOptnsystem($order = Criteria::ASC) Order by the OptnSystem column
 * @method     ChildSysopOptionalCodeQuery orderByOptncode($order = Criteria::ASC) Order by the OptnCode column
 * @method     ChildSysopOptionalCodeQuery orderByOptcid($order = Criteria::ASC) Order by the OptcId column
 * @method     ChildSysopOptionalCodeQuery orderByOptcdesc($order = Criteria::ASC) Order by the OptcDesc column
 * @method     ChildSysopOptionalCodeQuery orderByOptcdesc2($order = Criteria::ASC) Order by the OptcDesc2 column
 * @method     ChildSysopOptionalCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSysopOptionalCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSysopOptionalCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSysopOptionalCodeQuery groupByOptnsystem() Group by the OptnSystem column
 * @method     ChildSysopOptionalCodeQuery groupByOptncode() Group by the OptnCode column
 * @method     ChildSysopOptionalCodeQuery groupByOptcid() Group by the OptcId column
 * @method     ChildSysopOptionalCodeQuery groupByOptcdesc() Group by the OptcDesc column
 * @method     ChildSysopOptionalCodeQuery groupByOptcdesc2() Group by the OptcDesc2 column
 * @method     ChildSysopOptionalCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSysopOptionalCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSysopOptionalCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSysopOptionalCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSysopOptionalCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSysopOptionalCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSysopOptionalCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSysopOptionalCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSysopOptionalCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSysopOptionalCode|null findOne(?ConnectionInterface $con = null) Return the first ChildSysopOptionalCode matching the query
 * @method     ChildSysopOptionalCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSysopOptionalCode matching the query, or a new ChildSysopOptionalCode object populated from the query conditions when no match is found
 *
 * @method     ChildSysopOptionalCode|null findOneByOptnsystem(string $OptnSystem) Return the first ChildSysopOptionalCode filtered by the OptnSystem column
 * @method     ChildSysopOptionalCode|null findOneByOptncode(string $OptnCode) Return the first ChildSysopOptionalCode filtered by the OptnCode column
 * @method     ChildSysopOptionalCode|null findOneByOptcid(string $OptcId) Return the first ChildSysopOptionalCode filtered by the OptcId column
 * @method     ChildSysopOptionalCode|null findOneByOptcdesc(string $OptcDesc) Return the first ChildSysopOptionalCode filtered by the OptcDesc column
 * @method     ChildSysopOptionalCode|null findOneByOptcdesc2(string $OptcDesc2) Return the first ChildSysopOptionalCode filtered by the OptcDesc2 column
 * @method     ChildSysopOptionalCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildSysopOptionalCode filtered by the DateUpdtd column
 * @method     ChildSysopOptionalCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysopOptionalCode filtered by the TimeUpdtd column
 * @method     ChildSysopOptionalCode|null findOneByDummy(string $dummy) Return the first ChildSysopOptionalCode filtered by the dummy column
 *
 * @method     ChildSysopOptionalCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildSysopOptionalCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOne(?ConnectionInterface $con = null) Return the first ChildSysopOptionalCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysopOptionalCode requireOneByOptnsystem(string $OptnSystem) Return the first ChildSysopOptionalCode filtered by the OptnSystem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByOptncode(string $OptnCode) Return the first ChildSysopOptionalCode filtered by the OptnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByOptcid(string $OptcId) Return the first ChildSysopOptionalCode filtered by the OptcId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByOptcdesc(string $OptcDesc) Return the first ChildSysopOptionalCode filtered by the OptcDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByOptcdesc2(string $OptcDesc2) Return the first ChildSysopOptionalCode filtered by the OptcDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSysopOptionalCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSysopOptionalCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSysopOptionalCode requireOneByDummy(string $dummy) Return the first ChildSysopOptionalCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSysopOptionalCode[]|Collection find(?ConnectionInterface $con = null) Return ChildSysopOptionalCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> find(?ConnectionInterface $con = null) Return ChildSysopOptionalCode objects based on current ModelCriteria
 *
 * @method     ChildSysopOptionalCode[]|Collection findByOptnsystem(string|array<string> $OptnSystem) Return ChildSysopOptionalCode objects filtered by the OptnSystem column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByOptnsystem(string|array<string> $OptnSystem) Return ChildSysopOptionalCode objects filtered by the OptnSystem column
 * @method     ChildSysopOptionalCode[]|Collection findByOptncode(string|array<string> $OptnCode) Return ChildSysopOptionalCode objects filtered by the OptnCode column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByOptncode(string|array<string> $OptnCode) Return ChildSysopOptionalCode objects filtered by the OptnCode column
 * @method     ChildSysopOptionalCode[]|Collection findByOptcid(string|array<string> $OptcId) Return ChildSysopOptionalCode objects filtered by the OptcId column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByOptcid(string|array<string> $OptcId) Return ChildSysopOptionalCode objects filtered by the OptcId column
 * @method     ChildSysopOptionalCode[]|Collection findByOptcdesc(string|array<string> $OptcDesc) Return ChildSysopOptionalCode objects filtered by the OptcDesc column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByOptcdesc(string|array<string> $OptcDesc) Return ChildSysopOptionalCode objects filtered by the OptcDesc column
 * @method     ChildSysopOptionalCode[]|Collection findByOptcdesc2(string|array<string> $OptcDesc2) Return ChildSysopOptionalCode objects filtered by the OptcDesc2 column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByOptcdesc2(string|array<string> $OptcDesc2) Return ChildSysopOptionalCode objects filtered by the OptcDesc2 column
 * @method     ChildSysopOptionalCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSysopOptionalCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildSysopOptionalCode objects filtered by the DateUpdtd column
 * @method     ChildSysopOptionalCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSysopOptionalCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildSysopOptionalCode objects filtered by the TimeUpdtd column
 * @method     ChildSysopOptionalCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildSysopOptionalCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildSysopOptionalCode> findByDummy(string|array<string> $dummy) Return ChildSysopOptionalCode objects filtered by the dummy column
 *
 * @method     ChildSysopOptionalCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSysopOptionalCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SysopOptionalCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SysopOptionalCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SysopOptionalCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSysopOptionalCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSysopOptionalCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSysopOptionalCodeQuery) {
            return $criteria;
        }
        $query = new ChildSysopOptionalCodeQuery();
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
     * @param array[$OptnSystem, $OptnCode, $OptcId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSysopOptionalCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SysopOptionalCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SysopOptionalCodeTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildSysopOptionalCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OptnSystem, OptnCode, OptcId, OptcDesc, OptcDesc2, DateUpdtd, TimeUpdtd, dummy FROM sys_opt_optcode WHERE OptnSystem = :p0 AND OptnCode = :p1 AND OptcId = :p2';
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
            /** @var ChildSysopOptionalCode $obj */
            $obj = new ChildSysopOptionalCode();
            $obj->hydrate($row);
            SysopOptionalCodeTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildSysopOptionalCode|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTNSYSTEM, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTNCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTCID, $key[2], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(SysopOptionalCodeTableMap::COL_OPTNSYSTEM, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SysopOptionalCodeTableMap::COL_OPTNCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SysopOptionalCodeTableMap::COL_OPTCID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OptnSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnsystem('fooValue');   // WHERE OptnSystem = 'fooValue'
     * $query->filterByOptnsystem('%fooValue%', Criteria::LIKE); // WHERE OptnSystem LIKE '%fooValue%'
     * $query->filterByOptnsystem(['foo', 'bar']); // WHERE OptnSystem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $optnsystem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOptnsystem($optnsystem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnsystem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTNSYSTEM, $optnsystem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OptnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOptncode('fooValue');   // WHERE OptnCode = 'fooValue'
     * $query->filterByOptncode('%fooValue%', Criteria::LIKE); // WHERE OptnCode LIKE '%fooValue%'
     * $query->filterByOptncode(['foo', 'bar']); // WHERE OptnCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $optncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOptncode($optncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTNCODE, $optncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OptcId column
     *
     * Example usage:
     * <code>
     * $query->filterByOptcid('fooValue');   // WHERE OptcId = 'fooValue'
     * $query->filterByOptcid('%fooValue%', Criteria::LIKE); // WHERE OptcId LIKE '%fooValue%'
     * $query->filterByOptcid(['foo', 'bar']); // WHERE OptcId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $optcid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOptcid($optcid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optcid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTCID, $optcid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OptcDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOptcdesc('fooValue');   // WHERE OptcDesc = 'fooValue'
     * $query->filterByOptcdesc('%fooValue%', Criteria::LIKE); // WHERE OptcDesc LIKE '%fooValue%'
     * $query->filterByOptcdesc(['foo', 'bar']); // WHERE OptcDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $optcdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOptcdesc($optcdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optcdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTCDESC, $optcdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OptcDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOptcdesc2('fooValue');   // WHERE OptcDesc2 = 'fooValue'
     * $query->filterByOptcdesc2('%fooValue%', Criteria::LIKE); // WHERE OptcDesc2 LIKE '%fooValue%'
     * $query->filterByOptcdesc2(['foo', 'bar']); // WHERE OptcDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $optcdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOptcdesc2($optcdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optcdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_OPTCDESC2, $optcdesc2, $comparison);

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

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(SysopOptionalCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSysopOptionalCode $sysopOptionalCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($sysopOptionalCode = null)
    {
        if ($sysopOptionalCode) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SysopOptionalCodeTableMap::COL_OPTNSYSTEM), $sysopOptionalCode->getOptnsystem(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SysopOptionalCodeTableMap::COL_OPTNCODE), $sysopOptionalCode->getOptncode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SysopOptionalCodeTableMap::COL_OPTCID), $sysopOptionalCode->getOptcid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_opt_optcode table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SysopOptionalCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SysopOptionalCodeTableMap::clearInstancePool();
            SysopOptionalCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SysopOptionalCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SysopOptionalCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SysopOptionalCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SysopOptionalCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
