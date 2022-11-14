<?php

namespace Base;

use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \Exception;
use \PDO;
use Map\InvLotMasterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_lot_mast' table.
 *
 *
 *
 * @method     ChildInvLotMasterQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvLotMasterQuery orderByLotmlotnbr($order = Criteria::ASC) Order by the LotmLotNbr column
 * @method     ChildInvLotMasterQuery orderByLotmlotref($order = Criteria::ASC) Order by the LotmLotRef column
 * @method     ChildInvLotMasterQuery orderByLotmfrstactdate($order = Criteria::ASC) Order by the LotmFrstActDate column
 * @method     ChildInvLotMasterQuery orderByLotmimagyn($order = Criteria::ASC) Order by the LotmImagYn column
 * @method     ChildInvLotMasterQuery orderByLotmunitwght($order = Criteria::ASC) Order by the LotmUnitWght column
 * @method     ChildInvLotMasterQuery orderByLotmrevision($order = Criteria::ASC) Order by the LotmRevision column
 * @method     ChildInvLotMasterQuery orderByLotmctry($order = Criteria::ASC) Order by the LotmCtry column
 * @method     ChildInvLotMasterQuery orderByLotmcofc($order = Criteria::ASC) Order by the LotmCOfC column
 * @method     ChildInvLotMasterQuery orderByLotmcreatedate($order = Criteria::ASC) Order by the LotmCreateDate column
 * @method     ChildInvLotMasterQuery orderByLotmcreatetime($order = Criteria::ASC) Order by the LotmCreateTime column
 * @method     ChildInvLotMasterQuery orderByLotmvendid($order = Criteria::ASC) Order by the LotmVendId column
 * @method     ChildInvLotMasterQuery orderByLotmexpiredate($order = Criteria::ASC) Order by the LotmExpireDate column
 * @method     ChildInvLotMasterQuery orderByLotmunitcost($order = Criteria::ASC) Order by the LotmUnitCost column
 * @method     ChildInvLotMasterQuery orderByLotmcntrqty($order = Criteria::ASC) Order by the LotmCntrQty column
 * @method     ChildInvLotMasterQuery orderByLotmsrccd($order = Criteria::ASC) Order by the LotmSrcCd column
 * @method     ChildInvLotMasterQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvLotMasterQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvLotMasterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvLotMasterQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvLotMasterQuery groupByLotmlotnbr() Group by the LotmLotNbr column
 * @method     ChildInvLotMasterQuery groupByLotmlotref() Group by the LotmLotRef column
 * @method     ChildInvLotMasterQuery groupByLotmfrstactdate() Group by the LotmFrstActDate column
 * @method     ChildInvLotMasterQuery groupByLotmimagyn() Group by the LotmImagYn column
 * @method     ChildInvLotMasterQuery groupByLotmunitwght() Group by the LotmUnitWght column
 * @method     ChildInvLotMasterQuery groupByLotmrevision() Group by the LotmRevision column
 * @method     ChildInvLotMasterQuery groupByLotmctry() Group by the LotmCtry column
 * @method     ChildInvLotMasterQuery groupByLotmcofc() Group by the LotmCOfC column
 * @method     ChildInvLotMasterQuery groupByLotmcreatedate() Group by the LotmCreateDate column
 * @method     ChildInvLotMasterQuery groupByLotmcreatetime() Group by the LotmCreateTime column
 * @method     ChildInvLotMasterQuery groupByLotmvendid() Group by the LotmVendId column
 * @method     ChildInvLotMasterQuery groupByLotmexpiredate() Group by the LotmExpireDate column
 * @method     ChildInvLotMasterQuery groupByLotmunitcost() Group by the LotmUnitCost column
 * @method     ChildInvLotMasterQuery groupByLotmcntrqty() Group by the LotmCntrQty column
 * @method     ChildInvLotMasterQuery groupByLotmsrccd() Group by the LotmSrcCd column
 * @method     ChildInvLotMasterQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvLotMasterQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvLotMasterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvLotMasterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvLotMasterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvLotMasterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvLotMasterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvLotMasterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvLotMasterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvLotMasterQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotMasterQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvLotMasterQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotMasterQuery leftJoinInvWhseLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery rightJoinInvWhseLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery innerJoinInvWhseLot($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseLot relation
 *
 * @method     ChildInvLotMasterQuery joinWithInvWhseLot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithInvWhseLot() Adds a LEFT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery rightJoinWithInvWhseLot() Adds a RIGHT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildInvLotMasterQuery innerJoinWithInvWhseLot() Adds a INNER JOIN clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildInvLotMasterQuery leftJoinSoAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinSoAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinSoAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithSoAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithSoAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithSoAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithSoAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinSoPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinSoPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinSoPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery joinWithSoPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoPickedLotserial relation
 *
 * @method     ChildInvLotMasterQuery leftJoinWithSoPickedLotserial() Adds a LEFT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery rightJoinWithSoPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildInvLotMasterQuery innerJoinWithSoPickedLotserial() Adds a INNER JOIN clause and with to the query using the SoPickedLotserial relation
 *
 * @method     \ItemMasterItemQuery|\InvWhseLotQuery|\SoAllocatedLotserialQuery|\SoPickedLotserialQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvLotMaster findOne(ConnectionInterface $con = null) Return the first ChildInvLotMaster matching the query
 * @method     ChildInvLotMaster findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvLotMaster matching the query, or a new ChildInvLotMaster object populated from the query conditions when no match is found
 *
 * @method     ChildInvLotMaster findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvLotMaster filtered by the InitItemNbr column
 * @method     ChildInvLotMaster findOneByLotmlotnbr(string $LotmLotNbr) Return the first ChildInvLotMaster filtered by the LotmLotNbr column
 * @method     ChildInvLotMaster findOneByLotmlotref(string $LotmLotRef) Return the first ChildInvLotMaster filtered by the LotmLotRef column
 * @method     ChildInvLotMaster findOneByLotmfrstactdate(string $LotmFrstActDate) Return the first ChildInvLotMaster filtered by the LotmFrstActDate column
 * @method     ChildInvLotMaster findOneByLotmimagyn(string $LotmImagYn) Return the first ChildInvLotMaster filtered by the LotmImagYn column
 * @method     ChildInvLotMaster findOneByLotmunitwght(string $LotmUnitWght) Return the first ChildInvLotMaster filtered by the LotmUnitWght column
 * @method     ChildInvLotMaster findOneByLotmrevision(string $LotmRevision) Return the first ChildInvLotMaster filtered by the LotmRevision column
 * @method     ChildInvLotMaster findOneByLotmctry(string $LotmCtry) Return the first ChildInvLotMaster filtered by the LotmCtry column
 * @method     ChildInvLotMaster findOneByLotmcofc(string $LotmCOfC) Return the first ChildInvLotMaster filtered by the LotmCOfC column
 * @method     ChildInvLotMaster findOneByLotmcreatedate(string $LotmCreateDate) Return the first ChildInvLotMaster filtered by the LotmCreateDate column
 * @method     ChildInvLotMaster findOneByLotmcreatetime(string $LotmCreateTime) Return the first ChildInvLotMaster filtered by the LotmCreateTime column
 * @method     ChildInvLotMaster findOneByLotmvendid(string $LotmVendId) Return the first ChildInvLotMaster filtered by the LotmVendId column
 * @method     ChildInvLotMaster findOneByLotmexpiredate(string $LotmExpireDate) Return the first ChildInvLotMaster filtered by the LotmExpireDate column
 * @method     ChildInvLotMaster findOneByLotmunitcost(string $LotmUnitCost) Return the first ChildInvLotMaster filtered by the LotmUnitCost column
 * @method     ChildInvLotMaster findOneByLotmcntrqty(string $LotmCntrQty) Return the first ChildInvLotMaster filtered by the LotmCntrQty column
 * @method     ChildInvLotMaster findOneByLotmsrccd(string $LotmSrcCd) Return the first ChildInvLotMaster filtered by the LotmSrcCd column
 * @method     ChildInvLotMaster findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvLotMaster filtered by the DateUpdtd column
 * @method     ChildInvLotMaster findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvLotMaster filtered by the TimeUpdtd column
 * @method     ChildInvLotMaster findOneByDummy(string $dummy) Return the first ChildInvLotMaster filtered by the dummy column *

 * @method     ChildInvLotMaster requirePk($key, ConnectionInterface $con = null) Return the ChildInvLotMaster by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOne(ConnectionInterface $con = null) Return the first ChildInvLotMaster matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvLotMaster requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvLotMaster filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmlotnbr(string $LotmLotNbr) Return the first ChildInvLotMaster filtered by the LotmLotNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmlotref(string $LotmLotRef) Return the first ChildInvLotMaster filtered by the LotmLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmfrstactdate(string $LotmFrstActDate) Return the first ChildInvLotMaster filtered by the LotmFrstActDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmimagyn(string $LotmImagYn) Return the first ChildInvLotMaster filtered by the LotmImagYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmunitwght(string $LotmUnitWght) Return the first ChildInvLotMaster filtered by the LotmUnitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmrevision(string $LotmRevision) Return the first ChildInvLotMaster filtered by the LotmRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmctry(string $LotmCtry) Return the first ChildInvLotMaster filtered by the LotmCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcofc(string $LotmCOfC) Return the first ChildInvLotMaster filtered by the LotmCOfC column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcreatedate(string $LotmCreateDate) Return the first ChildInvLotMaster filtered by the LotmCreateDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcreatetime(string $LotmCreateTime) Return the first ChildInvLotMaster filtered by the LotmCreateTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmvendid(string $LotmVendId) Return the first ChildInvLotMaster filtered by the LotmVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmexpiredate(string $LotmExpireDate) Return the first ChildInvLotMaster filtered by the LotmExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmunitcost(string $LotmUnitCost) Return the first ChildInvLotMaster filtered by the LotmUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmcntrqty(string $LotmCntrQty) Return the first ChildInvLotMaster filtered by the LotmCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByLotmsrccd(string $LotmSrcCd) Return the first ChildInvLotMaster filtered by the LotmSrcCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvLotMaster filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvLotMaster filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotMaster requireOneByDummy(string $dummy) Return the first ChildInvLotMaster filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvLotMaster[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvLotMaster objects based on current ModelCriteria
 * @method     ChildInvLotMaster[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvLotMaster objects filtered by the InitItemNbr column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmlotnbr(string $LotmLotNbr) Return ChildInvLotMaster objects filtered by the LotmLotNbr column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmlotref(string $LotmLotRef) Return ChildInvLotMaster objects filtered by the LotmLotRef column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmfrstactdate(string $LotmFrstActDate) Return ChildInvLotMaster objects filtered by the LotmFrstActDate column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmimagyn(string $LotmImagYn) Return ChildInvLotMaster objects filtered by the LotmImagYn column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmunitwght(string $LotmUnitWght) Return ChildInvLotMaster objects filtered by the LotmUnitWght column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmrevision(string $LotmRevision) Return ChildInvLotMaster objects filtered by the LotmRevision column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmctry(string $LotmCtry) Return ChildInvLotMaster objects filtered by the LotmCtry column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmcofc(string $LotmCOfC) Return ChildInvLotMaster objects filtered by the LotmCOfC column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmcreatedate(string $LotmCreateDate) Return ChildInvLotMaster objects filtered by the LotmCreateDate column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmcreatetime(string $LotmCreateTime) Return ChildInvLotMaster objects filtered by the LotmCreateTime column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmvendid(string $LotmVendId) Return ChildInvLotMaster objects filtered by the LotmVendId column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmexpiredate(string $LotmExpireDate) Return ChildInvLotMaster objects filtered by the LotmExpireDate column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmunitcost(string $LotmUnitCost) Return ChildInvLotMaster objects filtered by the LotmUnitCost column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmcntrqty(string $LotmCntrQty) Return ChildInvLotMaster objects filtered by the LotmCntrQty column
 * @method     ChildInvLotMaster[]|ObjectCollection findByLotmsrccd(string $LotmSrcCd) Return ChildInvLotMaster objects filtered by the LotmSrcCd column
 * @method     ChildInvLotMaster[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvLotMaster objects filtered by the DateUpdtd column
 * @method     ChildInvLotMaster[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvLotMaster objects filtered by the TimeUpdtd column
 * @method     ChildInvLotMaster[]|ObjectCollection findByDummy(string $dummy) Return ChildInvLotMaster objects filtered by the dummy column
 * @method     ChildInvLotMaster[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvLotMasterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvLotMasterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvLotMaster', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvLotMasterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvLotMasterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvLotMasterQuery) {
            return $criteria;
        }
        $query = new ChildInvLotMasterQuery();
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
     * @param array[$InitItemNbr, $LotmLotNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvLotMaster|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvLotMasterTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvLotMaster A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, LotmLotNbr, LotmLotRef, LotmFrstActDate, LotmImagYn, LotmUnitWght, LotmRevision, LotmCtry, LotmCOfC, LotmCreateDate, LotmCreateTime, LotmVendId, LotmExpireDate, LotmUnitCost, LotmCntrQty, LotmSrcCd, DateUpdtd, TimeUpdtd, dummy FROM inv_lot_mast WHERE InitItemNbr = :p0 AND LotmLotNbr = :p1';
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
            /** @var ChildInvLotMaster $obj */
            $obj = new ChildInvLotMaster();
            $obj->hydrate($row);
            InvLotMasterTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvLotMaster|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvLotMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvLotMasterTableMap::COL_LOTMLOTNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the LotmLotNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmlotnbr('fooValue');   // WHERE LotmLotNbr = 'fooValue'
     * $query->filterByLotmlotnbr('%fooValue%', Criteria::LIKE); // WHERE LotmLotNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmlotnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmlotnbr($lotmlotnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmlotnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $lotmlotnbr, $comparison);
    }

    /**
     * Filter the query on the LotmLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmlotref('fooValue');   // WHERE LotmLotRef = 'fooValue'
     * $query->filterByLotmlotref('%fooValue%', Criteria::LIKE); // WHERE LotmLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmlotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmlotref($lotmlotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmlotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTREF, $lotmlotref, $comparison);
    }

    /**
     * Filter the query on the LotmFrstActDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmfrstactdate('fooValue');   // WHERE LotmFrstActDate = 'fooValue'
     * $query->filterByLotmfrstactdate('%fooValue%', Criteria::LIKE); // WHERE LotmFrstActDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmfrstactdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmfrstactdate($lotmfrstactdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmfrstactdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMFRSTACTDATE, $lotmfrstactdate, $comparison);
    }

    /**
     * Filter the query on the LotmImagYn column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmimagyn('fooValue');   // WHERE LotmImagYn = 'fooValue'
     * $query->filterByLotmimagyn('%fooValue%', Criteria::LIKE); // WHERE LotmImagYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmimagyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmimagyn($lotmimagyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmimagyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMIMAGYN, $lotmimagyn, $comparison);
    }

    /**
     * Filter the query on the LotmUnitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmunitwght(1234); // WHERE LotmUnitWght = 1234
     * $query->filterByLotmunitwght(array(12, 34)); // WHERE LotmUnitWght IN (12, 34)
     * $query->filterByLotmunitwght(array('min' => 12)); // WHERE LotmUnitWght > 12
     * </code>
     *
     * @param     mixed $lotmunitwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmunitwght($lotmunitwght = null, $comparison = null)
    {
        if (is_array($lotmunitwght)) {
            $useMinMax = false;
            if (isset($lotmunitwght['min'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITWGHT, $lotmunitwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lotmunitwght['max'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITWGHT, $lotmunitwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITWGHT, $lotmunitwght, $comparison);
    }

    /**
     * Filter the query on the LotmRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmrevision('fooValue');   // WHERE LotmRevision = 'fooValue'
     * $query->filterByLotmrevision('%fooValue%', Criteria::LIKE); // WHERE LotmRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmrevision($lotmrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMREVISION, $lotmrevision, $comparison);
    }

    /**
     * Filter the query on the LotmCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmctry('fooValue');   // WHERE LotmCtry = 'fooValue'
     * $query->filterByLotmctry('%fooValue%', Criteria::LIKE); // WHERE LotmCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmctry($lotmctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCTRY, $lotmctry, $comparison);
    }

    /**
     * Filter the query on the LotmCOfC column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcofc('fooValue');   // WHERE LotmCOfC = 'fooValue'
     * $query->filterByLotmcofc('%fooValue%', Criteria::LIKE); // WHERE LotmCOfC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmcofc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmcofc($lotmcofc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmcofc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCOFC, $lotmcofc, $comparison);
    }

    /**
     * Filter the query on the LotmCreateDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcreatedate('fooValue');   // WHERE LotmCreateDate = 'fooValue'
     * $query->filterByLotmcreatedate('%fooValue%', Criteria::LIKE); // WHERE LotmCreateDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmcreatedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmcreatedate($lotmcreatedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmcreatedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCREATEDATE, $lotmcreatedate, $comparison);
    }

    /**
     * Filter the query on the LotmCreateTime column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcreatetime('fooValue');   // WHERE LotmCreateTime = 'fooValue'
     * $query->filterByLotmcreatetime('%fooValue%', Criteria::LIKE); // WHERE LotmCreateTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmcreatetime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmcreatetime($lotmcreatetime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmcreatetime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCREATETIME, $lotmcreatetime, $comparison);
    }

    /**
     * Filter the query on the LotmVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmvendid('fooValue');   // WHERE LotmVendId = 'fooValue'
     * $query->filterByLotmvendid('%fooValue%', Criteria::LIKE); // WHERE LotmVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmvendid($lotmvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMVENDID, $lotmvendid, $comparison);
    }

    /**
     * Filter the query on the LotmExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmexpiredate('fooValue');   // WHERE LotmExpireDate = 'fooValue'
     * $query->filterByLotmexpiredate('%fooValue%', Criteria::LIKE); // WHERE LotmExpireDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmexpiredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmexpiredate($lotmexpiredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMEXPIREDATE, $lotmexpiredate, $comparison);
    }

    /**
     * Filter the query on the LotmUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmunitcost(1234); // WHERE LotmUnitCost = 1234
     * $query->filterByLotmunitcost(array(12, 34)); // WHERE LotmUnitCost IN (12, 34)
     * $query->filterByLotmunitcost(array('min' => 12)); // WHERE LotmUnitCost > 12
     * </code>
     *
     * @param     mixed $lotmunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmunitcost($lotmunitcost = null, $comparison = null)
    {
        if (is_array($lotmunitcost)) {
            $useMinMax = false;
            if (isset($lotmunitcost['min'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITCOST, $lotmunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lotmunitcost['max'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITCOST, $lotmunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMUNITCOST, $lotmunitcost, $comparison);
    }

    /**
     * Filter the query on the LotmCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmcntrqty(1234); // WHERE LotmCntrQty = 1234
     * $query->filterByLotmcntrqty(array(12, 34)); // WHERE LotmCntrQty IN (12, 34)
     * $query->filterByLotmcntrqty(array('min' => 12)); // WHERE LotmCntrQty > 12
     * </code>
     *
     * @param     mixed $lotmcntrqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmcntrqty($lotmcntrqty = null, $comparison = null)
    {
        if (is_array($lotmcntrqty)) {
            $useMinMax = false;
            if (isset($lotmcntrqty['min'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCNTRQTY, $lotmcntrqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lotmcntrqty['max'])) {
                $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCNTRQTY, $lotmcntrqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMCNTRQTY, $lotmcntrqty, $comparison);
    }

    /**
     * Filter the query on the LotmSrcCd column
     *
     * Example usage:
     * <code>
     * $query->filterByLotmsrccd('fooValue');   // WHERE LotmSrcCd = 'fooValue'
     * $query->filterByLotmsrccd('%fooValue%', Criteria::LIKE); // WHERE LotmSrcCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotmsrccd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByLotmsrccd($lotmsrccd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotmsrccd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_LOTMSRCCD, $lotmsrccd, $comparison);
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
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvLotMasterTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
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
     * Filter the query by a related \InvWhseLot object
     *
     * @param \InvWhseLot|ObjectCollection $invWhseLot the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterByInvWhseLot($invWhseLot, $comparison = null)
    {
        if ($invWhseLot instanceof \InvWhseLot) {
            return $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $invWhseLot->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $invWhseLot->getInltlotser(), $comparison);
        } else {
            throw new PropelException('filterByInvWhseLot() only accepts arguments of type \InvWhseLot');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvWhseLot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function joinInvWhseLot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvWhseLot');

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
            $this->addJoinObject($join, 'InvWhseLot');
        }

        return $this;
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvWhseLotQuery A secondary query class using the current class as primary query
     */
    public function useInvWhseLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvWhseLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvWhseLot', '\InvWhseLotQuery');
    }

    /**
     * Filter the query by a related \SoAllocatedLotserial object
     *
     * @param \SoAllocatedLotserial|ObjectCollection $soAllocatedLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterBySoAllocatedLotserial($soAllocatedLotserial, $comparison = null)
    {
        if ($soAllocatedLotserial instanceof \SoAllocatedLotserial) {
            return $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $soAllocatedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $soAllocatedLotserial->getOeidlotser(), $comparison);
        } else {
            throw new PropelException('filterBySoAllocatedLotserial() only accepts arguments of type \SoAllocatedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoAllocatedLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function joinSoAllocatedLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoAllocatedLotserial');

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
            $this->addJoinObject($join, 'SoAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoAllocatedLotserial', '\SoAllocatedLotserialQuery');
    }

    /**
     * Filter the query by a related \SoPickedLotserial object
     *
     * @param \SoPickedLotserial|ObjectCollection $soPickedLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function filterBySoPickedLotserial($soPickedLotserial, $comparison = null)
    {
        if ($soPickedLotserial instanceof \SoPickedLotserial) {
            return $this
                ->addUsingAlias(InvLotMasterTableMap::COL_INITITEMNBR, $soPickedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotMasterTableMap::COL_LOTMLOTNBR, $soPickedLotserial->getOepdlotser(), $comparison);
        } else {
            throw new PropelException('filterBySoPickedLotserial() only accepts arguments of type \SoPickedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoPickedLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function joinSoPickedLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoPickedLotserial');

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
            $this->addJoinObject($join, 'SoPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoPickedLotserial', '\SoPickedLotserialQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildInvLotMaster $invLotMaster Object to remove from the list of results
     *
     * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
     */
    public function prune($invLotMaster = null)
    {
        if ($invLotMaster) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvLotMasterTableMap::COL_INITITEMNBR), $invLotMaster->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvLotMasterTableMap::COL_LOTMLOTNBR), $invLotMaster->getLotmlotnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_lot_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvLotMasterTableMap::clearInstancePool();
            InvLotMasterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotMasterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvLotMasterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvLotMasterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvLotMasterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvLotMasterQuery
