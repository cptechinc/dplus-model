<?php

namespace Base;

use \SalesPerson as ChildSalesPerson;
use \SalesPersonQuery as ChildSalesPersonQuery;
use \Exception;
use \PDO;
use Map\SalesPersonTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_saleper1' table.
 *
 *
 *
 * @method     ChildSalesPersonQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildSalesPersonQuery orderByArspname($order = Criteria::ASC) Order by the ArspName column
 * @method     ChildSalesPersonQuery orderByArspmtdsale($order = Criteria::ASC) Order by the ArspMtdSale column
 * @method     ChildSalesPersonQuery orderByArspytdsale($order = Criteria::ASC) Order by the ArspYtdSale column
 * @method     ChildSalesPersonQuery orderByArspltdsale($order = Criteria::ASC) Order by the ArspLtdSale column
 * @method     ChildSalesPersonQuery orderByArsplastsaledate($order = Criteria::ASC) Order by the ArspLastSaleDate column
 * @method     ChildSalesPersonQuery orderByArspmtdcommearn($order = Criteria::ASC) Order by the ArspMtdCommEarn column
 * @method     ChildSalesPersonQuery orderByArspytdcommearn($order = Criteria::ASC) Order by the ArspYtdCommEarn column
 * @method     ChildSalesPersonQuery orderByArspltdcommearn($order = Criteria::ASC) Order by the ArspLtdCommEarn column
 * @method     ChildSalesPersonQuery orderByArspmtdcommpaid($order = Criteria::ASC) Order by the ArspMtdCommPaid column
 * @method     ChildSalesPersonQuery orderByArspytdcommpaid($order = Criteria::ASC) Order by the ArspYtdCommPaid column
 * @method     ChildSalesPersonQuery orderByArspltdcommpaid($order = Criteria::ASC) Order by the ArspLtdCommPaid column
 * @method     ChildSalesPersonQuery orderByArspcommcycle($order = Criteria::ASC) Order by the ArspCommCycle column
 * @method     ChildSalesPersonQuery orderByArspgrup($order = Criteria::ASC) Order by the ArspGrup column
 * @method     ChildSalesPersonQuery orderByArsplogin($order = Criteria::ASC) Order by the ArspLogin column
 * @method     ChildSalesPersonQuery orderByArspmgr($order = Criteria::ASC) Order by the ArspMgr column
 * @method     ChildSalesPersonQuery orderByArspvendid($order = Criteria::ASC) Order by the ArspVendId column
 * @method     ChildSalesPersonQuery orderByArsprestrictaccess($order = Criteria::ASC) Order by the ArspRestrictAccess column
 * @method     ChildSalesPersonQuery orderByArspemailaddr($order = Criteria::ASC) Order by the ArspEmailAddr column
 * @method     ChildSalesPersonQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesPersonQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesPersonQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesPersonQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildSalesPersonQuery groupByArspname() Group by the ArspName column
 * @method     ChildSalesPersonQuery groupByArspmtdsale() Group by the ArspMtdSale column
 * @method     ChildSalesPersonQuery groupByArspytdsale() Group by the ArspYtdSale column
 * @method     ChildSalesPersonQuery groupByArspltdsale() Group by the ArspLtdSale column
 * @method     ChildSalesPersonQuery groupByArsplastsaledate() Group by the ArspLastSaleDate column
 * @method     ChildSalesPersonQuery groupByArspmtdcommearn() Group by the ArspMtdCommEarn column
 * @method     ChildSalesPersonQuery groupByArspytdcommearn() Group by the ArspYtdCommEarn column
 * @method     ChildSalesPersonQuery groupByArspltdcommearn() Group by the ArspLtdCommEarn column
 * @method     ChildSalesPersonQuery groupByArspmtdcommpaid() Group by the ArspMtdCommPaid column
 * @method     ChildSalesPersonQuery groupByArspytdcommpaid() Group by the ArspYtdCommPaid column
 * @method     ChildSalesPersonQuery groupByArspltdcommpaid() Group by the ArspLtdCommPaid column
 * @method     ChildSalesPersonQuery groupByArspcommcycle() Group by the ArspCommCycle column
 * @method     ChildSalesPersonQuery groupByArspgrup() Group by the ArspGrup column
 * @method     ChildSalesPersonQuery groupByArsplogin() Group by the ArspLogin column
 * @method     ChildSalesPersonQuery groupByArspmgr() Group by the ArspMgr column
 * @method     ChildSalesPersonQuery groupByArspvendid() Group by the ArspVendId column
 * @method     ChildSalesPersonQuery groupByArsprestrictaccess() Group by the ArspRestrictAccess column
 * @method     ChildSalesPersonQuery groupByArspemailaddr() Group by the ArspEmailAddr column
 * @method     ChildSalesPersonQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesPersonQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesPersonQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesPersonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesPersonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesPersonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesPersonQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesPersonQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesPersonQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesPersonQuery leftJoinBookingDayCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayCustomer relation
 * @method     ChildSalesPersonQuery rightJoinBookingDayCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayCustomer relation
 * @method     ChildSalesPersonQuery innerJoinBookingDayCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayCustomer relation
 *
 * @method     ChildSalesPersonQuery joinWithBookingDayCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayCustomer relation
 *
 * @method     ChildSalesPersonQuery leftJoinWithBookingDayCustomer() Adds a LEFT JOIN clause and with to the query using the BookingDayCustomer relation
 * @method     ChildSalesPersonQuery rightJoinWithBookingDayCustomer() Adds a RIGHT JOIN clause and with to the query using the BookingDayCustomer relation
 * @method     ChildSalesPersonQuery innerJoinWithBookingDayCustomer() Adds a INNER JOIN clause and with to the query using the BookingDayCustomer relation
 *
 * @method     ChildSalesPersonQuery leftJoinBookingDayDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayDetail relation
 * @method     ChildSalesPersonQuery rightJoinBookingDayDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayDetail relation
 * @method     ChildSalesPersonQuery innerJoinBookingDayDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayDetail relation
 *
 * @method     ChildSalesPersonQuery joinWithBookingDayDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayDetail relation
 *
 * @method     ChildSalesPersonQuery leftJoinWithBookingDayDetail() Adds a LEFT JOIN clause and with to the query using the BookingDayDetail relation
 * @method     ChildSalesPersonQuery rightJoinWithBookingDayDetail() Adds a RIGHT JOIN clause and with to the query using the BookingDayDetail relation
 * @method     ChildSalesPersonQuery innerJoinWithBookingDayDetail() Adds a INNER JOIN clause and with to the query using the BookingDayDetail relation
 *
 * @method     ChildSalesPersonQuery leftJoinBookingDayRep($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayRep relation
 * @method     ChildSalesPersonQuery rightJoinBookingDayRep($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayRep relation
 * @method     ChildSalesPersonQuery innerJoinBookingDayRep($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayRep relation
 *
 * @method     ChildSalesPersonQuery joinWithBookingDayRep($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayRep relation
 *
 * @method     ChildSalesPersonQuery leftJoinWithBookingDayRep() Adds a LEFT JOIN clause and with to the query using the BookingDayRep relation
 * @method     ChildSalesPersonQuery rightJoinWithBookingDayRep() Adds a RIGHT JOIN clause and with to the query using the BookingDayRep relation
 * @method     ChildSalesPersonQuery innerJoinWithBookingDayRep() Adds a INNER JOIN clause and with to the query using the BookingDayRep relation
 *
 * @method     ChildSalesPersonQuery leftJoinBookingSummaryRep($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingSummaryRep relation
 * @method     ChildSalesPersonQuery rightJoinBookingSummaryRep($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingSummaryRep relation
 * @method     ChildSalesPersonQuery innerJoinBookingSummaryRep($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingSummaryRep relation
 *
 * @method     ChildSalesPersonQuery joinWithBookingSummaryRep($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingSummaryRep relation
 *
 * @method     ChildSalesPersonQuery leftJoinWithBookingSummaryRep() Adds a LEFT JOIN clause and with to the query using the BookingSummaryRep relation
 * @method     ChildSalesPersonQuery rightJoinWithBookingSummaryRep() Adds a RIGHT JOIN clause and with to the query using the BookingSummaryRep relation
 * @method     ChildSalesPersonQuery innerJoinWithBookingSummaryRep() Adds a INNER JOIN clause and with to the query using the BookingSummaryRep relation
 *
 * @method     ChildSalesPersonQuery leftJoinBooking($relationAlias = null) Adds a LEFT JOIN clause to the query using the Booking relation
 * @method     ChildSalesPersonQuery rightJoinBooking($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Booking relation
 * @method     ChildSalesPersonQuery innerJoinBooking($relationAlias = null) Adds a INNER JOIN clause to the query using the Booking relation
 *
 * @method     ChildSalesPersonQuery joinWithBooking($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Booking relation
 *
 * @method     ChildSalesPersonQuery leftJoinWithBooking() Adds a LEFT JOIN clause and with to the query using the Booking relation
 * @method     ChildSalesPersonQuery rightJoinWithBooking() Adds a RIGHT JOIN clause and with to the query using the Booking relation
 * @method     ChildSalesPersonQuery innerJoinWithBooking() Adds a INNER JOIN clause and with to the query using the Booking relation
 *
 * @method     \BookingDayCustomerQuery|\BookingDayDetailQuery|\BookingDayRepQuery|\BookingSummaryRepQuery|\BookingQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSalesPerson findOne(ConnectionInterface $con = null) Return the first ChildSalesPerson matching the query
 * @method     ChildSalesPerson findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesPerson matching the query, or a new ChildSalesPerson object populated from the query conditions when no match is found
 *
 * @method     ChildSalesPerson findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesPerson filtered by the ArspSalePer1 column
 * @method     ChildSalesPerson findOneByArspname(string $ArspName) Return the first ChildSalesPerson filtered by the ArspName column
 * @method     ChildSalesPerson findOneByArspmtdsale(string $ArspMtdSale) Return the first ChildSalesPerson filtered by the ArspMtdSale column
 * @method     ChildSalesPerson findOneByArspytdsale(string $ArspYtdSale) Return the first ChildSalesPerson filtered by the ArspYtdSale column
 * @method     ChildSalesPerson findOneByArspltdsale(string $ArspLtdSale) Return the first ChildSalesPerson filtered by the ArspLtdSale column
 * @method     ChildSalesPerson findOneByArsplastsaledate(string $ArspLastSaleDate) Return the first ChildSalesPerson filtered by the ArspLastSaleDate column
 * @method     ChildSalesPerson findOneByArspmtdcommearn(string $ArspMtdCommEarn) Return the first ChildSalesPerson filtered by the ArspMtdCommEarn column
 * @method     ChildSalesPerson findOneByArspytdcommearn(string $ArspYtdCommEarn) Return the first ChildSalesPerson filtered by the ArspYtdCommEarn column
 * @method     ChildSalesPerson findOneByArspltdcommearn(string $ArspLtdCommEarn) Return the first ChildSalesPerson filtered by the ArspLtdCommEarn column
 * @method     ChildSalesPerson findOneByArspmtdcommpaid(string $ArspMtdCommPaid) Return the first ChildSalesPerson filtered by the ArspMtdCommPaid column
 * @method     ChildSalesPerson findOneByArspytdcommpaid(string $ArspYtdCommPaid) Return the first ChildSalesPerson filtered by the ArspYtdCommPaid column
 * @method     ChildSalesPerson findOneByArspltdcommpaid(string $ArspLtdCommPaid) Return the first ChildSalesPerson filtered by the ArspLtdCommPaid column
 * @method     ChildSalesPerson findOneByArspcommcycle(string $ArspCommCycle) Return the first ChildSalesPerson filtered by the ArspCommCycle column
 * @method     ChildSalesPerson findOneByArspgrup(string $ArspGrup) Return the first ChildSalesPerson filtered by the ArspGrup column
 * @method     ChildSalesPerson findOneByArsplogin(string $ArspLogin) Return the first ChildSalesPerson filtered by the ArspLogin column
 * @method     ChildSalesPerson findOneByArspmgr(string $ArspMgr) Return the first ChildSalesPerson filtered by the ArspMgr column
 * @method     ChildSalesPerson findOneByArspvendid(string $ArspVendId) Return the first ChildSalesPerson filtered by the ArspVendId column
 * @method     ChildSalesPerson findOneByArsprestrictaccess(string $ArspRestrictAccess) Return the first ChildSalesPerson filtered by the ArspRestrictAccess column
 * @method     ChildSalesPerson findOneByArspemailaddr(string $ArspEmailAddr) Return the first ChildSalesPerson filtered by the ArspEmailAddr column
 * @method     ChildSalesPerson findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesPerson filtered by the DateUpdtd column
 * @method     ChildSalesPerson findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesPerson filtered by the TimeUpdtd column
 * @method     ChildSalesPerson findOneByDummy(string $dummy) Return the first ChildSalesPerson filtered by the dummy column *

 * @method     ChildSalesPerson requirePk($key, ConnectionInterface $con = null) Return the ChildSalesPerson by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOne(ConnectionInterface $con = null) Return the first ChildSalesPerson matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesPerson requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildSalesPerson filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspname(string $ArspName) Return the first ChildSalesPerson filtered by the ArspName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspmtdsale(string $ArspMtdSale) Return the first ChildSalesPerson filtered by the ArspMtdSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspytdsale(string $ArspYtdSale) Return the first ChildSalesPerson filtered by the ArspYtdSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspltdsale(string $ArspLtdSale) Return the first ChildSalesPerson filtered by the ArspLtdSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArsplastsaledate(string $ArspLastSaleDate) Return the first ChildSalesPerson filtered by the ArspLastSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspmtdcommearn(string $ArspMtdCommEarn) Return the first ChildSalesPerson filtered by the ArspMtdCommEarn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspytdcommearn(string $ArspYtdCommEarn) Return the first ChildSalesPerson filtered by the ArspYtdCommEarn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspltdcommearn(string $ArspLtdCommEarn) Return the first ChildSalesPerson filtered by the ArspLtdCommEarn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspmtdcommpaid(string $ArspMtdCommPaid) Return the first ChildSalesPerson filtered by the ArspMtdCommPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspytdcommpaid(string $ArspYtdCommPaid) Return the first ChildSalesPerson filtered by the ArspYtdCommPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspltdcommpaid(string $ArspLtdCommPaid) Return the first ChildSalesPerson filtered by the ArspLtdCommPaid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspcommcycle(string $ArspCommCycle) Return the first ChildSalesPerson filtered by the ArspCommCycle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspgrup(string $ArspGrup) Return the first ChildSalesPerson filtered by the ArspGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArsplogin(string $ArspLogin) Return the first ChildSalesPerson filtered by the ArspLogin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspmgr(string $ArspMgr) Return the first ChildSalesPerson filtered by the ArspMgr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspvendid(string $ArspVendId) Return the first ChildSalesPerson filtered by the ArspVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArsprestrictaccess(string $ArspRestrictAccess) Return the first ChildSalesPerson filtered by the ArspRestrictAccess column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByArspemailaddr(string $ArspEmailAddr) Return the first ChildSalesPerson filtered by the ArspEmailAddr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesPerson filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesPerson filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesPerson requireOneByDummy(string $dummy) Return the first ChildSalesPerson filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesPerson[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesPerson objects based on current ModelCriteria
 * @method     ChildSalesPerson[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildSalesPerson objects filtered by the ArspSalePer1 column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspname(string $ArspName) Return ChildSalesPerson objects filtered by the ArspName column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspmtdsale(string $ArspMtdSale) Return ChildSalesPerson objects filtered by the ArspMtdSale column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspytdsale(string $ArspYtdSale) Return ChildSalesPerson objects filtered by the ArspYtdSale column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspltdsale(string $ArspLtdSale) Return ChildSalesPerson objects filtered by the ArspLtdSale column
 * @method     ChildSalesPerson[]|ObjectCollection findByArsplastsaledate(string $ArspLastSaleDate) Return ChildSalesPerson objects filtered by the ArspLastSaleDate column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspmtdcommearn(string $ArspMtdCommEarn) Return ChildSalesPerson objects filtered by the ArspMtdCommEarn column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspytdcommearn(string $ArspYtdCommEarn) Return ChildSalesPerson objects filtered by the ArspYtdCommEarn column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspltdcommearn(string $ArspLtdCommEarn) Return ChildSalesPerson objects filtered by the ArspLtdCommEarn column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspmtdcommpaid(string $ArspMtdCommPaid) Return ChildSalesPerson objects filtered by the ArspMtdCommPaid column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspytdcommpaid(string $ArspYtdCommPaid) Return ChildSalesPerson objects filtered by the ArspYtdCommPaid column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspltdcommpaid(string $ArspLtdCommPaid) Return ChildSalesPerson objects filtered by the ArspLtdCommPaid column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspcommcycle(string $ArspCommCycle) Return ChildSalesPerson objects filtered by the ArspCommCycle column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspgrup(string $ArspGrup) Return ChildSalesPerson objects filtered by the ArspGrup column
 * @method     ChildSalesPerson[]|ObjectCollection findByArsplogin(string $ArspLogin) Return ChildSalesPerson objects filtered by the ArspLogin column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspmgr(string $ArspMgr) Return ChildSalesPerson objects filtered by the ArspMgr column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspvendid(string $ArspVendId) Return ChildSalesPerson objects filtered by the ArspVendId column
 * @method     ChildSalesPerson[]|ObjectCollection findByArsprestrictaccess(string $ArspRestrictAccess) Return ChildSalesPerson objects filtered by the ArspRestrictAccess column
 * @method     ChildSalesPerson[]|ObjectCollection findByArspemailaddr(string $ArspEmailAddr) Return ChildSalesPerson objects filtered by the ArspEmailAddr column
 * @method     ChildSalesPerson[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesPerson objects filtered by the DateUpdtd column
 * @method     ChildSalesPerson[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesPerson objects filtered by the TimeUpdtd column
 * @method     ChildSalesPerson[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesPerson objects filtered by the dummy column
 * @method     ChildSalesPerson[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesPersonQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesPersonQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesPerson', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesPersonQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesPersonQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesPersonQuery) {
            return $criteria;
        }
        $query = new ChildSalesPersonQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesPerson|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesPersonTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSalesPerson A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArspSalePer1, ArspName, ArspMtdSale, ArspYtdSale, ArspLtdSale, ArspLastSaleDate, ArspMtdCommEarn, ArspYtdCommEarn, ArspLtdCommEarn, ArspMtdCommPaid, ArspYtdCommPaid, ArspLtdCommPaid, ArspCommCycle, ArspGrup, ArspLogin, ArspMgr, ArspVendId, ArspRestrictAccess, ArspEmailAddr, DateUpdtd, TimeUpdtd, dummy FROM ar_saleper1 WHERE ArspSalePer1 = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesPerson $obj */
            $obj = new ChildSalesPerson();
            $obj->hydrate($row);
            SalesPersonTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSalesPerson|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the ArspName column
     *
     * Example usage:
     * <code>
     * $query->filterByArspname('fooValue');   // WHERE ArspName = 'fooValue'
     * $query->filterByArspname('%fooValue%', Criteria::LIKE); // WHERE ArspName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspname($arspname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPNAME, $arspname, $comparison);
    }

    /**
     * Filter the query on the ArspMtdSale column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmtdsale(1234); // WHERE ArspMtdSale = 1234
     * $query->filterByArspmtdsale(array(12, 34)); // WHERE ArspMtdSale IN (12, 34)
     * $query->filterByArspmtdsale(array('min' => 12)); // WHERE ArspMtdSale > 12
     * </code>
     *
     * @param     mixed $arspmtdsale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspmtdsale($arspmtdsale = null, $comparison = null)
    {
        if (is_array($arspmtdsale)) {
            $useMinMax = false;
            if (isset($arspmtdsale['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDSALE, $arspmtdsale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspmtdsale['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDSALE, $arspmtdsale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDSALE, $arspmtdsale, $comparison);
    }

    /**
     * Filter the query on the ArspYtdSale column
     *
     * Example usage:
     * <code>
     * $query->filterByArspytdsale(1234); // WHERE ArspYtdSale = 1234
     * $query->filterByArspytdsale(array(12, 34)); // WHERE ArspYtdSale IN (12, 34)
     * $query->filterByArspytdsale(array('min' => 12)); // WHERE ArspYtdSale > 12
     * </code>
     *
     * @param     mixed $arspytdsale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspytdsale($arspytdsale = null, $comparison = null)
    {
        if (is_array($arspytdsale)) {
            $useMinMax = false;
            if (isset($arspytdsale['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDSALE, $arspytdsale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspytdsale['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDSALE, $arspytdsale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDSALE, $arspytdsale, $comparison);
    }

    /**
     * Filter the query on the ArspLtdSale column
     *
     * Example usage:
     * <code>
     * $query->filterByArspltdsale(1234); // WHERE ArspLtdSale = 1234
     * $query->filterByArspltdsale(array(12, 34)); // WHERE ArspLtdSale IN (12, 34)
     * $query->filterByArspltdsale(array('min' => 12)); // WHERE ArspLtdSale > 12
     * </code>
     *
     * @param     mixed $arspltdsale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspltdsale($arspltdsale = null, $comparison = null)
    {
        if (is_array($arspltdsale)) {
            $useMinMax = false;
            if (isset($arspltdsale['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDSALE, $arspltdsale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspltdsale['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDSALE, $arspltdsale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDSALE, $arspltdsale, $comparison);
    }

    /**
     * Filter the query on the ArspLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArsplastsaledate('fooValue');   // WHERE ArspLastSaleDate = 'fooValue'
     * $query->filterByArsplastsaledate('%fooValue%', Criteria::LIKE); // WHERE ArspLastSaleDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsplastsaledate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArsplastsaledate($arsplastsaledate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsplastsaledate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLASTSALEDATE, $arsplastsaledate, $comparison);
    }

    /**
     * Filter the query on the ArspMtdCommEarn column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmtdcommearn(1234); // WHERE ArspMtdCommEarn = 1234
     * $query->filterByArspmtdcommearn(array(12, 34)); // WHERE ArspMtdCommEarn IN (12, 34)
     * $query->filterByArspmtdcommearn(array('min' => 12)); // WHERE ArspMtdCommEarn > 12
     * </code>
     *
     * @param     mixed $arspmtdcommearn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspmtdcommearn($arspmtdcommearn = null, $comparison = null)
    {
        if (is_array($arspmtdcommearn)) {
            $useMinMax = false;
            if (isset($arspmtdcommearn['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDCOMMEARN, $arspmtdcommearn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspmtdcommearn['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDCOMMEARN, $arspmtdcommearn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDCOMMEARN, $arspmtdcommearn, $comparison);
    }

    /**
     * Filter the query on the ArspYtdCommEarn column
     *
     * Example usage:
     * <code>
     * $query->filterByArspytdcommearn(1234); // WHERE ArspYtdCommEarn = 1234
     * $query->filterByArspytdcommearn(array(12, 34)); // WHERE ArspYtdCommEarn IN (12, 34)
     * $query->filterByArspytdcommearn(array('min' => 12)); // WHERE ArspYtdCommEarn > 12
     * </code>
     *
     * @param     mixed $arspytdcommearn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspytdcommearn($arspytdcommearn = null, $comparison = null)
    {
        if (is_array($arspytdcommearn)) {
            $useMinMax = false;
            if (isset($arspytdcommearn['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDCOMMEARN, $arspytdcommearn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspytdcommearn['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDCOMMEARN, $arspytdcommearn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDCOMMEARN, $arspytdcommearn, $comparison);
    }

    /**
     * Filter the query on the ArspLtdCommEarn column
     *
     * Example usage:
     * <code>
     * $query->filterByArspltdcommearn(1234); // WHERE ArspLtdCommEarn = 1234
     * $query->filterByArspltdcommearn(array(12, 34)); // WHERE ArspLtdCommEarn IN (12, 34)
     * $query->filterByArspltdcommearn(array('min' => 12)); // WHERE ArspLtdCommEarn > 12
     * </code>
     *
     * @param     mixed $arspltdcommearn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspltdcommearn($arspltdcommearn = null, $comparison = null)
    {
        if (is_array($arspltdcommearn)) {
            $useMinMax = false;
            if (isset($arspltdcommearn['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDCOMMEARN, $arspltdcommearn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspltdcommearn['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDCOMMEARN, $arspltdcommearn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDCOMMEARN, $arspltdcommearn, $comparison);
    }

    /**
     * Filter the query on the ArspMtdCommPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmtdcommpaid(1234); // WHERE ArspMtdCommPaid = 1234
     * $query->filterByArspmtdcommpaid(array(12, 34)); // WHERE ArspMtdCommPaid IN (12, 34)
     * $query->filterByArspmtdcommpaid(array('min' => 12)); // WHERE ArspMtdCommPaid > 12
     * </code>
     *
     * @param     mixed $arspmtdcommpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspmtdcommpaid($arspmtdcommpaid = null, $comparison = null)
    {
        if (is_array($arspmtdcommpaid)) {
            $useMinMax = false;
            if (isset($arspmtdcommpaid['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDCOMMPAID, $arspmtdcommpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspmtdcommpaid['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDCOMMPAID, $arspmtdcommpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMTDCOMMPAID, $arspmtdcommpaid, $comparison);
    }

    /**
     * Filter the query on the ArspYtdCommPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArspytdcommpaid(1234); // WHERE ArspYtdCommPaid = 1234
     * $query->filterByArspytdcommpaid(array(12, 34)); // WHERE ArspYtdCommPaid IN (12, 34)
     * $query->filterByArspytdcommpaid(array('min' => 12)); // WHERE ArspYtdCommPaid > 12
     * </code>
     *
     * @param     mixed $arspytdcommpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspytdcommpaid($arspytdcommpaid = null, $comparison = null)
    {
        if (is_array($arspytdcommpaid)) {
            $useMinMax = false;
            if (isset($arspytdcommpaid['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDCOMMPAID, $arspytdcommpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspytdcommpaid['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDCOMMPAID, $arspytdcommpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPYTDCOMMPAID, $arspytdcommpaid, $comparison);
    }

    /**
     * Filter the query on the ArspLtdCommPaid column
     *
     * Example usage:
     * <code>
     * $query->filterByArspltdcommpaid(1234); // WHERE ArspLtdCommPaid = 1234
     * $query->filterByArspltdcommpaid(array(12, 34)); // WHERE ArspLtdCommPaid IN (12, 34)
     * $query->filterByArspltdcommpaid(array('min' => 12)); // WHERE ArspLtdCommPaid > 12
     * </code>
     *
     * @param     mixed $arspltdcommpaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspltdcommpaid($arspltdcommpaid = null, $comparison = null)
    {
        if (is_array($arspltdcommpaid)) {
            $useMinMax = false;
            if (isset($arspltdcommpaid['min'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDCOMMPAID, $arspltdcommpaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arspltdcommpaid['max'])) {
                $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDCOMMPAID, $arspltdcommpaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLTDCOMMPAID, $arspltdcommpaid, $comparison);
    }

    /**
     * Filter the query on the ArspCommCycle column
     *
     * Example usage:
     * <code>
     * $query->filterByArspcommcycle('fooValue');   // WHERE ArspCommCycle = 'fooValue'
     * $query->filterByArspcommcycle('%fooValue%', Criteria::LIKE); // WHERE ArspCommCycle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspcommcycle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspcommcycle($arspcommcycle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspcommcycle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPCOMMCYCLE, $arspcommcycle, $comparison);
    }

    /**
     * Filter the query on the ArspGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByArspgrup('fooValue');   // WHERE ArspGrup = 'fooValue'
     * $query->filterByArspgrup('%fooValue%', Criteria::LIKE); // WHERE ArspGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspgrup($arspgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPGRUP, $arspgrup, $comparison);
    }

    /**
     * Filter the query on the ArspLogin column
     *
     * Example usage:
     * <code>
     * $query->filterByArsplogin('fooValue');   // WHERE ArspLogin = 'fooValue'
     * $query->filterByArsplogin('%fooValue%', Criteria::LIKE); // WHERE ArspLogin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsplogin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArsplogin($arsplogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsplogin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPLOGIN, $arsplogin, $comparison);
    }

    /**
     * Filter the query on the ArspMgr column
     *
     * Example usage:
     * <code>
     * $query->filterByArspmgr('fooValue');   // WHERE ArspMgr = 'fooValue'
     * $query->filterByArspmgr('%fooValue%', Criteria::LIKE); // WHERE ArspMgr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspmgr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspmgr($arspmgr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspmgr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPMGR, $arspmgr, $comparison);
    }

    /**
     * Filter the query on the ArspVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByArspvendid('fooValue');   // WHERE ArspVendId = 'fooValue'
     * $query->filterByArspvendid('%fooValue%', Criteria::LIKE); // WHERE ArspVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspvendid($arspvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPVENDID, $arspvendid, $comparison);
    }

    /**
     * Filter the query on the ArspRestrictAccess column
     *
     * Example usage:
     * <code>
     * $query->filterByArsprestrictaccess('fooValue');   // WHERE ArspRestrictAccess = 'fooValue'
     * $query->filterByArsprestrictaccess('%fooValue%', Criteria::LIKE); // WHERE ArspRestrictAccess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsprestrictaccess The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArsprestrictaccess($arsprestrictaccess = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsprestrictaccess)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPRESTRICTACCESS, $arsprestrictaccess, $comparison);
    }

    /**
     * Filter the query on the ArspEmailAddr column
     *
     * Example usage:
     * <code>
     * $query->filterByArspemailaddr('fooValue');   // WHERE ArspEmailAddr = 'fooValue'
     * $query->filterByArspemailaddr('%fooValue%', Criteria::LIKE); // WHERE ArspEmailAddr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspemailaddr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByArspemailaddr($arspemailaddr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspemailaddr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_ARSPEMAILADDR, $arspemailaddr, $comparison);
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
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPersonTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \BookingDayCustomer object
     *
     * @param \BookingDayCustomer|ObjectCollection $bookingDayCustomer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByBookingDayCustomer($bookingDayCustomer, $comparison = null)
    {
        if ($bookingDayCustomer instanceof \BookingDayCustomer) {
            return $this
                ->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $bookingDayCustomer->getArspsaleper1(), $comparison);
        } elseif ($bookingDayCustomer instanceof ObjectCollection) {
            return $this
                ->useBookingDayCustomerQuery()
                ->filterByPrimaryKeys($bookingDayCustomer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingDayCustomer() only accepts arguments of type \BookingDayCustomer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayCustomer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function joinBookingDayCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingDayCustomer');

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
            $this->addJoinObject($join, 'BookingDayCustomer');
        }

        return $this;
    }

    /**
     * Use the BookingDayCustomer relation BookingDayCustomer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingDayCustomerQuery A secondary query class using the current class as primary query
     */
    public function useBookingDayCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBookingDayCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingDayCustomer', '\BookingDayCustomerQuery');
    }

    /**
     * Filter the query by a related \BookingDayDetail object
     *
     * @param \BookingDayDetail|ObjectCollection $bookingDayDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByBookingDayDetail($bookingDayDetail, $comparison = null)
    {
        if ($bookingDayDetail instanceof \BookingDayDetail) {
            return $this
                ->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $bookingDayDetail->getArspsaleper1(), $comparison);
        } elseif ($bookingDayDetail instanceof ObjectCollection) {
            return $this
                ->useBookingDayDetailQuery()
                ->filterByPrimaryKeys($bookingDayDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingDayDetail() only accepts arguments of type \BookingDayDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function joinBookingDayDetail($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingDayDetail');

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
            $this->addJoinObject($join, 'BookingDayDetail');
        }

        return $this;
    }

    /**
     * Use the BookingDayDetail relation BookingDayDetail object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingDayDetailQuery A secondary query class using the current class as primary query
     */
    public function useBookingDayDetailQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBookingDayDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingDayDetail', '\BookingDayDetailQuery');
    }

    /**
     * Filter the query by a related \BookingDayRep object
     *
     * @param \BookingDayRep|ObjectCollection $bookingDayRep the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByBookingDayRep($bookingDayRep, $comparison = null)
    {
        if ($bookingDayRep instanceof \BookingDayRep) {
            return $this
                ->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $bookingDayRep->getArspsaleper1(), $comparison);
        } elseif ($bookingDayRep instanceof ObjectCollection) {
            return $this
                ->useBookingDayRepQuery()
                ->filterByPrimaryKeys($bookingDayRep->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingDayRep() only accepts arguments of type \BookingDayRep or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayRep relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function joinBookingDayRep($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingDayRep');

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
            $this->addJoinObject($join, 'BookingDayRep');
        }

        return $this;
    }

    /**
     * Use the BookingDayRep relation BookingDayRep object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingDayRepQuery A secondary query class using the current class as primary query
     */
    public function useBookingDayRepQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBookingDayRep($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingDayRep', '\BookingDayRepQuery');
    }

    /**
     * Filter the query by a related \BookingSummaryRep object
     *
     * @param \BookingSummaryRep|ObjectCollection $bookingSummaryRep the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByBookingSummaryRep($bookingSummaryRep, $comparison = null)
    {
        if ($bookingSummaryRep instanceof \BookingSummaryRep) {
            return $this
                ->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $bookingSummaryRep->getArspsaleper1(), $comparison);
        } elseif ($bookingSummaryRep instanceof ObjectCollection) {
            return $this
                ->useBookingSummaryRepQuery()
                ->filterByPrimaryKeys($bookingSummaryRep->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingSummaryRep() only accepts arguments of type \BookingSummaryRep or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingSummaryRep relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function joinBookingSummaryRep($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingSummaryRep');

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
            $this->addJoinObject($join, 'BookingSummaryRep');
        }

        return $this;
    }

    /**
     * Use the BookingSummaryRep relation BookingSummaryRep object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingSummaryRepQuery A secondary query class using the current class as primary query
     */
    public function useBookingSummaryRepQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBookingSummaryRep($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingSummaryRep', '\BookingSummaryRepQuery');
    }

    /**
     * Filter the query by a related \Booking object
     *
     * @param \Booking|ObjectCollection $booking the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSalesPersonQuery The current query, for fluid interface
     */
    public function filterByBooking($booking, $comparison = null)
    {
        if ($booking instanceof \Booking) {
            return $this
                ->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $booking->getArspsaleper1(), $comparison);
        } elseif ($booking instanceof ObjectCollection) {
            return $this
                ->useBookingQuery()
                ->filterByPrimaryKeys($booking->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBooking() only accepts arguments of type \Booking or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Booking relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function joinBooking($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Booking');

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
            $this->addJoinObject($join, 'Booking');
        }

        return $this;
    }

    /**
     * Use the Booking relation Booking object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingQuery A secondary query class using the current class as primary query
     */
    public function useBookingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBooking($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Booking', '\BookingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesPerson $salesPerson Object to remove from the list of results
     *
     * @return $this|ChildSalesPersonQuery The current query, for fluid interface
     */
    public function prune($salesPerson = null)
    {
        if ($salesPerson) {
            $this->addUsingAlias(SalesPersonTableMap::COL_ARSPSALEPER1, $salesPerson->getArspsaleper1(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_saleper1 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesPersonTableMap::clearInstancePool();
            SalesPersonTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesPersonTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesPersonTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesPersonTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesPersonTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesPersonQuery
