<?php

namespace Base;

use \ItemSubstitute as ChildItemSubstitute;
use \ItemSubstituteQuery as ChildItemSubstituteQuery;
use \Exception;
use \PDO;
use Map\ItemSubstituteTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_inv_sub' table.
 *
 *
 *
 * @method     ChildItemSubstituteQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemSubstituteQuery orderByInsisubitemnbr($order = Criteria::ASC) Order by the InsiSubItemNbr column
 * @method     ChildItemSubstituteQuery orderByInsisamelike($order = Criteria::ASC) Order by the InsiSameLike column
 * @method     ChildItemSubstituteQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemSubstituteQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemSubstituteQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemSubstituteQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemSubstituteQuery groupByInsisubitemnbr() Group by the InsiSubItemNbr column
 * @method     ChildItemSubstituteQuery groupByInsisamelike() Group by the InsiSameLike column
 * @method     ChildItemSubstituteQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemSubstituteQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemSubstituteQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemSubstituteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemSubstituteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemSubstituteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemSubstituteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemSubstituteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemSubstituteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemSubstituteQuery leftJoinItemMasterItemRelatedByInititemnbr($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItemRelatedByInititemnbr relation
 * @method     ChildItemSubstituteQuery rightJoinItemMasterItemRelatedByInititemnbr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItemRelatedByInititemnbr relation
 * @method     ChildItemSubstituteQuery innerJoinItemMasterItemRelatedByInititemnbr($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItemRelatedByInititemnbr relation
 *
 * @method     ChildItemSubstituteQuery joinWithItemMasterItemRelatedByInititemnbr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItemRelatedByInititemnbr relation
 *
 * @method     ChildItemSubstituteQuery leftJoinWithItemMasterItemRelatedByInititemnbr() Adds a LEFT JOIN clause and with to the query using the ItemMasterItemRelatedByInititemnbr relation
 * @method     ChildItemSubstituteQuery rightJoinWithItemMasterItemRelatedByInititemnbr() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItemRelatedByInititemnbr relation
 * @method     ChildItemSubstituteQuery innerJoinWithItemMasterItemRelatedByInititemnbr() Adds a INNER JOIN clause and with to the query using the ItemMasterItemRelatedByInititemnbr relation
 *
 * @method     ChildItemSubstituteQuery leftJoinItemMasterItemRelatedByInsisubitemnbr($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 * @method     ChildItemSubstituteQuery rightJoinItemMasterItemRelatedByInsisubitemnbr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 * @method     ChildItemSubstituteQuery innerJoinItemMasterItemRelatedByInsisubitemnbr($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 *
 * @method     ChildItemSubstituteQuery joinWithItemMasterItemRelatedByInsisubitemnbr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 *
 * @method     ChildItemSubstituteQuery leftJoinWithItemMasterItemRelatedByInsisubitemnbr() Adds a LEFT JOIN clause and with to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 * @method     ChildItemSubstituteQuery rightJoinWithItemMasterItemRelatedByInsisubitemnbr() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 * @method     ChildItemSubstituteQuery innerJoinWithItemMasterItemRelatedByInsisubitemnbr() Adds a INNER JOIN clause and with to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemSubstitute findOne(ConnectionInterface $con = null) Return the first ChildItemSubstitute matching the query
 * @method     ChildItemSubstitute findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemSubstitute matching the query, or a new ChildItemSubstitute object populated from the query conditions when no match is found
 *
 * @method     ChildItemSubstitute findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemSubstitute filtered by the InitItemNbr column
 * @method     ChildItemSubstitute findOneByInsisubitemnbr(string $InsiSubItemNbr) Return the first ChildItemSubstitute filtered by the InsiSubItemNbr column
 * @method     ChildItemSubstitute findOneByInsisamelike(string $InsiSameLike) Return the first ChildItemSubstitute filtered by the InsiSameLike column
 * @method     ChildItemSubstitute findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemSubstitute filtered by the DateUpdtd column
 * @method     ChildItemSubstitute findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemSubstitute filtered by the TimeUpdtd column
 * @method     ChildItemSubstitute findOneByDummy(string $dummy) Return the first ChildItemSubstitute filtered by the dummy column *

 * @method     ChildItemSubstitute requirePk($key, ConnectionInterface $con = null) Return the ChildItemSubstitute by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemSubstitute requireOne(ConnectionInterface $con = null) Return the first ChildItemSubstitute matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemSubstitute requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemSubstitute filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemSubstitute requireOneByInsisubitemnbr(string $InsiSubItemNbr) Return the first ChildItemSubstitute filtered by the InsiSubItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemSubstitute requireOneByInsisamelike(string $InsiSameLike) Return the first ChildItemSubstitute filtered by the InsiSameLike column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemSubstitute requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemSubstitute filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemSubstitute requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemSubstitute filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemSubstitute requireOneByDummy(string $dummy) Return the first ChildItemSubstitute filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemSubstitute[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemSubstitute objects based on current ModelCriteria
 * @method     ChildItemSubstitute[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemSubstitute objects filtered by the InitItemNbr column
 * @method     ChildItemSubstitute[]|ObjectCollection findByInsisubitemnbr(string $InsiSubItemNbr) Return ChildItemSubstitute objects filtered by the InsiSubItemNbr column
 * @method     ChildItemSubstitute[]|ObjectCollection findByInsisamelike(string $InsiSameLike) Return ChildItemSubstitute objects filtered by the InsiSameLike column
 * @method     ChildItemSubstitute[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemSubstitute objects filtered by the DateUpdtd column
 * @method     ChildItemSubstitute[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemSubstitute objects filtered by the TimeUpdtd column
 * @method     ChildItemSubstitute[]|ObjectCollection findByDummy(string $dummy) Return ChildItemSubstitute objects filtered by the dummy column
 * @method     ChildItemSubstitute[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemSubstituteQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemSubstituteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemSubstitute', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemSubstituteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemSubstituteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemSubstituteQuery) {
            return $criteria;
        }
        $query = new ChildItemSubstituteQuery();
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
     * @param array[$InitItemNbr, $InsiSubItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemSubstitute|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemSubstituteTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemSubstituteTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildItemSubstitute A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InsiSubItemNbr, InsiSameLike, DateUpdtd, TimeUpdtd, dummy FROM inv_inv_sub WHERE InitItemNbr = :p0 AND InsiSubItemNbr = :p1';
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
            /** @var ChildItemSubstitute $obj */
            $obj = new ChildItemSubstitute();
            $obj->hydrate($row);
            ItemSubstituteTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildItemSubstitute|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemSubstituteTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemSubstituteTableMap::COL_INSISUBITEMNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemSubstituteTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemSubstituteTableMap::COL_INSISUBITEMNBR, $key[1], Criteria::EQUAL);
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
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemSubstituteTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InsiSubItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInsisubitemnbr('fooValue');   // WHERE InsiSubItemNbr = 'fooValue'
     * $query->filterByInsisubitemnbr('%fooValue%', Criteria::LIKE); // WHERE InsiSubItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insisubitemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByInsisubitemnbr($insisubitemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insisubitemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemSubstituteTableMap::COL_INSISUBITEMNBR, $insisubitemnbr, $comparison);
    }

    /**
     * Filter the query on the InsiSameLike column
     *
     * Example usage:
     * <code>
     * $query->filterByInsisamelike('fooValue');   // WHERE InsiSameLike = 'fooValue'
     * $query->filterByInsisamelike('%fooValue%', Criteria::LIKE); // WHERE InsiSameLike LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insisamelike The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByInsisamelike($insisamelike = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insisamelike)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemSubstituteTableMap::COL_INSISAMELIKE, $insisamelike, $comparison);
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
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemSubstituteTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemSubstituteTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemSubstituteTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByItemMasterItemRelatedByInititemnbr($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemSubstituteTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemSubstituteTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItemRelatedByInititemnbr() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItemRelatedByInititemnbr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function joinItemMasterItemRelatedByInititemnbr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItemRelatedByInititemnbr');

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
            $this->addJoinObject($join, 'ItemMasterItemRelatedByInititemnbr');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItemRelatedByInititemnbr relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemRelatedByInititemnbrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItemRelatedByInititemnbr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItemRelatedByInititemnbr', '\ItemMasterItemQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function filterByItemMasterItemRelatedByInsisubitemnbr($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemSubstituteTableMap::COL_INSISUBITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemSubstituteTableMap::COL_INSISUBITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItemRelatedByInsisubitemnbr() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItemRelatedByInsisubitemnbr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function joinItemMasterItemRelatedByInsisubitemnbr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItemRelatedByInsisubitemnbr');

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
            $this->addJoinObject($join, 'ItemMasterItemRelatedByInsisubitemnbr');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItemRelatedByInsisubitemnbr relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemRelatedByInsisubitemnbrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItemRelatedByInsisubitemnbr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItemRelatedByInsisubitemnbr', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemSubstitute $itemSubstitute Object to remove from the list of results
     *
     * @return $this|ChildItemSubstituteQuery The current query, for fluid interface
     */
    public function prune($itemSubstitute = null)
    {
        if ($itemSubstitute) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemSubstituteTableMap::COL_INITITEMNBR), $itemSubstitute->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemSubstituteTableMap::COL_INSISUBITEMNBR), $itemSubstitute->getInsisubitemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_inv_sub table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemSubstituteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemSubstituteTableMap::clearInstancePool();
            ItemSubstituteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemSubstituteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemSubstituteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemSubstituteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemSubstituteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemSubstituteQuery
