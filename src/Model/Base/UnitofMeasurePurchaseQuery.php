<?php

namespace Base;

use \UnitofMeasurePurchase as ChildUnitofMeasurePurchase;
use \UnitofMeasurePurchaseQuery as ChildUnitofMeasurePurchaseQuery;
use \Exception;
use \PDO;
use Map\UnitofMeasurePurchaseTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_uom_pur` table.
 *
 * @method     ChildUnitofMeasurePurchaseQuery orderByIntbuompur($order = Criteria::ASC) Order by the IntbUomPur column
 * @method     ChildUnitofMeasurePurchaseQuery orderByIntbuomdesc($order = Criteria::ASC) Order by the IntbUomDesc column
 * @method     ChildUnitofMeasurePurchaseQuery orderByIntbuomconv($order = Criteria::ASC) Order by the IntbUomConv column
 * @method     ChildUnitofMeasurePurchaseQuery orderByIntbuompricbywght($order = Criteria::ASC) Order by the IntbUomPricByWght column
 * @method     ChildUnitofMeasurePurchaseQuery orderByIntbUomStockByCase($order = Criteria::ASC) Order by the IntbUomStockByCase column
 * @method     ChildUnitofMeasurePurchaseQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildUnitofMeasurePurchaseQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildUnitofMeasurePurchaseQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildUnitofMeasurePurchaseQuery groupByIntbuompur() Group by the IntbUomPur column
 * @method     ChildUnitofMeasurePurchaseQuery groupByIntbuomdesc() Group by the IntbUomDesc column
 * @method     ChildUnitofMeasurePurchaseQuery groupByIntbuomconv() Group by the IntbUomConv column
 * @method     ChildUnitofMeasurePurchaseQuery groupByIntbuompricbywght() Group by the IntbUomPricByWght column
 * @method     ChildUnitofMeasurePurchaseQuery groupByIntbUomStockByCase() Group by the IntbUomStockByCase column
 * @method     ChildUnitofMeasurePurchaseQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildUnitofMeasurePurchaseQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildUnitofMeasurePurchaseQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildUnitofMeasurePurchaseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUnitofMeasurePurchaseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUnitofMeasurePurchaseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUnitofMeasurePurchaseQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildUnitofMeasurePurchaseQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildUnitofMeasurePurchaseQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildUnitofMeasurePurchaseQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasurePurchaseQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasurePurchaseQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildUnitofMeasurePurchaseQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildUnitofMeasurePurchaseQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasurePurchaseQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasurePurchaseQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildUnitofMeasurePurchaseQuery leftJoinItemXrefVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefVendor relation
 * @method     ChildUnitofMeasurePurchaseQuery rightJoinItemXrefVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefVendor relation
 * @method     ChildUnitofMeasurePurchaseQuery innerJoinItemXrefVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefVendor relation
 *
 * @method     ChildUnitofMeasurePurchaseQuery joinWithItemXrefVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefVendor relation
 *
 * @method     ChildUnitofMeasurePurchaseQuery leftJoinWithItemXrefVendor() Adds a LEFT JOIN clause and with to the query using the ItemXrefVendor relation
 * @method     ChildUnitofMeasurePurchaseQuery rightJoinWithItemXrefVendor() Adds a RIGHT JOIN clause and with to the query using the ItemXrefVendor relation
 * @method     ChildUnitofMeasurePurchaseQuery innerJoinWithItemXrefVendor() Adds a INNER JOIN clause and with to the query using the ItemXrefVendor relation
 *
 * @method     \ItemMasterItemQuery|\ItemXrefVendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildUnitofMeasurePurchase|null findOne(?ConnectionInterface $con = null) Return the first ChildUnitofMeasurePurchase matching the query
 * @method     ChildUnitofMeasurePurchase findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildUnitofMeasurePurchase matching the query, or a new ChildUnitofMeasurePurchase object populated from the query conditions when no match is found
 *
 * @method     ChildUnitofMeasurePurchase|null findOneByIntbuompur(string $IntbUomPur) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomPur column
 * @method     ChildUnitofMeasurePurchase|null findOneByIntbuomdesc(string $IntbUomDesc) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomDesc column
 * @method     ChildUnitofMeasurePurchase|null findOneByIntbuomconv(string $IntbUomConv) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomConv column
 * @method     ChildUnitofMeasurePurchase|null findOneByIntbuompricbywght(string $IntbUomPricByWght) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomPricByWght column
 * @method     ChildUnitofMeasurePurchase|null findOneByIntbUomStockByCase(string $IntbUomStockByCase) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomStockByCase column
 * @method     ChildUnitofMeasurePurchase|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildUnitofMeasurePurchase filtered by the DateUpdtd column
 * @method     ChildUnitofMeasurePurchase|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUnitofMeasurePurchase filtered by the TimeUpdtd column
 * @method     ChildUnitofMeasurePurchase|null findOneByDummy(string $dummy) Return the first ChildUnitofMeasurePurchase filtered by the dummy column
 *
 * @method     ChildUnitofMeasurePurchase requirePk($key, ?ConnectionInterface $con = null) Return the ChildUnitofMeasurePurchase by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOne(?ConnectionInterface $con = null) Return the first ChildUnitofMeasurePurchase matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUnitofMeasurePurchase requireOneByIntbuompur(string $IntbUomPur) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomPur column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByIntbuomdesc(string $IntbUomDesc) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByIntbuomconv(string $IntbUomConv) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomConv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByIntbuompricbywght(string $IntbUomPricByWght) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomPricByWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByIntbUomStockByCase(string $IntbUomStockByCase) Return the first ChildUnitofMeasurePurchase filtered by the IntbUomStockByCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByDateupdtd(string $DateUpdtd) Return the first ChildUnitofMeasurePurchase filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUnitofMeasurePurchase filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasurePurchase requireOneByDummy(string $dummy) Return the first ChildUnitofMeasurePurchase filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUnitofMeasurePurchase[]|Collection find(?ConnectionInterface $con = null) Return ChildUnitofMeasurePurchase objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> find(?ConnectionInterface $con = null) Return ChildUnitofMeasurePurchase objects based on current ModelCriteria
 *
 * @method     ChildUnitofMeasurePurchase[]|Collection findByIntbuompur(string|array<string> $IntbUomPur) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomPur column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByIntbuompur(string|array<string> $IntbUomPur) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomPur column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByIntbuomdesc(string|array<string> $IntbUomDesc) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomDesc column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByIntbuomdesc(string|array<string> $IntbUomDesc) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomDesc column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByIntbuomconv(string|array<string> $IntbUomConv) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomConv column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByIntbuomconv(string|array<string> $IntbUomConv) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomConv column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByIntbuompricbywght(string|array<string> $IntbUomPricByWght) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomPricByWght column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByIntbuompricbywght(string|array<string> $IntbUomPricByWght) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomPricByWght column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByIntbUomStockByCase(string|array<string> $IntbUomStockByCase) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomStockByCase column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByIntbUomStockByCase(string|array<string> $IntbUomStockByCase) Return ChildUnitofMeasurePurchase objects filtered by the IntbUomStockByCase column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildUnitofMeasurePurchase objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildUnitofMeasurePurchase objects filtered by the DateUpdtd column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildUnitofMeasurePurchase objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildUnitofMeasurePurchase objects filtered by the TimeUpdtd column
 * @method     ChildUnitofMeasurePurchase[]|Collection findByDummy(string|array<string> $dummy) Return ChildUnitofMeasurePurchase objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildUnitofMeasurePurchase> findByDummy(string|array<string> $dummy) Return ChildUnitofMeasurePurchase objects filtered by the dummy column
 *
 * @method     ChildUnitofMeasurePurchase[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildUnitofMeasurePurchase> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class UnitofMeasurePurchaseQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\UnitofMeasurePurchaseQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\UnitofMeasurePurchase', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUnitofMeasurePurchaseQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUnitofMeasurePurchaseQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildUnitofMeasurePurchaseQuery) {
            return $criteria;
        }
        $query = new ChildUnitofMeasurePurchaseQuery();
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
     * @return ChildUnitofMeasurePurchase|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = UnitofMeasurePurchaseTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildUnitofMeasurePurchase A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbUomPur, IntbUomDesc, IntbUomConv, IntbUomPricByWght, IntbUomStockByCase, DateUpdtd, TimeUpdtd, dummy FROM inv_uom_pur WHERE IntbUomPur = :p0';
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
            /** @var ChildUnitofMeasurePurchase $obj */
            $obj = new ChildUnitofMeasurePurchase();
            $obj->hydrate($row);
            UnitofMeasurePurchaseTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildUnitofMeasurePurchase|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IntbUomPur column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompur('fooValue');   // WHERE IntbUomPur = 'fooValue'
     * $query->filterByIntbuompur('%fooValue%', Criteria::LIKE); // WHERE IntbUomPur LIKE '%fooValue%'
     * $query->filterByIntbuompur(['foo', 'bar']); // WHERE IntbUomPur IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuompur The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomdesc('fooValue');   // WHERE IntbUomDesc = 'fooValue'
     * $query->filterByIntbuomdesc('%fooValue%', Criteria::LIKE); // WHERE IntbUomDesc LIKE '%fooValue%'
     * $query->filterByIntbuomdesc(['foo', 'bar']); // WHERE IntbUomDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuomdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuomdesc($intbuomdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMDESC, $intbuomdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomConv column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomconv(1234); // WHERE IntbUomConv = 1234
     * $query->filterByIntbuomconv(array(12, 34)); // WHERE IntbUomConv IN (12, 34)
     * $query->filterByIntbuomconv(array('min' => 12)); // WHERE IntbUomConv > 12
     * </code>
     *
     * @param mixed $intbuomconv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuomconv($intbuomconv = null, ?string $comparison = null)
    {
        if (is_array($intbuomconv)) {
            $useMinMax = false;
            if (isset($intbuomconv['min'])) {
                $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV, $intbuomconv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbuomconv['max'])) {
                $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV, $intbuomconv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMCONV, $intbuomconv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomPricByWght column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompricbywght('fooValue');   // WHERE IntbUomPricByWght = 'fooValue'
     * $query->filterByIntbuompricbywght('%fooValue%', Criteria::LIKE); // WHERE IntbUomPricByWght LIKE '%fooValue%'
     * $query->filterByIntbuompricbywght(['foo', 'bar']); // WHERE IntbUomPricByWght IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuompricbywght The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuompricbywght($intbuompricbywght = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompricbywght)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPRICBYWGHT, $intbuompricbywght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomStockByCase column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbUomStockByCase('fooValue');   // WHERE IntbUomStockByCase = 'fooValue'
     * $query->filterByIntbUomStockByCase('%fooValue%', Criteria::LIKE); // WHERE IntbUomStockByCase LIKE '%fooValue%'
     * $query->filterByIntbUomStockByCase(['foo', 'bar']); // WHERE IntbUomStockByCase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbUomStockByCase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbUomStockByCase($intbUomStockByCase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbUomStockByCase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMSTOCKBYCASE, $intbUomStockByCase, $comparison);

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

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $itemMasterItem->getIntbuompur(), $comparison);

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
     * Filter the query by a related \ItemXrefVendor object
     *
     * @param \ItemXrefVendor|ObjectCollection $itemXrefVendor the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefVendor($itemXrefVendor, ?string $comparison = null)
    {
        if ($itemXrefVendor instanceof \ItemXrefVendor) {
            $this
                ->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $itemXrefVendor->getIntbuompur(), $comparison);

            return $this;
        } elseif ($itemXrefVendor instanceof ObjectCollection) {
            $this
                ->useItemXrefVendorQuery()
                ->filterByPrimaryKeys($itemXrefVendor->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefVendor() only accepts arguments of type \ItemXrefVendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefVendor(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefVendor');

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
            $this->addJoinObject($join, 'ItemXrefVendor');
        }

        return $this;
    }

    /**
     * Use the ItemXrefVendor relation ItemXrefVendor object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefVendorQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemXrefVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefVendor', '\ItemXrefVendorQuery');
    }

    /**
     * Use the ItemXrefVendor relation ItemXrefVendor object
     *
     * @param callable(\ItemXrefVendorQuery):\ItemXrefVendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemXrefVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefVendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefVendorQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useExistsQuery('ItemXrefVendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendor table for a NOT EXISTS query.
     *
     * @see useItemXrefVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useExistsQuery('ItemXrefVendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefVendorQuery The inner query object of the IN statement
     */
    public function useInItemXrefVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useInQuery('ItemXrefVendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendor table for a NOT IN query.
     *
     * @see useItemXrefVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useInQuery('ItemXrefVendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildUnitofMeasurePurchase $unitofMeasurePurchase Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($unitofMeasurePurchase = null)
    {
        if ($unitofMeasurePurchase) {
            $this->addUsingAlias(UnitofMeasurePurchaseTableMap::COL_INTBUOMPUR, $unitofMeasurePurchase->getIntbuompur(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_uom_pur table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UnitofMeasurePurchaseTableMap::clearInstancePool();
            UnitofMeasurePurchaseTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasurePurchaseTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UnitofMeasurePurchaseTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            UnitofMeasurePurchaseTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            UnitofMeasurePurchaseTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
