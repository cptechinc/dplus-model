<?php

namespace Base;

use \OptionsVi as ChildOptionsVi;
use \OptionsViQuery as ChildOptionsViQuery;
use \Exception;
use \PDO;
use Map\OptionsViTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `vi_options` table.
 *
 * @method     ChildOptionsViQuery orderByVitboptncode($order = Criteria::ASC) Order by the VitbOptnCode column
 * @method     ChildOptionsViQuery orderByVitboptngenavail($order = Criteria::ASC) Order by the VitbOptnGenAvail column
 * @method     ChildOptionsViQuery orderByVitboptnpayavail($order = Criteria::ASC) Order by the VitbOptnPayAvail column
 * @method     ChildOptionsViQuery orderByVitboptncostavail($order = Criteria::ASC) Order by the VitbOptnCostAvail column
 * @method     ChildOptionsViQuery orderByVitboptnpoavail($order = Criteria::ASC) Order by the VitbOptnPoAvail column
 * @method     ChildOptionsViQuery orderByVitboptnopenavail($order = Criteria::ASC) Order by the VitbOptnOpenAvail column
 * @method     ChildOptionsViQuery orderByVitboptnphavail($order = Criteria::ASC) Order by the VitbOptnPhAvail column
 * @method     ChildOptionsViQuery orderByVitboptnunrlavail($order = Criteria::ASC) Order by the VitbOptnUnrlAvail column
 * @method     ChildOptionsViQuery orderByVitboptnunivavail($order = Criteria::ASC) Order by the VitbOptnUnivAvail column
 * @method     ChildOptionsViQuery orderByVitboptnnoteavail($order = Criteria::ASC) Order by the VitbOptnNoteAvail column
 * @method     ChildOptionsViQuery orderByVitboptn24moavail($order = Criteria::ASC) Order by the VitbOptn24moAvail column
 * @method     ChildOptionsViQuery orderByVitboptnmisc1($order = Criteria::ASC) Order by the VitbOptnMisc1 column
 * @method     ChildOptionsViQuery orderByVitboptnmisc2($order = Criteria::ASC) Order by the VitbOptnMisc2 column
 * @method     ChildOptionsViQuery orderByVitboptnmisc3($order = Criteria::ASC) Order by the VitbOptnMisc3 column
 * @method     ChildOptionsViQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildOptionsViQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildOptionsViQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildOptionsViQuery groupByVitboptncode() Group by the VitbOptnCode column
 * @method     ChildOptionsViQuery groupByVitboptngenavail() Group by the VitbOptnGenAvail column
 * @method     ChildOptionsViQuery groupByVitboptnpayavail() Group by the VitbOptnPayAvail column
 * @method     ChildOptionsViQuery groupByVitboptncostavail() Group by the VitbOptnCostAvail column
 * @method     ChildOptionsViQuery groupByVitboptnpoavail() Group by the VitbOptnPoAvail column
 * @method     ChildOptionsViQuery groupByVitboptnopenavail() Group by the VitbOptnOpenAvail column
 * @method     ChildOptionsViQuery groupByVitboptnphavail() Group by the VitbOptnPhAvail column
 * @method     ChildOptionsViQuery groupByVitboptnunrlavail() Group by the VitbOptnUnrlAvail column
 * @method     ChildOptionsViQuery groupByVitboptnunivavail() Group by the VitbOptnUnivAvail column
 * @method     ChildOptionsViQuery groupByVitboptnnoteavail() Group by the VitbOptnNoteAvail column
 * @method     ChildOptionsViQuery groupByVitboptn24moavail() Group by the VitbOptn24moAvail column
 * @method     ChildOptionsViQuery groupByVitboptnmisc1() Group by the VitbOptnMisc1 column
 * @method     ChildOptionsViQuery groupByVitboptnmisc2() Group by the VitbOptnMisc2 column
 * @method     ChildOptionsViQuery groupByVitboptnmisc3() Group by the VitbOptnMisc3 column
 * @method     ChildOptionsViQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildOptionsViQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildOptionsViQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildOptionsViQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildOptionsViQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildOptionsViQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildOptionsViQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildOptionsViQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildOptionsViQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildOptionsVi|null findOne(?ConnectionInterface $con = null) Return the first ChildOptionsVi matching the query
 * @method     ChildOptionsVi findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildOptionsVi matching the query, or a new ChildOptionsVi object populated from the query conditions when no match is found
 *
 * @method     ChildOptionsVi|null findOneByVitboptncode(string $VitbOptnCode) Return the first ChildOptionsVi filtered by the VitbOptnCode column
 * @method     ChildOptionsVi|null findOneByVitboptngenavail(string $VitbOptnGenAvail) Return the first ChildOptionsVi filtered by the VitbOptnGenAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnpayavail(string $VitbOptnPayAvail) Return the first ChildOptionsVi filtered by the VitbOptnPayAvail column
 * @method     ChildOptionsVi|null findOneByVitboptncostavail(string $VitbOptnCostAvail) Return the first ChildOptionsVi filtered by the VitbOptnCostAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnpoavail(string $VitbOptnPoAvail) Return the first ChildOptionsVi filtered by the VitbOptnPoAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnopenavail(string $VitbOptnOpenAvail) Return the first ChildOptionsVi filtered by the VitbOptnOpenAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnphavail(string $VitbOptnPhAvail) Return the first ChildOptionsVi filtered by the VitbOptnPhAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnunrlavail(string $VitbOptnUnrlAvail) Return the first ChildOptionsVi filtered by the VitbOptnUnrlAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnunivavail(string $VitbOptnUnivAvail) Return the first ChildOptionsVi filtered by the VitbOptnUnivAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnnoteavail(string $VitbOptnNoteAvail) Return the first ChildOptionsVi filtered by the VitbOptnNoteAvail column
 * @method     ChildOptionsVi|null findOneByVitboptn24moavail(string $VitbOptn24moAvail) Return the first ChildOptionsVi filtered by the VitbOptn24moAvail column
 * @method     ChildOptionsVi|null findOneByVitboptnmisc1(string $VitbOptnMisc1) Return the first ChildOptionsVi filtered by the VitbOptnMisc1 column
 * @method     ChildOptionsVi|null findOneByVitboptnmisc2(string $VitbOptnMisc2) Return the first ChildOptionsVi filtered by the VitbOptnMisc2 column
 * @method     ChildOptionsVi|null findOneByVitboptnmisc3(string $VitbOptnMisc3) Return the first ChildOptionsVi filtered by the VitbOptnMisc3 column
 * @method     ChildOptionsVi|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsVi filtered by the DateUpdtd column
 * @method     ChildOptionsVi|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsVi filtered by the TimeUpdtd column
 * @method     ChildOptionsVi|null findOneByDummy(string $dummy) Return the first ChildOptionsVi filtered by the dummy column
 *
 * @method     ChildOptionsVi requirePk($key, ?ConnectionInterface $con = null) Return the ChildOptionsVi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOne(?ConnectionInterface $con = null) Return the first ChildOptionsVi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptionsVi requireOneByVitboptncode(string $VitbOptnCode) Return the first ChildOptionsVi filtered by the VitbOptnCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptngenavail(string $VitbOptnGenAvail) Return the first ChildOptionsVi filtered by the VitbOptnGenAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnpayavail(string $VitbOptnPayAvail) Return the first ChildOptionsVi filtered by the VitbOptnPayAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptncostavail(string $VitbOptnCostAvail) Return the first ChildOptionsVi filtered by the VitbOptnCostAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnpoavail(string $VitbOptnPoAvail) Return the first ChildOptionsVi filtered by the VitbOptnPoAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnopenavail(string $VitbOptnOpenAvail) Return the first ChildOptionsVi filtered by the VitbOptnOpenAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnphavail(string $VitbOptnPhAvail) Return the first ChildOptionsVi filtered by the VitbOptnPhAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnunrlavail(string $VitbOptnUnrlAvail) Return the first ChildOptionsVi filtered by the VitbOptnUnrlAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnunivavail(string $VitbOptnUnivAvail) Return the first ChildOptionsVi filtered by the VitbOptnUnivAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnnoteavail(string $VitbOptnNoteAvail) Return the first ChildOptionsVi filtered by the VitbOptnNoteAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptn24moavail(string $VitbOptn24moAvail) Return the first ChildOptionsVi filtered by the VitbOptn24moAvail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnmisc1(string $VitbOptnMisc1) Return the first ChildOptionsVi filtered by the VitbOptnMisc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnmisc2(string $VitbOptnMisc2) Return the first ChildOptionsVi filtered by the VitbOptnMisc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByVitboptnmisc3(string $VitbOptnMisc3) Return the first ChildOptionsVi filtered by the VitbOptnMisc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByDateupdtd(string $DateUpdtd) Return the first ChildOptionsVi filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildOptionsVi filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildOptionsVi requireOneByDummy(string $dummy) Return the first ChildOptionsVi filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildOptionsVi[]|Collection find(?ConnectionInterface $con = null) Return ChildOptionsVi objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildOptionsVi> find(?ConnectionInterface $con = null) Return ChildOptionsVi objects based on current ModelCriteria
 *
 * @method     ChildOptionsVi[]|Collection findByVitboptncode(string|array<string> $VitbOptnCode) Return ChildOptionsVi objects filtered by the VitbOptnCode column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptncode(string|array<string> $VitbOptnCode) Return ChildOptionsVi objects filtered by the VitbOptnCode column
 * @method     ChildOptionsVi[]|Collection findByVitboptngenavail(string|array<string> $VitbOptnGenAvail) Return ChildOptionsVi objects filtered by the VitbOptnGenAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptngenavail(string|array<string> $VitbOptnGenAvail) Return ChildOptionsVi objects filtered by the VitbOptnGenAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnpayavail(string|array<string> $VitbOptnPayAvail) Return ChildOptionsVi objects filtered by the VitbOptnPayAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnpayavail(string|array<string> $VitbOptnPayAvail) Return ChildOptionsVi objects filtered by the VitbOptnPayAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptncostavail(string|array<string> $VitbOptnCostAvail) Return ChildOptionsVi objects filtered by the VitbOptnCostAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptncostavail(string|array<string> $VitbOptnCostAvail) Return ChildOptionsVi objects filtered by the VitbOptnCostAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnpoavail(string|array<string> $VitbOptnPoAvail) Return ChildOptionsVi objects filtered by the VitbOptnPoAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnpoavail(string|array<string> $VitbOptnPoAvail) Return ChildOptionsVi objects filtered by the VitbOptnPoAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnopenavail(string|array<string> $VitbOptnOpenAvail) Return ChildOptionsVi objects filtered by the VitbOptnOpenAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnopenavail(string|array<string> $VitbOptnOpenAvail) Return ChildOptionsVi objects filtered by the VitbOptnOpenAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnphavail(string|array<string> $VitbOptnPhAvail) Return ChildOptionsVi objects filtered by the VitbOptnPhAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnphavail(string|array<string> $VitbOptnPhAvail) Return ChildOptionsVi objects filtered by the VitbOptnPhAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnunrlavail(string|array<string> $VitbOptnUnrlAvail) Return ChildOptionsVi objects filtered by the VitbOptnUnrlAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnunrlavail(string|array<string> $VitbOptnUnrlAvail) Return ChildOptionsVi objects filtered by the VitbOptnUnrlAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnunivavail(string|array<string> $VitbOptnUnivAvail) Return ChildOptionsVi objects filtered by the VitbOptnUnivAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnunivavail(string|array<string> $VitbOptnUnivAvail) Return ChildOptionsVi objects filtered by the VitbOptnUnivAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnnoteavail(string|array<string> $VitbOptnNoteAvail) Return ChildOptionsVi objects filtered by the VitbOptnNoteAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnnoteavail(string|array<string> $VitbOptnNoteAvail) Return ChildOptionsVi objects filtered by the VitbOptnNoteAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptn24moavail(string|array<string> $VitbOptn24moAvail) Return ChildOptionsVi objects filtered by the VitbOptn24moAvail column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptn24moavail(string|array<string> $VitbOptn24moAvail) Return ChildOptionsVi objects filtered by the VitbOptn24moAvail column
 * @method     ChildOptionsVi[]|Collection findByVitboptnmisc1(string|array<string> $VitbOptnMisc1) Return ChildOptionsVi objects filtered by the VitbOptnMisc1 column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnmisc1(string|array<string> $VitbOptnMisc1) Return ChildOptionsVi objects filtered by the VitbOptnMisc1 column
 * @method     ChildOptionsVi[]|Collection findByVitboptnmisc2(string|array<string> $VitbOptnMisc2) Return ChildOptionsVi objects filtered by the VitbOptnMisc2 column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnmisc2(string|array<string> $VitbOptnMisc2) Return ChildOptionsVi objects filtered by the VitbOptnMisc2 column
 * @method     ChildOptionsVi[]|Collection findByVitboptnmisc3(string|array<string> $VitbOptnMisc3) Return ChildOptionsVi objects filtered by the VitbOptnMisc3 column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByVitboptnmisc3(string|array<string> $VitbOptnMisc3) Return ChildOptionsVi objects filtered by the VitbOptnMisc3 column
 * @method     ChildOptionsVi[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildOptionsVi objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildOptionsVi objects filtered by the DateUpdtd column
 * @method     ChildOptionsVi[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildOptionsVi objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildOptionsVi objects filtered by the TimeUpdtd column
 * @method     ChildOptionsVi[]|Collection findByDummy(string|array<string> $dummy) Return ChildOptionsVi objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildOptionsVi> findByDummy(string|array<string> $dummy) Return ChildOptionsVi objects filtered by the dummy column
 *
 * @method     ChildOptionsVi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildOptionsVi> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class OptionsViQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\OptionsViQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\OptionsVi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildOptionsViQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildOptionsViQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildOptionsViQuery) {
            return $criteria;
        }
        $query = new ChildOptionsViQuery();
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
     * @return ChildOptionsVi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(OptionsViTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = OptionsViTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildOptionsVi A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT VitbOptnCode, VitbOptnGenAvail, VitbOptnPayAvail, VitbOptnCostAvail, VitbOptnPoAvail, VitbOptnOpenAvail, VitbOptnPhAvail, VitbOptnUnrlAvail, VitbOptnUnivAvail, VitbOptnNoteAvail, VitbOptn24moAvail, VitbOptnMisc1, VitbOptnMisc2, VitbOptnMisc3, DateUpdtd, TimeUpdtd, dummy FROM vi_options WHERE VitbOptnCode = :p0';
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
            /** @var ChildOptionsVi $obj */
            $obj = new ChildOptionsVi();
            $obj->hydrate($row);
            OptionsViTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildOptionsVi|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNCODE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNCODE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnCode column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptncode('fooValue');   // WHERE VitbOptnCode = 'fooValue'
     * $query->filterByVitboptncode('%fooValue%', Criteria::LIKE); // WHERE VitbOptnCode LIKE '%fooValue%'
     * $query->filterByVitboptncode(['foo', 'bar']); // WHERE VitbOptnCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptncode($vitboptncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNCODE, $vitboptncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnGenAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptngenavail('fooValue');   // WHERE VitbOptnGenAvail = 'fooValue'
     * $query->filterByVitboptngenavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnGenAvail LIKE '%fooValue%'
     * $query->filterByVitboptngenavail(['foo', 'bar']); // WHERE VitbOptnGenAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptngenavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptngenavail($vitboptngenavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptngenavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNGENAVAIL, $vitboptngenavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnPayAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnpayavail('fooValue');   // WHERE VitbOptnPayAvail = 'fooValue'
     * $query->filterByVitboptnpayavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnPayAvail LIKE '%fooValue%'
     * $query->filterByVitboptnpayavail(['foo', 'bar']); // WHERE VitbOptnPayAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnpayavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnpayavail($vitboptnpayavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnpayavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNPAYAVAIL, $vitboptnpayavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnCostAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptncostavail('fooValue');   // WHERE VitbOptnCostAvail = 'fooValue'
     * $query->filterByVitboptncostavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnCostAvail LIKE '%fooValue%'
     * $query->filterByVitboptncostavail(['foo', 'bar']); // WHERE VitbOptnCostAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptncostavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptncostavail($vitboptncostavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptncostavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNCOSTAVAIL, $vitboptncostavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnPoAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnpoavail('fooValue');   // WHERE VitbOptnPoAvail = 'fooValue'
     * $query->filterByVitboptnpoavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnPoAvail LIKE '%fooValue%'
     * $query->filterByVitboptnpoavail(['foo', 'bar']); // WHERE VitbOptnPoAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnpoavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnpoavail($vitboptnpoavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnpoavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNPOAVAIL, $vitboptnpoavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnOpenAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnopenavail('fooValue');   // WHERE VitbOptnOpenAvail = 'fooValue'
     * $query->filterByVitboptnopenavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnOpenAvail LIKE '%fooValue%'
     * $query->filterByVitboptnopenavail(['foo', 'bar']); // WHERE VitbOptnOpenAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnopenavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnopenavail($vitboptnopenavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnopenavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNOPENAVAIL, $vitboptnopenavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnPhAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnphavail('fooValue');   // WHERE VitbOptnPhAvail = 'fooValue'
     * $query->filterByVitboptnphavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnPhAvail LIKE '%fooValue%'
     * $query->filterByVitboptnphavail(['foo', 'bar']); // WHERE VitbOptnPhAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnphavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnphavail($vitboptnphavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnphavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNPHAVAIL, $vitboptnphavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnUnrlAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnunrlavail('fooValue');   // WHERE VitbOptnUnrlAvail = 'fooValue'
     * $query->filterByVitboptnunrlavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnUnrlAvail LIKE '%fooValue%'
     * $query->filterByVitboptnunrlavail(['foo', 'bar']); // WHERE VitbOptnUnrlAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnunrlavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnunrlavail($vitboptnunrlavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnunrlavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNUNRLAVAIL, $vitboptnunrlavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnUnivAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnunivavail('fooValue');   // WHERE VitbOptnUnivAvail = 'fooValue'
     * $query->filterByVitboptnunivavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnUnivAvail LIKE '%fooValue%'
     * $query->filterByVitboptnunivavail(['foo', 'bar']); // WHERE VitbOptnUnivAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnunivavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnunivavail($vitboptnunivavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnunivavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNUNIVAVAIL, $vitboptnunivavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnNoteAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnnoteavail('fooValue');   // WHERE VitbOptnNoteAvail = 'fooValue'
     * $query->filterByVitboptnnoteavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptnNoteAvail LIKE '%fooValue%'
     * $query->filterByVitboptnnoteavail(['foo', 'bar']); // WHERE VitbOptnNoteAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnnoteavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnnoteavail($vitboptnnoteavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnnoteavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNNOTEAVAIL, $vitboptnnoteavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptn24moAvail column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptn24moavail('fooValue');   // WHERE VitbOptn24moAvail = 'fooValue'
     * $query->filterByVitboptn24moavail('%fooValue%', Criteria::LIKE); // WHERE VitbOptn24moAvail LIKE '%fooValue%'
     * $query->filterByVitboptn24moavail(['foo', 'bar']); // WHERE VitbOptn24moAvail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptn24moavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptn24moavail($vitboptn24moavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptn24moavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTN24MOAVAIL, $vitboptn24moavail, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnMisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnmisc1('fooValue');   // WHERE VitbOptnMisc1 = 'fooValue'
     * $query->filterByVitboptnmisc1('%fooValue%', Criteria::LIKE); // WHERE VitbOptnMisc1 LIKE '%fooValue%'
     * $query->filterByVitboptnmisc1(['foo', 'bar']); // WHERE VitbOptnMisc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnmisc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnmisc1($vitboptnmisc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnmisc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNMISC1, $vitboptnmisc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnMisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnmisc2('fooValue');   // WHERE VitbOptnMisc2 = 'fooValue'
     * $query->filterByVitboptnmisc2('%fooValue%', Criteria::LIKE); // WHERE VitbOptnMisc2 LIKE '%fooValue%'
     * $query->filterByVitboptnmisc2(['foo', 'bar']); // WHERE VitbOptnMisc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnmisc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnmisc2($vitboptnmisc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnmisc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNMISC2, $vitboptnmisc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the VitbOptnMisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVitboptnmisc3('fooValue');   // WHERE VitbOptnMisc3 = 'fooValue'
     * $query->filterByVitboptnmisc3('%fooValue%', Criteria::LIKE); // WHERE VitbOptnMisc3 LIKE '%fooValue%'
     * $query->filterByVitboptnmisc3(['foo', 'bar']); // WHERE VitbOptnMisc3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $vitboptnmisc3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByVitboptnmisc3($vitboptnmisc3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vitboptnmisc3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNMISC3, $vitboptnmisc3, $comparison);

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

        $this->addUsingAlias(OptionsViTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(OptionsViTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(OptionsViTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildOptionsVi $optionsVi Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($optionsVi = null)
    {
        if ($optionsVi) {
            $this->addUsingAlias(OptionsViTableMap::COL_VITBOPTNCODE, $optionsVi->getVitboptncode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the vi_options table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsViTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OptionsViTableMap::clearInstancePool();
            OptionsViTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(OptionsViTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(OptionsViTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            OptionsViTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            OptionsViTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
