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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `rcycl_det` table.
 *
 * @method     ChildRcyclReceiptDetailQuery orderByRcyhdrcptbulk($order = Criteria::ASC) Order by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptDetailQuery orderByRcyhdcntrlnbr($order = Criteria::ASC) Order by the RcyhdCntrlNbr column
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
 * @method     ChildRcyclReceiptDetailQuery groupByRcyhdrcptbulk() Group by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptDetailQuery groupByRcyhdcntrlnbr() Group by the RcyhdCntrlNbr column
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
 * @method     ChildRcyclReceiptDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildRcyclReceiptDetail matching the query
 * @method     ChildRcyclReceiptDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildRcyclReceiptDetail matching the query, or a new ChildRcyclReceiptDetail object populated from the query conditions when no match is found
 *
 * @method     ChildRcyclReceiptDetail|null findOneByRcyhdrcptbulk(string $RcyhdRcptBulk) Return the first ChildRcyclReceiptDetail filtered by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptDetail|null findOneByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return the first ChildRcyclReceiptDetail filtered by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptDetail|null findOneByRcydtrcptline(int $RcydtRcptLine) Return the first ChildRcyclReceiptDetail filtered by the RcydtRcptLine column
 * @method     ChildRcyclReceiptDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildRcyclReceiptDetail filtered by the InitItemNbr column
 * @method     ChildRcyclReceiptDetail|null findOneByIntbuomsale(string $IntbUomSale) Return the first ChildRcyclReceiptDetail filtered by the IntbUomSale column
 * @method     ChildRcyclReceiptDetail|null findOneByRcydtrcptqty(string $RcydtRcptQty) Return the first ChildRcyclReceiptDetail filtered by the RcydtRcptQty column
 * @method     ChildRcyclReceiptDetail|null findOneByRcydtstatus(string $RcydtStatus) Return the first ChildRcyclReceiptDetail filtered by the RcydtStatus column
 * @method     ChildRcyclReceiptDetail|null findOneByRcydtclosedby(string $RcydtClosedBy) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedBy column
 * @method     ChildRcyclReceiptDetail|null findOneByRcydtcloseddate(string $RcydtClosedDate) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedDate column
 * @method     ChildRcyclReceiptDetail|null findOneByRcydtclosedtime(string $RcydtClosedTime) Return the first ChildRcyclReceiptDetail filtered by the RcydtClosedTime column
 * @method     ChildRcyclReceiptDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceiptDetail filtered by the DateUpdtd column
 * @method     ChildRcyclReceiptDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceiptDetail filtered by the TimeUpdtd column
 * @method     ChildRcyclReceiptDetail|null findOneByDummy(string $dummy) Return the first ChildRcyclReceiptDetail filtered by the dummy column
 *
 * @method     ChildRcyclReceiptDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildRcyclReceiptDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOne(?ConnectionInterface $con = null) Return the first ChildRcyclReceiptDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceiptDetail requireOneByRcyhdrcptbulk(string $RcyhdRcptBulk) Return the first ChildRcyclReceiptDetail filtered by the RcyhdRcptBulk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptDetail requireOneByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return the first ChildRcyclReceiptDetail filtered by the RcyhdCntrlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildRcyclReceiptDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildRcyclReceiptDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> find(?ConnectionInterface $con = null) Return ChildRcyclReceiptDetail objects based on current ModelCriteria
 *
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcyhdrcptbulk(string|array<string> $RcyhdRcptBulk) Return ChildRcyclReceiptDetail objects filtered by the RcyhdRcptBulk column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcyhdrcptbulk(string|array<string> $RcyhdRcptBulk) Return ChildRcyclReceiptDetail objects filtered by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcyhdcntrlnbr(int|array<int> $RcyhdCntrlNbr) Return ChildRcyclReceiptDetail objects filtered by the RcyhdCntrlNbr column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcyhdcntrlnbr(int|array<int> $RcyhdCntrlNbr) Return ChildRcyclReceiptDetail objects filtered by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcydtrcptline(int|array<int> $RcydtRcptLine) Return ChildRcyclReceiptDetail objects filtered by the RcydtRcptLine column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcydtrcptline(int|array<int> $RcydtRcptLine) Return ChildRcyclReceiptDetail objects filtered by the RcydtRcptLine column
 * @method     ChildRcyclReceiptDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildRcyclReceiptDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildRcyclReceiptDetail objects filtered by the InitItemNbr column
 * @method     ChildRcyclReceiptDetail[]|Collection findByIntbuomsale(string|array<string> $IntbUomSale) Return ChildRcyclReceiptDetail objects filtered by the IntbUomSale column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByIntbuomsale(string|array<string> $IntbUomSale) Return ChildRcyclReceiptDetail objects filtered by the IntbUomSale column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcydtrcptqty(string|array<string> $RcydtRcptQty) Return ChildRcyclReceiptDetail objects filtered by the RcydtRcptQty column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcydtrcptqty(string|array<string> $RcydtRcptQty) Return ChildRcyclReceiptDetail objects filtered by the RcydtRcptQty column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcydtstatus(string|array<string> $RcydtStatus) Return ChildRcyclReceiptDetail objects filtered by the RcydtStatus column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcydtstatus(string|array<string> $RcydtStatus) Return ChildRcyclReceiptDetail objects filtered by the RcydtStatus column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcydtclosedby(string|array<string> $RcydtClosedBy) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedBy column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcydtclosedby(string|array<string> $RcydtClosedBy) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedBy column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcydtcloseddate(string|array<string> $RcydtClosedDate) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedDate column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcydtcloseddate(string|array<string> $RcydtClosedDate) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedDate column
 * @method     ChildRcyclReceiptDetail[]|Collection findByRcydtclosedtime(string|array<string> $RcydtClosedTime) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedTime column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByRcydtclosedtime(string|array<string> $RcydtClosedTime) Return ChildRcyclReceiptDetail objects filtered by the RcydtClosedTime column
 * @method     ChildRcyclReceiptDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildRcyclReceiptDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildRcyclReceiptDetail objects filtered by the DateUpdtd column
 * @method     ChildRcyclReceiptDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildRcyclReceiptDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildRcyclReceiptDetail objects filtered by the TimeUpdtd column
 * @method     ChildRcyclReceiptDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildRcyclReceiptDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildRcyclReceiptDetail> findByDummy(string|array<string> $dummy) Return ChildRcyclReceiptDetail objects filtered by the dummy column
 *
 * @method     ChildRcyclReceiptDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildRcyclReceiptDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class RcyclReceiptDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RcyclReceiptDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\RcyclReceiptDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRcyclReceiptDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRcyclReceiptDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$RcyhdRcptBulk, $RcyhdCntrlNbr, $RcydtRcptLine, $InitItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildRcyclReceiptDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
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

        if ((null !== ($obj = RcyclReceiptDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildRcyclReceiptDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT RcyhdRcptBulk, RcyhdCntrlNbr, RcydtRcptLine, InitItemNbr, IntbUomSale, RcydtRcptQty, RcydtStatus, RcydtClosedBy, RcydtClosedDate, RcydtClosedTime, DateUpdtd, TimeUpdtd, dummy FROM rcycl_det WHERE RcyhdRcptBulk = :p0 AND RcyhdCntrlNbr = :p1 AND RcydtRcptLine = :p2 AND InitItemNbr = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
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
            RcyclReceiptDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the RcyhdRcptBulk column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdrcptbulk('fooValue');   // WHERE RcyhdRcptBulk = 'fooValue'
     * $query->filterByRcyhdrcptbulk('%fooValue%', Criteria::LIKE); // WHERE RcyhdRcptBulk LIKE '%fooValue%'
     * $query->filterByRcyhdrcptbulk(['foo', 'bar']); // WHERE RcyhdRcptBulk IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rcyhdrcptbulk The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcyhdrcptbulk($rcyhdrcptbulk = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdrcptbulk)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $rcyhdrcptbulk, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RcyhdCntrlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByRcyhdcntrlnbr(1234); // WHERE RcyhdCntrlNbr = 1234
     * $query->filterByRcyhdcntrlnbr(array(12, 34)); // WHERE RcyhdCntrlNbr IN (12, 34)
     * $query->filterByRcyhdcntrlnbr(array('min' => 12)); // WHERE RcyhdCntrlNbr > 12
     * </code>
     *
     * @see       filterByRcyclReceipt()
     *
     * @param mixed $rcyhdcntrlnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcyhdcntrlnbr($rcyhdcntrlnbr = null, ?string $comparison = null)
    {
        if (is_array($rcyhdcntrlnbr)) {
            $useMinMax = false;
            if (isset($rcyhdcntrlnbr['min'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcyhdcntrlnbr['max'])) {
                $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr, $comparison);

        return $this;
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
     * @param mixed $rcydtrcptline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcydtrcptline($rcydtrcptline = null, ?string $comparison = null)
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

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline, $comparison);

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

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomSale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomsale('fooValue');   // WHERE IntbUomSale = 'fooValue'
     * $query->filterByIntbuomsale('%fooValue%', Criteria::LIKE); // WHERE IntbUomSale LIKE '%fooValue%'
     * $query->filterByIntbuomsale(['foo', 'bar']); // WHERE IntbUomSale IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuomsale The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);

        return $this;
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
     * @param mixed $rcydtrcptqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcydtrcptqty($rcydtrcptqty = null, ?string $comparison = null)
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

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTQTY, $rcydtrcptqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RcydtStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtstatus('fooValue');   // WHERE RcydtStatus = 'fooValue'
     * $query->filterByRcydtstatus('%fooValue%', Criteria::LIKE); // WHERE RcydtStatus LIKE '%fooValue%'
     * $query->filterByRcydtstatus(['foo', 'bar']); // WHERE RcydtStatus IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rcydtstatus The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcydtstatus($rcydtstatus = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtstatus)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTSTATUS, $rcydtstatus, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RcydtClosedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtclosedby('fooValue');   // WHERE RcydtClosedBy = 'fooValue'
     * $query->filterByRcydtclosedby('%fooValue%', Criteria::LIKE); // WHERE RcydtClosedBy LIKE '%fooValue%'
     * $query->filterByRcydtclosedby(['foo', 'bar']); // WHERE RcydtClosedBy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rcydtclosedby The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcydtclosedby($rcydtclosedby = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtclosedby)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDBY, $rcydtclosedby, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RcydtClosedDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtcloseddate('fooValue');   // WHERE RcydtClosedDate = 'fooValue'
     * $query->filterByRcydtcloseddate('%fooValue%', Criteria::LIKE); // WHERE RcydtClosedDate LIKE '%fooValue%'
     * $query->filterByRcydtcloseddate(['foo', 'bar']); // WHERE RcydtClosedDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rcydtcloseddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcydtcloseddate($rcydtcloseddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtcloseddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDDATE, $rcydtcloseddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RcydtClosedTime column
     *
     * Example usage:
     * <code>
     * $query->filterByRcydtclosedtime('fooValue');   // WHERE RcydtClosedTime = 'fooValue'
     * $query->filterByRcydtclosedtime('%fooValue%', Criteria::LIKE); // WHERE RcydtClosedTime LIKE '%fooValue%'
     * $query->filterByRcydtclosedtime(['foo', 'bar']); // WHERE RcydtClosedTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rcydtclosedtime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcydtclosedtime($rcydtclosedtime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcydtclosedtime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTCLOSEDTIME, $rcydtclosedtime, $comparison);

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

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(RcyclReceiptDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \RcyclReceipt object
     *
     * @param \RcyclReceipt $rcyclReceipt The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcyclReceipt($rcyclReceipt, ?string $comparison = null)
    {
        if ($rcyclReceipt instanceof \RcyclReceipt) {
            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $rcyclReceipt->getRcyhdcntrlnbr(), $comparison)
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $rcyclReceipt->getRcyhdrcptbulk(), $comparison);
        } else {
            throw new PropelException('filterByRcyclReceipt() only accepts arguments of type \RcyclReceipt');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceipt relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinRcyclReceipt(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the RcyclReceipt relation RcyclReceipt object
     *
     * @param callable(\RcyclReceiptQuery):\RcyclReceiptQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withRcyclReceiptQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useRcyclReceiptQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to RcyclReceipt table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \RcyclReceiptQuery The inner query object of the EXISTS statement
     */
    public function useRcyclReceiptExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \RcyclReceiptQuery */
        $q = $this->useExistsQuery('RcyclReceipt', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to RcyclReceipt table for a NOT EXISTS query.
     *
     * @see useRcyclReceiptExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \RcyclReceiptQuery The inner query object of the NOT EXISTS statement
     */
    public function useRcyclReceiptNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \RcyclReceiptQuery */
        $q = $this->useExistsQuery('RcyclReceipt', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to RcyclReceipt table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \RcyclReceiptQuery The inner query object of the IN statement
     */
    public function useInRcyclReceiptQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \RcyclReceiptQuery */
        $q = $this->useInQuery('RcyclReceipt', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to RcyclReceipt table for a NOT IN query.
     *
     * @see useRcyclReceiptInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \RcyclReceiptQuery The inner query object of the NOT IN statement
     */
    public function useNotInRcyclReceiptQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \RcyclReceiptQuery */
        $q = $this->useInQuery('RcyclReceipt', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Filter the query by a related \UnitofMeasureSale object
     *
     * @param \UnitofMeasureSale|ObjectCollection $unitofMeasureSale The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUnitofMeasureSale($unitofMeasureSale, ?string $comparison = null)
    {
        if ($unitofMeasureSale instanceof \UnitofMeasureSale) {
            return $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $unitofMeasureSale->getIntbuomsale(), $comparison);
        } elseif ($unitofMeasureSale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INTBUOMSALE, $unitofMeasureSale->toKeyValue('PrimaryKey', 'Intbuomsale'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByUnitofMeasureSale() only accepts arguments of type \UnitofMeasureSale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasureSale relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinUnitofMeasureSale(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the UnitofMeasureSale relation UnitofMeasureSale object
     *
     * @param callable(\UnitofMeasureSaleQuery):\UnitofMeasureSaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withUnitofMeasureSaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useUnitofMeasureSaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to UnitofMeasureSale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the EXISTS statement
     */
    public function useUnitofMeasureSaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useExistsQuery('UnitofMeasureSale', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to UnitofMeasureSale table for a NOT EXISTS query.
     *
     * @see useUnitofMeasureSaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useUnitofMeasureSaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useExistsQuery('UnitofMeasureSale', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to UnitofMeasureSale table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the IN statement
     */
    public function useInUnitofMeasureSaleQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useInQuery('UnitofMeasureSale', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to UnitofMeasureSale table for a NOT IN query.
     *
     * @see useUnitofMeasureSaleInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the NOT IN statement
     */
    public function useNotInUnitofMeasureSaleQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useInQuery('UnitofMeasureSale', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \RcyclReceiptLot object
     *
     * @param \RcyclReceiptLot|ObjectCollection $rcyclReceiptLot the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRcyclReceiptLot($rcyclReceiptLot, ?string $comparison = null)
    {
        if ($rcyclReceiptLot instanceof \RcyclReceiptLot) {
            $this
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR, $rcyclReceiptLot->getRcyhdcntrlnbr(), $comparison)
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK, $rcyclReceiptLot->getRcyhdrcptbulk(), $comparison)
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE, $rcyclReceiptLot->getRcydtrcptline(), $comparison)
                ->addUsingAlias(RcyclReceiptDetailTableMap::COL_INITITEMNBR, $rcyclReceiptLot->getInititemnbr(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByRcyclReceiptLot() only accepts arguments of type \RcyclReceiptLot');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceiptLot relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinRcyclReceiptLot(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the RcyclReceiptLot relation RcyclReceiptLot object
     *
     * @param callable(\RcyclReceiptLotQuery):\RcyclReceiptLotQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withRcyclReceiptLotQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useRcyclReceiptLotQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to RcyclReceiptLot table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \RcyclReceiptLotQuery The inner query object of the EXISTS statement
     */
    public function useRcyclReceiptLotExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \RcyclReceiptLotQuery */
        $q = $this->useExistsQuery('RcyclReceiptLot', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to RcyclReceiptLot table for a NOT EXISTS query.
     *
     * @see useRcyclReceiptLotExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \RcyclReceiptLotQuery The inner query object of the NOT EXISTS statement
     */
    public function useRcyclReceiptLotNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \RcyclReceiptLotQuery */
        $q = $this->useExistsQuery('RcyclReceiptLot', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to RcyclReceiptLot table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \RcyclReceiptLotQuery The inner query object of the IN statement
     */
    public function useInRcyclReceiptLotQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \RcyclReceiptLotQuery */
        $q = $this->useInQuery('RcyclReceiptLot', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to RcyclReceiptLot table for a NOT IN query.
     *
     * @see useRcyclReceiptLotInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \RcyclReceiptLotQuery The inner query object of the NOT IN statement
     */
    public function useNotInRcyclReceiptLotQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \RcyclReceiptLotQuery */
        $q = $this->useInQuery('RcyclReceiptLot', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildRcyclReceiptDetail $rcyclReceiptDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($rcyclReceiptDetail = null)
    {
        if ($rcyclReceiptDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RcyclReceiptDetailTableMap::COL_RCYHDRCPTBULK), $rcyclReceiptDetail->getRcyhdrcptbulk(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RcyclReceiptDetailTableMap::COL_RCYHDCNTRLNBR), $rcyclReceiptDetail->getRcyhdcntrlnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(RcyclReceiptDetailTableMap::COL_RCYDTRCPTLINE), $rcyclReceiptDetail->getRcydtrcptline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(RcyclReceiptDetailTableMap::COL_INITITEMNBR), $rcyclReceiptDetail->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the rcycl_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
