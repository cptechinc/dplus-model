<?php

namespace Base;

use \InvPriceCode as ChildInvPriceCode;
use \InvPriceCodeQuery as ChildInvPriceCodeQuery;
use \Exception;
use \PDO;
use Map\InvPriceCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_pric_code` table.
 *
 * @method     ChildInvPriceCodeQuery orderByIntbpricgrup($order = Criteria::ASC) Order by the IntbPricGrup column
 * @method     ChildInvPriceCodeQuery orderByIntbpricdesc($order = Criteria::ASC) Order by the IntbPricDesc column
 * @method     ChildInvPriceCodeQuery orderByIntbpricsaleprog($order = Criteria::ASC) Order by the IntbPricSaleProg column
 * @method     ChildInvPriceCodeQuery orderByIntbpriccostpct($order = Criteria::ASC) Order by the IntbPricCostPct column
 * @method     ChildInvPriceCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvPriceCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvPriceCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvPriceCodeQuery groupByIntbpricgrup() Group by the IntbPricGrup column
 * @method     ChildInvPriceCodeQuery groupByIntbpricdesc() Group by the IntbPricDesc column
 * @method     ChildInvPriceCodeQuery groupByIntbpricsaleprog() Group by the IntbPricSaleProg column
 * @method     ChildInvPriceCodeQuery groupByIntbpriccostpct() Group by the IntbPricCostPct column
 * @method     ChildInvPriceCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvPriceCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvPriceCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvPriceCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvPriceCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvPriceCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvPriceCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvPriceCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvPriceCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvPriceCodeQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvPriceCodeQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvPriceCodeQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvPriceCodeQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvPriceCodeQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvPriceCodeQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvPriceCodeQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvPriceCode|null findOne(?ConnectionInterface $con = null) Return the first ChildInvPriceCode matching the query
 * @method     ChildInvPriceCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvPriceCode matching the query, or a new ChildInvPriceCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvPriceCode|null findOneByIntbpricgrup(string $IntbPricGrup) Return the first ChildInvPriceCode filtered by the IntbPricGrup column
 * @method     ChildInvPriceCode|null findOneByIntbpricdesc(string $IntbPricDesc) Return the first ChildInvPriceCode filtered by the IntbPricDesc column
 * @method     ChildInvPriceCode|null findOneByIntbpricsaleprog(string $IntbPricSaleProg) Return the first ChildInvPriceCode filtered by the IntbPricSaleProg column
 * @method     ChildInvPriceCode|null findOneByIntbpriccostpct(string $IntbPricCostPct) Return the first ChildInvPriceCode filtered by the IntbPricCostPct column
 * @method     ChildInvPriceCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvPriceCode filtered by the DateUpdtd column
 * @method     ChildInvPriceCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvPriceCode filtered by the TimeUpdtd column
 * @method     ChildInvPriceCode|null findOneByDummy(string $dummy) Return the first ChildInvPriceCode filtered by the dummy column
 *
 * @method     ChildInvPriceCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvPriceCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOne(?ConnectionInterface $con = null) Return the first ChildInvPriceCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvPriceCode requireOneByIntbpricgrup(string $IntbPricGrup) Return the first ChildInvPriceCode filtered by the IntbPricGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOneByIntbpricdesc(string $IntbPricDesc) Return the first ChildInvPriceCode filtered by the IntbPricDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOneByIntbpricsaleprog(string $IntbPricSaleProg) Return the first ChildInvPriceCode filtered by the IntbPricSaleProg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOneByIntbpriccostpct(string $IntbPricCostPct) Return the first ChildInvPriceCode filtered by the IntbPricCostPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvPriceCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvPriceCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPriceCode requireOneByDummy(string $dummy) Return the first ChildInvPriceCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvPriceCode[]|Collection find(?ConnectionInterface $con = null) Return ChildInvPriceCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> find(?ConnectionInterface $con = null) Return ChildInvPriceCode objects based on current ModelCriteria
 *
 * @method     ChildInvPriceCode[]|Collection findByIntbpricgrup(string|array<string> $IntbPricGrup) Return ChildInvPriceCode objects filtered by the IntbPricGrup column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByIntbpricgrup(string|array<string> $IntbPricGrup) Return ChildInvPriceCode objects filtered by the IntbPricGrup column
 * @method     ChildInvPriceCode[]|Collection findByIntbpricdesc(string|array<string> $IntbPricDesc) Return ChildInvPriceCode objects filtered by the IntbPricDesc column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByIntbpricdesc(string|array<string> $IntbPricDesc) Return ChildInvPriceCode objects filtered by the IntbPricDesc column
 * @method     ChildInvPriceCode[]|Collection findByIntbpricsaleprog(string|array<string> $IntbPricSaleProg) Return ChildInvPriceCode objects filtered by the IntbPricSaleProg column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByIntbpricsaleprog(string|array<string> $IntbPricSaleProg) Return ChildInvPriceCode objects filtered by the IntbPricSaleProg column
 * @method     ChildInvPriceCode[]|Collection findByIntbpriccostpct(string|array<string> $IntbPricCostPct) Return ChildInvPriceCode objects filtered by the IntbPricCostPct column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByIntbpriccostpct(string|array<string> $IntbPricCostPct) Return ChildInvPriceCode objects filtered by the IntbPricCostPct column
 * @method     ChildInvPriceCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvPriceCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvPriceCode objects filtered by the DateUpdtd column
 * @method     ChildInvPriceCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvPriceCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvPriceCode objects filtered by the TimeUpdtd column
 * @method     ChildInvPriceCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvPriceCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvPriceCode> findByDummy(string|array<string> $dummy) Return ChildInvPriceCode objects filtered by the dummy column
 *
 * @method     ChildInvPriceCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvPriceCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvPriceCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvPriceCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvPriceCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvPriceCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvPriceCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvPriceCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvPriceCodeQuery();
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
     * @return ChildInvPriceCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvPriceCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvPriceCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvPriceCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbPricGrup, IntbPricDesc, IntbPricSaleProg, IntbPricCostPct, DateUpdtd, TimeUpdtd, dummy FROM inv_pric_code WHERE IntbPricGrup = :p0';
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
            /** @var ChildInvPriceCode $obj */
            $obj = new ChildInvPriceCode();
            $obj->hydrate($row);
            InvPriceCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvPriceCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICGRUP, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICGRUP, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IntbPricGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbpricgrup('fooValue');   // WHERE IntbPricGrup = 'fooValue'
     * $query->filterByIntbpricgrup('%fooValue%', Criteria::LIKE); // WHERE IntbPricGrup LIKE '%fooValue%'
     * $query->filterByIntbpricgrup(['foo', 'bar']); // WHERE IntbPricGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbpricgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbpricgrup($intbpricgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbpricgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICGRUP, $intbpricgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbPricDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbpricdesc('fooValue');   // WHERE IntbPricDesc = 'fooValue'
     * $query->filterByIntbpricdesc('%fooValue%', Criteria::LIKE); // WHERE IntbPricDesc LIKE '%fooValue%'
     * $query->filterByIntbpricdesc(['foo', 'bar']); // WHERE IntbPricDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbpricdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbpricdesc($intbpricdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbpricdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICDESC, $intbpricdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbPricSaleProg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbpricsaleprog('fooValue');   // WHERE IntbPricSaleProg = 'fooValue'
     * $query->filterByIntbpricsaleprog('%fooValue%', Criteria::LIKE); // WHERE IntbPricSaleProg LIKE '%fooValue%'
     * $query->filterByIntbpricsaleprog(['foo', 'bar']); // WHERE IntbPricSaleProg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbpricsaleprog The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbpricsaleprog($intbpricsaleprog = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbpricsaleprog)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICSALEPROG, $intbpricsaleprog, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbPricCostPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbpriccostpct(1234); // WHERE IntbPricCostPct = 1234
     * $query->filterByIntbpriccostpct(array(12, 34)); // WHERE IntbPricCostPct IN (12, 34)
     * $query->filterByIntbpriccostpct(array('min' => 12)); // WHERE IntbPricCostPct > 12
     * </code>
     *
     * @param mixed $intbpriccostpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbpriccostpct($intbpriccostpct = null, ?string $comparison = null)
    {
        if (is_array($intbpriccostpct)) {
            $useMinMax = false;
            if (isset($intbpriccostpct['min'])) {
                $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICCOSTPCT, $intbpriccostpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbpriccostpct['max'])) {
                $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICCOSTPCT, $intbpriccostpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICCOSTPCT, $intbpriccostpct, $comparison);

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

        $this->addUsingAlias(InvPriceCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvPriceCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvPriceCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            $this
                ->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICGRUP, $itemMasterItem->getIntbpricgrup(), $comparison);

            return $this;
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            $this
                ->useItemMasterItemQuery()
                ->filterByPrimaryKeys($itemMasterItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

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
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvPriceCode $invPriceCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invPriceCode = null)
    {
        if ($invPriceCode) {
            $this->addUsingAlias(InvPriceCodeTableMap::COL_INTBPRICGRUP, $invPriceCode->getIntbpricgrup(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_pric_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvPriceCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvPriceCodeTableMap::clearInstancePool();
            InvPriceCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvPriceCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvPriceCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvPriceCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvPriceCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
