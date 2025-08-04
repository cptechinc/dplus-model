<?php

namespace Base;

use \ArTaxCode as ChildArTaxCode;
use \ArTaxCodeQuery as ChildArTaxCodeQuery;
use \Exception;
use \PDO;
use Map\ArTaxCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_cust_mtax` table.
 *
 * @method     ChildArTaxCodeQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxdesc($order = Criteria::ASC) Order by the ArtbMtaxDesc column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxpct($order = Criteria::ASC) Order by the ArtbMtaxPct column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxglacct($order = Criteria::ASC) Order by the ArtbMtaxGlAcct column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxnote1($order = Criteria::ASC) Order by the ArtbMtaxNote1 column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxnote2($order = Criteria::ASC) Order by the ArtbMtaxNote2 column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxnote3($order = Criteria::ASC) Order by the ArtbMtaxNote3 column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxnote4($order = Criteria::ASC) Order by the ArtbMtaxNote4 column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxmaxcost($order = Criteria::ASC) Order by the ArtbMtaxMaxCost column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxpercigar($order = Criteria::ASC) Order by the ArtbMtaxPerCigar column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxtaxtype($order = Criteria::ASC) Order by the ArtbMtaxTaxType column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxtaxfrt($order = Criteria::ASC) Order by the ArtbMtaxTaxFrt column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxfrttax($order = Criteria::ASC) Order by the ArtbMtaxFrtTax column
 * @method     ChildArTaxCodeQuery orderByArtbmtaxlimit($order = Criteria::ASC) Order by the ArtbMtaxLimit column
 * @method     ChildArTaxCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildArTaxCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildArTaxCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildArTaxCodeQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxdesc() Group by the ArtbMtaxDesc column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxpct() Group by the ArtbMtaxPct column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxglacct() Group by the ArtbMtaxGlAcct column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxnote1() Group by the ArtbMtaxNote1 column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxnote2() Group by the ArtbMtaxNote2 column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxnote3() Group by the ArtbMtaxNote3 column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxnote4() Group by the ArtbMtaxNote4 column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxmaxcost() Group by the ArtbMtaxMaxCost column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxpercigar() Group by the ArtbMtaxPerCigar column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxtaxtype() Group by the ArtbMtaxTaxType column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxtaxfrt() Group by the ArtbMtaxTaxFrt column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxfrttax() Group by the ArtbMtaxFrtTax column
 * @method     ChildArTaxCodeQuery groupByArtbmtaxlimit() Group by the ArtbMtaxLimit column
 * @method     ChildArTaxCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildArTaxCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildArTaxCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildArTaxCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArTaxCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArTaxCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArTaxCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArTaxCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArTaxCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArTaxCode|null findOne(?ConnectionInterface $con = null) Return the first ChildArTaxCode matching the query
 * @method     ChildArTaxCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildArTaxCode matching the query, or a new ChildArTaxCode object populated from the query conditions when no match is found
 *
 * @method     ChildArTaxCode|null findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildArTaxCode filtered by the ArtbMtaxCode column
 * @method     ChildArTaxCode|null findOneByArtbmtaxdesc(string $ArtbMtaxDesc) Return the first ChildArTaxCode filtered by the ArtbMtaxDesc column
 * @method     ChildArTaxCode|null findOneByArtbmtaxpct(string $ArtbMtaxPct) Return the first ChildArTaxCode filtered by the ArtbMtaxPct column
 * @method     ChildArTaxCode|null findOneByArtbmtaxglacct(string $ArtbMtaxGlAcct) Return the first ChildArTaxCode filtered by the ArtbMtaxGlAcct column
 * @method     ChildArTaxCode|null findOneByArtbmtaxnote1(string $ArtbMtaxNote1) Return the first ChildArTaxCode filtered by the ArtbMtaxNote1 column
 * @method     ChildArTaxCode|null findOneByArtbmtaxnote2(string $ArtbMtaxNote2) Return the first ChildArTaxCode filtered by the ArtbMtaxNote2 column
 * @method     ChildArTaxCode|null findOneByArtbmtaxnote3(string $ArtbMtaxNote3) Return the first ChildArTaxCode filtered by the ArtbMtaxNote3 column
 * @method     ChildArTaxCode|null findOneByArtbmtaxnote4(string $ArtbMtaxNote4) Return the first ChildArTaxCode filtered by the ArtbMtaxNote4 column
 * @method     ChildArTaxCode|null findOneByArtbmtaxmaxcost(string $ArtbMtaxMaxCost) Return the first ChildArTaxCode filtered by the ArtbMtaxMaxCost column
 * @method     ChildArTaxCode|null findOneByArtbmtaxpercigar(string $ArtbMtaxPerCigar) Return the first ChildArTaxCode filtered by the ArtbMtaxPerCigar column
 * @method     ChildArTaxCode|null findOneByArtbmtaxtaxtype(string $ArtbMtaxTaxType) Return the first ChildArTaxCode filtered by the ArtbMtaxTaxType column
 * @method     ChildArTaxCode|null findOneByArtbmtaxtaxfrt(string $ArtbMtaxTaxFrt) Return the first ChildArTaxCode filtered by the ArtbMtaxTaxFrt column
 * @method     ChildArTaxCode|null findOneByArtbmtaxfrttax(string $ArtbMtaxFrtTax) Return the first ChildArTaxCode filtered by the ArtbMtaxFrtTax column
 * @method     ChildArTaxCode|null findOneByArtbmtaxlimit(int $ArtbMtaxLimit) Return the first ChildArTaxCode filtered by the ArtbMtaxLimit column
 * @method     ChildArTaxCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildArTaxCode filtered by the DateUpdtd column
 * @method     ChildArTaxCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArTaxCode filtered by the TimeUpdtd column
 * @method     ChildArTaxCode|null findOneByDummy(string $dummy) Return the first ChildArTaxCode filtered by the dummy column
 *
 * @method     ChildArTaxCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildArTaxCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOne(?ConnectionInterface $con = null) Return the first ChildArTaxCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArTaxCode requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildArTaxCode filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxdesc(string $ArtbMtaxDesc) Return the first ChildArTaxCode filtered by the ArtbMtaxDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxpct(string $ArtbMtaxPct) Return the first ChildArTaxCode filtered by the ArtbMtaxPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxglacct(string $ArtbMtaxGlAcct) Return the first ChildArTaxCode filtered by the ArtbMtaxGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxnote1(string $ArtbMtaxNote1) Return the first ChildArTaxCode filtered by the ArtbMtaxNote1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxnote2(string $ArtbMtaxNote2) Return the first ChildArTaxCode filtered by the ArtbMtaxNote2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxnote3(string $ArtbMtaxNote3) Return the first ChildArTaxCode filtered by the ArtbMtaxNote3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxnote4(string $ArtbMtaxNote4) Return the first ChildArTaxCode filtered by the ArtbMtaxNote4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxmaxcost(string $ArtbMtaxMaxCost) Return the first ChildArTaxCode filtered by the ArtbMtaxMaxCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxpercigar(string $ArtbMtaxPerCigar) Return the first ChildArTaxCode filtered by the ArtbMtaxPerCigar column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxtaxtype(string $ArtbMtaxTaxType) Return the first ChildArTaxCode filtered by the ArtbMtaxTaxType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxtaxfrt(string $ArtbMtaxTaxFrt) Return the first ChildArTaxCode filtered by the ArtbMtaxTaxFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxfrttax(string $ArtbMtaxFrtTax) Return the first ChildArTaxCode filtered by the ArtbMtaxFrtTax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByArtbmtaxlimit(int $ArtbMtaxLimit) Return the first ChildArTaxCode filtered by the ArtbMtaxLimit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildArTaxCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildArTaxCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArTaxCode requireOneByDummy(string $dummy) Return the first ChildArTaxCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArTaxCode[]|Collection find(?ConnectionInterface $con = null) Return ChildArTaxCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildArTaxCode> find(?ConnectionInterface $con = null) Return ChildArTaxCode objects based on current ModelCriteria
 *
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxcode(string|array<string> $ArtbMtaxCode) Return ChildArTaxCode objects filtered by the ArtbMtaxCode column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxcode(string|array<string> $ArtbMtaxCode) Return ChildArTaxCode objects filtered by the ArtbMtaxCode column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxdesc(string|array<string> $ArtbMtaxDesc) Return ChildArTaxCode objects filtered by the ArtbMtaxDesc column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxdesc(string|array<string> $ArtbMtaxDesc) Return ChildArTaxCode objects filtered by the ArtbMtaxDesc column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxpct(string|array<string> $ArtbMtaxPct) Return ChildArTaxCode objects filtered by the ArtbMtaxPct column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxpct(string|array<string> $ArtbMtaxPct) Return ChildArTaxCode objects filtered by the ArtbMtaxPct column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxglacct(string|array<string> $ArtbMtaxGlAcct) Return ChildArTaxCode objects filtered by the ArtbMtaxGlAcct column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxglacct(string|array<string> $ArtbMtaxGlAcct) Return ChildArTaxCode objects filtered by the ArtbMtaxGlAcct column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxnote1(string|array<string> $ArtbMtaxNote1) Return ChildArTaxCode objects filtered by the ArtbMtaxNote1 column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxnote1(string|array<string> $ArtbMtaxNote1) Return ChildArTaxCode objects filtered by the ArtbMtaxNote1 column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxnote2(string|array<string> $ArtbMtaxNote2) Return ChildArTaxCode objects filtered by the ArtbMtaxNote2 column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxnote2(string|array<string> $ArtbMtaxNote2) Return ChildArTaxCode objects filtered by the ArtbMtaxNote2 column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxnote3(string|array<string> $ArtbMtaxNote3) Return ChildArTaxCode objects filtered by the ArtbMtaxNote3 column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxnote3(string|array<string> $ArtbMtaxNote3) Return ChildArTaxCode objects filtered by the ArtbMtaxNote3 column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxnote4(string|array<string> $ArtbMtaxNote4) Return ChildArTaxCode objects filtered by the ArtbMtaxNote4 column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxnote4(string|array<string> $ArtbMtaxNote4) Return ChildArTaxCode objects filtered by the ArtbMtaxNote4 column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxmaxcost(string|array<string> $ArtbMtaxMaxCost) Return ChildArTaxCode objects filtered by the ArtbMtaxMaxCost column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxmaxcost(string|array<string> $ArtbMtaxMaxCost) Return ChildArTaxCode objects filtered by the ArtbMtaxMaxCost column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxpercigar(string|array<string> $ArtbMtaxPerCigar) Return ChildArTaxCode objects filtered by the ArtbMtaxPerCigar column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxpercigar(string|array<string> $ArtbMtaxPerCigar) Return ChildArTaxCode objects filtered by the ArtbMtaxPerCigar column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxtaxtype(string|array<string> $ArtbMtaxTaxType) Return ChildArTaxCode objects filtered by the ArtbMtaxTaxType column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxtaxtype(string|array<string> $ArtbMtaxTaxType) Return ChildArTaxCode objects filtered by the ArtbMtaxTaxType column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxtaxfrt(string|array<string> $ArtbMtaxTaxFrt) Return ChildArTaxCode objects filtered by the ArtbMtaxTaxFrt column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxtaxfrt(string|array<string> $ArtbMtaxTaxFrt) Return ChildArTaxCode objects filtered by the ArtbMtaxTaxFrt column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxfrttax(string|array<string> $ArtbMtaxFrtTax) Return ChildArTaxCode objects filtered by the ArtbMtaxFrtTax column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxfrttax(string|array<string> $ArtbMtaxFrtTax) Return ChildArTaxCode objects filtered by the ArtbMtaxFrtTax column
 * @method     ChildArTaxCode[]|Collection findByArtbmtaxlimit(int|array<int> $ArtbMtaxLimit) Return ChildArTaxCode objects filtered by the ArtbMtaxLimit column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByArtbmtaxlimit(int|array<int> $ArtbMtaxLimit) Return ChildArTaxCode objects filtered by the ArtbMtaxLimit column
 * @method     ChildArTaxCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArTaxCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildArTaxCode objects filtered by the DateUpdtd column
 * @method     ChildArTaxCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArTaxCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildArTaxCode objects filtered by the TimeUpdtd column
 * @method     ChildArTaxCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildArTaxCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildArTaxCode> findByDummy(string|array<string> $dummy) Return ChildArTaxCode objects filtered by the dummy column
 *
 * @method     ChildArTaxCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildArTaxCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ArTaxCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArTaxCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ArTaxCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArTaxCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArTaxCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildArTaxCodeQuery) {
            return $criteria;
        }
        $query = new ChildArTaxCodeQuery();
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
     * @return ChildArTaxCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArTaxCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildArTaxCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArtbMtaxCode, ArtbMtaxDesc, ArtbMtaxPct, ArtbMtaxGlAcct, ArtbMtaxNote1, ArtbMtaxNote2, ArtbMtaxNote3, ArtbMtaxNote4, ArtbMtaxMaxCost, ArtbMtaxPerCigar, ArtbMtaxTaxType, ArtbMtaxTaxFrt, ArtbMtaxFrtTax, ArtbMtaxLimit, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_mtax WHERE ArtbMtaxCode = :p0';
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
            /** @var ChildArTaxCode $obj */
            $obj = new ChildArTaxCode();
            $obj->hydrate($row);
            ArTaxCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildArTaxCode|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxcode('fooValue');   // WHERE ArtbMtaxCode = 'fooValue'
     * $query->filterByArtbmtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxCode LIKE '%fooValue%'
     * $query->filterByArtbmtaxcode(['foo', 'bar']); // WHERE ArtbMtaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxdesc('fooValue');   // WHERE ArtbMtaxDesc = 'fooValue'
     * $query->filterByArtbmtaxdesc('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxDesc LIKE '%fooValue%'
     * $query->filterByArtbmtaxdesc(['foo', 'bar']); // WHERE ArtbMtaxDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxdesc($artbmtaxdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXDESC, $artbmtaxdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxpct(1234); // WHERE ArtbMtaxPct = 1234
     * $query->filterByArtbmtaxpct(array(12, 34)); // WHERE ArtbMtaxPct IN (12, 34)
     * $query->filterByArtbmtaxpct(array('min' => 12)); // WHERE ArtbMtaxPct > 12
     * </code>
     *
     * @param mixed $artbmtaxpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxpct($artbmtaxpct = null, ?string $comparison = null)
    {
        if (is_array($artbmtaxpct)) {
            $useMinMax = false;
            if (isset($artbmtaxpct['min'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXPCT, $artbmtaxpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbmtaxpct['max'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXPCT, $artbmtaxpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXPCT, $artbmtaxpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxglacct('fooValue');   // WHERE ArtbMtaxGlAcct = 'fooValue'
     * $query->filterByArtbmtaxglacct('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxGlAcct LIKE '%fooValue%'
     * $query->filterByArtbmtaxglacct(['foo', 'bar']); // WHERE ArtbMtaxGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxglacct($artbmtaxglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXGLACCT, $artbmtaxglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxNote1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxnote1('fooValue');   // WHERE ArtbMtaxNote1 = 'fooValue'
     * $query->filterByArtbmtaxnote1('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxNote1 LIKE '%fooValue%'
     * $query->filterByArtbmtaxnote1(['foo', 'bar']); // WHERE ArtbMtaxNote1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxnote1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxnote1($artbmtaxnote1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxnote1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXNOTE1, $artbmtaxnote1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxNote2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxnote2('fooValue');   // WHERE ArtbMtaxNote2 = 'fooValue'
     * $query->filterByArtbmtaxnote2('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxNote2 LIKE '%fooValue%'
     * $query->filterByArtbmtaxnote2(['foo', 'bar']); // WHERE ArtbMtaxNote2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxnote2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxnote2($artbmtaxnote2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxnote2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXNOTE2, $artbmtaxnote2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxNote3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxnote3('fooValue');   // WHERE ArtbMtaxNote3 = 'fooValue'
     * $query->filterByArtbmtaxnote3('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxNote3 LIKE '%fooValue%'
     * $query->filterByArtbmtaxnote3(['foo', 'bar']); // WHERE ArtbMtaxNote3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxnote3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxnote3($artbmtaxnote3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxnote3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXNOTE3, $artbmtaxnote3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxNote4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxnote4('fooValue');   // WHERE ArtbMtaxNote4 = 'fooValue'
     * $query->filterByArtbmtaxnote4('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxNote4 LIKE '%fooValue%'
     * $query->filterByArtbmtaxnote4(['foo', 'bar']); // WHERE ArtbMtaxNote4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxnote4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxnote4($artbmtaxnote4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxnote4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXNOTE4, $artbmtaxnote4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxMaxCost column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxmaxcost(1234); // WHERE ArtbMtaxMaxCost = 1234
     * $query->filterByArtbmtaxmaxcost(array(12, 34)); // WHERE ArtbMtaxMaxCost IN (12, 34)
     * $query->filterByArtbmtaxmaxcost(array('min' => 12)); // WHERE ArtbMtaxMaxCost > 12
     * </code>
     *
     * @param mixed $artbmtaxmaxcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxmaxcost($artbmtaxmaxcost = null, ?string $comparison = null)
    {
        if (is_array($artbmtaxmaxcost)) {
            $useMinMax = false;
            if (isset($artbmtaxmaxcost['min'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST, $artbmtaxmaxcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbmtaxmaxcost['max'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST, $artbmtaxmaxcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXMAXCOST, $artbmtaxmaxcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxPerCigar column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxpercigar(1234); // WHERE ArtbMtaxPerCigar = 1234
     * $query->filterByArtbmtaxpercigar(array(12, 34)); // WHERE ArtbMtaxPerCigar IN (12, 34)
     * $query->filterByArtbmtaxpercigar(array('min' => 12)); // WHERE ArtbMtaxPerCigar > 12
     * </code>
     *
     * @param mixed $artbmtaxpercigar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxpercigar($artbmtaxpercigar = null, ?string $comparison = null)
    {
        if (is_array($artbmtaxpercigar)) {
            $useMinMax = false;
            if (isset($artbmtaxpercigar['min'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR, $artbmtaxpercigar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbmtaxpercigar['max'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR, $artbmtaxpercigar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXPERCIGAR, $artbmtaxpercigar, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxTaxType column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxtaxtype('fooValue');   // WHERE ArtbMtaxTaxType = 'fooValue'
     * $query->filterByArtbmtaxtaxtype('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxTaxType LIKE '%fooValue%'
     * $query->filterByArtbmtaxtaxtype(['foo', 'bar']); // WHERE ArtbMtaxTaxType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxtaxtype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxtaxtype($artbmtaxtaxtype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxtaxtype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXTAXTYPE, $artbmtaxtaxtype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxTaxFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxtaxfrt('fooValue');   // WHERE ArtbMtaxTaxFrt = 'fooValue'
     * $query->filterByArtbmtaxtaxfrt('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxTaxFrt LIKE '%fooValue%'
     * $query->filterByArtbmtaxtaxfrt(['foo', 'bar']); // WHERE ArtbMtaxTaxFrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxtaxfrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxtaxfrt($artbmtaxtaxfrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxtaxfrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXTAXFRT, $artbmtaxtaxfrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxFrtTax column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxfrttax('fooValue');   // WHERE ArtbMtaxFrtTax = 'fooValue'
     * $query->filterByArtbmtaxfrttax('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxFrtTax LIKE '%fooValue%'
     * $query->filterByArtbmtaxfrttax(['foo', 'bar']); // WHERE ArtbMtaxFrtTax IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbmtaxfrttax The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxfrttax($artbmtaxfrttax = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxfrttax)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXFRTTAX, $artbmtaxfrttax, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbMtaxLimit column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxlimit(1234); // WHERE ArtbMtaxLimit = 1234
     * $query->filterByArtbmtaxlimit(array(12, 34)); // WHERE ArtbMtaxLimit IN (12, 34)
     * $query->filterByArtbmtaxlimit(array('min' => 12)); // WHERE ArtbMtaxLimit > 12
     * </code>
     *
     * @param mixed $artbmtaxlimit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbmtaxlimit($artbmtaxlimit = null, ?string $comparison = null)
    {
        if (is_array($artbmtaxlimit)) {
            $useMinMax = false;
            if (isset($artbmtaxlimit['min'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT, $artbmtaxlimit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artbmtaxlimit['max'])) {
                $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT, $artbmtaxlimit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXLIMIT, $artbmtaxlimit, $comparison);

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

        $this->addUsingAlias(ArTaxCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ArTaxCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ArTaxCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildArTaxCode $arTaxCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($arTaxCode = null)
    {
        if ($arTaxCode) {
            $this->addUsingAlias(ArTaxCodeTableMap::COL_ARTBMTAXCODE, $arTaxCode->getArtbmtaxcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_mtax table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArTaxCodeTableMap::clearInstancePool();
            ArTaxCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArTaxCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArTaxCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArTaxCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArTaxCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
