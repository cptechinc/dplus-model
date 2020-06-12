<?php

namespace Base;

use \ThermalLabelFormat as ChildThermalLabelFormat;
use \ThermalLabelFormatQuery as ChildThermalLabelFormatQuery;
use \Exception;
use \PDO;
use Map\ThermalLabelFormatTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'thermal_label_head' table.
 *
 *
 *
 * @method     ChildThermalLabelFormatQuery orderByTllhformat($order = Criteria::ASC) Order by the TllhFormat column
 * @method     ChildThermalLabelFormatQuery orderByTllhdesc($order = Criteria::ASC) Order by the TllhDesc column
 * @method     ChildThermalLabelFormatQuery orderByTllhsrc($order = Criteria::ASC) Order by the TllhSrc column
 * @method     ChildThermalLabelFormatQuery orderByTllhprtrmodl($order = Criteria::ASC) Order by the TllhPrtrModl column
 * @method     ChildThermalLabelFormatQuery orderByTllhprtrsplr($order = Criteria::ASC) Order by the TllhPrtrSplr column
 * @method     ChildThermalLabelFormatQuery orderByTllhwidth($order = Criteria::ASC) Order by the TllhWidth column
 * @method     ChildThermalLabelFormatQuery orderByTllhlength($order = Criteria::ASC) Order by the TllhLength column
 * @method     ChildThermalLabelFormatQuery orderByTllhlock($order = Criteria::ASC) Order by the TllhLock column
 * @method     ChildThermalLabelFormatQuery orderByTllhsortby($order = Criteria::ASC) Order by the TllhSortBy column
 * @method     ChildThermalLabelFormatQuery orderByTllhtype($order = Criteria::ASC) Order by the TllhType column
 * @method     ChildThermalLabelFormatQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildThermalLabelFormatQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildThermalLabelFormatQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildThermalLabelFormatQuery groupByTllhformat() Group by the TllhFormat column
 * @method     ChildThermalLabelFormatQuery groupByTllhdesc() Group by the TllhDesc column
 * @method     ChildThermalLabelFormatQuery groupByTllhsrc() Group by the TllhSrc column
 * @method     ChildThermalLabelFormatQuery groupByTllhprtrmodl() Group by the TllhPrtrModl column
 * @method     ChildThermalLabelFormatQuery groupByTllhprtrsplr() Group by the TllhPrtrSplr column
 * @method     ChildThermalLabelFormatQuery groupByTllhwidth() Group by the TllhWidth column
 * @method     ChildThermalLabelFormatQuery groupByTllhlength() Group by the TllhLength column
 * @method     ChildThermalLabelFormatQuery groupByTllhlock() Group by the TllhLock column
 * @method     ChildThermalLabelFormatQuery groupByTllhsortby() Group by the TllhSortBy column
 * @method     ChildThermalLabelFormatQuery groupByTllhtype() Group by the TllhType column
 * @method     ChildThermalLabelFormatQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildThermalLabelFormatQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildThermalLabelFormatQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildThermalLabelFormatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildThermalLabelFormatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildThermalLabelFormatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildThermalLabelFormatQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildThermalLabelFormatQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildThermalLabelFormatQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildThermalLabelFormat findOne(ConnectionInterface $con = null) Return the first ChildThermalLabelFormat matching the query
 * @method     ChildThermalLabelFormat findOneOrCreate(ConnectionInterface $con = null) Return the first ChildThermalLabelFormat matching the query, or a new ChildThermalLabelFormat object populated from the query conditions when no match is found
 *
 * @method     ChildThermalLabelFormat findOneByTllhformat(string $TllhFormat) Return the first ChildThermalLabelFormat filtered by the TllhFormat column
 * @method     ChildThermalLabelFormat findOneByTllhdesc(string $TllhDesc) Return the first ChildThermalLabelFormat filtered by the TllhDesc column
 * @method     ChildThermalLabelFormat findOneByTllhsrc(string $TllhSrc) Return the first ChildThermalLabelFormat filtered by the TllhSrc column
 * @method     ChildThermalLabelFormat findOneByTllhprtrmodl(string $TllhPrtrModl) Return the first ChildThermalLabelFormat filtered by the TllhPrtrModl column
 * @method     ChildThermalLabelFormat findOneByTllhprtrsplr(string $TllhPrtrSplr) Return the first ChildThermalLabelFormat filtered by the TllhPrtrSplr column
 * @method     ChildThermalLabelFormat findOneByTllhwidth(string $TllhWidth) Return the first ChildThermalLabelFormat filtered by the TllhWidth column
 * @method     ChildThermalLabelFormat findOneByTllhlength(string $TllhLength) Return the first ChildThermalLabelFormat filtered by the TllhLength column
 * @method     ChildThermalLabelFormat findOneByTllhlock(string $TllhLock) Return the first ChildThermalLabelFormat filtered by the TllhLock column
 * @method     ChildThermalLabelFormat findOneByTllhsortby(int $TllhSortBy) Return the first ChildThermalLabelFormat filtered by the TllhSortBy column
 * @method     ChildThermalLabelFormat findOneByTllhtype(string $TllhType) Return the first ChildThermalLabelFormat filtered by the TllhType column
 * @method     ChildThermalLabelFormat findOneByDateupdtd(string $DateUpdtd) Return the first ChildThermalLabelFormat filtered by the DateUpdtd column
 * @method     ChildThermalLabelFormat findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildThermalLabelFormat filtered by the TimeUpdtd column
 * @method     ChildThermalLabelFormat findOneByDummy(string $dummy) Return the first ChildThermalLabelFormat filtered by the dummy column *

 * @method     ChildThermalLabelFormat requirePk($key, ConnectionInterface $con = null) Return the ChildThermalLabelFormat by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOne(ConnectionInterface $con = null) Return the first ChildThermalLabelFormat matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildThermalLabelFormat requireOneByTllhformat(string $TllhFormat) Return the first ChildThermalLabelFormat filtered by the TllhFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhdesc(string $TllhDesc) Return the first ChildThermalLabelFormat filtered by the TllhDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhsrc(string $TllhSrc) Return the first ChildThermalLabelFormat filtered by the TllhSrc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhprtrmodl(string $TllhPrtrModl) Return the first ChildThermalLabelFormat filtered by the TllhPrtrModl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhprtrsplr(string $TllhPrtrSplr) Return the first ChildThermalLabelFormat filtered by the TllhPrtrSplr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhwidth(string $TllhWidth) Return the first ChildThermalLabelFormat filtered by the TllhWidth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhlength(string $TllhLength) Return the first ChildThermalLabelFormat filtered by the TllhLength column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhlock(string $TllhLock) Return the first ChildThermalLabelFormat filtered by the TllhLock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhsortby(int $TllhSortBy) Return the first ChildThermalLabelFormat filtered by the TllhSortBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTllhtype(string $TllhType) Return the first ChildThermalLabelFormat filtered by the TllhType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByDateupdtd(string $DateUpdtd) Return the first ChildThermalLabelFormat filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildThermalLabelFormat filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildThermalLabelFormat requireOneByDummy(string $dummy) Return the first ChildThermalLabelFormat filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildThermalLabelFormat[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildThermalLabelFormat objects based on current ModelCriteria
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhformat(string $TllhFormat) Return ChildThermalLabelFormat objects filtered by the TllhFormat column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhdesc(string $TllhDesc) Return ChildThermalLabelFormat objects filtered by the TllhDesc column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhsrc(string $TllhSrc) Return ChildThermalLabelFormat objects filtered by the TllhSrc column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhprtrmodl(string $TllhPrtrModl) Return ChildThermalLabelFormat objects filtered by the TllhPrtrModl column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhprtrsplr(string $TllhPrtrSplr) Return ChildThermalLabelFormat objects filtered by the TllhPrtrSplr column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhwidth(string $TllhWidth) Return ChildThermalLabelFormat objects filtered by the TllhWidth column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhlength(string $TllhLength) Return ChildThermalLabelFormat objects filtered by the TllhLength column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhlock(string $TllhLock) Return ChildThermalLabelFormat objects filtered by the TllhLock column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhsortby(int $TllhSortBy) Return ChildThermalLabelFormat objects filtered by the TllhSortBy column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTllhtype(string $TllhType) Return ChildThermalLabelFormat objects filtered by the TllhType column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildThermalLabelFormat objects filtered by the DateUpdtd column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildThermalLabelFormat objects filtered by the TimeUpdtd column
 * @method     ChildThermalLabelFormat[]|ObjectCollection findByDummy(string $dummy) Return ChildThermalLabelFormat objects filtered by the dummy column
 * @method     ChildThermalLabelFormat[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ThermalLabelFormatQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ThermalLabelFormatQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ThermalLabelFormat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildThermalLabelFormatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildThermalLabelFormatQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildThermalLabelFormatQuery) {
            return $criteria;
        }
        $query = new ChildThermalLabelFormatQuery();
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
     * @return ChildThermalLabelFormat|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ThermalLabelFormatTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ThermalLabelFormatTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildThermalLabelFormat A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT TllhFormat, TllhDesc, TllhSrc, TllhPrtrModl, TllhPrtrSplr, TllhWidth, TllhLength, TllhLock, TllhSortBy, TllhType, DateUpdtd, TimeUpdtd, dummy FROM thermal_label_head WHERE TllhFormat = :p0';
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
            /** @var ChildThermalLabelFormat $obj */
            $obj = new ChildThermalLabelFormat();
            $obj->hydrate($row);
            ThermalLabelFormatTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildThermalLabelFormat|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHFORMAT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHFORMAT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the TllhFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhformat('fooValue');   // WHERE TllhFormat = 'fooValue'
     * $query->filterByTllhformat('%fooValue%', Criteria::LIKE); // WHERE TllhFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhformat($tllhformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHFORMAT, $tllhformat, $comparison);
    }

    /**
     * Filter the query on the TllhDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhdesc('fooValue');   // WHERE TllhDesc = 'fooValue'
     * $query->filterByTllhdesc('%fooValue%', Criteria::LIKE); // WHERE TllhDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhdesc($tllhdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHDESC, $tllhdesc, $comparison);
    }

    /**
     * Filter the query on the TllhSrc column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhsrc('fooValue');   // WHERE TllhSrc = 'fooValue'
     * $query->filterByTllhsrc('%fooValue%', Criteria::LIKE); // WHERE TllhSrc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhsrc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhsrc($tllhsrc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhsrc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHSRC, $tllhsrc, $comparison);
    }

    /**
     * Filter the query on the TllhPrtrModl column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhprtrmodl('fooValue');   // WHERE TllhPrtrModl = 'fooValue'
     * $query->filterByTllhprtrmodl('%fooValue%', Criteria::LIKE); // WHERE TllhPrtrModl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhprtrmodl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhprtrmodl($tllhprtrmodl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhprtrmodl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHPRTRMODL, $tllhprtrmodl, $comparison);
    }

    /**
     * Filter the query on the TllhPrtrSplr column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhprtrsplr('fooValue');   // WHERE TllhPrtrSplr = 'fooValue'
     * $query->filterByTllhprtrsplr('%fooValue%', Criteria::LIKE); // WHERE TllhPrtrSplr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhprtrsplr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhprtrsplr($tllhprtrsplr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhprtrsplr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHPRTRSPLR, $tllhprtrsplr, $comparison);
    }

    /**
     * Filter the query on the TllhWidth column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhwidth(1234); // WHERE TllhWidth = 1234
     * $query->filterByTllhwidth(array(12, 34)); // WHERE TllhWidth IN (12, 34)
     * $query->filterByTllhwidth(array('min' => 12)); // WHERE TllhWidth > 12
     * </code>
     *
     * @param     mixed $tllhwidth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhwidth($tllhwidth = null, $comparison = null)
    {
        if (is_array($tllhwidth)) {
            $useMinMax = false;
            if (isset($tllhwidth['min'])) {
                $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHWIDTH, $tllhwidth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tllhwidth['max'])) {
                $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHWIDTH, $tllhwidth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHWIDTH, $tllhwidth, $comparison);
    }

    /**
     * Filter the query on the TllhLength column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhlength(1234); // WHERE TllhLength = 1234
     * $query->filterByTllhlength(array(12, 34)); // WHERE TllhLength IN (12, 34)
     * $query->filterByTllhlength(array('min' => 12)); // WHERE TllhLength > 12
     * </code>
     *
     * @param     mixed $tllhlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhlength($tllhlength = null, $comparison = null)
    {
        if (is_array($tllhlength)) {
            $useMinMax = false;
            if (isset($tllhlength['min'])) {
                $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHLENGTH, $tllhlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tllhlength['max'])) {
                $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHLENGTH, $tllhlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHLENGTH, $tllhlength, $comparison);
    }

    /**
     * Filter the query on the TllhLock column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhlock('fooValue');   // WHERE TllhLock = 'fooValue'
     * $query->filterByTllhlock('%fooValue%', Criteria::LIKE); // WHERE TllhLock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhlock The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhlock($tllhlock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhlock)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHLOCK, $tllhlock, $comparison);
    }

    /**
     * Filter the query on the TllhSortBy column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhsortby(1234); // WHERE TllhSortBy = 1234
     * $query->filterByTllhsortby(array(12, 34)); // WHERE TllhSortBy IN (12, 34)
     * $query->filterByTllhsortby(array('min' => 12)); // WHERE TllhSortBy > 12
     * </code>
     *
     * @param     mixed $tllhsortby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhsortby($tllhsortby = null, $comparison = null)
    {
        if (is_array($tllhsortby)) {
            $useMinMax = false;
            if (isset($tllhsortby['min'])) {
                $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHSORTBY, $tllhsortby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tllhsortby['max'])) {
                $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHSORTBY, $tllhsortby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHSORTBY, $tllhsortby, $comparison);
    }

    /**
     * Filter the query on the TllhType column
     *
     * Example usage:
     * <code>
     * $query->filterByTllhtype('fooValue');   // WHERE TllhType = 'fooValue'
     * $query->filterByTllhtype('%fooValue%', Criteria::LIKE); // WHERE TllhType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tllhtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTllhtype($tllhtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tllhtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHTYPE, $tllhtype, $comparison);
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
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThermalLabelFormatTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildThermalLabelFormat $thermalLabelFormat Object to remove from the list of results
     *
     * @return $this|ChildThermalLabelFormatQuery The current query, for fluid interface
     */
    public function prune($thermalLabelFormat = null)
    {
        if ($thermalLabelFormat) {
            $this->addUsingAlias(ThermalLabelFormatTableMap::COL_TLLHFORMAT, $thermalLabelFormat->getTllhformat(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the thermal_label_head table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ThermalLabelFormatTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ThermalLabelFormatTableMap::clearInstancePool();
            ThermalLabelFormatTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ThermalLabelFormatTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ThermalLabelFormatTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ThermalLabelFormatTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ThermalLabelFormatTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ThermalLabelFormatQuery
