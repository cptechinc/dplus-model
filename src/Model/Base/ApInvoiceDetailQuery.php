<?php

namespace Base;

use \ApInvoiceDetail as ChildApInvoiceDetail;
use \ApInvoiceDetailQuery as ChildApInvoiceDetailQuery;
use \Exception;
use \PDO;
use Map\ApInvoiceDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_invoice_det' table.
 *
 *
 *
 * @method     ChildApInvoiceDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildApInvoiceDetailQuery orderByApidpaytokey($order = Criteria::ASC) Order by the ApidPayToKey column
 * @method     ChildApInvoiceDetailQuery orderByApidptname($order = Criteria::ASC) Order by the ApidPtName column
 * @method     ChildApInvoiceDetailQuery orderByApidptadr1($order = Criteria::ASC) Order by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetailQuery orderByApidptadr2($order = Criteria::ASC) Order by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetailQuery orderByApidptadr3($order = Criteria::ASC) Order by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetailQuery orderByApidptctry($order = Criteria::ASC) Order by the ApidPtCtry column
 * @method     ChildApInvoiceDetailQuery orderByApidptcity($order = Criteria::ASC) Order by the ApidPtCity column
 * @method     ChildApInvoiceDetailQuery orderByApidptstat($order = Criteria::ASC) Order by the ApidPtStat column
 * @method     ChildApInvoiceDetailQuery orderByApidptzipcode($order = Criteria::ASC) Order by the ApidPtZipCode column
 * @method     ChildApInvoiceDetailQuery orderByApidponbr($order = Criteria::ASC) Order by the ApidPoNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidctrlnbr($order = Criteria::ASC) Order by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidinvnbr($order = Criteria::ASC) Order by the ApidInvNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidseq($order = Criteria::ASC) Order by the ApidSeq column
 * @method     ChildApInvoiceDetailQuery orderByApidline($order = Criteria::ASC) Order by the ApidLine column
 * @method     ChildApInvoiceDetailQuery orderByApidamt($order = Criteria::ASC) Order by the ApidAmt column
 * @method     ChildApInvoiceDetailQuery orderByApidglacct($order = Criteria::ASC) Order by the ApidGlAcct column
 * @method     ChildApInvoiceDetailQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildApInvoiceDetailQuery orderByApidqtyrec($order = Criteria::ASC) Order by the ApidQtyRec column
 * @method     ChildApInvoiceDetailQuery orderByApiddesc($order = Criteria::ASC) Order by the ApidDesc column
 * @method     ChildApInvoiceDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApInvoiceDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApInvoiceDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApInvoiceDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildApInvoiceDetailQuery groupByApidpaytokey() Group by the ApidPayToKey column
 * @method     ChildApInvoiceDetailQuery groupByApidptname() Group by the ApidPtName column
 * @method     ChildApInvoiceDetailQuery groupByApidptadr1() Group by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetailQuery groupByApidptadr2() Group by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetailQuery groupByApidptadr3() Group by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetailQuery groupByApidptctry() Group by the ApidPtCtry column
 * @method     ChildApInvoiceDetailQuery groupByApidptcity() Group by the ApidPtCity column
 * @method     ChildApInvoiceDetailQuery groupByApidptstat() Group by the ApidPtStat column
 * @method     ChildApInvoiceDetailQuery groupByApidptzipcode() Group by the ApidPtZipCode column
 * @method     ChildApInvoiceDetailQuery groupByApidponbr() Group by the ApidPoNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidctrlnbr() Group by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidinvnbr() Group by the ApidInvNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidseq() Group by the ApidSeq column
 * @method     ChildApInvoiceDetailQuery groupByApidline() Group by the ApidLine column
 * @method     ChildApInvoiceDetailQuery groupByApidamt() Group by the ApidAmt column
 * @method     ChildApInvoiceDetailQuery groupByApidglacct() Group by the ApidGlAcct column
 * @method     ChildApInvoiceDetailQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildApInvoiceDetailQuery groupByApidqtyrec() Group by the ApidQtyRec column
 * @method     ChildApInvoiceDetailQuery groupByApiddesc() Group by the ApidDesc column
 * @method     ChildApInvoiceDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApInvoiceDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApInvoiceDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApInvoiceDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApInvoiceDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApInvoiceDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApInvoiceDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApInvoiceDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApInvoiceDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApInvoiceDetailQuery leftJoinApInvoice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery rightJoinApInvoice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery innerJoinApInvoice($relationAlias = null) Adds a INNER JOIN clause to the query using the ApInvoice relation
 *
 * @method     ChildApInvoiceDetailQuery joinWithApInvoice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ApInvoice relation
 *
 * @method     ChildApInvoiceDetailQuery leftJoinWithApInvoice() Adds a LEFT JOIN clause and with to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery rightJoinWithApInvoice() Adds a RIGHT JOIN clause and with to the query using the ApInvoice relation
 * @method     ChildApInvoiceDetailQuery innerJoinWithApInvoice() Adds a INNER JOIN clause and with to the query using the ApInvoice relation
 *
 * @method     ChildApInvoiceDetailQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApInvoiceDetailQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApInvoiceDetailQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApInvoiceDetailQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \ApInvoiceQuery|\VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApInvoiceDetail findOne(ConnectionInterface $con = null) Return the first ChildApInvoiceDetail matching the query
 * @method     ChildApInvoiceDetail findOneOrCreate(ConnectionInterface $con = null) Return the first ChildApInvoiceDetail matching the query, or a new ChildApInvoiceDetail object populated from the query conditions when no match is found
 *
 * @method     ChildApInvoiceDetail findOneByApvevendid(string $ApveVendId) Return the first ChildApInvoiceDetail filtered by the ApveVendId column
 * @method     ChildApInvoiceDetail findOneByApidpaytokey(string $ApidPayToKey) Return the first ChildApInvoiceDetail filtered by the ApidPayToKey column
 * @method     ChildApInvoiceDetail findOneByApidptname(string $ApidPtName) Return the first ChildApInvoiceDetail filtered by the ApidPtName column
 * @method     ChildApInvoiceDetail findOneByApidptadr1(string $ApidPtAdr1) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetail findOneByApidptadr2(string $ApidPtAdr2) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetail findOneByApidptadr3(string $ApidPtAdr3) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetail findOneByApidptctry(string $ApidPtCtry) Return the first ChildApInvoiceDetail filtered by the ApidPtCtry column
 * @method     ChildApInvoiceDetail findOneByApidptcity(string $ApidPtCity) Return the first ChildApInvoiceDetail filtered by the ApidPtCity column
 * @method     ChildApInvoiceDetail findOneByApidptstat(string $ApidPtStat) Return the first ChildApInvoiceDetail filtered by the ApidPtStat column
 * @method     ChildApInvoiceDetail findOneByApidptzipcode(string $ApidPtZipCode) Return the first ChildApInvoiceDetail filtered by the ApidPtZipCode column
 * @method     ChildApInvoiceDetail findOneByApidponbr(string $ApidPoNbr) Return the first ChildApInvoiceDetail filtered by the ApidPoNbr column
 * @method     ChildApInvoiceDetail findOneByApidctrlnbr(string $ApidCtrlNbr) Return the first ChildApInvoiceDetail filtered by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetail findOneByApidinvnbr(string $ApidInvNbr) Return the first ChildApInvoiceDetail filtered by the ApidInvNbr column
 * @method     ChildApInvoiceDetail findOneByApidseq(int $ApidSeq) Return the first ChildApInvoiceDetail filtered by the ApidSeq column
 * @method     ChildApInvoiceDetail findOneByApidline(int $ApidLine) Return the first ChildApInvoiceDetail filtered by the ApidLine column
 * @method     ChildApInvoiceDetail findOneByApidamt(string $ApidAmt) Return the first ChildApInvoiceDetail filtered by the ApidAmt column
 * @method     ChildApInvoiceDetail findOneByApidglacct(string $ApidGlAcct) Return the first ChildApInvoiceDetail filtered by the ApidGlAcct column
 * @method     ChildApInvoiceDetail findOneByInititemnbr(string $InitItemNbr) Return the first ChildApInvoiceDetail filtered by the InitItemNbr column
 * @method     ChildApInvoiceDetail findOneByApidqtyrec(string $ApidQtyRec) Return the first ChildApInvoiceDetail filtered by the ApidQtyRec column
 * @method     ChildApInvoiceDetail findOneByApiddesc(string $ApidDesc) Return the first ChildApInvoiceDetail filtered by the ApidDesc column
 * @method     ChildApInvoiceDetail findOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoiceDetail filtered by the DateUpdtd column
 * @method     ChildApInvoiceDetail findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoiceDetail filtered by the TimeUpdtd column
 * @method     ChildApInvoiceDetail findOneByDummy(string $dummy) Return the first ChildApInvoiceDetail filtered by the dummy column *

 * @method     ChildApInvoiceDetail requirePk($key, ConnectionInterface $con = null) Return the ChildApInvoiceDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOne(ConnectionInterface $con = null) Return the first ChildApInvoiceDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApInvoiceDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildApInvoiceDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidpaytokey(string $ApidPayToKey) Return the first ChildApInvoiceDetail filtered by the ApidPayToKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptname(string $ApidPtName) Return the first ChildApInvoiceDetail filtered by the ApidPtName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptadr1(string $ApidPtAdr1) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptadr2(string $ApidPtAdr2) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptadr3(string $ApidPtAdr3) Return the first ChildApInvoiceDetail filtered by the ApidPtAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptctry(string $ApidPtCtry) Return the first ChildApInvoiceDetail filtered by the ApidPtCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptcity(string $ApidPtCity) Return the first ChildApInvoiceDetail filtered by the ApidPtCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptstat(string $ApidPtStat) Return the first ChildApInvoiceDetail filtered by the ApidPtStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidptzipcode(string $ApidPtZipCode) Return the first ChildApInvoiceDetail filtered by the ApidPtZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidponbr(string $ApidPoNbr) Return the first ChildApInvoiceDetail filtered by the ApidPoNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidctrlnbr(string $ApidCtrlNbr) Return the first ChildApInvoiceDetail filtered by the ApidCtrlNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidinvnbr(string $ApidInvNbr) Return the first ChildApInvoiceDetail filtered by the ApidInvNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidseq(int $ApidSeq) Return the first ChildApInvoiceDetail filtered by the ApidSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidline(int $ApidLine) Return the first ChildApInvoiceDetail filtered by the ApidLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidamt(string $ApidAmt) Return the first ChildApInvoiceDetail filtered by the ApidAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidglacct(string $ApidGlAcct) Return the first ChildApInvoiceDetail filtered by the ApidGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByInititemnbr(string $InitItemNbr) Return the first ChildApInvoiceDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApidqtyrec(string $ApidQtyRec) Return the first ChildApInvoiceDetail filtered by the ApidQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByApiddesc(string $ApidDesc) Return the first ChildApInvoiceDetail filtered by the ApidDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApInvoiceDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApInvoiceDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApInvoiceDetail requireOneByDummy(string $dummy) Return the first ChildApInvoiceDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApInvoiceDetail[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildApInvoiceDetail objects based on current ModelCriteria
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildApInvoiceDetail objects filtered by the ApveVendId column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidpaytokey(string $ApidPayToKey) Return ChildApInvoiceDetail objects filtered by the ApidPayToKey column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptname(string $ApidPtName) Return ChildApInvoiceDetail objects filtered by the ApidPtName column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptadr1(string $ApidPtAdr1) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr1 column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptadr2(string $ApidPtAdr2) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr2 column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptadr3(string $ApidPtAdr3) Return ChildApInvoiceDetail objects filtered by the ApidPtAdr3 column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptctry(string $ApidPtCtry) Return ChildApInvoiceDetail objects filtered by the ApidPtCtry column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptcity(string $ApidPtCity) Return ChildApInvoiceDetail objects filtered by the ApidPtCity column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptstat(string $ApidPtStat) Return ChildApInvoiceDetail objects filtered by the ApidPtStat column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidptzipcode(string $ApidPtZipCode) Return ChildApInvoiceDetail objects filtered by the ApidPtZipCode column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidponbr(string $ApidPoNbr) Return ChildApInvoiceDetail objects filtered by the ApidPoNbr column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidctrlnbr(string $ApidCtrlNbr) Return ChildApInvoiceDetail objects filtered by the ApidCtrlNbr column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidinvnbr(string $ApidInvNbr) Return ChildApInvoiceDetail objects filtered by the ApidInvNbr column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidseq(int $ApidSeq) Return ChildApInvoiceDetail objects filtered by the ApidSeq column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidline(int $ApidLine) Return ChildApInvoiceDetail objects filtered by the ApidLine column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidamt(string $ApidAmt) Return ChildApInvoiceDetail objects filtered by the ApidAmt column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidglacct(string $ApidGlAcct) Return ChildApInvoiceDetail objects filtered by the ApidGlAcct column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildApInvoiceDetail objects filtered by the InitItemNbr column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApidqtyrec(string $ApidQtyRec) Return ChildApInvoiceDetail objects filtered by the ApidQtyRec column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByApiddesc(string $ApidDesc) Return ChildApInvoiceDetail objects filtered by the ApidDesc column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildApInvoiceDetail objects filtered by the DateUpdtd column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildApInvoiceDetail objects filtered by the TimeUpdtd column
 * @method     ChildApInvoiceDetail[]|ObjectCollection findByDummy(string $dummy) Return ChildApInvoiceDetail objects filtered by the dummy column
 * @method     ChildApInvoiceDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ApInvoiceDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApInvoiceDetailQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApInvoiceDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApInvoiceDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApInvoiceDetailQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildApInvoiceDetailQuery) {
            return $criteria;
        }
        $query = new ChildApInvoiceDetailQuery();
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
     * @param array[$ApveVendId, $ApidPayToKey, $ApidPoNbr, $ApidCtrlNbr, $ApidInvNbr, $ApidSeq, $ApidLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildApInvoiceDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApInvoiceDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]))))) {
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
     * @return ChildApInvoiceDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, ApidPayToKey, ApidPtName, ApidPtAdr1, ApidPtAdr2, ApidPtAdr3, ApidPtCtry, ApidPtCity, ApidPtStat, ApidPtZipCode, ApidPoNbr, ApidCtrlNbr, ApidInvNbr, ApidSeq, ApidLine, ApidAmt, ApidGlAcct, InitItemNbr, ApidQtyRec, ApidDesc, DateUpdtd, TimeUpdtd, dummy FROM ap_invoice_det WHERE ApveVendId = :p0 AND ApidPayToKey = :p1 AND ApidPoNbr = :p2 AND ApidCtrlNbr = :p3 AND ApidInvNbr = :p4 AND ApidSeq = :p5 AND ApidLine = :p6';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
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
            /** @var ChildApInvoiceDetail $obj */
            $obj = new ChildApInvoiceDetail();
            $obj->hydrate($row);
            ApInvoiceDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5]), (null === $key[6] || is_scalar($key[6]) || is_callable([$key[6], '__toString']) ? (string) $key[6] : $key[6])]));
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
     * @return ChildApInvoiceDetail|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPONBR, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDINVNBR, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $key[6], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDPONBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDINVNBR, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDSEQ, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(ApInvoiceDetailTableMap::COL_APIDLINE, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the ApidPayToKey column
     *
     * Example usage:
     * <code>
     * $query->filterByApidpaytokey('fooValue');   // WHERE ApidPayToKey = 'fooValue'
     * $query->filterByApidpaytokey('%fooValue%', Criteria::LIKE); // WHERE ApidPayToKey LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidpaytokey The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidpaytokey($apidpaytokey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidpaytokey)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $apidpaytokey, $comparison);
    }

    /**
     * Filter the query on the ApidPtName column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptname('fooValue');   // WHERE ApidPtName = 'fooValue'
     * $query->filterByApidptname('%fooValue%', Criteria::LIKE); // WHERE ApidPtName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptname($apidptname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTNAME, $apidptname, $comparison);
    }

    /**
     * Filter the query on the ApidPtAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptadr1('fooValue');   // WHERE ApidPtAdr1 = 'fooValue'
     * $query->filterByApidptadr1('%fooValue%', Criteria::LIKE); // WHERE ApidPtAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptadr1($apidptadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTADR1, $apidptadr1, $comparison);
    }

    /**
     * Filter the query on the ApidPtAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptadr2('fooValue');   // WHERE ApidPtAdr2 = 'fooValue'
     * $query->filterByApidptadr2('%fooValue%', Criteria::LIKE); // WHERE ApidPtAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptadr2($apidptadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTADR2, $apidptadr2, $comparison);
    }

    /**
     * Filter the query on the ApidPtAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptadr3('fooValue');   // WHERE ApidPtAdr3 = 'fooValue'
     * $query->filterByApidptadr3('%fooValue%', Criteria::LIKE); // WHERE ApidPtAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptadr3($apidptadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTADR3, $apidptadr3, $comparison);
    }

    /**
     * Filter the query on the ApidPtCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptctry('fooValue');   // WHERE ApidPtCtry = 'fooValue'
     * $query->filterByApidptctry('%fooValue%', Criteria::LIKE); // WHERE ApidPtCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptctry($apidptctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTCTRY, $apidptctry, $comparison);
    }

    /**
     * Filter the query on the ApidPtCity column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptcity('fooValue');   // WHERE ApidPtCity = 'fooValue'
     * $query->filterByApidptcity('%fooValue%', Criteria::LIKE); // WHERE ApidPtCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptcity($apidptcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTCITY, $apidptcity, $comparison);
    }

    /**
     * Filter the query on the ApidPtStat column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptstat('fooValue');   // WHERE ApidPtStat = 'fooValue'
     * $query->filterByApidptstat('%fooValue%', Criteria::LIKE); // WHERE ApidPtStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptstat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptstat($apidptstat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptstat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTSTAT, $apidptstat, $comparison);
    }

    /**
     * Filter the query on the ApidPtZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByApidptzipcode('fooValue');   // WHERE ApidPtZipCode = 'fooValue'
     * $query->filterByApidptzipcode('%fooValue%', Criteria::LIKE); // WHERE ApidPtZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidptzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidptzipcode($apidptzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidptzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPTZIPCODE, $apidptzipcode, $comparison);
    }

    /**
     * Filter the query on the ApidPoNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApidponbr('fooValue');   // WHERE ApidPoNbr = 'fooValue'
     * $query->filterByApidponbr('%fooValue%', Criteria::LIKE); // WHERE ApidPoNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidponbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidponbr($apidponbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidponbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPONBR, $apidponbr, $comparison);
    }

    /**
     * Filter the query on the ApidCtrlNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApidctrlnbr('fooValue');   // WHERE ApidCtrlNbr = 'fooValue'
     * $query->filterByApidctrlnbr('%fooValue%', Criteria::LIKE); // WHERE ApidCtrlNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidctrlnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidctrlnbr($apidctrlnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidctrlnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $apidctrlnbr, $comparison);
    }

    /**
     * Filter the query on the ApidInvNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByApidinvnbr('fooValue');   // WHERE ApidInvNbr = 'fooValue'
     * $query->filterByApidinvnbr('%fooValue%', Criteria::LIKE); // WHERE ApidInvNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidinvnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidinvnbr($apidinvnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidinvnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDINVNBR, $apidinvnbr, $comparison);
    }

    /**
     * Filter the query on the ApidSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByApidseq(1234); // WHERE ApidSeq = 1234
     * $query->filterByApidseq(array(12, 34)); // WHERE ApidSeq IN (12, 34)
     * $query->filterByApidseq(array('min' => 12)); // WHERE ApidSeq > 12
     * </code>
     *
     * @see       filterByApInvoice()
     *
     * @param     mixed $apidseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidseq($apidseq = null, $comparison = null)
    {
        if (is_array($apidseq)) {
            $useMinMax = false;
            if (isset($apidseq['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apidseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidseq['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apidseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apidseq, $comparison);
    }

    /**
     * Filter the query on the ApidLine column
     *
     * Example usage:
     * <code>
     * $query->filterByApidline(1234); // WHERE ApidLine = 1234
     * $query->filterByApidline(array(12, 34)); // WHERE ApidLine IN (12, 34)
     * $query->filterByApidline(array('min' => 12)); // WHERE ApidLine > 12
     * </code>
     *
     * @param     mixed $apidline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidline($apidline = null, $comparison = null)
    {
        if (is_array($apidline)) {
            $useMinMax = false;
            if (isset($apidline['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $apidline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidline['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $apidline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDLINE, $apidline, $comparison);
    }

    /**
     * Filter the query on the ApidAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByApidamt(1234); // WHERE ApidAmt = 1234
     * $query->filterByApidamt(array(12, 34)); // WHERE ApidAmt IN (12, 34)
     * $query->filterByApidamt(array('min' => 12)); // WHERE ApidAmt > 12
     * </code>
     *
     * @param     mixed $apidamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidamt($apidamt = null, $comparison = null)
    {
        if (is_array($apidamt)) {
            $useMinMax = false;
            if (isset($apidamt['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDAMT, $apidamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidamt['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDAMT, $apidamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDAMT, $apidamt, $comparison);
    }

    /**
     * Filter the query on the ApidGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByApidglacct('fooValue');   // WHERE ApidGlAcct = 'fooValue'
     * $query->filterByApidglacct('%fooValue%', Criteria::LIKE); // WHERE ApidGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apidglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidglacct($apidglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apidglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDGLACCT, $apidglacct, $comparison);
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
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the ApidQtyRec column
     *
     * Example usage:
     * <code>
     * $query->filterByApidqtyrec(1234); // WHERE ApidQtyRec = 1234
     * $query->filterByApidqtyrec(array(12, 34)); // WHERE ApidQtyRec IN (12, 34)
     * $query->filterByApidqtyrec(array('min' => 12)); // WHERE ApidQtyRec > 12
     * </code>
     *
     * @param     mixed $apidqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApidqtyrec($apidqtyrec = null, $comparison = null)
    {
        if (is_array($apidqtyrec)) {
            $useMinMax = false;
            if (isset($apidqtyrec['min'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDQTYREC, $apidqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apidqtyrec['max'])) {
                $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDQTYREC, $apidqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDQTYREC, $apidqtyrec, $comparison);
    }

    /**
     * Filter the query on the ApidDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByApiddesc('fooValue');   // WHERE ApidDesc = 'fooValue'
     * $query->filterByApiddesc('%fooValue%', Criteria::LIKE); // WHERE ApidDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apiddesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApiddesc($apiddesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apiddesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDDESC, $apiddesc, $comparison);
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
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApInvoiceDetailTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ApInvoice object
     *
     * @param \ApInvoice $apInvoice The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByApInvoice($apInvoice, $comparison = null)
    {
        if ($apInvoice instanceof \ApInvoice) {
            return $this
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDINVNBR, $apInvoice->getApihinvnbr(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $apInvoice->getApvevendid(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY, $apInvoice->getApihpaytokey(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDPONBR, $apInvoice->getApihponbr(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDCTRLNBR, $apInvoice->getApihctrlnbr(), $comparison)
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APIDSEQ, $apInvoice->getApihseq(), $comparison);
        } else {
            throw new PropelException('filterByApInvoice() only accepts arguments of type \ApInvoice');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ApInvoice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function joinApInvoice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ApInvoice');

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
            $this->addJoinObject($join, 'ApInvoice');
        }

        return $this;
    }

    /**
     * Use the ApInvoice relation ApInvoice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ApInvoiceQuery A secondary query class using the current class as primary query
     */
    public function useApInvoiceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinApInvoice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ApInvoice', '\ApInvoiceQuery');
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ApInvoiceDetailTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vendor');

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
            $this->addJoinObject($join, 'Vendor');
        }

        return $this;
    }

    /**
     * Use the Vendor relation Vendor object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \VendorQuery A secondary query class using the current class as primary query
     */
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildApInvoiceDetail $apInvoiceDetail Object to remove from the list of results
     *
     * @return $this|ChildApInvoiceDetailQuery The current query, for fluid interface
     */
    public function prune($apInvoiceDetail = null)
    {
        if ($apInvoiceDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APVEVENDID), $apInvoiceDetail->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDPAYTOKEY), $apInvoiceDetail->getApidpaytokey(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDPONBR), $apInvoiceDetail->getApidponbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDCTRLNBR), $apInvoiceDetail->getApidctrlnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDINVNBR), $apInvoiceDetail->getApidinvnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDSEQ), $apInvoiceDetail->getApidseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(ApInvoiceDetailTableMap::COL_APIDLINE), $apInvoiceDetail->getApidline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_invoice_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApInvoiceDetailTableMap::clearInstancePool();
            ApInvoiceDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApInvoiceDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApInvoiceDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApInvoiceDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApInvoiceDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ApInvoiceDetailQuery
