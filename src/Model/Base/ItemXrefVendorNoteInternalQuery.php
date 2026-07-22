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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `notes_vend_xref_internal` table.
 *
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternalQuery orderByInitItemNbr($order = Criteria::ASC) Order by the InitItemNbr column
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
 * @method     ChildItemXrefVendorNoteInternalQuery groupByInitItemNbr() Group by the InitItemNbr column
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
 * @method     ChildItemXrefVendorNoteInternal|null findOne(?ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteInternal matching the query
 * @method     ChildItemXrefVendorNoteInternal findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteInternal matching the query, or a new ChildItemXrefVendorNoteInternal object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPonttype(string $PontType) Return the first ChildItemXrefVendorNoteInternal filtered by the PontType column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildItemXrefVendorNoteInternal filtered by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendorNoteInternal filtered by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByInitItemNbr(string $InitItemNbr) Return the first ChildItemXrefVendorNoteInternal filtered by the InitItemNbr column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontintvdate(string $PontIntvDate) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvDate column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontintvtime(string $PontIntvTime) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvTime column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontintvuser(string $PontIntvUser) Return the first ChildItemXrefVendorNoteInternal filtered by the PontIntvUser column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontform(string $PontForm) Return the first ChildItemXrefVendorNoteInternal filtered by the PontForm column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontseq(int $PontSeq) Return the first ChildItemXrefVendorNoteInternal filtered by the PontSeq column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontnote(string $PontNote) Return the first ChildItemXrefVendorNoteInternal filtered by the PontNote column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByPontkey2(string $PontKey2) Return the first ChildItemXrefVendorNoteInternal filtered by the PontKey2 column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendorNoteInternal filtered by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendorNoteInternal filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteInternal|null findOneByDummy(string $dummy) Return the first ChildItemXrefVendorNoteInternal filtered by the dummy column
 *
 * @method     ChildItemXrefVendorNoteInternal requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemXrefVendorNoteInternal by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOne(?ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteInternal matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendorNoteInternal requireOneByPonttype(string $PontType) Return the first ChildItemXrefVendorNoteInternal filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildItemXrefVendorNoteInternal filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendorNoteInternal filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteInternal requireOneByInitItemNbr(string $InitItemNbr) Return the first ChildItemXrefVendorNoteInternal filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildItemXrefVendorNoteInternal[]|Collection find(?ConnectionInterface $con = null) Return ChildItemXrefVendorNoteInternal objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> find(?ConnectionInterface $con = null) Return ChildItemXrefVendorNoteInternal objects based on current ModelCriteria
 *
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPonttype(string|array<string> $PontType) Return ChildItemXrefVendorNoteInternal objects filtered by the PontType column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPonttype(string|array<string> $PontType) Return ChildItemXrefVendorNoteInternal objects filtered by the PontType column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPonttypedesc(string|array<string> $PontTypeDesc) Return ChildItemXrefVendorNoteInternal objects filtered by the PontTypeDesc column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPonttypedesc(string|array<string> $PontTypeDesc) Return ChildItemXrefVendorNoteInternal objects filtered by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildItemXrefVendorNoteInternal objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByApvevendid(string|array<string> $ApveVendId) Return ChildItemXrefVendorNoteInternal objects filtered by the ApveVendId column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByInitItemNbr(string|array<string> $InitItemNbr) Return ChildItemXrefVendorNoteInternal objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByInitItemNbr(string|array<string> $InitItemNbr) Return ChildItemXrefVendorNoteInternal objects filtered by the InitItemNbr column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontintvdate(string|array<string> $PontIntvDate) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvDate column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontintvdate(string|array<string> $PontIntvDate) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvDate column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontintvtime(string|array<string> $PontIntvTime) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvTime column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontintvtime(string|array<string> $PontIntvTime) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvTime column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontintvuser(string|array<string> $PontIntvUser) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvUser column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontintvuser(string|array<string> $PontIntvUser) Return ChildItemXrefVendorNoteInternal objects filtered by the PontIntvUser column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontform(string|array<string> $PontForm) Return ChildItemXrefVendorNoteInternal objects filtered by the PontForm column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontform(string|array<string> $PontForm) Return ChildItemXrefVendorNoteInternal objects filtered by the PontForm column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontseq(int|array<int> $PontSeq) Return ChildItemXrefVendorNoteInternal objects filtered by the PontSeq column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontseq(int|array<int> $PontSeq) Return ChildItemXrefVendorNoteInternal objects filtered by the PontSeq column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontnote(string|array<string> $PontNote) Return ChildItemXrefVendorNoteInternal objects filtered by the PontNote column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontnote(string|array<string> $PontNote) Return ChildItemXrefVendorNoteInternal objects filtered by the PontNote column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByPontkey2(string|array<string> $PontKey2) Return ChildItemXrefVendorNoteInternal objects filtered by the PontKey2 column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByPontkey2(string|array<string> $PontKey2) Return ChildItemXrefVendorNoteInternal objects filtered by the PontKey2 column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefVendorNoteInternal objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefVendorNoteInternal objects filtered by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefVendorNoteInternal objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefVendorNoteInternal objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteInternal[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemXrefVendorNoteInternal objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteInternal> findByDummy(string|array<string> $dummy) Return ChildItemXrefVendorNoteInternal objects filtered by the dummy column
 *
 * @method     ChildItemXrefVendorNoteInternal[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemXrefVendorNoteInternal> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemXrefVendorNoteInternalQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefVendorNoteInternalQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefVendorNoteInternal', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefVendorNoteInternalQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefVendorNoteInternalQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemXrefVendorNoteInternal A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, ApveVendId, InitItemNbr, PontIntvDate, PontIntvTime, PontIntvUser, PontForm, PontSeq, PontNote, PontKey2, DateUpdtd, TimeUpdtd, dummy FROM notes_vend_xref_internal WHERE PontType = :p0 AND PontForm = :p1 AND PontSeq = :p2 AND PontKey2 = :p3';
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
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
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
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
     * $query->filterByPonttype(['foo', 'bar']); // WHERE PontType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ponttype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPonttype($ponttype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPE, $ponttype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontTypeDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByPonttypedesc('fooValue');   // WHERE PontTypeDesc = 'fooValue'
     * $query->filterByPonttypedesc('%fooValue%', Criteria::LIKE); // WHERE PontTypeDesc LIKE '%fooValue%'
     * $query->filterByPonttypedesc(['foo', 'bar']); // WHERE PontTypeDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $ponttypedesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPonttypedesc($ponttypedesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ponttypedesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ApveVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByApvevendid('fooValue');   // WHERE ApveVendId = 'fooValue'
     * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
     * $query->filterByApvevendid(['foo', 'bar']); // WHERE ApveVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $apvevendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByApvevendid($apvevendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apvevendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_APVEVENDID, $apvevendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInitItemNbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInitItemNbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInitItemNbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initItemNbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitItemNbr($initItemNbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initItemNbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_INITITEMNBR, $initItemNbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontIntvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvdate('fooValue');   // WHERE PontIntvDate = 'fooValue'
     * $query->filterByPontintvdate('%fooValue%', Criteria::LIKE); // WHERE PontIntvDate LIKE '%fooValue%'
     * $query->filterByPontintvdate(['foo', 'bar']); // WHERE PontIntvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pontintvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontintvdate($pontintvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVDATE, $pontintvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontIntvTime column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvtime('fooValue');   // WHERE PontIntvTime = 'fooValue'
     * $query->filterByPontintvtime('%fooValue%', Criteria::LIKE); // WHERE PontIntvTime LIKE '%fooValue%'
     * $query->filterByPontintvtime(['foo', 'bar']); // WHERE PontIntvTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pontintvtime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontintvtime($pontintvtime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvtime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVTIME, $pontintvtime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontIntvUser column
     *
     * Example usage:
     * <code>
     * $query->filterByPontintvuser('fooValue');   // WHERE PontIntvUser = 'fooValue'
     * $query->filterByPontintvuser('%fooValue%', Criteria::LIKE); // WHERE PontIntvUser LIKE '%fooValue%'
     * $query->filterByPontintvuser(['foo', 'bar']); // WHERE PontIntvUser IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pontintvuser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontintvuser($pontintvuser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontintvuser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTINTVUSER, $pontintvuser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontForm column
     *
     * Example usage:
     * <code>
     * $query->filterByPontform('fooValue');   // WHERE PontForm = 'fooValue'
     * $query->filterByPontform('%fooValue%', Criteria::LIKE); // WHERE PontForm LIKE '%fooValue%'
     * $query->filterByPontform(['foo', 'bar']); // WHERE PontForm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pontform The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontform($pontform = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontform)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTFORM, $pontform, $comparison);

        return $this;
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
     * @param mixed $pontseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontseq($pontseq = null, ?string $comparison = null)
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

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTSEQ, $pontseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontNote column
     *
     * Example usage:
     * <code>
     * $query->filterByPontnote('fooValue');   // WHERE PontNote = 'fooValue'
     * $query->filterByPontnote('%fooValue%', Criteria::LIKE); // WHERE PontNote LIKE '%fooValue%'
     * $query->filterByPontnote(['foo', 'bar']); // WHERE PontNote IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pontnote The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontnote($pontnote = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontnote)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTNOTE, $pontnote, $comparison);

        return $this;
    }

    /**
     * Filter the query on the PontKey2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPontkey2('fooValue');   // WHERE PontKey2 = 'fooValue'
     * $query->filterByPontkey2('%fooValue%', Criteria::LIKE); // WHERE PontKey2 LIKE '%fooValue%'
     * $query->filterByPontkey2(['foo', 'bar']); // WHERE PontKey2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $pontkey2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPontkey2($pontkey2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pontkey2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_PONTKEY2, $pontkey2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Vendor object
     *
     * @param \Vendor|ObjectCollection $vendor The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVendor($vendor, ?string $comparison = null)
    {
        if ($vendor instanceof \Vendor) {
            return $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByVendor() only accepts arguments of type \Vendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinVendor(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the Vendor relation Vendor object
     *
     * @param callable(\VendorQuery):\VendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Vendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \VendorQuery The inner query object of the EXISTS statement
     */
    public function useVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT EXISTS query.
     *
     * @see useVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useExistsQuery('Vendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Vendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \VendorQuery The inner query object of the IN statement
     */
    public function useInVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Vendor table for a NOT IN query.
     *
     * @see useVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \VendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \VendorQuery */
        $q = $this->useInQuery('Vendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefVendorNoteInternalTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildItemXrefVendorNoteInternal $itemXrefVendorNoteInternal Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
