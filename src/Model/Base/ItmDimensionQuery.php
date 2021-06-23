<?php

namespace Base;

use \ItmDimension as ChildItmDimension;
use \ItmDimensionQuery as ChildItmDimensionQuery;
use \Exception;
use \PDO;
use Map\ItmDimensionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_inv_dimen' table.
 *
 *
 *
 * @method     ChildItmDimensionQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItmDimensionQuery orderByIndminside($order = Criteria::ASC) Order by the IndmInside column
 * @method     ChildItmDimensionQuery orderByIndmoutside($order = Criteria::ASC) Order by the IndmOutside column
 * @method     ChildItmDimensionQuery orderByIndmcross($order = Criteria::ASC) Order by the IndmCross column
 * @method     ChildItmDimensionQuery orderByIndmthick($order = Criteria::ASC) Order by the IndmThick column
 * @method     ChildItmDimensionQuery orderByIndmlength($order = Criteria::ASC) Order by the IndmLength column
 * @method     ChildItmDimensionQuery orderByIndmwidth($order = Criteria::ASC) Order by the IndmWidth column
 * @method     ChildItmDimensionQuery orderByIndmthickness($order = Criteria::ASC) Order by the IndmThickness column
 * @method     ChildItmDimensionQuery orderByIndmsqft($order = Criteria::ASC) Order by the IndmSqft column
 * @method     ChildItmDimensionQuery orderByIndmbagqty($order = Criteria::ASC) Order by the IndmBagQty column
 * @method     ChildItmDimensionQuery orderByIndmbulkqty($order = Criteria::ASC) Order by the IndmBulkQty column
 * @method     ChildItmDimensionQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItmDimensionQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItmDimensionQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItmDimensionQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItmDimensionQuery groupByIndminside() Group by the IndmInside column
 * @method     ChildItmDimensionQuery groupByIndmoutside() Group by the IndmOutside column
 * @method     ChildItmDimensionQuery groupByIndmcross() Group by the IndmCross column
 * @method     ChildItmDimensionQuery groupByIndmthick() Group by the IndmThick column
 * @method     ChildItmDimensionQuery groupByIndmlength() Group by the IndmLength column
 * @method     ChildItmDimensionQuery groupByIndmwidth() Group by the IndmWidth column
 * @method     ChildItmDimensionQuery groupByIndmthickness() Group by the IndmThickness column
 * @method     ChildItmDimensionQuery groupByIndmsqft() Group by the IndmSqft column
 * @method     ChildItmDimensionQuery groupByIndmbagqty() Group by the IndmBagQty column
 * @method     ChildItmDimensionQuery groupByIndmbulkqty() Group by the IndmBulkQty column
 * @method     ChildItmDimensionQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItmDimensionQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItmDimensionQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItmDimensionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItmDimensionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItmDimensionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItmDimensionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItmDimensionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItmDimensionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItmDimensionQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItmDimensionQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItmDimensionQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItmDimensionQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItmDimensionQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItmDimensionQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItmDimensionQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItmDimension findOne(ConnectionInterface $con = null) Return the first ChildItmDimension matching the query
 * @method     ChildItmDimension findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItmDimension matching the query, or a new ChildItmDimension object populated from the query conditions when no match is found
 *
 * @method     ChildItmDimension findOneByInititemnbr(string $InitItemNbr) Return the first ChildItmDimension filtered by the InitItemNbr column
 * @method     ChildItmDimension findOneByIndminside(string $IndmInside) Return the first ChildItmDimension filtered by the IndmInside column
 * @method     ChildItmDimension findOneByIndmoutside(string $IndmOutside) Return the first ChildItmDimension filtered by the IndmOutside column
 * @method     ChildItmDimension findOneByIndmcross(string $IndmCross) Return the first ChildItmDimension filtered by the IndmCross column
 * @method     ChildItmDimension findOneByIndmthick(string $IndmThick) Return the first ChildItmDimension filtered by the IndmThick column
 * @method     ChildItmDimension findOneByIndmlength(string $IndmLength) Return the first ChildItmDimension filtered by the IndmLength column
 * @method     ChildItmDimension findOneByIndmwidth(string $IndmWidth) Return the first ChildItmDimension filtered by the IndmWidth column
 * @method     ChildItmDimension findOneByIndmthickness(string $IndmThickness) Return the first ChildItmDimension filtered by the IndmThickness column
 * @method     ChildItmDimension findOneByIndmsqft(string $IndmSqft) Return the first ChildItmDimension filtered by the IndmSqft column
 * @method     ChildItmDimension findOneByIndmbagqty(int $IndmBagQty) Return the first ChildItmDimension filtered by the IndmBagQty column
 * @method     ChildItmDimension findOneByIndmbulkqty(int $IndmBulkQty) Return the first ChildItmDimension filtered by the IndmBulkQty column
 * @method     ChildItmDimension findOneByDateupdtd(string $DateUpdtd) Return the first ChildItmDimension filtered by the DateUpdtd column
 * @method     ChildItmDimension findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItmDimension filtered by the TimeUpdtd column
 * @method     ChildItmDimension findOneByDummy(string $dummy) Return the first ChildItmDimension filtered by the dummy column *

 * @method     ChildItmDimension requirePk($key, ConnectionInterface $con = null) Return the ChildItmDimension by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOne(ConnectionInterface $con = null) Return the first ChildItmDimension matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItmDimension requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItmDimension filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndminside(string $IndmInside) Return the first ChildItmDimension filtered by the IndmInside column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmoutside(string $IndmOutside) Return the first ChildItmDimension filtered by the IndmOutside column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmcross(string $IndmCross) Return the first ChildItmDimension filtered by the IndmCross column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmthick(string $IndmThick) Return the first ChildItmDimension filtered by the IndmThick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmlength(string $IndmLength) Return the first ChildItmDimension filtered by the IndmLength column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmwidth(string $IndmWidth) Return the first ChildItmDimension filtered by the IndmWidth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmthickness(string $IndmThickness) Return the first ChildItmDimension filtered by the IndmThickness column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmsqft(string $IndmSqft) Return the first ChildItmDimension filtered by the IndmSqft column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmbagqty(int $IndmBagQty) Return the first ChildItmDimension filtered by the IndmBagQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByIndmbulkqty(int $IndmBulkQty) Return the first ChildItmDimension filtered by the IndmBulkQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItmDimension filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItmDimension filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItmDimension requireOneByDummy(string $dummy) Return the first ChildItmDimension filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItmDimension[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItmDimension objects based on current ModelCriteria
 * @method     ChildItmDimension[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItmDimension objects filtered by the InitItemNbr column
 * @method     ChildItmDimension[]|ObjectCollection findByIndminside(string $IndmInside) Return ChildItmDimension objects filtered by the IndmInside column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmoutside(string $IndmOutside) Return ChildItmDimension objects filtered by the IndmOutside column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmcross(string $IndmCross) Return ChildItmDimension objects filtered by the IndmCross column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmthick(string $IndmThick) Return ChildItmDimension objects filtered by the IndmThick column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmlength(string $IndmLength) Return ChildItmDimension objects filtered by the IndmLength column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmwidth(string $IndmWidth) Return ChildItmDimension objects filtered by the IndmWidth column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmthickness(string $IndmThickness) Return ChildItmDimension objects filtered by the IndmThickness column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmsqft(string $IndmSqft) Return ChildItmDimension objects filtered by the IndmSqft column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmbagqty(int $IndmBagQty) Return ChildItmDimension objects filtered by the IndmBagQty column
 * @method     ChildItmDimension[]|ObjectCollection findByIndmbulkqty(int $IndmBulkQty) Return ChildItmDimension objects filtered by the IndmBulkQty column
 * @method     ChildItmDimension[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItmDimension objects filtered by the DateUpdtd column
 * @method     ChildItmDimension[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItmDimension objects filtered by the TimeUpdtd column
 * @method     ChildItmDimension[]|ObjectCollection findByDummy(string $dummy) Return ChildItmDimension objects filtered by the dummy column
 * @method     ChildItmDimension[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItmDimensionQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItmDimensionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItmDimension', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItmDimensionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItmDimensionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItmDimensionQuery) {
            return $criteria;
        }
        $query = new ChildItmDimensionQuery();
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
     * @return ChildItmDimension|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItmDimensionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildItmDimension A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IndmInside, IndmOutside, IndmCross, IndmThick, IndmLength, IndmWidth, IndmThickness, IndmSqft, IndmBagQty, IndmBulkQty, DateUpdtd, TimeUpdtd, dummy FROM inv_inv_dimen WHERE InitItemNbr = :p0';
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
            /** @var ChildItmDimension $obj */
            $obj = new ChildItmDimension();
            $obj->hydrate($row);
            ItmDimensionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildItmDimension|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INITITEMNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INITITEMNBR, $keys, Criteria::IN);
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
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the IndmInside column
     *
     * Example usage:
     * <code>
     * $query->filterByIndminside(1234); // WHERE IndmInside = 1234
     * $query->filterByIndminside(array(12, 34)); // WHERE IndmInside IN (12, 34)
     * $query->filterByIndminside(array('min' => 12)); // WHERE IndmInside > 12
     * </code>
     *
     * @param     mixed $indminside The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndminside($indminside = null, $comparison = null)
    {
        if (is_array($indminside)) {
            $useMinMax = false;
            if (isset($indminside['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMINSIDE, $indminside['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indminside['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMINSIDE, $indminside['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMINSIDE, $indminside, $comparison);
    }

    /**
     * Filter the query on the IndmOutside column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmoutside(1234); // WHERE IndmOutside = 1234
     * $query->filterByIndmoutside(array(12, 34)); // WHERE IndmOutside IN (12, 34)
     * $query->filterByIndmoutside(array('min' => 12)); // WHERE IndmOutside > 12
     * </code>
     *
     * @param     mixed $indmoutside The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmoutside($indmoutside = null, $comparison = null)
    {
        if (is_array($indmoutside)) {
            $useMinMax = false;
            if (isset($indmoutside['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMOUTSIDE, $indmoutside['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmoutside['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMOUTSIDE, $indmoutside['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMOUTSIDE, $indmoutside, $comparison);
    }

    /**
     * Filter the query on the IndmCross column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmcross(1234); // WHERE IndmCross = 1234
     * $query->filterByIndmcross(array(12, 34)); // WHERE IndmCross IN (12, 34)
     * $query->filterByIndmcross(array('min' => 12)); // WHERE IndmCross > 12
     * </code>
     *
     * @param     mixed $indmcross The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmcross($indmcross = null, $comparison = null)
    {
        if (is_array($indmcross)) {
            $useMinMax = false;
            if (isset($indmcross['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMCROSS, $indmcross['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmcross['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMCROSS, $indmcross['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMCROSS, $indmcross, $comparison);
    }

    /**
     * Filter the query on the IndmThick column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmthick(1234); // WHERE IndmThick = 1234
     * $query->filterByIndmthick(array(12, 34)); // WHERE IndmThick IN (12, 34)
     * $query->filterByIndmthick(array('min' => 12)); // WHERE IndmThick > 12
     * </code>
     *
     * @param     mixed $indmthick The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmthick($indmthick = null, $comparison = null)
    {
        if (is_array($indmthick)) {
            $useMinMax = false;
            if (isset($indmthick['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMTHICK, $indmthick['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmthick['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMTHICK, $indmthick['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMTHICK, $indmthick, $comparison);
    }

    /**
     * Filter the query on the IndmLength column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmlength(1234); // WHERE IndmLength = 1234
     * $query->filterByIndmlength(array(12, 34)); // WHERE IndmLength IN (12, 34)
     * $query->filterByIndmlength(array('min' => 12)); // WHERE IndmLength > 12
     * </code>
     *
     * @param     mixed $indmlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmlength($indmlength = null, $comparison = null)
    {
        if (is_array($indmlength)) {
            $useMinMax = false;
            if (isset($indmlength['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMLENGTH, $indmlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmlength['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMLENGTH, $indmlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMLENGTH, $indmlength, $comparison);
    }

    /**
     * Filter the query on the IndmWidth column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmwidth(1234); // WHERE IndmWidth = 1234
     * $query->filterByIndmwidth(array(12, 34)); // WHERE IndmWidth IN (12, 34)
     * $query->filterByIndmwidth(array('min' => 12)); // WHERE IndmWidth > 12
     * </code>
     *
     * @param     mixed $indmwidth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmwidth($indmwidth = null, $comparison = null)
    {
        if (is_array($indmwidth)) {
            $useMinMax = false;
            if (isset($indmwidth['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMWIDTH, $indmwidth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmwidth['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMWIDTH, $indmwidth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMWIDTH, $indmwidth, $comparison);
    }

    /**
     * Filter the query on the IndmThickness column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmthickness(1234); // WHERE IndmThickness = 1234
     * $query->filterByIndmthickness(array(12, 34)); // WHERE IndmThickness IN (12, 34)
     * $query->filterByIndmthickness(array('min' => 12)); // WHERE IndmThickness > 12
     * </code>
     *
     * @param     mixed $indmthickness The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmthickness($indmthickness = null, $comparison = null)
    {
        if (is_array($indmthickness)) {
            $useMinMax = false;
            if (isset($indmthickness['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMTHICKNESS, $indmthickness['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmthickness['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMTHICKNESS, $indmthickness['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMTHICKNESS, $indmthickness, $comparison);
    }

    /**
     * Filter the query on the IndmSqft column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmsqft(1234); // WHERE IndmSqft = 1234
     * $query->filterByIndmsqft(array(12, 34)); // WHERE IndmSqft IN (12, 34)
     * $query->filterByIndmsqft(array('min' => 12)); // WHERE IndmSqft > 12
     * </code>
     *
     * @param     mixed $indmsqft The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmsqft($indmsqft = null, $comparison = null)
    {
        if (is_array($indmsqft)) {
            $useMinMax = false;
            if (isset($indmsqft['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMSQFT, $indmsqft['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmsqft['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMSQFT, $indmsqft['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMSQFT, $indmsqft, $comparison);
    }

    /**
     * Filter the query on the IndmBagQty column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmbagqty(1234); // WHERE IndmBagQty = 1234
     * $query->filterByIndmbagqty(array(12, 34)); // WHERE IndmBagQty IN (12, 34)
     * $query->filterByIndmbagqty(array('min' => 12)); // WHERE IndmBagQty > 12
     * </code>
     *
     * @param     mixed $indmbagqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmbagqty($indmbagqty = null, $comparison = null)
    {
        if (is_array($indmbagqty)) {
            $useMinMax = false;
            if (isset($indmbagqty['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMBAGQTY, $indmbagqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmbagqty['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMBAGQTY, $indmbagqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMBAGQTY, $indmbagqty, $comparison);
    }

    /**
     * Filter the query on the IndmBulkQty column
     *
     * Example usage:
     * <code>
     * $query->filterByIndmbulkqty(1234); // WHERE IndmBulkQty = 1234
     * $query->filterByIndmbulkqty(array(12, 34)); // WHERE IndmBulkQty IN (12, 34)
     * $query->filterByIndmbulkqty(array('min' => 12)); // WHERE IndmBulkQty > 12
     * </code>
     *
     * @param     mixed $indmbulkqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByIndmbulkqty($indmbulkqty = null, $comparison = null)
    {
        if (is_array($indmbulkqty)) {
            $useMinMax = false;
            if (isset($indmbulkqty['min'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMBULKQTY, $indmbulkqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indmbulkqty['max'])) {
                $this->addUsingAlias(ItmDimensionTableMap::COL_INDMBULKQTY, $indmbulkqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_INDMBULKQTY, $indmbulkqty, $comparison);
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
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItmDimensionTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItmDimensionQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItmDimensionTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItmDimensionTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildItmDimension $itmDimension Object to remove from the list of results
     *
     * @return $this|ChildItmDimensionQuery The current query, for fluid interface
     */
    public function prune($itmDimension = null)
    {
        if ($itmDimension) {
            $this->addUsingAlias(ItmDimensionTableMap::COL_INITITEMNBR, $itmDimension->getInititemnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_inv_dimen table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItmDimensionTableMap::clearInstancePool();
            ItmDimensionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItmDimensionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItmDimensionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItmDimensionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItmDimensionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItmDimensionQuery
