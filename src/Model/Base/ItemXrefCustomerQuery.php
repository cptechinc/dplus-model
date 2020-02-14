<?php

namespace Base;

use \ItemXrefCustomer as ChildItemXrefCustomer;
use \ItemXrefCustomerQuery as ChildItemXrefCustomerQuery;
use \Exception;
use \PDO;
use Map\ItemXrefCustomerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'cust_item_xref' table.
 *
 *
 *
 * @method     ChildItemXrefCustomerQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustitemnbr($order = Criteria::ASC) Order by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomerQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefCustomerQuery orderByOexrretprice($order = Criteria::ASC) Order by the OexrRetPrice column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustprice($order = Criteria::ASC) Order by the OexrCustPrice column
 * @method     ChildItemXrefCustomerQuery orderByOexrqtypercase($order = Criteria::ASC) Order by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomerQuery orderByOexrinnerpackqty($order = Criteria::ASC) Order by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrouterpackqty($order = Criteria::ASC) Order by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrrounding($order = Criteria::ASC) Order by the OexrRounding column
 * @method     ChildItemXrefCustomerQuery orderByOexrshiptareqty($order = Criteria::ASC) Order by the OexrShipTareQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustitemdesc($order = Criteria::ASC) Order by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomerQuery orderByOexrconvert($order = Criteria::ASC) Order by the OexrConvert column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustitemdesc2($order = Criteria::ASC) Order by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomerQuery orderByOexrrevision($order = Criteria::ASC) Order by the OexrRevision column
 * @method     ChildItemXrefCustomerQuery orderByOexrpurchqty($order = Criteria::ASC) Order by the OexrPurchQty column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustpricuom($order = Criteria::ASC) Order by the OexrCustPricUom column
 * @method     ChildItemXrefCustomerQuery orderByOexrlabel1prtfmt($order = Criteria::ASC) Order by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomerQuery orderByOexrlabel2prtfmt($order = Criteria::ASC) Order by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomerQuery orderByOexrwght($order = Criteria::ASC) Order by the OexrWght column
 * @method     ChildItemXrefCustomerQuery orderByOexrcustuom($order = Criteria::ASC) Order by the OexrCustUom column
 * @method     ChildItemXrefCustomerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefCustomerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefCustomerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefCustomerQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustitemnbr() Group by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomerQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemXrefCustomerQuery groupByOexrretprice() Group by the OexrRetPrice column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustprice() Group by the OexrCustPrice column
 * @method     ChildItemXrefCustomerQuery groupByOexrqtypercase() Group by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomerQuery groupByOexrinnerpackqty() Group by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrouterpackqty() Group by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrrounding() Group by the OexrRounding column
 * @method     ChildItemXrefCustomerQuery groupByOexrshiptareqty() Group by the OexrShipTareQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustitemdesc() Group by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomerQuery groupByOexrconvert() Group by the OexrConvert column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustitemdesc2() Group by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomerQuery groupByOexrrevision() Group by the OexrRevision column
 * @method     ChildItemXrefCustomerQuery groupByOexrpurchqty() Group by the OexrPurchQty column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustpricuom() Group by the OexrCustPricUom column
 * @method     ChildItemXrefCustomerQuery groupByOexrlabel1prtfmt() Group by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomerQuery groupByOexrlabel2prtfmt() Group by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomerQuery groupByOexrwght() Group by the OexrWght column
 * @method     ChildItemXrefCustomerQuery groupByOexrcustuom() Group by the OexrCustUom column
 * @method     ChildItemXrefCustomerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefCustomerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefCustomerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefCustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefCustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefCustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefCustomerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefCustomerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefCustomerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefCustomerQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefCustomerQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefCustomerQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildItemXrefCustomerQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildItemXrefCustomerQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildItemXrefCustomerQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildItemXrefCustomerQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemXrefCustomerQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildItemXrefCustomerQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     \ItemMasterItemQuery|\CustomerQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefCustomer findOne(ConnectionInterface $con = null) Return the first ChildItemXrefCustomer matching the query
 * @method     ChildItemXrefCustomer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemXrefCustomer matching the query, or a new ChildItemXrefCustomer object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefCustomer findOneByArcucustid(string $ArcuCustId) Return the first ChildItemXrefCustomer filtered by the ArcuCustId column
 * @method     ChildItemXrefCustomer findOneByOexrcustitemnbr(string $OexrCustItemNbr) Return the first ChildItemXrefCustomer filtered by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomer findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefCustomer filtered by the InitItemNbr column
 * @method     ChildItemXrefCustomer findOneByOexrretprice(string $OexrRetPrice) Return the first ChildItemXrefCustomer filtered by the OexrRetPrice column
 * @method     ChildItemXrefCustomer findOneByOexrcustprice(string $OexrCustPrice) Return the first ChildItemXrefCustomer filtered by the OexrCustPrice column
 * @method     ChildItemXrefCustomer findOneByOexrqtypercase(int $OexrQtyPerCase) Return the first ChildItemXrefCustomer filtered by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomer findOneByOexrinnerpackqty(int $OexrInnerPackQty) Return the first ChildItemXrefCustomer filtered by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomer findOneByOexrouterpackqty(int $OexrOuterPackQty) Return the first ChildItemXrefCustomer filtered by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomer findOneByOexrrounding(string $OexrRounding) Return the first ChildItemXrefCustomer filtered by the OexrRounding column
 * @method     ChildItemXrefCustomer findOneByOexrshiptareqty(int $OexrShipTareQty) Return the first ChildItemXrefCustomer filtered by the OexrShipTareQty column
 * @method     ChildItemXrefCustomer findOneByOexrcustitemdesc(string $OexrCustItemDesc) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomer findOneByOexrconvert(string $OexrConvert) Return the first ChildItemXrefCustomer filtered by the OexrConvert column
 * @method     ChildItemXrefCustomer findOneByOexrcustitemdesc2(string $OexrCustItemDesc2) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomer findOneByOexrrevision(string $OexrRevision) Return the first ChildItemXrefCustomer filtered by the OexrRevision column
 * @method     ChildItemXrefCustomer findOneByOexrpurchqty(int $OexrPurchQty) Return the first ChildItemXrefCustomer filtered by the OexrPurchQty column
 * @method     ChildItemXrefCustomer findOneByOexrcustpricuom(string $OexrCustPricUom) Return the first ChildItemXrefCustomer filtered by the OexrCustPricUom column
 * @method     ChildItemXrefCustomer findOneByOexrlabel1prtfmt(string $OexrLabel1PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomer findOneByOexrlabel2prtfmt(string $OexrLabel2PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomer findOneByOexrwght(string $OexrWght) Return the first ChildItemXrefCustomer filtered by the OexrWght column
 * @method     ChildItemXrefCustomer findOneByOexrcustuom(string $OexrCustUom) Return the first ChildItemXrefCustomer filtered by the OexrCustUom column
 * @method     ChildItemXrefCustomer findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefCustomer filtered by the DateUpdtd column
 * @method     ChildItemXrefCustomer findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefCustomer filtered by the TimeUpdtd column
 * @method     ChildItemXrefCustomer findOneByDummy(string $dummy) Return the first ChildItemXrefCustomer filtered by the dummy column *

 * @method     ChildItemXrefCustomer requirePk($key, ConnectionInterface $con = null) Return the ChildItemXrefCustomer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOne(ConnectionInterface $con = null) Return the first ChildItemXrefCustomer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefCustomer requireOneByArcucustid(string $ArcuCustId) Return the first ChildItemXrefCustomer filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustitemnbr(string $OexrCustItemNbr) Return the first ChildItemXrefCustomer filtered by the OexrCustItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemXrefCustomer filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrretprice(string $OexrRetPrice) Return the first ChildItemXrefCustomer filtered by the OexrRetPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustprice(string $OexrCustPrice) Return the first ChildItemXrefCustomer filtered by the OexrCustPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrqtypercase(int $OexrQtyPerCase) Return the first ChildItemXrefCustomer filtered by the OexrQtyPerCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrinnerpackqty(int $OexrInnerPackQty) Return the first ChildItemXrefCustomer filtered by the OexrInnerPackQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrouterpackqty(int $OexrOuterPackQty) Return the first ChildItemXrefCustomer filtered by the OexrOuterPackQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrrounding(string $OexrRounding) Return the first ChildItemXrefCustomer filtered by the OexrRounding column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrshiptareqty(int $OexrShipTareQty) Return the first ChildItemXrefCustomer filtered by the OexrShipTareQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustitemdesc(string $OexrCustItemDesc) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrconvert(string $OexrConvert) Return the first ChildItemXrefCustomer filtered by the OexrConvert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustitemdesc2(string $OexrCustItemDesc2) Return the first ChildItemXrefCustomer filtered by the OexrCustItemDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrrevision(string $OexrRevision) Return the first ChildItemXrefCustomer filtered by the OexrRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrpurchqty(int $OexrPurchQty) Return the first ChildItemXrefCustomer filtered by the OexrPurchQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustpricuom(string $OexrCustPricUom) Return the first ChildItemXrefCustomer filtered by the OexrCustPricUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrlabel1prtfmt(string $OexrLabel1PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel1PrtFmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrlabel2prtfmt(string $OexrLabel2PrtFmt) Return the first ChildItemXrefCustomer filtered by the OexrLabel2PrtFmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrwght(string $OexrWght) Return the first ChildItemXrefCustomer filtered by the OexrWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByOexrcustuom(string $OexrCustUom) Return the first ChildItemXrefCustomer filtered by the OexrCustUom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefCustomer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefCustomer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefCustomer requireOneByDummy(string $dummy) Return the first ChildItemXrefCustomer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefCustomer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemXrefCustomer objects based on current ModelCriteria
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildItemXrefCustomer objects filtered by the ArcuCustId column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrcustitemnbr(string $OexrCustItemNbr) Return ChildItemXrefCustomer objects filtered by the OexrCustItemNbr column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemXrefCustomer objects filtered by the InitItemNbr column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrretprice(string $OexrRetPrice) Return ChildItemXrefCustomer objects filtered by the OexrRetPrice column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrcustprice(string $OexrCustPrice) Return ChildItemXrefCustomer objects filtered by the OexrCustPrice column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrqtypercase(int $OexrQtyPerCase) Return ChildItemXrefCustomer objects filtered by the OexrQtyPerCase column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrinnerpackqty(int $OexrInnerPackQty) Return ChildItemXrefCustomer objects filtered by the OexrInnerPackQty column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrouterpackqty(int $OexrOuterPackQty) Return ChildItemXrefCustomer objects filtered by the OexrOuterPackQty column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrrounding(string $OexrRounding) Return ChildItemXrefCustomer objects filtered by the OexrRounding column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrshiptareqty(int $OexrShipTareQty) Return ChildItemXrefCustomer objects filtered by the OexrShipTareQty column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrcustitemdesc(string $OexrCustItemDesc) Return ChildItemXrefCustomer objects filtered by the OexrCustItemDesc column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrconvert(string $OexrConvert) Return ChildItemXrefCustomer objects filtered by the OexrConvert column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrcustitemdesc2(string $OexrCustItemDesc2) Return ChildItemXrefCustomer objects filtered by the OexrCustItemDesc2 column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrrevision(string $OexrRevision) Return ChildItemXrefCustomer objects filtered by the OexrRevision column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrpurchqty(int $OexrPurchQty) Return ChildItemXrefCustomer objects filtered by the OexrPurchQty column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrcustpricuom(string $OexrCustPricUom) Return ChildItemXrefCustomer objects filtered by the OexrCustPricUom column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrlabel1prtfmt(string $OexrLabel1PrtFmt) Return ChildItemXrefCustomer objects filtered by the OexrLabel1PrtFmt column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrlabel2prtfmt(string $OexrLabel2PrtFmt) Return ChildItemXrefCustomer objects filtered by the OexrLabel2PrtFmt column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrwght(string $OexrWght) Return ChildItemXrefCustomer objects filtered by the OexrWght column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByOexrcustuom(string $OexrCustUom) Return ChildItemXrefCustomer objects filtered by the OexrCustUom column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemXrefCustomer objects filtered by the DateUpdtd column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemXrefCustomer objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefCustomer[]|ObjectCollection findByDummy(string $dummy) Return ChildItemXrefCustomer objects filtered by the dummy column
 * @method     ChildItemXrefCustomer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemXrefCustomerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefCustomerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefCustomer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefCustomerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefCustomerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemXrefCustomerQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefCustomerQuery();
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
     * @param array[$ArcuCustId, $OexrCustItemNbr] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefCustomer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefCustomerTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildItemXrefCustomer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, OexrCustItemNbr, InitItemNbr, OexrRetPrice, OexrCustPrice, OexrQtyPerCase, OexrInnerPackQty, OexrOuterPackQty, OexrRounding, OexrShipTareQty, OexrCustItemDesc, OexrConvert, OexrCustItemDesc2, OexrRevision, OexrPurchQty, OexrCustPricUom, OexrLabel1PrtFmt, OexrLabel2PrtFmt, OexrWght, OexrCustUom, DateUpdtd, TimeUpdtd, dummy FROM cust_item_xref WHERE ArcuCustId = :p0 AND OexrCustItemNbr = :p1';
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
            /** @var ChildItemXrefCustomer $obj */
            $obj = new ChildItemXrefCustomer();
            $obj->hydrate($row);
            ItemXrefCustomerTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildItemXrefCustomer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the OexrCustItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustitemnbr('fooValue');   // WHERE OexrCustItemNbr = 'fooValue'
     * $query->filterByOexrcustitemnbr('%fooValue%', Criteria::LIKE); // WHERE OexrCustItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrcustitemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrcustitemnbr($oexrcustitemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustitemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR, $oexrcustitemnbr, $comparison);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the OexrRetPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrretprice(1234); // WHERE OexrRetPrice = 1234
     * $query->filterByOexrretprice(array(12, 34)); // WHERE OexrRetPrice IN (12, 34)
     * $query->filterByOexrretprice(array('min' => 12)); // WHERE OexrRetPrice > 12
     * </code>
     *
     * @param     mixed $oexrretprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrretprice($oexrretprice = null, $comparison = null)
    {
        if (is_array($oexrretprice)) {
            $useMinMax = false;
            if (isset($oexrretprice['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $oexrretprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrretprice['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $oexrretprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRRETPRICE, $oexrretprice, $comparison);
    }

    /**
     * Filter the query on the OexrCustPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustprice(1234); // WHERE OexrCustPrice = 1234
     * $query->filterByOexrcustprice(array(12, 34)); // WHERE OexrCustPrice IN (12, 34)
     * $query->filterByOexrcustprice(array('min' => 12)); // WHERE OexrCustPrice > 12
     * </code>
     *
     * @param     mixed $oexrcustprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrcustprice($oexrcustprice = null, $comparison = null)
    {
        if (is_array($oexrcustprice)) {
            $useMinMax = false;
            if (isset($oexrcustprice['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $oexrcustprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrcustprice['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $oexrcustprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICE, $oexrcustprice, $comparison);
    }

    /**
     * Filter the query on the OexrQtyPerCase column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrqtypercase(1234); // WHERE OexrQtyPerCase = 1234
     * $query->filterByOexrqtypercase(array(12, 34)); // WHERE OexrQtyPerCase IN (12, 34)
     * $query->filterByOexrqtypercase(array('min' => 12)); // WHERE OexrQtyPerCase > 12
     * </code>
     *
     * @param     mixed $oexrqtypercase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrqtypercase($oexrqtypercase = null, $comparison = null)
    {
        if (is_array($oexrqtypercase)) {
            $useMinMax = false;
            if (isset($oexrqtypercase['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $oexrqtypercase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrqtypercase['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $oexrqtypercase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRQTYPERCASE, $oexrqtypercase, $comparison);
    }

    /**
     * Filter the query on the OexrInnerPackQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrinnerpackqty(1234); // WHERE OexrInnerPackQty = 1234
     * $query->filterByOexrinnerpackqty(array(12, 34)); // WHERE OexrInnerPackQty IN (12, 34)
     * $query->filterByOexrinnerpackqty(array('min' => 12)); // WHERE OexrInnerPackQty > 12
     * </code>
     *
     * @param     mixed $oexrinnerpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrinnerpackqty($oexrinnerpackqty = null, $comparison = null)
    {
        if (is_array($oexrinnerpackqty)) {
            $useMinMax = false;
            if (isset($oexrinnerpackqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $oexrinnerpackqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrinnerpackqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $oexrinnerpackqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRINNERPACKQTY, $oexrinnerpackqty, $comparison);
    }

    /**
     * Filter the query on the OexrOuterPackQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrouterpackqty(1234); // WHERE OexrOuterPackQty = 1234
     * $query->filterByOexrouterpackqty(array(12, 34)); // WHERE OexrOuterPackQty IN (12, 34)
     * $query->filterByOexrouterpackqty(array('min' => 12)); // WHERE OexrOuterPackQty > 12
     * </code>
     *
     * @param     mixed $oexrouterpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrouterpackqty($oexrouterpackqty = null, $comparison = null)
    {
        if (is_array($oexrouterpackqty)) {
            $useMinMax = false;
            if (isset($oexrouterpackqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $oexrouterpackqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrouterpackqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $oexrouterpackqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXROUTERPACKQTY, $oexrouterpackqty, $comparison);
    }

    /**
     * Filter the query on the OexrRounding column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrrounding('fooValue');   // WHERE OexrRounding = 'fooValue'
     * $query->filterByOexrrounding('%fooValue%', Criteria::LIKE); // WHERE OexrRounding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrrounding The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrrounding($oexrrounding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrrounding)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRROUNDING, $oexrrounding, $comparison);
    }

    /**
     * Filter the query on the OexrShipTareQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrshiptareqty(1234); // WHERE OexrShipTareQty = 1234
     * $query->filterByOexrshiptareqty(array(12, 34)); // WHERE OexrShipTareQty IN (12, 34)
     * $query->filterByOexrshiptareqty(array('min' => 12)); // WHERE OexrShipTareQty > 12
     * </code>
     *
     * @param     mixed $oexrshiptareqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrshiptareqty($oexrshiptareqty = null, $comparison = null)
    {
        if (is_array($oexrshiptareqty)) {
            $useMinMax = false;
            if (isset($oexrshiptareqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $oexrshiptareqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrshiptareqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $oexrshiptareqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRSHIPTAREQTY, $oexrshiptareqty, $comparison);
    }

    /**
     * Filter the query on the OexrCustItemDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustitemdesc('fooValue');   // WHERE OexrCustItemDesc = 'fooValue'
     * $query->filterByOexrcustitemdesc('%fooValue%', Criteria::LIKE); // WHERE OexrCustItemDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrcustitemdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrcustitemdesc($oexrcustitemdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustitemdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC, $oexrcustitemdesc, $comparison);
    }

    /**
     * Filter the query on the OexrConvert column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrconvert(1234); // WHERE OexrConvert = 1234
     * $query->filterByOexrconvert(array(12, 34)); // WHERE OexrConvert IN (12, 34)
     * $query->filterByOexrconvert(array('min' => 12)); // WHERE OexrConvert > 12
     * </code>
     *
     * @param     mixed $oexrconvert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrconvert($oexrconvert = null, $comparison = null)
    {
        if (is_array($oexrconvert)) {
            $useMinMax = false;
            if (isset($oexrconvert['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $oexrconvert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrconvert['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $oexrconvert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCONVERT, $oexrconvert, $comparison);
    }

    /**
     * Filter the query on the OexrCustItemDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustitemdesc2('fooValue');   // WHERE OexrCustItemDesc2 = 'fooValue'
     * $query->filterByOexrcustitemdesc2('%fooValue%', Criteria::LIKE); // WHERE OexrCustItemDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrcustitemdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrcustitemdesc2($oexrcustitemdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustitemdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMDESC2, $oexrcustitemdesc2, $comparison);
    }

    /**
     * Filter the query on the OexrRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrrevision('fooValue');   // WHERE OexrRevision = 'fooValue'
     * $query->filterByOexrrevision('%fooValue%', Criteria::LIKE); // WHERE OexrRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrrevision($oexrrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRREVISION, $oexrrevision, $comparison);
    }

    /**
     * Filter the query on the OexrPurchQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrpurchqty(1234); // WHERE OexrPurchQty = 1234
     * $query->filterByOexrpurchqty(array(12, 34)); // WHERE OexrPurchQty IN (12, 34)
     * $query->filterByOexrpurchqty(array('min' => 12)); // WHERE OexrPurchQty > 12
     * </code>
     *
     * @param     mixed $oexrpurchqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrpurchqty($oexrpurchqty = null, $comparison = null)
    {
        if (is_array($oexrpurchqty)) {
            $useMinMax = false;
            if (isset($oexrpurchqty['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $oexrpurchqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrpurchqty['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $oexrpurchqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRPURCHQTY, $oexrpurchqty, $comparison);
    }

    /**
     * Filter the query on the OexrCustPricUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustpricuom('fooValue');   // WHERE OexrCustPricUom = 'fooValue'
     * $query->filterByOexrcustpricuom('%fooValue%', Criteria::LIKE); // WHERE OexrCustPricUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrcustpricuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrcustpricuom($oexrcustpricuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustpricuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTPRICUOM, $oexrcustpricuom, $comparison);
    }

    /**
     * Filter the query on the OexrLabel1PrtFmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrlabel1prtfmt('fooValue');   // WHERE OexrLabel1PrtFmt = 'fooValue'
     * $query->filterByOexrlabel1prtfmt('%fooValue%', Criteria::LIKE); // WHERE OexrLabel1PrtFmt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrlabel1prtfmt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrlabel1prtfmt($oexrlabel1prtfmt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrlabel1prtfmt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRLABEL1PRTFMT, $oexrlabel1prtfmt, $comparison);
    }

    /**
     * Filter the query on the OexrLabel2PrtFmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrlabel2prtfmt('fooValue');   // WHERE OexrLabel2PrtFmt = 'fooValue'
     * $query->filterByOexrlabel2prtfmt('%fooValue%', Criteria::LIKE); // WHERE OexrLabel2PrtFmt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrlabel2prtfmt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrlabel2prtfmt($oexrlabel2prtfmt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrlabel2prtfmt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRLABEL2PRTFMT, $oexrlabel2prtfmt, $comparison);
    }

    /**
     * Filter the query on the OexrWght column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrwght(1234); // WHERE OexrWght = 1234
     * $query->filterByOexrwght(array(12, 34)); // WHERE OexrWght IN (12, 34)
     * $query->filterByOexrwght(array('min' => 12)); // WHERE OexrWght > 12
     * </code>
     *
     * @param     mixed $oexrwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrwght($oexrwght = null, $comparison = null)
    {
        if (is_array($oexrwght)) {
            $useMinMax = false;
            if (isset($oexrwght['min'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRWGHT, $oexrwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oexrwght['max'])) {
                $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRWGHT, $oexrwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRWGHT, $oexrwght, $comparison);
    }

    /**
     * Filter the query on the OexrCustUom column
     *
     * Example usage:
     * <code>
     * $query->filterByOexrcustuom('fooValue');   // WHERE OexrCustUom = 'fooValue'
     * $query->filterByOexrcustuom('%fooValue%', Criteria::LIKE); // WHERE OexrCustUom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oexrcustuom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByOexrcustuom($oexrcustuom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oexrcustuom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_OEXRCUSTUOM, $oexrcustuom, $comparison);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefCustomerTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemXrefCustomerTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefCustomerTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
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
     * @return ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefCustomerTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
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
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildItemXrefCustomer $itemXrefCustomer Object to remove from the list of results
     *
     * @return $this|ChildItemXrefCustomerQuery The current query, for fluid interface
     */
    public function prune($itemXrefCustomer = null)
    {
        if ($itemXrefCustomer) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefCustomerTableMap::COL_ARCUCUSTID), $itemXrefCustomer->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefCustomerTableMap::COL_OEXRCUSTITEMNBR), $itemXrefCustomer->getOexrcustitemnbr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the cust_item_xref table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefCustomerTableMap::clearInstancePool();
            ItemXrefCustomerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefCustomerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefCustomerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefCustomerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefCustomerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemXrefCustomerQuery
