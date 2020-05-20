<?php

namespace Base;

use \ItemXrefManufacturer as ChildItemXrefManufacturer;
use \ItemXrefManufacturerQuery as ChildItemXrefManufacturerQuery;
use \Exception;
use \PDO;
use Map\ItemXrefManufacturerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'mfcp_item_xref' table.
 *
 *
 *
 * @method     ChildItemXrefManufacturerQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildItemXrefManufacturerQuery orderByMcxrvenditemnbr($order = Criteria::ASC) Order by the McxrVendItemNbr column
 * @method     ChildItemXrefManufacturerQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefManufacturerQuery orderByMcxruom($order = Criteria::ASC) Order by the McxrUom column
 * @method     ChildItemXrefManufacturerQuery orderByMcxrprice($order = Criteria::ASC) Order by the McxrPrice column
 * @method     ChildItemXrefManufacturerQuery orderByMcxrcost($order = Criteria::ASC) Order by the McxrCost column
 * @method     ChildItemXrefManufacturerQuery orderByMcxravail($order = Criteria::ASC) Order by the McxrAvail column
 * @method     ChildItemXrefManufacturerQuery orderByMcxrchgdate($order = Criteria::ASC) Order by the McxrChgDate column
 * @method     ChildItemXrefManufacturerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefManufacturerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefManufacturerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefManufacturerQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildItemXrefManufacturerQuery groupByMcxrvenditemnbr() Group by the McxrVendItemNbr column
 * @method     ChildItemXrefManufacturerQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefManufacturerQuery groupByMcxruom() Group by the McxrUom column
 * @method     ChildItemXrefManufacturerQuery groupByMcxrprice() Group by the McxrPrice column
 * @method     ChildItemXrefManufacturerQuery groupByMcxrcost() Group by the McxrCost column
 * @method     ChildItemXrefManufacturerQuery groupByMcxravail() Group by the McxrAvail column
 * @method     ChildItemXrefManufacturerQuery groupByMcxrchgdate() Group by the McxrChgDate column
 * @method     ChildItemXrefManufacturerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefManufacturerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefManufacturerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefManufacturerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefManufacturerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefManufacturerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefManufacturerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefManufacturerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefManufacturerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefManufacturerQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefManufacturerQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefManufacturerQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefManufacturerQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefManufacturerQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefManufacturerQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefManufacturerQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefManufacturerQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefManufacturerQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefManufacturerQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildItemXrefManufacturerQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefManufacturerQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefManufacturerQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefManufacturerQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \ItemMasterItemQuery|\VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefManufacturer findOne(ConnectionInterface $con = null) Return the first ChildItemXrefManufacturer matching the query
 * @method     ChildItemXrefManufacturer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemXrefManufacturer matching the query, or a new ChildItemXrefManufacturer object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefManufacturer findOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefManufacturer filtered by the ApveVendId column
 * @method     ChildItemXrefManufacturer findOneByMcxrvenditemnbr(string $McxrVendItemNbr) Return the first ChildItemXrefManufacturer filtered by the McxrVendItemNbr column
 * @method     ChildItemXrefManufacturer findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefManufacturer filtered by the InitItemNbr column
 * @method     ChildItemXrefManufacturer findOneByMcxruom(string $McxrUom) Return the first ChildItemXrefManufacturer filtered by the McxrUom column
 * @method     ChildItemXrefManufacturer findOneByMcxrprice(string $McxrPrice) Return the first ChildItemXrefManufacturer filtered by the McxrPrice column
 * @method     ChildItemXrefManufacturer findOneByMcxrcost(string $McxrCost) Return the first ChildItemXrefManufacturer filtered by the McxrCost column
 * @method     ChildItemXrefManufacturer findOneByMcxravail(string $McxrAvail) Return the first ChildItemXrefManufacturer filtered by the McxrAvail column
 * @method     ChildItemXrefManufacturer findOneByMcxrchgdate(string $McxrChgDate) Return the first ChildItemXrefManufacturer filtered by the McxrChgDate column
 * @method     ChildItemXrefManufacturer findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefManufacturer filtered by the DateUpdtd column
 * @method     ChildItemXrefManufacturer findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefManufacturer filtered by the TimeUpdtd column
 * @method     ChildItemXrefManufacturer findOneByDummy(string $dummy) Return the first ChildItemXrefManufacturer filtered by the dummy column *

 * @method     ChildItemXrefManufacturer requirePk($key, ConnectionInterface $con = null) Return the ChildItemXrefManufacturer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOne(ConnectionInterface $con = null) Return the first ChildItemXrefManufacturer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefManufacturer requireOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefManufacturer filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByMcxrvenditemnbr(string $McxrVendItemNbr) Return the first ChildItemXrefManufacturer filtered by the McxrVendItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefManufacturer filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByMcxruom(string $McxrUom) Return the first ChildItemXrefManufacturer filtered by the McxrUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByMcxrprice(string $McxrPrice) Return the first ChildItemXrefManufacturer filtered by the McxrPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByMcxrcost(string $McxrCost) Return the first ChildItemXrefManufacturer filtered by the McxrCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByMcxravail(string $McxrAvail) Return the first ChildItemXrefManufacturer filtered by the McxrAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByMcxrchgdate(string $McxrChgDate) Return the first ChildItemXrefManufacturer filtered by the McxrChgDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefManufacturer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefManufacturer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefManufacturer requireOneByDummy(string $dummy) Return the first ChildItemXrefManufacturer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefManufacturer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemXrefManufacturer objects based on current ModelCriteria
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildItemXrefManufacturer objects filtered by the ApveVendId column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByMcxrvenditemnbr(string $McxrVendItemNbr) Return ChildItemXrefManufacturer objects filtered by the McxrVendItemNbr column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemXrefManufacturer objects filtered by the InitItemNbr column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByMcxruom(string $McxrUom) Return ChildItemXrefManufacturer objects filtered by the McxrUom column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByMcxrprice(string $McxrPrice) Return ChildItemXrefManufacturer objects filtered by the McxrPrice column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByMcxrcost(string $McxrCost) Return ChildItemXrefManufacturer objects filtered by the McxrCost column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByMcxravail(string $McxrAvail) Return ChildItemXrefManufacturer objects filtered by the McxrAvail column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByMcxrchgdate(string $McxrChgDate) Return ChildItemXrefManufacturer objects filtered by the McxrChgDate column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemXrefManufacturer objects filtered by the DateUpdtd column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemXrefManufacturer objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefManufacturer[]|ObjectCollection findByDummy(string $dummy) Return ChildItemXrefManufacturer objects filtered by the dummy column
 * @method     ChildItemXrefManufacturer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemXrefManufacturerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefManufacturerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefManufacturer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefManufacturerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefManufacturerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemXrefManufacturerQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefManufacturerQuery();
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
     * @param array[$ApveVendId, $McxrVendItemNbr, $InitItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefManufacturer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefManufacturerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefManufacturerTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildItemXrefManufacturer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, McxrVendItemNbr, InitItemNbr, McxrUom, McxrPrice, McxrCost, McxrAvail, McxrChgDate, DateUpdtd, TimeUpdtd, dummy FROM mfcp_item_xref WHERE ApveVendId = :p0 AND McxrVendItemNbr = :p1 AND InitItemNbr = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemXrefManufacturer $obj */
            $obj = new ChildItemXrefManufacturer();
            $obj->hydrate($row);
            ItemXrefManufacturerTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildItemXrefManufacturer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemXrefManufacturerTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemXrefManufacturerTableMap::COL_INITITEMNBR, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the McxrVendItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByMcxrvenditemnbr('fooValue');   // WHERE McxrVendItemNbr = 'fooValue'
     * $query->filterByMcxrvenditemnbr('%fooValue%', Criteria::LIKE); // WHERE McxrVendItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mcxrvenditemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByMcxrvenditemnbr($mcxrvenditemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mcxrvenditemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR, $mcxrvenditemnbr, $comparison);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the McxrUom column
     *
     * Example usage:
     * <code>
     * $query->filterByMcxruom('fooValue');   // WHERE McxrUom = 'fooValue'
     * $query->filterByMcxruom('%fooValue%', Criteria::LIKE); // WHERE McxrUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mcxruom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByMcxruom($mcxruom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mcxruom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRUOM, $mcxruom, $comparison);
    }

    /**
     * Filter the query on the McxrPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByMcxrprice(1234); // WHERE McxrPrice = 1234
     * $query->filterByMcxrprice(array(12, 34)); // WHERE McxrPrice IN (12, 34)
     * $query->filterByMcxrprice(array('min' => 12)); // WHERE McxrPrice > 12
     * </code>
     *
     * @param     mixed $mcxrprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByMcxrprice($mcxrprice = null, $comparison = null)
    {
        if (is_array($mcxrprice)) {
            $useMinMax = false;
            if (isset($mcxrprice['min'])) {
                $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRPRICE, $mcxrprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcxrprice['max'])) {
                $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRPRICE, $mcxrprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRPRICE, $mcxrprice, $comparison);
    }

    /**
     * Filter the query on the McxrCost column
     *
     * Example usage:
     * <code>
     * $query->filterByMcxrcost(1234); // WHERE McxrCost = 1234
     * $query->filterByMcxrcost(array(12, 34)); // WHERE McxrCost IN (12, 34)
     * $query->filterByMcxrcost(array('min' => 12)); // WHERE McxrCost > 12
     * </code>
     *
     * @param     mixed $mcxrcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByMcxrcost($mcxrcost = null, $comparison = null)
    {
        if (is_array($mcxrcost)) {
            $useMinMax = false;
            if (isset($mcxrcost['min'])) {
                $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRCOST, $mcxrcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcxrcost['max'])) {
                $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRCOST, $mcxrcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRCOST, $mcxrcost, $comparison);
    }

    /**
     * Filter the query on the McxrAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByMcxravail(1234); // WHERE McxrAvail = 1234
     * $query->filterByMcxravail(array(12, 34)); // WHERE McxrAvail IN (12, 34)
     * $query->filterByMcxravail(array('min' => 12)); // WHERE McxrAvail > 12
     * </code>
     *
     * @param     mixed $mcxravail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByMcxravail($mcxravail = null, $comparison = null)
    {
        if (is_array($mcxravail)) {
            $useMinMax = false;
            if (isset($mcxravail['min'])) {
                $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRAVAIL, $mcxravail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcxravail['max'])) {
                $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRAVAIL, $mcxravail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRAVAIL, $mcxravail, $comparison);
    }

    /**
     * Filter the query on the McxrChgDate column
     *
     * Example usage:
     * <code>
     * $query->filterByMcxrchgdate('fooValue');   // WHERE McxrChgDate = 'fooValue'
     * $query->filterByMcxrchgdate('%fooValue%', Criteria::LIKE); // WHERE McxrChgDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mcxrchgdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByMcxrchgdate($mcxrchgdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mcxrchgdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_MCXRCHGDATE, $mcxrchgdate, $comparison);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefManufacturerTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemXrefManufacturerTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefManufacturerTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
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
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ItemXrefManufacturerTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefManufacturerTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
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
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
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
     * @param   ChildItemXrefManufacturer $itemXrefManufacturer Object to remove from the list of results
     *
     * @return $this|ChildItemXrefManufacturerQuery The current query, for fluid interface
     */
    public function prune($itemXrefManufacturer = null)
    {
        if ($itemXrefManufacturer) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefManufacturerTableMap::COL_APVEVENDID), $itemXrefManufacturer->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefManufacturerTableMap::COL_MCXRVENDITEMNBR), $itemXrefManufacturer->getMcxrvenditemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemXrefManufacturerTableMap::COL_INITITEMNBR), $itemXrefManufacturer->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the mfcp_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefManufacturerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefManufacturerTableMap::clearInstancePool();
            ItemXrefManufacturerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefManufacturerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefManufacturerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefManufacturerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefManufacturerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemXrefManufacturerQuery
