<?php

namespace Base;

use \Document as ChildDocument;
use \DocumentQuery as ChildDocumentQuery;
use \Exception;
use \PDO;
use Map\DocumentTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `doc_index` table.
 *
 * @method     ChildDocumentQuery orderByDoccfolder($order = Criteria::ASC) Order by the DoccFolder column
 * @method     ChildDocumentQuery orderByDocifld1cd($order = Criteria::ASC) Order by the DociFld1Cd column
 * @method     ChildDocumentQuery orderByDocifld1($order = Criteria::ASC) Order by the DociFld1 column
 * @method     ChildDocumentQuery orderByDocifld2cd($order = Criteria::ASC) Order by the DociFld2Cd column
 * @method     ChildDocumentQuery orderByDocifld2($order = Criteria::ASC) Order by the DociFld2 column
 * @method     ChildDocumentQuery orderByDociseq($order = Criteria::ASC) Order by the DociSeq column
 * @method     ChildDocumentQuery orderByDocitag($order = Criteria::ASC) Order by the DociTag column
 * @method     ChildDocumentQuery orderByDocifilename($order = Criteria::ASC) Order by the DociFileName column
 * @method     ChildDocumentQuery orderByDociuser($order = Criteria::ASC) Order by the DociUser column
 * @method     ChildDocumentQuery orderByDocidate($order = Criteria::ASC) Order by the DociDate column
 * @method     ChildDocumentQuery orderByDocitime($order = Criteria::ASC) Order by the DociTime column
 * @method     ChildDocumentQuery orderByDociorigdir($order = Criteria::ASC) Order by the DociOrigDir column
 * @method     ChildDocumentQuery orderByDociorigfile($order = Criteria::ASC) Order by the DociOrigFile column
 * @method     ChildDocumentQuery orderByDociref($order = Criteria::ASC) Order by the DociRef column
 * @method     ChildDocumentQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildDocumentQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildDocumentQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildDocumentQuery groupByDoccfolder() Group by the DoccFolder column
 * @method     ChildDocumentQuery groupByDocifld1cd() Group by the DociFld1Cd column
 * @method     ChildDocumentQuery groupByDocifld1() Group by the DociFld1 column
 * @method     ChildDocumentQuery groupByDocifld2cd() Group by the DociFld2Cd column
 * @method     ChildDocumentQuery groupByDocifld2() Group by the DociFld2 column
 * @method     ChildDocumentQuery groupByDociseq() Group by the DociSeq column
 * @method     ChildDocumentQuery groupByDocitag() Group by the DociTag column
 * @method     ChildDocumentQuery groupByDocifilename() Group by the DociFileName column
 * @method     ChildDocumentQuery groupByDociuser() Group by the DociUser column
 * @method     ChildDocumentQuery groupByDocidate() Group by the DociDate column
 * @method     ChildDocumentQuery groupByDocitime() Group by the DociTime column
 * @method     ChildDocumentQuery groupByDociorigdir() Group by the DociOrigDir column
 * @method     ChildDocumentQuery groupByDociorigfile() Group by the DociOrigFile column
 * @method     ChildDocumentQuery groupByDociref() Group by the DociRef column
 * @method     ChildDocumentQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildDocumentQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildDocumentQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildDocumentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildDocumentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildDocumentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildDocumentQuery leftJoinDocumentFolder($relationAlias = null) Adds a LEFT JOIN clause to the query using the DocumentFolder relation
 * @method     ChildDocumentQuery rightJoinDocumentFolder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DocumentFolder relation
 * @method     ChildDocumentQuery innerJoinDocumentFolder($relationAlias = null) Adds a INNER JOIN clause to the query using the DocumentFolder relation
 *
 * @method     ChildDocumentQuery joinWithDocumentFolder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DocumentFolder relation
 *
 * @method     ChildDocumentQuery leftJoinWithDocumentFolder() Adds a LEFT JOIN clause and with to the query using the DocumentFolder relation
 * @method     ChildDocumentQuery rightJoinWithDocumentFolder() Adds a RIGHT JOIN clause and with to the query using the DocumentFolder relation
 * @method     ChildDocumentQuery innerJoinWithDocumentFolder() Adds a INNER JOIN clause and with to the query using the DocumentFolder relation
 *
 * @method     \DocumentFolderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildDocument|null findOne(?ConnectionInterface $con = null) Return the first ChildDocument matching the query
 * @method     ChildDocument findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildDocument matching the query, or a new ChildDocument object populated from the query conditions when no match is found
 *
 * @method     ChildDocument|null findOneByDoccfolder(string $DoccFolder) Return the first ChildDocument filtered by the DoccFolder column
 * @method     ChildDocument|null findOneByDocifld1cd(string $DociFld1Cd) Return the first ChildDocument filtered by the DociFld1Cd column
 * @method     ChildDocument|null findOneByDocifld1(string $DociFld1) Return the first ChildDocument filtered by the DociFld1 column
 * @method     ChildDocument|null findOneByDocifld2cd(string $DociFld2Cd) Return the first ChildDocument filtered by the DociFld2Cd column
 * @method     ChildDocument|null findOneByDocifld2(string $DociFld2) Return the first ChildDocument filtered by the DociFld2 column
 * @method     ChildDocument|null findOneByDociseq(int $DociSeq) Return the first ChildDocument filtered by the DociSeq column
 * @method     ChildDocument|null findOneByDocitag(string $DociTag) Return the first ChildDocument filtered by the DociTag column
 * @method     ChildDocument|null findOneByDocifilename(string $DociFileName) Return the first ChildDocument filtered by the DociFileName column
 * @method     ChildDocument|null findOneByDociuser(string $DociUser) Return the first ChildDocument filtered by the DociUser column
 * @method     ChildDocument|null findOneByDocidate(string $DociDate) Return the first ChildDocument filtered by the DociDate column
 * @method     ChildDocument|null findOneByDocitime(string $DociTime) Return the first ChildDocument filtered by the DociTime column
 * @method     ChildDocument|null findOneByDociorigdir(string $DociOrigDir) Return the first ChildDocument filtered by the DociOrigDir column
 * @method     ChildDocument|null findOneByDociorigfile(string $DociOrigFile) Return the first ChildDocument filtered by the DociOrigFile column
 * @method     ChildDocument|null findOneByDociref(string $DociRef) Return the first ChildDocument filtered by the DociRef column
 * @method     ChildDocument|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildDocument filtered by the DateUpdtd column
 * @method     ChildDocument|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocument filtered by the TimeUpdtd column
 * @method     ChildDocument|null findOneByDummy(string $dummy) Return the first ChildDocument filtered by the dummy column
 *
 * @method     ChildDocument requirePk($key, ?ConnectionInterface $con = null) Return the ChildDocument by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOne(?ConnectionInterface $con = null) Return the first ChildDocument matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocument requireOneByDoccfolder(string $DoccFolder) Return the first ChildDocument filtered by the DoccFolder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocifld1cd(string $DociFld1Cd) Return the first ChildDocument filtered by the DociFld1Cd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocifld1(string $DociFld1) Return the first ChildDocument filtered by the DociFld1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocifld2cd(string $DociFld2Cd) Return the first ChildDocument filtered by the DociFld2Cd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocifld2(string $DociFld2) Return the first ChildDocument filtered by the DociFld2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDociseq(int $DociSeq) Return the first ChildDocument filtered by the DociSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocitag(string $DociTag) Return the first ChildDocument filtered by the DociTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocifilename(string $DociFileName) Return the first ChildDocument filtered by the DociFileName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDociuser(string $DociUser) Return the first ChildDocument filtered by the DociUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocidate(string $DociDate) Return the first ChildDocument filtered by the DociDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDocitime(string $DociTime) Return the first ChildDocument filtered by the DociTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDociorigdir(string $DociOrigDir) Return the first ChildDocument filtered by the DociOrigDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDociorigfile(string $DociOrigFile) Return the first ChildDocument filtered by the DociOrigFile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDociref(string $DociRef) Return the first ChildDocument filtered by the DociRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDateupdtd(string $DateUpdtd) Return the first ChildDocument filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocument filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOneByDummy(string $dummy) Return the first ChildDocument filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocument[]|Collection find(?ConnectionInterface $con = null) Return ChildDocument objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildDocument> find(?ConnectionInterface $con = null) Return ChildDocument objects based on current ModelCriteria
 *
 * @method     ChildDocument[]|Collection findByDoccfolder(string|array<string> $DoccFolder) Return ChildDocument objects filtered by the DoccFolder column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDoccfolder(string|array<string> $DoccFolder) Return ChildDocument objects filtered by the DoccFolder column
 * @method     ChildDocument[]|Collection findByDocifld1cd(string|array<string> $DociFld1Cd) Return ChildDocument objects filtered by the DociFld1Cd column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocifld1cd(string|array<string> $DociFld1Cd) Return ChildDocument objects filtered by the DociFld1Cd column
 * @method     ChildDocument[]|Collection findByDocifld1(string|array<string> $DociFld1) Return ChildDocument objects filtered by the DociFld1 column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocifld1(string|array<string> $DociFld1) Return ChildDocument objects filtered by the DociFld1 column
 * @method     ChildDocument[]|Collection findByDocifld2cd(string|array<string> $DociFld2Cd) Return ChildDocument objects filtered by the DociFld2Cd column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocifld2cd(string|array<string> $DociFld2Cd) Return ChildDocument objects filtered by the DociFld2Cd column
 * @method     ChildDocument[]|Collection findByDocifld2(string|array<string> $DociFld2) Return ChildDocument objects filtered by the DociFld2 column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocifld2(string|array<string> $DociFld2) Return ChildDocument objects filtered by the DociFld2 column
 * @method     ChildDocument[]|Collection findByDociseq(int|array<int> $DociSeq) Return ChildDocument objects filtered by the DociSeq column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDociseq(int|array<int> $DociSeq) Return ChildDocument objects filtered by the DociSeq column
 * @method     ChildDocument[]|Collection findByDocitag(string|array<string> $DociTag) Return ChildDocument objects filtered by the DociTag column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocitag(string|array<string> $DociTag) Return ChildDocument objects filtered by the DociTag column
 * @method     ChildDocument[]|Collection findByDocifilename(string|array<string> $DociFileName) Return ChildDocument objects filtered by the DociFileName column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocifilename(string|array<string> $DociFileName) Return ChildDocument objects filtered by the DociFileName column
 * @method     ChildDocument[]|Collection findByDociuser(string|array<string> $DociUser) Return ChildDocument objects filtered by the DociUser column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDociuser(string|array<string> $DociUser) Return ChildDocument objects filtered by the DociUser column
 * @method     ChildDocument[]|Collection findByDocidate(string|array<string> $DociDate) Return ChildDocument objects filtered by the DociDate column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocidate(string|array<string> $DociDate) Return ChildDocument objects filtered by the DociDate column
 * @method     ChildDocument[]|Collection findByDocitime(string|array<string> $DociTime) Return ChildDocument objects filtered by the DociTime column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDocitime(string|array<string> $DociTime) Return ChildDocument objects filtered by the DociTime column
 * @method     ChildDocument[]|Collection findByDociorigdir(string|array<string> $DociOrigDir) Return ChildDocument objects filtered by the DociOrigDir column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDociorigdir(string|array<string> $DociOrigDir) Return ChildDocument objects filtered by the DociOrigDir column
 * @method     ChildDocument[]|Collection findByDociorigfile(string|array<string> $DociOrigFile) Return ChildDocument objects filtered by the DociOrigFile column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDociorigfile(string|array<string> $DociOrigFile) Return ChildDocument objects filtered by the DociOrigFile column
 * @method     ChildDocument[]|Collection findByDociref(string|array<string> $DociRef) Return ChildDocument objects filtered by the DociRef column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDociref(string|array<string> $DociRef) Return ChildDocument objects filtered by the DociRef column
 * @method     ChildDocument[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildDocument objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildDocument objects filtered by the DateUpdtd column
 * @method     ChildDocument[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildDocument objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildDocument> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildDocument objects filtered by the TimeUpdtd column
 * @method     ChildDocument[]|Collection findByDummy(string|array<string> $dummy) Return ChildDocument objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildDocument> findByDummy(string|array<string> $dummy) Return ChildDocument objects filtered by the dummy column
 *
 * @method     ChildDocument[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildDocument> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class DocumentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\DocumentQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Document', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildDocumentQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildDocumentQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildDocumentQuery) {
            return $criteria;
        }
        $query = new ChildDocumentQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array[$DoccFolder, $DociFld1Cd, $DociFld1, $DociFld2Cd, $DociFld2, $DociSeq] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildDocument|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(DocumentTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = DocumentTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildDocument A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT DoccFolder, DociFld1Cd, DociFld1, DociFld2Cd, DociFld2, DociSeq, DociTag, DociFileName, DociUser, DociDate, DociTime, DociOrigDir, DociOrigFile, DociRef, DateUpdtd, TimeUpdtd, dummy FROM doc_index WHERE DoccFolder = :p0 AND DociFld1Cd = :p1 AND DociFld1 = :p2 AND DociFld2Cd = :p3 AND DociFld2 = :p4 AND DociSeq = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildDocument $obj */
            $obj = new ChildDocument();
            $obj->hydrate($row);
            DocumentTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildDocument|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD1CD, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD1, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD2CD, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD2, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(DocumentTableMap::COL_DOCISEQ, $key[5], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(DocumentTableMap::COL_DOCCFOLDER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DocumentTableMap::COL_DOCIFLD1CD, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(DocumentTableMap::COL_DOCIFLD1, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(DocumentTableMap::COL_DOCIFLD2CD, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(DocumentTableMap::COL_DOCIFLD2, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(DocumentTableMap::COL_DOCISEQ, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the DoccFolder column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccfolder('fooValue');   // WHERE DoccFolder = 'fooValue'
     * $query->filterByDoccfolder('%fooValue%', Criteria::LIKE); // WHERE DoccFolder LIKE '%fooValue%'
     * $query->filterByDoccfolder(['foo', 'bar']); // WHERE DoccFolder IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccfolder The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccfolder($doccfolder = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccfolder)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $doccfolder, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociFld1Cd column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld1cd('fooValue');   // WHERE DociFld1Cd = 'fooValue'
     * $query->filterByDocifld1cd('%fooValue%', Criteria::LIKE); // WHERE DociFld1Cd LIKE '%fooValue%'
     * $query->filterByDocifld1cd(['foo', 'bar']); // WHERE DociFld1Cd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docifld1cd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocifld1cd($docifld1cd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld1cd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD1CD, $docifld1cd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociFld1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld1('fooValue');   // WHERE DociFld1 = 'fooValue'
     * $query->filterByDocifld1('%fooValue%', Criteria::LIKE); // WHERE DociFld1 LIKE '%fooValue%'
     * $query->filterByDocifld1(['foo', 'bar']); // WHERE DociFld1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docifld1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocifld1($docifld1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD1, $docifld1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociFld2Cd column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld2cd('fooValue');   // WHERE DociFld2Cd = 'fooValue'
     * $query->filterByDocifld2cd('%fooValue%', Criteria::LIKE); // WHERE DociFld2Cd LIKE '%fooValue%'
     * $query->filterByDocifld2cd(['foo', 'bar']); // WHERE DociFld2Cd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docifld2cd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocifld2cd($docifld2cd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld2cd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD2CD, $docifld2cd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociFld2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld2('fooValue');   // WHERE DociFld2 = 'fooValue'
     * $query->filterByDocifld2('%fooValue%', Criteria::LIKE); // WHERE DociFld2 LIKE '%fooValue%'
     * $query->filterByDocifld2(['foo', 'bar']); // WHERE DociFld2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docifld2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocifld2($docifld2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD2, $docifld2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByDociseq(1234); // WHERE DociSeq = 1234
     * $query->filterByDociseq(array(12, 34)); // WHERE DociSeq IN (12, 34)
     * $query->filterByDociseq(array('min' => 12)); // WHERE DociSeq > 12
     * </code>
     *
     * @param mixed $dociseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDociseq($dociseq = null, ?string $comparison = null)
    {
        if (is_array($dociseq)) {
            $useMinMax = false;
            if (isset($dociseq['min'])) {
                $this->addUsingAlias(DocumentTableMap::COL_DOCISEQ, $dociseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dociseq['max'])) {
                $this->addUsingAlias(DocumentTableMap::COL_DOCISEQ, $dociseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCISEQ, $dociseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociTag column
     *
     * Example usage:
     * <code>
     * $query->filterByDocitag('fooValue');   // WHERE DociTag = 'fooValue'
     * $query->filterByDocitag('%fooValue%', Criteria::LIKE); // WHERE DociTag LIKE '%fooValue%'
     * $query->filterByDocitag(['foo', 'bar']); // WHERE DociTag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docitag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocitag($docitag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docitag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCITAG, $docitag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociFileName column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifilename('fooValue');   // WHERE DociFileName = 'fooValue'
     * $query->filterByDocifilename('%fooValue%', Criteria::LIKE); // WHERE DociFileName LIKE '%fooValue%'
     * $query->filterByDocifilename(['foo', 'bar']); // WHERE DociFileName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docifilename The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocifilename($docifilename = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifilename)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIFILENAME, $docifilename, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociUser column
     *
     * Example usage:
     * <code>
     * $query->filterByDociuser('fooValue');   // WHERE DociUser = 'fooValue'
     * $query->filterByDociuser('%fooValue%', Criteria::LIKE); // WHERE DociUser LIKE '%fooValue%'
     * $query->filterByDociuser(['foo', 'bar']); // WHERE DociUser IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dociuser The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDociuser($dociuser = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociuser)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIUSER, $dociuser, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociDate column
     *
     * Example usage:
     * <code>
     * $query->filterByDocidate('fooValue');   // WHERE DociDate = 'fooValue'
     * $query->filterByDocidate('%fooValue%', Criteria::LIKE); // WHERE DociDate LIKE '%fooValue%'
     * $query->filterByDocidate(['foo', 'bar']); // WHERE DociDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docidate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocidate($docidate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docidate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIDATE, $docidate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociTime column
     *
     * Example usage:
     * <code>
     * $query->filterByDocitime('fooValue');   // WHERE DociTime = 'fooValue'
     * $query->filterByDocitime('%fooValue%', Criteria::LIKE); // WHERE DociTime LIKE '%fooValue%'
     * $query->filterByDocitime(['foo', 'bar']); // WHERE DociTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docitime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocitime($docitime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docitime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCITIME, $docitime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociOrigDir column
     *
     * Example usage:
     * <code>
     * $query->filterByDociorigdir('fooValue');   // WHERE DociOrigDir = 'fooValue'
     * $query->filterByDociorigdir('%fooValue%', Criteria::LIKE); // WHERE DociOrigDir LIKE '%fooValue%'
     * $query->filterByDociorigdir(['foo', 'bar']); // WHERE DociOrigDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dociorigdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDociorigdir($dociorigdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociorigdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIORIGDIR, $dociorigdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociOrigFile column
     *
     * Example usage:
     * <code>
     * $query->filterByDociorigfile('fooValue');   // WHERE DociOrigFile = 'fooValue'
     * $query->filterByDociorigfile('%fooValue%', Criteria::LIKE); // WHERE DociOrigFile LIKE '%fooValue%'
     * $query->filterByDociorigfile(['foo', 'bar']); // WHERE DociOrigFile IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dociorigfile The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDociorigfile($dociorigfile = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociorigfile)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIORIGFILE, $dociorigfile, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DociRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDociref('fooValue');   // WHERE DociRef = 'fooValue'
     * $query->filterByDociref('%fooValue%', Criteria::LIKE); // WHERE DociRef LIKE '%fooValue%'
     * $query->filterByDociref(['foo', 'bar']); // WHERE DociRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dociref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDociref($dociref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentTableMap::COL_DOCIREF, $dociref, $comparison);

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

        $this->addUsingAlias(DocumentTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(DocumentTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(DocumentTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \DocumentFolder object
     *
     * @param \DocumentFolder|ObjectCollection $documentFolder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocumentFolder($documentFolder, ?string $comparison = null)
    {
        if ($documentFolder instanceof \DocumentFolder) {
            return $this
                ->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $documentFolder->getDoccfolder(), $comparison);
        } elseif ($documentFolder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $documentFolder->toKeyValue('PrimaryKey', 'Doccfolder'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByDocumentFolder() only accepts arguments of type \DocumentFolder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DocumentFolder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinDocumentFolder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DocumentFolder');

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
            $this->addJoinObject($join, 'DocumentFolder');
        }

        return $this;
    }

    /**
     * Use the DocumentFolder relation DocumentFolder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DocumentFolderQuery A secondary query class using the current class as primary query
     */
    public function useDocumentFolderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDocumentFolder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DocumentFolder', '\DocumentFolderQuery');
    }

    /**
     * Use the DocumentFolder relation DocumentFolder object
     *
     * @param callable(\DocumentFolderQuery):\DocumentFolderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDocumentFolderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useDocumentFolderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to DocumentFolder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \DocumentFolderQuery The inner query object of the EXISTS statement
     */
    public function useDocumentFolderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \DocumentFolderQuery */
        $q = $this->useExistsQuery('DocumentFolder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to DocumentFolder table for a NOT EXISTS query.
     *
     * @see useDocumentFolderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \DocumentFolderQuery The inner query object of the NOT EXISTS statement
     */
    public function useDocumentFolderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DocumentFolderQuery */
        $q = $this->useExistsQuery('DocumentFolder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to DocumentFolder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \DocumentFolderQuery The inner query object of the IN statement
     */
    public function useInDocumentFolderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \DocumentFolderQuery */
        $q = $this->useInQuery('DocumentFolder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to DocumentFolder table for a NOT IN query.
     *
     * @see useDocumentFolderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \DocumentFolderQuery The inner query object of the NOT IN statement
     */
    public function useNotInDocumentFolderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DocumentFolderQuery */
        $q = $this->useInQuery('DocumentFolder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildDocument $document Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($document = null)
    {
        if ($document) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DocumentTableMap::COL_DOCCFOLDER), $document->getDoccfolder(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DocumentTableMap::COL_DOCIFLD1CD), $document->getDocifld1cd(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(DocumentTableMap::COL_DOCIFLD1), $document->getDocifld1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(DocumentTableMap::COL_DOCIFLD2CD), $document->getDocifld2cd(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(DocumentTableMap::COL_DOCIFLD2), $document->getDocifld2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(DocumentTableMap::COL_DOCISEQ), $document->getDociseq(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the doc_index table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DocumentTableMap::clearInstancePool();
            DocumentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(DocumentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            DocumentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            DocumentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
