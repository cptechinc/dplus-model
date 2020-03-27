<?php

namespace Base;

use \BookingSummaryRep as ChildBookingSummaryRep;
use \BookingSummaryRepQuery as ChildBookingSummaryRepQuery;
use \Exception;
use \PDO;
use Map\BookingSummaryRepTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_book_by_rep_sumry' table.
 *
 *
 *
 * @method     ChildBookingSummaryRepQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildBookingSummaryRepQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildBookingSummaryRepQuery orderByBkrptoday($order = Criteria::ASC) Order by the BkrpToday column
 * @method     ChildBookingSummaryRepQuery orderByBkrpweektodate($order = Criteria::ASC) Order by the BkrpWeekToDate column
 * @method     ChildBookingSummaryRepQuery orderByBkrpmonthtodate($order = Criteria::ASC) Order by the BkrpMonthToDate column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt1($order = Criteria::ASC) Order by the Bkrp12moAmt1 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt2($order = Criteria::ASC) Order by the Bkrp12moAmt2 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt3($order = Criteria::ASC) Order by the Bkrp12moAmt3 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt4($order = Criteria::ASC) Order by the Bkrp12moAmt4 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt5($order = Criteria::ASC) Order by the Bkrp12moAmt5 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt6($order = Criteria::ASC) Order by the Bkrp12moAmt6 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt7($order = Criteria::ASC) Order by the Bkrp12moAmt7 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt8($order = Criteria::ASC) Order by the Bkrp12moAmt8 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt9($order = Criteria::ASC) Order by the Bkrp12moAmt9 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt10($order = Criteria::ASC) Order by the Bkrp12moAmt10 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt11($order = Criteria::ASC) Order by the Bkrp12moAmt11 column
 * @method     ChildBookingSummaryRepQuery orderByBkrp12moamt12($order = Criteria::ASC) Order by the Bkrp12moAmt12 column
 * @method     ChildBookingSummaryRepQuery orderByBkrplastdate($order = Criteria::ASC) Order by the BkrpLastDate column
 * @method     ChildBookingSummaryRepQuery orderByBkrplasttime($order = Criteria::ASC) Order by the BkrpLastTime column
 * @method     ChildBookingSummaryRepQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBookingSummaryRepQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBookingSummaryRepQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBookingSummaryRepQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildBookingSummaryRepQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildBookingSummaryRepQuery groupByBkrptoday() Group by the BkrpToday column
 * @method     ChildBookingSummaryRepQuery groupByBkrpweektodate() Group by the BkrpWeekToDate column
 * @method     ChildBookingSummaryRepQuery groupByBkrpmonthtodate() Group by the BkrpMonthToDate column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt1() Group by the Bkrp12moAmt1 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt2() Group by the Bkrp12moAmt2 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt3() Group by the Bkrp12moAmt3 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt4() Group by the Bkrp12moAmt4 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt5() Group by the Bkrp12moAmt5 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt6() Group by the Bkrp12moAmt6 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt7() Group by the Bkrp12moAmt7 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt8() Group by the Bkrp12moAmt8 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt9() Group by the Bkrp12moAmt9 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt10() Group by the Bkrp12moAmt10 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt11() Group by the Bkrp12moAmt11 column
 * @method     ChildBookingSummaryRepQuery groupByBkrp12moamt12() Group by the Bkrp12moAmt12 column
 * @method     ChildBookingSummaryRepQuery groupByBkrplastdate() Group by the BkrpLastDate column
 * @method     ChildBookingSummaryRepQuery groupByBkrplasttime() Group by the BkrpLastTime column
 * @method     ChildBookingSummaryRepQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBookingSummaryRepQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBookingSummaryRepQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBookingSummaryRepQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookingSummaryRepQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookingSummaryRepQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookingSummaryRepQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookingSummaryRepQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookingSummaryRepQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBookingSummaryRepQuery leftJoinSalesPerson($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingSummaryRepQuery rightJoinSalesPerson($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesPerson relation
 * @method     ChildBookingSummaryRepQuery innerJoinSalesPerson($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesPerson relation
 *
 * @method     ChildBookingSummaryRepQuery joinWithSalesPerson($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesPerson relation
 *
 * @method     ChildBookingSummaryRepQuery leftJoinWithSalesPerson() Adds a LEFT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingSummaryRepQuery rightJoinWithSalesPerson() Adds a RIGHT JOIN clause and with to the query using the SalesPerson relation
 * @method     ChildBookingSummaryRepQuery innerJoinWithSalesPerson() Adds a INNER JOIN clause and with to the query using the SalesPerson relation
 *
 * @method     \SalesPersonQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBookingSummaryRep findOne(ConnectionInterface $con = null) Return the first ChildBookingSummaryRep matching the query
 * @method     ChildBookingSummaryRep findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBookingSummaryRep matching the query, or a new ChildBookingSummaryRep object populated from the query conditions when no match is found
 *
 * @method     ChildBookingSummaryRep findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingSummaryRep filtered by the ArspSalePer1 column
 * @method     ChildBookingSummaryRep findOneByIntbwhse(string $IntbWhse) Return the first ChildBookingSummaryRep filtered by the IntbWhse column
 * @method     ChildBookingSummaryRep findOneByBkrptoday(string $BkrpToday) Return the first ChildBookingSummaryRep filtered by the BkrpToday column
 * @method     ChildBookingSummaryRep findOneByBkrpweektodate(string $BkrpWeekToDate) Return the first ChildBookingSummaryRep filtered by the BkrpWeekToDate column
 * @method     ChildBookingSummaryRep findOneByBkrpmonthtodate(string $BkrpMonthToDate) Return the first ChildBookingSummaryRep filtered by the BkrpMonthToDate column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt1(string $Bkrp12moAmt1) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt1 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt2(string $Bkrp12moAmt2) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt2 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt3(string $Bkrp12moAmt3) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt3 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt4(string $Bkrp12moAmt4) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt4 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt5(string $Bkrp12moAmt5) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt5 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt6(string $Bkrp12moAmt6) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt6 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt7(string $Bkrp12moAmt7) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt7 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt8(string $Bkrp12moAmt8) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt8 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt9(string $Bkrp12moAmt9) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt9 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt10(string $Bkrp12moAmt10) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt10 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt11(string $Bkrp12moAmt11) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt11 column
 * @method     ChildBookingSummaryRep findOneByBkrp12moamt12(string $Bkrp12moAmt12) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt12 column
 * @method     ChildBookingSummaryRep findOneByBkrplastdate(string $BkrpLastDate) Return the first ChildBookingSummaryRep filtered by the BkrpLastDate column
 * @method     ChildBookingSummaryRep findOneByBkrplasttime(string $BkrpLastTime) Return the first ChildBookingSummaryRep filtered by the BkrpLastTime column
 * @method     ChildBookingSummaryRep findOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingSummaryRep filtered by the DateUpdtd column
 * @method     ChildBookingSummaryRep findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingSummaryRep filtered by the TimeUpdtd column
 * @method     ChildBookingSummaryRep findOneByDummy(string $dummy) Return the first ChildBookingSummaryRep filtered by the dummy column *

 * @method     ChildBookingSummaryRep requirePk($key, ConnectionInterface $con = null) Return the ChildBookingSummaryRep by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOne(ConnectionInterface $con = null) Return the first ChildBookingSummaryRep matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingSummaryRep requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildBookingSummaryRep filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByIntbwhse(string $IntbWhse) Return the first ChildBookingSummaryRep filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrptoday(string $BkrpToday) Return the first ChildBookingSummaryRep filtered by the BkrpToday column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrpweektodate(string $BkrpWeekToDate) Return the first ChildBookingSummaryRep filtered by the BkrpWeekToDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrpmonthtodate(string $BkrpMonthToDate) Return the first ChildBookingSummaryRep filtered by the BkrpMonthToDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt1(string $Bkrp12moAmt1) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt2(string $Bkrp12moAmt2) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt3(string $Bkrp12moAmt3) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt4(string $Bkrp12moAmt4) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt5(string $Bkrp12moAmt5) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt6(string $Bkrp12moAmt6) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt7(string $Bkrp12moAmt7) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt8(string $Bkrp12moAmt8) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt9(string $Bkrp12moAmt9) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt10(string $Bkrp12moAmt10) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt11(string $Bkrp12moAmt11) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrp12moamt12(string $Bkrp12moAmt12) Return the first ChildBookingSummaryRep filtered by the Bkrp12moAmt12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrplastdate(string $BkrpLastDate) Return the first ChildBookingSummaryRep filtered by the BkrpLastDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByBkrplasttime(string $BkrpLastTime) Return the first ChildBookingSummaryRep filtered by the BkrpLastTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingSummaryRep filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingSummaryRep filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingSummaryRep requireOneByDummy(string $dummy) Return the first ChildBookingSummaryRep filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingSummaryRep[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBookingSummaryRep objects based on current ModelCriteria
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildBookingSummaryRep objects filtered by the ArspSalePer1 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildBookingSummaryRep objects filtered by the IntbWhse column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrptoday(string $BkrpToday) Return ChildBookingSummaryRep objects filtered by the BkrpToday column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrpweektodate(string $BkrpWeekToDate) Return ChildBookingSummaryRep objects filtered by the BkrpWeekToDate column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrpmonthtodate(string $BkrpMonthToDate) Return ChildBookingSummaryRep objects filtered by the BkrpMonthToDate column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt1(string $Bkrp12moAmt1) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt1 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt2(string $Bkrp12moAmt2) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt2 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt3(string $Bkrp12moAmt3) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt3 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt4(string $Bkrp12moAmt4) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt4 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt5(string $Bkrp12moAmt5) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt5 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt6(string $Bkrp12moAmt6) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt6 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt7(string $Bkrp12moAmt7) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt7 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt8(string $Bkrp12moAmt8) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt8 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt9(string $Bkrp12moAmt9) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt9 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt10(string $Bkrp12moAmt10) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt10 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt11(string $Bkrp12moAmt11) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt11 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrp12moamt12(string $Bkrp12moAmt12) Return ChildBookingSummaryRep objects filtered by the Bkrp12moAmt12 column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrplastdate(string $BkrpLastDate) Return ChildBookingSummaryRep objects filtered by the BkrpLastDate column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByBkrplasttime(string $BkrpLastTime) Return ChildBookingSummaryRep objects filtered by the BkrpLastTime column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildBookingSummaryRep objects filtered by the DateUpdtd column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildBookingSummaryRep objects filtered by the TimeUpdtd column
 * @method     ChildBookingSummaryRep[]|ObjectCollection findByDummy(string $dummy) Return ChildBookingSummaryRep objects filtered by the dummy column
 * @method     ChildBookingSummaryRep[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BookingSummaryRepQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BookingSummaryRepQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BookingSummaryRep', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookingSummaryRepQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookingSummaryRepQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBookingSummaryRepQuery) {
            return $criteria;
        }
        $query = new ChildBookingSummaryRepQuery();
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
     * @param array[$ArspSalePer1, $IntbWhse] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBookingSummaryRep|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookingSummaryRepTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildBookingSummaryRep A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArspSalePer1, IntbWhse, BkrpToday, BkrpWeekToDate, BkrpMonthToDate, Bkrp12moAmt1, Bkrp12moAmt2, Bkrp12moAmt3, Bkrp12moAmt4, Bkrp12moAmt5, Bkrp12moAmt6, Bkrp12moAmt7, Bkrp12moAmt8, Bkrp12moAmt9, Bkrp12moAmt10, Bkrp12moAmt11, Bkrp12moAmt12, BkrpLastDate, BkrpLastTime, DateUpdtd, TimeUpdtd, dummy FROM so_book_by_rep_sumry WHERE ArspSalePer1 = :p0 AND IntbWhse = :p1';
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
            /** @var ChildBookingSummaryRep $obj */
            $obj = new ChildBookingSummaryRep();
            $obj->hydrate($row);
            BookingSummaryRepTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildBookingSummaryRep|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BookingSummaryRepTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BookingSummaryRepTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the BkrpToday column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrptoday(1234); // WHERE BkrpToday = 1234
     * $query->filterByBkrptoday(array(12, 34)); // WHERE BkrpToday IN (12, 34)
     * $query->filterByBkrptoday(array('min' => 12)); // WHERE BkrpToday > 12
     * </code>
     *
     * @param     mixed $bkrptoday The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrptoday($bkrptoday = null, $comparison = null)
    {
        if (is_array($bkrptoday)) {
            $useMinMax = false;
            if (isset($bkrptoday['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPTODAY, $bkrptoday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrptoday['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPTODAY, $bkrptoday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPTODAY, $bkrptoday, $comparison);
    }

    /**
     * Filter the query on the BkrpWeekToDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrpweektodate(1234); // WHERE BkrpWeekToDate = 1234
     * $query->filterByBkrpweektodate(array(12, 34)); // WHERE BkrpWeekToDate IN (12, 34)
     * $query->filterByBkrpweektodate(array('min' => 12)); // WHERE BkrpWeekToDate > 12
     * </code>
     *
     * @param     mixed $bkrpweektodate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrpweektodate($bkrpweektodate = null, $comparison = null)
    {
        if (is_array($bkrpweektodate)) {
            $useMinMax = false;
            if (isset($bkrpweektodate['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE, $bkrpweektodate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrpweektodate['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE, $bkrpweektodate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPWEEKTODATE, $bkrpweektodate, $comparison);
    }

    /**
     * Filter the query on the BkrpMonthToDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrpmonthtodate(1234); // WHERE BkrpMonthToDate = 1234
     * $query->filterByBkrpmonthtodate(array(12, 34)); // WHERE BkrpMonthToDate IN (12, 34)
     * $query->filterByBkrpmonthtodate(array('min' => 12)); // WHERE BkrpMonthToDate > 12
     * </code>
     *
     * @param     mixed $bkrpmonthtodate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrpmonthtodate($bkrpmonthtodate = null, $comparison = null)
    {
        if (is_array($bkrpmonthtodate)) {
            $useMinMax = false;
            if (isset($bkrpmonthtodate['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE, $bkrpmonthtodate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrpmonthtodate['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE, $bkrpmonthtodate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPMONTHTODATE, $bkrpmonthtodate, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt1(1234); // WHERE Bkrp12moAmt1 = 1234
     * $query->filterByBkrp12moamt1(array(12, 34)); // WHERE Bkrp12moAmt1 IN (12, 34)
     * $query->filterByBkrp12moamt1(array('min' => 12)); // WHERE Bkrp12moAmt1 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt1($bkrp12moamt1 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt1)) {
            $useMinMax = false;
            if (isset($bkrp12moamt1['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT1, $bkrp12moamt1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt1['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT1, $bkrp12moamt1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT1, $bkrp12moamt1, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt2(1234); // WHERE Bkrp12moAmt2 = 1234
     * $query->filterByBkrp12moamt2(array(12, 34)); // WHERE Bkrp12moAmt2 IN (12, 34)
     * $query->filterByBkrp12moamt2(array('min' => 12)); // WHERE Bkrp12moAmt2 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt2($bkrp12moamt2 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt2)) {
            $useMinMax = false;
            if (isset($bkrp12moamt2['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT2, $bkrp12moamt2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt2['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT2, $bkrp12moamt2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT2, $bkrp12moamt2, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt3(1234); // WHERE Bkrp12moAmt3 = 1234
     * $query->filterByBkrp12moamt3(array(12, 34)); // WHERE Bkrp12moAmt3 IN (12, 34)
     * $query->filterByBkrp12moamt3(array('min' => 12)); // WHERE Bkrp12moAmt3 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt3($bkrp12moamt3 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt3)) {
            $useMinMax = false;
            if (isset($bkrp12moamt3['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT3, $bkrp12moamt3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt3['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT3, $bkrp12moamt3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT3, $bkrp12moamt3, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt4(1234); // WHERE Bkrp12moAmt4 = 1234
     * $query->filterByBkrp12moamt4(array(12, 34)); // WHERE Bkrp12moAmt4 IN (12, 34)
     * $query->filterByBkrp12moamt4(array('min' => 12)); // WHERE Bkrp12moAmt4 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt4($bkrp12moamt4 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt4)) {
            $useMinMax = false;
            if (isset($bkrp12moamt4['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT4, $bkrp12moamt4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt4['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT4, $bkrp12moamt4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT4, $bkrp12moamt4, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt5 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt5(1234); // WHERE Bkrp12moAmt5 = 1234
     * $query->filterByBkrp12moamt5(array(12, 34)); // WHERE Bkrp12moAmt5 IN (12, 34)
     * $query->filterByBkrp12moamt5(array('min' => 12)); // WHERE Bkrp12moAmt5 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt5($bkrp12moamt5 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt5)) {
            $useMinMax = false;
            if (isset($bkrp12moamt5['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT5, $bkrp12moamt5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt5['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT5, $bkrp12moamt5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT5, $bkrp12moamt5, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt6 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt6(1234); // WHERE Bkrp12moAmt6 = 1234
     * $query->filterByBkrp12moamt6(array(12, 34)); // WHERE Bkrp12moAmt6 IN (12, 34)
     * $query->filterByBkrp12moamt6(array('min' => 12)); // WHERE Bkrp12moAmt6 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt6($bkrp12moamt6 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt6)) {
            $useMinMax = false;
            if (isset($bkrp12moamt6['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT6, $bkrp12moamt6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt6['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT6, $bkrp12moamt6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT6, $bkrp12moamt6, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt7 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt7(1234); // WHERE Bkrp12moAmt7 = 1234
     * $query->filterByBkrp12moamt7(array(12, 34)); // WHERE Bkrp12moAmt7 IN (12, 34)
     * $query->filterByBkrp12moamt7(array('min' => 12)); // WHERE Bkrp12moAmt7 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt7($bkrp12moamt7 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt7)) {
            $useMinMax = false;
            if (isset($bkrp12moamt7['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT7, $bkrp12moamt7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt7['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT7, $bkrp12moamt7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT7, $bkrp12moamt7, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt8 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt8(1234); // WHERE Bkrp12moAmt8 = 1234
     * $query->filterByBkrp12moamt8(array(12, 34)); // WHERE Bkrp12moAmt8 IN (12, 34)
     * $query->filterByBkrp12moamt8(array('min' => 12)); // WHERE Bkrp12moAmt8 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt8($bkrp12moamt8 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt8)) {
            $useMinMax = false;
            if (isset($bkrp12moamt8['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT8, $bkrp12moamt8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt8['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT8, $bkrp12moamt8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT8, $bkrp12moamt8, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt9 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt9(1234); // WHERE Bkrp12moAmt9 = 1234
     * $query->filterByBkrp12moamt9(array(12, 34)); // WHERE Bkrp12moAmt9 IN (12, 34)
     * $query->filterByBkrp12moamt9(array('min' => 12)); // WHERE Bkrp12moAmt9 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt9($bkrp12moamt9 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt9)) {
            $useMinMax = false;
            if (isset($bkrp12moamt9['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT9, $bkrp12moamt9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt9['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT9, $bkrp12moamt9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT9, $bkrp12moamt9, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt10 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt10(1234); // WHERE Bkrp12moAmt10 = 1234
     * $query->filterByBkrp12moamt10(array(12, 34)); // WHERE Bkrp12moAmt10 IN (12, 34)
     * $query->filterByBkrp12moamt10(array('min' => 12)); // WHERE Bkrp12moAmt10 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt10($bkrp12moamt10 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt10)) {
            $useMinMax = false;
            if (isset($bkrp12moamt10['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT10, $bkrp12moamt10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt10['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT10, $bkrp12moamt10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT10, $bkrp12moamt10, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt11 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt11(1234); // WHERE Bkrp12moAmt11 = 1234
     * $query->filterByBkrp12moamt11(array(12, 34)); // WHERE Bkrp12moAmt11 IN (12, 34)
     * $query->filterByBkrp12moamt11(array('min' => 12)); // WHERE Bkrp12moAmt11 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt11($bkrp12moamt11 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt11)) {
            $useMinMax = false;
            if (isset($bkrp12moamt11['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT11, $bkrp12moamt11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt11['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT11, $bkrp12moamt11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT11, $bkrp12moamt11, $comparison);
    }

    /**
     * Filter the query on the Bkrp12moAmt12 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrp12moamt12(1234); // WHERE Bkrp12moAmt12 = 1234
     * $query->filterByBkrp12moamt12(array(12, 34)); // WHERE Bkrp12moAmt12 IN (12, 34)
     * $query->filterByBkrp12moamt12(array('min' => 12)); // WHERE Bkrp12moAmt12 > 12
     * </code>
     *
     * @param     mixed $bkrp12moamt12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrp12moamt12($bkrp12moamt12 = null, $comparison = null)
    {
        if (is_array($bkrp12moamt12)) {
            $useMinMax = false;
            if (isset($bkrp12moamt12['min'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT12, $bkrp12moamt12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkrp12moamt12['max'])) {
                $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT12, $bkrp12moamt12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRP12MOAMT12, $bkrp12moamt12, $comparison);
    }

    /**
     * Filter the query on the BkrpLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrplastdate('fooValue');   // WHERE BkrpLastDate = 'fooValue'
     * $query->filterByBkrplastdate('%fooValue%', Criteria::LIKE); // WHERE BkrpLastDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkrplastdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrplastdate($bkrplastdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkrplastdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPLASTDATE, $bkrplastdate, $comparison);
    }

    /**
     * Filter the query on the BkrpLastTime column
     *
     * Example usage:
     * <code>
     * $query->filterByBkrplasttime('fooValue');   // WHERE BkrpLastTime = 'fooValue'
     * $query->filterByBkrplasttime('%fooValue%', Criteria::LIKE); // WHERE BkrpLastTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkrplasttime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByBkrplasttime($bkrplasttime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkrplasttime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_BKRPLASTTIME, $bkrplasttime, $comparison);
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
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingSummaryRepTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \SalesPerson object
     *
     * @param \SalesPerson|ObjectCollection $salesPerson The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function filterBySalesPerson($salesPerson, $comparison = null)
    {
        if ($salesPerson instanceof \SalesPerson) {
            return $this
                ->addUsingAlias(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $salesPerson->getArspsaleper1(), $comparison);
        } elseif ($salesPerson instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingSummaryRepTableMap::COL_ARSPSALEPER1, $salesPerson->toKeyValue('PrimaryKey', 'Arspsaleper1'), $comparison);
        } else {
            throw new PropelException('filterBySalesPerson() only accepts arguments of type \SalesPerson or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesPerson relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function joinSalesPerson($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesPersonQuery A secondary query class using the current class as primary query
     */
    public function useSalesPersonQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesPerson($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesPerson', '\SalesPersonQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBookingSummaryRep $bookingSummaryRep Object to remove from the list of results
     *
     * @return $this|ChildBookingSummaryRepQuery The current query, for fluid interface
     */
    public function prune($bookingSummaryRep = null)
    {
        if ($bookingSummaryRep) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BookingSummaryRepTableMap::COL_ARSPSALEPER1), $bookingSummaryRep->getArspsaleper1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BookingSummaryRepTableMap::COL_INTBWHSE), $bookingSummaryRep->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_book_by_rep_sumry table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookingSummaryRepTableMap::clearInstancePool();
            BookingSummaryRepTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingSummaryRepTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookingSummaryRepTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookingSummaryRepTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookingSummaryRepTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BookingSummaryRepQuery
