<?php

namespace Base;

use \BomComponent as ChildBomComponent;
use \BomComponentQuery as ChildBomComponentQuery;
use \Exception;
use \PDO;
use Map\BomComponentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `pr_bmat_det` table.
 *
 * @method     ChildBomComponentQuery orderByBomhproditem($order = Criteria::ASC) Order by the BomhProdItem column
 * @method     ChildBomComponentQuery orderByBomdline($order = Criteria::ASC) Order by the BomdLine column
 * @method     ChildBomComponentQuery orderByBomdusagitem($order = Criteria::ASC) Order by the BomdUsagItem column
 * @method     ChildBomComponentQuery orderByBomdusagqty($order = Criteria::ASC) Order by the BomdUsagQty column
 * @method     ChildBomComponentQuery orderByBomdscrap($order = Criteria::ASC) Order by the BomdScrap column
 * @method     ChildBomComponentQuery orderByBomdserialbase($order = Criteria::ASC) Order by the BomdSerialBase column
 * @method     ChildBomComponentQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBomComponentQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBomComponentQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBomComponentQuery groupByBomhproditem() Group by the BomhProdItem column
 * @method     ChildBomComponentQuery groupByBomdline() Group by the BomdLine column
 * @method     ChildBomComponentQuery groupByBomdusagitem() Group by the BomdUsagItem column
 * @method     ChildBomComponentQuery groupByBomdusagqty() Group by the BomdUsagQty column
 * @method     ChildBomComponentQuery groupByBomdscrap() Group by the BomdScrap column
 * @method     ChildBomComponentQuery groupByBomdserialbase() Group by the BomdSerialBase column
 * @method     ChildBomComponentQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBomComponentQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBomComponentQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBomComponentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBomComponentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBomComponentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBomComponentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBomComponentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBomComponentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBomComponentQuery leftJoinBomItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the BomItem relation
 * @method     ChildBomComponentQuery rightJoinBomItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BomItem relation
 * @method     ChildBomComponentQuery innerJoinBomItem($relationAlias = null) Adds a INNER JOIN clause to the query using the BomItem relation
 *
 * @method     ChildBomComponentQuery joinWithBomItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BomItem relation
 *
 * @method     ChildBomComponentQuery leftJoinWithBomItem() Adds a LEFT JOIN clause and with to the query using the BomItem relation
 * @method     ChildBomComponentQuery rightJoinWithBomItem() Adds a RIGHT JOIN clause and with to the query using the BomItem relation
 * @method     ChildBomComponentQuery innerJoinWithBomItem() Adds a INNER JOIN clause and with to the query using the BomItem relation
 *
 * @method     ChildBomComponentQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildBomComponentQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildBomComponentQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildBomComponentQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildBomComponentQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildBomComponentQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildBomComponentQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \BomItemQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBomComponent|null findOne(?ConnectionInterface $con = null) Return the first ChildBomComponent matching the query
 * @method     ChildBomComponent findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildBomComponent matching the query, or a new ChildBomComponent object populated from the query conditions when no match is found
 *
 * @method     ChildBomComponent|null findOneByBomhproditem(string $BomhProdItem) Return the first ChildBomComponent filtered by the BomhProdItem column
 * @method     ChildBomComponent|null findOneByBomdline(int $BomdLine) Return the first ChildBomComponent filtered by the BomdLine column
 * @method     ChildBomComponent|null findOneByBomdusagitem(string $BomdUsagItem) Return the first ChildBomComponent filtered by the BomdUsagItem column
 * @method     ChildBomComponent|null findOneByBomdusagqty(string $BomdUsagQty) Return the first ChildBomComponent filtered by the BomdUsagQty column
 * @method     ChildBomComponent|null findOneByBomdscrap(string $BomdScrap) Return the first ChildBomComponent filtered by the BomdScrap column
 * @method     ChildBomComponent|null findOneByBomdserialbase(string $BomdSerialBase) Return the first ChildBomComponent filtered by the BomdSerialBase column
 * @method     ChildBomComponent|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildBomComponent filtered by the DateUpdtd column
 * @method     ChildBomComponent|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBomComponent filtered by the TimeUpdtd column
 * @method     ChildBomComponent|null findOneByDummy(string $dummy) Return the first ChildBomComponent filtered by the dummy column
 *
 * @method     ChildBomComponent requirePk($key, ?ConnectionInterface $con = null) Return the ChildBomComponent by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOne(?ConnectionInterface $con = null) Return the first ChildBomComponent matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBomComponent requireOneByBomhproditem(string $BomhProdItem) Return the first ChildBomComponent filtered by the BomhProdItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByBomdline(int $BomdLine) Return the first ChildBomComponent filtered by the BomdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByBomdusagitem(string $BomdUsagItem) Return the first ChildBomComponent filtered by the BomdUsagItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByBomdusagqty(string $BomdUsagQty) Return the first ChildBomComponent filtered by the BomdUsagQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByBomdscrap(string $BomdScrap) Return the first ChildBomComponent filtered by the BomdScrap column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByBomdserialbase(string $BomdSerialBase) Return the first ChildBomComponent filtered by the BomdSerialBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBomComponent filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBomComponent filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBomComponent requireOneByDummy(string $dummy) Return the first ChildBomComponent filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBomComponent[]|Collection find(?ConnectionInterface $con = null) Return ChildBomComponent objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildBomComponent> find(?ConnectionInterface $con = null) Return ChildBomComponent objects based on current ModelCriteria
 *
 * @method     ChildBomComponent[]|Collection findByBomhproditem(string|array<string> $BomhProdItem) Return ChildBomComponent objects filtered by the BomhProdItem column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByBomhproditem(string|array<string> $BomhProdItem) Return ChildBomComponent objects filtered by the BomhProdItem column
 * @method     ChildBomComponent[]|Collection findByBomdline(int|array<int> $BomdLine) Return ChildBomComponent objects filtered by the BomdLine column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByBomdline(int|array<int> $BomdLine) Return ChildBomComponent objects filtered by the BomdLine column
 * @method     ChildBomComponent[]|Collection findByBomdusagitem(string|array<string> $BomdUsagItem) Return ChildBomComponent objects filtered by the BomdUsagItem column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByBomdusagitem(string|array<string> $BomdUsagItem) Return ChildBomComponent objects filtered by the BomdUsagItem column
 * @method     ChildBomComponent[]|Collection findByBomdusagqty(string|array<string> $BomdUsagQty) Return ChildBomComponent objects filtered by the BomdUsagQty column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByBomdusagqty(string|array<string> $BomdUsagQty) Return ChildBomComponent objects filtered by the BomdUsagQty column
 * @method     ChildBomComponent[]|Collection findByBomdscrap(string|array<string> $BomdScrap) Return ChildBomComponent objects filtered by the BomdScrap column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByBomdscrap(string|array<string> $BomdScrap) Return ChildBomComponent objects filtered by the BomdScrap column
 * @method     ChildBomComponent[]|Collection findByBomdserialbase(string|array<string> $BomdSerialBase) Return ChildBomComponent objects filtered by the BomdSerialBase column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByBomdserialbase(string|array<string> $BomdSerialBase) Return ChildBomComponent objects filtered by the BomdSerialBase column
 * @method     ChildBomComponent[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildBomComponent objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildBomComponent objects filtered by the DateUpdtd column
 * @method     ChildBomComponent[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildBomComponent objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildBomComponent objects filtered by the TimeUpdtd column
 * @method     ChildBomComponent[]|Collection findByDummy(string|array<string> $dummy) Return ChildBomComponent objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildBomComponent> findByDummy(string|array<string> $dummy) Return ChildBomComponent objects filtered by the dummy column
 *
 * @method     ChildBomComponent[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildBomComponent> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class BomComponentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BomComponentQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BomComponent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBomComponentQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBomComponentQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildBomComponentQuery) {
            return $criteria;
        }
        $query = new ChildBomComponentQuery();
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
     * @param array[$BomhProdItem, $BomdLine, $BomdUsagItem] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBomComponent|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BomComponentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BomComponentTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildBomComponent A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT BomhProdItem, BomdLine, BomdUsagItem, BomdUsagQty, BomdScrap, BomdSerialBase, DateUpdtd, TimeUpdtd, dummy FROM pr_bmat_det WHERE BomhProdItem = :p0 AND BomdLine = :p1 AND BomdUsagItem = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildBomComponent $obj */
            $obj = new ChildBomComponent();
            $obj->hydrate($row);
            BomComponentTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildBomComponent|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(BomComponentTableMap::COL_BOMHPRODITEM, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BomComponentTableMap::COL_BOMDLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGITEM, $key[2], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(BomComponentTableMap::COL_BOMHPRODITEM, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BomComponentTableMap::COL_BOMDLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(BomComponentTableMap::COL_BOMDUSAGITEM, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the BomhProdItem column
     *
     * Example usage:
     * <code>
     * $query->filterByBomhproditem('fooValue');   // WHERE BomhProdItem = 'fooValue'
     * $query->filterByBomhproditem('%fooValue%', Criteria::LIKE); // WHERE BomhProdItem LIKE '%fooValue%'
     * $query->filterByBomhproditem(['foo', 'bar']); // WHERE BomhProdItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bomhproditem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomhproditem($bomhproditem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bomhproditem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BomComponentTableMap::COL_BOMHPRODITEM, $bomhproditem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BomdLine column
     *
     * Example usage:
     * <code>
     * $query->filterByBomdline(1234); // WHERE BomdLine = 1234
     * $query->filterByBomdline(array(12, 34)); // WHERE BomdLine IN (12, 34)
     * $query->filterByBomdline(array('min' => 12)); // WHERE BomdLine > 12
     * </code>
     *
     * @param mixed $bomdline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomdline($bomdline = null, ?string $comparison = null)
    {
        if (is_array($bomdline)) {
            $useMinMax = false;
            if (isset($bomdline['min'])) {
                $this->addUsingAlias(BomComponentTableMap::COL_BOMDLINE, $bomdline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bomdline['max'])) {
                $this->addUsingAlias(BomComponentTableMap::COL_BOMDLINE, $bomdline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BomComponentTableMap::COL_BOMDLINE, $bomdline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BomdUsagItem column
     *
     * Example usage:
     * <code>
     * $query->filterByBomdusagitem('fooValue');   // WHERE BomdUsagItem = 'fooValue'
     * $query->filterByBomdusagitem('%fooValue%', Criteria::LIKE); // WHERE BomdUsagItem LIKE '%fooValue%'
     * $query->filterByBomdusagitem(['foo', 'bar']); // WHERE BomdUsagItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bomdusagitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomdusagitem($bomdusagitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bomdusagitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGITEM, $bomdusagitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BomdUsagQty column
     *
     * Example usage:
     * <code>
     * $query->filterByBomdusagqty(1234); // WHERE BomdUsagQty = 1234
     * $query->filterByBomdusagqty(array(12, 34)); // WHERE BomdUsagQty IN (12, 34)
     * $query->filterByBomdusagqty(array('min' => 12)); // WHERE BomdUsagQty > 12
     * </code>
     *
     * @param mixed $bomdusagqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomdusagqty($bomdusagqty = null, ?string $comparison = null)
    {
        if (is_array($bomdusagqty)) {
            $useMinMax = false;
            if (isset($bomdusagqty['min'])) {
                $this->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGQTY, $bomdusagqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bomdusagqty['max'])) {
                $this->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGQTY, $bomdusagqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGQTY, $bomdusagqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BomdScrap column
     *
     * Example usage:
     * <code>
     * $query->filterByBomdscrap('fooValue');   // WHERE BomdScrap = 'fooValue'
     * $query->filterByBomdscrap('%fooValue%', Criteria::LIKE); // WHERE BomdScrap LIKE '%fooValue%'
     * $query->filterByBomdscrap(['foo', 'bar']); // WHERE BomdScrap IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bomdscrap The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomdscrap($bomdscrap = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bomdscrap)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BomComponentTableMap::COL_BOMDSCRAP, $bomdscrap, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BomdSerialBase column
     *
     * Example usage:
     * <code>
     * $query->filterByBomdserialbase('fooValue');   // WHERE BomdSerialBase = 'fooValue'
     * $query->filterByBomdserialbase('%fooValue%', Criteria::LIKE); // WHERE BomdSerialBase LIKE '%fooValue%'
     * $query->filterByBomdserialbase(['foo', 'bar']); // WHERE BomdSerialBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bomdserialbase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomdserialbase($bomdserialbase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bomdserialbase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BomComponentTableMap::COL_BOMDSERIALBASE, $bomdserialbase, $comparison);

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

        $this->addUsingAlias(BomComponentTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(BomComponentTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(BomComponentTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \BomItem object
     *
     * @param \BomItem|ObjectCollection $bomItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomItem($bomItem, ?string $comparison = null)
    {
        if ($bomItem instanceof \BomItem) {
            return $this
                ->addUsingAlias(BomComponentTableMap::COL_BOMHPRODITEM, $bomItem->getBomhproditem(), $comparison);
        } elseif ($bomItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(BomComponentTableMap::COL_BOMHPRODITEM, $bomItem->toKeyValue('PrimaryKey', 'Bomhproditem'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByBomItem() only accepts arguments of type \BomItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BomItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBomItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BomItem');

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
            $this->addJoinObject($join, 'BomItem');
        }

        return $this;
    }

    /**
     * Use the BomItem relation BomItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BomItemQuery A secondary query class using the current class as primary query
     */
    public function useBomItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBomItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BomItem', '\BomItemQuery');
    }

    /**
     * Use the BomItem relation BomItem object
     *
     * @param callable(\BomItemQuery):\BomItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBomItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useBomItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to BomItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BomItemQuery The inner query object of the EXISTS statement
     */
    public function useBomItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BomItemQuery */
        $q = $this->useExistsQuery('BomItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to BomItem table for a NOT EXISTS query.
     *
     * @see useBomItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BomItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useBomItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BomItemQuery */
        $q = $this->useExistsQuery('BomItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to BomItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BomItemQuery The inner query object of the IN statement
     */
    public function useInBomItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BomItemQuery */
        $q = $this->useInQuery('BomItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to BomItem table for a NOT IN query.
     *
     * @see useBomItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BomItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInBomItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BomItemQuery */
        $q = $this->useInQuery('BomItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGITEM, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(BomComponentTableMap::COL_BOMDUSAGITEM, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        ?string $joinType = Criteria::INNER_JOIN
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
     * @param ChildBomComponent $bomComponent Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($bomComponent = null)
    {
        if ($bomComponent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BomComponentTableMap::COL_BOMHPRODITEM), $bomComponent->getBomhproditem(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BomComponentTableMap::COL_BOMDLINE), $bomComponent->getBomdline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(BomComponentTableMap::COL_BOMDUSAGITEM), $bomComponent->getBomdusagitem(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pr_bmat_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BomComponentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BomComponentTableMap::clearInstancePool();
            BomComponentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BomComponentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BomComponentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BomComponentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BomComponentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
