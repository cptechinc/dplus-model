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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'doc_control' table.
 *
 *
 *
 * @method     ChildDocumentFolderQuery orderByDoccfolder($order = Criteria::ASC) Order by the DoccFolder column
 * @method     ChildDocumentFolderQuery orderByDoccfolderdesc($order = Criteria::ASC) Order by the DoccFolderDesc column
 * @method     ChildDocumentFolderQuery orderByDoccdir($order = Criteria::ASC) Order by the DoccDir column
 * @method     ChildDocumentFolderQuery orderByDocctag($order = Criteria::ASC) Order by the DoccTag column
 * @method     ChildDocumentFolderQuery orderByDoccmultcopy($order = Criteria::ASC) Order by the DoccMultCopy column
 * @method     ChildDocumentFolderQuery orderByDoccoverwrt($order = Criteria::ASC) Order by the DoccOverWrt column
 * @method     ChildDocumentFolderQuery orderByDoccfilecnt($order = Criteria::ASC) Order by the DoccFileCnt column
 * @method     ChildDocumentFolderQuery orderByDoccautoscanid($order = Criteria::ASC) Order by the DoccAutoScanId column
 * @method     ChildDocumentFolderQuery orderByDoccUseAutoFil($order = Criteria::ASC) Order by the DoccUseAutoFil column
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
 * @method     ChildDocumentFolderQuery groupByDoccUseAutoFil() Group by the DoccUseAutoFil column
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
 * @method     ChildDocumentFolder findOne(ConnectionInterface $con = null) Return the first ChildDocumentFolder matching the query
 * @method     ChildDocumentFolder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildDocumentFolder matching the query, or a new ChildDocumentFolder object populated from the query conditions when no match is found
 *
 * @method     ChildDocumentFolder findOneByDoccfolder(string $DoccFolder) Return the first ChildDocumentFolder filtered by the DoccFolder column
 * @method     ChildDocumentFolder findOneByDoccfolderdesc(string $DoccFolderDesc) Return the first ChildDocumentFolder filtered by the DoccFolderDesc column
 * @method     ChildDocumentFolder findOneByDoccdir(string $DoccDir) Return the first ChildDocumentFolder filtered by the DoccDir column
 * @method     ChildDocumentFolder findOneByDocctag(string $DoccTag) Return the first ChildDocumentFolder filtered by the DoccTag column
 * @method     ChildDocumentFolder findOneByDoccmultcopy(string $DoccMultCopy) Return the first ChildDocumentFolder filtered by the DoccMultCopy column
 * @method     ChildDocumentFolder findOneByDoccoverwrt(string $DoccOverWrt) Return the first ChildDocumentFolder filtered by the DoccOverWrt column
 * @method     ChildDocumentFolder findOneByDoccfilecnt(int $DoccFileCnt) Return the first ChildDocumentFolder filtered by the DoccFileCnt column
 * @method     ChildDocumentFolder findOneByDoccautoscanid(string $DoccAutoScanId) Return the first ChildDocumentFolder filtered by the DoccAutoScanId column
 * @method     ChildDocumentFolder findOneByDoccUseAutoFil(string $DoccUseAutoFil) Return the first ChildDocumentFolder filtered by the DoccUseAutoFil column
 * @method     ChildDocumentFolder findOneByDateupdtd(string $DateUpdtd) Return the first ChildDocumentFolder filtered by the DateUpdtd column
 * @method     ChildDocumentFolder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocumentFolder filtered by the TimeUpdtd column
 * @method     ChildDocumentFolder findOneByDummy(string $dummy) Return the first ChildDocumentFolder filtered by the dummy column *

 * @method     ChildDocumentFolder requirePk($key, ConnectionInterface $con = null) Return the ChildDocumentFolder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOne(ConnectionInterface $con = null) Return the first ChildDocumentFolder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocumentFolder requireOneByDoccfolder(string $DoccFolder) Return the first ChildDocumentFolder filtered by the DoccFolder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccfolderdesc(string $DoccFolderDesc) Return the first ChildDocumentFolder filtered by the DoccFolderDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccdir(string $DoccDir) Return the first ChildDocumentFolder filtered by the DoccDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDocctag(string $DoccTag) Return the first ChildDocumentFolder filtered by the DoccTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccmultcopy(string $DoccMultCopy) Return the first ChildDocumentFolder filtered by the DoccMultCopy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccoverwrt(string $DoccOverWrt) Return the first ChildDocumentFolder filtered by the DoccOverWrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccfilecnt(int $DoccFileCnt) Return the first ChildDocumentFolder filtered by the DoccFileCnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccautoscanid(string $DoccAutoScanId) Return the first ChildDocumentFolder filtered by the DoccAutoScanId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDoccUseAutoFil(string $DoccUseAutoFil) Return the first ChildDocumentFolder filtered by the DoccUseAutoFil column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildDocumentFolder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocumentFolder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocumentFolder requireOneByDummy(string $dummy) Return the first ChildDocumentFolder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocumentFolder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildDocumentFolder objects based on current ModelCriteria
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccfolder(string $DoccFolder) Return ChildDocumentFolder objects filtered by the DoccFolder column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccfolderdesc(string $DoccFolderDesc) Return ChildDocumentFolder objects filtered by the DoccFolderDesc column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccdir(string $DoccDir) Return ChildDocumentFolder objects filtered by the DoccDir column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDocctag(string $DoccTag) Return ChildDocumentFolder objects filtered by the DoccTag column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccmultcopy(string $DoccMultCopy) Return ChildDocumentFolder objects filtered by the DoccMultCopy column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccoverwrt(string $DoccOverWrt) Return ChildDocumentFolder objects filtered by the DoccOverWrt column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccfilecnt(int $DoccFileCnt) Return ChildDocumentFolder objects filtered by the DoccFileCnt column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccautoscanid(string $DoccAutoScanId) Return ChildDocumentFolder objects filtered by the DoccAutoScanId column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDoccUseAutoFil(string $DoccUseAutoFil) Return ChildDocumentFolder objects filtered by the DoccUseAutoFil column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildDocumentFolder objects filtered by the DateUpdtd column
 * @method     ChildDocumentFolder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildDocumentFolder objects filtered by the TimeUpdtd column
 * @method     ChildDocumentFolder[]|ObjectCollection findByDummy(string $dummy) Return ChildDocumentFolder objects filtered by the dummy column
 * @method     ChildDocumentFolder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class DocumentFolderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\DocumentFolderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\DocumentFolder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildDocumentFolderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildDocumentFolderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildDocumentFolder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT DoccFolder, DoccFolderDesc, DoccDir, DoccTag, DoccMultCopy, DoccOverWrt, DoccFileCnt, DoccAutoScanId, DoccUseAutoFil, DateUpdtd, TimeUpdtd, dummy FROM doc_control WHERE DoccFolder = :p0';
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the DoccFolder column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccfolder('fooValue');   // WHERE DoccFolder = 'fooValue'
     * $query->filterByDoccfolder('%fooValue%', Criteria::LIKE); // WHERE DoccFolder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccfolder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccfolder($doccfolder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccfolder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $doccfolder, $comparison);
    }

    /**
     * Filter the query on the DoccFolderDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccfolderdesc('fooValue');   // WHERE DoccFolderDesc = 'fooValue'
     * $query->filterByDoccfolderdesc('%fooValue%', Criteria::LIKE); // WHERE DoccFolderDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccfolderdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccfolderdesc($doccfolderdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccfolderdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDERDESC, $doccfolderdesc, $comparison);
    }

    /**
     * Filter the query on the DoccDir column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccdir('fooValue');   // WHERE DoccDir = 'fooValue'
     * $query->filterByDoccdir('%fooValue%', Criteria::LIKE); // WHERE DoccDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccdir($doccdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCDIR, $doccdir, $comparison);
    }

    /**
     * Filter the query on the DoccTag column
     *
     * Example usage:
     * <code>
     * $query->filterByDocctag('fooValue');   // WHERE DoccTag = 'fooValue'
     * $query->filterByDocctag('%fooValue%', Criteria::LIKE); // WHERE DoccTag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docctag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDocctag($docctag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docctag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCTAG, $docctag, $comparison);
    }

    /**
     * Filter the query on the DoccMultCopy column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccmultcopy('fooValue');   // WHERE DoccMultCopy = 'fooValue'
     * $query->filterByDoccmultcopy('%fooValue%', Criteria::LIKE); // WHERE DoccMultCopy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccmultcopy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccmultcopy($doccmultcopy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccmultcopy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCMULTCOPY, $doccmultcopy, $comparison);
    }

    /**
     * Filter the query on the DoccOverWrt column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccoverwrt('fooValue');   // WHERE DoccOverWrt = 'fooValue'
     * $query->filterByDoccoverwrt('%fooValue%', Criteria::LIKE); // WHERE DoccOverWrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccoverwrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccoverwrt($doccoverwrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccoverwrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCOVERWRT, $doccoverwrt, $comparison);
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
     * @param     mixed $doccfilecnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccfilecnt($doccfilecnt = null, $comparison = null)
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

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCFILECNT, $doccfilecnt, $comparison);
    }

    /**
     * Filter the query on the DoccAutoScanId column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccautoscanid('fooValue');   // WHERE DoccAutoScanId = 'fooValue'
     * $query->filterByDoccautoscanid('%fooValue%', Criteria::LIKE); // WHERE DoccAutoScanId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccautoscanid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccautoscanid($doccautoscanid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccautoscanid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCAUTOSCANID, $doccautoscanid, $comparison);
    }

    /**
     * Filter the query on the DoccUseAutoFil column
     *
     * Example usage:
     * <code>
     * $query->filterByDoccUseAutoFil('fooValue');   // WHERE DoccUseAutoFil = 'fooValue'
     * $query->filterByDoccUseAutoFil('%fooValue%', Criteria::LIKE); // WHERE DoccUseAutoFil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doccUseAutoFil The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDoccUseAutoFil($doccUseAutoFil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccUseAutoFil)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DOCCUSEAUTOFIL, $doccUseAutoFil, $comparison);
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
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentFolderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Document object
     *
     * @param \Document|ObjectCollection $document the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function filterByDocument($document, $comparison = null)
    {
        if ($document instanceof \Document) {
            return $this
                ->addUsingAlias(DocumentFolderTableMap::COL_DOCCFOLDER, $document->getDoccfolder(), $comparison);
        } elseif ($document instanceof ObjectCollection) {
            return $this
                ->useDocumentQuery()
                ->filterByPrimaryKeys($document->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDocument() only accepts arguments of type \Document or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Document relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
     */
    public function joinDocument($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildDocumentFolder $documentFolder Object to remove from the list of results
     *
     * @return $this|ChildDocumentFolderQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // DocumentFolderQuery
