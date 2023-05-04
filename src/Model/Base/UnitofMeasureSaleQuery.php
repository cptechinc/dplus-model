<?php

namespace Base;

use \UnitofMeasureSale as ChildUnitofMeasureSale;
use \UnitofMeasureSaleQuery as ChildUnitofMeasureSaleQuery;
use \Exception;
use \PDO;
use Map\UnitofMeasureSaleTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_uom_sale' table.
 *
 *
 *
 * @method     ChildUnitofMeasureSaleQuery orderByIntbuomsale($order = Criteria::ASC) Order by the IntbUomSale column
 * @method     ChildUnitofMeasureSaleQuery orderByIntbuomdesc($order = Criteria::ASC) Order by the IntbUomDesc column
 * @method     ChildUnitofMeasureSaleQuery orderByIntbuomconv($order = Criteria::ASC) Order by the IntbUomConv column
 * @method     ChildUnitofMeasureSaleQuery orderByIntbuompricbywght($order = Criteria::ASC) Order by the IntbUomPricByWght column
 * @method     ChildUnitofMeasureSaleQuery orderByIntbUomStockByCase($order = Criteria::ASC) Order by the IntbUomStockByCase column
 * @method     ChildUnitofMeasureSaleQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildUnitofMeasureSaleQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildUnitofMeasureSaleQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildUnitofMeasureSaleQuery groupByIntbuomsale() Group by the IntbUomSale column
 * @method     ChildUnitofMeasureSaleQuery groupByIntbuomdesc() Group by the IntbUomDesc column
 * @method     ChildUnitofMeasureSaleQuery groupByIntbuomconv() Group by the IntbUomConv column
 * @method     ChildUnitofMeasureSaleQuery groupByIntbuompricbywght() Group by the IntbUomPricByWght column
 * @method     ChildUnitofMeasureSaleQuery groupByIntbUomStockByCase() Group by the IntbUomStockByCase column
 * @method     ChildUnitofMeasureSaleQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildUnitofMeasureSaleQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildUnitofMeasureSaleQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildUnitofMeasureSaleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUnitofMeasureSaleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUnitofMeasureSaleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUnitofMeasureSaleQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildUnitofMeasureSaleQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildUnitofMeasureSaleQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildUnitofMeasureSaleQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasureSaleQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasureSaleQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildUnitofMeasureSaleQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildUnitofMeasureSaleQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasureSaleQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildUnitofMeasureSaleQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildUnitofMeasureSaleQuery leftJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildUnitofMeasureSaleQuery rightJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildUnitofMeasureSaleQuery innerJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildUnitofMeasureSaleQuery joinWithPurchaseOrderDetailReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildUnitofMeasureSaleQuery leftJoinWithPurchaseOrderDetailReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildUnitofMeasureSaleQuery rightJoinWithPurchaseOrderDetailReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildUnitofMeasureSaleQuery innerJoinWithPurchaseOrderDetailReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     \ItemMasterItemQuery|\PurchaseOrderDetailReceivingQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildUnitofMeasureSale findOne(ConnectionInterface $con = null) Return the first ChildUnitofMeasureSale matching the query
 * @method     ChildUnitofMeasureSale findOneOrCreate(ConnectionInterface $con = null) Return the first ChildUnitofMeasureSale matching the query, or a new ChildUnitofMeasureSale object populated from the query conditions when no match is found
 *
 * @method     ChildUnitofMeasureSale findOneByIntbuomsale(string $IntbUomSale) Return the first ChildUnitofMeasureSale filtered by the IntbUomSale column
 * @method     ChildUnitofMeasureSale findOneByIntbuomdesc(string $IntbUomDesc) Return the first ChildUnitofMeasureSale filtered by the IntbUomDesc column
 * @method     ChildUnitofMeasureSale findOneByIntbuomconv(string $IntbUomConv) Return the first ChildUnitofMeasureSale filtered by the IntbUomConv column
 * @method     ChildUnitofMeasureSale findOneByIntbuompricbywght(string $IntbUomPricByWght) Return the first ChildUnitofMeasureSale filtered by the IntbUomPricByWght column
 * @method     ChildUnitofMeasureSale findOneByIntbUomStockByCase(string $IntbUomStockByCase) Return the first ChildUnitofMeasureSale filtered by the IntbUomStockByCase column
 * @method     ChildUnitofMeasureSale findOneByDateupdtd(string $DateUpdtd) Return the first ChildUnitofMeasureSale filtered by the DateUpdtd column
 * @method     ChildUnitofMeasureSale findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUnitofMeasureSale filtered by the TimeUpdtd column
 * @method     ChildUnitofMeasureSale findOneByDummy(string $dummy) Return the first ChildUnitofMeasureSale filtered by the dummy column *

 * @method     ChildUnitofMeasureSale requirePk($key, ConnectionInterface $con = null) Return the ChildUnitofMeasureSale by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOne(ConnectionInterface $con = null) Return the first ChildUnitofMeasureSale matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUnitofMeasureSale requireOneByIntbuomsale(string $IntbUomSale) Return the first ChildUnitofMeasureSale filtered by the IntbUomSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByIntbuomdesc(string $IntbUomDesc) Return the first ChildUnitofMeasureSale filtered by the IntbUomDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByIntbuomconv(string $IntbUomConv) Return the first ChildUnitofMeasureSale filtered by the IntbUomConv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByIntbuompricbywght(string $IntbUomPricByWght) Return the first ChildUnitofMeasureSale filtered by the IntbUomPricByWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByIntbUomStockByCase(string $IntbUomStockByCase) Return the first ChildUnitofMeasureSale filtered by the IntbUomStockByCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByDateupdtd(string $DateUpdtd) Return the first ChildUnitofMeasureSale filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUnitofMeasureSale filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUnitofMeasureSale requireOneByDummy(string $dummy) Return the first ChildUnitofMeasureSale filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUnitofMeasureSale[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildUnitofMeasureSale objects based on current ModelCriteria
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByIntbuomsale(string $IntbUomSale) Return ChildUnitofMeasureSale objects filtered by the IntbUomSale column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByIntbuomdesc(string $IntbUomDesc) Return ChildUnitofMeasureSale objects filtered by the IntbUomDesc column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByIntbuomconv(string $IntbUomConv) Return ChildUnitofMeasureSale objects filtered by the IntbUomConv column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByIntbuompricbywght(string $IntbUomPricByWght) Return ChildUnitofMeasureSale objects filtered by the IntbUomPricByWght column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByIntbUomStockByCase(string $IntbUomStockByCase) Return ChildUnitofMeasureSale objects filtered by the IntbUomStockByCase column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildUnitofMeasureSale objects filtered by the DateUpdtd column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildUnitofMeasureSale objects filtered by the TimeUpdtd column
 * @method     ChildUnitofMeasureSale[]|ObjectCollection findByDummy(string $dummy) Return ChildUnitofMeasureSale objects filtered by the dummy column
 * @method     ChildUnitofMeasureSale[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class UnitofMeasureSaleQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\UnitofMeasureSaleQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\UnitofMeasureSale', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUnitofMeasureSaleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUnitofMeasureSaleQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildUnitofMeasureSaleQuery) {
            return $criteria;
        }
        $query = new ChildUnitofMeasureSaleQuery();
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
     * @return ChildUnitofMeasureSale|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(UnitofMeasureSaleTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = UnitofMeasureSaleTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildUnitofMeasureSale A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbUomSale, IntbUomDesc, IntbUomConv, IntbUomPricByWght, IntbUomStockByCase, DateUpdtd, TimeUpdtd, dummy FROM inv_uom_sale WHERE IntbUomSale = :p0';
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
            /** @var ChildUnitofMeasureSale $obj */
            $obj = new ChildUnitofMeasureSale();
            $obj->hydrate($row);
            UnitofMeasureSaleTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildUnitofMeasureSale|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbUomSale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomsale('fooValue');   // WHERE IntbUomSale = 'fooValue'
     * $query->filterByIntbuomsale('%fooValue%', Criteria::LIKE); // WHERE IntbUomSale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbuomsale The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);
    }

    /**
     * Filter the query on the IntbUomDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomdesc('fooValue');   // WHERE IntbUomDesc = 'fooValue'
     * $query->filterByIntbuomdesc('%fooValue%', Criteria::LIKE); // WHERE IntbUomDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbuomdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByIntbuomdesc($intbuomdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMDESC, $intbuomdesc, $comparison);
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
     * @param     mixed $intbuomconv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByIntbuomconv($intbuomconv = null, $comparison = null)
    {
        if (is_array($intbuomconv)) {
            $useMinMax = false;
            if (isset($intbuomconv['min'])) {
                $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMCONV, $intbuomconv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbuomconv['max'])) {
                $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMCONV, $intbuomconv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMCONV, $intbuomconv, $comparison);
    }

    /**
     * Filter the query on the IntbUomPricByWght column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompricbywght('fooValue');   // WHERE IntbUomPricByWght = 'fooValue'
     * $query->filterByIntbuompricbywght('%fooValue%', Criteria::LIKE); // WHERE IntbUomPricByWght LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbuompricbywght The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByIntbuompricbywght($intbuompricbywght = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompricbywght)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMPRICBYWGHT, $intbuompricbywght, $comparison);
    }

    /**
     * Filter the query on the IntbUomStockByCase column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbUomStockByCase('fooValue');   // WHERE IntbUomStockByCase = 'fooValue'
     * $query->filterByIntbUomStockByCase('%fooValue%', Criteria::LIKE); // WHERE IntbUomStockByCase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbUomStockByCase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByIntbUomStockByCase($intbUomStockByCase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbUomStockByCase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSTOCKBYCASE, $intbUomStockByCase, $comparison);
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
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, $itemMasterItem->getIntbuomsale(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            return $this
                ->useItemMasterItemQuery()
                ->filterByPrimaryKeys($itemMasterItem->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailReceiving object
     *
     * @param \PurchaseOrderDetailReceiving|ObjectCollection $purchaseOrderDetailReceiving the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving, $comparison = null)
    {
        if ($purchaseOrderDetailReceiving instanceof \PurchaseOrderDetailReceiving) {
            return $this
                ->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, $purchaseOrderDetailReceiving->getIntbuompur(), $comparison);
        } elseif ($purchaseOrderDetailReceiving instanceof ObjectCollection) {
            return $this
                ->usePurchaseOrderDetailReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailReceiving->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceiving() only accepts arguments of type \PurchaseOrderDetailReceiving or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailReceiving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailReceiving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailReceiving relation PurchaseOrderDetailReceiving object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailReceivingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailReceiving', '\PurchaseOrderDetailReceivingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildUnitofMeasureSale $unitofMeasureSale Object to remove from the list of results
     *
     * @return $this|ChildUnitofMeasureSaleQuery The current query, for fluid interface
     */
    public function prune($unitofMeasureSale = null)
    {
        if ($unitofMeasureSale) {
            $this->addUsingAlias(UnitofMeasureSaleTableMap::COL_INTBUOMSALE, $unitofMeasureSale->getIntbuomsale(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_uom_sale table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasureSaleTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UnitofMeasureSaleTableMap::clearInstancePool();
            UnitofMeasureSaleTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(UnitofMeasureSaleTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UnitofMeasureSaleTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            UnitofMeasureSaleTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            UnitofMeasureSaleTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // UnitofMeasureSaleQuery
