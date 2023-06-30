<?php

namespace Base;

use \WarehouseBin as ChildWarehouseBin;
use \WarehouseBinQuery as ChildWarehouseBinQuery;
use \Exception;
use \PDO;
use Map\WarehouseBinTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_bin_cntrl' table.
 *
 *
 *
 * @method     ChildWarehouseBinQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildWarehouseBinQuery orderByBnctbinfrom($order = Criteria::ASC) Order by the BnctBinFrom column
 * @method     ChildWarehouseBinQuery orderByBnctbinthru($order = Criteria::ASC) Order by the BnctBinThru column
 * @method     ChildWarehouseBinQuery orderByBncttypedesc($order = Criteria::ASC) Order by the BnctTypeDesc column
 * @method     ChildWarehouseBinQuery orderByBnctbinarea($order = Criteria::ASC) Order by the BnctBinArea column
 * @method     ChildWarehouseBinQuery orderByBnctbindesc($order = Criteria::ASC) Order by the BnctBinDesc column
 * @method     ChildWarehouseBinQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildWarehouseBinQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildWarehouseBinQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildWarehouseBinQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildWarehouseBinQuery groupByBnctbinfrom() Group by the BnctBinFrom column
 * @method     ChildWarehouseBinQuery groupByBnctbinthru() Group by the BnctBinThru column
 * @method     ChildWarehouseBinQuery groupByBncttypedesc() Group by the BnctTypeDesc column
 * @method     ChildWarehouseBinQuery groupByBnctbinarea() Group by the BnctBinArea column
 * @method     ChildWarehouseBinQuery groupByBnctbindesc() Group by the BnctBinDesc column
 * @method     ChildWarehouseBinQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildWarehouseBinQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildWarehouseBinQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildWarehouseBinQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWarehouseBinQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWarehouseBinQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWarehouseBinQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWarehouseBinQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWarehouseBinQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWarehouseBinQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildWarehouseBinQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildWarehouseBinQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildWarehouseBinQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildWarehouseBinQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildWarehouseBinQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildWarehouseBinQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildWarehouseBinQuery leftJoinInvBinAreaCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvBinAreaCode relation
 * @method     ChildWarehouseBinQuery rightJoinInvBinAreaCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvBinAreaCode relation
 * @method     ChildWarehouseBinQuery innerJoinInvBinAreaCode($relationAlias = null) Adds a INNER JOIN clause to the query using the InvBinAreaCode relation
 *
 * @method     ChildWarehouseBinQuery joinWithInvBinAreaCode($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvBinAreaCode relation
 *
 * @method     ChildWarehouseBinQuery leftJoinWithInvBinAreaCode() Adds a LEFT JOIN clause and with to the query using the InvBinAreaCode relation
 * @method     ChildWarehouseBinQuery rightJoinWithInvBinAreaCode() Adds a RIGHT JOIN clause and with to the query using the InvBinAreaCode relation
 * @method     ChildWarehouseBinQuery innerJoinWithInvBinAreaCode() Adds a INNER JOIN clause and with to the query using the InvBinAreaCode relation
 *
 * @method     \WarehouseQuery|\InvBinAreaCodeQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildWarehouseBin findOne(ConnectionInterface $con = null) Return the first ChildWarehouseBin matching the query
 * @method     ChildWarehouseBin findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWarehouseBin matching the query, or a new ChildWarehouseBin object populated from the query conditions when no match is found
 *
 * @method     ChildWarehouseBin findOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouseBin filtered by the IntbWhse column
 * @method     ChildWarehouseBin findOneByBnctbinfrom(string $BnctBinFrom) Return the first ChildWarehouseBin filtered by the BnctBinFrom column
 * @method     ChildWarehouseBin findOneByBnctbinthru(string $BnctBinThru) Return the first ChildWarehouseBin filtered by the BnctBinThru column
 * @method     ChildWarehouseBin findOneByBncttypedesc(string $BnctTypeDesc) Return the first ChildWarehouseBin filtered by the BnctTypeDesc column
 * @method     ChildWarehouseBin findOneByBnctbinarea(string $BnctBinArea) Return the first ChildWarehouseBin filtered by the BnctBinArea column
 * @method     ChildWarehouseBin findOneByBnctbindesc(string $BnctBinDesc) Return the first ChildWarehouseBin filtered by the BnctBinDesc column
 * @method     ChildWarehouseBin findOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouseBin filtered by the DateUpdtd column
 * @method     ChildWarehouseBin findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouseBin filtered by the TimeUpdtd column
 * @method     ChildWarehouseBin findOneByDummy(string $dummy) Return the first ChildWarehouseBin filtered by the dummy column *

 * @method     ChildWarehouseBin requirePk($key, ConnectionInterface $con = null) Return the ChildWarehouseBin by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOne(ConnectionInterface $con = null) Return the first ChildWarehouseBin matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouseBin requireOneByIntbwhse(string $IntbWhse) Return the first ChildWarehouseBin filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByBnctbinfrom(string $BnctBinFrom) Return the first ChildWarehouseBin filtered by the BnctBinFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByBnctbinthru(string $BnctBinThru) Return the first ChildWarehouseBin filtered by the BnctBinThru column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByBncttypedesc(string $BnctTypeDesc) Return the first ChildWarehouseBin filtered by the BnctTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByBnctbinarea(string $BnctBinArea) Return the first ChildWarehouseBin filtered by the BnctBinArea column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByBnctbindesc(string $BnctBinDesc) Return the first ChildWarehouseBin filtered by the BnctBinDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByDateupdtd(string $DateUpdtd) Return the first ChildWarehouseBin filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildWarehouseBin filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWarehouseBin requireOneByDummy(string $dummy) Return the first ChildWarehouseBin filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWarehouseBin[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWarehouseBin objects based on current ModelCriteria
 * @method     ChildWarehouseBin[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildWarehouseBin objects filtered by the IntbWhse column
 * @method     ChildWarehouseBin[]|ObjectCollection findByBnctbinfrom(string $BnctBinFrom) Return ChildWarehouseBin objects filtered by the BnctBinFrom column
 * @method     ChildWarehouseBin[]|ObjectCollection findByBnctbinthru(string $BnctBinThru) Return ChildWarehouseBin objects filtered by the BnctBinThru column
 * @method     ChildWarehouseBin[]|ObjectCollection findByBncttypedesc(string $BnctTypeDesc) Return ChildWarehouseBin objects filtered by the BnctTypeDesc column
 * @method     ChildWarehouseBin[]|ObjectCollection findByBnctbinarea(string $BnctBinArea) Return ChildWarehouseBin objects filtered by the BnctBinArea column
 * @method     ChildWarehouseBin[]|ObjectCollection findByBnctbindesc(string $BnctBinDesc) Return ChildWarehouseBin objects filtered by the BnctBinDesc column
 * @method     ChildWarehouseBin[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildWarehouseBin objects filtered by the DateUpdtd column
 * @method     ChildWarehouseBin[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildWarehouseBin objects filtered by the TimeUpdtd column
 * @method     ChildWarehouseBin[]|ObjectCollection findByDummy(string $dummy) Return ChildWarehouseBin objects filtered by the dummy column
 * @method     ChildWarehouseBin[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WarehouseBinQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WarehouseBinQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WarehouseBin', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWarehouseBinQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWarehouseBinQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWarehouseBinQuery) {
            return $criteria;
        }
        $query = new ChildWarehouseBinQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array[$IntbWhse, $BnctBinFrom, $BnctBinThru] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildWarehouseBin|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = WarehouseBinTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]))))) {
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
     * @return ChildWarehouseBin A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbWhse, BnctBinFrom, BnctBinThru, BnctTypeDesc, BnctBinArea, BnctBinDesc, DateUpdtd, TimeUpdtd, dummy FROM inv_bin_cntrl WHERE IntbWhse = :p0 AND BnctBinFrom = :p1 AND BnctBinThru = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildWarehouseBin $obj */
            $obj = new ChildWarehouseBin();
            $obj->hydrate($row);
            WarehouseBinTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2])]));
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
     * @return ChildWarehouseBin|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(WarehouseBinTableMap::COL_INTBWHSE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINFROM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINTHRU, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(WarehouseBinTableMap::COL_INTBWHSE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(WarehouseBinTableMap::COL_BNCTBINFROM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(WarehouseBinTableMap::COL_BNCTBINTHRU, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the BnctBinFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByBnctbinfrom('fooValue');   // WHERE BnctBinFrom = 'fooValue'
     * $query->filterByBnctbinfrom('%fooValue%', Criteria::LIKE); // WHERE BnctBinFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bnctbinfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByBnctbinfrom($bnctbinfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bnctbinfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINFROM, $bnctbinfrom, $comparison);
    }

    /**
     * Filter the query on the BnctBinThru column
     *
     * Example usage:
     * <code>
     * $query->filterByBnctbinthru('fooValue');   // WHERE BnctBinThru = 'fooValue'
     * $query->filterByBnctbinthru('%fooValue%', Criteria::LIKE); // WHERE BnctBinThru LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bnctbinthru The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByBnctbinthru($bnctbinthru = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bnctbinthru)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINTHRU, $bnctbinthru, $comparison);
    }

    /**
     * Filter the query on the BnctTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByBncttypedesc('fooValue');   // WHERE BnctTypeDesc = 'fooValue'
     * $query->filterByBncttypedesc('%fooValue%', Criteria::LIKE); // WHERE BnctTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bncttypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByBncttypedesc($bncttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bncttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTTYPEDESC, $bncttypedesc, $comparison);
    }

    /**
     * Filter the query on the BnctBinArea column
     *
     * Example usage:
     * <code>
     * $query->filterByBnctbinarea('fooValue');   // WHERE BnctBinArea = 'fooValue'
     * $query->filterByBnctbinarea('%fooValue%', Criteria::LIKE); // WHERE BnctBinArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bnctbinarea The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByBnctbinarea($bnctbinarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bnctbinarea)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINAREA, $bnctbinarea, $comparison);
    }

    /**
     * Filter the query on the BnctBinDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByBnctbindesc('fooValue');   // WHERE BnctBinDesc = 'fooValue'
     * $query->filterByBnctbindesc('%fooValue%', Criteria::LIKE); // WHERE BnctBinDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bnctbindesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByBnctbindesc($bnctbindesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bnctbindesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINDESC, $bnctbindesc, $comparison);
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
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WarehouseBinTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByWarehouse($warehouse, $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(WarehouseBinTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(WarehouseBinTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);
        } else {
            throw new PropelException('filterByWarehouse() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Warehouse relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function joinWarehouse($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Warehouse');

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
            $this->addJoinObject($join, 'Warehouse');
        }

        return $this;
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Warehouse', '\WarehouseQuery');
    }

    /**
     * Filter the query by a related \InvBinAreaCode object
     *
     * @param \InvBinAreaCode|ObjectCollection $invBinAreaCode The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function filterByInvBinAreaCode($invBinAreaCode, $comparison = null)
    {
        if ($invBinAreaCode instanceof \InvBinAreaCode) {
            return $this
                ->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINAREA, $invBinAreaCode->getIntbbinacode(), $comparison);
        } elseif ($invBinAreaCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(WarehouseBinTableMap::COL_BNCTBINAREA, $invBinAreaCode->toKeyValue('PrimaryKey', 'Intbbinacode'), $comparison);
        } else {
            throw new PropelException('filterByInvBinAreaCode() only accepts arguments of type \InvBinAreaCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvBinAreaCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function joinInvBinAreaCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvBinAreaCode');

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
            $this->addJoinObject($join, 'InvBinAreaCode');
        }

        return $this;
    }

    /**
     * Use the InvBinAreaCode relation InvBinAreaCode object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvBinAreaCodeQuery A secondary query class using the current class as primary query
     */
    public function useInvBinAreaCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvBinAreaCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvBinAreaCode', '\InvBinAreaCodeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWarehouseBin $warehouseBin Object to remove from the list of results
     *
     * @return $this|ChildWarehouseBinQuery The current query, for fluid interface
     */
    public function prune($warehouseBin = null)
    {
        if ($warehouseBin) {
            $this->addCond('pruneCond0', $this->getAliasedColName(WarehouseBinTableMap::COL_INTBWHSE), $warehouseBin->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(WarehouseBinTableMap::COL_BNCTBINFROM), $warehouseBin->getBnctbinfrom(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(WarehouseBinTableMap::COL_BNCTBINTHRU), $warehouseBin->getBnctbinthru(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_bin_cntrl table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WarehouseBinTableMap::clearInstancePool();
            WarehouseBinTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(WarehouseBinTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WarehouseBinTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WarehouseBinTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WarehouseBinTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WarehouseBinQuery
