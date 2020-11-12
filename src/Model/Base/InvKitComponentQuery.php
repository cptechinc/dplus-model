<?php

namespace Base;

use \InvKitComponent as ChildInvKitComponent;
use \InvKitComponentQuery as ChildInvKitComponentQuery;
use \Exception;
use \PDO;
use Map\InvKitComponentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_kit_detail' table.
 *
 *
 *
 * @method     ChildInvKitComponentQuery orderByKtdtkey1($order = Criteria::ASC) Order by the KtdtKey1 column
 * @method     ChildInvKitComponentQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvKitComponentQuery orderByKtdtuom($order = Criteria::ASC) Order by the KtdtUom column
 * @method     ChildInvKitComponentQuery orderByKtdtusagrate($order = Criteria::ASC) Order by the KtdtUsagRate column
 * @method     ChildInvKitComponentQuery orderByKtdtvendsupply($order = Criteria::ASC) Order by the KtdtVendSupply column
 * @method     ChildInvKitComponentQuery orderByKtdtfreegoods($order = Criteria::ASC) Order by the KtdtFreeGoods column
 * @method     ChildInvKitComponentQuery orderByKtdtUsagTag($order = Criteria::ASC) Order by the KtdtUsagTag column
 * @method     ChildInvKitComponentQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvKitComponentQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvKitComponentQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvKitComponentQuery groupByKtdtkey1() Group by the KtdtKey1 column
 * @method     ChildInvKitComponentQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvKitComponentQuery groupByKtdtuom() Group by the KtdtUom column
 * @method     ChildInvKitComponentQuery groupByKtdtusagrate() Group by the KtdtUsagRate column
 * @method     ChildInvKitComponentQuery groupByKtdtvendsupply() Group by the KtdtVendSupply column
 * @method     ChildInvKitComponentQuery groupByKtdtfreegoods() Group by the KtdtFreeGoods column
 * @method     ChildInvKitComponentQuery groupByKtdtUsagTag() Group by the KtdtUsagTag column
 * @method     ChildInvKitComponentQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvKitComponentQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvKitComponentQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvKitComponentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvKitComponentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvKitComponentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvKitComponentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvKitComponentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvKitComponentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvKitComponentQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvKitComponentQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvKitComponentQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvKitComponentQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvKitComponentQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvKitComponentQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvKitComponentQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvKitComponentQuery leftJoinInvKit($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvKit relation
 * @method     ChildInvKitComponentQuery rightJoinInvKit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvKit relation
 * @method     ChildInvKitComponentQuery innerJoinInvKit($relationAlias = null) Adds a INNER JOIN clause to the query using the InvKit relation
 *
 * @method     ChildInvKitComponentQuery joinWithInvKit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvKit relation
 *
 * @method     ChildInvKitComponentQuery leftJoinWithInvKit() Adds a LEFT JOIN clause and with to the query using the InvKit relation
 * @method     ChildInvKitComponentQuery rightJoinWithInvKit() Adds a RIGHT JOIN clause and with to the query using the InvKit relation
 * @method     ChildInvKitComponentQuery innerJoinWithInvKit() Adds a INNER JOIN clause and with to the query using the InvKit relation
 *
 * @method     \ItemMasterItemQuery|\InvKitQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvKitComponent findOne(ConnectionInterface $con = null) Return the first ChildInvKitComponent matching the query
 * @method     ChildInvKitComponent findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvKitComponent matching the query, or a new ChildInvKitComponent object populated from the query conditions when no match is found
 *
 * @method     ChildInvKitComponent findOneByKtdtkey1(string $KtdtKey1) Return the first ChildInvKitComponent filtered by the KtdtKey1 column
 * @method     ChildInvKitComponent findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvKitComponent filtered by the InitItemNbr column
 * @method     ChildInvKitComponent findOneByKtdtuom(string $KtdtUom) Return the first ChildInvKitComponent filtered by the KtdtUom column
 * @method     ChildInvKitComponent findOneByKtdtusagrate(string $KtdtUsagRate) Return the first ChildInvKitComponent filtered by the KtdtUsagRate column
 * @method     ChildInvKitComponent findOneByKtdtvendsupply(string $KtdtVendSupply) Return the first ChildInvKitComponent filtered by the KtdtVendSupply column
 * @method     ChildInvKitComponent findOneByKtdtfreegoods(string $KtdtFreeGoods) Return the first ChildInvKitComponent filtered by the KtdtFreeGoods column
 * @method     ChildInvKitComponent findOneByKtdtUsagTag(string $KtdtUsagTag) Return the first ChildInvKitComponent filtered by the KtdtUsagTag column
 * @method     ChildInvKitComponent findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvKitComponent filtered by the DateUpdtd column
 * @method     ChildInvKitComponent findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvKitComponent filtered by the TimeUpdtd column
 * @method     ChildInvKitComponent findOneByDummy(string $dummy) Return the first ChildInvKitComponent filtered by the dummy column *

 * @method     ChildInvKitComponent requirePk($key, ConnectionInterface $con = null) Return the ChildInvKitComponent by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOne(ConnectionInterface $con = null) Return the first ChildInvKitComponent matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvKitComponent requireOneByKtdtkey1(string $KtdtKey1) Return the first ChildInvKitComponent filtered by the KtdtKey1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvKitComponent filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByKtdtuom(string $KtdtUom) Return the first ChildInvKitComponent filtered by the KtdtUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByKtdtusagrate(string $KtdtUsagRate) Return the first ChildInvKitComponent filtered by the KtdtUsagRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByKtdtvendsupply(string $KtdtVendSupply) Return the first ChildInvKitComponent filtered by the KtdtVendSupply column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByKtdtfreegoods(string $KtdtFreeGoods) Return the first ChildInvKitComponent filtered by the KtdtFreeGoods column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByKtdtUsagTag(string $KtdtUsagTag) Return the first ChildInvKitComponent filtered by the KtdtUsagTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvKitComponent filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvKitComponent filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvKitComponent requireOneByDummy(string $dummy) Return the first ChildInvKitComponent filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvKitComponent[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvKitComponent objects based on current ModelCriteria
 * @method     ChildInvKitComponent[]|ObjectCollection findByKtdtkey1(string $KtdtKey1) Return ChildInvKitComponent objects filtered by the KtdtKey1 column
 * @method     ChildInvKitComponent[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvKitComponent objects filtered by the InitItemNbr column
 * @method     ChildInvKitComponent[]|ObjectCollection findByKtdtuom(string $KtdtUom) Return ChildInvKitComponent objects filtered by the KtdtUom column
 * @method     ChildInvKitComponent[]|ObjectCollection findByKtdtusagrate(string $KtdtUsagRate) Return ChildInvKitComponent objects filtered by the KtdtUsagRate column
 * @method     ChildInvKitComponent[]|ObjectCollection findByKtdtvendsupply(string $KtdtVendSupply) Return ChildInvKitComponent objects filtered by the KtdtVendSupply column
 * @method     ChildInvKitComponent[]|ObjectCollection findByKtdtfreegoods(string $KtdtFreeGoods) Return ChildInvKitComponent objects filtered by the KtdtFreeGoods column
 * @method     ChildInvKitComponent[]|ObjectCollection findByKtdtUsagTag(string $KtdtUsagTag) Return ChildInvKitComponent objects filtered by the KtdtUsagTag column
 * @method     ChildInvKitComponent[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvKitComponent objects filtered by the DateUpdtd column
 * @method     ChildInvKitComponent[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvKitComponent objects filtered by the TimeUpdtd column
 * @method     ChildInvKitComponent[]|ObjectCollection findByDummy(string $dummy) Return ChildInvKitComponent objects filtered by the dummy column
 * @method     ChildInvKitComponent[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvKitComponentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvKitComponentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvKitComponent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvKitComponentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvKitComponentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvKitComponentQuery) {
            return $criteria;
        }
        $query = new ChildInvKitComponentQuery();
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
     * @param array[$KtdtKey1, $InitItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvKitComponent|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvKitComponentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvKitComponentTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvKitComponent A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT KtdtKey1, InitItemNbr, KtdtUom, KtdtUsagRate, KtdtVendSupply, KtdtFreeGoods, KtdtUsagTag, DateUpdtd, TimeUpdtd, dummy FROM inv_kit_detail WHERE KtdtKey1 = :p0 AND InitItemNbr = :p1';
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
            /** @var ChildInvKitComponent $obj */
            $obj = new ChildInvKitComponent();
            $obj->hydrate($row);
            InvKitComponentTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvKitComponent|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTKEY1, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvKitComponentTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvKitComponentTableMap::COL_KTDTKEY1, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvKitComponentTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the KtdtKey1 column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtkey1('fooValue');   // WHERE KtdtKey1 = 'fooValue'
     * $query->filterByKtdtkey1('%fooValue%', Criteria::LIKE); // WHERE KtdtKey1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ktdtkey1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByKtdtkey1($ktdtkey1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtkey1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTKEY1, $ktdtkey1, $comparison);
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
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the KtdtUom column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtuom('fooValue');   // WHERE KtdtUom = 'fooValue'
     * $query->filterByKtdtuom('%fooValue%', Criteria::LIKE); // WHERE KtdtUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ktdtuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByKtdtuom($ktdtuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTUOM, $ktdtuom, $comparison);
    }

    /**
     * Filter the query on the KtdtUsagRate column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtusagrate(1234); // WHERE KtdtUsagRate = 1234
     * $query->filterByKtdtusagrate(array(12, 34)); // WHERE KtdtUsagRate IN (12, 34)
     * $query->filterByKtdtusagrate(array('min' => 12)); // WHERE KtdtUsagRate > 12
     * </code>
     *
     * @param     mixed $ktdtusagrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByKtdtusagrate($ktdtusagrate = null, $comparison = null)
    {
        if (is_array($ktdtusagrate)) {
            $useMinMax = false;
            if (isset($ktdtusagrate['min'])) {
                $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTUSAGRATE, $ktdtusagrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ktdtusagrate['max'])) {
                $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTUSAGRATE, $ktdtusagrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTUSAGRATE, $ktdtusagrate, $comparison);
    }

    /**
     * Filter the query on the KtdtVendSupply column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtvendsupply('fooValue');   // WHERE KtdtVendSupply = 'fooValue'
     * $query->filterByKtdtvendsupply('%fooValue%', Criteria::LIKE); // WHERE KtdtVendSupply LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ktdtvendsupply The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByKtdtvendsupply($ktdtvendsupply = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtvendsupply)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTVENDSUPPLY, $ktdtvendsupply, $comparison);
    }

    /**
     * Filter the query on the KtdtFreeGoods column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtfreegoods('fooValue');   // WHERE KtdtFreeGoods = 'fooValue'
     * $query->filterByKtdtfreegoods('%fooValue%', Criteria::LIKE); // WHERE KtdtFreeGoods LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ktdtfreegoods The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByKtdtfreegoods($ktdtfreegoods = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtfreegoods)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTFREEGOODS, $ktdtfreegoods, $comparison);
    }

    /**
     * Filter the query on the KtdtUsagTag column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtUsagTag('fooValue');   // WHERE KtdtUsagTag = 'fooValue'
     * $query->filterByKtdtUsagTag('%fooValue%', Criteria::LIKE); // WHERE KtdtUsagTag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ktdtUsagTag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByKtdtUsagTag($ktdtUsagTag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtUsagTag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_KTDTUSAGTAG, $ktdtUsagTag, $comparison);
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
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvKitComponentTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvKitComponentTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvKitComponentTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
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
     * Filter the query by a related \InvKit object
     *
     * @param \InvKit|ObjectCollection $invKit The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function filterByInvKit($invKit, $comparison = null)
    {
        if ($invKit instanceof \InvKit) {
            return $this
                ->addUsingAlias(InvKitComponentTableMap::COL_KTDTKEY1, $invKit->getInititemnbr(), $comparison);
        } elseif ($invKit instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvKitComponentTableMap::COL_KTDTKEY1, $invKit->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByInvKit() only accepts arguments of type \InvKit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvKit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function joinInvKit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvKit');

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
            $this->addJoinObject($join, 'InvKit');
        }

        return $this;
    }

    /**
     * Use the InvKit relation InvKit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvKitQuery A secondary query class using the current class as primary query
     */
    public function useInvKitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvKit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvKit', '\InvKitQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvKitComponent $invKitComponent Object to remove from the list of results
     *
     * @return $this|ChildInvKitComponentQuery The current query, for fluid interface
     */
    public function prune($invKitComponent = null)
    {
        if ($invKitComponent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvKitComponentTableMap::COL_KTDTKEY1), $invKitComponent->getKtdtkey1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvKitComponentTableMap::COL_INITITEMNBR), $invKitComponent->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_kit_detail table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvKitComponentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvKitComponentTableMap::clearInstancePool();
            InvKitComponentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvKitComponentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvKitComponentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvKitComponentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvKitComponentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvKitComponentQuery
