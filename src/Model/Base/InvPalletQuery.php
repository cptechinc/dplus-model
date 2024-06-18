<?php

namespace Base;

use \InvPallet as ChildInvPallet;
use \InvPalletQuery as ChildInvPalletQuery;
use \Exception;
use \PDO;
use Map\InvPalletTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'pallet_header' table.
 *
 *
 *
 * @method     ChildInvPalletQuery orderByPlthpalletid($order = Criteria::ASC) Order by the PlthPalletId column
 * @method     ChildInvPalletQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvPalletQuery orderByPlthbin($order = Criteria::ASC) Order by the PlthBin column
 * @method     ChildInvPalletQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvPalletQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvPalletQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvPalletQuery groupByPlthpalletid() Group by the PlthPalletId column
 * @method     ChildInvPalletQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvPalletQuery groupByPlthbin() Group by the PlthBin column
 * @method     ChildInvPalletQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvPalletQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvPalletQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvPalletQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvPalletQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvPalletQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvPalletQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvPalletQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvPalletQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvPalletQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvPalletQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvPalletQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvPalletQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvPalletQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvPalletQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvPalletQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvPalletQuery leftJoinInvPalletLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvPalletLot relation
 * @method     ChildInvPalletQuery rightJoinInvPalletLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvPalletLot relation
 * @method     ChildInvPalletQuery innerJoinInvPalletLot($relationAlias = null) Adds a INNER JOIN clause to the query using the InvPalletLot relation
 *
 * @method     ChildInvPalletQuery joinWithInvPalletLot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvPalletLot relation
 *
 * @method     ChildInvPalletQuery leftJoinWithInvPalletLot() Adds a LEFT JOIN clause and with to the query using the InvPalletLot relation
 * @method     ChildInvPalletQuery rightJoinWithInvPalletLot() Adds a RIGHT JOIN clause and with to the query using the InvPalletLot relation
 * @method     ChildInvPalletQuery innerJoinWithInvPalletLot() Adds a INNER JOIN clause and with to the query using the InvPalletLot relation
 *
 * @method     \ItemMasterItemQuery|\InvPalletLotQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvPallet findOne(ConnectionInterface $con = null) Return the first ChildInvPallet matching the query
 * @method     ChildInvPallet findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvPallet matching the query, or a new ChildInvPallet object populated from the query conditions when no match is found
 *
 * @method     ChildInvPallet findOneByPlthpalletid(string $PlthPalletId) Return the first ChildInvPallet filtered by the PlthPalletId column
 * @method     ChildInvPallet findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvPallet filtered by the InitItemNbr column
 * @method     ChildInvPallet findOneByPlthbin(string $PlthBin) Return the first ChildInvPallet filtered by the PlthBin column
 * @method     ChildInvPallet findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvPallet filtered by the DateUpdtd column
 * @method     ChildInvPallet findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvPallet filtered by the TimeUpdtd column
 * @method     ChildInvPallet findOneByDummy(string $dummy) Return the first ChildInvPallet filtered by the dummy column *

 * @method     ChildInvPallet requirePk($key, ConnectionInterface $con = null) Return the ChildInvPallet by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPallet requireOne(ConnectionInterface $con = null) Return the first ChildInvPallet matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvPallet requireOneByPlthpalletid(string $PlthPalletId) Return the first ChildInvPallet filtered by the PlthPalletId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPallet requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvPallet filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPallet requireOneByPlthbin(string $PlthBin) Return the first ChildInvPallet filtered by the PlthBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPallet requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvPallet filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPallet requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvPallet filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvPallet requireOneByDummy(string $dummy) Return the first ChildInvPallet filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvPallet[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvPallet objects based on current ModelCriteria
 * @method     ChildInvPallet[]|ObjectCollection findByPlthpalletid(string $PlthPalletId) Return ChildInvPallet objects filtered by the PlthPalletId column
 * @method     ChildInvPallet[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvPallet objects filtered by the InitItemNbr column
 * @method     ChildInvPallet[]|ObjectCollection findByPlthbin(string $PlthBin) Return ChildInvPallet objects filtered by the PlthBin column
 * @method     ChildInvPallet[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvPallet objects filtered by the DateUpdtd column
 * @method     ChildInvPallet[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvPallet objects filtered by the TimeUpdtd column
 * @method     ChildInvPallet[]|ObjectCollection findByDummy(string $dummy) Return ChildInvPallet objects filtered by the dummy column
 * @method     ChildInvPallet[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvPalletQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvPalletQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvPallet', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvPalletQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvPalletQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvPalletQuery) {
            return $criteria;
        }
        $query = new ChildInvPalletQuery();
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
     * @return ChildInvPallet|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvPalletTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvPalletTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvPallet A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PlthPalletId, InitItemNbr, PlthBin, DateUpdtd, TimeUpdtd, dummy FROM pallet_header WHERE PlthPalletId = :p0';
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
            /** @var ChildInvPallet $obj */
            $obj = new ChildInvPallet();
            $obj->hydrate($row);
            InvPalletTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvPallet|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvPalletTableMap::COL_PLTHPALLETID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvPalletTableMap::COL_PLTHPALLETID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PlthPalletId column
     *
     * Example usage:
     * <code>
     * $query->filterByPlthpalletid('fooValue');   // WHERE PlthPalletId = 'fooValue'
     * $query->filterByPlthpalletid('%fooValue%', Criteria::LIKE); // WHERE PlthPalletId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plthpalletid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByPlthpalletid($plthpalletid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plthpalletid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvPalletTableMap::COL_PLTHPALLETID, $plthpalletid, $comparison);
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvPalletTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the PlthBin column
     *
     * Example usage:
     * <code>
     * $query->filterByPlthbin('fooValue');   // WHERE PlthBin = 'fooValue'
     * $query->filterByPlthbin('%fooValue%', Criteria::LIKE); // WHERE PlthBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plthbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByPlthbin($plthbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plthbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvPalletTableMap::COL_PLTHBIN, $plthbin, $comparison);
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
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvPalletTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvPalletTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvPalletTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvPalletTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvPalletTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
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
     * Filter the query by a related \InvPalletLot object
     *
     * @param \InvPalletLot|ObjectCollection $invPalletLot the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvPalletQuery The current query, for fluid interface
     */
    public function filterByInvPalletLot($invPalletLot, $comparison = null)
    {
        if ($invPalletLot instanceof \InvPalletLot) {
            return $this
                ->addUsingAlias(InvPalletTableMap::COL_PLTHPALLETID, $invPalletLot->getPlthpalletid(), $comparison);
        } elseif ($invPalletLot instanceof ObjectCollection) {
            return $this
                ->useInvPalletLotQuery()
                ->filterByPrimaryKeys($invPalletLot->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInvPalletLot() only accepts arguments of type \InvPalletLot or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvPalletLot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function joinInvPalletLot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvPalletLot');

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
            $this->addJoinObject($join, 'InvPalletLot');
        }

        return $this;
    }

    /**
     * Use the InvPalletLot relation InvPalletLot object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvPalletLotQuery A secondary query class using the current class as primary query
     */
    public function useInvPalletLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvPalletLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvPalletLot', '\InvPalletLotQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvPallet $invPallet Object to remove from the list of results
     *
     * @return $this|ChildInvPalletQuery The current query, for fluid interface
     */
    public function prune($invPallet = null)
    {
        if ($invPallet) {
            $this->addUsingAlias(InvPalletTableMap::COL_PLTHPALLETID, $invPallet->getPlthpalletid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pallet_header table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvPalletTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvPalletTableMap::clearInstancePool();
            InvPalletTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvPalletTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvPalletTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvPalletTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvPalletTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvPalletQuery
