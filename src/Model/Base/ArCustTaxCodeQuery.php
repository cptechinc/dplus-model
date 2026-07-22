<?php

namespace Base;

use \ArCustTaxCode as ChildArCustTaxCode;
use \ArCustTaxCodeQuery as ChildArCustTaxCodeQuery;
use \Exception;
use \PDO;
use Map\ArCustTaxCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_ctax` table.
 *
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode($order = Criteria::ASC) Order by the ArtbCtaxCode column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxdesc($order = Criteria::ASC) Order by the ArtbCtaxDesc column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode1($order = Criteria::ASC) Order by the ArtbCtaxCode1 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode2($order = Criteria::ASC) Order by the ArtbCtaxCode2 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode3($order = Criteria::ASC) Order by the ArtbCtaxCode3 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode4($order = Criteria::ASC) Order by the ArtbCtaxCode4 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode5($order = Criteria::ASC) Order by the ArtbCtaxCode5 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode6($order = Criteria::ASC) Order by the ArtbCtaxCode6 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode7($order = Criteria::ASC) Order by the ArtbCtaxCode7 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode8($order = Criteria::ASC) Order by the ArtbCtaxCode8 column
 * @method     ChildArCustTaxCodeQuery orderByArtbctaxcode9($order = Criteria::ASC) Order by the ArtbCtaxCode9 column
 * @method     ChildArCustTaxCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCustTaxCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCustTaxCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode() Group by the ArtbCtaxCode column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxdesc() Group by the ArtbCtaxDesc column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode1() Group by the ArtbCtaxCode1 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode2() Group by the ArtbCtaxCode2 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode3() Group by the ArtbCtaxCode3 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode4() Group by the ArtbCtaxCode4 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode5() Group by the ArtbCtaxCode5 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode6() Group by the ArtbCtaxCode6 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode7() Group by the ArtbCtaxCode7 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode8() Group by the ArtbCtaxCode8 column
 * @method     ChildArCustTaxCodeQuery groupByArtbctaxcode9() Group by the ArtbCtaxCode9 column
 * @method     ChildArCustTaxCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCustTaxCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCustTaxCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCustTaxCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCustTaxCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCustTaxCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCustTaxCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCustTaxCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCustTaxCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCustTaxCode|null findOne(?ConnectionInterface $con = null) Return the first ChildArCustTaxCode matching the query
 * @method     ChildArCustTaxCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArCustTaxCode matching the query, or a new ChildArCustTaxCode object populated from the query conditions when no match is found
 *
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxdesc(string $ArtbCtaxDesc) Return the first ChildArCustTaxCode filtered by the ArtbCtaxDesc column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode1(string $ArtbCtaxCode1) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode1 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode2(string $ArtbCtaxCode2) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode2 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode3(string $ArtbCtaxCode3) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode3 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode4(string $ArtbCtaxCode4) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode4 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode5(string $ArtbCtaxCode5) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode5 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode6(string $ArtbCtaxCode6) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode6 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode7(string $ArtbCtaxCode7) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode7 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode8(string $ArtbCtaxCode8) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode8 column
 * @method     ChildArCustTaxCode|null findOneByArtbctaxcode9(string $ArtbCtaxCode9) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode9 column
 * @method     ChildArCustTaxCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCustTaxCode filtered by the DateUpdtd column
 * @method     ChildArCustTaxCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCustTaxCode filtered by the TimeUpdtd column
 * @method     ChildArCustTaxCode|null findOneByDummy(string $dummy) Return the first ChildArCustTaxCode filtered by the dummy column
 *
 * @method     ChildArCustTaxCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildArCustTaxCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOne(?ConnectionInterface $con = null) Return the first ChildArCustTaxCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxdesc(string $ArtbCtaxDesc) Return the first ChildArCustTaxCode filtered by the ArtbCtaxDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode1(string $ArtbCtaxCode1) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode2(string $ArtbCtaxCode2) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode3(string $ArtbCtaxCode3) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode4(string $ArtbCtaxCode4) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode5(string $ArtbCtaxCode5) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode6(string $ArtbCtaxCode6) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode7(string $ArtbCtaxCode7) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode8(string $ArtbCtaxCode8) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByArtbctaxcode9(string $ArtbCtaxCode9) Return the first ChildArCustTaxCode filtered by the ArtbCtaxCode9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCustTaxCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCustTaxCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTaxCode requireOneByDummy(string $dummy) Return the first ChildArCustTaxCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCustTaxCode[]|Collection find(?ConnectionInterface $con = null) Return ChildArCustTaxCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> find(?ConnectionInterface $con = null) Return ChildArCustTaxCode objects based on current ModelCriteria
 *
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxdesc(string|array<string> $ArtbCtaxDesc) Return ChildArCustTaxCode objects filtered by the ArtbCtaxDesc column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxdesc(string|array<string> $ArtbCtaxDesc) Return ChildArCustTaxCode objects filtered by the ArtbCtaxDesc column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode1(string|array<string> $ArtbCtaxCode1) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode1 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode1(string|array<string> $ArtbCtaxCode1) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode1 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode2(string|array<string> $ArtbCtaxCode2) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode2 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode2(string|array<string> $ArtbCtaxCode2) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode2 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode3(string|array<string> $ArtbCtaxCode3) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode3 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode3(string|array<string> $ArtbCtaxCode3) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode3 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode4(string|array<string> $ArtbCtaxCode4) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode4 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode4(string|array<string> $ArtbCtaxCode4) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode4 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode5(string|array<string> $ArtbCtaxCode5) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode5 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode5(string|array<string> $ArtbCtaxCode5) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode5 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode6(string|array<string> $ArtbCtaxCode6) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode6 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode6(string|array<string> $ArtbCtaxCode6) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode6 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode7(string|array<string> $ArtbCtaxCode7) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode7 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode7(string|array<string> $ArtbCtaxCode7) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode7 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode8(string|array<string> $ArtbCtaxCode8) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode8 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode8(string|array<string> $ArtbCtaxCode8) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode8 column
 * @method     ChildArCustTaxCode[]|Collection findByArtbctaxcode9(string|array<string> $ArtbCtaxCode9) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode9 column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByArtbctaxcode9(string|array<string> $ArtbCtaxCode9) Return ChildArCustTaxCode objects filtered by the ArtbCtaxCode9 column
 * @method     ChildArCustTaxCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCustTaxCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCustTaxCode objects filtered by the DateUpdtd column
 * @method     ChildArCustTaxCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCustTaxCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCustTaxCode objects filtered by the TimeUpdtd column
 * @method     ChildArCustTaxCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildArCustTaxCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArCustTaxCode> findByDummy(string|array<string> $dummy) Return ChildArCustTaxCode objects filtered by the dummy column
 *
 * @method     ChildArCustTaxCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArCustTaxCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArCustTaxCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCustTaxCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCustTaxCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCustTaxCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCustTaxCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArCustTaxCodeQuery) {
            return $criteria;
        }
        $query = new ChildArCustTaxCodeQuery();
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
     * @return ChildArCustTaxCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCustTaxCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCustTaxCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArCustTaxCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbCtaxCode, ArtbCtaxDesc, ArtbCtaxCode1, ArtbCtaxCode2, ArtbCtaxCode3, ArtbCtaxCode4, ArtbCtaxCode5, ArtbCtaxCode6, ArtbCtaxCode7, ArtbCtaxCode8, ArtbCtaxCode9, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_ctax WHERE ArtbCtaxCode = :p0';
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
            /** @var ChildArCustTaxCode $obj */
            $obj = new ChildArCustTaxCode();
            $obj->hydrate($row);
            ArCustTaxCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArCustTaxCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode('fooValue');   // WHERE ArtbCtaxCode = 'fooValue'
     * $query->filterByArtbctaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode LIKE '%fooValue%'
     * $query->filterByArtbctaxcode(['foo', 'bar']); // WHERE ArtbCtaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode($artbctaxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxdesc('fooValue');   // WHERE ArtbCtaxDesc = 'fooValue'
     * $query->filterByArtbctaxdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxDesc LIKE '%fooValue%'
     * $query->filterByArtbctaxdesc(['foo', 'bar']); // WHERE ArtbCtaxDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxdesc($artbctaxdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXDESC, $artbctaxdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode1('fooValue');   // WHERE ArtbCtaxCode1 = 'fooValue'
     * $query->filterByArtbctaxcode1('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode1 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode1(['foo', 'bar']); // WHERE ArtbCtaxCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode1($artbctaxcode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE1, $artbctaxcode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode2('fooValue');   // WHERE ArtbCtaxCode2 = 'fooValue'
     * $query->filterByArtbctaxcode2('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode2 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode2(['foo', 'bar']); // WHERE ArtbCtaxCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode2($artbctaxcode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE2, $artbctaxcode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode3('fooValue');   // WHERE ArtbCtaxCode3 = 'fooValue'
     * $query->filterByArtbctaxcode3('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode3 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode3(['foo', 'bar']); // WHERE ArtbCtaxCode3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode3($artbctaxcode3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE3, $artbctaxcode3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode4('fooValue');   // WHERE ArtbCtaxCode4 = 'fooValue'
     * $query->filterByArtbctaxcode4('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode4 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode4(['foo', 'bar']); // WHERE ArtbCtaxCode4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode4($artbctaxcode4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE4, $artbctaxcode4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode5('fooValue');   // WHERE ArtbCtaxCode5 = 'fooValue'
     * $query->filterByArtbctaxcode5('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode5 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode5(['foo', 'bar']); // WHERE ArtbCtaxCode5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode5($artbctaxcode5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE5, $artbctaxcode5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode6('fooValue');   // WHERE ArtbCtaxCode6 = 'fooValue'
     * $query->filterByArtbctaxcode6('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode6 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode6(['foo', 'bar']); // WHERE ArtbCtaxCode6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode6($artbctaxcode6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE6, $artbctaxcode6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode7('fooValue');   // WHERE ArtbCtaxCode7 = 'fooValue'
     * $query->filterByArtbctaxcode7('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode7 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode7(['foo', 'bar']); // WHERE ArtbCtaxCode7 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode7 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode7($artbctaxcode7 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode7)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE7, $artbctaxcode7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode8('fooValue');   // WHERE ArtbCtaxCode8 = 'fooValue'
     * $query->filterByArtbctaxcode8('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode8 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode8(['foo', 'bar']); // WHERE ArtbCtaxCode8 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode8 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode8($artbctaxcode8 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode8)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE8, $artbctaxcode8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode9('fooValue');   // WHERE ArtbCtaxCode9 = 'fooValue'
     * $query->filterByArtbctaxcode9('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode9 LIKE '%fooValue%'
     * $query->filterByArtbctaxcode9(['foo', 'bar']); // WHERE ArtbCtaxCode9 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode9 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode9($artbctaxcode9 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode9)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE9, $artbctaxcode9, $comparison);

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

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArCustTaxCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArCustTaxCode $arCustTaxCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arCustTaxCode = null)
    {
        if ($arCustTaxCode) {
            $this->addUsingAlias(ArCustTaxCodeTableMap::COL_ARTBCTAXCODE, $arCustTaxCode->getArtbctaxcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_ctax table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTaxCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCustTaxCodeTableMap::clearInstancePool();
            ArCustTaxCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTaxCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCustTaxCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCustTaxCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCustTaxCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
