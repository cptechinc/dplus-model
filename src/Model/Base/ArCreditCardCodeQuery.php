<?php

namespace Base;

use \ArCreditCardCode as ChildArCreditCardCode;
use \ArCreditCardCodeQuery as ChildArCreditCardCodeQuery;
use \Exception;
use \PDO;
use Map\ArCreditCardCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_crcd` table.
 *
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdcode($order = Criteria::ASC) Order by the ArtbCrcdCode column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdname($order = Criteria::ASC) Order by the ArtbCrcdName column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdglacct($order = Criteria::ASC) Order by the ArtbCrcdGlAcct column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdcustid($order = Criteria::ASC) Order by the ArtbCrcdCustId column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdchrgglacct($order = Criteria::ASC) Order by the ArtbCrcdChrgGlAcct column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdchrgrate($order = Criteria::ASC) Order by the ArtbCrcdChrgRate column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdchrgtrancost($order = Criteria::ASC) Order by the ArtbCrcdChrgTranCost column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdccsurchgpct($order = Criteria::ASC) Order by the ArtbCrcdCcSurchgPct column
 * @method     ChildArCreditCardCodeQuery orderByArtbcrcdlmccsurchgpct($order = Criteria::ASC) Order by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildArCreditCardCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCreditCardCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCreditCardCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdcode() Group by the ArtbCrcdCode column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdname() Group by the ArtbCrcdName column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdglacct() Group by the ArtbCrcdGlAcct column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdcustid() Group by the ArtbCrcdCustId column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdchrgglacct() Group by the ArtbCrcdChrgGlAcct column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdchrgrate() Group by the ArtbCrcdChrgRate column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdchrgtrancost() Group by the ArtbCrcdChrgTranCost column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdccsurchgpct() Group by the ArtbCrcdCcSurchgPct column
 * @method     ChildArCreditCardCodeQuery groupByArtbcrcdlmccsurchgpct() Group by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildArCreditCardCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCreditCardCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCreditCardCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCreditCardCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCreditCardCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCreditCardCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCreditCardCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCreditCardCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCreditCardCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCreditCardCode|null findOne(?ConnectionInterface $con = null) Return the first ChildArCreditCardCode matching the query
 * @method     ChildArCreditCardCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArCreditCardCode matching the query, or a new ChildArCreditCardCode object populated from the query conditions when no match is found
 *
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdcode(string $ArtbCrcdCode) Return the first ChildArCreditCardCode filtered by the ArtbCrcdCode column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdname(string $ArtbCrcdName) Return the first ChildArCreditCardCode filtered by the ArtbCrcdName column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdglacct(string $ArtbCrcdGlAcct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdGlAcct column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdcustid(string $ArtbCrcdCustId) Return the first ChildArCreditCardCode filtered by the ArtbCrcdCustId column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdchrgglacct(string $ArtbCrcdChrgGlAcct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdChrgGlAcct column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdchrgrate(string $ArtbCrcdChrgRate) Return the first ChildArCreditCardCode filtered by the ArtbCrcdChrgRate column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdchrgtrancost(string $ArtbCrcdChrgTranCost) Return the first ChildArCreditCardCode filtered by the ArtbCrcdChrgTranCost column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdccsurchgpct(string $ArtbCrcdCcSurchgPct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdCcSurchgPct column
 * @method     ChildArCreditCardCode|null findOneByArtbcrcdlmccsurchgpct(string $ArtbCrcdLmCcSurchgPct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildArCreditCardCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCreditCardCode filtered by the DateUpdtd column
 * @method     ChildArCreditCardCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCreditCardCode filtered by the TimeUpdtd column
 * @method     ChildArCreditCardCode|null findOneByDummy(string $dummy) Return the first ChildArCreditCardCode filtered by the dummy column
 *
 * @method     ChildArCreditCardCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildArCreditCardCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOne(?ConnectionInterface $con = null) Return the first ChildArCreditCardCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCreditCardCode requireOneByArtbcrcdcode(string $ArtbCrcdCode) Return the first ChildArCreditCardCode filtered by the ArtbCrcdCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdname(string $ArtbCrcdName) Return the first ChildArCreditCardCode filtered by the ArtbCrcdName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdglacct(string $ArtbCrcdGlAcct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdcustid(string $ArtbCrcdCustId) Return the first ChildArCreditCardCode filtered by the ArtbCrcdCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdchrgglacct(string $ArtbCrcdChrgGlAcct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdChrgGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdchrgrate(string $ArtbCrcdChrgRate) Return the first ChildArCreditCardCode filtered by the ArtbCrcdChrgRate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdchrgtrancost(string $ArtbCrcdChrgTranCost) Return the first ChildArCreditCardCode filtered by the ArtbCrcdChrgTranCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdccsurchgpct(string $ArtbCrcdCcSurchgPct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdCcSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByArtbcrcdlmccsurchgpct(string $ArtbCrcdLmCcSurchgPct) Return the first ChildArCreditCardCode filtered by the ArtbCrcdLmCcSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCreditCardCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCreditCardCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCreditCardCode requireOneByDummy(string $dummy) Return the first ChildArCreditCardCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCreditCardCode[]|Collection find(?ConnectionInterface $con = null) Return ChildArCreditCardCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> find(?ConnectionInterface $con = null) Return ChildArCreditCardCode objects based on current ModelCriteria
 *
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdcode(string|array<string> $ArtbCrcdCode) Return ChildArCreditCardCode objects filtered by the ArtbCrcdCode column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdcode(string|array<string> $ArtbCrcdCode) Return ChildArCreditCardCode objects filtered by the ArtbCrcdCode column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdname(string|array<string> $ArtbCrcdName) Return ChildArCreditCardCode objects filtered by the ArtbCrcdName column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdname(string|array<string> $ArtbCrcdName) Return ChildArCreditCardCode objects filtered by the ArtbCrcdName column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdglacct(string|array<string> $ArtbCrcdGlAcct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdGlAcct column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdglacct(string|array<string> $ArtbCrcdGlAcct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdGlAcct column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdcustid(string|array<string> $ArtbCrcdCustId) Return ChildArCreditCardCode objects filtered by the ArtbCrcdCustId column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdcustid(string|array<string> $ArtbCrcdCustId) Return ChildArCreditCardCode objects filtered by the ArtbCrcdCustId column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdchrgglacct(string|array<string> $ArtbCrcdChrgGlAcct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdChrgGlAcct column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdchrgglacct(string|array<string> $ArtbCrcdChrgGlAcct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdChrgGlAcct column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdchrgrate(string|array<string> $ArtbCrcdChrgRate) Return ChildArCreditCardCode objects filtered by the ArtbCrcdChrgRate column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdchrgrate(string|array<string> $ArtbCrcdChrgRate) Return ChildArCreditCardCode objects filtered by the ArtbCrcdChrgRate column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdchrgtrancost(string|array<string> $ArtbCrcdChrgTranCost) Return ChildArCreditCardCode objects filtered by the ArtbCrcdChrgTranCost column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdchrgtrancost(string|array<string> $ArtbCrcdChrgTranCost) Return ChildArCreditCardCode objects filtered by the ArtbCrcdChrgTranCost column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdccsurchgpct(string|array<string> $ArtbCrcdCcSurchgPct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdCcSurchgPct column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdccsurchgpct(string|array<string> $ArtbCrcdCcSurchgPct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdCcSurchgPct column
 * @method     ChildArCreditCardCode[]|Collection findByArtbcrcdlmccsurchgpct(string|array<string> $ArtbCrcdLmCcSurchgPct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdLmCcSurchgPct column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByArtbcrcdlmccsurchgpct(string|array<string> $ArtbCrcdLmCcSurchgPct) Return ChildArCreditCardCode objects filtered by the ArtbCrcdLmCcSurchgPct column
 * @method     ChildArCreditCardCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCreditCardCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCreditCardCode objects filtered by the DateUpdtd column
 * @method     ChildArCreditCardCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCreditCardCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCreditCardCode objects filtered by the TimeUpdtd column
 * @method     ChildArCreditCardCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildArCreditCardCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArCreditCardCode> findByDummy(string|array<string> $dummy) Return ChildArCreditCardCode objects filtered by the dummy column
 *
 * @method     ChildArCreditCardCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArCreditCardCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArCreditCardCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCreditCardCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCreditCardCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCreditCardCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCreditCardCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArCreditCardCodeQuery) {
            return $criteria;
        }
        $query = new ChildArCreditCardCodeQuery();
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
     * @return ChildArCreditCardCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCreditCardCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCreditCardCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArCreditCardCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbCrcdCode, ArtbCrcdName, ArtbCrcdGlAcct, ArtbCrcdCustId, ArtbCrcdChrgGlAcct, ArtbCrcdChrgRate, ArtbCrcdChrgTranCost, ArtbCrcdCcSurchgPct, ArtbCrcdLmCcSurchgPct, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_crcd WHERE ArtbCrcdCode = :p0';
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
            /** @var ChildArCreditCardCode $obj */
            $obj = new ChildArCreditCardCode();
            $obj->hydrate($row);
            ArCreditCardCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArCreditCardCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdcode('fooValue');   // WHERE ArtbCrcdCode = 'fooValue'
     * $query->filterByArtbcrcdcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdCode LIKE '%fooValue%'
     * $query->filterByArtbcrcdcode(['foo', 'bar']); // WHERE ArtbCrcdCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcrcdcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdcode($artbcrcdcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE, $artbcrcdcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdName column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdname('fooValue');   // WHERE ArtbCrcdName = 'fooValue'
     * $query->filterByArtbcrcdname('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdName LIKE '%fooValue%'
     * $query->filterByArtbcrcdname(['foo', 'bar']); // WHERE ArtbCrcdName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcrcdname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdname($artbcrcdname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDNAME, $artbcrcdname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdglacct('fooValue');   // WHERE ArtbCrcdGlAcct = 'fooValue'
     * $query->filterByArtbcrcdglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdGlAcct LIKE '%fooValue%'
     * $query->filterByArtbcrcdglacct(['foo', 'bar']); // WHERE ArtbCrcdGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcrcdglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdglacct($artbcrcdglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDGLACCT, $artbcrcdglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdcustid('fooValue');   // WHERE ArtbCrcdCustId = 'fooValue'
     * $query->filterByArtbcrcdcustid('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdCustId LIKE '%fooValue%'
     * $query->filterByArtbcrcdcustid(['foo', 'bar']); // WHERE ArtbCrcdCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcrcdcustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdcustid($artbcrcdcustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdcustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCUSTID, $artbcrcdcustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdChrgGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdchrgglacct('fooValue');   // WHERE ArtbCrcdChrgGlAcct = 'fooValue'
     * $query->filterByArtbcrcdchrgglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCrcdChrgGlAcct LIKE '%fooValue%'
     * $query->filterByArtbcrcdchrgglacct(['foo', 'bar']); // WHERE ArtbCrcdChrgGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbcrcdchrgglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdchrgglacct($artbcrcdchrgglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcrcdchrgglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGGLACCT, $artbcrcdchrgglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdChrgRate column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdchrgrate(1234); // WHERE ArtbCrcdChrgRate = 1234
     * $query->filterByArtbcrcdchrgrate(array(12, 34)); // WHERE ArtbCrcdChrgRate IN (12, 34)
     * $query->filterByArtbcrcdchrgrate(array('min' => 12)); // WHERE ArtbCrcdChrgRate > 12
     * </code>
     *
     * @param mixed $artbcrcdchrgrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdchrgrate($artbcrcdchrgrate = null, ?string $comparison = null)
    {
        if (is_array($artbcrcdchrgrate)) {
            $useMinMax = false;
            if (isset($artbcrcdchrgrate['min'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE, $artbcrcdchrgrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdchrgrate['max'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE, $artbcrcdchrgrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGRATE, $artbcrcdchrgrate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdChrgTranCost column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdchrgtrancost(1234); // WHERE ArtbCrcdChrgTranCost = 1234
     * $query->filterByArtbcrcdchrgtrancost(array(12, 34)); // WHERE ArtbCrcdChrgTranCost IN (12, 34)
     * $query->filterByArtbcrcdchrgtrancost(array('min' => 12)); // WHERE ArtbCrcdChrgTranCost > 12
     * </code>
     *
     * @param mixed $artbcrcdchrgtrancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdchrgtrancost($artbcrcdchrgtrancost = null, ?string $comparison = null)
    {
        if (is_array($artbcrcdchrgtrancost)) {
            $useMinMax = false;
            if (isset($artbcrcdchrgtrancost['min'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST, $artbcrcdchrgtrancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdchrgtrancost['max'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST, $artbcrcdchrgtrancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCHRGTRANCOST, $artbcrcdchrgtrancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdCcSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdccsurchgpct(1234); // WHERE ArtbCrcdCcSurchgPct = 1234
     * $query->filterByArtbcrcdccsurchgpct(array(12, 34)); // WHERE ArtbCrcdCcSurchgPct IN (12, 34)
     * $query->filterByArtbcrcdccsurchgpct(array('min' => 12)); // WHERE ArtbCrcdCcSurchgPct > 12
     * </code>
     *
     * @param mixed $artbcrcdccsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdccsurchgpct($artbcrcdccsurchgpct = null, ?string $comparison = null)
    {
        if (is_array($artbcrcdccsurchgpct)) {
            $useMinMax = false;
            if (isset($artbcrcdccsurchgpct['min'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT, $artbcrcdccsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdccsurchgpct['max'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT, $artbcrcdccsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCCSURCHGPCT, $artbcrcdccsurchgpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCrcdLmCcSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcrcdlmccsurchgpct(1234); // WHERE ArtbCrcdLmCcSurchgPct = 1234
     * $query->filterByArtbcrcdlmccsurchgpct(array(12, 34)); // WHERE ArtbCrcdLmCcSurchgPct IN (12, 34)
     * $query->filterByArtbcrcdlmccsurchgpct(array('min' => 12)); // WHERE ArtbCrcdLmCcSurchgPct > 12
     * </code>
     *
     * @param mixed $artbcrcdlmccsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbcrcdlmccsurchgpct($artbcrcdlmccsurchgpct = null, ?string $comparison = null)
    {
        if (is_array($artbcrcdlmccsurchgpct)) {
            $useMinMax = false;
            if (isset($artbcrcdlmccsurchgpct['min'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT, $artbcrcdlmccsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbcrcdlmccsurchgpct['max'])) {
                $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT, $artbcrcdlmccsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDLMCCSURCHGPCT, $artbcrcdlmccsurchgpct, $comparison);

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

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArCreditCardCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArCreditCardCode $arCreditCardCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arCreditCardCode = null)
    {
        if ($arCreditCardCode) {
            $this->addUsingAlias(ArCreditCardCodeTableMap::COL_ARTBCRCDCODE, $arCreditCardCode->getArtbcrcdcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_crcd table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCreditCardCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCreditCardCodeTableMap::clearInstancePool();
            ArCreditCardCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCreditCardCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCreditCardCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCreditCardCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCreditCardCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
