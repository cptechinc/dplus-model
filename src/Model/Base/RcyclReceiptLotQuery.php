<?php

namespace Base;

use \RcyclReceiptLot as ChildRcyclReceiptLot;
use \RcyclReceiptLotQuery as ChildRcyclReceiptLotQuery;
use \Exception;
use \PDO;
use Map\RcyclReceiptLotTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'rcycl_lot_det' table.
 *
 *
 *
 * @method     ChildRcyclReceiptLotQuery orderByRcyhdrcptbulk($order = Criteria::ASC) Order by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptLotQuery orderByRcyhdcntrlnbr($order = Criteria::ASC) Order by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptLotQuery orderByRcydtrcptline($order = Criteria::ASC) Order by the RcydtRcptLine column
 * @method     ChildRcyclReceiptLotQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdwhse($order = Criteria::ASC) Order by the RcysdWhse column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdlotnbr($order = Criteria::ASC) Order by the RcysdLotNbr column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdbin($order = Criteria::ASC) Order by the RcysdBin column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdlotqty($order = Criteria::ASC) Order by the RcysdLotQty column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdlotdate($order = Criteria::ASC) Order by the RcysdLotDate column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdlotref($order = Criteria::ASC) Order by the RcysdLotRef column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdstatus($order = Criteria::ASC) Order by the RcysdStatus column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdclosedby($order = Criteria::ASC) Order by the RcysdClosedBy column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdcloseddate($order = Criteria::ASC) Order by the RcysdClosedDate column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdclosedtime($order = Criteria::ASC) Order by the RcysdClosedTime column
 * @method     ChildRcyclReceiptLotQuery orderByRcysdtarewght($order = Criteria::ASC) Order by the RcysdTareWght column
 * @method     ChildRcyclReceiptLotQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildRcyclReceiptLotQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 *
 * @method     ChildRcyclReceiptLotQuery groupByRcyhdrcptbulk() Group by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptLotQuery groupByRcyhdcntrlnbr() Group by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptLotQuery groupByRcydtrcptline() Group by the RcydtRcptLine column
 * @method     ChildRcyclReceiptLotQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdwhse() Group by the RcysdWhse column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdlotnbr() Group by the RcysdLotNbr column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdbin() Group by the RcysdBin column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdlotqty() Group by the RcysdLotQty column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdlotdate() Group by the RcysdLotDate column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdlotref() Group by the RcysdLotRef column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdstatus() Group by the RcysdStatus column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdclosedby() Group by the RcysdClosedBy column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdcloseddate() Group by the RcysdClosedDate column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdclosedtime() Group by the RcysdClosedTime column
 * @method     ChildRcyclReceiptLotQuery groupByRcysdtarewght() Group by the RcysdTareWght column
 * @method     ChildRcyclReceiptLotQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildRcyclReceiptLotQuery groupByTimeupdtd() Group by the TimeUpdtd column
 *
 * @method     ChildRcyclReceiptLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildRcyclReceiptLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildRcyclReceiptLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildRcyclReceiptLotQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildRcyclReceiptLotQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinRcyclReceiptDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptLotQuery rightJoinRcyclReceiptDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptLotQuery innerJoinRcyclReceiptDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclReceiptDetail relation
 *
 * @method     ChildRcyclReceiptLotQuery joinWithRcyclReceiptDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclReceiptDetail relation
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinWithRcyclReceiptDetail() Adds a LEFT JOIN clause and with to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptLotQuery rightJoinWithRcyclReceiptDetail() Adds a RIGHT JOIN clause and with to the query using the RcyclReceiptDetail relation
 * @method     ChildRcyclReceiptLotQuery innerJoinWithRcyclReceiptDetail() Adds a INNER JOIN clause and with to the query using the RcyclReceiptDetail relation
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptLotQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptLotQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildRcyclReceiptLotQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptLotQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildRcyclReceiptLotQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinRcyclReceipt($relationAlias = null) Adds a LEFT JOIN clause to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptLotQuery rightJoinRcyclReceipt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptLotQuery innerJoinRcyclReceipt($relationAlias = null) Adds a INNER JOIN clause to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclReceiptLotQuery joinWithRcyclReceipt($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the RcyclReceipt relation
 *
 * @method     ChildRcyclReceiptLotQuery leftJoinWithRcyclReceipt() Adds a LEFT JOIN clause and with to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptLotQuery rightJoinWithRcyclReceipt() Adds a RIGHT JOIN clause and with to the query using the RcyclReceipt relation
 * @method     ChildRcyclReceiptLotQuery innerJoinWithRcyclReceipt() Adds a INNER JOIN clause and with to the query using the RcyclReceipt relation
 *
 * @method     \RcyclReceiptDetailQuery|\ItemMasterItemQuery|\RcyclReceiptQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildRcyclReceiptLot findOne(ConnectionInterface $con = null) Return the first ChildRcyclReceiptLot matching the query
 * @method     ChildRcyclReceiptLot findOneOrCreate(ConnectionInterface $con = null) Return the first ChildRcyclReceiptLot matching the query, or a new ChildRcyclReceiptLot object populated from the query conditions when no match is found
 *
 * @method     ChildRcyclReceiptLot findOneByRcyhdrcptbulk(string $RcyhdRcptBulk) Return the first ChildRcyclReceiptLot filtered by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptLot findOneByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return the first ChildRcyclReceiptLot filtered by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptLot findOneByRcydtrcptline(int $RcydtRcptLine) Return the first ChildRcyclReceiptLot filtered by the RcydtRcptLine column
 * @method     ChildRcyclReceiptLot findOneByInititemnbr(string $InitItemNbr) Return the first ChildRcyclReceiptLot filtered by the InitItemNbr column
 * @method     ChildRcyclReceiptLot findOneByRcysdwhse(string $RcysdWhse) Return the first ChildRcyclReceiptLot filtered by the RcysdWhse column
 * @method     ChildRcyclReceiptLot findOneByRcysdlotnbr(string $RcysdLotNbr) Return the first ChildRcyclReceiptLot filtered by the RcysdLotNbr column
 * @method     ChildRcyclReceiptLot findOneByRcysdbin(string $RcysdBin) Return the first ChildRcyclReceiptLot filtered by the RcysdBin column
 * @method     ChildRcyclReceiptLot findOneByRcysdlotqty(string $RcysdLotQty) Return the first ChildRcyclReceiptLot filtered by the RcysdLotQty column
 * @method     ChildRcyclReceiptLot findOneByRcysdlotdate(string $RcysdLotDate) Return the first ChildRcyclReceiptLot filtered by the RcysdLotDate column
 * @method     ChildRcyclReceiptLot findOneByRcysdlotref(string $RcysdLotRef) Return the first ChildRcyclReceiptLot filtered by the RcysdLotRef column
 * @method     ChildRcyclReceiptLot findOneByRcysdstatus(string $RcysdStatus) Return the first ChildRcyclReceiptLot filtered by the RcysdStatus column
 * @method     ChildRcyclReceiptLot findOneByRcysdclosedby(string $RcysdClosedBy) Return the first ChildRcyclReceiptLot filtered by the RcysdClosedBy column
 * @method     ChildRcyclReceiptLot findOneByRcysdcloseddate(string $RcysdClosedDate) Return the first ChildRcyclReceiptLot filtered by the RcysdClosedDate column
 * @method     ChildRcyclReceiptLot findOneByRcysdclosedtime(string $RcysdClosedTime) Return the first ChildRcyclReceiptLot filtered by the RcysdClosedTime column
 * @method     ChildRcyclReceiptLot findOneByRcysdtarewght(string $RcysdTareWght) Return the first ChildRcyclReceiptLot filtered by the RcysdTareWght column
 * @method     ChildRcyclReceiptLot findOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceiptLot filtered by the DateUpdtd column
 * @method     ChildRcyclReceiptLot findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceiptLot filtered by the TimeUpdtd column *

 * @method     ChildRcyclReceiptLot requirePk($key, ConnectionInterface $con = null) Return the ChildRcyclReceiptLot by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOne(ConnectionInterface $con = null) Return the first ChildRcyclReceiptLot matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceiptLot requireOneByRcyhdrcptbulk(string $RcyhdRcptBulk) Return the first ChildRcyclReceiptLot filtered by the RcyhdRcptBulk column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return the first ChildRcyclReceiptLot filtered by the RcyhdCntrlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcydtrcptline(int $RcydtRcptLine) Return the first ChildRcyclReceiptLot filtered by the RcydtRcptLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByInititemnbr(string $InitItemNbr) Return the first ChildRcyclReceiptLot filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdwhse(string $RcysdWhse) Return the first ChildRcyclReceiptLot filtered by the RcysdWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdlotnbr(string $RcysdLotNbr) Return the first ChildRcyclReceiptLot filtered by the RcysdLotNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdbin(string $RcysdBin) Return the first ChildRcyclReceiptLot filtered by the RcysdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdlotqty(string $RcysdLotQty) Return the first ChildRcyclReceiptLot filtered by the RcysdLotQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdlotdate(string $RcysdLotDate) Return the first ChildRcyclReceiptLot filtered by the RcysdLotDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdlotref(string $RcysdLotRef) Return the first ChildRcyclReceiptLot filtered by the RcysdLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdstatus(string $RcysdStatus) Return the first ChildRcyclReceiptLot filtered by the RcysdStatus column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdclosedby(string $RcysdClosedBy) Return the first ChildRcyclReceiptLot filtered by the RcysdClosedBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdcloseddate(string $RcysdClosedDate) Return the first ChildRcyclReceiptLot filtered by the RcysdClosedDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdclosedtime(string $RcysdClosedTime) Return the first ChildRcyclReceiptLot filtered by the RcysdClosedTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByRcysdtarewght(string $RcysdTareWght) Return the first ChildRcyclReceiptLot filtered by the RcysdTareWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByDateupdtd(string $DateUpdtd) Return the first ChildRcyclReceiptLot filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildRcyclReceiptLot requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildRcyclReceiptLot filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildRcyclReceiptLot[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildRcyclReceiptLot objects based on current ModelCriteria
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcyhdrcptbulk(string $RcyhdRcptBulk) Return ChildRcyclReceiptLot objects filtered by the RcyhdRcptBulk column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcyhdcntrlnbr(int $RcyhdCntrlNbr) Return ChildRcyclReceiptLot objects filtered by the RcyhdCntrlNbr column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcydtrcptline(int $RcydtRcptLine) Return ChildRcyclReceiptLot objects filtered by the RcydtRcptLine column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildRcyclReceiptLot objects filtered by the InitItemNbr column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdwhse(string $RcysdWhse) Return ChildRcyclReceiptLot objects filtered by the RcysdWhse column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdlotnbr(string $RcysdLotNbr) Return ChildRcyclReceiptLot objects filtered by the RcysdLotNbr column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdbin(string $RcysdBin) Return ChildRcyclReceiptLot objects filtered by the RcysdBin column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdlotqty(string $RcysdLotQty) Return ChildRcyclReceiptLot objects filtered by the RcysdLotQty column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdlotdate(string $RcysdLotDate) Return ChildRcyclReceiptLot objects filtered by the RcysdLotDate column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdlotref(string $RcysdLotRef) Return ChildRcyclReceiptLot objects filtered by the RcysdLotRef column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdstatus(string $RcysdStatus) Return ChildRcyclReceiptLot objects filtered by the RcysdStatus column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdclosedby(string $RcysdClosedBy) Return ChildRcyclReceiptLot objects filtered by the RcysdClosedBy column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdcloseddate(string $RcysdClosedDate) Return ChildRcyclReceiptLot objects filtered by the RcysdClosedDate column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdclosedtime(string $RcysdClosedTime) Return ChildRcyclReceiptLot objects filtered by the RcysdClosedTime column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByRcysdtarewght(string $RcysdTareWght) Return ChildRcyclReceiptLot objects filtered by the RcysdTareWght column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildRcyclReceiptLot objects filtered by the DateUpdtd column
 * @method     ChildRcyclReceiptLot[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildRcyclReceiptLot objects filtered by the TimeUpdtd column
 * @method     ChildRcyclReceiptLot[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class RcyclReceiptLotQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\RcyclReceiptLotQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\RcyclReceiptLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildRcyclReceiptLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildRcyclReceiptLotQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildRcyclReceiptLotQuery) {
            return $criteria;
        }
        $query = new ChildRcyclReceiptLotQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$RcyhdRcptBulk, $RcyhdCntrlNbr, $RcydtRcptLine, $InitItemNbr, $RcysdWhse, $RcysdLotNbr, $RcysdBin] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildRcyclReceiptLot|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = RcyclReceiptLotTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildRcyclReceiptLot A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT RcyhdRcptBulk, RcyhdCntrlNbr, RcydtRcptLine, InitItemNbr, RcysdWhse, RcysdLotNbr, RcysdBin, RcysdLotQty, RcysdLotDate, RcysdLotRef, RcysdStatus, RcysdClosedBy, RcysdClosedDate, RcysdClosedTime, RcysdTareWght, DateUpdtd, TimeUpdtd FROM rcycl_lot_det WHERE RcyhdRcptBulk = :p0 AND RcyhdCntrlNbr = :p1 AND RcydtRcptLine = :p2 AND InitItemNbr = :p3 AND RcysdWhse = :p4 AND RcysdLotNbr = :p5 AND RcysdBin = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildRcyclReceiptLot $obj */
            $obj = new ChildRcyclReceiptLot();
            $obj->hydrate($row);
            RcyclReceiptLotTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildRcyclReceiptLot|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDWHSE, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDBIN, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYSDWHSE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(RcyclReceiptLotTableMap::COL_RCYSDBIN, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
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
     * </code>
     *
     * @param     string $rcyhdrcptbulk The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcyhdrcptbulk($rcyhdrcptbulk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcyhdrcptbulk)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $rcyhdrcptbulk, $comparison);
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
     * @see       filterByRcyclReceiptDetail()
     *
     * @see       filterByRcyclReceipt()
     *
     * @param     mixed $rcyhdcntrlnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcyhdcntrlnbr($rcyhdcntrlnbr = null, $comparison = null)
    {
        if (is_array($rcyhdcntrlnbr)) {
            $useMinMax = false;
            if (isset($rcyhdcntrlnbr['min'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcyhdcntrlnbr['max'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $rcyhdcntrlnbr, $comparison);
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
     * @see       filterByRcyclReceiptDetail()
     *
     * @param     mixed $rcydtrcptline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcydtrcptline($rcydtrcptline = null, $comparison = null)
    {
        if (is_array($rcydtrcptline)) {
            $useMinMax = false;
            if (isset($rcydtrcptline['min'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcydtrcptline['max'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $rcydtrcptline, $comparison);
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
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the RcysdWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdwhse('fooValue');   // WHERE RcysdWhse = 'fooValue'
     * $query->filterByRcysdwhse('%fooValue%', Criteria::LIKE); // WHERE RcysdWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdwhse($rcysdwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDWHSE, $rcysdwhse, $comparison);
    }

    /**
     * Filter the query on the RcysdLotNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdlotnbr('fooValue');   // WHERE RcysdLotNbr = 'fooValue'
     * $query->filterByRcysdlotnbr('%fooValue%', Criteria::LIKE); // WHERE RcysdLotNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdlotnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdlotnbr($rcysdlotnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdlotnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR, $rcysdlotnbr, $comparison);
    }

    /**
     * Filter the query on the RcysdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdbin('fooValue');   // WHERE RcysdBin = 'fooValue'
     * $query->filterByRcysdbin('%fooValue%', Criteria::LIKE); // WHERE RcysdBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdbin($rcysdbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDBIN, $rcysdbin, $comparison);
    }

    /**
     * Filter the query on the RcysdLotQty column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdlotqty(1234); // WHERE RcysdLotQty = 1234
     * $query->filterByRcysdlotqty(array(12, 34)); // WHERE RcysdLotQty IN (12, 34)
     * $query->filterByRcysdlotqty(array('min' => 12)); // WHERE RcysdLotQty > 12
     * </code>
     *
     * @param     mixed $rcysdlotqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdlotqty($rcysdlotqty = null, $comparison = null)
    {
        if (is_array($rcysdlotqty)) {
            $useMinMax = false;
            if (isset($rcysdlotqty['min'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY, $rcysdlotqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcysdlotqty['max'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY, $rcysdlotqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTQTY, $rcysdlotqty, $comparison);
    }

    /**
     * Filter the query on the RcysdLotDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdlotdate('fooValue');   // WHERE RcysdLotDate = 'fooValue'
     * $query->filterByRcysdlotdate('%fooValue%', Criteria::LIKE); // WHERE RcysdLotDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdlotdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdlotdate($rcysdlotdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdlotdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTDATE, $rcysdlotdate, $comparison);
    }

    /**
     * Filter the query on the RcysdLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdlotref('fooValue');   // WHERE RcysdLotRef = 'fooValue'
     * $query->filterByRcysdlotref('%fooValue%', Criteria::LIKE); // WHERE RcysdLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdlotref($rcysdlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDLOTREF, $rcysdlotref, $comparison);
    }

    /**
     * Filter the query on the RcysdStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdstatus('fooValue');   // WHERE RcysdStatus = 'fooValue'
     * $query->filterByRcysdstatus('%fooValue%', Criteria::LIKE); // WHERE RcysdStatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdstatus The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdstatus($rcysdstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdstatus)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDSTATUS, $rcysdstatus, $comparison);
    }

    /**
     * Filter the query on the RcysdClosedBy column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdclosedby('fooValue');   // WHERE RcysdClosedBy = 'fooValue'
     * $query->filterByRcysdclosedby('%fooValue%', Criteria::LIKE); // WHERE RcysdClosedBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdclosedby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdclosedby($rcysdclosedby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdclosedby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDBY, $rcysdclosedby, $comparison);
    }

    /**
     * Filter the query on the RcysdClosedDate column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdcloseddate('fooValue');   // WHERE RcysdClosedDate = 'fooValue'
     * $query->filterByRcysdcloseddate('%fooValue%', Criteria::LIKE); // WHERE RcysdClosedDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdcloseddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdcloseddate($rcysdcloseddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdcloseddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDDATE, $rcysdcloseddate, $comparison);
    }

    /**
     * Filter the query on the RcysdClosedTime column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdclosedtime('fooValue');   // WHERE RcysdClosedTime = 'fooValue'
     * $query->filterByRcysdclosedtime('%fooValue%', Criteria::LIKE); // WHERE RcysdClosedTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcysdclosedtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdclosedtime($rcysdclosedtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcysdclosedtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDCLOSEDTIME, $rcysdclosedtime, $comparison);
    }

    /**
     * Filter the query on the RcysdTareWght column
     *
     * Example usage:
     * <code>
     * $query->filterByRcysdtarewght(1234); // WHERE RcysdTareWght = 1234
     * $query->filterByRcysdtarewght(array(12, 34)); // WHERE RcysdTareWght IN (12, 34)
     * $query->filterByRcysdtarewght(array('min' => 12)); // WHERE RcysdTareWght > 12
     * </code>
     *
     * @param     mixed $rcysdtarewght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcysdtarewght($rcysdtarewght = null, $comparison = null)
    {
        if (is_array($rcysdtarewght)) {
            $useMinMax = false;
            if (isset($rcysdtarewght['min'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT, $rcysdtarewght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcysdtarewght['max'])) {
                $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT, $rcysdtarewght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYSDTAREWGHT, $rcysdtarewght, $comparison);
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
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RcyclReceiptLotTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query by a related \RcyclReceiptDetail object
     *
     * @param \RcyclReceiptDetail $rcyclReceiptDetail The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcyclReceiptDetail($rcyclReceiptDetail, $comparison = null)
    {
        if ($rcyclReceiptDetail instanceof \RcyclReceiptDetail) {
            return $this
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $rcyclReceiptDetail->getRcyhdcntrlnbr(), $comparison)
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $rcyclReceiptDetail->getRcyhdrcptbulk(), $comparison)
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE, $rcyclReceiptDetail->getRcydtrcptline(), $comparison)
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_INITITEMNBR, $rcyclReceiptDetail->getInititemnbr(), $comparison);
        } else {
            throw new PropelException('filterByRcyclReceiptDetail() only accepts arguments of type \RcyclReceiptDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceiptDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function joinRcyclReceiptDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RcyclReceiptDetail');

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
            $this->addJoinObject($join, 'RcyclReceiptDetail');
        }

        return $this;
    }

    /**
     * Use the RcyclReceiptDetail relation RcyclReceiptDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \RcyclReceiptDetailQuery A secondary query class using the current class as primary query
     */
    public function useRcyclReceiptDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRcyclReceiptDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RcyclReceiptDetail', '\RcyclReceiptDetailQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
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
     * Filter the query by a related \RcyclReceipt object
     *
     * @param \RcyclReceipt $rcyclReceipt The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function filterByRcyclReceipt($rcyclReceipt, $comparison = null)
    {
        if ($rcyclReceipt instanceof \RcyclReceipt) {
            return $this
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR, $rcyclReceipt->getRcyhdcntrlnbr(), $comparison)
                ->addUsingAlias(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK, $rcyclReceipt->getRcyhdrcptbulk(), $comparison);
        } else {
            throw new PropelException('filterByRcyclReceipt() only accepts arguments of type \RcyclReceipt');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RcyclReceipt relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildRcyclReceiptLot $rcyclReceiptLot Object to remove from the list of results
     *
     * @return $this|ChildRcyclReceiptLotQuery The current query, for fluid interface
     */
    public function prune($rcyclReceiptLot = null)
    {
        if ($rcyclReceiptLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_RCYHDRCPTBULK), $rcyclReceiptLot->getRcyhdrcptbulk(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_RCYHDCNTRLNBR), $rcyclReceiptLot->getRcyhdcntrlnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_RCYDTRCPTLINE), $rcyclReceiptLot->getRcydtrcptline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_INITITEMNBR), $rcyclReceiptLot->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_RCYSDWHSE), $rcyclReceiptLot->getRcysdwhse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_RCYSDLOTNBR), $rcyclReceiptLot->getRcysdlotnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(RcyclReceiptLotTableMap::COL_RCYSDBIN), $rcyclReceiptLot->getRcysdbin(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the rcycl_lot_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RcyclReceiptLotTableMap::clearInstancePool();
            RcyclReceiptLotTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(RcyclReceiptLotTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(RcyclReceiptLotTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            RcyclReceiptLotTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            RcyclReceiptLotTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // RcyclReceiptLotQuery
