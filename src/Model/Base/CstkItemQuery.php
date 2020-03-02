<?php

namespace Base;

use \CstkItem as ChildCstkItem;
use \CstkItemQuery as ChildCstkItemQuery;
use \Exception;
use \PDO;
use Map\CstkItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'cust_stock_det' table.
 *
 *
 *
 * @method     ChildCstkItemQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCstkItemQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildCstkItemQuery orderByCskhcell($order = Criteria::ASC) Order by the CskhCell column
 * @method     ChildCstkItemQuery orderByCskdline($order = Criteria::ASC) Order by the CskdLine column
 * @method     ChildCstkItemQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildCstkItemQuery orderByCskdcustitem($order = Criteria::ASC) Order by the CskdCustItem column
 * @method     ChildCstkItemQuery orderByCskdbin($order = Criteria::ASC) Order by the CskdBin column
 * @method     ChildCstkItemQuery orderByCskdenterdate($order = Criteria::ASC) Order by the CskdEnterDate column
 * @method     ChildCstkItemQuery orderByCskdonhand($order = Criteria::ASC) Order by the CskdOnHand column
 * @method     ChildCstkItemQuery orderByCskdunitprice($order = Criteria::ASC) Order by the CskdUnitPrice column
 * @method     ChildCstkItemQuery orderByCskdestusag($order = Criteria::ASC) Order by the CskdEstUsag column
 * @method     ChildCstkItemQuery orderByCskdordpnt($order = Criteria::ASC) Order by the CskdOrdPnt column
 * @method     ChildCstkItemQuery orderByCskdordqty($order = Criteria::ASC) Order by the CskdOrdQty column
 * @method     ChildCstkItemQuery orderByCskdmaxqty($order = Criteria::ASC) Order by the CskdMaxQty column
 * @method     ChildCstkItemQuery orderByCskdcountdate($order = Criteria::ASC) Order by the CskdCountDate column
 * @method     ChildCstkItemQuery orderByCskdusaglast12($order = Criteria::ASC) Order by the CskdUsagLast12 column
 * @method     ChildCstkItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCstkItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCstkItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCstkItemQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCstkItemQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildCstkItemQuery groupByCskhcell() Group by the CskhCell column
 * @method     ChildCstkItemQuery groupByCskdline() Group by the CskdLine column
 * @method     ChildCstkItemQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildCstkItemQuery groupByCskdcustitem() Group by the CskdCustItem column
 * @method     ChildCstkItemQuery groupByCskdbin() Group by the CskdBin column
 * @method     ChildCstkItemQuery groupByCskdenterdate() Group by the CskdEnterDate column
 * @method     ChildCstkItemQuery groupByCskdonhand() Group by the CskdOnHand column
 * @method     ChildCstkItemQuery groupByCskdunitprice() Group by the CskdUnitPrice column
 * @method     ChildCstkItemQuery groupByCskdestusag() Group by the CskdEstUsag column
 * @method     ChildCstkItemQuery groupByCskdordpnt() Group by the CskdOrdPnt column
 * @method     ChildCstkItemQuery groupByCskdordqty() Group by the CskdOrdQty column
 * @method     ChildCstkItemQuery groupByCskdmaxqty() Group by the CskdMaxQty column
 * @method     ChildCstkItemQuery groupByCskdcountdate() Group by the CskdCountDate column
 * @method     ChildCstkItemQuery groupByCskdusaglast12() Group by the CskdUsagLast12 column
 * @method     ChildCstkItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCstkItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCstkItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCstkItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCstkItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCstkItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCstkItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCstkItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCstkItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCstkItemQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildCstkItemQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildCstkItemQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildCstkItemQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildCstkItemQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildCstkItemQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildCstkItemQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildCstkItemQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildCstkItemQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildCstkItemQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildCstkItemQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildCstkItemQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildCstkItemQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildCstkItemQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildCstkItemQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildCstkItemQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildCstkItemQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildCstkItemQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildCstkItemQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildCstkItemQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildCstkItemQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildCstkItemQuery leftJoinCstkHead($relationAlias = null) Adds a LEFT JOIN clause to the query using the CstkHead relation
 * @method     ChildCstkItemQuery rightJoinCstkHead($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CstkHead relation
 * @method     ChildCstkItemQuery innerJoinCstkHead($relationAlias = null) Adds a INNER JOIN clause to the query using the CstkHead relation
 *
 * @method     ChildCstkItemQuery joinWithCstkHead($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CstkHead relation
 *
 * @method     ChildCstkItemQuery leftJoinWithCstkHead() Adds a LEFT JOIN clause and with to the query using the CstkHead relation
 * @method     ChildCstkItemQuery rightJoinWithCstkHead() Adds a RIGHT JOIN clause and with to the query using the CstkHead relation
 * @method     ChildCstkItemQuery innerJoinWithCstkHead() Adds a INNER JOIN clause and with to the query using the CstkHead relation
 *
 * @method     \ItemMasterItemQuery|\CustomerQuery|\CustomerShiptoQuery|\CstkHeadQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCstkItem findOne(ConnectionInterface $con = null) Return the first ChildCstkItem matching the query
 * @method     ChildCstkItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCstkItem matching the query, or a new ChildCstkItem object populated from the query conditions when no match is found
 *
 * @method     ChildCstkItem findOneByArcucustid(string $ArcuCustId) Return the first ChildCstkItem filtered by the ArcuCustId column
 * @method     ChildCstkItem findOneByArstshipid(string $ArstShipId) Return the first ChildCstkItem filtered by the ArstShipId column
 * @method     ChildCstkItem findOneByCskhcell(string $CskhCell) Return the first ChildCstkItem filtered by the CskhCell column
 * @method     ChildCstkItem findOneByCskdline(int $CskdLine) Return the first ChildCstkItem filtered by the CskdLine column
 * @method     ChildCstkItem findOneByInititemnbr(string $InitItemNbr) Return the first ChildCstkItem filtered by the InitItemNbr column
 * @method     ChildCstkItem findOneByCskdcustitem(string $CskdCustItem) Return the first ChildCstkItem filtered by the CskdCustItem column
 * @method     ChildCstkItem findOneByCskdbin(string $CskdBin) Return the first ChildCstkItem filtered by the CskdBin column
 * @method     ChildCstkItem findOneByCskdenterdate(string $CskdEnterDate) Return the first ChildCstkItem filtered by the CskdEnterDate column
 * @method     ChildCstkItem findOneByCskdonhand(string $CskdOnHand) Return the first ChildCstkItem filtered by the CskdOnHand column
 * @method     ChildCstkItem findOneByCskdunitprice(string $CskdUnitPrice) Return the first ChildCstkItem filtered by the CskdUnitPrice column
 * @method     ChildCstkItem findOneByCskdestusag(string $CskdEstUsag) Return the first ChildCstkItem filtered by the CskdEstUsag column
 * @method     ChildCstkItem findOneByCskdordpnt(string $CskdOrdPnt) Return the first ChildCstkItem filtered by the CskdOrdPnt column
 * @method     ChildCstkItem findOneByCskdordqty(string $CskdOrdQty) Return the first ChildCstkItem filtered by the CskdOrdQty column
 * @method     ChildCstkItem findOneByCskdmaxqty(string $CskdMaxQty) Return the first ChildCstkItem filtered by the CskdMaxQty column
 * @method     ChildCstkItem findOneByCskdcountdate(string $CskdCountDate) Return the first ChildCstkItem filtered by the CskdCountDate column
 * @method     ChildCstkItem findOneByCskdusaglast12(string $CskdUsagLast12) Return the first ChildCstkItem filtered by the CskdUsagLast12 column
 * @method     ChildCstkItem findOneByDateupdtd(string $DateUpdtd) Return the first ChildCstkItem filtered by the DateUpdtd column
 * @method     ChildCstkItem findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCstkItem filtered by the TimeUpdtd column
 * @method     ChildCstkItem findOneByDummy(string $dummy) Return the first ChildCstkItem filtered by the dummy column *

 * @method     ChildCstkItem requirePk($key, ConnectionInterface $con = null) Return the ChildCstkItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOne(ConnectionInterface $con = null) Return the first ChildCstkItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCstkItem requireOneByArcucustid(string $ArcuCustId) Return the first ChildCstkItem filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByArstshipid(string $ArstShipId) Return the first ChildCstkItem filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskhcell(string $CskhCell) Return the first ChildCstkItem filtered by the CskhCell column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdline(int $CskdLine) Return the first ChildCstkItem filtered by the CskdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByInititemnbr(string $InitItemNbr) Return the first ChildCstkItem filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdcustitem(string $CskdCustItem) Return the first ChildCstkItem filtered by the CskdCustItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdbin(string $CskdBin) Return the first ChildCstkItem filtered by the CskdBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdenterdate(string $CskdEnterDate) Return the first ChildCstkItem filtered by the CskdEnterDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdonhand(string $CskdOnHand) Return the first ChildCstkItem filtered by the CskdOnHand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdunitprice(string $CskdUnitPrice) Return the first ChildCstkItem filtered by the CskdUnitPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdestusag(string $CskdEstUsag) Return the first ChildCstkItem filtered by the CskdEstUsag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdordpnt(string $CskdOrdPnt) Return the first ChildCstkItem filtered by the CskdOrdPnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdordqty(string $CskdOrdQty) Return the first ChildCstkItem filtered by the CskdOrdQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdmaxqty(string $CskdMaxQty) Return the first ChildCstkItem filtered by the CskdMaxQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdcountdate(string $CskdCountDate) Return the first ChildCstkItem filtered by the CskdCountDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByCskdusaglast12(string $CskdUsagLast12) Return the first ChildCstkItem filtered by the CskdUsagLast12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCstkItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCstkItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCstkItem requireOneByDummy(string $dummy) Return the first ChildCstkItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCstkItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCstkItem objects based on current ModelCriteria
 * @method     ChildCstkItem[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCstkItem objects filtered by the ArcuCustId column
 * @method     ChildCstkItem[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildCstkItem objects filtered by the ArstShipId column
 * @method     ChildCstkItem[]|ObjectCollection findByCskhcell(string $CskhCell) Return ChildCstkItem objects filtered by the CskhCell column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdline(int $CskdLine) Return ChildCstkItem objects filtered by the CskdLine column
 * @method     ChildCstkItem[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildCstkItem objects filtered by the InitItemNbr column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdcustitem(string $CskdCustItem) Return ChildCstkItem objects filtered by the CskdCustItem column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdbin(string $CskdBin) Return ChildCstkItem objects filtered by the CskdBin column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdenterdate(string $CskdEnterDate) Return ChildCstkItem objects filtered by the CskdEnterDate column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdonhand(string $CskdOnHand) Return ChildCstkItem objects filtered by the CskdOnHand column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdunitprice(string $CskdUnitPrice) Return ChildCstkItem objects filtered by the CskdUnitPrice column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdestusag(string $CskdEstUsag) Return ChildCstkItem objects filtered by the CskdEstUsag column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdordpnt(string $CskdOrdPnt) Return ChildCstkItem objects filtered by the CskdOrdPnt column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdordqty(string $CskdOrdQty) Return ChildCstkItem objects filtered by the CskdOrdQty column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdmaxqty(string $CskdMaxQty) Return ChildCstkItem objects filtered by the CskdMaxQty column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdcountdate(string $CskdCountDate) Return ChildCstkItem objects filtered by the CskdCountDate column
 * @method     ChildCstkItem[]|ObjectCollection findByCskdusaglast12(string $CskdUsagLast12) Return ChildCstkItem objects filtered by the CskdUsagLast12 column
 * @method     ChildCstkItem[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCstkItem objects filtered by the DateUpdtd column
 * @method     ChildCstkItem[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCstkItem objects filtered by the TimeUpdtd column
 * @method     ChildCstkItem[]|ObjectCollection findByDummy(string $dummy) Return ChildCstkItem objects filtered by the dummy column
 * @method     ChildCstkItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CstkItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CstkItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CstkItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCstkItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCstkItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCstkItemQuery) {
            return $criteria;
        }
        $query = new ChildCstkItemQuery();
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
     * @param array[$ArcuCustId, $ArstShipId, $CskhCell, $CskdLine] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCstkItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CstkItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CstkItemTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildCstkItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, CskhCell, CskdLine, InitItemNbr, CskdCustItem, CskdBin, CskdEnterDate, CskdOnHand, CskdUnitPrice, CskdEstUsag, CskdOrdPnt, CskdOrdQty, CskdMaxQty, CskdCountDate, CskdUsagLast12, DateUpdtd, TimeUpdtd, dummy FROM cust_stock_det WHERE ArcuCustId = :p0 AND ArstShipId = :p1 AND CskhCell = :p2 AND CskdLine = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCstkItem $obj */
            $obj = new ChildCstkItem();
            $obj->hydrate($row);
            CstkItemTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildCstkItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CstkItemTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CstkItemTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CstkItemTableMap::COL_CSKHCELL, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CstkItemTableMap::COL_CSKDLINE, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CstkItemTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CstkItemTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CstkItemTableMap::COL_CSKHCELL, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CstkItemTableMap::COL_CSKDLINE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the CskhCell column
     *
     * Example usage:
     * <code>
     * $query->filterByCskhcell('fooValue');   // WHERE CskhCell = 'fooValue'
     * $query->filterByCskhcell('%fooValue%', Criteria::LIKE); // WHERE CskhCell LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskhcell The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskhcell($cskhcell = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskhcell)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKHCELL, $cskhcell, $comparison);
    }

    /**
     * Filter the query on the CskdLine column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdline(1234); // WHERE CskdLine = 1234
     * $query->filterByCskdline(array(12, 34)); // WHERE CskdLine IN (12, 34)
     * $query->filterByCskdline(array('min' => 12)); // WHERE CskdLine > 12
     * </code>
     *
     * @param     mixed $cskdline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdline($cskdline = null, $comparison = null)
    {
        if (is_array($cskdline)) {
            $useMinMax = false;
            if (isset($cskdline['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDLINE, $cskdline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdline['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDLINE, $cskdline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDLINE, $cskdline, $comparison);
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
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the CskdCustItem column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdcustitem('fooValue');   // WHERE CskdCustItem = 'fooValue'
     * $query->filterByCskdcustitem('%fooValue%', Criteria::LIKE); // WHERE CskdCustItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskdcustitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdcustitem($cskdcustitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskdcustitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDCUSTITEM, $cskdcustitem, $comparison);
    }

    /**
     * Filter the query on the CskdBin column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdbin('fooValue');   // WHERE CskdBin = 'fooValue'
     * $query->filterByCskdbin('%fooValue%', Criteria::LIKE); // WHERE CskdBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskdbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdbin($cskdbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskdbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDBIN, $cskdbin, $comparison);
    }

    /**
     * Filter the query on the CskdEnterDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdenterdate('fooValue');   // WHERE CskdEnterDate = 'fooValue'
     * $query->filterByCskdenterdate('%fooValue%', Criteria::LIKE); // WHERE CskdEnterDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskdenterdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdenterdate($cskdenterdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskdenterdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDENTERDATE, $cskdenterdate, $comparison);
    }

    /**
     * Filter the query on the CskdOnHand column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdonhand(1234); // WHERE CskdOnHand = 1234
     * $query->filterByCskdonhand(array(12, 34)); // WHERE CskdOnHand IN (12, 34)
     * $query->filterByCskdonhand(array('min' => 12)); // WHERE CskdOnHand > 12
     * </code>
     *
     * @param     mixed $cskdonhand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdonhand($cskdonhand = null, $comparison = null)
    {
        if (is_array($cskdonhand)) {
            $useMinMax = false;
            if (isset($cskdonhand['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDONHAND, $cskdonhand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdonhand['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDONHAND, $cskdonhand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDONHAND, $cskdonhand, $comparison);
    }

    /**
     * Filter the query on the CskdUnitPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdunitprice(1234); // WHERE CskdUnitPrice = 1234
     * $query->filterByCskdunitprice(array(12, 34)); // WHERE CskdUnitPrice IN (12, 34)
     * $query->filterByCskdunitprice(array('min' => 12)); // WHERE CskdUnitPrice > 12
     * </code>
     *
     * @param     mixed $cskdunitprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdunitprice($cskdunitprice = null, $comparison = null)
    {
        if (is_array($cskdunitprice)) {
            $useMinMax = false;
            if (isset($cskdunitprice['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDUNITPRICE, $cskdunitprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdunitprice['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDUNITPRICE, $cskdunitprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDUNITPRICE, $cskdunitprice, $comparison);
    }

    /**
     * Filter the query on the CskdEstUsag column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdestusag(1234); // WHERE CskdEstUsag = 1234
     * $query->filterByCskdestusag(array(12, 34)); // WHERE CskdEstUsag IN (12, 34)
     * $query->filterByCskdestusag(array('min' => 12)); // WHERE CskdEstUsag > 12
     * </code>
     *
     * @param     mixed $cskdestusag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdestusag($cskdestusag = null, $comparison = null)
    {
        if (is_array($cskdestusag)) {
            $useMinMax = false;
            if (isset($cskdestusag['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDESTUSAG, $cskdestusag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdestusag['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDESTUSAG, $cskdestusag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDESTUSAG, $cskdestusag, $comparison);
    }

    /**
     * Filter the query on the CskdOrdPnt column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdordpnt(1234); // WHERE CskdOrdPnt = 1234
     * $query->filterByCskdordpnt(array(12, 34)); // WHERE CskdOrdPnt IN (12, 34)
     * $query->filterByCskdordpnt(array('min' => 12)); // WHERE CskdOrdPnt > 12
     * </code>
     *
     * @param     mixed $cskdordpnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdordpnt($cskdordpnt = null, $comparison = null)
    {
        if (is_array($cskdordpnt)) {
            $useMinMax = false;
            if (isset($cskdordpnt['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDORDPNT, $cskdordpnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdordpnt['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDORDPNT, $cskdordpnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDORDPNT, $cskdordpnt, $comparison);
    }

    /**
     * Filter the query on the CskdOrdQty column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdordqty(1234); // WHERE CskdOrdQty = 1234
     * $query->filterByCskdordqty(array(12, 34)); // WHERE CskdOrdQty IN (12, 34)
     * $query->filterByCskdordqty(array('min' => 12)); // WHERE CskdOrdQty > 12
     * </code>
     *
     * @param     mixed $cskdordqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdordqty($cskdordqty = null, $comparison = null)
    {
        if (is_array($cskdordqty)) {
            $useMinMax = false;
            if (isset($cskdordqty['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDORDQTY, $cskdordqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdordqty['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDORDQTY, $cskdordqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDORDQTY, $cskdordqty, $comparison);
    }

    /**
     * Filter the query on the CskdMaxQty column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdmaxqty(1234); // WHERE CskdMaxQty = 1234
     * $query->filterByCskdmaxqty(array(12, 34)); // WHERE CskdMaxQty IN (12, 34)
     * $query->filterByCskdmaxqty(array('min' => 12)); // WHERE CskdMaxQty > 12
     * </code>
     *
     * @param     mixed $cskdmaxqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdmaxqty($cskdmaxqty = null, $comparison = null)
    {
        if (is_array($cskdmaxqty)) {
            $useMinMax = false;
            if (isset($cskdmaxqty['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDMAXQTY, $cskdmaxqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdmaxqty['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDMAXQTY, $cskdmaxqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDMAXQTY, $cskdmaxqty, $comparison);
    }

    /**
     * Filter the query on the CskdCountDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdcountdate('fooValue');   // WHERE CskdCountDate = 'fooValue'
     * $query->filterByCskdcountdate('%fooValue%', Criteria::LIKE); // WHERE CskdCountDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cskdcountdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdcountdate($cskdcountdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cskdcountdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDCOUNTDATE, $cskdcountdate, $comparison);
    }

    /**
     * Filter the query on the CskdUsagLast12 column
     *
     * Example usage:
     * <code>
     * $query->filterByCskdusaglast12(1234); // WHERE CskdUsagLast12 = 1234
     * $query->filterByCskdusaglast12(array(12, 34)); // WHERE CskdUsagLast12 IN (12, 34)
     * $query->filterByCskdusaglast12(array('min' => 12)); // WHERE CskdUsagLast12 > 12
     * </code>
     *
     * @param     mixed $cskdusaglast12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCskdusaglast12($cskdusaglast12 = null, $comparison = null)
    {
        if (is_array($cskdusaglast12)) {
            $useMinMax = false;
            if (isset($cskdusaglast12['min'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDUSAGLAST12, $cskdusaglast12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cskdusaglast12['max'])) {
                $this->addUsingAlias(CstkItemTableMap::COL_CSKDUSAGLAST12, $cskdusaglast12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_CSKDUSAGLAST12, $cskdusaglast12, $comparison);
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
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CstkItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(CstkItemTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CstkItemTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
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
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(CstkItemTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CstkItemTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto $customerShipto The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(CstkItemTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison)
                ->addUsingAlias(CstkItemTableMap::COL_ARSTSHIPID, $customerShipto->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \CstkHead object
     *
     * @param \CstkHead $cstkHead The related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCstkItemQuery The current query, for fluid interface
     */
    public function filterByCstkHead($cstkHead, $comparison = null)
    {
        if ($cstkHead instanceof \CstkHead) {
            return $this
                ->addUsingAlias(CstkItemTableMap::COL_ARCUCUSTID, $cstkHead->getArcucustid(), $comparison)
                ->addUsingAlias(CstkItemTableMap::COL_ARSTSHIPID, $cstkHead->getArstshipid(), $comparison)
                ->addUsingAlias(CstkItemTableMap::COL_CSKHCELL, $cstkHead->getCskhcell(), $comparison);
        } else {
            throw new PropelException('filterByCstkHead() only accepts arguments of type \CstkHead');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CstkHead relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function joinCstkHead($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CstkHead');

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
            $this->addJoinObject($join, 'CstkHead');
        }

        return $this;
    }

    /**
     * Use the CstkHead relation CstkHead object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CstkHeadQuery A secondary query class using the current class as primary query
     */
    public function useCstkHeadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCstkHead($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CstkHead', '\CstkHeadQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCstkItem $cstkItem Object to remove from the list of results
     *
     * @return $this|ChildCstkItemQuery The current query, for fluid interface
     */
    public function prune($cstkItem = null)
    {
        if ($cstkItem) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CstkItemTableMap::COL_ARCUCUSTID), $cstkItem->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CstkItemTableMap::COL_ARSTSHIPID), $cstkItem->getArstshipid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CstkItemTableMap::COL_CSKHCELL), $cstkItem->getCskhcell(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CstkItemTableMap::COL_CSKDLINE), $cstkItem->getCskdline(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the cust_stock_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CstkItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CstkItemTableMap::clearInstancePool();
            CstkItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CstkItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CstkItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CstkItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CstkItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CstkItemQuery
