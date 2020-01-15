<?php

namespace Base;

use \ItemUpcXref as ChildItemUpcXref;
use \ItemUpcXrefQuery as ChildItemUpcXrefQuery;
use \Exception;
use \PDO;
use Map\ItemUpcXrefTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'upc_item_xref' table.
 *
 *
 *
 * @method     ChildItemUpcXrefQuery orderByUpcxcode($order = Criteria::ASC) Order by the UpcxCode column
 * @method     ChildItemUpcXrefQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemUpcXrefQuery orderByUpcxprim($order = Criteria::ASC) Order by the UpcxPrim column
 * @method     ChildItemUpcXrefQuery orderByUpcxqtyeachesperupc($order = Criteria::ASC) Order by the UpcxQtyEachesPerUpc column
 * @method     ChildItemUpcXrefQuery orderByUpcxuom($order = Criteria::ASC) Order by the UpcxUom column
 * @method     ChildItemUpcXrefQuery orderByUpcxmstrcase($order = Criteria::ASC) Order by the UpcxMstrCase column
 * @method     ChildItemUpcXrefQuery orderByUpcxlabel($order = Criteria::ASC) Order by the UpcxLabel column
 * @method     ChildItemUpcXrefQuery orderByUpcxamazon($order = Criteria::ASC) Order by the UpcxAmazon column
 * @method     ChildItemUpcXrefQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemUpcXrefQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemUpcXrefQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemUpcXrefQuery groupByUpcxcode() Group by the UpcxCode column
 * @method     ChildItemUpcXrefQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemUpcXrefQuery groupByUpcxprim() Group by the UpcxPrim column
 * @method     ChildItemUpcXrefQuery groupByUpcxqtyeachesperupc() Group by the UpcxQtyEachesPerUpc column
 * @method     ChildItemUpcXrefQuery groupByUpcxuom() Group by the UpcxUom column
 * @method     ChildItemUpcXrefQuery groupByUpcxmstrcase() Group by the UpcxMstrCase column
 * @method     ChildItemUpcXrefQuery groupByUpcxlabel() Group by the UpcxLabel column
 * @method     ChildItemUpcXrefQuery groupByUpcxamazon() Group by the UpcxAmazon column
 * @method     ChildItemUpcXrefQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemUpcXrefQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemUpcXrefQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemUpcXrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemUpcXrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemUpcXrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemUpcXrefQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemUpcXrefQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemUpcXrefQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemUpcXref findOne(ConnectionInterface $con = null) Return the first ChildItemUpcXref matching the query
 * @method     ChildItemUpcXref findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemUpcXref matching the query, or a new ChildItemUpcXref object populated from the query conditions when no match is found
 *
 * @method     ChildItemUpcXref findOneByUpcxcode(string $UpcxCode) Return the first ChildItemUpcXref filtered by the UpcxCode column
 * @method     ChildItemUpcXref findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemUpcXref filtered by the InitItemNbr column
 * @method     ChildItemUpcXref findOneByUpcxprim(string $UpcxPrim) Return the first ChildItemUpcXref filtered by the UpcxPrim column
 * @method     ChildItemUpcXref findOneByUpcxqtyeachesperupc(int $UpcxQtyEachesPerUpc) Return the first ChildItemUpcXref filtered by the UpcxQtyEachesPerUpc column
 * @method     ChildItemUpcXref findOneByUpcxuom(string $UpcxUom) Return the first ChildItemUpcXref filtered by the UpcxUom column
 * @method     ChildItemUpcXref findOneByUpcxmstrcase(string $UpcxMstrCase) Return the first ChildItemUpcXref filtered by the UpcxMstrCase column
 * @method     ChildItemUpcXref findOneByUpcxlabel(string $UpcxLabel) Return the first ChildItemUpcXref filtered by the UpcxLabel column
 * @method     ChildItemUpcXref findOneByUpcxamazon(string $UpcxAmazon) Return the first ChildItemUpcXref filtered by the UpcxAmazon column
 * @method     ChildItemUpcXref findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemUpcXref filtered by the DateUpdtd column
 * @method     ChildItemUpcXref findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemUpcXref filtered by the TimeUpdtd column
 * @method     ChildItemUpcXref findOneByDummy(string $dummy) Return the first ChildItemUpcXref filtered by the dummy column *

 * @method     ChildItemUpcXref requirePk($key, ConnectionInterface $con = null) Return the ChildItemUpcXref by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOne(ConnectionInterface $con = null) Return the first ChildItemUpcXref matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemUpcXref requireOneByUpcxcode(string $UpcxCode) Return the first ChildItemUpcXref filtered by the UpcxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemUpcXref filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByUpcxprim(string $UpcxPrim) Return the first ChildItemUpcXref filtered by the UpcxPrim column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByUpcxqtyeachesperupc(int $UpcxQtyEachesPerUpc) Return the first ChildItemUpcXref filtered by the UpcxQtyEachesPerUpc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByUpcxuom(string $UpcxUom) Return the first ChildItemUpcXref filtered by the UpcxUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByUpcxmstrcase(string $UpcxMstrCase) Return the first ChildItemUpcXref filtered by the UpcxMstrCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByUpcxlabel(string $UpcxLabel) Return the first ChildItemUpcXref filtered by the UpcxLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByUpcxamazon(string $UpcxAmazon) Return the first ChildItemUpcXref filtered by the UpcxAmazon column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemUpcXref filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemUpcXref filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemUpcXref requireOneByDummy(string $dummy) Return the first ChildItemUpcXref filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemUpcXref[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemUpcXref objects based on current ModelCriteria
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxcode(string $UpcxCode) Return ChildItemUpcXref objects filtered by the UpcxCode column
 * @method     ChildItemUpcXref[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemUpcXref objects filtered by the InitItemNbr column
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxprim(string $UpcxPrim) Return ChildItemUpcXref objects filtered by the UpcxPrim column
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxqtyeachesperupc(int $UpcxQtyEachesPerUpc) Return ChildItemUpcXref objects filtered by the UpcxQtyEachesPerUpc column
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxuom(string $UpcxUom) Return ChildItemUpcXref objects filtered by the UpcxUom column
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxmstrcase(string $UpcxMstrCase) Return ChildItemUpcXref objects filtered by the UpcxMstrCase column
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxlabel(string $UpcxLabel) Return ChildItemUpcXref objects filtered by the UpcxLabel column
 * @method     ChildItemUpcXref[]|ObjectCollection findByUpcxamazon(string $UpcxAmazon) Return ChildItemUpcXref objects filtered by the UpcxAmazon column
 * @method     ChildItemUpcXref[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemUpcXref objects filtered by the DateUpdtd column
 * @method     ChildItemUpcXref[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemUpcXref objects filtered by the TimeUpdtd column
 * @method     ChildItemUpcXref[]|ObjectCollection findByDummy(string $dummy) Return ChildItemUpcXref objects filtered by the dummy column
 * @method     ChildItemUpcXref[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemUpcXrefQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemUpcXrefQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemUpcXref', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemUpcXrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemUpcXrefQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemUpcXrefQuery) {
            return $criteria;
        }
        $query = new ChildItemUpcXrefQuery();
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
     * @return ChildItemUpcXref|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemUpcXrefTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemUpcXrefTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildItemUpcXref A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT UpcxCode, InitItemNbr, UpcxPrim, UpcxQtyEachesPerUpc, UpcxUom, UpcxMstrCase, UpcxLabel, UpcxAmazon, DateUpdtd, TimeUpdtd, dummy FROM upc_item_xref WHERE UpcxCode = :p0 AND InitItemNbr = :p1';
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
            /** @var ChildItemUpcXref $obj */
            $obj = new ChildItemUpcXref();
            $obj->hydrate($row);
            ItemUpcXrefTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildItemUpcXref|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemUpcXrefTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemUpcXrefTableMap::COL_UPCXCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemUpcXrefTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);
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
     * </code>
     *
     * @param     string $upcxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxcode($upcxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXCODE, $upcxcode, $comparison);
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
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the UpcxPrim column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxprim('fooValue');   // WHERE UpcxPrim = 'fooValue'
     * $query->filterByUpcxprim('%fooValue%', Criteria::LIKE); // WHERE UpcxPrim LIKE '%fooValue%'
     * </code>
     *
     * @param     string $upcxprim The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxprim($upcxprim = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxprim)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXPRIM, $upcxprim, $comparison);
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
     * @param     mixed $upcxqtyeachesperupc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxqtyeachesperupc($upcxqtyeachesperupc = null, $comparison = null)
    {
        if (is_array($upcxqtyeachesperupc)) {
            $useMinMax = false;
            if (isset($upcxqtyeachesperupc['min'])) {
                $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXQTYEACHESPERUPC, $upcxqtyeachesperupc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($upcxqtyeachesperupc['max'])) {
                $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXQTYEACHESPERUPC, $upcxqtyeachesperupc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXQTYEACHESPERUPC, $upcxqtyeachesperupc, $comparison);
    }

    /**
     * Filter the query on the UpcxUom column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxuom('fooValue');   // WHERE UpcxUom = 'fooValue'
     * $query->filterByUpcxuom('%fooValue%', Criteria::LIKE); // WHERE UpcxUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $upcxuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxuom($upcxuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXUOM, $upcxuom, $comparison);
    }

    /**
     * Filter the query on the UpcxMstrCase column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxmstrcase('fooValue');   // WHERE UpcxMstrCase = 'fooValue'
     * $query->filterByUpcxmstrcase('%fooValue%', Criteria::LIKE); // WHERE UpcxMstrCase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $upcxmstrcase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxmstrcase($upcxmstrcase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxmstrcase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXMSTRCASE, $upcxmstrcase, $comparison);
    }

    /**
     * Filter the query on the UpcxLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxlabel('fooValue');   // WHERE UpcxLabel = 'fooValue'
     * $query->filterByUpcxlabel('%fooValue%', Criteria::LIKE); // WHERE UpcxLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $upcxlabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxlabel($upcxlabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxlabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXLABEL, $upcxlabel, $comparison);
    }

    /**
     * Filter the query on the UpcxAmazon column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcxamazon('fooValue');   // WHERE UpcxAmazon = 'fooValue'
     * $query->filterByUpcxamazon('%fooValue%', Criteria::LIKE); // WHERE UpcxAmazon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $upcxamazon The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByUpcxamazon($upcxamazon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcxamazon)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_UPCXAMAZON, $upcxamazon, $comparison);
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
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemUpcXrefTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemUpcXref $itemUpcXref Object to remove from the list of results
     *
     * @return $this|ChildItemUpcXrefQuery The current query, for fluid interface
     */
    public function prune($itemUpcXref = null)
    {
        if ($itemUpcXref) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemUpcXrefTableMap::COL_UPCXCODE), $itemUpcXref->getUpcxcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemUpcXrefTableMap::COL_INITITEMNBR), $itemUpcXref->getInititemnbr(), Criteria::NOT_EQUAL);
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
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemUpcXrefTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemUpcXrefTableMap::clearInstancePool();
            ItemUpcXrefTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemUpcXrefTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemUpcXrefTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemUpcXrefTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemUpcXrefTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemUpcXrefQuery
