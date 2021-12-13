<?php

namespace Base;

use \UserLastPrintJob as ChildUserLastPrintJob;
use \UserLastPrintJobQuery as ChildUserLastPrintJobQuery;
use \Exception;
use \PDO;
use Map\UserLastPrintJobTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'user_printer' table.
 *
 *
 *
 * @method     ChildUserLastPrintJobQuery orderByUsprfunction($order = Criteria::ASC) Order by the UsprFunction column
 * @method     ChildUserLastPrintJobQuery orderByUsrcid($order = Criteria::ASC) Order by the UsrcId column
 * @method     ChildUserLastPrintJobQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildUserLastPrintJobQuery orderByUsprprinter($order = Criteria::ASC) Order by the UsprPrinter column
 * @method     ChildUserLastPrintJobQuery orderByUsprlabel($order = Criteria::ASC) Order by the UsprLabel column
 * @method     ChildUserLastPrintJobQuery orderByUsprlabel2($order = Criteria::ASC) Order by the UsprLabel2 column
 * @method     ChildUserLastPrintJobQuery orderByUsprlabelqty($order = Criteria::ASC) Order by the UsprLabelQty column
 * @method     ChildUserLastPrintJobQuery orderByUsprordrnbr($order = Criteria::ASC) Order by the UsprOrdrNbr column
 * @method     ChildUserLastPrintJobQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildUserLastPrintJobQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildUserLastPrintJobQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildUserLastPrintJobQuery groupByUsprfunction() Group by the UsprFunction column
 * @method     ChildUserLastPrintJobQuery groupByUsrcid() Group by the UsrcId column
 * @method     ChildUserLastPrintJobQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildUserLastPrintJobQuery groupByUsprprinter() Group by the UsprPrinter column
 * @method     ChildUserLastPrintJobQuery groupByUsprlabel() Group by the UsprLabel column
 * @method     ChildUserLastPrintJobQuery groupByUsprlabel2() Group by the UsprLabel2 column
 * @method     ChildUserLastPrintJobQuery groupByUsprlabelqty() Group by the UsprLabelQty column
 * @method     ChildUserLastPrintJobQuery groupByUsprordrnbr() Group by the UsprOrdrNbr column
 * @method     ChildUserLastPrintJobQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildUserLastPrintJobQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildUserLastPrintJobQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildUserLastPrintJobQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUserLastPrintJobQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUserLastPrintJobQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUserLastPrintJobQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildUserLastPrintJobQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildUserLastPrintJobQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildUserLastPrintJobQuery leftJoinDplusUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DplusUser relation
 * @method     ChildUserLastPrintJobQuery rightJoinDplusUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DplusUser relation
 * @method     ChildUserLastPrintJobQuery innerJoinDplusUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DplusUser relation
 *
 * @method     ChildUserLastPrintJobQuery joinWithDplusUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DplusUser relation
 *
 * @method     ChildUserLastPrintJobQuery leftJoinWithDplusUser() Adds a LEFT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildUserLastPrintJobQuery rightJoinWithDplusUser() Adds a RIGHT JOIN clause and with to the query using the DplusUser relation
 * @method     ChildUserLastPrintJobQuery innerJoinWithDplusUser() Adds a INNER JOIN clause and with to the query using the DplusUser relation
 *
 * @method     \DplusUserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildUserLastPrintJob findOne(ConnectionInterface $con = null) Return the first ChildUserLastPrintJob matching the query
 * @method     ChildUserLastPrintJob findOneOrCreate(ConnectionInterface $con = null) Return the first ChildUserLastPrintJob matching the query, or a new ChildUserLastPrintJob object populated from the query conditions when no match is found
 *
 * @method     ChildUserLastPrintJob findOneByUsprfunction(string $UsprFunction) Return the first ChildUserLastPrintJob filtered by the UsprFunction column
 * @method     ChildUserLastPrintJob findOneByUsrcid(string $UsrcId) Return the first ChildUserLastPrintJob filtered by the UsrcId column
 * @method     ChildUserLastPrintJob findOneByIntbwhse(string $IntbWhse) Return the first ChildUserLastPrintJob filtered by the IntbWhse column
 * @method     ChildUserLastPrintJob findOneByUsprprinter(string $UsprPrinter) Return the first ChildUserLastPrintJob filtered by the UsprPrinter column
 * @method     ChildUserLastPrintJob findOneByUsprlabel(string $UsprLabel) Return the first ChildUserLastPrintJob filtered by the UsprLabel column
 * @method     ChildUserLastPrintJob findOneByUsprlabel2(string $UsprLabel2) Return the first ChildUserLastPrintJob filtered by the UsprLabel2 column
 * @method     ChildUserLastPrintJob findOneByUsprlabelqty(int $UsprLabelQty) Return the first ChildUserLastPrintJob filtered by the UsprLabelQty column
 * @method     ChildUserLastPrintJob findOneByUsprordrnbr(int $UsprOrdrNbr) Return the first ChildUserLastPrintJob filtered by the UsprOrdrNbr column
 * @method     ChildUserLastPrintJob findOneByDateupdtd(string $DateUpdtd) Return the first ChildUserLastPrintJob filtered by the DateUpdtd column
 * @method     ChildUserLastPrintJob findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUserLastPrintJob filtered by the TimeUpdtd column
 * @method     ChildUserLastPrintJob findOneByDummy(string $dummy) Return the first ChildUserLastPrintJob filtered by the dummy column *

 * @method     ChildUserLastPrintJob requirePk($key, ConnectionInterface $con = null) Return the ChildUserLastPrintJob by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOne(ConnectionInterface $con = null) Return the first ChildUserLastPrintJob matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUserLastPrintJob requireOneByUsprfunction(string $UsprFunction) Return the first ChildUserLastPrintJob filtered by the UsprFunction column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByUsrcid(string $UsrcId) Return the first ChildUserLastPrintJob filtered by the UsrcId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByIntbwhse(string $IntbWhse) Return the first ChildUserLastPrintJob filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByUsprprinter(string $UsprPrinter) Return the first ChildUserLastPrintJob filtered by the UsprPrinter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByUsprlabel(string $UsprLabel) Return the first ChildUserLastPrintJob filtered by the UsprLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByUsprlabel2(string $UsprLabel2) Return the first ChildUserLastPrintJob filtered by the UsprLabel2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByUsprlabelqty(int $UsprLabelQty) Return the first ChildUserLastPrintJob filtered by the UsprLabelQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByUsprordrnbr(int $UsprOrdrNbr) Return the first ChildUserLastPrintJob filtered by the UsprOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByDateupdtd(string $DateUpdtd) Return the first ChildUserLastPrintJob filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildUserLastPrintJob filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserLastPrintJob requireOneByDummy(string $dummy) Return the first ChildUserLastPrintJob filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUserLastPrintJob[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildUserLastPrintJob objects based on current ModelCriteria
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsprfunction(string $UsprFunction) Return ChildUserLastPrintJob objects filtered by the UsprFunction column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsrcid(string $UsrcId) Return ChildUserLastPrintJob objects filtered by the UsrcId column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildUserLastPrintJob objects filtered by the IntbWhse column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsprprinter(string $UsprPrinter) Return ChildUserLastPrintJob objects filtered by the UsprPrinter column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsprlabel(string $UsprLabel) Return ChildUserLastPrintJob objects filtered by the UsprLabel column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsprlabel2(string $UsprLabel2) Return ChildUserLastPrintJob objects filtered by the UsprLabel2 column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsprlabelqty(int $UsprLabelQty) Return ChildUserLastPrintJob objects filtered by the UsprLabelQty column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByUsprordrnbr(int $UsprOrdrNbr) Return ChildUserLastPrintJob objects filtered by the UsprOrdrNbr column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildUserLastPrintJob objects filtered by the DateUpdtd column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildUserLastPrintJob objects filtered by the TimeUpdtd column
 * @method     ChildUserLastPrintJob[]|ObjectCollection findByDummy(string $dummy) Return ChildUserLastPrintJob objects filtered by the dummy column
 * @method     ChildUserLastPrintJob[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class UserLastPrintJobQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\UserLastPrintJobQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\UserLastPrintJob', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUserLastPrintJobQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUserLastPrintJobQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildUserLastPrintJobQuery) {
            return $criteria;
        }
        $query = new ChildUserLastPrintJobQuery();
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
     * @param array[$UsprFunction, $UsrcId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildUserLastPrintJob|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(UserLastPrintJobTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = UserLastPrintJobTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildUserLastPrintJob A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT UsprFunction, UsrcId, IntbWhse, UsprPrinter, UsprLabel, UsprLabel2, UsprLabelQty, UsprOrdrNbr, DateUpdtd, TimeUpdtd, dummy FROM user_printer WHERE UsprFunction = :p0 AND UsrcId = :p1';
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
            /** @var ChildUserLastPrintJob $obj */
            $obj = new ChildUserLastPrintJob();
            $obj->hydrate($row);
            UserLastPrintJobTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildUserLastPrintJob|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRFUNCTION, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(UserLastPrintJobTableMap::COL_USRCID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(UserLastPrintJobTableMap::COL_USPRFUNCTION, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(UserLastPrintJobTableMap::COL_USRCID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the UsprFunction column
     *
     * Example usage:
     * <code>
     * $query->filterByUsprfunction('fooValue');   // WHERE UsprFunction = 'fooValue'
     * $query->filterByUsprfunction('%fooValue%', Criteria::LIKE); // WHERE UsprFunction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usprfunction The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsprfunction($usprfunction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usprfunction)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRFUNCTION, $usprfunction, $comparison);
    }

    /**
     * Filter the query on the UsrcId column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrcid('fooValue');   // WHERE UsrcId = 'fooValue'
     * $query->filterByUsrcid('%fooValue%', Criteria::LIKE); // WHERE UsrcId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrcid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsrcid($usrcid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrcid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USRCID, $usrcid, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the UsprPrinter column
     *
     * Example usage:
     * <code>
     * $query->filterByUsprprinter('fooValue');   // WHERE UsprPrinter = 'fooValue'
     * $query->filterByUsprprinter('%fooValue%', Criteria::LIKE); // WHERE UsprPrinter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usprprinter The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsprprinter($usprprinter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usprprinter)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRPRINTER, $usprprinter, $comparison);
    }

    /**
     * Filter the query on the UsprLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByUsprlabel('fooValue');   // WHERE UsprLabel = 'fooValue'
     * $query->filterByUsprlabel('%fooValue%', Criteria::LIKE); // WHERE UsprLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usprlabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsprlabel($usprlabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usprlabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRLABEL, $usprlabel, $comparison);
    }

    /**
     * Filter the query on the UsprLabel2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsprlabel2('fooValue');   // WHERE UsprLabel2 = 'fooValue'
     * $query->filterByUsprlabel2('%fooValue%', Criteria::LIKE); // WHERE UsprLabel2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usprlabel2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsprlabel2($usprlabel2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usprlabel2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRLABEL2, $usprlabel2, $comparison);
    }

    /**
     * Filter the query on the UsprLabelQty column
     *
     * Example usage:
     * <code>
     * $query->filterByUsprlabelqty(1234); // WHERE UsprLabelQty = 1234
     * $query->filterByUsprlabelqty(array(12, 34)); // WHERE UsprLabelQty IN (12, 34)
     * $query->filterByUsprlabelqty(array('min' => 12)); // WHERE UsprLabelQty > 12
     * </code>
     *
     * @param     mixed $usprlabelqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsprlabelqty($usprlabelqty = null, $comparison = null)
    {
        if (is_array($usprlabelqty)) {
            $useMinMax = false;
            if (isset($usprlabelqty['min'])) {
                $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRLABELQTY, $usprlabelqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usprlabelqty['max'])) {
                $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRLABELQTY, $usprlabelqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRLABELQTY, $usprlabelqty, $comparison);
    }

    /**
     * Filter the query on the UsprOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByUsprordrnbr(1234); // WHERE UsprOrdrNbr = 1234
     * $query->filterByUsprordrnbr(array(12, 34)); // WHERE UsprOrdrNbr IN (12, 34)
     * $query->filterByUsprordrnbr(array('min' => 12)); // WHERE UsprOrdrNbr > 12
     * </code>
     *
     * @param     mixed $usprordrnbr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByUsprordrnbr($usprordrnbr = null, $comparison = null)
    {
        if (is_array($usprordrnbr)) {
            $useMinMax = false;
            if (isset($usprordrnbr['min'])) {
                $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRORDRNBR, $usprordrnbr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usprordrnbr['max'])) {
                $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRORDRNBR, $usprordrnbr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_USPRORDRNBR, $usprordrnbr, $comparison);
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
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserLastPrintJobTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \DplusUser object
     *
     * @param \DplusUser|ObjectCollection $dplusUser The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function filterByDplusUser($dplusUser, $comparison = null)
    {
        if ($dplusUser instanceof \DplusUser) {
            return $this
                ->addUsingAlias(UserLastPrintJobTableMap::COL_USRCID, $dplusUser->getUsrcid(), $comparison);
        } elseif ($dplusUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserLastPrintJobTableMap::COL_USRCID, $dplusUser->toKeyValue('PrimaryKey', 'Usrcid'), $comparison);
        } else {
            throw new PropelException('filterByDplusUser() only accepts arguments of type \DplusUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DplusUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function joinDplusUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildUserLastPrintJob $userLastPrintJob Object to remove from the list of results
     *
     * @return $this|ChildUserLastPrintJobQuery The current query, for fluid interface
     */
    public function prune($userLastPrintJob = null)
    {
        if ($userLastPrintJob) {
            $this->addCond('pruneCond0', $this->getAliasedColName(UserLastPrintJobTableMap::COL_USPRFUNCTION), $userLastPrintJob->getUsprfunction(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(UserLastPrintJobTableMap::COL_USRCID), $userLastPrintJob->getUsrcid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the user_printer table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserLastPrintJobTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UserLastPrintJobTableMap::clearInstancePool();
            UserLastPrintJobTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(UserLastPrintJobTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UserLastPrintJobTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            UserLastPrintJobTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            UserLastPrintJobTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // UserLastPrintJobQuery
