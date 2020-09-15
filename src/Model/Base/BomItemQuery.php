<?php

namespace Base;

use \BomItem as ChildBomItem;
use \BomItemQuery as ChildBomItemQuery;
use \Exception;
use \PDO;
use Map\BomItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'pr_bmat_head' table.
 *
 *
 *
 * @method     ChildBomItemQuery orderByBomhproditem($order = Criteria::ASC) Order by the BomhProdItem column
 * @method     ChildBomItemQuery orderByBomhlevel($order = Criteria::ASC) Order by the BomhLevel column
 * @method     ChildBomItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBomItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBomItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBomItemQuery groupByBomhproditem() Group by the BomhProdItem column
 * @method     ChildBomItemQuery groupByBomhlevel() Group by the BomhLevel column
 * @method     ChildBomItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBomItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBomItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBomItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBomItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBomItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBomItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBomItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBomItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBomItemQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildBomItemQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildBomItemQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildBomItemQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildBomItemQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildBomItemQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildBomItemQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildBomItemQuery leftJoinBomComponent($relationAlias = null) Adds a LEFT JOIN clause to the query using the BomComponent relation
 * @method     ChildBomItemQuery rightJoinBomComponent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BomComponent relation
 * @method     ChildBomItemQuery innerJoinBomComponent($relationAlias = null) Adds a INNER JOIN clause to the query using the BomComponent relation
 *
 * @method     ChildBomItemQuery joinWithBomComponent($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BomComponent relation
 *
 * @method     ChildBomItemQuery leftJoinWithBomComponent() Adds a LEFT JOIN clause and with to the query using the BomComponent relation
 * @method     ChildBomItemQuery rightJoinWithBomComponent() Adds a RIGHT JOIN clause and with to the query using the BomComponent relation
 * @method     ChildBomItemQuery innerJoinWithBomComponent() Adds a INNER JOIN clause and with to the query using the BomComponent relation
 *
 * @method     \ItemMasterItemQuery|\BomComponentQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBomItem findOne(ConnectionInterface $con = null) Return the first ChildBomItem matching the query
 * @method     ChildBomItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBomItem matching the query, or a new ChildBomItem object populated from the query conditions when no match is found
 *
 * @method     ChildBomItem findOneByBomhproditem(string $BomhProdItem) Return the first ChildBomItem filtered by the BomhProdItem column
 * @method     ChildBomItem findOneByBomhlevel(int $BomhLevel) Return the first ChildBomItem filtered by the BomhLevel column
 * @method     ChildBomItem findOneByDateupdtd(string $DateUpdtd) Return the first ChildBomItem filtered by the DateUpdtd column
 * @method     ChildBomItem findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBomItem filtered by the TimeUpdtd column
 * @method     ChildBomItem findOneByDummy(string $dummy) Return the first ChildBomItem filtered by the dummy column *

 * @method     ChildBomItem requirePk($key, ConnectionInterface $con = null) Return the ChildBomItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomItem requireOne(ConnectionInterface $con = null) Return the first ChildBomItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBomItem requireOneByBomhproditem(string $BomhProdItem) Return the first ChildBomItem filtered by the BomhProdItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomItem requireOneByBomhlevel(int $BomhLevel) Return the first ChildBomItem filtered by the BomhLevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBomItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBomItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomItem requireOneByDummy(string $dummy) Return the first ChildBomItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBomItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBomItem objects based on current ModelCriteria
 * @method     ChildBomItem[]|ObjectCollection findByBomhproditem(string $BomhProdItem) Return ChildBomItem objects filtered by the BomhProdItem column
 * @method     ChildBomItem[]|ObjectCollection findByBomhlevel(int $BomhLevel) Return ChildBomItem objects filtered by the BomhLevel column
 * @method     ChildBomItem[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildBomItem objects filtered by the DateUpdtd column
 * @method     ChildBomItem[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildBomItem objects filtered by the TimeUpdtd column
 * @method     ChildBomItem[]|ObjectCollection findByDummy(string $dummy) Return ChildBomItem objects filtered by the dummy column
 * @method     ChildBomItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BomItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BomItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BomItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBomItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBomItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBomItemQuery) {
            return $criteria;
        }
        $query = new ChildBomItemQuery();
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
     * @return ChildBomItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BomItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BomItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildBomItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT BomhProdItem, BomhLevel, DateUpdtd, TimeUpdtd, dummy FROM pr_bmat_head WHERE BomhProdItem = :p0';
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
            /** @var ChildBomItem $obj */
            $obj = new ChildBomItem();
            $obj->hydrate($row);
            BomItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildBomItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the BomhProdItem column
     *
     * Example usage:
     * <code>
     * $query->filterByBomhproditem('fooValue');   // WHERE BomhProdItem = 'fooValue'
     * $query->filterByBomhproditem('%fooValue%', Criteria::LIKE); // WHERE BomhProdItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bomhproditem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByBomhproditem($bomhproditem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bomhproditem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $bomhproditem, $comparison);
    }

    /**
     * Filter the query on the BomhLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByBomhlevel(1234); // WHERE BomhLevel = 1234
     * $query->filterByBomhlevel(array(12, 34)); // WHERE BomhLevel IN (12, 34)
     * $query->filterByBomhlevel(array('min' => 12)); // WHERE BomhLevel > 12
     * </code>
     *
     * @param     mixed $bomhlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByBomhlevel($bomhlevel = null, $comparison = null)
    {
        if (is_array($bomhlevel)) {
            $useMinMax = false;
            if (isset($bomhlevel['min'])) {
                $this->addUsingAlias(BomItemTableMap::COL_BOMHLEVEL, $bomhlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bomhlevel['max'])) {
                $this->addUsingAlias(BomItemTableMap::COL_BOMHLEVEL, $bomhlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BomItemTableMap::COL_BOMHLEVEL, $bomhlevel, $comparison);
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
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BomItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BomItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BomItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Filter the query by a related \BomComponent object
     *
     * @param \BomComponent|ObjectCollection $bomComponent the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildBomItemQuery The current query, for fluid interface
     */
    public function filterByBomComponent($bomComponent, $comparison = null)
    {
        if ($bomComponent instanceof \BomComponent) {
            return $this
                ->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $bomComponent->getBomhproditem(), $comparison);
        } elseif ($bomComponent instanceof ObjectCollection) {
            return $this
                ->useBomComponentQuery()
                ->filterByPrimaryKeys($bomComponent->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBomComponent() only accepts arguments of type \BomComponent or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BomComponent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function joinBomComponent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BomComponent');

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
            $this->addJoinObject($join, 'BomComponent');
        }

        return $this;
    }

    /**
     * Use the BomComponent relation BomComponent object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BomComponentQuery A secondary query class using the current class as primary query
     */
    public function useBomComponentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBomComponent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BomComponent', '\BomComponentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBomItem $bomItem Object to remove from the list of results
     *
     * @return $this|ChildBomItemQuery The current query, for fluid interface
     */
    public function prune($bomItem = null)
    {
        if ($bomItem) {
            $this->addUsingAlias(BomItemTableMap::COL_BOMHPRODITEM, $bomItem->getBomhproditem(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pr_bmat_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BomItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BomItemTableMap::clearInstancePool();
            BomItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BomItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BomItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BomItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BomItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BomItemQuery
