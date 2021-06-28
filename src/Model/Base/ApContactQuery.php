<?php

namespace Base;

use \ApContact as ChildApContact;
use \ApContactQuery as ChildApContactQuery;
use \Exception;
use \PDO;
use Map\ApContactTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ap_contact' table.
 *
 *
 *
 * @method     ChildApContactQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildApContactQuery orderByApcpcontid($order = Criteria::ASC) Order by the ApcpContId column
 * @method     ChildApContactQuery orderByApcptitl($order = Criteria::ASC) Order by the ApcpTitl column
 * @method     ChildApContactQuery orderByApcpwhse($order = Criteria::ASC) Order by the ApcpWhse column
 * @method     ChildApContactQuery orderByApcppocont($order = Criteria::ASC) Order by the ApcpPoCont column
 * @method     ChildApContactQuery orderByApcpAchCont($order = Criteria::ASC) Order by the ApcpAchCont column
 * @method     ChildApContactQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildApContactQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildApContactQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildApContactQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildApContactQuery groupByApcpcontid() Group by the ApcpContId column
 * @method     ChildApContactQuery groupByApcptitl() Group by the ApcpTitl column
 * @method     ChildApContactQuery groupByApcpwhse() Group by the ApcpWhse column
 * @method     ChildApContactQuery groupByApcppocont() Group by the ApcpPoCont column
 * @method     ChildApContactQuery groupByApcpAchCont() Group by the ApcpAchCont column
 * @method     ChildApContactQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildApContactQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildApContactQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildApContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildApContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildApContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildApContactQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildApContactQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildApContactQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildApContactQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildApContactQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildApContactQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildApContactQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildApContactQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApContactQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildApContactQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     \VendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildApContact findOne(ConnectionInterface $con = null) Return the first ChildApContact matching the query
 * @method     ChildApContact findOneOrCreate(ConnectionInterface $con = null) Return the first ChildApContact matching the query, or a new ChildApContact object populated from the query conditions when no match is found
 *
 * @method     ChildApContact findOneByApvevendid(string $ApveVendId) Return the first ChildApContact filtered by the ApveVendId column
 * @method     ChildApContact findOneByApcpcontid(string $ApcpContId) Return the first ChildApContact filtered by the ApcpContId column
 * @method     ChildApContact findOneByApcptitl(string $ApcpTitl) Return the first ChildApContact filtered by the ApcpTitl column
 * @method     ChildApContact findOneByApcpwhse(string $ApcpWhse) Return the first ChildApContact filtered by the ApcpWhse column
 * @method     ChildApContact findOneByApcppocont(string $ApcpPoCont) Return the first ChildApContact filtered by the ApcpPoCont column
 * @method     ChildApContact findOneByApcpAchCont(string $ApcpAchCont) Return the first ChildApContact filtered by the ApcpAchCont column
 * @method     ChildApContact findOneByDateupdtd(string $DateUpdtd) Return the first ChildApContact filtered by the DateUpdtd column
 * @method     ChildApContact findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApContact filtered by the TimeUpdtd column
 * @method     ChildApContact findOneByDummy(string $dummy) Return the first ChildApContact filtered by the dummy column *

 * @method     ChildApContact requirePk($key, ConnectionInterface $con = null) Return the ChildApContact by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOne(ConnectionInterface $con = null) Return the first ChildApContact matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApContact requireOneByApvevendid(string $ApveVendId) Return the first ChildApContact filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByApcpcontid(string $ApcpContId) Return the first ChildApContact filtered by the ApcpContId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByApcptitl(string $ApcpTitl) Return the first ChildApContact filtered by the ApcpTitl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByApcpwhse(string $ApcpWhse) Return the first ChildApContact filtered by the ApcpWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByApcppocont(string $ApcpPoCont) Return the first ChildApContact filtered by the ApcpPoCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByApcpAchCont(string $ApcpAchCont) Return the first ChildApContact filtered by the ApcpAchCont column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByDateupdtd(string $DateUpdtd) Return the first ChildApContact filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildApContact filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildApContact requireOneByDummy(string $dummy) Return the first ChildApContact filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildApContact[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildApContact objects based on current ModelCriteria
 * @method     ChildApContact[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildApContact objects filtered by the ApveVendId column
 * @method     ChildApContact[]|ObjectCollection findByApcpcontid(string $ApcpContId) Return ChildApContact objects filtered by the ApcpContId column
 * @method     ChildApContact[]|ObjectCollection findByApcptitl(string $ApcpTitl) Return ChildApContact objects filtered by the ApcpTitl column
 * @method     ChildApContact[]|ObjectCollection findByApcpwhse(string $ApcpWhse) Return ChildApContact objects filtered by the ApcpWhse column
 * @method     ChildApContact[]|ObjectCollection findByApcppocont(string $ApcpPoCont) Return ChildApContact objects filtered by the ApcpPoCont column
 * @method     ChildApContact[]|ObjectCollection findByApcpAchCont(string $ApcpAchCont) Return ChildApContact objects filtered by the ApcpAchCont column
 * @method     ChildApContact[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildApContact objects filtered by the DateUpdtd column
 * @method     ChildApContact[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildApContact objects filtered by the TimeUpdtd column
 * @method     ChildApContact[]|ObjectCollection findByDummy(string $dummy) Return ChildApContact objects filtered by the dummy column
 * @method     ChildApContact[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ApContactQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ApContactQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ApContact', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildApContactQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildApContactQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildApContactQuery) {
            return $criteria;
        }
        $query = new ChildApContactQuery();
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
     * @param array[$ApveVendId, $ApcpContId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildApContact|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ApContactTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ApContactTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildApContact A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ApveVendId, ApcpContId, ApcpTitl, ApcpWhse, ApcpPoCont, ApcpAchCont, DateUpdtd, TimeUpdtd, dummy FROM ap_contact WHERE ApveVendId = :p0 AND ApcpContId = :p1';
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
            /** @var ChildApContact $obj */
            $obj = new ChildApContact();
            $obj->hydrate($row);
            ApContactTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildApContact|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ApContactTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ApContactTableMap::COL_APCPCONTID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ApContactTableMap::COL_APVEVENDID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ApContactTableMap::COL_APCPCONTID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apvevendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the ApcpContId column
     *
     * Example usage:
     * <code>
     * $query->filterByApcpcontid('fooValue');   // WHERE ApcpContId = 'fooValue'
     * $query->filterByApcpcontid('%fooValue%', Criteria::LIKE); // WHERE ApcpContId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apcpcontid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByApcpcontid($apcpcontid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apcpcontid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_APCPCONTID, $apcpcontid, $comparison);
    }

    /**
     * Filter the query on the ApcpTitl column
     *
     * Example usage:
     * <code>
     * $query->filterByApcptitl('fooValue');   // WHERE ApcpTitl = 'fooValue'
     * $query->filterByApcptitl('%fooValue%', Criteria::LIKE); // WHERE ApcpTitl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apcptitl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByApcptitl($apcptitl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apcptitl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_APCPTITL, $apcptitl, $comparison);
    }

    /**
     * Filter the query on the ApcpWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByApcpwhse('fooValue');   // WHERE ApcpWhse = 'fooValue'
     * $query->filterByApcpwhse('%fooValue%', Criteria::LIKE); // WHERE ApcpWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apcpwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByApcpwhse($apcpwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apcpwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_APCPWHSE, $apcpwhse, $comparison);
    }

    /**
     * Filter the query on the ApcpPoCont column
     *
     * Example usage:
     * <code>
     * $query->filterByApcppocont('fooValue');   // WHERE ApcpPoCont = 'fooValue'
     * $query->filterByApcppocont('%fooValue%', Criteria::LIKE); // WHERE ApcpPoCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apcppocont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByApcppocont($apcppocont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apcppocont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_APCPPOCONT, $apcppocont, $comparison);
    }

    /**
     * Filter the query on the ApcpAchCont column
     *
     * Example usage:
     * <code>
     * $query->filterByApcpAchCont('fooValue');   // WHERE ApcpAchCont = 'fooValue'
     * $query->filterByApcpAchCont('%fooValue%', Criteria::LIKE); // WHERE ApcpAchCont LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apcpAchCont The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByApcpAchCont($apcpAchCont = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apcpAchCont)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_APCPACHCONT, $apcpAchCont, $comparison);
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
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ApContactTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildApContactQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ApContactTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ApContactTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
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
     * @return $this|ChildApContactQuery The current query, for fluid interface
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
     * @param   ChildApContact $apContact Object to remove from the list of results
     *
     * @return $this|ChildApContactQuery The current query, for fluid interface
     */
    public function prune($apContact = null)
    {
        if ($apContact) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ApContactTableMap::COL_APVEVENDID), $apContact->getApvevendid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ApContactTableMap::COL_APCPCONTID), $apContact->getApcpcontid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ap_contact table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ApContactTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ApContactTableMap::clearInstancePool();
            ApContactTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ApContactTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ApContactTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ApContactTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ApContactTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ApContactQuery
