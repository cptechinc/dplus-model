<?php

namespace Base;

use \Printer as ChildPrinter;
use \PrinterQuery as ChildPrinterQuery;
use \Exception;
use \PDO;
use Map\PrinterTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'printer_control' table.
 *
 *
 *
 * @method     ChildPrinterQuery orderByPrctprinterid($order = Criteria::ASC) Order by the PrctPrinterId column
 * @method     ChildPrinterQuery orderByPrctdesc($order = Criteria::ASC) Order by the PrctDesc column
 * @method     ChildPrinterQuery orderByPrctprtrtype($order = Criteria::ASC) Order by the PrctPrtrType column
 * @method     ChildPrinterQuery orderByPrcttypedesc($order = Criteria::ASC) Order by the PrctTypeDesc column
 * @method     ChildPrinterQuery orderByPrctform($order = Criteria::ASC) Order by the PrctForm column
 * @method     ChildPrinterQuery orderByPrctpitch10($order = Criteria::ASC) Order by the PrctPitch10 column
 * @method     ChildPrinterQuery orderByPrctpitch12($order = Criteria::ASC) Order by the PrctPitch12 column
 * @method     ChildPrinterQuery orderByPrctpitch17($order = Criteria::ASC) Order by the PrctPitch17 column
 * @method     ChildPrinterQuery orderByPrctwhse($order = Criteria::ASC) Order by the PrctWhse column
 * @method     ChildPrinterQuery orderByPrctselectlist($order = Criteria::ASC) Order by the PrctSelectList column
 * @method     ChildPrinterQuery orderByPrctassgndcart($order = Criteria::ASC) Order by the PrctAssgndCart column
 * @method     ChildPrinterQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildPrinterQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildPrinterQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildPrinterQuery groupByPrctprinterid() Group by the PrctPrinterId column
 * @method     ChildPrinterQuery groupByPrctdesc() Group by the PrctDesc column
 * @method     ChildPrinterQuery groupByPrctprtrtype() Group by the PrctPrtrType column
 * @method     ChildPrinterQuery groupByPrcttypedesc() Group by the PrctTypeDesc column
 * @method     ChildPrinterQuery groupByPrctform() Group by the PrctForm column
 * @method     ChildPrinterQuery groupByPrctpitch10() Group by the PrctPitch10 column
 * @method     ChildPrinterQuery groupByPrctpitch12() Group by the PrctPitch12 column
 * @method     ChildPrinterQuery groupByPrctpitch17() Group by the PrctPitch17 column
 * @method     ChildPrinterQuery groupByPrctwhse() Group by the PrctWhse column
 * @method     ChildPrinterQuery groupByPrctselectlist() Group by the PrctSelectList column
 * @method     ChildPrinterQuery groupByPrctassgndcart() Group by the PrctAssgndCart column
 * @method     ChildPrinterQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildPrinterQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildPrinterQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildPrinterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPrinterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPrinterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPrinterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPrinterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPrinterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPrinter findOne(ConnectionInterface $con = null) Return the first ChildPrinter matching the query
 * @method     ChildPrinter findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPrinter matching the query, or a new ChildPrinter object populated from the query conditions when no match is found
 *
 * @method     ChildPrinter findOneByPrctprinterid(string $PrctPrinterId) Return the first ChildPrinter filtered by the PrctPrinterId column
 * @method     ChildPrinter findOneByPrctdesc(string $PrctDesc) Return the first ChildPrinter filtered by the PrctDesc column
 * @method     ChildPrinter findOneByPrctprtrtype(string $PrctPrtrType) Return the first ChildPrinter filtered by the PrctPrtrType column
 * @method     ChildPrinter findOneByPrcttypedesc(string $PrctTypeDesc) Return the first ChildPrinter filtered by the PrctTypeDesc column
 * @method     ChildPrinter findOneByPrctform(string $PrctForm) Return the first ChildPrinter filtered by the PrctForm column
 * @method     ChildPrinter findOneByPrctpitch10(string $PrctPitch10) Return the first ChildPrinter filtered by the PrctPitch10 column
 * @method     ChildPrinter findOneByPrctpitch12(string $PrctPitch12) Return the first ChildPrinter filtered by the PrctPitch12 column
 * @method     ChildPrinter findOneByPrctpitch17(string $PrctPitch17) Return the first ChildPrinter filtered by the PrctPitch17 column
 * @method     ChildPrinter findOneByPrctwhse(string $PrctWhse) Return the first ChildPrinter filtered by the PrctWhse column
 * @method     ChildPrinter findOneByPrctselectlist(string $PrctSelectList) Return the first ChildPrinter filtered by the PrctSelectList column
 * @method     ChildPrinter findOneByPrctassgndcart(string $PrctAssgndCart) Return the first ChildPrinter filtered by the PrctAssgndCart column
 * @method     ChildPrinter findOneByDateupdtd(string $DateUpdtd) Return the first ChildPrinter filtered by the DateUpdtd column
 * @method     ChildPrinter findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPrinter filtered by the TimeUpdtd column
 * @method     ChildPrinter findOneByDummy(string $dummy) Return the first ChildPrinter filtered by the dummy column *

 * @method     ChildPrinter requirePk($key, ConnectionInterface $con = null) Return the ChildPrinter by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOne(ConnectionInterface $con = null) Return the first ChildPrinter matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPrinter requireOneByPrctprinterid(string $PrctPrinterId) Return the first ChildPrinter filtered by the PrctPrinterId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctdesc(string $PrctDesc) Return the first ChildPrinter filtered by the PrctDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctprtrtype(string $PrctPrtrType) Return the first ChildPrinter filtered by the PrctPrtrType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrcttypedesc(string $PrctTypeDesc) Return the first ChildPrinter filtered by the PrctTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctform(string $PrctForm) Return the first ChildPrinter filtered by the PrctForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctpitch10(string $PrctPitch10) Return the first ChildPrinter filtered by the PrctPitch10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctpitch12(string $PrctPitch12) Return the first ChildPrinter filtered by the PrctPitch12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctpitch17(string $PrctPitch17) Return the first ChildPrinter filtered by the PrctPitch17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctwhse(string $PrctWhse) Return the first ChildPrinter filtered by the PrctWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctselectlist(string $PrctSelectList) Return the first ChildPrinter filtered by the PrctSelectList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByPrctassgndcart(string $PrctAssgndCart) Return the first ChildPrinter filtered by the PrctAssgndCart column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByDateupdtd(string $DateUpdtd) Return the first ChildPrinter filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildPrinter filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPrinter requireOneByDummy(string $dummy) Return the first ChildPrinter filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPrinter[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPrinter objects based on current ModelCriteria
 * @method     ChildPrinter[]|ObjectCollection findByPrctprinterid(string $PrctPrinterId) Return ChildPrinter objects filtered by the PrctPrinterId column
 * @method     ChildPrinter[]|ObjectCollection findByPrctdesc(string $PrctDesc) Return ChildPrinter objects filtered by the PrctDesc column
 * @method     ChildPrinter[]|ObjectCollection findByPrctprtrtype(string $PrctPrtrType) Return ChildPrinter objects filtered by the PrctPrtrType column
 * @method     ChildPrinter[]|ObjectCollection findByPrcttypedesc(string $PrctTypeDesc) Return ChildPrinter objects filtered by the PrctTypeDesc column
 * @method     ChildPrinter[]|ObjectCollection findByPrctform(string $PrctForm) Return ChildPrinter objects filtered by the PrctForm column
 * @method     ChildPrinter[]|ObjectCollection findByPrctpitch10(string $PrctPitch10) Return ChildPrinter objects filtered by the PrctPitch10 column
 * @method     ChildPrinter[]|ObjectCollection findByPrctpitch12(string $PrctPitch12) Return ChildPrinter objects filtered by the PrctPitch12 column
 * @method     ChildPrinter[]|ObjectCollection findByPrctpitch17(string $PrctPitch17) Return ChildPrinter objects filtered by the PrctPitch17 column
 * @method     ChildPrinter[]|ObjectCollection findByPrctwhse(string $PrctWhse) Return ChildPrinter objects filtered by the PrctWhse column
 * @method     ChildPrinter[]|ObjectCollection findByPrctselectlist(string $PrctSelectList) Return ChildPrinter objects filtered by the PrctSelectList column
 * @method     ChildPrinter[]|ObjectCollection findByPrctassgndcart(string $PrctAssgndCart) Return ChildPrinter objects filtered by the PrctAssgndCart column
 * @method     ChildPrinter[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildPrinter objects filtered by the DateUpdtd column
 * @method     ChildPrinter[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildPrinter objects filtered by the TimeUpdtd column
 * @method     ChildPrinter[]|ObjectCollection findByDummy(string $dummy) Return ChildPrinter objects filtered by the dummy column
 * @method     ChildPrinter[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PrinterQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\PrinterQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Printer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPrinterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPrinterQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPrinterQuery) {
            return $criteria;
        }
        $query = new ChildPrinterQuery();
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
     * @return ChildPrinter|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PrinterTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = PrinterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPrinter A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PrctPrinterId, PrctDesc, PrctPrtrType, PrctTypeDesc, PrctForm, PrctPitch10, PrctPitch12, PrctPitch17, PrctWhse, PrctSelectList, PrctAssgndCart, DateUpdtd, TimeUpdtd, dummy FROM printer_control WHERE PrctPrinterId = :p0';
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
            /** @var ChildPrinter $obj */
            $obj = new ChildPrinter();
            $obj->hydrate($row);
            PrinterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPrinter|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPRINTERID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPRINTERID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PrctPrinterId column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctprinterid('fooValue');   // WHERE PrctPrinterId = 'fooValue'
     * $query->filterByPrctprinterid('%fooValue%', Criteria::LIKE); // WHERE PrctPrinterId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctprinterid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctprinterid($prctprinterid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctprinterid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPRINTERID, $prctprinterid, $comparison);
    }

    /**
     * Filter the query on the PrctDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctdesc('fooValue');   // WHERE PrctDesc = 'fooValue'
     * $query->filterByPrctdesc('%fooValue%', Criteria::LIKE); // WHERE PrctDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctdesc($prctdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTDESC, $prctdesc, $comparison);
    }

    /**
     * Filter the query on the PrctPrtrType column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctprtrtype('fooValue');   // WHERE PrctPrtrType = 'fooValue'
     * $query->filterByPrctprtrtype('%fooValue%', Criteria::LIKE); // WHERE PrctPrtrType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctprtrtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctprtrtype($prctprtrtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctprtrtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPRTRTYPE, $prctprtrtype, $comparison);
    }

    /**
     * Filter the query on the PrctTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPrcttypedesc('fooValue');   // WHERE PrctTypeDesc = 'fooValue'
     * $query->filterByPrcttypedesc('%fooValue%', Criteria::LIKE); // WHERE PrctTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prcttypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrcttypedesc($prcttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prcttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTTYPEDESC, $prcttypedesc, $comparison);
    }

    /**
     * Filter the query on the PrctForm column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctform('fooValue');   // WHERE PrctForm = 'fooValue'
     * $query->filterByPrctform('%fooValue%', Criteria::LIKE); // WHERE PrctForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctform($prctform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTFORM, $prctform, $comparison);
    }

    /**
     * Filter the query on the PrctPitch10 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctpitch10('fooValue');   // WHERE PrctPitch10 = 'fooValue'
     * $query->filterByPrctpitch10('%fooValue%', Criteria::LIKE); // WHERE PrctPitch10 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctpitch10 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctpitch10($prctpitch10 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctpitch10)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPITCH10, $prctpitch10, $comparison);
    }

    /**
     * Filter the query on the PrctPitch12 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctpitch12('fooValue');   // WHERE PrctPitch12 = 'fooValue'
     * $query->filterByPrctpitch12('%fooValue%', Criteria::LIKE); // WHERE PrctPitch12 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctpitch12 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctpitch12($prctpitch12 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctpitch12)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPITCH12, $prctpitch12, $comparison);
    }

    /**
     * Filter the query on the PrctPitch17 column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctpitch17('fooValue');   // WHERE PrctPitch17 = 'fooValue'
     * $query->filterByPrctpitch17('%fooValue%', Criteria::LIKE); // WHERE PrctPitch17 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctpitch17 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctpitch17($prctpitch17 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctpitch17)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTPITCH17, $prctpitch17, $comparison);
    }

    /**
     * Filter the query on the PrctWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctwhse('fooValue');   // WHERE PrctWhse = 'fooValue'
     * $query->filterByPrctwhse('%fooValue%', Criteria::LIKE); // WHERE PrctWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctwhse($prctwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTWHSE, $prctwhse, $comparison);
    }

    /**
     * Filter the query on the PrctSelectList column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctselectlist('fooValue');   // WHERE PrctSelectList = 'fooValue'
     * $query->filterByPrctselectlist('%fooValue%', Criteria::LIKE); // WHERE PrctSelectList LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctselectlist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctselectlist($prctselectlist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctselectlist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTSELECTLIST, $prctselectlist, $comparison);
    }

    /**
     * Filter the query on the PrctAssgndCart column
     *
     * Example usage:
     * <code>
     * $query->filterByPrctassgndcart('fooValue');   // WHERE PrctAssgndCart = 'fooValue'
     * $query->filterByPrctassgndcart('%fooValue%', Criteria::LIKE); // WHERE PrctAssgndCart LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prctassgndcart The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByPrctassgndcart($prctassgndcart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prctassgndcart)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_PRCTASSGNDCART, $prctassgndcart, $comparison);
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
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PrinterTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPrinter $printer Object to remove from the list of results
     *
     * @return $this|ChildPrinterQuery The current query, for fluid interface
     */
    public function prune($printer = null)
    {
        if ($printer) {
            $this->addUsingAlias(PrinterTableMap::COL_PRCTPRINTERID, $printer->getPrctprinterid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the printer_control table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PrinterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PrinterTableMap::clearInstancePool();
            PrinterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PrinterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PrinterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PrinterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PrinterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PrinterQuery
