<?php

namespace Base;

use \Documents as ChildDocuments;
use \DocumentsQuery as ChildDocumentsQuery;
use \Exception;
use \PDO;
use Map\DocumentsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'doc_index' table.
 *
 *
 *
 * @method     ChildDocumentsQuery orderByDoccfolder($order = Criteria::ASC) Order by the DoccFolder column
 * @method     ChildDocumentsQuery orderByDocifld1cd($order = Criteria::ASC) Order by the DociFld1Cd column
 * @method     ChildDocumentsQuery orderByDocifld1($order = Criteria::ASC) Order by the DociFld1 column
 * @method     ChildDocumentsQuery orderByDocifld2cd($order = Criteria::ASC) Order by the DociFld2Cd column
 * @method     ChildDocumentsQuery orderByDocifld2($order = Criteria::ASC) Order by the DociFld2 column
 * @method     ChildDocumentsQuery orderByDociseq($order = Criteria::ASC) Order by the DociSeq column
 * @method     ChildDocumentsQuery orderByDocitag($order = Criteria::ASC) Order by the DociTag column
 * @method     ChildDocumentsQuery orderByDocifilename($order = Criteria::ASC) Order by the DociFileName column
 * @method     ChildDocumentsQuery orderByDociuser($order = Criteria::ASC) Order by the DociUser column
 * @method     ChildDocumentsQuery orderByDocidate($order = Criteria::ASC) Order by the DociDate column
 * @method     ChildDocumentsQuery orderByDocitime($order = Criteria::ASC) Order by the DociTime column
 * @method     ChildDocumentsQuery orderByDociorigdir($order = Criteria::ASC) Order by the DociOrigDir column
 * @method     ChildDocumentsQuery orderByDociorigfile($order = Criteria::ASC) Order by the DociOrigFile column
 * @method     ChildDocumentsQuery orderByDociref($order = Criteria::ASC) Order by the DociRef column
 * @method     ChildDocumentsQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildDocumentsQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildDocumentsQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildDocumentsQuery groupByDoccfolder() Group by the DoccFolder column
 * @method     ChildDocumentsQuery groupByDocifld1cd() Group by the DociFld1Cd column
 * @method     ChildDocumentsQuery groupByDocifld1() Group by the DociFld1 column
 * @method     ChildDocumentsQuery groupByDocifld2cd() Group by the DociFld2Cd column
 * @method     ChildDocumentsQuery groupByDocifld2() Group by the DociFld2 column
 * @method     ChildDocumentsQuery groupByDociseq() Group by the DociSeq column
 * @method     ChildDocumentsQuery groupByDocitag() Group by the DociTag column
 * @method     ChildDocumentsQuery groupByDocifilename() Group by the DociFileName column
 * @method     ChildDocumentsQuery groupByDociuser() Group by the DociUser column
 * @method     ChildDocumentsQuery groupByDocidate() Group by the DociDate column
 * @method     ChildDocumentsQuery groupByDocitime() Group by the DociTime column
 * @method     ChildDocumentsQuery groupByDociorigdir() Group by the DociOrigDir column
 * @method     ChildDocumentsQuery groupByDociorigfile() Group by the DociOrigFile column
 * @method     ChildDocumentsQuery groupByDociref() Group by the DociRef column
 * @method     ChildDocumentsQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildDocumentsQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildDocumentsQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildDocumentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildDocumentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildDocumentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildDocumentsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildDocumentsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildDocumentsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildDocuments findOne(ConnectionInterface $con = null) Return the first ChildDocuments matching the query
 * @method     ChildDocuments findOneOrCreate(ConnectionInterface $con = null) Return the first ChildDocuments matching the query, or a new ChildDocuments object populated from the query conditions when no match is found
 *
 * @method     ChildDocuments findOneByDoccfolder(string $DoccFolder) Return the first ChildDocuments filtered by the DoccFolder column
 * @method     ChildDocuments findOneByDocifld1cd(string $DociFld1Cd) Return the first ChildDocuments filtered by the DociFld1Cd column
 * @method     ChildDocuments findOneByDocifld1(string $DociFld1) Return the first ChildDocuments filtered by the DociFld1 column
 * @method     ChildDocuments findOneByDocifld2cd(string $DociFld2Cd) Return the first ChildDocuments filtered by the DociFld2Cd column
 * @method     ChildDocuments findOneByDocifld2(string $DociFld2) Return the first ChildDocuments filtered by the DociFld2 column
 * @method     ChildDocuments findOneByDociseq(int $DociSeq) Return the first ChildDocuments filtered by the DociSeq column
 * @method     ChildDocuments findOneByDocitag(string $DociTag) Return the first ChildDocuments filtered by the DociTag column
 * @method     ChildDocuments findOneByDocifilename(string $DociFileName) Return the first ChildDocuments filtered by the DociFileName column
 * @method     ChildDocuments findOneByDociuser(string $DociUser) Return the first ChildDocuments filtered by the DociUser column
 * @method     ChildDocuments findOneByDocidate(string $DociDate) Return the first ChildDocuments filtered by the DociDate column
 * @method     ChildDocuments findOneByDocitime(string $DociTime) Return the first ChildDocuments filtered by the DociTime column
 * @method     ChildDocuments findOneByDociorigdir(string $DociOrigDir) Return the first ChildDocuments filtered by the DociOrigDir column
 * @method     ChildDocuments findOneByDociorigfile(string $DociOrigFile) Return the first ChildDocuments filtered by the DociOrigFile column
 * @method     ChildDocuments findOneByDociref(string $DociRef) Return the first ChildDocuments filtered by the DociRef column
 * @method     ChildDocuments findOneByDateupdtd(string $DateUpdtd) Return the first ChildDocuments filtered by the DateUpdtd column
 * @method     ChildDocuments findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocuments filtered by the TimeUpdtd column
 * @method     ChildDocuments findOneByDummy(string $dummy) Return the first ChildDocuments filtered by the dummy column *

 * @method     ChildDocuments requirePk($key, ConnectionInterface $con = null) Return the ChildDocuments by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOne(ConnectionInterface $con = null) Return the first ChildDocuments matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocuments requireOneByDoccfolder(string $DoccFolder) Return the first ChildDocuments filtered by the DoccFolder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocifld1cd(string $DociFld1Cd) Return the first ChildDocuments filtered by the DociFld1Cd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocifld1(string $DociFld1) Return the first ChildDocuments filtered by the DociFld1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocifld2cd(string $DociFld2Cd) Return the first ChildDocuments filtered by the DociFld2Cd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocifld2(string $DociFld2) Return the first ChildDocuments filtered by the DociFld2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDociseq(int $DociSeq) Return the first ChildDocuments filtered by the DociSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocitag(string $DociTag) Return the first ChildDocuments filtered by the DociTag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocifilename(string $DociFileName) Return the first ChildDocuments filtered by the DociFileName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDociuser(string $DociUser) Return the first ChildDocuments filtered by the DociUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocidate(string $DociDate) Return the first ChildDocuments filtered by the DociDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDocitime(string $DociTime) Return the first ChildDocuments filtered by the DociTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDociorigdir(string $DociOrigDir) Return the first ChildDocuments filtered by the DociOrigDir column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDociorigfile(string $DociOrigFile) Return the first ChildDocuments filtered by the DociOrigFile column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDociref(string $DociRef) Return the first ChildDocuments filtered by the DociRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDateupdtd(string $DateUpdtd) Return the first ChildDocuments filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildDocuments filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildDocuments requireOneByDummy(string $dummy) Return the first ChildDocuments filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildDocuments[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildDocuments objects based on current ModelCriteria
 * @method     ChildDocuments[]|ObjectCollection findByDoccfolder(string $DoccFolder) Return ChildDocuments objects filtered by the DoccFolder column
 * @method     ChildDocuments[]|ObjectCollection findByDocifld1cd(string $DociFld1Cd) Return ChildDocuments objects filtered by the DociFld1Cd column
 * @method     ChildDocuments[]|ObjectCollection findByDocifld1(string $DociFld1) Return ChildDocuments objects filtered by the DociFld1 column
 * @method     ChildDocuments[]|ObjectCollection findByDocifld2cd(string $DociFld2Cd) Return ChildDocuments objects filtered by the DociFld2Cd column
 * @method     ChildDocuments[]|ObjectCollection findByDocifld2(string $DociFld2) Return ChildDocuments objects filtered by the DociFld2 column
 * @method     ChildDocuments[]|ObjectCollection findByDociseq(int $DociSeq) Return ChildDocuments objects filtered by the DociSeq column
 * @method     ChildDocuments[]|ObjectCollection findByDocitag(string $DociTag) Return ChildDocuments objects filtered by the DociTag column
 * @method     ChildDocuments[]|ObjectCollection findByDocifilename(string $DociFileName) Return ChildDocuments objects filtered by the DociFileName column
 * @method     ChildDocuments[]|ObjectCollection findByDociuser(string $DociUser) Return ChildDocuments objects filtered by the DociUser column
 * @method     ChildDocuments[]|ObjectCollection findByDocidate(string $DociDate) Return ChildDocuments objects filtered by the DociDate column
 * @method     ChildDocuments[]|ObjectCollection findByDocitime(string $DociTime) Return ChildDocuments objects filtered by the DociTime column
 * @method     ChildDocuments[]|ObjectCollection findByDociorigdir(string $DociOrigDir) Return ChildDocuments objects filtered by the DociOrigDir column
 * @method     ChildDocuments[]|ObjectCollection findByDociorigfile(string $DociOrigFile) Return ChildDocuments objects filtered by the DociOrigFile column
 * @method     ChildDocuments[]|ObjectCollection findByDociref(string $DociRef) Return ChildDocuments objects filtered by the DociRef column
 * @method     ChildDocuments[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildDocuments objects filtered by the DateUpdtd column
 * @method     ChildDocuments[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildDocuments objects filtered by the TimeUpdtd column
 * @method     ChildDocuments[]|ObjectCollection findByDummy(string $dummy) Return ChildDocuments objects filtered by the dummy column
 * @method     ChildDocuments[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class DocumentsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\DocumentsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Documents', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildDocumentsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildDocumentsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildDocumentsQuery) {
            return $criteria;
        }
        $query = new ChildDocumentsQuery();
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
     * @return ChildDocuments|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(DocumentsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = DocumentsTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]))))) {
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
     * @return ChildDocuments A model object, or null if the key is not found
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
            /** @var ChildDocuments $obj */
            $obj = new ChildDocuments();
            $obj->hydrate($row);
            DocumentsTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1]), (null === $key[2] || is_scalar($key[2]) || is_callable([$key[2], '__toString']) ? (string) $key[2] : $key[2]), (null === $key[3] || is_scalar($key[3]) || is_callable([$key[3], '__toString']) ? (string) $key[3] : $key[3]), (null === $key[4] || is_scalar($key[4]) || is_callable([$key[4], '__toString']) ? (string) $key[4] : $key[4]), (null === $key[5] || is_scalar($key[5]) || is_callable([$key[5], '__toString']) ? (string) $key[5] : $key[5])]));
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
     * @return ChildDocuments|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(DocumentsTableMap::COL_DOCCFOLDER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD1CD, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD1, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD2CD, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD2, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(DocumentsTableMap::COL_DOCISEQ, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(DocumentsTableMap::COL_DOCCFOLDER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DocumentsTableMap::COL_DOCIFLD1CD, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(DocumentsTableMap::COL_DOCIFLD1, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(DocumentsTableMap::COL_DOCIFLD2CD, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(DocumentsTableMap::COL_DOCIFLD2, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(DocumentsTableMap::COL_DOCISEQ, $key[5], Criteria::EQUAL);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDoccfolder($doccfolder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doccfolder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCCFOLDER, $doccfolder, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocifld1cd($docifld1cd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld1cd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD1CD, $docifld1cd, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocifld1($docifld1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD1, $docifld1, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocifld2cd($docifld2cd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld2cd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD2CD, $docifld2cd, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocifld2($docifld2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifld2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIFLD2, $docifld2, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDociseq($dociseq = null, $comparison = null)
    {
        if (is_array($dociseq)) {
            $useMinMax = false;
            if (isset($dociseq['min'])) {
                $this->addUsingAlias(DocumentsTableMap::COL_DOCISEQ, $dociseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dociseq['max'])) {
                $this->addUsingAlias(DocumentsTableMap::COL_DOCISEQ, $dociseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCISEQ, $dociseq, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocitag($docitag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docitag)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCITAG, $docitag, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocifilename($docifilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docifilename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIFILENAME, $docifilename, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDociuser($dociuser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociuser)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIUSER, $dociuser, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocidate($docidate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docidate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIDATE, $docidate, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDocitime($docitime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docitime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCITIME, $docitime, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDociorigdir($dociorigdir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociorigdir)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIORIGDIR, $dociorigdir, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDociorigfile($dociorigfile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociorigfile)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIORIGFILE, $dociorigfile, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDociref($dociref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dociref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DOCIREF, $dociref, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DocumentsTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildDocuments $documents Object to remove from the list of results
     *
     * @return $this|ChildDocumentsQuery The current query, for fluid interface
     */
    public function prune($documents = null)
    {
        if ($documents) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DocumentsTableMap::COL_DOCCFOLDER), $documents->getDoccfolder(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DocumentsTableMap::COL_DOCIFLD1CD), $documents->getDocifld1cd(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(DocumentsTableMap::COL_DOCIFLD1), $documents->getDocifld1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(DocumentsTableMap::COL_DOCIFLD2CD), $documents->getDocifld2cd(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(DocumentsTableMap::COL_DOCIFLD2), $documents->getDocifld2(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(DocumentsTableMap::COL_DOCISEQ), $documents->getDociseq(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DocumentsTableMap::clearInstancePool();
            DocumentsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(DocumentsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(DocumentsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            DocumentsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            DocumentsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // DocumentsQuery
