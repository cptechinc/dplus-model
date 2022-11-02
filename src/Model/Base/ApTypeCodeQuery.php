<?php

namespace Base;

use \ApTypeCode as ChildApTypeCode;
use \ApTypeCodeQuery as ChildApTypeCodeQuery;
use \Exception;
use \PDO;
use Map\ApTypeCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_type_code' table.
 *
 *
 *
 * @method     ChildApTypeCodeQuery orderByAptbtypecode($order = Criteria::ASC) Order by the AptbTypeCode column
 * @method     ChildApTypeCodeQuery orderByAptbtypedesc($order = Criteria::ASC) Order by the AptbTypeDesc column
 * @method     ChildApTypeCodeQuery orderByAptbtypefab($order = Criteria::ASC) Order by the AptbTypeFab column
 * @method     ChildApTypeCodeQuery orderByAptbtypeprod($order = Criteria::ASC) Order by the AptbTypeProd column
 * @method     ChildApTypeCodeQuery orderByAptbtypecomp($order = Criteria::ASC) Order by the AptbTypeComp column
 * @method     ChildApTypeCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApTypeCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApTypeCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApTypeCodeQuery groupByAptbtypecode() Group by the AptbTypeCode column
 * @method     ChildApTypeCodeQuery groupByAptbtypedesc() Group by the AptbTypeDesc column
 * @method     ChildApTypeCodeQuery groupByAptbtypefab() Group by the AptbTypeFab column
 * @method     ChildApTypeCodeQuery groupByAptbtypeprod() Group by the AptbTypeProd column
 * @method     ChildApTypeCodeQuery groupByAptbtypecomp() Group by the AptbTypeComp column
 * @method     ChildApTypeCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApTypeCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApTypeCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApTypeCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApTypeCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApTypeCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApTypeCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApTypeCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApTypeCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApTypeCodeQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApTypeCodeQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApTypeCodeQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApTypeCodeQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApTypeCode findOne(ConnectionInterface $con = null) Return the first ChildApTypeCode matching the query
 * @method     ChildApTypeCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildApTypeCode matching the query, or a new ChildApTypeCode object populated from the query conditions when no match is found
 *
 * @method     ChildApTypeCode findOneByAptbtypecode(string $AptbTypeCode) Return the first ChildApTypeCode filtered by the AptbTypeCode column
 * @method     ChildApTypeCode findOneByAptbtypedesc(string $AptbTypeDesc) Return the first ChildApTypeCode filtered by the AptbTypeDesc column
 * @method     ChildApTypeCode findOneByAptbtypefab(string $AptbTypeFab) Return the first ChildApTypeCode filtered by the AptbTypeFab column
 * @method     ChildApTypeCode findOneByAptbtypeprod(string $AptbTypeProd) Return the first ChildApTypeCode filtered by the AptbTypeProd column
 * @method     ChildApTypeCode findOneByAptbtypecomp(string $AptbTypeComp) Return the first ChildApTypeCode filtered by the AptbTypeComp column
 * @method     ChildApTypeCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildApTypeCode filtered by the DateUpdtd column
 * @method     ChildApTypeCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApTypeCode filtered by the TimeUpdtd column
 * @method     ChildApTypeCode findOneByDummy(string $dummy) Return the first ChildApTypeCode filtered by the dummy column *

 * @method     ChildApTypeCode requirePk($key, ConnectionInterface $con = null) Return the ChildApTypeCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOne(ConnectionInterface $con = null) Return the first ChildApTypeCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApTypeCode requireOneByAptbtypecode(string $AptbTypeCode) Return the first ChildApTypeCode filtered by the AptbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypedesc(string $AptbTypeDesc) Return the first ChildApTypeCode filtered by the AptbTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypefab(string $AptbTypeFab) Return the first ChildApTypeCode filtered by the AptbTypeFab column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypeprod(string $AptbTypeProd) Return the first ChildApTypeCode filtered by the AptbTypeProd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByAptbtypecomp(string $AptbTypeComp) Return the first ChildApTypeCode filtered by the AptbTypeComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApTypeCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApTypeCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApTypeCode requireOneByDummy(string $dummy) Return the first ChildApTypeCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApTypeCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildApTypeCode objects based on current ModelCriteria
 * @method     ChildApTypeCode[]|ObjectCollection findByAptbtypecode(string $AptbTypeCode) Return ChildApTypeCode objects filtered by the AptbTypeCode column
 * @method     ChildApTypeCode[]|ObjectCollection findByAptbtypedesc(string $AptbTypeDesc) Return ChildApTypeCode objects filtered by the AptbTypeDesc column
 * @method     ChildApTypeCode[]|ObjectCollection findByAptbtypefab(string $AptbTypeFab) Return ChildApTypeCode objects filtered by the AptbTypeFab column
 * @method     ChildApTypeCode[]|ObjectCollection findByAptbtypeprod(string $AptbTypeProd) Return ChildApTypeCode objects filtered by the AptbTypeProd column
 * @method     ChildApTypeCode[]|ObjectCollection findByAptbtypecomp(string $AptbTypeComp) Return ChildApTypeCode objects filtered by the AptbTypeComp column
 * @method     ChildApTypeCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildApTypeCode objects filtered by the DateUpdtd column
 * @method     ChildApTypeCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildApTypeCode objects filtered by the TimeUpdtd column
 * @method     ChildApTypeCode[]|ObjectCollection findByDummy(string $dummy) Return ChildApTypeCode objects filtered by the dummy column
 * @method     ChildApTypeCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ApTypeCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApTypeCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApTypeCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApTypeCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApTypeCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildApTypeCodeQuery) {
            return $criteria;
        }
        $query = new ChildApTypeCodeQuery();
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
     * @return ChildApTypeCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApTypeCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApTypeCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildApTypeCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT AptbTypeCode, AptbTypeDesc, AptbTypeFab, AptbTypeProd, AptbTypeComp, DateUpdtd, TimeUpdtd, dummy FROM ap_type_code WHERE AptbTypeCode = :p0';
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
            /** @var ChildApTypeCode $obj */
            $obj = new ChildApTypeCode();
            $obj->hydrate($row);
            ApTypeCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildApTypeCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AptbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypecode('fooValue');   // WHERE AptbTypeCode = 'fooValue'
     * $query->filterByAptbtypecode('%fooValue%', Criteria::LIKE); // WHERE AptbTypeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbtypecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByAptbtypecode($aptbtypecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $aptbtypecode, $comparison);
    }

    /**
     * Filter the query on the AptbTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypedesc('fooValue');   // WHERE AptbTypeDesc = 'fooValue'
     * $query->filterByAptbtypedesc('%fooValue%', Criteria::LIKE); // WHERE AptbTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbtypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByAptbtypedesc($aptbtypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPEDESC, $aptbtypedesc, $comparison);
    }

    /**
     * Filter the query on the AptbTypeFab column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypefab('fooValue');   // WHERE AptbTypeFab = 'fooValue'
     * $query->filterByAptbtypefab('%fooValue%', Criteria::LIKE); // WHERE AptbTypeFab LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbtypefab The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByAptbtypefab($aptbtypefab = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypefab)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPEFAB, $aptbtypefab, $comparison);
    }

    /**
     * Filter the query on the AptbTypeProd column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypeprod('fooValue');   // WHERE AptbTypeProd = 'fooValue'
     * $query->filterByAptbtypeprod('%fooValue%', Criteria::LIKE); // WHERE AptbTypeProd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbtypeprod The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByAptbtypeprod($aptbtypeprod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypeprod)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPEPROD, $aptbtypeprod, $comparison);
    }

    /**
     * Filter the query on the AptbTypeComp column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbtypecomp('fooValue');   // WHERE AptbTypeComp = 'fooValue'
     * $query->filterByAptbtypecomp('%fooValue%', Criteria::LIKE); // WHERE AptbTypeComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbtypecomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByAptbtypecomp($aptbtypecomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbtypecomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECOMP, $aptbtypecomp, $comparison);
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
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApTypeCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $vendor->getAptbtypecode(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            return $this
                ->useVendorQuery()
                ->filterByPrimaryKeys($vendor->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
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
     * @param   ChildApTypeCode $apTypeCode Object to remove from the list of results
     *
     * @return $this|ChildApTypeCodeQuery The current query, for fluid interface
     */
    public function prune($apTypeCode = null)
    {
        if ($apTypeCode) {
            $this->addUsingAlias(ApTypeCodeTableMap::COL_APTBTYPECODE, $apTypeCode->getAptbtypecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_type_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApTypeCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApTypeCodeTableMap::clearInstancePool();
            ApTypeCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApTypeCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApTypeCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApTypeCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApTypeCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ApTypeCodeQuery
