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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'doc_index' table.
 *
 *
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
 * @method     ChildDocument findOne(ConnectionInterface $con = null) Return the first ChildDocument matching the query
 * @method     ChildDocument findOneOrCreate(ConnectionInterface $con = null) Return the first ChildDocument matching the query, or a new ChildDocument object populated from the query conditions when no match is found
 *
 * @method     ChildDocument findOneByDoccfolder(string $DoccFolder) Return the first ChildDocument filtered by the DoccFolder column
 * @method     ChildDocument findOneByDocifld1cd(string $DociFld1Cd) Return the first ChildDocument filtered by the DociFld1Cd column
 * @method     ChildDocument findOneByDocifld1(string $DociFld1) Return the first ChildDocument filtered by the DociFld1 column
 * @method     ChildDocument findOneByDocifld2cd(string $DociFld2Cd) Return the first ChildDocument filtered by the DociFld2Cd column
 * @method     ChildDocument findOneByDocifld2(string $DociFld2) Return the first ChildDocument filtered by the DociFld2 column
 * @method     ChildDocument findOneByDociseq(int $DociSeq) Return the first ChildDocument filtered by the DociSeq column
 * @method     ChildDocument findOneByDocitag(string $DociTag) Return the first ChildDocument filtered by the DociTag column
 * @method     ChildDocument findOneByDocifilename(string $DociFileName) Return the first ChildDocument filtered by the DociFileName column
 * @method     ChildDocument findOneByDociuser(string $DociUser) Return the first ChildDocument filtered by the DociUser column
 * @method     ChildDocument findOneByDocidate(string $DociDate) Return the first ChildDocument filtered by the DociDate column
 * @method     ChildDocument findOneByDocitime(string $DociTime) Return the first ChildDocument filtered by the DociTime column
 * @method     ChildDocument findOneByDociorigdir(string $DociOrigDir) Return the first ChildDocument filtered by the DociOrigDir column
 * @method     ChildDocument findOneByDociorigfile(string $DociOrigFile) Return the first ChildDocument filtered by the DociOrigFile column
 * @method     ChildDocument findOneByDociref(string $DociRef) Return the first ChildDocument filtered by the DociRef column
 * @method     ChildDocument findOneByDateupdtd(string $DateUpdtd) Return the first ChildDocument filtered by the DateUpdtd column
 * @method     ChildDocument findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocument filtered by the TimeUpdtd column
 * @method     ChildDocument findOneByDummy(string $dummy) Return the first ChildDocument filtered by the dummy column *

 * @method     ChildDocument requirePk($key, ConnectionInterface $con = null) Return the ChildDocument by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocument requireOne(ConnectionInterface $con = null) Return the first ChildDocument matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildDocument[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildDocument objects based on current ModelCriteria
 * @method     ChildDocument[]|ObjectCollection findByDoccfolder(string $DoccFolder) Return ChildDocument objects filtered by the DoccFolder column
 * @method     ChildDocument[]|ObjectCollection findByDocifld1cd(string $DociFld1Cd) Return ChildDocument objects filtered by the DociFld1Cd column
 * @method     ChildDocument[]|ObjectCollection findByDocifld1(string $DociFld1) Return ChildDocument objects filtered by the DociFld1 column
 * @method     ChildDocument[]|ObjectCollection findByDocifld2cd(string $DociFld2Cd) Return ChildDocument objects filtered by the DociFld2Cd column
 * @method     ChildDocument[]|ObjectCollection findByDocifld2(string $DociFld2) Return ChildDocument objects filtered by the DociFld2 column
 * @method     ChildDocument[]|ObjectCollection findByDociseq(int $DociSeq) Return ChildDocument objects filtered by the DociSeq column
 * @method     ChildDocument[]|ObjectCollection findByDocitag(string $DociTag) Return ChildDocument objects filtered by the DociTag column
 * @method     ChildDocument[]|ObjectCollection findByDocifilename(string $DociFileName) Return ChildDocument objects filtered by the DociFileName column
 * @method     ChildDocument[]|ObjectCollection findByDociuser(string $DociUser) Return ChildDocument objects filtered by the DociUser column
 * @method     ChildDocument[]|ObjectCollection findByDocidate(string $DociDate) Return ChildDocument objects filtered by the DociDate column
 * @method     ChildDocument[]|ObjectCollection findByDocitime(string $DociTime) Return ChildDocument objects filtered by the DociTime column
 * @method     ChildDocument[]|ObjectCollection findByDociorigdir(string $DociOrigDir) Return ChildDocument objects filtered by the DociOrigDir column
 * @method     ChildDocument[]|ObjectCollection findByDociorigfile(string $DociOrigFile) Return ChildDocument objects filtered by the DociOrigFile column
 * @method     ChildDocument[]|ObjectCollection findByDociref(string $DociRef) Return ChildDocument objects filtered by the DociRef column
 * @method     ChildDocument[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildDocument objects filtered by the DateUpdtd column
 * @method     ChildDocument[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildDocument objects filtered by the TimeUpdtd column
 * @method     ChildDocument[]|ObjectCollection findByDummy(string $dummy) Return ChildDocument objects filtered by the dummy column
 * @method     ChildDocument[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class DocumentQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\DocumentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Document', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildDocumentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildDocumentQuery The current query, for fluid interface
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
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
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
     * </code>
     *
     * @param     string $doccfolder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDoccfolder($doccfolder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccfolder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $doccfolder, $comparison);
    }

    /**
     * Filter the query on the DociFld1Cd column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld1cd('fooValue');   // WHERE DociFld1Cd = 'fooValue'
     * $query->filterByDocifld1cd('%fooValue%', Criteria::LIKE); // WHERE DociFld1Cd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docifld1cd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocifld1cd($docifld1cd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld1cd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD1CD, $docifld1cd, $comparison);
    }

    /**
     * Filter the query on the DociFld1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld1('fooValue');   // WHERE DociFld1 = 'fooValue'
     * $query->filterByDocifld1('%fooValue%', Criteria::LIKE); // WHERE DociFld1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docifld1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocifld1($docifld1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD1, $docifld1, $comparison);
    }

    /**
     * Filter the query on the DociFld2Cd column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld2cd('fooValue');   // WHERE DociFld2Cd = 'fooValue'
     * $query->filterByDocifld2cd('%fooValue%', Criteria::LIKE); // WHERE DociFld2Cd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docifld2cd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocifld2cd($docifld2cd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld2cd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD2CD, $docifld2cd, $comparison);
    }

    /**
     * Filter the query on the DociFld2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifld2('fooValue');   // WHERE DociFld2 = 'fooValue'
     * $query->filterByDocifld2('%fooValue%', Criteria::LIKE); // WHERE DociFld2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docifld2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocifld2($docifld2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIFLD2, $docifld2, $comparison);
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
     * @param     mixed $dociseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDociseq($dociseq = null, $comparison = null)
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

        return $this->addUsingAlias(DocumentTableMap::COL_DOCISEQ, $dociseq, $comparison);
    }

    /**
     * Filter the query on the DociTag column
     *
     * Example usage:
     * <code>
     * $query->filterByDocitag('fooValue');   // WHERE DociTag = 'fooValue'
     * $query->filterByDocitag('%fooValue%', Criteria::LIKE); // WHERE DociTag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docitag The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocitag($docitag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docitag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCITAG, $docitag, $comparison);
    }

    /**
     * Filter the query on the DociFileName column
     *
     * Example usage:
     * <code>
     * $query->filterByDocifilename('fooValue');   // WHERE DociFileName = 'fooValue'
     * $query->filterByDocifilename('%fooValue%', Criteria::LIKE); // WHERE DociFileName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docifilename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocifilename($docifilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifilename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIFILENAME, $docifilename, $comparison);
    }

    /**
     * Filter the query on the DociUser column
     *
     * Example usage:
     * <code>
     * $query->filterByDociuser('fooValue');   // WHERE DociUser = 'fooValue'
     * $query->filterByDociuser('%fooValue%', Criteria::LIKE); // WHERE DociUser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dociuser The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDociuser($dociuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIUSER, $dociuser, $comparison);
    }

    /**
     * Filter the query on the DociDate column
     *
     * Example usage:
     * <code>
     * $query->filterByDocidate('fooValue');   // WHERE DociDate = 'fooValue'
     * $query->filterByDocidate('%fooValue%', Criteria::LIKE); // WHERE DociDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docidate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocidate($docidate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docidate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIDATE, $docidate, $comparison);
    }

    /**
     * Filter the query on the DociTime column
     *
     * Example usage:
     * <code>
     * $query->filterByDocitime('fooValue');   // WHERE DociTime = 'fooValue'
     * $query->filterByDocitime('%fooValue%', Criteria::LIKE); // WHERE DociTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docitime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocitime($docitime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docitime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCITIME, $docitime, $comparison);
    }

    /**
     * Filter the query on the DociOrigDir column
     *
     * Example usage:
     * <code>
     * $query->filterByDociorigdir('fooValue');   // WHERE DociOrigDir = 'fooValue'
     * $query->filterByDociorigdir('%fooValue%', Criteria::LIKE); // WHERE DociOrigDir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dociorigdir The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDociorigdir($dociorigdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociorigdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIORIGDIR, $dociorigdir, $comparison);
    }

    /**
     * Filter the query on the DociOrigFile column
     *
     * Example usage:
     * <code>
     * $query->filterByDociorigfile('fooValue');   // WHERE DociOrigFile = 'fooValue'
     * $query->filterByDociorigfile('%fooValue%', Criteria::LIKE); // WHERE DociOrigFile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dociorigfile The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDociorigfile($dociorigfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociorigfile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIORIGFILE, $dociorigfile, $comparison);
    }

    /**
     * Filter the query on the DociRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDociref('fooValue');   // WHERE DociRef = 'fooValue'
     * $query->filterByDociref('%fooValue%', Criteria::LIKE); // WHERE DociRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dociref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDociref($dociref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DOCIREF, $dociref, $comparison);
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
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \DocumentFolder object
     *
     * @param \DocumentFolder|ObjectCollection $documentFolder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildDocumentQuery The current query, for fluid interface
     */
    public function filterByDocumentFolder($documentFolder, $comparison = null)
    {
        if ($documentFolder instanceof \DocumentFolder) {
            return $this
                ->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $documentFolder->getDoccfolder(), $comparison);
        } elseif ($documentFolder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DocumentTableMap::COL_DOCCFOLDER, $documentFolder->toKeyValue('PrimaryKey', 'Doccfolder'), $comparison);
        } else {
            throw new PropelException('filterByDocumentFolder() only accepts arguments of type \DocumentFolder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DocumentFolder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
     */
    public function joinDocumentFolder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildDocument $document Object to remove from the list of results
     *
     * @return $this|ChildDocumentQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // DocumentQuery
