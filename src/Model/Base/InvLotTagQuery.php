<?php

namespace Base;

use \InvLotTag as ChildInvLotTag;
use \InvLotTagQuery as ChildInvLotTagQuery;
use \Exception;
use \PDO;
use Map\InvLotTagTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_inv_tag` table.
 *
 * @method     ChildInvLotTagQuery orderByIntgworkid($order = Criteria::ASC) Order by the IntgWorkId column
 * @method     ChildInvLotTagQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildInvLotTagQuery orderByIntgtagnbr($order = Criteria::ASC) Order by the IntgTagNbr column
 * @method     ChildInvLotTagQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvLotTagQuery orderByIntglotser($order = Criteria::ASC) Order by the IntgLotSer column
 * @method     ChildInvLotTagQuery orderByIntgbin($order = Criteria::ASC) Order by the IntgBin column
 * @method     ChildInvLotTagQuery orderByIntgqty($order = Criteria::ASC) Order by the IntgQty column
 * @method     ChildInvLotTagQuery orderByIntgunitcost($order = Criteria::ASC) Order by the IntgUnitCost column
 * @method     ChildInvLotTagQuery orderByIntgissue($order = Criteria::ASC) Order by the IntgIssue column
 * @method     ChildInvLotTagQuery orderByIntguserid($order = Criteria::ASC) Order by the IntgUserId column
 * @method     ChildInvLotTagQuery orderByIntgentrdate($order = Criteria::ASC) Order by the IntgEntrDate column
 * @method     ChildInvLotTagQuery orderByIntgentrtime($order = Criteria::ASC) Order by the IntgEntrTime column
 * @method     ChildInvLotTagQuery orderByIntgposted($order = Criteria::ASC) Order by the IntgPosted column
 * @method     ChildInvLotTagQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvLotTagQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvLotTagQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvLotTagQuery groupByIntgworkid() Group by the IntgWorkId column
 * @method     ChildInvLotTagQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildInvLotTagQuery groupByIntgtagnbr() Group by the IntgTagNbr column
 * @method     ChildInvLotTagQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvLotTagQuery groupByIntglotser() Group by the IntgLotSer column
 * @method     ChildInvLotTagQuery groupByIntgbin() Group by the IntgBin column
 * @method     ChildInvLotTagQuery groupByIntgqty() Group by the IntgQty column
 * @method     ChildInvLotTagQuery groupByIntgunitcost() Group by the IntgUnitCost column
 * @method     ChildInvLotTagQuery groupByIntgissue() Group by the IntgIssue column
 * @method     ChildInvLotTagQuery groupByIntguserid() Group by the IntgUserId column
 * @method     ChildInvLotTagQuery groupByIntgentrdate() Group by the IntgEntrDate column
 * @method     ChildInvLotTagQuery groupByIntgentrtime() Group by the IntgEntrTime column
 * @method     ChildInvLotTagQuery groupByIntgposted() Group by the IntgPosted column
 * @method     ChildInvLotTagQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvLotTagQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvLotTagQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvLotTagQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvLotTagQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvLotTagQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvLotTagQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvLotTagQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvLotTagQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvLotTagQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvLotTagQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvLotTagQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotTagQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotTagQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvLotTagQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvLotTagQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvLotTagQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildInvLotTagQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildInvLotTagQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildInvLotTagQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildInvLotTagQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildInvLotTagQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildInvLotTagQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildInvLotTagQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvLotTagQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildInvLotTagQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildInvLotTagQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvLotTagQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvLotTagQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildInvLotTagQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildInvLotTagQuery leftJoinInvSerialMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvLotTagQuery rightJoinInvSerialMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildInvLotTagQuery innerJoinInvSerialMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialMaster relation
 *
 * @method     ChildInvLotTagQuery joinWithInvSerialMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvLotTagQuery leftJoinWithInvSerialMaster() Adds a LEFT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvLotTagQuery rightJoinWithInvSerialMaster() Adds a RIGHT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildInvLotTagQuery innerJoinWithInvSerialMaster() Adds a INNER JOIN clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildInvLotTagQuery leftJoinDplusUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DplusUser relation
 * @method     ChildInvLotTagQuery rightJoinDplusUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DplusUser relation
 * @method     ChildInvLotTagQuery innerJoinDplusUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DplusUser relation
 *
 * @method     ChildInvLotTagQuery joinWithDplusUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DplusUser relation
 *
 * @method     ChildInvLotTagQuery leftJoinWithDplusUser() Adds a LEFT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildInvLotTagQuery rightJoinWithDplusUser() Adds a RIGHT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildInvLotTagQuery innerJoinWithDplusUser() Adds a INNER JOIN clause and with to the query using the DplusUser relation
 *
 * @method     \ItemMasterItemQuery|\WarehouseQuery|\InvLotMasterQuery|\InvSerialMasterQuery|\DplusUserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvLotTag|null findOne(?ConnectionInterface $con = null) Return the first ChildInvLotTag matching the query
 * @method     ChildInvLotTag findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvLotTag matching the query, or a new ChildInvLotTag object populated from the query conditions when no match is found
 *
 * @method     ChildInvLotTag|null findOneByIntgworkid(string $IntgWorkId) Return the first ChildInvLotTag filtered by the IntgWorkId column
 * @method     ChildInvLotTag|null findOneByIntbwhse(string $IntbWhse) Return the first ChildInvLotTag filtered by the IntbWhse column
 * @method     ChildInvLotTag|null findOneByIntgtagnbr(int $IntgTagNbr) Return the first ChildInvLotTag filtered by the IntgTagNbr column
 * @method     ChildInvLotTag|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvLotTag filtered by the InitItemNbr column
 * @method     ChildInvLotTag|null findOneByIntglotser(string $IntgLotSer) Return the first ChildInvLotTag filtered by the IntgLotSer column
 * @method     ChildInvLotTag|null findOneByIntgbin(string $IntgBin) Return the first ChildInvLotTag filtered by the IntgBin column
 * @method     ChildInvLotTag|null findOneByIntgqty(string $IntgQty) Return the first ChildInvLotTag filtered by the IntgQty column
 * @method     ChildInvLotTag|null findOneByIntgunitcost(string $IntgUnitCost) Return the first ChildInvLotTag filtered by the IntgUnitCost column
 * @method     ChildInvLotTag|null findOneByIntgissue(string $IntgIssue) Return the first ChildInvLotTag filtered by the IntgIssue column
 * @method     ChildInvLotTag|null findOneByIntguserid(string $IntgUserId) Return the first ChildInvLotTag filtered by the IntgUserId column
 * @method     ChildInvLotTag|null findOneByIntgentrdate(string $IntgEntrDate) Return the first ChildInvLotTag filtered by the IntgEntrDate column
 * @method     ChildInvLotTag|null findOneByIntgentrtime(string $IntgEntrTime) Return the first ChildInvLotTag filtered by the IntgEntrTime column
 * @method     ChildInvLotTag|null findOneByIntgposted(string $IntgPosted) Return the first ChildInvLotTag filtered by the IntgPosted column
 * @method     ChildInvLotTag|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvLotTag filtered by the DateUpdtd column
 * @method     ChildInvLotTag|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvLotTag filtered by the TimeUpdtd column
 * @method     ChildInvLotTag|null findOneByDummy(string $dummy) Return the first ChildInvLotTag filtered by the dummy column
 *
 * @method     ChildInvLotTag requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvLotTag by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOne(?ConnectionInterface $con = null) Return the first ChildInvLotTag matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvLotTag requireOneByIntgworkid(string $IntgWorkId) Return the first ChildInvLotTag filtered by the IntgWorkId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntbwhse(string $IntbWhse) Return the first ChildInvLotTag filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgtagnbr(int $IntgTagNbr) Return the first ChildInvLotTag filtered by the IntgTagNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvLotTag filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntglotser(string $IntgLotSer) Return the first ChildInvLotTag filtered by the IntgLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgbin(string $IntgBin) Return the first ChildInvLotTag filtered by the IntgBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgqty(string $IntgQty) Return the first ChildInvLotTag filtered by the IntgQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgunitcost(string $IntgUnitCost) Return the first ChildInvLotTag filtered by the IntgUnitCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgissue(string $IntgIssue) Return the first ChildInvLotTag filtered by the IntgIssue column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntguserid(string $IntgUserId) Return the first ChildInvLotTag filtered by the IntgUserId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgentrdate(string $IntgEntrDate) Return the first ChildInvLotTag filtered by the IntgEntrDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgentrtime(string $IntgEntrTime) Return the first ChildInvLotTag filtered by the IntgEntrTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByIntgposted(string $IntgPosted) Return the first ChildInvLotTag filtered by the IntgPosted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvLotTag filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvLotTag filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvLotTag requireOneByDummy(string $dummy) Return the first ChildInvLotTag filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvLotTag[]|Collection find(?ConnectionInterface $con = null) Return ChildInvLotTag objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvLotTag> find(?ConnectionInterface $con = null) Return ChildInvLotTag objects based on current ModelCriteria
 *
 * @method     ChildInvLotTag[]|Collection findByIntgworkid(string|array<string> $IntgWorkId) Return ChildInvLotTag objects filtered by the IntgWorkId column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgworkid(string|array<string> $IntgWorkId) Return ChildInvLotTag objects filtered by the IntgWorkId column
 * @method     ChildInvLotTag[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildInvLotTag objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntbwhse(string|array<string> $IntbWhse) Return ChildInvLotTag objects filtered by the IntbWhse column
 * @method     ChildInvLotTag[]|Collection findByIntgtagnbr(int|array<int> $IntgTagNbr) Return ChildInvLotTag objects filtered by the IntgTagNbr column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgtagnbr(int|array<int> $IntgTagNbr) Return ChildInvLotTag objects filtered by the IntgTagNbr column
 * @method     ChildInvLotTag[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvLotTag objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvLotTag objects filtered by the InitItemNbr column
 * @method     ChildInvLotTag[]|Collection findByIntglotser(string|array<string> $IntgLotSer) Return ChildInvLotTag objects filtered by the IntgLotSer column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntglotser(string|array<string> $IntgLotSer) Return ChildInvLotTag objects filtered by the IntgLotSer column
 * @method     ChildInvLotTag[]|Collection findByIntgbin(string|array<string> $IntgBin) Return ChildInvLotTag objects filtered by the IntgBin column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgbin(string|array<string> $IntgBin) Return ChildInvLotTag objects filtered by the IntgBin column
 * @method     ChildInvLotTag[]|Collection findByIntgqty(string|array<string> $IntgQty) Return ChildInvLotTag objects filtered by the IntgQty column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgqty(string|array<string> $IntgQty) Return ChildInvLotTag objects filtered by the IntgQty column
 * @method     ChildInvLotTag[]|Collection findByIntgunitcost(string|array<string> $IntgUnitCost) Return ChildInvLotTag objects filtered by the IntgUnitCost column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgunitcost(string|array<string> $IntgUnitCost) Return ChildInvLotTag objects filtered by the IntgUnitCost column
 * @method     ChildInvLotTag[]|Collection findByIntgissue(string|array<string> $IntgIssue) Return ChildInvLotTag objects filtered by the IntgIssue column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgissue(string|array<string> $IntgIssue) Return ChildInvLotTag objects filtered by the IntgIssue column
 * @method     ChildInvLotTag[]|Collection findByIntguserid(string|array<string> $IntgUserId) Return ChildInvLotTag objects filtered by the IntgUserId column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntguserid(string|array<string> $IntgUserId) Return ChildInvLotTag objects filtered by the IntgUserId column
 * @method     ChildInvLotTag[]|Collection findByIntgentrdate(string|array<string> $IntgEntrDate) Return ChildInvLotTag objects filtered by the IntgEntrDate column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgentrdate(string|array<string> $IntgEntrDate) Return ChildInvLotTag objects filtered by the IntgEntrDate column
 * @method     ChildInvLotTag[]|Collection findByIntgentrtime(string|array<string> $IntgEntrTime) Return ChildInvLotTag objects filtered by the IntgEntrTime column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgentrtime(string|array<string> $IntgEntrTime) Return ChildInvLotTag objects filtered by the IntgEntrTime column
 * @method     ChildInvLotTag[]|Collection findByIntgposted(string|array<string> $IntgPosted) Return ChildInvLotTag objects filtered by the IntgPosted column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByIntgposted(string|array<string> $IntgPosted) Return ChildInvLotTag objects filtered by the IntgPosted column
 * @method     ChildInvLotTag[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvLotTag objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvLotTag objects filtered by the DateUpdtd column
 * @method     ChildInvLotTag[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvLotTag objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvLotTag objects filtered by the TimeUpdtd column
 * @method     ChildInvLotTag[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvLotTag objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvLotTag> findByDummy(string|array<string> $dummy) Return ChildInvLotTag objects filtered by the dummy column
 *
 * @method     ChildInvLotTag[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvLotTag> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvLotTagQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvLotTagQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvLotTag', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvLotTagQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvLotTagQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvLotTagQuery) {
            return $criteria;
        }
        $query = new ChildInvLotTagQuery();
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
     * @param array[$IntgWorkId, $IntbWhse, $IntgTagNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvLotTag|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvLotTagTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildInvLotTag A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntgWorkId, IntbWhse, IntgTagNbr, InitItemNbr, IntgLotSer, IntgBin, IntgQty, IntgUnitCost, IntgIssue, IntgUserId, IntgEntrDate, IntgEntrTime, IntgPosted, DateUpdtd, TimeUpdtd, dummy FROM inv_inv_tag WHERE IntgWorkId = :p0 AND IntbWhse = :p1 AND IntgTagNbr = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvLotTag $obj */
            $obj = new ChildInvLotTag();
            $obj->hydrate($row);
            InvLotTagTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildInvLotTag|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(InvLotTagTableMap::COL_INTGWORKID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvLotTagTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(InvLotTagTableMap::COL_INTGTAGNBR, $key[2], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(InvLotTagTableMap::COL_INTGWORKID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvLotTagTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(InvLotTagTableMap::COL_INTGTAGNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the IntgWorkId column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgworkid('fooValue');   // WHERE IntgWorkId = 'fooValue'
     * $query->filterByIntgworkid('%fooValue%', Criteria::LIKE); // WHERE IntgWorkId LIKE '%fooValue%'
     * $query->filterByIntgworkid(['foo', 'bar']); // WHERE IntgWorkId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intgworkid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgworkid($intgworkid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intgworkid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGWORKID, $intgworkid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * $query->filterByIntbwhse(['foo', 'bar']); // WHERE IntbWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgTagNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgtagnbr(1234); // WHERE IntgTagNbr = 1234
     * $query->filterByIntgtagnbr(array(12, 34)); // WHERE IntgTagNbr IN (12, 34)
     * $query->filterByIntgtagnbr(array('min' => 12)); // WHERE IntgTagNbr > 12
     * </code>
     *
     * @param mixed $intgtagnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgtagnbr($intgtagnbr = null, ?string $comparison = null)
    {
        if (is_array($intgtagnbr)) {
            $useMinMax = false;
            if (isset($intgtagnbr['min'])) {
                $this->addUsingAlias(InvLotTagTableMap::COL_INTGTAGNBR, $intgtagnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intgtagnbr['max'])) {
                $this->addUsingAlias(InvLotTagTableMap::COL_INTGTAGNBR, $intgtagnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGTAGNBR, $intgtagnbr, $comparison);

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

        $this->addUsingAlias(InvLotTagTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByIntglotser('fooValue');   // WHERE IntgLotSer = 'fooValue'
     * $query->filterByIntglotser('%fooValue%', Criteria::LIKE); // WHERE IntgLotSer LIKE '%fooValue%'
     * $query->filterByIntglotser(['foo', 'bar']); // WHERE IntgLotSer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intglotser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntglotser($intglotser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intglotser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGLOTSER, $intglotser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgBin column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgbin('fooValue');   // WHERE IntgBin = 'fooValue'
     * $query->filterByIntgbin('%fooValue%', Criteria::LIKE); // WHERE IntgBin LIKE '%fooValue%'
     * $query->filterByIntgbin(['foo', 'bar']); // WHERE IntgBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intgbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgbin($intgbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intgbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGBIN, $intgbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgQty column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgqty(1234); // WHERE IntgQty = 1234
     * $query->filterByIntgqty(array(12, 34)); // WHERE IntgQty IN (12, 34)
     * $query->filterByIntgqty(array('min' => 12)); // WHERE IntgQty > 12
     * </code>
     *
     * @param mixed $intgqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgqty($intgqty = null, ?string $comparison = null)
    {
        if (is_array($intgqty)) {
            $useMinMax = false;
            if (isset($intgqty['min'])) {
                $this->addUsingAlias(InvLotTagTableMap::COL_INTGQTY, $intgqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intgqty['max'])) {
                $this->addUsingAlias(InvLotTagTableMap::COL_INTGQTY, $intgqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGQTY, $intgqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgUnitCost column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgunitcost(1234); // WHERE IntgUnitCost = 1234
     * $query->filterByIntgunitcost(array(12, 34)); // WHERE IntgUnitCost IN (12, 34)
     * $query->filterByIntgunitcost(array('min' => 12)); // WHERE IntgUnitCost > 12
     * </code>
     *
     * @param mixed $intgunitcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgunitcost($intgunitcost = null, ?string $comparison = null)
    {
        if (is_array($intgunitcost)) {
            $useMinMax = false;
            if (isset($intgunitcost['min'])) {
                $this->addUsingAlias(InvLotTagTableMap::COL_INTGUNITCOST, $intgunitcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intgunitcost['max'])) {
                $this->addUsingAlias(InvLotTagTableMap::COL_INTGUNITCOST, $intgunitcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGUNITCOST, $intgunitcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgIssue column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgissue('fooValue');   // WHERE IntgIssue = 'fooValue'
     * $query->filterByIntgissue('%fooValue%', Criteria::LIKE); // WHERE IntgIssue LIKE '%fooValue%'
     * $query->filterByIntgissue(['foo', 'bar']); // WHERE IntgIssue IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intgissue The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgissue($intgissue = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intgissue)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGISSUE, $intgissue, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgUserId column
     *
     * Example usage:
     * <code>
     * $query->filterByIntguserid('fooValue');   // WHERE IntgUserId = 'fooValue'
     * $query->filterByIntguserid('%fooValue%', Criteria::LIKE); // WHERE IntgUserId LIKE '%fooValue%'
     * $query->filterByIntguserid(['foo', 'bar']); // WHERE IntgUserId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intguserid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntguserid($intguserid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intguserid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGUSERID, $intguserid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgEntrDate column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgentrdate('fooValue');   // WHERE IntgEntrDate = 'fooValue'
     * $query->filterByIntgentrdate('%fooValue%', Criteria::LIKE); // WHERE IntgEntrDate LIKE '%fooValue%'
     * $query->filterByIntgentrdate(['foo', 'bar']); // WHERE IntgEntrDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intgentrdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgentrdate($intgentrdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intgentrdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGENTRDATE, $intgentrdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgEntrTime column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgentrtime('fooValue');   // WHERE IntgEntrTime = 'fooValue'
     * $query->filterByIntgentrtime('%fooValue%', Criteria::LIKE); // WHERE IntgEntrTime LIKE '%fooValue%'
     * $query->filterByIntgentrtime(['foo', 'bar']); // WHERE IntgEntrTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intgentrtime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgentrtime($intgentrtime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intgentrtime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGENTRTIME, $intgentrtime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntgPosted column
     *
     * Example usage:
     * <code>
     * $query->filterByIntgposted('fooValue');   // WHERE IntgPosted = 'fooValue'
     * $query->filterByIntgposted('%fooValue%', Criteria::LIKE); // WHERE IntgPosted LIKE '%fooValue%'
     * $query->filterByIntgposted(['foo', 'bar']); // WHERE IntgPosted IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intgposted The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntgposted($intgposted = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intgposted)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvLotTagTableMap::COL_INTGPOSTED, $intgposted, $comparison);

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

        $this->addUsingAlias(InvLotTagTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(InvLotTagTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(InvLotTagTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(InvLotTagTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvLotTagTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouse($warehouse, ?string $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(InvLotTagTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvLotTagTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByWarehouse() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Warehouse relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouse(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Warehouse');

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
            $this->addJoinObject($join, 'Warehouse');
        }

        return $this;
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Warehouse', '\WarehouseQuery');
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @param callable(\WarehouseQuery):\WarehouseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Warehouse table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('Warehouse', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Warehouse table for a NOT EXISTS query.
     *
     * @see useWarehouseExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('Warehouse', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Warehouse table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseQuery The inner query object of the IN statement
     */
    public function useInWarehouseQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('Warehouse', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Warehouse table for a NOT IN query.
     *
     * @see useWarehouseInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('Warehouse', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvLotMaster object
     *
     * @param \InvLotMaster $invLotMaster The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, ?string $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            return $this
                ->addUsingAlias(InvLotTagTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotTagTableMap::COL_INTGLOTSER, $invLotMaster->getLotmlotnbr(), $comparison);
        } else {
            throw new PropelException('filterByInvLotMaster() only accepts arguments of type \InvLotMaster');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotMaster relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotMaster(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @param callable(\InvLotMasterQuery):\InvLotMasterQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotMasterQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotMasterQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotMaster table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotMasterQuery The inner query object of the EXISTS statement
     */
    public function useInvLotMasterExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useExistsQuery('InvLotMaster', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for a NOT EXISTS query.
     *
     * @see useInvLotMasterExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotMasterQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotMasterNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useExistsQuery('InvLotMaster', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotMasterQuery The inner query object of the IN statement
     */
    public function useInInvLotMasterQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useInQuery('InvLotMaster', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for a NOT IN query.
     *
     * @see useInvLotMasterInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotMasterQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotMasterQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useInQuery('InvLotMaster', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvSerialMaster object
     *
     * @param \InvSerialMaster $invSerialMaster The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvSerialMaster($invSerialMaster, ?string $comparison = null)
    {
        if ($invSerialMaster instanceof \InvSerialMaster) {
            return $this
                ->addUsingAlias(InvLotTagTableMap::COL_INITITEMNBR, $invSerialMaster->getInititemnbr(), $comparison)
                ->addUsingAlias(InvLotTagTableMap::COL_INTGLOTSER, $invSerialMaster->getSermsernbr(), $comparison);
        } else {
            throw new PropelException('filterByInvSerialMaster() only accepts arguments of type \InvSerialMaster');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvSerialMaster relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvSerialMaster(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvSerialMaster');

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
            $this->addJoinObject($join, 'InvSerialMaster');
        }

        return $this;
    }

    /**
     * Use the InvSerialMaster relation InvSerialMaster object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvSerialMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvSerialMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvSerialMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvSerialMaster', '\InvSerialMasterQuery');
    }

    /**
     * Use the InvSerialMaster relation InvSerialMaster object
     *
     * @param callable(\InvSerialMasterQuery):\InvSerialMasterQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvSerialMasterQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvSerialMasterQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvSerialMaster table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvSerialMasterQuery The inner query object of the EXISTS statement
     */
    public function useInvSerialMasterExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useExistsQuery('InvSerialMaster', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvSerialMaster table for a NOT EXISTS query.
     *
     * @see useInvSerialMasterExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvSerialMasterQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvSerialMasterNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useExistsQuery('InvSerialMaster', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvSerialMaster table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvSerialMasterQuery The inner query object of the IN statement
     */
    public function useInInvSerialMasterQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useInQuery('InvSerialMaster', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvSerialMaster table for a NOT IN query.
     *
     * @see useInvSerialMasterInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvSerialMasterQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvSerialMasterQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useInQuery('InvSerialMaster', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \DplusUser object
     *
     * @param \DplusUser|ObjectCollection $dplusUser The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDplusUser($dplusUser, ?string $comparison = null)
    {
        if ($dplusUser instanceof \DplusUser) {
            return $this
                ->addUsingAlias(InvLotTagTableMap::COL_INTGUSERID, $dplusUser->getUsrcid(), $comparison);
        } elseif ($dplusUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvLotTagTableMap::COL_INTGUSERID, $dplusUser->toKeyValue('PrimaryKey', 'Usrcid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByDplusUser() only accepts arguments of type \DplusUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DplusUser relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinDplusUser(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DplusUser');

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
            $this->addJoinObject($join, 'DplusUser');
        }

        return $this;
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DplusUserQuery A secondary query class using the current class as primary query
     */
    public function useDplusUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDplusUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DplusUser', '\DplusUserQuery');
    }

    /**
     * Use the DplusUser relation DplusUser object
     *
     * @param callable(\DplusUserQuery):\DplusUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDplusUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useDplusUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to DplusUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \DplusUserQuery The inner query object of the EXISTS statement
     */
    public function useDplusUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useExistsQuery('DplusUser', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to DplusUser table for a NOT EXISTS query.
     *
     * @see useDplusUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \DplusUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useDplusUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useExistsQuery('DplusUser', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to DplusUser table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \DplusUserQuery The inner query object of the IN statement
     */
    public function useInDplusUserQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useInQuery('DplusUser', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to DplusUser table for a NOT IN query.
     *
     * @see useDplusUserInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \DplusUserQuery The inner query object of the NOT IN statement
     */
    public function useNotInDplusUserQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DplusUserQuery */
        $q = $this->useInQuery('DplusUser', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvLotTag $invLotTag Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invLotTag = null)
    {
        if ($invLotTag) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvLotTagTableMap::COL_INTGWORKID), $invLotTag->getIntgworkid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvLotTagTableMap::COL_INTBWHSE), $invLotTag->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(InvLotTagTableMap::COL_INTGTAGNBR), $invLotTag->getIntgtagnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_inv_tag table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvLotTagTableMap::clearInstancePool();
            InvLotTagTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvLotTagTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvLotTagTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvLotTagTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvLotTagTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
