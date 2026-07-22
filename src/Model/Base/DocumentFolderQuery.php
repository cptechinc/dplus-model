<?php

namespace Base;

use \DocumentFolder as ChildDocumentFolder;
use \DocumentFolderQuery as ChildDocumentFolderQuery;
use \Exception;
use \PDO;
use Map\DocumentFolderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `doc_control` table.
 *
 * @method     ChildDocumentFolderQuery orderByDoccfolder($order = Criteria::ASC) Order by the DoccFolder column
 * @method     ChildDocumentFolderQuery orderByDoccfolderdesc($order = Criteria::ASC) Order by the DoccFolderDesc column
 * @method     ChildDocumentFolderQuery orderByDoccdir($order = Criteria::ASC) Order by the DoccDir column
 * @method     ChildDocumentFolderQuery orderByDocctag($order = Criteria::ASC) Order by the DoccTag column
 * @method     ChildDocumentFolderQuery orderByDoccmultcopy($order = Criteria::ASC) Order by the DoccMultCopy column
 * @method     ChildDocumentFolderQuery orderByDoccoverwrt($order = Criteria::ASC) Order by the DoccOverWrt column
 * @method     ChildDocumentFolderQuery orderByDoccfilecnt($order = Criteria::ASC) Order by the DoccFileCnt column
 * @method     ChildDocumentFolderQuery orderByDoccautoscanid($order = Criteria::ASC) Order by the DoccAutoScanId column
 * @method     ChildDocumentFolderQuery orderByDoccUseAutoFile($order = Criteria::ASC) Order by the DoccUseAutoFile column
 * @method     ChildDocumentFolderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildDocumentFolderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildDocumentFolderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildDocumentFolderQuery groupByDoccfolder() Group by the DoccFolder column
 * @method     ChildDocumentFolderQuery groupByDoccfolderdesc() Group by the DoccFolderDesc column
 * @method     ChildDocumentFolderQuery groupByDoccdir() Group by the DoccDir column
 * @method     ChildDocumentFolderQuery groupByDocctag() Group by the DoccTag column
 * @method     ChildDocumentFolderQuery groupByDoccmultcopy() Group by the DoccMultCopy column
 * @method     ChildDocumentFolderQuery groupByDoccoverwrt() Group by the DoccOverWrt column
 * @method     ChildDocumentFolderQuery groupByDoccfilecnt() Group by the DoccFileCnt column
 * @method     ChildDocumentFolderQuery groupByDoccautoscanid() Group by the DoccAutoScanId column
 * @method     ChildDocumentFolderQuery groupByDoccUseAutoFile() Group by the DoccUseAutoFile column
 * @method     ChildDocumentFolderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildDocumentFolderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildDocumentFolderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildDocumentFolderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildDocumentFolderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildDocumentFolderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildDocumentFolderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildDocumentFolderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildDocumentFolderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildDocumentFolderQuery leftJoinDocument($relationAlias = null) Adds a LEFT JOIN clause to the query using the Document relation
 * @method     ChildDocumentFolderQuery rightJoinDocument($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Document relation
 * @method     ChildDocumentFolderQuery innerJoinDocument($relationAlias = null) Adds a INNER JOIN clause to the query using the Document relation
 *
 * @method     ChildDocumentFolderQuery joinWithDocument($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Document relation
 *
 * @method     ChildDocumentFolderQuery leftJoinWithDocument() Adds a LEFT JOIN clause and with to the query using the Document relation
 * @method     ChildDocumentFolderQuery rightJoinWithDocument() Adds a RIGHT JOIN clause and with to the query using the Document relation
 * @method     ChildDocumentFolderQuery innerJoinWithDocument() Adds a INNER JOIN clause and with to the query using the Document relation
 *
 * @method     \DocumentQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildDocumentFolder|null findOne(?ConnectionInterface $con = null) Return the first ChildDocumentFolder matching the query
 * @method     ChildDocumentFolder findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildDocumentFolder matching the query, or a new ChildDocumentFolder object populated from the query conditions when no match is found
 *
 * @method     ChildDocumentFolder|null findOneByDoccfolder(string $DoccFolder) Return the first ChildDocumentFolder filtered by the DoccFolder column
 * @method     ChildDocumentFolder|null findOneByDoccfolderdesc(string $DoccFolderDesc) Return the first ChildDocumentFolder filtered by the DoccFolderDesc column
 * @method     ChildDocumentFolder|null findOneByDoccdir(string $DoccDir) Return the first ChildDocumentFolder filtered by the DoccDir column
 * @method     ChildDocumentFolder|null findOneByDocctag(string $DoccTag) Return the first ChildDocumentFolder filtered by the DoccTag column
 * @method     ChildDocumentFolder|null findOneByDoccmultcopy(string $DoccMultCopy) Return the first ChildDocumentFolder filtered by the DoccMultCopy column
 * @method     ChildDocumentFolder|null findOneByDoccoverwrt(string $DoccOverWrt) Return the first ChildDocumentFolder filtered by the DoccOverWrt column
 * @method     ChildDocumentFolder|null findOneByDoccfilecnt(int $DoccFileCnt) Return the first ChildDocumentFolder filtered by the DoccFileCnt column
 * @method     ChildDocumentFolder|null findOneByDoccautoscanid(string $DoccAutoScanId) Return the first ChildDocumentFolder filtered by the DoccAutoScanId column
 * @method     ChildDocumentFolder|null findOneByDoccUseAutoFile(string $DoccUseAutoFile) Return the first ChildDocumentFolder filtered by the DoccUseAutoFile column
 * @method     ChildDocumentFolder|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildDocumentFolder filtered by the DateUpdtd column
 * @method     ChildDocumentFolder|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocumentFolder filtered by the TimeUpdtd column
 * @method     ChildDocumentFolder|null findOneByDummy(string $dummy) Return the first ChildDocumentFolder filtered by the dummy column
 *
 * @method     ChildDocumentFolder requirePk($key, ?ConnectionInterface $con = null) Return the ChildDocumentFolder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOne(?ConnectionInterface $con = null) Return the first ChildDocumentFolder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocumentFolder requireOneByDoccfolder(string $DoccFolder) Return the first ChildDocumentFolder filtered by the DoccFolder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccfolderdesc(string $DoccFolderDesc) Return the first ChildDocumentFolder filtered by the DoccFolderDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccdir(string $DoccDir) Return the first ChildDocumentFolder filtered by the DoccDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDocctag(string $DoccTag) Return the first ChildDocumentFolder filtered by the DoccTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccmultcopy(string $DoccMultCopy) Return the first ChildDocumentFolder filtered by the DoccMultCopy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccoverwrt(string $DoccOverWrt) Return the first ChildDocumentFolder filtered by the DoccOverWrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccfilecnt(int $DoccFileCnt) Return the first ChildDocumentFolder filtered by the DoccFileCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccautoscanid(string $DoccAutoScanId) Return the first ChildDocumentFolder filtered by the DoccAutoScanId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccUseAutoFile(string $DoccUseAutoFile) Return the first ChildDocumentFolder filtered by the DoccUseAutoFile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildDocumentFolder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocumentFolder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDummy(string $dummy) Return the first ChildDocumentFolder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocumentFolder[]|Collection find(?ConnectionInterface $con = null) Return ChildDocumentFolder objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> find(?ConnectionInterface $con = null) Return ChildDocumentFolder objects based on current ModelCriteria
 *
 * @method     ChildDocumentFolder[]|Collection findByDoccfolder(string|array<string> $DoccFolder) Return ChildDocumentFolder objects filtered by the DoccFolder column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccfolder(string|array<string> $DoccFolder) Return ChildDocumentFolder objects filtered by the DoccFolder column
 * @method     ChildDocumentFolder[]|Collection findByDoccfolderdesc(string|array<string> $DoccFolderDesc) Return ChildDocumentFolder objects filtered by the DoccFolderDesc column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccfolderdesc(string|array<string> $DoccFolderDesc) Return ChildDocumentFolder objects filtered by the DoccFolderDesc column
 * @method     ChildDocumentFolder[]|Collection findByDoccdir(string|array<string> $DoccDir) Return ChildDocumentFolder objects filtered by the DoccDir column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccdir(string|array<string> $DoccDir) Return ChildDocumentFolder objects filtered by the DoccDir column
 * @method     ChildDocumentFolder[]|Collection findByDocctag(string|array<string> $DoccTag) Return ChildDocumentFolder objects filtered by the DoccTag column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDocctag(string|array<string> $DoccTag) Return ChildDocumentFolder objects filtered by the DoccTag column
 * @method     ChildDocumentFolder[]|Collection findByDoccmultcopy(string|array<string> $DoccMultCopy) Return ChildDocumentFolder objects filtered by the DoccMultCopy column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccmultcopy(string|array<string> $DoccMultCopy) Return ChildDocumentFolder objects filtered by the DoccMultCopy column
 * @method     ChildDocumentFolder[]|Collection findByDoccoverwrt(string|array<string> $DoccOverWrt) Return ChildDocumentFolder objects filtered by the DoccOverWrt column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccoverwrt(string|array<string> $DoccOverWrt) Return ChildDocumentFolder objects filtered by the DoccOverWrt column
 * @method     ChildDocumentFolder[]|Collection findByDoccfilecnt(int|array<int> $DoccFileCnt) Return ChildDocumentFolder objects filtered by the DoccFileCnt column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccfilecnt(int|array<int> $DoccFileCnt) Return ChildDocumentFolder objects filtered by the DoccFileCnt column
 * @method     ChildDocumentFolder[]|Collection findByDoccautoscanid(string|array<string> $DoccAutoScanId) Return ChildDocumentFolder objects filtered by the DoccAutoScanId column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccautoscanid(string|array<string> $DoccAutoScanId) Return ChildDocumentFolder objects filtered by the DoccAutoScanId column
 * @method     ChildDocumentFolder[]|Collection findByDoccUseAutoFile(string|array<string> $DoccUseAutoFile) Return ChildDocumentFolder objects filtered by the DoccUseAutoFile column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDoccUseAutoFile(string|array<string> $DoccUseAutoFile) Return ChildDocumentFolder objects filtered by the DoccUseAutoFile column
 * @method     ChildDocumentFolder[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildDocumentFolder objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildDocumentFolder objects filtered by the DateUpdtd column
 * @method     ChildDocumentFolder[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildDocumentFolder objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildDocumentFolder objects filtered by the TimeUpdtd column
 * @method     ChildDocumentFolder[]|Collection findByDummy(string|array<string> $dummy) Return ChildDocumentFolder objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildDocumentFolder> findByDummy(string|array<string> $dummy) Return ChildDocumentFolder objects filtered by the dummy column
 *
 * @method     ChildDocumentFolder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildDocumentFolder> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class DocumentFolderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\DocumentFolderQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\DocumentFolder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildDocumentFolderQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildDocumentFolderQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildDocumentFolderQuery) {
            return $criteria;
        }
        $query = new ChildDocumentFolderQuery();
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
     * @return ChildDocumentFolder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = DocumentFolderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildDocumentFolder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT DoccFolder, DoccFolderDesc, DoccDir, DoccTag, DoccMultCopy, DoccOverWrt, DoccFileCnt, DoccAutoScanId, DoccUseAutoFile, DateUpdtd, TimeUpdtd, dummy FROM doc_control WHERE DoccFolder = :p0';
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
            /** @var ChildDocumentFolder $obj */
            $obj = new ChildDocumentFolder();
            $obj->hydrate($row);
            DocumentFolderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildDocumentFolder|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $keys, Criteria::IN);

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

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $doccfolder, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccFolderDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccfolderdesc('fooValue');   // WHERE DoccFolderDesc = 'fooValue'
     * $query->filterByDoccfolderdesc('%fooValue%', Criteria::LIKE); // WHERE DoccFolderDesc LIKE '%fooValue%'
     * $query->filterByDoccfolderdesc(['foo', 'bar']); // WHERE DoccFolderDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccfolderdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccfolderdesc($doccfolderdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccfolderdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDERDESC, $doccfolderdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccDir column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccdir('fooValue');   // WHERE DoccDir = 'fooValue'
     * $query->filterByDoccdir('%fooValue%', Criteria::LIKE); // WHERE DoccDir LIKE '%fooValue%'
     * $query->filterByDoccdir(['foo', 'bar']); // WHERE DoccDir IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccdir The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccdir($doccdir = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccdir)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCDIR, $doccdir, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccTag column
     *
     * Example usage:
     * <code>
     * $query->filterByDocctag('fooValue');   // WHERE DoccTag = 'fooValue'
     * $query->filterByDocctag('%fooValue%', Criteria::LIKE); // WHERE DoccTag LIKE '%fooValue%'
     * $query->filterByDocctag(['foo', 'bar']); // WHERE DoccTag IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $docctag The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocctag($docctag = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docctag)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCTAG, $docctag, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccMultCopy column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccmultcopy('fooValue');   // WHERE DoccMultCopy = 'fooValue'
     * $query->filterByDoccmultcopy('%fooValue%', Criteria::LIKE); // WHERE DoccMultCopy LIKE '%fooValue%'
     * $query->filterByDoccmultcopy(['foo', 'bar']); // WHERE DoccMultCopy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccmultcopy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccmultcopy($doccmultcopy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccmultcopy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCMULTCOPY, $doccmultcopy, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccOverWrt column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccoverwrt('fooValue');   // WHERE DoccOverWrt = 'fooValue'
     * $query->filterByDoccoverwrt('%fooValue%', Criteria::LIKE); // WHERE DoccOverWrt LIKE '%fooValue%'
     * $query->filterByDoccoverwrt(['foo', 'bar']); // WHERE DoccOverWrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccoverwrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccoverwrt($doccoverwrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccoverwrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCOVERWRT, $doccoverwrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccFileCnt column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccfilecnt(1234); // WHERE DoccFileCnt = 1234
     * $query->filterByDoccfilecnt(array(12, 34)); // WHERE DoccFileCnt IN (12, 34)
     * $query->filterByDoccfilecnt(array('min' => 12)); // WHERE DoccFileCnt > 12
     * </code>
     *
     * @param mixed $doccfilecnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccfilecnt($doccfilecnt = null, ?string $comparison = null)
    {
        if (is_array($doccfilecnt)) {
            $useMinMax = false;
            if (isset($doccfilecnt['min'])) {
                $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFILECNT, $doccfilecnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($doccfilecnt['max'])) {
                $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFILECNT, $doccfilecnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFILECNT, $doccfilecnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccAutoScanId column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccautoscanid('fooValue');   // WHERE DoccAutoScanId = 'fooValue'
     * $query->filterByDoccautoscanid('%fooValue%', Criteria::LIKE); // WHERE DoccAutoScanId LIKE '%fooValue%'
     * $query->filterByDoccautoscanid(['foo', 'bar']); // WHERE DoccAutoScanId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccautoscanid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccautoscanid($doccautoscanid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccautoscanid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCAUTOSCANID, $doccautoscanid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DoccUseAutoFile column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccUseAutoFile('fooValue');   // WHERE DoccUseAutoFile = 'fooValue'
     * $query->filterByDoccUseAutoFile('%fooValue%', Criteria::LIKE); // WHERE DoccUseAutoFile LIKE '%fooValue%'
     * $query->filterByDoccUseAutoFile(['foo', 'bar']); // WHERE DoccUseAutoFile IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $doccUseAutoFile The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDoccUseAutoFile($doccUseAutoFile = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccUseAutoFile)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCUSEAUTOFILE, $doccUseAutoFile, $comparison);

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

        $this->addUsingAlias(DocumentFolderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(DocumentFolderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(DocumentFolderTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Document object
     *
     * @param \Document|ObjectCollection $document the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDocument($document, ?string $comparison = null)
    {
        if ($document instanceof \Document) {
            $this
                ->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $document->getDoccfolder(), $comparison);

            return $this;
        } elseif ($document instanceof ObjectCollection) {
            $this
                ->useDocumentQuery()
                ->filterByPrimaryKeys($document->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByDocument() only accepts arguments of type \Document or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Document relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinDocument(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Document');

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
            $this->addJoinObject($join, 'Document');
        }

        return $this;
    }

    /**
     * Use the Document relation Document object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DocumentQuery A secondary query class using the current class as primary query
     */
    public function useDocumentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDocument($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Document', '\DocumentQuery');
    }

    /**
     * Use the Document relation Document object
     *
     * @param callable(\DocumentQuery):\DocumentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDocumentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useDocumentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Document table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \DocumentQuery The inner query object of the EXISTS statement
     */
    public function useDocumentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \DocumentQuery */
        $q = $this->useExistsQuery('Document', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Document table for a NOT EXISTS query.
     *
     * @see useDocumentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \DocumentQuery The inner query object of the NOT EXISTS statement
     */
    public function useDocumentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DocumentQuery */
        $q = $this->useExistsQuery('Document', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Document table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \DocumentQuery The inner query object of the IN statement
     */
    public function useInDocumentQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \DocumentQuery */
        $q = $this->useInQuery('Document', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Document table for a NOT IN query.
     *
     * @see useDocumentInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \DocumentQuery The inner query object of the NOT IN statement
     */
    public function useNotInDocumentQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \DocumentQuery */
        $q = $this->useInQuery('Document', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildDocumentFolder $documentFolder Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($documentFolder = null)
    {
        if ($documentFolder) {
            $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $documentFolder->getDoccfolder(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the doc_control table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DocumentFolderTableMap::clearInstancePool();
            DocumentFolderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentFolderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(DocumentFolderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            DocumentFolderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            DocumentFolderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
