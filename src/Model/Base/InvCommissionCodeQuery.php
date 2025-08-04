<?php

namespace Base;

use \InvCommissionCode as ChildInvCommissionCode;
use \InvCommissionCodeQuery as ChildInvCommissionCodeQuery;
use \Exception;
use \PDO;
use Map\InvCommissionCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_comm_code` table.
 *
 * @method     ChildInvCommissionCodeQuery orderByIntbcommgrup($order = Criteria::ASC) Order by the IntbCommGrup column
 * @method     ChildInvCommissionCodeQuery orderByIntbcommdesc($order = Criteria::ASC) Order by the IntbCommDesc column
 * @method     ChildInvCommissionCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvCommissionCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvCommissionCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvCommissionCodeQuery groupByIntbcommgrup() Group by the IntbCommGrup column
 * @method     ChildInvCommissionCodeQuery groupByIntbcommdesc() Group by the IntbCommDesc column
 * @method     ChildInvCommissionCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvCommissionCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvCommissionCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvCommissionCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvCommissionCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvCommissionCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvCommissionCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvCommissionCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvCommissionCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvCommissionCodeQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvCommissionCodeQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvCommissionCodeQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvCommissionCodeQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvCommissionCodeQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvCommissionCodeQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvCommissionCodeQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvCommissionCode|null findOne(?ConnectionInterface $con = null) Return the first ChildInvCommissionCode matching the query
 * @method     ChildInvCommissionCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvCommissionCode matching the query, or a new ChildInvCommissionCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvCommissionCode|null findOneByIntbcommgrup(string $IntbCommGrup) Return the first ChildInvCommissionCode filtered by the IntbCommGrup column
 * @method     ChildInvCommissionCode|null findOneByIntbcommdesc(string $IntbCommDesc) Return the first ChildInvCommissionCode filtered by the IntbCommDesc column
 * @method     ChildInvCommissionCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvCommissionCode filtered by the DateUpdtd column
 * @method     ChildInvCommissionCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvCommissionCode filtered by the TimeUpdtd column
 * @method     ChildInvCommissionCode|null findOneByDummy(string $dummy) Return the first ChildInvCommissionCode filtered by the dummy column
 *
 * @method     ChildInvCommissionCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvCommissionCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvCommissionCode requireOne(?ConnectionInterface $con = null) Return the first ChildInvCommissionCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvCommissionCode requireOneByIntbcommgrup(string $IntbCommGrup) Return the first ChildInvCommissionCode filtered by the IntbCommGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvCommissionCode requireOneByIntbcommdesc(string $IntbCommDesc) Return the first ChildInvCommissionCode filtered by the IntbCommDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvCommissionCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvCommissionCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvCommissionCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvCommissionCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvCommissionCode requireOneByDummy(string $dummy) Return the first ChildInvCommissionCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvCommissionCode[]|Collection find(?ConnectionInterface $con = null) Return ChildInvCommissionCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvCommissionCode> find(?ConnectionInterface $con = null) Return ChildInvCommissionCode objects based on current ModelCriteria
 *
 * @method     ChildInvCommissionCode[]|Collection findByIntbcommgrup(string|array<string> $IntbCommGrup) Return ChildInvCommissionCode objects filtered by the IntbCommGrup column
 * @psalm-method Collection&\Traversable<ChildInvCommissionCode> findByIntbcommgrup(string|array<string> $IntbCommGrup) Return ChildInvCommissionCode objects filtered by the IntbCommGrup column
 * @method     ChildInvCommissionCode[]|Collection findByIntbcommdesc(string|array<string> $IntbCommDesc) Return ChildInvCommissionCode objects filtered by the IntbCommDesc column
 * @psalm-method Collection&\Traversable<ChildInvCommissionCode> findByIntbcommdesc(string|array<string> $IntbCommDesc) Return ChildInvCommissionCode objects filtered by the IntbCommDesc column
 * @method     ChildInvCommissionCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvCommissionCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvCommissionCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvCommissionCode objects filtered by the DateUpdtd column
 * @method     ChildInvCommissionCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvCommissionCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvCommissionCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvCommissionCode objects filtered by the TimeUpdtd column
 * @method     ChildInvCommissionCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvCommissionCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvCommissionCode> findByDummy(string|array<string> $dummy) Return ChildInvCommissionCode objects filtered by the dummy column
 *
 * @method     ChildInvCommissionCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvCommissionCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvCommissionCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvCommissionCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvCommissionCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvCommissionCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvCommissionCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvCommissionCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvCommissionCodeQuery();
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
     * @return ChildInvCommissionCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvCommissionCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvCommissionCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvCommissionCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbCommGrup, IntbCommDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_comm_code WHERE IntbCommGrup = :p0';
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
            /** @var ChildInvCommissionCode $obj */
            $obj = new ChildInvCommissionCode();
            $obj->hydrate($row);
            InvCommissionCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvCommissionCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_INTBCOMMGRUP, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_INTBCOMMGRUP, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IntbCommGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcommgrup('fooValue');   // WHERE IntbCommGrup = 'fooValue'
     * $query->filterByIntbcommgrup('%fooValue%', Criteria::LIKE); // WHERE IntbCommGrup LIKE '%fooValue%'
     * $query->filterByIntbcommgrup(['foo', 'bar']); // WHERE IntbCommGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcommgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcommgrup($intbcommgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcommgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_INTBCOMMGRUP, $intbcommgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCommDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcommdesc('fooValue');   // WHERE IntbCommDesc = 'fooValue'
     * $query->filterByIntbcommdesc('%fooValue%', Criteria::LIKE); // WHERE IntbCommDesc LIKE '%fooValue%'
     * $query->filterByIntbcommdesc(['foo', 'bar']); // WHERE IntbCommDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcommdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcommdesc($intbcommdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcommdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_INTBCOMMDESC, $intbcommdesc, $comparison);

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

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvCommissionCodeTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(InvCommissionCodeTableMap::COL_INTBCOMMGRUP, $itemMasterItem->getIntbcommgrup(), $comparison);

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
     * @param ChildInvCommissionCode $invCommissionCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invCommissionCode = null)
    {
        if ($invCommissionCode) {
            $this->addUsingAlias(InvCommissionCodeTableMap::COL_INTBCOMMGRUP, $invCommissionCode->getIntbcommgrup(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_comm_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvCommissionCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvCommissionCodeTableMap::clearInstancePool();
            InvCommissionCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvCommissionCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvCommissionCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvCommissionCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvCommissionCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
