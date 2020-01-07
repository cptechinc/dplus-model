<?php

namespace Base;

use \MotorFreightCode as ChildMotorFreightCode;
use \MotorFreightCodeQuery as ChildMotorFreightCodeQuery;
use \Exception;
use \PDO;
use Map\MotorFreightCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_mfrt_code' table.
 *
 *
 *
 * @method     ChildMotorFreightCodeQuery orderByOe2tbmfrtcode($order = Criteria::ASC) Order by the Oe2tbMfrtCode column
 * @method     ChildMotorFreightCodeQuery orderByOe2tbmfrtclass($order = Criteria::ASC) Order by the Oe2tbMfrtClass column
 * @method     ChildMotorFreightCodeQuery orderByOe2tbmfrtdesc1($order = Criteria::ASC) Order by the Oe2tbMfrtDesc1 column
 * @method     ChildMotorFreightCodeQuery orderByOe2tbmfrtdesc2($order = Criteria::ASC) Order by the Oe2tbMfrtDesc2 column
 * @method     ChildMotorFreightCodeQuery orderByOe2tbmfrtdesc3($order = Criteria::ASC) Order by the Oe2tbMfrtDesc3 column
 * @method     ChildMotorFreightCodeQuery orderByOe2tbmfrtdesc4($order = Criteria::ASC) Order by the Oe2tbMfrtDesc4 column
 * @method     ChildMotorFreightCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildMotorFreightCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildMotorFreightCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildMotorFreightCodeQuery groupByOe2tbmfrtcode() Group by the Oe2tbMfrtCode column
 * @method     ChildMotorFreightCodeQuery groupByOe2tbmfrtclass() Group by the Oe2tbMfrtClass column
 * @method     ChildMotorFreightCodeQuery groupByOe2tbmfrtdesc1() Group by the Oe2tbMfrtDesc1 column
 * @method     ChildMotorFreightCodeQuery groupByOe2tbmfrtdesc2() Group by the Oe2tbMfrtDesc2 column
 * @method     ChildMotorFreightCodeQuery groupByOe2tbmfrtdesc3() Group by the Oe2tbMfrtDesc3 column
 * @method     ChildMotorFreightCodeQuery groupByOe2tbmfrtdesc4() Group by the Oe2tbMfrtDesc4 column
 * @method     ChildMotorFreightCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildMotorFreightCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildMotorFreightCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildMotorFreightCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildMotorFreightCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildMotorFreightCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildMotorFreightCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildMotorFreightCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildMotorFreightCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildMotorFreightCode findOne(ConnectionInterface $con = null) Return the first ChildMotorFreightCode matching the query
 * @method     ChildMotorFreightCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildMotorFreightCode matching the query, or a new ChildMotorFreightCode object populated from the query conditions when no match is found
 *
 * @method     ChildMotorFreightCode findOneByOe2tbmfrtcode(string $Oe2tbMfrtCode) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtCode column
 * @method     ChildMotorFreightCode findOneByOe2tbmfrtclass(string $Oe2tbMfrtClass) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtClass column
 * @method     ChildMotorFreightCode findOneByOe2tbmfrtdesc1(string $Oe2tbMfrtDesc1) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc1 column
 * @method     ChildMotorFreightCode findOneByOe2tbmfrtdesc2(string $Oe2tbMfrtDesc2) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc2 column
 * @method     ChildMotorFreightCode findOneByOe2tbmfrtdesc3(string $Oe2tbMfrtDesc3) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc3 column
 * @method     ChildMotorFreightCode findOneByOe2tbmfrtdesc4(string $Oe2tbMfrtDesc4) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc4 column
 * @method     ChildMotorFreightCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildMotorFreightCode filtered by the DateUpdtd column
 * @method     ChildMotorFreightCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildMotorFreightCode filtered by the TimeUpdtd column
 * @method     ChildMotorFreightCode findOneByDummy(string $dummy) Return the first ChildMotorFreightCode filtered by the dummy column *

 * @method     ChildMotorFreightCode requirePk($key, ConnectionInterface $con = null) Return the ChildMotorFreightCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOne(ConnectionInterface $con = null) Return the first ChildMotorFreightCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMotorFreightCode requireOneByOe2tbmfrtcode(string $Oe2tbMfrtCode) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByOe2tbmfrtclass(string $Oe2tbMfrtClass) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtClass column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByOe2tbmfrtdesc1(string $Oe2tbMfrtDesc1) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByOe2tbmfrtdesc2(string $Oe2tbMfrtDesc2) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByOe2tbmfrtdesc3(string $Oe2tbMfrtDesc3) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByOe2tbmfrtdesc4(string $Oe2tbMfrtDesc4) Return the first ChildMotorFreightCode filtered by the Oe2tbMfrtDesc4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildMotorFreightCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildMotorFreightCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMotorFreightCode requireOneByDummy(string $dummy) Return the first ChildMotorFreightCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMotorFreightCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildMotorFreightCode objects based on current ModelCriteria
 * @method     ChildMotorFreightCode[]|ObjectCollection findByOe2tbmfrtcode(string $Oe2tbMfrtCode) Return ChildMotorFreightCode objects filtered by the Oe2tbMfrtCode column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByOe2tbmfrtclass(string $Oe2tbMfrtClass) Return ChildMotorFreightCode objects filtered by the Oe2tbMfrtClass column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByOe2tbmfrtdesc1(string $Oe2tbMfrtDesc1) Return ChildMotorFreightCode objects filtered by the Oe2tbMfrtDesc1 column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByOe2tbmfrtdesc2(string $Oe2tbMfrtDesc2) Return ChildMotorFreightCode objects filtered by the Oe2tbMfrtDesc2 column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByOe2tbmfrtdesc3(string $Oe2tbMfrtDesc3) Return ChildMotorFreightCode objects filtered by the Oe2tbMfrtDesc3 column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByOe2tbmfrtdesc4(string $Oe2tbMfrtDesc4) Return ChildMotorFreightCode objects filtered by the Oe2tbMfrtDesc4 column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildMotorFreightCode objects filtered by the DateUpdtd column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildMotorFreightCode objects filtered by the TimeUpdtd column
 * @method     ChildMotorFreightCode[]|ObjectCollection findByDummy(string $dummy) Return ChildMotorFreightCode objects filtered by the dummy column
 * @method     ChildMotorFreightCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class MotorFreightCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\MotorFreightCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\MotorFreightCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildMotorFreightCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildMotorFreightCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildMotorFreightCodeQuery) {
            return $criteria;
        }
        $query = new ChildMotorFreightCodeQuery();
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
     * @return ChildMotorFreightCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(MotorFreightCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = MotorFreightCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildMotorFreightCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT Oe2tbMfrtCode, Oe2tbMfrtClass, Oe2tbMfrtDesc1, Oe2tbMfrtDesc2, Oe2tbMfrtDesc3, Oe2tbMfrtDesc4, DateUpdtd, TimeUpdtd, dummy FROM so_mfrt_code WHERE Oe2tbMfrtCode = :p0';
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
            /** @var ChildMotorFreightCode $obj */
            $obj = new ChildMotorFreightCode();
            $obj->hydrate($row);
            MotorFreightCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildMotorFreightCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Oe2tbMfrtCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOe2tbmfrtcode('fooValue');   // WHERE Oe2tbMfrtCode = 'fooValue'
     * $query->filterByOe2tbmfrtcode('%fooValue%', Criteria::LIKE); // WHERE Oe2tbMfrtCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oe2tbmfrtcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByOe2tbmfrtcode($oe2tbmfrtcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oe2tbmfrtcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, $oe2tbmfrtcode, $comparison);
    }

    /**
     * Filter the query on the Oe2tbMfrtClass column
     *
     * Example usage:
     * <code>
     * $query->filterByOe2tbmfrtclass('fooValue');   // WHERE Oe2tbMfrtClass = 'fooValue'
     * $query->filterByOe2tbmfrtclass('%fooValue%', Criteria::LIKE); // WHERE Oe2tbMfrtClass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oe2tbmfrtclass The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByOe2tbmfrtclass($oe2tbmfrtclass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oe2tbmfrtclass)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTCLASS, $oe2tbmfrtclass, $comparison);
    }

    /**
     * Filter the query on the Oe2tbMfrtDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOe2tbmfrtdesc1('fooValue');   // WHERE Oe2tbMfrtDesc1 = 'fooValue'
     * $query->filterByOe2tbmfrtdesc1('%fooValue%', Criteria::LIKE); // WHERE Oe2tbMfrtDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oe2tbmfrtdesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByOe2tbmfrtdesc1($oe2tbmfrtdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oe2tbmfrtdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC1, $oe2tbmfrtdesc1, $comparison);
    }

    /**
     * Filter the query on the Oe2tbMfrtDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOe2tbmfrtdesc2('fooValue');   // WHERE Oe2tbMfrtDesc2 = 'fooValue'
     * $query->filterByOe2tbmfrtdesc2('%fooValue%', Criteria::LIKE); // WHERE Oe2tbMfrtDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oe2tbmfrtdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByOe2tbmfrtdesc2($oe2tbmfrtdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oe2tbmfrtdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC2, $oe2tbmfrtdesc2, $comparison);
    }

    /**
     * Filter the query on the Oe2tbMfrtDesc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOe2tbmfrtdesc3('fooValue');   // WHERE Oe2tbMfrtDesc3 = 'fooValue'
     * $query->filterByOe2tbmfrtdesc3('%fooValue%', Criteria::LIKE); // WHERE Oe2tbMfrtDesc3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oe2tbmfrtdesc3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByOe2tbmfrtdesc3($oe2tbmfrtdesc3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oe2tbmfrtdesc3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC3, $oe2tbmfrtdesc3, $comparison);
    }

    /**
     * Filter the query on the Oe2tbMfrtDesc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOe2tbmfrtdesc4('fooValue');   // WHERE Oe2tbMfrtDesc4 = 'fooValue'
     * $query->filterByOe2tbmfrtdesc4('%fooValue%', Criteria::LIKE); // WHERE Oe2tbMfrtDesc4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oe2tbmfrtdesc4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByOe2tbmfrtdesc4($oe2tbmfrtdesc4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oe2tbmfrtdesc4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTDESC4, $oe2tbmfrtdesc4, $comparison);
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
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MotorFreightCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildMotorFreightCode $motorFreightCode Object to remove from the list of results
     *
     * @return $this|ChildMotorFreightCodeQuery The current query, for fluid interface
     */
    public function prune($motorFreightCode = null)
    {
        if ($motorFreightCode) {
            $this->addUsingAlias(MotorFreightCodeTableMap::COL_OE2TBMFRTCODE, $motorFreightCode->getOe2tbmfrtcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_mfrt_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MotorFreightCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MotorFreightCodeTableMap::clearInstancePool();
            MotorFreightCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(MotorFreightCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(MotorFreightCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            MotorFreightCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            MotorFreightCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // MotorFreightCodeQuery
