<?php

namespace Base;

use \SoEditPermissions as ChildSoEditPermissions;
use \SoEditPermissionsQuery as ChildSoEditPermissionsQuery;
use \Exception;
use \PDO;
use Map\SoEditPermissionsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_controls' table.
 *
 *
 *
 * @method     ChildSoEditPermissionsQuery orderByOetbcpercode($order = Criteria::ASC) Order by the OetbCperCode column
 * @method     ChildSoEditPermissionsQuery orderByOetbcpername($order = Criteria::ASC) Order by the OetbCperName column
 * @method     ChildSoEditPermissionsQuery orderByOetbcpercanc($order = Criteria::ASC) Order by the OetbCperCanc column
 * @method     ChildSoEditPermissionsQuery orderByOetbcpernew($order = Criteria::ASC) Order by the OetbCperNew column
 * @method     ChildSoEditPermissionsQuery orderByOetbcperpick($order = Criteria::ASC) Order by the OetbCperPick column
 * @method     ChildSoEditPermissionsQuery orderByOetbcperver($order = Criteria::ASC) Order by the OetbCperVer column
 * @method     ChildSoEditPermissionsQuery orderByOetbcperinv($order = Criteria::ASC) Order by the OetbCperInv column
 * @method     ChildSoEditPermissionsQuery orderByOetbcperadvcdata($order = Criteria::ASC) Order by the OetbCperAdvcData column
 * @method     ChildSoEditPermissionsQuery orderByOetbcperposadmin($order = Criteria::ASC) Order by the OetbCperPosAdmin column
 * @method     ChildSoEditPermissionsQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSoEditPermissionsQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSoEditPermissionsQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSoEditPermissionsQuery groupByOetbcpercode() Group by the OetbCperCode column
 * @method     ChildSoEditPermissionsQuery groupByOetbcpername() Group by the OetbCperName column
 * @method     ChildSoEditPermissionsQuery groupByOetbcpercanc() Group by the OetbCperCanc column
 * @method     ChildSoEditPermissionsQuery groupByOetbcpernew() Group by the OetbCperNew column
 * @method     ChildSoEditPermissionsQuery groupByOetbcperpick() Group by the OetbCperPick column
 * @method     ChildSoEditPermissionsQuery groupByOetbcperver() Group by the OetbCperVer column
 * @method     ChildSoEditPermissionsQuery groupByOetbcperinv() Group by the OetbCperInv column
 * @method     ChildSoEditPermissionsQuery groupByOetbcperadvcdata() Group by the OetbCperAdvcData column
 * @method     ChildSoEditPermissionsQuery groupByOetbcperposadmin() Group by the OetbCperPosAdmin column
 * @method     ChildSoEditPermissionsQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSoEditPermissionsQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSoEditPermissionsQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSoEditPermissionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSoEditPermissionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSoEditPermissionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSoEditPermissionsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSoEditPermissionsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSoEditPermissionsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSoEditPermissions findOne(ConnectionInterface $con = null) Return the first ChildSoEditPermissions matching the query
 * @method     ChildSoEditPermissions findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSoEditPermissions matching the query, or a new ChildSoEditPermissions object populated from the query conditions when no match is found
 *
 * @method     ChildSoEditPermissions findOneByOetbcpercode(string $OetbCperCode) Return the first ChildSoEditPermissions filtered by the OetbCperCode column
 * @method     ChildSoEditPermissions findOneByOetbcpername(string $OetbCperName) Return the first ChildSoEditPermissions filtered by the OetbCperName column
 * @method     ChildSoEditPermissions findOneByOetbcpercanc(string $OetbCperCanc) Return the first ChildSoEditPermissions filtered by the OetbCperCanc column
 * @method     ChildSoEditPermissions findOneByOetbcpernew(string $OetbCperNew) Return the first ChildSoEditPermissions filtered by the OetbCperNew column
 * @method     ChildSoEditPermissions findOneByOetbcperpick(string $OetbCperPick) Return the first ChildSoEditPermissions filtered by the OetbCperPick column
 * @method     ChildSoEditPermissions findOneByOetbcperver(string $OetbCperVer) Return the first ChildSoEditPermissions filtered by the OetbCperVer column
 * @method     ChildSoEditPermissions findOneByOetbcperinv(string $OetbCperInv) Return the first ChildSoEditPermissions filtered by the OetbCperInv column
 * @method     ChildSoEditPermissions findOneByOetbcperadvcdata(string $OetbCperAdvcData) Return the first ChildSoEditPermissions filtered by the OetbCperAdvcData column
 * @method     ChildSoEditPermissions findOneByOetbcperposadmin(string $OetbCperPosAdmin) Return the first ChildSoEditPermissions filtered by the OetbCperPosAdmin column
 * @method     ChildSoEditPermissions findOneByDateupdtd(string $DateUpdtd) Return the first ChildSoEditPermissions filtered by the DateUpdtd column
 * @method     ChildSoEditPermissions findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoEditPermissions filtered by the TimeUpdtd column
 * @method     ChildSoEditPermissions findOneByDummy(string $dummy) Return the first ChildSoEditPermissions filtered by the dummy column *

 * @method     ChildSoEditPermissions requirePk($key, ConnectionInterface $con = null) Return the ChildSoEditPermissions by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOne(ConnectionInterface $con = null) Return the first ChildSoEditPermissions matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoEditPermissions requireOneByOetbcpercode(string $OetbCperCode) Return the first ChildSoEditPermissions filtered by the OetbCperCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcpername(string $OetbCperName) Return the first ChildSoEditPermissions filtered by the OetbCperName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcpercanc(string $OetbCperCanc) Return the first ChildSoEditPermissions filtered by the OetbCperCanc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcpernew(string $OetbCperNew) Return the first ChildSoEditPermissions filtered by the OetbCperNew column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcperpick(string $OetbCperPick) Return the first ChildSoEditPermissions filtered by the OetbCperPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcperver(string $OetbCperVer) Return the first ChildSoEditPermissions filtered by the OetbCperVer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcperinv(string $OetbCperInv) Return the first ChildSoEditPermissions filtered by the OetbCperInv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcperadvcdata(string $OetbCperAdvcData) Return the first ChildSoEditPermissions filtered by the OetbCperAdvcData column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByOetbcperposadmin(string $OetbCperPosAdmin) Return the first ChildSoEditPermissions filtered by the OetbCperPosAdmin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSoEditPermissions filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSoEditPermissions filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSoEditPermissions requireOneByDummy(string $dummy) Return the first ChildSoEditPermissions filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSoEditPermissions[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSoEditPermissions objects based on current ModelCriteria
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcpercode(string $OetbCperCode) Return ChildSoEditPermissions objects filtered by the OetbCperCode column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcpername(string $OetbCperName) Return ChildSoEditPermissions objects filtered by the OetbCperName column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcpercanc(string $OetbCperCanc) Return ChildSoEditPermissions objects filtered by the OetbCperCanc column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcpernew(string $OetbCperNew) Return ChildSoEditPermissions objects filtered by the OetbCperNew column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcperpick(string $OetbCperPick) Return ChildSoEditPermissions objects filtered by the OetbCperPick column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcperver(string $OetbCperVer) Return ChildSoEditPermissions objects filtered by the OetbCperVer column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcperinv(string $OetbCperInv) Return ChildSoEditPermissions objects filtered by the OetbCperInv column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcperadvcdata(string $OetbCperAdvcData) Return ChildSoEditPermissions objects filtered by the OetbCperAdvcData column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByOetbcperposadmin(string $OetbCperPosAdmin) Return ChildSoEditPermissions objects filtered by the OetbCperPosAdmin column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSoEditPermissions objects filtered by the DateUpdtd column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSoEditPermissions objects filtered by the TimeUpdtd column
 * @method     ChildSoEditPermissions[]|ObjectCollection findByDummy(string $dummy) Return ChildSoEditPermissions objects filtered by the dummy column
 * @method     ChildSoEditPermissions[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SoEditPermissionsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SoEditPermissionsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SoEditPermissions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSoEditPermissionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSoEditPermissionsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSoEditPermissionsQuery) {
            return $criteria;
        }
        $query = new ChildSoEditPermissionsQuery();
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
     * @return ChildSoEditPermissions|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SoEditPermissionsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SoEditPermissionsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSoEditPermissions A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbCperCode, OetbCperName, OetbCperCanc, OetbCperNew, OetbCperPick, OetbCperVer, OetbCperInv, OetbCperAdvcData, OetbCperPosAdmin, DateUpdtd, TimeUpdtd, dummy FROM so_controls WHERE OetbCperCode = :p0';
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
            /** @var ChildSoEditPermissions $obj */
            $obj = new ChildSoEditPermissions();
            $obj->hydrate($row);
            SoEditPermissionsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSoEditPermissions|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OetbCperCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcpercode('fooValue');   // WHERE OetbCperCode = 'fooValue'
     * $query->filterByOetbcpercode('%fooValue%', Criteria::LIKE); // WHERE OetbCperCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcpercode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcpercode($oetbcpercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcpercode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERCODE, $oetbcpercode, $comparison);
    }

    /**
     * Filter the query on the OetbCperName column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcpername('fooValue');   // WHERE OetbCperName = 'fooValue'
     * $query->filterByOetbcpername('%fooValue%', Criteria::LIKE); // WHERE OetbCperName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcpername The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcpername($oetbcpername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcpername)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERNAME, $oetbcpername, $comparison);
    }

    /**
     * Filter the query on the OetbCperCanc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcpercanc('fooValue');   // WHERE OetbCperCanc = 'fooValue'
     * $query->filterByOetbcpercanc('%fooValue%', Criteria::LIKE); // WHERE OetbCperCanc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcpercanc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcpercanc($oetbcpercanc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcpercanc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERCANC, $oetbcpercanc, $comparison);
    }

    /**
     * Filter the query on the OetbCperNew column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcpernew('fooValue');   // WHERE OetbCperNew = 'fooValue'
     * $query->filterByOetbcpernew('%fooValue%', Criteria::LIKE); // WHERE OetbCperNew LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcpernew The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcpernew($oetbcpernew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcpernew)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERNEW, $oetbcpernew, $comparison);
    }

    /**
     * Filter the query on the OetbCperPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcperpick('fooValue');   // WHERE OetbCperPick = 'fooValue'
     * $query->filterByOetbcperpick('%fooValue%', Criteria::LIKE); // WHERE OetbCperPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcperpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcperpick($oetbcperpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcperpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERPICK, $oetbcperpick, $comparison);
    }

    /**
     * Filter the query on the OetbCperVer column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcperver('fooValue');   // WHERE OetbCperVer = 'fooValue'
     * $query->filterByOetbcperver('%fooValue%', Criteria::LIKE); // WHERE OetbCperVer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcperver The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcperver($oetbcperver = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcperver)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERVER, $oetbcperver, $comparison);
    }

    /**
     * Filter the query on the OetbCperInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcperinv('fooValue');   // WHERE OetbCperInv = 'fooValue'
     * $query->filterByOetbcperinv('%fooValue%', Criteria::LIKE); // WHERE OetbCperInv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcperinv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcperinv($oetbcperinv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcperinv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERINV, $oetbcperinv, $comparison);
    }

    /**
     * Filter the query on the OetbCperAdvcData column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcperadvcdata('fooValue');   // WHERE OetbCperAdvcData = 'fooValue'
     * $query->filterByOetbcperadvcdata('%fooValue%', Criteria::LIKE); // WHERE OetbCperAdvcData LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcperadvcdata The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcperadvcdata($oetbcperadvcdata = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcperadvcdata)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERADVCDATA, $oetbcperadvcdata, $comparison);
    }

    /**
     * Filter the query on the OetbCperPosAdmin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcperposadmin('fooValue');   // WHERE OetbCperPosAdmin = 'fooValue'
     * $query->filterByOetbcperposadmin('%fooValue%', Criteria::LIKE); // WHERE OetbCperPosAdmin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcperposadmin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByOetbcperposadmin($oetbcperposadmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcperposadmin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERPOSADMIN, $oetbcperposadmin, $comparison);
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
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SoEditPermissionsTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSoEditPermissions $soEditPermissions Object to remove from the list of results
     *
     * @return $this|ChildSoEditPermissionsQuery The current query, for fluid interface
     */
    public function prune($soEditPermissions = null)
    {
        if ($soEditPermissions) {
            $this->addUsingAlias(SoEditPermissionsTableMap::COL_OETBCPERCODE, $soEditPermissions->getOetbcpercode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_controls table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SoEditPermissionsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoEditPermissionsTableMap::clearInstancePool();
            SoEditPermissionsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SoEditPermissionsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SoEditPermissionsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SoEditPermissionsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SoEditPermissionsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SoEditPermissionsQuery
