<?php

namespace Base;

use \ConfigCi as ChildConfigCi;
use \ConfigCiQuery as ChildConfigCiQuery;
use \Exception;
use \PDO;
use Map\ConfigCiTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ci_config` table.
 *
 * @method     ChildConfigCiQuery orderByCitbconfkey($order = Criteria::ASC) Order by the CitbConfKey column
 * @method     ChildConfigCiQuery orderByCitbconfytdstrtmo($order = Criteria::ASC) Order by the CitbConfYtdStrtMo column
 * @method     ChildConfigCiQuery orderByCitbconfpaysort($order = Criteria::ASC) Order by the CitbConfPaySort column
 * @method     ChildConfigCiQuery orderByCitbconfshistby($order = Criteria::ASC) Order by the CitbConfShistBy column
 * @method     ChildConfigCiQuery orderByCitbconfshistdate($order = Criteria::ASC) Order by the CitbConfShistDate column
 * @method     ChildConfigCiQuery orderByCitbconfshistdays($order = Criteria::ASC) Order by the CitbConfShistDays column
 * @method     ChildConfigCiQuery orderByCitbconfshowzerohist($order = Criteria::ASC) Order by the CitbConfShowZeroHist column
 * @method     ChildConfigCiQuery orderByCitbconfshistnotes($order = Criteria::ASC) Order by the CitbConfShistNotes column
 * @method     ChildConfigCiQuery orderByCitbconfordernotes($order = Criteria::ASC) Order by the CitbConfOrderNotes column
 * @method     ChildConfigCiQuery orderByCitbconfquotenotes($order = Criteria::ASC) Order by the CitbConfQuoteNotes column
 * @method     ChildConfigCiQuery orderByCitbconfconsolget($order = Criteria::ASC) Order by the CitbConfConsolGet column
 * @method     ChildConfigCiQuery orderByCitbconfssndays($order = Criteria::ASC) Order by the CitbConfSsnDays column
 * @method     ChildConfigCiQuery orderBycitbconfshowinactive($order = Criteria::ASC) Order by the CitbConfShowInactive column
 * @method     ChildConfigCiQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigCiQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigCiQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigCiQuery groupByCitbconfkey() Group by the CitbConfKey column
 * @method     ChildConfigCiQuery groupByCitbconfytdstrtmo() Group by the CitbConfYtdStrtMo column
 * @method     ChildConfigCiQuery groupByCitbconfpaysort() Group by the CitbConfPaySort column
 * @method     ChildConfigCiQuery groupByCitbconfshistby() Group by the CitbConfShistBy column
 * @method     ChildConfigCiQuery groupByCitbconfshistdate() Group by the CitbConfShistDate column
 * @method     ChildConfigCiQuery groupByCitbconfshistdays() Group by the CitbConfShistDays column
 * @method     ChildConfigCiQuery groupByCitbconfshowzerohist() Group by the CitbConfShowZeroHist column
 * @method     ChildConfigCiQuery groupByCitbconfshistnotes() Group by the CitbConfShistNotes column
 * @method     ChildConfigCiQuery groupByCitbconfordernotes() Group by the CitbConfOrderNotes column
 * @method     ChildConfigCiQuery groupByCitbconfquotenotes() Group by the CitbConfQuoteNotes column
 * @method     ChildConfigCiQuery groupByCitbconfconsolget() Group by the CitbConfConsolGet column
 * @method     ChildConfigCiQuery groupByCitbconfssndays() Group by the CitbConfSsnDays column
 * @method     ChildConfigCiQuery groupBycitbconfshowinactive() Group by the CitbConfShowInactive column
 * @method     ChildConfigCiQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigCiQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigCiQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigCiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigCiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigCiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigCiQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigCiQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigCiQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigCi|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigCi matching the query
 * @method     ChildConfigCi findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigCi matching the query, or a new ChildConfigCi object populated from the query conditions when no match is found
 *
 * @method     ChildConfigCi|null findOneByCitbconfkey(int $CitbConfKey) Return the first ChildConfigCi filtered by the CitbConfKey column
 * @method     ChildConfigCi|null findOneByCitbconfytdstrtmo(int $CitbConfYtdStrtMo) Return the first ChildConfigCi filtered by the CitbConfYtdStrtMo column
 * @method     ChildConfigCi|null findOneByCitbconfpaysort(string $CitbConfPaySort) Return the first ChildConfigCi filtered by the CitbConfPaySort column
 * @method     ChildConfigCi|null findOneByCitbconfshistby(string $CitbConfShistBy) Return the first ChildConfigCi filtered by the CitbConfShistBy column
 * @method     ChildConfigCi|null findOneByCitbconfshistdate(string $CitbConfShistDate) Return the first ChildConfigCi filtered by the CitbConfShistDate column
 * @method     ChildConfigCi|null findOneByCitbconfshistdays(int $CitbConfShistDays) Return the first ChildConfigCi filtered by the CitbConfShistDays column
 * @method     ChildConfigCi|null findOneByCitbconfshowzerohist(string $CitbConfShowZeroHist) Return the first ChildConfigCi filtered by the CitbConfShowZeroHist column
 * @method     ChildConfigCi|null findOneByCitbconfshistnotes(string $CitbConfShistNotes) Return the first ChildConfigCi filtered by the CitbConfShistNotes column
 * @method     ChildConfigCi|null findOneByCitbconfordernotes(string $CitbConfOrderNotes) Return the first ChildConfigCi filtered by the CitbConfOrderNotes column
 * @method     ChildConfigCi|null findOneByCitbconfquotenotes(string $CitbConfQuoteNotes) Return the first ChildConfigCi filtered by the CitbConfQuoteNotes column
 * @method     ChildConfigCi|null findOneByCitbconfconsolget(string $CitbConfConsolGet) Return the first ChildConfigCi filtered by the CitbConfConsolGet column
 * @method     ChildConfigCi|null findOneByCitbconfssndays(int $CitbConfSsnDays) Return the first ChildConfigCi filtered by the CitbConfSsnDays column
 * @method     ChildConfigCi|null findOneBycitbconfshowinactive(string $CitbConfShowInactive) Return the first ChildConfigCi filtered by the CitbConfShowInactive column
 * @method     ChildConfigCi|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigCi filtered by the DateUpdtd column
 * @method     ChildConfigCi|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigCi filtered by the TimeUpdtd column
 * @method     ChildConfigCi|null findOneByDummy(string $dummy) Return the first ChildConfigCi filtered by the dummy column
 *
 * @method     ChildConfigCi requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigCi by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOne(?ConnectionInterface $con = null) Return the first ChildConfigCi matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigCi requireOneByCitbconfkey(int $CitbConfKey) Return the first ChildConfigCi filtered by the CitbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfytdstrtmo(int $CitbConfYtdStrtMo) Return the first ChildConfigCi filtered by the CitbConfYtdStrtMo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfpaysort(string $CitbConfPaySort) Return the first ChildConfigCi filtered by the CitbConfPaySort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfshistby(string $CitbConfShistBy) Return the first ChildConfigCi filtered by the CitbConfShistBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfshistdate(string $CitbConfShistDate) Return the first ChildConfigCi filtered by the CitbConfShistDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfshistdays(int $CitbConfShistDays) Return the first ChildConfigCi filtered by the CitbConfShistDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfshowzerohist(string $CitbConfShowZeroHist) Return the first ChildConfigCi filtered by the CitbConfShowZeroHist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfshistnotes(string $CitbConfShistNotes) Return the first ChildConfigCi filtered by the CitbConfShistNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfordernotes(string $CitbConfOrderNotes) Return the first ChildConfigCi filtered by the CitbConfOrderNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfquotenotes(string $CitbConfQuoteNotes) Return the first ChildConfigCi filtered by the CitbConfQuoteNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfconsolget(string $CitbConfConsolGet) Return the first ChildConfigCi filtered by the CitbConfConsolGet column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByCitbconfssndays(int $CitbConfSsnDays) Return the first ChildConfigCi filtered by the CitbConfSsnDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneBycitbconfshowinactive(string $CitbConfShowInactive) Return the first ChildConfigCi filtered by the CitbConfShowInactive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigCi filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigCi filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigCi requireOneByDummy(string $dummy) Return the first ChildConfigCi filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigCi[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigCi objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigCi> find(?ConnectionInterface $con = null) Return ChildConfigCi objects based on current ModelCriteria
 *
 * @method     ChildConfigCi[]|Collection findByCitbconfkey(int|array<int> $CitbConfKey) Return ChildConfigCi objects filtered by the CitbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfkey(int|array<int> $CitbConfKey) Return ChildConfigCi objects filtered by the CitbConfKey column
 * @method     ChildConfigCi[]|Collection findByCitbconfytdstrtmo(int|array<int> $CitbConfYtdStrtMo) Return ChildConfigCi objects filtered by the CitbConfYtdStrtMo column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfytdstrtmo(int|array<int> $CitbConfYtdStrtMo) Return ChildConfigCi objects filtered by the CitbConfYtdStrtMo column
 * @method     ChildConfigCi[]|Collection findByCitbconfpaysort(string|array<string> $CitbConfPaySort) Return ChildConfigCi objects filtered by the CitbConfPaySort column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfpaysort(string|array<string> $CitbConfPaySort) Return ChildConfigCi objects filtered by the CitbConfPaySort column
 * @method     ChildConfigCi[]|Collection findByCitbconfshistby(string|array<string> $CitbConfShistBy) Return ChildConfigCi objects filtered by the CitbConfShistBy column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfshistby(string|array<string> $CitbConfShistBy) Return ChildConfigCi objects filtered by the CitbConfShistBy column
 * @method     ChildConfigCi[]|Collection findByCitbconfshistdate(string|array<string> $CitbConfShistDate) Return ChildConfigCi objects filtered by the CitbConfShistDate column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfshistdate(string|array<string> $CitbConfShistDate) Return ChildConfigCi objects filtered by the CitbConfShistDate column
 * @method     ChildConfigCi[]|Collection findByCitbconfshistdays(int|array<int> $CitbConfShistDays) Return ChildConfigCi objects filtered by the CitbConfShistDays column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfshistdays(int|array<int> $CitbConfShistDays) Return ChildConfigCi objects filtered by the CitbConfShistDays column
 * @method     ChildConfigCi[]|Collection findByCitbconfshowzerohist(string|array<string> $CitbConfShowZeroHist) Return ChildConfigCi objects filtered by the CitbConfShowZeroHist column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfshowzerohist(string|array<string> $CitbConfShowZeroHist) Return ChildConfigCi objects filtered by the CitbConfShowZeroHist column
 * @method     ChildConfigCi[]|Collection findByCitbconfshistnotes(string|array<string> $CitbConfShistNotes) Return ChildConfigCi objects filtered by the CitbConfShistNotes column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfshistnotes(string|array<string> $CitbConfShistNotes) Return ChildConfigCi objects filtered by the CitbConfShistNotes column
 * @method     ChildConfigCi[]|Collection findByCitbconfordernotes(string|array<string> $CitbConfOrderNotes) Return ChildConfigCi objects filtered by the CitbConfOrderNotes column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfordernotes(string|array<string> $CitbConfOrderNotes) Return ChildConfigCi objects filtered by the CitbConfOrderNotes column
 * @method     ChildConfigCi[]|Collection findByCitbconfquotenotes(string|array<string> $CitbConfQuoteNotes) Return ChildConfigCi objects filtered by the CitbConfQuoteNotes column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfquotenotes(string|array<string> $CitbConfQuoteNotes) Return ChildConfigCi objects filtered by the CitbConfQuoteNotes column
 * @method     ChildConfigCi[]|Collection findByCitbconfconsolget(string|array<string> $CitbConfConsolGet) Return ChildConfigCi objects filtered by the CitbConfConsolGet column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfconsolget(string|array<string> $CitbConfConsolGet) Return ChildConfigCi objects filtered by the CitbConfConsolGet column
 * @method     ChildConfigCi[]|Collection findByCitbconfssndays(int|array<int> $CitbConfSsnDays) Return ChildConfigCi objects filtered by the CitbConfSsnDays column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByCitbconfssndays(int|array<int> $CitbConfSsnDays) Return ChildConfigCi objects filtered by the CitbConfSsnDays column
 * @method     ChildConfigCi[]|Collection findBycitbconfshowinactive(string|array<string> $CitbConfShowInactive) Return ChildConfigCi objects filtered by the CitbConfShowInactive column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findBycitbconfshowinactive(string|array<string> $CitbConfShowInactive) Return ChildConfigCi objects filtered by the CitbConfShowInactive column
 * @method     ChildConfigCi[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigCi objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigCi objects filtered by the DateUpdtd column
 * @method     ChildConfigCi[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigCi objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigCi objects filtered by the TimeUpdtd column
 * @method     ChildConfigCi[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigCi objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigCi> findByDummy(string|array<string> $dummy) Return ChildConfigCi objects filtered by the dummy column
 *
 * @method     ChildConfigCi[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigCi> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigCiQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigCiQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigCi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigCiQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigCiQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildConfigCiQuery) {
            return $criteria;
        }
        $query = new ChildConfigCiQuery();
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
     * @return ChildConfigCi|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigCiTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigCi A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT CitbConfKey, CitbConfYtdStrtMo, CitbConfPaySort, CitbConfShistBy, CitbConfShistDate, CitbConfShistDays, CitbConfShowZeroHist, CitbConfShistNotes, CitbConfOrderNotes, CitbConfQuoteNotes, CitbConfConsolGet, CitbConfSsnDays, CitbConfShowInactive, DateUpdtd, TimeUpdtd, dummy FROM ci_config WHERE CitbConfKey = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildConfigCi $obj */
            $obj = new ChildConfigCi();
            $obj->hydrate($row);
            ConfigCiTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigCi|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFKEY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the CitbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfkey(1234); // WHERE CitbConfKey = 1234
     * $query->filterByCitbconfkey(array(12, 34)); // WHERE CitbConfKey IN (12, 34)
     * $query->filterByCitbconfkey(array('min' => 12)); // WHERE CitbConfKey > 12
     * </code>
     *
     * @param mixed $citbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfkey($citbconfkey = null, ?string $comparison = null)
    {
        if (is_array($citbconfkey)) {
            $useMinMax = false;
            if (isset($citbconfkey['min'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFKEY, $citbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citbconfkey['max'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFKEY, $citbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFKEY, $citbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfYtdStrtMo column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfytdstrtmo(1234); // WHERE CitbConfYtdStrtMo = 1234
     * $query->filterByCitbconfytdstrtmo(array(12, 34)); // WHERE CitbConfYtdStrtMo IN (12, 34)
     * $query->filterByCitbconfytdstrtmo(array('min' => 12)); // WHERE CitbConfYtdStrtMo > 12
     * </code>
     *
     * @param mixed $citbconfytdstrtmo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfytdstrtmo($citbconfytdstrtmo = null, ?string $comparison = null)
    {
        if (is_array($citbconfytdstrtmo)) {
            $useMinMax = false;
            if (isset($citbconfytdstrtmo['min'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO, $citbconfytdstrtmo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citbconfytdstrtmo['max'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO, $citbconfytdstrtmo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFYTDSTRTMO, $citbconfytdstrtmo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfPaySort column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfpaysort('fooValue');   // WHERE CitbConfPaySort = 'fooValue'
     * $query->filterByCitbconfpaysort('%fooValue%', Criteria::LIKE); // WHERE CitbConfPaySort LIKE '%fooValue%'
     * $query->filterByCitbconfpaysort(['foo', 'bar']); // WHERE CitbConfPaySort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfpaysort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfpaysort($citbconfpaysort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfpaysort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFPAYSORT, $citbconfpaysort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfShistBy column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfshistby('fooValue');   // WHERE CitbConfShistBy = 'fooValue'
     * $query->filterByCitbconfshistby('%fooValue%', Criteria::LIKE); // WHERE CitbConfShistBy LIKE '%fooValue%'
     * $query->filterByCitbconfshistby(['foo', 'bar']); // WHERE CitbConfShistBy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfshistby The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfshistby($citbconfshistby = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfshistby)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHISTBY, $citbconfshistby, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfShistDate column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfshistdate('fooValue');   // WHERE CitbConfShistDate = 'fooValue'
     * $query->filterByCitbconfshistdate('%fooValue%', Criteria::LIKE); // WHERE CitbConfShistDate LIKE '%fooValue%'
     * $query->filterByCitbconfshistdate(['foo', 'bar']); // WHERE CitbConfShistDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfshistdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfshistdate($citbconfshistdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfshistdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHISTDATE, $citbconfshistdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfShistDays column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfshistdays(1234); // WHERE CitbConfShistDays = 1234
     * $query->filterByCitbconfshistdays(array(12, 34)); // WHERE CitbConfShistDays IN (12, 34)
     * $query->filterByCitbconfshistdays(array('min' => 12)); // WHERE CitbConfShistDays > 12
     * </code>
     *
     * @param mixed $citbconfshistdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfshistdays($citbconfshistdays = null, ?string $comparison = null)
    {
        if (is_array($citbconfshistdays)) {
            $useMinMax = false;
            if (isset($citbconfshistdays['min'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHISTDAYS, $citbconfshistdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citbconfshistdays['max'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHISTDAYS, $citbconfshistdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHISTDAYS, $citbconfshistdays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfShowZeroHist column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfshowzerohist('fooValue');   // WHERE CitbConfShowZeroHist = 'fooValue'
     * $query->filterByCitbconfshowzerohist('%fooValue%', Criteria::LIKE); // WHERE CitbConfShowZeroHist LIKE '%fooValue%'
     * $query->filterByCitbconfshowzerohist(['foo', 'bar']); // WHERE CitbConfShowZeroHist IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfshowzerohist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfshowzerohist($citbconfshowzerohist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfshowzerohist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHOWZEROHIST, $citbconfshowzerohist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfShistNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfshistnotes('fooValue');   // WHERE CitbConfShistNotes = 'fooValue'
     * $query->filterByCitbconfshistnotes('%fooValue%', Criteria::LIKE); // WHERE CitbConfShistNotes LIKE '%fooValue%'
     * $query->filterByCitbconfshistnotes(['foo', 'bar']); // WHERE CitbConfShistNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfshistnotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfshistnotes($citbconfshistnotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfshistnotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHISTNOTES, $citbconfshistnotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfOrderNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfordernotes('fooValue');   // WHERE CitbConfOrderNotes = 'fooValue'
     * $query->filterByCitbconfordernotes('%fooValue%', Criteria::LIKE); // WHERE CitbConfOrderNotes LIKE '%fooValue%'
     * $query->filterByCitbconfordernotes(['foo', 'bar']); // WHERE CitbConfOrderNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfordernotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfordernotes($citbconfordernotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfordernotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFORDERNOTES, $citbconfordernotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfQuoteNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfquotenotes('fooValue');   // WHERE CitbConfQuoteNotes = 'fooValue'
     * $query->filterByCitbconfquotenotes('%fooValue%', Criteria::LIKE); // WHERE CitbConfQuoteNotes LIKE '%fooValue%'
     * $query->filterByCitbconfquotenotes(['foo', 'bar']); // WHERE CitbConfQuoteNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfquotenotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfquotenotes($citbconfquotenotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfquotenotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFQUOTENOTES, $citbconfquotenotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfConsolGet column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfconsolget('fooValue');   // WHERE CitbConfConsolGet = 'fooValue'
     * $query->filterByCitbconfconsolget('%fooValue%', Criteria::LIKE); // WHERE CitbConfConsolGet LIKE '%fooValue%'
     * $query->filterByCitbconfconsolget(['foo', 'bar']); // WHERE CitbConfConsolGet IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfconsolget The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfconsolget($citbconfconsolget = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfconsolget)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFCONSOLGET, $citbconfconsolget, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfSsnDays column
     *
     * Example usage:
     * <code>
     * $query->filterByCitbconfssndays(1234); // WHERE CitbConfSsnDays = 1234
     * $query->filterByCitbconfssndays(array(12, 34)); // WHERE CitbConfSsnDays IN (12, 34)
     * $query->filterByCitbconfssndays(array('min' => 12)); // WHERE CitbConfSsnDays > 12
     * </code>
     *
     * @param mixed $citbconfssndays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCitbconfssndays($citbconfssndays = null, ?string $comparison = null)
    {
        if (is_array($citbconfssndays)) {
            $useMinMax = false;
            if (isset($citbconfssndays['min'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSSNDAYS, $citbconfssndays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citbconfssndays['max'])) {
                $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSSNDAYS, $citbconfssndays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSSNDAYS, $citbconfssndays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the CitbConfShowInactive column
     *
     * Example usage:
     * <code>
     * $query->filterBycitbconfshowinactive('fooValue');   // WHERE CitbConfShowInactive = 'fooValue'
     * $query->filterBycitbconfshowinactive('%fooValue%', Criteria::LIKE); // WHERE CitbConfShowInactive LIKE '%fooValue%'
     * $query->filterBycitbconfshowinactive(['foo', 'bar']); // WHERE CitbConfShowInactive IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $citbconfshowinactive The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBycitbconfshowinactive($citbconfshowinactive = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citbconfshowinactive)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFSHOWINACTIVE, $citbconfshowinactive, $comparison);

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

        $this->addUsingAlias(ConfigCiTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigCiTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigCiTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigCi $configCi Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($configCi = null)
    {
        if ($configCi) {
            $this->addUsingAlias(ConfigCiTableMap::COL_CITBCONFKEY, $configCi->getCitbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ci_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigCiTableMap::clearInstancePool();
            ConfigCiTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigCiTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigCiTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigCiTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigCiTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
