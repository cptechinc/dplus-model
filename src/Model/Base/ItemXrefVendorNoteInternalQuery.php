<?php

namespace Base;

use \ItemXrefVendorNoteInternal as ChildItemXrefVendorNoteInternal;
use \ItemXrefVendorNoteInternalQuery as ChildItemXrefVendorNoteInternalQuery;
use \Exception;
use \PDO;
use Map\ItemXrefVendorNoteInternalTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'notes_vend_xref_internal' table.
 *
 *
 *
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontintvitem($order = Criteria::ASC) Order by the PontIntvItem column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontintvdate($order = Criteria::ASC) Order by the PontIntvDate column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontintvtime($order = Criteria::ASC) Order by the PontIntvTime column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontintvuser($order = Criteria::ASC) Order by the PontIntvUser column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontform($order = Criteria::ASC) Order by the PontForm column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontseq($order = Criteria::ASC) Order by the PontSeq column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontnote($order = Criteria::ASC) Order by the PontNote column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPontkey2($order = Criteria::ASC) Order by the PontKey2 column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPonttype() Group by the PontType column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPonttypedesc() Group by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontintvitem() Group by the PontIntvItem column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontintvdate() Group by the PontIntvDate column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontintvtime() Group by the PontIntvTime column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontintvuser() Group by the PontIntvUser column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontform() Group by the PontForm column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontseq() Group by the PontSeq column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontnote() Group by the PontNote column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByPontkey2() Group by the PontKey2 column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteInternalQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefVendorNoteInternalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefVendorNoteInternalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefVendorNoteInternalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefVendorNoteInternalQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefVendorNoteInternalQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefVendorNoteInternalQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefVendorNoteInternalQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteInternalQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteInternalQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorNoteInternalQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorNoteInternalQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteInternalQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteInternalQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorNoteInternalQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteInternalQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteInternalQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefVendorNoteInternalQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefVendorNoteInternalQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteInternalQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteInternalQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \VendorQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefVendorNoteInternal findOne(ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteInternal matching the query
 * @method     ChildItemXrefVendorNoteInternal findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteInternal matching the query, or a new ChildItemXrefVendorNoteInternal object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefVendorNoteInternal findOneByPonttype(string $PontType) Return the first ChildItemXrefVendorNoteInternal filtered by the PontType column
 * @method     ChildItemXrefVendorNoteInternal findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildItemXrefVendorNoteInternal filtered by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternal findOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendorNoteInternal filtered by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontintvitem(string $PontIntvItem) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvItem column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontintvdate(string $PontIntvDate) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvDate column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontintvtime(string $PontIntvTime) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvTime column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontintvuser(string $PontIntvUser) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvUser column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontform(string $PontForm) Return the first ChildItemXrefVendorNoteInternal filtered by the PontForm column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontseq(int $PontSeq) Return the first ChildItemXrefVendorNoteInternal filtered by the PontSeq column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontnote(string $PontNote) Return the first ChildItemXrefVendorNoteInternal filtered by the PontNote column
 * @method     ChildItemXrefVendorNoteInternal findOneByPontkey2(string $PontKey2) Return the first ChildItemXrefVendorNoteInternal filtered by the PontKey2 column
 * @method     ChildItemXrefVendorNoteInternal findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendorNoteInternal filtered by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteInternal findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendorNoteInternal filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteInternal findOneByDummy(string $dummy) Return the first ChildItemXrefVendorNoteInternal filtered by the dummy column *

 * @method     ChildItemXrefVendorNoteInternal requirePk($key, ConnectionInterface $con = null) Return the ChildItemXrefVendorNoteInternal by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOne(ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteInternal matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendorNoteInternal requireOneByPonttype(string $PontType) Return the first ChildItemXrefVendorNoteInternal filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildItemXrefVendorNoteInternal filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendorNoteInternal filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontintvitem(string $PontIntvItem) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontintvdate(string $PontIntvDate) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontintvtime(string $PontIntvTime) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontintvuser(string $PontIntvUser) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontform(string $PontForm) Return the first ChildItemXrefVendorNoteInternal filtered by the PontForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontseq(int $PontSeq) Return the first ChildItemXrefVendorNoteInternal filtered by the PontSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontnote(string $PontNote) Return the first ChildItemXrefVendorNoteInternal filtered by the PontNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPontkey2(string $PontKey2) Return the first ChildItemXrefVendorNoteInternal filtered by the PontKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendorNoteInternal filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendorNoteInternal filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByDummy(string $dummy) Return the first ChildItemXrefVendorNoteInternal filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemXrefVendorNoteInternal objects based on current ModelCriteria
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPonttype(string $PontType) Return ChildItemXrefVendorNoteInternal objects filtered by the PontType column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPonttypedesc(string $PontTypeDesc) Return ChildItemXrefVendorNoteInternal objects filtered by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByApvevendid(string $ApveVendId) Return ChildItemXrefVendorNoteInternal objects filtered by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontintvitem(string $PontIntvItem) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvItem column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontintvdate(string $PontIntvDate) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvDate column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontintvtime(string $PontIntvTime) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvTime column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontintvuser(string $PontIntvUser) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvUser column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontform(string $PontForm) Return ChildItemXrefVendorNoteInternal objects filtered by the PontForm column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontseq(int $PontSeq) Return ChildItemXrefVendorNoteInternal objects filtered by the PontSeq column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontnote(string $PontNote) Return ChildItemXrefVendorNoteInternal objects filtered by the PontNote column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByPontkey2(string $PontKey2) Return ChildItemXrefVendorNoteInternal objects filtered by the PontKey2 column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemXrefVendorNoteInternal objects filtered by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemXrefVendorNoteInternal objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteInternal[]|ObjectCollection findByDummy(string $dummy) Return ChildItemXrefVendorNoteInternal objects filtered by the dummy column
 * @method     ChildItemXrefVendorNoteInternal[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemXrefVendorNoteInternalQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefVendorNoteInternalQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefVendorNoteInternal', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefVendorNoteInternalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefVendorNoteInternalQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemXrefVendorNoteInternalQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefVendorNoteInternalQuery();
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
     * @param array[$PontType, $PontForm, $PontSeq, $PontKey2] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemXrefVendorNoteInternal|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefVendorNoteInternalTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefVendorNoteInternalTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildItemXrefVendorNoteInternal A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, ApveVendId, PontIntvItem, PontIntvDate, PontIntvTime, PontIntvUser, PontForm, PontSeq, PontNote, PontKey2, DateUpdtd, TimeUpdtd, dummy FROM notes_vend_xref_internal WHERE PontType = :p0 AND PontForm = :p1 AND PontSeq = :p2 AND PontKey2 = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemXrefVendorNoteInternal $obj */
            $obj = new ChildItemXrefVendorNoteInternal();
            $obj->hydrate($row);
            ItemXrefVendorNoteInternalTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildItemXrefVendorNoteInternal|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefVendorNoteInternalTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemXrefVendorNoteInternalTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the PontType column
     *
     * Example usage:
     * <code>
     * $query->filterByPonttype('fooValue');   // WHERE PontType = 'fooValue'
     * $query->filterByPonttype('%fooValue%', Criteria::LIKE); // WHERE PontType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ponttype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPonttype($ponttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPE, $ponttype, $comparison);
    }

    /**
     * Filter the query on the PontTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPonttypedesc('fooValue');   // WHERE PontTypeDesc = 'fooValue'
     * $query->filterByPonttypedesc('%fooValue%', Criteria::LIKE); // WHERE PontTypeDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ponttypedesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPonttypedesc($ponttypedesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);
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
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_APVEVENDID, $apvevendid, $comparison);
    }

    /**
     * Filter the query on the PontIntvItem column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvitem('fooValue');   // WHERE PontIntvItem = 'fooValue'
     * $query->filterByPontintvitem('%fooValue%', Criteria::LIKE); // WHERE PontIntvItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintvitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintvitem($pontintvitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVITEM, $pontintvitem, $comparison);
    }

    /**
     * Filter the query on the PontIntvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvdate('fooValue');   // WHERE PontIntvDate = 'fooValue'
     * $query->filterByPontintvdate('%fooValue%', Criteria::LIKE); // WHERE PontIntvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintvdate($pontintvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVDATE, $pontintvdate, $comparison);
    }

    /**
     * Filter the query on the PontIntvTime column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvtime('fooValue');   // WHERE PontIntvTime = 'fooValue'
     * $query->filterByPontintvtime('%fooValue%', Criteria::LIKE); // WHERE PontIntvTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintvtime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintvtime($pontintvtime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvtime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVTIME, $pontintvtime, $comparison);
    }

    /**
     * Filter the query on the PontIntvUser column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvuser('fooValue');   // WHERE PontIntvUser = 'fooValue'
     * $query->filterByPontintvuser('%fooValue%', Criteria::LIKE); // WHERE PontIntvUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontintvuser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontintvuser($pontintvuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVUSER, $pontintvuser, $comparison);
    }

    /**
     * Filter the query on the PontForm column
     *
     * Example usage:
     * <code>
     * $query->filterByPontform('fooValue');   // WHERE PontForm = 'fooValue'
     * $query->filterByPontform('%fooValue%', Criteria::LIKE); // WHERE PontForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontform The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontform($pontform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontform)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTFORM, $pontform, $comparison);
    }

    /**
     * Filter the query on the PontSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByPontseq(1234); // WHERE PontSeq = 1234
     * $query->filterByPontseq(array(12, 34)); // WHERE PontSeq IN (12, 34)
     * $query->filterByPontseq(array('min' => 12)); // WHERE PontSeq > 12
     * </code>
     *
     * @param     mixed $pontseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontseq($pontseq = null, $comparison = null)
    {
        if (is_array($pontseq)) {
            $useMinMax = false;
            if (isset($pontseq['min'])) {
                $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ, $pontseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pontseq['max'])) {
                $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ, $pontseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ, $pontseq, $comparison);
    }

    /**
     * Filter the query on the PontNote column
     *
     * Example usage:
     * <code>
     * $query->filterByPontnote('fooValue');   // WHERE PontNote = 'fooValue'
     * $query->filterByPontnote('%fooValue%', Criteria::LIKE); // WHERE PontNote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontnote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontnote($pontnote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontnote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTNOTE, $pontnote, $comparison);
    }

    /**
     * Filter the query on the PontKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPontkey2('fooValue');   // WHERE PontKey2 = 'fooValue'
     * $query->filterByPontkey2('%fooValue%', Criteria::LIKE); // WHERE PontKey2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pontkey2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByPontkey2($pontkey2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontkey2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTKEY2, $pontkey2, $comparison);
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
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor, $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);
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
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function joinVendor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useVendorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vendor', '\VendorQuery');
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVITEM, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVITEM, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

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
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemXrefVendorNoteInternal $itemXrefVendorNoteInternal Object to remove from the list of results
     *
     * @return $this|ChildItemXrefVendorNoteInternalQuery The current query, for fluid interface
     */
    public function prune($itemXrefVendorNoteInternal = null)
    {
        if ($itemXrefVendorNoteInternal) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPE), $itemXrefVendorNoteInternal->getPonttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefVendorNoteInternalTableMap::COL_PONTFORM), $itemXrefVendorNoteInternal->getPontform(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ), $itemXrefVendorNoteInternal->getPontseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemXrefVendorNoteInternalTableMap::COL_PONTKEY2), $itemXrefVendorNoteInternal->getPontkey2(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_vend_xref_internal table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorNoteInternalTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefVendorNoteInternalTableMap::clearInstancePool();
            ItemXrefVendorNoteInternalTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorNoteInternalTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefVendorNoteInternalTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefVendorNoteInternalTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefVendorNoteInternalTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemXrefVendorNoteInternalQuery
