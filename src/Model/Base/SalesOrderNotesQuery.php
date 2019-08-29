<?php

namespace Base;

use \SalesOrderNotes as ChildSalesOrderNotes;
use \SalesOrderNotesQuery as ChildSalesOrderNotesQuery;
use \Exception;
use \PDO;
use Map\SalesOrderNotesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_sh_head_det' table.
 *
 *
 *
 * @method     ChildSalesOrderNotesQuery orderByShnttype($order = Criteria::ASC) Order by the ShntType column
 * @method     ChildSalesOrderNotesQuery orderByShnttypedesc($order = Criteria::ASC) Order by the ShntTypeDesc column
 * @method     ChildSalesOrderNotesQuery orderByOehhnbr($order = Criteria::ASC) Order by the OehhNbr column
 * @method     ChildSalesOrderNotesQuery orderByShntyear($order = Criteria::ASC) Order by the ShntYear column
 * @method     ChildSalesOrderNotesQuery orderByOedhline($order = Criteria::ASC) Order by the OedhLine column
 * @method     ChildSalesOrderNotesQuery orderByShntlotser($order = Criteria::ASC) Order by the ShntLotSer column
 * @method     ChildSalesOrderNotesQuery orderByShntpickticket($order = Criteria::ASC) Order by the ShntPickTicket column
 * @method     ChildSalesOrderNotesQuery orderByShntpackticket($order = Criteria::ASC) Order by the ShntPackTicket column
 * @method     ChildSalesOrderNotesQuery orderByShntinvoice($order = Criteria::ASC) Order by the ShntInvoice column
 * @method     ChildSalesOrderNotesQuery orderByShntacknow($order = Criteria::ASC) Order by the ShntAcknow column
 * @method     ChildSalesOrderNotesQuery orderByShntseq($order = Criteria::ASC) Order by the ShntSeq column
 * @method     ChildSalesOrderNotesQuery orderByShntnote($order = Criteria::ASC) Order by the ShntNote column
 * @method     ChildSalesOrderNotesQuery orderByShntkey2($order = Criteria::ASC) Order by the ShntKey2 column
 * @method     ChildSalesOrderNotesQuery orderByShntform($order = Criteria::ASC) Order by the ShntForm column
 * @method     ChildSalesOrderNotesQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildSalesOrderNotesQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildSalesOrderNotesQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildSalesOrderNotesQuery groupByShnttype() Group by the ShntType column
 * @method     ChildSalesOrderNotesQuery groupByShnttypedesc() Group by the ShntTypeDesc column
 * @method     ChildSalesOrderNotesQuery groupByOehhnbr() Group by the OehhNbr column
 * @method     ChildSalesOrderNotesQuery groupByShntyear() Group by the ShntYear column
 * @method     ChildSalesOrderNotesQuery groupByOedhline() Group by the OedhLine column
 * @method     ChildSalesOrderNotesQuery groupByShntlotser() Group by the ShntLotSer column
 * @method     ChildSalesOrderNotesQuery groupByShntpickticket() Group by the ShntPickTicket column
 * @method     ChildSalesOrderNotesQuery groupByShntpackticket() Group by the ShntPackTicket column
 * @method     ChildSalesOrderNotesQuery groupByShntinvoice() Group by the ShntInvoice column
 * @method     ChildSalesOrderNotesQuery groupByShntacknow() Group by the ShntAcknow column
 * @method     ChildSalesOrderNotesQuery groupByShntseq() Group by the ShntSeq column
 * @method     ChildSalesOrderNotesQuery groupByShntnote() Group by the ShntNote column
 * @method     ChildSalesOrderNotesQuery groupByShntkey2() Group by the ShntKey2 column
 * @method     ChildSalesOrderNotesQuery groupByShntform() Group by the ShntForm column
 * @method     ChildSalesOrderNotesQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildSalesOrderNotesQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildSalesOrderNotesQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildSalesOrderNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSalesOrderNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSalesOrderNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSalesOrderNotesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSalesOrderNotesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSalesOrderNotesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSalesOrderNotes findOne(ConnectionInterface $con = null) Return the first ChildSalesOrderNotes matching the query
 * @method     ChildSalesOrderNotes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSalesOrderNotes matching the query, or a new ChildSalesOrderNotes object populated from the query conditions when no match is found
 *
 * @method     ChildSalesOrderNotes findOneByShnttype(string $ShntType) Return the first ChildSalesOrderNotes filtered by the ShntType column
 * @method     ChildSalesOrderNotes findOneByShnttypedesc(string $ShntTypeDesc) Return the first ChildSalesOrderNotes filtered by the ShntTypeDesc column
 * @method     ChildSalesOrderNotes findOneByOehhnbr(string $OehhNbr) Return the first ChildSalesOrderNotes filtered by the OehhNbr column
 * @method     ChildSalesOrderNotes findOneByShntyear(string $ShntYear) Return the first ChildSalesOrderNotes filtered by the ShntYear column
 * @method     ChildSalesOrderNotes findOneByOedhline(int $OedhLine) Return the first ChildSalesOrderNotes filtered by the OedhLine column
 * @method     ChildSalesOrderNotes findOneByShntlotser(string $ShntLotSer) Return the first ChildSalesOrderNotes filtered by the ShntLotSer column
 * @method     ChildSalesOrderNotes findOneByShntpickticket(string $ShntPickTicket) Return the first ChildSalesOrderNotes filtered by the ShntPickTicket column
 * @method     ChildSalesOrderNotes findOneByShntpackticket(string $ShntPackTicket) Return the first ChildSalesOrderNotes filtered by the ShntPackTicket column
 * @method     ChildSalesOrderNotes findOneByShntinvoice(string $ShntInvoice) Return the first ChildSalesOrderNotes filtered by the ShntInvoice column
 * @method     ChildSalesOrderNotes findOneByShntacknow(string $ShntAcknow) Return the first ChildSalesOrderNotes filtered by the ShntAcknow column
 * @method     ChildSalesOrderNotes findOneByShntseq(int $ShntSeq) Return the first ChildSalesOrderNotes filtered by the ShntSeq column
 * @method     ChildSalesOrderNotes findOneByShntnote(string $ShntNote) Return the first ChildSalesOrderNotes filtered by the ShntNote column
 * @method     ChildSalesOrderNotes findOneByShntkey2(string $ShntKey2) Return the first ChildSalesOrderNotes filtered by the ShntKey2 column
 * @method     ChildSalesOrderNotes findOneByShntform(string $ShntForm) Return the first ChildSalesOrderNotes filtered by the ShntForm column
 * @method     ChildSalesOrderNotes findOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderNotes filtered by the DateUpdtd column
 * @method     ChildSalesOrderNotes findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderNotes filtered by the TimeUpdtd column
 * @method     ChildSalesOrderNotes findOneByDummy(string $dummy) Return the first ChildSalesOrderNotes filtered by the dummy column *

 * @method     ChildSalesOrderNotes requirePk($key, ConnectionInterface $con = null) Return the ChildSalesOrderNotes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOne(ConnectionInterface $con = null) Return the first ChildSalesOrderNotes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderNotes requireOneByShnttype(string $ShntType) Return the first ChildSalesOrderNotes filtered by the ShntType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShnttypedesc(string $ShntTypeDesc) Return the first ChildSalesOrderNotes filtered by the ShntTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByOehhnbr(string $OehhNbr) Return the first ChildSalesOrderNotes filtered by the OehhNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntyear(string $ShntYear) Return the first ChildSalesOrderNotes filtered by the ShntYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByOedhline(int $OedhLine) Return the first ChildSalesOrderNotes filtered by the OedhLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntlotser(string $ShntLotSer) Return the first ChildSalesOrderNotes filtered by the ShntLotSer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntpickticket(string $ShntPickTicket) Return the first ChildSalesOrderNotes filtered by the ShntPickTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntpackticket(string $ShntPackTicket) Return the first ChildSalesOrderNotes filtered by the ShntPackTicket column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntinvoice(string $ShntInvoice) Return the first ChildSalesOrderNotes filtered by the ShntInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntacknow(string $ShntAcknow) Return the first ChildSalesOrderNotes filtered by the ShntAcknow column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntseq(int $ShntSeq) Return the first ChildSalesOrderNotes filtered by the ShntSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntnote(string $ShntNote) Return the first ChildSalesOrderNotes filtered by the ShntNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntkey2(string $ShntKey2) Return the first ChildSalesOrderNotes filtered by the ShntKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByShntform(string $ShntForm) Return the first ChildSalesOrderNotes filtered by the ShntForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByDateupdtd(string $DateUpdtd) Return the first ChildSalesOrderNotes filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildSalesOrderNotes filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSalesOrderNotes requireOneByDummy(string $dummy) Return the first ChildSalesOrderNotes filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSalesOrderNotes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSalesOrderNotes objects based on current ModelCriteria
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShnttype(string $ShntType) Return ChildSalesOrderNotes objects filtered by the ShntType column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShnttypedesc(string $ShntTypeDesc) Return ChildSalesOrderNotes objects filtered by the ShntTypeDesc column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByOehhnbr(string $OehhNbr) Return ChildSalesOrderNotes objects filtered by the OehhNbr column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntyear(string $ShntYear) Return ChildSalesOrderNotes objects filtered by the ShntYear column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByOedhline(int $OedhLine) Return ChildSalesOrderNotes objects filtered by the OedhLine column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntlotser(string $ShntLotSer) Return ChildSalesOrderNotes objects filtered by the ShntLotSer column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntpickticket(string $ShntPickTicket) Return ChildSalesOrderNotes objects filtered by the ShntPickTicket column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntpackticket(string $ShntPackTicket) Return ChildSalesOrderNotes objects filtered by the ShntPackTicket column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntinvoice(string $ShntInvoice) Return ChildSalesOrderNotes objects filtered by the ShntInvoice column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntacknow(string $ShntAcknow) Return ChildSalesOrderNotes objects filtered by the ShntAcknow column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntseq(int $ShntSeq) Return ChildSalesOrderNotes objects filtered by the ShntSeq column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntnote(string $ShntNote) Return ChildSalesOrderNotes objects filtered by the ShntNote column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntkey2(string $ShntKey2) Return ChildSalesOrderNotes objects filtered by the ShntKey2 column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByShntform(string $ShntForm) Return ChildSalesOrderNotes objects filtered by the ShntForm column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildSalesOrderNotes objects filtered by the DateUpdtd column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildSalesOrderNotes objects filtered by the TimeUpdtd column
 * @method     ChildSalesOrderNotes[]|ObjectCollection findByDummy(string $dummy) Return ChildSalesOrderNotes objects filtered by the dummy column
 * @method     ChildSalesOrderNotes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SalesOrderNotesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\SalesOrderNotesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\SalesOrderNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSalesOrderNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSalesOrderNotesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSalesOrderNotesQuery) {
            return $criteria;
        }
        $query = new ChildSalesOrderNotesQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array[$ShntType, $ShntSeq, $ShntKey2, $ShntForm] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSalesOrderNotes|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderNotesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SalesOrderNotesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildSalesOrderNotes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ShntType, ShntTypeDesc, OehhNbr, ShntYear, OedhLine, ShntLotSer, ShntPickTicket, ShntPackTicket, ShntInvoice, ShntAcknow, ShntSeq, ShntNote, ShntKey2, ShntForm, DateUpdtd, TimeUpdtd, dummy FROM notes_sh_head_det WHERE ShntType = :p0 AND ShntSeq = :p1 AND ShntKey2 = :p2 AND ShntForm = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSalesOrderNotes $obj */
            $obj = new ChildSalesOrderNotes();
            $obj->hydrate($row);
            SalesOrderNotesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildSalesOrderNotes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTSEQ, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTKEY2, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTFORM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_SHNTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_SHNTSEQ, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_SHNTKEY2, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(SalesOrderNotesTableMap::COL_SHNTFORM, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ShntType column
     *
     * Example usage:
     * <code>
     * $query->filterByShnttype('fooValue');   // WHERE ShntType = 'fooValue'
     * $query->filterByShnttype('%fooValue%', Criteria::LIKE); // WHERE ShntType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shnttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShnttype($shnttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shnttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTTYPE, $shnttype, $comparison);
    }

    /**
     * Filter the query on the ShntTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByShnttypedesc('fooValue');   // WHERE ShntTypeDesc = 'fooValue'
     * $query->filterByShnttypedesc('%fooValue%', Criteria::LIKE); // WHERE ShntTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shnttypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShnttypedesc($shnttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shnttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTTYPEDESC, $shnttypedesc, $comparison);
    }

    /**
     * Filter the query on the OehhNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOehhnbr('fooValue');   // WHERE OehhNbr = 'fooValue'
     * $query->filterByOehhnbr('%fooValue%', Criteria::LIKE); // WHERE OehhNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oehhnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByOehhnbr($oehhnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oehhnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEHHNBR, $oehhnbr, $comparison);
    }

    /**
     * Filter the query on the ShntYear column
     *
     * Example usage:
     * <code>
     * $query->filterByShntyear('fooValue');   // WHERE ShntYear = 'fooValue'
     * $query->filterByShntyear('%fooValue%', Criteria::LIKE); // WHERE ShntYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntyear The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntyear($shntyear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntyear)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTYEAR, $shntyear, $comparison);
    }

    /**
     * Filter the query on the OedhLine column
     *
     * Example usage:
     * <code>
     * $query->filterByOedhline(1234); // WHERE OedhLine = 1234
     * $query->filterByOedhline(array(12, 34)); // WHERE OedhLine IN (12, 34)
     * $query->filterByOedhline(array('min' => 12)); // WHERE OedhLine > 12
     * </code>
     *
     * @param     mixed $oedhline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByOedhline($oedhline = null, $comparison = null)
    {
        if (is_array($oedhline)) {
            $useMinMax = false;
            if (isset($oedhline['min'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEDHLINE, $oedhline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oedhline['max'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEDHLINE, $oedhline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_OEDHLINE, $oedhline, $comparison);
    }

    /**
     * Filter the query on the ShntLotSer column
     *
     * Example usage:
     * <code>
     * $query->filterByShntlotser('fooValue');   // WHERE ShntLotSer = 'fooValue'
     * $query->filterByShntlotser('%fooValue%', Criteria::LIKE); // WHERE ShntLotSer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntlotser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntlotser($shntlotser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntlotser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTLOTSER, $shntlotser, $comparison);
    }

    /**
     * Filter the query on the ShntPickTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByShntpickticket('fooValue');   // WHERE ShntPickTicket = 'fooValue'
     * $query->filterByShntpickticket('%fooValue%', Criteria::LIKE); // WHERE ShntPickTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntpickticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntpickticket($shntpickticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntpickticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTPICKTICKET, $shntpickticket, $comparison);
    }

    /**
     * Filter the query on the ShntPackTicket column
     *
     * Example usage:
     * <code>
     * $query->filterByShntpackticket('fooValue');   // WHERE ShntPackTicket = 'fooValue'
     * $query->filterByShntpackticket('%fooValue%', Criteria::LIKE); // WHERE ShntPackTicket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntpackticket The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntpackticket($shntpackticket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntpackticket)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTPACKTICKET, $shntpackticket, $comparison);
    }

    /**
     * Filter the query on the ShntInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByShntinvoice('fooValue');   // WHERE ShntInvoice = 'fooValue'
     * $query->filterByShntinvoice('%fooValue%', Criteria::LIKE); // WHERE ShntInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntinvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntinvoice($shntinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTINVOICE, $shntinvoice, $comparison);
    }

    /**
     * Filter the query on the ShntAcknow column
     *
     * Example usage:
     * <code>
     * $query->filterByShntacknow('fooValue');   // WHERE ShntAcknow = 'fooValue'
     * $query->filterByShntacknow('%fooValue%', Criteria::LIKE); // WHERE ShntAcknow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntacknow The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntacknow($shntacknow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntacknow)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTACKNOW, $shntacknow, $comparison);
    }

    /**
     * Filter the query on the ShntSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByShntseq(1234); // WHERE ShntSeq = 1234
     * $query->filterByShntseq(array(12, 34)); // WHERE ShntSeq IN (12, 34)
     * $query->filterByShntseq(array('min' => 12)); // WHERE ShntSeq > 12
     * </code>
     *
     * @param     mixed $shntseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntseq($shntseq = null, $comparison = null)
    {
        if (is_array($shntseq)) {
            $useMinMax = false;
            if (isset($shntseq['min'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTSEQ, $shntseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shntseq['max'])) {
                $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTSEQ, $shntseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTSEQ, $shntseq, $comparison);
    }

    /**
     * Filter the query on the ShntNote column
     *
     * Example usage:
     * <code>
     * $query->filterByShntnote('fooValue');   // WHERE ShntNote = 'fooValue'
     * $query->filterByShntnote('%fooValue%', Criteria::LIKE); // WHERE ShntNote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntnote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntnote($shntnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTNOTE, $shntnote, $comparison);
    }

    /**
     * Filter the query on the ShntKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByShntkey2('fooValue');   // WHERE ShntKey2 = 'fooValue'
     * $query->filterByShntkey2('%fooValue%', Criteria::LIKE); // WHERE ShntKey2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntkey2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntkey2($shntkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTKEY2, $shntkey2, $comparison);
    }

    /**
     * Filter the query on the ShntForm column
     *
     * Example usage:
     * <code>
     * $query->filterByShntform('fooValue');   // WHERE ShntForm = 'fooValue'
     * $query->filterByShntform('%fooValue%', Criteria::LIKE); // WHERE ShntForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shntform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByShntform($shntform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shntform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_SHNTFORM, $shntform, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesOrderNotesTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSalesOrderNotes $salesOrderNotes Object to remove from the list of results
     *
     * @return $this|ChildSalesOrderNotesQuery The current query, for fluid interface
     */
    public function prune($salesOrderNotes = null)
    {
        if ($salesOrderNotes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SalesOrderNotesTableMap::COL_SHNTTYPE), $salesOrderNotes->getShnttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SalesOrderNotesTableMap::COL_SHNTSEQ), $salesOrderNotes->getShntseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SalesOrderNotesTableMap::COL_SHNTKEY2), $salesOrderNotes->getShntkey2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(SalesOrderNotesTableMap::COL_SHNTFORM), $salesOrderNotes->getShntform(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_sh_head_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderNotesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesOrderNotesTableMap::clearInstancePool();
            SalesOrderNotesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderNotesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SalesOrderNotesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SalesOrderNotesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SalesOrderNotesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SalesOrderNotesQuery
