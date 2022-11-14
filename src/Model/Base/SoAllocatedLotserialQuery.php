<?php

namespace Base;

use \SoAllocatedLotserial as ChildSoAllocatedLotserial;
use \SoAllocatedLotserialQuery as ChildSoAllocatedLotserialQuery;
use \Exception;
use \PDO;
use Map\SoAllocatedLotserialTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_pre_allo' table.
 *
 *
 *
 * @method     ChildSoAllocatedLotserialQuery orderByOehdnbr($order = Criteria::ASC) Order by the OehdNbr column
 * @method     ChildSoAllocatedLotserialQuery orderByOedtline($order = Criteria::ASC) Order by the OedtLine column
 * @method     ChildSoAllocatedLotserialQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidlotser($order = Criteria::ASC) Order by the OeidLotSer column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidbin($order = Criteria::ASC) Order by the OeidBin column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidplltnbr($order = Criteria::ASC) Order by the OeidPlltNbr column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidcrtnnbr($order = Criteria::ASC) Order by the OeidCrtnNbr column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidqtyship($order = Criteria::ASC) Order by the OeidQtyShip column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidlotref($order = Criteria::ASC) Order by the OeidLotRef column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidcntrqty($order = Criteria::ASC) Order by the OeidCntrQty column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidbatch($order = Criteria::ASC) Order by the OeidBatch column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidcuredate($order = Criteria::ASC) Order by the OeidCureDate column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidpllttype($order = Criteria::ASC) Order by the OeidPlltType column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidlblprtd($order = Criteria::ASC) Order by the OeidLblPrtd column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidorigbin($order = Criteria::ASC) Order by the OeidOrigBin column
 * @method     ChildSoAllocatedLotserialQuery orderByOeidplltid($order = Criteria::ASC) Order by the OeidPlltID column
 * @method     ChildSoAllocatedLotserialQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoAllocatedLotserialQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoAllocatedLotserialQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoAllocatedLotserialQuery groupByOehdnbr() Group by the OehdNbr column
 * @method     ChildSoAllocatedLotserialQuery groupByOedtline() Group by the OedtLine column
 * @method     ChildSoAllocatedLotserialQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidlotser() Group by the OeidLotSer column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidbin() Group by the OeidBin column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidplltnbr() Group by the OeidPlltNbr column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidcrtnnbr() Group by the OeidCrtnNbr column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidqtyship() Group by the OeidQtyShip column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidlotref() Group by the OeidLotRef column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidcntrqty() Group by the OeidCntrQty column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidbatch() Group by the OeidBatch column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidcuredate() Group by the OeidCureDate column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidpllttype() Group by the OeidPlltType column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidlblprtd() Group by the OeidLblPrtd column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidorigbin() Group by the OeidOrigBin column
 * @method     ChildSoAllocatedLotserialQuery groupByOeidplltid() Group by the OeidPlltID column
 * @method     ChildSoAllocatedLotserialQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoAllocatedLotserialQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoAllocatedLotserialQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoAllocatedLotserialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoAllocatedLotserialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoAllocatedLotserialQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoAllocatedLotserialQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildSoAllocatedLotserialQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinSalesOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinSalesOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinSalesOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderDetail relation
 *
 * @method     ChildSoAllocatedLotserialQuery joinWithSalesOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinWithSalesOrderDetail() Adds a LEFT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinWithSalesOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinWithSalesOrderDetail() Adds a INNER JOIN clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSoAllocatedLotserialQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildSoAllocatedLotserialQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildSoAllocatedLotserialQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildSoAllocatedLotserialQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildSoAllocatedLotserialQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     \SalesOrderQuery|\SalesOrderDetailQuery|\ItemMasterItemQuery|\InvLotMasterQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSoAllocatedLotserial findOne(ConnectionInterface $con = null) Return the first ChildSoAllocatedLotserial matching the query
 * @method     ChildSoAllocatedLotserial findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoAllocatedLotserial matching the query, or a new ChildSoAllocatedLotserial object populated from the query conditions when no match is found
 *
 * @method     ChildSoAllocatedLotserial findOneByOehdnbr(int $OehdNbr) Return the first ChildSoAllocatedLotserial filtered by the OehdNbr column
 * @method     ChildSoAllocatedLotserial findOneByOedtline(int $OedtLine) Return the first ChildSoAllocatedLotserial filtered by the OedtLine column
 * @method     ChildSoAllocatedLotserial findOneByInititemnbr(string $InitItemNbr) Return the first ChildSoAllocatedLotserial filtered by the InitItemNbr column
 * @method     ChildSoAllocatedLotserial findOneByOeidlotser(string $OeidLotSer) Return the first ChildSoAllocatedLotserial filtered by the OeidLotSer column
 * @method     ChildSoAllocatedLotserial findOneByOeidbin(string $OeidBin) Return the first ChildSoAllocatedLotserial filtered by the OeidBin column
 * @method     ChildSoAllocatedLotserial findOneByOeidplltnbr(int $OeidPlltNbr) Return the first ChildSoAllocatedLotserial filtered by the OeidPlltNbr column
 * @method     ChildSoAllocatedLotserial findOneByOeidcrtnnbr(int $OeidCrtnNbr) Return the first ChildSoAllocatedLotserial filtered by the OeidCrtnNbr column
 * @method     ChildSoAllocatedLotserial findOneByOeidqtyship(string $OeidQtyShip) Return the first ChildSoAllocatedLotserial filtered by the OeidQtyShip column
 * @method     ChildSoAllocatedLotserial findOneByOeidlotref(string $OeidLotRef) Return the first ChildSoAllocatedLotserial filtered by the OeidLotRef column
 * @method     ChildSoAllocatedLotserial findOneByOeidcntrqty(string $OeidCntrQty) Return the first ChildSoAllocatedLotserial filtered by the OeidCntrQty column
 * @method     ChildSoAllocatedLotserial findOneByOeidbatch(string $OeidBatch) Return the first ChildSoAllocatedLotserial filtered by the OeidBatch column
 * @method     ChildSoAllocatedLotserial findOneByOeidcuredate(string $OeidCureDate) Return the first ChildSoAllocatedLotserial filtered by the OeidCureDate column
 * @method     ChildSoAllocatedLotserial findOneByOeidpllttype(string $OeidPlltType) Return the first ChildSoAllocatedLotserial filtered by the OeidPlltType column
 * @method     ChildSoAllocatedLotserial findOneByOeidlblprtd(string $OeidLblPrtd) Return the first ChildSoAllocatedLotserial filtered by the OeidLblPrtd column
 * @method     ChildSoAllocatedLotserial findOneByOeidorigbin(string $OeidOrigBin) Return the first ChildSoAllocatedLotserial filtered by the OeidOrigBin column
 * @method     ChildSoAllocatedLotserial findOneByOeidplltid(string $OeidPlltID) Return the first ChildSoAllocatedLotserial filtered by the OeidPlltID column
 * @method     ChildSoAllocatedLotserial findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoAllocatedLotserial filtered by the DateUpdtd column
 * @method     ChildSoAllocatedLotserial findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoAllocatedLotserial filtered by the TimeUpdtd column
 * @method     ChildSoAllocatedLotserial findOneByDummy(string $dummy) Return the first ChildSoAllocatedLotserial filtered by the dummy column *

 * @method     ChildSoAllocatedLotserial requirePk($key, ConnectionInterface $con = null) Return the ChildSoAllocatedLotserial by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOne(ConnectionInterface $con = null) Return the first ChildSoAllocatedLotserial matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoAllocatedLotserial requireOneByOehdnbr(int $OehdNbr) Return the first ChildSoAllocatedLotserial filtered by the OehdNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOedtline(int $OedtLine) Return the first ChildSoAllocatedLotserial filtered by the OedtLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSoAllocatedLotserial filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidlotser(string $OeidLotSer) Return the first ChildSoAllocatedLotserial filtered by the OeidLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidbin(string $OeidBin) Return the first ChildSoAllocatedLotserial filtered by the OeidBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidplltnbr(int $OeidPlltNbr) Return the first ChildSoAllocatedLotserial filtered by the OeidPlltNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidcrtnnbr(int $OeidCrtnNbr) Return the first ChildSoAllocatedLotserial filtered by the OeidCrtnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidqtyship(string $OeidQtyShip) Return the first ChildSoAllocatedLotserial filtered by the OeidQtyShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidlotref(string $OeidLotRef) Return the first ChildSoAllocatedLotserial filtered by the OeidLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidcntrqty(string $OeidCntrQty) Return the first ChildSoAllocatedLotserial filtered by the OeidCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidbatch(string $OeidBatch) Return the first ChildSoAllocatedLotserial filtered by the OeidBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidcuredate(string $OeidCureDate) Return the first ChildSoAllocatedLotserial filtered by the OeidCureDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidpllttype(string $OeidPlltType) Return the first ChildSoAllocatedLotserial filtered by the OeidPlltType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidlblprtd(string $OeidLblPrtd) Return the first ChildSoAllocatedLotserial filtered by the OeidLblPrtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidorigbin(string $OeidOrigBin) Return the first ChildSoAllocatedLotserial filtered by the OeidOrigBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByOeidplltid(string $OeidPlltID) Return the first ChildSoAllocatedLotserial filtered by the OeidPlltID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoAllocatedLotserial filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoAllocatedLotserial filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoAllocatedLotserial requireOneByDummy(string $dummy) Return the first ChildSoAllocatedLotserial filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoAllocatedLotserial objects based on current ModelCriteria
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOehdnbr(int $OehdNbr) Return ChildSoAllocatedLotserial objects filtered by the OehdNbr column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOedtline(int $OedtLine) Return ChildSoAllocatedLotserial objects filtered by the OedtLine column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildSoAllocatedLotserial objects filtered by the InitItemNbr column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidlotser(string $OeidLotSer) Return ChildSoAllocatedLotserial objects filtered by the OeidLotSer column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidbin(string $OeidBin) Return ChildSoAllocatedLotserial objects filtered by the OeidBin column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidplltnbr(int $OeidPlltNbr) Return ChildSoAllocatedLotserial objects filtered by the OeidPlltNbr column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidcrtnnbr(int $OeidCrtnNbr) Return ChildSoAllocatedLotserial objects filtered by the OeidCrtnNbr column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidqtyship(string $OeidQtyShip) Return ChildSoAllocatedLotserial objects filtered by the OeidQtyShip column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidlotref(string $OeidLotRef) Return ChildSoAllocatedLotserial objects filtered by the OeidLotRef column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidcntrqty(string $OeidCntrQty) Return ChildSoAllocatedLotserial objects filtered by the OeidCntrQty column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidbatch(string $OeidBatch) Return ChildSoAllocatedLotserial objects filtered by the OeidBatch column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidcuredate(string $OeidCureDate) Return ChildSoAllocatedLotserial objects filtered by the OeidCureDate column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidpllttype(string $OeidPlltType) Return ChildSoAllocatedLotserial objects filtered by the OeidPlltType column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidlblprtd(string $OeidLblPrtd) Return ChildSoAllocatedLotserial objects filtered by the OeidLblPrtd column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidorigbin(string $OeidOrigBin) Return ChildSoAllocatedLotserial objects filtered by the OeidOrigBin column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByOeidplltid(string $OeidPlltID) Return ChildSoAllocatedLotserial objects filtered by the OeidPlltID column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoAllocatedLotserial objects filtered by the DateUpdtd column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoAllocatedLotserial objects filtered by the TimeUpdtd column
 * @method     ChildSoAllocatedLotserial[]|ObjectCollection findByDummy(string $dummy) Return ChildSoAllocatedLotserial objects filtered by the dummy column
 * @method     ChildSoAllocatedLotserial[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoAllocatedLotserialQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoAllocatedLotserialQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoAllocatedLotserial', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoAllocatedLotserialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoAllocatedLotserialQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoAllocatedLotserialQuery) {
            return $criteria;
        }
        $query = new ChildSoAllocatedLotserialQuery();
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
     * @param array[$OehdNbr, $OedtLine, $InitItemNbr, $OeidLotSer, $OeidBin, $OeidPlltNbr, $OeidCrtnNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSoAllocatedLotserial|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoAllocatedLotserialTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildSoAllocatedLotserial A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OehdNbr, OedtLine, InitItemNbr, OeidLotSer, OeidBin, OeidPlltNbr, OeidCrtnNbr, OeidQtyShip, OeidLotRef, OeidCntrQty, OeidBatch, OeidCureDate, OeidPlltType, OeidLblPrtd, OeidOrigBin, OeidPlltID, DateUpdtd, TimeUpdtd, dummy FROM so_pre_allo WHERE OehdNbr = :p0 AND OedtLine = :p1 AND InitItemNbr = :p2 AND OeidLotSer = :p3 AND OeidBin = :p4 AND OeidPlltNbr = :p5 AND OeidCrtnNbr = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSoAllocatedLotserial $obj */
            $obj = new ChildSoAllocatedLotserial();
            $obj->hydrate($row);
            SoAllocatedLotserialTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildSoAllocatedLotserial|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDBIN, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEHDNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEDTLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDBIN, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OehdNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehdnbr(1234); // WHERE OehdNbr = 1234
     * $query->filterByOehdnbr(array(12, 34)); // WHERE OehdNbr IN (12, 34)
     * $query->filterByOehdnbr(array('min' => 12)); // WHERE OehdNbr > 12
     * </code>
     *
     * @see       filterBySalesOrder()
     *
     * @see       filterBySalesOrderDetail()
     *
     * @param     mixed $oehdnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOehdnbr($oehdnbr = null, $comparison = null)
    {
        if (is_array($oehdnbr)) {
            $useMinMax = false;
            if (isset($oehdnbr['min'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $oehdnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oehdnbr['max'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $oehdnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $oehdnbr, $comparison);
    }

    /**
     * Filter the query on the OedtLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedtline(1234); // WHERE OedtLine = 1234
     * $query->filterByOedtline(array(12, 34)); // WHERE OedtLine IN (12, 34)
     * $query->filterByOedtline(array('min' => 12)); // WHERE OedtLine > 12
     * </code>
     *
     * @see       filterBySalesOrderDetail()
     *
     * @param     mixed $oedtline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOedtline($oedtline = null, $comparison = null)
    {
        if (is_array($oedtline)) {
            $useMinMax = false;
            if (isset($oedtline['min'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEDTLINE, $oedtline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedtline['max'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEDTLINE, $oedtline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEDTLINE, $oedtline, $comparison);
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
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the OeidLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidlotser('fooValue');   // WHERE OeidLotSer = 'fooValue'
     * $query->filterByOeidlotser('%fooValue%', Criteria::LIKE); // WHERE OeidLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidlotser($oeidlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $oeidlotser, $comparison);
    }

    /**
     * Filter the query on the OeidBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidbin('fooValue');   // WHERE OeidBin = 'fooValue'
     * $query->filterByOeidbin('%fooValue%', Criteria::LIKE); // WHERE OeidBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidbin($oeidbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDBIN, $oeidbin, $comparison);
    }

    /**
     * Filter the query on the OeidPlltNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidplltnbr(1234); // WHERE OeidPlltNbr = 1234
     * $query->filterByOeidplltnbr(array(12, 34)); // WHERE OeidPlltNbr IN (12, 34)
     * $query->filterByOeidplltnbr(array('min' => 12)); // WHERE OeidPlltNbr > 12
     * </code>
     *
     * @param     mixed $oeidplltnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidplltnbr($oeidplltnbr = null, $comparison = null)
    {
        if (is_array($oeidplltnbr)) {
            $useMinMax = false;
            if (isset($oeidplltnbr['min'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $oeidplltnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeidplltnbr['max'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $oeidplltnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR, $oeidplltnbr, $comparison);
    }

    /**
     * Filter the query on the OeidCrtnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidcrtnnbr(1234); // WHERE OeidCrtnNbr = 1234
     * $query->filterByOeidcrtnnbr(array(12, 34)); // WHERE OeidCrtnNbr IN (12, 34)
     * $query->filterByOeidcrtnnbr(array('min' => 12)); // WHERE OeidCrtnNbr > 12
     * </code>
     *
     * @param     mixed $oeidcrtnnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidcrtnnbr($oeidcrtnnbr = null, $comparison = null)
    {
        if (is_array($oeidcrtnnbr)) {
            $useMinMax = false;
            if (isset($oeidcrtnnbr['min'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $oeidcrtnnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeidcrtnnbr['max'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $oeidcrtnnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR, $oeidcrtnnbr, $comparison);
    }

    /**
     * Filter the query on the OeidQtyShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidqtyship(1234); // WHERE OeidQtyShip = 1234
     * $query->filterByOeidqtyship(array(12, 34)); // WHERE OeidQtyShip IN (12, 34)
     * $query->filterByOeidqtyship(array('min' => 12)); // WHERE OeidQtyShip > 12
     * </code>
     *
     * @param     mixed $oeidqtyship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidqtyship($oeidqtyship = null, $comparison = null)
    {
        if (is_array($oeidqtyship)) {
            $useMinMax = false;
            if (isset($oeidqtyship['min'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP, $oeidqtyship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeidqtyship['max'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP, $oeidqtyship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDQTYSHIP, $oeidqtyship, $comparison);
    }

    /**
     * Filter the query on the OeidLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidlotref('fooValue');   // WHERE OeidLotRef = 'fooValue'
     * $query->filterByOeidlotref('%fooValue%', Criteria::LIKE); // WHERE OeidLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidlotref($oeidlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDLOTREF, $oeidlotref, $comparison);
    }

    /**
     * Filter the query on the OeidCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidcntrqty(1234); // WHERE OeidCntrQty = 1234
     * $query->filterByOeidcntrqty(array(12, 34)); // WHERE OeidCntrQty IN (12, 34)
     * $query->filterByOeidcntrqty(array('min' => 12)); // WHERE OeidCntrQty > 12
     * </code>
     *
     * @param     mixed $oeidcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidcntrqty($oeidcntrqty = null, $comparison = null)
    {
        if (is_array($oeidcntrqty)) {
            $useMinMax = false;
            if (isset($oeidcntrqty['min'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY, $oeidcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oeidcntrqty['max'])) {
                $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY, $oeidcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCNTRQTY, $oeidcntrqty, $comparison);
    }

    /**
     * Filter the query on the OeidBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidbatch('fooValue');   // WHERE OeidBatch = 'fooValue'
     * $query->filterByOeidbatch('%fooValue%', Criteria::LIKE); // WHERE OeidBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidbatch($oeidbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDBATCH, $oeidbatch, $comparison);
    }

    /**
     * Filter the query on the OeidCureDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidcuredate('fooValue');   // WHERE OeidCureDate = 'fooValue'
     * $query->filterByOeidcuredate('%fooValue%', Criteria::LIKE); // WHERE OeidCureDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidcuredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidcuredate($oeidcuredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidcuredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDCUREDATE, $oeidcuredate, $comparison);
    }

    /**
     * Filter the query on the OeidPlltType column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidpllttype('fooValue');   // WHERE OeidPlltType = 'fooValue'
     * $query->filterByOeidpllttype('%fooValue%', Criteria::LIKE); // WHERE OeidPlltType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidpllttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidpllttype($oeidpllttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidpllttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDPLLTTYPE, $oeidpllttype, $comparison);
    }

    /**
     * Filter the query on the OeidLblPrtd column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidlblprtd('fooValue');   // WHERE OeidLblPrtd = 'fooValue'
     * $query->filterByOeidlblprtd('%fooValue%', Criteria::LIKE); // WHERE OeidLblPrtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidlblprtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidlblprtd($oeidlblprtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidlblprtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDLBLPRTD, $oeidlblprtd, $comparison);
    }

    /**
     * Filter the query on the OeidOrigBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidorigbin('fooValue');   // WHERE OeidOrigBin = 'fooValue'
     * $query->filterByOeidorigbin('%fooValue%', Criteria::LIKE); // WHERE OeidOrigBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidorigbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidorigbin($oeidorigbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidorigbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDORIGBIN, $oeidorigbin, $comparison);
    }

    /**
     * Filter the query on the OeidPlltID column
     *
     * Example usage:
     * <code>
     * $query->filterByOeidplltid('fooValue');   // WHERE OeidPlltID = 'fooValue'
     * $query->filterByOeidplltid('%fooValue%', Criteria::LIKE); // WHERE OeidPlltID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oeidplltid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByOeidplltid($oeidplltid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oeidplltid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDPLLTID, $oeidplltid, $comparison);
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
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoAllocatedLotserialTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \SalesOrder object
     *
     * @param \SalesOrder|ObjectCollection $salesOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            return $this
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $salesOrder->getOehdnbr(), $comparison);
        } elseif ($salesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $salesOrder->toKeyValue('PrimaryKey', 'Oehdnbr'), $comparison);
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function joinSalesOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrder');

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
            $this->addJoinObject($join, 'SalesOrder');
        }

        return $this;
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrder', '\SalesOrderQuery');
    }

    /**
     * Filter the query by a related \SalesOrderDetail object
     *
     * @param \SalesOrderDetail $salesOrderDetail The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterBySalesOrderDetail($salesOrderDetail, $comparison = null)
    {
        if ($salesOrderDetail instanceof \SalesOrderDetail) {
            return $this
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEHDNBR, $salesOrderDetail->getOehdnbr(), $comparison)
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEDTLINE, $salesOrderDetail->getOedtline(), $comparison);
        } else {
            throw new PropelException('filterBySalesOrderDetail() only accepts arguments of type \SalesOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function joinSalesOrderDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderDetail');

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
            $this->addJoinObject($join, 'SalesOrderDetail');
        }

        return $this;
    }

    /**
     * Use the SalesOrderDetail relation SalesOrderDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderDetail', '\SalesOrderDetailQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
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
     * Filter the query by a related \InvLotMaster object
     *
     * @param \InvLotMaster $invLotMaster The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            return $this
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(SoAllocatedLotserialTableMap::COL_OEIDLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
        } else {
            throw new PropelException('filterByInvLotMaster() only accepts arguments of type \InvLotMaster');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotMaster relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function joinInvLotMaster($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotMaster');

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
            $this->addJoinObject($join, 'InvLotMaster');
        }

        return $this;
    }

    /**
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvLotMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotMaster', '\InvLotMasterQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSoAllocatedLotserial $soAllocatedLotserial Object to remove from the list of results
     *
     * @return $this|ChildSoAllocatedLotserialQuery The current query, for fluid interface
     */
    public function prune($soAllocatedLotserial = null)
    {
        if ($soAllocatedLotserial) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_OEHDNBR), $soAllocatedLotserial->getOehdnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_OEDTLINE), $soAllocatedLotserial->getOedtline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_INITITEMNBR), $soAllocatedLotserial->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_OEIDLOTSER), $soAllocatedLotserial->getOeidlotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_OEIDBIN), $soAllocatedLotserial->getOeidbin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_OEIDPLLTNBR), $soAllocatedLotserial->getOeidplltnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(SoAllocatedLotserialTableMap::COL_OEIDCRTNNBR), $soAllocatedLotserial->getOeidcrtnnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_pre_allo table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoAllocatedLotserialTableMap::clearInstancePool();
            SoAllocatedLotserialTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoAllocatedLotserialTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoAllocatedLotserialTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoAllocatedLotserialTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoAllocatedLotserialTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoAllocatedLotserialQuery
