<?php

namespace Base;

use \ItemXrefUpc as ChildItemXrefUpc;
use \ItemXrefUpcQuery as ChildItemXrefUpcQuery;
use \Exception;
use \PDO;
use Map\ItemXrefUpcTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `upc_item_xref` table.
 *
 * @method     ChildItemXrefUpcQuery orderByUpcxcode($order = Criteria::ASC) Order by the UpcxCode column
 * @method     ChildItemXrefUpcQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefUpcQuery orderByUpcxprim($order = Criteria::ASC) Order by the UpcxPrim column
 * @method     ChildItemXrefUpcQuery orderByUpcxqtyeachesperupc($order = Criteria::ASC) Order by the UpcxQtyEachesPerUpc column
 * @method     ChildItemXrefUpcQuery orderByUpcxuom($order = Criteria::ASC) Order by the UpcxUom column
 * @method     ChildItemXrefUpcQuery orderByUpcxmstrcase($order = Criteria::ASC) Order by the UpcxMstrCase column
 * @method     ChildItemXrefUpcQuery orderByUpcxlabel($order = Criteria::ASC) Order by the UpcxLabel column
 * @method     ChildItemXrefUpcQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefUpcQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefUpcQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefUpcQuery groupByUpcxcode() Group by the UpcxCode column
 * @method     ChildItemXrefUpcQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefUpcQuery groupByUpcxprim() Group by the UpcxPrim column
 * @method     ChildItemXrefUpcQuery groupByUpcxqtyeachesperupc() Group by the UpcxQtyEachesPerUpc column
 * @method     ChildItemXrefUpcQuery groupByUpcxuom() Group by the UpcxUom column
 * @method     ChildItemXrefUpcQuery groupByUpcxmstrcase() Group by the UpcxMstrCase column
 * @method     ChildItemXrefUpcQuery groupByUpcxlabel() Group by the UpcxLabel column
 * @method     ChildItemXrefUpcQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefUpcQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefUpcQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefUpcQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefUpcQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefUpcQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefUpcQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefUpcQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefUpcQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefUpcQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefUpcQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefUpcQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefUpcQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefUpcQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefUpcQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefUpcQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefUpc|null findOne(?ConnectionInterface $con = null) Return the first ChildItemXrefUpc matching the query
 * @method     ChildItemXrefUpc findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemXrefUpc matching the query, or a new ChildItemXrefUpc object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefUpc|null findOneByUpcxcode(string $UpcxCode) Return the first ChildItemXrefUpc filtered by the UpcxCode column
 * @method     ChildItemXrefUpc|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefUpc filtered by the InitItemNbr column
 * @method     ChildItemXrefUpc|null findOneByUpcxprim(string $UpcxPrim) Return the first ChildItemXrefUpc filtered by the UpcxPrim column
 * @method     ChildItemXrefUpc|null findOneByUpcxqtyeachesperupc(int $UpcxQtyEachesPerUpc) Return the first ChildItemXrefUpc filtered by the UpcxQtyEachesPerUpc column
 * @method     ChildItemXrefUpc|null findOneByUpcxuom(string $UpcxUom) Return the first ChildItemXrefUpc filtered by the UpcxUom column
 * @method     ChildItemXrefUpc|null findOneByUpcxmstrcase(string $UpcxMstrCase) Return the first ChildItemXrefUpc filtered by the UpcxMstrCase column
 * @method     ChildItemXrefUpc|null findOneByUpcxlabel(string $UpcxLabel) Return the first ChildItemXrefUpc filtered by the UpcxLabel column
 * @method     ChildItemXrefUpc|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefUpc filtered by the DateUpdtd column
 * @method     ChildItemXrefUpc|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefUpc filtered by the TimeUpdtd column
 * @method     ChildItemXrefUpc|null findOneByDummy(string $dummy) Return the first ChildItemXrefUpc filtered by the dummy column
 *
 * @method     ChildItemXrefUpc requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemXrefUpc by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOne(?ConnectionInterface $con = null) Return the first ChildItemXrefUpc matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefUpc requireOneByUpcxcode(string $UpcxCode) Return the first ChildItemXrefUpc filtered by the UpcxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefUpc filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByUpcxprim(string $UpcxPrim) Return the first ChildItemXrefUpc filtered by the UpcxPrim column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByUpcxqtyeachesperupc(int $UpcxQtyEachesPerUpc) Return the first ChildItemXrefUpc filtered by the UpcxQtyEachesPerUpc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByUpcxuom(string $UpcxUom) Return the first ChildItemXrefUpc filtered by the UpcxUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByUpcxmstrcase(string $UpcxMstrCase) Return the first ChildItemXrefUpc filtered by the UpcxMstrCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByUpcxlabel(string $UpcxLabel) Return the first ChildItemXrefUpc filtered by the UpcxLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefUpc filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefUpc filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefUpc requireOneByDummy(string $dummy) Return the first ChildItemXrefUpc filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefUpc[]|Collection find(?ConnectionInterface $con = null) Return ChildItemXrefUpc objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> find(?ConnectionInterface $con = null) Return ChildItemXrefUpc objects based on current ModelCriteria
 *
 * @method     ChildItemXrefUpc[]|Collection findByUpcxcode(string|array<string> $UpcxCode) Return ChildItemXrefUpc objects filtered by the UpcxCode column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByUpcxcode(string|array<string> $UpcxCode) Return ChildItemXrefUpc objects filtered by the UpcxCode column
 * @method     ChildItemXrefUpc[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemXrefUpc objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemXrefUpc objects filtered by the InitItemNbr column
 * @method     ChildItemXrefUpc[]|Collection findByUpcxprim(string|array<string> $UpcxPrim) Return ChildItemXrefUpc objects filtered by the UpcxPrim column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByUpcxprim(string|array<string> $UpcxPrim) Return ChildItemXrefUpc objects filtered by the UpcxPrim column
 * @method     ChildItemXrefUpc[]|Collection findByUpcxqtyeachesperupc(int|array<int> $UpcxQtyEachesPerUpc) Return ChildItemXrefUpc objects filtered by the UpcxQtyEachesPerUpc column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByUpcxqtyeachesperupc(int|array<int> $UpcxQtyEachesPerUpc) Return ChildItemXrefUpc objects filtered by the UpcxQtyEachesPerUpc column
 * @method     ChildItemXrefUpc[]|Collection findByUpcxuom(string|array<string> $UpcxUom) Return ChildItemXrefUpc objects filtered by the UpcxUom column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByUpcxuom(string|array<string> $UpcxUom) Return ChildItemXrefUpc objects filtered by the UpcxUom column
 * @method     ChildItemXrefUpc[]|Collection findByUpcxmstrcase(string|array<string> $UpcxMstrCase) Return ChildItemXrefUpc objects filtered by the UpcxMstrCase column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByUpcxmstrcase(string|array<string> $UpcxMstrCase) Return ChildItemXrefUpc objects filtered by the UpcxMstrCase column
 * @method     ChildItemXrefUpc[]|Collection findByUpcxlabel(string|array<string> $UpcxLabel) Return ChildItemXrefUpc objects filtered by the UpcxLabel column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByUpcxlabel(string|array<string> $UpcxLabel) Return ChildItemXrefUpc objects filtered by the UpcxLabel column
 * @method     ChildItemXrefUpc[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefUpc objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefUpc objects filtered by the DateUpdtd column
 * @method     ChildItemXrefUpc[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefUpc objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefUpc objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefUpc[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemXrefUpc objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemXrefUpc> findByDummy(string|array<string> $dummy) Return ChildItemXrefUpc objects filtered by the dummy column
 *
 * @method     ChildItemXrefUpc[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemXrefUpc> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemXrefUpcQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefUpcQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefUpc', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefUpcQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefUpcQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildItemXrefUpcQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefUpcQuery();
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
     * @param array[$UpcxCode, $InitItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefUpc|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefUpcTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefUpcTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildItemXrefUpc A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT UpcxCode, InitItemNbr, UpcxPrim, UpcxQtyEachesPerUpc, UpcxUom, UpcxMstrCase, UpcxLabel, DateUpdtd, TimeUpdtd, dummy FROM upc_item_xref WHERE UpcxCode = :p0 AND InitItemNbr = :p1';
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
            /** @var ChildItemXrefUpc $obj */
            $obj = new ChildItemXrefUpc();
            $obj->hydrate($row);
            ItemXrefUpcTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildItemXrefUpc|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefUpcTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ItemXrefUpcTableMap::COL_UPCXCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefUpcTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the UpcxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxcode('fooValue');   // WHERE UpcxCode = 'fooValue'
     * $query->filterByUpcxcode('%fooValue%', Criteria::LIKE); // WHERE UpcxCode LIKE '%fooValue%'
     * $query->filterByUpcxcode(['foo', 'bar']); // WHERE UpcxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $upcxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpcxcode($upcxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXCODE, $upcxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the UpcxPrim column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxprim('fooValue');   // WHERE UpcxPrim = 'fooValue'
     * $query->filterByUpcxprim('%fooValue%', Criteria::LIKE); // WHERE UpcxPrim LIKE '%fooValue%'
     * $query->filterByUpcxprim(['foo', 'bar']); // WHERE UpcxPrim IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $upcxprim The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpcxprim($upcxprim = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxprim)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXPRIM, $upcxprim, $comparison);

        return $this;
    }

    /**
     * Filter the query on the UpcxQtyEachesPerUpc column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxqtyeachesperupc(1234); // WHERE UpcxQtyEachesPerUpc = 1234
     * $query->filterByUpcxqtyeachesperupc(array(12, 34)); // WHERE UpcxQtyEachesPerUpc IN (12, 34)
     * $query->filterByUpcxqtyeachesperupc(array('min' => 12)); // WHERE UpcxQtyEachesPerUpc > 12
     * </code>
     *
     * @param mixed $upcxqtyeachesperupc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpcxqtyeachesperupc($upcxqtyeachesperupc = null, ?string $comparison = null)
    {
        if (is_array($upcxqtyeachesperupc)) {
            $useMinMax = false;
            if (isset($upcxqtyeachesperupc['min'])) {
                $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXQTYEACHESPERUPC, $upcxqtyeachesperupc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($upcxqtyeachesperupc['max'])) {
                $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXQTYEACHESPERUPC, $upcxqtyeachesperupc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXQTYEACHESPERUPC, $upcxqtyeachesperupc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the UpcxUom column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxuom('fooValue');   // WHERE UpcxUom = 'fooValue'
     * $query->filterByUpcxuom('%fooValue%', Criteria::LIKE); // WHERE UpcxUom LIKE '%fooValue%'
     * $query->filterByUpcxuom(['foo', 'bar']); // WHERE UpcxUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $upcxuom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpcxuom($upcxuom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxuom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXUOM, $upcxuom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the UpcxMstrCase column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxmstrcase('fooValue');   // WHERE UpcxMstrCase = 'fooValue'
     * $query->filterByUpcxmstrcase('%fooValue%', Criteria::LIKE); // WHERE UpcxMstrCase LIKE '%fooValue%'
     * $query->filterByUpcxmstrcase(['foo', 'bar']); // WHERE UpcxMstrCase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $upcxmstrcase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpcxmstrcase($upcxmstrcase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxmstrcase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXMSTRCASE, $upcxmstrcase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the UpcxLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxlabel('fooValue');   // WHERE UpcxLabel = 'fooValue'
     * $query->filterByUpcxlabel('%fooValue%', Criteria::LIKE); // WHERE UpcxLabel LIKE '%fooValue%'
     * $query->filterByUpcxlabel(['foo', 'bar']); // WHERE UpcxLabel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $upcxlabel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpcxlabel($upcxlabel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxlabel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_UPCXLABEL, $upcxlabel, $comparison);

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

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefUpcTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
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
                ->addUsingAlias(ItemXrefUpcTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefUpcTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * @param ChildItemXrefUpc $itemXrefUpc Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($itemXrefUpc = null)
    {
        if ($itemXrefUpc) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefUpcTableMap::COL_UPCXCODE), $itemXrefUpc->getUpcxcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefUpcTableMap::COL_INITITEMNBR), $itemXrefUpc->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the upc_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefUpcTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefUpcTableMap::clearInstancePool();
            ItemXrefUpcTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefUpcTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefUpcTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefUpcTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefUpcTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
