<?php

namespace Base;

use \ArCustTypeCode as ChildArCustTypeCode;
use \ArCustTypeCodeQuery as ChildArCustTypeCodeQuery;
use \Exception;
use \PDO;
use Map\ArCustTypeCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_type` table.
 *
 * @method     ChildArCustTypeCodeQuery orderByArtbtypecode($order = Criteria::ASC) Order by the ArtbTypeCode column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypdesc($order = Criteria::ASC) Order by the ArtbCtypDesc column
 * @method     ChildArCustTypeCodeQuery orderByArtbctyparacct($order = Criteria::ASC) Order by the ArtbCtypArAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypfrtacct($order = Criteria::ASC) Order by the ArtbCtypFrtAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypmiscacct($order = Criteria::ASC) Order by the ArtbCtypMiscAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypcashacct($order = Criteria::ASC) Order by the ArtbCtypCashAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypfincacct($order = Criteria::ASC) Order by the ArtbCtypFincAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypdiscacct($order = Criteria::ASC) Order by the ArtbCtypDiscAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypsaleacct($order = Criteria::ASC) Order by the ArtbCtypSaleAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypcogsacct($order = Criteria::ASC) Order by the ArtbCtypCogsAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypcredacct($order = Criteria::ASC) Order by the ArtbCtypCredAcct column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypmail($order = Criteria::ASC) Order by the ArtbCtypMail column
 * @method     ChildArCustTypeCodeQuery orderByArtbctypaprvneedemail($order = Criteria::ASC) Order by the ArtbCtypAprvNeedEmail column
 * @method     ChildArCustTypeCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArCustTypeCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArCustTypeCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArCustTypeCodeQuery groupByArtbtypecode() Group by the ArtbTypeCode column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypdesc() Group by the ArtbCtypDesc column
 * @method     ChildArCustTypeCodeQuery groupByArtbctyparacct() Group by the ArtbCtypArAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypfrtacct() Group by the ArtbCtypFrtAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypmiscacct() Group by the ArtbCtypMiscAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypcashacct() Group by the ArtbCtypCashAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypfincacct() Group by the ArtbCtypFincAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypdiscacct() Group by the ArtbCtypDiscAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypsaleacct() Group by the ArtbCtypSaleAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypcogsacct() Group by the ArtbCtypCogsAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypcredacct() Group by the ArtbCtypCredAcct column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypmail() Group by the ArtbCtypMail column
 * @method     ChildArCustTypeCodeQuery groupByArtbctypaprvneedemail() Group by the ArtbCtypAprvNeedEmail column
 * @method     ChildArCustTypeCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArCustTypeCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArCustTypeCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArCustTypeCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArCustTypeCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArCustTypeCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArCustTypeCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArCustTypeCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArCustTypeCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArCustTypeCode|null findOne(?ConnectionInterface $con = null) Return the first ChildArCustTypeCode matching the query
 * @method     ChildArCustTypeCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArCustTypeCode matching the query, or a new ChildArCustTypeCode object populated from the query conditions when no match is found
 *
 * @method     ChildArCustTypeCode|null findOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildArCustTypeCode filtered by the ArtbTypeCode column
 * @method     ChildArCustTypeCode|null findOneByArtbctypdesc(string $ArtbCtypDesc) Return the first ChildArCustTypeCode filtered by the ArtbCtypDesc column
 * @method     ChildArCustTypeCode|null findOneByArtbctyparacct(string $ArtbCtypArAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypArAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypfrtacct(string $ArtbCtypFrtAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypFrtAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypmiscacct(string $ArtbCtypMiscAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypMiscAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypcashacct(string $ArtbCtypCashAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypCashAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypfincacct(string $ArtbCtypFincAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypFincAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypdiscacct(string $ArtbCtypDiscAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypDiscAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypsaleacct(string $ArtbCtypSaleAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypSaleAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypcogsacct(string $ArtbCtypCogsAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypCogsAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypcredacct(string $ArtbCtypCredAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypCredAcct column
 * @method     ChildArCustTypeCode|null findOneByArtbctypmail(string $ArtbCtypMail) Return the first ChildArCustTypeCode filtered by the ArtbCtypMail column
 * @method     ChildArCustTypeCode|null findOneByArtbctypaprvneedemail(string $ArtbCtypAprvNeedEmail) Return the first ChildArCustTypeCode filtered by the ArtbCtypAprvNeedEmail column
 * @method     ChildArCustTypeCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArCustTypeCode filtered by the DateUpdtd column
 * @method     ChildArCustTypeCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCustTypeCode filtered by the TimeUpdtd column
 * @method     ChildArCustTypeCode|null findOneByDummy(string $dummy) Return the first ChildArCustTypeCode filtered by the dummy column
 *
 * @method     ChildArCustTypeCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildArCustTypeCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOne(?ConnectionInterface $con = null) Return the first ChildArCustTypeCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCustTypeCode requireOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildArCustTypeCode filtered by the ArtbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypdesc(string $ArtbCtypDesc) Return the first ChildArCustTypeCode filtered by the ArtbCtypDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctyparacct(string $ArtbCtypArAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypArAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypfrtacct(string $ArtbCtypFrtAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypFrtAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypmiscacct(string $ArtbCtypMiscAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypMiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypcashacct(string $ArtbCtypCashAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypCashAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypfincacct(string $ArtbCtypFincAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypFincAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypdiscacct(string $ArtbCtypDiscAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypDiscAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypsaleacct(string $ArtbCtypSaleAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypSaleAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypcogsacct(string $ArtbCtypCogsAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypCogsAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypcredacct(string $ArtbCtypCredAcct) Return the first ChildArCustTypeCode filtered by the ArtbCtypCredAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypmail(string $ArtbCtypMail) Return the first ChildArCustTypeCode filtered by the ArtbCtypMail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByArtbctypaprvneedemail(string $ArtbCtypAprvNeedEmail) Return the first ChildArCustTypeCode filtered by the ArtbCtypAprvNeedEmail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArCustTypeCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArCustTypeCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArCustTypeCode requireOneByDummy(string $dummy) Return the first ChildArCustTypeCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArCustTypeCode[]|Collection find(?ConnectionInterface $con = null) Return ChildArCustTypeCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> find(?ConnectionInterface $con = null) Return ChildArCustTypeCode objects based on current ModelCriteria
 *
 * @method     ChildArCustTypeCode[]|Collection findByArtbtypecode(string|array<string> $ArtbTypeCode) Return ChildArCustTypeCode objects filtered by the ArtbTypeCode column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbtypecode(string|array<string> $ArtbTypeCode) Return ChildArCustTypeCode objects filtered by the ArtbTypeCode column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypdesc(string|array<string> $ArtbCtypDesc) Return ChildArCustTypeCode objects filtered by the ArtbCtypDesc column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypdesc(string|array<string> $ArtbCtypDesc) Return ChildArCustTypeCode objects filtered by the ArtbCtypDesc column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctyparacct(string|array<string> $ArtbCtypArAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypArAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctyparacct(string|array<string> $ArtbCtypArAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypArAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypfrtacct(string|array<string> $ArtbCtypFrtAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypFrtAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypfrtacct(string|array<string> $ArtbCtypFrtAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypFrtAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypmiscacct(string|array<string> $ArtbCtypMiscAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypMiscAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypmiscacct(string|array<string> $ArtbCtypMiscAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypMiscAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypcashacct(string|array<string> $ArtbCtypCashAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypCashAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypcashacct(string|array<string> $ArtbCtypCashAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypCashAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypfincacct(string|array<string> $ArtbCtypFincAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypFincAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypfincacct(string|array<string> $ArtbCtypFincAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypFincAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypdiscacct(string|array<string> $ArtbCtypDiscAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypDiscAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypdiscacct(string|array<string> $ArtbCtypDiscAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypDiscAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypsaleacct(string|array<string> $ArtbCtypSaleAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypSaleAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypsaleacct(string|array<string> $ArtbCtypSaleAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypSaleAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypcogsacct(string|array<string> $ArtbCtypCogsAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypCogsAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypcogsacct(string|array<string> $ArtbCtypCogsAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypCogsAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypcredacct(string|array<string> $ArtbCtypCredAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypCredAcct column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypcredacct(string|array<string> $ArtbCtypCredAcct) Return ChildArCustTypeCode objects filtered by the ArtbCtypCredAcct column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypmail(string|array<string> $ArtbCtypMail) Return ChildArCustTypeCode objects filtered by the ArtbCtypMail column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypmail(string|array<string> $ArtbCtypMail) Return ChildArCustTypeCode objects filtered by the ArtbCtypMail column
 * @method     ChildArCustTypeCode[]|Collection findByArtbctypaprvneedemail(string|array<string> $ArtbCtypAprvNeedEmail) Return ChildArCustTypeCode objects filtered by the ArtbCtypAprvNeedEmail column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByArtbctypaprvneedemail(string|array<string> $ArtbCtypAprvNeedEmail) Return ChildArCustTypeCode objects filtered by the ArtbCtypAprvNeedEmail column
 * @method     ChildArCustTypeCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCustTypeCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArCustTypeCode objects filtered by the DateUpdtd column
 * @method     ChildArCustTypeCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCustTypeCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArCustTypeCode objects filtered by the TimeUpdtd column
 * @method     ChildArCustTypeCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildArCustTypeCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArCustTypeCode> findByDummy(string|array<string> $dummy) Return ChildArCustTypeCode objects filtered by the dummy column
 *
 * @method     ChildArCustTypeCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArCustTypeCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArCustTypeCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArCustTypeCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArCustTypeCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArCustTypeCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArCustTypeCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArCustTypeCodeQuery) {
            return $criteria;
        }
        $query = new ChildArCustTypeCodeQuery();
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
     * @return ChildArCustTypeCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArCustTypeCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArCustTypeCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArCustTypeCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbTypeCode, ArtbCtypDesc, ArtbCtypArAcct, ArtbCtypFrtAcct, ArtbCtypMiscAcct, ArtbCtypCashAcct, ArtbCtypFincAcct, ArtbCtypDiscAcct, ArtbCtypSaleAcct, ArtbCtypCogsAcct, ArtbCtypCredAcct, ArtbCtypMail, ArtbCtypAprvNeedEmail, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_type WHERE ArtbTypeCode = :p0';
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
            /** @var ChildArCustTypeCode $obj */
            $obj = new ChildArCustTypeCode();
            $obj->hydrate($row);
            ArCustTypeCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArCustTypeCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBTYPECODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBTYPECODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtypecode('fooValue');   // WHERE ArtbTypeCode = 'fooValue'
     * $query->filterByArtbtypecode('%fooValue%', Criteria::LIKE); // WHERE ArtbTypeCode LIKE '%fooValue%'
     * $query->filterByArtbtypecode(['foo', 'bar']); // WHERE ArtbTypeCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbtypecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbtypecode($artbtypecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBTYPECODE, $artbtypecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypdesc('fooValue');   // WHERE ArtbCtypDesc = 'fooValue'
     * $query->filterByArtbctypdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypDesc LIKE '%fooValue%'
     * $query->filterByArtbctypdesc(['foo', 'bar']); // WHERE ArtbCtypDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypdesc($artbctypdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPDESC, $artbctypdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypArAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctyparacct('fooValue');   // WHERE ArtbCtypArAcct = 'fooValue'
     * $query->filterByArtbctyparacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypArAcct LIKE '%fooValue%'
     * $query->filterByArtbctyparacct(['foo', 'bar']); // WHERE ArtbCtypArAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctyparacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctyparacct($artbctyparacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctyparacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPARACCT, $artbctyparacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypFrtAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypfrtacct('fooValue');   // WHERE ArtbCtypFrtAcct = 'fooValue'
     * $query->filterByArtbctypfrtacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypFrtAcct LIKE '%fooValue%'
     * $query->filterByArtbctypfrtacct(['foo', 'bar']); // WHERE ArtbCtypFrtAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypfrtacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypfrtacct($artbctypfrtacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypfrtacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPFRTACCT, $artbctypfrtacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypMiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypmiscacct('fooValue');   // WHERE ArtbCtypMiscAcct = 'fooValue'
     * $query->filterByArtbctypmiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypMiscAcct LIKE '%fooValue%'
     * $query->filterByArtbctypmiscacct(['foo', 'bar']); // WHERE ArtbCtypMiscAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypmiscacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypmiscacct($artbctypmiscacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypmiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPMISCACCT, $artbctypmiscacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypCashAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypcashacct('fooValue');   // WHERE ArtbCtypCashAcct = 'fooValue'
     * $query->filterByArtbctypcashacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypCashAcct LIKE '%fooValue%'
     * $query->filterByArtbctypcashacct(['foo', 'bar']); // WHERE ArtbCtypCashAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypcashacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypcashacct($artbctypcashacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypcashacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPCASHACCT, $artbctypcashacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypFincAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypfincacct('fooValue');   // WHERE ArtbCtypFincAcct = 'fooValue'
     * $query->filterByArtbctypfincacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypFincAcct LIKE '%fooValue%'
     * $query->filterByArtbctypfincacct(['foo', 'bar']); // WHERE ArtbCtypFincAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypfincacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypfincacct($artbctypfincacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypfincacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPFINCACCT, $artbctypfincacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypDiscAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypdiscacct('fooValue');   // WHERE ArtbCtypDiscAcct = 'fooValue'
     * $query->filterByArtbctypdiscacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypDiscAcct LIKE '%fooValue%'
     * $query->filterByArtbctypdiscacct(['foo', 'bar']); // WHERE ArtbCtypDiscAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypdiscacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypdiscacct($artbctypdiscacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypdiscacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPDISCACCT, $artbctypdiscacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypSaleAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypsaleacct('fooValue');   // WHERE ArtbCtypSaleAcct = 'fooValue'
     * $query->filterByArtbctypsaleacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypSaleAcct LIKE '%fooValue%'
     * $query->filterByArtbctypsaleacct(['foo', 'bar']); // WHERE ArtbCtypSaleAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypsaleacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypsaleacct($artbctypsaleacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypsaleacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPSALEACCT, $artbctypsaleacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypCogsAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypcogsacct('fooValue');   // WHERE ArtbCtypCogsAcct = 'fooValue'
     * $query->filterByArtbctypcogsacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypCogsAcct LIKE '%fooValue%'
     * $query->filterByArtbctypcogsacct(['foo', 'bar']); // WHERE ArtbCtypCogsAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypcogsacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypcogsacct($artbctypcogsacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypcogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPCOGSACCT, $artbctypcogsacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypCredAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypcredacct('fooValue');   // WHERE ArtbCtypCredAcct = 'fooValue'
     * $query->filterByArtbctypcredacct('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypCredAcct LIKE '%fooValue%'
     * $query->filterByArtbctypcredacct(['foo', 'bar']); // WHERE ArtbCtypCredAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypcredacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypcredacct($artbctypcredacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPCREDACCT, $artbctypcredacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypMail column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypmail('fooValue');   // WHERE ArtbCtypMail = 'fooValue'
     * $query->filterByArtbctypmail('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypMail LIKE '%fooValue%'
     * $query->filterByArtbctypmail(['foo', 'bar']); // WHERE ArtbCtypMail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypmail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypmail($artbctypmail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypmail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPMAIL, $artbctypmail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtypAprvNeedEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctypaprvneedemail('fooValue');   // WHERE ArtbCtypAprvNeedEmail = 'fooValue'
     * $query->filterByArtbctypaprvneedemail('%fooValue%', Criteria::LIKE); // WHERE ArtbCtypAprvNeedEmail LIKE '%fooValue%'
     * $query->filterByArtbctypaprvneedemail(['foo', 'bar']); // WHERE ArtbCtypAprvNeedEmail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctypaprvneedemail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctypaprvneedemail($artbctypaprvneedemail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctypaprvneedemail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBCTYPAPRVNEEDEMAIL, $artbctypaprvneedemail, $comparison);

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

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArCustTypeCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArCustTypeCode $arCustTypeCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arCustTypeCode = null)
    {
        if ($arCustTypeCode) {
            $this->addUsingAlias(ArCustTypeCodeTableMap::COL_ARTBTYPECODE, $arCustTypeCode->getArtbtypecode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTypeCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArCustTypeCodeTableMap::clearInstancePool();
            ArCustTypeCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArCustTypeCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArCustTypeCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArCustTypeCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArCustTypeCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
