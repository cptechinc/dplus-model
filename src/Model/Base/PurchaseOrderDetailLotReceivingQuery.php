<?php

namespace Base;

use \PurchaseOrderDetailLotReceiving as ChildPurchaseOrderDetailLotReceiving;
use \PurchaseOrderDetailLotReceivingQuery as ChildPurchaseOrderDetailLotReceivingQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderDetailLotReceivingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'po_tran_lot_det' table.
 *
 *
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPothnbr($order = Criteria::ASC) Order by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotdline($order = Criteria::ASC) Order by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotdseq($order = Criteria::ASC) Order by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotslotser($order = Criteria::ASC) Order by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsbin($order = Criteria::ASC) Order by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsqtyrec($order = Criteria::ASC) Order by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsqtyallo($order = Criteria::ASC) Order by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotscases($order = Criteria::ASC) Order by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotstag($order = Criteria::ASC) Order by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsinspctlvl($order = Criteria::ASC) Order by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotslotref($order = Criteria::ASC) Order by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsputtake($order = Criteria::ASC) Order by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotslandunitcost($order = Criteria::ASC) Order by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsfabcostvari($order = Criteria::ASC) Order by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotserbatch($order = Criteria::ASC) Order by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotserbatchtime($order = Criteria::ASC) Order by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsexpiredatecd($order = Criteria::ASC) Order by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotsexpiredate($order = Criteria::ASC) Order by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByPotstariffcost($order = Criteria::ASC) Order by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPothnbr() Group by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotdline() Group by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotdseq() Group by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotslotser() Group by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsbin() Group by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsqtyrec() Group by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsqtyallo() Group by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotscases() Group by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotstag() Group by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsinspctlvl() Group by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotslotref() Group by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsputtake() Group by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotslandunitcost() Group by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsfabcostvari() Group by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotserbatch() Group by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotserbatchtime() Group by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsexpiredatecd() Group by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotsexpiredate() Group by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByPotstariffcost() Group by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceivingQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPurchaseOrderDetailLotReceivingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPurchaseOrderDetailLotReceivingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPurchaseOrderDetailLotReceiving findOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailLotReceiving matching the query
 * @method     ChildPurchaseOrderDetailLotReceiving findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailLotReceiving matching the query, or a new ChildPurchaseOrderDetailLotReceiving object populated from the query conditions when no match is found
 *
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPothnbr(string $PothNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotdline(int $PotdLine) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotdseq(int $PotdSeq) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotslotser(string $PotsLotSer) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsbin(string $PotsBin) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsqtyrec(string $PotsQtyRec) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsqtyallo(string $PotsQtyAllo) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotscases(int $PotsCases) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotstag(int $PotsTag) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsinspctlvl(string $PotsInspctLvl) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotslotref(string $PotsLotRef) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsputtake(string $PotsPutTake) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotslandunitcost(string $PotsLandUnitCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsfabcostvari(string $PotsFabCostVari) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotserbatch(string $PotsErBatch) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotserbatchtime(string $PotsErBatchTime) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsexpiredatecd(string $PotsExpireDateCd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotsexpiredate(string $PotsExpireDate) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByPotstariffcost(string $PotsTariffCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving findOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the dummy column *

 * @method     ChildPurchaseOrderDetailLotReceiving requirePk($key, ConnectionInterface $con = null) Return the ChildPurchaseOrderDetailLotReceiving by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOne(ConnectionInterface $con = null) Return the first ChildPurchaseOrderDetailLotReceiving matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPothnbr(string $PothNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PothNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotdline(int $PotdLine) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotdseq(int $PotdSeq) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotdSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByInititemnbr(string $InitItemNbr) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotslotser(string $PotsLotSer) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsbin(string $PotsBin) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsqtyrec(string $PotsQtyRec) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyRec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsqtyallo(string $PotsQtyAllo) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsQtyAllo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotscases(int $PotsCases) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsCases column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotstag(int $PotsTag) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsinspctlvl(string $PotsInspctLvl) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsInspctLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotslotref(string $PotsLotRef) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLotRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsputtake(string $PotsPutTake) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsPutTake column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotslandunitcost(string $PotsLandUnitCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsLandUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsfabcostvari(string $PotsFabCostVari) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsFabCostVari column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotserbatch(string $PotsErBatch) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotserbatchtime(string $PotsErBatchTime) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsErBatchTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsexpiredatecd(string $PotsExpireDateCd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDateCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotsexpiredate(string $PotsExpireDate) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsExpireDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByPotstariffcost(string $PotsTariffCost) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the PotsTariffCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPurchaseOrderDetailLotReceiving requireOneByDummy(string $dummy) Return the first ChildPurchaseOrderDetailLotReceiving filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPurchaseOrderDetailLotReceiving objects based on current ModelCriteria
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPothnbr(string $PothNbr) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PothNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotdline(int $PotdLine) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotdLine column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotdseq(int $PotdSeq) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotdSeq column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the InitItemNbr column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotslotser(string $PotsLotSer) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLotSer column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsbin(string $PotsBin) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsBin column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsqtyrec(string $PotsQtyRec) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsQtyRec column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsqtyallo(string $PotsQtyAllo) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsQtyAllo column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotscases(int $PotsCases) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsCases column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotstag(int $PotsTag) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsTag column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsinspctlvl(string $PotsInspctLvl) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsInspctLvl column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotslotref(string $PotsLotRef) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLotRef column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsputtake(string $PotsPutTake) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsPutTake column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotslandunitcost(string $PotsLandUnitCost) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsLandUnitCost column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsfabcostvari(string $PotsFabCostVari) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsFabCostVari column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotserbatch(string $PotsErBatch) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsErBatch column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotserbatchtime(string $PotsErBatchTime) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsErBatchTime column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsexpiredatecd(string $PotsExpireDateCd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsExpireDateCd column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotsexpiredate(string $PotsExpireDate) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsExpireDate column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByPotstariffcost(string $PotsTariffCost) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the PotsTariffCost column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the DateUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the TimeUpdtd column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|ObjectCollection findByDummy(string $dummy) Return ChildPurchaseOrderDetailLotReceiving objects filtered by the dummy column
 * @method     ChildPurchaseOrderDetailLotReceiving[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PurchaseOrderDetailLotReceivingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PurchaseOrderDetailLotReceivingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\PurchaseOrderDetailLotReceiving', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPurchaseOrderDetailLotReceivingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPurchaseOrderDetailLotReceivingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPurchaseOrderDetailLotReceivingQuery) {
            return $criteria;
        }
        $query = new ChildPurchaseOrderDetailLotReceivingQuery();
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
     * @param array[$PothNbr, $PotdLine, $PotdSeq, $InitItemNbr, $PotsLotSer, $PotsBin] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPurchaseOrderDetailLotReceiving|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PurchaseOrderDetailLotReceivingTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildPurchaseOrderDetailLotReceiving A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PothNbr, PotdLine, PotdSeq, InitItemNbr, PotsLotSer, PotsBin, PotsQtyRec, PotsQtyAllo, PotsCases, PotsTag, PotsInspctLvl, PotsLotRef, PotsPutTake, PotsLandUnitCost, PotsFabCostVari, PotsErBatch, PotsErBatchTime, PotsExpireDateCd, PotsExpireDate, PotsTariffCost, DateUpdtd, TimeUpdtd, dummy FROM po_tran_lot_det WHERE PothNbr = :p0 AND PotdLine = :p1 AND PotdSeq = :p2 AND InitItemNbr = :p3 AND PotsLotSer = :p4 AND PotsBin = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildPurchaseOrderDetailLotReceiving $obj */
            $obj = new ChildPurchaseOrderDetailLotReceiving();
            $obj->hydrate($row);
            PurchaseOrderDetailLotReceivingTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildPurchaseOrderDetailLotReceiving|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PothNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByPothnbr('fooValue');   // WHERE PothNbr = 'fooValue'
     * $query->filterByPothnbr('%fooValue%', Criteria::LIKE); // WHERE PothNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pothnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPothnbr($pothnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pothnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR, $pothnbr, $comparison);
    }

    /**
     * Filter the query on the PotdLine column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdline(1234); // WHERE PotdLine = 1234
     * $query->filterByPotdline(array(12, 34)); // WHERE PotdLine IN (12, 34)
     * $query->filterByPotdline(array('min' => 12)); // WHERE PotdLine > 12
     * </code>
     *
     * @param     mixed $potdline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdline($potdline = null, $comparison = null)
    {
        if (is_array($potdline)) {
            $useMinMax = false;
            if (isset($potdline['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $potdline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdline['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $potdline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE, $potdline, $comparison);
    }

    /**
     * Filter the query on the PotdSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByPotdseq(1234); // WHERE PotdSeq = 1234
     * $query->filterByPotdseq(array(12, 34)); // WHERE PotdSeq IN (12, 34)
     * $query->filterByPotdseq(array('min' => 12)); // WHERE PotdSeq > 12
     * </code>
     *
     * @param     mixed $potdseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotdseq($potdseq = null, $comparison = null)
    {
        if (is_array($potdseq)) {
            $useMinMax = false;
            if (isset($potdseq['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $potdseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potdseq['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $potdseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ, $potdseq, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the PotsLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByPotslotser('fooValue');   // WHERE PotsLotSer = 'fooValue'
     * $query->filterByPotslotser('%fooValue%', Criteria::LIKE); // WHERE PotsLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potslotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotslotser($potslotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potslotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER, $potslotser, $comparison);
    }

    /**
     * Filter the query on the PotsBin column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsbin('fooValue');   // WHERE PotsBin = 'fooValue'
     * $query->filterByPotsbin('%fooValue%', Criteria::LIKE); // WHERE PotsBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potsbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsbin($potsbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN, $potsbin, $comparison);
    }

    /**
     * Filter the query on the PotsQtyRec column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsqtyrec(1234); // WHERE PotsQtyRec = 1234
     * $query->filterByPotsqtyrec(array(12, 34)); // WHERE PotsQtyRec IN (12, 34)
     * $query->filterByPotsqtyrec(array('min' => 12)); // WHERE PotsQtyRec > 12
     * </code>
     *
     * @param     mixed $potsqtyrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsqtyrec($potsqtyrec = null, $comparison = null)
    {
        if (is_array($potsqtyrec)) {
            $useMinMax = false;
            if (isset($potsqtyrec['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $potsqtyrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potsqtyrec['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $potsqtyrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYREC, $potsqtyrec, $comparison);
    }

    /**
     * Filter the query on the PotsQtyAllo column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsqtyallo(1234); // WHERE PotsQtyAllo = 1234
     * $query->filterByPotsqtyallo(array(12, 34)); // WHERE PotsQtyAllo IN (12, 34)
     * $query->filterByPotsqtyallo(array('min' => 12)); // WHERE PotsQtyAllo > 12
     * </code>
     *
     * @param     mixed $potsqtyallo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsqtyallo($potsqtyallo = null, $comparison = null)
    {
        if (is_array($potsqtyallo)) {
            $useMinMax = false;
            if (isset($potsqtyallo['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $potsqtyallo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potsqtyallo['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $potsqtyallo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSQTYALLO, $potsqtyallo, $comparison);
    }

    /**
     * Filter the query on the PotsCases column
     *
     * Example usage:
     * <code>
     * $query->filterByPotscases(1234); // WHERE PotsCases = 1234
     * $query->filterByPotscases(array(12, 34)); // WHERE PotsCases IN (12, 34)
     * $query->filterByPotscases(array('min' => 12)); // WHERE PotsCases > 12
     * </code>
     *
     * @param     mixed $potscases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotscases($potscases = null, $comparison = null)
    {
        if (is_array($potscases)) {
            $useMinMax = false;
            if (isset($potscases['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $potscases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potscases['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $potscases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSCASES, $potscases, $comparison);
    }

    /**
     * Filter the query on the PotsTag column
     *
     * Example usage:
     * <code>
     * $query->filterByPotstag(1234); // WHERE PotsTag = 1234
     * $query->filterByPotstag(array(12, 34)); // WHERE PotsTag IN (12, 34)
     * $query->filterByPotstag(array('min' => 12)); // WHERE PotsTag > 12
     * </code>
     *
     * @param     mixed $potstag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotstag($potstag = null, $comparison = null)
    {
        if (is_array($potstag)) {
            $useMinMax = false;
            if (isset($potstag['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $potstag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potstag['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $potstag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTAG, $potstag, $comparison);
    }

    /**
     * Filter the query on the PotsInspctLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsinspctlvl('fooValue');   // WHERE PotsInspctLvl = 'fooValue'
     * $query->filterByPotsinspctlvl('%fooValue%', Criteria::LIKE); // WHERE PotsInspctLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potsinspctlvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsinspctlvl($potsinspctlvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsinspctlvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSINSPCTLVL, $potsinspctlvl, $comparison);
    }

    /**
     * Filter the query on the PotsLotRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPotslotref('fooValue');   // WHERE PotsLotRef = 'fooValue'
     * $query->filterByPotslotref('%fooValue%', Criteria::LIKE); // WHERE PotsLotRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potslotref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotslotref($potslotref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potslotref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTREF, $potslotref, $comparison);
    }

    /**
     * Filter the query on the PotsPutTake column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsputtake('fooValue');   // WHERE PotsPutTake = 'fooValue'
     * $query->filterByPotsputtake('%fooValue%', Criteria::LIKE); // WHERE PotsPutTake LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potsputtake The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsputtake($potsputtake = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsputtake)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSPUTTAKE, $potsputtake, $comparison);
    }

    /**
     * Filter the query on the PotsLandUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotslandunitcost(1234); // WHERE PotsLandUnitCost = 1234
     * $query->filterByPotslandunitcost(array(12, 34)); // WHERE PotsLandUnitCost IN (12, 34)
     * $query->filterByPotslandunitcost(array('min' => 12)); // WHERE PotsLandUnitCost > 12
     * </code>
     *
     * @param     mixed $potslandunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotslandunitcost($potslandunitcost = null, $comparison = null)
    {
        if (is_array($potslandunitcost)) {
            $useMinMax = false;
            if (isset($potslandunitcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $potslandunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potslandunitcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $potslandunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLANDUNITCOST, $potslandunitcost, $comparison);
    }

    /**
     * Filter the query on the PotsFabCostVari column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsfabcostvari(1234); // WHERE PotsFabCostVari = 1234
     * $query->filterByPotsfabcostvari(array(12, 34)); // WHERE PotsFabCostVari IN (12, 34)
     * $query->filterByPotsfabcostvari(array('min' => 12)); // WHERE PotsFabCostVari > 12
     * </code>
     *
     * @param     mixed $potsfabcostvari The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsfabcostvari($potsfabcostvari = null, $comparison = null)
    {
        if (is_array($potsfabcostvari)) {
            $useMinMax = false;
            if (isset($potsfabcostvari['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $potsfabcostvari['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potsfabcostvari['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $potsfabcostvari['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSFABCOSTVARI, $potsfabcostvari, $comparison);
    }

    /**
     * Filter the query on the PotsErBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByPotserbatch('fooValue');   // WHERE PotsErBatch = 'fooValue'
     * $query->filterByPotserbatch('%fooValue%', Criteria::LIKE); // WHERE PotsErBatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potserbatch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotserbatch($potserbatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potserbatch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCH, $potserbatch, $comparison);
    }

    /**
     * Filter the query on the PotsErBatchTime column
     *
     * Example usage:
     * <code>
     * $query->filterByPotserbatchtime('fooValue');   // WHERE PotsErBatchTime = 'fooValue'
     * $query->filterByPotserbatchtime('%fooValue%', Criteria::LIKE); // WHERE PotsErBatchTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potserbatchtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotserbatchtime($potserbatchtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potserbatchtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSERBATCHTIME, $potserbatchtime, $comparison);
    }

    /**
     * Filter the query on the PotsExpireDateCd column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsexpiredatecd('fooValue');   // WHERE PotsExpireDateCd = 'fooValue'
     * $query->filterByPotsexpiredatecd('%fooValue%', Criteria::LIKE); // WHERE PotsExpireDateCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potsexpiredatecd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsexpiredatecd($potsexpiredatecd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsexpiredatecd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATECD, $potsexpiredatecd, $comparison);
    }

    /**
     * Filter the query on the PotsExpireDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPotsexpiredate('fooValue');   // WHERE PotsExpireDate = 'fooValue'
     * $query->filterByPotsexpiredate('%fooValue%', Criteria::LIKE); // WHERE PotsExpireDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $potsexpiredate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotsexpiredate($potsexpiredate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($potsexpiredate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSEXPIREDATE, $potsexpiredate, $comparison);
    }

    /**
     * Filter the query on the PotsTariffCost column
     *
     * Example usage:
     * <code>
     * $query->filterByPotstariffcost(1234); // WHERE PotsTariffCost = 1234
     * $query->filterByPotstariffcost(array(12, 34)); // WHERE PotsTariffCost IN (12, 34)
     * $query->filterByPotstariffcost(array('min' => 12)); // WHERE PotsTariffCost > 12
     * </code>
     *
     * @param     mixed $potstariffcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByPotstariffcost($potstariffcost = null, $comparison = null)
    {
        if (is_array($potstariffcost)) {
            $useMinMax = false;
            if (isset($potstariffcost['min'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $potstariffcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($potstariffcost['max'])) {
                $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $potstariffcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_POTSTARIFFCOST, $potstariffcost, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PurchaseOrderDetailLotReceivingTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving Object to remove from the list of results
     *
     * @return $this|ChildPurchaseOrderDetailLotReceivingQuery The current query, for fluid interface
     */
    public function prune($purchaseOrderDetailLotReceiving = null)
    {
        if ($purchaseOrderDetailLotReceiving) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTHNBR), $purchaseOrderDetailLotReceiving->getPothnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTDLINE), $purchaseOrderDetailLotReceiving->getPotdline(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTDSEQ), $purchaseOrderDetailLotReceiving->getPotdseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_INITITEMNBR), $purchaseOrderDetailLotReceiving->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTSLOTSER), $purchaseOrderDetailLotReceiving->getPotslotser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(PurchaseOrderDetailLotReceivingTableMap::COL_POTSBIN), $purchaseOrderDetailLotReceiving->getPotsbin(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the po_tran_lot_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PurchaseOrderDetailLotReceivingTableMap::clearInstancePool();
            PurchaseOrderDetailLotReceivingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PurchaseOrderDetailLotReceivingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PurchaseOrderDetailLotReceivingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PurchaseOrderDetailLotReceivingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PurchaseOrderDetailLotReceivingQuery
