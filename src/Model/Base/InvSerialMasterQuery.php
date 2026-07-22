<?php

namespace Base;

use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \Exception;
use \PDO;
use Map\InvSerialMasterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_ser_mast` table.
 *
 * @method     ChildInvSerialMasterQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvSerialMasterQuery orderBySermsernbr($order = Criteria::ASC) Order by the SermSerNbr column
 * @method     ChildInvSerialMasterQuery orderBySermproddate($order = Criteria::ASC) Order by the SermProdDate column
 * @method     ChildInvSerialMasterQuery orderBySermprntcnt($order = Criteria::ASC) Order by the SermPrntCnt column
 * @method     ChildInvSerialMasterQuery orderBySermsordnbr($order = Criteria::ASC) Order by the SermSordNbr column
 * @method     ChildInvSerialMasterQuery orderBySerminvcdate($order = Criteria::ASC) Order by the SermInvcDate column
 * @method     ChildInvSerialMasterQuery orderBySermrevision($order = Criteria::ASC) Order by the SermRevision column
 * @method     ChildInvSerialMasterQuery orderBySermctry($order = Criteria::ASC) Order by the SermCtry column
 * @method     ChildInvSerialMasterQuery orderBySermacallocordr($order = Criteria::ASC) Order by the SermAcAllocOrdr column
 * @method     ChildInvSerialMasterQuery orderBySermrefsernbr($order = Criteria::ASC) Order by the SermRefSerNbr column
 * @method     ChildInvSerialMasterQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvSerialMasterQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvSerialMasterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvSerialMasterQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvSerialMasterQuery groupBySermsernbr() Group by the SermSerNbr column
 * @method     ChildInvSerialMasterQuery groupBySermproddate() Group by the SermProdDate column
 * @method     ChildInvSerialMasterQuery groupBySermprntcnt() Group by the SermPrntCnt column
 * @method     ChildInvSerialMasterQuery groupBySermsordnbr() Group by the SermSordNbr column
 * @method     ChildInvSerialMasterQuery groupBySerminvcdate() Group by the SermInvcDate column
 * @method     ChildInvSerialMasterQuery groupBySermrevision() Group by the SermRevision column
 * @method     ChildInvSerialMasterQuery groupBySermctry() Group by the SermCtry column
 * @method     ChildInvSerialMasterQuery groupBySermacallocordr() Group by the SermAcAllocOrdr column
 * @method     ChildInvSerialMasterQuery groupBySermrefsernbr() Group by the SermRefSerNbr column
 * @method     ChildInvSerialMasterQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvSerialMasterQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvSerialMasterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvSerialMasterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvSerialMasterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvSerialMasterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvSerialMasterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvSerialMasterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvSerialMasterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvSerialMasterQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialMasterQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvSerialMasterQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinInvLotTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotTag relation
 * @method     ChildInvSerialMasterQuery rightJoinInvLotTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotTag relation
 * @method     ChildInvSerialMasterQuery innerJoinInvLotTag($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotTag relation
 *
 * @method     ChildInvSerialMasterQuery joinWithInvLotTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotTag relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithInvLotTag() Adds a LEFT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildInvSerialMasterQuery rightJoinWithInvLotTag() Adds a RIGHT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildInvSerialMasterQuery innerJoinWithInvLotTag() Adds a INNER JOIN clause and with to the query using the InvLotTag relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinInvTransferLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvSerialMasterQuery rightJoinInvTransferLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildInvSerialMasterQuery innerJoinInvTransferLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvSerialMasterQuery joinWithInvTransferLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithInvTransferLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvSerialMasterQuery rightJoinWithInvTransferLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildInvSerialMasterQuery innerJoinWithInvTransferLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvSerialMasterQuery rightJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvSerialMasterQuery innerJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvSerialMasterQuery joinWithInvTransferPreAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithInvTransferPreAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvSerialMasterQuery rightJoinWithInvTransferPreAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildInvSerialMasterQuery innerJoinWithInvTransferPreAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinInvTransferPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvSerialMasterQuery rightJoinInvTransferPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvSerialMasterQuery innerJoinInvTransferPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvSerialMasterQuery joinWithInvTransferPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithInvTransferPickedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvSerialMasterQuery rightJoinWithInvTransferPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildInvSerialMasterQuery innerJoinWithInvTransferPickedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinInvSerialWarranty($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialWarranty relation
 * @method     ChildInvSerialMasterQuery rightJoinInvSerialWarranty($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialWarranty relation
 * @method     ChildInvSerialMasterQuery innerJoinInvSerialWarranty($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialWarranty relation
 *
 * @method     ChildInvSerialMasterQuery joinWithInvSerialWarranty($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialWarranty relation
 *
 * @method     ChildInvSerialMasterQuery leftJoinWithInvSerialWarranty() Adds a LEFT JOIN clause and with to the query using the InvSerialWarranty relation
 * @method     ChildInvSerialMasterQuery rightJoinWithInvSerialWarranty() Adds a RIGHT JOIN clause and with to the query using the InvSerialWarranty relation
 * @method     ChildInvSerialMasterQuery innerJoinWithInvSerialWarranty() Adds a INNER JOIN clause and with to the query using the InvSerialWarranty relation
 *
 * @method     \ItemMasterItemQuery|\InvLotTagQuery|\InvTransferLotserialQuery|\InvTransferPreAllocatedLotserialQuery|\InvTransferPickedLotserialQuery|\InvSerialWarrantyQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvSerialMaster|null findOne(?ConnectionInterface $con = null) Return the first ChildInvSerialMaster matching the query
 * @method     ChildInvSerialMaster findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvSerialMaster matching the query, or a new ChildInvSerialMaster object populated from the query conditions when no match is found
 *
 * @method     ChildInvSerialMaster|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvSerialMaster filtered by the InitItemNbr column
 * @method     ChildInvSerialMaster|null findOneBySermsernbr(string $SermSerNbr) Return the first ChildInvSerialMaster filtered by the SermSerNbr column
 * @method     ChildInvSerialMaster|null findOneBySermproddate(string $SermProdDate) Return the first ChildInvSerialMaster filtered by the SermProdDate column
 * @method     ChildInvSerialMaster|null findOneBySermprntcnt(int $SermPrntCnt) Return the first ChildInvSerialMaster filtered by the SermPrntCnt column
 * @method     ChildInvSerialMaster|null findOneBySermsordnbr(string $SermSordNbr) Return the first ChildInvSerialMaster filtered by the SermSordNbr column
 * @method     ChildInvSerialMaster|null findOneBySerminvcdate(string $SermInvcDate) Return the first ChildInvSerialMaster filtered by the SermInvcDate column
 * @method     ChildInvSerialMaster|null findOneBySermrevision(string $SermRevision) Return the first ChildInvSerialMaster filtered by the SermRevision column
 * @method     ChildInvSerialMaster|null findOneBySermctry(string $SermCtry) Return the first ChildInvSerialMaster filtered by the SermCtry column
 * @method     ChildInvSerialMaster|null findOneBySermacallocordr(string $SermAcAllocOrdr) Return the first ChildInvSerialMaster filtered by the SermAcAllocOrdr column
 * @method     ChildInvSerialMaster|null findOneBySermrefsernbr(string $SermRefSerNbr) Return the first ChildInvSerialMaster filtered by the SermRefSerNbr column
 * @method     ChildInvSerialMaster|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSerialMaster filtered by the DateUpdtd column
 * @method     ChildInvSerialMaster|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSerialMaster filtered by the TimeUpdtd column
 * @method     ChildInvSerialMaster|null findOneByDummy(string $dummy) Return the first ChildInvSerialMaster filtered by the dummy column
 *
 * @method     ChildInvSerialMaster requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvSerialMaster by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOne(?ConnectionInterface $con = null) Return the first ChildInvSerialMaster matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSerialMaster requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvSerialMaster filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermsernbr(string $SermSerNbr) Return the first ChildInvSerialMaster filtered by the SermSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermproddate(string $SermProdDate) Return the first ChildInvSerialMaster filtered by the SermProdDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermprntcnt(int $SermPrntCnt) Return the first ChildInvSerialMaster filtered by the SermPrntCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermsordnbr(string $SermSordNbr) Return the first ChildInvSerialMaster filtered by the SermSordNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySerminvcdate(string $SermInvcDate) Return the first ChildInvSerialMaster filtered by the SermInvcDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermrevision(string $SermRevision) Return the first ChildInvSerialMaster filtered by the SermRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermctry(string $SermCtry) Return the first ChildInvSerialMaster filtered by the SermCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermacallocordr(string $SermAcAllocOrdr) Return the first ChildInvSerialMaster filtered by the SermAcAllocOrdr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneBySermrefsernbr(string $SermRefSerNbr) Return the first ChildInvSerialMaster filtered by the SermRefSerNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvSerialMaster filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvSerialMaster filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvSerialMaster requireOneByDummy(string $dummy) Return the first ChildInvSerialMaster filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvSerialMaster[]|Collection find(?ConnectionInterface $con = null) Return ChildInvSerialMaster objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> find(?ConnectionInterface $con = null) Return ChildInvSerialMaster objects based on current ModelCriteria
 *
 * @method     ChildInvSerialMaster[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvSerialMaster objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvSerialMaster objects filtered by the InitItemNbr column
 * @method     ChildInvSerialMaster[]|Collection findBySermsernbr(string|array<string> $SermSerNbr) Return ChildInvSerialMaster objects filtered by the SermSerNbr column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermsernbr(string|array<string> $SermSerNbr) Return ChildInvSerialMaster objects filtered by the SermSerNbr column
 * @method     ChildInvSerialMaster[]|Collection findBySermproddate(string|array<string> $SermProdDate) Return ChildInvSerialMaster objects filtered by the SermProdDate column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermproddate(string|array<string> $SermProdDate) Return ChildInvSerialMaster objects filtered by the SermProdDate column
 * @method     ChildInvSerialMaster[]|Collection findBySermprntcnt(int|array<int> $SermPrntCnt) Return ChildInvSerialMaster objects filtered by the SermPrntCnt column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermprntcnt(int|array<int> $SermPrntCnt) Return ChildInvSerialMaster objects filtered by the SermPrntCnt column
 * @method     ChildInvSerialMaster[]|Collection findBySermsordnbr(string|array<string> $SermSordNbr) Return ChildInvSerialMaster objects filtered by the SermSordNbr column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermsordnbr(string|array<string> $SermSordNbr) Return ChildInvSerialMaster objects filtered by the SermSordNbr column
 * @method     ChildInvSerialMaster[]|Collection findBySerminvcdate(string|array<string> $SermInvcDate) Return ChildInvSerialMaster objects filtered by the SermInvcDate column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySerminvcdate(string|array<string> $SermInvcDate) Return ChildInvSerialMaster objects filtered by the SermInvcDate column
 * @method     ChildInvSerialMaster[]|Collection findBySermrevision(string|array<string> $SermRevision) Return ChildInvSerialMaster objects filtered by the SermRevision column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermrevision(string|array<string> $SermRevision) Return ChildInvSerialMaster objects filtered by the SermRevision column
 * @method     ChildInvSerialMaster[]|Collection findBySermctry(string|array<string> $SermCtry) Return ChildInvSerialMaster objects filtered by the SermCtry column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermctry(string|array<string> $SermCtry) Return ChildInvSerialMaster objects filtered by the SermCtry column
 * @method     ChildInvSerialMaster[]|Collection findBySermacallocordr(string|array<string> $SermAcAllocOrdr) Return ChildInvSerialMaster objects filtered by the SermAcAllocOrdr column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermacallocordr(string|array<string> $SermAcAllocOrdr) Return ChildInvSerialMaster objects filtered by the SermAcAllocOrdr column
 * @method     ChildInvSerialMaster[]|Collection findBySermrefsernbr(string|array<string> $SermRefSerNbr) Return ChildInvSerialMaster objects filtered by the SermRefSerNbr column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findBySermrefsernbr(string|array<string> $SermRefSerNbr) Return ChildInvSerialMaster objects filtered by the SermRefSerNbr column
 * @method     ChildInvSerialMaster[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvSerialMaster objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvSerialMaster objects filtered by the DateUpdtd column
 * @method     ChildInvSerialMaster[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvSerialMaster objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvSerialMaster objects filtered by the TimeUpdtd column
 * @method     ChildInvSerialMaster[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvSerialMaster objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvSerialMaster> findByDummy(string|array<string> $dummy) Return ChildInvSerialMaster objects filtered by the dummy column
 *
 * @method     ChildInvSerialMaster[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvSerialMaster> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvSerialMasterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvSerialMasterQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvSerialMaster', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvSerialMasterQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvSerialMasterQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvSerialMasterQuery) {
            return $criteria;
        }
        $query = new ChildInvSerialMasterQuery();
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
     * @param array[$InitItemNbr, $SermSerNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvSerialMaster|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvSerialMasterTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildInvSerialMaster A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, SermSerNbr, SermProdDate, SermPrntCnt, SermSordNbr, SermInvcDate, SermRevision, SermCtry, SermAcAllocOrdr, SermRefSerNbr, DateUpdtd, TimeUpdtd, dummy FROM inv_ser_mast WHERE InitItemNbr = :p0 AND SermSerNbr = :p1';
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
            /** @var ChildInvSerialMaster $obj */
            $obj = new ChildInvSerialMaster();
            $obj->hydrate($row);
            InvSerialMasterTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildInvSerialMaster|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(InvSerialMasterTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvSerialMasterTableMap::COL_SERMSERNBR, $key[1], Criteria::EQUAL);
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

        $this->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsernbr('fooValue');   // WHERE SermSerNbr = 'fooValue'
     * $query->filterBySermsernbr('%fooValue%', Criteria::LIKE); // WHERE SermSerNbr LIKE '%fooValue%'
     * $query->filterBySermsernbr(['foo', 'bar']); // WHERE SermSerNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermsernbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermsernbr($sermsernbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $sermsernbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermProdDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySermproddate('fooValue');   // WHERE SermProdDate = 'fooValue'
     * $query->filterBySermproddate('%fooValue%', Criteria::LIKE); // WHERE SermProdDate LIKE '%fooValue%'
     * $query->filterBySermproddate(['foo', 'bar']); // WHERE SermProdDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermproddate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermproddate($sermproddate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermproddate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRODDATE, $sermproddate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermPrntCnt column
     *
     * Example usage:
     * <code>
     * $query->filterBySermprntcnt(1234); // WHERE SermPrntCnt = 1234
     * $query->filterBySermprntcnt(array(12, 34)); // WHERE SermPrntCnt IN (12, 34)
     * $query->filterBySermprntcnt(array('min' => 12)); // WHERE SermPrntCnt > 12
     * </code>
     *
     * @param mixed $sermprntcnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermprntcnt($sermprntcnt = null, ?string $comparison = null)
    {
        if (is_array($sermprntcnt)) {
            $useMinMax = false;
            if (isset($sermprntcnt['min'])) {
                $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRNTCNT, $sermprntcnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sermprntcnt['max'])) {
                $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRNTCNT, $sermprntcnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMPRNTCNT, $sermprntcnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermSordNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermsordnbr('fooValue');   // WHERE SermSordNbr = 'fooValue'
     * $query->filterBySermsordnbr('%fooValue%', Criteria::LIKE); // WHERE SermSordNbr LIKE '%fooValue%'
     * $query->filterBySermsordnbr(['foo', 'bar']); // WHERE SermSordNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermsordnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermsordnbr($sermsordnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermsordnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMSORDNBR, $sermsordnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermInvcDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySerminvcdate('fooValue');   // WHERE SermInvcDate = 'fooValue'
     * $query->filterBySerminvcdate('%fooValue%', Criteria::LIKE); // WHERE SermInvcDate LIKE '%fooValue%'
     * $query->filterBySerminvcdate(['foo', 'bar']); // WHERE SermInvcDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $serminvcdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySerminvcdate($serminvcdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serminvcdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMINVCDATE, $serminvcdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermRevision column
     *
     * Example usage:
     * <code>
     * $query->filterBySermrevision('fooValue');   // WHERE SermRevision = 'fooValue'
     * $query->filterBySermrevision('%fooValue%', Criteria::LIKE); // WHERE SermRevision LIKE '%fooValue%'
     * $query->filterBySermrevision(['foo', 'bar']); // WHERE SermRevision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermrevision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermrevision($sermrevision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermrevision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMREVISION, $sermrevision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermCtry column
     *
     * Example usage:
     * <code>
     * $query->filterBySermctry('fooValue');   // WHERE SermCtry = 'fooValue'
     * $query->filterBySermctry('%fooValue%', Criteria::LIKE); // WHERE SermCtry LIKE '%fooValue%'
     * $query->filterBySermctry(['foo', 'bar']); // WHERE SermCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermctry($sermctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMCTRY, $sermctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermAcAllocOrdr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermacallocordr('fooValue');   // WHERE SermAcAllocOrdr = 'fooValue'
     * $query->filterBySermacallocordr('%fooValue%', Criteria::LIKE); // WHERE SermAcAllocOrdr LIKE '%fooValue%'
     * $query->filterBySermacallocordr(['foo', 'bar']); // WHERE SermAcAllocOrdr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermacallocordr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermacallocordr($sermacallocordr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermacallocordr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMACALLOCORDR, $sermacallocordr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the SermRefSerNbr column
     *
     * Example usage:
     * <code>
     * $query->filterBySermrefsernbr('fooValue');   // WHERE SermRefSerNbr = 'fooValue'
     * $query->filterBySermrefsernbr('%fooValue%', Criteria::LIKE); // WHERE SermRefSerNbr LIKE '%fooValue%'
     * $query->filterBySermrefsernbr(['foo', 'bar']); // WHERE SermRefSerNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $sermrefsernbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySermrefsernbr($sermrefsernbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sermrefsernbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvSerialMasterTableMap::COL_SERMREFSERNBR, $sermrefsernbr, $comparison);

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

        $this->addUsingAlias(InvSerialMasterTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvSerialMasterTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvSerialMasterTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvLotTag object
     *
     * @param \InvLotTag|ObjectCollection $invLotTag the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotTag($invLotTag, ?string $comparison = null)
    {
        if ($invLotTag instanceof \InvLotTag) {
            $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $invLotTag->getInititemnbr(), $comparison)
                ->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $invLotTag->getIntglotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvLotTag() only accepts arguments of type \InvLotTag');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotTag relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotTag(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotTag');

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
            $this->addJoinObject($join, 'InvLotTag');
        }

        return $this;
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotTagQuery A secondary query class using the current class as primary query
     */
    public function useInvLotTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotTag', '\InvLotTagQuery');
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @param callable(\InvLotTagQuery):\InvLotTagQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotTagQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotTagQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotTag table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotTagQuery The inner query object of the EXISTS statement
     */
    public function useInvLotTagExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT EXISTS query.
     *
     * @see useInvLotTagExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotTagNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotTagQuery The inner query object of the IN statement
     */
    public function useInInvLotTagQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT IN query.
     *
     * @see useInvLotTagInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotTagQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferLotserial object
     *
     * @param \InvTransferLotserial|ObjectCollection $invTransferLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferLotserial($invTransferLotserial, ?string $comparison = null)
    {
        if ($invTransferLotserial instanceof \InvTransferLotserial) {
            $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $invTransferLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $invTransferLotserial->getInsdlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferLotserial() only accepts arguments of type \InvTransferLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferLotserial');

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
            $this->addJoinObject($join, 'InvTransferLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferLotserial', '\InvTransferLotserialQuery');
    }

    /**
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @param callable(\InvTransferLotserialQuery):\InvTransferLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT IN query.
     *
     * @see useInvTransferLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPreAllocatedLotserial object
     *
     * @param \InvTransferPreAllocatedLotserial|ObjectCollection $invTransferPreAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial, ?string $comparison = null)
    {
        if ($invTransferPreAllocatedLotserial instanceof \InvTransferPreAllocatedLotserial) {
            $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $invTransferPreAllocatedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $invTransferPreAllocatedLotserial->getInidlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPreAllocatedLotserial() only accepts arguments of type \InvTransferPreAllocatedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPreAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPreAllocatedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPreAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPreAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPreAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPreAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPreAllocatedLotserial', '\InvTransferPreAllocatedLotserialQuery');
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @param callable(\InvTransferPreAllocatedLotserialQuery):\InvTransferPreAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPreAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPreAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPreAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPreAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPickedLotserial object
     *
     * @param \InvTransferPickedLotserial|ObjectCollection $invTransferPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPickedLotserial($invTransferPickedLotserial, ?string $comparison = null)
    {
        if ($invTransferPickedLotserial instanceof \InvTransferPickedLotserial) {
            $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $invTransferPickedLotserial->getInititemnbr(), $comparison)
                ->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $invTransferPickedLotserial->getInpdlotser(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPickedLotserial() only accepts arguments of type \InvTransferPickedLotserial');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPickedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPickedLotserial', '\InvTransferPickedLotserialQuery');
    }

    /**
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @param callable(\InvTransferPickedLotserialQuery):\InvTransferPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvSerialWarranty object
     *
     * @param \InvSerialWarranty|ObjectCollection $invSerialWarranty the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvSerialWarranty($invSerialWarranty, ?string $comparison = null)
    {
        if ($invSerialWarranty instanceof \InvSerialWarranty) {
            $this
                ->addUsingAlias(InvSerialMasterTableMap::COL_INITITEMNBR, $invSerialWarranty->getInititemnbr(), $comparison)
                ->addUsingAlias(InvSerialMasterTableMap::COL_SERMSERNBR, $invSerialWarranty->getSermsernbr(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvSerialWarranty() only accepts arguments of type \InvSerialWarranty');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvSerialWarranty relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvSerialWarranty(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvSerialWarranty');

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
            $this->addJoinObject($join, 'InvSerialWarranty');
        }

        return $this;
    }

    /**
     * Use the InvSerialWarranty relation InvSerialWarranty object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvSerialWarrantyQuery A secondary query class using the current class as primary query
     */
    public function useInvSerialWarrantyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvSerialWarranty($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvSerialWarranty', '\InvSerialWarrantyQuery');
    }

    /**
     * Use the InvSerialWarranty relation InvSerialWarranty object
     *
     * @param callable(\InvSerialWarrantyQuery):\InvSerialWarrantyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvSerialWarrantyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvSerialWarrantyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvSerialWarranty table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvSerialWarrantyQuery The inner query object of the EXISTS statement
     */
    public function useInvSerialWarrantyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useExistsQuery('InvSerialWarranty', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvSerialWarranty table for a NOT EXISTS query.
     *
     * @see useInvSerialWarrantyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvSerialWarrantyQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvSerialWarrantyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useExistsQuery('InvSerialWarranty', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvSerialWarranty table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvSerialWarrantyQuery The inner query object of the IN statement
     */
    public function useInInvSerialWarrantyQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useInQuery('InvSerialWarranty', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvSerialWarranty table for a NOT IN query.
     *
     * @see useInvSerialWarrantyInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvSerialWarrantyQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvSerialWarrantyQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useInQuery('InvSerialWarranty', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvSerialMaster $invSerialMaster Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invSerialMaster = null)
    {
        if ($invSerialMaster) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvSerialMasterTableMap::COL_INITITEMNBR), $invSerialMaster->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvSerialMasterTableMap::COL_SERMSERNBR), $invSerialMaster->getSermsernbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_ser_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvSerialMasterTableMap::clearInstancePool();
            InvSerialMasterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvSerialMasterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvSerialMasterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvSerialMasterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvSerialMasterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
