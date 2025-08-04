<?php

namespace Base;

use \ItemXrefVendorNoteDetail as ChildItemXrefVendorNoteDetail;
use \ItemXrefVendorNoteDetailQuery as ChildItemXrefVendorNoteDetailQuery;
use \Exception;
use \PDO;
use Map\ItemXrefVendorNoteDetailTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `notes_vend_xref_det` table.
 *
 * @method     ChildItemXrefVendorNoteDetailQuery orderByPonttype($order = Criteria::ASC) Order by the PontType column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByPonttypedesc($order = Criteria::ASC) Order by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByApvevendid($order = Criteria::ASC) Order by the ApveVendId column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByInitItemNbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByPontform($order = Criteria::ASC) Order by the PontForm column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByPontseq($order = Criteria::ASC) Order by the PontSeq column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByPontnote($order = Criteria::ASC) Order by the PontNote column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByPontkey2($order = Criteria::ASC) Order by the PontKey2 column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteDetailQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemXrefVendorNoteDetailQuery groupByPonttype() Group by the PontType column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByPonttypedesc() Group by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByApvevendid() Group by the ApveVendId column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByInitItemNbr() Group by the InitItemNbr column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByPontform() Group by the PontForm column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByPontseq() Group by the PontSeq column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByPontnote() Group by the PontNote column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByPontkey2() Group by the PontKey2 column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteDetailQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemXrefVendorNoteDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemXrefVendorNoteDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemXrefVendorNoteDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemXrefVendorNoteDetailQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemXrefVendorNoteDetailQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemXrefVendorNoteDetailQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemXrefVendorNoteDetailQuery leftJoinVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteDetailQuery rightJoinVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteDetailQuery innerJoinVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorNoteDetailQuery joinWithVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorNoteDetailQuery leftJoinWithVendor() Adds a LEFT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteDetailQuery rightJoinWithVendor() Adds a RIGHT JOIN clause and with to the query using the Vendor relation
 * @method     ChildItemXrefVendorNoteDetailQuery innerJoinWithVendor() Adds a INNER JOIN clause and with to the query using the Vendor relation
 *
 * @method     ChildItemXrefVendorNoteDetailQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteDetailQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteDetailQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefVendorNoteDetailQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemXrefVendorNoteDetailQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteDetailQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemXrefVendorNoteDetailQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \VendorQuery|\ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemXrefVendorNoteDetail|null findOne(?ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteDetail matching the query
 * @method     ChildItemXrefVendorNoteDetail findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteDetail matching the query, or a new ChildItemXrefVendorNoteDetail object populated from the query conditions when no match is found
 *
 * @method     ChildItemXrefVendorNoteDetail|null findOneByPonttype(string $PontType) Return the first ChildItemXrefVendorNoteDetail filtered by the PontType column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByPonttypedesc(string $PontTypeDesc) Return the first ChildItemXrefVendorNoteDetail filtered by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendorNoteDetail filtered by the ApveVendId column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByInitItemNbr(string $InitItemNbr) Return the first ChildItemXrefVendorNoteDetail filtered by the InitItemNbr column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByPontform(string $PontForm) Return the first ChildItemXrefVendorNoteDetail filtered by the PontForm column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByPontseq(int $PontSeq) Return the first ChildItemXrefVendorNoteDetail filtered by the PontSeq column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByPontnote(string $PontNote) Return the first ChildItemXrefVendorNoteDetail filtered by the PontNote column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByPontkey2(string $PontKey2) Return the first ChildItemXrefVendorNoteDetail filtered by the PontKey2 column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendorNoteDetail filtered by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendorNoteDetail filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteDetail|null findOneByDummy(string $dummy) Return the first ChildItemXrefVendorNoteDetail filtered by the dummy column
 *
 * @method     ChildItemXrefVendorNoteDetail requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemXrefVendorNoteDetail by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOne(?ConnectionInterface $con = null) Return the first ChildItemXrefVendorNoteDetail matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendorNoteDetail requireOneByPonttype(string $PontType) Return the first ChildItemXrefVendorNoteDetail filtered by the PontType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByPonttypedesc(string $PontTypeDesc) Return the first ChildItemXrefVendorNoteDetail filtered by the PontTypeDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByApvevendid(string $ApveVendId) Return the first ChildItemXrefVendorNoteDetail filtered by the ApveVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByInitItemNbr(string $InitItemNbr) Return the first ChildItemXrefVendorNoteDetail filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByPontform(string $PontForm) Return the first ChildItemXrefVendorNoteDetail filtered by the PontForm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByPontseq(int $PontSeq) Return the first ChildItemXrefVendorNoteDetail filtered by the PontSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByPontnote(string $PontNote) Return the first ChildItemXrefVendorNoteDetail filtered by the PontNote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByPontkey2(string $PontKey2) Return the first ChildItemXrefVendorNoteDetail filtered by the PontKey2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemXrefVendorNoteDetail filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemXrefVendorNoteDetail filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemXrefVendorNoteDetail requireOneByDummy(string $dummy) Return the first ChildItemXrefVendorNoteDetail filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemXrefVendorNoteDetail[]|Collection find(?ConnectionInterface $con = null) Return ChildItemXrefVendorNoteDetail objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> find(?ConnectionInterface $con = null) Return ChildItemXrefVendorNoteDetail objects based on current ModelCriteria
 *
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByPonttype(string|array<string> $PontType) Return ChildItemXrefVendorNoteDetail objects filtered by the PontType column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByPonttype(string|array<string> $PontType) Return ChildItemXrefVendorNoteDetail objects filtered by the PontType column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByPonttypedesc(string|array<string> $PontTypeDesc) Return ChildItemXrefVendorNoteDetail objects filtered by the PontTypeDesc column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByPonttypedesc(string|array<string> $PontTypeDesc) Return ChildItemXrefVendorNoteDetail objects filtered by the PontTypeDesc column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByApvevendid(string|array<string> $ApveVendId) Return ChildItemXrefVendorNoteDetail objects filtered by the ApveVendId column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByApvevendid(string|array<string> $ApveVendId) Return ChildItemXrefVendorNoteDetail objects filtered by the ApveVendId column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByInitItemNbr(string|array<string> $InitItemNbr) Return ChildItemXrefVendorNoteDetail objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByInitItemNbr(string|array<string> $InitItemNbr) Return ChildItemXrefVendorNoteDetail objects filtered by the InitItemNbr column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByPontform(string|array<string> $PontForm) Return ChildItemXrefVendorNoteDetail objects filtered by the PontForm column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByPontform(string|array<string> $PontForm) Return ChildItemXrefVendorNoteDetail objects filtered by the PontForm column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByPontseq(int|array<int> $PontSeq) Return ChildItemXrefVendorNoteDetail objects filtered by the PontSeq column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByPontseq(int|array<int> $PontSeq) Return ChildItemXrefVendorNoteDetail objects filtered by the PontSeq column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByPontnote(string|array<string> $PontNote) Return ChildItemXrefVendorNoteDetail objects filtered by the PontNote column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByPontnote(string|array<string> $PontNote) Return ChildItemXrefVendorNoteDetail objects filtered by the PontNote column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByPontkey2(string|array<string> $PontKey2) Return ChildItemXrefVendorNoteDetail objects filtered by the PontKey2 column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByPontkey2(string|array<string> $PontKey2) Return ChildItemXrefVendorNoteDetail objects filtered by the PontKey2 column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefVendorNoteDetail objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemXrefVendorNoteDetail objects filtered by the DateUpdtd column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefVendorNoteDetail objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemXrefVendorNoteDetail objects filtered by the TimeUpdtd column
 * @method     ChildItemXrefVendorNoteDetail[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemXrefVendorNoteDetail objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemXrefVendorNoteDetail> findByDummy(string|array<string> $dummy) Return ChildItemXrefVendorNoteDetail objects filtered by the dummy column
 *
 * @method     ChildItemXrefVendorNoteDetail[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemXrefVendorNoteDetail> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemXrefVendorNoteDetailQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemXrefVendorNoteDetailQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemXrefVendorNoteDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemXrefVendorNoteDetailQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemXrefVendorNoteDetailQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildItemXrefVendorNoteDetailQuery) {
            return $criteria;
        }
        $query = new ChildItemXrefVendorNoteDetailQuery();
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
     * @return ChildItemXrefVendorNoteDetail|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemXrefVendorNoteDetailTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]))))) {
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
     * @return ChildItemXrefVendorNoteDetail A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT PontType, PontTypeDesc, ApveVendId, InitItemNbr, PontForm, PontSeq, PontNote, PontKey2, DateUpdtd, TimeUpdtd, dummy FROM notes_vend_xref_det WHERE PontType = :p0 AND PontForm = :p1 AND PontSeq = :p2 AND PontKey2 = :p3';
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
            /** @var ChildItemXrefVendorNoteDetail $obj */
            $obj = new ChildItemXrefVendorNoteDetail();
            $obj->hydrate($row);
            ItemXrefVendorNoteDetailTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3])]));
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
     * @return ChildItemXrefVendorNoteDetail|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTFORM, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2, $key[3], Criteria::EQUAL);
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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE, $ponttype, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPEDESC, $ponttypedesc, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_APVEVENDID, $apvevendid, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_INITITEMNBR, $initItemNbr, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTFORM, $pontform, $comparison);

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
                $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, $pontseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pontseq['max'])) {
                $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, $pontseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ, $pontseq, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTNOTE, $pontnote, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2, $pontkey2, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_DUMMY, $dummy, $comparison);

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
                ->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_APVEVENDID, $vendor->getApvevendid(), $comparison);
        } elseif ($vendor instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_APVEVENDID, $vendor->toKeyValue('PrimaryKey', 'Apvevendid'), $comparison);

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
                ->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemXrefVendorNoteDetailTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

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
     * @param ChildItemXrefVendorNoteDetail $itemXrefVendorNoteDetail Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($itemXrefVendorNoteDetail = null)
    {
        if ($itemXrefVendorNoteDetail) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ItemXrefVendorNoteDetailTableMap::COL_PONTTYPE), $itemXrefVendorNoteDetail->getPonttype(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ItemXrefVendorNoteDetailTableMap::COL_PONTFORM), $itemXrefVendorNoteDetail->getPontform(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ItemXrefVendorNoteDetailTableMap::COL_PONTSEQ), $itemXrefVendorNoteDetail->getPontseq(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ItemXrefVendorNoteDetailTableMap::COL_PONTKEY2), $itemXrefVendorNoteDetail->getPontkey2(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the notes_vend_xref_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemXrefVendorNoteDetailTableMap::clearInstancePool();
            ItemXrefVendorNoteDetailTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemXrefVendorNoteDetailTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemXrefVendorNoteDetailTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemXrefVendorNoteDetailTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
