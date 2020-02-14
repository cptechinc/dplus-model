<?php

namespace Base;

use \MsaSysopCode as ChildMsaSysopCode;
use \MsaSysopCodeQuery as ChildMsaSysopCodeQuery;
use \Exception;
use \PDO;
use Map\MsaSysopCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sys_opt_options' table.
 *
 *
 *
 * @method     ChildMsaSysopCodeQuery orderByOptnsystem($order = Criteria::ASC) Order by the OptnSystem column
 * @method     ChildMsaSysopCodeQuery orderByOptncode($order = Criteria::ASC) Order by the OptnCode column
 * @method     ChildMsaSysopCodeQuery orderByOptndesc($order = Criteria::ASC) Order by the OptnDesc column
 * @method     ChildMsaSysopCodeQuery orderByOptnvalidate($order = Criteria::ASC) Order by the OptnValidate column
 * @method     ChildMsaSysopCodeQuery orderByOptnforce($order = Criteria::ASC) Order by the OptnForce column
 * @method     ChildMsaSysopCodeQuery orderByOptnnotecode($order = Criteria::ASC) Order by the OptnNoteCode column
 * @method     ChildMsaSysopCodeQuery orderByOptnlistseq($order = Criteria::ASC) Order by the OptnListSeq column
 * @method     ChildMsaSysopCodeQuery orderByOptnfilename($order = Criteria::ASC) Order by the OptnFileName column
 * @method     ChildMsaSysopCodeQuery orderByOptnadvsrch($order = Criteria::ASC) Order by the OptnAdvSrch column
 * @method     ChildMsaSysopCodeQuery orderByOptnfieldtype($order = Criteria::ASC) Order by the OptnFieldType column
 * @method     ChildMsaSysopCodeQuery orderByOptndef1b4dec($order = Criteria::ASC) Order by the OptnDef1B4Dec column
 * @method     ChildMsaSysopCodeQuery orderByOptndef2aftdec($order = Criteria::ASC) Order by the OptnDef2AftDec column
 * @method     ChildMsaSysopCodeQuery orderByOptndocstorfolder($order = Criteria::ASC) Order by the OptnDocStorFolder column
 * @method     ChildMsaSysopCodeQuery orderByOptnwebvalidate($order = Criteria::ASC) Order by the OptnWebValidate column
 * @method     ChildMsaSysopCodeQuery orderByOptnwebforce($order = Criteria::ASC) Order by the OptnWebForce column
 * @method     ChildMsaSysopCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildMsaSysopCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildMsaSysopCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildMsaSysopCodeQuery groupByOptnsystem() Group by the OptnSystem column
 * @method     ChildMsaSysopCodeQuery groupByOptncode() Group by the OptnCode column
 * @method     ChildMsaSysopCodeQuery groupByOptndesc() Group by the OptnDesc column
 * @method     ChildMsaSysopCodeQuery groupByOptnvalidate() Group by the OptnValidate column
 * @method     ChildMsaSysopCodeQuery groupByOptnforce() Group by the OptnForce column
 * @method     ChildMsaSysopCodeQuery groupByOptnnotecode() Group by the OptnNoteCode column
 * @method     ChildMsaSysopCodeQuery groupByOptnlistseq() Group by the OptnListSeq column
 * @method     ChildMsaSysopCodeQuery groupByOptnfilename() Group by the OptnFileName column
 * @method     ChildMsaSysopCodeQuery groupByOptnadvsrch() Group by the OptnAdvSrch column
 * @method     ChildMsaSysopCodeQuery groupByOptnfieldtype() Group by the OptnFieldType column
 * @method     ChildMsaSysopCodeQuery groupByOptndef1b4dec() Group by the OptnDef1B4Dec column
 * @method     ChildMsaSysopCodeQuery groupByOptndef2aftdec() Group by the OptnDef2AftDec column
 * @method     ChildMsaSysopCodeQuery groupByOptndocstorfolder() Group by the OptnDocStorFolder column
 * @method     ChildMsaSysopCodeQuery groupByOptnwebvalidate() Group by the OptnWebValidate column
 * @method     ChildMsaSysopCodeQuery groupByOptnwebforce() Group by the OptnWebForce column
 * @method     ChildMsaSysopCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildMsaSysopCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildMsaSysopCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildMsaSysopCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildMsaSysopCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildMsaSysopCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildMsaSysopCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildMsaSysopCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildMsaSysopCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildMsaSysopCode findOne(ConnectionInterface $con = null) Return the first ChildMsaSysopCode matching the query
 * @method     ChildMsaSysopCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildMsaSysopCode matching the query, or a new ChildMsaSysopCode object populated from the query conditions when no match is found
 *
 * @method     ChildMsaSysopCode findOneByOptnsystem(string $OptnSystem) Return the first ChildMsaSysopCode filtered by the OptnSystem column
 * @method     ChildMsaSysopCode findOneByOptncode(string $OptnCode) Return the first ChildMsaSysopCode filtered by the OptnCode column
 * @method     ChildMsaSysopCode findOneByOptndesc(string $OptnDesc) Return the first ChildMsaSysopCode filtered by the OptnDesc column
 * @method     ChildMsaSysopCode findOneByOptnvalidate(string $OptnValidate) Return the first ChildMsaSysopCode filtered by the OptnValidate column
 * @method     ChildMsaSysopCode findOneByOptnforce(string $OptnForce) Return the first ChildMsaSysopCode filtered by the OptnForce column
 * @method     ChildMsaSysopCode findOneByOptnnotecode(string $OptnNoteCode) Return the first ChildMsaSysopCode filtered by the OptnNoteCode column
 * @method     ChildMsaSysopCode findOneByOptnlistseq(int $OptnListSeq) Return the first ChildMsaSysopCode filtered by the OptnListSeq column
 * @method     ChildMsaSysopCode findOneByOptnfilename(string $OptnFileName) Return the first ChildMsaSysopCode filtered by the OptnFileName column
 * @method     ChildMsaSysopCode findOneByOptnadvsrch(string $OptnAdvSrch) Return the first ChildMsaSysopCode filtered by the OptnAdvSrch column
 * @method     ChildMsaSysopCode findOneByOptnfieldtype(string $OptnFieldType) Return the first ChildMsaSysopCode filtered by the OptnFieldType column
 * @method     ChildMsaSysopCode findOneByOptndef1b4dec(int $OptnDef1B4Dec) Return the first ChildMsaSysopCode filtered by the OptnDef1B4Dec column
 * @method     ChildMsaSysopCode findOneByOptndef2aftdec(int $OptnDef2AftDec) Return the first ChildMsaSysopCode filtered by the OptnDef2AftDec column
 * @method     ChildMsaSysopCode findOneByOptndocstorfolder(string $OptnDocStorFolder) Return the first ChildMsaSysopCode filtered by the OptnDocStorFolder column
 * @method     ChildMsaSysopCode findOneByOptnwebvalidate(string $OptnWebValidate) Return the first ChildMsaSysopCode filtered by the OptnWebValidate column
 * @method     ChildMsaSysopCode findOneByOptnwebforce(string $OptnWebForce) Return the first ChildMsaSysopCode filtered by the OptnWebForce column
 * @method     ChildMsaSysopCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildMsaSysopCode filtered by the DateUpdtd column
 * @method     ChildMsaSysopCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildMsaSysopCode filtered by the TimeUpdtd column
 * @method     ChildMsaSysopCode findOneByDummy(string $dummy) Return the first ChildMsaSysopCode filtered by the dummy column *

 * @method     ChildMsaSysopCode requirePk($key, ConnectionInterface $con = null) Return the ChildMsaSysopCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOne(ConnectionInterface $con = null) Return the first ChildMsaSysopCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMsaSysopCode requireOneByOptnsystem(string $OptnSystem) Return the first ChildMsaSysopCode filtered by the OptnSystem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptncode(string $OptnCode) Return the first ChildMsaSysopCode filtered by the OptnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptndesc(string $OptnDesc) Return the first ChildMsaSysopCode filtered by the OptnDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnvalidate(string $OptnValidate) Return the first ChildMsaSysopCode filtered by the OptnValidate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnforce(string $OptnForce) Return the first ChildMsaSysopCode filtered by the OptnForce column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnnotecode(string $OptnNoteCode) Return the first ChildMsaSysopCode filtered by the OptnNoteCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnlistseq(int $OptnListSeq) Return the first ChildMsaSysopCode filtered by the OptnListSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnfilename(string $OptnFileName) Return the first ChildMsaSysopCode filtered by the OptnFileName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnadvsrch(string $OptnAdvSrch) Return the first ChildMsaSysopCode filtered by the OptnAdvSrch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnfieldtype(string $OptnFieldType) Return the first ChildMsaSysopCode filtered by the OptnFieldType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptndef1b4dec(int $OptnDef1B4Dec) Return the first ChildMsaSysopCode filtered by the OptnDef1B4Dec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptndef2aftdec(int $OptnDef2AftDec) Return the first ChildMsaSysopCode filtered by the OptnDef2AftDec column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptndocstorfolder(string $OptnDocStorFolder) Return the first ChildMsaSysopCode filtered by the OptnDocStorFolder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnwebvalidate(string $OptnWebValidate) Return the first ChildMsaSysopCode filtered by the OptnWebValidate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByOptnwebforce(string $OptnWebForce) Return the first ChildMsaSysopCode filtered by the OptnWebForce column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildMsaSysopCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildMsaSysopCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildMsaSysopCode requireOneByDummy(string $dummy) Return the first ChildMsaSysopCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildMsaSysopCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildMsaSysopCode objects based on current ModelCriteria
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnsystem(string $OptnSystem) Return ChildMsaSysopCode objects filtered by the OptnSystem column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptncode(string $OptnCode) Return ChildMsaSysopCode objects filtered by the OptnCode column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptndesc(string $OptnDesc) Return ChildMsaSysopCode objects filtered by the OptnDesc column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnvalidate(string $OptnValidate) Return ChildMsaSysopCode objects filtered by the OptnValidate column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnforce(string $OptnForce) Return ChildMsaSysopCode objects filtered by the OptnForce column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnnotecode(string $OptnNoteCode) Return ChildMsaSysopCode objects filtered by the OptnNoteCode column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnlistseq(int $OptnListSeq) Return ChildMsaSysopCode objects filtered by the OptnListSeq column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnfilename(string $OptnFileName) Return ChildMsaSysopCode objects filtered by the OptnFileName column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnadvsrch(string $OptnAdvSrch) Return ChildMsaSysopCode objects filtered by the OptnAdvSrch column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnfieldtype(string $OptnFieldType) Return ChildMsaSysopCode objects filtered by the OptnFieldType column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptndef1b4dec(int $OptnDef1B4Dec) Return ChildMsaSysopCode objects filtered by the OptnDef1B4Dec column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptndef2aftdec(int $OptnDef2AftDec) Return ChildMsaSysopCode objects filtered by the OptnDef2AftDec column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptndocstorfolder(string $OptnDocStorFolder) Return ChildMsaSysopCode objects filtered by the OptnDocStorFolder column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnwebvalidate(string $OptnWebValidate) Return ChildMsaSysopCode objects filtered by the OptnWebValidate column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByOptnwebforce(string $OptnWebForce) Return ChildMsaSysopCode objects filtered by the OptnWebForce column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildMsaSysopCode objects filtered by the DateUpdtd column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildMsaSysopCode objects filtered by the TimeUpdtd column
 * @method     ChildMsaSysopCode[]|ObjectCollection findByDummy(string $dummy) Return ChildMsaSysopCode objects filtered by the dummy column
 * @method     ChildMsaSysopCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class MsaSysopCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\MsaSysopCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\MsaSysopCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildMsaSysopCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildMsaSysopCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildMsaSysopCodeQuery) {
            return $criteria;
        }
        $query = new ChildMsaSysopCodeQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$OptnSystem, $OptnCode] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildMsaSysopCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = MsaSysopCodeTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildMsaSysopCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OptnSystem, OptnCode, OptnDesc, OptnValidate, OptnForce, OptnNoteCode, OptnListSeq, OptnFileName, OptnAdvSrch, OptnFieldType, OptnDef1B4Dec, OptnDef2AftDec, OptnDocStorFolder, OptnWebValidate, OptnWebForce, DateUpdtd, TimeUpdtd, dummy FROM sys_opt_options WHERE OptnSystem = :p0 AND OptnCode = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildMsaSysopCode $obj */
            $obj = new ChildMsaSysopCode();
            $obj->hydrate($row);
            MsaSysopCodeTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildMsaSysopCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNSYSTEM, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(MsaSysopCodeTableMap::COL_OPTNSYSTEM, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(MsaSysopCodeTableMap::COL_OPTNCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the OptnSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnsystem('fooValue');   // WHERE OptnSystem = 'fooValue'
     * $query->filterByOptnsystem('%fooValue%', Criteria::LIKE); // WHERE OptnSystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnsystem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnsystem($optnsystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnsystem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNSYSTEM, $optnsystem, $comparison);
    }

    /**
     * Filter the query on the OptnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOptncode('fooValue');   // WHERE OptnCode = 'fooValue'
     * $query->filterByOptncode('%fooValue%', Criteria::LIKE); // WHERE OptnCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptncode($optncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNCODE, $optncode, $comparison);
    }

    /**
     * Filter the query on the OptnDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByOptndesc('fooValue');   // WHERE OptnDesc = 'fooValue'
     * $query->filterByOptndesc('%fooValue%', Criteria::LIKE); // WHERE OptnDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optndesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptndesc($optndesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optndesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDESC, $optndesc, $comparison);
    }

    /**
     * Filter the query on the OptnValidate column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnvalidate('fooValue');   // WHERE OptnValidate = 'fooValue'
     * $query->filterByOptnvalidate('%fooValue%', Criteria::LIKE); // WHERE OptnValidate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnvalidate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnvalidate($optnvalidate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnvalidate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNVALIDATE, $optnvalidate, $comparison);
    }

    /**
     * Filter the query on the OptnForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnforce('fooValue');   // WHERE OptnForce = 'fooValue'
     * $query->filterByOptnforce('%fooValue%', Criteria::LIKE); // WHERE OptnForce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnforce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnforce($optnforce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnforce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNFORCE, $optnforce, $comparison);
    }

    /**
     * Filter the query on the OptnNoteCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnnotecode('fooValue');   // WHERE OptnNoteCode = 'fooValue'
     * $query->filterByOptnnotecode('%fooValue%', Criteria::LIKE); // WHERE OptnNoteCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnnotecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnnotecode($optnnotecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnnotecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNNOTECODE, $optnnotecode, $comparison);
    }

    /**
     * Filter the query on the OptnListSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnlistseq(1234); // WHERE OptnListSeq = 1234
     * $query->filterByOptnlistseq(array(12, 34)); // WHERE OptnListSeq IN (12, 34)
     * $query->filterByOptnlistseq(array('min' => 12)); // WHERE OptnListSeq > 12
     * </code>
     *
     * @param     mixed $optnlistseq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnlistseq($optnlistseq = null, $comparison = null)
    {
        if (is_array($optnlistseq)) {
            $useMinMax = false;
            if (isset($optnlistseq['min'])) {
                $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNLISTSEQ, $optnlistseq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optnlistseq['max'])) {
                $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNLISTSEQ, $optnlistseq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNLISTSEQ, $optnlistseq, $comparison);
    }

    /**
     * Filter the query on the OptnFileName column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnfilename('fooValue');   // WHERE OptnFileName = 'fooValue'
     * $query->filterByOptnfilename('%fooValue%', Criteria::LIKE); // WHERE OptnFileName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnfilename The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnfilename($optnfilename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnfilename)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNFILENAME, $optnfilename, $comparison);
    }

    /**
     * Filter the query on the OptnAdvSrch column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnadvsrch('fooValue');   // WHERE OptnAdvSrch = 'fooValue'
     * $query->filterByOptnadvsrch('%fooValue%', Criteria::LIKE); // WHERE OptnAdvSrch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnadvsrch The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnadvsrch($optnadvsrch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnadvsrch)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNADVSRCH, $optnadvsrch, $comparison);
    }

    /**
     * Filter the query on the OptnFieldType column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnfieldtype('fooValue');   // WHERE OptnFieldType = 'fooValue'
     * $query->filterByOptnfieldtype('%fooValue%', Criteria::LIKE); // WHERE OptnFieldType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnfieldtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnfieldtype($optnfieldtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnfieldtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNFIELDTYPE, $optnfieldtype, $comparison);
    }

    /**
     * Filter the query on the OptnDef1B4Dec column
     *
     * Example usage:
     * <code>
     * $query->filterByOptndef1b4dec(1234); // WHERE OptnDef1B4Dec = 1234
     * $query->filterByOptndef1b4dec(array(12, 34)); // WHERE OptnDef1B4Dec IN (12, 34)
     * $query->filterByOptndef1b4dec(array('min' => 12)); // WHERE OptnDef1B4Dec > 12
     * </code>
     *
     * @param     mixed $optndef1b4dec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptndef1b4dec($optndef1b4dec = null, $comparison = null)
    {
        if (is_array($optndef1b4dec)) {
            $useMinMax = false;
            if (isset($optndef1b4dec['min'])) {
                $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC, $optndef1b4dec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optndef1b4dec['max'])) {
                $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC, $optndef1b4dec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDEF1B4DEC, $optndef1b4dec, $comparison);
    }

    /**
     * Filter the query on the OptnDef2AftDec column
     *
     * Example usage:
     * <code>
     * $query->filterByOptndef2aftdec(1234); // WHERE OptnDef2AftDec = 1234
     * $query->filterByOptndef2aftdec(array(12, 34)); // WHERE OptnDef2AftDec IN (12, 34)
     * $query->filterByOptndef2aftdec(array('min' => 12)); // WHERE OptnDef2AftDec > 12
     * </code>
     *
     * @param     mixed $optndef2aftdec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptndef2aftdec($optndef2aftdec = null, $comparison = null)
    {
        if (is_array($optndef2aftdec)) {
            $useMinMax = false;
            if (isset($optndef2aftdec['min'])) {
                $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC, $optndef2aftdec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optndef2aftdec['max'])) {
                $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC, $optndef2aftdec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDEF2AFTDEC, $optndef2aftdec, $comparison);
    }

    /**
     * Filter the query on the OptnDocStorFolder column
     *
     * Example usage:
     * <code>
     * $query->filterByOptndocstorfolder('fooValue');   // WHERE OptnDocStorFolder = 'fooValue'
     * $query->filterByOptndocstorfolder('%fooValue%', Criteria::LIKE); // WHERE OptnDocStorFolder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optndocstorfolder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptndocstorfolder($optndocstorfolder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optndocstorfolder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNDOCSTORFOLDER, $optndocstorfolder, $comparison);
    }

    /**
     * Filter the query on the OptnWebValidate column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnwebvalidate('fooValue');   // WHERE OptnWebValidate = 'fooValue'
     * $query->filterByOptnwebvalidate('%fooValue%', Criteria::LIKE); // WHERE OptnWebValidate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnwebvalidate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnwebvalidate($optnwebvalidate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnwebvalidate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNWEBVALIDATE, $optnwebvalidate, $comparison);
    }

    /**
     * Filter the query on the OptnWebForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOptnwebforce('fooValue');   // WHERE OptnWebForce = 'fooValue'
     * $query->filterByOptnwebforce('%fooValue%', Criteria::LIKE); // WHERE OptnWebForce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optnwebforce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByOptnwebforce($optnwebforce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optnwebforce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_OPTNWEBFORCE, $optnwebforce, $comparison);
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
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MsaSysopCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildMsaSysopCode $msaSysopCode Object to remove from the list of results
     *
     * @return $this|ChildMsaSysopCodeQuery The current query, for fluid interface
     */
    public function prune($msaSysopCode = null)
    {
        if ($msaSysopCode) {
            $this->addCond('pruneCond0', $this->getAliasedColName(MsaSysopCodeTableMap::COL_OPTNSYSTEM), $msaSysopCode->getOptnsystem(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(MsaSysopCodeTableMap::COL_OPTNCODE), $msaSysopCode->getOptncode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sys_opt_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MsaSysopCodeTableMap::clearInstancePool();
            MsaSysopCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(MsaSysopCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(MsaSysopCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            MsaSysopCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            MsaSysopCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // MsaSysopCodeQuery
