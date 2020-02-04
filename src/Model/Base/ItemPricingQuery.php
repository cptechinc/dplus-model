<?php

namespace Base;

use \ItemPricing as ChildItemPricing;
use \ItemPricingQuery as ChildItemPricingQuery;
use \Exception;
use \PDO;
use Map\ItemPricingTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_item_price' table.
 *
 *
 *
 * @method     ChildItemPricingQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemPricingQuery orderByInprpricbase($order = Criteria::ASC) Order by the InprPricBase column
 * @method     ChildItemPricingQuery orderByInprpricunit1($order = Criteria::ASC) Order by the InprPricUnit1 column
 * @method     ChildItemPricingQuery orderByInprpricpric1($order = Criteria::ASC) Order by the InprPricPric1 column
 * @method     ChildItemPricingQuery orderByInprpricunit2($order = Criteria::ASC) Order by the InprPricUnit2 column
 * @method     ChildItemPricingQuery orderByInprpricpric2($order = Criteria::ASC) Order by the InprPricPric2 column
 * @method     ChildItemPricingQuery orderByInprpricunit3($order = Criteria::ASC) Order by the InprPricUnit3 column
 * @method     ChildItemPricingQuery orderByInprpricpric3($order = Criteria::ASC) Order by the InprPricPric3 column
 * @method     ChildItemPricingQuery orderByInprpricunit4($order = Criteria::ASC) Order by the InprPricUnit4 column
 * @method     ChildItemPricingQuery orderByInprpricpric4($order = Criteria::ASC) Order by the InprPricPric4 column
 * @method     ChildItemPricingQuery orderByInprpricunit5($order = Criteria::ASC) Order by the InprPricUnit5 column
 * @method     ChildItemPricingQuery orderByInprpricpric5($order = Criteria::ASC) Order by the InprPricPric5 column
 * @method     ChildItemPricingQuery orderByInprpricunit6($order = Criteria::ASC) Order by the InprPricUnit6 column
 * @method     ChildItemPricingQuery orderByInprpricpric6($order = Criteria::ASC) Order by the InprPricPric6 column
 * @method     ChildItemPricingQuery orderByInprpricunit7($order = Criteria::ASC) Order by the InprPricUnit7 column
 * @method     ChildItemPricingQuery orderByInprpricpric7($order = Criteria::ASC) Order by the InprPricPric7 column
 * @method     ChildItemPricingQuery orderByInprpricunit8($order = Criteria::ASC) Order by the InprPricUnit8 column
 * @method     ChildItemPricingQuery orderByInprpricpric8($order = Criteria::ASC) Order by the InprPricPric8 column
 * @method     ChildItemPricingQuery orderByInprpricunit9($order = Criteria::ASC) Order by the InprPricUnit9 column
 * @method     ChildItemPricingQuery orderByInprpricpric9($order = Criteria::ASC) Order by the InprPricPric9 column
 * @method     ChildItemPricingQuery orderByInprpricunit10($order = Criteria::ASC) Order by the InprPricUnit10 column
 * @method     ChildItemPricingQuery orderByInprpricpric10($order = Criteria::ASC) Order by the InprPricPric10 column
 * @method     ChildItemPricingQuery orderByInprpriclastdate($order = Criteria::ASC) Order by the InprPricLastDate column
 * @method     ChildItemPricingQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemPricingQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemPricingQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemPricingQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemPricingQuery groupByInprpricbase() Group by the InprPricBase column
 * @method     ChildItemPricingQuery groupByInprpricunit1() Group by the InprPricUnit1 column
 * @method     ChildItemPricingQuery groupByInprpricpric1() Group by the InprPricPric1 column
 * @method     ChildItemPricingQuery groupByInprpricunit2() Group by the InprPricUnit2 column
 * @method     ChildItemPricingQuery groupByInprpricpric2() Group by the InprPricPric2 column
 * @method     ChildItemPricingQuery groupByInprpricunit3() Group by the InprPricUnit3 column
 * @method     ChildItemPricingQuery groupByInprpricpric3() Group by the InprPricPric3 column
 * @method     ChildItemPricingQuery groupByInprpricunit4() Group by the InprPricUnit4 column
 * @method     ChildItemPricingQuery groupByInprpricpric4() Group by the InprPricPric4 column
 * @method     ChildItemPricingQuery groupByInprpricunit5() Group by the InprPricUnit5 column
 * @method     ChildItemPricingQuery groupByInprpricpric5() Group by the InprPricPric5 column
 * @method     ChildItemPricingQuery groupByInprpricunit6() Group by the InprPricUnit6 column
 * @method     ChildItemPricingQuery groupByInprpricpric6() Group by the InprPricPric6 column
 * @method     ChildItemPricingQuery groupByInprpricunit7() Group by the InprPricUnit7 column
 * @method     ChildItemPricingQuery groupByInprpricpric7() Group by the InprPricPric7 column
 * @method     ChildItemPricingQuery groupByInprpricunit8() Group by the InprPricUnit8 column
 * @method     ChildItemPricingQuery groupByInprpricpric8() Group by the InprPricPric8 column
 * @method     ChildItemPricingQuery groupByInprpricunit9() Group by the InprPricUnit9 column
 * @method     ChildItemPricingQuery groupByInprpricpric9() Group by the InprPricPric9 column
 * @method     ChildItemPricingQuery groupByInprpricunit10() Group by the InprPricUnit10 column
 * @method     ChildItemPricingQuery groupByInprpricpric10() Group by the InprPricPric10 column
 * @method     ChildItemPricingQuery groupByInprpriclastdate() Group by the InprPricLastDate column
 * @method     ChildItemPricingQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemPricingQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemPricingQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemPricingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemPricingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemPricingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemPricingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemPricingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemPricingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemPricingQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemPricingQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemPricingQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemPricingQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemPricingQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemPricingQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemPricingQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemPricing findOne(ConnectionInterface $con = null) Return the first ChildItemPricing matching the query
 * @method     ChildItemPricing findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemPricing matching the query, or a new ChildItemPricing object populated from the query conditions when no match is found
 *
 * @method     ChildItemPricing findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemPricing filtered by the InitItemNbr column
 * @method     ChildItemPricing findOneByInprpricbase(string $InprPricBase) Return the first ChildItemPricing filtered by the InprPricBase column
 * @method     ChildItemPricing findOneByInprpricunit1(int $InprPricUnit1) Return the first ChildItemPricing filtered by the InprPricUnit1 column
 * @method     ChildItemPricing findOneByInprpricpric1(string $InprPricPric1) Return the first ChildItemPricing filtered by the InprPricPric1 column
 * @method     ChildItemPricing findOneByInprpricunit2(int $InprPricUnit2) Return the first ChildItemPricing filtered by the InprPricUnit2 column
 * @method     ChildItemPricing findOneByInprpricpric2(string $InprPricPric2) Return the first ChildItemPricing filtered by the InprPricPric2 column
 * @method     ChildItemPricing findOneByInprpricunit3(int $InprPricUnit3) Return the first ChildItemPricing filtered by the InprPricUnit3 column
 * @method     ChildItemPricing findOneByInprpricpric3(string $InprPricPric3) Return the first ChildItemPricing filtered by the InprPricPric3 column
 * @method     ChildItemPricing findOneByInprpricunit4(int $InprPricUnit4) Return the first ChildItemPricing filtered by the InprPricUnit4 column
 * @method     ChildItemPricing findOneByInprpricpric4(string $InprPricPric4) Return the first ChildItemPricing filtered by the InprPricPric4 column
 * @method     ChildItemPricing findOneByInprpricunit5(int $InprPricUnit5) Return the first ChildItemPricing filtered by the InprPricUnit5 column
 * @method     ChildItemPricing findOneByInprpricpric5(string $InprPricPric5) Return the first ChildItemPricing filtered by the InprPricPric5 column
 * @method     ChildItemPricing findOneByInprpricunit6(int $InprPricUnit6) Return the first ChildItemPricing filtered by the InprPricUnit6 column
 * @method     ChildItemPricing findOneByInprpricpric6(string $InprPricPric6) Return the first ChildItemPricing filtered by the InprPricPric6 column
 * @method     ChildItemPricing findOneByInprpricunit7(int $InprPricUnit7) Return the first ChildItemPricing filtered by the InprPricUnit7 column
 * @method     ChildItemPricing findOneByInprpricpric7(string $InprPricPric7) Return the first ChildItemPricing filtered by the InprPricPric7 column
 * @method     ChildItemPricing findOneByInprpricunit8(int $InprPricUnit8) Return the first ChildItemPricing filtered by the InprPricUnit8 column
 * @method     ChildItemPricing findOneByInprpricpric8(string $InprPricPric8) Return the first ChildItemPricing filtered by the InprPricPric8 column
 * @method     ChildItemPricing findOneByInprpricunit9(int $InprPricUnit9) Return the first ChildItemPricing filtered by the InprPricUnit9 column
 * @method     ChildItemPricing findOneByInprpricpric9(string $InprPricPric9) Return the first ChildItemPricing filtered by the InprPricPric9 column
 * @method     ChildItemPricing findOneByInprpricunit10(int $InprPricUnit10) Return the first ChildItemPricing filtered by the InprPricUnit10 column
 * @method     ChildItemPricing findOneByInprpricpric10(string $InprPricPric10) Return the first ChildItemPricing filtered by the InprPricPric10 column
 * @method     ChildItemPricing findOneByInprpriclastdate(string $InprPricLastDate) Return the first ChildItemPricing filtered by the InprPricLastDate column
 * @method     ChildItemPricing findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemPricing filtered by the DateUpdtd column
 * @method     ChildItemPricing findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemPricing filtered by the TimeUpdtd column
 * @method     ChildItemPricing findOneByDummy(string $dummy) Return the first ChildItemPricing filtered by the dummy column *

 * @method     ChildItemPricing requirePk($key, ConnectionInterface $con = null) Return the ChildItemPricing by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOne(ConnectionInterface $con = null) Return the first ChildItemPricing matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemPricing requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemPricing filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricbase(string $InprPricBase) Return the first ChildItemPricing filtered by the InprPricBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit1(int $InprPricUnit1) Return the first ChildItemPricing filtered by the InprPricUnit1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric1(string $InprPricPric1) Return the first ChildItemPricing filtered by the InprPricPric1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit2(int $InprPricUnit2) Return the first ChildItemPricing filtered by the InprPricUnit2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric2(string $InprPricPric2) Return the first ChildItemPricing filtered by the InprPricPric2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit3(int $InprPricUnit3) Return the first ChildItemPricing filtered by the InprPricUnit3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric3(string $InprPricPric3) Return the first ChildItemPricing filtered by the InprPricPric3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit4(int $InprPricUnit4) Return the first ChildItemPricing filtered by the InprPricUnit4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric4(string $InprPricPric4) Return the first ChildItemPricing filtered by the InprPricPric4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit5(int $InprPricUnit5) Return the first ChildItemPricing filtered by the InprPricUnit5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric5(string $InprPricPric5) Return the first ChildItemPricing filtered by the InprPricPric5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit6(int $InprPricUnit6) Return the first ChildItemPricing filtered by the InprPricUnit6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric6(string $InprPricPric6) Return the first ChildItemPricing filtered by the InprPricPric6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit7(int $InprPricUnit7) Return the first ChildItemPricing filtered by the InprPricUnit7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric7(string $InprPricPric7) Return the first ChildItemPricing filtered by the InprPricPric7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit8(int $InprPricUnit8) Return the first ChildItemPricing filtered by the InprPricUnit8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric8(string $InprPricPric8) Return the first ChildItemPricing filtered by the InprPricPric8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit9(int $InprPricUnit9) Return the first ChildItemPricing filtered by the InprPricUnit9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric9(string $InprPricPric9) Return the first ChildItemPricing filtered by the InprPricPric9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricunit10(int $InprPricUnit10) Return the first ChildItemPricing filtered by the InprPricUnit10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpricpric10(string $InprPricPric10) Return the first ChildItemPricing filtered by the InprPricPric10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByInprpriclastdate(string $InprPricLastDate) Return the first ChildItemPricing filtered by the InprPricLastDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemPricing filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemPricing filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemPricing requireOneByDummy(string $dummy) Return the first ChildItemPricing filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemPricing[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemPricing objects based on current ModelCriteria
 * @method     ChildItemPricing[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemPricing objects filtered by the InitItemNbr column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricbase(string $InprPricBase) Return ChildItemPricing objects filtered by the InprPricBase column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit1(int $InprPricUnit1) Return ChildItemPricing objects filtered by the InprPricUnit1 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric1(string $InprPricPric1) Return ChildItemPricing objects filtered by the InprPricPric1 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit2(int $InprPricUnit2) Return ChildItemPricing objects filtered by the InprPricUnit2 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric2(string $InprPricPric2) Return ChildItemPricing objects filtered by the InprPricPric2 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit3(int $InprPricUnit3) Return ChildItemPricing objects filtered by the InprPricUnit3 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric3(string $InprPricPric3) Return ChildItemPricing objects filtered by the InprPricPric3 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit4(int $InprPricUnit4) Return ChildItemPricing objects filtered by the InprPricUnit4 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric4(string $InprPricPric4) Return ChildItemPricing objects filtered by the InprPricPric4 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit5(int $InprPricUnit5) Return ChildItemPricing objects filtered by the InprPricUnit5 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric5(string $InprPricPric5) Return ChildItemPricing objects filtered by the InprPricPric5 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit6(int $InprPricUnit6) Return ChildItemPricing objects filtered by the InprPricUnit6 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric6(string $InprPricPric6) Return ChildItemPricing objects filtered by the InprPricPric6 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit7(int $InprPricUnit7) Return ChildItemPricing objects filtered by the InprPricUnit7 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric7(string $InprPricPric7) Return ChildItemPricing objects filtered by the InprPricPric7 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit8(int $InprPricUnit8) Return ChildItemPricing objects filtered by the InprPricUnit8 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric8(string $InprPricPric8) Return ChildItemPricing objects filtered by the InprPricPric8 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit9(int $InprPricUnit9) Return ChildItemPricing objects filtered by the InprPricUnit9 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric9(string $InprPricPric9) Return ChildItemPricing objects filtered by the InprPricPric9 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricunit10(int $InprPricUnit10) Return ChildItemPricing objects filtered by the InprPricUnit10 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpricpric10(string $InprPricPric10) Return ChildItemPricing objects filtered by the InprPricPric10 column
 * @method     ChildItemPricing[]|ObjectCollection findByInprpriclastdate(string $InprPricLastDate) Return ChildItemPricing objects filtered by the InprPricLastDate column
 * @method     ChildItemPricing[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemPricing objects filtered by the DateUpdtd column
 * @method     ChildItemPricing[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemPricing objects filtered by the TimeUpdtd column
 * @method     ChildItemPricing[]|ObjectCollection findByDummy(string $dummy) Return ChildItemPricing objects filtered by the dummy column
 * @method     ChildItemPricing[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemPricingQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemPricingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemPricing', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemPricingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemPricingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemPricingQuery) {
            return $criteria;
        }
        $query = new ChildItemPricingQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemPricing|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemPricingTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildItemPricing A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InprPricBase, InprPricUnit1, InprPricPric1, InprPricUnit2, InprPricPric2, InprPricUnit3, InprPricPric3, InprPricUnit4, InprPricPric4, InprPricUnit5, InprPricPric5, InprPricUnit6, InprPricPric6, InprPricUnit7, InprPricPric7, InprPricUnit8, InprPricPric8, InprPricUnit9, InprPricPric9, InprPricUnit10, InprPricPric10, InprPricLastDate, DateUpdtd, TimeUpdtd, dummy FROM inv_item_price WHERE InitItemNbr = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemPricing $obj */
            $obj = new ChildItemPricing();
            $obj->hydrate($row);
            ItemPricingTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildItemPricing|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ItemPricingTableMap::COL_INITITEMNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ItemPricingTableMap::COL_INITITEMNBR, $keys, Criteria::IN);
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
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InprPricBase column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricbase(1234); // WHERE InprPricBase = 1234
     * $query->filterByInprpricbase(array(12, 34)); // WHERE InprPricBase IN (12, 34)
     * $query->filterByInprpricbase(array('min' => 12)); // WHERE InprPricBase > 12
     * </code>
     *
     * @param     mixed $inprpricbase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricbase($inprpricbase = null, $comparison = null)
    {
        if (is_array($inprpricbase)) {
            $useMinMax = false;
            if (isset($inprpricbase['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICBASE, $inprpricbase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricbase['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICBASE, $inprpricbase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICBASE, $inprpricbase, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit1(1234); // WHERE InprPricUnit1 = 1234
     * $query->filterByInprpricunit1(array(12, 34)); // WHERE InprPricUnit1 IN (12, 34)
     * $query->filterByInprpricunit1(array('min' => 12)); // WHERE InprPricUnit1 > 12
     * </code>
     *
     * @param     mixed $inprpricunit1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit1($inprpricunit1 = null, $comparison = null)
    {
        if (is_array($inprpricunit1)) {
            $useMinMax = false;
            if (isset($inprpricunit1['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT1, $inprpricunit1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit1['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT1, $inprpricunit1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT1, $inprpricunit1, $comparison);
    }

    /**
     * Filter the query on the InprPricPric1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric1(1234); // WHERE InprPricPric1 = 1234
     * $query->filterByInprpricpric1(array(12, 34)); // WHERE InprPricPric1 IN (12, 34)
     * $query->filterByInprpricpric1(array('min' => 12)); // WHERE InprPricPric1 > 12
     * </code>
     *
     * @param     mixed $inprpricpric1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric1($inprpricpric1 = null, $comparison = null)
    {
        if (is_array($inprpricpric1)) {
            $useMinMax = false;
            if (isset($inprpricpric1['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC1, $inprpricpric1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric1['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC1, $inprpricpric1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC1, $inprpricpric1, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit2(1234); // WHERE InprPricUnit2 = 1234
     * $query->filterByInprpricunit2(array(12, 34)); // WHERE InprPricUnit2 IN (12, 34)
     * $query->filterByInprpricunit2(array('min' => 12)); // WHERE InprPricUnit2 > 12
     * </code>
     *
     * @param     mixed $inprpricunit2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit2($inprpricunit2 = null, $comparison = null)
    {
        if (is_array($inprpricunit2)) {
            $useMinMax = false;
            if (isset($inprpricunit2['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT2, $inprpricunit2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit2['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT2, $inprpricunit2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT2, $inprpricunit2, $comparison);
    }

    /**
     * Filter the query on the InprPricPric2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric2(1234); // WHERE InprPricPric2 = 1234
     * $query->filterByInprpricpric2(array(12, 34)); // WHERE InprPricPric2 IN (12, 34)
     * $query->filterByInprpricpric2(array('min' => 12)); // WHERE InprPricPric2 > 12
     * </code>
     *
     * @param     mixed $inprpricpric2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric2($inprpricpric2 = null, $comparison = null)
    {
        if (is_array($inprpricpric2)) {
            $useMinMax = false;
            if (isset($inprpricpric2['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC2, $inprpricpric2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric2['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC2, $inprpricpric2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC2, $inprpricpric2, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit3 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit3(1234); // WHERE InprPricUnit3 = 1234
     * $query->filterByInprpricunit3(array(12, 34)); // WHERE InprPricUnit3 IN (12, 34)
     * $query->filterByInprpricunit3(array('min' => 12)); // WHERE InprPricUnit3 > 12
     * </code>
     *
     * @param     mixed $inprpricunit3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit3($inprpricunit3 = null, $comparison = null)
    {
        if (is_array($inprpricunit3)) {
            $useMinMax = false;
            if (isset($inprpricunit3['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT3, $inprpricunit3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit3['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT3, $inprpricunit3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT3, $inprpricunit3, $comparison);
    }

    /**
     * Filter the query on the InprPricPric3 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric3(1234); // WHERE InprPricPric3 = 1234
     * $query->filterByInprpricpric3(array(12, 34)); // WHERE InprPricPric3 IN (12, 34)
     * $query->filterByInprpricpric3(array('min' => 12)); // WHERE InprPricPric3 > 12
     * </code>
     *
     * @param     mixed $inprpricpric3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric3($inprpricpric3 = null, $comparison = null)
    {
        if (is_array($inprpricpric3)) {
            $useMinMax = false;
            if (isset($inprpricpric3['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC3, $inprpricpric3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric3['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC3, $inprpricpric3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC3, $inprpricpric3, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit4 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit4(1234); // WHERE InprPricUnit4 = 1234
     * $query->filterByInprpricunit4(array(12, 34)); // WHERE InprPricUnit4 IN (12, 34)
     * $query->filterByInprpricunit4(array('min' => 12)); // WHERE InprPricUnit4 > 12
     * </code>
     *
     * @param     mixed $inprpricunit4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit4($inprpricunit4 = null, $comparison = null)
    {
        if (is_array($inprpricunit4)) {
            $useMinMax = false;
            if (isset($inprpricunit4['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT4, $inprpricunit4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit4['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT4, $inprpricunit4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT4, $inprpricunit4, $comparison);
    }

    /**
     * Filter the query on the InprPricPric4 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric4(1234); // WHERE InprPricPric4 = 1234
     * $query->filterByInprpricpric4(array(12, 34)); // WHERE InprPricPric4 IN (12, 34)
     * $query->filterByInprpricpric4(array('min' => 12)); // WHERE InprPricPric4 > 12
     * </code>
     *
     * @param     mixed $inprpricpric4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric4($inprpricpric4 = null, $comparison = null)
    {
        if (is_array($inprpricpric4)) {
            $useMinMax = false;
            if (isset($inprpricpric4['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC4, $inprpricpric4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric4['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC4, $inprpricpric4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC4, $inprpricpric4, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit5 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit5(1234); // WHERE InprPricUnit5 = 1234
     * $query->filterByInprpricunit5(array(12, 34)); // WHERE InprPricUnit5 IN (12, 34)
     * $query->filterByInprpricunit5(array('min' => 12)); // WHERE InprPricUnit5 > 12
     * </code>
     *
     * @param     mixed $inprpricunit5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit5($inprpricunit5 = null, $comparison = null)
    {
        if (is_array($inprpricunit5)) {
            $useMinMax = false;
            if (isset($inprpricunit5['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT5, $inprpricunit5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit5['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT5, $inprpricunit5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT5, $inprpricunit5, $comparison);
    }

    /**
     * Filter the query on the InprPricPric5 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric5(1234); // WHERE InprPricPric5 = 1234
     * $query->filterByInprpricpric5(array(12, 34)); // WHERE InprPricPric5 IN (12, 34)
     * $query->filterByInprpricpric5(array('min' => 12)); // WHERE InprPricPric5 > 12
     * </code>
     *
     * @param     mixed $inprpricpric5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric5($inprpricpric5 = null, $comparison = null)
    {
        if (is_array($inprpricpric5)) {
            $useMinMax = false;
            if (isset($inprpricpric5['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC5, $inprpricpric5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric5['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC5, $inprpricpric5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC5, $inprpricpric5, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit6 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit6(1234); // WHERE InprPricUnit6 = 1234
     * $query->filterByInprpricunit6(array(12, 34)); // WHERE InprPricUnit6 IN (12, 34)
     * $query->filterByInprpricunit6(array('min' => 12)); // WHERE InprPricUnit6 > 12
     * </code>
     *
     * @param     mixed $inprpricunit6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit6($inprpricunit6 = null, $comparison = null)
    {
        if (is_array($inprpricunit6)) {
            $useMinMax = false;
            if (isset($inprpricunit6['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT6, $inprpricunit6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit6['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT6, $inprpricunit6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT6, $inprpricunit6, $comparison);
    }

    /**
     * Filter the query on the InprPricPric6 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric6(1234); // WHERE InprPricPric6 = 1234
     * $query->filterByInprpricpric6(array(12, 34)); // WHERE InprPricPric6 IN (12, 34)
     * $query->filterByInprpricpric6(array('min' => 12)); // WHERE InprPricPric6 > 12
     * </code>
     *
     * @param     mixed $inprpricpric6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric6($inprpricpric6 = null, $comparison = null)
    {
        if (is_array($inprpricpric6)) {
            $useMinMax = false;
            if (isset($inprpricpric6['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC6, $inprpricpric6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric6['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC6, $inprpricpric6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC6, $inprpricpric6, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit7 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit7(1234); // WHERE InprPricUnit7 = 1234
     * $query->filterByInprpricunit7(array(12, 34)); // WHERE InprPricUnit7 IN (12, 34)
     * $query->filterByInprpricunit7(array('min' => 12)); // WHERE InprPricUnit7 > 12
     * </code>
     *
     * @param     mixed $inprpricunit7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit7($inprpricunit7 = null, $comparison = null)
    {
        if (is_array($inprpricunit7)) {
            $useMinMax = false;
            if (isset($inprpricunit7['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT7, $inprpricunit7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit7['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT7, $inprpricunit7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT7, $inprpricunit7, $comparison);
    }

    /**
     * Filter the query on the InprPricPric7 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric7(1234); // WHERE InprPricPric7 = 1234
     * $query->filterByInprpricpric7(array(12, 34)); // WHERE InprPricPric7 IN (12, 34)
     * $query->filterByInprpricpric7(array('min' => 12)); // WHERE InprPricPric7 > 12
     * </code>
     *
     * @param     mixed $inprpricpric7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric7($inprpricpric7 = null, $comparison = null)
    {
        if (is_array($inprpricpric7)) {
            $useMinMax = false;
            if (isset($inprpricpric7['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC7, $inprpricpric7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric7['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC7, $inprpricpric7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC7, $inprpricpric7, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit8 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit8(1234); // WHERE InprPricUnit8 = 1234
     * $query->filterByInprpricunit8(array(12, 34)); // WHERE InprPricUnit8 IN (12, 34)
     * $query->filterByInprpricunit8(array('min' => 12)); // WHERE InprPricUnit8 > 12
     * </code>
     *
     * @param     mixed $inprpricunit8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit8($inprpricunit8 = null, $comparison = null)
    {
        if (is_array($inprpricunit8)) {
            $useMinMax = false;
            if (isset($inprpricunit8['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT8, $inprpricunit8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit8['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT8, $inprpricunit8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT8, $inprpricunit8, $comparison);
    }

    /**
     * Filter the query on the InprPricPric8 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric8(1234); // WHERE InprPricPric8 = 1234
     * $query->filterByInprpricpric8(array(12, 34)); // WHERE InprPricPric8 IN (12, 34)
     * $query->filterByInprpricpric8(array('min' => 12)); // WHERE InprPricPric8 > 12
     * </code>
     *
     * @param     mixed $inprpricpric8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric8($inprpricpric8 = null, $comparison = null)
    {
        if (is_array($inprpricpric8)) {
            $useMinMax = false;
            if (isset($inprpricpric8['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC8, $inprpricpric8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric8['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC8, $inprpricpric8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC8, $inprpricpric8, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit9 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit9(1234); // WHERE InprPricUnit9 = 1234
     * $query->filterByInprpricunit9(array(12, 34)); // WHERE InprPricUnit9 IN (12, 34)
     * $query->filterByInprpricunit9(array('min' => 12)); // WHERE InprPricUnit9 > 12
     * </code>
     *
     * @param     mixed $inprpricunit9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit9($inprpricunit9 = null, $comparison = null)
    {
        if (is_array($inprpricunit9)) {
            $useMinMax = false;
            if (isset($inprpricunit9['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT9, $inprpricunit9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit9['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT9, $inprpricunit9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT9, $inprpricunit9, $comparison);
    }

    /**
     * Filter the query on the InprPricPric9 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric9(1234); // WHERE InprPricPric9 = 1234
     * $query->filterByInprpricpric9(array(12, 34)); // WHERE InprPricPric9 IN (12, 34)
     * $query->filterByInprpricpric9(array('min' => 12)); // WHERE InprPricPric9 > 12
     * </code>
     *
     * @param     mixed $inprpricpric9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric9($inprpricpric9 = null, $comparison = null)
    {
        if (is_array($inprpricpric9)) {
            $useMinMax = false;
            if (isset($inprpricpric9['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC9, $inprpricpric9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric9['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC9, $inprpricpric9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC9, $inprpricpric9, $comparison);
    }

    /**
     * Filter the query on the InprPricUnit10 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricunit10(1234); // WHERE InprPricUnit10 = 1234
     * $query->filterByInprpricunit10(array(12, 34)); // WHERE InprPricUnit10 IN (12, 34)
     * $query->filterByInprpricunit10(array('min' => 12)); // WHERE InprPricUnit10 > 12
     * </code>
     *
     * @param     mixed $inprpricunit10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricunit10($inprpricunit10 = null, $comparison = null)
    {
        if (is_array($inprpricunit10)) {
            $useMinMax = false;
            if (isset($inprpricunit10['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT10, $inprpricunit10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricunit10['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT10, $inprpricunit10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICUNIT10, $inprpricunit10, $comparison);
    }

    /**
     * Filter the query on the InprPricPric10 column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpricpric10(1234); // WHERE InprPricPric10 = 1234
     * $query->filterByInprpricpric10(array(12, 34)); // WHERE InprPricPric10 IN (12, 34)
     * $query->filterByInprpricpric10(array('min' => 12)); // WHERE InprPricPric10 > 12
     * </code>
     *
     * @param     mixed $inprpricpric10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpricpric10($inprpricpric10 = null, $comparison = null)
    {
        if (is_array($inprpricpric10)) {
            $useMinMax = false;
            if (isset($inprpricpric10['min'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC10, $inprpricpric10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inprpricpric10['max'])) {
                $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC10, $inprpricpric10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICPRIC10, $inprpricpric10, $comparison);
    }

    /**
     * Filter the query on the InprPricLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInprpriclastdate('fooValue');   // WHERE InprPricLastDate = 'fooValue'
     * $query->filterByInprpriclastdate('%fooValue%', Criteria::LIKE); // WHERE InprPricLastDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inprpriclastdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByInprpriclastdate($inprpriclastdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inprpriclastdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_INPRPRICLASTDATE, $inprpriclastdate, $comparison);
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
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemPricingTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemPricingQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemPricingTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            return $this
                ->useItemMasterItemQuery()
                ->filterByPrimaryKeys($itemMasterItem->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildItemPricing $itemPricing Object to remove from the list of results
     *
     * @return $this|ChildItemPricingQuery The current query, for fluid interface
     */
    public function prune($itemPricing = null)
    {
        if ($itemPricing) {
            $this->addUsingAlias(ItemPricingTableMap::COL_INITITEMNBR, $itemPricing->getInititemnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_item_price table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemPricingTableMap::clearInstancePool();
            ItemPricingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemPricingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemPricingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemPricingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemPricingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemPricingQuery
