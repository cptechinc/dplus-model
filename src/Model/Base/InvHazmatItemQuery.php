<?php

namespace Base;

use \InvHazmatItem as ChildInvHazmatItem;
use \InvHazmatItemQuery as ChildInvHazmatItemQuery;
use \Exception;
use \PDO;
use Map\InvHazmatItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_inv_hazmat' table.
 *
 *
 *
 * @method     ChildInvHazmatItemQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvHazmatItemQuery orderByInhzdot1($order = Criteria::ASC) Order by the InhzDot1 column
 * @method     ChildInvHazmatItemQuery orderByInhzdot2($order = Criteria::ASC) Order by the InhzDot2 column
 * @method     ChildInvHazmatItemQuery orderByInhzclass($order = Criteria::ASC) Order by the InhzClass column
 * @method     ChildInvHazmatItemQuery orderByInhzunnbr($order = Criteria::ASC) Order by the InhzUnNbr column
 * @method     ChildInvHazmatItemQuery orderByInhzpackgrup($order = Criteria::ASC) Order by the InhzPackGrup column
 * @method     ChildInvHazmatItemQuery orderByInhzlabel($order = Criteria::ASC) Order by the InhzLabel column
 * @method     ChildInvHazmatItemQuery orderByInhzairyn($order = Criteria::ASC) Order by the InhzAirYn column
 * @method     ChildInvHazmatItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvHazmatItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvHazmatItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvHazmatItemQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvHazmatItemQuery groupByInhzdot1() Group by the InhzDot1 column
 * @method     ChildInvHazmatItemQuery groupByInhzdot2() Group by the InhzDot2 column
 * @method     ChildInvHazmatItemQuery groupByInhzclass() Group by the InhzClass column
 * @method     ChildInvHazmatItemQuery groupByInhzunnbr() Group by the InhzUnNbr column
 * @method     ChildInvHazmatItemQuery groupByInhzpackgrup() Group by the InhzPackGrup column
 * @method     ChildInvHazmatItemQuery groupByInhzlabel() Group by the InhzLabel column
 * @method     ChildInvHazmatItemQuery groupByInhzairyn() Group by the InhzAirYn column
 * @method     ChildInvHazmatItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvHazmatItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvHazmatItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvHazmatItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvHazmatItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvHazmatItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvHazmatItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvHazmatItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvHazmatItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvHazmatItemQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvHazmatItemQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvHazmatItemQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvHazmatItemQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvHazmatItemQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvHazmatItemQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvHazmatItemQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvHazmatItem findOne(ConnectionInterface $con = null) Return the first ChildInvHazmatItem matching the query
 * @method     ChildInvHazmatItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvHazmatItem matching the query, or a new ChildInvHazmatItem object populated from the query conditions when no match is found
 *
 * @method     ChildInvHazmatItem findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvHazmatItem filtered by the InitItemNbr column
 * @method     ChildInvHazmatItem findOneByInhzdot1(string $InhzDot1) Return the first ChildInvHazmatItem filtered by the InhzDot1 column
 * @method     ChildInvHazmatItem findOneByInhzdot2(string $InhzDot2) Return the first ChildInvHazmatItem filtered by the InhzDot2 column
 * @method     ChildInvHazmatItem findOneByInhzclass(string $InhzClass) Return the first ChildInvHazmatItem filtered by the InhzClass column
 * @method     ChildInvHazmatItem findOneByInhzunnbr(string $InhzUnNbr) Return the first ChildInvHazmatItem filtered by the InhzUnNbr column
 * @method     ChildInvHazmatItem findOneByInhzpackgrup(string $InhzPackGrup) Return the first ChildInvHazmatItem filtered by the InhzPackGrup column
 * @method     ChildInvHazmatItem findOneByInhzlabel(string $InhzLabel) Return the first ChildInvHazmatItem filtered by the InhzLabel column
 * @method     ChildInvHazmatItem findOneByInhzairyn(string $InhzAirYn) Return the first ChildInvHazmatItem filtered by the InhzAirYn column
 * @method     ChildInvHazmatItem findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvHazmatItem filtered by the DateUpdtd column
 * @method     ChildInvHazmatItem findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvHazmatItem filtered by the TimeUpdtd column
 * @method     ChildInvHazmatItem findOneByDummy(string $dummy) Return the first ChildInvHazmatItem filtered by the dummy column *

 * @method     ChildInvHazmatItem requirePk($key, ConnectionInterface $con = null) Return the ChildInvHazmatItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOne(ConnectionInterface $con = null) Return the first ChildInvHazmatItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvHazmatItem requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvHazmatItem filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzdot1(string $InhzDot1) Return the first ChildInvHazmatItem filtered by the InhzDot1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzdot2(string $InhzDot2) Return the first ChildInvHazmatItem filtered by the InhzDot2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzclass(string $InhzClass) Return the first ChildInvHazmatItem filtered by the InhzClass column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzunnbr(string $InhzUnNbr) Return the first ChildInvHazmatItem filtered by the InhzUnNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzpackgrup(string $InhzPackGrup) Return the first ChildInvHazmatItem filtered by the InhzPackGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzlabel(string $InhzLabel) Return the first ChildInvHazmatItem filtered by the InhzLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByInhzairyn(string $InhzAirYn) Return the first ChildInvHazmatItem filtered by the InhzAirYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvHazmatItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvHazmatItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvHazmatItem requireOneByDummy(string $dummy) Return the first ChildInvHazmatItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvHazmatItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvHazmatItem objects based on current ModelCriteria
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildInvHazmatItem objects filtered by the InitItemNbr column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzdot1(string $InhzDot1) Return ChildInvHazmatItem objects filtered by the InhzDot1 column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzdot2(string $InhzDot2) Return ChildInvHazmatItem objects filtered by the InhzDot2 column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzclass(string $InhzClass) Return ChildInvHazmatItem objects filtered by the InhzClass column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzunnbr(string $InhzUnNbr) Return ChildInvHazmatItem objects filtered by the InhzUnNbr column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzpackgrup(string $InhzPackGrup) Return ChildInvHazmatItem objects filtered by the InhzPackGrup column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzlabel(string $InhzLabel) Return ChildInvHazmatItem objects filtered by the InhzLabel column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByInhzairyn(string $InhzAirYn) Return ChildInvHazmatItem objects filtered by the InhzAirYn column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvHazmatItem objects filtered by the DateUpdtd column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvHazmatItem objects filtered by the TimeUpdtd column
 * @method     ChildInvHazmatItem[]|ObjectCollection findByDummy(string $dummy) Return ChildInvHazmatItem objects filtered by the dummy column
 * @method     ChildInvHazmatItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvHazmatItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvHazmatItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvHazmatItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvHazmatItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvHazmatItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvHazmatItemQuery) {
            return $criteria;
        }
        $query = new ChildInvHazmatItemQuery();
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
     * @return ChildInvHazmatItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvHazmatItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvHazmatItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvHazmatItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InhzDot1, InhzDot2, InhzClass, InhzUnNbr, InhzPackGrup, InhzLabel, InhzAirYn, DateUpdtd, TimeUpdtd, dummy FROM inv_inv_hazmat WHERE InitItemNbr = :p0';
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
            /** @var ChildInvHazmatItem $obj */
            $obj = new ChildInvHazmatItem();
            $obj->hydrate($row);
            InvHazmatItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvHazmatItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INITITEMNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INITITEMNBR, $keys, Criteria::IN);
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
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InhzDot1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzdot1('fooValue');   // WHERE InhzDot1 = 'fooValue'
     * $query->filterByInhzdot1('%fooValue%', Criteria::LIKE); // WHERE InhzDot1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzdot1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzdot1($inhzdot1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzdot1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZDOT1, $inhzdot1, $comparison);
    }

    /**
     * Filter the query on the InhzDot2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzdot2('fooValue');   // WHERE InhzDot2 = 'fooValue'
     * $query->filterByInhzdot2('%fooValue%', Criteria::LIKE); // WHERE InhzDot2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzdot2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzdot2($inhzdot2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzdot2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZDOT2, $inhzdot2, $comparison);
    }

    /**
     * Filter the query on the InhzClass column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzclass('fooValue');   // WHERE InhzClass = 'fooValue'
     * $query->filterByInhzclass('%fooValue%', Criteria::LIKE); // WHERE InhzClass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzclass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzclass($inhzclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzclass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZCLASS, $inhzclass, $comparison);
    }

    /**
     * Filter the query on the InhzUnNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzunnbr('fooValue');   // WHERE InhzUnNbr = 'fooValue'
     * $query->filterByInhzunnbr('%fooValue%', Criteria::LIKE); // WHERE InhzUnNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzunnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzunnbr($inhzunnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzunnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZUNNBR, $inhzunnbr, $comparison);
    }

    /**
     * Filter the query on the InhzPackGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzpackgrup('fooValue');   // WHERE InhzPackGrup = 'fooValue'
     * $query->filterByInhzpackgrup('%fooValue%', Criteria::LIKE); // WHERE InhzPackGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzpackgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzpackgrup($inhzpackgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzpackgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZPACKGRUP, $inhzpackgrup, $comparison);
    }

    /**
     * Filter the query on the InhzLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzlabel('fooValue');   // WHERE InhzLabel = 'fooValue'
     * $query->filterByInhzlabel('%fooValue%', Criteria::LIKE); // WHERE InhzLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzlabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzlabel($inhzlabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzlabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZLABEL, $inhzlabel, $comparison);
    }

    /**
     * Filter the query on the InhzAirYn column
     *
     * Example usage:
     * <code>
     * $query->filterByInhzairyn('fooValue');   // WHERE InhzAirYn = 'fooValue'
     * $query->filterByInhzairyn('%fooValue%', Criteria::LIKE); // WHERE InhzAirYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inhzairyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByInhzairyn($inhzairyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inhzairyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_INHZAIRYN, $inhzairyn, $comparison);
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
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvHazmatItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvHazmatItemTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InvHazmatItemTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
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
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
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
     * @param   ChildInvHazmatItem $invHazmatItem Object to remove from the list of results
     *
     * @return $this|ChildInvHazmatItemQuery The current query, for fluid interface
     */
    public function prune($invHazmatItem = null)
    {
        if ($invHazmatItem) {
            $this->addUsingAlias(InvHazmatItemTableMap::COL_INITITEMNBR, $invHazmatItem->getInititemnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_inv_hazmat table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvHazmatItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvHazmatItemTableMap::clearInstancePool();
            InvHazmatItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvHazmatItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvHazmatItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvHazmatItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvHazmatItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvHazmatItemQuery
