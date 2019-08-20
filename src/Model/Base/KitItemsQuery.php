<?php

namespace Base;

use \KitItems as ChildKitItems;
use \KitItemsQuery as ChildKitItemsQuery;
use \Exception;
use \PDO;
use Map\KitItemsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_kit_detail' table.
 *
 *
 *
 * @method     ChildKitItemsQuery orderByKtdtkey1($order = Criteria::ASC) Order by the KtdtKey1 column
 * @method     ChildKitItemsQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildKitItemsQuery orderByKtdtuom($order = Criteria::ASC) Order by the KtdtUom column
 * @method     ChildKitItemsQuery orderByKtdtusagrate($order = Criteria::ASC) Order by the KtdtUsagRate column
 * @method     ChildKitItemsQuery orderByKtdtvendsupply($order = Criteria::ASC) Order by the KtdtVendSupply column
 * @method     ChildKitItemsQuery orderByKtdtfreegoods($order = Criteria::ASC) Order by the KtdtFreeGoods column
 * @method     ChildKitItemsQuery orderByKtdtprntseq($order = Criteria::ASC) Order by the KtdtPrntSeq column
 * @method     ChildKitItemsQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildKitItemsQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildKitItemsQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildKitItemsQuery groupByKtdtkey1() Group by the KtdtKey1 column
 * @method     ChildKitItemsQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildKitItemsQuery groupByKtdtuom() Group by the KtdtUom column
 * @method     ChildKitItemsQuery groupByKtdtusagrate() Group by the KtdtUsagRate column
 * @method     ChildKitItemsQuery groupByKtdtvendsupply() Group by the KtdtVendSupply column
 * @method     ChildKitItemsQuery groupByKtdtfreegoods() Group by the KtdtFreeGoods column
 * @method     ChildKitItemsQuery groupByKtdtprntseq() Group by the KtdtPrntSeq column
 * @method     ChildKitItemsQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildKitItemsQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildKitItemsQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildKitItemsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildKitItemsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildKitItemsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildKitItemsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildKitItemsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildKitItemsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildKitItems findOne(ConnectionInterface $con = null) Return the first ChildKitItems matching the query
 * @method     ChildKitItems findOneOrCreate(ConnectionInterface $con = null) Return the first ChildKitItems matching the query, or a new ChildKitItems object populated from the query conditions when no match is found
 *
 * @method     ChildKitItems findOneByKtdtkey1(string $KtdtKey1) Return the first ChildKitItems filtered by the KtdtKey1 column
 * @method     ChildKitItems findOneByInititemnbr(string $InitItemNbr) Return the first ChildKitItems filtered by the InitItemNbr column
 * @method     ChildKitItems findOneByKtdtuom(string $KtdtUom) Return the first ChildKitItems filtered by the KtdtUom column
 * @method     ChildKitItems findOneByKtdtusagrate(string $KtdtUsagRate) Return the first ChildKitItems filtered by the KtdtUsagRate column
 * @method     ChildKitItems findOneByKtdtvendsupply(string $KtdtVendSupply) Return the first ChildKitItems filtered by the KtdtVendSupply column
 * @method     ChildKitItems findOneByKtdtfreegoods(string $KtdtFreeGoods) Return the first ChildKitItems filtered by the KtdtFreeGoods column
 * @method     ChildKitItems findOneByKtdtprntseq(int $KtdtPrntSeq) Return the first ChildKitItems filtered by the KtdtPrntSeq column
 * @method     ChildKitItems findOneByDateupdtd(string $DateUpdtd) Return the first ChildKitItems filtered by the DateUpdtd column
 * @method     ChildKitItems findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildKitItems filtered by the TimeUpdtd column
 * @method     ChildKitItems findOneByDummy(string $dummy) Return the first ChildKitItems filtered by the dummy column *

 * @method     ChildKitItems requirePk($key, ConnectionInterface $con = null) Return the ChildKitItems by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOne(ConnectionInterface $con = null) Return the first ChildKitItems matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildKitItems requireOneByKtdtkey1(string $KtdtKey1) Return the first ChildKitItems filtered by the KtdtKey1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByInititemnbr(string $InitItemNbr) Return the first ChildKitItems filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByKtdtuom(string $KtdtUom) Return the first ChildKitItems filtered by the KtdtUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByKtdtusagrate(string $KtdtUsagRate) Return the first ChildKitItems filtered by the KtdtUsagRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByKtdtvendsupply(string $KtdtVendSupply) Return the first ChildKitItems filtered by the KtdtVendSupply column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByKtdtfreegoods(string $KtdtFreeGoods) Return the first ChildKitItems filtered by the KtdtFreeGoods column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByKtdtprntseq(int $KtdtPrntSeq) Return the first ChildKitItems filtered by the KtdtPrntSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByDateupdtd(string $DateUpdtd) Return the first ChildKitItems filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildKitItems filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKitItems requireOneByDummy(string $dummy) Return the first ChildKitItems filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildKitItems[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildKitItems objects based on current ModelCriteria
 * @method     ChildKitItems[]|ObjectCollection findByKtdtkey1(string $KtdtKey1) Return ChildKitItems objects filtered by the KtdtKey1 column
 * @method     ChildKitItems[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildKitItems objects filtered by the InitItemNbr column
 * @method     ChildKitItems[]|ObjectCollection findByKtdtuom(string $KtdtUom) Return ChildKitItems objects filtered by the KtdtUom column
 * @method     ChildKitItems[]|ObjectCollection findByKtdtusagrate(string $KtdtUsagRate) Return ChildKitItems objects filtered by the KtdtUsagRate column
 * @method     ChildKitItems[]|ObjectCollection findByKtdtvendsupply(string $KtdtVendSupply) Return ChildKitItems objects filtered by the KtdtVendSupply column
 * @method     ChildKitItems[]|ObjectCollection findByKtdtfreegoods(string $KtdtFreeGoods) Return ChildKitItems objects filtered by the KtdtFreeGoods column
 * @method     ChildKitItems[]|ObjectCollection findByKtdtprntseq(int $KtdtPrntSeq) Return ChildKitItems objects filtered by the KtdtPrntSeq column
 * @method     ChildKitItems[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildKitItems objects filtered by the DateUpdtd column
 * @method     ChildKitItems[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildKitItems objects filtered by the TimeUpdtd column
 * @method     ChildKitItems[]|ObjectCollection findByDummy(string $dummy) Return ChildKitItems objects filtered by the dummy column
 * @method     ChildKitItems[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class KitItemsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\KitItemsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\KitItems', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildKitItemsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildKitItemsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildKitItemsQuery) {
            return $criteria;
        }
        $query = new ChildKitItemsQuery();
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
     * @return ChildKitItems|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(KitItemsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = KitItemsTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildKitItems A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT KtdtKey1, InitItemNbr, KtdtUom, KtdtUsagRate, KtdtVendSupply, KtdtFreeGoods, KtdtPrntSeq, DateUpdtd, TimeUpdtd, dummy FROM inv_kit_detail WHERE KtdtKey1 = :p0 AND InitItemNbr = :p1';
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
            /** @var ChildKitItems $obj */
            $obj = new ChildKitItems();
            $obj->hydrate($row);
            KitItemsTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildKitItems|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(KitItemsTableMap::COL_KTDTKEY1, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(KitItemsTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(KitItemsTableMap::COL_KTDTKEY1, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(KitItemsTableMap::COL_INITITEMNBR, $key[1], Criteria::EQUAL);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByKtdtkey1($ktdtkey1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtkey1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_KTDTKEY1, $ktdtkey1, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByKtdtuom($ktdtuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_KTDTUOM, $ktdtuom, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByKtdtusagrate($ktdtusagrate = null, $comparison = null)
    {
        if (is_array($ktdtusagrate)) {
            $useMinMax = false;
            if (isset($ktdtusagrate['min'])) {
                $this->addUsingAlias(KitItemsTableMap::COL_KTDTUSAGRATE, $ktdtusagrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ktdtusagrate['max'])) {
                $this->addUsingAlias(KitItemsTableMap::COL_KTDTUSAGRATE, $ktdtusagrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_KTDTUSAGRATE, $ktdtusagrate, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByKtdtvendsupply($ktdtvendsupply = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtvendsupply)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_KTDTVENDSUPPLY, $ktdtvendsupply, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByKtdtfreegoods($ktdtfreegoods = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ktdtfreegoods)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_KTDTFREEGOODS, $ktdtfreegoods, $comparison);
    }

    /**
     * Filter the query on the KtdtPrntSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByKtdtprntseq(1234); // WHERE KtdtPrntSeq = 1234
     * $query->filterByKtdtprntseq(array(12, 34)); // WHERE KtdtPrntSeq IN (12, 34)
     * $query->filterByKtdtprntseq(array('min' => 12)); // WHERE KtdtPrntSeq > 12
     * </code>
     *
     * @param     mixed $ktdtprntseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByKtdtprntseq($ktdtprntseq = null, $comparison = null)
    {
        if (is_array($ktdtprntseq)) {
            $useMinMax = false;
            if (isset($ktdtprntseq['min'])) {
                $this->addUsingAlias(KitItemsTableMap::COL_KTDTPRNTSEQ, $ktdtprntseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ktdtprntseq['max'])) {
                $this->addUsingAlias(KitItemsTableMap::COL_KTDTPRNTSEQ, $ktdtprntseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_KTDTPRNTSEQ, $ktdtprntseq, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KitItemsTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildKitItems $kitItems Object to remove from the list of results
     *
     * @return $this|ChildKitItemsQuery The current query, for fluid interface
     */
    public function prune($kitItems = null)
    {
        if ($kitItems) {
            $this->addCond('pruneCond0', $this->getAliasedColName(KitItemsTableMap::COL_KTDTKEY1), $kitItems->getKtdtkey1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(KitItemsTableMap::COL_INITITEMNBR), $kitItems->getInititemnbr(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(KitItemsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            KitItemsTableMap::clearInstancePool();
            KitItemsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(KitItemsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(KitItemsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            KitItemsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            KitItemsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // KitItemsQuery
