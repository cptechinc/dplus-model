<?php

namespace Base;

use \InvItem2Item as ChildInvItem2Item;
use \InvItem2ItemQuery as ChildInvItem2ItemQuery;
use \Exception;
use \PDO;
use Map\InvItem2ItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_item_2_item' table.
 *
 *
 *
 * @method     ChildInvItem2ItemQuery orderByI2imstritemid($order = Criteria::ASC) Order by the I2iMstrItemId column
 * @method     ChildInvItem2ItemQuery orderByI2ichilditemid($order = Criteria::ASC) Order by the I2iChildItemId column
 * @method     ChildInvItem2ItemQuery orderByI2isupplywhse($order = Criteria::ASC) Order by the I2iSupplyWhse column
 * @method     ChildInvItem2ItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvItem2ItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvItem2ItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvItem2ItemQuery groupByI2imstritemid() Group by the I2iMstrItemId column
 * @method     ChildInvItem2ItemQuery groupByI2ichilditemid() Group by the I2iChildItemId column
 * @method     ChildInvItem2ItemQuery groupByI2isupplywhse() Group by the I2iSupplyWhse column
 * @method     ChildInvItem2ItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvItem2ItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvItem2ItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvItem2ItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvItem2ItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvItem2ItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvItem2ItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvItem2ItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvItem2ItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvItem2ItemQuery leftJoinItemMasterItemRelatedByI2imstritemid($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItemRelatedByI2imstritemid relation
 * @method     ChildInvItem2ItemQuery rightJoinItemMasterItemRelatedByI2imstritemid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItemRelatedByI2imstritemid relation
 * @method     ChildInvItem2ItemQuery innerJoinItemMasterItemRelatedByI2imstritemid($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItemRelatedByI2imstritemid relation
 *
 * @method     ChildInvItem2ItemQuery joinWithItemMasterItemRelatedByI2imstritemid($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItemRelatedByI2imstritemid relation
 *
 * @method     ChildInvItem2ItemQuery leftJoinWithItemMasterItemRelatedByI2imstritemid() Adds a LEFT JOIN clause and with to the query using the ItemMasterItemRelatedByI2imstritemid relation
 * @method     ChildInvItem2ItemQuery rightJoinWithItemMasterItemRelatedByI2imstritemid() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItemRelatedByI2imstritemid relation
 * @method     ChildInvItem2ItemQuery innerJoinWithItemMasterItemRelatedByI2imstritemid() Adds a INNER JOIN clause and with to the query using the ItemMasterItemRelatedByI2imstritemid relation
 *
 * @method     ChildInvItem2ItemQuery leftJoinItemMasterItemRelatedByI2ichilditemid($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 * @method     ChildInvItem2ItemQuery rightJoinItemMasterItemRelatedByI2ichilditemid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 * @method     ChildInvItem2ItemQuery innerJoinItemMasterItemRelatedByI2ichilditemid($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 *
 * @method     ChildInvItem2ItemQuery joinWithItemMasterItemRelatedByI2ichilditemid($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 *
 * @method     ChildInvItem2ItemQuery leftJoinWithItemMasterItemRelatedByI2ichilditemid() Adds a LEFT JOIN clause and with to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 * @method     ChildInvItem2ItemQuery rightJoinWithItemMasterItemRelatedByI2ichilditemid() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 * @method     ChildInvItem2ItemQuery innerJoinWithItemMasterItemRelatedByI2ichilditemid() Adds a INNER JOIN clause and with to the query using the ItemMasterItemRelatedByI2ichilditemid relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvItem2Item findOne(ConnectionInterface $con = null) Return the first ChildInvItem2Item matching the query
 * @method     ChildInvItem2Item findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvItem2Item matching the query, or a new ChildInvItem2Item object populated from the query conditions when no match is found
 *
 * @method     ChildInvItem2Item findOneByI2imstritemid(string $I2iMstrItemId) Return the first ChildInvItem2Item filtered by the I2iMstrItemId column
 * @method     ChildInvItem2Item findOneByI2ichilditemid(string $I2iChildItemId) Return the first ChildInvItem2Item filtered by the I2iChildItemId column
 * @method     ChildInvItem2Item findOneByI2isupplywhse(string $I2iSupplyWhse) Return the first ChildInvItem2Item filtered by the I2iSupplyWhse column
 * @method     ChildInvItem2Item findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvItem2Item filtered by the DateUpdtd column
 * @method     ChildInvItem2Item findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvItem2Item filtered by the TimeUpdtd column
 * @method     ChildInvItem2Item findOneByDummy(string $dummy) Return the first ChildInvItem2Item filtered by the dummy column *

 * @method     ChildInvItem2Item requirePk($key, ConnectionInterface $con = null) Return the ChildInvItem2Item by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvItem2Item requireOne(ConnectionInterface $con = null) Return the first ChildInvItem2Item matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvItem2Item requireOneByI2imstritemid(string $I2iMstrItemId) Return the first ChildInvItem2Item filtered by the I2iMstrItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvItem2Item requireOneByI2ichilditemid(string $I2iChildItemId) Return the first ChildInvItem2Item filtered by the I2iChildItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvItem2Item requireOneByI2isupplywhse(string $I2iSupplyWhse) Return the first ChildInvItem2Item filtered by the I2iSupplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvItem2Item requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvItem2Item filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvItem2Item requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvItem2Item filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvItem2Item requireOneByDummy(string $dummy) Return the first ChildInvItem2Item filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvItem2Item[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvItem2Item objects based on current ModelCriteria
 * @method     ChildInvItem2Item[]|ObjectCollection findByI2imstritemid(string $I2iMstrItemId) Return ChildInvItem2Item objects filtered by the I2iMstrItemId column
 * @method     ChildInvItem2Item[]|ObjectCollection findByI2ichilditemid(string $I2iChildItemId) Return ChildInvItem2Item objects filtered by the I2iChildItemId column
 * @method     ChildInvItem2Item[]|ObjectCollection findByI2isupplywhse(string $I2iSupplyWhse) Return ChildInvItem2Item objects filtered by the I2iSupplyWhse column
 * @method     ChildInvItem2Item[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvItem2Item objects filtered by the DateUpdtd column
 * @method     ChildInvItem2Item[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvItem2Item objects filtered by the TimeUpdtd column
 * @method     ChildInvItem2Item[]|ObjectCollection findByDummy(string $dummy) Return ChildInvItem2Item objects filtered by the dummy column
 * @method     ChildInvItem2Item[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvItem2ItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvItem2ItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvItem2Item', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvItem2ItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvItem2ItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvItem2ItemQuery) {
            return $criteria;
        }
        $query = new ChildInvItem2ItemQuery();
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
     * @param array[$I2iMstrItemId, $I2iChildItemId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvItem2Item|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvItem2ItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvItem2ItemTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvItem2Item A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT I2iMstrItemId, I2iChildItemId, I2iSupplyWhse, DateUpdtd, TimeUpdtd, dummy FROM inv_item_2_item WHERE I2iMstrItemId = :p0 AND I2iChildItemId = :p1';
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
            /** @var ChildInvItem2Item $obj */
            $obj = new ChildInvItem2Item();
            $obj->hydrate($row);
            InvItem2ItemTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvItem2Item|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvItem2ItemTableMap::COL_I2IMSTRITEMID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvItem2ItemTableMap::COL_I2ICHILDITEMID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvItem2ItemTableMap::COL_I2IMSTRITEMID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvItem2ItemTableMap::COL_I2ICHILDITEMID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the I2iMstrItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByI2imstritemid('fooValue');   // WHERE I2iMstrItemId = 'fooValue'
     * $query->filterByI2imstritemid('%fooValue%', Criteria::LIKE); // WHERE I2iMstrItemId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $i2imstritemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByI2imstritemid($i2imstritemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($i2imstritemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvItem2ItemTableMap::COL_I2IMSTRITEMID, $i2imstritemid, $comparison);
    }

    /**
     * Filter the query on the I2iChildItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByI2ichilditemid('fooValue');   // WHERE I2iChildItemId = 'fooValue'
     * $query->filterByI2ichilditemid('%fooValue%', Criteria::LIKE); // WHERE I2iChildItemId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $i2ichilditemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByI2ichilditemid($i2ichilditemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($i2ichilditemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvItem2ItemTableMap::COL_I2ICHILDITEMID, $i2ichilditemid, $comparison);
    }

    /**
     * Filter the query on the I2iSupplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByI2isupplywhse('fooValue');   // WHERE I2iSupplyWhse = 'fooValue'
     * $query->filterByI2isupplywhse('%fooValue%', Criteria::LIKE); // WHERE I2iSupplyWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $i2isupplywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByI2isupplywhse($i2isupplywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($i2isupplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvItem2ItemTableMap::COL_I2ISUPPLYWHSE, $i2isupplywhse, $comparison);
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
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvItem2ItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvItem2ItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvItem2ItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByItemMasterItemRelatedByI2imstritemid($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvItem2ItemTableMap::COL_I2IMSTRITEMID, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvItem2ItemTableMap::COL_I2IMSTRITEMID, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItemRelatedByI2imstritemid() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItemRelatedByI2imstritemid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function joinItemMasterItemRelatedByI2imstritemid($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItemRelatedByI2imstritemid');

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
            $this->addJoinObject($join, 'ItemMasterItemRelatedByI2imstritemid');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItemRelatedByI2imstritemid relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemRelatedByI2imstritemidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItemRelatedByI2imstritemid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItemRelatedByI2imstritemid', '\ItemMasterItemQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function filterByItemMasterItemRelatedByI2ichilditemid($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvItem2ItemTableMap::COL_I2ICHILDITEMID, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvItem2ItemTableMap::COL_I2ICHILDITEMID, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItemRelatedByI2ichilditemid() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItemRelatedByI2ichilditemid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function joinItemMasterItemRelatedByI2ichilditemid($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItemRelatedByI2ichilditemid');

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
            $this->addJoinObject($join, 'ItemMasterItemRelatedByI2ichilditemid');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItemRelatedByI2ichilditemid relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemRelatedByI2ichilditemidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItemRelatedByI2ichilditemid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItemRelatedByI2ichilditemid', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvItem2Item $invItem2Item Object to remove from the list of results
     *
     * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
     */
    public function prune($invItem2Item = null)
    {
        if ($invItem2Item) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvItem2ItemTableMap::COL_I2IMSTRITEMID), $invItem2Item->getI2imstritemid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvItem2ItemTableMap::COL_I2ICHILDITEMID), $invItem2Item->getI2ichilditemid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_item_2_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvItem2ItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvItem2ItemTableMap::clearInstancePool();
            InvItem2ItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvItem2ItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvItem2ItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvItem2ItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvItem2ItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvItem2ItemQuery
