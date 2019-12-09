<?php

namespace Base;

use \GlCode as ChildGlCode;
use \GlCodeQuery as ChildGlCodeQuery;
use \Exception;
use \PDO;
use Map\GlCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'gl_master' table.
 *
 *
 *
 * @method     ChildGlCodeQuery orderByGlmaacct($order = Criteria::ASC) Order by the GlmaAcct column
 * @method     ChildGlCodeQuery orderByGlmadesc($order = Criteria::ASC) Order by the GlmaDesc column
 * @method     ChildGlCodeQuery orderByGlmadrcr($order = Criteria::ASC) Order by the GlmaDrCr column
 * @method     ChildGlCodeQuery orderByGlmaclosacct($order = Criteria::ASC) Order by the GlmaClosAcct column
 * @method     ChildGlCodeQuery orderByGlmapackpost($order = Criteria::ASC) Order by the GlmaPackPost column
 * @method     ChildGlCodeQuery orderByGlmavald($order = Criteria::ASC) Order by the GlmaVald column
 * @method     ChildGlCodeQuery orderByGlmaco01($order = Criteria::ASC) Order by the GlmaCo01 column
 * @method     ChildGlCodeQuery orderByGlmaco02($order = Criteria::ASC) Order by the GlmaCo02 column
 * @method     ChildGlCodeQuery orderByGlmaco03($order = Criteria::ASC) Order by the GlmaCo03 column
 * @method     ChildGlCodeQuery orderByGlmaco04($order = Criteria::ASC) Order by the GlmaCo04 column
 * @method     ChildGlCodeQuery orderByGlmaco05($order = Criteria::ASC) Order by the GlmaCo05 column
 * @method     ChildGlCodeQuery orderByGlmaco06($order = Criteria::ASC) Order by the GlmaCo06 column
 * @method     ChildGlCodeQuery orderByGlmaco07($order = Criteria::ASC) Order by the GlmaCo07 column
 * @method     ChildGlCodeQuery orderByGlmaco08($order = Criteria::ASC) Order by the GlmaCo08 column
 * @method     ChildGlCodeQuery orderByGlmaco09($order = Criteria::ASC) Order by the GlmaCo09 column
 * @method     ChildGlCodeQuery orderByGlmaco10($order = Criteria::ASC) Order by the GlmaCo10 column
 * @method     ChildGlCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildGlCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildGlCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildGlCodeQuery groupByGlmaacct() Group by the GlmaAcct column
 * @method     ChildGlCodeQuery groupByGlmadesc() Group by the GlmaDesc column
 * @method     ChildGlCodeQuery groupByGlmadrcr() Group by the GlmaDrCr column
 * @method     ChildGlCodeQuery groupByGlmaclosacct() Group by the GlmaClosAcct column
 * @method     ChildGlCodeQuery groupByGlmapackpost() Group by the GlmaPackPost column
 * @method     ChildGlCodeQuery groupByGlmavald() Group by the GlmaVald column
 * @method     ChildGlCodeQuery groupByGlmaco01() Group by the GlmaCo01 column
 * @method     ChildGlCodeQuery groupByGlmaco02() Group by the GlmaCo02 column
 * @method     ChildGlCodeQuery groupByGlmaco03() Group by the GlmaCo03 column
 * @method     ChildGlCodeQuery groupByGlmaco04() Group by the GlmaCo04 column
 * @method     ChildGlCodeQuery groupByGlmaco05() Group by the GlmaCo05 column
 * @method     ChildGlCodeQuery groupByGlmaco06() Group by the GlmaCo06 column
 * @method     ChildGlCodeQuery groupByGlmaco07() Group by the GlmaCo07 column
 * @method     ChildGlCodeQuery groupByGlmaco08() Group by the GlmaCo08 column
 * @method     ChildGlCodeQuery groupByGlmaco09() Group by the GlmaCo09 column
 * @method     ChildGlCodeQuery groupByGlmaco10() Group by the GlmaCo10 column
 * @method     ChildGlCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildGlCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildGlCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildGlCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildGlCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildGlCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildGlCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildGlCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildGlCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildGlCode findOne(ConnectionInterface $con = null) Return the first ChildGlCode matching the query
 * @method     ChildGlCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildGlCode matching the query, or a new ChildGlCode object populated from the query conditions when no match is found
 *
 * @method     ChildGlCode findOneByGlmaacct(string $GlmaAcct) Return the first ChildGlCode filtered by the GlmaAcct column
 * @method     ChildGlCode findOneByGlmadesc(string $GlmaDesc) Return the first ChildGlCode filtered by the GlmaDesc column
 * @method     ChildGlCode findOneByGlmadrcr(string $GlmaDrCr) Return the first ChildGlCode filtered by the GlmaDrCr column
 * @method     ChildGlCode findOneByGlmaclosacct(string $GlmaClosAcct) Return the first ChildGlCode filtered by the GlmaClosAcct column
 * @method     ChildGlCode findOneByGlmapackpost(string $GlmaPackPost) Return the first ChildGlCode filtered by the GlmaPackPost column
 * @method     ChildGlCode findOneByGlmavald(string $GlmaVald) Return the first ChildGlCode filtered by the GlmaVald column
 * @method     ChildGlCode findOneByGlmaco01(string $GlmaCo01) Return the first ChildGlCode filtered by the GlmaCo01 column
 * @method     ChildGlCode findOneByGlmaco02(string $GlmaCo02) Return the first ChildGlCode filtered by the GlmaCo02 column
 * @method     ChildGlCode findOneByGlmaco03(string $GlmaCo03) Return the first ChildGlCode filtered by the GlmaCo03 column
 * @method     ChildGlCode findOneByGlmaco04(string $GlmaCo04) Return the first ChildGlCode filtered by the GlmaCo04 column
 * @method     ChildGlCode findOneByGlmaco05(string $GlmaCo05) Return the first ChildGlCode filtered by the GlmaCo05 column
 * @method     ChildGlCode findOneByGlmaco06(string $GlmaCo06) Return the first ChildGlCode filtered by the GlmaCo06 column
 * @method     ChildGlCode findOneByGlmaco07(string $GlmaCo07) Return the first ChildGlCode filtered by the GlmaCo07 column
 * @method     ChildGlCode findOneByGlmaco08(string $GlmaCo08) Return the first ChildGlCode filtered by the GlmaCo08 column
 * @method     ChildGlCode findOneByGlmaco09(string $GlmaCo09) Return the first ChildGlCode filtered by the GlmaCo09 column
 * @method     ChildGlCode findOneByGlmaco10(string $GlmaCo10) Return the first ChildGlCode filtered by the GlmaCo10 column
 * @method     ChildGlCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildGlCode filtered by the DateUpdtd column
 * @method     ChildGlCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlCode filtered by the TimeUpdtd column
 * @method     ChildGlCode findOneByDummy(string $dummy) Return the first ChildGlCode filtered by the dummy column *

 * @method     ChildGlCode requirePk($key, ConnectionInterface $con = null) Return the ChildGlCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOne(ConnectionInterface $con = null) Return the first ChildGlCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlCode requireOneByGlmaacct(string $GlmaAcct) Return the first ChildGlCode filtered by the GlmaAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmadesc(string $GlmaDesc) Return the first ChildGlCode filtered by the GlmaDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmadrcr(string $GlmaDrCr) Return the first ChildGlCode filtered by the GlmaDrCr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaclosacct(string $GlmaClosAcct) Return the first ChildGlCode filtered by the GlmaClosAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmapackpost(string $GlmaPackPost) Return the first ChildGlCode filtered by the GlmaPackPost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmavald(string $GlmaVald) Return the first ChildGlCode filtered by the GlmaVald column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco01(string $GlmaCo01) Return the first ChildGlCode filtered by the GlmaCo01 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco02(string $GlmaCo02) Return the first ChildGlCode filtered by the GlmaCo02 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco03(string $GlmaCo03) Return the first ChildGlCode filtered by the GlmaCo03 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco04(string $GlmaCo04) Return the first ChildGlCode filtered by the GlmaCo04 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco05(string $GlmaCo05) Return the first ChildGlCode filtered by the GlmaCo05 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco06(string $GlmaCo06) Return the first ChildGlCode filtered by the GlmaCo06 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco07(string $GlmaCo07) Return the first ChildGlCode filtered by the GlmaCo07 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco08(string $GlmaCo08) Return the first ChildGlCode filtered by the GlmaCo08 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco09(string $GlmaCo09) Return the first ChildGlCode filtered by the GlmaCo09 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByGlmaco10(string $GlmaCo10) Return the first ChildGlCode filtered by the GlmaCo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildGlCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlCode requireOneByDummy(string $dummy) Return the first ChildGlCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildGlCode objects based on current ModelCriteria
 * @method     ChildGlCode[]|ObjectCollection findByGlmaacct(string $GlmaAcct) Return ChildGlCode objects filtered by the GlmaAcct column
 * @method     ChildGlCode[]|ObjectCollection findByGlmadesc(string $GlmaDesc) Return ChildGlCode objects filtered by the GlmaDesc column
 * @method     ChildGlCode[]|ObjectCollection findByGlmadrcr(string $GlmaDrCr) Return ChildGlCode objects filtered by the GlmaDrCr column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaclosacct(string $GlmaClosAcct) Return ChildGlCode objects filtered by the GlmaClosAcct column
 * @method     ChildGlCode[]|ObjectCollection findByGlmapackpost(string $GlmaPackPost) Return ChildGlCode objects filtered by the GlmaPackPost column
 * @method     ChildGlCode[]|ObjectCollection findByGlmavald(string $GlmaVald) Return ChildGlCode objects filtered by the GlmaVald column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco01(string $GlmaCo01) Return ChildGlCode objects filtered by the GlmaCo01 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco02(string $GlmaCo02) Return ChildGlCode objects filtered by the GlmaCo02 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco03(string $GlmaCo03) Return ChildGlCode objects filtered by the GlmaCo03 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco04(string $GlmaCo04) Return ChildGlCode objects filtered by the GlmaCo04 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco05(string $GlmaCo05) Return ChildGlCode objects filtered by the GlmaCo05 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco06(string $GlmaCo06) Return ChildGlCode objects filtered by the GlmaCo06 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco07(string $GlmaCo07) Return ChildGlCode objects filtered by the GlmaCo07 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco08(string $GlmaCo08) Return ChildGlCode objects filtered by the GlmaCo08 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco09(string $GlmaCo09) Return ChildGlCode objects filtered by the GlmaCo09 column
 * @method     ChildGlCode[]|ObjectCollection findByGlmaco10(string $GlmaCo10) Return ChildGlCode objects filtered by the GlmaCo10 column
 * @method     ChildGlCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildGlCode objects filtered by the DateUpdtd column
 * @method     ChildGlCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildGlCode objects filtered by the TimeUpdtd column
 * @method     ChildGlCode[]|ObjectCollection findByDummy(string $dummy) Return ChildGlCode objects filtered by the dummy column
 * @method     ChildGlCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class GlCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\GlCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\GlCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildGlCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildGlCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildGlCodeQuery) {
            return $criteria;
        }
        $query = new ChildGlCodeQuery();
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
     * @return ChildGlCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(GlCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = GlCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildGlCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT GlmaAcct, GlmaDesc, GlmaDrCr, GlmaClosAcct, GlmaPackPost, GlmaVald, GlmaCo01, GlmaCo02, GlmaCo03, GlmaCo04, GlmaCo05, GlmaCo06, GlmaCo07, GlmaCo08, GlmaCo09, GlmaCo10, DateUpdtd, TimeUpdtd, dummy FROM gl_master WHERE GlmaAcct = :p0';
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
            /** @var ChildGlCode $obj */
            $obj = new ChildGlCode();
            $obj->hydrate($row);
            GlCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildGlCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GlmaAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaacct('fooValue');   // WHERE GlmaAcct = 'fooValue'
     * $query->filterByGlmaacct('%fooValue%', Criteria::LIKE); // WHERE GlmaAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaacct($glmaacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $glmaacct, $comparison);
    }

    /**
     * Filter the query on the GlmaDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmadesc('fooValue');   // WHERE GlmaDesc = 'fooValue'
     * $query->filterByGlmadesc('%fooValue%', Criteria::LIKE); // WHERE GlmaDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmadesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmadesc($glmadesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmadesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMADESC, $glmadesc, $comparison);
    }

    /**
     * Filter the query on the GlmaDrCr column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmadrcr('fooValue');   // WHERE GlmaDrCr = 'fooValue'
     * $query->filterByGlmadrcr('%fooValue%', Criteria::LIKE); // WHERE GlmaDrCr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmadrcr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmadrcr($glmadrcr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmadrcr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMADRCR, $glmadrcr, $comparison);
    }

    /**
     * Filter the query on the GlmaClosAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaclosacct('fooValue');   // WHERE GlmaClosAcct = 'fooValue'
     * $query->filterByGlmaclosacct('%fooValue%', Criteria::LIKE); // WHERE GlmaClosAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaclosacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaclosacct($glmaclosacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaclosacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACLOSACCT, $glmaclosacct, $comparison);
    }

    /**
     * Filter the query on the GlmaPackPost column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmapackpost('fooValue');   // WHERE GlmaPackPost = 'fooValue'
     * $query->filterByGlmapackpost('%fooValue%', Criteria::LIKE); // WHERE GlmaPackPost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmapackpost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmapackpost($glmapackpost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmapackpost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMAPACKPOST, $glmapackpost, $comparison);
    }

    /**
     * Filter the query on the GlmaVald column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmavald('fooValue');   // WHERE GlmaVald = 'fooValue'
     * $query->filterByGlmavald('%fooValue%', Criteria::LIKE); // WHERE GlmaVald LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmavald The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmavald($glmavald = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmavald)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMAVALD, $glmavald, $comparison);
    }

    /**
     * Filter the query on the GlmaCo01 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco01('fooValue');   // WHERE GlmaCo01 = 'fooValue'
     * $query->filterByGlmaco01('%fooValue%', Criteria::LIKE); // WHERE GlmaCo01 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco01 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco01($glmaco01 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco01)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO01, $glmaco01, $comparison);
    }

    /**
     * Filter the query on the GlmaCo02 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco02('fooValue');   // WHERE GlmaCo02 = 'fooValue'
     * $query->filterByGlmaco02('%fooValue%', Criteria::LIKE); // WHERE GlmaCo02 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco02 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco02($glmaco02 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco02)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO02, $glmaco02, $comparison);
    }

    /**
     * Filter the query on the GlmaCo03 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco03('fooValue');   // WHERE GlmaCo03 = 'fooValue'
     * $query->filterByGlmaco03('%fooValue%', Criteria::LIKE); // WHERE GlmaCo03 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco03 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco03($glmaco03 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco03)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO03, $glmaco03, $comparison);
    }

    /**
     * Filter the query on the GlmaCo04 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco04('fooValue');   // WHERE GlmaCo04 = 'fooValue'
     * $query->filterByGlmaco04('%fooValue%', Criteria::LIKE); // WHERE GlmaCo04 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco04 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco04($glmaco04 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco04)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO04, $glmaco04, $comparison);
    }

    /**
     * Filter the query on the GlmaCo05 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco05('fooValue');   // WHERE GlmaCo05 = 'fooValue'
     * $query->filterByGlmaco05('%fooValue%', Criteria::LIKE); // WHERE GlmaCo05 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco05 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco05($glmaco05 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco05)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO05, $glmaco05, $comparison);
    }

    /**
     * Filter the query on the GlmaCo06 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco06('fooValue');   // WHERE GlmaCo06 = 'fooValue'
     * $query->filterByGlmaco06('%fooValue%', Criteria::LIKE); // WHERE GlmaCo06 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco06 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco06($glmaco06 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco06)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO06, $glmaco06, $comparison);
    }

    /**
     * Filter the query on the GlmaCo07 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco07('fooValue');   // WHERE GlmaCo07 = 'fooValue'
     * $query->filterByGlmaco07('%fooValue%', Criteria::LIKE); // WHERE GlmaCo07 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco07 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco07($glmaco07 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco07)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO07, $glmaco07, $comparison);
    }

    /**
     * Filter the query on the GlmaCo08 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco08('fooValue');   // WHERE GlmaCo08 = 'fooValue'
     * $query->filterByGlmaco08('%fooValue%', Criteria::LIKE); // WHERE GlmaCo08 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco08 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco08($glmaco08 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco08)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO08, $glmaco08, $comparison);
    }

    /**
     * Filter the query on the GlmaCo09 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco09('fooValue');   // WHERE GlmaCo09 = 'fooValue'
     * $query->filterByGlmaco09('%fooValue%', Criteria::LIKE); // WHERE GlmaCo09 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco09 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco09($glmaco09 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco09)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO09, $glmaco09, $comparison);
    }

    /**
     * Filter the query on the GlmaCo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByGlmaco10('fooValue');   // WHERE GlmaCo10 = 'fooValue'
     * $query->filterByGlmaco10('%fooValue%', Criteria::LIKE); // WHERE GlmaCo10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glmaco10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByGlmaco10($glmaco10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glmaco10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_GLMACO10, $glmaco10, $comparison);
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
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildGlCode $glCode Object to remove from the list of results
     *
     * @return $this|ChildGlCodeQuery The current query, for fluid interface
     */
    public function prune($glCode = null)
    {
        if ($glCode) {
            $this->addUsingAlias(GlCodeTableMap::COL_GLMAACCT, $glCode->getGlmaacct(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the gl_master table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GlCodeTableMap::clearInstancePool();
            GlCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(GlCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(GlCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            GlCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            GlCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // GlCodeQuery
