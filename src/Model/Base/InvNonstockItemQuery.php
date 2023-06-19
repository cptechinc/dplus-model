<?php

namespace Base;

use \InvNonstockItem as ChildInvNonstockItem;
use \InvNonstockItemQuery as ChildInvNonstockItemQuery;
use \Exception;
use \PDO;
use Map\InvNonstockItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_nonstock_item' table.
 *
 *
 *
 * @method     ChildInvNonstockItemQuery orderByNsititemnbr($order = Criteria::ASC) Order by the NsitItemNbr column
 * @method     ChildInvNonstockItemQuery orderByNsitmnfrid($order = Criteria::ASC) Order by the NsitMnfrId column
 * @method     ChildInvNonstockItemQuery orderByNsitdesc1($order = Criteria::ASC) Order by the NsitDesc1 column
 * @method     ChildInvNonstockItemQuery orderByNsitdesc2($order = Criteria::ASC) Order by the NsitDesc2 column
 * @method     ChildInvNonstockItemQuery orderByNsitcost($order = Criteria::ASC) Order by the NsitCost column
 * @method     ChildInvNonstockItemQuery orderByNsitavail($order = Criteria::ASC) Order by the NsitAvail column
 * @method     ChildInvNonstockItemQuery orderByNsituom($order = Criteria::ASC) Order by the NsitUom column
 * @method     ChildInvNonstockItemQuery orderByNsitprice($order = Criteria::ASC) Order by the NsitPrice column
 * @method     ChildInvNonstockItemQuery orderByNsitchgdate($order = Criteria::ASC) Order by the NsitChgDate column
 * @method     ChildInvNonstockItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvNonstockItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvNonstockItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvNonstockItemQuery groupByNsititemnbr() Group by the NsitItemNbr column
 * @method     ChildInvNonstockItemQuery groupByNsitmnfrid() Group by the NsitMnfrId column
 * @method     ChildInvNonstockItemQuery groupByNsitdesc1() Group by the NsitDesc1 column
 * @method     ChildInvNonstockItemQuery groupByNsitdesc2() Group by the NsitDesc2 column
 * @method     ChildInvNonstockItemQuery groupByNsitcost() Group by the NsitCost column
 * @method     ChildInvNonstockItemQuery groupByNsitavail() Group by the NsitAvail column
 * @method     ChildInvNonstockItemQuery groupByNsituom() Group by the NsitUom column
 * @method     ChildInvNonstockItemQuery groupByNsitprice() Group by the NsitPrice column
 * @method     ChildInvNonstockItemQuery groupByNsitchgdate() Group by the NsitChgDate column
 * @method     ChildInvNonstockItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvNonstockItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvNonstockItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvNonstockItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvNonstockItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvNonstockItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvNonstockItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvNonstockItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvNonstockItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvNonstockItemQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildInvNonstockItemQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildInvNonstockItemQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildInvNonstockItemQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildInvNonstockItemQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildInvNonstockItemQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildInvNonstockItemQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvNonstockItem findOne(ConnectionInterface $con = null) Return the first ChildInvNonstockItem matching the query
 * @method     ChildInvNonstockItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvNonstockItem matching the query, or a new ChildInvNonstockItem object populated from the query conditions when no match is found
 *
 * @method     ChildInvNonstockItem findOneByNsititemnbr(string $NsitItemNbr) Return the first ChildInvNonstockItem filtered by the NsitItemNbr column
 * @method     ChildInvNonstockItem findOneByNsitmnfrid(string $NsitMnfrId) Return the first ChildInvNonstockItem filtered by the NsitMnfrId column
 * @method     ChildInvNonstockItem findOneByNsitdesc1(string $NsitDesc1) Return the first ChildInvNonstockItem filtered by the NsitDesc1 column
 * @method     ChildInvNonstockItem findOneByNsitdesc2(string $NsitDesc2) Return the first ChildInvNonstockItem filtered by the NsitDesc2 column
 * @method     ChildInvNonstockItem findOneByNsitcost(string $NsitCost) Return the first ChildInvNonstockItem filtered by the NsitCost column
 * @method     ChildInvNonstockItem findOneByNsitavail(string $NsitAvail) Return the first ChildInvNonstockItem filtered by the NsitAvail column
 * @method     ChildInvNonstockItem findOneByNsituom(string $NsitUom) Return the first ChildInvNonstockItem filtered by the NsitUom column
 * @method     ChildInvNonstockItem findOneByNsitprice(string $NsitPrice) Return the first ChildInvNonstockItem filtered by the NsitPrice column
 * @method     ChildInvNonstockItem findOneByNsitchgdate(string $NsitChgDate) Return the first ChildInvNonstockItem filtered by the NsitChgDate column
 * @method     ChildInvNonstockItem findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvNonstockItem filtered by the DateUpdtd column
 * @method     ChildInvNonstockItem findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvNonstockItem filtered by the TimeUpdtd column
 * @method     ChildInvNonstockItem findOneByDummy(string $dummy) Return the first ChildInvNonstockItem filtered by the dummy column *

 * @method     ChildInvNonstockItem requirePk($key, ConnectionInterface $con = null) Return the ChildInvNonstockItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOne(ConnectionInterface $con = null) Return the first ChildInvNonstockItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvNonstockItem requireOneByNsititemnbr(string $NsitItemNbr) Return the first ChildInvNonstockItem filtered by the NsitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitmnfrid(string $NsitMnfrId) Return the first ChildInvNonstockItem filtered by the NsitMnfrId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitdesc1(string $NsitDesc1) Return the first ChildInvNonstockItem filtered by the NsitDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitdesc2(string $NsitDesc2) Return the first ChildInvNonstockItem filtered by the NsitDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitcost(string $NsitCost) Return the first ChildInvNonstockItem filtered by the NsitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitavail(string $NsitAvail) Return the first ChildInvNonstockItem filtered by the NsitAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsituom(string $NsitUom) Return the first ChildInvNonstockItem filtered by the NsitUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitprice(string $NsitPrice) Return the first ChildInvNonstockItem filtered by the NsitPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByNsitchgdate(string $NsitChgDate) Return the first ChildInvNonstockItem filtered by the NsitChgDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvNonstockItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvNonstockItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvNonstockItem requireOneByDummy(string $dummy) Return the first ChildInvNonstockItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvNonstockItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvNonstockItem objects based on current ModelCriteria
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsititemnbr(string $NsitItemNbr) Return ChildInvNonstockItem objects filtered by the NsitItemNbr column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitmnfrid(string $NsitMnfrId) Return ChildInvNonstockItem objects filtered by the NsitMnfrId column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitdesc1(string $NsitDesc1) Return ChildInvNonstockItem objects filtered by the NsitDesc1 column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitdesc2(string $NsitDesc2) Return ChildInvNonstockItem objects filtered by the NsitDesc2 column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitcost(string $NsitCost) Return ChildInvNonstockItem objects filtered by the NsitCost column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitavail(string $NsitAvail) Return ChildInvNonstockItem objects filtered by the NsitAvail column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsituom(string $NsitUom) Return ChildInvNonstockItem objects filtered by the NsitUom column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitprice(string $NsitPrice) Return ChildInvNonstockItem objects filtered by the NsitPrice column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByNsitchgdate(string $NsitChgDate) Return ChildInvNonstockItem objects filtered by the NsitChgDate column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvNonstockItem objects filtered by the DateUpdtd column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvNonstockItem objects filtered by the TimeUpdtd column
 * @method     ChildInvNonstockItem[]|ObjectCollection findByDummy(string $dummy) Return ChildInvNonstockItem objects filtered by the dummy column
 * @method     ChildInvNonstockItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvNonstockItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvNonstockItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvNonstockItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvNonstockItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvNonstockItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvNonstockItemQuery) {
            return $criteria;
        }
        $query = new ChildInvNonstockItemQuery();
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
     * @param array[$NsitItemNbr, $NsitMnfrId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvNonstockItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvNonstockItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvNonstockItemTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvNonstockItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT NsitItemNbr, NsitMnfrId, NsitDesc1, NsitDesc2, NsitCost, NsitAvail, NsitUom, NsitPrice, NsitChgDate, DateUpdtd, TimeUpdtd, dummy FROM inv_nonstock_item WHERE NsitItemNbr = :p0 AND NsitMnfrId = :p1';
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
            /** @var ChildInvNonstockItem $obj */
            $obj = new ChildInvNonstockItem();
            $obj->hydrate($row);
            InvNonstockItemTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvNonstockItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITMNFRID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvNonstockItemTableMap::COL_NSITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvNonstockItemTableMap::COL_NSITMNFRID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the NsitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByNsititemnbr('fooValue');   // WHERE NsitItemNbr = 'fooValue'
     * $query->filterByNsititemnbr('%fooValue%', Criteria::LIKE); // WHERE NsitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsititemnbr($nsititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITITEMNBR, $nsititemnbr, $comparison);
    }

    /**
     * Filter the query on the NsitMnfrId column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitmnfrid('fooValue');   // WHERE NsitMnfrId = 'fooValue'
     * $query->filterByNsitmnfrid('%fooValue%', Criteria::LIKE); // WHERE NsitMnfrId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsitmnfrid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitmnfrid($nsitmnfrid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsitmnfrid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITMNFRID, $nsitmnfrid, $comparison);
    }

    /**
     * Filter the query on the NsitDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitdesc1('fooValue');   // WHERE NsitDesc1 = 'fooValue'
     * $query->filterByNsitdesc1('%fooValue%', Criteria::LIKE); // WHERE NsitDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsitdesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitdesc1($nsitdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsitdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITDESC1, $nsitdesc1, $comparison);
    }

    /**
     * Filter the query on the NsitDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitdesc2('fooValue');   // WHERE NsitDesc2 = 'fooValue'
     * $query->filterByNsitdesc2('%fooValue%', Criteria::LIKE); // WHERE NsitDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsitdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitdesc2($nsitdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsitdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITDESC2, $nsitdesc2, $comparison);
    }

    /**
     * Filter the query on the NsitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitcost(1234); // WHERE NsitCost = 1234
     * $query->filterByNsitcost(array(12, 34)); // WHERE NsitCost IN (12, 34)
     * $query->filterByNsitcost(array('min' => 12)); // WHERE NsitCost > 12
     * </code>
     *
     * @param     mixed $nsitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitcost($nsitcost = null, $comparison = null)
    {
        if (is_array($nsitcost)) {
            $useMinMax = false;
            if (isset($nsitcost['min'])) {
                $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITCOST, $nsitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nsitcost['max'])) {
                $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITCOST, $nsitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITCOST, $nsitcost, $comparison);
    }

    /**
     * Filter the query on the NsitAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitavail(1234); // WHERE NsitAvail = 1234
     * $query->filterByNsitavail(array(12, 34)); // WHERE NsitAvail IN (12, 34)
     * $query->filterByNsitavail(array('min' => 12)); // WHERE NsitAvail > 12
     * </code>
     *
     * @param     mixed $nsitavail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitavail($nsitavail = null, $comparison = null)
    {
        if (is_array($nsitavail)) {
            $useMinMax = false;
            if (isset($nsitavail['min'])) {
                $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITAVAIL, $nsitavail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nsitavail['max'])) {
                $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITAVAIL, $nsitavail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITAVAIL, $nsitavail, $comparison);
    }

    /**
     * Filter the query on the NsitUom column
     *
     * Example usage:
     * <code>
     * $query->filterByNsituom('fooValue');   // WHERE NsitUom = 'fooValue'
     * $query->filterByNsituom('%fooValue%', Criteria::LIKE); // WHERE NsitUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsituom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsituom($nsituom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsituom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITUOM, $nsituom, $comparison);
    }

    /**
     * Filter the query on the NsitPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitprice(1234); // WHERE NsitPrice = 1234
     * $query->filterByNsitprice(array(12, 34)); // WHERE NsitPrice IN (12, 34)
     * $query->filterByNsitprice(array('min' => 12)); // WHERE NsitPrice > 12
     * </code>
     *
     * @param     mixed $nsitprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitprice($nsitprice = null, $comparison = null)
    {
        if (is_array($nsitprice)) {
            $useMinMax = false;
            if (isset($nsitprice['min'])) {
                $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITPRICE, $nsitprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nsitprice['max'])) {
                $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITPRICE, $nsitprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITPRICE, $nsitprice, $comparison);
    }

    /**
     * Filter the query on the NsitChgDate column
     *
     * Example usage:
     * <code>
     * $query->filterByNsitchgdate('fooValue');   // WHERE NsitChgDate = 'fooValue'
     * $query->filterByNsitchgdate('%fooValue%', Criteria::LIKE); // WHERE NsitChgDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nsitchgdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByNsitchgdate($nsitchgdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nsitchgdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_NSITCHGDATE, $nsitchgdate, $comparison);
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
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvNonstockItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(InvNonstockItemTableMap::COL_NSITMNFRID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvNonstockItemTableMap::COL_NSITMNFRID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvNonstockItem $invNonstockItem Object to remove from the list of results
     *
     * @return $this|ChildInvNonstockItemQuery The current query, for fluid interface
     */
    public function prune($invNonstockItem = null)
    {
        if ($invNonstockItem) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvNonstockItemTableMap::COL_NSITITEMNBR), $invNonstockItem->getNsititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvNonstockItemTableMap::COL_NSITMNFRID), $invNonstockItem->getNsitmnfrid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_nonstock_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvNonstockItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvNonstockItemTableMap::clearInstancePool();
            InvNonstockItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvNonstockItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvNonstockItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvNonstockItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvNonstockItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvNonstockItemQuery
