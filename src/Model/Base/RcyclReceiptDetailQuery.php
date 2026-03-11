<?php

namespace Base;

use \RcyclReceiptDetail as ChildRcyclReceiptDetail;
use \RcyclReceiptDetailQuery as ChildRcyclReceiptDetailQuery;
use \Exception;
use \PDO;
use Map\RcyclReceiptDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'rcycl_det' table.
 *
 *
 *
 * @method     ChildRcyclReceiptDetailQuery orderByRcyhdrcptnbr($order = Criteria::ASC) Order by the RcyhdRcptNbr column
 * @method     ChildRcyclReceiptDetailQuery orderByRcydtrcptline($order = Criteria::ASC) Order by the RcydtRcptLine column
 * @method     ChildRcyclReceiptDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildRcyclReceiptDetailQuery orderByIntbuomsale($order = Criteria::ASC) Order by the IntbUomSale column
 * @method     ChildRcyclReceiptDetailQuery orderByRcydtrcptqty($order = Criteria::ASC) Order by the RcydtRcptQty column
 * @method     ChildRcyclReceiptDetailQuery orderByRcydtstatus($order = Criteria::ASC) Order by the RcydtStatus column
 * @method     ChildRcyclReceiptDetailQuery orderByRcydtclosedby($order = Criteria::ASC) Order by the RcydtClosedBy column
 * @method     ChildRcyclReceiptDetailQuery orderByRcydtcloseddate($order = Criteria::ASC) Order by the RcydtClosedDate column
 * @method     ChildRcyclReceiptDetailQuery orderByRcydtclosedtime($order = Criteria::ASC) Order by the RcydtClosedTime column
 * @method     ChildRcyclReceiptDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildRcyclReceiptDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildRcyclReceiptDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildRcyclReceiptDetailQuery groupByRcyhdrcptnbr() Group by the RcyhdRcptNbr column
 * @method     ChildRcyclReceiptDetailQuery groupByRcydtrcptline() Group by the RcydtRcptLine column
 * @method     ChildRcyclReceiptDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildRcyclReceiptDetailQuery groupByIntbuomsale() Group by the IntbUomSale column
 * @method     ChildRcyclReceiptDetailQuery groupByRcydtrcptqty() Group by the RcydtRcptQty column
 * @method     ChildRcyclReceiptDetailQuery groupByRcydtstatus() Group by the RcydtStatus column
 * @method     ChildRcyclReceiptDetailQuery groupByRcydtclosedby() Group by the RcydtClosedBy column
 * @method     ChildRcyclReceiptDetailQuery groupByRcydtcloseddate() Group by the RcydtClosedDate column
 * @method     ChildRcyclReceiptDetailQuery groupByRcydtclosedtime() Group by the RcydtClosedTime column
 * @method     ChildRcyclReceiptDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildRcyclReceiptDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildRcyclReceiptDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRcyclReceiptDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRcyclReceiptDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRcyclReceiptDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRcyclReceiptDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinRcyclReceipt($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinRcyclReceipt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinRcyclReceipt($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclReceiptDetailQuery joinWithRcyclReceipt($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinWithRcyclReceipt() Adds a LEFT JOIN clause and with to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinWithRcyclReceipt() Adds a RIGHT JOIN clause and with to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinWithRcyclReceipt() Adds a INNER JOIN clause and with to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildRcyclReceiptDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinUnitofMeasureSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the UnitofMeasureSale relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinUnitofMeasureSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UnitofMeasureSale relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinUnitofMeasureSale($relationAlias = null) Adds a INNER JOIN clause to the query using the UnitofMeasureSale relation
 *
 * @method     ChildRcyclReceiptDetailQuery joinWithUnitofMeasureSale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UnitofMeasureSale relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinWithUnitofMeasureSale() Adds a LEFT JOIN clause and with to the query using the UnitofMeasureSale relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinWithUnitofMeasureSale() Adds a RIGHT JOIN clause and with to the query using the UnitofMeasureSale relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinWithUnitofMeasureSale() Adds a INNER JOIN clause and with to the query using the UnitofMeasureSale relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinRcyclReceiptLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclReceiptLot relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinRcyclReceiptLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclReceiptLot relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinRcyclReceiptLot($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclReceiptLot relation
 *
 * @method     ChildRcyclReceiptDetailQuery joinWithRcyclReceiptLot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclReceiptLot relation
 *
 * @method     ChildRcyclReceiptDetailQuery leftJoinWithRcyclReceiptLot() Adds a LEFT JOIN clause and with to the query using the RcyclReceiptLot relation
 * @method     ChildRcyclReceiptDetailQuery rightJoinWithRcyclReceiptLot() Adds a RIGHT JOIN clause and with to the query using the RcyclReceiptLot relation
 * @method     ChildRcyclReceiptDetailQuery innerJoinWithRcyclReceiptLot() Adds a INNER JOIN clause and with to the query using the RcyclReceiptLot relation
 *
 * @method     \RcyclReceiptQuery|\ItemMasterItemQuery|\UnitofMeasureSaleQuery|\RcyclReceiptLotQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildRcyclReceiptDetail findOne(ConnectionInterface $con = null) Return the first ChildRcyclReceiptDetail matching the query
 * @method     ChildRcyclReceiptDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRcyclReceiptDetail matching the query, or a new ChildRcyclReceiptDetail object populated from the query conditions when no match is found
 *
 * @method     ChildRcyclReceiptDetail findOneByRcyhdrcptnbr(int $RcyhdRcptNbr) Return the first ChildRcyclReceiptDetail filtered by the RcyhdRcptNbr column
 * @method     ChildRcyclReceiptDetail findOneByRcydtrcptline(int $RcydtRcptLine) Return the first ChildRcyclReceiptDetail filtered by the RcydtRcptLine column
 * @method     ChildRcyclReceiptDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildRcyclReceiptDetail filtered by the InitItemNbr column
 * @method     ChildRcyclReceiptDetail findOneByIntbuomsale(string $IntbUomSale) Return the first ChildRcyclReceiptDetail filtered by the IntbUomSale column
 * @method     ChildRcyclReceiptDetail findOneByRcydtrcptqty(string $RcydtRcptQty) Return the first ChildRcyclReceiptDetail filtered by the RcydtRcptQty column
 * @method     ChildRcyclReceiptDetail findOneByRcydtstatus(string $RcydtStatus) Return the first ChildRcyclReceiptDetail filtered by the RcydtStatus column
 * @method     ChildRcyclReceiptDetail findOneByRcydtclosedby(string $RcydtClosedBy) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedBy column
 * @method     ChildRcyclReceiptDetail findOneByRcydtcloseddate(string $RcydtClosedDate) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedDate column
 * @method     ChildRcyclReceiptDetail findOneByRcydtclosedtime(string $RcydtClosedTime) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedTime column
 * @method     ChildRcyclReceiptDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceiptDetail filtered by the DateUpdtd column
 * @method     ChildRcyclReceiptDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceiptDetail filtered by the TimeUpdtd column
 * @method     ChildRcyclReceiptDetail findOneByDummy(string $dummy) Return the first ChildRcyclReceiptDetail filtered by the dummy column *

 * @method     ChildRcyclReceiptDetail requirePk($key, ConnectionInterface $con = null) Return the ChildRcyclReceiptDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOne(ConnectionInterface $con = null) Return the first ChildRcyclReceiptDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceiptDetail requireOneByRcyhdrcptnbr(int $RcyhdRcptNbr) Return the first ChildRcyclReceiptDetail filtered by the RcyhdRcptNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcydtrcptline(int $RcydtRcptLine) Return the first ChildRcyclReceiptDetail filtered by the RcydtRcptLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildRcyclReceiptDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByIntbuomsale(string $IntbUomSale) Return the first ChildRcyclReceiptDetail filtered by the IntbUomSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcydtrcptqty(string $RcydtRcptQty) Return the first ChildRcyclReceiptDetail filtered by the RcydtRcptQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcydtstatus(string $RcydtStatus) Return the first ChildRcyclReceiptDetail filtered by the RcydtStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcydtclosedby(string $RcydtClosedBy) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcydtcloseddate(string $RcydtClosedDate) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcydtclosedtime(string $RcydtClosedTime) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceiptDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceiptDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByDummy(string $dummy) Return the first ChildRcyclReceiptDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildRcyclReceiptDetail objects based on current ModelCriteria
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcyhdrcptnbr(int $RcyhdRcptNbr) Return ChildRcyclReceiptDetail objects filtered by the RcyhdRcptNbr column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcydtrcptline(int $RcydtRcptLine) Return ChildRcyclReceiptDetail objects filtered by the RcydtRcptLine column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildRcyclReceiptDetail objects filtered by the InitItemNbr column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByIntbuomsale(string $IntbUomSale) Return ChildRcyclReceiptDetail objects filtered by the IntbUomSale column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcydtrcptqty(string $RcydtRcptQty) Return ChildRcyclReceiptDetail objects filtered by the RcydtRcptQty column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcydtstatus(string $RcydtStatus) Return ChildRcyclReceiptDetail objects filtered by the RcydtStatus column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcydtclosedby(string $RcydtClosedBy) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedBy column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcydtcloseddate(string $RcydtClosedDate) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedDate column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByRcydtclosedtime(string $RcydtClosedTime) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedTime column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildRcyclReceiptDetail objects filtered by the DateUpdtd column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildRcyclReceiptDetail objects filtered by the TimeUpdtd column
 * @method     ChildRcyclReceiptDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildRcyclReceiptDetail objects filtered by the dummy column
 * @method     ChildRcyclReceiptDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RcyclReceiptDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RcyclReceiptDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\RcyclReceiptDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRcyclReceiptDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRcyclReceiptDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRcyclReceiptDetailQuery) {
            return $criteria;
        }
        $query = new ChildRcyclReceiptDetailQuery();
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
     * @param array[$RcyhdRcptNbr, $RcydtRcptLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildRcyclReceiptDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RcyclReceiptDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildRcyclReceiptDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT RcyhdRcptNbr, RcydtRcptLine, InitItemNbr, IntbUomSale, RcydtRcptQty, RcydtStatus, RcydtClosedBy, RcydtClosedDate, RcydtClosedTime, DateUpdtd, TimeUpdtd, dummy FROM rcycl_det WHERE RcyhdRcptNbr = :p0 AND RcydtRcptLine = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildRcyclReceiptDetail $obj */
            $obj = new ChildRcyclReceiptDetail();
            $obj->hydrate($row);
            RcyclReceiptDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildRcyclReceiptDetail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the RcyhdRcptNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdrcptnbr(1234); // WHERE RcyhdRcptNbr = 1234
     * $query->filterByRcyhdrcptnbr(array(12, 34)); // WHERE RcyhdRcptNbr IN (12, 34)
     * $query->filterByRcyhdrcptnbr(array('min' => 12)); // WHERE RcyhdRcptNbr > 12
     * </code>
     *
     * @see       filterByRcyclReceipt()
     *
     * @param     mixed $rcyhdrcptnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcyhdrcptnbr($rcyhdrcptnbr = null, $comparison = null)
    {
        if (is_array($rcyhdrcptnbr)) {
            $useMinMax = false;
            if (isset($rcyhdrcptnbr['min'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $rcyhdrcptnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcyhdrcptnbr['max'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $rcyhdrcptnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $rcyhdrcptnbr, $comparison);
    }

    /**
     * Filter the query on the RcydtRcptLine column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtrcptline(1234); // WHERE RcydtRcptLine = 1234
     * $query->filterByRcydtrcptline(array(12, 34)); // WHERE RcydtRcptLine IN (12, 34)
     * $query->filterByRcydtrcptline(array('min' => 12)); // WHERE RcydtRcptLine > 12
     * </code>
     *
     * @param     mixed $rcydtrcptline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcydtrcptline($rcydtrcptline = null, $comparison = null)
    {
        if (is_array($rcydtrcptline)) {
            $useMinMax = false;
            if (isset($rcydtrcptline['min'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcydtrcptline['max'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline, $comparison);
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);
    }

    /**
     * Filter the query on the RcydtRcptQty column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtrcptqty(1234); // WHERE RcydtRcptQty = 1234
     * $query->filterByRcydtrcptqty(array(12, 34)); // WHERE RcydtRcptQty IN (12, 34)
     * $query->filterByRcydtrcptqty(array('min' => 12)); // WHERE RcydtRcptQty > 12
     * </code>
     *
     * @param     mixed $rcydtrcptqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcydtrcptqty($rcydtrcptqty = null, $comparison = null)
    {
        if (is_array($rcydtrcptqty)) {
            $useMinMax = false;
            if (isset($rcydtrcptqty['min'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY, $rcydtrcptqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcydtrcptqty['max'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY, $rcydtrcptqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY, $rcydtrcptqty, $comparison);
    }

    /**
     * Filter the query on the RcydtStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtstatus('fooValue');   // WHERE RcydtStatus = 'fooValue'
     * $query->filterByRcydtstatus('%fooValue%', Criteria::LIKE); // WHERE RcydtStatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcydtstatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcydtstatus($rcydtstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtstatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTSTATUS, $rcydtstatus, $comparison);
    }

    /**
     * Filter the query on the RcydtClosedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtclosedby('fooValue');   // WHERE RcydtClosedBy = 'fooValue'
     * $query->filterByRcydtclosedby('%fooValue%', Criteria::LIKE); // WHERE RcydtClosedBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcydtclosedby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcydtclosedby($rcydtclosedby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtclosedby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY, $rcydtclosedby, $comparison);
    }

    /**
     * Filter the query on the RcydtClosedDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtcloseddate('fooValue');   // WHERE RcydtClosedDate = 'fooValue'
     * $query->filterByRcydtcloseddate('%fooValue%', Criteria::LIKE); // WHERE RcydtClosedDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcydtcloseddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcydtcloseddate($rcydtcloseddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtcloseddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE, $rcydtcloseddate, $comparison);
    }

    /**
     * Filter the query on the RcydtClosedTime column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtclosedtime('fooValue');   // WHERE RcydtClosedTime = 'fooValue'
     * $query->filterByRcydtclosedtime('%fooValue%', Criteria::LIKE); // WHERE RcydtClosedTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcydtclosedtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcydtclosedtime($rcydtclosedtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtclosedtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME, $rcydtclosedtime, $comparison);
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \RcyclReceipt object
     *
     * @param \RcyclReceipt|ObjectCollection $rcyclReceipt The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcyclReceipt($rcyclReceipt, $comparison = null)
    {
        if ($rcyclReceipt instanceof \RcyclReceipt) {
            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $rcyclReceipt->getRcyhdrcptnbr(), $comparison);
        } elseif ($rcyclReceipt instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $rcyclReceipt->toKeyValue('PrimaryKey', 'Rcyhdrcptnbr'), $comparison);
        } else {
            throw new PropelException('filterByRcyclReceipt() only accepts arguments of type \RcyclReceipt or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceipt relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function joinRcyclReceipt($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RcyclReceipt');

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
            $this->addJoinObject($join, 'RcyclReceipt');
        }

        return $this;
    }

    /**
     * Use the RcyclReceipt relation RcyclReceipt object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RcyclReceiptQuery A secondary query class using the current class as primary query
     */
    public function useRcyclReceiptQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRcyclReceipt($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RcyclReceipt', '\RcyclReceiptQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
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
     * Filter the query by a related \UnitofMeasureSale object
     *
     * @param \UnitofMeasureSale|ObjectCollection $unitofMeasureSale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByUnitofMeasureSale($unitofMeasureSale, $comparison = null)
    {
        if ($unitofMeasureSale instanceof \UnitofMeasureSale) {
            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $unitofMeasureSale->getIntbuomsale(), $comparison);
        } elseif ($unitofMeasureSale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $unitofMeasureSale->toKeyValue('PrimaryKey', 'Intbuomsale'), $comparison);
        } else {
            throw new PropelException('filterByUnitofMeasureSale() only accepts arguments of type \UnitofMeasureSale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasureSale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function joinUnitofMeasureSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UnitofMeasureSale');

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
            $this->addJoinObject($join, 'UnitofMeasureSale');
        }

        return $this;
    }

    /**
     * Use the UnitofMeasureSale relation UnitofMeasureSale object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UnitofMeasureSaleQuery A secondary query class using the current class as primary query
     */
    public function useUnitofMeasureSaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUnitofMeasureSale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UnitofMeasureSale', '\UnitofMeasureSaleQuery');
    }

    /**
     * Filter the query by a related \RcyclReceiptLot object
     *
     * @param \RcyclReceiptLot|ObjectCollection $rcyclReceiptLot the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function filterByRcyclReceiptLot($rcyclReceiptLot, $comparison = null)
    {
        if ($rcyclReceiptLot instanceof \RcyclReceiptLot) {
            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR, $rcyclReceiptLot->getRcyhdrcptnbr(), $comparison)
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $rcyclReceiptLot->getRcydtrcptline(), $comparison);
        } else {
            throw new PropelException('filterByRcyclReceiptLot() only accepts arguments of type \RcyclReceiptLot');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceiptLot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function joinRcyclReceiptLot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RcyclReceiptLot');

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
            $this->addJoinObject($join, 'RcyclReceiptLot');
        }

        return $this;
    }

    /**
     * Use the RcyclReceiptLot relation RcyclReceiptLot object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RcyclReceiptLotQuery A secondary query class using the current class as primary query
     */
    public function useRcyclReceiptLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRcyclReceiptLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RcyclReceiptLot', '\RcyclReceiptLotQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildRcyclReceiptDetail $rcyclReceiptDetail Object to remove from the list of results
     *
     * @return $this|ChildRcyclReceiptDetailQuery The current query, for fluid interface
     */
    public function prune($rcyclReceiptDetail = null)
    {
        if ($rcyclReceiptDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RcyclReceiptDetailTableMap::COL_RCYHDRCPTNBR), $rcyclReceiptDetail->getRcyhdrcptnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE), $rcyclReceiptDetail->getRcydtrcptline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the rcycl_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RcyclReceiptDetailTableMap::clearInstancePool();
            RcyclReceiptDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RcyclReceiptDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RcyclReceiptDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RcyclReceiptDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RcyclReceiptDetailQuery
