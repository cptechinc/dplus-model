<?php

namespace Base;

use \SoStandingOrderDetail as ChildSoStandingOrderDetail;
use \SoStandingOrderDetailQuery as ChildSoStandingOrderDetailQuery;
use \Exception;
use \PDO;
use Map\SoStandingOrderDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_stand_det' table.
 *
 *
 *
 * @method     ChildSoStandingOrderDetailQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildSoStandingOrderDetailQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildSoStandingOrderDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdseq($order = Criteria::ASC) Order by the OetdSeq column
 * @method     ChildSoStandingOrderDetailQuery orderByOetddesc($order = Criteria::ASC) Order by the OetdDesc column
 * @method     ChildSoStandingOrderDetailQuery orderByOetddesc2($order = Criteria::ASC) Order by the OetdDesc2 column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdstat($order = Criteria::ASC) Order by the OetdStat column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdholdcnt($order = Criteria::ASC) Order by the OetdHoldCnt column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdpric($order = Criteria::ASC) Order by the OetdPric column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdqty($order = Criteria::ASC) Order by the OetdQty column
 * @method     ChildSoStandingOrderDetailQuery orderByIntbuomsale($order = Criteria::ASC) Order by the IntbUomSale column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdcycl($order = Criteria::ASC) Order by the OetdCycl column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdstrtdate($order = Criteria::ASC) Order by the OetdStrtDate column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdenddate($order = Criteria::ASC) Order by the OetdEndDate column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdlastdate($order = Criteria::ASC) Order by the OetdLastDate column
 * @method     ChildSoStandingOrderDetailQuery orderByOetdleadcnt($order = Criteria::ASC) Order by the OetdLeadCnt column
 * @method     ChildSoStandingOrderDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoStandingOrderDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoStandingOrderDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoStandingOrderDetailQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildSoStandingOrderDetailQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildSoStandingOrderDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdseq() Group by the OetdSeq column
 * @method     ChildSoStandingOrderDetailQuery groupByOetddesc() Group by the OetdDesc column
 * @method     ChildSoStandingOrderDetailQuery groupByOetddesc2() Group by the OetdDesc2 column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdstat() Group by the OetdStat column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdholdcnt() Group by the OetdHoldCnt column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdpric() Group by the OetdPric column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdqty() Group by the OetdQty column
 * @method     ChildSoStandingOrderDetailQuery groupByIntbuomsale() Group by the IntbUomSale column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdcycl() Group by the OetdCycl column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdstrtdate() Group by the OetdStrtDate column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdenddate() Group by the OetdEndDate column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdlastdate() Group by the OetdLastDate column
 * @method     ChildSoStandingOrderDetailQuery groupByOetdleadcnt() Group by the OetdLeadCnt column
 * @method     ChildSoStandingOrderDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoStandingOrderDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoStandingOrderDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoStandingOrderDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoStandingOrderDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoStandingOrderDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoStandingOrderDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildSoStandingOrderDetailQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildSoStandingOrderDetailQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildSoStandingOrderDetailQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildSoStandingOrderDetailQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildSoStandingOrderDetailQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildSoStandingOrderDetailQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildSoStandingOrderDetailQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildSoStandingOrderDetailQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildSoStandingOrderDetailQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildSoStandingOrderDetailQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSoStandingOrderDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildSoStandingOrderDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildSoStandingOrderDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildSoStandingOrderDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSoStandingOrderDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildSoStandingOrderDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSoStandingOrderDetail findOne(ConnectionInterface $con = null) Return the first ChildSoStandingOrderDetail matching the query
 * @method     ChildSoStandingOrderDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoStandingOrderDetail matching the query, or a new ChildSoStandingOrderDetail object populated from the query conditions when no match is found
 *
 * @method     ChildSoStandingOrderDetail findOneByArcucustid(string $ArcuCustId) Return the first ChildSoStandingOrderDetail filtered by the ArcuCustId column
 * @method     ChildSoStandingOrderDetail findOneByArstshipid(string $ArstShipId) Return the first ChildSoStandingOrderDetail filtered by the ArstShipId column
 * @method     ChildSoStandingOrderDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildSoStandingOrderDetail filtered by the InitItemNbr column
 * @method     ChildSoStandingOrderDetail findOneByOetdseq(int $OetdSeq) Return the first ChildSoStandingOrderDetail filtered by the OetdSeq column
 * @method     ChildSoStandingOrderDetail findOneByOetddesc(string $OetdDesc) Return the first ChildSoStandingOrderDetail filtered by the OetdDesc column
 * @method     ChildSoStandingOrderDetail findOneByOetddesc2(string $OetdDesc2) Return the first ChildSoStandingOrderDetail filtered by the OetdDesc2 column
 * @method     ChildSoStandingOrderDetail findOneByOetdstat(string $OetdStat) Return the first ChildSoStandingOrderDetail filtered by the OetdStat column
 * @method     ChildSoStandingOrderDetail findOneByOetdholdcnt(int $OetdHoldCnt) Return the first ChildSoStandingOrderDetail filtered by the OetdHoldCnt column
 * @method     ChildSoStandingOrderDetail findOneByOetdpric(string $OetdPric) Return the first ChildSoStandingOrderDetail filtered by the OetdPric column
 * @method     ChildSoStandingOrderDetail findOneByOetdqty(string $OetdQty) Return the first ChildSoStandingOrderDetail filtered by the OetdQty column
 * @method     ChildSoStandingOrderDetail findOneByIntbuomsale(string $IntbUomSale) Return the first ChildSoStandingOrderDetail filtered by the IntbUomSale column
 * @method     ChildSoStandingOrderDetail findOneByOetdcycl(string $OetdCycl) Return the first ChildSoStandingOrderDetail filtered by the OetdCycl column
 * @method     ChildSoStandingOrderDetail findOneByOetdstrtdate(string $OetdStrtDate) Return the first ChildSoStandingOrderDetail filtered by the OetdStrtDate column
 * @method     ChildSoStandingOrderDetail findOneByOetdenddate(string $OetdEndDate) Return the first ChildSoStandingOrderDetail filtered by the OetdEndDate column
 * @method     ChildSoStandingOrderDetail findOneByOetdlastdate(string $OetdLastDate) Return the first ChildSoStandingOrderDetail filtered by the OetdLastDate column
 * @method     ChildSoStandingOrderDetail findOneByOetdleadcnt(int $OetdLeadCnt) Return the first ChildSoStandingOrderDetail filtered by the OetdLeadCnt column
 * @method     ChildSoStandingOrderDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoStandingOrderDetail filtered by the DateUpdtd column
 * @method     ChildSoStandingOrderDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoStandingOrderDetail filtered by the TimeUpdtd column
 * @method     ChildSoStandingOrderDetail findOneByDummy(string $dummy) Return the first ChildSoStandingOrderDetail filtered by the dummy column *

 * @method     ChildSoStandingOrderDetail requirePk($key, ConnectionInterface $con = null) Return the ChildSoStandingOrderDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOne(ConnectionInterface $con = null) Return the first ChildSoStandingOrderDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoStandingOrderDetail requireOneByArcucustid(string $ArcuCustId) Return the first ChildSoStandingOrderDetail filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByArstshipid(string $ArstShipId) Return the first ChildSoStandingOrderDetail filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildSoStandingOrderDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdseq(int $OetdSeq) Return the first ChildSoStandingOrderDetail filtered by the OetdSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetddesc(string $OetdDesc) Return the first ChildSoStandingOrderDetail filtered by the OetdDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetddesc2(string $OetdDesc2) Return the first ChildSoStandingOrderDetail filtered by the OetdDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdstat(string $OetdStat) Return the first ChildSoStandingOrderDetail filtered by the OetdStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdholdcnt(int $OetdHoldCnt) Return the first ChildSoStandingOrderDetail filtered by the OetdHoldCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdpric(string $OetdPric) Return the first ChildSoStandingOrderDetail filtered by the OetdPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdqty(string $OetdQty) Return the first ChildSoStandingOrderDetail filtered by the OetdQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByIntbuomsale(string $IntbUomSale) Return the first ChildSoStandingOrderDetail filtered by the IntbUomSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdcycl(string $OetdCycl) Return the first ChildSoStandingOrderDetail filtered by the OetdCycl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdstrtdate(string $OetdStrtDate) Return the first ChildSoStandingOrderDetail filtered by the OetdStrtDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdenddate(string $OetdEndDate) Return the first ChildSoStandingOrderDetail filtered by the OetdEndDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdlastdate(string $OetdLastDate) Return the first ChildSoStandingOrderDetail filtered by the OetdLastDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByOetdleadcnt(int $OetdLeadCnt) Return the first ChildSoStandingOrderDetail filtered by the OetdLeadCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoStandingOrderDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoStandingOrderDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoStandingOrderDetail requireOneByDummy(string $dummy) Return the first ChildSoStandingOrderDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoStandingOrderDetail objects based on current ModelCriteria
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildSoStandingOrderDetail objects filtered by the ArcuCustId column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildSoStandingOrderDetail objects filtered by the ArstShipId column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildSoStandingOrderDetail objects filtered by the InitItemNbr column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdseq(int $OetdSeq) Return ChildSoStandingOrderDetail objects filtered by the OetdSeq column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetddesc(string $OetdDesc) Return ChildSoStandingOrderDetail objects filtered by the OetdDesc column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetddesc2(string $OetdDesc2) Return ChildSoStandingOrderDetail objects filtered by the OetdDesc2 column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdstat(string $OetdStat) Return ChildSoStandingOrderDetail objects filtered by the OetdStat column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdholdcnt(int $OetdHoldCnt) Return ChildSoStandingOrderDetail objects filtered by the OetdHoldCnt column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdpric(string $OetdPric) Return ChildSoStandingOrderDetail objects filtered by the OetdPric column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdqty(string $OetdQty) Return ChildSoStandingOrderDetail objects filtered by the OetdQty column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByIntbuomsale(string $IntbUomSale) Return ChildSoStandingOrderDetail objects filtered by the IntbUomSale column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdcycl(string $OetdCycl) Return ChildSoStandingOrderDetail objects filtered by the OetdCycl column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdstrtdate(string $OetdStrtDate) Return ChildSoStandingOrderDetail objects filtered by the OetdStrtDate column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdenddate(string $OetdEndDate) Return ChildSoStandingOrderDetail objects filtered by the OetdEndDate column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdlastdate(string $OetdLastDate) Return ChildSoStandingOrderDetail objects filtered by the OetdLastDate column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByOetdleadcnt(int $OetdLeadCnt) Return ChildSoStandingOrderDetail objects filtered by the OetdLeadCnt column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoStandingOrderDetail objects filtered by the DateUpdtd column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoStandingOrderDetail objects filtered by the TimeUpdtd column
 * @method     ChildSoStandingOrderDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildSoStandingOrderDetail objects filtered by the dummy column
 * @method     ChildSoStandingOrderDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoStandingOrderDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoStandingOrderDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoStandingOrderDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoStandingOrderDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoStandingOrderDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoStandingOrderDetailQuery) {
            return $criteria;
        }
        $query = new ChildSoStandingOrderDetailQuery();
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
     * @param array[$ArcuCustId, $ArstShipId, $InitItemNbr, $OetdSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSoStandingOrderDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoStandingOrderDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoStandingOrderDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildSoStandingOrderDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, InitItemNbr, OetdSeq, OetdDesc, OetdDesc2, OetdStat, OetdHoldCnt, OetdPric, OetdQty, IntbUomSale, OetdCycl, OetdStrtDate, OetdEndDate, OetdLastDate, OetdLeadCnt, DateUpdtd, TimeUpdtd, dummy FROM so_stand_det WHERE ArcuCustId = :p0 AND ArstShipId = :p1 AND InitItemNbr = :p2 AND OetdSeq = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSoStandingOrderDetail $obj */
            $obj = new ChildSoStandingOrderDetail();
            $obj->hydrate($row);
            SoStandingOrderDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildSoStandingOrderDetail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDSEQ, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SoStandingOrderDetailTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SoStandingOrderDetailTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SoStandingOrderDetailTableMap::COL_OETDSEQ, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the OetdSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdseq(1234); // WHERE OetdSeq = 1234
     * $query->filterByOetdseq(array(12, 34)); // WHERE OetdSeq IN (12, 34)
     * $query->filterByOetdseq(array('min' => 12)); // WHERE OetdSeq > 12
     * </code>
     *
     * @param     mixed $oetdseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdseq($oetdseq = null, $comparison = null)
    {
        if (is_array($oetdseq)) {
            $useMinMax = false;
            if (isset($oetdseq['min'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDSEQ, $oetdseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetdseq['max'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDSEQ, $oetdseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDSEQ, $oetdseq, $comparison);
    }

    /**
     * Filter the query on the OetdDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetddesc('fooValue');   // WHERE OetdDesc = 'fooValue'
     * $query->filterByOetddesc('%fooValue%', Criteria::LIKE); // WHERE OetdDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetddesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetddesc($oetddesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetddesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDDESC, $oetddesc, $comparison);
    }

    /**
     * Filter the query on the OetdDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetddesc2('fooValue');   // WHERE OetdDesc2 = 'fooValue'
     * $query->filterByOetddesc2('%fooValue%', Criteria::LIKE); // WHERE OetdDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetddesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetddesc2($oetddesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetddesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDDESC2, $oetddesc2, $comparison);
    }

    /**
     * Filter the query on the OetdStat column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdstat('fooValue');   // WHERE OetdStat = 'fooValue'
     * $query->filterByOetdstat('%fooValue%', Criteria::LIKE); // WHERE OetdStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetdstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdstat($oetdstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetdstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDSTAT, $oetdstat, $comparison);
    }

    /**
     * Filter the query on the OetdHoldCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdholdcnt(1234); // WHERE OetdHoldCnt = 1234
     * $query->filterByOetdholdcnt(array(12, 34)); // WHERE OetdHoldCnt IN (12, 34)
     * $query->filterByOetdholdcnt(array('min' => 12)); // WHERE OetdHoldCnt > 12
     * </code>
     *
     * @param     mixed $oetdholdcnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdholdcnt($oetdholdcnt = null, $comparison = null)
    {
        if (is_array($oetdholdcnt)) {
            $useMinMax = false;
            if (isset($oetdholdcnt['min'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDHOLDCNT, $oetdholdcnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetdholdcnt['max'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDHOLDCNT, $oetdholdcnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDHOLDCNT, $oetdholdcnt, $comparison);
    }

    /**
     * Filter the query on the OetdPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdpric(1234); // WHERE OetdPric = 1234
     * $query->filterByOetdpric(array(12, 34)); // WHERE OetdPric IN (12, 34)
     * $query->filterByOetdpric(array('min' => 12)); // WHERE OetdPric > 12
     * </code>
     *
     * @param     mixed $oetdpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdpric($oetdpric = null, $comparison = null)
    {
        if (is_array($oetdpric)) {
            $useMinMax = false;
            if (isset($oetdpric['min'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDPRIC, $oetdpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetdpric['max'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDPRIC, $oetdpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDPRIC, $oetdpric, $comparison);
    }

    /**
     * Filter the query on the OetdQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdqty(1234); // WHERE OetdQty = 1234
     * $query->filterByOetdqty(array(12, 34)); // WHERE OetdQty IN (12, 34)
     * $query->filterByOetdqty(array('min' => 12)); // WHERE OetdQty > 12
     * </code>
     *
     * @param     mixed $oetdqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdqty($oetdqty = null, $comparison = null)
    {
        if (is_array($oetdqty)) {
            $useMinMax = false;
            if (isset($oetdqty['min'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDQTY, $oetdqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetdqty['max'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDQTY, $oetdqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDQTY, $oetdqty, $comparison);
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);
    }

    /**
     * Filter the query on the OetdCycl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdcycl('fooValue');   // WHERE OetdCycl = 'fooValue'
     * $query->filterByOetdcycl('%fooValue%', Criteria::LIKE); // WHERE OetdCycl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetdcycl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdcycl($oetdcycl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetdcycl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDCYCL, $oetdcycl, $comparison);
    }

    /**
     * Filter the query on the OetdStrtDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdstrtdate('fooValue');   // WHERE OetdStrtDate = 'fooValue'
     * $query->filterByOetdstrtdate('%fooValue%', Criteria::LIKE); // WHERE OetdStrtDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetdstrtdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdstrtdate($oetdstrtdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetdstrtdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDSTRTDATE, $oetdstrtdate, $comparison);
    }

    /**
     * Filter the query on the OetdEndDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdenddate('fooValue');   // WHERE OetdEndDate = 'fooValue'
     * $query->filterByOetdenddate('%fooValue%', Criteria::LIKE); // WHERE OetdEndDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetdenddate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdenddate($oetdenddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetdenddate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDENDDATE, $oetdenddate, $comparison);
    }

    /**
     * Filter the query on the OetdLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdlastdate('fooValue');   // WHERE OetdLastDate = 'fooValue'
     * $query->filterByOetdlastdate('%fooValue%', Criteria::LIKE); // WHERE OetdLastDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetdlastdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdlastdate($oetdlastdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetdlastdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDLASTDATE, $oetdlastdate, $comparison);
    }

    /**
     * Filter the query on the OetdLeadCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetdleadcnt(1234); // WHERE OetdLeadCnt = 1234
     * $query->filterByOetdleadcnt(array(12, 34)); // WHERE OetdLeadCnt IN (12, 34)
     * $query->filterByOetdleadcnt(array('min' => 12)); // WHERE OetdLeadCnt > 12
     * </code>
     *
     * @param     mixed $oetdleadcnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByOetdleadcnt($oetdleadcnt = null, $comparison = null)
    {
        if (is_array($oetdleadcnt)) {
            $useMinMax = false;
            if (isset($oetdleadcnt['min'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDLEADCNT, $oetdleadcnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetdleadcnt['max'])) {
                $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDLEADCNT, $oetdleadcnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_OETDLEADCNT, $oetdleadcnt, $comparison);
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoStandingOrderDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

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
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(SoStandingOrderDetailTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

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
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(SoStandingOrderDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SoStandingOrderDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
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
     * @param   ChildSoStandingOrderDetail $soStandingOrderDetail Object to remove from the list of results
     *
     * @return $this|ChildSoStandingOrderDetailQuery The current query, for fluid interface
     */
    public function prune($soStandingOrderDetail = null)
    {
        if ($soStandingOrderDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SoStandingOrderDetailTableMap::COL_ARCUCUSTID), $soStandingOrderDetail->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SoStandingOrderDetailTableMap::COL_ARSTSHIPID), $soStandingOrderDetail->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SoStandingOrderDetailTableMap::COL_INITITEMNBR), $soStandingOrderDetail->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SoStandingOrderDetailTableMap::COL_OETDSEQ), $soStandingOrderDetail->getOetdseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_stand_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoStandingOrderDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoStandingOrderDetailTableMap::clearInstancePool();
            SoStandingOrderDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoStandingOrderDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoStandingOrderDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoStandingOrderDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoStandingOrderDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoStandingOrderDetailQuery
