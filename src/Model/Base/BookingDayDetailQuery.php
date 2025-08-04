<?php

namespace Base;

use \BookingDayDetail as ChildBookingDayDetail;
use \BookingDayDetailQuery as ChildBookingDayDetailQuery;
use \Exception;
use \PDO;
use Map\BookingDayDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_book_by_day_det` table.
 *
 * @method     ChildBookingDayDetailQuery orderByBkgddate($order = Criteria::ASC) Order by the BkgdDate column
 * @method     ChildBookingDayDetailQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildBookingDayDetailQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildBookingDayDetailQuery orderByBkgdordrbase($order = Criteria::ASC) Order by the BkgdOrdrBase column
 * @method     ChildBookingDayDetailQuery orderByBkgdorigline($order = Criteria::ASC) Order by the BkgdOrigLine column
 * @method     ChildBookingDayDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildBookingDayDetailQuery orderByBkgdordrnbr($order = Criteria::ASC) Order by the BkgdOrdrNbr column
 * @method     ChildBookingDayDetailQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildBookingDayDetailQuery orderByBkgdb4qty($order = Criteria::ASC) Order by the BkgdB4Qty column
 * @method     ChildBookingDayDetailQuery orderByBkgdb4pric($order = Criteria::ASC) Order by the BkgdB4Pric column
 * @method     ChildBookingDayDetailQuery orderByBkgdb4uom($order = Criteria::ASC) Order by the BkgdB4Uom column
 * @method     ChildBookingDayDetailQuery orderByBkgdaftqty($order = Criteria::ASC) Order by the BkgdAftQty column
 * @method     ChildBookingDayDetailQuery orderByBkgdaftpric($order = Criteria::ASC) Order by the BkgdAftPric column
 * @method     ChildBookingDayDetailQuery orderByBkgdaftuom($order = Criteria::ASC) Order by the BkgdAftUom column
 * @method     ChildBookingDayDetailQuery orderByBkgdnetamt($order = Criteria::ASC) Order by the BkgdNetAmt column
 * @method     ChildBookingDayDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBookingDayDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBookingDayDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBookingDayDetailQuery groupByBkgddate() Group by the BkgdDate column
 * @method     ChildBookingDayDetailQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildBookingDayDetailQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildBookingDayDetailQuery groupByBkgdordrbase() Group by the BkgdOrdrBase column
 * @method     ChildBookingDayDetailQuery groupByBkgdorigline() Group by the BkgdOrigLine column
 * @method     ChildBookingDayDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildBookingDayDetailQuery groupByBkgdordrnbr() Group by the BkgdOrdrNbr column
 * @method     ChildBookingDayDetailQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildBookingDayDetailQuery groupByBkgdb4qty() Group by the BkgdB4Qty column
 * @method     ChildBookingDayDetailQuery groupByBkgdb4pric() Group by the BkgdB4Pric column
 * @method     ChildBookingDayDetailQuery groupByBkgdb4uom() Group by the BkgdB4Uom column
 * @method     ChildBookingDayDetailQuery groupByBkgdaftqty() Group by the BkgdAftQty column
 * @method     ChildBookingDayDetailQuery groupByBkgdaftpric() Group by the BkgdAftPric column
 * @method     ChildBookingDayDetailQuery groupByBkgdaftuom() Group by the BkgdAftUom column
 * @method     ChildBookingDayDetailQuery groupByBkgdnetamt() Group by the BkgdNetAmt column
 * @method     ChildBookingDayDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBookingDayDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBookingDayDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBookingDayDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookingDayDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookingDayDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookingDayDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookingDayDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookingDayDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBookingDayDetailQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildBookingDayDetailQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildBookingDayDetailQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildBookingDayDetailQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildBookingDayDetailQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildBookingDayDetailQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildBookingDayDetailQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildBookingDayDetailQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildBookingDayDetailQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildBookingDayDetailQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildBookingDayDetailQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildBookingDayDetailQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildBookingDayDetailQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildBookingDayDetailQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildBookingDayDetailQuery leftJoinSalesPerson($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingDayDetailQuery rightJoinSalesPerson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingDayDetailQuery innerJoinSalesPerson($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesPerson relation
 *
 * @method     ChildBookingDayDetailQuery joinWithSalesPerson($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesPerson relation
 *
 * @method     ChildBookingDayDetailQuery leftJoinWithSalesPerson() Adds a LEFT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingDayDetailQuery rightJoinWithSalesPerson() Adds a RIGHT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingDayDetailQuery innerJoinWithSalesPerson() Adds a INNER JOIN clause and with to the query using the SalesPerson relation
 *
 * @method     \CustomerQuery|\CustomerShiptoQuery|\SalesPersonQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBookingDayDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildBookingDayDetail matching the query
 * @method     ChildBookingDayDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildBookingDayDetail matching the query, or a new ChildBookingDayDetail object populated from the query conditions when no match is found
 *
 * @method     ChildBookingDayDetail|null findOneByBkgddate(string $BkgdDate) Return the first ChildBookingDayDetail filtered by the BkgdDate column
 * @method     ChildBookingDayDetail|null findOneByArcucustid(string $ArcuCustId) Return the first ChildBookingDayDetail filtered by the ArcuCustId column
 * @method     ChildBookingDayDetail|null findOneByArstshipid(string $ArstShipId) Return the first ChildBookingDayDetail filtered by the ArstShipId column
 * @method     ChildBookingDayDetail|null findOneByBkgdordrbase(string $BkgdOrdrBase) Return the first ChildBookingDayDetail filtered by the BkgdOrdrBase column
 * @method     ChildBookingDayDetail|null findOneByBkgdorigline(int $BkgdOrigLine) Return the first ChildBookingDayDetail filtered by the BkgdOrigLine column
 * @method     ChildBookingDayDetail|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildBookingDayDetail filtered by the InitItemNbr column
 * @method     ChildBookingDayDetail|null findOneByBkgdordrnbr(string $BkgdOrdrNbr) Return the first ChildBookingDayDetail filtered by the BkgdOrdrNbr column
 * @method     ChildBookingDayDetail|null findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingDayDetail filtered by the ArspSalePer1 column
 * @method     ChildBookingDayDetail|null findOneByBkgdb4qty(string $BkgdB4Qty) Return the first ChildBookingDayDetail filtered by the BkgdB4Qty column
 * @method     ChildBookingDayDetail|null findOneByBkgdb4pric(string $BkgdB4Pric) Return the first ChildBookingDayDetail filtered by the BkgdB4Pric column
 * @method     ChildBookingDayDetail|null findOneByBkgdb4uom(string $BkgdB4Uom) Return the first ChildBookingDayDetail filtered by the BkgdB4Uom column
 * @method     ChildBookingDayDetail|null findOneByBkgdaftqty(string $BkgdAftQty) Return the first ChildBookingDayDetail filtered by the BkgdAftQty column
 * @method     ChildBookingDayDetail|null findOneByBkgdaftpric(string $BkgdAftPric) Return the first ChildBookingDayDetail filtered by the BkgdAftPric column
 * @method     ChildBookingDayDetail|null findOneByBkgdaftuom(string $BkgdAftUom) Return the first ChildBookingDayDetail filtered by the BkgdAftUom column
 * @method     ChildBookingDayDetail|null findOneByBkgdnetamt(string $BkgdNetAmt) Return the first ChildBookingDayDetail filtered by the BkgdNetAmt column
 * @method     ChildBookingDayDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDayDetail filtered by the DateUpdtd column
 * @method     ChildBookingDayDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDayDetail filtered by the TimeUpdtd column
 * @method     ChildBookingDayDetail|null findOneByDummy(string $dummy) Return the first ChildBookingDayDetail filtered by the dummy column
 *
 * @method     ChildBookingDayDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildBookingDayDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOne(?ConnectionInterface $con = null) Return the first ChildBookingDayDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDayDetail requireOneByBkgddate(string $BkgdDate) Return the first ChildBookingDayDetail filtered by the BkgdDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByArcucustid(string $ArcuCustId) Return the first ChildBookingDayDetail filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByArstshipid(string $ArstShipId) Return the first ChildBookingDayDetail filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdordrbase(string $BkgdOrdrBase) Return the first ChildBookingDayDetail filtered by the BkgdOrdrBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdorigline(int $BkgdOrigLine) Return the first ChildBookingDayDetail filtered by the BkgdOrigLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildBookingDayDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdordrnbr(string $BkgdOrdrNbr) Return the first ChildBookingDayDetail filtered by the BkgdOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingDayDetail filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdb4qty(string $BkgdB4Qty) Return the first ChildBookingDayDetail filtered by the BkgdB4Qty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdb4pric(string $BkgdB4Pric) Return the first ChildBookingDayDetail filtered by the BkgdB4Pric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdb4uom(string $BkgdB4Uom) Return the first ChildBookingDayDetail filtered by the BkgdB4Uom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdaftqty(string $BkgdAftQty) Return the first ChildBookingDayDetail filtered by the BkgdAftQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdaftpric(string $BkgdAftPric) Return the first ChildBookingDayDetail filtered by the BkgdAftPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdaftuom(string $BkgdAftUom) Return the first ChildBookingDayDetail filtered by the BkgdAftUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByBkgdnetamt(string $BkgdNetAmt) Return the first ChildBookingDayDetail filtered by the BkgdNetAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDayDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDayDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDayDetail requireOneByDummy(string $dummy) Return the first ChildBookingDayDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDayDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildBookingDayDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> find(?ConnectionInterface $con = null) Return ChildBookingDayDetail objects based on current ModelCriteria
 *
 * @method     ChildBookingDayDetail[]|Collection findByBkgddate(string|array<string> $BkgdDate) Return ChildBookingDayDetail objects filtered by the BkgdDate column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgddate(string|array<string> $BkgdDate) Return ChildBookingDayDetail objects filtered by the BkgdDate column
 * @method     ChildBookingDayDetail[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildBookingDayDetail objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByArcucustid(string|array<string> $ArcuCustId) Return ChildBookingDayDetail objects filtered by the ArcuCustId column
 * @method     ChildBookingDayDetail[]|Collection findByArstshipid(string|array<string> $ArstShipId) Return ChildBookingDayDetail objects filtered by the ArstShipId column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByArstshipid(string|array<string> $ArstShipId) Return ChildBookingDayDetail objects filtered by the ArstShipId column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdordrbase(string|array<string> $BkgdOrdrBase) Return ChildBookingDayDetail objects filtered by the BkgdOrdrBase column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdordrbase(string|array<string> $BkgdOrdrBase) Return ChildBookingDayDetail objects filtered by the BkgdOrdrBase column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdorigline(int|array<int> $BkgdOrigLine) Return ChildBookingDayDetail objects filtered by the BkgdOrigLine column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdorigline(int|array<int> $BkgdOrigLine) Return ChildBookingDayDetail objects filtered by the BkgdOrigLine column
 * @method     ChildBookingDayDetail[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildBookingDayDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildBookingDayDetail objects filtered by the InitItemNbr column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdordrnbr(string|array<string> $BkgdOrdrNbr) Return ChildBookingDayDetail objects filtered by the BkgdOrdrNbr column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdordrnbr(string|array<string> $BkgdOrdrNbr) Return ChildBookingDayDetail objects filtered by the BkgdOrdrNbr column
 * @method     ChildBookingDayDetail[]|Collection findByArspsaleper1(string|array<string> $ArspSalePer1) Return ChildBookingDayDetail objects filtered by the ArspSalePer1 column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByArspsaleper1(string|array<string> $ArspSalePer1) Return ChildBookingDayDetail objects filtered by the ArspSalePer1 column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdb4qty(string|array<string> $BkgdB4Qty) Return ChildBookingDayDetail objects filtered by the BkgdB4Qty column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdb4qty(string|array<string> $BkgdB4Qty) Return ChildBookingDayDetail objects filtered by the BkgdB4Qty column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdb4pric(string|array<string> $BkgdB4Pric) Return ChildBookingDayDetail objects filtered by the BkgdB4Pric column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdb4pric(string|array<string> $BkgdB4Pric) Return ChildBookingDayDetail objects filtered by the BkgdB4Pric column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdb4uom(string|array<string> $BkgdB4Uom) Return ChildBookingDayDetail objects filtered by the BkgdB4Uom column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdb4uom(string|array<string> $BkgdB4Uom) Return ChildBookingDayDetail objects filtered by the BkgdB4Uom column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdaftqty(string|array<string> $BkgdAftQty) Return ChildBookingDayDetail objects filtered by the BkgdAftQty column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdaftqty(string|array<string> $BkgdAftQty) Return ChildBookingDayDetail objects filtered by the BkgdAftQty column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdaftpric(string|array<string> $BkgdAftPric) Return ChildBookingDayDetail objects filtered by the BkgdAftPric column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdaftpric(string|array<string> $BkgdAftPric) Return ChildBookingDayDetail objects filtered by the BkgdAftPric column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdaftuom(string|array<string> $BkgdAftUom) Return ChildBookingDayDetail objects filtered by the BkgdAftUom column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdaftuom(string|array<string> $BkgdAftUom) Return ChildBookingDayDetail objects filtered by the BkgdAftUom column
 * @method     ChildBookingDayDetail[]|Collection findByBkgdnetamt(string|array<string> $BkgdNetAmt) Return ChildBookingDayDetail objects filtered by the BkgdNetAmt column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByBkgdnetamt(string|array<string> $BkgdNetAmt) Return ChildBookingDayDetail objects filtered by the BkgdNetAmt column
 * @method     ChildBookingDayDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildBookingDayDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildBookingDayDetail objects filtered by the DateUpdtd column
 * @method     ChildBookingDayDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildBookingDayDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildBookingDayDetail objects filtered by the TimeUpdtd column
 * @method     ChildBookingDayDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildBookingDayDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildBookingDayDetail> findByDummy(string|array<string> $dummy) Return ChildBookingDayDetail objects filtered by the dummy column
 *
 * @method     ChildBookingDayDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildBookingDayDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class BookingDayDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BookingDayDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BookingDayDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookingDayDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookingDayDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildBookingDayDetailQuery) {
            return $criteria;
        }
        $query = new ChildBookingDayDetailQuery();
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
     * @param array[$BkgdDate, $ArcuCustId, $ArstShipId, $BkgdOrdrBase, $BkgdOrigLine, $InitItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBookingDayDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookingDayDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookingDayDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildBookingDayDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT BkgdDate, ArcuCustId, ArstShipId, BkgdOrdrBase, BkgdOrigLine, InitItemNbr, BkgdOrdrNbr, ArspSalePer1, BkgdB4Qty, BkgdB4Pric, BkgdB4Uom, BkgdAftQty, BkgdAftPric, BkgdAftUom, BkgdNetAmt, DateUpdtd, TimeUpdtd, dummy FROM so_book_by_day_det WHERE BkgdDate = :p0 AND ArcuCustId = :p1 AND ArstShipId = :p2 AND BkgdOrdrBase = :p3 AND BkgdOrigLine = :p4 AND InitItemNbr = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildBookingDayDetail $obj */
            $obj = new ChildBookingDayDetail();
            $obj->hydrate($row);
            BookingDayDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildBookingDayDetail|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDDATE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayDetailTableMap::COL_ARCUCUSTID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayDetailTableMap::COL_ARSTSHIPID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORDRBASE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORIGLINE, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(BookingDayDetailTableMap::COL_INITITEMNBR, $key[5], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(BookingDayDetailTableMap::COL_BKGDDATE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BookingDayDetailTableMap::COL_ARCUCUSTID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(BookingDayDetailTableMap::COL_ARSTSHIPID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(BookingDayDetailTableMap::COL_BKGDORDRBASE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(BookingDayDetailTableMap::COL_BKGDORIGLINE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(BookingDayDetailTableMap::COL_INITITEMNBR, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the BkgdDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgddate('fooValue');   // WHERE BkgdDate = 'fooValue'
     * $query->filterByBkgddate('%fooValue%', Criteria::LIKE); // WHERE BkgdDate LIKE '%fooValue%'
     * $query->filterByBkgddate(['foo', 'bar']); // WHERE BkgdDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bkgddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgddate($bkgddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDDATE, $bkgddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * $query->filterByArstshipid(['foo', 'bar']); // WHERE ArstShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdOrdrBase column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdordrbase('fooValue');   // WHERE BkgdOrdrBase = 'fooValue'
     * $query->filterByBkgdordrbase('%fooValue%', Criteria::LIKE); // WHERE BkgdOrdrBase LIKE '%fooValue%'
     * $query->filterByBkgdordrbase(['foo', 'bar']); // WHERE BkgdOrdrBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bkgdordrbase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdordrbase($bkgdordrbase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgdordrbase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORDRBASE, $bkgdordrbase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdOrigLine column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdorigline(1234); // WHERE BkgdOrigLine = 1234
     * $query->filterByBkgdorigline(array(12, 34)); // WHERE BkgdOrigLine IN (12, 34)
     * $query->filterByBkgdorigline(array('min' => 12)); // WHERE BkgdOrigLine > 12
     * </code>
     *
     * @param mixed $bkgdorigline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdorigline($bkgdorigline = null, ?string $comparison = null)
    {
        if (is_array($bkgdorigline)) {
            $useMinMax = false;
            if (isset($bkgdorigline['min'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORIGLINE, $bkgdorigline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgdorigline['max'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORIGLINE, $bkgdorigline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORIGLINE, $bkgdorigline, $comparison);

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

        $this->addUsingAlias(BookingDayDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdordrnbr('fooValue');   // WHERE BkgdOrdrNbr = 'fooValue'
     * $query->filterByBkgdordrnbr('%fooValue%', Criteria::LIKE); // WHERE BkgdOrdrNbr LIKE '%fooValue%'
     * $query->filterByBkgdordrnbr(['foo', 'bar']); // WHERE BkgdOrdrNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bkgdordrnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdordrnbr($bkgdordrnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgdordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDORDRNBR, $bkgdordrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * $query->filterByArspsaleper1(['foo', 'bar']); // WHERE ArspSalePer1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdB4Qty column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdb4qty(1234); // WHERE BkgdB4Qty = 1234
     * $query->filterByBkgdb4qty(array(12, 34)); // WHERE BkgdB4Qty IN (12, 34)
     * $query->filterByBkgdb4qty(array('min' => 12)); // WHERE BkgdB4Qty > 12
     * </code>
     *
     * @param mixed $bkgdb4qty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdb4qty($bkgdb4qty = null, ?string $comparison = null)
    {
        if (is_array($bkgdb4qty)) {
            $useMinMax = false;
            if (isset($bkgdb4qty['min'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4QTY, $bkgdb4qty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgdb4qty['max'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4QTY, $bkgdb4qty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4QTY, $bkgdb4qty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdB4Pric column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdb4pric(1234); // WHERE BkgdB4Pric = 1234
     * $query->filterByBkgdb4pric(array(12, 34)); // WHERE BkgdB4Pric IN (12, 34)
     * $query->filterByBkgdb4pric(array('min' => 12)); // WHERE BkgdB4Pric > 12
     * </code>
     *
     * @param mixed $bkgdb4pric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdb4pric($bkgdb4pric = null, ?string $comparison = null)
    {
        if (is_array($bkgdb4pric)) {
            $useMinMax = false;
            if (isset($bkgdb4pric['min'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4PRIC, $bkgdb4pric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgdb4pric['max'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4PRIC, $bkgdb4pric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4PRIC, $bkgdb4pric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdB4Uom column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdb4uom('fooValue');   // WHERE BkgdB4Uom = 'fooValue'
     * $query->filterByBkgdb4uom('%fooValue%', Criteria::LIKE); // WHERE BkgdB4Uom LIKE '%fooValue%'
     * $query->filterByBkgdb4uom(['foo', 'bar']); // WHERE BkgdB4Uom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bkgdb4uom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdb4uom($bkgdb4uom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgdb4uom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDB4UOM, $bkgdb4uom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdAftQty column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdaftqty(1234); // WHERE BkgdAftQty = 1234
     * $query->filterByBkgdaftqty(array(12, 34)); // WHERE BkgdAftQty IN (12, 34)
     * $query->filterByBkgdaftqty(array('min' => 12)); // WHERE BkgdAftQty > 12
     * </code>
     *
     * @param mixed $bkgdaftqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdaftqty($bkgdaftqty = null, ?string $comparison = null)
    {
        if (is_array($bkgdaftqty)) {
            $useMinMax = false;
            if (isset($bkgdaftqty['min'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTQTY, $bkgdaftqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgdaftqty['max'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTQTY, $bkgdaftqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTQTY, $bkgdaftqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdAftPric column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdaftpric(1234); // WHERE BkgdAftPric = 1234
     * $query->filterByBkgdaftpric(array(12, 34)); // WHERE BkgdAftPric IN (12, 34)
     * $query->filterByBkgdaftpric(array('min' => 12)); // WHERE BkgdAftPric > 12
     * </code>
     *
     * @param mixed $bkgdaftpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdaftpric($bkgdaftpric = null, ?string $comparison = null)
    {
        if (is_array($bkgdaftpric)) {
            $useMinMax = false;
            if (isset($bkgdaftpric['min'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTPRIC, $bkgdaftpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgdaftpric['max'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTPRIC, $bkgdaftpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTPRIC, $bkgdaftpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdAftUom column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdaftuom('fooValue');   // WHERE BkgdAftUom = 'fooValue'
     * $query->filterByBkgdaftuom('%fooValue%', Criteria::LIKE); // WHERE BkgdAftUom LIKE '%fooValue%'
     * $query->filterByBkgdaftuom(['foo', 'bar']); // WHERE BkgdAftUom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $bkgdaftuom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdaftuom($bkgdaftuom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkgdaftuom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDAFTUOM, $bkgdaftuom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BkgdNetAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByBkgdnetamt(1234); // WHERE BkgdNetAmt = 1234
     * $query->filterByBkgdnetamt(array(12, 34)); // WHERE BkgdNetAmt IN (12, 34)
     * $query->filterByBkgdnetamt(array('min' => 12)); // WHERE BkgdNetAmt > 12
     * </code>
     *
     * @param mixed $bkgdnetamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBkgdnetamt($bkgdnetamt = null, ?string $comparison = null)
    {
        if (is_array($bkgdnetamt)) {
            $useMinMax = false;
            if (isset($bkgdnetamt['min'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDNETAMT, $bkgdnetamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkgdnetamt['max'])) {
                $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDNETAMT, $bkgdnetamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(BookingDayDetailTableMap::COL_BKGDNETAMT, $bkgdnetamt, $comparison);

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

        $this->addUsingAlias(BookingDayDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(BookingDayDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(BookingDayDetailTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(BookingDayDetailTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(BookingDayDetailTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, ?string $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(BookingDayDetailTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(BookingDayDetailTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomerShipto(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @param callable(\CustomerShiptoQuery):\CustomerShiptoQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerShiptoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerShiptoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to CustomerShipto table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerShiptoQuery The inner query object of the EXISTS statement
     */
    public function useCustomerShiptoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT EXISTS query.
     *
     * @see useCustomerShiptoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerShiptoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useExistsQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerShiptoQuery The inner query object of the IN statement
     */
    public function useInCustomerShiptoQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to CustomerShipto table for a NOT IN query.
     *
     * @see useCustomerShiptoInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerShiptoQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerShiptoQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerShiptoQuery */
        $q = $this->useInQuery('CustomerShipto', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesPerson object
     *
     * @param \SalesPerson|ObjectCollection $salesPerson The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesPerson($salesPerson, ?string $comparison = null)
    {
        if ($salesPerson instanceof \SalesPerson) {
            return $this
                ->addUsingAlias(BookingDayDetailTableMap::COL_ARSPSALEPER1, $salesPerson->getArspsaleper1(), $comparison);
        } elseif ($salesPerson instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(BookingDayDetailTableMap::COL_ARSPSALEPER1, $salesPerson->toKeyValue('PrimaryKey', 'Arspsaleper1'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesPerson() only accepts arguments of type \SalesPerson or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesPerson relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesPerson(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesPerson');

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
            $this->addJoinObject($join, 'SalesPerson');
        }

        return $this;
    }

    /**
     * Use the SalesPerson relation SalesPerson object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesPersonQuery A secondary query class using the current class as primary query
     */
    public function useSalesPersonQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesPerson($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesPerson', '\SalesPersonQuery');
    }

    /**
     * Use the SalesPerson relation SalesPerson object
     *
     * @param callable(\SalesPersonQuery):\SalesPersonQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesPersonQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSalesPersonQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesPerson table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesPersonQuery The inner query object of the EXISTS statement
     */
    public function useSalesPersonExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesPersonQuery */
        $q = $this->useExistsQuery('SalesPerson', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesPerson table for a NOT EXISTS query.
     *
     * @see useSalesPersonExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesPersonQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesPersonNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesPersonQuery */
        $q = $this->useExistsQuery('SalesPerson', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesPerson table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesPersonQuery The inner query object of the IN statement
     */
    public function useInSalesPersonQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesPersonQuery */
        $q = $this->useInQuery('SalesPerson', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesPerson table for a NOT IN query.
     *
     * @see useSalesPersonInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesPersonQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesPersonQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesPersonQuery */
        $q = $this->useInQuery('SalesPerson', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildBookingDayDetail $bookingDayDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($bookingDayDetail = null)
    {
        if ($bookingDayDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BookingDayDetailTableMap::COL_BKGDDATE), $bookingDayDetail->getBkgddate(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BookingDayDetailTableMap::COL_ARCUCUSTID), $bookingDayDetail->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(BookingDayDetailTableMap::COL_ARSTSHIPID), $bookingDayDetail->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(BookingDayDetailTableMap::COL_BKGDORDRBASE), $bookingDayDetail->getBkgdordrbase(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(BookingDayDetailTableMap::COL_BKGDORIGLINE), $bookingDayDetail->getBkgdorigline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(BookingDayDetailTableMap::COL_INITITEMNBR), $bookingDayDetail->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_book_by_day_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookingDayDetailTableMap::clearInstancePool();
            BookingDayDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDayDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookingDayDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookingDayDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookingDayDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
