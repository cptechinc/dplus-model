<?php

namespace Base;

use \ItemXrefKey as ChildItemXrefKey;
use \ItemXrefKeyQuery as ChildItemXrefKeyQuery;
use \Exception;
use \PDO;
use Map\ItemXrefKeyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `item_xref_key` table.
 *
 * @method     ChildItemXrefKeyQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefKeyQuery orderByInitdesc1($order = Criteria::ASC) Order by the InitDesc1 column
 * @method     ChildItemXrefKeyQuery orderByInitdesc2($order = Criteria::ASC) Order by the InitDesc2 column
 * @method     ChildItemXrefKeyQuery orderByRkeytheiritem($order = Criteria::ASC) Order by the RkeyTheirItem column
 * @method     ChildItemXrefKeyQuery orderByRkeytheiritemdesc1($order = Criteria::ASC) Order by the RkeyTheirItemDesc1 column
 * @method     ChildItemXrefKeyQuery orderByRkeytheiritemdesc2($order = Criteria::ASC) Order by the RkeyTheirItemDesc2 column
 * @method     ChildItemXrefKeyQuery orderByRkeysource($order = Criteria::ASC) Order by the RkeySource column
 * @method     ChildItemXrefKeyQuery orderByRkeysourcedesc($order = Criteria::ASC) Order by the RkeySourceDesc column
 * @method     ChildItemXrefKeyQuery orderByRkeycvid($order = Criteria::ASC) Order by the RkeyCVId column
 * @method     ChildItemXrefKeyQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefKeyQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefKeyQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefKeyQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefKeyQuery groupByInitdesc1() Group by the InitDesc1 column
 * @method     ChildItemXrefKeyQuery groupByInitdesc2() Group by the InitDesc2 column
 * @method     ChildItemXrefKeyQuery groupByRkeytheiritem() Group by the RkeyTheirItem column
 * @method     ChildItemXrefKeyQuery groupByRkeytheiritemdesc1() Group by the RkeyTheirItemDesc1 column
 * @method     ChildItemXrefKeyQuery groupByRkeytheiritemdesc2() Group by the RkeyTheirItemDesc2 column
 * @method     ChildItemXrefKeyQuery groupByRkeysource() Group by the RkeySource column
 * @method     ChildItemXrefKeyQuery groupByRkeysourcedesc() Group by the RkeySourceDesc column
 * @method     ChildItemXrefKeyQuery groupByRkeycvid() Group by the RkeyCVId column
 * @method     ChildItemXrefKeyQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefKeyQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefKeyQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefKeyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefKeyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefKeyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefKeyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefKeyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefKeyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefKeyQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefKeyQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefKeyQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefKeyQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefKeyQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefKeyQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefKeyQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefKeyQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefKeyQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefKeyQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildItemXrefKeyQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefKeyQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefKeyQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefKeyQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefKeyQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildItemXrefKeyQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildItemXrefKeyQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildItemXrefKeyQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildItemXrefKeyQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemXrefKeyQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemXrefKeyQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \ItemMasterItemQuery|\VendorQuery|\CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefKey|null findOne(?ConnectionInterface $con = null) Return the first ChildItemXrefKey matching the query
 * @method     ChildItemXrefKey findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemXrefKey matching the query, or a new ChildItemXrefKey object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefKey|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefKey filtered by the InitItemNbr column
 * @method     ChildItemXrefKey|null findOneByInitdesc1(string $InitDesc1) Return the first ChildItemXrefKey filtered by the InitDesc1 column
 * @method     ChildItemXrefKey|null findOneByInitdesc2(string $InitDesc2) Return the first ChildItemXrefKey filtered by the InitDesc2 column
 * @method     ChildItemXrefKey|null findOneByRkeytheiritem(string $RkeyTheirItem) Return the first ChildItemXrefKey filtered by the RkeyTheirItem column
 * @method     ChildItemXrefKey|null findOneByRkeytheiritemdesc1(string $RkeyTheirItemDesc1) Return the first ChildItemXrefKey filtered by the RkeyTheirItemDesc1 column
 * @method     ChildItemXrefKey|null findOneByRkeytheiritemdesc2(string $RkeyTheirItemDesc2) Return the first ChildItemXrefKey filtered by the RkeyTheirItemDesc2 column
 * @method     ChildItemXrefKey|null findOneByRkeysource(string $RkeySource) Return the first ChildItemXrefKey filtered by the RkeySource column
 * @method     ChildItemXrefKey|null findOneByRkeysourcedesc(string $RkeySourceDesc) Return the first ChildItemXrefKey filtered by the RkeySourceDesc column
 * @method     ChildItemXrefKey|null findOneByRkeycvid(string $RkeyCVId) Return the first ChildItemXrefKey filtered by the RkeyCVId column
 * @method     ChildItemXrefKey|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefKey filtered by the DateUpdtd column
 * @method     ChildItemXrefKey|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefKey filtered by the TimeUpdtd column
 * @method     ChildItemXrefKey|null findOneByDummy(string $dummy) Return the first ChildItemXrefKey filtered by the dummy column
 *
 * @method     ChildItemXrefKey requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemXrefKey by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOne(?ConnectionInterface $con = null) Return the first ChildItemXrefKey matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefKey requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefKey filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByInitdesc1(string $InitDesc1) Return the first ChildItemXrefKey filtered by the InitDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByInitdesc2(string $InitDesc2) Return the first ChildItemXrefKey filtered by the InitDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByRkeytheiritem(string $RkeyTheirItem) Return the first ChildItemXrefKey filtered by the RkeyTheirItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByRkeytheiritemdesc1(string $RkeyTheirItemDesc1) Return the first ChildItemXrefKey filtered by the RkeyTheirItemDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByRkeytheiritemdesc2(string $RkeyTheirItemDesc2) Return the first ChildItemXrefKey filtered by the RkeyTheirItemDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByRkeysource(string $RkeySource) Return the first ChildItemXrefKey filtered by the RkeySource column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByRkeysourcedesc(string $RkeySourceDesc) Return the first ChildItemXrefKey filtered by the RkeySourceDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByRkeycvid(string $RkeyCVId) Return the first ChildItemXrefKey filtered by the RkeyCVId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefKey filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefKey filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefKey requireOneByDummy(string $dummy) Return the first ChildItemXrefKey filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefKey[]|Collection find(?ConnectionInterface $con = null) Return ChildItemXrefKey objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> find(?ConnectionInterface $con = null) Return ChildItemXrefKey objects based on current ModelCriteria
 *
 * @method     ChildItemXrefKey[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemXrefKey objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemXrefKey objects filtered by the InitItemNbr column
 * @method     ChildItemXrefKey[]|Collection findByInitdesc1(string|array<string> $InitDesc1) Return ChildItemXrefKey objects filtered by the InitDesc1 column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByInitdesc1(string|array<string> $InitDesc1) Return ChildItemXrefKey objects filtered by the InitDesc1 column
 * @method     ChildItemXrefKey[]|Collection findByInitdesc2(string|array<string> $InitDesc2) Return ChildItemXrefKey objects filtered by the InitDesc2 column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByInitdesc2(string|array<string> $InitDesc2) Return ChildItemXrefKey objects filtered by the InitDesc2 column
 * @method     ChildItemXrefKey[]|Collection findByRkeytheiritem(string|array<string> $RkeyTheirItem) Return ChildItemXrefKey objects filtered by the RkeyTheirItem column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByRkeytheiritem(string|array<string> $RkeyTheirItem) Return ChildItemXrefKey objects filtered by the RkeyTheirItem column
 * @method     ChildItemXrefKey[]|Collection findByRkeytheiritemdesc1(string|array<string> $RkeyTheirItemDesc1) Return ChildItemXrefKey objects filtered by the RkeyTheirItemDesc1 column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByRkeytheiritemdesc1(string|array<string> $RkeyTheirItemDesc1) Return ChildItemXrefKey objects filtered by the RkeyTheirItemDesc1 column
 * @method     ChildItemXrefKey[]|Collection findByRkeytheiritemdesc2(string|array<string> $RkeyTheirItemDesc2) Return ChildItemXrefKey objects filtered by the RkeyTheirItemDesc2 column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByRkeytheiritemdesc2(string|array<string> $RkeyTheirItemDesc2) Return ChildItemXrefKey objects filtered by the RkeyTheirItemDesc2 column
 * @method     ChildItemXrefKey[]|Collection findByRkeysource(string|array<string> $RkeySource) Return ChildItemXrefKey objects filtered by the RkeySource column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByRkeysource(string|array<string> $RkeySource) Return ChildItemXrefKey objects filtered by the RkeySource column
 * @method     ChildItemXrefKey[]|Collection findByRkeysourcedesc(string|array<string> $RkeySourceDesc) Return ChildItemXrefKey objects filtered by the RkeySourceDesc column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByRkeysourcedesc(string|array<string> $RkeySourceDesc) Return ChildItemXrefKey objects filtered by the RkeySourceDesc column
 * @method     ChildItemXrefKey[]|Collection findByRkeycvid(string|array<string> $RkeyCVId) Return ChildItemXrefKey objects filtered by the RkeyCVId column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByRkeycvid(string|array<string> $RkeyCVId) Return ChildItemXrefKey objects filtered by the RkeyCVId column
 * @method     ChildItemXrefKey[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefKey objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefKey objects filtered by the DateUpdtd column
 * @method     ChildItemXrefKey[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefKey objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefKey objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefKey[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemXrefKey objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemXrefKey> findByDummy(string|array<string> $dummy) Return ChildItemXrefKey objects filtered by the dummy column
 *
 * @method     ChildItemXrefKey[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemXrefKey> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemXrefKeyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefKeyQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefKey', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefKeyQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefKeyQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildItemXrefKeyQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefKeyQuery();
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
     * @param array[$InitItemNbr, $RkeyTheirItem, $RkeySource, $RkeyCVId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefKey|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefKeyTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildItemXrefKey A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InitDesc1, InitDesc2, RkeyTheirItem, RkeyTheirItemDesc1, RkeyTheirItemDesc2, RkeySource, RkeySourceDesc, RkeyCVId, DateUpdtd, TimeUpdtd, dummy FROM item_xref_key WHERE InitItemNbr = :p0 AND RkeyTheirItem = :p1 AND RkeySource = :p2 AND RkeyCVId = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemXrefKey $obj */
            $obj = new ChildItemXrefKey();
            $obj->hydrate($row);
            ItemXrefKeyTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildItemXrefKey|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ItemXrefKeyTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYSOURCE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYCVID, $key[3], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ItemXrefKeyTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemXrefKeyTableMap::COL_RKEYSOURCE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemXrefKeyTableMap::COL_RKEYCVID, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdesc1('fooValue');   // WHERE InitDesc1 = 'fooValue'
     * $query->filterByInitdesc1('%fooValue%', Criteria::LIKE); // WHERE InitDesc1 LIKE '%fooValue%'
     * $query->filterByInitdesc1(['foo', 'bar']); // WHERE InitDesc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initdesc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitdesc1($initdesc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_INITDESC1, $initdesc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdesc2('fooValue');   // WHERE InitDesc2 = 'fooValue'
     * $query->filterByInitdesc2('%fooValue%', Criteria::LIKE); // WHERE InitDesc2 LIKE '%fooValue%'
     * $query->filterByInitdesc2(['foo', 'bar']); // WHERE InitDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitdesc2($initdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_INITDESC2, $initdesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RkeyTheirItem column
     *
     * Example usage:
     * <code>
     * $query->filterByRkeytheiritem('fooValue');   // WHERE RkeyTheirItem = 'fooValue'
     * $query->filterByRkeytheiritem('%fooValue%', Criteria::LIKE); // WHERE RkeyTheirItem LIKE '%fooValue%'
     * $query->filterByRkeytheiritem(['foo', 'bar']); // WHERE RkeyTheirItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rkeytheiritem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRkeytheiritem($rkeytheiritem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rkeytheiritem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM, $rkeytheiritem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RkeyTheirItemDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRkeytheiritemdesc1('fooValue');   // WHERE RkeyTheirItemDesc1 = 'fooValue'
     * $query->filterByRkeytheiritemdesc1('%fooValue%', Criteria::LIKE); // WHERE RkeyTheirItemDesc1 LIKE '%fooValue%'
     * $query->filterByRkeytheiritemdesc1(['foo', 'bar']); // WHERE RkeyTheirItemDesc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rkeytheiritemdesc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRkeytheiritemdesc1($rkeytheiritemdesc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rkeytheiritemdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC1, $rkeytheiritemdesc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RkeyTheirItemDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRkeytheiritemdesc2('fooValue');   // WHERE RkeyTheirItemDesc2 = 'fooValue'
     * $query->filterByRkeytheiritemdesc2('%fooValue%', Criteria::LIKE); // WHERE RkeyTheirItemDesc2 LIKE '%fooValue%'
     * $query->filterByRkeytheiritemdesc2(['foo', 'bar']); // WHERE RkeyTheirItemDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rkeytheiritemdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRkeytheiritemdesc2($rkeytheiritemdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rkeytheiritemdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYTHEIRITEMDESC2, $rkeytheiritemdesc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RkeySource column
     *
     * Example usage:
     * <code>
     * $query->filterByRkeysource('fooValue');   // WHERE RkeySource = 'fooValue'
     * $query->filterByRkeysource('%fooValue%', Criteria::LIKE); // WHERE RkeySource LIKE '%fooValue%'
     * $query->filterByRkeysource(['foo', 'bar']); // WHERE RkeySource IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rkeysource The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRkeysource($rkeysource = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rkeysource)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYSOURCE, $rkeysource, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RkeySourceDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByRkeysourcedesc('fooValue');   // WHERE RkeySourceDesc = 'fooValue'
     * $query->filterByRkeysourcedesc('%fooValue%', Criteria::LIKE); // WHERE RkeySourceDesc LIKE '%fooValue%'
     * $query->filterByRkeysourcedesc(['foo', 'bar']); // WHERE RkeySourceDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rkeysourcedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRkeysourcedesc($rkeysourcedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rkeysourcedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYSOURCEDESC, $rkeysourcedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the RkeyCVId column
     *
     * Example usage:
     * <code>
     * $query->filterByRkeycvid('fooValue');   // WHERE RkeyCVId = 'fooValue'
     * $query->filterByRkeycvid('%fooValue%', Criteria::LIKE); // WHERE RkeyCVId LIKE '%fooValue%'
     * $query->filterByRkeycvid(['foo', 'bar']); // WHERE RkeyCVId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $rkeycvid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRkeycvid($rkeycvid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rkeycvid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYCVID, $rkeycvid, $comparison);

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

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefKeyTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(ItemXrefKeyTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefKeyTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendor($vendor, ?string $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYCVID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYCVID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinVendor(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Vendor relation Vendor object
     *
     * @param callable(\VendorQuery):\VendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Vendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \VendorQuery The inner query object of the EXISTS statement
     */
    public function useVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT EXISTS query.
     *
     * @see useVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Vendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \VendorQuery The inner query object of the IN statement
     */
    public function useInVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT IN query.
     *
     * @see useVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
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
                ->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYCVID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefKeyTableMap::COL_RKEYCVID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

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
     * Exclude object from result
     *
     * @param ChildItemXrefKey $itemXrefKey Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($itemXrefKey = null)
    {
        if ($itemXrefKey) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefKeyTableMap::COL_INITITEMNBR), $itemXrefKey->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefKeyTableMap::COL_RKEYTHEIRITEM), $itemXrefKey->getRkeytheiritem(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemXrefKeyTableMap::COL_RKEYSOURCE), $itemXrefKey->getRkeysource(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemXrefKeyTableMap::COL_RKEYCVID), $itemXrefKey->getRkeycvid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the item_xref_key table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefKeyTableMap::clearInstancePool();
            ItemXrefKeyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefKeyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefKeyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefKeyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefKeyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
