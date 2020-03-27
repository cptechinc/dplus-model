<?php

namespace Base;

use \BookingDetail as ChildBookingDetail;
use \BookingDetailQuery as ChildBookingDetailQuery;
use \Exception;
use \PDO;
use Map\BookingDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_book_log_det' table.
 *
 *
 *
 * @method     ChildBookingDetailQuery orderByBklhordrbase($order = Criteria::ASC) Order by the BklhOrdrBase column
 * @method     ChildBookingDetailQuery orderByBkldorigline($order = Criteria::ASC) Order by the BkldOrigLine column
 * @method     ChildBookingDetailQuery orderByBkldseq($order = Criteria::ASC) Order by the BkldSeq column
 * @method     ChildBookingDetailQuery orderByBkldordrnbr($order = Criteria::ASC) Order by the BkldOrdrNbr column
 * @method     ChildBookingDetailQuery orderByBkldtrandate($order = Criteria::ASC) Order by the BkldTranDate column
 * @method     ChildBookingDetailQuery orderByBkldtrantime($order = Criteria::ASC) Order by the BkldTranTime column
 * @method     ChildBookingDetailQuery orderByBkldlogin($order = Criteria::ASC) Order by the BkldLogIn column
 * @method     ChildBookingDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildBookingDetailQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildBookingDetailQuery orderByBkldqty($order = Criteria::ASC) Order by the BkldQty column
 * @method     ChildBookingDetailQuery orderByBkldunitpric($order = Criteria::ASC) Order by the BkldUnitPric column
 * @method     ChildBookingDetailQuery orderByBkldpgmref($order = Criteria::ASC) Order by the BkldPgmRef column
 * @method     ChildBookingDetailQuery orderByBkldreascd($order = Criteria::ASC) Order by the BkldReasCd column
 * @method     ChildBookingDetailQuery orderByBkldbookdate($order = Criteria::ASC) Order by the BkldBookDate column
 * @method     ChildBookingDetailQuery orderByBkldnsitemdesc1($order = Criteria::ASC) Order by the BkldNsItemDesc1 column
 * @method     ChildBookingDetailQuery orderByBkldnsitemgrup($order = Criteria::ASC) Order by the BkldNsItemGrup column
 * @method     ChildBookingDetailQuery orderByBkldnsuom($order = Criteria::ASC) Order by the BkldNsUom column
 * @method     ChildBookingDetailQuery orderByBkldnsvendid($order = Criteria::ASC) Order by the BkldNsVendId column
 * @method     ChildBookingDetailQuery orderByBkldqtytoship($order = Criteria::ASC) Order by the BkldQtyToShip column
 * @method     ChildBookingDetailQuery orderByBkldtaxcode($order = Criteria::ASC) Order by the BkldTaxCode column
 * @method     ChildBookingDetailQuery orderByBkldunitcost($order = Criteria::ASC) Order by the BkldUnitCost column
 * @method     ChildBookingDetailQuery orderByBkldacsuplywhse($order = Criteria::ASC) Order by the BkldAcSuplyWhse column
 * @method     ChildBookingDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildBookingDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildBookingDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildBookingDetailQuery groupByBklhordrbase() Group by the BklhOrdrBase column
 * @method     ChildBookingDetailQuery groupByBkldorigline() Group by the BkldOrigLine column
 * @method     ChildBookingDetailQuery groupByBkldseq() Group by the BkldSeq column
 * @method     ChildBookingDetailQuery groupByBkldordrnbr() Group by the BkldOrdrNbr column
 * @method     ChildBookingDetailQuery groupByBkldtrandate() Group by the BkldTranDate column
 * @method     ChildBookingDetailQuery groupByBkldtrantime() Group by the BkldTranTime column
 * @method     ChildBookingDetailQuery groupByBkldlogin() Group by the BkldLogIn column
 * @method     ChildBookingDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildBookingDetailQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildBookingDetailQuery groupByBkldqty() Group by the BkldQty column
 * @method     ChildBookingDetailQuery groupByBkldunitpric() Group by the BkldUnitPric column
 * @method     ChildBookingDetailQuery groupByBkldpgmref() Group by the BkldPgmRef column
 * @method     ChildBookingDetailQuery groupByBkldreascd() Group by the BkldReasCd column
 * @method     ChildBookingDetailQuery groupByBkldbookdate() Group by the BkldBookDate column
 * @method     ChildBookingDetailQuery groupByBkldnsitemdesc1() Group by the BkldNsItemDesc1 column
 * @method     ChildBookingDetailQuery groupByBkldnsitemgrup() Group by the BkldNsItemGrup column
 * @method     ChildBookingDetailQuery groupByBkldnsuom() Group by the BkldNsUom column
 * @method     ChildBookingDetailQuery groupByBkldnsvendid() Group by the BkldNsVendId column
 * @method     ChildBookingDetailQuery groupByBkldqtytoship() Group by the BkldQtyToShip column
 * @method     ChildBookingDetailQuery groupByBkldtaxcode() Group by the BkldTaxCode column
 * @method     ChildBookingDetailQuery groupByBkldunitcost() Group by the BkldUnitCost column
 * @method     ChildBookingDetailQuery groupByBkldacsuplywhse() Group by the BkldAcSuplyWhse column
 * @method     ChildBookingDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildBookingDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildBookingDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildBookingDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBookingDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBookingDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBookingDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBookingDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBookingDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBookingDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildBookingDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildBookingDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildBookingDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildBookingDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildBookingDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildBookingDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBookingDetail findOne(ConnectionInterface $con = null) Return the first ChildBookingDetail matching the query
 * @method     ChildBookingDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBookingDetail matching the query, or a new ChildBookingDetail object populated from the query conditions when no match is found
 *
 * @method     ChildBookingDetail findOneByBklhordrbase(string $BklhOrdrBase) Return the first ChildBookingDetail filtered by the BklhOrdrBase column
 * @method     ChildBookingDetail findOneByBkldorigline(int $BkldOrigLine) Return the first ChildBookingDetail filtered by the BkldOrigLine column
 * @method     ChildBookingDetail findOneByBkldseq(int $BkldSeq) Return the first ChildBookingDetail filtered by the BkldSeq column
 * @method     ChildBookingDetail findOneByBkldordrnbr(string $BkldOrdrNbr) Return the first ChildBookingDetail filtered by the BkldOrdrNbr column
 * @method     ChildBookingDetail findOneByBkldtrandate(string $BkldTranDate) Return the first ChildBookingDetail filtered by the BkldTranDate column
 * @method     ChildBookingDetail findOneByBkldtrantime(string $BkldTranTime) Return the first ChildBookingDetail filtered by the BkldTranTime column
 * @method     ChildBookingDetail findOneByBkldlogin(string $BkldLogIn) Return the first ChildBookingDetail filtered by the BkldLogIn column
 * @method     ChildBookingDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildBookingDetail filtered by the InitItemNbr column
 * @method     ChildBookingDetail findOneByIntbwhse(string $IntbWhse) Return the first ChildBookingDetail filtered by the IntbWhse column
 * @method     ChildBookingDetail findOneByBkldqty(string $BkldQty) Return the first ChildBookingDetail filtered by the BkldQty column
 * @method     ChildBookingDetail findOneByBkldunitpric(string $BkldUnitPric) Return the first ChildBookingDetail filtered by the BkldUnitPric column
 * @method     ChildBookingDetail findOneByBkldpgmref(string $BkldPgmRef) Return the first ChildBookingDetail filtered by the BkldPgmRef column
 * @method     ChildBookingDetail findOneByBkldreascd(string $BkldReasCd) Return the first ChildBookingDetail filtered by the BkldReasCd column
 * @method     ChildBookingDetail findOneByBkldbookdate(string $BkldBookDate) Return the first ChildBookingDetail filtered by the BkldBookDate column
 * @method     ChildBookingDetail findOneByBkldnsitemdesc1(string $BkldNsItemDesc1) Return the first ChildBookingDetail filtered by the BkldNsItemDesc1 column
 * @method     ChildBookingDetail findOneByBkldnsitemgrup(string $BkldNsItemGrup) Return the first ChildBookingDetail filtered by the BkldNsItemGrup column
 * @method     ChildBookingDetail findOneByBkldnsuom(string $BkldNsUom) Return the first ChildBookingDetail filtered by the BkldNsUom column
 * @method     ChildBookingDetail findOneByBkldnsvendid(string $BkldNsVendId) Return the first ChildBookingDetail filtered by the BkldNsVendId column
 * @method     ChildBookingDetail findOneByBkldqtytoship(string $BkldQtyToShip) Return the first ChildBookingDetail filtered by the BkldQtyToShip column
 * @method     ChildBookingDetail findOneByBkldtaxcode(string $BkldTaxCode) Return the first ChildBookingDetail filtered by the BkldTaxCode column
 * @method     ChildBookingDetail findOneByBkldunitcost(string $BkldUnitCost) Return the first ChildBookingDetail filtered by the BkldUnitCost column
 * @method     ChildBookingDetail findOneByBkldacsuplywhse(string $BkldAcSuplyWhse) Return the first ChildBookingDetail filtered by the BkldAcSuplyWhse column
 * @method     ChildBookingDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDetail filtered by the DateUpdtd column
 * @method     ChildBookingDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDetail filtered by the TimeUpdtd column
 * @method     ChildBookingDetail findOneByDummy(string $dummy) Return the first ChildBookingDetail filtered by the dummy column *

 * @method     ChildBookingDetail requirePk($key, ConnectionInterface $con = null) Return the ChildBookingDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOne(ConnectionInterface $con = null) Return the first ChildBookingDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDetail requireOneByBklhordrbase(string $BklhOrdrBase) Return the first ChildBookingDetail filtered by the BklhOrdrBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldorigline(int $BkldOrigLine) Return the first ChildBookingDetail filtered by the BkldOrigLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldseq(int $BkldSeq) Return the first ChildBookingDetail filtered by the BkldSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldordrnbr(string $BkldOrdrNbr) Return the first ChildBookingDetail filtered by the BkldOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldtrandate(string $BkldTranDate) Return the first ChildBookingDetail filtered by the BkldTranDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldtrantime(string $BkldTranTime) Return the first ChildBookingDetail filtered by the BkldTranTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldlogin(string $BkldLogIn) Return the first ChildBookingDetail filtered by the BkldLogIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildBookingDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByIntbwhse(string $IntbWhse) Return the first ChildBookingDetail filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldqty(string $BkldQty) Return the first ChildBookingDetail filtered by the BkldQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldunitpric(string $BkldUnitPric) Return the first ChildBookingDetail filtered by the BkldUnitPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldpgmref(string $BkldPgmRef) Return the first ChildBookingDetail filtered by the BkldPgmRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldreascd(string $BkldReasCd) Return the first ChildBookingDetail filtered by the BkldReasCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldbookdate(string $BkldBookDate) Return the first ChildBookingDetail filtered by the BkldBookDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldnsitemdesc1(string $BkldNsItemDesc1) Return the first ChildBookingDetail filtered by the BkldNsItemDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldnsitemgrup(string $BkldNsItemGrup) Return the first ChildBookingDetail filtered by the BkldNsItemGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldnsuom(string $BkldNsUom) Return the first ChildBookingDetail filtered by the BkldNsUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldnsvendid(string $BkldNsVendId) Return the first ChildBookingDetail filtered by the BkldNsVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldqtytoship(string $BkldQtyToShip) Return the first ChildBookingDetail filtered by the BkldQtyToShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldtaxcode(string $BkldTaxCode) Return the first ChildBookingDetail filtered by the BkldTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldunitcost(string $BkldUnitCost) Return the first ChildBookingDetail filtered by the BkldUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByBkldacsuplywhse(string $BkldAcSuplyWhse) Return the first ChildBookingDetail filtered by the BkldAcSuplyWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildBookingDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildBookingDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBookingDetail requireOneByDummy(string $dummy) Return the first ChildBookingDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBookingDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBookingDetail objects based on current ModelCriteria
 * @method     ChildBookingDetail[]|ObjectCollection findByBklhordrbase(string $BklhOrdrBase) Return ChildBookingDetail objects filtered by the BklhOrdrBase column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldorigline(int $BkldOrigLine) Return ChildBookingDetail objects filtered by the BkldOrigLine column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldseq(int $BkldSeq) Return ChildBookingDetail objects filtered by the BkldSeq column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldordrnbr(string $BkldOrdrNbr) Return ChildBookingDetail objects filtered by the BkldOrdrNbr column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldtrandate(string $BkldTranDate) Return ChildBookingDetail objects filtered by the BkldTranDate column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldtrantime(string $BkldTranTime) Return ChildBookingDetail objects filtered by the BkldTranTime column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldlogin(string $BkldLogIn) Return ChildBookingDetail objects filtered by the BkldLogIn column
 * @method     ChildBookingDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildBookingDetail objects filtered by the InitItemNbr column
 * @method     ChildBookingDetail[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildBookingDetail objects filtered by the IntbWhse column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldqty(string $BkldQty) Return ChildBookingDetail objects filtered by the BkldQty column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldunitpric(string $BkldUnitPric) Return ChildBookingDetail objects filtered by the BkldUnitPric column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldpgmref(string $BkldPgmRef) Return ChildBookingDetail objects filtered by the BkldPgmRef column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldreascd(string $BkldReasCd) Return ChildBookingDetail objects filtered by the BkldReasCd column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldbookdate(string $BkldBookDate) Return ChildBookingDetail objects filtered by the BkldBookDate column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldnsitemdesc1(string $BkldNsItemDesc1) Return ChildBookingDetail objects filtered by the BkldNsItemDesc1 column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldnsitemgrup(string $BkldNsItemGrup) Return ChildBookingDetail objects filtered by the BkldNsItemGrup column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldnsuom(string $BkldNsUom) Return ChildBookingDetail objects filtered by the BkldNsUom column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldnsvendid(string $BkldNsVendId) Return ChildBookingDetail objects filtered by the BkldNsVendId column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldqtytoship(string $BkldQtyToShip) Return ChildBookingDetail objects filtered by the BkldQtyToShip column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldtaxcode(string $BkldTaxCode) Return ChildBookingDetail objects filtered by the BkldTaxCode column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldunitcost(string $BkldUnitCost) Return ChildBookingDetail objects filtered by the BkldUnitCost column
 * @method     ChildBookingDetail[]|ObjectCollection findByBkldacsuplywhse(string $BkldAcSuplyWhse) Return ChildBookingDetail objects filtered by the BkldAcSuplyWhse column
 * @method     ChildBookingDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildBookingDetail objects filtered by the DateUpdtd column
 * @method     ChildBookingDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildBookingDetail objects filtered by the TimeUpdtd column
 * @method     ChildBookingDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildBookingDetail objects filtered by the dummy column
 * @method     ChildBookingDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BookingDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BookingDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\BookingDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBookingDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBookingDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBookingDetailQuery) {
            return $criteria;
        }
        $query = new ChildBookingDetailQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$BklhOrdrBase, $BkldOrigLine, $BkldSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBookingDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BookingDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BookingDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildBookingDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT BklhOrdrBase, BkldOrigLine, BkldSeq, BkldOrdrNbr, BkldTranDate, BkldTranTime, BkldLogIn, InitItemNbr, IntbWhse, BkldQty, BkldUnitPric, BkldPgmRef, BkldReasCd, BkldBookDate, BkldNsItemDesc1, BkldNsItemGrup, BkldNsUom, BkldNsVendId, BkldQtyToShip, BkldTaxCode, BkldUnitCost, BkldAcSuplyWhse, DateUpdtd, TimeUpdtd, dummy FROM so_book_log_det WHERE BklhOrdrBase = :p0 AND BkldOrigLine = :p1 AND BkldSeq = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildBookingDetail $obj */
            $obj = new ChildBookingDetail();
            $obj->hydrate($row);
            BookingDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildBookingDetail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BookingDetailTableMap::COL_BKLHORDRBASE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BookingDetailTableMap::COL_BKLDORIGLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(BookingDetailTableMap::COL_BKLDSEQ, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BookingDetailTableMap::COL_BKLHORDRBASE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BookingDetailTableMap::COL_BKLDORIGLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(BookingDetailTableMap::COL_BKLDSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the BklhOrdrBase column
     *
     * Example usage:
     * <code>
     * $query->filterByBklhordrbase('fooValue');   // WHERE BklhOrdrBase = 'fooValue'
     * $query->filterByBklhordrbase('%fooValue%', Criteria::LIKE); // WHERE BklhOrdrBase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bklhordrbase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBklhordrbase($bklhordrbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bklhordrbase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLHORDRBASE, $bklhordrbase, $comparison);
    }

    /**
     * Filter the query on the BkldOrigLine column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldorigline(1234); // WHERE BkldOrigLine = 1234
     * $query->filterByBkldorigline(array(12, 34)); // WHERE BkldOrigLine IN (12, 34)
     * $query->filterByBkldorigline(array('min' => 12)); // WHERE BkldOrigLine > 12
     * </code>
     *
     * @param     mixed $bkldorigline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldorigline($bkldorigline = null, $comparison = null)
    {
        if (is_array($bkldorigline)) {
            $useMinMax = false;
            if (isset($bkldorigline['min'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDORIGLINE, $bkldorigline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkldorigline['max'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDORIGLINE, $bkldorigline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDORIGLINE, $bkldorigline, $comparison);
    }

    /**
     * Filter the query on the BkldSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldseq(1234); // WHERE BkldSeq = 1234
     * $query->filterByBkldseq(array(12, 34)); // WHERE BkldSeq IN (12, 34)
     * $query->filterByBkldseq(array('min' => 12)); // WHERE BkldSeq > 12
     * </code>
     *
     * @param     mixed $bkldseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldseq($bkldseq = null, $comparison = null)
    {
        if (is_array($bkldseq)) {
            $useMinMax = false;
            if (isset($bkldseq['min'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDSEQ, $bkldseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkldseq['max'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDSEQ, $bkldseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDSEQ, $bkldseq, $comparison);
    }

    /**
     * Filter the query on the BkldOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldordrnbr('fooValue');   // WHERE BkldOrdrNbr = 'fooValue'
     * $query->filterByBkldordrnbr('%fooValue%', Criteria::LIKE); // WHERE BkldOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldordrnbr($bkldordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDORDRNBR, $bkldordrnbr, $comparison);
    }

    /**
     * Filter the query on the BkldTranDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldtrandate('fooValue');   // WHERE BkldTranDate = 'fooValue'
     * $query->filterByBkldtrandate('%fooValue%', Criteria::LIKE); // WHERE BkldTranDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldtrandate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldtrandate($bkldtrandate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldtrandate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDTRANDATE, $bkldtrandate, $comparison);
    }

    /**
     * Filter the query on the BkldTranTime column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldtrantime('fooValue');   // WHERE BkldTranTime = 'fooValue'
     * $query->filterByBkldtrantime('%fooValue%', Criteria::LIKE); // WHERE BkldTranTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldtrantime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldtrantime($bkldtrantime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldtrantime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDTRANTIME, $bkldtrantime, $comparison);
    }

    /**
     * Filter the query on the BkldLogIn column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldlogin('fooValue');   // WHERE BkldLogIn = 'fooValue'
     * $query->filterByBkldlogin('%fooValue%', Criteria::LIKE); // WHERE BkldLogIn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldlogin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldlogin($bkldlogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldlogin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDLOGIN, $bkldlogin, $comparison);
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the BkldQty column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldqty(1234); // WHERE BkldQty = 1234
     * $query->filterByBkldqty(array(12, 34)); // WHERE BkldQty IN (12, 34)
     * $query->filterByBkldqty(array('min' => 12)); // WHERE BkldQty > 12
     * </code>
     *
     * @param     mixed $bkldqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldqty($bkldqty = null, $comparison = null)
    {
        if (is_array($bkldqty)) {
            $useMinMax = false;
            if (isset($bkldqty['min'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDQTY, $bkldqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkldqty['max'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDQTY, $bkldqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDQTY, $bkldqty, $comparison);
    }

    /**
     * Filter the query on the BkldUnitPric column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldunitpric(1234); // WHERE BkldUnitPric = 1234
     * $query->filterByBkldunitpric(array(12, 34)); // WHERE BkldUnitPric IN (12, 34)
     * $query->filterByBkldunitpric(array('min' => 12)); // WHERE BkldUnitPric > 12
     * </code>
     *
     * @param     mixed $bkldunitpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldunitpric($bkldunitpric = null, $comparison = null)
    {
        if (is_array($bkldunitpric)) {
            $useMinMax = false;
            if (isset($bkldunitpric['min'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDUNITPRIC, $bkldunitpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkldunitpric['max'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDUNITPRIC, $bkldunitpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDUNITPRIC, $bkldunitpric, $comparison);
    }

    /**
     * Filter the query on the BkldPgmRef column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldpgmref('fooValue');   // WHERE BkldPgmRef = 'fooValue'
     * $query->filterByBkldpgmref('%fooValue%', Criteria::LIKE); // WHERE BkldPgmRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldpgmref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldpgmref($bkldpgmref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldpgmref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDPGMREF, $bkldpgmref, $comparison);
    }

    /**
     * Filter the query on the BkldReasCd column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldreascd('fooValue');   // WHERE BkldReasCd = 'fooValue'
     * $query->filterByBkldreascd('%fooValue%', Criteria::LIKE); // WHERE BkldReasCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldreascd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldreascd($bkldreascd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldreascd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDREASCD, $bkldreascd, $comparison);
    }

    /**
     * Filter the query on the BkldBookDate column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldbookdate('fooValue');   // WHERE BkldBookDate = 'fooValue'
     * $query->filterByBkldbookdate('%fooValue%', Criteria::LIKE); // WHERE BkldBookDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldbookdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldbookdate($bkldbookdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldbookdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDBOOKDATE, $bkldbookdate, $comparison);
    }

    /**
     * Filter the query on the BkldNsItemDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldnsitemdesc1('fooValue');   // WHERE BkldNsItemDesc1 = 'fooValue'
     * $query->filterByBkldnsitemdesc1('%fooValue%', Criteria::LIKE); // WHERE BkldNsItemDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldnsitemdesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldnsitemdesc1($bkldnsitemdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldnsitemdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDNSITEMDESC1, $bkldnsitemdesc1, $comparison);
    }

    /**
     * Filter the query on the BkldNsItemGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldnsitemgrup('fooValue');   // WHERE BkldNsItemGrup = 'fooValue'
     * $query->filterByBkldnsitemgrup('%fooValue%', Criteria::LIKE); // WHERE BkldNsItemGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldnsitemgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldnsitemgrup($bkldnsitemgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldnsitemgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDNSITEMGRUP, $bkldnsitemgrup, $comparison);
    }

    /**
     * Filter the query on the BkldNsUom column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldnsuom('fooValue');   // WHERE BkldNsUom = 'fooValue'
     * $query->filterByBkldnsuom('%fooValue%', Criteria::LIKE); // WHERE BkldNsUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldnsuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldnsuom($bkldnsuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldnsuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDNSUOM, $bkldnsuom, $comparison);
    }

    /**
     * Filter the query on the BkldNsVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldnsvendid('fooValue');   // WHERE BkldNsVendId = 'fooValue'
     * $query->filterByBkldnsvendid('%fooValue%', Criteria::LIKE); // WHERE BkldNsVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldnsvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldnsvendid($bkldnsvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldnsvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDNSVENDID, $bkldnsvendid, $comparison);
    }

    /**
     * Filter the query on the BkldQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldqtytoship(1234); // WHERE BkldQtyToShip = 1234
     * $query->filterByBkldqtytoship(array(12, 34)); // WHERE BkldQtyToShip IN (12, 34)
     * $query->filterByBkldqtytoship(array('min' => 12)); // WHERE BkldQtyToShip > 12
     * </code>
     *
     * @param     mixed $bkldqtytoship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldqtytoship($bkldqtytoship = null, $comparison = null)
    {
        if (is_array($bkldqtytoship)) {
            $useMinMax = false;
            if (isset($bkldqtytoship['min'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDQTYTOSHIP, $bkldqtytoship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkldqtytoship['max'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDQTYTOSHIP, $bkldqtytoship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDQTYTOSHIP, $bkldqtytoship, $comparison);
    }

    /**
     * Filter the query on the BkldTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldtaxcode('fooValue');   // WHERE BkldTaxCode = 'fooValue'
     * $query->filterByBkldtaxcode('%fooValue%', Criteria::LIKE); // WHERE BkldTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldtaxcode($bkldtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDTAXCODE, $bkldtaxcode, $comparison);
    }

    /**
     * Filter the query on the BkldUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldunitcost(1234); // WHERE BkldUnitCost = 1234
     * $query->filterByBkldunitcost(array(12, 34)); // WHERE BkldUnitCost IN (12, 34)
     * $query->filterByBkldunitcost(array('min' => 12)); // WHERE BkldUnitCost > 12
     * </code>
     *
     * @param     mixed $bkldunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldunitcost($bkldunitcost = null, $comparison = null)
    {
        if (is_array($bkldunitcost)) {
            $useMinMax = false;
            if (isset($bkldunitcost['min'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDUNITCOST, $bkldunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bkldunitcost['max'])) {
                $this->addUsingAlias(BookingDetailTableMap::COL_BKLDUNITCOST, $bkldunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDUNITCOST, $bkldunitcost, $comparison);
    }

    /**
     * Filter the query on the BkldAcSuplyWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByBkldacsuplywhse('fooValue');   // WHERE BkldAcSuplyWhse = 'fooValue'
     * $query->filterByBkldacsuplywhse('%fooValue%', Criteria::LIKE); // WHERE BkldAcSuplyWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bkldacsuplywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByBkldacsuplywhse($bkldacsuplywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bkldacsuplywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_BKLDACSUPLYWHSE, $bkldacsuplywhse, $comparison);
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BookingDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBookingDetailQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(BookingDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BookingDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBookingDetail $bookingDetail Object to remove from the list of results
     *
     * @return $this|ChildBookingDetailQuery The current query, for fluid interface
     */
    public function prune($bookingDetail = null)
    {
        if ($bookingDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BookingDetailTableMap::COL_BKLHORDRBASE), $bookingDetail->getBklhordrbase(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BookingDetailTableMap::COL_BKLDORIGLINE), $bookingDetail->getBkldorigline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(BookingDetailTableMap::COL_BKLDSEQ), $bookingDetail->getBkldseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_book_log_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BookingDetailTableMap::clearInstancePool();
            BookingDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BookingDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BookingDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BookingDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BookingDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BookingDetailQuery
