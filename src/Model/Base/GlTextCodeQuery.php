<?php

namespace Base;

use \GlTextCode as ChildGlTextCode;
use \GlTextCodeQuery as ChildGlTextCodeQuery;
use \Exception;
use \PDO;
use Map\GlTextCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'gl_text_code' table.
 *
 *
 *
 * @method     ChildGlTextCodeQuery orderByGltbtextcode($order = Criteria::ASC) Order by the GltbTextCode column
 * @method     ChildGlTextCodeQuery orderByGltbtext1($order = Criteria::ASC) Order by the GltbText1 column
 * @method     ChildGlTextCodeQuery orderByGltbtext2($order = Criteria::ASC) Order by the GltbText2 column
 * @method     ChildGlTextCodeQuery orderByGltbtext3($order = Criteria::ASC) Order by the GltbText3 column
 * @method     ChildGlTextCodeQuery orderByGltbtext4($order = Criteria::ASC) Order by the GltbText4 column
 * @method     ChildGlTextCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildGlTextCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildGlTextCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildGlTextCodeQuery groupByGltbtextcode() Group by the GltbTextCode column
 * @method     ChildGlTextCodeQuery groupByGltbtext1() Group by the GltbText1 column
 * @method     ChildGlTextCodeQuery groupByGltbtext2() Group by the GltbText2 column
 * @method     ChildGlTextCodeQuery groupByGltbtext3() Group by the GltbText3 column
 * @method     ChildGlTextCodeQuery groupByGltbtext4() Group by the GltbText4 column
 * @method     ChildGlTextCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildGlTextCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildGlTextCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildGlTextCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildGlTextCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildGlTextCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildGlTextCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildGlTextCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildGlTextCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildGlTextCode findOne(ConnectionInterface $con = null) Return the first ChildGlTextCode matching the query
 * @method     ChildGlTextCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildGlTextCode matching the query, or a new ChildGlTextCode object populated from the query conditions when no match is found
 *
 * @method     ChildGlTextCode findOneByGltbtextcode(string $GltbTextCode) Return the first ChildGlTextCode filtered by the GltbTextCode column
 * @method     ChildGlTextCode findOneByGltbtext1(string $GltbText1) Return the first ChildGlTextCode filtered by the GltbText1 column
 * @method     ChildGlTextCode findOneByGltbtext2(string $GltbText2) Return the first ChildGlTextCode filtered by the GltbText2 column
 * @method     ChildGlTextCode findOneByGltbtext3(string $GltbText3) Return the first ChildGlTextCode filtered by the GltbText3 column
 * @method     ChildGlTextCode findOneByGltbtext4(string $GltbText4) Return the first ChildGlTextCode filtered by the GltbText4 column
 * @method     ChildGlTextCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildGlTextCode filtered by the DateUpdtd column
 * @method     ChildGlTextCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlTextCode filtered by the TimeUpdtd column
 * @method     ChildGlTextCode findOneByDummy(string $dummy) Return the first ChildGlTextCode filtered by the dummy column *

 * @method     ChildGlTextCode requirePk($key, ConnectionInterface $con = null) Return the ChildGlTextCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOne(ConnectionInterface $con = null) Return the first ChildGlTextCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlTextCode requireOneByGltbtextcode(string $GltbTextCode) Return the first ChildGlTextCode filtered by the GltbTextCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByGltbtext1(string $GltbText1) Return the first ChildGlTextCode filtered by the GltbText1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByGltbtext2(string $GltbText2) Return the first ChildGlTextCode filtered by the GltbText2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByGltbtext3(string $GltbText3) Return the first ChildGlTextCode filtered by the GltbText3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByGltbtext4(string $GltbText4) Return the first ChildGlTextCode filtered by the GltbText4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildGlTextCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildGlTextCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildGlTextCode requireOneByDummy(string $dummy) Return the first ChildGlTextCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildGlTextCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildGlTextCode objects based on current ModelCriteria
 * @method     ChildGlTextCode[]|ObjectCollection findByGltbtextcode(string $GltbTextCode) Return ChildGlTextCode objects filtered by the GltbTextCode column
 * @method     ChildGlTextCode[]|ObjectCollection findByGltbtext1(string $GltbText1) Return ChildGlTextCode objects filtered by the GltbText1 column
 * @method     ChildGlTextCode[]|ObjectCollection findByGltbtext2(string $GltbText2) Return ChildGlTextCode objects filtered by the GltbText2 column
 * @method     ChildGlTextCode[]|ObjectCollection findByGltbtext3(string $GltbText3) Return ChildGlTextCode objects filtered by the GltbText3 column
 * @method     ChildGlTextCode[]|ObjectCollection findByGltbtext4(string $GltbText4) Return ChildGlTextCode objects filtered by the GltbText4 column
 * @method     ChildGlTextCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildGlTextCode objects filtered by the DateUpdtd column
 * @method     ChildGlTextCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildGlTextCode objects filtered by the TimeUpdtd column
 * @method     ChildGlTextCode[]|ObjectCollection findByDummy(string $dummy) Return ChildGlTextCode objects filtered by the dummy column
 * @method     ChildGlTextCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class GlTextCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\GlTextCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\GlTextCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildGlTextCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildGlTextCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildGlTextCodeQuery) {
            return $criteria;
        }
        $query = new ChildGlTextCodeQuery();
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
     * @return ChildGlTextCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(GlTextCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = GlTextCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildGlTextCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT GltbTextCode, GltbText1, GltbText2, GltbText3, GltbText4, DateUpdtd, TimeUpdtd, dummy FROM gl_text_code WHERE GltbTextCode = :p0';
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
            /** @var ChildGlTextCode $obj */
            $obj = new ChildGlTextCode();
            $obj->hydrate($row);
            GlTextCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildGlTextCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXTCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXTCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the GltbTextCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbtextcode('fooValue');   // WHERE GltbTextCode = 'fooValue'
     * $query->filterByGltbtextcode('%fooValue%', Criteria::LIKE); // WHERE GltbTextCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbtextcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByGltbtextcode($gltbtextcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbtextcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXTCODE, $gltbtextcode, $comparison);
    }

    /**
     * Filter the query on the GltbText1 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbtext1('fooValue');   // WHERE GltbText1 = 'fooValue'
     * $query->filterByGltbtext1('%fooValue%', Criteria::LIKE); // WHERE GltbText1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbtext1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByGltbtext1($gltbtext1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbtext1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXT1, $gltbtext1, $comparison);
    }

    /**
     * Filter the query on the GltbText2 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbtext2('fooValue');   // WHERE GltbText2 = 'fooValue'
     * $query->filterByGltbtext2('%fooValue%', Criteria::LIKE); // WHERE GltbText2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbtext2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByGltbtext2($gltbtext2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbtext2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXT2, $gltbtext2, $comparison);
    }

    /**
     * Filter the query on the GltbText3 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbtext3('fooValue');   // WHERE GltbText3 = 'fooValue'
     * $query->filterByGltbtext3('%fooValue%', Criteria::LIKE); // WHERE GltbText3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbtext3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByGltbtext3($gltbtext3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbtext3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXT3, $gltbtext3, $comparison);
    }

    /**
     * Filter the query on the GltbText4 column
     *
     * Example usage:
     * <code>
     * $query->filterByGltbtext4('fooValue');   // WHERE GltbText4 = 'fooValue'
     * $query->filterByGltbtext4('%fooValue%', Criteria::LIKE); // WHERE GltbText4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gltbtext4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByGltbtext4($gltbtext4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gltbtext4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXT4, $gltbtext4, $comparison);
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
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlTextCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildGlTextCode $glTextCode Object to remove from the list of results
     *
     * @return $this|ChildGlTextCodeQuery The current query, for fluid interface
     */
    public function prune($glTextCode = null)
    {
        if ($glTextCode) {
            $this->addUsingAlias(GlTextCodeTableMap::COL_GLTBTEXTCODE, $glTextCode->getGltbtextcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the gl_text_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(GlTextCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GlTextCodeTableMap::clearInstancePool();
            GlTextCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(GlTextCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(GlTextCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            GlTextCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            GlTextCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // GlTextCodeQuery
