<?php

namespace Base;

use \InvOptCode as ChildInvOptCode;
use \InvOptCodeQuery as ChildInvOptCodeQuery;
use \Exception;
use \PDO;
use Map\InvOptCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_opt_code` table.
 *
 * @method     ChildInvOptCodeQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvOptCodeQuery orderByInoptcode($order = Criteria::ASC) Order by the InoptCode column
 * @method     ChildInvOptCodeQuery orderByInoptcodedesc($order = Criteria::ASC) Order by the InoptCodeDesc column
 * @method     ChildInvOptCodeQuery orderByInoptvalue($order = Criteria::ASC) Order by the InoptValue column
 * @method     ChildInvOptCodeQuery orderByInoptvaluedesc($order = Criteria::ASC) Order by the InoptValueDesc column
 * @method     ChildInvOptCodeQuery orderByInoptvaluedesc2($order = Criteria::ASC) Order by the InoptValueDesc2 column
 * @method     ChildInvOptCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvOptCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvOptCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvOptCodeQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvOptCodeQuery groupByInoptcode() Group by the InoptCode column
 * @method     ChildInvOptCodeQuery groupByInoptcodedesc() Group by the InoptCodeDesc column
 * @method     ChildInvOptCodeQuery groupByInoptvalue() Group by the InoptValue column
 * @method     ChildInvOptCodeQuery groupByInoptvaluedesc() Group by the InoptValueDesc column
 * @method     ChildInvOptCodeQuery groupByInoptvaluedesc2() Group by the InoptValueDesc2 column
 * @method     ChildInvOptCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvOptCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvOptCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvOptCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvOptCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvOptCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvOptCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvOptCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvOptCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvOptCode|null findOne(?ConnectionInterface $con = null) Return the first ChildInvOptCode matching the query
 * @method     ChildInvOptCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvOptCode matching the query, or a new ChildInvOptCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvOptCode|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvOptCode filtered by the InitItemNbr column
 * @method     ChildInvOptCode|null findOneByInoptcode(string $InoptCode) Return the first ChildInvOptCode filtered by the InoptCode column
 * @method     ChildInvOptCode|null findOneByInoptcodedesc(string $InoptCodeDesc) Return the first ChildInvOptCode filtered by the InoptCodeDesc column
 * @method     ChildInvOptCode|null findOneByInoptvalue(string $InoptValue) Return the first ChildInvOptCode filtered by the InoptValue column
 * @method     ChildInvOptCode|null findOneByInoptvaluedesc(string $InoptValueDesc) Return the first ChildInvOptCode filtered by the InoptValueDesc column
 * @method     ChildInvOptCode|null findOneByInoptvaluedesc2(string $InoptValueDesc2) Return the first ChildInvOptCode filtered by the InoptValueDesc2 column
 * @method     ChildInvOptCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvOptCode filtered by the DateUpdtd column
 * @method     ChildInvOptCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvOptCode filtered by the TimeUpdtd column
 * @method     ChildInvOptCode|null findOneByDummy(string $dummy) Return the first ChildInvOptCode filtered by the dummy column
 *
 * @method     ChildInvOptCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvOptCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOne(?ConnectionInterface $con = null) Return the first ChildInvOptCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvOptCode requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvOptCode filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptcode(string $InoptCode) Return the first ChildInvOptCode filtered by the InoptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptcodedesc(string $InoptCodeDesc) Return the first ChildInvOptCode filtered by the InoptCodeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptvalue(string $InoptValue) Return the first ChildInvOptCode filtered by the InoptValue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptvaluedesc(string $InoptValueDesc) Return the first ChildInvOptCode filtered by the InoptValueDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByInoptvaluedesc2(string $InoptValueDesc2) Return the first ChildInvOptCode filtered by the InoptValueDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvOptCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvOptCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvOptCode requireOneByDummy(string $dummy) Return the first ChildInvOptCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvOptCode[]|Collection find(?ConnectionInterface $con = null) Return ChildInvOptCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvOptCode> find(?ConnectionInterface $con = null) Return ChildInvOptCode objects based on current ModelCriteria
 *
 * @method     ChildInvOptCode[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvOptCode objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvOptCode objects filtered by the InitItemNbr column
 * @method     ChildInvOptCode[]|Collection findByInoptcode(string|array<string> $InoptCode) Return ChildInvOptCode objects filtered by the InoptCode column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByInoptcode(string|array<string> $InoptCode) Return ChildInvOptCode objects filtered by the InoptCode column
 * @method     ChildInvOptCode[]|Collection findByInoptcodedesc(string|array<string> $InoptCodeDesc) Return ChildInvOptCode objects filtered by the InoptCodeDesc column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByInoptcodedesc(string|array<string> $InoptCodeDesc) Return ChildInvOptCode objects filtered by the InoptCodeDesc column
 * @method     ChildInvOptCode[]|Collection findByInoptvalue(string|array<string> $InoptValue) Return ChildInvOptCode objects filtered by the InoptValue column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByInoptvalue(string|array<string> $InoptValue) Return ChildInvOptCode objects filtered by the InoptValue column
 * @method     ChildInvOptCode[]|Collection findByInoptvaluedesc(string|array<string> $InoptValueDesc) Return ChildInvOptCode objects filtered by the InoptValueDesc column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByInoptvaluedesc(string|array<string> $InoptValueDesc) Return ChildInvOptCode objects filtered by the InoptValueDesc column
 * @method     ChildInvOptCode[]|Collection findByInoptvaluedesc2(string|array<string> $InoptValueDesc2) Return ChildInvOptCode objects filtered by the InoptValueDesc2 column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByInoptvaluedesc2(string|array<string> $InoptValueDesc2) Return ChildInvOptCode objects filtered by the InoptValueDesc2 column
 * @method     ChildInvOptCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvOptCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvOptCode objects filtered by the DateUpdtd column
 * @method     ChildInvOptCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvOptCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvOptCode objects filtered by the TimeUpdtd column
 * @method     ChildInvOptCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvOptCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvOptCode> findByDummy(string|array<string> $dummy) Return ChildInvOptCode objects filtered by the dummy column
 *
 * @method     ChildInvOptCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvOptCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvOptCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvOptCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvOptCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvOptCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvOptCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvOptCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvOptCodeQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $InoptCode] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvOptCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvOptCodeTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvOptCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InoptCode, InoptCodeDesc, InoptValue, InoptValueDesc, InoptValueDesc2, DateUpdtd, TimeUpdtd, dummy FROM inv_opt_code WHERE InitItemNbr = :p0 AND InoptCode = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvOptCode $obj */
            $obj = new ChildInvOptCode();
            $obj->hydrate($row);
            InvOptCodeTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvOptCode|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(InvOptCodeTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTCODE, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(InvOptCodeTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvOptCodeTableMap::COL_INOPTCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvOptCodeTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InoptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptcode('fooValue');   // WHERE InoptCode = 'fooValue'
     * $query->filterByInoptcode('%fooValue%', Criteria::LIKE); // WHERE InoptCode LIKE '%fooValue%'
     * $query->filterByInoptcode(['foo', 'bar']); // WHERE InoptCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inoptcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInoptcode($inoptcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTCODE, $inoptcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InoptCodeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptcodedesc('fooValue');   // WHERE InoptCodeDesc = 'fooValue'
     * $query->filterByInoptcodedesc('%fooValue%', Criteria::LIKE); // WHERE InoptCodeDesc LIKE '%fooValue%'
     * $query->filterByInoptcodedesc(['foo', 'bar']); // WHERE InoptCodeDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inoptcodedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInoptcodedesc($inoptcodedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptcodedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTCODEDESC, $inoptcodedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InoptValue column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptvalue('fooValue');   // WHERE InoptValue = 'fooValue'
     * $query->filterByInoptvalue('%fooValue%', Criteria::LIKE); // WHERE InoptValue LIKE '%fooValue%'
     * $query->filterByInoptvalue(['foo', 'bar']); // WHERE InoptValue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inoptvalue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInoptvalue($inoptvalue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptvalue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTVALUE, $inoptvalue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InoptValueDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptvaluedesc('fooValue');   // WHERE InoptValueDesc = 'fooValue'
     * $query->filterByInoptvaluedesc('%fooValue%', Criteria::LIKE); // WHERE InoptValueDesc LIKE '%fooValue%'
     * $query->filterByInoptvaluedesc(['foo', 'bar']); // WHERE InoptValueDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inoptvaluedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInoptvaluedesc($inoptvaluedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptvaluedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTVALUEDESC, $inoptvaluedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InoptValueDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInoptvaluedesc2('fooValue');   // WHERE InoptValueDesc2 = 'fooValue'
     * $query->filterByInoptvaluedesc2('%fooValue%', Criteria::LIKE); // WHERE InoptValueDesc2 LIKE '%fooValue%'
     * $query->filterByInoptvaluedesc2(['foo', 'bar']); // WHERE InoptValueDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inoptvaluedesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInoptvaluedesc2($inoptvaluedesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inoptvaluedesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvOptCodeTableMap::COL_INOPTVALUEDESC2, $inoptvaluedesc2, $comparison);

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

        $this->addUsingAlias(InvOptCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvOptCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvOptCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvOptCode $invOptCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invOptCode = null)
    {
        if ($invOptCode) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvOptCodeTableMap::COL_INITITEMNBR), $invOptCode->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvOptCodeTableMap::COL_INOPTCODE), $invOptCode->getInoptcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_opt_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvOptCodeTableMap::clearInstancePool();
            InvOptCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvOptCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvOptCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvOptCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvOptCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
